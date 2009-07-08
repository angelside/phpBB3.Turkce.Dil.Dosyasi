<?php
/**
* @version $Id$
* @author Sevdin Filiz <angelside@users.sourceforge.net>
* @copyright (c) 2009, Canver Software <http://www.canversoft.net>
*/

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'Biçim kodları bir şeyin nasıl gösterilmesini kararlaştırabileceğiniz özel bir HTML uygulamasıdır. Bu sayfayı kullanarak biçim kodu ekleyebilir, kaldırabilir ya da mevcut kodları düzenleyebilirsiniz.',
	'ADD_BBCODE'				=> 'Yeni bir biçim kodu ekle',

	'BBCODE_ADDED'				=> 'Biçim kodu eklendi.',
	'BBCODE_EDITED'				=> 'Biçim kodu düzenlendi.',
	'BBCODE_NOT_EXIST'			=> 'Seçtiğiniz biçim kodu mevcut değil.',
	'BBCODE_HELPLINE'			=> 'Yardım satırı',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Bu alan fare ile biçim kodu üzerine gelindiğinde görünecek açıklamayı içerir.', 
	'BBCODE_HELPLINE_TEXT'		=> 'Yardım satırı metni',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Yazdığınız yardım satırı metni çok uzun.',
	'BBCODE_INVALID_TAG_NAME'	=> 'Girdiğiniz biçim kodu etiketi zaten mevcut.',
	'BBCODE_INVALID'			=> 'Girmek istediğiniz biçim kodu bu geçersiz biçimde.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Biçim kodunun biçimi hem açan hem de kapatan bir etiketi içermelidir.',
	'BBCODE_TAG'				=> 'Biçim kodu etiketi',
	'BBCODE_TAG_TOO_LONG'		=> 'Girdiğiniz etiket adı çok uzun.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Girdiğiniz etiket tanımı çok uzun, lütfen tanımı kısaltınız.',
	'BBCODE_USAGE'				=> 'Biçim kodu kullanımı',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Buradan biçim kodunun nasıl kullanılacağını tanımlayabilirsiniz. Uygun işaret ile herhangi bir değişken girişi değiştirilebilir (%saşağıdakine bakın%s).',

	'EXAMPLE'						=> 'Örnek:',
	'EXAMPLES'						=> 'Örnekler:',

	'HTML_REPLACEMENT'				=> 'Yerine konulacak HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Buradan mevcut HTML değişiklerini tanımlayabilirsiniz. Yukarıda kullandığınız işaretlemeleri geri koymayı unutmayın!',

	'TOKEN'					=> 'İşaret',
	'TOKENS'				=> 'İşaretler',
	'TOKENS_EXPLAIN'		=> 'İşaretler kullanıcı girişi için yer belirleyicilerdir. Bu uygun tanım, birbiri ile denk olursa giriş geçerli sayılacak. Eğer gerek duyuyorsanız çiftlerin arasında son karakteri bir sayı olarak ekleyerek onları kullanabilirsiniz, örn: {YAZI1}, {YAZI2}.<br /><br />HTML değişkenlerini, language/ dizininden herhangi bir lisan dizisi kullanabilirsiniz: {L_<em>&lt;STRINGNAME&gt;</em>} nerede? <em>&lt;STRINGNAME&gt;</em> eklemeyi istediğiniz dizinin ismi. Örneğin, {L_WROTE} bu şekilde gösterilecek &quot;Alıntı&quot; veya kullanıcının tercümesine göre değişebilir.<br /><br /><strong>Lütfen işaretlerin, aşağıda listelediğinden emin olun, yapının içerisinde biçim kodu kullanılabilirsiniz.</strong>',
	'TOKEN_DEFINITION'		=> 'Ne olabilir?',
	'TOO_MANY_BBCODES'		=> 'Daha fazla biçim kodu oluşturamazsınız. Lütfen bir veya daha fazla biçim kodu silip tekrar deneyin.',

	'tokens'	=>	array(
		'TEXT'			=> 'Herhangi bir metin ve yabancı karakterleri kullanabilirsiniz. Sayılar  vb. gibi. HTML etiketlerinde bu işareti kullanmamalısınız. Onun yerine IDENTIFIER veya SIMPLETEXT kullanmayı deneyebilirsiniz.',
		'SIMPLETEXT'	=> 'Latin alfabesinden karakterler (A-Z), sayılar (0-1), boşluklar ( ), virgüller (,), noktalar (.), eksi işareti (-), artı işareti (+), tire (-) ve altçizgi (_)',
		'IDENTIFIER'	=> 'Latin alfabesinden karakterler (A-Z), sayılar, tire (-) ve altçizgi (_)',
		'NUMBER'		=> 'Herhangi bir dijital karakter',
		'EMAIL'			=> 'Geçerli bir e-posta adresi',
		'URL'			=> 'Geçerli herhangi protokol kullanan bir URL (http, ftp, vb… gibi. Kötü amaç için javascript kullanılamaz). Eğer hiçbiri, verilmezse, &quot;http://&quot;, diziye öneki eklenir.',
		'LOCAL_URL'		=> 'Yerel bir URL. URL, konu sayfasına göre olmalıdır, ve bir sunucu ismi veya protokolü içeremez.',
		'COLOR'			=> 'Bir HTML rengi, her biri sayısal biçimde olabilir <samp>#FF1234</samp> veya bir <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS renk anahtar kelimesi</a> gibi <samp>fuchsia</samp> veya <samp>InactiveBorder</samp>.'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN' 	=> 'Bu sayfada, kullanıcıların iletilerinde kullanabileceği ikonları ekleyebilir, düzenleyebilir veya silebilirsiniz. Bu ikonlar forum düzeninde genellikle konu başlıklarının yanında ya da iletilerin konu başlıklarında görünür. Dilerseniz yeni ikon paketleri yaratabilir ve yükleyebilirsiniz.',
	'ACP_SMILIES_EXPLAIN' 	=> 'Smileyler ya da bilinen diğer adı ile ifadeler, genellikle küçük ve kimi zaman hareketli resim dosyalarıdır. Kullanıcının o anki duygularını ve hissetiklerini karşısındakilere aktarabilmek maksadı ile forum iletilerinde kullanılır. Bu sayfada, kullanıcılarınızın iletilerinde ve özel mesajlarında kullanabileceği ifadeleri; ekleyebilir, düzenleyebilir veya silebilirsiniz. Dilerseniz yeni ifade paketleri oluşturabilir ve yükleyebilirsiniz.',
	'ADD_SMILIES'			=> 'Çoklu ifade ekle',
	'ADD_SMILEY_CODE'		=> 'Daha fazla ifade kodu ekle',
	'ADD_ICONS'				=> 'Çoklu ikon ekle',
	'AFTER_ICONS'			=> '%s sonrasına',
	'AFTER_SMILIES'			=> '%s sonrasına',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Geçerli ikonlar',
	'CURRENT_ICONS_EXPLAIN'		=> 'Mevcut bulunan ikonlara ne yapacağınızı seçiniz', //Choose what to do with the currently installed icons
	'CURRENT_SMILIES'			=> 'Geçerli ifadeler',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Mevcut bulunan ifadelere ne yapacağınızı seçiniz',//'Choose what to do with the currently installed smilies',

	'DISPLAY_ON_POSTING'		=> 'Gönderim sayfasında göster',
	'DISPLAY_POSTING'			=> 'Gönderim sayfasında', // On posting page
	'DISPLAY_POSTING_NO'		=> 'Gönderim sayfasında değil', // Not on posting page

	'EDIT_ICONS'				=> 'İkonları düzenle', // Edit icons
	'EDIT_SMILIES'				=> 'İfadeleri düzenle', // Edit smilies
	'EMOTION'					=> 'İfade',
	'EXPORT_ICONS'				=> 'icons.pak ihraç et ve indir', // Export and download icons.pak
	'EXPORT_ICONS_EXPLAIN'		=> '%sBu bağlantıyı tıkladığınızda yerleştirilen iconlar için "icons.pak" <samp>icons.pak</samp> isminde bir yükleme paketi oluşturulacaktır. Oluşturulan bu dosyanın formatı bu iki uzantıda olabilir <samp>.zip</samp> veya <samp>.tgz</samp> ifade içeriklerini<samp>icons.pak</samp> dosyala%s.',
	'EXPORT_SMILIES'			=> 'smilies.pak ihraç et ve indir',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sBu bağlantıyı tıkladığınızda yerleştirilen ifadeler için "smilies.pak" isminde bir yükleme paketi oluşturulacaktır <samp>smilies.pak</samp> Oluşturulan bu dosyanın formatı şu iki uzantıda olabilir <samp>.zip</samp> veya <samp>.tgz</samp> ifade içeriklerini <samp>smilies.pak</samp> dosyala%s.',

	'FIRST'			=> 'İlk',

	'ICONS_ADD'				=> 'Yeni bir ikon ekle',
	'ICONS_NONE_ADDED'		=> 'Hiç ikon eklenmedi.',
	'ICONS_ONE_ADDED'		=> 'İkon eklendi.',
	'ICONS_ADDED'			=> 'İkonlar eklendi.',
	'ICONS_CONFIG'			=> 'İkon ayarları',
	'ICONS_DELETED'			=> 'İkon silindi.',
	'ICONS_EDIT'			=> 'İkon düzenle',
	'ICONS_ONE_EDITED'		=> 'İkon güncellendi.',
	'ICONS_NONE_EDITED'		=> 'Hiçbir ikon güncellenmedi.',
	'ICONS_EDITED'			=> 'İkonlar güncellendi.',
	'ICONS_HEIGHT'			=> 'İkon yüksekliği',
	'ICONS_IMAGE'			=> 'İkon resmi',
	'ICONS_IMPORTED'		=> 'İkon paketi kuruldu.',
	'ICONS_IMPORT_SUCCESS'	=> 'İkon paketi eklendi.',
	'ICONS_LOCATION'		=> 'İkon konumu',
	'ICONS_NOT_DISPLAYED'	=> 'Aşağıdaki ikonlar mesaj gönderim sayfasında gösterilmez.',
	'ICONS_ORDER'			=> 'İkon düzeni',
	'ICONS_URL'				=> 'İkon resim dosyası',
	'ICONS_WIDTH'			=> 'İkon genişliği',
	'IMPORT_ICONS'			=> 'İkon paketi yükle',
	'IMPORT_SMILIES'		=> 'İfade paketi yükle',

	'KEEP_ALL'			=> 'Hepsini koru',

	'MASS_ADD_SMILIES'	=> 'Çoklu ifade ekle',

	'NO_ICONS_ADD'		=> 'Eklenecek herhangi bir ikon mevcut değil.',
	'NO_ICONS_EDIT'		=> 'Düzenlenecek herhangi bir ikon mevcut değil.',
	'NO_ICONS_EXPORT'	=> 'Bir paket oluşturacak herhangi bir iknonunuz yok.',
	'NO_ICONS_PAK'		=> 'İkon paketi bulunamadı.',
	'NO_SMILIES_ADD'	=> 'Eklenecek herhangi bir ifade mevcut değil.',
	'NO_SMILIES_EDIT'	=> 'Düzenlenecek herhangi bir ifade mevcut değil.',
	'NO_SMILIES_EXPORT'	=> 'Bir paket oluşturacak herhangi bir ifadeniz yok.',
	'NO_SMILIES_PAK'	=> 'İfade paketi bulunamadı.',

	'PAK_FILE_NOT_READABLE'	=> '<samp>.pak</samp> dosyası okunamadı.', // Could not read <samp>.pak</samp> file

	'REPLACE_MATCHES'	=> 'Eşleşenlerin üzerine yaz', //Replace matches 

	'SELECT_PACKAGE'			=> 'Bir paket dosyası seçiniz',
	'SMILIES_ADD'				=> 'Yeni bir ifade ekle',
	'SMILIES_NONE_ADDED'		=> 'Hiç ifade eklenmedi.',
	'SMILIES_ONE_ADDED'			=> 'İfade eklendi.',
	'SMILIES_ADDED'				=> 'İfadeler eklendi.',
	'SMILIES_CODE'				=> 'İfade kodu',
	'SMILIES_CONFIG'			=> 'İfade ayarları',
	'SMILIES_DELETED'			=> 'İfade silindi.',
	'SMILIES_EDIT'				=> 'İfade düzenle',
	'SMILIE_NO_CODE'			=> '“%s” ifadesi, ifade kodu belirtilmediği için kabul edilmedi.',
	'SMILIE_NO_EMOTION'			=> '“%s” ifadesi, ifade resmi belirtilmediği için kabul edilmedi.',
	'SMILIES_NONE_EDITED'		=> 'Hiçbir ifade güncellenmedi.',
	'SMILIES_ONE_EDITED'		=> 'İfade güncellendi.',
	'SMILIES_EDITED'			=> 'İfadeler güncellendi.',
	'SMILIES_EMOTION'			=> 'İfade',
	'SMILIES_HEIGHT'			=> 'İfade yüksekliği',
	'SMILIES_IMAGE'				=> 'İfade resmi',
	'SMILIES_IMPORTED'			=> 'İfade paketi yüklendi.',
	'SMILIES_IMPORT_SUCCESS'	=> 'İfade paketi aktarıldı.',
	'SMILIES_LOCATION'			=> 'İfade konumu',
	'SMILIES_NOT_DISPLAYED'		=> 'Buradaki ifadeler ileti gönderme ekranında gösterilmez',
	'SMILIES_ORDER'				=> 'İfade sırala',
	'SMILIES_URL'				=> 'İfade resim dosyası',
	'SMILIES_WIDTH'				=> 'İfade genişliği',

	'WRONG_PAK_TYPE'	=> 'Belirtilen paket uygun veriyi içermiyor.', 
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Bu kontrol paneli aracılığı ile pano genelinde kullanılmasını istemediğiniz kelimelere sansür uygulayabilirsiniz. Ayrıca kişilerin sansür uygulanan kelimeler ile üye olamayacakalarını da hatırlatmak isteriz. Kelime alanında joker karakter (*) kabul edilmektedir, örn: *test* nefret ettirici , test* test etmeye denk olacaktı, *test nefret edecekti.',
	'ADD_WORD'				=> 'Yeni kelime ekle',

	'EDIT_WORD'		=> 'Kelime sansürünü değiştir',
	'ENTER_WORD'	=> 'Bir kelime ve yerine kullanılacak bir kelime girmeniz gerekmekte.',

	'NO_WORD'		=> 'Değiştirmek için herhangi bir kelime seçilmedi.',

	'REPLACEMENT'	=> 'Yerine konacak', // -

	'UPDATE_WORD'	=> 'Kelime sansürünü güncelle',

	'WORD'				=> 'Kelime',
	'WORD_ADDED'		=> 'Kelime sansürü eklendi.',
	'WORD_REMOVED'		=> 'Seçilen kelime sansürü kaldırıldı.',
	'WORD_UPDATED'		=> 'Seçilen kelime sansürü güncellendi.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Bu formu kullanarak özel seviye ekleyebilir, düzenleyebilir, izleme ve silme işlemi yapabilirsiniz. Ayrıca kendinize özel olarak seviye oluşturabilirsiniz.',
	'ADD_RANK'				=> 'Yeni seviye ekle',

	'MUST_SELECT_RANK'		=> 'Bir seviye seçmelisiniz.',
	
	'NO_ASSIGNED_RANK'		=> 'Özel seviye atanmadı.',
	'NO_RANK_TITLE'			=> 'Seviye için bir başlık belirtilmedi.',
	'NO_UPDATE_RANKS'		=> 'Seviye başarıyla silindi. Ancak bu seviyeyi kullanan hesaplar değiştirilmedi. Bu hesapları elle değiştirmek zorundasınız.', //The rank was successfully deleted. However user accounts using this rank were not updated. You will need to manually reset the rank on these accounts.',

	'RANK_ADDED'			=> 'Seviye eklendi.',
	'RANK_IMAGE'			=> 'Seviye resmi',
	'RANK_IMAGE_EXPLAIN'	=> 'Geçerli seviye için bir resim eklemek için bunu kullanın. Belirteceğiniz resmin dizin yolu phpBB’nin kurulu olduğu dizinde olmalıdır.', //Use this to define a small image associated with the rank. The path is relative to the root phpBB directory.',
	'RANK_MINIMUM'			=> 'En az ileti',
	'RANK_REMOVED'			=> 'Seviye silindi.',
	'RANK_SPECIAL'			=> 'Özel seviye olarak belirle',
	'RANK_TITLE'			=> 'Seviye başlığı',
	'RANK_UPDATED'			=> 'Seviye başarı ile güncellendi.', 
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Buradan kullanılmasını istemediğiniz kullanıcı adlarını belirleyebilirsiniz. İzin verilmeyen kullanıcı adları * joker karakterini içerebilir. Lütfen, daha önce kayıt edilmiş bir kullanıcı adını yasaklayamayacağınızı unutmayın, eğer yine de söz konusu kullanıcı adına izin vermek istemiyor iseniz, önce bu ismi silmelisiniz.',
	
	'ADD_DISALLOW_EXPLAIN'	=> 'Herhangi bir joker karakteri * kullanıcı isimlerine engel olmak için kullanabilirsin.',
	'ADD_DISALLOW_TITLE'	=> 'Yasaklı bir kullanıcı adı ekle',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Bu listeden yasaklı kullanıcıları kaldırabilirsiniz.', //-Acaba yasağı mı kaldırabilirsin diyor?- You can remove a disallowed username by selecting the username from this list and clicking submit',
	'DELETE_DISALLOW_TITLE'		=> 'Yasaklı kullanıcı adını kaldır.',
	'DISALLOWED_ALREADY'		=> 'Girdiğiniz isim yasaklanamıyor. Olası nedenler: "İsim zaten yasaklılar listesinde, girdiğiniz kelime sansürlü kelimeler listesinde, bir kullanıcı halen bu ismi kullanıyor" olabilir.', //The name you entered could not be disallowed. It either already exists in the list, exists in the word censor list, or a matching username is present.',
	'DISALLOWED_DELETED'		=> 'Yasaklı kullanıcı adı kaldırıldı.',
	'DISALLOW_SUCCESSFUL'		=> 'Yasaklı kullanıcı adı eklendi.',

	'NO_DISALLOWED'				=> 'Yasaklı kullanıcı adı yok',
	'NO_USERNAME_SPECIFIED'		=> 'İşlem yapmak için bir kullanıcı adı seçmediniz.', //You haven’t selected or entered a username to operate with.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Buradan iletileri kabul etmediğiniz durumlarda raporlarda ve red mesajlarında kullanılanılacak olan nedenleri yönetebilirsiniz. Varsayılan olarak gelen sadece bir neden (* ile işaretlenmiştir) bulunmaktadır ve kaldırılamaz. Genel içerikli mesajlarda kullanılır ve bir nedene uymayan iletiler için uygundur.',
	'ADD_NEW_REASON'		=> 'Yeni sebep ekle',
	'AVAILABLE_TITLES'		=> 'Geçerli yerel nedenler.', //Available localized reason titles',

	'IS_NOT_TRANSLATED'			=> 'Sebep yerelleştirilmedi.', // Reason has <strong>not</strong> been localised
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Sebep yeri <strong>mevcut değil</strong>. Eğer yerel form sağlamak istiyorsanız, dil dosyası rapor sebep kısmından doğru anahtarları belirtin.',
	'IS_TRANSLATED'				=> 'Sebep yerelleştirildi.', //Reason has been localised
	'IS_TRANSLATED_EXPLAIN'		=> 'Sebep yeri mevcut. Eğer buraya girdiğiniz başlık dil dosyası rapor sebep kısmında belirlendiyse, başlık ve açıklama yerel form olarak kullanılacaktır.',

	'NO_REASON'					=> 'Sebep bulunamadı.',
	'NO_REASON_INFO'			=> 'Bu sebep için bir başlık ve tanımlama belirtmelisiniz.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Varsayılan mevcut sebebi kaldıramazsınız “Diğer”.',

	'REASON_ADD'				=> 'Rapor/itiraz sebebi ekle',
	'REASON_ADDED'				=> 'Rapor/itiraz sebebi başarı ile eklendi.',
	'REASON_ALREADY_EXIST'		=> 'Bu sebep ili ilgili başlık zaten mevcut, lütfen bu sebep için başka bir başlık belirtiniz.',
	'REASON_DESCRIPTION'		=> 'Sebep açıklaması',
	'REASON_DESC_TRANSLATED'	=> 'Gösterilen sebep açıklamsı',
	'REASON_EDIT'				=> 'Rapor/itiraz sebebini düzenle',
	'REASON_EDIT_EXPLAIN'		=> 'Buradan bir sebep ekleyebilir veya düzenleyebilirsiniz. Eğer sebep yerel çeviriye dönüştürülürse, bu tanımlamanın yerine yerleştirilen uyarlama kullanılır.',
	'REASON_REMOVED'			=> 'Rapor/itiraz sebebi başarı ile silindi.',
	'REASON_TITLE'				=> 'Sebep başlığı',
	'REASON_TITLE_TRANSLATED'	=> 'Gösterilen sebep başlığı',
	'REASON_UPDATED'			=> 'Rapor/itiraz sebebi başarı ile düzenlendi.',

	'USED_IN_REPORTS'		=> 'Raporlarda kullanılır',
));

?>