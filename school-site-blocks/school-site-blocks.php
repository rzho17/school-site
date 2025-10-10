<?php
/**
 * Registers the block using a `blocks-manifest.php` file, which improves the performance of block type registration.
 * Behind the scenes, it also registers all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function staff_school_site_blocks_block_init() {
	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
	 * based on the registered block metadata.
	 * Added in WordPress 6.8 to simplify the block metadata registration process added in WordPress 6.7.
	 *
	 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
	 */
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
		return;
	}

	/**
	 * Registers the block(s) metadata from the `blocks-manifest.php` file.
	 * Added to WordPress 6.7 to improve the performance of block type registration.
	 *
	 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
	 */
	if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
		wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}
	/**
	 * Registers the block type(s) in the `blocks-manifest.php` file.
	 *
	 * @see https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	$manifest_data = require __DIR__ . '/build/blocks-manifest.php';
	foreach ( array_keys( $manifest_data ) as $block_type ) {
		register_block_type( __DIR__ . "/build/{$block_type}" );
	}
}
add_action( 'init', 'staff_school_site_blocks_block_init' );
// dispplay staff posts-------------------------------------
//ServiceSideRender Blocks==================================================
function school_site_blocks_render_callbacks($args, $name)
{
	if ('staff/staff' === $name) {
		$args['render_callback'] = 'fwd_render_staff_posts';
	}
	return $args;
}
add_filter('register_block_type_args', 'school_site_blocks_render_callbacks', 10, 2);
function fwd_render_staff_posts($attributes, $content = '', $block = null) {
	ob_start();

	$terms = get_terms(array(
		'taxonomy'   => 'fwd-staff-category',
		'hide_empty' => true,
	));

	if (!empty($terms) && !is_wp_error($terms)) : ?>
		<div <?php echo get_block_wrapper_attributes(); ?>>
			
			
			<?php foreach ($terms as $term) : ?>
				<section class="staff-category">
					<h3><?php echo esc_html($term->name); ?></h3>
					<div class="staff-grid">
						<?php
						$query = new WP_Query(array(
							'post_type'      => 'fwd-staff',
							'orderby'        => 'title',
							'order'          => 'ASC',
							'posts_per_page' => -1,
							'tax_query'      => array(
								array(
									'taxonomy' => 'fwd-staff-category',
									'field'    => 'term_id',
									'terms'    => $term->term_id,
								),
							),
						));

						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post(); ?>
							<div class="staff-contanier">
								<article class="staff-member">
									<?php if (has_post_thumbnail()) : ?>
										<div class="staff-photo">
											<?php the_post_thumbnail('medium'); ?>
										</div>
									<?php endif; ?>
									<h4><?php the_title(); ?></h4>
									<div class="staff-content"><?php the_content(); ?></div>
								</article></div>
							<?php endwhile;
							wp_reset_postdata();
						else :
							echo '<p>' . esc_html__('No staff found.', 'school-site') . '</p>';
						endif;
						?>
					</div>
				</section>
			<?php endforeach; ?>
		</div>
	<?php endif;

	return ob_get_clean();
}



