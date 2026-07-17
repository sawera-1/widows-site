const fs = require('fs');
let blade = fs.readFileSync('resources/views/pages/staff/index.blade.php', 'utf8');

// Find all matches of section-badge and the following section-divider
let regex = /<div class="section-badge"[\s\S]*?<div class="section-divider"[^>]*><\/div>/g;
let matches = blade.match(regex);

if (matches) {
    matches.forEach((m, i) => {
        console.log(`\n--- Match ${i} ---`);
        console.log(m);
    });
}
