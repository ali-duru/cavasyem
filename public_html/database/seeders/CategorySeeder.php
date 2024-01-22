<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tr = ['Ü', 'ü', 'Ğ', 'ğ', 'Ş', 'ş', 'Ö', 'ö', 'Ç', 'ç', 'ı', 'İ'];
        $en = ['U', 'u', 'G', 'g', 'S', 's', 'O', 'o', 'C', 'c', 'i', 'I'];

        $category = new Category();
        $category->name = 'Büyükbaş Hayvan Yemleri';
        $category->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $category->name)));
        $category->thumbnail = '/images/categories/thumbnail/1.png';
        $category->slider = '/images/categories/slider/1.jpg';
        $category->description = 'fdghj fcgvhbjnk tcfgyvhubjinkm trcijnko tryvjknlm trcyvujkn';
        $category->save();

        $category = new Category();
        $category->name = 'Küçükbaş Hayvan Yemleri';
        $category->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $category->name)));
        $category->thumbnail = '/images/categories/thumbnail/2.png';
        $category->slider = '/images/categories/slider/2.jpg';
        $category->description = 'fdghj fcgvhbjnk tcfgyvhubjinkm trcijnko tryvjknlm trcyvujkn';
        $category->save();

        $category = new Category();
        $category->name = 'Kanatlı Hayvan Yemleri';
        $category->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $category->name)));
        $category->thumbnail = '/images/categories/thumbnail/3.png';
        $category->slider = '/images/categories/slider/3.jpg';
        $category->description = 'fdghj fcgvhbjnk tcfgyvhubjinkm trcijnko tryvjknlm trcyvujkn';
        $category->save();
    }
}
