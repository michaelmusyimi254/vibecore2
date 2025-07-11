<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Gym Equipment
            [
                'name' => 'Premium Dumbbell Set',
                'category' => 'equipment',
                'description' => 'Professional grade dumbbells for home and gym use',
                'price' => 25000,
                'currency' => 'KES',
                'stock' => 50,
                'vendor_id' => null,
                'images' => ['dumbbells1.jpg', 'dumbbells2.jpg'],
                'specifications' => ['Weight: 5-50kg', 'Material: Steel', 'Grip: Rubber'],
            ],
            [
                'name' => 'Yoga Mat Premium',
                'category' => 'equipment',
                'description' => 'High-quality yoga mat for all types of yoga',
                'price' => 3500,
                'currency' => 'KES',
                'stock' => 100,
                'vendor_id' => null,
                'images' => ['yoga-mat1.jpg', 'yoga-mat2.jpg'],
                'specifications' => ['Thickness: 6mm', 'Material: TPE', 'Size: 183x61cm'],
            ],
            [
                'name' => 'Boxing Gloves Professional',
                'category' => 'equipment',
                'description' => 'Professional boxing gloves for training and competition',
                'price' => 8000,
                'currency' => 'KES',
                'stock' => 30,
                'vendor_id' => null,
                'images' => ['boxing-gloves1.jpg', 'boxing-gloves2.jpg'],
                'specifications' => ['Weight: 12oz', 'Material: Leather', 'Padding: Multi-layer'],
            ],
            [
                'name' => 'Swimming Goggles',
                'category' => 'equipment',
                'description' => 'Anti-fog swimming goggles for all levels',
                'price' => 2500,
                'currency' => 'KES',
                'stock' => 75,
                'vendor_id' => null,
                'images' => ['swimming-goggles1.jpg', 'swimming-goggles2.jpg'],
                'specifications' => ['Anti-fog', 'UV Protection', 'Adjustable Strap'],
            ],
            [
                'name' => 'Resistance Bands Set',
                'category' => 'equipment',
                'description' => 'Complete set of resistance bands for strength training',
                'price' => 1500,
                'currency' => 'KES',
                'stock' => 200,
                'vendor_id' => null,
                'images' => ['resistance-bands1.jpg', 'resistance-bands2.jpg'],
                'specifications' => ['5 Different Resistances', 'Material: Natural Latex', 'Includes Storage Bag'],
            ],

            // Supplements
            [
                'name' => 'Whey Protein Isolate',
                'category' => 'supplements',
                'description' => 'High-quality whey protein isolate for muscle building',
                'price' => 4500,
                'currency' => 'KES',
                'stock' => 40,
                'vendor_id' => null,
                'images' => ['whey-protein1.jpg', 'whey-protein2.jpg'],
                'specifications' => ['Protein: 25g per serving', 'Flavor: Chocolate', 'Size: 1kg'],
            ],
            [
                'name' => 'BCAA Amino Acids',
                'category' => 'supplements',
                'description' => 'Branched-chain amino acids for muscle recovery',
                'price' => 3000,
                'currency' => 'KES',
                'stock' => 60,
                'vendor_id' => null,
                'images' => ['bcaa1.jpg', 'bcaa2.jpg'],
                'specifications' => ['BCAA Ratio: 2:1:1', 'Flavor: Fruit Punch', 'Size: 300g'],
            ],
            [
                'name' => 'Creatine Monohydrate',
                'category' => 'supplements',
                'description' => 'Pure creatine monohydrate for strength and power',
                'price' => 2000,
                'currency' => 'KES',
                'stock' => 80,
                'vendor_id' => null,
                'images' => ['creatine1.jpg', 'creatine2.jpg'],
                'specifications' => ['Creatine: 5g per serving', 'Size: 500g', 'Unflavored'],
            ],
            [
                'name' => 'Pre-Workout Formula',
                'category' => 'supplements',
                'description' => 'High-energy pre-workout for maximum performance',
                'price' => 3500,
                'currency' => 'KES',
                'stock' => 35,
                'vendor_id' => null,
                'images' => ['pre-workout1.jpg', 'pre-workout2.jpg'],
                'specifications' => ['Caffeine: 300mg', 'Flavor: Blue Raspberry', 'Size: 300g'],
            ],
            [
                'name' => 'Multivitamin Complex',
                'category' => 'supplements',
                'description' => 'Complete multivitamin for overall health and fitness',
                'price' => 1800,
                'currency' => 'KES',
                'stock' => 120,
                'vendor_id' => null,
                'images' => ['multivitamin1.jpg', 'multivitamin2.jpg'],
                'specifications' => ['60 Tablets', 'Complete Formula', 'Easy to Swallow'],
            ],

            // Fitness Apparel
            [
                'name' => 'Performance T-Shirt',
                'category' => 'apparel',
                'description' => 'Moisture-wicking performance t-shirt for workouts',
                'price' => 2500,
                'currency' => 'KES',
                'stock' => 150,
                'vendor_id' => null,
                'images' => ['tshirt1.jpg', 'tshirt2.jpg'],
                'specifications' => ['Material: Polyester', 'Moisture-wicking', 'Sizes: S-XXL'],
            ],
            [
                'name' => 'Athletic Shorts',
                'category' => 'apparel',
                'description' => 'Comfortable athletic shorts for training',
                'price' => 2000,
                'currency' => 'KES',
                'stock' => 100,
                'vendor_id' => null,
                'images' => ['shorts1.jpg', 'shorts2.jpg'],
                'specifications' => ['Material: Polyester', 'Pocket: Yes', 'Sizes: S-XXL'],
            ],
            [
                'name' => 'Sports Bra',
                'category' => 'apparel',
                'description' => 'High-support sports bra for active women',
                'price' => 3000,
                'currency' => 'KES',
                'stock' => 80,
                'vendor_id' => null,
                'images' => ['sports-bra1.jpg', 'sports-bra2.jpg'],
                'specifications' => ['Support: High', 'Material: Spandex', 'Sizes: XS-XL'],
            ],
            [
                'name' => 'Running Shoes',
                'category' => 'apparel',
                'description' => 'Professional running shoes for all terrains',
                'price' => 12000,
                'currency' => 'KES',
                'stock' => 25,
                'vendor_id' => null,
                'images' => ['running-shoes1.jpg', 'running-shoes2.jpg'],
                'specifications' => ['Cushioning: High', 'Weight: Light', 'Sizes: 6-12'],
            ],
            [
                'name' => 'Fitness Tracker',
                'category' => 'electronics',
                'description' => 'Smart fitness tracker with heart rate monitor',
                'price' => 15000,
                'currency' => 'KES',
                'stock' => 20,
                'vendor_id' => null,
                'images' => ['fitness-tracker1.jpg', 'fitness-tracker2.jpg'],
                'specifications' => ['Heart Rate Monitor', 'GPS', 'Water Resistant'],
            ],
        ];

        foreach ($products as $productData) {
            Product::create([
                'name' => $productData['name'],
                'category' => $productData['category'],
                'description' => $productData['description'],
                'price' => $productData['price'],
                'currency' => $productData['currency'],
                'stock' => $productData['stock'],
                'vendor_id' => $productData['vendor_id'],
                'images' => json_encode($productData['images']),
                'specifications' => json_encode($productData['specifications']),
            ]);
        }
    }
} 