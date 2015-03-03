<?php
$sidebar_id = 'default-sidebar';

if ( $sidebar_override = get_post_meta( get_the_ID(), 'szbl_sidebar', true ) )
{
    $sidebar_id = $sidebar_override;
}

?>
<aside class="sidebar" role="complementary">

    <?php if ( !dynamic_sidebar( $sidebar_id ) ) : ?>

    <?php endif; ?>

</aside>