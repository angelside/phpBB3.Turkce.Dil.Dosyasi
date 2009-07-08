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
	'ACP_FILES'						=> 'Yönetim dil dosyaları',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Buradan dil paketleri yükleyip silebilirsiniz.',

	'EMAIL_FILES'				=> 'E-posta şablonları',

	'FILE_CONTENTS'				=> 'Dosya içerikleri',
	'FILE_FROM_STORAGE'			=> 'Depolama dizininden dosya',

	'HELP_FILES'				=> 'Yardım dosyaları',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Yüklü dil paketleri',
	'INVALID_LANGUAGE_PACK'		=> 'Seçilen dil paketi doğru değil gibi görünüyor. Lütfen dil paketini doğrulayıp gerekirse baştan yükleyin.',
	'INVALID_UPLOAD_METHOD'		=> 'Seçilen yükleme yöntemi geçerli değil, lütfen farklı bir yöntem seçiniz.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Dil detayları güncellendi',
	'LANGUAGE_ENTRIES'					=> 'Dil girişleri',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Buradan dil paketi içeriğini veya daha önce çeviri yapılmamış içerikleri değiştiribilirsiniz.<br /><strong>Not:</strong> Dil dosyasında değişiklik yaptıktan itibaren, değişiklikler indirebilmeniz için farklı bir dizinde depolanacaktır. Değişiklikleri web alanınızda bulunan orijinal dil dosyası ile değiştirmediğiniz sürece kullanıcılar tarafından görülmeyecektir.',
	'LANGUAGE_FILES'					=> 'Dil dosyaları',
	'LANGUAGE_KEY'						=> 'Dil anahtarı',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Bu dil paketi zaten yüklenmiş.',
	'LANGUAGE_PACK_DELETED'				=> '<strong>%s</strong> dil paketi silindi. Tüm kullanıcların dil seçenekleri panonun varsayılan dili olarak ayarlandı.',
	'LANGUAGE_PACK_DETAILS'				=> 'Dil paketi detayları',
	'LANGUAGE_PACK_INSTALLED'			=> '<strong>%s</strong> dil paketi yüklendi.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Yerel adı',
	'LANGUAGE_PACK_NAME'				=> 'Adı',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Seçilen dil paketi mevcut değil.',
	'LANGUAGE_PACK_USED_BY'				=> 'Kullanım (botlar dahil)',
	'LANGUAGE_VARIABLE'					=> 'Dil değişkeni',
	'LANG_AUTHOR'						=> 'Dil paketi yazarı',
	'LANG_ENGLISH_NAME'					=> 'İngilizce adı',
	'LANG_ISO_CODE'						=> 'ISO kodu',
	'LANG_LOCAL_NAME'					=> 'Yerel adı',

	'MISSING_LANGUAGE_FILE'		=> 'Kayıp dil dosyası: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Kayıp dil değişkenleri',
	'MODS_FILES'				=> 'Eklenti dil dosyaları',

	'NO_FILE_SELECTED'				=> 'Bir dil dosyası seçmediniz.',
	'NO_LANG_ID'					=> 'Bir dil paketi seçmediniz.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Varsayılan dil paketini silemezsiniz.<br />Eğer bu dil paketini silmek istiyorsanız, ilk önce panonuzun varsayılan dilini değiştirin.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Kurulmamış dil paketi yok',

	'REMOVE_FROM_STORAGE_FOLDER'	=> 'Depolama dizininden sil',

	'SELECT_DOWNLOAD_FORMAT'	=> 'İndirme biçimi seçiniz',
	'SUBMIT_AND_DOWNLOAD'		=> 'Gönder ve dosyayı indir',
	'SUBMIT_AND_UPLOAD'			=> 'Gönder ve dosyayı yükle',

	'THOSE_MISSING_LANG_FILES'		=> 'Aşağıdaki dil dosyaları %s dil dizininden kayıptır.',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'Aşağıdaki dil değişkenleri %s dil paketinden kayıptır.',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Kaldırılmış dil paketleri',

	'UNABLE_TO_WRITE_FILE'		=> 'Dosya %s hedefine yazılamadı.',//The file could not be written to 
	'UPLOAD_COMPLETED'			=> 'Yükleme tamamlandı',
	'UPLOAD_FAILED'				=> 'Yükleme bilinmeyen bir sebep yüzünden kesildi. İlgili dosyaları elle değiştirmeniz gerekebilir.',
	'UPLOAD_METHOD'				=> 'Yükleme metodu',
	'UPLOAD_SETTINGS'			=> 'Yükleme ayarları',

	'WRONG_LANGUAGE_FILE'		=> 'Seçilen dil dosyası geçersiz',
));

?>