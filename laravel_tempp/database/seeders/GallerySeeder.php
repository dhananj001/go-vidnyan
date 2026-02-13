<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'admin@govidnyan.org'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]
        );

        // Create categories
        $projects = GalleryCategory::updateOrCreate(
            ['slug' => 'projects'],
            ['name' => 'प्रकल्प', 'sort_order' => 1, 'is_active' => true]
        );

        $cows = GalleryCategory::updateOrCreate(
            ['slug' => 'cows'],
            ['name' => 'गायींचे संवर्धन', 'sort_order' => 2, 'is_active' => true]
        );

        $certificates = GalleryCategory::updateOrCreate(
            ['slug' => 'certificates'],
            ['name' => 'प्रमाणपत्रे', 'sort_order' => 3, 'is_active' => true]
        );

        $agriculture = GalleryCategory::updateOrCreate(
            ['slug' => 'agriculture'],
            ['name' => 'कृषी संबंधित', 'sort_order' => 4, 'is_active' => true]
        );

        $nirmalya = GalleryCategory::updateOrCreate(
            ['slug' => 'nirmalya'],
            ['name' => 'निर्माल्य प्रकल्प', 'sort_order' => 5, 'is_active' => true]
        );

        // Seed images — Projects
        $projectImages = [
            ['title' => '२०११', 'description' => 'संस्थेचे प्रारंभिक कार्य', 'image_path' => 'images/2011photo.png', 'alt_text' => '2011 संस्थेचे कार्य', 'sort_order' => 1],
            ['title' => '२०१२', 'description' => 'विकासाचे वर्ष', 'image_path' => 'images/2012photo.png', 'alt_text' => '2012 संस्थेचे कार्य', 'sort_order' => 2],
            ['title' => '२०१९ प्रकल्प', 'description' => 'शेती विकास कार्य', 'image_path' => 'images/2019photo001.png', 'alt_text' => '2019 प्रकल्प कार्य', 'sort_order' => 3],
            ['title' => '२०१९ कार्यक्रम', 'description' => 'संस्था उपक्रम', 'image_path' => 'images/2019photo002.png', 'alt_text' => '2019 संस्था कार्यक्रम', 'sort_order' => 4],
            ['title' => '२०१९ शेती', 'description' => 'कृषी विकास', 'image_path' => 'images/2019photo003.png', 'alt_text' => '2019 शेती प्रकल्प', 'sort_order' => 5],
            ['title' => 'CBOF प्रकल्प', 'description' => 'गो-आधारित शेती', 'image_path' => 'images/cbof001.png', 'alt_text' => 'CBOF प्रकल्प', 'sort_order' => 6],
            ['title' => 'CBOF प्रकल्प', 'description' => 'कार्य प्रक्रिया', 'image_path' => 'images/cbof002.png', 'alt_text' => 'CBOF प्रकल्प कार्य', 'sort_order' => 7],
            ['title' => 'संशोधन', 'description' => 'पंचगव्य संशोधन', 'image_path' => 'images/research.png', 'alt_text' => 'संशोधन कार्य', 'sort_order' => 8],
            ['title' => 'सामाजिक उपक्रम', 'description' => 'जनसहभाग आणि जागरूकता', 'image_path' => 'images/jan 2026/peopleactivity.jpeg', 'alt_text' => 'सामाजिक उपक्रम', 'sort_order' => 9],
            ['title' => 'पुरस्कार वितरण', 'description' => 'प्रकल्प वितरण', 'image_path' => 'images/jan 2026/pricedistribution002.jpeg', 'alt_text' => 'पुरस्कार वितरण', 'sort_order' => 10],
            ['title' => 'पुरस्कार वितरण समारंभ', 'description' => 'पुरस्कार वितरण', 'image_path' => 'images/jan 2026/pricedistributionceremony.jpeg', 'alt_text' => 'पुरस्कार वितरण समारंभ', 'sort_order' => 11],
        ];

        foreach ($projectImages as $img) {
            GalleryImage::updateOrCreate(
                ['image_path' => $img['image_path']],
                array_merge($img, ['category_id' => $projects->id, 'is_active' => true])
            );
        }

        // Cows
        $cowImages = [
            ['title' => 'भारतीय गाय', 'description' => 'देशी गायींचे संवर्धन', 'image_path' => 'images/indiancow.png', 'alt_text' => 'भारतीय गाय', 'sort_order' => 1],
            ['title' => 'भारतीय गाय', 'description' => 'गोपालन', 'image_path' => 'images/indiancow002.png', 'alt_text' => 'भारतीय गाय', 'sort_order' => 2],
            ['title' => 'गायींची यादी', 'description' => 'गोदान कार्यक्रम', 'image_path' => 'images/Indiancowlist.png', 'alt_text' => 'गायींची यादी', 'sort_order' => 3],
        ];

        foreach ($cowImages as $img) {
            GalleryImage::updateOrCreate(
                ['image_path' => $img['image_path']],
                array_merge($img, ['category_id' => $cows->id, 'is_active' => true])
            );
        }

        // Certificates
        $certImages = [
            ['title' => 'प्रमाणपत्र', 'description' => 'कायदेशीर मान्यता', 'image_path' => 'images/Legalcertificate001.png', 'alt_text' => 'कायदेशीर प्रमाणपत्र', 'sort_order' => 1],
            ['title' => 'प्रमाणपत्र', 'description' => 'संस्था नोंदणी', 'image_path' => 'images/LegalCertifacate002.png', 'alt_text' => 'कायदेशीर प्रमाणपत्र', 'sort_order' => 2],
            ['title' => 'पुरस्कार', 'description' => 'पुरस्कार वितरण कार्यक्रम', 'image_path' => 'images/jan 2026/Award.jpeg', 'alt_text' => 'पुरस्कार', 'sort_order' => 3],
        ];

        foreach ($certImages as $img) {
            GalleryImage::updateOrCreate(
                ['image_path' => $img['image_path']],
                array_merge($img, ['category_id' => $certificates->id, 'is_active' => true])
            );
        }

        // Agriculture
        $agriImages = [
            ['title' => 'कृषी प्रकल्प', 'description' => 'गोमूत्र आणि गोमय वापर', 'image_path' => 'images/agriculturerelated/IMG_20190708_182613220.jpg', 'alt_text' => 'कृषी प्रकल्प कार्य', 'sort_order' => 1],
            ['title' => 'नैसर्गिक शेती', 'description' => 'गो-आधारित कृषी पद्धती', 'image_path' => 'images/agriculturerelated/IMG_20190708_182640906_BURST000_COVER_TOP.jpg', 'alt_text' => 'नैसर्गिक शेती', 'sort_order' => 2],
            ['title' => 'शेती उपक्रम', 'description' => 'गो विज्ञानाचे कृषी अनुप्रयोग', 'image_path' => 'images/agriculturerelated/IMG_20190708_182653508.jpg', 'alt_text' => 'शेती उपक्रम', 'sort_order' => 3],
            ['title' => 'कृषी विकास', 'description' => 'नवीन कृषी तंत्रज्ञान', 'image_path' => 'images/agriculturerelated/IMG_20190708_183938709_HDR.jpg', 'alt_text' => 'कृषी विकास', 'sort_order' => 4],
            ['title' => 'गोमूत्र खत', 'description' => 'गोमूत्र खत विषयी चर्चा', 'image_path' => 'images/agriculturerelated/IMG_20190708_192025711.jpg', 'alt_text' => 'गोमूत्र खत', 'sort_order' => 5],
            ['title' => 'शेती प्रयोग', 'description' => 'गो विज्ञान प्रयोगशाळा', 'image_path' => 'images/agriculturerelated/IMG_20190731_081702943.jpg', 'alt_text' => 'शेती प्रयोग', 'sort_order' => 6],
            ['title' => 'कृषी संशोधन', 'description' => 'विज्ञान आधारित कृषी', 'image_path' => 'images/agriculturerelated/IMG_20190731_081823616_HDR.jpg', 'alt_text' => 'कृषी संशोधन', 'sort_order' => 7],
        ];

        foreach ($agriImages as $img) {
            GalleryImage::updateOrCreate(
                ['image_path' => $img['image_path']],
                array_merge($img, ['category_id' => $agriculture->id, 'is_active' => true])
            );
        }

        // Nirmalya
        $nirmalyaImages = [
            ['title' => 'निर्माल्य प्रकल्प', 'description' => 'समाजात जागरूकता कटआउट चिकटवणे', 'image_path' => 'images/nirmalyprojectrelated/IMG_20180912_111128196.jpg', 'alt_text' => 'निर्माल्य प्रकल्प कार्य', 'sort_order' => 1],
            ['title' => 'निर्माल्य संवर्धन', 'description' => 'समाज भेट आणि जागरूकता प्रसार', 'image_path' => 'images/nirmalyprojectrelated/IMG_20180912_112122499.jpg', 'alt_text' => 'निर्माल्य संवर्धन', 'sort_order' => 2],
            ['title' => 'गणेशोत्सव निर्माल्य', 'description' => 'कटआउटद्वारे जनजागृती', 'image_path' => 'images/nirmalyprojectrelated/IMG_20180912_112740343.jpg', 'alt_text' => 'गणेशोत्सव निर्माल्य', 'sort_order' => 3],
            ['title' => 'निर्माल्य पुनर्वापर', 'description' => 'समाजात जागरूकता अभियान', 'image_path' => 'images/nirmalyprojectrelated/IMG_20180912_113354474.jpg', 'alt_text' => 'निर्माल्य पुनर्वापर', 'sort_order' => 4],
            ['title' => 'पर्यावरण प्रकल्प', 'description' => 'निर्माल्य जागरूकता कटआउट', 'image_path' => 'images/nirmalyprojectrelated/IMG_20180912_113406929.jpg', 'alt_text' => 'पर्यावरण प्रकल्प', 'sort_order' => 5],
            ['title' => 'निर्माल्य ते कंपोस्ट', 'description' => 'निर्माल्य प्रकल्प कार्य', 'image_path' => 'images/jan 2026/nirmalyatocompost.jpeg', 'alt_text' => 'निर्माल्य ते कंपोस्ट', 'sort_order' => 6],
        ];

        foreach ($nirmalyaImages as $img) {
            GalleryImage::updateOrCreate(
                ['image_path' => $img['image_path']],
                array_merge($img, ['category_id' => $nirmalya->id, 'is_active' => true])
            );
        }

        // Seed videos
        $videos = [
            ['title' => 'पंचगव्य चिकित्सा प्रक्रिया', 'description' => 'पंचगव्य चिकित्सेच्या विविध पद्धती आणि त्याचे आरोग्य फायदे', 'youtube_url' => 'https://www.youtube.com/embed/PTvFbuL2yWw', 'sort_order' => 1, 'is_active' => true],
            ['title' => 'गो-आधारित शेती तंत्र', 'description' => 'गोमूत्र आणि गोमय वापरून नैसर्गिक शेती करण्याचे मार्ग', 'youtube_url' => 'https://www.youtube.com/embed/xWFvlfrrmro', 'sort_order' => 2, 'is_active' => true],
            ['title' => 'संस्थेचे कार्य परिचय', 'description' => 'गो विज्ञान संशोधन संस्थेच्या कार्याचे संपूर्ण परिचय', 'youtube_url' => 'https://www.youtube.com/embed/3r8ul0PNWy4', 'sort_order' => 3, 'is_active' => true],
        ];

        foreach ($videos as $video) {
            GalleryVideo::updateOrCreate(
                ['youtube_url' => $video['youtube_url']],
                $video
            );
        }
    }
}
