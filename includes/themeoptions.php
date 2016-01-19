<?php
$themename = "Configuración";
$shortname = "swt";
$himg_dir = get_bloginfo('template_directory');
$sfirst_img = $himg_dir . '/images/howtoslide.png';
$mx_categories_obj = get_categories('hide_empty=0');
$mx_categories = array();
foreach ($mx_categories_obj as $mx_cat) {
	$mx_categories[$mx_cat->cat_ID] = $mx_cat->cat_name;
}
$categories_tmp = array_unshift($mx_categories, "Select a category:","Uncategorized" );
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (
	array( "name" => $themename." ",
       "type" => "title"),
    array( "name" => "Slider",
           "type" => "section"),
    array( "type" => "open"),
	array(  "name" => "Estatus",
			"desc" => "",
            "id" => $shortname."_slider",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),
	array( 	"name" => "Categoria",
			"desc" => "",
			"id" => $shortname."_slide_category",
			"std" => "DESTACADA",
			"type" => "select",
			"options" => $mx_categories),
	array(	"name" => "Number de post",
			"desc" => "",
			"id" => $shortname."_slide_count",
			"std" => "4",
			"type" => "select",
			"options" => $number_entries),
    array( "type" => "close"),
    array( "name" => "Marquesina",
           "type" => "section"),
    array( "type" => "open"),
	array(  "name" => "Estatus",
			"desc" => "To add images in the slider, you'll have to enable it first, then select sliding category and number of slides. Under post, thats under selected sliding category, enter new custom field 'slide' (without '' quotes), and then on the right side in the 'Value' leave the link to the image. Check <a href='$sfirst_img' target='_blank'>this image</a> to make sure you're doing good! Images are automatically resized, but try to upload similiar size's like on demo version of this theme, pic's wont loose their quality!",
            "id" => $shortname."_marquee",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),
	array( 	"name" => "Categoria",
			"desc" => "Categoria",
			"id" => $shortname."_marquee_category",
			"std" => "ULTIMA HORA",
			"type" => "select",
			"options" => $mx_categories),
	array(	"name" => "Numeros de post",
			"desc" => "Seleccione el numero titulares de post que desea mostrar de la categoria seleccionada",
			"id" => $shortname."_marquee_count",
			"std" => "5",
			"type" => "select",
			"options" => $number_entries),
    array( "type" => "close"),
	array(  "name" => "Banner Publicitarios",
           "type" => "section"),
    array( "type" => "open"),
	array(  "name" => "Mostrar/Ocultar top banner 960x70",
            "id" => $shortname."_topbanner",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),
    array( "name" => "Header banner Image",
			"desc" => "Si la imagen es jpg o gif recomendamos de ancho 960px si es flash swf 960x70",
            "id" => $shortname."_hbanner",
            "std" => "Header banner Image",
            "type" => "textarea"),
   	array(  "name" => "Mostrar/Ocultar 125x125 banners",
            "id" => $shortname."_banners",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),
	array("name" => "Banner-1 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner1",
            "std" => "Banner-1 image",
            "type" => "text"),
	array("name" => "Banner-1 Url",
			"desc" => "Enter the banner-1 url here.",
            "id" => $shortname."_link1",
            "std" => "http://www.simplewpthemes.com",
            "type" => "text"),
	array("name" => "Banner-2 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner2",
            "std" => "Banner-2 image",
            "type" => "text"),
	array("name" => "Banner-2 Url",
			"desc" => "Enter the banner-2 url here.",
            "id" => $shortname."_link2",
            "std" => "http://www.sremskioglasi.com",
            "type" => "text"),
	array("name" => "Banner-3 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner3",
            "std" => "Banner-3 image",
            "type" => "text"),
	array("name" => "Banner-3 Url",
			"desc" => "Enter the banner-3 url here.",
            "id" => $shortname."_link3",
            "std" => "http://www.lacarak.net/forum",
            "type" => "text"),
	array("name" => "Banner-4 Image",
			"desc" => "Enter your 125x125 banner image url here.",
            "id" => $shortname."_banner4",
            "std" => "Banner-4 image",
            "type" => "text"),
	array("name" => "Banner-4 Url",
			"desc" => "Enter the banner-4 url here.",
            "id" => $shortname."_link4",
            "std" => "http://www.lacarak.net",
            "type" => "text"),
    array( "type" => "close"),
	array(  "name" => "Redes Sociales",
           "type" => "section"),
    array( "type" => "open"),
	array(  "name" => "Mostrar/Ocultar Redes Sociales",
            "id" => $shortname."_follow",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),
   	array("name" => "Facebook url",
			"desc" => "Facebook url here (include http://).",
            "id" => $shortname."_facebook",
            "std" => "",
            "type" => "text"),
   	array("name" => "Skype",
			"desc" => "Skype aqui (incluya http://).",
            "id" => $shortname."_skype",
            "std" => "",
            "type" => "text"),
   	array("name" => "Youtube url",
			"desc" => "Yahoo url aqui (incluya http://).",
            "id" => $shortname."_youtube",
            "std" => "",
            "type" => "text"),
	array("name" => "Su Feedburner RSS Url",
			"desc" => "RSS url aqui",
            "id" => $shortname."_rss",
            "std" => "#",
            "type" => "text"),
   	array("name" => "Twitter url",
			"desc" => "Twitter url haqui (incluya http://).",
            "id" => $shortname."_twitt",
            "std" => "#",
            "type" => "text"),
    array( "type" => "close"),
	array(  "name" => "Noticias Home",
            "type" => "section"),
    array( "type" => "open"),
	array(  "name" => "Mostrar/COLUMNA SLIDER",
            "id" => $shortname."_COLUMNASLIDER",
            "type" => "select",
            "std" => "3",
            "options" => array("2", "3")),
	array(  "name" => "Mostrar/COLUMNA 1A",
            "id" => $shortname."_COLUMNA1A",
            "type" => "select",
            "std" => "1",
            "options" => array("1", "2", "3", "4","5","6","7","8","9","10")),
	array(  "name" => "Mostrar/COLUMNA 1B",
            "id" => $shortname."_COLUMNA1B",
            "type" => "select",
            "std" => "1",
            "options" => array("1", "2", "3", "4","5","6","7","8","9","10")),
	array(  "name" => "Mostrar/COLUMNA 2A",
            "id" => $shortname."_COLUMNA2A",
            "type" => "select",
            "std" => "1",
            "options" => array("1", "2", "3", "4","5","6","7","8","9","10")),			
	array(  "name" => "Mostrar/COLUMNA 2B",
            "id" => $shortname."_COLUMNA2B",
            "type" => "select",
            "std" => "1",
            "options" => array("1", "2", "3", "4","5","6","7","8","9","10")),
    array( "type" => "close"),
	array(  "name" => "Avisos Publicitarios",
            "type" => "section"),
    array( "type" => "open"),
	array(  "name" => "Mostrar/Invasivo Flotante",
            "id" => $shortname."_FLOTANTE",
            "type" => "select",
            "std" => "No",
            "options" => array("No", "Si")),
	array(  "name" => "Mostrar/Aviso Inicio",
            "id" => $shortname."_INICIO",
            "type" => "select",
            "std" => "No",
            "options" => array("No", "400-400", "800-600")
            )
function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
	if ( 'save' == $_REQUEST['action'] ) {
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
	header("Location: admin.php?page=themeoptions.php&saved=true");
die;
}
else if( 'reset' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
	header("Location: admin.php?page=themeoptions.php&reset=true");
die;
}
}
      add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {
$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/includes/admin/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/includes/admin/rm_script.js", false, "1.0");
}

function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "open":
?>
<?php break;
case "close":
?>
</div>
</div>
<br />
<?php break;
case "title":
?>
<p>To easily use the <?php echo $themename;?>, you can use the menus below. <b>Check the README.TXT for instructions!</b></p>
<?php break;
case 'text':
?>
<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'textarea':
?>
<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'select':
?>
<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
case "checkbox":
?>
<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break;
case "section":
$i++;
?>
<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/includes/admin/images/trans.gif" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="rm_options">
<?php break;
}
}
?>
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
</p>
</form>
 </div>
<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>
