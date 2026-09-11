<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\ArticleCategory;

class AdviceCentreSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data (disable FK checks for clean slate)
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Article::truncate();
        ArticleCategory::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create categories
        $energy   = ArticleCategory::create(['name' => 'Energy Efficiency', 'slug' => 'energy-efficiency']);
        $product  = ArticleCategory::create(['name' => 'Product Advice',    'slug' => 'product-advice']);
        $howTo    = ArticleCategory::create(['name' => 'How To Guides',     'slug' => 'how-to-guides']);
        $design   = ArticleCategory::create(['name' => 'Design Inspiration','slug' => 'design-inspiration']);

        // ============================================================
        // 8 ARTICLES — published in order newest → oldest
        // Articles 1–4  → topArticles (4 top cards, no images)
        // Article  5    → featuredArticle (is_featured = true)
        // Articles 6–8  → latest 3 cards (images + excerpt)
        // ============================================================

        // --- TOP 4 CARDS ---

        Article::create([
            'title'          => 'Flush Windows vs Casement Windows',
            'slug'           => 'flush-windows-vs-casement-windows',
            'excerpt'        => 'A comparison of flush and standard casement windows to help you decide which style is right for your home.',
            'content'        => '<h2>What Is a Flush Window?</h2><p>A flush casement window sits perfectly level with the outer frame, creating a seamless, flat surface. This style is inspired by traditional timber windows and has become increasingly popular in modern new-build and renovation projects.</p><h2>Standard Casement Windows</h2><p>Standard casement windows have a raised sash that sits proud of the outer frame. They are the most common window style in the UK and offer excellent ventilation and ease of cleaning.</p><h2>Which Should You Choose?</h2><p>If you want a more modern, minimalist look or are trying to match period-style architecture, flush casement windows are the ideal choice. For a more traditional appearance with maximum functionality, standard casement windows remain the most popular option.</p>',
            'category_id'    => $product->id,
            'status'         => 'published',
            'is_featured'    => false,
            'published_at'   => now()->subDays(2),
            'featured_image' => 'assets/about/window2.png',
        ]);

        Article::create([
            'title'          => 'Are There Standard UK Door Sizes?',
            'slug'           => 'are-there-standard-uk-door-sizes',
            'excerpt'        => 'Confused about door dimensions? Learn about standard UK door sizes and what to consider before ordering.',
            'content'        => '<h2>Standard UK External Door Sizes</h2><p>The most common standard external door size in the UK is 1981mm × 838mm (6\'6" × 2\'9"). However, many older properties have non-standard openings, so it is always worth measuring your existing doorway before ordering.</p><h2>Internal Door Sizes</h2><p>Standard internal door height is 1981mm (6\'6"), while widths typically range from 610mm to 838mm. The most common internal door width is 762mm (2\'6").</p><h2>What If My Opening Is Non-Standard?</h2><p>We offer made-to-measure doors that can be manufactured to any size. Our team can advise you on the best approach for your property.</p>',
            'category_id'    => $product->id,
            'status'         => 'published',
            'is_featured'    => false,
            'published_at'   => now()->subDays(4),
            'featured_image' => 'assets/about/d1.png',
        ]);

        Article::create([
            'title'          => 'Double vs Triple Glazing',
            'slug'           => 'double-vs-triple-glazing',
            'excerpt'        => 'Is triple glazing worth the extra cost? We compare double and triple glazing to help you make the right decision.',
            'content'        => '<h2>Double Glazing</h2><p>Double glazing consists of two panes of glass separated by a gap filled with argon gas. It is the standard glazing specification for UK windows and provides excellent thermal and acoustic insulation.</p><h2>Triple Glazing</h2><p>Triple glazing adds a third pane of glass and an additional air gap. This improves thermal performance further, with U-values as low as 0.6 W/m²K, compared to around 1.2 W/m²K for double glazing.</p><h2>Which Is Right for You?</h2><p>Triple glazing is most beneficial in very cold climates or for properties seeking Passivhaus certification. For most UK homes, high-quality double glazing with warm-edge spacer bars provides excellent performance and value.</p>',
            'category_id'    => $energy->id,
            'status'         => 'published',
            'is_featured'    => false,
            'published_at'   => now()->subDays(6),
            'featured_image' => 'assets/about/window3.png',
        ]);

        Article::create([
            'title'          => 'How to Choose the Right Windows for Your Home',
            'slug'           => 'how-to-choose-the-right-windows',
            'excerpt'        => 'With so many styles and options available, choosing the right windows can be daunting. Here is what to consider.',
            'content'        => '<h2>Consider Your Property Style</h2><p>The architectural style of your home should guide your window choice. Period properties typically suit sash or casement windows, while contemporary homes can take advantage of larger glazed areas and slim frames.</p><h2>Think About Functionality</h2><p>Consider how you will use the window. Do you need maximum ventilation? Easy cleaning access? Security? Different opening styles offer different benefits.</p><h2>Energy Performance</h2><p>Look for windows with a high Window Energy Rating (WER). A-rated or above windows will significantly reduce heat loss and lower your energy bills.</p><h2>Frame Material</h2><p>UPVC frames offer excellent durability and low maintenance with very good thermal performance. Aluminium frames allow slimmer profiles and larger glazed areas. Timber frames provide traditional aesthetics but require more maintenance.</p>',
            'category_id'    => $product->id,
            'status'         => 'published',
            'is_featured'    => false,
            'published_at'   => now()->subDays(8),
            'featured_image' => 'assets/about/window4.png',
        ]);

        // --- FEATURED ARTICLE (Middle wide card) ---

        Article::create([
            'title'          => 'What Is a U-Value?',
            'slug'           => 'what-is-a-u-value',
            'excerpt'        => 'Learn what a U-value means, how it measures heat loss, and why it matters when choosing energy-efficient windows and doors.',
            'content'        => '<h2>Understanding U-Values</h2><p>A U-value (also known as a thermal transmittance value) measures how effective a material is as an insulator. It is expressed in watts per square metre Kelvin (W/m²K). The lower the U-value, the better the insulation.</p><h2>Why U-Values Matter for Windows</h2><p>Windows are one of the biggest sources of heat loss in a home. A poorly insulated window can have a U-value of 5.0 W/m²K or higher, while a high-quality double-glazed unit can achieve 1.2 W/m²K and triple glazing can reach 0.6 W/m²K.</p><h2>What U-Value Should I Aim For?</h2><p>Building Regulations in England require a minimum whole-window U-value of 1.6 W/m²K for replacement windows. However, we recommend targeting 1.2 W/m²K or better for maximum energy savings.</p><h2>How to Improve U-Values</h2><p>The best ways to improve window U-values are: upgrading from single to double or triple glazing, using argon or krypton gas fills between panes, choosing warm-edge spacer bars, and selecting low-emissivity (Low-E) glass coatings.</p>',
            'category_id'    => $energy->id,
            'status'         => 'published',
            'is_featured'    => true,
            'published_at'   => now()->subDays(10),
            'featured_image' => 'assets/about/window1.png',
        ]);

        // --- BOTTOM 3 CARDS ---

        Article::create([
            'title'          => 'How to Measure Your Windows',
            'slug'           => 'how-to-measure-your-windows',
            'excerpt'        => 'Accurate measurements are essential when ordering new windows. Follow our step-by-step guide to measure correctly.',
            'content'        => '<h2>Tools You Will Need</h2><p>You will need a steel tape measure, a pencil, and paper to note your measurements. Always use a steel tape measure rather than a fabric one for accuracy.</p><h2>Measuring Width</h2><p>Measure the width of the opening in three places: at the top, middle, and bottom. Use the smallest measurement as your width, and deduct 10mm to allow for fitting tolerances.</p><h2>Measuring Height</h2><p>Measure the height in three places: left side, centre, and right side. Again, use the smallest measurement and deduct 10mm.</p><h2>Check for Square</h2><p>Measure diagonally from corner to corner in both directions. If the measurements differ by more than 10mm, the opening may not be square and you should seek advice before ordering.</p>',
            'category_id'    => $howTo->id,
            'status'         => 'published',
            'is_featured'    => false,
            'published_at'   => now()->subDays(14),
            'featured_image' => 'assets/about/window5.png',
        ]);

        Article::create([
            'title'          => 'How to Choose the Right Door for Your Home',
            'slug'           => 'how-to-choose-the-right-door',
            'excerpt'        => 'From composite to UPVC, French to bifold — choosing the right door for your home does not need to be complicated.',
            'content'        => '<h2>Types of External Doors</h2><p>The main types of external doors available are: composite doors, UPVC doors, aluminium doors, and timber doors. Each has different characteristics in terms of security, insulation, aesthetics, and maintenance requirements.</p><h2>Composite Doors</h2><p>Composite doors are the most popular choice for front doors in the UK. They combine multiple materials including a solid timber core, UPVC, glass reinforced plastic (GRP), and insulating foam. This makes them extremely strong, energy-efficient, and low maintenance.</p><h2>UPVC Doors</h2><p>UPVC doors offer excellent value and durability. They are weather-resistant, low maintenance, and available in a wide range of colours and styles. They provide good thermal and acoustic insulation.</p><h2>Security Considerations</h2><p>Look for doors that meet PAS 24 security standards and feature multi-point locking systems. All our doors meet or exceed current UK security requirements.</p>',
            'category_id'    => $product->id,
            'status'         => 'published',
            'is_featured'    => false,
            'published_at'   => now()->subDays(18),
            'featured_image' => 'assets/about/d2.png',
        ]);

        Article::create([
            'title'          => 'How to Maintain Your UPVC Windows and Doors',
            'slug'           => 'how-to-maintain-upvc-windows-and-doors',
            'excerpt'        => 'UPVC windows and doors are low maintenance, but a little regular care will keep them looking and performing their best for years.',
            'content'        => '<h2>Cleaning UPVC Frames</h2><p>Clean UPVC frames with a soft cloth and a mild detergent diluted in warm water. Avoid abrasive cleaners or solvents, which can scratch or discolour the surface. Clean frames twice a year as a minimum.</p><h2>Lubricating Moving Parts</h2><p>Hinges, handles, and locking mechanisms should be lubricated once a year using a silicone-based lubricant. Do not use oil-based lubricants, which can attract dirt and cause mechanisms to become stiff over time.</p><h2>Checking Seals and Gaskets</h2><p>Inspect the rubber seals and gaskets around your windows and doors annually. If they appear cracked, compressed, or have shrunk away from the frame, they should be replaced to maintain weatherproofing and thermal performance.</p><h2>Drainage Holes</h2><p>Window frames have small drainage holes at the bottom to allow condensation and rainwater to escape. Check these annually and clear them with a cocktail stick if they become blocked.</p>',
            'category_id'    => $howTo->id,
            'status'         => 'published',
            'is_featured'    => false,
            'published_at'   => now()->subDays(22),
            'featured_image' => 'assets/about/window1.png',
        ]);
    }
}
