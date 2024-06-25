<?php

namespace Database\Seeders;

use App\Models\Routes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    public $routes = [
        // EN //
        ['lang' => 'en', 'slug' => 'services'],
        ['lang' => 'en', 'slug' => 'home'],
        ['lang' => 'en', 'slug' => 'about-us'],
        ['lang' => 'en', 'slug' => 'contact-us'],
        ['lang' => 'en', 'slug' => 'ice-laser-hair-removal'],
        ['lang' => 'en', 'slug' => 'cellulite-massage'],
        ['lang' => 'en', 'slug' => 'roll-shape'],
        ['lang' => 'en', 'slug' => 'brazillian-blow-dry'],
        ['lang' => 'en', 'slug' => 'skin-care'],
        ['lang' => 'en', 'slug' => 'deepliner'],
        ['lang' => 'en', 'slug' => 'lip-coloring'],
        ['lang' => 'en', 'slug' => 'bridal-hair'],
        ['lang' => 'en', 'slug' => 'silk-eyelash'],
        ['lang' => 'en', 'slug' => 'eyebrow-lamination'],
        ['lang' => 'en', 'slug' => 'permanent-nail-polish'],
        ['lang' => 'en', 'slug' => 'keratin-care'],
        ['lang' => 'en', 'slug' => 'eyelash-lifting'],
        ['lang' => 'en', 'slug' => 'manicure-pedicure'],
        ['lang' => 'en', 'slug' => 'microblading'],
        ['lang' => 'en', 'slug' => 'nail-art'],
        ['lang' => 'en', 'slug' => 'perming'],
        ['lang' => 'en', 'slug' => 'prosthetic-nails'],
        ['lang' => 'en', 'slug' => 'hair-color-highlights'],
        ['lang' => 'en', 'slug' => 'hair-dye'],
        ['lang' => 'en', 'slug' => 'hair-dip-dye'],
        ['lang' => 'en', 'slug' => 'hair-cut'],
        ['lang' => 'en', 'slug' => 'hair-extension'],
        ['lang' => 'en', 'slug' => 'wax-application'],
        // TR //
        ['lang' => 'tr', 'slug' => 'hizmetlerimiz'],
        ['lang' => 'tr', 'slug' => 'anasayfa'],
        ['lang' => 'tr', 'slug' => 'hakkimizda'],
        ['lang' => 'tr', 'slug' => 'iletisim'],
        ['lang' => 'tr', 'slug' => 'buz-lazer-epilasyon'],
        ['lang' => 'tr', 'slug' => 'selulit-masaji'],
        ['lang' => 'tr', 'slug' => 'roll-shape'],
        ['lang' => 'tr', 'slug' => 'brezilya-fonu'],
        ['lang' => 'tr', 'slug' => 'cilt-bakimi'],
        ['lang' => 'tr', 'slug' => 'dipliner'],
        ['lang' => 'tr', 'slug' => 'dudak-renklendirme'],
        ['lang' => 'tr', 'slug' => 'gelin-topuzu'],
        ['lang' => 'tr', 'slug' => 'kas-laminasyon'],
        ['lang' => 'tr', 'slug' => 'kalici-oje'],
        ['lang' => 'tr', 'slug' => 'keratin-bakimi'],
        ['lang' => 'tr', 'slug' => 'kirpik-lifting'],
        ['lang' => 'tr', 'slug' => 'manikur-ve-pedikur'],
        ['lang' => 'tr', 'slug' => 'microblading'],
        ['lang' => 'tr', 'slug' => 'nail-art'],
        ['lang' => 'tr', 'slug' => 'perma'],
        ['lang' => 'tr', 'slug' => 'protez-tirnak'],
        ['lang' => 'tr', 'slug' => 'rofle'],
        ['lang' => 'tr', 'slug' => 'sac-boyasi'],
        ['lang' => 'tr', 'slug' => 'dip-boyasi'],
        ['lang' => 'tr', 'slug' => 'sac-kesim'],
        ['lang' => 'tr', 'slug' => 'sac-kaynak'],
        ['lang' => 'tr', 'slug' => 'seker-agda'],
        // RU //
        ['lang' => 'ru', 'slug' => 'uslugi'],
        ['lang' => 'ru', 'slug' => 'glavnaya'],
        ['lang' => 'ru', 'slug' => 'o-nas'],
        ['lang' => 'ru', 'slug' => 'kontakty'],
        ['lang' => 'ru', 'slug' => 'udaleniye-volos-lazerom'],
        ['lang' => 'ru', 'slug' => 'selulitniy-massazh'],
        ['lang' => 'ru', 'slug' => 'roll-shape'],
        ['lang' => 'ru', 'slug' => 'keratinovoye-vypryamleniye-volos'],
        ['lang' => 'ru', 'slug' => 'uhod-za-kozhey'],
        ['lang' => 'ru', 'slug' => 'diplayner'],
        ['lang' => 'ru', 'slug' => 'permanentniy-makiyazh-gub'],
        ['lang' => 'ru', 'slug' => 'svadebnaya-prichoska'],
        ['lang' => 'ru', 'slug' => 'narashivaniye-resnits'],
        ['lang' => 'ru', 'slug' => 'laminirovaniye-brovey'],
        ['lang' => 'ru', 'slug' => 'permanentniy-lak-dlya-nogtey'],
        ['lang' => 'ru', 'slug' => 'keratinoviy-ukhod'],
        ['lang' => 'ru', 'slug' => 'lifting-resnits'],
        ['lang' => 'ru', 'slug' => 'manikyur-pedikyur'],
        ['lang' => 'ru', 'slug' => 'microblading'],
        ['lang' => 'ru', 'slug' => 'dizayn-nogtey'],
        ['lang' => 'ru', 'slug' => 'permanentnaya-zavivka-volos'],
        ['lang' => 'ru', 'slug' => 'protezirovaniye-nogtey'],
        ['lang' => 'ru', 'slug' => 'melirovaniye'],
        ['lang' => 'ru', 'slug' => 'okrashivaniye-volos'],
        ['lang' => 'ru', 'slug' => 'okrashivaniye-dip-dye'],
        ['lang' => 'ru', 'slug' => 'strizhka'],
        ['lang' => 'ru', 'slug' => 'narashivaniye-volos'],
        ['lang' => 'ru', 'slug' => 'shugaring'],
    ];

    public function run(): void
    {
        collect($this->routes)->each(function ($route) {
            $model = new Routes();
            $model->slug = $route['slug'];
            $model->amp = 0;
            $model->is_active = 1;
            $model->meta_information = null;
            $model->lang = $route['lang'];
            $model->save();
        });
    }
}
