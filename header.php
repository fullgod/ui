<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title><?php bloginfo('name');?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri() . "/css/kube.min.css"; ?>" type="text/css"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_head();
                remove_filter ('the_content',  'wpautop');
                remove_filter ('comment_text', 'wpautop');
                remove_filter ('the_content', 'wptexturize');
                remove_filter ('the_excerpt', 'wptexturize');
                remove_filter ('comment_text', 'wptexturize');
?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri() . "/js/kube.min.js"; ?>"></script>
</head>
       
<body <?php body_class(); ?>>
<div id="container">
    <div class="header">
	<div class="units-row">
		<div class="unit-30">123
			<a href="<?php echo home_url(); ?>">
                <div class="logo left" style="background-image: url(<?php echo $logo;?>)"></div>
            </a>
		</div>
		<div class="unit-70">123</div>
	</div>
	</div>
</div>
