<?php
/*
*
* help_faq [Turkish]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Oturum Açma ve Kayıt Konuları'
	),
	array(
		0 => 'Neden oturum açamıyorum?',
		1 => 'Bunun farklı sebepleri olabilir. Öncelikle, kullanıcı adı ve parolanızın doğru olduğuna emin olun. Eğer doğruysa, uzaklaştırılmadığınızı doğrulamak için pano yöneticisi ile irtibata geçin. Aynı zamanda yönetici düzeltilmesi gereken bir hata da yapmış olabilir.'
	),
	array(
		0 => 'Neden üye olmalıyım?',
		1 => 'Böyle bir zorunluluğunuz olmayabilir. İleti gönderebilmek için üye olmanızın gerekip gerekmeyeceği pano yöneticisine bağlıdır. Yine de üye olmak, misafir ziyaretçiler için mevcut olmayan avatar belirleme, özel mesaj, kullanıcılar arası e-posta, grup üyeliği gibi bazı ek özellikleri kullanımınıza sunacaktır. Kayıt olmanız önerilir ve bu işlem sadece birkaç dakika alır.'
	),
	array(
		0 => 'Neden oturumum otomatik olarak kapanıyor?',
		1 => 'Eğer oturum açarken <em>Beni hatırla</em> kutusunu işaretlemezseniz pano sizi sadece mevcut oturum boyunca çevirimiçi olacak şekilde tutacaktır. Bu hesabınızın başka biri tarafından kullanılmasını engeller. Sürekli bağlı kalmak istiyorsanız kutuyu işaretleyebilirsiniz. Kütüphane, internet cafe, üniversite bilgisayar labaratuvarı gibi paylaşıma açık bilgisayarlarda bu şekilde giriş yapmanız önerilmez. Eğer kontrol kutusunu göremiyorsanız, bu pano yöneticisinin bu özelliği pasif hale getirdiği anlamına gelir.'
	),
	array(
		0 => 'Aktif üye listesinde kullanıcı adımın görünmesini nasıl engellerim?',
		1 => 'Kullanıcı panelinizdeki “Pano seçenekleri” altında <em>Çevirimiçi olduğumu gizle</em> seçeneğini göreceksiniz. Eğer bu seçeneği <samp>Evet</samp> olarak işaretleyerek aktif hale getirirseniz, sadece pano yöneticileri, yetkililer ve kendiniz tarafından görünür hale geleceksiniz. Gizli üye olacaksınız.'
	),
	array(
		0 => 'Parolamı unuttum!',
		1 => 'Endişelenmeyin! Parolanıza ulaşamamanız durumunda yeni bir parola oluşturulabilir. Bu durumda oturum açma sayfasına gidin ve <em>Parolamı unuttum</em> bağlantısına tıklayın, talimatları uygulayın ve zaman kaybetmeden tekrar çevirimiçi olun.'
	),
	array(
		0 => 'Kayıt oldum ancak oturum açamıyorum!',
		1 => 'Öncelikle, doğru kullanıcı adı ve parola girdiğinizden emin olun. Eğer doğruysa iki nedenden oturum açamıyor olabilirsiniz. Eğer COPPA desteği aktif hale getirilmişse ve kayıt esnasında 13 yaşından küçük olduğunu ifade etmişseniz, size gönderilen yönergeyi takip edin. Bazı pano yöneticileri üyelerin aktif olarak panoyu kullanmaları için kendilerinin ya da üyelerin kendi üyeliklerini aktif hale getirmesini zorunlu kılmaktadır; bu bilgi kayıt aşamasında size ifade edilmektedir. Eğer size bir e-posta geldiyse, e-postadaki talimatları takip edin. Eğer size bu e-posta ulaşmadıysa, yanlış bir e-posta adresi vermiş olabilir, e-posta bir istenmeyen posta filtresine takılmış olabilir. Eğer verdiğiniz e-postanın doğruluğundan eminseniz, yöneticilerden birine ulaşmayı deneyin.'
	),
	array(
		0 => 'Daha önce üye olduğum halde neden oturum açamıyorum?!',
		1 => 'Kayıt aşamasında verdiğiniz e-posta adresine gönderilen iletide mevcut bulunan kullanıcı adınızı ve parolanızı kontrol edin ve yeniden oturum açmayı deneyin. Bir sebeplerden ötürü yöneticilerden biri kullanıcı adınızı silmiş ya da üyeliğinizi pasif hale getirmiş olabilir. Bununla birlikte, bir çok pano yöneticisi veritabanının aşırı kullanımını önlemek için uzun bir süre herhangi bir katılım göstermeyen üyeleri belli aralıklarla silmektedir. Eğer ikinci ihtimal söz konusu ise yeniden kayıt olmayı ve daha aktif bir katılım göstermeyi deneyin.'
	),
	array(
		0 => 'COPPA nedir?',
		1 => 'COPPA, "1998 Çevirimiçi Çocuk Güvenliği ve Koruması Hareketi", Birleşik Devletlerin 13 yaşından küçük çocukların bilgi toplamak için ailelerinden yazılı izin almalarını gerektiren bir kanun ya da yasal varislerin bilgilendirilmesi ve 13 yaşından küçüklerin kişisel bilgilerinin toplanmasına izin vermesi metodudur. Eğer kayıt esnasında bu durumun size uyduğundan emin değilseniz yardım için yasal danışmanınıza başvurabilirsiniz. Unutmayın ki; phpBB size yasal öneriler sağlayamaz ve kayıt anlaşmasındaki kurallar dışında herhangi bir yasal bağlantı noktası belirtemez.',
	),
	array(
		0 => 'Neden kayıt olamıyorum?',
		1 => 'Pano yöneticisi IP adresinizi yasaklamış olabilir veya kullanıcı adınız izinli olmayabilir. Yeni ziyaretçi kaydı alımı da engellemiş olabilir. Yardım için pano yöneticisine başvurabilirisniz.',
	),
	array(
		0 => '“Tüm pano çerezlerini sil” ne yapar?',
		1 => '“Tüm pano çerezlerini sil” panoya bağlı kalmanızı sağlamak için phpBB3 tarafından oluşturulan bütün çerezleri siler, ve aynı zamanda eğer pano yöneticisi ayarlamışsa izlerin okunması gibi fonksiyonlar sağlar. Eğer oturum açma esnasında sorun yaşıyorsanız, bütün pano çerezlerini silmeniz sorununuzun çözümüne yardımcı olabilir.',
	),
	array(
		0 => '--',
		1 => 'Kullanıcı Tercihleri ve Ayarları'
	),
	array(
		0 => 'Ayarlarımı nasıl değiştirebilirim?',
		1 => 'Eğer kayıtlıysanız bütün ayarlarınız veri tabanında tutulur. Ayarlarınızı değiştirmek için, Kullanıcı Kontrol Panelinize girin; pano sayfalarının hepsinin üst kısmında bulunan bir bağlatıdır. Bu sistem bütün tercih ve ayarlarınızı değiştirmenizi sağlayacaktır.'
	),
	array(
		0 => 'Zamanlar doğru değil!',
		1 => 'Panonun zaman dilimi sizinkinden farklı olabilir. Eğer durumunuz buna uyuyorsa kullanıcı panelinize gidin, hesabınızdaki zaman dilimini Londra, Paris, New York, Sidney gibi özel bir alanla değiştirin. Unutmayın ki zaman dilimini değiştirmeniz diğer ayarlarda olduğu gibi kayıtlı üye olmanıza bağlıdır. Eğer kayıtlı üye değilseniz bu kaydolmak iyi bir zaman olabilir.'
	),
	array(
		0 => 'Zaman dilimini değiştirmeme rağmen zaman hala yanlış!',
		1 => 'Eğer zaman dilimi ve Yaz Saati uygulamasını (DST) doğru yaptığınızdan eminseniz ve zaman hala yanlışsa, bunun sebebi sunucu saatının yanlış olmasıdır. Lütfen, yöneticiyi problemin düzeltilmesi için durumdan haberdar edin.'
	),
	array(
		0 => 'Listede benim dilim mevcut değil!',
		1 => 'Bunun muhtemel sebepleri yöneticinin sizin dilinizi yüklememiş olması ya da kimsenin bu pononun sizin dilinize henüz tercümesini yapmamış olması olabilir. Lütfen, yöneticiye sizin dilinizin yüklü olup olmadığını sorun. Eğer dil paketi yoksa tercüme yapma özgürlüğünüz vardır. Daha fazla bilgi için phpBB Grubunun web sitesini ziyaret edebilirisiniz (sayfa altındaki bağlantıya bakınız).'
	),
	array(
		0 => 'Kullanıcı adımın altında nasıl resim gösterebilirim?',
		1 => 'İletilere bakarken kullanıcı adınızın altında iki resim olabilir. Kullanılan stile bağılı olarak, birinci resim sizin seviyeniz ile ilgilidir, genel olarak yıldızlardan ya da sizin ne kadar ileti gönderdiğinizi ya da forumdaki statünüzü gösteren bir blok olabilir. Aşağısında avatar diye bilinen daha geniş bir resim olabilir, bu genel olarak kullanıcıya özeldir. Avatar kullanımını aktif hale getirmek pano yöneticisine bağlıdır ve nasıl bir avatarın gösterilebileceği konusunda seçim yapma hakkına sahiptirler. Eğer avatar kullanamıyorsanız bu pano yöneticisinin kararıdır, bu durumun sebebini yöneticilere sorabilirsiniz.'
	),
	array(
		0 => 'Seviye nedir ve nasıl değiştirebilirim?',
		1 => 'Seviye, kullanıcı adınızın altında görünür ve gönderdiğiniz ileti sayısını gösterir ya da yetkili ve yönetici gibi belli kullanıcıları belli eder. Genel olarak seviyenizi doğrudan değiştiremezsiniz çünkü; bu seviyelerin yönetimi pano yöneticisine aittir. Lütfen, sadece ileti sayınızı arttırmak için panoyu amacı dışında kullanmayın, muhtemelen yetkili ya da yöneticiler tarafından bu iletiler bulunacak ve iletileriniz silinerek basit bir şekilde seviyeniz düşürülecektir.'
	),
	array(
		0 => 'Üyeye e-posta gönder butonuna basınca neden oturum açmam isteniyor?',
		1 => 'Sadece kayıtlı kullanıcılar (mesaj panosu yöneticisinin izin vermesi durumunda) e-posta gönderebilir. Bunun amacı e-posta hizmetinin kayıt olmayan kullanıcların olumsuz kullanımlarını engellemektir.'
	),
	array(
		0 => '--',
		1 => 'Gönderim Konuları'
	),
	array(
		0 => 'Bir forumda nasıl başlık açabilirim?',
		1 => 'Forumların birinde yeni konu açmak için forumun üstündeki ya da ileti sayfasındaki ilgili butonu tıklayın. Bir ileti göndermeden önce kayıt olmanız gerekebilir, sizin için kullanılabilir olan özellikler panonun alt kısmında ve başlık ekranında listelenmiştir. Örneğin: Yeni başlık açabilirsiniz, Anketlerde oy kullanabilirsiniz, gibi'
	),
	array(
		0 => 'Bir iletiyi nasıl değiştirebilir veya silerim?',
		1 => 'Eğer yönetici ya da yetkili değilseniz sadece kendi iletinizde değişiklik ya da silme işlemi yapabilirsiniz. Bir iletiyi o ileti ile ilgili düzenleme butonunu tıklayarak değiştirebilirsiniz, bazen bu işlem için bir zaman kısıtlaması konulabilir.Eğer siz ileti yazdıktan sonra başka biri ileti göndermişse değiştirme ekranından ileti gösterim ekranına döndüğünüz zaman iletinizin altında kısa bir metin gösterilecektir, bu metinde iletiyi ne zaman ve kaç defa değiştirdiğiniz listelenecektir. Bu metin eğer başka biri ileti göndermemişse gösterilmeyecektir, yetkili ya da yöneticiler tarafından yapılan değişiklikler de gösterilmeyecektir. Bu durumda size düzenleme ile ilgili bir not yazmaları yetkili ya da yöneticilerin kendi tercihine kalmıştır. Unutmayın ki, normal kullanıcılar kendi iletilerinden sonra başka birinin ileti göndermesi durumunda iletilerini silemezler.'
	),
	array(
		0 => 'İletime imzamı nasıl eklerim?',
		1 => 'İletinize imza eklemek için öncelikle Kullanıcı Paneliniz aracılığı ile bir imza oluşturmalısınız. Aynı zamanda uygun kontrol kutusunu işaretlemek suretiyle varsayılan imza olarak bütün iletilerinize ekleyebilirsiniz (isteğiniz dahilinde, imzanızın görünmesini istemediğiniz iletilerde "imzamı göster" kontrol kutusunu boş hale getirerek imzanızın sadece o ileti için gösterilmemesini sağlayabilirsiniz).'
	),
	array(
		0 => 'Nasıl anket oluştururum?',
		1 => 'Yeni bir konu açarken (ya da eğer yetkiniz varsa bir başlığın ilk iletisini değiştirirken) ana gönderim formunun altında "Anket Oluşturma" sekmesini görürsünüz (eğer görüyorsanız bu anket oluşturmak için gerekli olan yetkilere sahip olduğunuzu gösterir). Anket oluştururken, "Anket sorusu" olarak bir başlık girmelisiniz ve "Anket seçeneği" formuna en az bir adet seçenek girmelisiniz. Her seçeneğin farklı bir metin alanına yazıldığından emin olun. Aynı zamanda kullanıcıların oylama esnasında seçecekleri seçenek sayısını da “Kullanıcı başına düşen seçenekler” altında ayarlayabilir ve anket için bir süre belirleyebilirsiniz (0 ile işaretlediyseniz anket süresiz olarak uygulanır) ve son seçenek olarak eğer izin verilmişse üyeler oylarını değiştirebilirler.'
	),
	array(
		0 => 'Neden daha fazla anket seçeneği oluşturamıyorum?',
		1 => 'Anket seçenek sayısı pano yönetici tarafından belirlenir. Eğer izin verilen sayıdan daha fazla anket seçeneği eklemeye ihtiyacınız varsa, pano yöneticisiyle irtibata geçebilirsiniz.'
	),
	array(
		0 => 'Bir anketi nasıl düzenleyebilir ya da silebilirim?',
		1 => 'İletilerle beraber, anketler de iletiyi gönderen üye, yetkili ya da yönetici tarafından değiştirilebilir. Anketleri değiştirmek için başlıktaki ilk iletiyi değiştirin (genelde bu ileti anketle ilgilidir). Eğer hiç kimse oy kullanmamışsa üyeler anketi silebilir ya da değiştirebilir. Ancak, eğer oy kullanılmışsa sadece yetkili ve yöneticiler silebilir. Bu uygulamanın amacı, oylama sırasında farklı kimselerin seçenekleri değiştirerek oylamanın yönünü değiştirmesini engellemktir.'
	),
	array(
		0 => 'Bazı forumlara neden erişemiyorum?',
		1 => 'Bazı forumlar belli kullanıcı ya da grupların kullanımıyla sınırlandırılabilir. Görmek, okumak, ileti göndermek vb. için yetilendirilmeniz gerekebilir. Sadece yetkililer ve yöneticiler bu yetkilendirmeyi yapabilir, bu durumda ilgililerden biriyle iletişime geçmeniz gerekmektedir.'
	),
	array(
		0 => 'Neden eklenti yükleyemiyorum?',
		1 => 'Forum, grup ya da kullanıcı izinlerine bağlı olarak eklenti ekleyebilirsiniz. Pano yöneticisi bazı forumlara eklenti yüklemenize izin vermiş olabilir ya da sadece belli gruplar eklenti yükleyebiliyor olabilir. Eğer neden eklenti yükleyemediğinizden emin değilseniz mesaj panosu yöneticisiyle irtibata geçebilirsiniz.'
	),
	array(
		0 => 'Neden bir uyarı aldım?',
		1 => 'Her pano yöneticisi siteleri için kendi kurallarını uygulama hakkına sahiptir. Eğer kurallardan birini ihlal ettiyseniz, bu yüzden uyarı almış olabilirsiniz. Unutmayın ki; bu site yöneticisinin kararıdır ve phpBB Grubunun bu konuda yapabileceği bir şey yoktur. Lütfen emin olmak için mesaj panosu yöneticisiyle irtibata geçin.'
	),
	array(
		0 => 'İletileri yetkililere nasıl rapor ederim?',
		1 => 'Eğer pano yöneticisi izin vermişse, rapor etmek istediğiniz iletiye gidin ve iletiyi rapor etmeyle ilgili olan butonu tıklayın. Rapor etmek için gerekli olan işlemleri yapın.'
	),
	array(
		0 => 'Konu gönderimindeki “Kaydet” butonu ne için?',
		1 => 'Bu size daha sonraki zamanlarda iletinizi tamamlamak ya da onaylamak için iletinizi saklama şansı tanır. Bu iletileri tekrar yüklemek için Kullanıcı Paneline gidin ve gerekli işlemleri tamamlayın.'
	),
	array(
		0 => 'Neden iletimin onaylanması gerekiyor?',
		1 => 'Pano yöneticisi iletilerinizin öncelikle kontrol edilmesi gerektiğine karar verebilir. Yönetici sizi mesajları onaylanmadan önce gözden geçirilmesi gereken üyelerden oluşan bir gruba dahil etmiş olabilir. Bu durumda ayrıntılı bilgi almak için yöneticiyle irtibata geçmelisiniz.'
	),
	array(
		0 => 'Konumu nasıl güncel tutabilirim?',
		1 => 'Görmekte olduğunuz ileti sayfasındaki "Konuyu güncel tut" bağlantısını kullanarak ilgili konunuzu forum içinde en üste getirebilirsiniz. Eğer bunu görmüyorsanız bu özellik iptal edilmiştir. Aynı zamanda, muhtemelen iletiye cevap yazarak da konunuzu forum içinde en üste getirebilirsiniz. Yine de, ziyaret ettiğiniz mesaj panosununun kurallarına bir göz atabilirsiniz.'
	),
	array(
		0 => '--',
		1 => 'Biçimlendirme ve Başlık Tipleri'
	),
	array(
		0 => 'Biçim kodu nedir?',
		1 => 'Biçim kodu (BBCode) özel bir HTML uygulamasıdır, yönetici tarafından belirlenen biçim kodu seçeneklerini kullanabilirsiiz (aynı zamanda iletilerinize göre bu seçeneği iptal edebilirsiniz). Biçim kodları HTML stillerine benzer, kodlar &lt; ve &gt; yerine köşeli parantez içine yazılır [ve] ve bazen uygulanmayabilir. Daha ayrıntılı bilgi için ileti penceresindeki biçim kodları rehberine bakabilirsiniz.'
	),
	array(
		0 => 'HTML kullanabilir miyim?',
		1 => 'Hayır, bu panoda HTML kullanarak ileti göndermeniz mümkün değildir. HTML ile gerçekleştirebileceğiniz değişikliklerin bir çoğu biçim kodları kullanılarak yapılabilir.'
	),
	array(
		0 => 'İfadeler nedir?',
		1 => 'İfadeler küçük resimlerdir ve kısa kodlar kullanarak bazı hislerinizi resmetmenizi sağlar, örneğin; :) mutlu olduğunuz, :( üzgün olduğunuz anlamına gelir. İfadeleri tam listesi ileti formunda gösterilmektedir. Aşırı ifade kullanımından kaçınmalısınız, bu okunabilirliği azaltır ve bu iletiler yetkilerce düzenlenebilir ya da silinebilir. Pano yöneticisi iletilerde kullanılabilecek ifade sayısında kısıtlamaya gidebilir.'
	),
	array(
		0 => 'Resim gönderebilir miyim?',
		1 => 'Evet, iletilerinizde resim gösterebilirsiniz. Eğer yönetici eklenti yüklemenize izin veriyorsa, panoya da resim yükleyebilirisniz. Aksi takdirde, şifrelenmemiş bir alana yükleyeceğiniz resme http://www.example.com/my-picture.gif gibi bir bağlantı vermeniz gerekir. Bilgisayarınızdaki bir resmin linkini (bilgisayarınız kamuya açık bir sunucu değilse) ve hotmail, yahoo gibi bir şifrelenmiş alanda yüklü ise link veremezsiniz. Resimlerinizi göstermek için [img] biçim kodunu kullanabilirsiniz.'
	),
	array(
		0 => 'Genel duyuru nedir?',
		1 => 'Genel duyurular önemli bilgileri barındırır ve mümkün olduğu kadar çabuk okumanız gerekir. Genel duyurular her forumun en üst kısmında ve Kullanıcı Kontrol Panelinde görüntülenir. Genel duyuru gönderip gönderememeniz gerekli olan izinlerin verilmiş olmasına bağlıdır, bu izinler yönetici tarafından ayarlanır.'
	),
	array(
		0 => 'Duyuru nedir?',
		1 => 'Duyurular okumakta olduğunuz forum ile ilgili önemli bilgileri içerir ve mümkün olduğu kadar kısa zamanda okunmalıdır. Duyurular forumda gönderilen iletilerin üst kısmında gösterilir. Genel duyurularda olduğu gibi, duyuru gönderip gönderememeniz gerekli olan izinlerin verilmiş olmasına bağlıdır, bu izinler yönetici tarafından ayarlanır.'
	),
	array(
		0 => 'Sabit konu nedir?',
		1 => 'Sabit başlıklar forumlarda duyuruların altında ve sadece ilk sayfada gösterilir. Genel olarak okumanız gereken önemli bilgileri barındırır. Genel duyurularda ve duyurularda olduğu gibi, sabit başlık gönderip gönderememeniz gerekli olan izinlerin verilmiş olmasına bağlıdır, bu izinler yönetici tarafından ayarlanır.'
	),
	array(
		0 => 'Kilitli konu nedir?',
		1 => 'Kilitli konular, kullanıcıların artık ileti gönderemeyeceği ya da anketlerinde oy verme süresi dolan başlıklardır. Başlıklar pano yetkili ya da yöneticilerinin ayarlamalarıyla bir çok sebepten dolayı kilitlenmiş olabilir. Aynı zamanda eğer ilgili izinler yönetici tarafından verilmişse siz de kendi açtığınız başlıkları kilitleyebilirsiniz.'
	),
	array(
		0 => 'Konu ikonu nedir?',
		1 => 'Konu ikonları iletilerin içeriğiyle ilgili resimlerdir. Başlık ikonu kullanıp kullanamamanız yöneticilerin vereceği izinlere bağladır.'
	),
	array(
		0 => '--',
		1 => 'Kullanıcı Seviyeleri ve Gruplar'
	),
	array(
		0 => 'Yönetici nedir?',
		1 => 'Yöneticiler panodaki en üst düzeyde kontrol hakkına sahip olan üyelerdir. Bu üyeler izinleri ayarlama, üyeleri uzaklaştırma, kullanıcı grupları ve yetkilileri oluşturma gibi bütün kontrollere hükmetme diğer pano yöneticilerinin ve pano kurucusunun izinlerine bağlı kalarak hareket etme hakkına sahiptir. Aynı zamanda yetkilerinin forumlarında sahip olduğu bütün düzenleme yeteneklerine de sahip olup, pano kurucusuna bağımlı olarak hareket ederler.'
	),
	array(
		0 => 'Yetkili nedir?',
		1 => 'Yetkililer (yaygın adı ile moderatör) bireysel (ya da grup olarak) gün be gün yönetikleri forumları gözlemlemek görevini üstlenmiş olan kimselerdir. Yönettikleri forumlarda iletileri düzenleme, silme ya da kilitleme, kilitli iletiyi açma, taşıma ya da başlıkları bölme gücüne sahiptirler. Genellikle yetkililer kapalı başlıkları ve olumsuz materyal ihtiva eden iletileri engellemekle görevlendirilirler.'
	),
	array(
		0 => 'Kullanıcı grubu nedir?',
		1 => 'Kullanıcı gruplarını pano yöneticileri oluştururlar. Her kullanıcı birden fazla gruba üye olabilir (bu durum panodan panoya değişiklik gösterebilir) ve her grubun kendine has giriş izinleri olabilir. Bu yöneticinin her forum için birden fazla yetkili atamasını kolaylaşıtır, ya da üyelerin özel forumlara girişlerine imkan sağlar.'
	),
	array(
		0 => 'Kullanıcı grupları nerede ve bir gruba nasıl katılırım?',
		1 => 'Kullanıcı Kontrol Panelinizdeki “Kullanıcı Grupları” linkini tıklayarak kullanıcı gruplarını görebilirsiniz. Eğer bu gruplardan birine katılmak istiyorsanız, ilgili butonu tıklamanız yeterlidir. Bütün gruplar açık girişli değildir. Bazıları katılmanız için onay gerektirebilir ve bazıları tamamen gizli grup üyeliğine sahip olabilir. Eğer grup açık ise ilgili butonu tıklayarak gruba katılabilirsiniz. Eğer onay gerektiren bir gruba katılmak istiyorsanız yine ilgili butonu tıklayarak başvurabilirsiniz. Kullanıcı Grubu lider gruba neden katılmak istediğinizi sorma yetkisine sahiptir. Lütfen, talebinizin geri çevirilmesi durumunda grup liderine baskı yapmayın.'
	),
	array(
		0 => 'Nasıl bir grup lideri olabilirim?',
		1 => 'Yönetici tarafından bir Kullanıcı Grubu oluşturulduğu zaman, aynı zamanda Grup Liderini de atamış olur Eğer bur kullanıcı grubu oluşturmak istiyorsanız ilk olarak yönetici ile irtibat kurmanız gerekir, bunun için yöneticiye bir özel mesaj gönderebilirisniz.',
	),
	array(
		0 => 'Neden bazı gruplar farklı renkte görünüyor?',
		1 => 'Muhtemelen pano yöneticisi grup üyelerini daha kolay tanıyabilmek için üyelerine bir renk atamıştır'
		//Pano yöneticileri eğer isterlerse bir grubun üyelerinin kolay tanınması için, gruba renk atayabilirler.'
	),
	array(
		0 => '“Varsayılan Kullanıcı Grubu” nedir?',
		1 => 'Eğer birden fazla kullanıcı grubuna üye iseniz, varsayılan grubunuz renk ve rütbe ile gösterilen gruptur. Pano yöneticisi Kullanıcı Paneli üzerinden varsayılan izinlerinizi değiştirebilir.'
	),
	array(
		0 => '“Yönetim ekibi” bağı nedir?',
		1 => 'Bu sayfa size pano görevlilerinin bir listesini sağlar, bu liste yöneticileri ve yetkileri hangi sayfalarda yetkili oldukları bilgisiyle birlikte gösterir.'
	),
	array(
		0 => '--',
		1 => 'Özel Mesajlaşma'
	),
	array(
		0 => 'Özel mesaj gönderemiyorum!',
		1 => 'Bunun üç sebebi vardır; kaydolmamış ve/veya çevirimiçi giriş yapmamışsınızdır, pano yöneticisi pano üzerinde özel mesaj gönderme iznini iptal etmiştir, ya da yönetici mesaj göndermenizi engellemiştir. Eğer son durum söz konusu ise sebebini öğrenmek için pano yöneticisiyle irtibata geçebilirsiniz.'
	),
	array(
		0 => 'İstenmeyen özel mesajlar almaya devam ediyorum!',
		1 => 'Kontrol panelinizdeki mesaj kurallarını kullanarak bir üyenin size özel mesaj göndermesini engelleyebilirsiniz. Eğer üyelerden birinden hoş olmayan özel mesajlar alıyorsanız konuyu yöneticiye iletebilirsiniz, yöneticiler bir kullanıcının özel mesaj göndermesini tamamen engelleyebiliriler. Daha fazla bilgi için yönetici ile irtibata geçebilirsiniz.'
	),
	array(
		0 => 'Bu pano üyelerinden birinden istenmeyen ya da olumsuz içerikli e-posta alıyorum!',
		1 => 'Bunu duyduğumuz için üzgünüz. Bu panonun e-posta formu bu şekilde posta göndermek isteyenleri engellemek ve vazgeçirmek için kişisel güvenlik özellikleri içermektedir. Pano yöneticisine aldığınız e-postanın tam bir kopyasını göndermelisiniz, başlık kısmının (bu kullanıcının gönderdiği e-postanın ayrıntılarının bir listesini verir) gönerilmesi çok önemlidir. Böylelikle pano yöneticisi harekete geçebilir.'
	),
	array(
		0 => '--',
		1 => 'Arkadaşlar ve Yasaklılar'
	),
	array(
		0 => 'Arkadaşlarım ve yasaklılar listesi nedir?',
		1 => 'Bu listeleri kullanarak panoya kayıtlı diğer kullanıcıları organize edebilirsiniz. Arkadaşlarım listesine eklediğiniz üyeler Kullanıcı Panelinizde kolay ulaşımınızı sağlamak için listenecektir, böylece listenizdekilerin çevirimiçi durumlarını görebilir ve özel mesaj gönderebilirsiniz. Tema desteğine göre bu üyelerin göndereceği iletiler farklı bir renkle gösterilecektir. Eğer bir kullanıcıyı yasaklananlar listenize eklerseniz, bu listedekilerin iletileri varsayılan ayar olarak gizlenecektir.'
	),
	array(
		0 => 'Arkadaşlarım / yasaklılar listesine kullanıcıları nasıl eklerim?',
		1 => 'Pano kullanıcılarını iki yolla bu listelere eklersiniz. Üyenin profilinde bulunan “Arkadaş ekle” ya da “Yasaklı üye ekle” bağlantılarını kullanabilirsiniz. Buna alternatif olarak Kullanıcı Panelinizden, doğurdan üyelerin adlarını yazarak da ekleyebilirsiniz. Aynı zamanda aynı sayfayı kullanarak daha önce eklediğiniz bir kişiyi de listenizden çıkarabilirisniz.'
	),
	array(
		0 => '--',
		1 => 'Forumlarda Arama'
	),
	array(
		0 => 'Bir forumda veya forumlarda nasıl arama yaparım?',
		1 => 'Pano anasayfa, forum ya da başlık gösterim sayfasındaki arama kutusuna aramak istediğiniz terim ya da sözcükleri girerek arama yapabilirisniz. Ayrıca bütün sayfalarda mevcut olan gelişmiş arama bağlantısına tıklayarak da arama özelliğini kullanabilirsiniz. Nasıl arama yapacağınız kullanılan temaya bağlıdır.'
	),
	array(
		0 => 'Neden “Sonuç bulunamadı” hatasını alıyorum?',
		1 => 'Aramak üzere girmiş olduğunuz sözcükler çok belirsiz ya da çok fazla kullanılan ve phpBB3 tarafından listelenemeyecek sözcükler olabilir. Daha özel bir girdi belirleyin ve gelişmiş arama sayfasındaki özellikleri kullanmayı deneyin.'
	),
	array(
		0 => 'Neden arama sonucunda boş bir sayfaya dönüyorum!?',
		1 => 'Sunucuda barınan çok fazla sonuç olduğundan bu sonucu alıyorsunuz. Gelişmiş arama seçeneğini kullanın ve daha özel bir girdi ile ve forumlarda aramayı deneyin.'
	),
	array(
		0 => 'Üyeler için nasıl ararım?',
		1 => '“Üyeler” sayfasına girin ve “Üye bul” linkini tıklayın. Açıklama seçeneklerini doldurun.'
	),
	array(
		0 => 'Kendi iletilerimi ve konularımı nasıl bulurum?',
		1 => 'Kendi iletilerinizi görmek için Kullanıcı Panelindeki ya da hesabınızdaki "Kullanıcının iletilerini göster" linkini tıklayabilirsiniz. Kendi açtığınız başlıkları görmek için Gelişmiş Arama sayfasındaki uygun seçenekleri kullanarak arama yapabilirsiniz.'
	),
	array(
		0 => '--',
		1 => 'Konu İzlemeleri ve Sık Kullanılanlar'
	),
	array(
		0 => 'Sık kullanılanlar ile konuya kaydolmak arasında nasıl bir fark vardır?',
		1 => 'phpBB3’deki Sık kullanılanlar, tarayıcınızın sık kullanılanlar özelliğine benzer. Bir güncelleme olması durumunda uyarılmazsınız. Ancak, daha sonra bu başlığa kolayca ulaşabilirsiniz. Başlığa kayıt olma ile arasında fark, kayıt olduğunuz başlıklarda güncelleme olması durumunda size haber veriliyor olmasıdır.'
	),
	array(
		0 => 'Belli bir forum ya da başlığa kaydolmak için ne yapmalıyım?',
		1 => 'Belli bir foruma kaydolmak için öncelikle oturum açmalısınız, “Foruma abone ol” bağlantısını görürsünüz. Bu belli bir başlığa kaydolmada olduğu gibi sizi o foruma kaydeder. Bir başlığa kaydolmak için, ya başlığa cevap yazarsınız ve kontrol kutusunu işaretlersiniz ya da başlığın içindeki kaydolma linkini tıklarsınız.'
	),
	array(
		0 => 'Aboneliklerimi nasıl silebilirim?',
		1 => 'Aboneliklerinizi silmek için, Kullanıcı Panelinize gidin ve abonelikler bağlantıtısını takip edin.'
	),
	array(
		0 => '--',
		1 => 'Eklentiler'
	),
	array(
		0 => 'Bu panoda hangi eklentilere izin verilmekte?',
		1 => 'Her pano yöneticisi bazı belirli eklenti türlerine izin verebilir ya da iznini kaldırabilir. Eğer hangilerinin yüklenebileceğinden emin değilseniz, yardım için yönetici ile iletişim kurun.'
	),
	array(
		0 => 'Kendime ait tüm eklentileri nasıl bulabilirim?',
		1 => 'Eğer yüklediğiniz eklerin listesini bulmak istiyorsanız, Kullanıcı Panelinize girin ve eklenti sayfasına giden bağlantıları takip edin.'
	),
	array(
		0 => '--',
		1 => 'phpBB3 Konuları'
	),
	array(
		0 => 'Bu mesaj panosunu kim yazdı?',
		1 => 'Bu yazılım (değiştirilmemiş hali ile) <a href="http://www.phpbb.com/">phpBB Grubu</a> tarafından yazılmış ve lisanslanmıştır. “<a href="http://www.phpbbturkiye.net/hakkinda/gpl-lisansi.html" title="GNU Genel Kamu Lisansı" onclick="this.target=\'_blank\'">GNU Genel Kamu Lisansı</a>” altında kullanıma sunulmuştur ve bu lisansın maddelerine uyarak yazılım üzerinde özgürce değişiklik yapabilirsiniz.'
	),
		array(
		0 => 'Bu yazılımı kim Türkçe’ye tercüme etti?',
		1 => '“phpBB3 Türkçe dil dosyası” bir “<a href="http://www.canversoft.net/" title="profesyonel phpBB3 çözümleri ve web hizmetleri" onclick="this.target=\'_blank\'">Canver Software</a>” iştirakı olan “<strong><a href="http://www.phpbbturkiye.net" title="phpBB3 Türkçe destek ve geliştirme" onclick="this.target=\'_blank\'">phpBB Türkiye</a></strong>” grubu tarafından tercüme edilmiş ve “<a href="http://www.phpbbturkiye.net/hakkinda/gpl-lisansi.html" title="GPL - genel kamu lisansı" onclick="this.target=\'_blank\'">GPL - genel kamu lisansı</a>” ile dağıtıma sunulmuştur. Tüm eser ve telif hakları “phpBB Türkiye” grubuna aittir. Detaylı bilgi ve “Kullanım & Bulundurma Koşulları” için “<a href="http://www.phpbbturkiye.net/dosyalar/phpbb3-dil-dosyasi.html" onclick="this.target=\'_blank\'">Yükleme ve Kullanım Kılavuzu</a>” ’na bakınız. Lütfen gözden kaçan hataları, önerilerinizi, yorumlarınızı “phpBB Türkiye” sitemiz “phpBB3 Türkçe Dil Paketi” bölümündeki <a href="http://www.phpbbturkiye.net/hata-raporlari-f93/" onclick="this.target=\'_blank\'">Hata Raporları</a> forumuna bildiriniz.'
	),
	array(
		0 => 'Neden X özelliği yok?',
		1 => 'Bu yazılım phpBB Grubu tarafından yazılmış ve lisanslanmıştır. Eğer bir özelliğin eklenmesi gerektiğine inanıyorsanız, lütfen, <a href="http://www.phpbb.com" onclick="this.target=\'_blank\'">phpbb.com</a> web sitesini ziyaret edin ve phpBB grubunun ne söylediğini görün. Lütfen <a href="http://www.phpbb.com" onclick="this.target=\'_blank\'">phpbb.com</a> adresine özellik isteme ricası içeren iletiler göndermeyin, grup yeni özelliklerin taslaklarını SourceForge kullanarak tutmaktadır. Lütfen, forumları okuyun ve phpBB grubunun üzerinde çalıştığı bir özellik olup olmadığını görün ve sonra orada verilen prosedürü takip edin.'
	),
	array(
		0 => 'Bu panodaki hatalı kullanım ve/veya yasal konularla ilgili olarak kimle iletişim kurmalıyım?',
		1 => '"Yönetim ekibi" sayfasındaki herhangi bir yönetici şikayetlerinizi iletebileceğiniz uygun iletişim noktası olabilir. Eğer yine cevap alamazsanız site sahibi ile iletişime geçebilirsiniz. Eğer pano ücretsiz bir servis üzerinde çalışıyorsa (örneğin Yahoo!, free.fr, f2s.com, vb), yönetim ya da kötü kullanım servisiyle iletişim kurabilirsiniz. Unutmayın ki; phpBB Grubu <strong>herhangi bir yetkiye sahip değildir</strong> ve hiç bir şekilde nasıl, nerede ya da kim tarafından bu panonun kullanılacağı üzerinde sorumluluk kabul etmez. Yasal durumlarla ilgili olarak <strong>doğrudan</strong> phpBB.com sitesi ile ilgili olmadıkça phpBB Grubu ile iletişime geçmeyin. Eğer phpBB Grubu ile bu yazılımın herhangi bir 3. parti kullanımıyla ilgili olarak talepte bulunursanız kısa bir cevap alabilir ya da hiç bir cevap alamayabilirsiniz.'
	)
);

?>