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
	'ADMIN_CONFIG'				=> 'Yönetici ayarları',
	'ADMIN_PASSWORD'			=> 'Yönetici parolası',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Yönetici parolasını doğrula',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(6 ve 30 karakter arası uzunluğunda.)',
	'ADMIN_TEST'				=> 'Yönetici ayarları kontrolü',
	'ADMIN_USERNAME'			=> 'Yönetici üye adı',
	'ADMIN_USERNAME_EXPLAIN'	=> '(3 ve 20 karakter arası uzunluğunda.)',
	'APP_MAGICK'				=> 'Imagemagick desteği [ eklentiler için ]',
	'AUTHOR_NOTES'				=> 'Yazar notları<br />» %s',
	'AVAILABLE'					=> 'Mevcut',
	'AVAILABLE_CONVERTORS'		=> 'Mevcut dönüştürücüler',
	
	'BEGIN_CONVERT'					=> 'Dönüştürmeye başla',
	'BLANK_PREFIX_FOUND'			=> 'Tablolarınızın gözden geçirilmesi esnasında, tablolarınızın kurulumunda geçerli bir ön-ek kullanmadığınız gözlenmiştir.',
	'BOARD_NOT_INSTALLED'			=> 'Kurulum bulunamadı',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB dönüştürücüsü çalışmak için varsayılan phpBB3 kurulumuna ihtiyaç duyar, lütfen önce <a href="%s">phpBB3’ü kurarak</a> devam ediniz.',

	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Önbellek türü',
	'CACHE_STORE_EXPLAIN'		=> 'Önbellek verilerinin saklandığı fiziksel konum, dosya sistemi tercih edilir.',
	'CAT_CONVERT'				=> 'Dönüştür',
	'CAT_INSTALL'				=> 'Kurulum',
	'CAT_OVERVIEW'				=> 'Tanışma',
	'CAT_UPDATE'				=> 'Güncelle',
	'CHANGE'					=> 'Değiştir',
	'CHECK_TABLE_PREFIX'		=> 'Lütfen tablo ön-ekini kontrol ediniz ve tekrar deneyiniz.',
	'CLEAN_VERIFY'				=> 'Son yapıyı temizleyin ve doğrulayın',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> temiz kullanıcı adı şunun için:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Eski panonuzla çatışan isimler bulundu. Dönüştürme işleminin tamamlanması için lütfen bu kullanıcıları yeniden adlandırın veya silin. Böylece her kullanıcı adı için yalnızca bir temiz kullanıcı adı tanımlı olacaktır.',
	'COLLIDING_USER'			=> '» kullanıcı no: <strong>%d</strong> kullanıcı: <strong>%s</strong> (%d ileti)',
	'CONFIG_CONVERT'			=> 'Ayarlar dönüştürülüyor',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Ayar dosyasına yazmak mümkün değil. Bu dosya için alternatif metod oluşturulmuş ve aşağıda sunulmuştur.',
	'CONFIG_FILE_WRITTEN'		=> 'Ayar dosyası yazıldı. Bir sonraki kurulum aşamasına geçebilirsiniz.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 ayar değeri “%s” boş.',
	'CONFIG_RETRY'				=> 'Tekrar deneyin',
	'CONTACT_EMAIL_CONFIRM'		=> 'İletişim e-posta adresini doğrula',
	'CONTINUE_CONVERT'			=> 'Dönüştürmeye devam et',
	'CONTINUE_CONVERT_BODY'		=> 'Bir önceki dönüştürme işlemi algılandı. Şimdi yeni bir dönüştürme başlatabilir veya önceki dönüştürme işlemine devam edebilirsiniz.',
	'CONTINUE_LAST'				=> 'Son ifadeye devam et',
	'CONTINUE_OLD_CONVERSION'	=> 'Daha önce başlanmış dönüştürmeye devam et',
	'CONVERT'					=> 'Dönüştür',
	'CONVERT_COMPLETE'			=> 'Dönüştürme tamamlandı',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Panonuzu phpBB3’e dönüştürdünüz. Giriş yaparak <a href="../">panonuza ulaşabilirsiniz</a>. Lütfen tüm ayarların ve bilgilerin doğru transfer edildiğini kontrol ettikten sonra install dizinini silerek panonuzu erişime açınız. phpBB kullanımı hakkında yardım için çevrimiçi <a href="http://www.phpbb.com/support/documentation/3.0/" onclick="this.target=\'_blank\'">belgeler (İngilizce)</a> ve Türkçe <a href="http://www.phpbbturkiye.net/phpbb3-f4/" onclick="this.target=\'_blank\'">yardım forumları</a> bulunduğunu unutmayınız.',
	'CONVERT_INTRO'				=> 'phpBB’nin birleşmiş yapı dönüştürücüsüne hoşgeldiniz',
	'CONVERT_INTRO_BODY' 		=> 'Buradan diğer yüklenmiş pano sistemlerinden veri transferinde bulunabilirsiniz. Aşağıdaki liste size şu an için desteklenen dönüştürme modüllerini göstermektedir. Eğer aradığınız dönüştürme modülünü bu listede bulamıyorsanız, lütfen phpbb.com web sitemizi ziyaret ederek aradığınız dönüştürücünün indirme listemize dahil edilip edilmediğini kontrol ediniz.',
	'CONVERT_NEW_CONVERSION'	=> 'Yeni dönüşüm',
	'CONVERT_NOT_EXIST'			=> 'Belirtilen dönüştürücü mevcut değil.',
	'CONVERT_OPTIONS'			=> 'Seçenekler',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Yazdığınız bilgiler onaylandı. Dönüştürme işlemlerine başlamak için aşağıdaki butona basınız.',
	'CONV_ERR_FATAL'			=> 'Tehlikeli dönüştürme hatası!',//Fatal conversion error

	'CONV_ERROR_ATTACH_FTP_DIR' 		=> 'Ekli dosyalar için eski panonuzdaki FTP sistemi aktif hale getirilmiştir. Lütfen tüm ekli dosyaları erişilebilir dizine kopyalayınız. FTP yüklemesini kapatmayı unutmayınız ve doğru dizinin seçildiğine emin olunuz. Eğer işleminiz bitti ise dönüştürücü modülü baştan başlatınız.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Dönüştürme için yapılandırma bilgileri mevcut değil.', 
	'CONV_ERROR_FORUM_ACCESS'			=> 'Forum erişim izin bilgileri alınamadı.', 
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kategoriler alınamadı.',
	'CONV_ERROR_GET_CONFIG'				=> 'Pano ayarları düzenlenemedi.',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s” bölümüne ulaşılamadı/okunamadı.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Grup izinlerini alınamadı.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'add_bots() tablosundaki gruplar uyumsuz. El yordamı ile yaptıysanız tüm özel grupları eklemelisiniz.',
	'CONV_ERROR_INSERT_BOT'				=> 'Üye tablosuna bot ekleme başarısız oldu.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Bot tablosuna bot ekleme başarısız.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'user_group tablosuna üye ekleme başarısız.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mesaj ayrıştırma hatası',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Geliştirici notu: %s kullanmak için $convertor[’avatar_path’] sağlamalısınız.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'İlgili bölüm için kaynak pano belirtilmemiş.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Geliştirici notu: %s kullanmak için $convertor[’avatar_gallery_path’] sağlamalısınız.',
	'CONV_ERROR_NO_GROUP'				=> '“%1$s” grubu %2$s içinde bulunamadı.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Geliştirici notu: %s kullanmak için $convertor[’ranks_path’] sağlamalısınız.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Geliştirici notu: %s kullanmak için $convertor[’smilies_path’] sağlamalısınız.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Geliştirici notu: %s kullanmak için $convertor[’upload_path’] sağlamalısınız.',
	'CONV_ERROR_PERM_SETTING'			=> 'İzin ayarları yazılamadı/güncellenemedi.',
	'CONV_ERROR_PM_COUNT'				=> 'Seçili klasörde pm sayımı başarısız.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Eski kategori yerine yeni forum koyulamadı.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Eski forum yerine yenisi koyulamadı.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kullanıcı doğrulama bilgisi alınamadı.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Yanlış grup “%1$s” tanımlandı %2$s.',  
	'CONV_OPTIONS_BODY'					=> 'Bu sayfa hedef panoya ulaşmak için gerekli verileri toplar. <u>Eski panonuzun veritabanı bilgilerini giriniz</u>. Dönüştürücü verdiğiniz veritabanında hiçbirşey değiştirmeyecek. Dönüştürmenin gerçekleşmesi için hedef panonun kapalı olması gerekir.',
	'CONV_SAVED_MESSAGES'				=> 'Kayıtlı mesajlar', 
	
	'COULD_NOT_COPY'			=> '<strong>%1$s</strong> adlı dosya <strong>%2$s</strong>’a kopyalanamadı.<br /><br />Lütfen dosyanın varolduğundan ve webserver taraflı yazılma izinlerinin verildiğinden emin olun.',
	'COULD_NOT_FIND_PATH'		=> 'Eski panonuzun yeri bulunamadı. Lütfen ayarlarınızı kontrol edip yeniden deneyin.<br />» Sağlanan yol %s idi.',

	'DBMS'						=> 'Veritabanı türü',
	'DB_CONFIG'					=> 'Veritabanı ayarları',
	'DB_CONNECTION'				=> 'Veritabanı bağlantısı',
	'DB_ERR_INSERT'				=> '<code>INSERT</code> sorgusu işlenirken hata oluştu.',
	'DB_ERR_LAST'				=> '<var>query_last</var> işlenirken hata oluştu.',
	'DB_ERR_QUERY_FIRST'		=> '<var>query_first</var> işlenirken hata oluştu.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var> yürütülürken hata oluştu, %s (“%s”).',
	'DB_ERR_SELECT'				=> '<code>SELECT</code> sorgusu çalışırken hata oluştu.',
	'DB_HOST'					=> 'Veritabanı sunucu adı veya DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN - Data Source Name ifadesinin kısaltmasıdır. Sadece ODBC kurulumlarında bulunur.',
	'DB_NAME'					=> 'Veritabanı adı',
	'DB_PASSWORD'				=> 'Veritabanı parolası',
	'DB_PORT'					=> 'Veritabanı sunucu portu',
	'DB_PORT_EXPLAIN'			=> 'Eğer sunucunuz standart olmayan bir porttan çalıştığını biliyorsanız bu seçeneği kullanabilirsiniz.',
	'DB_USERNAME'				=> 'Veritabanı kullanıcı adı',
	'DB_TEST'					=> 'Bağlantı testi',
	'DEFAULT_LANG'				=> 'Varsayılan pano dili',
	'DEFAULT_PREFIX_IS'			=> 'Dönüştürücü özel ön-ek ile ilgili tabloları bulamadı. Lütfen, dönüştürdüğünüz pano ile ilgili doğru detayları girdiğinizden emin olun. %1$s için varsayılan ön-ek:  <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE' 			=> 'Dönüştürücüdeki test_file değişkeni için herhangi bir değer belirlenmemiş. Eğer bu dönüştürücünün kullanıcısı siz iseniz bu hata iletisini görmemeniz gerekmektedir. Eğer görüyor iseniz lütfen bu mesajı dönüştürücünün yazarına rapor etmeyi unutmayınız. Eğer zaten dönüştürücünün yazarı siz iseniz, kaynaktaki dosyaya bir isim atamalı ve pano yolunun tanımlanmasına yardımcı olmalısınız.',
	'DIRECTORIES_AND_FILES'		=> 'Dizin ve dosya ayarları',
	'DISABLE_KEYS'				=> 'Anahtarları devre dışı bırak',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Uzaktan FTP desteği [ Kurulum ]',
	'DLL_GD'					=> 'GD grafik desteği [ Görsel Doğrulama ]',
	'DLL_MBSTRING'				=> 'Multi-byte karakter desteği',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL - MySQLi kütüphaneli',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML Desteği [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib sıkıştırma desteği [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'config indir',
	'DL_CONFIG_EXPLAIN' 		=> 'Tam config.php dosyasını kendi bilgisayarınıza indirerek aktarabilirsiniz. Daha sonra dosyayı el yordamı ile phpBB3 yazılımının kök dizinindeki eski config.php dosyası ile değiştirmelisiniz. Lütfen dosyayı aktarırken ASCII biçiminde olduğundan emin olunuz. (eğer bunun ne anlama geldiğinden emin değil iseniz, FTP programınızın kullanıcı kılavuzunu okuyarak bu işlemin nasıl gerçekleştirildiğini öğrenin) config.php dosyasının aktarımı tamamlandı ise “Tamam” butonuna tıklayarak sonraki aşamaya geçebilirsiniz.',
	'DL_DOWNLOAD'				=> 'İndir',
	'DONE'						=> 'Bitti',
	
	'ENABLE_KEYS'				=> 'Anahtarları yeniden aktif hale getir. Bu işlem biraz zaman alabilir.',
	
	'FILES_OPTIONAL'			=> 'İsteğe bağli dosyalar ve dizinler',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>İsteğe bağlı</strong> - Bu dosyalara ve dizinlere izin ayarları zorunlu değildir. Eğer dosyalar, dizinler mevcut değilse veya yazılamıyorsa; kurulum sihirbazı farklı tekniklerle ilerlemeye devam edecektir. Fakat bu dosyalar, dizinler ve izinler daha hızlı bir kurulum için önerilmektedir.',
	'FILES_REQUIRED'			=> 'Dosyalar ve dizinler',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Gerekli</strong> - phpBB, doğru olarak çalışabilmek için aşağıdaki dosyalara veya dizinlere yazma iznine ihtiyaç duyar. Eğer dosyanın veya dizinin yanıda "Bulunamadı" yazısını görüyorsanız, bu dosyaları veya dizinleri siz de oluşturabilirsiniz. Eğer dosyaların veya dizinlerin yanında "Yazılabilir Değil" yazısını görüyorsanız, bu dosyaların veya dizinlerin izinlerini değiştirerek, phpBB’ye bu dosyalara yazma izni verebilirsiniz.',
	'FILLING_TABLE'				=> 'Doldurulan tablo: <strong>%s</strong>',//burası table tekil, Sadece tablo Dolduruluyorda olabilir  
	'FILLING_TABLES'			=> 'Tablolar dolduruluyor',//burası tables çoğul
	'FINAL_STEP'				=> 'Son adım', // Process final step
	'FORUM_ADDRESS'				=> 'Pano adresi',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Önceki panonuzun adresidir. Örneğin: <samp>http://www.sitenizinadi.com/phpBB3/</samp>. Eğer burası boş bırakılmayıp bir adres girildiyse, iletiler, özel mesajlar ve imzalar dahil olmak üzere adresin tüm misalleri yeni adres ile değiştirilecektir.',
	'FORUM_PATH'				=> 'Pano yolu',
	'FORUM_PATH_EXPLAIN'		=> 'Kurulum için panonun disk üzerindeki <strong>phpBB3’e göre göreceli</strong> yoludur.',
	'FOUND'						=> 'Mevcut',
	'FTP_CONFIG'				=> 'Ayar dosyasını FTP aracılığıyla gönder',
	'FTP_CONFIG_EXPLAIN' 		=> 'phpBB yazılımı bu sunucuda FTP modülünün varlığını tespit etti. İlgili config.php dosyasını bunun üzerine yazmayı denemek isteyebilirsiniz. Aşağıda sunulan bilgileri sağlamak zorundasınız. Kullanıcı adınız ve şifrenizin sunucunuz için bunlar olduğunu unutmayın! (Eğer ne yaptığınızdan ve bunların ne olduğundan emin değil iseniz barındırma hizmeti aldığınız firmanıza detayları sorunuz).',
	'FTP_PATH'					=> 'FTP yolu',
	'FTP_PATH_EXPLAIN'			=> 'Bu sizin phpBB yazılımınızın ana dizin yoludur, <samp>htdocs/phpBB3/</samp>. gibi.',
	'FTP_UPLOAD'				=> 'Yükle',
	
	'GPL'						=> 'Genel Kamu Lisansı',

	'INITIAL_CONFIG'			=> 'Temel ayarlar',
	'INITIAL_CONFIG_EXPLAIN' 	=> 'Bu yükleme işlemi, sunucunuzun phpBB için uyumlu olduğuna karar verdi. Bu sunucuda phpBB çalıştırılabilir ancak bunun için bir takım bilgileri sağlamanız gerekiyor. Veritabanına bağlantı işleminin nasıl yapıldığına dair bir fikriniz yok ise lütfen bunun için hosting sağlayıcınızdan bilgi alınız veya phpBB destek forumlarını ziyaret ediniz. Devam esnasında bilgi girerken lütfen ne yaptığınızdan emin olununuz.',
	'INSTALL_CONGRATS'			=> 'Tebrikler!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>phpBB %1$s kurulumunu tamamladınız. Burada, yeni kurduğunuz phpBB3 ile ne yapabileceğiniz konusunda iki seçeneğiniz var:</p>
		<h2>Mevcut bir panoyu phpBB3 sistemine dönüştürme</h2>
		<p>PhpBB tabanlı Dönüştürme Çatısı phpBB 2.0.x’ten ve diğer panolardan phpBB3’e dönüştürme yapmayı destekler. Eğer dönüştürmek istediğiniz bir forumunuz varsa; <a href="%2$s">dönüştürücü ile devam edin</a>.</p>
		<h2>phpBB3 sisteminize gidin!</h2>
		<p>Bu düğmeye basarak; Yönetici Panelinize gidebilirsiniz. Yapabileceklerinizi görmek için biraz zaman ayırın. <a href="http://www.phpbb.com/support/documentation/3.0/" onclick="this.target=\'_blank\'">Belgeler (ingilizce)</a> ve Türkçe <a href="http://www.phpbbturkiye.net/phpbb3-f4/" onclick="this.target=\'_blank\'">destek forumları</a> kısımlarında çevrimiçi yardım bulunduğunu unutmayın, daha fazla bilgi için <a href="%3$s">beni oku</a> dosyasını inceleyin.</p><p><strong>Lütfen şimdi install dizininin ismini değiştirin, silin veya taşıyın. Eğer dizin bulunuyorsa, yalnızca Yönetim Paneli’ne ulaşılabilecek.</strong></p>',
	'INSTALL_INTRO'				=> 'Kurulum işlemine hoşgeldiniz',
	'INSTALL_INTRO_BODY'		=> 'Bu özellik sayesinde, phpBB’yi sunucunuza kurabilirsiniz.</p><p>Bunu yaparken veritabanı detaylarınıza ihtiyacınız olacak. Veritabanı detaylarınızı bilmiyorsanız, Sunucu sağlayıcınızla irtibata geçin. Detaylar olmadan bu işlemi gerçekleştiremezsiniz. Şu bilgiler gereklidir:</p>
	<ul>
		<li>Veritabanı türü - kullanılacak veritabanı.</li>
		<li>Veritabanı sunucu adı veya DSN - veritabanı sunucu adresi.</li>
		<li>Veritabanı sunucu portu - veritabanı sağlayıcısının portu (Bu bilgi genellikle gerekli değildir).</li>
		<li>Veritabanı adı - Sunucuda bulunan veritabanınızın adı.</li>
		<li>Veritabanı kullanıcı adı ve parolası - Veritabanınıza ulaşmak için kullandığınız hesap bilgileri.</li>
	</ul>

	<p><strong>Not:</strong> Eğer SQLite kullanarak kurulum yapıyorsanız, DNS bölümünde veritabanı dosyanızın tam yolunu girin ve kullanıcı adı ile şifre alanlarını boş bırakın. Kendi güvenliğiniz için, veritabanı dosyalarının internetten ulaşılamayacak bir yerde olmadığından emin olun.</p>

	<p>phpBB3 aşağıdaki veritabanlarını destekler:</p>
	<ul>
		<li>MySQL 4.1 veya üzeri (MySQLi destekli)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 veya üzeri (direkt veya ODBC ile)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Yalnızca sunucunuzun desteklediği veritabanı türleri gösterilecek.',
	'INSTALL_INTRO_NEXT'			=> 'Kurulum işlemine başlamak için, aşağıdaki butona basınız.',
	'INSTALL_LOGIN'					=> 'Giriş',
	'INSTALL_NEXT'					=> 'Sonraki Aşama',
	'INSTALL_NEXT_FAIL'				=> 'Bazı testler başarısız oldu, diğer adıma geçmek için bu sorunu gidermelisiniz. Sorunları gidermeden ilerlemeniz; tam bir kurulum gerçekleşmemesine sebep olabilir.',
	'INSTALL_NEXT_PASS'				=> 'Tüm ana testler başarılı oldu ve kurulumun diğer adımına geçebilirsiniz. Eğer herhangi bir izni, modülü, vs. değiştirdiyseniz ve tekrar test etmek isterseniz; bunu yapabilirsiniz.',
	'INSTALL_PANEL'					=> 'Kurulum Paneli',
	'INSTALL_SEND_CONFIG' 			=> 'Ne yazık ki phpBB yazılımı, direkt olarak config.php üzerine konfigürasyon bilgilerini yazamamaktadır. Bu ilgili dosyanın bulunamayışından veya yazılabilir olmamasından kaynaklanabilir. config.php dosyasının yükleme işlemi için yapabileceklerinizin liste halindeki dökümü aşağıda verilmiştir.',
	'INSTALL_START'					=> 'Kurulumu başlat',
	'INSTALL_TEST'					=> 'Tekrar test et',
	'INST_ERR'						=> 'Kurulum hatası',
	'INST_ERR_DB_CONNECT'			=> 'Veritabanı bağlantısı sağlanamadı, hata mesajını inceleyiniz.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Sağladığınız veritabanı dizini; pano dizin ağacı içinde bulunuyor. Bu dizini internet ağından ulaşılamayacak bir yere koymalısınız.',
	'INST_ERR_DB_NO_ERROR'			=> 'Hata mesajı bulunamadı.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Bu makinede yüklü olan MySQL sürümü, seçmiş olduğunuz “MySQL - MySQLi kütüphaneli” özelliğini desteklemiyor. Lütfen “MySQL” seçeneğini deneyiniz.',
	'INST_ERR_DB_NO_SQLITE'			=> 'Kurulu olan SQLite sürümü çok eski. En az 2.8.2’ye güncellenmeli.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Bu bilgisayarda yüklü Oracle sürümü <var>NLS_CHARACTERSET</var> parametresini  <var>UTF8</var> olarak ayarlamanızı gerektiriyor.',
	'INST_ERR_DB_NO_FIREBIRD'		=> 'Bu makinada kurulu olan Firebird 2.0’dan daha eski. Lütfen daha yeni bir sürüme yükseltin.',
	'INST_ERR_DB_NO_FIREBIRD_PS'	=> 'Firebird için seçmiş olduğunuz veritabanı 8192 sayfadan daha azını destekliyor. En az 8192 sayfa desteklemeli.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Seçtiğiniz veritabanı <var>UNICODE</var> veya <var>UTF8</var> ile oluşturulmuş olmalı. <var>UNICODE</var> veya <var>UTF8</var> ile oluşturulmuş bir veritabanı ile kurmayı deneyin.',
	'INST_ERR_DB_NO_NAME'			=> 'Veritabanı adı belirtilmemiş.',
	'INST_ERR_EMAIL_INVALID'		=> 'Girdiğiniz e-posta adresi hatalı.',
	'INST_ERR_EMAIL_MISMATCH'		=> 'Girdiğiniz e-posta adresi uyuşmuyor.',
	'INST_ERR_FATAL'				=> 'Kurulum hatası',
	'INST_ERR_FATAL_DB'				=> 'Geri dönüşü olmayan bir veritabanı hatası alındı. Bu veritabanı kullanıcısının <code>CREATE TABLES</code> veya <code>INSERT</code> sorgularını çalıştırmaya yetkisi yok olarak görünüyor veya zaten varolan bir tabloyu yeniden oluşturmaya çalışıyorsunuz. Daha fazla bilgi aşağıda bulunabilir. Lütfen servis sağlayıcınızla irtibata geçiniz veya phpBB destek forumlarını ziyaret ediniz.',
	'INST_ERR_FTP_PATH'				=> 'Belirtilen dizin değiştirilemiyor, lütfen yolu kontrol ediniz.',
	'INST_ERR_FTP_LOGIN'			=> 'FTP sunucusu ile bağlantı sağlanamadı, kullanıcı adınızı ve parolanızı kontrol ediniz.',
	'INST_ERR_MISSING_DATA'			=> 'Bütün alanları doldurmanız gerekmektedir.',
	'INST_ERR_NO_DB'				=> 'Seçtiğiniz veritabanı türü için PHP modülü yüklenemedi.',
	'INST_ERR_PASSWORD_MISMATCH' 	=> 'Girdiğiniz parola uyuşmuyor',
	'INST_ERR_PASSWORD_TOO_LONG' 	=> 'Girdiğiniz parola çok uzun. En fazla 30 karakter uzunluğunda olmalıdır.',
	'INST_ERR_PASSWORD_TOO_SHORT' 	=> 'Girdiğiniz parola çok kısa. En az 6 karakter uzunluğunda olmalıdır',
	'INST_ERR_PREFIX'				=> 'Bu ön ek şu an tablolarda kullanılmaktadır, lütfen farklı bir ön ek seçiniz.',
	'INST_ERR_PREFIX_INVALID'		=> 'Belirttiğiniz toblo ön-eki veritabanınız için geçersiz görünüyor. Mesela, tire karakterini silmek gibi yöntemler deneyebilirsiniz.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Belirttiğiniz tablo öneki çok uzun. En fazla %d karakter olmalıdır.',
	'INST_ERR_USER_TOO_LONG'		=> 'Girdiğiniz kullanıcı adı çok uzun. En fazla 20 karakter olmalıdır.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Girdiğiniz kullanıcı adı çok kısa. En az 3 karakter olmalıdır.',
	'INVALID_PRIMARY_KEY'			=> 'Geçersiz birincil anahtar: %s', // Invalid primary key

	'LONG_SCRIPT_EXECUTION'		=> 'Bu işlem biraz zaman alabilir... Lütfen yazılımı durdurmayın.',
	
	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> özelliği sınaması',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Gerekli</strong> - <samp>mbstring</samp> Multibyte dizi fonksiyonlarını destekleyen bir PHP eklentisidir. Sağladığınız mbstring’ler phpBB ile uyumsuz ve kapatılmalı.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Fonksiyona aşırı yüklenildi', //? //Function overloading
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> 0 ile 4 arasında bir değer almalı.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Şeffaf karakter kodlaması',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> 0 olmalı.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP karakter girdisi dönüştürmesi',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> <samp>pass</samp> olarak ayarlanmalı.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP karakter çıktısı dönüştürmesi',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> <samp>pass</samp> olarak ayarlanmalı.',

	'MAKE_FOLDER_WRITABLE'		=> 'Lütfen bu dosyanın web sunucunuzda olduğunu ve yazılabilir durumda olduğundan emin olunuz:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Lütfen bu dizinlerin web sunucunuzda olduğunu ve yazılabilir durumda olduğundan emin olunuz:<br />»<strong>%s</strong>.',

'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'phpBB için olan MySQL veritabanı şemanız güncel değil. phpBB, şemanızın MySQL 3.x/4.x için olduğunu belirledi, ama sunucu MySQL %2$s çalıştırmakta.<br /><strong>Güncellemeye devam etmeden önce şemanızı yükseltmeniz gerekiyor.</strong><br /><br />Lütfen yükseltme işlemi için <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a> makalesini inceleyin. Problemlerle karşılaşırsanız, lütfen destek forumlarımızı (<a href="http://www.phpbb.com/community/viewforum.php?f=46">İngilizce</a>, <a href="http://www.phpbbturkiye.net/phpbb3-sorunlar-yardim-f15/">Türkçe</a>) kullanın.',
	
	'NAMING_CONFLICT'			=> 'İsim uyuşmazlığı: %s ve %s her ikisi de aynıdır<br /><br />%s',
	'NEXT_STEP'					=> 'Sonraki aşama',
	'NOT_FOUND'					=> 'Bulunamadı',
	'NOT_UNDERSTAND'			=> 'Anlaşılmıyor %s #%d, tablo %s (“%s”)',
	'NO_CONVERTORS'				=> 'Kullanılabilir dönüştürücü yok.',
	'NO_CONVERT_SPECIFIED'		=> 'Dönüştürücü seçilmedi.',
	'NO_LOCATION'				=> 'Yeri belirlenemedi. Eğer Imagemagick yüklendiğini biliyorsanız, daha sonra yönetim panelinden yerini belirleyebilirsiniz',
	'NO_TABLES_FOUND'			=> 'Tablolar bulunamadı.',

	'OVERVIEW_BODY'					=> 'phpBB3’e hoşgeldiniz!<br /><br />phpBB™ dünyada geniş çapta bir kullanıma sahip olan özellik zengini, kullanıcı dostu, yapımcısı olan phpBB Grubu tarafından tam destek verilen, açık kaynaklı bir mesaj panosu çözümüdür. phpBB3, phpBB2’nin popüler olmuş taraflarını geliştirir ve önceki uyarlamalarda mevcut olmayan, genellikle önerilen özellikleri ekler. Beklentilerinizi aştığını umarız.<br /><br />Bu yükleme sistemi; phpBB3’ün yüklenme süreci boyunca size rehberlik edecek, geçmiş sürümlerden phpBB3’ün en son sürümüne güncelleştirme, farklı bir pano sisteminden phpBB3’e dönüştürme, ek olarak phpBB2’den dönüşümü de kapsıyacaktır. Daha çok bilgi için; <a href="../docs/INSTALL.html">kurulum rehberi</a> dosyasını okumanızı tavsiye ederiz.<br /><br />Kurulumdan önce phpBB3 lisansını da okumanız ve anlamanız gerekmektedir. Menüden kendi seçeneklerinize uygun olan işlemi seçebilirsiniz.<br /><br />Daha fazla Türkçe yardım için <a href="http://www.phpbbturkiye.net/" onclick="this.target=\'_blank\'">phpBB Türkiye</a> sitesine göz atabilir,<br /> profesyonel phpBB3 desteği almak için <a href="http://www.canversoft.net/" onclick="this.target=\'_blank\'">Canver Software</a> sitesini ziyaret edebilirsiniz.',

	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 desteği',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'Sunucunuz PCRE eklentisi içinde UTF-8 desteği barındırmıyorsa phpBB <strong>çalışmayacaktır</strong>.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() fonksiyonu var',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Gerekli</strong> - phpBB fonksiyonlarının tam olarak çalışması için getimagesize() fonksiyonunun olması gerekir.',
	'PHP_OPTIONAL_MODULE'				=> 'İsteğe bağlı modüller',
	'PHP_OPTIONAL_MODULE_EXPLAIN'		=> '<strong>İsteğe bağlı</strong> - Bu modüller ve eklentiler isteğe bağlıdır. Yine debunlara sahip olursanız daha çok işlevselliğe sahip olursunuz.',
	'PHP_SUPPORTED_DB'					=> 'Desteklenen veritabanlari',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>Gerekli</strong> - Aşağıdaki veritabanlarından en az birinin PHP ile uyumluluğu bulunması gerekmektedir. Eğer hiçbir veritabanı mevcut olarak görünmüyorsa servis sağlayıcınızla irtibata geçiniz veya PHP kurulum dosyalarını yeniden inceleyiniz.',
	'PHP_REGISTER_GLOBALS'				=> 'PHP ayarlarından <var>register_globals</var> pasif mi',
	'PHP_REGISTER_GLOBALS_EXPLAIN'		=> 'phpBB, "register_globals" aktif olsa da çalışacaktır, ancak bu tehlikeli olabilir. Güvenliğiniz için PHP ayarlarından <var>register_globals</var> seçeneğinin pasif olması önerilmektedir. Uyarı: Eğer size ait bir sunucuda çalışmıyorsanız bu uyarıyı gözardı ediniz.',
	'PHP_SAFE_MODE'						=> 'Safe mode',
	'PHP_SETTINGS'						=> 'PHP sürümü ve ayarları',
	'PHP_SETTINGS_EXPLAIN'				=> '<strong>Gerekli</strong> - phpBB’nin çalışması için en az PHP 4.3.3 sürümünü kullanıyor olmanız gerekmektedir. Eğer PHP kurulumununuz yanında <var>safe mode</var> yazısı görünüyorsa, PHP bu modda çalışıyor demektir. Bu durumda kimi PHP özellikleri kısıtlanmış olabilir.',
	'PHP_URL_FOPEN_SUPPORT'				=> 'PHP <var>allow_url_fopen</var> ayarı açık',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Seçime Bağlı</strong> - Bu özellik seçime bağlıdır, fakat site dışı avatar gibi özelliklerin çalışması için bu fonksiyon gereklidir.',
	'PHP_VERSION_REQD'					=> 'PHP sürümü >= 4.3.3',
	'POST_ID'							=> 'İleti ID',
	'PREFIX_FOUND'						=> 'Tablolarınızda yapılan arama, öneki <strong>%s</strong> olan geçerli bir kurulum buldu.',
	'PREPROCESS_STEP'					=> 'Fonksiyon/girdiler için çoklu işlemler yapılıyor', //Executing pre-processing functions/queries
	'PRE_CONVERT_COMPLETE'			=> 'Dönüştürme işlemi için tüm ön hazırlıklar tamamlandı. Artık dönüştürme işlemine başlayabilirsiniz. Bazı işlemleri el yordamı ile yapmanızın gerekebileceğini unutmayın. Dönüştürme işleminden sonra, özellikle izinleri kontrol edin, arama dizinlerinizi yeniden inşa edin, ayrıca tüm dosyaların (avatar ve ifadeler gibi) doğru olarak kopyalandığından emin olun.',
	'PROCESS_LAST'					=> 'Son işlemler gerçekleştiriliyor',

	'REFRESH_PAGE'				=> 'Otomatik sayfa yenilemesi',
	'REFRESH_PAGE_EXPLAIN'		=> 'Eğer evet olarak ayarlandı ise; dönüştürücü, dönüştürme işlemine devam edebilmek için, bir adımı bitirdiğinde sayfayı yenileyecektir. Eğer ilk defa dönüştürme yapıyor ve hataları test ediyorsanız bu özelliği hayır olarak seçmenizi tavsiye ederiz.',
	'REQUIREMENTS_TITLE'		=> 'Kurulum uyumluluğu',
	'REQUIREMENTS_EXPLAIN'		=> 'phpBB tam kurulum işleminden önce sunucu ayarlarınızla ve dosyalarınızla ilgili bir test yapacaktır. Bu testin amacı phpBB’nin sunucunuza kurulabilirliliğini ve çalışabilirliğini test etmektir. Lütfen sonuçları detaylı olarak inceleyiniz ve bütün testler bitmeden ilerlemeyiniz. İsteğe bağlı eklentiler ve modüller için gerekli olan özellikler de listelenmiş ve bunlarla ilgili testler de yapılmıştır. Dilerseniz bu özellikleri sunucunuzdan aktif edebilirsiniz.',
	'RETRY_WRITE'				=> 'Ayar dosyası yazılımı yeniden çalıştırılıyor',
	'RETRY_WRITE_EXPLAIN'		=> 'phpBB’nin yazması için isterseniz config.php izinlerini değiştirebilirsiniz. Bunu yapmayı tekrar denemek istiyorsanız aşağıdaki tekrar dene bağına tıklayın. phpBB kurulumu tamamlandıktan sonra config.php izinlerini eski haline getirtmeyi unutmayınız.',
		
	'SCRIPT_PATH'						=> 'Pano yolu',
	'SCRIPT_PATH_EXPLAIN'				=> 'Alan adınıza göre phpBB3’ün bulunduğu göreceli dizin.',
	'SELECT_LANG'						=> 'Dil seçimi',
	'SERVER_CONFIG'						=> 'Sunucu ayarları',
	'SEARCH_INDEX_UNCONVERTED'			=> 'Arama indeksleri dönüştürülemedi',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Eski arama indeksiniz dönüştürülemedi. Bu, arama işlemlerinde boş sonuç gelmesine sebep olacaktır. Yeni bir arama indeksi oluşturmak için Yönetici Paneline gidin, bakım bölümünde alt menüden arama indeksi menüsüne geçin.',
	'SOFTWARE'							=> 'Pano yazılımı',
	'SPECIFY_OPTIONS'					=> 'Dönüştürme seçeneğini belirtin',
	'STAGE_ADMINISTRATOR'				=> 'Yönetici detayları',
	'STAGE_ADVANCED'					=> 'Gelişmiş ayarlar',
	'STAGE_ADVANCED_EXPLAIN'			=> 'Bu sayfadaki ayarlar, panonuzu sadece varsayılandan farklı ayarlar üstünden çalıştırmak istiyorsanız gereklidir. Eğer emin değilseniz, sonraki aşamaya geçin, bu ayarlar daha sonra yönetim panelinden düzenlenebilmektedir.',
	'STAGE_CREATE_TABLE'				=> 'VT tabloları oluşturma',
	'STAGE_CREATE_TABLE_EXPLAIN' 		=> 'phpBB3 tarafından kullanılacak veritabanı tabloları oluşturuldu ve bazı öncü veriler yerleştirildi. phpBB3 kurulumunu bitirmek için sonraki aşamaya geçin.',
	'STAGE_CONFIG_FILE'					=> 'Ayar dosyası',
	'STAGE_DATABASE'					=> 'Veritabanı ayarları',
	'STAGE_FINAL'						=> 'Son aşama',
	'STAGE_INTRO'						=> 'Tanışma',
	'STAGE_IN_PROGRESS'					=> 'Dönüştürme işlemleri',
	'STAGE_REQUIREMENTS'				=> 'İhtiyaçlar',
	'STAGE_SETTINGS'					=> 'Ayarlar',
	'STARTING_CONVERT'					=> 'Dönüştürme işlemi başlatılıyor',
	'STEP_PERCENT_COMPLETED'    		=> 'Adım <strong>%d</strong>, toplam <strong>%d</strong> adım.',
	'SUB_INTRO'							=> 'Tanışma',
	'SUB_LICENSE'						=> 'Lisans',
	'SUB_SUPPORT'						=> 'Destek',
	'SUCCESSFUL_CONNECT'				=> 'Bağlantı sağlandı',
	'SUPPORT_BODY'						=> '
	<h2>Profesyonel phpBB3 desteği</h2>
	<p>Profesyonel phpBB3 desteği almak için <a href="http://www.canversoft.net/" onclick="this.target=\'_blank\'">Canver Software</a> sitesini ziyaret edebilirsiniz.</p>

	<h2>Destek ve yardım alma</h2>
	phpBB Türkiye, phpBB3’ün güncel ve kararlı sürümü için destek sağlanır. Temel destek içeriği:
	<ul>
	<li><a href="http://www.phpbbturkiye.net/kurulum-tasima-f82/" onclick="this.target=\'_blank\'">Kurulum, taşıma</a></li>
	<li><a href="http://www.phpbbturkiye.net/kullanim-ayarlar-f27/" onclick="this.target=\'_blank\'">Kullanım ve ayarlar</a></li>
	<li><a href="http://www.phpbbturkiye.net/phpbb3-sorunlar-yardim-f15/" onclick="this.target=\'_blank\'">Teknik sorunlar</a></li>
	<li><a href="http://www.phpbbturkiye.net/guncelleme-f106/" onclick="this.target=\'_blank\'">En son kararlı sürüme güncelleme</a></li>
	<li><a href="http://www.phpbbturkiye.net/phpbb-2-0-x-den-phpbb3-e-donusturme-f108/" onclick="this.target=\'_blank\'">phpBB 2.0.x’den phpBB3’e dönüştürme</a></li>
	<li><a href="http://www.phpbbturkiye.net/hata-mesajlari-f25/" onclick="this.target=\'_blank\'">Olası hatalar ve bildirilen sorunlar</a></li>
	<li><a href="http://www.phpbbturkiye.net/diger-pano-turlerinden-donusum-f109/" onclick="this.target=\'_blank\'">Diğer pano türlerinden dönüşüm</a></li>
	</ul>

	<p>Mevcut phpBB sürümünüzü daima son kararlı sürüm ile değiştirmenizi öneririz.</p>

	<h2>Eklenti ve temalar</h2>
	<ul>
	<li><a href="http://www.phpbbturkiye.net/phpbb3-eklenti.php" onclick="this.target=\'_blank\'">phpbb.com onaylı eklentiler</a></li>
	<li><a href="http://www.phpbbturkiye.net/eklenti-tanitimlari-duyurular-guncellemeler-f30/" onclick="this.target=\'_blank\'">phpBB3 eklentileri</a></li>
	<li><a href="http://www.phpbbturkiye.net/phpbb-turkiye-eklentileri-f102/" onclick="this.target=\'_blank\'">phpBB Türkiye eklentileri</a></li>
	<li><a href="http://www.phpbbturkiye.net/tema-tanitimlari-duyurular-guncellemeler-f37/" onclick="this.target=\'_blank\'">phpBB3 temaları</a></li>
	</ul>',

	'SYNC_FORUMS'				=> 'Forumları uyumlu hale getirme işlemi başlıyor',
	'SYNC_POST_COUNT'			=> 'İleti sayaçları senkronize ediliyor', // post_counts 
	'SYNC_POST_COUNT_ID'		=> 'İleti sayaçları %1$s’den %2$s’e senkronize edildi.', //  Synchronising post_counts from <var>entry</var> %1$s to %2$s.
	'SYNC_TOPICS'				=> 'Konuları uyumlu hale getirme işlemi başlayor',
	'SYNC_TOPIC_ID'				=> 'Konu numaraları %1$s’den %2$s’e senkronize edildi.', //Synchronising topics from <var>topic_id</var> %1$s to %2$s.

	'TABLES_MISSING'			=> 'Şu tablolar bulunamadı<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Veritabanı tabloları için ön ek',
	'TABLE_PREFIX_SAME'			=> 'Tablo ön-eki dönüştürme yapacağınız yazılıma ait olmalıdır.<br />» Sağlanan ön-ek %s idi.',
	'TESTS_PASSED'				=> 'Testler başarılı',
	'TESTS_FAILED'				=> 'Testler başarısız',

	'UNABLE_WRITE_LOCK'			=> 'Kilit dosyası yazılamadı.',
	'UNAVAILABLE'				=> 'Mevcut değil',
	'UNWRITABLE'				=> 'yazılabilir değil',
    'UPDATE_TOPICS_POSTED'		=> 'Gönderilen konu bilgileri oluşturuluyor.',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Gönderilen konu bilgileri oluşturulurken bir hata oluştu. Dönüştürme işlemi tamamlandıktan sonra bu adımı Yönetim Paneli’nden yeniden deneyebilirsiniz.',
	'VERIFY_OPTIONS'			=> 'Dönüşürme seçenekleri doğrulanıyor', //Verifying conversion options
	'VERSION'					=> 'Sürüm',
	
	'WELCOME_INSTALL'			=> 'phpBB3 kurulumuna hoşgeldiniz',
	'WRITABLE'					=> 'yazılabilir',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'	=> 'Tüm dosyalar phpBB’nin son sürümüne güncellendi. Şimdi <a href="../ucp.php?mode=login">panonuza oturum açmalı</a> ve herşeyin normal olduğundan emin olmalısınız. Kurulum dizini olan install dizinini silmeyi veya adını değiştirmeyi unutmayınız.',
	'ARCHIVE_FILE'			=> 'Arşivdeki hedef dizin',

	'BACK'			=> 'Geri',
	'BINARY_FILE'	=> 'İkili dosya',
	'BOT'			=> 'Örümcek/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Temiz kullanıcı adı yöntemi birden fazla kullanıcı için aynı isimlerin kullanılmasına izin vermez. Bazı kullanıcılar yeni yöntem ile karşılaştıklarında aynı isim olarak algılanabilir. İŞlemlere devam edebilmek için, bu tür kullanıcıları silmeli veya her kullanıcı farklı olacak şekilde yeniden adlandırmalısınız.',
	'CHECK_FILES'					=> 'Dosyaları kontrol et',
	'CHECK_FILES_AGAIN'				=> 'Dosyaları tekrar kontrol et',
	'CHECK_FILES_EXPLAIN'			=> 'Sonraki adımda tüm dosyalar güncel dosyalarla karşılaştırılacak. Eğer ilk defa yapıyorsanız, biraz zaman alabilir.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Veritabanınıza bakıldığında sürümünüz güncel görünüyor. Dosya sınaması ile tüm dosyalarınızın gerçekten de güncel olup olmadığını doğrulayabilirsiniz.',
	'CHECK_UPDATE_DATABASE'			=> 'Güncelleme işlemine devam et',
	'COLLECTED_INFORMATION'			=> 'Dosya bilgileri',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Aşağıdaki liste size güncellenmesi gereken dosyaların bir dökümünü sunmaktadır. Lütfen, liste halinde verilmiş bu bilgilerin yanında bulunan açıklamaları inceleyerek, ilgili işlemin ne hakkında olduğunu ve ne işe yaradığını tespit edin. Güncelleme işlemini sorunsuz gerçekleştirmek için ne yapmak istediğinize karar verin.',
	'COLLECTING_FILE_DIFFS'			=> 'Dosya farklılıklarını belirle', //Collecting file differences
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Tüm dosyalar phpBB’nin son sürümüne güncellendi. Şimdi <a href="../ucp.php?mode=login">panonuza oturum açmalı</a> ve her şeyin normal olduğundan emin olmalısınız. Kurulum dizini olan install dizinini silmeyi unutmayınız',
	'CONTINUE_UPDATE_NOW'			=> 'Güncelleme işlemine şimdi devam et',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Güncellemeye şimdi devam et',					// Shown after file upload to indicate the update process is not yet finished
	
	'CURRENT_FILE'					=> 'Çakışma başlangıcı - Güncelleme öncesi orijinal dosya kodları',
	'CURRENT_VERSION'				=> 'Şimdiki sürüm',

	'DATABASE_TYPE'					=> 'Veritabanı türü',
	'DATABASE_UPDATE_INFO_OLD'		=> 'Kurulum dizinindeki veritabanı güncellemesi zaman aşımına uğramış. Lütfen güncelleme sürümünün doğru olduğundan emin olun.',
	'DELETE_USER_REMOVE'			=> 'Kullanıcı ve iletilerini sil', // Delete user and remove posts
	'DELETE_USER_RETAIN'			=> 'Kullanıcıyı sil, iletilerini muhafaza et', //Delete user but keep posts
	'DESTINATION'					=> 'Hedef dosya',
	'DIFF_INLINE'					=> 'Satır içi',
	'DIFF_RAW'						=> 'Ham karşılaştırmayı birleştir',
	'DIFF_SEP_EXPLAIN'				=> 'Güncellenmiş/yeni dosyaların kullandığı kod bloğu',
	'DIFF_SIDE_BY_SIDE'				=> 'Yan yana',
	'DIFF_UNIFIED'					=> 'Karşılaştırmayı birleştir',
	'DO_NOT_UPDATE'					=> 'Bu dosyayı güncelleyemediniz',
	'DONE'							=> 'Tamam',
	'DOWNLOAD'						=> 'İndir',
	'DOWNLOAD_AS'					=> 'Farklı indir',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'	=> 'Değiştirilen arşiv dosyalarını indir (önerilir)', // Download modified files archive (önerilir)
	'DOWNLOAD_CONFLICTS'			=> 'Bu dosya için uyuşmazlıkları indirin',
	'DOWNLOAD_CONFLICTS_EXPLAIN'	=> 'Uyuşmazlıkları fark etmek için &lt;&lt;&lt; içinde arama yapın',
	'DOWNLOAD_UPDATE_METHOD'		=> 'Değiştirilen arşiv dosyalarını indir', //Download modified files archive
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'=> 'Kurulumdan sonra arşivi çıkarmalısınız. İçerisinde phpBB ana dizinine yüklemeniz gereken düzenlenmiş dosyalar bulunuyor. Lütfen bu dosyaları normalde bulundukları yerlere koyun. Tüm dosyaları gönderdikten sonra, diğer butonu kullanarak dosyaları sınayın.',

	'ERROR'			=> 'Hata',
	'EDIT_USERNAME'	=> 'Kullanıcı adını değiştir',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Dosya zaten güncel.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Dosya, karşılaştırma yapmaya izinli değil.',
	'FILE_USED'						=> 'Bilgi kullanım yeri',	// Single file
	'FILES_CONFLICT'				=> 'Uyuşmayan dosyalar',
	'FILES_CONFLICT_EXPLAIN' 		=> 'Bu dosyalar modifiye edilmiştir ve eski sürümdeki orijinal dosyaları temsil etmemektedir. phpBB, sözkonusu dosyların birleştirmeye çalışılır ise ciddi şekilde uyuşmazlık yaratabileceğini tespit etti. Lütfen bu uyuşmazsızlık olası nedenlerini el yordamı ile kendiniz tespit etmeye çalışınız veya tercih edilen birleştirme metodunu kullanarak güncelleme işlemine devam ediniz. Çakışmaları tespit etmeyi başardı iseniz, modifikasyon işleminin ardından yeniden el yordamı ile kontrol ediniz. Aynı zamanda her dosya için istediğiniz bir birleştirme metodu da kullabileceğinizi hatırlatmak isteriz.',
	'FILES_MODIFIED'				=> 'Düzenlenen dosyalar',
	'FILES_MODIFIED_EXPLAIN'		=> 'Takip eden dosyalar düzenlenmiş, eski sürüm orijinal dosyalarla uyuşmuyor. Güncellenen dosyalar yeni dosya ve eklentilerinizle birleştirilecek.',
	'FILES_NEW'						=> 'Yeni dosyalar',
	'FILES_NEW_EXPLAIN'				=> 'Takip eden dosyalar kurulumunuzda bulunmuyor. Bu dosyalar kurulumunuza dahil edilecek.',
	'FILES_NEW_CONFLICT'			=> 'Yeni uyuşmayan dosyalar',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Takip eden dosyalar, en son sürümün içinde yenidir. Fakat aynı konumda aynı isimli dosyalar zaten var. Bu dosyaların üzerlerine yenileri yazılacak.',
	'FILES_NOT_MODIFIED'			=> 'Düzenlenmeyen dosyalar',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Takip eden dosyalar değişmemiş ve güncelleyeceğiniz yeni phpBB dosyaları ile aynı olan dosyaları temsil etmektedir.',
	'FILES_UP_TO_DATE'				=> 'Zaten düzenlenmiş dosyalar',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Takip eden dosyalar zaten güncel ve güncellenmeye ihtiyaçları yok.',
	'FTP_SETTINGS'					=> 'FTP ayarları',
	'FTP_UPDATE_METHOD'				=> 'FTP yüklemesi',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Yüklenen sürümünüz ile uyuşmayan güncelleme dosyaları bulundu. Yüklenen sürümünüz %1$s ve güncelleme dosyası phpBB %2$s to %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Güncelleme dosyaları eksik.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Veritabanı gücellemesi başarılı oldu. Şimdi güncelleme işlemine devam etmelisiniz.',

	'KEEP_OLD_NAME'		=> 'Kullanıcı adını muhafaza et',
	
	'LATEST_VERSION'		=> 'Son sürüm',
	'LINE'					=> 'Satır',
	'LINE_ADDED'			=> 'Eklendi',
	'LINE_MODIFIED'			=> 'Değiştirildi',
	'LINE_REMOVED'			=> 'Silindi',
	'LINE_UNMODIFIED'		=> 'Değiştirilmedi',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Kurulumunuzu güncellemek için önce hesabınıza giriş yapmalısınız.',

	'MAPPING_FILE_STRUCTURE'	=> 'Yüklemeyi kolaylaştırmak için, phpBB kurulumun dosyalarına karşı gelen dosyalarının yerleri bunlar.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Değişiklikleri birleştir',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Birleştirme - Yeni dosyayı kullan',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Birleştirme - Kurulu dosyayı kullan',
	'MERGE_MOD_FILE_OPTION'		=> 'Değişiklikleri birleştir (Çakışan bloklar içinde düzenlenmiş kodları kullan)', // Loose ??
	'MERGE_NEW_FILE_OPTION'		=> 'Değişiklikleri birleştir (Çakışan dosyalar içinde yeni dosya kodlarını kullan)',
	'MERGE_SELECT_ERROR'		=> 'Değişen dosyaları birleştirme modu doğru değil.',
	'MERGING_FILES'				=> 'Farklılıkları birleştir',
	'MERGING_FILES_EXPLAIN'		=> 'Güncel olarak toplarlanan son dosyayı değiştirir.<br /><br />phpBB değiştirilen dosyalarda bütün çalışmaları tamamlayıncaya kadar lütfen bekleyiniz.', //'Currently collecting final file changes.<br /><br />Please wait until phpBB has completed all operations on changed files.',

	'NEW_FILE'						=> 'Çakışmaların sonu',
	'NEW_USERNAME'					=> 'Yeni kullanıcı adı',
	'NO_AUTH_UPDATE'				=> 'Güncellemek için yetki yok',
	'NO_ERRORS'						=> 'Hata yok',
	'NO_UPDATE_FILES'				=> 'İzlenen dosyalar güncellenmedi',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Takip eden dosyalar yeni veya değiştirilmiş fakat normalde bulunan dizin kurulumda bulunamıyor. Eğer bu language/ veya styles/ dışında başka dizinler da içeriyorsa o zaman dizin yapısını değiştirdiniz ve güncelleme yarım kaldı.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Geçerli güncelleme dizini bulunamadı, lütfen uygun dosyaları yüklediğinize emin olun.<br /><br />Kurulumunuz güncel görünmüyor. phpBB %1$s sürümünüz için güncelleme mevcuttur, %2$s sürümünden %3$s sürümüne güncelleme yapmak için gereken doğru paket için lütfen <a href="http://www.phpbbturkiye.net/dosyalar/" onclick="this.target=\'_blank\'">http://www.phpbbturkiye.net/dosyalar/</a> adresini ziyaret edin.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Sürümünüz günceldir. Güncelleme aracını kullanmanıza gerek yok. Eğer dosyalarınızın bütünlük kontrolünü yapmak istiyorsanız güncelleme için doğru dosyaları yükleyin.',
	'NO_UPDATE_INFO'				=> 'Güncelleme dosya bilgileri bulunamadı.',
	'NO_UPDATES_REQUIRED'			=> 'Gerekli güncelleme yok',
	'NO_VISIBLE_CHANGES'			=> 'Görünen değişiklik yok',
	'NOTICE'						=> 'Uyarı',
	'NUM_CONFLICTS'					=> 'Uyuşmazlıkların sayısı',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Henüz %1$d dosyadan %2$d tanesi kontrol edildi.<br />Lütfen tüm dosyalar kontrol edilene kadar bekleyiniz.', // Currently differences of %1$d of %2$d files have been checked.
	
	'OLD_UPDATE_FILES'		=> 'Güncelleme dosyalarının zamanı geçmiş. Güncelleme dosyaları phpBB %1$s’den phpBB %2$s’e güncelleme yapmaktadır ancak son phpBB sürümü %3$s’dir.',

	'PACKAGE_UPDATES_TO'				=> 'Geçerli paketin güncelleneceği sürüm',
	'PERFORM_DATABASE_UPDATE'			=> 'Veritabanını güncelle',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Aşağıda veritabanı güncelleme sayfasına giden bir buton bulacaksınız. Verilerin güncellemesi zaman alabilir, lütfen çalışmaları durdurmayın. Veritabanı güncellendikten sonra güncelleme işleminin devamı için talimatlar alacaksınız.',
	'PREVIOUS_VERSION'					=> 'Önceki sürüm',
	'PROGRESS'							=> 'İlerleme',

	'RESULT'					=> 'Sonuç',
	'RUN_DATABASE_SCRIPT'		=> 'Veritabanımı şimdi güncelle',

	'SELECT_DIFF_MODE'			=> 'Farklılık modu seçin',
	'SELECT_DOWNLOAD_FORMAT'	=> 'İndirilecek dosyanın arşiv formatını seçiniz',
	'SELECT_FTP_SETTINGS'		=> 'FTP ayarlarını seçiniz',
	'SHOW_DIFF_CONFLICT'		=> 'Uyuşmazlıkları göster',
	'SHOW_DIFF_FINAL'			=> 'Dosya sonucunu göster',
	'SHOW_DIFF_MODIFIED'		=> 'Birleştirilen farkları göster',
	'SHOW_DIFF_NEW'				=> 'Dosya içeriğini göster',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Farklılıkları göster', // Show differences
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Farklılıkları göster', // Show differences
	'SOME_QUERIES_FAILED'		=> 'Bazı sorgular hatalı, raporlar ve hatalar aşağıda listelenmiştir.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN' 		=> 'Bu hata iletisini alıyor olabilirsiniz ama büyük olasılıkla güncelleme işleminize devam etmek için bir sorun teşkil etmediğini de belirtmek isteriz. Güncelleme işlemine kaldığınız yerden devam edebilmeniz için destek forumlarımızı ziyaret etmenizi öneririz. <a href="../docs/README.html">README</a> dosyasına da bakmanızı öneririz.',
	'STAGE_FILE_CHECK'			=> 'Dosya kontrolü',
	'STAGE_UPDATE_DB'			=> 'Veritabanı güncellemesi',
	'STAGE_UPDATE_FILES'		=> 'Dosya güncellemesi',
	'STAGE_VERSION_CHECK'		=> 'Sürüm denetimi',
	'STATUS_CONFLICT'			=> 'Uyuşmayan dosyaları değiştir', // Modified file producing conflicts
	'STATUS_MODIFIED'			=> 'Değişmiş dosya',
	'STATUS_NEW'				=> 'Yeni dosya',
	'STATUS_NEW_CONFLICT'		=> 'Yeni dosya uyuşmazlığı',
	'STATUS_NOT_MODIFIED'		=> 'Değişmeyen dosya',
	'STATUS_UP_TO_DATE'			=> 'Zaten güncel olan dosya', //orjinali= Already updated file / Dosya zaten güncel  

	'TOGGLE_DISPLAY'			=> 'Dosya listesini göster/gizle',
	'TRY_DOWNLOAD_METHOD'		=> 'Değiştirilmiş dosyaları indirme yöntemini denemek isteyebilirsiniz.<br />Bu yöntem her zaman çalışır ve aynı zamanda tavsiye edilen güncelleme yoludur.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Şimdi bu metodu dene',
	
	'UPDATE_COMPLETED'				=> 'Güncelleme tamamlandı',
	'UPDATE_DATABASE'				=> 'Veritabanını güncelle',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Sonraki adımda veritabanı güncellenecektir.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Veritabanı şeması güncelleniyor',
	'UPDATE_FILES'					=> 'Dosyaları güncelle',
	'UPDATE_FILES_NOTICE'			=> 'Lütfen sunucudaki dosyalarınızı da güncellediğinize emin olun, bu dosya sadece veritabanınızı günceller.',
	'UPDATE_INSTALLATION'			=> 'phpBB güncelleme', // Update phpBB installation
	'UPDATE_INSTALLATION_EXPLAIN' 	=> 'Bu seçenek ile mevcut phpBB yazılımınızı, en son sürüme yükseltmeniz mümkündür.<br />Bu süreç esnasında tüm dosyalarınızın doğruluk ve bütünlüğü kontrol edilecektir. Güncelleme işleminden önce tüm farklılıkları gözden geçirebilmeniz mümkündür.<br /><br />Dosya güncellemesi iki şekilde yapılabilir!</p>

	<h2>El Yordamı ile Güncelleme</h2>
	<p>Bu güncelleme şekli ile daha önce sizin dosya üzerinde yaptığınız değişikliklerin kaybolmamasını sağlarsınız. İlgili dosya paketini indirdiğinizde el yordamı ile, sunucunuzdaki phpBB kök dizinine, dosyaların doğru pozisyonlarını gözeterek aktarmalısınız. İşlem tamamlandığında, dosya kontrol aşamasını dosyaların, yerlerini alıp almadığını anlayabilmek için yineleyebilirsiniz. Eğer herşey doğru yapılandırıldı ise veritabanı güncelleyicisine yönlendirileceksiniz.</p>

	<h2>FTP ile Otomatik Güncelleme</h2>
	<p>Bu metod az önce anlatılan ilk yönteme benzemektedir. İlkinden farkı, değişen dosyaları el yordamı ile kendinizin aktarmasına gerek olmayışıdır. Bu işlem sistem tarafından otomatik olarak sizin adınıza yapılmaktadır. Bu metodu kullanabilmek için FTP erişim bilgilerinizi istendiğinde girebilmeniz gerekmektedir. Süreç tamamlandığında, dosya kontrol aşamasına yönlendirileceksiniz, bu sayede yapılan güncellemelerin doğru olup olmadığına kanaat getirebilirsiniz. Eğer herşey doğru yapılandırıldı ise veritabanı güncelleyicisine yönlendirileceksiniz.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Yayınlanma duyurusu</h1>

		<p>Lütfen, güncelleme işlemine devam etmeden önce faydalı bilgiler içeren <a href="%1$s" title="%1$s"><strong>son sürüm duyurusunu</strong></a> okuyun. Aynı zamanda tam indirme bağlantılarına ve nelerin değiştiğine de bu bağlantıyla ulaşılabilir.</p>

		<br />

		<h1>Kurulumunuzu Otomatik Kurulum Paketi ile nasıl güncelleyeceksiniz</h1>

		<p>Kurulumunuzu güncellemek için tavsiye edilen yol sadece geçerli otomatik güncelleme paketi için burada listelenir. INSTALL.html belgesinde listelenen yöntemleri de kullanabilirsiniz. phpBB3 yazılımını otomatik güncellemek için izleyeceğiniz adımlar:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li><a href="http://www.phpbbturkiye.net/dosyalar/" onclick="this.target=\'_blank\'">phpBB Türkiye dosya sayfası</a> ’na gidin ve "Otomatik güncelleme paketi" ’ni indirin.<br /><br /></li>
			<li>Arşiv dosyasını açın.<br /><br /></li>
			<li>Sıkıştırılmamış tüm kurulum (install) dizinini phpBB kök dizininize yükleyin/gönderin (config.php dosyasının olduğu dizine).<br /><br /></li>
		</ul>

		<p>Kurulum dizinini bir defa gönderdiğinizde panonuz normal kullanıcılar için çevrimdışı olacaktır.<br /><br />
		<strong><a href="%2$s" title="%2$s">Şimdi güncelleme işlemlerine başlamak için tarayıcınızın işaret ettiği kurulum (install) dizinine gidin</a>.</strong><br />
		<br />
		Güncelleme işleminde bu sayfa size baştan sona rehberlik edecektir. Güncelleme tamamlandığında haberdar edileceksiniz.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Tamamlanmamış güncelleme algılandı</h1>

		<p>phpBB yazılımı tamamlanmamış bir otomatik güncelleme algıladı. Otomatik güncelleme aracının her aşamasından emin olun. Aşağıda bağlantıyı tekrar bulun veya direkt olarak kurulum dizinize gidin.</p>
		',
	'UPDATE_METHOD'					=> 'Güncelleme yöntemi',
	'UPDATE_METHOD_EXPLAIN' 		=> 'Şimdi istediğiniz güncelleme metodunu seçebilirsiniz. FTP aktarımı işlemi size erişim bilgilerinizi soran bir formla gelecektir. Bu metod sayesinde dosyalarınız otomatik olarak yeni konuma taşınmış olacak, ayrıca eski dosyların yedekleri .bak olarak kaydedilecektir. Modifiye edilmiş dosyaları indirmeyi seçerseneniz, ilgili dosyaları onların eski konumlarına, daha sonra el yordamı önce dosyaları açarak aktarabilirsiniz.',
	'UPDATE_REQUIRES_FILE'			=> 'Güncelleme şu dosyalara gereksinim duymaktadır: %s',
	'UPDATE_SUCCESS'				=> 'Güncelleme başarılı',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Tüm dosyalar başlarıyla güncellendi. Sonraki aşama olarak güncellenen dosyaların doğrulukları tekrar kontrpol edilecek.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Sürüm güncelleniyor ve tablolar optimize ediliyor',
	'UPDATING_DATA'					=> 'Veri güncelleniyor',
	'UPDATING_TO_LATEST_STABLE'		=> 'Veritabanı en son stabil sürüme güncelleniyor',
	'UPDATED_VERSION'				=> 'Güncellenen sürüm',
	'UPLOAD_METHOD'					=> 'Yükleme metodu',

	'UPDATE_DB_SUCCESS'				=> 'Veritabanı güncellemesi başarılı.',
	'USER_ACTIVE'					=> 'Aktif kullanıcı',
	'USER_INACTIVE'					=> 'Pasif kullanıcı',

	'VERSION_CHECK'				=> 'Sürüm denetimi',
	'VERSION_CHECK_EXPLAIN'		=> 'Şu an kullandığınız ve güncel phpBB sürümünü kontrol edebilirsiniz.',
	'VERSION_NOT_UP_TO_DATE'	=> 'phpBB sürümünüz güncel değildir. Lütfen güncelleme işlemlerine devam ediniz.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'phpBB sürümünüz güncel değildir.<br />Aşağıda güncellemeyi nasıl yapacağınız gibi talimatlar da içeren son sürüm duyurusuna bağlantı bulacaksınız.',
	'VERSION_UP_TO_DATE'		=> 'phpBB sürümünüz günceldir, phpBB sürümünüz için herhangi bir güncelleme bulunmamaktadır. İsterseniz dosya geçerliliği kontrolü yapabilirsiniz .',
	'VERSION_UP_TO_DATE_ACP'	=> 'phpBB sürümünüz günceldir, phpBB sürümünüz için herhangi bir güncelleme bulunmamakta ve sürümünüz için herhangi bir güncellemeye ihtiyacınız yoktur.',
	'VIEWING_FILE_CONTENTS'		=> 'Dosya içeriği görüntüleniyor',
	'VIEWING_FILE_DIFF'			=> 'Dosya farklılıkları görüntüleniyor',

	'WRONG_INFO_FILE_FORMAT'	=> 'Yanlış bilgi dosyası formatı',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Teşekkürler, Yönetim',
	'CONFIG_SITE_DESC'				=> 'Panonuz için kısa bir açıklama',
	'CONFIG_SITENAME'				=> 'siteismi.com',

	'DEFAULT_INSTALL_POST'				=> 'Bu metin phpBB3 kurulumuyla gelen örnek bir iletidir. Her şey çalışıyor görünmekte. İsterseniz bu iletiyi silebilir ve işinize pano ayarları ile devam edebilirsiniz. Kurulum sürecinde ilk kategoriniz ve ilk forumunuza önceden belirlenmiş kullanıcı grupları olan, yöneticiler, genel yetkililer, misafirler, kayıtlı kullanıcılar ve kayıtlı COPPA kullanıcıları için uygun izin ayarları yapıldı. İlk kategori ve forumunuzu silmeyi seçerseniz, bu kullanıcı gruplarının tümüne oluşturduğunuz her yeni kategori ve forumda izinler atamayı unutmayın. İlk kategori ve ilk forumunuzun adlarının değiştirilmesi ve yeni oluşturulan kategori ve forumlara ilk izinlerin kopyalanması tavsiye edilir. İyi eğlenceler!',
	
	'EXT_GROUP_ARCHIVES'			=> 'Arşivler',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokümanlar',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'İndirilebilir Dosyalar',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash Dosyaları',
	'EXT_GROUP_IMAGES'				=> 'Resimler',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Düz Metin',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'İlk kategoriniz',
	'FORUMS_TEST_FORUM_DESC'		=> 'İlk forumunuz için açıklama.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'İlk forumunuz',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Site Yöneticisi',
	'REPORT_WAREZ'					=> 'İleti yasal olmayan bir sayfaya veya yazılıma yönlendiriyor.',
	'REPORT_SPAM'					=> 'İleti bir site veya program reklamından başka birşey içermiyor.',
	'REPORT_OFF_TOPIC'				=> 'İleti konu dışı.',
	'REPORT_OTHER'					=> 'Diğer. Lütfen sebebinizi açıklama kısmına yazınız.',

	'SMILIES_ARROW'					=> 'Ok',
	'SMILIES_CONFUSED'				=> 'Kafası karışık',
	'SMILIES_COOL'					=> 'Rahat',
	'SMILIES_CRYING'				=> 'Ağlıyor veya çok üzgün',
	'SMILIES_EMARRASSED'			=> 'Utanmış',
	'SMILIES_EVIL'					=> 'Şeytan veya çok kızgın',
	'SMILIES_EXCLAMATION'			=> 'Ünlem',
	'SMILIES_GEEK'					=> 'Teknoloji düşkünü',
	'SMILIES_IDEA'					=> 'Fikir',
	'SMILIES_LAUGHING'				=> 'Gülüyor',
	'SMILIES_MAD'					=> 'Kızgın',
	'SMILIES_MR_GREEN'				=> 'Bay yeşil',
	'SMILIES_NEUTRAL'				=> 'Doğal',
	'SMILIES_QUESTION'				=> 'Soru',
	'SMILIES_RAZZ'					=> 'Dil çıkarıyor',
	'SMILIES_ROLLING_EYES'			=> 'Gözü dönmüş',
	'SMILIES_SAD'					=> 'Üzgün',
	'SMILIES_SHOCKED'				=> 'Şok olmuş',
	'SMILIES_SMILE'					=> 'Sırıtıyor',
	'SMILIES_SURPRISED'				=> 'Şaşırmış',
	'SMILIES_TWISTED_EVIL'			=> 'Sapıtmış şeytan',
	'SMILIES_UBER_GEEK'				=> 'Teknoloji hastası', // kod yazmayı sohbet etmeye tercih eden kimse
	'SMILIES_VERY_HAPPY'			=> 'Çok mutlu',
	'SMILIES_WINK'					=> 'Göz kırpıyor',
	
	'TOPICS_TOPIC_TITLE'			=> 'phpBB3’e Hoşgeldiniz',
));

?>