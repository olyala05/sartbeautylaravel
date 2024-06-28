<?php

namespace Database\Seeders;

use App\Models\Routes;
use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public $settings = [

        // TODO: -------------------------------- EN -------------------------- //
        [
            'lang' => "en",
            'content' => [
                'title' => 'S Art Beauty Center',
                'description' => 'At S Art Beauty Center, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.',
            ],
            "name" => "seo",
        ],
        [
            'lang' => "en",
            'content' => [
                'href' => '#',
                'alt' => 'S Art Beauty Center',
            ],
            "name" => "logo",
        ],
        [
            'lang' => "en",
            'content' => [
                'sart' => 'S ART Beauty Center',
                'user_policies' => 'Our User Policies',
                'user_policies_subtitle6' => 'Contact',
            ],
            "name" => "footer",
        ],
        [
            'lang' => "en",
            'content' => [
                'sart_official_center_contact' => 'S Art Beauty Center Contact Page',
                'sart_official_center_whatsapp' => 'S Art Beauty Center Whatsapp Account',
                'sart_official_center_instagram' => 'S Art Beauty Center Instagram Account',
            ],
            "name" => "default_keys",
        ],
        [
            'lang' => "en",
            'content' => [
                'address' => 'Acıbadem, Lise Yolu Sk. no:9/B, 34718 Kadikoy/Istanbul',
            ],
            "name" => "address",
        ],
        [
            'lang' => ["en"],
            'content' => [
                'facebook' => [
                    'href' => 'https://www.facebook.com/sartbeautymerkezi',
                    'alt' =>  'S Art Beauty Center Facebook Account',
                ],
                'instagram_tr' => [
                    'href' => 'https://www.instagram.com/s_art_beauty',
                    'alt' => 'S Art Beauty Center Instagram Account',
                ],
                'instagram_ru' => [
                    'href' => 'https://www.instagram.com/sartbeauty',
                    'alt' => 'S Art Beauty Center Instagram Account',
                ],
                'whatsapp' => [
                    'href' => 'https://api.whatsapp.com/send?phone=905335085191',
                    'alt' => 'S Art Beauty Center Whatsapp Account',
                ],
            ],
            "name" => "social-media",
        ],

        // TODO: -------------------------------- TR -------------------------- //
        [
            'lang' => "tr",
            'content' => [
                'title' => 'S Art Beauty Center',
                'description' => 'S Art Beauty Center\'da buz lazer epilasyondan tırnak bakımına, cilt bakımından saç bakımına kadar geniş bir hizmet yelpazesi sunuyoruz.',
            ],
            "name" => "seo",
        ],
        [
            'lang' => "tr",
            'content' => [
                'href' => '#',
                'alt' => 'S Art Beauty Center',
            ],
            "name" => "logo",
        ],
        [
            'lang' => "tr",
            'content' => [
                'sart' => 'S ART Beauty Center',
                'user_policies' => 'Kullanıcı Politikalarımız',
                'user_policies_subtitle6' => 'İletişim',
            ],
            "name" => "footer",
        ],
        [
            'lang' => "tr",
            'content' => [
                'sart_official_center_contact' => 'S Art Beauty Center İletişim Sayfası',
                'sart_official_center_whatsapp' => 'S Art Beauty Center Whatsapp Hesabı',
                'sart_official_center_instagram' => 'S Art Beauty Center Instagram Hesabı',
            ],
            "name" => "default_keys",
        ],
        [
            'lang' => "tr",
            'content' => [
                'address' => 'Acıbadem, Lise Yolu Sk. no:9/B, 34718 Kadıköy/İstanbul',
            ],
            "name" => "address",
        ],
        [
            'lang' => ["tr"],
            'content' => [
                'facebook' => [
                    'href' => 'https://www.facebook.com/sartbeautymerkezi',
                    'alt' =>  'S Art Beauty Center Facebook Hesabı',
                ],
                'instagram_tr' => [
                    'href' => 'https://www.instagram.com/s_art_beauty',
                    'alt' => 'S Art Beauty Center Instagram Hesabı',
                ],
                'instagram_ru' => [
                    'href' => 'https://www.instagram.com/sartbeauty',
                    'alt' => 'S Art Beauty Center Instagram Hesabı',
                ],
                'whatsapp' => [
                    'href' => 'https://api.whatsapp.com/send?phone=905335085191',
                    'alt' => 'S Art Beauty Center Whatsapp Hesabı',
                ],
            ],
            "name" => "social-media",
        ],

        // TODO: -------------------------------- RU -------------------------- //
        [
            'lang' => "ru",
            'content' => [
                'title' => 'S Art Beauty Center',
                'description' => 'В S Art Beauty Center мы предлагаем широкий спектр услуг: от лазерной эпиляции до ухода за ногтями, от ухода за кожей до ухода за волосами.',
            ],
            "name" => "seo",
        ],
        [
            'lang' => "ru",
            'content' => [
                'href' => '/images/sart/logo.png',
                'alt' => 'S Art Beauty Center',
            ],
            "name" => "logo",
        ],
        [
            'lang' => "ru",
            'content' => [
                'sart' => 'S ART Beauty Center',
                'user_policies' => 'Наши пользовательские политики',
                'user_policies_subtitle6' => 'Контакт',
            ],
            "name" => "footer",
        ],
        [
            'lang' => "ru",
            'content' => [
                'sart_official_center_contact' => 'Страница контактов S Art Beauty Center',
                'sart_official_center_whatsapp' => 'Аккаунт Whatsapp S Art Beauty Center',
                'sart_official_center_instagram' => 'Аккаунт Instagram S Art Beauty Center',
            ],
            "name" => "default_keys",
        ],
        [
            'lang' => "ru",
            'content' => [
                'address' => 'Аджыбадем, ул. Лисе Йолу, д. 9 / Б, 34718 Кадыкёй/Стамбул',
            ],
            "name" => "address",
        ],
        [
            'lang' => ["ru"],
            'content' => [
                'facebook' => [
                    'href' => 'https://www.facebook.com/sartbeauty',
                    'alt' =>  'Аккаунт Facebook S Art Beauty Center',
                ],
                'instagram_tr' => [
                    'href' => 'https://www.instagram.com/s_art_beauty',
                    'alt' => 'Аккаунт Instagram S Art Beauty Center',
                ],
                'instagram_ru' => [
                    'href' => 'https://www.instagram.com/sartbeauty',
                    'alt' => 'Аккаунт Instagram S Art Beauty Center',
                ],
                'whatsapp' => [
                    'href' => 'https://api.whatsapp.com/send?phone=905335085191',
                    'alt' => 'Аккаунт Whatsapp S Art Beauty Cente',
                ],
            ],
            "name" => "social-media",
        ],

        // TODO: -------------------------- FOR ALL LANGS -------------------------- //
        [
            'lang' => ["tr", "en", "ru"],
            'content' => [
                'geo-media' => [
                    'lat' => 41.002914,
                    'log' => 29.038749,
                    'zoom' => '14z',
                ],
            ],
            "name" => "geo-media",
        ],
        [
            'lang' => ["tr", "en", "ru"],
            'content' => [
                'phone' => '+90 533 508 51 91',
                'whatsapp' => '+90 533 508 51 91',
                'email' => 'acibademasbeauty@gmail.com',
            ],
            "name" => "contact",
        ],
        [
            'lang' => ["tr", "en", "ru"],
            'content' => [
                'map_link' => 'https://goo.gl/maps/MLkCjkQovNnJvqrw6',
            ],
            "name" => "map_link",
        ],
        [
            'lang' => ["tr", "en", "ru"],
            'content' => [
                'sart_url' => 'https://www.sartbeauty.com',
            ],
            "name" => "sart_url",
        ],
    ];

    public function run(): void
    {
        foreach ($this->settings as $setting) {
            foreach ((array) $setting['lang'] as $lang) {
                Settings::create([
                    'name' => $setting['name'],
                    'content' => $setting['content'],
                    'lang' => $lang,
                ]);
            }
        }
    }
}
