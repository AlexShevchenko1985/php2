<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package medacist
 */

get_header();
$id = get_option('page_for_posts');
$thumb = bd_get_attachment_thumbnail_url(get_post_thumbnail_id($id), 'promo-sizes');
?>
<main class="main">

    <section class="promo-section">
        <div class="bg-section" style="background-image: url(<?= $thumb['image']; ?>);"></div>
        <div class="container">
            <div class="container-inner">
                <h1 class="h2"><?= get_the_title($id); ?></h1>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>
