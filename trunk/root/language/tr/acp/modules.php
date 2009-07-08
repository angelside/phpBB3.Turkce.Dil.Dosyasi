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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Buradan, bütün modül çeşitlerini yönetebilirsiniz. Lütfen Yönetim Paneli’nin üç-seviyeli menü yapısını hatırlayınız (Kategori -> Kategori -> Modül). Yerine göre iki-seviyeli menü yapısı da olabiliyordu (Kategori -> Modül). Modülleri siler veya devre dışı bırakırsanız, modülün sorumlu olduğu fonksiyonları kullanamazsınız.',
	'ADD_MODULE'					=> 'Modül ekle',
	'ADD_MODULE_CONFIRM'			=> 'Seçilen modda, seçilen modülleri eklemek istediğinizden emin misiniz?',
	'ADD_MODULE_TITLE'				=> 'Modül ekle',

	'CANNOT_REMOVE_MODULE'	=> 'Modül silinemiyor, atanmış alt modüller var. Bu modülü silebilmek için lütfen önce bütün alt modülleri taşıyın ya da silin.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Modül modu seçiniz',
	'CHOOSE_MODE_EXPLAIN'	=> 'Kullanılacak modül modunu seçiniz.',
	'CHOOSE_MODULE'			=> 'Modül seçiniz',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Bu modülle beraber kullanılacak dosyayı seçiniz.',
	'CREATE_MODULE'			=> 'Yeni bir modül oluştur',

	'DEACTIVATED_MODULE'	=> 'Pasif modül',
	'DELETE_MODULE'			=> 'Modül sil',
	'DELETE_MODULE_CONFIRM'	=> 'Bu modülü silmek istediğinizden emin misiniz?',

	'EDIT_MODULE'			=> 'Modülü değiştir',
	'EDIT_MODULE_EXPLAIN'	=> 'Buradan özel modül değerlerini girebilirsiniz.',

	'HIDDEN_MODULE'			=> 'Gizli modül',

	'MODULE'					=> 'Modül',
	'MODULE_ADDED'				=> 'Modül eklendi.',
	'MODULE_DELETED'			=> 'Module silindi.',
	'MODULE_DISPLAYED'			=> 'Modül gösterilsin',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Eğer bu modülün görüntülenmesini istemiyor ama kullanılmasını istiyorsanız, bunu Hayır yapın.',
	'MODULE_EDITED'				=> 'Modül değiştirildii.',
	'MODULE_ENABLED'			=> 'Modül etkin',
	'MODULE_LANGNAME'			=> 'Modül dili adı',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Gösterilecek modül adını giriniz. Eğer kaynak dil dosyası ise, geçerli dili kullanınız.',
	'MODULE_TYPE'				=> 'Modül tipi',

	'NO_CATEGORY_TO_MODULE'	=> 'Modül kategoriye çevrilemedi! Lütfen, seçeneği etkinleştirmeden önce, bütün alt modülleri silin ya da taşıyın.',
	'NO_MODULE'				=> 'Modül bulunamadı.',
	'NO_MODULE_ID'			=> 'Özel modül numarası yok.',
	'NO_MODULE_LANGNAME'	=> 'Özel modül dili ismi yok.',
	'NO_PARENT'				=> 'Üst seviye yok',

	'PARENT'				=> 'Üst seviye',
	'PARENT_NO_EXIST'		=> 'Üst seviye mevcut değil.',

	'SELECT_MODULE'			=> 'Bir modül seçiniz.',
));

?>