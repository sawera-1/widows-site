<?php

// ─────────────────────────────────────────────────────────────────────────────
// Site data — ported verbatim from the original Next.js src/app/data/siteData.js
// Consumed by views via config('site.*'). Keeping it here (not the DB) keeps the
// site fully static and fast: no queries, everything renders from config cache.
// ─────────────────────────────────────────────────────────────────────────────

return [

    'nav_items' => [
        ['label' => 'Design & Price', 'href' => '/'],
        ['label' => 'Window/Door Info', 'href' => '/info'],
        ['label' => 'Advice Centre', 'href' => '/advice-centre'],
        ['label' => 'Track Order', 'href' => '/track-order'],
        ['label' => 'Payment & Delivery', 'href' => '/payment-and-delivery'],
        ['label' => 'Questions/FENSA', 'href' => '/faq'],
        ['label' => 'Installation', 'href' => '/installation'],
        ['label' => 'About Us', 'href' => '/about'],
        ['label' => 'Contact Us', 'href' => '/contact'],
    ],

    // Mobile slide-in menu tree (items with children expand a sub-level)
    'menu_tree' => [
        ['id' => null, 'label' => 'Design & Price', 'href' => '/'],
        ['id' => null, 'label' => 'Window/Door Info', 'href' => '/info'],
        ['id' => null, 'label' => 'Advice Centre', 'href' => '/advice-centre'],
        ['id' => null, 'label' => 'Track Order', 'href' => '/track-order'],
        ['id' => null, 'label' => 'Payment & Delivery', 'href' => '/payment-and-delivery'],
        ['id' => null, 'label' => 'Questions/FENSA', 'href' => '/faq'],
        ['id' => null, 'label' => 'Installation', 'href' => '/installation'],
        ['id' => null, 'label' => 'About Us', 'href' => '/about'],
        ['id' => null, 'label' => 'Contact Us', 'href' => '/contact'],
    ],

    // FAQ Page Data
    'faq' => [
        'Ordering & Delivery' => [
            [
                'question' => 'How do I measure a window/door?',
                'answer' => 'Please refer to our detailed measurement guides in the Advice Centre. We recommend measuring the width and height in three places (top, middle, bottom) and using the smallest measurement to ensure a proper fit.'
            ],
            [
                'question' => 'Where do you deliver to?',
                'answer' => 'We deliver across the Midlands and select surrounding counties. For a precise delivery confirmation, please enter your postcode during the quote process.'
            ],
            [
                'question' => 'How much does delivery cost?',
                'answer' => 'Delivery costs vary depending on your exact location and the size of your order. You will see an accurate delivery calculation during the checkout process.'
            ],
            [
                'question' => 'How long will it take for my order to arrive?',
                'answer' => 'Standard lead times are typically between 2 to 4 weeks depending on the product specifications and factory capacity. We will provide an estimated delivery date upon order confirmation.'
            ],
            [
                'question' => 'How will my items be delivered?',
                'answer' => 'Your items will be securely transported and delivered by our own fleet of specialized vehicles to ensure they arrive in pristine condition.'
            ],
            [
                'question' => 'What guarantees do you offer?',
                'answer' => 'We offer a comprehensive 10-year guarantee on all UPVC frames and a standard manufacturer guarantee on glass units and hardware.'
            ],
        ],
        'Ordering & Payment' => [
            [
                'question' => 'How do I place an order with you?',
                'answer' => 'You can configure your windows and doors using our online Design & Price tool. Once you are happy with the quote, you can proceed to checkout securely online.'
            ],
            [
                'question' => 'What payment types do you accept?',
                'answer' => 'We accept all major credit and debit cards, as well as secure bank transfers. Detailed payment options are provided at checkout.'
            ],
            [
                'question' => 'Do you offer an installation service?',
                'answer' => 'Yes! We offer a professional, FENSA-registered installation service across Leicestershire and surrounding areas.'
            ],
            [
                'question' => 'Can I have a window that opens inwards?',
                'answer' => 'Our standard casement windows open outwards. However, we do offer Tilt & Turn styles which open inwards. Please specify this requirement during configuration.'
            ],
            [
                'question' => 'Can I amend an existing order?',
                'answer' => 'Orders can generally be amended within 24 hours of placement before manufacturing begins. Please contact our team urgently if you need to make changes.'
            ],
            [
                'question' => 'Can I cancel my order?',
                'answer' => 'Because all products are made-to-measure to your exact specifications, cancellations are only possible if manufacturing has not yet commenced. Please refer to our full terms and conditions.'
            ],
            [
                'question' => 'Can I order or pay over the phone?',
                'answer' => 'Yes, if you prefer not to order online, you can call our sales team who will be happy to process your order and take a secure payment over the phone.'
            ],
            [
                'question' => 'What do I do if I have a problem with my purchase?',
                'answer' => 'Customer satisfaction is our priority. If you encounter any issues, please contact our support team immediately with your order number and photos of the problem, and we will resolve it swiftly.'
            ],
        ],
        'Product Information' => [
            [
                'question' => 'Which profile do you use?',
                'answer' => 'We use premium, industry-leading UPVC profiles designed for maximum energy efficiency, security, and durability.'
            ],
            [
                'question' => 'What is the U-value and specification of your glass?',
                'answer' => 'Our standard double-glazed units are A-rated for energy efficiency, offering excellent U-values to keep your home warm. Exact specifications depend on your chosen glass options.'
            ],
            [
                'question' => 'Do I need trickle vents?',
                'answer' => 'Building regulations often require trickle vents for adequate ventilation, especially in new builds or extensions. Our configurator will help guide you on this requirement.'
            ],
            [
                'question' => 'Can I get a FENSA certificate?',
                'answer' => 'Yes, if you choose our installation service, your installation will be fully FENSA certified and registered.'
            ],
            [
                'question' => 'How do I pay for extra items?',
                'answer' => 'If you require additional items after your initial order, please contact our team to process a supplementary payment.'
            ],
            [
                'question' => 'Can I arrange my own shipping for onward delivery?',
                'answer' => 'Yes, you can arrange to collect your items from our factory if you wish to manage your own onward shipping.'
            ],
        ],
    ],

];
