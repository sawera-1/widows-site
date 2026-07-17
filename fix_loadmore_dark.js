const fs = require('fs');

const files = [
    { css: 'public/css/pages/staff-design.css',     cls: '.pw-staff-design' },
    { css: 'public/css/pages/staff-developer.css',  cls: '.pw-staff-developer' },
    { css: 'public/css/pages/staff-marketing.css',  cls: '.pw-staff-marketing' },
    { css: 'public/css/pages/staff-media.css',      cls: '.pw-staff-media' },
];

files.forEach(({ css, cls }) => {
    let content = fs.readFileSync(css, 'utf8');

    // Remove any trailing newlines so we append cleanly
    content = content.trimEnd();

    const override = `
/* ── Dark-theme Load More button fix ── */
[data-theme=dark] ${cls} .sd-split-btn-default{color:#fff!important}
[data-theme=dark] ${cls} .sd-split-btn-icon,[data-theme=dark] ${cls} .sd-split-btn-text{background:#ffffff;color:#111}
`;

    fs.writeFileSync(css, content + '\n' + override);
    console.log('Updated:', css);
});
