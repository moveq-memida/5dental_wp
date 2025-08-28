<?php
/**
 * サイドバーテンプレート
 *
 * @package 5DENTAL
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside class="sidebar">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>