const fs = require('fs');
let css = fs.readFileSync('public/css/pages/staff.css', 'utf8');

// 1. Standardize Buttons
css = css.replace(/\.btn-primary\s*{[^}]+}/, `.btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 54px;
    padding: 0 32px;
    border-radius: 15px;
    border: 1.5px solid var(--th);
    cursor: pointer;
    text-decoration: none;
    font-family: Montserrat, sans-serif;
    font-weight: 600;
    font-size: 1.02rem;
    letter-spacing: .01em;
    background: var(--th);
    color: var(--bg);
    transition: background .3s ease, color .3s ease, border-color .3s ease, transform .3s ease;
    white-space: nowrap;
}`);
css = css.replace(/\.btn-primary:hover\s*{[^}]+}/, `.btn-primary:hover {
    background: var(--primary);
    color: #ffffff;
    border-color: var(--primary);
    transform: translateY(-2px);
}`);

css = css.replace(/\.px-cta-btn\s*{[^}]+}/, `.px-cta-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 54px;
    padding: 0 32px;
    border-radius: 15px;
    border: 1.5px solid var(--th);
    cursor: pointer;
    text-decoration: none;
    font-family: Montserrat, sans-serif;
    font-weight: 600;
    font-size: 1.02rem;
    letter-spacing: .01em;
    background: var(--th);
    color: var(--bg);
    transition: background .3s ease, color .3s ease, border-color .3s ease, transform .3s ease;
    white-space: nowrap;
}`);
css = css.replace(/\.px-cta-btn:hover\s*{[^}]+}/, `.px-cta-btn:hover {
    background: var(--primary);
    color: #ffffff;
    border-color: var(--primary);
    transform: translateY(-2px);
}`);


// 2. Remove Green Hover Color from Cards
css = css.replace(/\.stat-card:hover\s*{[^}]+}/, `.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--sh2);
    border-color: var(--primary);
    background: var(--bg3);
}`);

css = css.replace(/var\(--px-feat-bg-hov\)/g, 'var(--bg3)');


// 3. FAQ Plus Button
css = css.replace(/\.faq-icon-wrap\s*{[^}]+}/, `.faq-icon-wrap {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: var(--bg2);
    border: 1px solid var(--br);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .3s ease;
    flex-shrink: 0;
}`);

css = css.replace(/\.faq-item:hover\s*\.faq-icon-wrap\s*{[^}]+}/, `.faq-item:hover .faq-icon-wrap {
    border-color: var(--primary);
}`);

css = css.replace(/\.faq-icon\s*{[^}]+}/, `.faq-icon {
    font-size: 1.4rem;
    font-weight: 400;
    color: var(--th);
    line-height: 1;
    transition: all .3s ease;
}`);

css = css.replace(/\.faq-open\s*\.faq-icon-wrap\s*{[^}]+}/, `.faq-open .faq-icon-wrap {
    background: var(--primary);
    border-color: var(--primary);
    transform: rotate(180deg);
}`);

css = css.replace(/\.faq-open\s*\.faq-icon\s*{[^}]+}/, `.faq-open .faq-icon {
    color: #ffffff;
    font-weight: 700;
}`);

if (!css.includes('.faq-item:hover .faq-icon')) {
    css += `\n.faq-item:hover .faq-icon { color: var(--primary); }\n`;
}

css = css.replace(/var\(--faq-item-hov-bg\)/g, 'transparent');

fs.writeFileSync('public/css/pages/staff.css', css);
console.log('staff.css updated!');
