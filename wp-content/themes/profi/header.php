<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон хэдера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="format-detection" content="telephone=no">
   <meta content="<?php echo get_template_directory_uri(); ?>/img/soc.jpg" property="og:image">
   <meta content="<?php echo get_template_directory_uri(); ?>/img/soc.jpg" property="vk:image">
   <!-- RSS, стиль и всякая фигня -->
   <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
   <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
   <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/modules.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
   <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
   <title>
      <?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
   </title>
   <?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>
</head>

<body>
   <div class="wrapper">
      <header class="header">
         <div class="header__container _container">
            <div class="header__logo">
               <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="161px" alt="Логотип"></a>
            </div>
            <div data-da=".offcanvas-body, 992, 1" class="header__nav">
               <nav>
                  <ul>
                     <li><a href="about.html">О компании</a></li>
                     <li><a href="items.html">Продукция</a></li>
                     <li><a href="services.html">Услуги</a></li>
                     <li><a href="certificates">Сертификаты</a></li>
                     <li><a href="contacts.html">Контакты</a></li>
                  </ul>
               </nav>
            </div>
            <div class="header__callback callback-header">
               <a data-da=".offcanvas-body, 480, last" href=" tel:+74992167163" class="callback-header__phone">+7 (499)
                  216-71-63</a>
               <button data-bs-toggle="modal" data-bs-target="#callback" class="callback-header__button">Заказ звонка</button>
            </div>
            <button class="offcanvas-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg
                  width="48px" height="48px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                  <path d="M41,14H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,14Z" fill="#fff" />
                  <path d="M41,26H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,26Z" fill="#fff" />
                  <path d="M41,38H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,38Z" fill="#fff" />
               </svg></button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
               <div class="offcanvas-header">
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
               </div>
               <div class="offcanvas-body">
               </div>
            </div>
         </div>
      </header>