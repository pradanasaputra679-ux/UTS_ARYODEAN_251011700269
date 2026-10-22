<?php

namespace Database\Seeders;

use App\Models\Handmade;
use Illuminate\Database\Seeder;

class HandmadeSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name'=>'Tas Anyam Senja','artisan'=>'Maya Handcraft','price'=>185000,'material'=>'Serat Alam','image'=>'tas-anyam.svg','description'=>'Tas anyam bernuansa hangat yang dibuat dengan teliti dari serat alam. Cocok untuk menemani aktivitas harian, dari jalan santai hingga akhir pekan.'],
            ['name'=>'Vas Keramik Terra','artisan'=>'Ruang Tanah Studio','price'=>145000,'material'=>'Keramik','image'=>'vas-keramik.svg','description'=>'Vas keramik dengan siluet organik dan sentuhan akhir matte. Setiap lekuknya dibuat untuk menghadirkan karakter alami pada ruang favorit Anda.'],
            ['name'=>'Kalung Batu Bumi','artisan'=>'Akar Karya','price'=>95000,'material'=>'Batu Alam','image'=>'kalung-batu.svg','description'=>'Kalung handmade dengan detail batu alam pilihan dan rangkaian yang sederhana. Dirancang sebagai aksen kecil yang terasa personal.'],
            ['name'=>'Dompet Tenun Pagi','artisan'=>'Tenun Lestari','price'=>120000,'material'=>'Kain Tenun','image'=>'dompet-tenun.svg','description'=>'Dompet ringkas dari kain tenun bermotif khas dengan pengerjaan rapi. Membawa keindahan tradisi ke dalam benda yang digunakan setiap hari.'],
            ['name'=>'Lilin Aromaterapi Hening','artisan'=>'Nyala Atelier','price'=>78000,'material'=>'Lilin & Soy Wax','image'=>'lilin-aroma.svg','description'=>'Lilin aromaterapi dengan tampilan minimalis untuk menemani waktu istirahat. Dibuat dalam jumlah terbatas dengan perhatian pada detail.'],
            ['name'=>'Tempat Pensil Kayu','artisan'=>'KayuKita','price'=>68000,'material'=>'Kayu','image'=>'tempat-pensil.svg','description'=>'Tempat pensil dari kayu dengan serat alami yang tetap terlihat. Membuat meja kerja terasa lebih hangat dan tertata.'],
            ['name'=>'Piring Sajian Pesisir','artisan'=>'Ruang Tanah Studio','price'=>110000,'material'=>'Keramik','image'=>'piring-keramik.svg','description'=>'Piring sajian keramik buatan tangan dengan bentuk organik. Ideal untuk sajian kecil atau menjadi aksen dekorasi di meja.'],
            ['name'=>'Keranjang Rami Natural','artisan'=>'Maya Handcraft','price'=>99000,'material'=>'Serat Alam','image'=>'keranjang-rami.svg','description'=>'Keranjang serbaguna dari serat alam untuk membantu menata ruang. Tekstur naturalnya cocok untuk interior bergaya hangat dan sederhana.'],
            ['name'=>'Gantungan Kunci Anyam','artisan'=>'Akar Karya','price'=>35000,'material'=>'Serat Alam','image'=>'gantungan-kunci.svg','description'=>'Aksesori kecil yang dirangkai secara manual dengan warna earthy. Pilihan hadiah sederhana yang punya sentuhan personal.'],
        ];

        foreach ($products as $product) {
            Handmade::updateOrCreate(['name' => $product['name']], $product);
        }
    }
}
