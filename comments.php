<?php
/**
 * @Packge     : Robotics
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

if ( post_password_required() ) {
    return;
}
?>

    <?php if ( have_comments() ) : ?>
		<section id="comments" class="comment-sec-area content--area pt-80"><!-- Comment Item Start-->
        <h5 class="text-uppercase pb-80"><?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'robotics' ), number_format_i18n( get_comments_number() ) ); ?></h5>
		
        <?php the_comments_navigation(); ?>
            <div class="commentlist">
                <?php
                    wp_list_comments( array(
                        'style'       => 'div',
                        'short_ping'  => true,
                        'avatar_size' => 70,
                        'callback'    => 'robotics_comment_callback'
                    ) );
                ?>
            </div><!-- .comment-list -->
        <?php the_comments_navigation(); ?>
		</section><!-- Comment Item End-->
    <?php endif; // Check for have_comments(). ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'robotics' ); ?></p>
    <?php endif; ?>
    
<?php
    //
    if( is_user_logged_in() ){
        $row        = '';
        $col8       = 'col-lg-12 col-md-12';
        $tarow      = '<div class="row">';
    }else{
        $row        = '<div class="row">';
        $col8       = 'col-lg-8 col-md-6';
        $tarow      = '';
    }

    //
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? "required='required'" : '' );
	$fields =  array(
	  'author' => wp_kses_post( $row ).'<div class="col-lg-4 col-md-6"><input class="common-input mb-20 form-control" placeholder="'.esc_attr__( 'Enter your name', 'robotics' ).'" type="text" name="author" value="'. esc_attr( $commenter['comment_author'] ).'" id="cName" '.$aria_req.'>',
	  'email' =>'<input class="common-input mb-20 form-control" placeholder="'.esc_attr__( 'Enter your email', 'robotics' ).'" type="text" name="email"  value="' . esc_attr(  $commenter['comment_author_email'] ) .'" id="cEmail" '.$aria_req.'>',
      'url' =>'<input class="common-input mb-20 form-control" placeholder="'.esc_attr__( 'Enter Your Website', 'robotics' ).'" type="text" name="url" value="'. esc_attr( $commenter['comment_author_url'] ) .'" id="cWebsite">',
      'cookies_consent' =>'<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" value="yes" type="checkbox"><label class="cookies-consent-label" for="wp-comment-cookies-consent">'.esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'robotics' ).'</label></p></div>',
	);
	

	$args=array(
	'comment_field'         =>wp_kses_post( $tarow ).'<div class="'.esc_attr( $col8 ).'"><textarea id="cMessage" rows="6" class="form-control mb-10" name="comment" placeholder="'.esc_attr__( 'Messege', 'robotics' ).'"></textarea></div></div>',
	'id_form'               =>'contactForm',
    'class_form'            =>'',
	'title_reply'           =>esc_html__( 'Leave a Reply', 'robotics' ),
	'title_reply_before'    =>'<h5 class="pb-20">',
	'title_reply_after'     =>'</h5>',
    'label_submit'          => esc_html__( 'Post Comment', 'robotics' ),
    'class_submit'          => 'primary-btn mt-20',
	'submit_button'         => '<button type="submit" name="%1$s" id="%2$s" class="%3$s">%4$s</button>',
	'fields'                =>$fields,
	
	);

    echo '<section class="commentform-area pt-80">';
    	comment_form( $args );
    echo '</section>';

