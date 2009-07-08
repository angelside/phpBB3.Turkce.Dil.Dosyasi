<?php
/**
* @version $Id$
* @author Sevdin Filiz <angelside@users.sourceforge.net>
* @copyright (c) 2009, Canver Software <http://www.canversoft.net>
*/

// değiştirmeyin
if (!defined('IN_PHPBB')) { exit; }
if (empty($lang) || !is_array($lang)) { $lang = array(); }

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Buradan phpBB ile ilgili tüm verileri yedekleyebilirsiniz. Yedek arşivini <samp>store/</samp> dizininde saklayabilir veya doğrudan indirebilirsiniz. Sunucu konfigürasyonunuza bağlı olarak dosyayı birkaç biçimde sıkıştırabilirsiniz.',
// ALEXIS: tamamlanmamış tercüme
'ACP_RESTORE_EXPLAIN'	=> 'Buradan phpBB tablolarını kayıt edilen bir dosyadan tam olarak geri yükleyebilirsiniz. Eğer sunucunuz izin veriyorsa gzip veya bzip2 ile sıkıştırılmış dosyalar otomatik olarak açılacaktır. <strong>UYARI:</strong> Bu işlem, mevcut verilerin üstüne yazacak. Onarım uzun sürerse, onarma tamamlanana kadar başka bir sayfaya geçmeyin. Yedekler <samp>store/</samp> dizininde depolanır, bu phpBB’nin pratik depolama ve geri yükleme dizinidir. Restoring backups that were not created by the built in system may or may not work.',

	'BACKUP_DELETE'		=> 'Yedek silindi.',
	'BACKUP_INVALID'	=> 'Yedekleme için seçilen yedek dosyası geçersiz.',
	'BACKUP_OPTIONS'	=> 'Yedekleme seçenekleri',
	'BACKUP_SUCCESS'	=> 'Yedek dosyası oluşturuldu.',
	'BACKUP_TYPE'		=> 'Yedek tipi',

	'DATABASE'					=> 'Veritabanı Uygulamaları',
	'DATA_ONLY'					=> 'Sadece veri',
	'DELETE_BACKUP'				=> 'Yedek sil',
	'DELETE_SELECTED_BACKUP'	=> 'Seçilen yedeği silmek istediğinize emin misiniz?',
	'DESELECT_ALL'				=> 'Tümünü seçimden çıkar',
	'DOWNLOAD_BACKUP'			=> 'Yedek indir',

	'FILE_TYPE'		=> 'Dosya tipi',
	'FULL_BACKUP'	=> 'Tam',

	'RESTORE_FAILURE'		=> 'Yedek dosyası bozuk olabilir.',
	'RESTORE_OPTIONS'		=> 'Onarma seçenekleri',
	'RESTORE_SUCCESS'		=> 'Veritabanı onarıldı.<br /><br />Panonuz, yedeği aldığınız zamana geri dönmüş olması gerekiyor.',

	'SELECT_ALL'			=> 'Tümünü seç',
	'SELECT_FILE'			=> 'Bir dosya seç',
	'START_BACKUP'			=> 'Yedeklemeyi başlat',
	'START_RESTORE'			=> 'Onarımı başlat',
	'STORE_AND_DOWNLOAD'	=> 'Depola ve indir',
	'STORE_LOCAL'			=> 'Dosyayı dizinde depola',
	'STRUCTURE_ONLY'		=> 'Sadece yapı',

	'TABLE_SELECT'			=> 'Tablo seçimi',
	'TABLE_SELECT_ERROR'	=> 'En az bir tablo seçmelisiniz.',
));

?>