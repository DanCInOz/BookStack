<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ayarlar',
    'settings_save' => 'Ayarları Kaydet',
    'settings_save_success' => 'Ayarlar Kaydedildi',

    // App Settings
    'app_customization' => 'Özelleştirme',
    'app_features_security' => 'Özellikler & Güvenlik',
    'app_name' => 'Uygulama Adı',
    'app_name_desc' => 'Bu isim başlıkta ve sistem tarafında gönderilen tüm mesajlarda gösterilecektir.',
    'app_name_header' => 'İsmi başlıkta göster',
    'app_public_access' => 'Açık Erişim',
    'app_public_access_desc' => 'Bu özelliği aktif etmek giriş yapmamış misafir kullanıcıların sizin BookStack uygulamanıza erişmesini sağlar',
    'app_public_access_desc_guest' => 'Kayıtlı olmayan kullanıcılar için erişim yetkisi "Guest" kullanıcısı üzerinden düzenlenebilir.',
    'app_public_access_toggle' => 'Açık erişime izin ver',
    'app_public_viewing' => 'Herkese açık görüntülenmeye izin verilsin mi?',
    'app_secure_images' => 'Daha Yüksek Güvenlikli Görsel Yüklemeleri',
    'app_secure_images_toggle' => 'Daha yüksek güveblikli görsel yüklemelerine izin ver',
    'app_secure_images_desc' => 'Performans sebepleri nedeniyle bütün görseller halka açık. Bu opsiyon rastgele ve tahmin edilmesi zor dizileri görsel linklerinin önüne ekler. Dizin indexlerinin kapalı olduğundan emin olun.',
    'app_editor' => 'Sayfa Editörü',
    'app_editor_desc' => 'Sayfa düzenlemesi yapılırken hangi editörün kullanılacağını seçin.',
    'app_custom_html' => 'Özel HTML Head İçeriği',
    'app_custom_html_desc' => 'Buraya eklenecek olan içerik <head> taginin en sonuna eklenecektir. Bu stilleri override ederken veya analytics eklerken faydalı bir kullanım şeklidir.',
    'app_custom_html_disabled_notice' => 'Yapılan hatalı değişikliklerin geriye alınabilmesi için bu sayfada özel HTML head içeriği kapalı.',
    'app_logo' => 'Uygulama Logosu',
    'app_logo_desc' => 'Bu görsel 43px yüksekliğinde olmalı. <br>Büyük görseller ölçeklenecektir.',
    'app_primary_color' => 'Uygulamanın Birincil Rengi',
    'app_primary_color_desc' => 'Bu bir hex değeri olmalıdır. <br>Varsayılan rengi seçmek için boş bırakın.',
    'app_homepage' => 'Uygulama Anasayfası',
    'app_homepage_desc' => 'Anasayfada görünmesi için bir view seçin. Sayfa izinleri seçili sayfalar için yok sayılacaktır.',
    'app_homepage_select' => 'Sayfa seçiniz',
    'app_disable_comments' => 'Yorumları Engelle',
    'app_disable_comments_toggle' => 'Yorumları engelle',
    'app_disable_comments_desc' => 'Yorumları uygulamadaki bütün sayfalar için engelle. <br> Mevcut yorumlar gösterilmeyecektir.',

    // Color settings
    'content_colors' => 'İçerik Renkleri',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Raf Rengi',
    'book_color' => 'Kitap Rengi',
    'chapter_color' => 'Kısım Rengi',
    'page_color' => 'Sayfa Rengi',
    'page_draft_color' => 'Sayfa Taslağı Rengi',

    // Registration Settings
    'reg_settings' => 'Kayıt',
    'reg_enable' => 'Kaydolmaya İzin Ver',
    'reg_enable_toggle' => 'Kaydolmaya izin ver',
    'reg_enable_desc' => 'Kayıt olmaya izin verdiğinizde kullanıcılar kendilerini uygulamaya kaydedebilecekler. Kayıt olduktan sonra kendilerine varsayılan kullanıcı rolü atanacaktır.',
    'reg_default_role' => 'Kayıt olduktan sonra varsayılan kullanıcı rolü',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Email Doğrulama',
    'reg_email_confirmation_toggle' => 'E-mail onayı gerektir',
    'reg_confirm_email_desc' => 'Eğer domain kısıtlaması kullanılıyorsa o zaman email doğrulaması gereklidir ve bu seçenek yok sayılacaktır.',
    'reg_confirm_restrict_domain' => 'Domain Kısıtlaması',
    'reg_confirm_restrict_domain_desc' => 'Kısıtlamak istediğiniz email domainlerini vigül ile ayırarak yazınız. Kullanıcılara uygulamaya erişmeden önce adreslerini doğrulamak için bir mail gönderilecektir. <br> Kullanıcılar başarıyla kaydolduktan sonra email adreslerini değiştiremeyeceklerdir.',
    'reg_confirm_restrict_domain_placeholder' => 'Hiçbir kısıtlama tanımlanmamış',

    // Maintenance settings
    'maint' => 'Bakım',
    'maint_image_cleanup' => 'Görsel Temizliği',
    'maint_image_cleanup_desc' => "Sayfaları ve revizyon içeriklerini tarayarak hangi gösel ve çizimlerin kullanımda olduğunu ve hangilerinin gereksiz olduğunu tespit eder. Bunu başlatmadan veritabanı ve görsellerin tam bir yedeğinin alındığından emin olun.",
    'maint_image_cleanup_ignore_revisions' => 'Revizyonlardaki görselleri yoksay',
    'maint_image_cleanup_run' => 'Temizliği Başlat',
    'maint_image_cleanup_warning' => ':count potansiyel kullanılmayan görsel bulundu. Bu görselleri silmek istediğinizden emin misiniz?',
    'maint_image_cleanup_success' => ':count potanisyel kullanılmayan görsel bulundu ve silindi!',
    'maint_image_cleanup_nothing_found' => 'Kullanılmayan görsel bulunamadı ve birşey silinmedi!',
    'maint_send_test_email' => 'Test E-Postası Gönder',
    'maint_send_test_email_desc' => 'Bu profilinizde girdiğiniz e-posta adresine bir test e-postası gönderir.',
    'maint_send_test_email_run' => 'Test E-Postasını gönder',
    'maint_send_test_email_success' => 'E-Posta :address adresine gönderildi',
    'maint_send_test_email_mail_subject' => 'Test e-postası',
    'maint_send_test_email_mail_greeting' => 'E-Posta gönderimi başarılı!',
    'maint_send_test_email_mail_text' => 'Tebrikler! Eğer bu e-posta bildirimini alıyorsanız, e-posta ayarlarınız doğru bir şekilde ayarlanmış demektir.',

    // Role Settings
    'roles' => 'Roller',
    'role_user_roles' => 'Kullanıcı Rolleri',
    'role_create' => 'Yeni Rol Oluştur',
    'role_create_success' => 'Rol Başarıyla Oluşturuldu',
    'role_delete' => 'Rolü Sil',
    'role_delete_confirm' => 'Bu işlem \':roleName\' rolünü silecektir.',
    'role_delete_users_assigned' => 'Bu role atanmış :userCount adet kullanıcı var. Eğer bu kullanıcıların rollerini değiştirmek istiyorsanız aşağıdan yeni bir rol seçin.',
    'role_delete_no_migration' => "Kullanıcıları taşıma",
    'role_delete_sure' => 'Bu rolü silmek istediğinizden emin misiniz?',
    'role_delete_success' => 'Rol başarıyla silindi',
    'role_edit' => 'Rolü Düzenle',
    'role_details' => 'Rol Detayları',
    'role_name' => 'Rol Adı',
    'role_desc' => 'Rolün Kısa Tanımı',
    'role_external_auth_id' => 'Harici Authentication ID\'leri',
    'role_system' => 'Sistem Yetkileri',
    'role_manage_users' => 'Kullanıcıları yönet',
    'role_manage_roles' => 'Rolleri ve rol izinlerini yönet',
    'role_manage_entity_permissions' => 'Bütün kitap, bölüm ve sayfa izinlerini yönet',
    'role_manage_own_entity_permissions' => 'Sahip olunan kitap, bölüm ve sayfaların izinlerini yönet',
    'role_manage_page_templates' => 'Sayfa şablonlarını yönet',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Uygulama ayarlarını yönet',
    'role_asset' => 'Asset Yetkileri',
    'role_asset_desc' => 'Bu izinleri assetlere sistem içinden varsayılan erişimi kontrol eder. Kitaplar, bölümler ve sayfaların izinleri bu izinleri override eder.',
    'role_asset_admins' => 'Yöneticilere otomatik olarak bütün içeriğe erişim yetkisi verilir fakat bu opsiyonlar UI özelliklerini gösterir veya gizler.',
    'role_all' => 'Hepsi',
    'role_own' => 'Sahip Olunan',
    'role_controlled_by_asset' => 'Yükledikleri asset tarafından kontrol ediliyor',
    'role_save' => 'Rolü Kaydet',
    'role_update_success' => 'Rol başarıyla güncellendi',
    'role_users' => 'Bu roldeki kullanıcılar',
    'role_users_none' => 'Bu role henüz bir kullanıcı atanmadı',

    // Users
    'users' => 'Kullanıcılar',
    'user_profile' => 'Kullanıcı Profili',
    'users_add_new' => 'Yeni Kullanıcı Ekle',
    'users_search' => 'Kullanıcıları Ara',
    'users_details' => 'Kullanıcı Detayları',
    'users_details_desc' => 'Bu kullanıcı için gösterilecek bir isim ve mail adresi belirleyin. Bu e-mail adresi kullanıcı tarafından giriş yaparken kullanılacak.',
    'users_details_desc_no_email' => 'Diğer kullanıcılar tarafından tanınabilmesi için bir isim belirleyin.',
    'users_role' => 'Kullanıcı Rolleri',
    'users_role_desc' => 'Bu kullanıcının hangi rollere atanabileceğini belirleyin. Eğer bir kullanıcıya birden fazla rol atanırsa, kullanıcı bütün rollerin özelliklerini kullanabilir.',
    'users_password' => 'Kullanıcı Parolası',
    'users_password_desc' => 'Kullanıcının giriş yaparken kullanacağı bir parola belirleyin. Parola en az 5 karakter olmalıdır.',
    'users_send_invite_text' => 'Bu kullanıcıya parolasını sıfırlayabilmesi için bir e-posta gönder veya şifresini sen belirle.',
    'users_send_invite_option' => 'Kullanıcıya davet e-postası gönder',
    'users_external_auth_id' => 'Harici Authentication ID\'si',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'Sadece parolanızı değiştirmek istiyorsanız aşağıyı doldurunuz.',
    'users_system_public' => 'Bu kullanıcı sizin uygulamanızı ziyaret eden bütün misafir kullanıcıları temsil eder. Giriş yapmak için kullanılamaz, otomatik olarak atanır.',
    'users_delete' => 'Kullanıcı Sil',
    'users_delete_named' => ':userName kullanıcısını sil ',
    'users_delete_warning' => 'Bu işlem \':userName\' kullanıcısını sistemden tamamen silecektir.',
    'users_delete_confirm' => 'Bu kullanıcıyı tamamen silmek istediğinize emin misiniz?',
    'users_delete_success' => 'Kullanıcılar başarıyla silindi.',
    'users_edit' => 'Kullanıcıyı Güncelle',
    'users_edit_profile' => 'Profili Düzenle',
    'users_edit_success' => 'Kullanıcı başarıyla güncellendi',
    'users_avatar' => 'Kullanıcı Avatarı',
    'users_avatar_desc' => 'Bu kullanıcıyı temsil eden bir görsel seçin. Yaklaşık 256px kare olmalıdır.',
    'users_preferred_language' => 'Tercih Edilen Dil',
    'users_preferred_language_desc' => 'Bu seçenek kullanıcı arayüzünün dilini değiştirecektir. Herhangi bir kullanıcı içeriğini etkilemeyecektir.',
    'users_social_accounts' => 'Sosyal Hesaplar',
    'users_social_accounts_info' => 'Burada diğer hesaplarınızı ekleyerek daha hızlı ve kolay giriş sağlayabilirsiniz. Bir hesabın bağlantısını kesmek daha önce edilnilen erişiminizi kaldırmaz. Profil ayarlarınızdan bağlı sosyal hesabınızın erişimini kaldırınız.',
    'users_social_connect' => 'Hesap Bağla',
    'users_social_disconnect' => 'Hesabın Bağlantısını Kes',
    'users_social_connected' => ':socialAccount hesabı profilinize başarıyla bağlandı.',
    'users_social_disconnected' => ':socialAccount hesabınızın profilinizle ilişiği başarıyla kesildi.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID"" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token Created :timeAgo',
    'user_api_token_updated' => 'Token Updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
