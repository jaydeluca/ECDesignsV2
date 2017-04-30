<?php

use Illuminate\Database\Seeder;
use App\PortfolioItem;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = File::get('database/data/portfolio.json');
        $portfolioItems = json_decode($data);


        PortfolioItem::truncate();

        foreach($portfolioItems as $item) {
            PortfolioItem::create([
                'name' => $item->name,
                'thumbnail' => $item->thumbnail,
                'image' => $item->image,
                'description' => $item->description
            ]);

        }

    }
}
