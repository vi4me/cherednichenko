<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package july
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Julie</title>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/reset.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/slick.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/style.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/media.css">
      <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="header__top">
      <div class="logo">
        <img src="<?php echo the_field("logo"); ?>" alt="">
          </a></div>
          <nav class="menu">
            <div class="menu__btn">
              <span>
                    
              </span>
            </div>
            <ul class="menu__list">
              <li><a href="#index"><?php echo the_field("menu_1"); ?></a></li>
              <li><a href="#my_works"><?php echo the_field("menu_2"); ?></a></li>
              <li><a href="#reviews"><?php echo the_field("menu_3"); ?></a></li>
            </ul>
          </nav>
        </div>
      </div>