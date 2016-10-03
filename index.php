<section class="posts">

    <h1>Latest Posts</h1>
    <?php
    $i = 0;
	$args = array( 'post_type' => 'post', 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'post_date' );
	$postslist = get_posts( $args );
	foreach ($postslist as $post) : setup_postdata($post); ?>
	
	<?php $attachment_id = get_post_thumbnail_id($post->ID);
    $post_img = wp_get_attachment_image_src($attachment_id, 'full', false);
    ?>
        <?php if ( $i == 0 ): ?>
            <div class="post-excerpt post-<?php echo $i++; ?>" style="background:url('<?php
                                    if ( has_post_thumbnail() ) {
                                        echo $post_img = $post_img[0]; ?>') no-repeat;"> 
                                    <?php }
                                    else {
                                        echo get_bloginfo( 'stylesheet_directory' ) 
                                            . '/images/style/post-bg.jpg\')">' ;
                                        } 
                                    ?>
                <section class="post-img">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Read and comment on <?php the_title(); ?>"></a>
                </section>
                <section class="post-info">
                    <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Read and comment on <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                    <h6><?php the_date(); ?> | <?php the_author_posts_link(); ?></h6>
                </section>
            </div>
		<?php else: ?>
            <div class="post-excerpt post-<?php echo $i++; ?>">
                <section class="post-img">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="Read and comment on <?php the_title(); ?>"></a>
                </section>
                <section class="post-info">
                    <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Read and comment on <?php the_title(); ?>"><?php the_title(); ?></a></h4>
                    <h6><?php the_date(); ?> | <?php the_author_posts_link(); ?></h6>
                </section>
            </div>
		<?php endif; ?>
	<?php endforeach; ?>
</section>