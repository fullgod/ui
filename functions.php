<?php 

include (TEMPLATEPATH . "/admin/theme-options.php");

# Turn a category ID to a Name
function cat_id_to_name($id) {
	foreach((array)(get_categories()) as $category) {
    	if ($id == $category->cat_ID) { return $category->cat_name; break;}
	}
}

function the_content_limit($max_char, $more_link_text = '( >)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

if ((strlen($_GET['p']) > 0) && ($espacio = strpos($content, " ", $max_char ))) {
     $content = substr($content, 0, $espacio);
      $content = $content;
      echo "<p>";
      echo $content;
      echo " &#8629;";
      echo "</p>";
   }
  else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
       $content = substr($content, 0, $espacio);
        $content = $content;
        echo "<p>";
        echo $content;
        echo " >";
        echo "</p>";
   }
   else {
      echo "<p>";
      echo $content;
      echo " >";
      echo "</p>";
   }
}

function clear_dash(){
	$dash_side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
	$dash_normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];

	unset($dash_side['dashboard_quick_press']); //Быстрая публикация
	unset($dash_side['dashboard_recent_drafts']); //Последние черновики
//unset($dash_side['dashboard_primary']); //Блог WordPress
	unset($dash_side['dashboard_secondary']); //Другие Новости WordPress

	unset($dash_normal['dashboard_incoming_links']); //Входящие ссылки
//unset($dash_normal['dashboard_right_now']); //Текущее состояние блога
	unset($dash_normal['dashboard_recent_comments']); //Последние комментарии
	unset($dash_normal['dashboard_plugins']); //Последние Плагины
}
add_action('wp_dashboard_setup', 'clear_dash' );

?>