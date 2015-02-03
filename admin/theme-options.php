<?php 


$theme = get_current_theme();
$settings = 'theme_mods_'.get_current_theme(); 

include (TEMPLATEPATH . "/admin/vars.php");


//	Подключаем дополнительные css в админ-панель
add_action( 'admin_enqueue_scripts', 'theme_options_css' );

function theme_options_css() { 	
	wp_enqueue_style( 'admin_css', get_stylesheet_directory_uri() . '/admin/admin.css' );
 	wp_enqueue_style( 'kube_css', get_stylesheet_directory_uri() . '/css/kube.min.css' );
 	wp_enqueue_script( 'js-jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js');
	wp_enqueue_script( 'js-kube', get_template_directory_uri() . '/js/kube.min.js');
}


function theme_settings_admin() { 

	global $settings, $defaults;
	if(get_theme_mod('reset')) {
		echo '<div id="message"><p>'.__('Настройки темы').' <strong>'.__('Вернуться к настройкам по умолчанию').'</strong></p></div>';
		update_option($settings, $defaults);
	} elseif($_REQUEST['updated'] == 'true') {
		echo '<div id="message"><p>'.__('Настройки темы').' <strong>'.__('Сохранить настройки').'</strong></p></div>';
	}
	screen_icon('options-general');
?>
<p><hr></p>
<?php echo get_current_theme();  ?>
<p><hr></p>

<form id="options" method="post" action="options.php">

<?php settings_fields($settings); ?>


        <h2>Блог</h2>
		 <ul class="blocks-6">
			<li><?php _e("Название блока (<b>h2</b>):"); ?></li>
			<li><input type="text" name="<?php echo $settings; ?>[blog]" value="<?php echo get_theme_mod('blog'); ?>"  size="28" /></li>
			<li><?php _e("Количество новостей в блоке:"); ?></li>
			<li><input type="text" name="<?php echo $settings; ?>[blog_number_posts]" value="<?php echo get_theme_mod('blog_number_posts'); ?>" size="28" /></li>
		</ul>

	<p class="submit">
		<input type="submit" class="btn btn-info" value="<?php _e('Сохранить настройки') ?>" />
        <input type="submit" class="btn btn-block btn-default" name="<?php echo $settings; ?>[reset]" value="<?php _e('Сбросить настройки'); ?>" />
	</p>

</form>

<?php
}
?>