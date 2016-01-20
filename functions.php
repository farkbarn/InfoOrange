<?php
the_post_thumbnail( $size, $attr );
add_theme_support( 'post-thumbnails');
add_image_size( 'img_col1', 450, 300, true );
add_image_size( 'img_col2', 190, 250, true );
add_image_size( 'img_sil2', 190, 150, true );
add_image_size( 'img_slid1', 690, 500, true );
add_image_size( 'img_slid2', 290, 140, true );

register_nav_menus( array(
	'menu-top' => 'Menu superior',
	'menu' => 'Menu principal',
	'menu-dep' => 'Menu deportes'
)
);

/* Mi jQuery */
/*function my_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', '/wp-content/themes/nueva/js/vendor/jquery-1.9.1.min.js');
        wp_enqueue_script( 'jquery' );
    }
}
add_action('init', 'my_init_method');*/

register_sidebar(array(
    'name' => 'Sidebar Home',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));

register_sidebar(array(
    'name' => 'Sidebar Home Dos',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));
register_sidebar(array(
    'name' => 'Sidebar Categoria',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));
register_sidebar(array(
    'name' => 'Sidebar Pagina',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));
register_sidebar(array(
    'name' => 'Sidebar Busqueda',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));
register_sidebar(array(
    'name' => 'Sidebar Deporte',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria">',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));

register_sidebar(array(
    'name' => 'Sidebar Estancia',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<div class="label_container mb-10">
                 <div class="label_categoria"> ',
    'after_title' => '</div>
                 <div class="flecha"></div>
             </div>
             <div class="clear"></div>',
));


/*include(TEMPLATEPATH.'/includes/themeoptions.php');*/
include(TEMPLATEPATH.'/includes/images.php');
/*function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
          <br />
       <?php endif; ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
<?php
}
*/

automatic_feed_links();
// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
// Custom Functions for CSS/Javascript Versioning
//$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
//$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);
// Add ?v=[last modified time] to style sheets
/*function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}*/
// Add ?v=[last modified time] to javascripts
/*function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script defer src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}*/
// Add ?v=[last modified time] to a file url
/*function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }
  return $relative_url.$file_version;
}*/

/* EXCLUIR CAT FARKBARN */
/*function exc_cat($query){
	if ($query->is_home()){$query->set('cat','-13 -14 -22 -23 -25 -420 -258');}
	return$query;}
add_filter('pre_get_posts','exc_cat');*/
/* FIN */
/*
function exclude_categoria(){
 foreach((get_the_category()) as $category);
  {
   if($category->cat_name!="Breves" and $category->cat_name!="Caracazo" and $category->cat_name!="Clasificados" and $category->cat_name!="COLUMNA1A" and $category->cat_name!="COLUMNA1B" and $category->cat_name!="COLUMNA2A" and $category->cat_name!="COLUMNA2B" and $category->cat_name!="DESTACADA" and $category->cat_name!="Divina Pastora" and $category->cat_name!="Elecciones" and $category->cat_name!="Especiales" and $category->cat_name!="Eventos" and $category->cat_name!="Guaritos" and $category->cat_name!="Impreso" and $category->cat_name!="Infografías"and $category->cat_name!="Rápidas"and $category->cat_name!"Religión"and $category->cat_name!="Revista Estancia" and $category->cat_name!="Salud y Belleza" and $category->cat_name!="SILUETA" and $category->cat_name!="")
     return $category->cat_name . ' ';
  }
 }*/

function exclude_categoria(){
	 $categorias="";
 foreach((get_the_category()) as $category)
  {
   if(
$category->cat_name!='DESTACADA' and
$category->cat_name!='SILUETA' and
$category->cat_name!='NOAPLICA' and
$category->cat_name!='COLUMNA1A' and
$category->cat_name!='COLUMNA1B' )
$categorias.=$category->cat_name . ' ';
  }
  return $categorias;
 }

function list_cat(){
$categories = get_the_category();
$separador = ' | ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
	if ($category->cat_name=='DESTACADA' ||
	    $category->cat_name=='SILUETA'   ||
	    $category->cat_name=='NOAPLICA'  ||
	    $category->cat_name=='COLUMNA1A' ||
	    $category->cat_name=='COLUMNA1B' ){
	}
	else
	{
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="categoria '.esc_html( $category->name ).'" title="' . esc_attr( sprintf( __( 'click para %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separador;
	}
    }
    return trim( $output, $separador );
}
}

function id_categoria(){
 foreach((get_the_category()) as $category)
  {
   if(
$category->cat_name!='DESTACADA' and
$category->cat_name!='SILUETA' and
$category->cat_name!='NOAPLICA' and
$category->cat_name!='COLUMNA1A' and
$category->cat_name!='COLUMNA1B' )
    return $category->cat_ID;
  }
}

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}
// AGREGADO POR INFORMADOR
//Contador de caracteres en extracto
function excerpt_count_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#postexcerpt .handlediv").after("<div style=\"position:absolute;top:0px;right:30px;color:#666;\"><small></small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"excerpt_counter\" readonly=\"\" style=\"background:#fff;\"> <small>caracter(es).</small></div>");
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
     jQuery("#excerpt").keyup( function() {
     jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
   });
});</script>';
}
add_action( 'admin_head-post.php', 'excerpt_count_js');
add_action( 'admin_head-post-new.php', 'excerpt_count_js');

//Contador de caracteres en extracto
function titulo_contador_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#titlewrap").after("<div style=\"position:absolute;top:-32px;right:0px;color:#666;\"><small></small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"tit_counter\" readonly=\"\" style=\"background:#fff;\"> <small>Máximo 90 caracter(es).</small></div>");
     jQuery("#tit_counter").val(jQuery("#title").val().length);
     jQuery("#title").keyup( function() {
     jQuery("#tit_counter").val(jQuery("#title").val().length);
   });
});</script>';
}
add_action( 'admin_head-post.php', 'titulo_contador_js');
add_action( 'admin_head-post-new.php', 'titulo_contador_js');

/*
//add
function ad_ad(){
	echo '<script>jQuery(document).ready(function(){
	jQuery("#wpfooter").after("<div class=\"ad\" > </div>");
	});</script>';
}
add_action( 'admin_head-post.php', 'ad_ad');
add_action( 'admin_head-post-new.php', 'ad_ad');
*/

// PERSONALIZAR EL ADMIN LOGIN
function style_adm() { ?>
    <style type="text/css">
	html{background:none;}
        .login h1 a {
	background-image: url(/wp-content/themes/nueva/img/Log_El_Informador.png);
	border-radius: 25px 0px;
	border: 1px solid white;
	box-shadow: 10px 10px 8px #000;}

	.login form{
	border-radius: 50px 10px;
	border: solid rgba(255, 108, 0, 0.42);
	box-shadow: 10px 10px 8px #000;
	background-color: #A8A8A8;}

	.login form .input, .login form input[type="checkbox"], .login input[type="text"]{
	border-radius: 20px 5px;
	font-style: italic;}

	body{
	background:url(/wp-content/themes/nueva/img/overlay.png);
	font-size: 18px;
	font-style: italic;}

	.login label{
	color: white;
	font-size: 22px;
	font-style: italic;}

	.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
	border-radius: 15px 0;
	border-color: -moz-use-text-color;
	}

	.login #login_error {visibility: hidden;}

	.login .message{border-radius: 25px 0;}

	#title{width:400px;}
	.column-title{width:400px;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'style_adm' );

function style_admin(){ ?>
<style type="text/css">
	#title{width:400px;}
        .column-title{width:400px;}
</style>
<?php }
add_action( 'edit_enqueue_style','style_admin');
add_action( 'edit_enqueue_scripts','style_admin');

function custom_styles() { ?>
<style type="text/css">
	#title{width:400px;}
        .column-title{width:400px;}
</style>
<?php }
add_action( 'wp_enqueue_scripts', 'custom_styles' );


/*add_action('admin_head', 'my_custom_fonts');*/
function my_custom_fonts() { ?>
<style type="text/css">
    #title, .column-title {width: 600px;}
</style>
<?php }
add_action('admin_head', 'my_custom_fonts');



/*ELIMINAR NOTIFICACION DE ACTUALIZACION PARA NO ADM*/
global $user_login;
get_currentuserinfo();
if ($user_login !== "admin") {
add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );}


/*obtener numero de visitas*/
/*function getPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
return "0 View";
}
return $count.' Views';
}

function setPostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
$count = 0;
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
}else{
$count++;
update_post_meta($postID, $count_key, $count);
}
}*/

/*Mostrar número de visits en adm*/
/*add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);*/

/*function posts_column_views($defaults){
$defaults['post_views'] = __('Visitas');
return $defaults;
}
function posts_custom_column_views($column_name, $id){
if($column_name === 'post_views'){
echo getPostViews(get_the_ID());
}
}*/

//omitir info error login
add_filter('login_errors',create_function('$a', "return null;"));
// REMOVER GENERADOR DE META
remove_action('wp_head', 'wp_generator');
//remove_action('wp_head', 'rsd_link');
//remove_action('wp_head', 'wlwmanifest_link');
//remove_action('wp_head', 'index_rel_link');
//remove_action('wp_head', 'parent_post_rel_link', 10, 0);
//remove_action('wp_head', 'start_post_rel_link', 10, 0);
//remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

//ELIMINAR EJECUCION DE CODIGO HTML EN COMMENTS
add_filter('pre_comment_content', 'wp_specialchars');
//LISTA BLANCA PARA PLGN LIMIT LOGIN ATTEMPTS
function my_ip_whitelist($allow, $ip) { return ($ip == '190.79.146.37') ? true : $allow; }
add_filter('limit_login_whitelist_ip', 'my_ip_whitelist', 10, 2);

//Pass the variable by reference to the function, so the function can modify the variable.
function no_ping (&$links) {
$home = get_option( 'home' );
foreach ( $links as $l => $link )
    //Find the position of the first occurrence of a substring in a string.
    //($a === $b) Identical operator. TRUE if $a is equal to $b, and they are of the same type.
    if ( 0 === strpos( $link, $home ) )
        //Unset the variable
        unset($links[$l]);
}
//Hooks the function to the specific action (pre_ping)
add_action( 'pre_ping', 'no_ping' );
// DESACTIVA POR COMPLETO EL PINGBACK
/*
add_filter( 'xmlrpc_methods', function( $methods ) {
   unset( $methods['pingback.ping'] );
   return $methods;
} );*/




// set_site_transient('update_themes', null);
function geko_check_update( $transient ) {
$usergithub=farkbarn;
$ramastable=master;
    if ( empty( $transient->checked ) ) {
        return $transient;
    }
    $theme_data = wp_get_theme(wp_get_theme()->template);
    $theme_slug = $theme_data->get_template();
    //Delete '-master' from the end of slug
    $theme_uri_slug = preg_replace('/-'.$ramastable.'$/', '', $theme_slug);
   $remote_version = '0.0.0';
   $style_css = wp_remote_get("https://raw.githubusercontent.com/".$usergithub."/".$theme_uri_slug."/".$ramastable."/style.css")['body'];
   if ( preg_match( '/^[ \t\/*#@]*' . preg_quote( 'Version', '/' ) . ':(.*)$/mi', $style_css, $match ) && $match[1] )
       $remote_version = _cleanup_header_comment( $match[1] );
   if (version_compare($theme_data->version, $remote_version, '<')) {
       $transient->response[$theme_slug] = array(
           'theme'       => $theme_slug,
           'new_version' => $remote_version,
           'url'         => 'https://github.com/'.$usergithub.'/'.$theme_uri_slug,
           'package'     => 'https://github.com/'.$usergithub.'/'.$theme_uri_slug.'/archive/'.$ramastable.'.zip',
       );
   }
   return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'geko_check_update' );


?>
