{{-- Politikalarımız Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
            style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Politikalarımız</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('pages.home') }}" title="S ART Beauty Center">S ART Beauty Center</a></li>
                            <li>Politikalarımız</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <div class="section-full content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="sticky-top">
                                <ul class="service-list m-b30">
                                    <li><a href="#gizlilik" title="Gizlilik Politikası">Gizlilik Politikası</a>
                                    </li>
                                    <li><a href="#kullanim" title="Kullanım Koşulları">Kullanım Koşulları</a>
                                    </li>
                                    <li><a href="#cerez" title="Çerez Politikası">Çerez Politikası</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-9 col-md-8" id="gizlilik">
                            <h2 class="m-t0 m-b10 fw6 text-primary">Gizlilik Politikası</h2>
                            <p><i>Son güncellenme : 09/08/2023</i></p>

                            <p align="justify">Güvenliğiniz bizim için önemli. Bu sebeple bizimle paylaşacağınız kişisel
                                verileriz hassasiyetle korunmaktadır.<br>

                                Biz, <b>S ART Beauty Center</b>, veri sorumlusu olarak, bu gizlilik ve kişisel verilerin
                                korunması politikası ile, hangi kişisel verilerinizin hangi amaçla işleneceği, işlenen
                                verilerin kimlerle ve neden paylaşılabileceği, veri işleme yöntemimiz ve hukuki sebeplerimiz
                                ile; işlenen verilerinize ilişkin haklarınızın neler olduğu hususunda sizleri aydınlatmayı
                                amaçlıyoruz.</p>

                            <h4>Toplanan Kişisel Verileriniz, Toplanma Yöntemi ve Hukuki Sebebi</h4>
                            <p align="justify">IP adresiniz ve kullanıcı aracısı bilgileriniz, sadece analiz yapmak amacıyla
                                ve çerezler (cookies) vb. teknolojiler vasıtasıyla, otomatik veya otomatik olmayan
                                yöntemlerle ve bazen de analitik sağlayıcılar, reklam ağları, arama bilgi sağlayıcıları,
                                teknoloji sağlayıcıları gibi üçüncü taraflardan elde edilerek, kaydedilerek, depolanarak ve
                                güncellenerek, aramızdaki hizmet ve sözleşme ilişkisi çerçevesinde ve süresince, meşru
                                menfaat işleme şartına dayanılarak işlenecektir.</p>

                            <h4>Kişisel Verilerinizin İşlenme Amacı</h4>
                            <p align="justify">Bizimle paylaştığınız kişisel verileriniz sadece analiz yapmak suretiyle;
                                sunduğumuz hizmetlerin gerekliliklerini en iyi şekilde yerine getirebilmek, bu hizmetlere
                                sizin tarafınızdan ulaşılabilmesini ve maksimum düzeyde faydalanılabilmesini sağlamak,
                                hizmetlerimizi, ihtiyaçlarınız doğrultusunda geliştirebilmek ve sizleri daha geniş kapsamlı
                                hizmet sağlayıcıları ile yasal çerçeveler içerisinde buluşturabilmek ve kanundan doğan
                                zorunlulukların (kişisel verilerin talep halinde adli ve idari makamlarla paylaşılması)
                                yerine getirilebilmesi amacıyla, sözleşme ve hizmet süresince, amacına uygun ve ölçülü bir
                                şekilde işlenecek ve güncellenecektir.</p>

                            <h4>Toplanan Kişisel Verilerin Kimlere ve Hangi Amaçlarla Aktarılabileceği</h4>
                            <p align="justify">Bizimle paylaştığınız kişisel verileriniz; faaliyetlerimizi yürütmek üzere
                                hizmet aldığımız ve/veya verdiğimiz, sözleşmesel ilişki içerisinde bulunduğumuz, iş birliği
                                yaptığımız, yurt içi ve yurt dışındaki 3. şahıslar ile kurum ve kuruluşlara ve talep halinde
                                adli ve idari makamlara, gerekli teknik ve idari önlemler alınması koşulu ile
                                aktarılabilecektir.</p>

                            <h4>Kişisel Verileri İşlenen Kişi Olarak Haklarınız</h4>
                            <p>KVKK madde 11 uyarınca herkes, veri sorumlusuna başvurarak aşağıdaki haklarını kullanabilir:
                            <ol>
                                <li>Kişisel veri işlenip işlenmediğini öğrenme,</li>
                                <li>Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</li>
                                <li>Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını
                                    öğrenme,</li>
                                <li>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</li>
                                <li>Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini
                                    isteme,</li>
                                <li>Kişisel verilerin silinmesini veya yok edilmesini isteme,</li>
                                <li>(5) ve (6) bentleri uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı üçüncü
                                    kişilere bildirilmesini isteme,</li>
                                <li>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle
                                    kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,</li>
                                <li>Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde
                                    zararın giderilmesini talep etme, haklarına sahiptir.</li>
                                </p>
                            </ol>
                            <p align="justify">Yukarıda sayılan haklarınızı kullanmak üzere
                                "<i>acibademasbeauty@gmail.com</i>" üzerinden bizimle iletişime geçebilirsiniz.</p><br>

                            <h4>İletişim</h4>
                            <p align="justify">Sizlere hizmet sunabilmek amaçlı analizler yapabilmek için, sadece gerekli
                                olan kişisel verilerinizin, işbu gizlilik ve kişisel verilerin işlenmesi politikası uyarınca
                                işlenmesini, kabul edip etmemek hususunda tamamen özgürsünüz. Siteyi kullanmaya devam
                                ettiğiniz takdirde kabul etmiş olduğunuz tarafımızca varsayılacak olup, daha ayrıntılı bilgi
                                için bizimle "acibademasbeauty@gmail.com" e-mail adresi üzerinden iletişime geçmekten lütfen
                                çekinmeyiniz.</p>

                            <div id="kullanim">
                                <h2 class="m-t0 m-b10 fw6 text-primary">Kullanım Koşulları</h2>
                                <p><i>Son güncellenme : 09/08/2023</i></p>

                                <p align="justify">Sevgili ziyaretçimiz, lütfen www.sartbeauty.com web sitemizi ziyaret
                                    etmeden önce işbu kullanım koşulları sözleşmesini dikkatlice okuyunuz. Siteye erişiminiz
                                    tamamen bu sözleşmeyi kabulünüze ve bu sözleşme ile belirlenen şartlara uymanıza
                                    bağlıdır. Şayet bu sözleşmede yazan herhangi bir koşulu kabul etmiyorsanız, lütfen
                                    siteye erişiminizi sonlandırınız. Siteye erişiminizi sürdürdüğünüz takdirde, koşulsuz ve
                                    kısıtlamasız olarak, işbu sözleşme metninin tamamını kabul ettiğinizin, tarafımızca
                                    varsayılacağını lütfen unutmayınız.</p>

                                <p align="justify">www.sartbeauty.com web sitesi S ART Beauty Center tarafından yönetilmekte
                                    olup, bundan sonra SİTE olarak anılacaktır. İşbu siteye ilişkin Kullanım Koşulları,
                                    yayınlanmakla yürürlüğe girer. Değişiklik yapma hakkı, tek taraflı olarak SİTE'ye aittir
                                    ve SİTE üzerinden güncel olarak paylaşılacak olan bu değişiklikleri, tüm
                                    kullanıcılarımız baştan kabul etmiş sayılır.</p>

                                <h4>Gizlilik</h4>
                                <p align="justify">Gizlilik, ayrı bir sayfada, kişisel verilerinizin tarafımızca
                                    işlenmesinin esaslarını düzenlemek üzere mevcuttur. SİTE'yi kullandığınız takdirde, bu
                                    verilerin işlenmesinin gizlilik politikasına uygun olarak gerçekleştiğini kabul
                                    edersiniz.</p>

                                <h4>Hizmet Kapsamı</h4>
                                <p align="justify">S ART Beauty Center olarak, sunacağımız hizmetlerin kapsamını ve
                                    niteliğini, yasalar çerçevesinde belirlemekte tamamen serbest olup; hizmetlere ilişkin
                                    yapacağımız değişiklikler, SİTE'de yayınlanmakla yürürlüğe girmiş sayılacaktır.</p>

                                <h4>Telif Hakları</h4>
                                <p align="justify">SİTE'de yayınlanan tüm metin, kod, grafikler, logolar, resimler, ses
                                    dosyaları ve kullanılan yazılımın sahibi (bundan böyle ve daha sonra 'içerik' olarak
                                    anılacaktır) S ART Beauty Center olup, tüm hakları saklıdır. Yazılı izin olmaksızın site
                                    içeriğinin çoğaltılması veya kopyalanması kesinlikle yasaktır.</p>

                                <h4>Genel Hükümler</h4>
                                <p align="justify">
                                    <li>Kullanıcıların tamamı, SİTE'yi yalnızca hukuka uygun ve şahsi amaçlarla
                                        kullanacaklarını ve üçüncü kişinin haklarına tecavüz teşkil edecek nitelikteki
                                        herhangi bir faaliyette bulunmayacağını taahhüt eder. SİTE dâhilinde yaptıkları
                                        işlem ve eylemlerindeki, hukuki ve cezai sorumlulukları kendilerine aittir. İşbu iş
                                        ve eylemler sebebiyle, üçüncü kişilerin uğradıkları veya uğrayabilecekleri
                                        zararlardan dolayı SİTE'nin doğrudan ve/veya dolaylı hiçbir sorumluluğu yoktur.</li>
                                    <li> SİTE'de mevcut bilgilerin doğruluk ve güncelliğini sağlamak için elimizden geleni
                                        yapmaktayız. Lakin gösterdiğimiz çabaya rağmen, bu bilgiler, fiili değişikliklerin
                                        gerisinde kalabilir, birtakım farklılıklar olabilir. Bu sebeple, site içerisinde yer
                                        alan bilgilerin doğruluğu ve güncelliği ile ilgili tarafımızca, açık veya zımni,
                                        herhangi bir garanti verilmemekte, hiçbir taahhütte bulunulmamaktadır. </li>
                                    <li> SİTE'de üçüncü şahıslar tarafından işletilen ve içerikleri tarafımızca bilinmeyen
                                        diğer web sitelerine, uygulamalara ve platformlara köprüler (hyperlink) bulunabilir.
                                        SİTE, işlevsellik yalnızca bu sitelere ulaşımı sağlamakta olup, içerikleri ile
                                        ilgili hiçbir sorumluluk kabul etmemekteyiz. </li>
                                    <li>SİTE'yi virüslerden temizlenmiş tutmak konusunda elimizden geleni yapsak da,
                                        virüslerin tamamen bulunmadığı garantisini vermemekteyiz. Bu nedenle veri
                                        indirirken, virüslere karşı gerekli önlemi almak, kullanıcıların sorumluluğundadır.
                                        Virüs vb. kötü amaçlı programlar, kodlar veya materyallerin sebep olabileceği
                                        zararlardan dolayı sorumluluk kabul etmemekteyiz. </li>
                                    <li> SİTE'de sunulan hizmetlerde, kusur veya hata olmayacağına ya da kesintisiz hizmet
                                        verileceğine dair garanti vermemekteyiz. SİTE'ye ve sitenin hizmetlerine veya
                                        herhangi bir bölümüne olan erişiminizi önceden bildirmeksizin herhangi bir zamanda
                                        sonlandırabiliriz. </li>
                                </p>

                                <h4>Sorumluluğun Sınırlandırılması</h4>
                                <p align="justify">SİTE'nin kullanımından doğan zararlara ilişkin sorumluluğumuz, kast ve
                                    ağır ihmal ile sınırlıdır. Sözleşmenin ihlalinden doğan zararlarda, talep edilebilecek
                                    toplam tazminat, öngörülebilir hasarlar ile sınırlıdır. Yukarıda bahsedilen sorumluluk
                                    sınırlamaları aynı zamanda insan hayatına, bedeni yaralanmaya veya bir kişinin sağlığına
                                    gelebilecek zararlar durumunda geçerli değildir. Hukuken mücbir sebep sayılan tüm
                                    durumlarda, gecikme, ifa etmeme veya temerrütten dolayı, herhangi bir tazminat
                                    yükümlülüğümüz doğmayacaktır.</p>

                                <p align="justify"><b>Uyuşmazlık Çözümü:</b> İşbu Sözleşme'nin uygulanmasından veya
                                    yorumlanmasından doğacak her türlü uyuşmazlığın çözümünde, Türkiye Cumhuriyeti yasaları
                                    uygulanır; İSTANBUL Adliyesi Mahkemeleri ve İcra Daireleri yetkilidir.</p>

                            </div>

                            <div id="cerez">
                                <h2 class="m-t0 m-b10 fw6 text-primary">Çerez Politikası</h2>
                                <p><i>Son güncellenme : 09/08/2023</i></p>

                                <p align="justify">Biz, S ART Beauty Center, olarak güvenliğinize önem veriyor ve bu Çerez
                                    Politikası ile siz sevgili ziyaretçilerimizi, web sitemizde hangi çerezleri, hangi
                                    amaçla kullandığımız ve çerez ayarlarınızı nasıl değiştireceğiniz konularında kısaca
                                    bilgilendirmeyi hedefliyoruz.</p>

                                <p align="justify">Sizlere daha iyi hizmet verebilmek adına, çerezler vasıtasıyla, ne tür
                                    kişisel verilerinizin hangi amaçla toplandığı ve nasıl işlendiği konularında, kısaca
                                    bilgi sahibi olmak için lütfen bu Çerez Politikasını okuyunuz. Daha fazla bilgi için
                                    Gizlilik Politikamıza göz atabilir ya da bizlerle çekinmeden iletişime geçebilirsiniz.
                                </p>

                                <h4>Çerez Nedir?</h4>
                                <p align="justify">Çerezler, kullanıcıların web sitelerini daha verimli bir şekilde
                                    kullanabilmeleri adına, cihazlarına kaydedilen küçük dosyacıklardır. Çerezler
                                    vasıtasıyla kullanıcıların bilgilerinin işleniyor olması sebebiyle, 6698 sayılı Kişisel
                                    Verilerin Korunması Kanunu gereğince, kullanıcıların bilgilendirilmeleri ve onaylarının
                                    alınması gerekmektedir.</p>
                                <p align="justify">Bizler de siz sevgili ziyaretçilerimizin, web sitemizden en verimli
                                    şekilde yararlanabilmelerini ve siz sevgili ziyaretçilerimizin kullanıcı deneyimlerinin
                                    geliştirilebilmesini sağlamak adına, çeşitli çerezler kullanmaktayız.</p>

                                <h4>1. Zorunlu Çerezler</h4>
                                <p align="justify">Zorunlu çerezler, web sitesine ilişkin temel işlevleri etkinleştirerek
                                    web sitesinin kullanılabilir hale gelmesini sağlayan çerezlerdir. Web sitesi bu çerezler
                                    olmadan düzgün çalışmaz.</p>

                                <h4>2. Performans Çerezleri</h4>
                                <p align="justify">Performans çerezleri, ziyaretçilerin web sitesine ilişkin kullanım
                                    bilgilerini ve tercihlerini anonim olarak toplayan ve bu sayede web sitesinin
                                    performansının geliştirilmesine olanak sağlayan çerezlerdir.</p>

                                <h4>3. Fonksiyonel Çerezler</h4>
                                <p align="justify">Fonksiyonel çerezler, kullanıcıların web sitesine ilişkin geçmiş
                                    kullanımlarından yola çıkılarak gelecekteki ziyaretlerinde tanınmalarını ve
                                    hatırlanmalarını sağlayan ve bu sayede web sitelerinin kullanıcılara dil, bölge vb. gibi
                                    kişiselleştirilmiş bir hizmet sunmasına olanak tanıyan çerezlerdir.</p>

                                <h4>4. Reklam Çerezleri</h4>
                                <p align="justify">Reklam çerezleri, üçüncü taraflara ait çerezlerdir ve web sitelerinde
                                    ziyaretçilerin davranışlarını izlemek için kullanılırlar. Bu çerezlerin amaçları,
                                    ziyaretçilerin ihtiyaçlarına yönelik ilgilerini çekecek reklamların gösterilmesine
                                    yardımcı olmaktır ve sorumluluğu çerez sahibi üçüncü taraflara aittir.</p>

                                <h4>Çerezler İle İşlenen Kişisel Veriler Nelerdir?</h4>
                                <p align="justify">Kimlik (isim, soy isim, doğum tarihi vb.) ve iletişim (adres, e-posta
                                    adresi, telefon, IP, konum vb.) bilgileriniz tarafımızca, çerezler (cookies)
                                    vasıtasıyla, otomatik veya otomatik olmayan yöntemlerle ve bazen de analitik
                                    sağlayıcılar, reklam ağları, arama bilgi sağlayıcıları, teknoloji sağlayıcıları gibi
                                    üçüncü taraflardan elde edilerek, kaydedilerek, depolanarak ve güncellenerek, aramızdaki
                                    hizmet ve sözleşme ilişkisi çerçevesinde ve süresince, meşru menfaat işleme şartına
                                    dayanılarak işlenecektir.</p>

                                <h4>Çerezler Hangi Amaçla Kullanılmaktadır?</h4>
                                <p align="justify">Web sitemizde, şüpheli eylemlerin tespiti yoluyla güvenliğin sağlanması,
                                    kullanıcıların tercihleri doğrultusunda işlevsellik ve performansın artırılması,
                                    ürünlerin ve hizmetlerin geliştirilmesi ve kişiselleştirilmesi ile bu hizmetlere
                                    ulaşımın kolaylaştırılması, sözleşmesel ve hukuki sorumlulukların yerine getirilmesi
                                    amaçlı çerezler kullanmaktadır. Ayrıca kullanıcıların daha geniş kapsamlı hizmet
                                    sağlayıcılar ile buluşturulabilmesi amacıyla reklam çerezleri ve üçüncü taraflarla bilgi
                                    paylaşımı da söz konusudur.</p>

                                <h4>Çerezler Nasıl Yönetilmektedir?</h4>
                                <p align="justify">Tüm bu açıklamalardan sonra, hangi çerezlerin kullanılacağı konusu,
                                    tamamen kullanıcılarımızın özgür iradelerine bırakılmıştır. Çerez tercihlerinizi,
                                    tarayıcınızın ayarlarından silerek ya da engelleyerek, web sitemize adım attığınız anda
                                    yönetebilir ya da gelecekte, istediğiniz zaman bu ayarları değiştirebilirsiniz. Daha
                                    ayrıntılı bilgi için <a href="#gizlilik" title="Gizlilik Politikası">Gizlilik
                                        Politikamıza</a> göz atabilir ya da bizlerle <i>acibademasbeauty@gmail.com</i>
                                    e-mail adresi üzerinden iletişime geçebilirsiniz.</p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
