<?php 
$blog_list_title = $cp->blog_list_title;
$list = $cp->blogs;

if (empty($list)) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
    );
} else {
    $args = array(
        'post_type' => 'post',
        'post__in' => $list,
        'orderby' => 'post__in',
        'posts_per_page' => -1,
    );
}

$blog_posts = new WP_Query($args);
?>

<section class="blog-list">
        <?php if(!empty($blog_list_title)):?>
            <h2 class="blog-list__title"><?php echo $blog_list_title?></h2>
        <?php endif?>
        <div class="blog-list__wrapper">
        <?php if ($blog_posts->have_posts()) : ?>
            <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                <div class="blog-list__wrapper-item">
                    <?php $permalink = get_permalink()?>
                    <?php if(has_post_thumbnail()):?>
                        <div class="blog-list__wrapper-item-image">
                            <a href="<?php echo $permalink?>">
                                <img src="<?php echo get_the_post_thumbnail_url()?>" alt="feature_image">
                            </a>
                        </div>
                    <?php endif?>
                    <div class="blog-list__wrapper-item-info">
                        <?php 
                            $title = get_the_title();
                            $description = get_the_content();
                            $category = get_the_category()[0]->name;
                            $date = get_the_date();
                            $comments = get_comments_number();
                            $author_id = get_the_author_meta('ID'); 
                            $author_name = get_the_author_meta('display_name', $author_id);
                            $author_avatar = get_avatar_url($author_id);
                        ?>

                        <?php if(!empty($category)):?>
                            <span class="blog-list__wrapper-item-info-category">
                                <?php echo $category?>
                            </span>
                        <?php endif?>

                        <?php if(!empty($title)):?>
                            <a href="<?php echo $permalink?>">
                                <h2 class="blog-list__wrapper-item-info-title"><?php echo $title; ?></h2>
                            </a>
                        <?php endif?>

                        <div class="blog-list__wrapper-item-info-meta">
                            <?php if(!empty($date)):?>
                                <div class="blog-list__wrapper-item-info-meta-date">Added:<?php echo $date?></div>
                            <?php endif?>

                            <?php if(!empty($comments)):?>
                                <div class="blog-list__wrapper-item-info-meta-comments">
                                <img src="<?php echo get_template_directory_uri(). '/assets/icons/comment.svg'?>" alt="">    
                                <?php echo $comments?></div>
                            <?php endif?>
                        </div>

                        <?php if(!empty($description)):?>
                            <div class="blog-list__wrapper-item-info-excerpt"><?php echo $description; ?></div>
                        <?php endif?>
                        <div class="blog-list__wrapper-item-info-author">
                            <img src="<?php echo $author_avatar?>" alt="">
                            <span><?php echo $author_name?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</section>