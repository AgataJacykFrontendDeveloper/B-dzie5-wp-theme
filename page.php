<?php
  get_header();

  while(have_posts()) {
    the_post(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/yellow.png') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p>DONT FORGET TO REPLACE ME LATER</p>
        </div>
    </div>
</div>

    <div class="container container--narrow page-section">
<?php  
$theParent = wp_get_post_parent_id(get_the_ID());
if($theParent) { ?>

<div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home"
                    aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main">Posted by
                <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in
                <?php echo get_the_category_list(', '); ?></span></p>
    </div>

<?php }
?>

<?php 
$testArray = get_pages(array(
'child_of' => get_the_ID()
));

if($theParent or $testArray) {
?>
   
      <div class="page-links">
        <h3 class="page-links__title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title($theParent); ?></a></h3>
        <ul class="min-list">
			<?php 

				if($theParent) { 
				$findChildrenOf = $theParent;
				}else {
				$findChildrenOf = get_the_ID();
				}

				wp_list_pages(array(
				'title_li' => NULL,
				'child_of' => $findChildrenOf,
				'sort_column' => 'menu_order'
				));
			?>

        </ul>
      </div>
<?php } ?>

<div class="generic-content si_page"><?php the_content(); ?></div>
      </div>
    </div>

<?php }

  get_footer();

?>