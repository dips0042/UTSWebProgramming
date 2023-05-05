<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('coffees')->insert([
            [
                'coffee_name' => 'Classic Latte',
                'coffee_image_url' => 'https://images.squaremeal.co.uk/cloud/article/9812/images/most-expensive-coffee-in-uk_23092020100448.jpg?w=1200&h=900',
                'coffee_price' => 24000,
                'coffee_category' => 'Latte',
            ],
            [
                'coffee_name' => 'Hot Aren Latte',
                'coffee_image_url' => 'https://i.pinimg.com/originals/20/87/3e/20873ec11cde405eabad52ddf6865f4d.jpg',
                'coffee_price' => 29000,
                'coffee_category' => 'Latte',
            ],
            [
                'coffee_name' => 'Double Iced Shaken Latte',
                'coffee_image_url' => 'https://tse1.mm.bing.net/th?id=OIP.UC8QyiCl1FN4LkLtczNW6wHaEK&pid=Api&P=0',
                'coffee_price' => 33000,
                'coffee_category' => 'Latte',
            ],
            [
                'coffee_name' => 'Hazelnut Latte Hot/Ice Small',
                'coffee_image_url' => 'https://hedihearts.com/wp-content/uploads/2021/03/Hazelnut-Milk-Latte-4-1024x683.jpg',
                'coffee_price' => 29000,
                'coffee_category' => 'Latte',
            ],

            [
                'coffee_name' => 'Hot\Ice Espresso',
                'coffee_image_url' => 'https://tse3.mm.bing.net/th?id=OIP.bHWSEahGGb35A3EBPpZNPwHaE8&pid=Api&P=0',
                'coffee_price' => 17000,
                'coffee_category' => 'Espresso',
            ],
            [
                'coffee_name' => 'Double Espresso',
                'coffee_image_url' => 'https://tse2.mm.bing.net/th?id=OIP.qiNwy_25aF1qzaUVfKvVFgHaE8&pid=Api&P=0',
                'coffee_price' => 21000,
                'coffee_category' => 'Espresso',
            ],
            [
                'coffee_name' => 'Espresso Frappucino',
                'coffee_image_url' => 'https://coffeeaffection.com/wp-content/uploads/2021/05/Chocolate-smootie-frappuccino_Blanscape_shutterstock-768x512.jpg',
                'coffee_price' => 35000,
                'coffee_category' => 'Espresso',
            ],
            [
                'coffee_name' => 'Double Shot Ice Shaken Espresso',
                'coffee_image_url' => 'https://tse1.mm.bing.net/th?id=OIP.aBXvXrPKYCYKdZJxfCycxQHaE8&pid=Api&P=0',
                'coffee_price' => 34000,
                'coffee_category' => 'Espresso',
            ],

            [
                'coffee_name' => 'Cold Brew Coffee',
                'coffee_image_url' => 'https://majalah.ottencoffee.co.id/wp-content/uploads/2015/09/landscape-1438012744-cold-brew-coffee.jpg',
                'coffee_price' => 29000,
                'coffee_category' => 'Brewed',
            ],
            [
                'coffee_name' => 'Vanilla Sweat Cream Cold Brew',
                'coffee_image_url' => 'https://thediymommy.com/wp-content/uploads/2016/08/DIY-Homemade-Cold-Brew-Coffee-Frappucino-2.jpg',
                'coffee_price' => 37000,
                'coffee_category' => 'Brewed',
            ],

            [
                'coffee_name' => 'Hot Caramel Praline Macchiato',
                'coffee_image_url' => 'https://tse2.mm.bing.net/th?id=OIP.PHpR3m9JPEyYuxI-KTq30wHaFC&pid=Api&P=0',
                'coffee_price' => 33000,
                'coffee_category' => 'Signature',
            ],
            [
                'coffee_name' => 'Manuka Americano',
                'coffee_image_url' => 'https://tse1.mm.bing.net/th?id=OIP.-a-UorKEa1_OnZkfX6P4GAHaE8&pid=Api&P=0',
                'coffee_price' => 29000,
                'coffee_category' => 'Signature',
            ],
            [
                'coffee_name' => 'Iced Butterscotch Sea Salt Latte',
                'coffee_image_url' => 'https://tse1.mm.bing.net/th?id=OIP._-Qw221W_nezxB0_2foUOgHaE3&pid=Api&P=0',
                'coffee_price' => 29000,
                'coffee_category' => 'Signature',
            ],
        ]);
    }
}
