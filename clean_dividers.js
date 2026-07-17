const fs = require('fs');

let bladePath = 'resources/views/pages/staff/index.blade.php';
let blade = fs.readFileSync(bladePath, 'utf8');

// Remove all inline styles from section-divider to ensure it uses the default left-aligned CSS rules
blade = blade.replace(/<div class="section-divider"([^>]*)style="[^"]*"([^>]*)>/g, '<div class="section-divider"$1$2>');
blade = blade.replace(/<div class="section-divider"([^>]*)style='[^']*'([^>]*)>/g, '<div class="section-divider"$1$2>');

fs.writeFileSync(bladePath, blade);
console.log('Cleaned inline styles from section-divider');
