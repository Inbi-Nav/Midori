<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([

            [
              "name"=> "Minimal Cat Incense Holder",
              "description"=> "Elegant minimalist incense holder featuring a small black cat figurine.",
              "price"=> 29.9,
              "stock"=> 25,
              "material"=> "ceramic",
              "color"=> "black",
              "image_url"=> "images/products/incense-holder.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Minimal Bamboo Cutlery Set",
              "description"=> "Reusable bamboo cutlery set for sustainable daily dining.",
              "price"=> 39.9,
              "stock"=> 20,
              "material"=> "bamboo",
              "color"=> "light wood brown",
              "image_url"=> "images/products/bamboo-cutlery-set-1.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Bamboo Bento Lunch Box",
              "description"=> "Minimalist bamboo bento box with compartments.",
              "price"=> 34.9,
              "stock"=> 18,
              "material"=> "bamboo",
              "color"=> "light wood brown",
              "image_url"=> "images/products/bento-1.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Lucky Cat Glass Water Bottle",
              "description"=> "Reusable glass bottle with lucky cat illustration.",
              "price"=> 24.9,
              "stock"=> 30,
              "material"=> "glass",
              "color"=> "transparent",
              "image_url"=> "images/products/bottle-water-1.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Minimal Japanese Style Napkin Set",
              "description"=> "Reusable fabric napkins with Japanese-style illustration.",
              "price"=> 21.9,
              "stock"=> 24,
              "material"=> "fabric",
              "color"=> "white and black",
              "image_url"=> "images/products/napkin-set-png.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Minimal Ceramic Plate Set",
              "description"=> "Ceramic plate set in neutral tones.",
              "price"=> 52.9,
              "stock"=> 14,
              "material"=> "ceramic",
              "color"=> "neutral tones",
              "image_url"=> "images/products/Plate-set-1.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Minimal Ceramic Plate Set – Earth Tones",
              "description"=> "Ceramic plates in earth tones.",
              "price"=> 54.9,
              "stock"=> 12,
              "material"=> "ceramic",
              "color"=> "earth tones",
              "image_url"=> "images/products/Plate-set-2.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Woven Storage Basket",
              "description"=> "Handwoven basket for everyday storage.",
              "price"=> 28.9,
              "stock"=> 20,
              "material"=> "woven fiber",
              "color"=> "light wood brown",
              "image_url"=> "images/products/storage-basket.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Japanese Wave Thermos Bottle",
              "description"=> "Thermos bottle with traditional wave illustration.",
              "price"=> 29.9,
              "stock"=> 22,
              "material"=> "stainless steel",
              "color"=> "off white and blue",
              "image_url"=> "images/products/thermos-bottle.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Bamboo Travel Cutlery Set",
              "description"=> "Reusable bamboo travel cutlery with fabric case.",
              "price"=> 22.9,
              "stock"=> 28,
              "material"=> "bamboo and fabric",
              "color"=> "light wood brown and green",
              "image_url"=> "images/products/wooden-cutlery.png",
              "category_id"=> 1
            ],
            
            [
              "name"=> "Bamboo Matcha Whisk (Chasen)",
              "description"=> "Traditional bamboo whisk for matcha preparation.",
              "price"=> 19.9,
              "stock"=> 40,
              "material"=> "bamboo",
              "color"=> "light wood brown",
              "image_url"=> "images/products/chasen-1.png",
              "category_id"=> 2
            ],
            [
              "name"=> "Matcha Utensil Set",
              "description"=> "Complete matcha preparation utensil set.",
              "price"=> 44.9,
              "stock"=> 22,
              "material"=> "bamboo and metal",
              "color"=> "light wood brown",
              "image_url"=> "images/products/matcha-utensil-set.png",
              "category_id"=> 2
            ],
            [
              "name"=> "Hand-Painted Ceramic Tea Bowl",
              "description"=> "Tea bowl with Japanese mountain illustration.",
              "price"=> 26.9,
              "stock"=> 18,
              "material"=> "ceramic",
              "color"=> "off white and blue",
              "image_url"=> "images/products/tea-pot.png",
              "category_id"=> 2
            ],
            [
              "name"=> "Japanese Ceramic Tea Set",
              "description"=> "Traditional ceramic teapot with matching cups.",
              "price"=> 79.9,
              "stock"=> 7,
              "material"=> "ceramic",
              "color"=> "dark green",
              "image_url"=> "images/products/tea-set-2.png",
              "category_id"=> 2
            ],
            
            [
              "name"=> "Rustic Ceramic Vase",
              "description"=> "Decorative rustic ceramic vase.",
              "price"=> 49.9,
              "stock"=> 12,
              "material"=> "ceramic",
              "color"=> "dark brown",
              "image_url"=> "images/products/decorative-vase.png",
              "category_id"=> 3
            ],
            [
              "name"=> "Wooden Desk Shelf Organizer",
              "description"=> "Three-tier wooden desk shelf.",
              "price"=> 59.9,
              "stock"=> 10,
              "material"=> "wood",
              "color"=> "wood brown",
              "image_url"=> "images/products/desk-organizer-2.png",
              "category_id"=> 3
            ],
            [
              "name"=> "Japanese Paper Lantern Set",
              "description"=> "Decorative Japanese-style paper lanterns.",
              "price"=> 64.9,
              "stock"=> 8,
              "material"=> "paper",
              "color"=> "multicolor",
              "image_url"=> "images/products/paper-lantern.png",
              "category_id"=> 3
            ],
            [
              "name"=> "Japanese Paper Lantern Set – Cherry Blossom",
              "description"=> "Paper lanterns with cherry blossom illustration.",
              "price"=> 72.9,
              "stock"=> 6,
              "material"=> "paper",
              "color"=> "white and red",
              "image_url"=> "images/products/paper-lantern-2.png",
              "category_id"=> 3
            ],
            [
              "name"=> "Japanese Calligraphy Table Lamp",
              "description"=> "Table lamp with Japanese calligraphy shade.",
              "price"=> 47.9,
              "stock"=> 9,
              "material"=> "wood and paper",
              "color"=> "light wood brown and off white",
              "image_url"=> "images/products/table-lamp.png",
              "category_id"=> 3
            ],
            [
              "name"=> "Cherry Blossom Ambient Table Lamp",
              "description"=> "Ambient lamp with cherry blossom artwork.",
              "price"=> 54.9,
              "stock"=> 11,
              "material"=> "glass and wood",
              "color"=> "pink and off white",
              "image_url"=> "images/products/table-lamp-2.png",
              "category_id"=> 3
            ],
            [
              "name"=> "Yin Yang Five Elements Wall Art",
              "description"=> "Decorative wall art featuring Yin Yang and elements.",
              "price"=> 69.9,
              "stock"=> 6,
              "material"=> "fabric",
              "color"=> "earth tones",
              "image_url"=> "images/products/wall-decoration-2.png",
              "category_id"=> 3
            ],
            [
              "name"=> "Japanese Landscape Wall Hanging",
              "description"=> "Textile wall hanging with Japanese landscape.",
              "price"=> 58.9,
              "stock"=> 9,
              "material"=> "fabric",
              "color"=> "soft pink and off white",
              "image_url"=> "images/products/wall-decoration.png",
              "category_id"=> 3
            ],
            
            [
              "name"=> "No-Face Desk Organizer",
              "description"=> "Desk organizer inspired by No-Face from Studio Ghibli.",
              "price"=> 27.9,
              "stock"=> 15,
              "material"=> "ceramic",
              "color"=> "black and white",
              "image_url"=> "images/products/desk.organizer.png",
              "category_id"=> 4
            ],
            [
              "name"=> "Soot Sprite Ceramic Mug",
              "description"=> "Ceramic mug with Soot Sprite design.",
              "price"=> 16.9,
              "stock"=> 35,
              "material"=> "ceramic",
              "color"=> "white",
              "image_url"=> "images/products/mug-1.png",
              "category_id"=> 4
            ],
            [
              "name"=> "Ghibli Inspired Planter Pot",
              "description"=> "Planter inspired by Ghibli character.",
              "price"=> 32.9,
              "stock"=> 14,
              "material"=> "ceramic",
              "color"=> "multicolor",
              "image_url"=> "images/products/Pot-1.png",
              "category_id"=> 4
            ],
            [
              "name"=> "Totoro Inspired Planter Set",
              "description"=> "Totoro-inspired planter pots set.",
              "price"=> 39.9,
              "stock"=> 16,
              "material"=> "ceramic",
              "color"=> "grey and beige",
              "image_url"=> "images/products/Pot-2.png",
              "category_id"=> 4
            ],
            [
              "name"=> "Studio Ghibli Figurine Set",
              "description"=> "Ghibli-inspired collectible figurines.",
              "price"=> 36.9,
              "stock"=> 17,
              "material"=> "resin",
              "color"=> "multicolor",
              "image_url"=> "images/products/toy-set.png",
              "category_id"=> 4
            ],
            [
              "name"=> "Totoro Mini Figurine Collection",
              "description"=> "Mini Totoro figurines collection.",
              "price"=> 42.9,
              "stock"=> 12,
              "material"=> "resin",
              "color"=> "multicolor",
              "image_url"=> "images/products/toy-set-2.png",
              "category_id"=> 4
            ],
            
            [
              "name"=> "Funko Pop! Gen Narumi",
              "description"=> "Official Funko Pop! Animation Gen Narumi.",
              "price"=> 14.9,
              "stock"=> 25,
              "material"=> "vinyl",
              "color"=> "light brown and black",
              "image_url"=> "images/products/funko-1.png",
              "category_id"=> 5
            ],
            
            [
              "name"=> "Bamboo Cutlery Set – Compact",
              "description"=> "Compact bamboo cutlery set for everyday meals.",
              "price"=> 36.9,
              "stock"=> 15,
              "material"=> "bamboo",
              "color"=> "light wood brown",
              "image_url"=> "images/products/bamboo-cutlery-set-2.png",
              "category_id"=> 1
            ],
            [
              "name"=> "Minimal Incense Holder – Ceramic",
              "description"=> "Minimal ceramic incense holder with modern design.",
              "price"=> 26.9,
              "stock"=> 18,
              "material"=> "ceramic",
              "color"=> "black",
              "image_url"=> "images/products/incense-holder-2.png",
              "category_id"=> 1
            ],          

            [
              "name"=> "Matcha Ceremonial Set",
              "description"=> "Complete ceremonial matcha set for traditional tea rituals.",
              "price"=> 89.9,
              "stock"=> 6,
              "material"=> "ceramic and bamboo",
              "color"=> "earth tones",
              "image_url"=> "images/products/matcha-ceremonial-set.png",
              "category_id"=> 2
            ],
            [
              "name"=> "Matcha Tea Set – Minimal",
              "description"=> "Minimal matcha tea set for everyday preparation.",
              "price"=> 49.9,
              "stock"=> 12,
              "material"=> "ceramic",
              "color"=> "light green",
              "image_url"=> "images/products/matcha-set-1.png",
              "category_id"=> 2
            ],
            [
              "name"=> "Matcha Tea Set – Dark",
              "description"=> "Dark ceramic matcha set with traditional finish.",
              "price"=> 54.9,
              "stock"=> 10,
              "material"=> "ceramic",
              "color"=> "dark green",
              "image_url"=> "images/products/matcha-set-2.png",
              "category_id"=> 2
            ],
            [
              "name"=> "Matcha Tea Set – Natural",
              "description"=> "Natural tone matcha set inspired by Japanese tea rooms.",
              "price"=> 52.9,
              "stock"=> 9,
              "material"=> "ceramic",
              "color"=> "beige",
              "image_url"=> "images/products/matcha-set-3.png",
              "category_id"=> 2
            ],          

            [
              "name"=> "Ghibli Inspired Plush Toy",
              "description"=> "Soft plush toy inspired by Studio Ghibli characters.",
              "price"=> 24.9,
              "stock"=> 20,
              "material"=> "fabric",
              "color"=> "black",
              "image_url"=> "images/products/ghibli-plushie.png",
              "category_id"=> 4
            ],
            [
              "name"=> "Ghibli Figurine Collection",
              "description"=> "Collection of Studio Ghibli inspired figurines.",
              "price"=> 59.9,
              "stock"=> 8,
              "material"=> "resin",
              "color"=> "multicolor",
              "image_url"=> "images/products/funko-collection.png",
              "category_id"=> 4
            ],          

            [
              "name"=> "Funko Pop! Anime Figure",
              "description"=> "Official Funko Pop! anime collectible figure.",
              "price"=> 14.9,
              "stock"=> 20,
              "material"=> "vinyl",
              "color"=> "multicolor",
              "image_url"=> "images/products/funko-2.png",
              "category_id"=> 5
            ],
            [
              "name"=> "Funko Pop! Anime Figure – Variant",
              "description"=> "Funko Pop! anime figure variant edition.",
              "price"=> 15.9,
              "stock"=> 18,
              "material"=> "vinyl",
              "color"=> "multicolor",
              "image_url"=> "images/products/funko-3.png",
              "category_id"=> 5
            ],
            [
              "name"=> "Funko Pop! Anime Figure – Special",
              "description"=> "Special edition Funko Pop! anime figure.",
              "price"=> 17.9,
              "stock"=> 12,
              "material"=> "vinyl",
              "color"=> "multicolor",
              "image_url"=> "images/products/funko-4.png",
              "category_id"=> 5
            ],          
        ]);
    }
}
