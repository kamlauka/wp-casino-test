<?php


get_header();
?>

	<main class="main">
        <div class="breadcrumbs"><span>mainpage</span><span>top online casino</span></div>
        <h1 class="title">ТОП 10казино онлайн 2021</h1>
        <div class="list">
            <?php
            $args = array(
                'post_type' => 'casino',
                'publish' => true,
                'paged' => get_query_var('paged'),
            );

            query_posts($args);

            if ( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>
        <button class="btn-purple-trans purple-text main__btn-load">Загрузить ещё</button>

</main><!-- #main -->

<?php

get_footer();
