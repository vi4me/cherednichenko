<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package july
 */

get_header();
?>

	<div class="box-1 box"></div>
            <div class="box-2 box"></div>
            <div class="box-3 box"></div>

            <div class="title-2"><?php echo the_field("surname"); ?></div>

            <div>
                  <img class="runner" src="<?php echo the_field("photo"); ?>" alt="">
            </div>

            <div class="title-1"><?php echo the_field("name"); ?></div>

            <div class="content">
                  <p>   <?php echo the_field("text"); ?>
                  </p>

                  <button><?php echo the_field("button"); ?></button>
            </div>
			
			<section class="advantages" id="my_works">
    <div class="container">
		
		<?php
$works = get_field('works');	

if( $works ): ?>
		<div class="advantages-box">		
        <div class="advantages-box__info">
          <div class="advantages-box__title"><?php echo $works['works_title']; ?></div>
          <div class="advantages-box__text">
            <p><?php echo $works['works_text']; ?></p>
			<a href="<?php echo $works['link']; ?>">Read more &raquo;</a>
          </div>
        </div>
        <div class="advantages-box__images">
          <img src="<?php echo $works['works_photo']; ?>" alt="">
        </div>
      </div>
		
<?php endif; ?>
		
	<?php
$works_right = get_field('works_right');	

if( $works_right ): ?>
      <div class="advantages-box advantages-box--right">
        <div class="advantages-box__info">
          <div class="advantages-box__title"><?php echo $works_right['works_title_right']; ?></div>
          <div class="advantages-box__text">
            <p><?php echo $works_right['works_text_right']; ?></p>
			<a href="<?php echo $works_right['link_right']; ?>">Read more &raquo;</a>
          </div>
        </div>
        <div class="advantages-box__images">
          <img src="<?php echo $works_right['works_photo_right']; ?>" alt="">
        </div>
      </div>
<?php endif; ?>	
		
	<?php
$works2 = get_field('works2');	

if( $works2 ): ?>
		<div class="advantages-box">
        <div class="advantages-box__info">
          <div class="advantages-box__title"><?php echo $works2['works_title2']; ?></div>
          <div class="advantages-box__text">
            <p><?php echo $works2['works_text2']; ?></p>
			<a href="<?php echo $works2['link2']; ?>">Read more &raquo;</a>
          </div>
        </div>
        <div class="advantages-box__images">
          <img src="<?php echo $works2['works_photo2']; ?>" alt="">
        </div>
      </div>
<?php endif; ?>
		
	<?php
$works_right2 = get_field('works_right2');	

if( $works_right2 ): ?>
      <div class="advantages-box advantages-box--right">
        <div class="advantages-box__info">
          <div class="advantages-box__title"><?php echo $works_right2['works_title_right2']; ?></div>
          <div class="advantages-box__text">
            <p><?php echo $works_right2['works_text_right2']; ?></p>
			<a href="<?php echo $works_right2['link_right2']; ?>">Read more &raquo;</a>
          </div>
        </div>
        <div class="advantages-box__images">
          <img src="<?php echo $works_right2['works_photo_right2']; ?>" alt="">
        </div>
      </div>
<?php endif; ?>	
		
    </div>
  </section>
  
  <div class="header-slider" id="reviews"  style="background-image:url(<?php echo the_field("slider_bg"); ?>);">
      <div class="header-slider__item">
		<?php
$review1 = get_field('review1');	

if( $review1 ): ?>  
		  
        <div class="header-slider__item-content" >
          <div class="header-slider__item-info">
            <h3 class="header-slider__title"><?php echo $review1['review1_title']; ?>
            </h3>
            <div class="header-slider__description">
              <?php echo $review1['review1_text']; ?>
            </div>
          </div>
          <div class="header-slider__item-images">
              <img src="<?php echo $review1['review1_photo']; ?>" alt="">
          </div>
        </div>
<?php endif; ?>  
      </div>
	  
	  <div class="header-slider__item">
		<?php
$review2 = get_field('review2');	

if( $review2 ): ?>  
		  
        <div class="header-slider__item-content">
          <div class="header-slider__item-info">
            <h3 class="header-slider__title"><?php echo $review2['review2_title']; ?>
            </h3>
            <div class="header-slider__description">
              <?php echo $review2['review2_text']; ?>
            </div>
          </div>
          <div class="header-slider__item-images">
              <img src="<?php echo $review2['review2_photo']; ?>" alt="">
          </div>
        </div>
<?php endif; ?>  
      </div>
	  
	  <div class="header-slider__item">
		<?php
$review3 = get_field('review3');	

if( $review3 ): ?>  
		  
        <div class="header-slider__item-content">
          <div class="header-slider__item-info">
            <h3 class="header-slider__title"><?php echo $review3['review3_title']; ?>
            </h3>
            <div class="header-slider__description">
              <?php echo $review3['review3_text']; ?>
            </div>
          </div>
          <div class="header-slider__item-images">
              <img src="<?php echo $review3['review3_photo']; ?>" alt="">
          </div>
        </div>
<?php endif; ?>  
      </div>
	  
	  <div class="header-slider__item">
		<?php
$review4 = get_field('review4');	

if( $review4 ): ?>  
		  
        <div class="header-slider__item-content">
          <div class="header-slider__item-info">
            <h3 class="header-slider__title"><?php echo $review4['review4_title']; ?>
            </h3>
            <div class="header-slider__description">
              <?php echo $review4['review4_text']; ?>
            </div>
          </div>
          <div class="header-slider__item-images">
              <img src="<?php echo $review4['review4_photo']; ?>" alt="">
          </div>
        </div>
<?php endif; ?>  
      </div>
	  
	  <div class="header-slider__item">
		<?php
$review5 = get_field('review5');	

if( $review5 ): ?>  
		  
        <div class="header-slider__item-content">
          <div class="header-slider__item-info">
            <h3 class="header-slider__title"><?php echo $review5['review5_title']; ?>
            </h3>
            <div class="header-slider__description">
              <?php echo $review5['review5_text']; ?>
            </div>
          </div>
          <div class="header-slider__item-images">
              <img src="<?php echo $review5['review5_photo']; ?>" alt="">
          </div>
        </div>
<?php endif; ?>  
      </div>
      
      </div>
    </div> 
  

<?php
get_footer();
