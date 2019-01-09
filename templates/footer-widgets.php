<div class="row">
	<?php 
	// Footer Widget Start

	// Footer widget 1
	if( is_active_sidebar( 'footer-1' ) ) {
		echo '<div class="col-lg-3 col-md-12"><div class="single-footer-widget">';
			dynamic_sidebar( 'footer-1' );
		echo '</div></div>';
	}

	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ) {
		echo '<div class="col-lg-6  col-md-12"><div class="single-footer-widget">';
			dynamic_sidebar( 'footer-2' );
		echo '</div></div>';
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ) {
		echo '<div class="col-lg-3  col-md-12"><div class="single-footer-widget">';
			dynamic_sidebar( 'footer-3' );
		echo '</div></div>';
	}
			
	?>
</div>
