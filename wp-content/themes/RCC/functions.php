<?php
add_action( 'after_setup_theme', 'rachelcarsoncouncil_setup' );
function rachelcarsoncouncil_setup()
{
load_theme_textdomain( 'rachelcarsoncouncil', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'rachelcarsoncouncil' ) )
);
}
add_action( 'wp_enqueue_scripts', 'rachelcarsoncouncil_load_scripts' );
function rachelcarsoncouncil_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'rachelcarsoncouncil_enqueue_comment_reply_script' );
function rachelcarsoncouncil_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'rachelcarsoncouncil_title' );
function rachelcarsoncouncil_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'rachelcarsoncouncil_filter_wp_title' );
function rachelcarsoncouncil_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'rachelcarsoncouncil_widgets_init' );
function rachelcarsoncouncil_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'rachelcarsoncouncil' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}

function rachelcarsoncouncil_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'rachelcarsoncouncil_comments_number' );
function rachelcarsoncouncil_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

// Creating the news widget 
class rcc_news_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'rcc_news_widget', 

// Widget name will appear in UI
__('RCC News Widget', 'rcc_news_widget_domain'), 

// Widget description
array( 'description' => __( 'News widget for Rachel Carson Council', 'rcc_news_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output

      if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'entry-summary-sidebar' );
      endwhile; 
      endif; 
echo $args['after_widget'];
}
    
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'rcc_news_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
  
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class rcc_news_widget ends here

// Register and load the widget
function rcc_news_load_widget() {
  register_widget( 'rcc_news_widget' );
}
add_action( 'widgets_init', 'rcc_news_load_widget' );



// Creating the shop widget 
class rcc_shop_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'rcc_shop_widget', 

// Widget name will appear in UI
__('RCC Shop Widget', 'rcc_shop_widget_domain'), 

// Widget description
array( 'description' => __( 'Shop widget for Rachel Carson Council', 'rcc_shop_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
echo $args['before_title'] . $args['after_title'];

// This is where you run the code and display the output

echo '<a class="greenbutton" href="';
echo home_url( "/shop" );
echo '">Shop RCC</a>';
echo $args['after_widget'];
}
    
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'rcc_shop_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
  
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class rcc_shop_widget ends here

// Register and load the widget
function rcc_shop_load_widget() {
  register_widget( 'rcc_shop_widget' );
}
add_action( 'widgets_init', 'rcc_shop_load_widget' );

/**
 * Add extra custom fields to slideshow images
 */
function _my_soliloquy_slide_caption_bottom_field( $id, $data, $post_id ) {
  $caption_bottom = ! empty( $data['caption_bottom'] ) ? $data['caption_bottom'] : '';
  ?>
    <tr id="soliloquy-caption_bottom-box-<?php echo esc_attr( $id ) ?>" valign="middle">
      <th scope="row"><label for="soliloquy-caption_bottom-<?php echo esc_attr( $id ) ?>"><?php _e( 'Caption Text', 'mytheme' ); ?></label></th>
      <td>
<textarea id="soliloquy-caption_bottom-<?php echo esc_attr( $id ) ?>" class="soliloquy-caption_bottom" type="text" name="_soliloquy[caption_bottom]" data-soliloquy-meta="caption_bottom" >
<?php echo esc_attr( $caption_bottom ); ?>
 </textarea>
       </td>
    </tr>
  <?php
}
add_action( 'soliloquy_after_image_meta_settings', '_my_soliloquy_slide_caption_bottom_field', 1, 3 );


remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

/**
 * Save slideshow images's extra custom fields
 */
function _my_soliloquy_ajax_save_meta( $slider_data, $meta, $attach_id, $post_id ) {
  if ( ! empty( $meta['caption_bottom'] ) ) {
    $slider_data['slider'][ $attach_id ]['caption_bottom'] = sanitize_text_field( $meta['caption_bottom'] );
  }
  else {
    unset( $slider_data['slider'][ $attach_id ]['caption_bottom'] );
  }

  return $slider_data;
}
add_action( 'soliloquy_ajax_save_meta', '_my_soliloquy_ajax_save_meta', 10, 4 );

function admin_add_wysiwyg_custom_field_textarea()
{ ?>
<script type="text/javascript">/* <![CDATA[ */
    jQuery(function($){
        var i=1;
        $('textarea.soliloquy-caption_bottom').each(function(e)
        {
          var id = $(this).attr('id');
          if (!id)
          {
           id = 'customEditor-' + i++;
           $(this).attr('id',id);
          }
          tinyMCE.execCommand('mceAddControl', false, id);
        });
    });

/* ]]> */</script>
<?php }
add_action( 'admin_print_footer_scripts', 'admin_add_wysiwyg_custom_field_textarea', 99 );

?>

