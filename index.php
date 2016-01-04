<?php
?>
<?php include_once( 'header.php' ); ?>
<div id="container">
    <?php
    $temp = $wp_query;
    $wp_query= null;
    $wp_query = new WP_Query();
    $wp_query->query('posts_per_page=100'.'&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
    <div class="block">
        <div class="block_header">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Click to view: <?php the_title_attribute(); ?>">
                <?php the_title(); ?></a>
            </div>
            <div class="block_featured_image">
                <?php if ( has_post_thumbnail() ) {
                    $size=75;
                    ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Click to view: <?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail( array(300,300)  );  }  ?>
                    </a>
                </div>
                <?php the_excerpt(); ?>
                <!--<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="read_more_link"></a>
            </div>-->
        <?php endwhile;?>
        <?php $wp_query = null; $wp_query = $temp;?>
    </div>
    <?php get_footer(); ?>
