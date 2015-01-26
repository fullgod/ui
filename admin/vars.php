<?php 


// Указываем настройки по умолчанию для базы данных

$defaults = array(

	//Блог
	'blog' => '',
	'blog_number_posts' => '',
	
	
	'end' => ''
	
	
 
);





// Если страница еще не существует.
add_option($settings, $defaults, '', 'yes');

//	Эта функция регистрирует настройки в БД
add_action('admin_init', 'register_theme_settings');


function register_theme_settings() {
	global $settings;
	register_setting($settings, $settings);
}
// Эта функция добавляет в админке Wordpress страницу настроек в меню "Дизайн"
add_action('admin_menu', 'add_theme_options_menu');

function add_theme_options_menu() {
	add_submenu_page('themes.php', __('UI Options'), __('<b>UI настройки</b>'), 8, 'theme-options', 'theme_settings_admin');
}
?>