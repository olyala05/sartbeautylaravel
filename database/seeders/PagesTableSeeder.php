<?php

namespace Database\Seeders;

use App\Models\Pages;
use App\Models\Routes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    public $pages = [
        ['lang' => 'en', 'slug' => 'services', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.services'],
        ['lang' => 'en', 'slug' => 'home', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.home'],
        ['lang' => 'en', 'slug' => 'about-us', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.about-us'],
        ['lang' => 'en', 'slug' => 'contact-us', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'test Content'],
        ['lang' => 'en', 'slug' => 'ice-laser-hair-removal', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.ice-laser-hair-removal'],
        ['lang' => 'en', 'slug' => 'cellulite-massage', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADEE:tmp.cellulite-massage'],
        ['lang' => 'en', 'slug' => 'roll-shape', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.roll-shape'],
        ['lang' => 'en', 'slug' => 'brazillian-blow-dry', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.brazillian-blow-dry'],
        ['lang' => 'en', 'slug' => 'skin-care', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.skin-care'],
        ['lang' => 'en', 'slug' => 'deepliner', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.deepliner'],
        ['lang' => 'en', 'slug' => 'lip-coloring', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.lip-coloring'],
        ['lang' => 'en', 'slug' => 'bridal-hair', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.bridal-hair'],
        ['lang' => 'en', 'slug' => 'silk-eyelash', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.silk-eyelash'],
        ['lang' => 'en', 'slug' => 'eyebrow-lamination', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.eyebrow-lamination'],
        ['lang' => 'en', 'slug' => 'permanent-nail-polish', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.permanent-nail-polish'],
        ['lang' => 'en', 'slug' => 'keratin-care', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.keratin-care'],
        ['lang' => 'en', 'slug' => 'eyelash-lifting', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.eyelash-lifting'],
        ['lang' => 'en', 'slug' => 'manicure-pedicure', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.manicure-pedicure'],
        ['lang' => 'en', 'slug' => 'microblading', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.microblading'],
        ['lang' => 'en', 'slug' => 'nail-art', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.nail-art'],
        ['lang' => 'en', 'slug' => 'perming', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.perming'],
        ['lang' => 'en', 'slug' => 'prosthetic-nails', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.prosthetic-nails'],
        ['lang' => 'en', 'slug' => 'hair-color-highlights', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.hair-color-highlights'],
        ['lang' => 'en', 'slug' => 'hair-dye', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.hair-dye'],
        ['lang' => 'en', 'slug' => 'hair-dip-dye', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.hair-dip-dye'],
        ['lang' => 'en', 'slug' => 'hair-cut', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.hair-cut'],
        ['lang' => 'en', 'slug' => 'hair-extension', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.hair-extension'],
        ['lang' => 'en', 'slug' => 'wax-application', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.wax-application'],
        // TR //
        ['lang' => 'tr', 'slug' => 'hizmetlerimiz', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.hizmetlerimiz'],
        ['lang' => 'tr', 'slug' => 'anasayfa', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.anasayfa'],
        ['lang' => 'tr', 'slug' => 'hakkimizda', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.hakkimizda'],
        ['lang' => 'tr', 'slug' => 'iletisim', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.iletisim'],
        ['lang' => 'tr', 'slug' => 'buz-lazer-epilasyon', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.buz-lazer-epilasyon'],
        ['lang' => 'tr', 'slug' => 'selulit-masaji', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.selulit-masaji'],
        ['lang' => 'tr', 'slug' => 'roll-shape', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.roll-shape'],
        ['lang' => 'tr', 'slug' => 'brezilya-fonu', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.brezilya-fonu'],
        ['lang' => 'tr', 'slug' => 'cilt-bakimi', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.cilt-bakimi'],
        ['lang' => 'tr', 'slug' => 'dipliner', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.dipliner'],
        ['lang' => 'tr', 'slug' => 'dudak-renklendirme', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.dudak-renklendirme'],
        ['lang' => 'tr', 'slug' => 'gelin-topuzu', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.gelin-topuzu'],
        ['lang' => 'tr', 'slug' => 'kas-laminasyon', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.kas-laminasyon'],
        ['lang' => 'tr', 'slug' => 'kalici-oje', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.kalici-oje'],
        ['lang' => 'tr', 'slug' => 'keratin-bakimi', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.keratin-bakimi'],
        ['lang' => 'tr', 'slug' => 'kirpik-lifting', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.kirpik-lifting'],
        ['lang' => 'tr', 'slug' => 'manikur-ve-pedikur', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.manikur-ve-pedikur'],
        ['lang' => 'tr', 'slug' => 'microblading', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.microblading'],
        ['lang' => 'tr', 'slug' => 'nail-art', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.nail-art'],
        ['lang' => 'tr', 'slug' => 'perma', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.perma'],
        ['lang' => 'tr', 'slug' => 'protez-tirnak', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.protez-tirnak'],
        ['lang' => 'tr', 'slug' => 'rofle', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.rofle'],
        ['lang' => 'tr', 'slug' => 'sac-boyasi', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.sac-boyasi'],
        ['lang' => 'tr', 'slug' => 'dip-boyasi', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.dip-boyasi'],
        ['lang' => 'tr', 'slug' => 'sac-kesim', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.sac-kesim'],
        ['lang' => 'tr', 'slug' => 'sac-kaynak', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.sac-kaynak'],
        ['lang' => 'tr', 'slug' => 'seker-agda', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.seker-agda'],
        // RU //
        ['lang' => 'ru', 'slug' => 'uslugi', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.uslugi'],
        ['lang' => 'ru', 'slug' => 'glavnaya', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.glavnaya'],
        ['lang' => 'ru', 'slug' => 'o-nas', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.o-nas'],
        ['lang' => 'ru', 'slug' => 'kontakty', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.kontakty'],
        ['lang' => 'ru', 'slug' => 'udaleniye-volos-lazerom', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.udaleniye-volos-lazerom'],
        ['lang' => 'ru', 'slug' => 'selulitniy-massazh', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.selulitniy-massazh'],
        ['lang' => 'ru', 'slug' => 'roll-shape', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.roll-shape'],
        ['lang' => 'ru', 'slug' => 'keratinovoye-vypryamleniye-volos', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.keratinovoye-vypryamleniye-volos'],
        ['lang' => 'ru', 'slug' => 'uhod-za-kozhey', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.uhod-za-kozhey'],
        ['lang' => 'ru', 'slug' => 'diplayner', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.diplayner'],
        ['lang' => 'ru', 'slug' => 'permanentniy-makiyazh-gub', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.permanentniy-makiyazh-gub'],
        ['lang' => 'ru', 'slug' => 'svadebnaya-prichoska', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.svadebnaya-prichoska'],
        ['lang' => 'ru', 'slug' => 'narashivaniye-resnits', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.narashivaniye-resnits'],
        ['lang' => 'ru', 'slug' => 'laminirovaniye-brovey', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.laminirovaniye-brovey'],
        ['lang' => 'ru', 'slug' => 'permanentniy-lak-dlya-nogtey', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.permanentniy-lak-dlya-nogtey'],
        ['lang' => 'ru', 'slug' => 'keratinoviy-ukhod', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.keratinoviy-ukhod'],
        ['lang' => 'ru', 'slug' => 'lifting-resnits', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.lifting-resnits'],
        ['lang' => 'ru', 'slug' => 'manikyur-pedikyur', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.manikyur-pedikyur'],
        ['lang' => 'ru', 'slug' => 'microblading', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.microblading'],
        ['lang' => 'ru', 'slug' => 'dizayn-nogtey', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.dizayn-nogtey'],
        ['lang' => 'ru', 'slug' => 'permanentnaya-zavivka-volos', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.permanentnaya-zavivka-volos'],
        ['lang' => 'ru', 'slug' => 'protezirovaniye-nogtey', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.protezirovaniye-nogtey'],
        ['lang' => 'ru', 'slug' => 'melirovaniye', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.melirovaniye'],
        ['lang' => 'ru', 'slug' => 'okrashivaniye-volos', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.okrashivaniye-volos'],
        ['lang' => 'ru', 'slug' => 'okrashivaniye-dip-dye', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.okrashivaniye-dip-dye'],
        ['lang' => 'ru', 'slug' => 'strizhka', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.strizhka'],
        ['lang' => 'ru', 'slug' => 'narashivaniye-volos', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.narashivaniye-volos'],
        ['lang' => 'ru', 'slug' => 'shugaring', 'title' => 'test Title', 'description' => 'test Description', 'content' => 'BLADE:tmp.shugaring'],
    ];

    public function run(): void
    {
        $routes = Routes::all();

        $this->pages = collect($this->pages);

        $routes->each(function ($route) {
            $model = new \App\Models\Pages();

            if($page = $this->pages->where('lang',$route['lang'])->where('slug',$route['slug'])->first()){
                $model = New Pages();
                $model->route_id = $route->id;

                $model->title = $page['title'];
                $model->description = $page['description'];

                if(str_contains($page['content'],'BLADE:'))
                    $model->content = view(trim(str_replace('BLADE:', '', $page['content'])));
                else
                    $model->content = $page['content'];

                $model->meta_information = null;
                $model->save();
            }
        });
    }
}
