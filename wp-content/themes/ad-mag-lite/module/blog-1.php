<?php get_header(); ?>
<!--<?php ad_mag_lite_get_breadcrumb(); ?>-->
<!--/end .breadcrumb-->

<div id="main-content" class="mb-20">

    <div class="wrapper">

        <div class="row">

            <div class="kopa-col-wrap">

                <?php if(!is_active_sidebar( 'center-sidebar' ) && !is_active_sidebar( 'right-sidebar' ) ){
                    $class = ' full-width';
                }else{
                    $class = '';
                }
                ?>

                <div class="kopa-col-1<?php echo esc_attr($class); ?>">

                    <?php if(is_active_sidebar( 'left-sidebar' )) {
                        echo '<div class="ad-mag-left-sb">';
                        dynamic_sidebar( 'left-sidebar' );
                        echo '</div>';
                    } 
                    ?>

                    <div class="widget kopa-article-list-widget article-list-9">
                        
                    <div class="pd-20">
                        <ul class="clearfix">
                           <?php if(have_posts()) : while(have_posts()) : the_post(); 
                           if(is_sticky(get_the_id())){
                            $post_class = 'sticky-post entry-item';
                        }else{
                            $post_class = 'entry-item';
                        }
                        if(!has_post_thumbnail()){
                            $post_class .= ' no-thumb';
                        }
                        ?>
                        <li>
                           <article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
                              <?php if(has_post_thumbnail()) : ?>
                              <div class="entry-thumb style1">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                  <?php the_post_thumbnail( 'ad-mag-lite-article-list-261x178' ); ?>
                              </a>

                          </div>
                      <?php endif; ?>
                      <div class="entry-content">
                       <h4 class="entry-title" itemscope="" itemtype="http://schema.org/Event">
                        <a itemprop="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php if(is_sticky()) : ?>
                        <span class="sticky-span fa fa-bolt"></span>
                    <?php endif; ?>
                </h4>
<p><strong>Рейтинг: </strong><?php echo get_post_meta($post->ID, 'brpv_total_rating', true); ?>/5</p>
               <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'ad-mag-lite' ); ?></a>
           </div>
       </article>
   </li>
<?php endwhile; else : ?>
   <p><?php _e( 'Sorry, no posts matched your criteria.', 'ad-mag-lite' ); ?></p>
<?php endif; ?>
</ul>

<?php get_template_part('module/template','pagination' ); ?>

</div>
</div>
<!-- widget --> 

</div>
<!-- kopa-col-1 -->

<?php if(is_active_sidebar( 'center-sidebar' )) {
   echo '<div class="kopa-col-3">';
   echo '<div class="ad-mag-center-sb">';
   dynamic_sidebar( 'center-sidebar' );
   echo '</div>';
   echo '</div>';
} 
?>

<?php if(is_active_sidebar( 'right-sidebar' )) {
   echo '<div class="kopa-col-2">';
   echo '<div class="ad-mag-right-sb">';
   dynamic_sidebar( 'right-sidebar' );
   echo '</div>';
   echo '</div>';
} 
?>

</div>

</div>
<!-- row --> 

</div>
<!-- wrapper -->

</div>
<!-- main-content -->
<?php get_footer(); ?>