<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package casino
 */

?>
<div class="list__block block" id="post-<?php the_ID(); ?>">
    <div class="img-block block__image">
        <?php casino_post_thumbnail(); ?>
    </div>
    <div class="block__descr">
        <h2 class="block__title title-block">
        <?php $post_id = get_the_ID();
        echo get_post_meta($post_id, 'title', true); ?></h2>
            <p class="block__text"><?php echo get_post_meta( $post_id, 'description', true); ?></p>
        <button class="btn-mini block__btn_mini">★ Бонус<span class="btn-mini__dark-text"><?php echo get_post_meta( $post_id, 'bonus', true); ?></span></button>
    </div>
    <div class="block__btns">
        <a href="<?php echo get_post_meta( $post_id, 'entry', true); ?>" class="block__link-btn"><button class="btn btn_purple block__btn-purple">Вход</button></a>
        <a href="<?php echo get_post_meta( $post_id, 'link_bonus', true); ?>" class="block__link-btn"><button class="btn btn_blue block__btn-blue">Получить бонус</button></a>
    </div>
</div>
<?php //casino_entry_footer(); ?>