<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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

        $product = new Product();
        $product->category_id = 1;
        $product->name = '19 Süt Yemi';
        $product->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $product->name)));
        $product->image = '/images/products/19proteinli.png';
        $product->text = "Orta düzeyde süt verimli ineklerin beslenmesinde kullanılır. Zengin vitamin mineral bileşimi ve dengeli protein enerji yapısı ile hayvanlarınızın süt verimini ve süt yağını, genetik kabiliyeti oranında en üst düzeye çıkarır. Birim süt maliyetini düşürür. Maksimum verim sağlar. Doğum sonrası görülebilecek Rumen asidozu (işkembe asitliği) ve ketozis problemlerini engeller. Ayak ve tırnak hastalıkları ile meme hastalıkları riskini en aza indirir. İneklerinizin doğumdan sonra daha çabuk kızgınlık göstermesini ve kolay gebe kalmasını sağlar.";
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = 'Besi Yemi';
        $product->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $product->name)));
        $product->image = '/images/products/besiyemi.png';
        $product->text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = 'Buzagi';
        $product->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $product->name)));
        $product->image = '/images/products/buzagi.png';
        $product->text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = 'Gold';
        $product->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $product->name)));
        $product->image = '/images/products/gold.png';
        $product->text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = 'Pelet';
        $product->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $product->name)));
        $product->image = '/images/products/pelet.png';
        $product->text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = 'Sut Yemi';
        $product->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $product->name)));
        $product->image = '/images/products/sutyemi.png';
        $product->text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = 'Toklu';
        $product->slug = strtolower(str_replace(' ', '-', str_replace($tr, $en, $product->name)));
        $product->image = '/images/products/toklu.png';
        $product->text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $product->save();
    }
}
