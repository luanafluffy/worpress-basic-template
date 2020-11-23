<?php
get_header();

echo "font-page.php";

// Mostrar posts
$args = array('posts_per_page' => '2');
$posts = get_posts($args);
foreach ($posts as $post) :
?>
    <div>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" class="image-destaque-1">
        </a>
        <span><?php echo get_the_date(); ?></span>
    </div>
<?php endforeach;
wp_reset_query(); ?>

<?php
get_footer();