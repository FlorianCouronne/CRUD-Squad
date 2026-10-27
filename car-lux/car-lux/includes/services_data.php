<?php
// Shared data (FR-V2). Member 4 can later replace these arrays with
// prepared-statement queries on the `services` table.
$services = [
    ['id' => 1, 'name' => 'Basic Car Wash',       'price' => 500,  'image' => 'basic.jpg',
     'desc' => 'Hand wash, wheel clean and dry. A quick refresh for daily drivers.',
     'features' => ['Advanced Exterior Wash', 'Deep Alloy Tire Cleaning', 'Crystal Clean Window Polishing']],
    ['id' => 2, 'name' => 'Paint Correction',     'price' => 700,  'image' => 'paint.jpg',
     'desc' => 'Removes light scratches and swirl marks to restore depth to the paint.',
     'features' => ['Precision Scratch Removal', 'Swirl Mark Elimination', 'Brilliant Paint Restoration']],
    ['id' => 3, 'name' => 'Ceramic Coating',      'price' => 1000, 'image' => 'ceramic.jpg',
     'desc' => 'A protective coating that repels water and dirt and keeps the shine longer.',
     'features' => ['Long-Lasting Multi-Year Shield', 'True Hydrophobic Finish', 'Industrial UV Block Technology']],
    ['id' => 4, 'name' => 'Deep Cleaning Interior', 'price' => 2200, 'image' => 'interior.jpg',
     'desc' => 'Full interior detail, including seats, carpets and trim.',
     'features' => ['Full Interior Cabin Detailing', 'Deep Leather Conditioning', 'Advanced Thermal Steam Cleaning']],
];
// Bundle packages shown on the home page (from the Figma design).
$packages = [
    ['name' => 'Essential Package', 'price' => 800,  'blurb' => 'Perfect upkeep therapy protecting vital elements from urban wear.',
     'items' => ['Basic Wash', 'Interior Vacuum'], 'popular' => false],
    ['name' => 'Premium Package',   'price' => 1500, 'blurb' => 'Intermediate renewal treatment bringing back that factory-glass finish.',
     'items' => ['Basic Wash', 'Paint Correction', 'Interior Clean'], 'popular' => false],
    ['name' => 'Ultimate Package',  'price' => 3800, 'blurb' => 'Comprehensive multi-stage absolute protection representing maximum protection.',
     'items' => ['Basic Car Wash', 'Paint Correction', 'Ceramic Coating', 'Deep Cleaning Interior'], 'popular' => true],
];
