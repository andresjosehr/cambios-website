<?php

/*************************************************************************/
/*** FUNCTIONS **********************************************************/
/***********************************************************************/

/*
 * Clean a string from spaces and special characters, it will also lowercase the string.
 * http://stackoverflow.com/questions/14114411/remove-all-special-characters-from-a-string
*/
function slugify($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $string)); // Removes special chars.
}

/**
* Singularize a string.
* Converts a word to english singular form.
*
* Usage example:
* {singularize "people"} # person
* https://gist.github.com/pemcconnell/9757549#file-singularize-php-L2
*/
function singularize ($params)
{
    if (is_string($params))
    {
        $word = $params;
    } else if (!$word = $params['word']) {
        return false;
    }
    $singular = array (
        '/(quiz)zes$/i' => '\\1',
        '/(matr)ices$/i' => '\\1ix',
        '/(vert|ind)ices$/i' => '\\1ex',
        '/^(ox)en/i' => '\\1',
        '/(alias|status)es$/i' => '\\1',
        '/([octop|vir])i$/i' => '\\1us',
        '/(cris|ax|test)es$/i' => '\\1is',
        '/(shoe)s$/i' => '\\1',
        '/(o)es$/i' => '\\1',
        '/(bus)es$/i' => '\\1',
        '/([m|l])ice$/i' => '\\1ouse',
        '/(x|ch|ss|sh)es$/i' => '\\1',
        '/(m)ovies$/i' => '\\1ovie',
        '/(s)eries$/i' => '\\1eries',
        '/([^aeiouy]|qu)ies$/i' => '\\1y',
        '/([lr])ves$/i' => '\\1f',
        '/(tive)s$/i' => '\\1',
        '/(hive)s$/i' => '\\1',
        '/([^f])ves$/i' => '\\1fe',
        '/(^analy)ses$/i' => '\\1sis',
        '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
        '/([ti])a$/i' => '\\1um',
        '/(n)ews$/i' => '\\1ews',
        '/s$/i' => ''
    );
    $irregular = array(
        'person' => 'people',
        'man' => 'men',
        'child' => 'children',
        'sex' => 'sexes',
        'move' => 'moves'
    );
    $ignore = array(
        'equipment',
        'information',
        'rice',
        'money',
        'species',
        'series',
        'fish',
        'sheep',
        'press',
        'sms',
    );
    $lower_word = strtolower($word);
    foreach ($ignore as $ignore_word)
    {
        if (substr($lower_word, (-1 * strlen($ignore_word))) == $ignore_word)
        {
            return $word;
        }
    }
    foreach ($irregular as $singular_word => $plural_word)
    {
        if (preg_match('/('.$plural_word.')$/i', $word, $arr))
        {
            return preg_replace('/('.$plural_word.')$/i', substr($arr[0],0,1).substr($singular_word,1), $word);
        }
    }
    foreach ($singular as $rule => $replacement)
    {
        if (preg_match($rule, $word))
        {
            return preg_replace($rule, $replacement, $word);
        }
    }
    return $word;
}

// 
function assets_path( $image_name ) {
	echo get_bloginfo('template_directory') . "/assets/" . $image_name;
}

// Register scripts and stylesheets
function scriptsAndStyles() {
  if (!is_admin()) {
	  // Set the path to where scripts and styles dirs are, if you must.
	  $scriptsDir = get_bloginfo('template_url') . "/js";

	  // Register the javascript files
												//Handle            SOURCE            DEP   VER  FOOTER?
		wp_register_script( 'Scripts', $scriptsDir. '/scripts.min.js', null, 1, true);


	  //load the scripts
	  wp_enqueue_script('Scripts');
  }
}

// 2. Custom login form
function customLogin() {
	$files = '<link rel="stylesheet" media="all" href="'.get_bloginfo('template_directory').'/css/login.css" />
	          <script src="'.get_bloginfo('template_directory').'/js/login.js"></script>';
	echo $files;
}

function customLoginUrl() {
	return get_bloginfo('url');
}

function customLoginTitle() {
	return get_bloginfo('blogname');
}

// Retrieve Featured image URL
function featured_image ($postID) {
  $imageURL = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
  $img_url = "";

  if ( !is_null( $imageURL[0] ) ) {
    $img_url = $imageURL[0];
  } else {
    $img_url = assets_path("post_placeholder.png");
  }
  echo $img_url;
}
function get_featured_image ($postID) {
  $imageURL = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
  $img_url = "";

  if ( !is_null( $imageURL[0] ) ) {
    $img_url = $imageURL[0];
  } else {
    $img_url = assets_path("post_placeholder.png");
  }
  return $img_url;
}
/*************************************************************************/
/*** THEME FEATURES *****************************************************/
/***********************************************************************/


// 1. Custom menu support
function customMainMenu() {
  register_nav_menus(
    array(
            'main-menu' => ( 'Main Menu' ),
            'blog-menu' => ( 'Blog Menu' )
         )
  );
}


// 2. Register Sidebar
if ( function_exists('register_sidebar')) {

	//Sidebar Principal
	register_sidebar(array(
	  'name' => 'Sidebar principal',
	  'id' => 'sidebar-principal',
	  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	  'after_widget' => '</li>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	));
}

// 4. Custom Markup for WordPress galleries

/*
* In order to enable this first uncomment the function below,
* next go to the "REMOVING ACTIONS" section and uncomment "remove_shortcode('gallery', 'gallery_shortcode');",
* finally go to the "ADDING SHORTCODES" section and uncomment "add_shortcode('gallery', 'myGalleryShortcode');"
* thats all you're ready to go.
*
* This code will make all galleries in you WordPress installation be generated like this:
*
* <div id='$selector' class='gallery galleryid-{$id}'>
* 	<div class='gallery-item'>
*			<a href=""><img src=""></a>
*		</div>
* </div>
*/

/* function myGalleryShortcode($attr) {
	$post = get_post();

	static $instance = 0;
	$instance++;

	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) )
			$attr['orderby'] = 'post__in';
		$attr['include'] = $attr['ids'];
	}

	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters('post_gallery', '', $attr);
	if ( $output != '' )
		return $output;

	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}

	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post->ID,
		'itemtag'    => 'div',
		'icontag'    => 'span',
		'captiontag' => 'span',
		'columns'    => 1,
		'size'       => 'full',
		'include'    => '',
		'exclude'    => ''
	), $attr));

	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';

	if ( !empty($include) ) {
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) )
		return '';

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$columns = intval($columns);
	//$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';

	$selector = "gallery-{$instance}";

	$gallery_style = $gallery_div = '';
	if ( apply_filters( 'use_default_gallery_style', true ) )
		$gallery_style = "";
	$size_class = sanitize_html_class( $size );
	$gallery_div = "<div id='$selector' class='gallery galleryid-{$id}'>";
	$output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );

	$i = 0;
	foreach ( $attachments as $id => $attachment ) {
		$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, false, false);

		$output .= "<{$itemtag} class='gallery-item'>";
		$output .= "$link";
		if ( $captiontag && trim($attachment->post_excerpt) ) {
			$output .= "
				<{$captiontag} class='wp-caption-text gallery-caption'>
				" . wptexturize($attachment->post_excerpt) . "
				</{$captiontag}>";
		}
		$output .= "</{$itemtag}>";
		if ( $columns > 0 && ++$i % $columns == 0 )
			$output .= '';
	}

	$output .= "
		</div>\n";

	return $output;
}
*/

/*************************************************************************/
/*** REMOVING ACTIONS ***************************************************/
/***********************************************************************/

remove_action('wp_head', 'wp_generator');
// remove_shortcode('gallery', 'gallery_shortcode');

/*************************************************************************/
/*** ADDING ACTIONS *****************************************************/
/***********************************************************************/

add_action( 'init', 'customMainMenu' );
add_action('login_head', 'customLogin');
add_action( 'wp_head', 'scriptsAndStyles', 0);

/*************************************************************************/
/*** ADDING SHORCODES ***************************************************/
/***********************************************************************/
// add_shortcode('gallery', 'myGalleryShortcode');

/*************************************************************************/
/*** ADDING FILTERS *****************************************************/
/***********************************************************************/

add_filter('login_headerurl', 'customLoginUrl');
add_filter('login_headertitle', 'customLoginTitle');

/*************************************************************************/
/*** ADDING THEME SUPPORT ***********************************************/
/***********************************************************************/
add_theme_support( 'post-thumbnails' );

add_filter( 'upload_mimes', 'custom_upload_mimes' );
function custom_upload_mimes( $existing_mimes = array() ) {
	// Add the file extension to the array
	$existing_mimes['svg'] = 'image/svg+xml';
	return $existing_mimes;
}


