<?php

namespace Database\Seeders;

use App\Models\Routes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    public $routes = [
        // TODO: -------------------------------- EN -------------------------- //
        [
            'lang' => 'en',
            'slug' => 'services',
            'uniq_slug' => 'services',
            "meta_information" => [
                "title" => "Our Services | S Art Beauty Center",
                "description" => "Discover our services at S Art Beauty Center in Kadıköy. Visit us for skin care, epilation, hair design, and more.",
            ]
        ],
        [
            'lang' => 'en', 'slug' => '/',
            'uniq_slug' => 'index',
            "meta_information" => [
                "title" => "Kadıköy - Beauty Center | S Art Beauty Center",
                "description" => "At S Art Beauty Center, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'about-us',
            'uniq_slug' => 'about-us',
            "meta_information" => [
                "title" => "Kadıköy Beauty Center | S Art Beauty Center",
                "description" => "At S Art Beauty Center, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'contact-us',
            'uniq_slug' => 'contact-us',
            "meta_information" => [
                "title" => "About | S Art Beauty Center",
                "description" => "At S Art Beauty, we provide the best service to our customers with our expert team and wide range of services.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'ice-laser-hair-removal',
            'uniq_slug' => 'ice-laser-hair-removal',
            "meta_information" => [
                "title" => "Kadıköy - Ice Laser Epilation | S Art Beauty Center",
                "description" => "Say goodbye to unwanted hair with ice laser epilation at S Art Beauty Center! Achieve smooth skin with this effective method tailored to your skin type.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'cellulite-massage',
            'uniq_slug' => 'cellulite-massage',
            "meta_information" => [
                "title" => "Kadıköy - G5 Cellulite Massage | S Art Beauty Center",
                "description" => "Do you want to get rid of cellulite appearance? At S Art Beauty Center, you can reliably and effectively reduce the appearance of cellulite with G5 Cellulite Massage!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'roll-shape',
            'uniq_slug' => 'roll-shape',
            "meta_information" => [
                "title" => "Kadıköy - Roll Shape | S Art Beauty Center",
                "description" => "Rollshape combines traditional Far Eastern massage with modern technology to boost circulation and reduce cellulite.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'brazillian-blow-dry',
            'uniq_slug' => 'brazillian-blow-dry',
            "meta_information" => [
                "title" => "Kadıköy - Brazilian Blowout | S Art Beauty Center",
                "description" => "Pamper your hair with Brazilian Blowout Treatment! Strengthen your hair and achieve a healthier look with our expert team.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'skin-care',
            'uniq_slug' => 'skin-care',
            "meta_information" => [
                "title" => "Kadıköy - Skin Care | S Art Beauty Center",
                "description" => "Rejuvenate your skin with professional skin care at S Art Beauty Center! Refresh your skin with our experienced estheticians.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'deepliner',
            'uniq_slug' => 'deepliner',
            "meta_information" => [
                "title" => "Kadıköy - Eyeliner and Dip Eyeliner | S Art Beauty Center",
                "description" => "A permanent touch for your eyes: Achieve a perfect look with permanent eyeliner and dipliner application at S Art Beauty Center!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'lip-coloring',
            'uniq_slug' => 'lip-coloring',
            "meta_information" => [
                "title" => "Kadıköy - Lip Coloring | S Art Beauty Center",
                "description" => "Enhance your lips with a natural and attractive color through our lip tinting application. Book your appointment now for lasting beauty!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'bridal-hair',
            'uniq_slug' => 'bridal-hair',
            "meta_information" => [
                "title" => "Kadıköy - Bridal Hair | S Art Beauty Center",
                "description" => "Look stunning on your special day with beautiful bridal hairstyles! Discover your dream bridal hair with our experts.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'silk-eyelash',
            'uniq_slug' => 'silk-eyelash',
            "meta_information" => [
                "title" => "Kadıköy - Silk Eyelash | S Art Beauty Center",
                "description" => "Achieve a lasting and natural look with silk eyelash extensions at S Art Beauty Center. Add value to your beauty!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'eyebrow-lamination',
            'uniq_slug' => 'eyebrow-lamination',
            "meta_information" => [
                "title" => "Kadıköy - Eyebrow Lamination | S Art Beauty Center",
                "description" => "For natural and striking eyebrows, try brow lamination at S Art Beauty Center! Achieve fuller and more defined brows with our experts.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'permanent-nail-polish',
            'uniq_slug' => 'permanent-nail-polish',
            "meta_information" => [
                "title" => "Kadıköy - Permanent Nail Polish | S Art Beauty Center",
                "description" => "Add elegance to your nails with permanent nail polish at S Art Beauty Center! Discover our permanent nail polish applications featuring a wide range of colors.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'keratin-care',
            'uniq_slug' => 'keratin-care',
            "meta_information" => [
                "title" => "Kadıköy - Keratin Care | S Art Beauty Center ",
                "description" => "A special touch for your hair: Provide deep care for your dry and damaged hair with keratin treatment at S Art Beauty Center.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'eyelash-lifting',
            'uniq_slug' => 'eyelash-lifting',
            "meta_information" => [
                "title" => "Kadıköy - Eyelash Lifting | S Art Beauty Center ",
                "description" => "Highlight Your Eyes: Achieve a Natural and Stunning Look with Lash Lifting! Book your appointment now!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'manicure-pedicure',
            'uniq_slug' => 'manicure-pedicure',
            "meta_information" => [
                "title" => "Kadıköy - Manicure and Pedicure | S Art Beauty Center ",
                "description" => "Strengthen your nails and complete your elegance with a manicure and pedicure. Call now to book your appointment.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'microblading',
            'uniq_slug' => 'microblading',
            "meta_information" => [
                "title" => "Kadıköy - Microblading | S Art Beauty Center ",
                "description" => "Achieve permanent and natural-looking eyebrows that suit your face with microblading. Book your appointment now!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'nail-art',
            'uniq_slug' => 'nail-art',
            "meta_information" => [
                "title" => "Kadıköy - Nail Art | S Art Beauty Center ",
                "description" => "Add color to your nails at S Art Beauty Center! Create unique nail designs with nail art alongside our experts. Book your appointment now!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'perming',
            'uniq_slug' => 'perming',
            "meta_information" => [
                "title" => "Kadıköy - Perm Hairstyle| S Art Beauty Center ",
                "description" => "Achieve Wavy and Voluminous Hair with a Perm! Book Your Appointment Now and Get the Hair of Your Dreams!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'prosthetic-nails',
            'uniq_slug' => 'prosthetic-nails',
            "meta_information" => [
                "title" => "Kadıköy - Prosthetic Nails | S Art Beauty Center ",
                "description" => "Create a unique style for your nails with prosthetic nail designs at S Art Beauty Center. Achieve custom-designed nails with our experts.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'hair-color-highlights',
            'uniq_slug' => 'hair-color-highlights',
            "meta_information" => [
                "title" => "Kadıköy - Hair Highlights | S Art Beauty Center ",
                "description" => "Achieve a natural and attractive look with highlights at S Art Beauty Center. Book your appointment now!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'hair-dye',
            'uniq_slug' => 'hair-dye',
            "meta_information" => [
                "title" => "Kadıköy - Hair Dye | S Art Beauty Center",
                "description" => "Various hair dye options for your hair at S Art Beauty Center! Book your appointment now.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'hair-dip-dye',
            'uniq_slug' => 'hair-dip-dye',
            "meta_information" => [
                "title" => "Kadıköy - Hair Dip Dye | S Art Beauty Center  ",
                "description" => "Add vibrancy to your hair with root touch-up at S Art Beauty Center. Trust our experts to achieve a natural and attractive look.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'hair-cut',
            'uniq_slug' => 'hair-cut',
            "meta_information" => [
                "title" => "Kadıköy - Hair Cut | S Art Beauty Center ",
                "description" => "Highlight your style! Achieve a unique look with a haircut at S Art Beauty Center. Book your appointment now!",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'hair-extension',
            'uniq_slug' => 'hair-extension',
            "meta_information" => [
                "title" => "Kadıköy - Hair Extension | S Art Beauty Center ",
                "description" => "A special touch for your hair! Achieve your desired style with hair extensions. Call now to book your appointment.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'wax-application',
            'uniq_slug' => 'wax-application',
            "meta_information" => [
                "title" => "Kadıköy - Wax | S Art Beauty Center ",
                "description" => "Experience smooth, hair-free skin with professional waxing services at S Art Beauty Center. Book your appointment now!",
            ]
        ],
        // TODO: ---------------------------- TR ---------------------------- //
        [
            'lang' => 'tr', 'slug' => 'hizmetlerimiz',
            'uniq_slug' => 'services',
            "meta_information" => [
                "title" => "Kadıköy Güzellik Salonu Hizmetlerimiz | S Art Beauty Center",
                "description" => "Kadıköy güzellik merkezi olarak, profesyonel cilt bakımı, lazer epilasyon, masaj, saç bakımı ve makyaj hizmetlerimizle güzelliğinize değer katıyoruz.",
            ]
        ],
        [
            'lang' => 'tr', 'slug' => '/',
            'uniq_slug' => 'index',
            "meta_information" => [
                "title" => "Kadıköy Güzellik Merkezi | S Art Beauty Center",
                "description" => "S Art Beauty Güzellik Merkezi'nde buz lazer epilasyondan tırnak bakımına, cilt bakımından saç bakım hizmetlerine kadar geniş bir yelpazede hizmet sunuyoruz.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'hakkimizda',
            'uniq_slug' => 'about-us',
            "meta_information" => [
                "title" => "Hakkımızda | S Art Beauty Center",
                "description" => "S Art Beauty olarak, uzman kadromuz ve geniş hizmet yelpazemizle, müşterilerimize en iyi hizmeti sunmaktayız.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'iletisim',
            'uniq_slug' => 'contact-us',
            "meta_information" => [
                "title" => "Kadıköy - İletişim | S Art Beauty Center",
                "description" => "İletişim sayfamız üzerinden bize mesaj göndererek, randevu talebinde bulunabilir veya hizmetlerimiz hakkında daha fazla bilgi alabilirsiniz.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'buz-lazer-epilasyon',
            'uniq_slug' => 'ice-laser-hair-removal',
            "meta_information" => [
                "title" => "Kadıköy - Buz Lazer Epilasyon | S Art Beauty Center",
                "description" => "S Art Beauty Center'da buz lazer epilasyon ile tüylerle vedalaşın! Cilt tipinize uygun olarak uygulanan bu etkili yöntemle pürüzsüz bir cilde sahip olun. ",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'selulit-masaji',
            'uniq_slug' => 'cellulite-massage',
            "meta_information" => [
                "title" => "Kadıköy - G5 Selülit Masajı | S Art Beauty Center",
                "description" => "Selülit görünümünden kurtulmak mı istiyorsunuz? S Art Beauty Center'da G5 Selülit Masajı ile selülit görünümünü güvenilir ve etkili bir şekilde azaltabilirsiniz!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'roll-shape',
            'uniq_slug' => 'roll-shape',
            "meta_information" => [
                "title" => "Kadıköy - Roll Shape  | S Art Beauty Center",
                "description" => "Geleneksel Uzakdoğu masaj tekniğinin modern teknolojiyle birleştiği Rollshape, kan dolaşımını hızlandırarak, rahatlama ve selülit giderme etkileri sunar.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'brezilya-fonu',
            'uniq_slug' => 'brazillian-blow-dry',
            "meta_information" => [
                "title" => "Kadıköy - Brezilya Fönü Set Bakımı | S Art Beauty Center",
                "description" => "Saçlarınıza Brezilya Fönü Set Bakımı ile özen gösterin! Uzman ekibimizle, saçlarınızı güçlendirin ve daha sağlıklı bir görünüm elde edin.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'cilt-bakimi',
            'uniq_slug' => 'skin-care',
            "meta_information" => [
                "title" => "Kadıköy - Profesyonel Cilt Bakımı | S Art Beauty Center",
                "description" => "S Art Beauty Center'da profesyonel cilt bakımı ile cildinizi yeniden canlandırın! Deneyimli estetisyenlerimizle birlikte cildinizini yenileyin.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'dipliner',
            'uniq_slug' => 'deepliner',
            "meta_information" => [
                "title" => "Kadıköy - Kalıcı Eyeliner ve Dipliner | S Art Beauty Center",
                "description" => "Gözlerinize kalıcı bir dokunuş: S Art Beauty Center'da kalıcı eyeliner ve dipliner uygulaması ile mükemmel bir görünüm elde edin!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'dudak-renklendirme',
            'uniq_slug' => 'lip-coloring',
            "meta_information" => [
                "title" => "Kadıköy - Dudak Renklendirme | S Art Beauty Center",
                "description" => "Dudak renklendirme uygulamasıyla dudaklarınıza doğal ve çekici bir renk kazandırın. Kalıcı güzellik için hemen randevunuzu alın! ",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'gelin-topuzu',
            'uniq_slug' => 'bridal-hair',
            "meta_information" => [
                "title" => "Kadıköy - Gelin Saç Modelleri | S Art Beauty Center",
                "description" => "Muhteşem gelin saç modelleriyle özel gününüzde muhteşem görünün! Uzmanlarımızla birlikte hayalinizdeki gelin saçını keşfedin.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'ipek-kirpik',
            'uniq_slug' => 'silk-eyelash',
            "meta_information" => [
                "title" => "Kadıköy - İpek Kirpik Uygulamaları | S Art Beauty Center",
                "description" => "S Art Beauty Center'da ipek kirpik uygulamalarıyla kalıcı ve doğal bir görünüm elde edin. Güzelliğinize değer katın!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'kas-laminasyon',
            'uniq_slug' => 'eyebrow-lamination',
            "meta_information" => [
                "title" => "Kadıköy - Kaş Laminasyonu | S Art Beauty Center",
                "description" => "Doğal ve çarpıcı kaşlar için S Art Beauty Center'da kaş laminasyonu! Uzmanlarımızla birlikte kaşlarınıza daha dolgun ve düzgün bir görünüm kazandırın.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'kalici-oje',
            'uniq_slug' => 'permanent-nail-polish',
            "meta_information" => [
                "title" => "Kadıköy - Kalıcı Oje Modelleri | S Art Beauty Center",
                "description" => "S Art Beauty Center'da kalıcı oje modelleriyle tırnaklarınıza şıklık katın! Geniş renk seçenekleriyle öne çıkan kalıcı oje uygulamalarımızı keşfedin. ",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'keratin-bakimi',
            'uniq_slug' => 'keratin-care',
            "meta_information" => [
                "title" => "Kadıköy - Keratin Bakımı | S Art Beauty Center ",
                "description" => "Saçlarınıza özel bir dokunuş: S Art Beauty Center'da keratin bakımı ile kuru ve yıpranmış saçlarınıza derinlemesine bakım yapın.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'kirpik-lifting',
            'uniq_slug' => 'eyelash-lifting',
            "meta_information" => [
                "title" => "Kadıköy - Kirpik Lifting | S Art Beauty Center ",
                "description" => "Gözlerinizi Ön Plana Çıkarın: Kirpik Lifting ile Doğal ve Etkileyici Bir Görünüm! Hemen randevunuzu alın! ",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'manikur-ve-pedikur',
            'uniq_slug' => 'manicure-pedicure',
            "meta_information" => [
                "title" => "Kadıköy - Manikür ve Pedikür | S Art Beauty Center ",
                "description" => "Manikür ve pedikür ile tırnaklarınızı güçlendirin ve şıklığınızı tamamlayın. Randevu için hemen arayın.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'microblading',
            'uniq_slug' => 'microblading',
            "meta_information" => [
                "title" => "Kadıköy - Microblading | S Art Beauty Center ",
                "description" => "Microblading ile yüzünüze uygun, kalıcı ve doğal görünümlü kaşlara sahip olun. Randevunuzu hemen alın!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'nail-art',
            'uniq_slug' => 'nail-art',
            "meta_information" => [
                "title" => "Kadıköy - Nail Art Modelleri | S Art Beauty Center ",
                "description" => "S Art Beauty Center'da tırnaklarınıza renk katın! Uzmanlarımızla birlikte nail art ile benzersiz tırnak tasarımları yaratın. Şimdi randevunuzu alın!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'perma',
            'uniq_slug' => 'perming',
            "meta_information" => [
                "title" => "Kadıköy - Perma Saç Modelleri | S Art Beauty Center ",
                "description" => "Perma Saç ile Dalgalı ve Hacimli Saçlara Sahip Olun! Hemen Randevunuzu Alın ve Hayalini Kurduğunuz Saçlara Sahip Olun!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'protez-tirnak',
            'uniq_slug' => 'prosthetic-nails',
            "meta_information" => [
                "title" => "Kadıköy - Protez Tırnak Modelleri | S Art Beauty Center ",
                "description" => "S Art Beauty Center'da protez tırnak modelleri ile tırnaklarınızda benzersiz bir tarz yaratın. Uzmanlarımızla birlikte özel tasarım tırnaklara sahip olun.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'rofle',
            'uniq_slug' => 'hair-color-highlights',
            "meta_information" => [
                "title" => "Kadıköy - Röfle Saç Modelleri | S Art Beauty Center ",
                "description" => "Röfle saç modelleri için S Art Beauty Center'da doğal ve çekici görünüme kavuşun. Hemen randevunuzu alın!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'sac-boyasi',
            'uniq_slug' => 'hair-dye',
            "meta_information" => [
                "title" => "Kadıköy - Saç Boyası Modelleri | S Art Beauty Center ",
                "description" => "Saçlarınız için S Art Beauty Center'da çeşitli saç boyası seçenekleri! Hemen randevunuzu oluşturun.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'dip-boyasi',
            'uniq_slug' => 'hair-dip-dye',
            "meta_information" => [
                "title" => "Kadıköy - Dip Boya Uygulaması | S Art Beauty Center ",
                "description" => "Dip boya uygulaması ile S Art Beauty Center'da saçlarınıza canlılık katın. Uzman ellere güvenin, doğal ve çekici bir görünüm elde edin. ",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'sac-kesim',
            'uniq_slug' => 'hair-cut',
            "meta_information" => [
                "title" => "Kadıköy - Saç Kesim Modelleri | S Art Beauty Center ",
                "description" => "Tarzınızı ön plana çıkarın! S Art Beauty Center'da saç kesimiyle benzersiz bir görünüm elde edin. Randevunuzu şimdi oluşturun!",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'sac-kaynak',
            'uniq_slug' => 'hair-extension',
            "meta_information" => [
                "title" => "Kadıköy - Saç Kaynak Uygulaması | S Art Beauty Center ",
                "description" => "Saçlarınıza özel bir dokunuş! Saç kaynak uygulaması ile istediğiniz tarzı yakalayın. Randevu için hemen arayın.",
            ]
        ],
        [
            'lang' => 'tr',
            'slug' => 'seker-agda',
            'uniq_slug' => 'wax-application',
            "meta_information" => [
                "title" => "Kadıköy - Şeker Ağda Uygulaması | S Art Beauty Center ",
                "description" => "Şeker ağda uygulaması ile hassas ve doğal bir tüy alma deneyimi yaşayın. Randevunuzu hemen alın!",
            ]
        ],

        // TODO: -------------------- RU ----------------------------- //
        [
            'lang' => 'ru', 'slug' => 'uslugi',
            'uniq_slug' => 'services', "meta_information" => [
                "title" => "Наши услуги | S Art Beauty Center",
                "description" => "Откройте для себя наши услуги в S Art Beauty Center в Кадыкёй. Посетите нас для ухода за кожей, эпиляции, дизайна прически и многого другого.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => '/',
            'uniq_slug' => 'index',
            "meta_information" => [
                "title" => "Кадыкёй - Салон красоты | S Art Beauty Center",
                "description" => "В S Art Beauty Center мы предлагаем широкий спектр услуг: от лазерной эпиляции до ухода за ногтями, а также от ухода за кожей до ухода за волосами. ",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'o-nas',
            'uniq_slug' => 'about-us',
            "meta_information" => [
                "title" => "О нас | S Art Beauty Center",
                "description" => "В S Art Beauty мы предоставляем нашим клиентам наилучший сервис благодаря нашей команде экспертов и широкому спектру услуг.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'kontakty',
            'uniq_slug' => 'contact-us',
            "meta_information" => [
                "title" => "Кадыкёй - Свяжитесь с нами | S Art Beauty Center",
                "description" => "Вы можете отправить нам сообщение через нашу контактную страницу, чтобы запросить встречу или получить больше информации о наших услугах.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'udaleniye-volos-lazerom',
            'uniq_slug' => 'ice-laser-hair-removal',
            "meta_information" => [
                "title" => "кадыкёй - Лазерная эпиляция | S Art Beauty Center",
                "description" => "Попрощайтесь с нежелательными волосами с лазерной эпиляцией в S Art Beauty Center! Добейтесь гладкой кожи эффективно.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'selulitniy-massazh',
            'uniq_slug' => 'cellulite-massage',
            "meta_information" => [
                "title" => "G5 антицеллюлитный массаж | S Art Beauty Center",
                "description" => "Хотите избавиться от целлюлита? В S Art Beauty Center вы можете надежно и эффективно уменьшить проявление целлюлита с помощью антицеллюлитного массажа G5!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'roll-shape',
            'uniq_slug' => 'roll-shape',
            "meta_information" => [
                "title" => "кадыкёй - Ажыбадем Roll Shape | S Art Beauty Center",
                "description" => "Rollshape сочетает традиционный восточный массаж с современной технологией, чтобы улучшить кровообращение и уменьшить целлюлит.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'keratinovoye-vypryamleniye-volos',
            'uniq_slug' => 'brazillian-blow-dry',
            "meta_information" => [
                "title" => "кадыкёй - Бразильское выпрямление | S Art Beauty Center",
                "description" => "Побалуйте свои волосы с помощью бразильского выпрямления! Укрепите свои волосы и добейтесь более здорового вида с нашей командой экспертов.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uhod-za-kozhey',
            'uniq_slug' => 'skin-care',
            "meta_information" => [
                "title" => "кадыкёй - Уход за кожей | S Art Beauty Center",
                "description" => "Омолодите свою кожу с профессиональным уходом за кожей в S Art Beauty Center! Обновите свою кожу с помощью наших опытных косметологов.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'diplayner',
            'uniq_slug' => 'deepliner',
            "meta_information" => [
                "title" => "кадыкёй - Подводка для глаз | S Art Beauty Center",
                "description" => "Постоянное прикосновение к вашим глазам: добейтесь идеального вида с помощью перманентной подводки и диплайнера в S Art Beauty Center!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'permanentniy-makiyazh-gub',
            'uniq_slug' => 'lip-coloring',
            "meta_information" => [
                "title" => "кадыкёй - Окрашивание губ | S Art Beauty Center",
                "description" => "Придайте губам естественный и привлекательный цвет с помощью окрашивания. Запишитесь на прием для длительной красоты!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'svadebnaya-prichoska',
            'uniq_slug' => 'bridal-hair',
            "meta_information" => [
                "title" => "кадыкёй - Свадебные прически | S Art Beauty Center",
                "description" => "Выглядите великолепно в свой особенный день с красивыми свадебными прическами! Откройте для себя свою мечту о свадебной прическе с нашими экспертами.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'narashivaniye-resnits',
            'uniq_slug' => 'silk-eyelash',
            "meta_information" => [
                "title" => "кадыкёй - Шелковые ресницы | S Art Beauty Center",
                "description" => "Добейтесь долговечного и естественного вида с шелковыми ресницами в S Art Beauty Center. Придайте красоту своей внешности!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'laminirovaniye-brovey',
            'uniq_slug' => 'eyebrow-lamination',
            "meta_information" => [
                "title" => "кадыкёй - Ламинирование бровей | S Art Beauty Center",
                "description" => "Для естественных и выразительных бровей попробуйте ламинирование бровей в S Art Beauty Center! Добейтесь более густых и четких бровей с нашими экспертами.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'permanentniy-lak-dlya-nogtey',
            'uniq_slug' => 'permanent-nail-polish',
            "meta_information" => [
                "title" => "кадыкёй - Перманентный лак | S Art Beauty Center",
                "description" => "Ногти выглядят элегантно с перманентным лаком в S Art Beauty Center! Откройте для себя наши приложения с широким выбором цветов.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'keratinoviy-ukhod',
            'uniq_slug' => 'keratin-care',
            "meta_information" => [
                "title" => "кадыкёй - Кератиновое выпрямление | S Art Beauty Center",
                "description" => "Особое прикосновение к вашим волосам: обеспечьте глубокий уход для ваших сухих и поврежденных волос с помощью кератинового лечения в S Art Beauty Center.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'lifting-resnits',
            'uniq_slug' => 'eyelash-lifting',
            "meta_information" => [
                "title" => "кадыкёй - Лифтинг ресниц | S Art Beauty Center",
                "description" => "Подчеркните свои глаза: добейтесь естественного и потрясающего вида с помощью лифтинга ресниц! Запишитесь на прием прямо сейчас!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'manikyur-pedikyur',
            'uniq_slug' => 'manicure-pedicure',
            "meta_information" => [
                "title" => "кадыкёй - Маникюр и педикюр | S Art Beauty Center",
                "description" => "Укрепите свои ногти и завершите свою элегантность с маникюром и педикюром. Позвоните прямо сейчас, чтобы записаться на прием.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'microblading',
            'uniq_slug' => 'microblading',
            "meta_information" => [
                "title" => "кадыкёй - Микроблейдинг | S Art Beauty Center",
                "description" => "Добейтесь постоянных и естественно выглядящих бровей, подходящих к вашему лицу, с помощью микроблейдинга. Запишитесь на прием прямо сейчас!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'dizayn-nogtey',
            'uniq_slug' => 'nail-art',
            "meta_information" => [
                "title" => "кадыкёй - Дизайн ногтей | S Art Beauty Center",
                "description" => "Придайте цвет своим ногтям в S Art Beauty Center! Создавайте уникальные дизайны ногтей с помощью наших экспертов. Запишитесь на прием прямо сейчас!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'permanentnaya-zavivka-volos',
            'uniq_slug' => 'perming',
            "meta_information" => [
                "title" => "кадыкёй - Химическая завивка | S Art Beauty Center",
                "description" => "Добейтесь волнистых и объемных волос с помощью химической завивки! Запишитесь на прием прямо сейчас и получите волосы своей мечты!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'protezirovaniye-nogtey',
            'uniq_slug' => 'prosthetic-nails',
            "meta_information" => [
                "title" => "кадыкёй - Протезирование ногтей | S Art Beauty Center",
                "description" => "Создайте уникальный стиль для своих ногтей с протезированием ногтей в S Art Beauty Center. Добейтесь индивидуально разработанных ногтей с нашими экспертами.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'melirovaniye',
            'uniq_slug' => 'hair-color-highlights',
            "meta_information" => [
                "title" => "кадыкёй - Мелирование | S Art Beauty Center",
                "description" => "Добейтесь естественного и привлекательного вида с мелированием в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'okrashivaniye-volos',
            'uniq_slug' => 'hair-dye',
            "meta_information" => [
                "title" => "кадыкёй - Окрашивание волос | S Art Beauty Center",
                "description" => "Различные варианты окрашивания волос для ваших волос в S Art Beauty Center! Запишитесь на прием прямо сейчас.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'okrashivaniye-dip-dye',
            'uniq_slug' => 'hair-dip-dye',
            "meta_information" => [
                "title" => "кадыкёй - Окрашивание корней | S Art Beauty Center",
                "description" => "Придайте живость волосам с окрашиванием корней в S Art Beauty Center. Доверьтесь нашим экспертам для естественного и привлекательного вида.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'strizhka',
            'uniq_slug' => 'hair-cut',
            "meta_information" => [
                "title" => "кадыкёй - Стрижка | S Art Beauty Center",
                "description" => "Подчеркните свой стиль! Добейтесь уникального вида с помощью стрижки в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'narashivaniye-volos',
            'uniq_slug' => 'hair-extension',
            "meta_information" => [
                "title" => "кадыкёй - Наращивание волос | S Art Beauty Center",
                "description" => "Особое прикосновение к вашим волосам! Добейтесь желаемого стиля с помощью наращивания волос. Позвоните прямо сейчас, чтобы записаться на прием.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'shugaring',
            'uniq_slug' => 'wax-application',
            "meta_information" => [
                "title" => "кадыкёй - Ваксинг | S Art Beauty Center",
                "description" => "Испытайте гладкость кожи без волос с профессиональными услугами ваксинга в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
            ]
        ],
    ];

    public function run(): void
    {
        collect($this->routes)->each(function ($route) {
            $model = new Routes();
            $model->slug = $route['slug'];
            $model->amp = 0;
            $model->is_active = 1;
            $model->uniq_slug = $route['uniq_slug'];
            $model->meta_information = [
                'title' => $route['meta_information']['title'],
                'description' => $route['meta_information']['description'],
            ];
            $model->lang = $route['lang'];
            $model->save();
        });
    }
}
