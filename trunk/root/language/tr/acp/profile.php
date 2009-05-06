<?php
/*
*
* acp_profile [Turkish]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Özel hesap alanı eklendi.',
	'ALPHA_ONLY'			=> 'Sadece harf ve rakamlar',
	'ALPHA_SPACERS'			=> 'Harf, rakam ve boşluklar',
	'ALWAYS_TODAY'			=> 'Daima güncel tarih',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Seçeneklerinizi şimdi giriniz',
	'BOOL_TYPE_EXPLAIN'		=> 'Türünü belirle, bir kontrol kutusu ya da radyo kutusu kullanabilirsiniz. Eğer bir kullanıcıya verilende işaretlenmişse bir kontrol kutusu gösterilecektir. Bu durumda <strong>ikinci</strong> dil seçeneği kullanılacaktır. Radyo butonları değerlerinden bağımsız olarak gösterilecektir.',

	'CHANGED_PROFILE_FIELD'			=> 'Hesap alanı değiştirildi.',
	'CHARS_ANY'						=> 'Herhangi karakter',
	'CHECKBOX'						=> 'İşaret kutusu',
	'COLUMNS'						=> 'Sütunlar',
	'CP_LANG_DEFAULT_VALUE'			=> 'Varsayılan değer',
	'CP_LANG_EXPLAIN'				=> 'Alan açıklaması',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'Bu alana yazacağınız açıklama kullanıcı tarafından görülecektir.',
	'CP_LANG_NAME'					=> 'Alan adı/kullanıcıya sunulacak başlık',
	'CP_LANG_OPTIONS'				=> 'Seçenekler',
	'CREATE_NEW_FIELD'				=> 'Yeni alan oluştur',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'En az bir adet hesap alanı tercüme edilmedi. Lütfen gerekli bilgiyi “Tercüme” bağına tıklayarak girin.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Varsayılan dil [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Bu hesap alanı için varsayılan dil girdisi yapılmadı.',
	'DEFAULT_VALUE'					=> 'Varsayılan değer',
	'DELETE_PROFILE_FIELD'			=> 'Hesap alanını sil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Bu hesap alanını silmek istediğinizden emin misiniz?',
	'DISPLAY_AT_PROFILE'			=> 'Kullanıcı panelinde göster',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Kullanıcı bu hesap alanını kullanıcı kontrol panelini kullanarak değiştirebilir.',
	'DISPLAY_AT_REGISTER'			=> 'Kayıt ekranında göster',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Eğer bu seçenek aktif olursa, bu alan kayıt sırasında görüntülenecektir.',
	'DISPLAY_PROFILE_FIELD'			=> 'Hesap alanını herkese göster',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> '"Sistem kaynakları" bölümünde izin verilen bütün alanlarda özel profil alanları gösterilecektir. Bunu “hayır” olarak işaretlemek, konu gösterim sayfalarında, hesaplarda ve üye listesinde bu alanların gösterilmemesine sebep olacaktır.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Her biri bir satırda olacak şekilde seçeneklerinizi giriniz.', //Enter your options now, every option in one line

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Unutmayın ki; seçenek metinlerini değiştirebilir ve seçeneklerin sonuna yeni birini ekleyebilirsiniz. Mevcut seçenekler arasına yeni bir seçenek eklemeniz önerilmez. Bu kullanıcılarınızın yanlış seçeneği işaretlemesine sebep olabilir. Bu sonucu aradaki seçeneklerden birini kaldırmanız durumunda da alabilirsiniz. Sona eklediğiniz seçenekleri kaldırmanız, kullanıcının kabul ettiği seçeneği varsayılana çevirir.',
	'EMPTY_FIELD_IDENT'				=> 'Boş alan belirlemesi',
	'EMPTY_USER_FIELD_NAME'			=> 'Lütfen bir alan adı/başlığı yazın',
	'ENTRIES'						=> 'Girişler', // Entries
	'EVERYTHING_OK'					=> 'Herşey yolunda', //Everything OK

	'FIELD_BOOL'				=> 'Boolean (Evet/Hayır)',
	'FIELD_DATE'				=> 'Tarih',
	'FIELD_DESCRIPTION'			=> 'Alan açıklaması',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Bu alana yazacağınız açıklama kullanıcı tarafından görülecektir.',
	'FIELD_DROPDOWN'			=> 'Açılır kutu', // açılır menü
	'FIELD_IDENT'				=> 'Alan kimliği', // Field identification
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Seçtiğiniz alan tanımlamazı zaten mevcut. Lütfen başka bir isim seçiniz.',
	'FIELD_IDENT_EXPLAIN'		=> 'Alan tanımlaması hesap alanlarının veritabanında ve temalarda kullanılan tanımlıyıcıdır. (Sadece İngiliz alfabesindeki küçük harfler (a-z) ile "_" (alttan çizgi) işareti içerebilir.)',
	'FIELD_INT'					=> 'Rakamlar',
	'FIELD_LENGTH'				=> 'Veri girişi kutusunun genişliği', //Length of input box (girdi kutusunun genişliği) alternatif
	'FIELD_NOT_FOUND'			=> 'Hesap alanı bulunamadı.',
	'FIELD_STRING'				=> 'Tek satır metin alanı',
	'FIELD_TEXT'				=> 'Yazı alanı',
	'FIELD_TYPE'				=> 'Alan tipi',
	'FIELD_TYPE_EXPLAIN'		=> 'Alan türünü daha sonra değiştiremezsiniz.',
	'FIELD_VALIDATION'			=> 'Alan onaylama',
	'FIRST_OPTION'				=> 'İlk seçenek',

	'HIDE_PROFILE_FIELD'			=> 'Hesap alanını gizle',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Bu hesap alanını hala görebilen kullanıcı, yönetici ve yetkililer dışındaki diğer tüm kullanıcılardan gizle. Kullanıcı panelinde gösterim aktif değilse, kullanıcı bu hesap alanını göremez veya değiştiremez, bu alan sadece yönetici tarafından değiştirilebilir.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Alan tanımlaması sadece İngiliz alfabesindeki küçük harfler (a-z) ile "_" (alttan çizgi) işareti içerebilir.',
	'INVALID_FIELD_IDENT_LEN'	=> 'Alan tanımlaması en fazla 17 karakter uzunluğunda olabilir',
	'ISO_LANGUAGE'				=> 'Dil [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Dile özel seçenek [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'En fazla karakter sayısı',
	'MAX_FIELD_NUMBER'		=> 'İzin verilen en büyük numara',
	'MIN_FIELD_CHARS'		=> 'En az karakter sayısı',
	'MIN_FIELD_NUMBER'		=> 'İzin verilen en küçük numara',

	'NO_FIELD_ENTRIES'			=> 'Herhangi bir girdi belirlenmedi.',
	'NO_FIELD_ID'				=> 'Herhangi bir ID tanımlanmadı.',
	'NO_FIELD_TYPE'				=> 'Herhangi bir alan tipi tanımlanmadı.',
	'NO_VALUE_OPTION'			=> 'Girilmemiş veriye eşit seçenek',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Girilmemiş veri değeri. Eğer alan gerekliyse, kullanıcı buradan bir seçeneği seçerse hata iletisi ile karşılaşır.',
	'NUMBERS_ONLY'				=> 'Sadece rakamlar (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Temel seçenekler',
	'PROFILE_FIELD_ACTIVATED'	=> 'Hesap alanı aktifleştirildi.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Hesap alanı devre dışı bırakıldı.',
	'PROFILE_LANG_OPTIONS'		=> 'Dile özel seçenek',
	'PROFILE_TYPE_OPTIONS'		=> 'Hesap tipine özel seçenek',

	'RADIO_BUTTONS'				=> 'Radio butonları',
	'REMOVED_PROFILE_FIELD'		=> 'Hesap alanı kaldırıldı.',
	'REQUIRED_FIELD'			=> 'Gerekli alan',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Hesap alanının doldurulmasını kullanıcı veya yönetici tarafından tanımlanacak şekilde zorunlu hale getir. Kayıt ekranında gösterme aktif değilse, bu alanın doldurulması sadece kullanıcılar hesap bilgilerini düzenlerken gerekli olacaktır.',
	'ROWS'						=> 'Satırlar',

	'SAVE'							=> 'Kaydet',
	'SECOND_OPTION'					=> 'İkinci seçenek',
	'STEP_1_EXPLAIN_CREATE'			=> 'Burada yeni hesap alanınızın temel parametrelerini değiştirebilirsiniz. Bu bilgiler kalan seçeneklerin ayarlanması ve ikinci aşama için gereklidir.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Burada hesap alanınızın temel parametrelerini değiştirebilirsiniz. İlgili seçenek değişiklikleri ikinci aşamada tekrar hesaplanır.',
	'STEP_1_TITLE_CREATE'			=> 'Hesap alanını gir',
	'STEP_1_TITLE_EDIT'				=> 'Hesap alanını düzenle',
	'STEP_2_EXPLAIN_CREATE'			=> 'Burada kullanmak isteyeceğiniz bazı hesap alanlarının ortak tanımlamalarını yapabilirsiniz.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Burada bazı seçenekleri değiştirebilirsiniz. Hesap alanının nasıl görünmesi istediğinizden karar verene kadar ayarlarla oynamaya devam edin<br /><strong>Unutmayın ki, kullanıcılar tarafından girilen hesap alanlarında yapılan değişiklikler mevcut hesap alanlarını etkilemeyecektir.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Hesap tipine özel seçenek',
	'STEP_2_TITLE_EDIT'				=> 'Hesap tipine özel seçenek',
	'STEP_3_EXPLAIN_CREATE'			=> 'Birden fazla pono dili kurulu olduğu için, diğer dil seçeneklerini de doldurmalısınız. Hesap alanı varsayılan dil paketiyle çalışacaktır, diğer dil seçeneklerini daha sonra doldurabilirsiniz.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Birden fazla pono dili kurulu olduğu için, kurulu dilleri değiştirebilir ya da mevcut diller arasına ekleyebilirsiniz. Hesap alanı varsayılan dil paketiyle çalışacaktır.',
	'STEP_3_TITLE_CREATE'			=> 'Arta kalan dil tanımlamaları',
	'STEP_3_TITLE_EDIT'				=> 'Dil tanımlamaları',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Görüntülenmesi için varsayılan bir ifade ve varsayılan bir değer belirle. İlk yerinde boş göstermek için boş bırak.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Varsayılan bir metin ve bir varsayılan değer belirle. İlk yerinde boş göstermek için boş bırak.',
	'TRANSLATE'						=> 'Tercüme et',

	'USER_FIELD_NAME'	=> 'Kullanıcılara gösterilen hesap adı/başlığı',

	'VISIBILITY_OPTION'	=> 'Görünürlük seçenekleri',
));

?>