<?php
/**
 * Displays header media child
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<div class="custom-header-media">
	<?php the_custom_header_markup(); ?>
	<div class="custom-textbox">
		<div class="custom-wrap">
		<div class="custom-textbox-content">
			<h1>Hello!</h1>
			<p>I'm a passionate designer and developer that loves to create clean and elegant websites. </p>
		</div>
	</div>
	</div>	
</div>
	

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
