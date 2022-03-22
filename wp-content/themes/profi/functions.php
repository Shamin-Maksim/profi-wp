<?php
/**
 * Чистый Шаблон для разработки
 * Функции шаблона
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню',
	'left' => 'Нижнее'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(254, 190); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') )
register_sidebar(); // Регистрируем сайдбар
function transliterate_url( $text ) {
		$text = mb_strtolower( $text, 'UTF-8' );
		$symbol_table = array('а' => 'a',	'б' => 'b',	'в' => 'v',
				      'г' => 'g',	'д' => 'd',	'е' => 'e',
				      'ё' => 'yo',	'ж' => 'zh',	'з' => 'z',
				      'и' => 'i',	'й' => 'j',	'к' => 'k',
				      'л' => 'l',	'м' => 'm',	'н' => 'n',
				      'о' => 'o',	'п' => 'p',	'р' => 'r',
				      'с' => 's',	'т' => 't',	'у' => 'u',
				      'ф' => 'f',	'х' => 'h',	'ц' => 'c',
				      'ч' => 'ch',	'ш' => 'sh',	'щ' => 'shh',
				      'ъ' => "",	'ы' => 'y',	'ь' => "",
				      'э' => 'e',	'ю' => 'yu',	'я' => 'ya');
		$text = strtr( $text, $symbol_table );
		return $text;
	}
	add_filter( 'sanitize_title', 'transliterate_url', 1 );
	add_filter( 'sanitize_file_name', 'transliterate_url', 1 );

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title' 	=> 'Опции',
			'menu_title'	=> 'Опции',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}

	function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

add_filter( 'excerpt_length', function(){
	return 20;
} );
?>
