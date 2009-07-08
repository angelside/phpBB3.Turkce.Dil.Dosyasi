<?php
/**
* @version $Id$
* @author Sevdin Filiz <angelside@users.sourceforge.net>
* @copyright (c) 2009, Canver Software <http://www.canversoft.net>
*/

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

// dil değişkenleri
$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Burada, eklentiler ve birleştirilmiş özel kategoriler için temel ayarları kontrol edebilirsiniz.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Burada, uzantı grupları ekleyebilir, silebilir, değiştirebilir veya devredışı bırakabilirsiniz. Bundan başka; özel bir kategorinin görevleri, dosya indirme mekanizmasını değiştirme ve ait olduğu grubun mesaj/ileti eki önünde gösterilecek olan yükleme simgesini belirleme ayarları bulunmaktadır. ',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Burada, izin verilen uzantıları yönetebilirsiniz. Uzantıları etkinleştirmek için, lütfen uzantı grup yönetim panelini kullanınız. Kesinlikle web yazılım uzantılarını eklemenizi önermiyoruz. (<code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, gibi uzantılar tehlikelidir…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Burada, sahipsiz eklentileri görebilirsiniz. Eğer kullanıcılar dosyayı ekler ve iletiyi göndermezse bu durum ortaya çıkacaktır. Bu dosyaları silebilebilirsiniz ya da iletilere ekleyebilirsiniz. Ekleme yapmak için geçerli id numarasını bilmeniz gerekir. Bu id numarasını kendiniz belirlemek zorundasınız.',		
	'ADD_EXTENSION'						=> 'Uzantı ekle',
	'ADD_EXTENSION_GROUP'				=> 'Uzantı grubu ekle',
	'ADMIN_UPLOAD_ERROR'				=> 'Dosya eklemesi yapılırken meydana gelen hatalar: “%s”.',
	'ALLOWED_FORUMS'					=> 'İzin verilen forumlar',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Bütün veya seçilen forumlara, bu uzantının iletilere eklenmesine izin verir.',
	'ALLOWED_IN_PM_POST'				=> 'İzin verildi',
	'ALLOW_ATTACHMENTS'					=> 'Eklentilere izin ver',
	'ALLOW_ALL_FORUMS'					=> 'Bütün forumlara izin ver',
	'ALLOW_IN_PM'						=> 'Özel mesaj içinde izin ver',
	'ALLOW_PM_ATTACHMENTS'				=> 'Özel mesajlarda eklentilere izin ver',
	'ALLOW_SELECTED_FORUMS'				=> 'Sadece aşağıdaki seçili forumlar',
	'ASSIGNED_EXTENSIONS'				=> 'Ayrılan uzantılar',
	'ASSIGNED_GROUP'					=> 'Ayrılan uzantı grubu',
	'ATTACH_EXTENSIONS_URL'				=> 'Uzantılar',
	'ATTACH_EXT_GROUPS_URL'				=> 'Uzantı grupları',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'İleti ekleri için en fazla dosya boyutu',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Her bir dosya için en fazla boyut, sınır koymamak için 0 değerini yazın.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Özel mesaj ekleri için en fazla dosya boyutu',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Her bir özel mesaj eki için ayrılacak en fazla boyut, sınır koymamak için 0 değerini yazın.',
	'ATTACH_ORPHAN_URL'					=> 'İlişiksiz eklentiler',
	'ATTACH_POST_ID'					=> 'İleti ID',
	'ATTACH_QUOTA'						=> 'Toplam mesaj eki kotası',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Panoda izin verilen toplam mesaj eki için ayrılan alan, sınır koymamak için 0 değerini yazın.',
	'ATTACH_TO_POST'					=> 'İletiye ekle',

	'CAT_FLASH_FILES'			=> 'Flash dosyaları',
	'CAT_IMAGES'				=> 'Resimler',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime dosyaları',
	'CAT_RM_FILES'				=> 'RealMedia dosyaları',
	'CAT_WM_FILES'				=> 'Windows Media dosyaları',
	'CHECK_CONTENT'				=> 'Ekli dosyaları kontrol et',
	'CHECK_CONTENT_EXPLAIN'		=> 'Bazı web tarayıcıları yüklenen dosyaların mime tiplerini yanlış tanımlayabilirler. Bu seçenek bunun gibi dosyaları kabul etmemeyi temin eder.',
	'CREATE_GROUP'				=> 'Yeni grup oluştur',
	'CREATE_THUMBNAIL'			=> 'Yeni önizleme oluştur',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Mümkün olan bütün durumlarda bir önizleme resmi oluştur',

	'DEFINE_ALLOWED_IPS'			=> 'İzin verilen IP/Sunucu adreslerini tanımlayın',
	'DEFINE_DISALLOWED_IPS'			=> 'İzin verilmeyen (yasaklı) IP/Sunucu adreslerini tanımlayın',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Her yeni bir satıra, farklı IP/sunucu adreslerini tanımlayın. Belli bir IP aralığını girmek için, ilk IP adresi ile son IP adresi arasında tire (-) kullanın. Nokta aralığının tümü için joker olarak “*” kullanın.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Fare ve klavyenizi kullanarak bilgisayarınız ve tarayıcınızla daha fazla IP adresi seçebilirsiniz. Seçilmeyen IP adreslerinin arka planı mavi olacakır.',
	'DISPLAY_INLINED'				=> 'Resimleri mesaj/ileti içerisinde göster',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Eğer Hayır seçeneği işaretlenirse, resimler link olarak gösterilecek.',
	'DISPLAY_ORDER'					=> 'Mesaj eki sıralaması',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Tarih sıralamasına göre mesaj eklerinin gösterimi.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Uzantı grubunu düzenle',
	'EXCLUDE_ENTERED_IP'			=> 'Girilen IP/Sunucu adreslerini kabul etmemek için bu seçeneği etkinleştirin.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'İzin verilen IP/Sunucu adreslerinden IP’yi gizle ',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'İzin verilmeyen (yasaklı) IP/Sunucu adreslerinden IP’yi gizle',
	'EXTENSIONS_UPDATED'			=> 'Uzantılar başarılı bir şekilde güncellendi.',
	'EXTENSION_EXIST'				=> '%s uzantısı, daha önceden eklenmiş.',
	'EXTENSION_GROUP'				=> 'Uzantı grubu',
	'EXTENSION_GROUPS'				=> 'Uzantı grupları',
	'EXTENSION_GROUP_DELETED'		=> 'Uzantı grubu başarılı bir şekilde silindi.',
	'EXTENSION_GROUP_EXIST'			=> 'Bu %s uzantı grubu zaten kayıtlı.',

	'GO_TO_EXTENSIONS'		=> 'Uzantı yönetim ekranı',
	'GROUP_NAME'			=> 'Grup adı',

	'IMAGE_LINK_SIZE'			=> 'Resim link boyutları',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Resim eklentisi boyutları belirtilen miktardan büyükse satır içinde bir metin linki olarak gösterilecektir. Bunu istemiyorsanız, değerlerini 0 px - 0 px olarak ayarlayınız.',
	'IMAGICK_PATH'				=> 'Imagemagick yolu',
	'IMAGICK_PATH_EXPLAIN'		=> 'Imagemagick dönüşüm uygulamasının tam yolu.<br />örn. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Her bir ileti için en fazla eklenti sayısı',
	'MAX_ATTACHMENTS_PM'			=> 'Her bir özel mesaj için en fazla eklenti sayısı',
	'MAX_EXTGROUP_FILESIZE'			=> 'En fazla dosya boyutu',
	'MAX_IMAGE_SIZE'				=> 'En fazla resim ebatları',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'İleti eki en fazla resim boyutları. Boyut kontrolünü kapatmak için, her iki değere de 0 değerini girmelisiniz.',
	'MAX_THUMB_WIDTH'				=> 'En fazla önizleme resmi genişliği (px)',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Üretilen önizleme resmi, bu değeri geçemeyecek',
	'MIN_THUMB_FILESIZE'			=> 'Önizleme resim dosyası için en az boyut',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Bu değerden daha küçük olan resimler için, önizleme resmi oluşturulmaz.',
	'MODE_INLINE'					=> 'Satır içi',
	'MODE_PHYSICAL'					=> 'Fiziksel',

	'NOT_ALLOWED_IN_PM'			=> 'Özel mesajlarda izin verilmedi',
	'NOT_ALLOWED_IN_PM_POST'	=> 'İzin verilmedi',
	'NOT_ASSIGNED'				=> 'Görevlendirilmemiş',
	'NO_EXT_GROUP'				=> 'Hiçbiri',
	'NO_EXT_GROUP_NAME'			=> 'Grup adı girilmedi.',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Özelleştirdiğiniz uzantı grubu yok.',
	'NO_FILE_CAT'				=> 'Hiçbiri',
	'NO_IMAGE'					=> 'Resim yok',
	'NO_THUMBNAIL_SUPPORT'		=> 'Resim önizlemesi desteği kapatıldı. Bunun nedeni GD kütüphanesi desteği veya imagemagick uygulaması bulunamamasıdır.',
	'NO_UPLOAD_DIR'				=> 'Özelleştirdiğiniz yükleme dizini bulunmamaktadır.',
	'NO_WRITE_UPLOAD'			=> 'Özelleştirdiğiniz yükleme dizini yazılabilir değil. Lütfen, bu dizine yazılabilir izin ayarlarını veriniz.',

	'ONLY_ALLOWED_IN_PM'	=> 'Sadece özel mesajda izinli',
	'ORDER_ALLOW_DENY'		=> 'İzinli',
	'ORDER_DENY_ALLOW'		=> 'Yasaklı',

	'REMOVE_ALLOWED_IPS'		=> '<em>İzin verilen</em> IP/sunucu adreslerini silin veya pasif yapın.',
	'REMOVE_DISALLOWED_IPS'		=> '<em>Yasaklı</em> IP/sunucu adreslerini silin veya pasif yapın.',

	'SEARCH_IMAGICK'				=> 'Imagemagick uygulamasını ara',
	'SECURE_ALLOW_DENY'				=> 'İzinli/Yasaklı liste',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Dosya indirme güvenliğini aktif ettiğinizde, aşağıdaki İzinli/Yasaklı adres listesinin hangisi olacağını seçiniz: <strong>beyaz liste</strong> (izinli) ya da <strong>kara liste</strong> (yasaklı).',
	'SECURE_DOWNLOADS'				=> 'Dosya indirme güvenliği aktif mi?',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Bu seçeneği aktif etmek, ileti eklerini belirlediğiniz IP/Sunucu adresleriyle sınırlar.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Dosya indirme güvenliği aktif değil. Aşağıdaki ayarlar, dosya indirme güvenliği aktif olduktan sonra geçerli olacaktır.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP listesi başarılı bir şekilde güncellendi.',
	'SECURE_EMPTY_REFERRER'			=> 'Boş referanslara izin ver',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Dosya indirme güvenliği referans tabanlıdır. İhmal edilen referanslar için dosya indirmelerine izin veriyor musunuz?',
	'SETTINGS_CAT_IMAGES'			=> 'Resim kategorisi ayarları',
	'SPECIAL_CATEGORY'				=> 'Özel kategori',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Özel kategoriler, iletilerde gösterilen dosyaları ayırır.',
	'SUCCESSFULLY_UPLOADED'			=> 'Başarılı bir şekilde yüklendi.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Uzantı grubu başarılı bir şekilde eklendi.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Uzantı grubu başarılı bir şekilde güncellendi.',

	'UPLOADING_FILES'				=> 'Dosya ekleme',
	'UPLOADING_FILE_TO'				=> '%2$d nolu iletiye “%1$s” dosyasını ekle',
	'UPLOAD_DENIED_FORUM'			=> '“%s” forumuna dosya eklemek için izniniz bulunmamaktadır.',
	'UPLOAD_DIR'					=> 'Yükleme dizini',
	'UPLOAD_DIR_EXPLAIN'			=> 'İleti ekleri için yükleme yolu. Eğer yükleme esnasında bu yolu değiştirirseniz yüklediğiniz dosyaları el ile yeni dizine taşımak zorunda kalacağınızı unutmayın.',
	'UPLOAD_ICON'					=> 'Yükleme ikonu',
	'UPLOAD_NOT_DIR'				=> 'Özelleştirdiğiniz yükleme yolu, bir dizin olarak görünmüyor.',
));

?>