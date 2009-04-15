<?php
/*
*
* help_bbcode [Turkish]
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
		1 => 'Takdim' // Önsöz
	),
	array(
		0 => 'Biçim kodları nedir?',
		1 => 'Biçim kodları (BBCode), HTML etiketleri benzeri özel bir biçim kodu uygulamasıdır. Panoda kullanabileceğiniz Biçim kodları pano yöneticisi tarafından belirlenmiştir. Bununla birlikte, ileti formu aracılığıyla her bir ileti için biçim kodlarını gösterimden kaldırabilirsiniz. Biçim kodları HTML etiketlerine benzer, fakat biçim kodları &lt; &gt; yerine köşeli parantezler [ ] arasına yazılır ve iletilerin biçimlendirilmesinde ve görünümünün değiştirilmesinde büyük kolaylık sağlar. Kullandığınız temaya bağlı olmakla beraber, iletilerinize biçim kodları eklemek, ileti formunda ileti yazım alanının üzerinde bulunan tıklanabilir arayüz sayesinde çok daha kolay bir görünüm alır. Aşağıdaki kullanım rehberi işinizi daha da kolaylaştıracaktır.'
	),
	array(
		0 => '--',
		1 => 'Metin biçimlendirmek'
	),
	array(
		0 => 'Kalın, eğik ve altı çizili yazı nasıl oluşturabilirim',
		1 => 'Biçim kodları, metin temel görünümünü hızlı bir şekilde değiştirmenizi sağlayacak etiketleri içerir. Bunu gerçekleştirmek için şu yöntemleri kullanılabilirsiniz: <br /><br /><ul><li>Metnin bir parçasını kalın göstermek için <strong>[b][/b]</strong> etiketi arasına almalısınız. Örn:<br /><br/><strong>[b]</strong>Merhaba<strong>[/b]</strong><br /><br />şeklinde bir kullanım <br /><br /><strong>Merhaba</strong><br /><br />şeklinde görüntülenecektir.<br /><br /></li><li>Altı çizili yazılar oluşturmak için <strong>[u][/u]</strong> etiketini kullanmalısınız. Örn:<br /><br /><strong>[u]</strong>Günaydın<strong>[/u]</strong><br /><br />şeklinde bir kullanım<br /><br /><span style="text-decoration: underline">Günaydın</span><br /><br />şeklinde görüntülenecektir.<br /><br /></li><li>Eğik yazılar oluşturmak için ise<strong>[i][/i]</strong> etiketini kullamalısınız. Örn:<br /><br /><strong>[i]</strong>Büyük!<strong>[/i]</strong><br /><br />şeklinde bir kullanım<br /><br /><i>Büyük!</i><br /><br />şeklinde görüntülenecektir.</li></ul>'),
	array(
		0 => 'Metin renk veya boyutunu nasıl değiştirebilirim',
		1 => 'Bir metnin renk veya boyutunu değiştirmek için aşağıdaki etiketleri kullanabilirsiniz. Aklınızda bulunsun, yazıyı okuyacak olan kişinin web tarayıcısına ve kullandığı sisteme bağlı olarak yazının görünümü farklılıklar gösterebilir. <ul><li>Metin rengini değiştirmek için <strong>[color=][/color]</strong> biçim kodunu kullanmalısınız. Tanınmış renk adlarını (red, blue, yellow vs.) kullanabileceğiniz gibi, #FFFFFF, #000000 şeklinde hexadecimal kodlar ile de renkleri belirtebilirsiniz. <br />Örn:Kırmızı bir metin oluşturmak için: <br /><br /><strong>[color=red]</strong>Merhaba!<strong>[/color]</strong><br /><br />veya<br /><br /><strong>[color=#FF0000]</strong>Merhaba!<strong>[/color]</strong><br /><br /> biçim kodunu kullanabilirsiniz. Bu <br /><br /><span style="color:red">Merhaba!</span> <br /><br />şeklinde görüntülenecektir.<br /><br /></li><li>Metin büyüklüğünü değiştirmek için de benzer bir yol ile <strong>[size=][/size]</strong> biçim kodunu kullanmalısınız. Bu kodlar seçilen temaya bağlıdır; önerilen format, metin büyüklüğünü yüzdelik olarak temsil edilen bir sayı girişinin yapılmasıdır. 20 (çok küçük) ile 200 (çok büyük) arası bir sayı girmenizi öneririz. Örn:<br /><br /><strong>[size=60]</strong>KÜÇÜK<strong>[/size]</strong><br /><br />şeklinde bir kullanım <br /><br /><span style="font-size:60%;">KÜÇÜK</span><br /><br /> şeklinde;<br /><br /><strong>[size=200]</strong>ÇOK BÜYÜK!<strong>[/size]</strong><br /><br />şeklinde bir kullanım<br /><br /><span style="font-size:200%;">ÇOK BÜYÜK</span> <br /><br />şeklinde görüntülenecektir.</li></ul>'
	),
	array(
		0 => 'Bu kodları bir arada kullanabilir miyim?',
		1 => 'Evet, elbette kullanabilirisiniz. Örnek olarak aşırı dikkat çekmek için:<br /><br /><strong>[size=200][color=red][b]</strong>LÜTFEN DİKKAT!<strong>[/b][/color][/size]</strong><br /><br /> şeklinde bir kullanım <br /><br /><span style="color:red;font-size:200%;"><strong>LÜTFEN DİKKAT!</strong></span><br /><br /> şeklinde görüntülenecektir. <br /><br />Buna benzer çok büyük metin kullanmanızı önermiyoruz, büyük yazı yazmadan önce forum kurallarını okumanızı öneririz.<br /><br /> Kodları doğru bir şekilde kapattığınızdan emin olun. Örneğin aşağıdaki hatalı bir yazımdır:<br /><br /><strong>[b][u]</strong>Hatalı yazım<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Alıntı yapmak ve sabit genişlikte metin (kod) çıktısı'
	),
	array(
		0 => 'Cevaplarda alıntı yapmak',
		1 => 'Alıntı yaparken kullanabileceğiniz iki seçenek bulunmaktadır: <strong>1-</strong> Yazar adına atıfta bulunarak alıntı yapmak. <strong>2-</strong> Yazar adına atıfta bulunmadan, herhangi bir metni alıntı yapmak.<ul><li>Bir iletiyi alıntı yaparken, alıntı yapılan metnin <strong>[quote=&quot;&quot;][/quote]</strong> biçim kodlarıyla çevrelenmiş olmasına dikkat ediniz. Bu yöntemle alıntı sahibinin adına atıfta bulunabileceğiniz gibi, istemeniz durumunda başka bir şeye de atıfta bulunabilirsiniz!<br /><br />Örneğin, phpBB adlı kullanıcının yazdığı iletinin bir kısmını alıntı yaparak cevaplamak istediğinizi düşünün. Bu durumda iletininizi şu şekilde yazabilirsiniz:<br /><br /><strong>[quote=&quot;phpBB&quot;]</strong>phpBB tarafından yazılan metin <strong>[/quote]</strong><br /><br />Böylece, ileti gösterimi sırasında <strong>&quot;phpBB yazdı:&quot;</strong> ifadesi otomatik olarak asıl metinden önceye eklenecektir.<br /><br />Unutmayın ki, alıntı sisteminin çalışabilmesi için, alıntı yaptığınız kişi adının sağ ve sol tarafına alıntı işaretlerinin &quot;&quot; <strong>eklenmiş olması</strong> gerekmektedir.</li><li>İkinci yöntemle, herhangi bir yazar adına atıfta bulunmadan alıntı yapabilirisiniz. Bunun için metni <strong>[quote][/quote]</strong> biçim kodları ile çevrelemeniz yeterlidir. İleti gösterimi sırasında yazdıklarınızın bir alıntı bloğunda gösterildiğini göreceksiniz.</li></ul>'
	),
	array(
		0 => 'Sabit genişlikte metin (kod) çıktısı',
		1 => 'Eğer bir kod ya da sabit genişlikte bir veri çıktısı yaptırmak istiyorsanız yazacaklarınızı <strong>[code][/code]</strong> kodları arasına yazın. Örneğin.<br /><br /><strong>[code]</strong>echo "Bu bir çeşit koddur";<strong>[/code]</strong><br /><br /><strong>[code][/code]</strong> kodları arasına yazılacak olan her şey değiştirilmeden gösterilecektir  PHP sözdizimi <strong>[code=php][/code]</strong> koldarı kullanılarak renklendirilebilir ve okunurluğunu arttırmak için bu yolu kullanmanız tavsiye edilir.'
	),
	// listleler
	array(
		0 => '--',
		1 => 'Listeler oluşturmak'
	),
	array(
		0 => 'Düzensiz liste oluşturmak',
		1 => 'Biçim kodları düzenli ve düzensiz olmak üzere iki tip listeleme yolu sunar. Genel olarak HTML ile oluşturulan listelerle aynıdır. Düzensiz listede liste ögeleri numara sırasına konmadan bir liste işaretiyle alt alta sıralanır. Düzensiz bir liste oluşturmak için <strong>[list][/list]</strong> kodlarını ve bunlar arasında <strong>[*]</strong> kodlarını kullanabilirsiniz. Örneğin favori renklerinizi şu şekilde sıralayabilirisiniz:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Kırmızı<br /><strong>[*]</strong>Mavi<br /><strong>[*]</strong>Sarı<br /><strong>[/list]</strong><br /><br />Bu kodların çıktısı şu şekilde olur:<ul><li>Kırmızı</li><li>Mavi</li><li>Sarı</li></ul>'
	),
	array(
		0 => 'Düzenli liste oluşturmak',
		1 => 'Bu tip listeleme, seçeneklerin hangisinin bir diğerinden önce geleceğini gösterecek şekilde çıktı verir. Bir sıralı liste oluşturmak için (eğer numaralarla listeyi oluşturmak istiyorsanız) <strong>[list=1][/list]</strong> kodlarını kullanabilirsiniz, ya da alternatif olarak harf sırasına koymak için <strong>[list=a][/list]</strong> kodlarını kullanabilirsiniz. As with the unordered list items are specified using <strong>[*]</strong>. Örneğin: <br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Alış-verişe çık<br /><strong>[*]</strong>Yeni bir bilgisayar al<br /><strong>[*]</strong>Bilgisayar bozulursa sakin ol<br /><strong>[/list]</strong><br /><br /> kodlarının kullanılmasıyla şu çıktıyı alırsınız:<ol style="list-style-type: arabic-numbers"><li>Alış-verişe çık</li><li>Yeni bir bilgisayar al</li><li>Bilgisayar bozulursa sakin ol</li></ol>Alfabetik bir liste oluşturmak için:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Birinci olası cevap<br /><strong>[*]</strong>İkinci olası cevap<br /><strong>[*]</strong>Üçüncü olası cevap<br /><strong>[/list]</strong><br /><br />kodlarını kullanabilirsiniz. Çıktı olarak:<ol style="list-style-type: lower-alpha"><li>Birinci olası cevap</li><li>İkinci olası cevap</li><li>Üçüncü olası cevap</li></ol> sonucunu alırsınız.'
	),
	// bağlantılar
	array(
		0 => '--',
		1 => 'Bağlantılar oluşturmak'
	),
	array(
		0 => 'Başka bir siteye bağlantı vermek',
		1 => 'phpBB biçim kodları bir dizi URL (bağlantı) oluşturma yolu sunar.<ul><li>Bunlardan ilki <strong>[url=][/url]</strong> kodlarının kullanımıdır, = işaretinden sonra yazacağınız herşey URL olarak algılanacaktır. Örneğin aşağıdaki bağlantı phpBB.com adresine gidecektir:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>phpBB’yi ziyaret et!<strong>[/url]</strong><br /><br />Bu kodların çıktısı, <a href="http://www.phpbb.com/">Visit phpBB!</a> şeklinde olacaktır. Dikkat ettiyseniz bağlantı aynı pencerede ya da kullanıcının tarayıcı seçeneklerine göre farklı bir pencerede açılmaktadır.</li><li>Eğer bağlantının kendisini göstermek istiyorsanız bunu kolayca aşağıdaki şekilde yapabilirsiniz:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Tu kodun çıktısı, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a> şeklinde olacaktır.</li><li>Ek olarak phpBB <i>Büyülü Bağlantı</i> adı verilen bir özelliğe de sahiptir. Bu sayede özel sözdizim olarak doğru bağlantıları herhangi özel bir belirti ya da kod hatta http:// bile kullanmadan yazmanıza imkan verir. Örneğin mesajınızın içine www.phpbb.com yazarsanız bu otomatik olarak <a href="http://www.phpbb.com/">www.phpbb.com</a> şeklinde gösterilecektir.</li><li>Aynı şey e-posta adresleri için de geçerlidir. Bir adresi açık olarak belirginleştirebilirsiniz. Örneğin:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />Bu kodun çıktısı <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> şeklinde olacaktır. Sadece no.one@domain.adr yazarak da otomatik dönüşüm özelliğiyle aynı sonucu alabilirsiniz.</li></ul>Diğer bütün biçim kodlarında olduğu gibi bağlantı kodlarını da <strong>[img][/img]</strong> (sonraki konuya bakın), <strong>[b][/b]</strong> gibi başka kodlarla birlikte kullanabilirsiniz. Biçim kodlarında olduğu gibi kodların kapalı ya da açık olması size bağlıdır. Örneğin aşağıda olduğu gibi:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /> bir yazım <span style="text-decoration: underline">yanlıştır</span> ve iletinizin silinmesine sebep olacaktır. Bu yüzden dikkatli olun.'
	),
	array(
		0 => '--',
		1 => 'İletilerde resimler göstermek'
	),
	array(
		0 => 'İletiye resim eklemek',
		1 => 'phpBB Biçim kodları iletilerinize resim eklemek için bir etikete sahiptir. Bu etiketi kullanırken unutulmaması gereken iki nokta vardır; çoğu kullanıcı bir iletide çok fazla resim gösterilmesinden hoşlanmaz ve ikinci olarak; gönderdiğiniz resim internet üzerinde olmalıdır (mesela websunucu çalıştırmıyorsanız, resmin sadece bilgisayarınızda olması yetmez!). Bir resmi göstermek için URL adresinisini <strong>[img][/img]</strong> etiketleri arasında yazmalısınız. Örneğin:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />URL bölümünde olduğu gibi bir resmi eğer isterseniz <strong>[url][/url]</strong> etiketleri arasına alabilirsiniz. Örneğin:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br /> kodu, şunu oluşturacaktır: <br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'İletiye eklenti eklemek',
		1 => 'Eğer eklentiler, özellik olarak pano yöneticisi tarafından açıldıysa ve eklenti oluşturmak için gerekli izinleriniz varsa, eklentileri artık iletinin herhangi bir yerinde yeni <strong>[attachment=][/attachment]</strong> Biçim kodlarını kullanarak gösterilebilirsiniz. İleti gönderme ekranında eklentileri satır içi eklemek için bir açılır bir menü  bulunacaktır.'
	),
	// diğer maddeler
	array(
		0 => '--',
		1 => 'Diğer maddeler'
	),
	array(
		0 => 'Kendi biçim kodlarımı ekleyebilir miyim?',
		1 => 'Eğer bu mesaj panosunda bir yönetici iseniz ve gerekli izinlere sahipseniz, özel biçim kodları bölümünden ilave biçim kodları ekleyebilirsiniz.'
	)
);

?>