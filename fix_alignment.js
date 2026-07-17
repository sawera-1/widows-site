const fs = require('fs');

// 1. Update Blade Template
let bladePath = 'resources/views/pages/staff/index.blade.php';
let blade = fs.readFileSync(bladePath, 'utf8');

// The regex finds <div class="section-badge"... down to the closing </div> of section-divider
let regex = /(<div class="section-badge"[^>]*>[\s\S]*?<\/div>\s*<div class="section-divider"[^>]*><\/div>)/g;

blade = blade.replace(regex, (match) => {
    // Check if it's already wrapped (this script might have been run before)
    // Actually we'll just wrap it. We can clean up the indentation later if needed, 
    // but a simple wrap is fine.
    return `<div class="badge-group">\n${match}\n</div>`;
});

// Since the badge might have had inline style="justify-content:center", let's remove that
blade = blade.replace(/style="justify-content:center"/g, '');

fs.writeFileSync(bladePath, blade);


// 2. Update CSS
let cssPath = 'public/css/pages/staff.css';
let css = fs.readFileSync(cssPath, 'utf8');

// Add .badge-group class
if (!css.includes('.badge-group')) {
    css = css.replace(/\/\* --- Reusable Section Heading Component --- \*\//, `/* --- Reusable Section Heading Component --- */\n.badge-group {\n    display: inline-flex;\n    flex-direction: column;\n    align-items: flex-start;\n}`);
}

// Remove the .text-center overrides that were causing the bad alignment
css = css.replace(/\.text-center\s*\.section-badge\s*{[^}]+}/g, '');
css = css.replace(/\.text-center\s*\.section-divider\s*{[^}]+}/g, '');

fs.writeFileSync(cssPath, css);

console.log('Fixed alignment!');
