<?php
add_theme_support( 'post-thumbnails' );
function get_the_image( $args = array() ) {
	global $post;
	$defaults = array(
		'custom_key' => array( 'Thumbnail', 'thumbnail' ),
		'post_id' => $post->ID,
		'attachment' => true,
		'the_post_thumbnail' => true,
		'default_size' => 'thumbnail',
		'default_image' => false,
		'order_of_image' => 1,
		'link_to_post' => true,
		'image_class' => false,
		'image_scan' => false,
		'width' => false,
		'height' => false,
		'format' => 'img',
		'echo' => true
	);
	$args = apply_filters( 'get_the_image_args', $args );
	$args = wp_parse_args( $args, $defaults );
	extract( $args );
	if ( $custom_key )
		$image = image_by_custom_field( $args );
	if ( !$image && $the_post_thumbnail )
		$image = image_by_the_post_thumbnail( $args );
	if ( !$image && $attachment )
		$image = image_by_attachment( $args );
	if ( !$image && $image_scan )
		$image = image_by_scan( $args );
	if ( !$image && $default_image )
		$image = image_by_default( $args );
	if ( $image )
		$image = display_the_image( $args, $image );
	$image = apply_filters( 'get_the_image', $image );
	if ( $echo && 'array' !== $format )
		echo $image;
	else
		return $image;
}

function image_by_custom_field( $args = array() ) {
	if ( !is_array( $args['custom_key'] ) )
		$args['custom_key'] = preg_split( '#\s+#', $args['custom_key'] );
	if ( isset( $args['custom_key'] ) ) {
		foreach ( $args['custom_key'] as $custom ) {
			$image = get_metadata( 'post', $args['post_id'], $custom, true );
			if ( $image )
				break;
		}
	}
	if ( $image )
		return array( 'url' => $image );
	return false;
}

function image_by_the_post_thumbnail( $args = array() ) {
	$post_thumbnail_id = get_post_thumbnail_id( $args['post_id'] );
	if ( empty( $post_thumbnail_id ) )
		return false;
	$size = apply_filters( 'post_thumbnail_size', $args['default_size'] );
	$image = wp_get_attachment_image_src( $post_thumbnail_id, $size );
	return array( 'url' => $image[0], 'post_thumbnail_id' => $post_thumbnail_id );
}

function image_by_attachment( $args = array() ) {
	$attachments = get_children( array( 'post_parent' => $args['post_id'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) );
	if ( empty( $attachments ) )
		return false;
	foreach ( $attachments as $id => $attachment ) {
		if ( ++$i == $args['order_of_image'] ) {
			$image = wp_get_attachment_image_src( $id, $args['default_size'] );
			break;
		}
	}
	return array( 'url' => $image[0] );
}

function image_by_scan( $args = array() ) {
	preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', get_post_field( 'post_content', $args['post_id'] ), $matches );
	if ( isset( $matches ) && $matches[1][0] )
		return array( 'url' => $matches[1][0] );
	return false;
}

function image_by_default( $args = array() ) {
	return array( 'url' => $args['default_image'] );
}

function display_the_image( $args = array(), $image = false ) {
	if ( empty( $image['url'] ) )
		return false;
	extract( $args );
	if ( $width )
		$width = ' width="' . $width . '"';
	if ( $height )
		$height = ' height="' . $height . '"';
	if ( is_array( $custom_key ) ) {
		foreach ( $custom_key as $key )
			$classes[] = str_replace( ' ', '-', strtolower( $key ) );
	}
	$classes[] = $default_size;
	$classes[] = $image_class;
	$class = join( ' ', $classes );
	if ( 'array' == $format )
		return array( 'url' => $image['url'], 'alt' => esc_attr( strip_tags( get_post_field( 'post_title', $post_id ) ) ), 'class' => $class, 'link' => get_permalink( $post_id ) );
	if ( $image['post_thumbnail_id'] )
		do_action( 'begin_fetch_post_thumbnail_html', $post_id, $image['post_thumbnail_id'], $default_size );
	$html = '<img src="' . $image['url'] . '" alt="' . esc_attr( strip_tags( get_post_field( 'post_title', $post_id ) ) ) . '" class="' . $class . '"' . $width . $height . ' />';
	if ( $link_to_post )
		$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
	if ( $image['post_thumbnail_id'] )
		do_action( 'end_fetch_post_thumbnail_html', $post_id, $image['post_thumbnail_id'], $default_size );
	if ( $image['post_thumbnail_id'] )
		$html = apply_filters( 'post_thumbnail_html', $html, $post_id, $image['post_thumbnail_id'], $default_size, $attr );
	return $html;
}

function get_the_image_link( $deprecated = '', $deprecated_2 = '', $deprecated_3 = '' ) {
	get_the_image();
}
?>
