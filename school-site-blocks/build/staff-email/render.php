<?php
$post_id = get_the_ID();
$email = '';

if ( $post_id ) {
    $email = get_post_meta( $post_id, 'staff_email', true );
}
?>

<email <?php echo get_block_wrapper_attributes(); ?>>
    <?php if ( ! empty( $attributes['svgIcon'] ) ) : ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M29 4H3a3 3 0 0 0-3 3v18a3 3 0 0 0 3 3h13v-2H3a1 1 0 0 1-1-1V7.23l13.42 9.58a1 1 0 0 0 1.16 0L30 7.23V17h2V7a3 3 0 0 0-3-3zM16 14.77 3.72 6h24.56z"/>
            <path d="m24.29 18.29-4 4 1.41 1.41 2.3-2.29V29h2v-7.59l2.29 2.29 1.41-1.41-4-4a1 1 0 0 0-1.41 0z"/>
        </svg>
    <?php endif; ?>

    <?php if ( $email ) : ?>
        <p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
    <?php else : ?>
        <p><em><?php esc_html_e('No staff email found.', 'staff-email'); ?></em></p>
    <?php endif; ?>
</email>
