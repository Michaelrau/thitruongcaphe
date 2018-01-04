<?php
/*
Plugin Name: Social Share Floating Icons
Plugin URI : http://www.arrowplugins.com/social-share-floating-icons
Description: Adds social floating icons on your Posts to share your content with style
Author: Arrow Plugins
Author URI: https://profiles.wordpress.org/arrowplugins
Version: 3.0
*/

// create custom plugin settings menu

add_action( 'wp_enqueue_scripts', 'wpsfb_load_custom_wp_admin_style' );
add_action( 'admin_enqueue_scripts', 'wpsfb_load_custom_wp_admin_style' );
add_action('admin_menu', 'wpafi_plugin_create_menu');

function wpsfb_load_custom_wp_admin_style() {

  wp_register_style( 'style_css', plugin_dir_url( __FILE__ )  . 'css/style.css', false, '1.0.0' );
  wp_enqueue_style( 'style_css' );

  wp_register_style( 'hover_css', plugin_dir_url( __FILE__ )  . 'css/hover.css', false, '1.0.0' );
  wp_enqueue_style( 'hover_css' );
  wp_enqueue_script('jquery');
  wp_register_script( 'theme_selection', plugin_dir_url( __FILE__ )  . 'js/theme-selection.js', false, '1.0.0' );
  wp_enqueue_script( 'theme_selection' );

};

function wpafi_plugin_create_menu() {

  add_menu_page('Social Share Floating Icons', 'Social Share Floating Icons', 'administrator', 'wpsfb-options-page', 'wpafi_plugin_settings_page' );
  add_action( 'admin_init', 'wpafi_register_plugin_settings' );

}

function wpafi_register_plugin_settings() {
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-enable-plugin', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-enable-home', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-enable-page', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-enable-floating', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-enable-post', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-facebook', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-twitter', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-google', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-linkedin', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-pinterest', 'wpsfb_sanitize_options' );


  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-floating-option', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-margin-top-value', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-margin-top-type', 'wpsfb_sanitize_options' );

  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-margin-btw-button', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-button-size', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-animation', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-selected-themes', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-posts-option', 'wpsfb_sanitize_options' );
  register_setting( 'wpafi-plugin-settings-group', 'wpsfb-posts-alignment', 'wpsfb_sanitize_options' );




}

function wpsfb_sanitize_options($value){
  $value = stripslashes($value);
  $value = filter_var($value,FILTER_SANITIZE_STRING);
  return $value;
}

register_uninstall_hook( __FILE__, 'wpassfi_delete_options' ); 


function wpssfi_add_icons_home_post($content){
  $ncontent='';
  $tbcontent = '';
  global $post;
  $url = get_permalink($post->ID);
  $url = esc_url($url);
  $tbcontent .='<div id="wpssfi-top-post-div" class="wpssfi-post-div"></div>';
  $ncontent .= '<input id="wpafi-post-id" type="hidden" value="' .$url.'" /><div id="wpsfb-floating-icon-theme"></div><input id="wpsfb-user-selected-facebook" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-twitter" type="hidden" value="'.get_option("wpsfb-twitter").'"/><input id="wpsfb-user-selected-google" type="hidden" value="'.get_option("wpsfb-google").'"/><input id="wpsfb-user-selected-pinterest" type="hidden" value="'.get_option("wpsfb-pinterest").'"/><input id="wpsfb-user-selected-linkedin" type="hidden" value="'.get_option("wpsfb-linkedin").'"/><input id="wpsfb-user-selected-icon" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-theme-value" type="hidden" value="'.get_option("wpsfb-selected-themes").'"/><input id="wpsfb-user-selected-float-value" type="hidden" value="'.get_option("wpsfb-floating-option").'"/><input id="wpsfb-enable-post-selection" type="hidden" value="'.get_option("wpsfb-enable-post").'"/><input id="wpsfb-enable-floating-selection" type="hidden" value="'.get_option("wpsfb-enable-floating").'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option('wpsfb-margin-top-value').'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option('wpsfb-margin-top-type').'"/><input id="wpsfb-user-selected-size-btw-button" type="hidden" value="'.get_option('wpsfb-margin-btw-button').'"/><input id="wpsfb-user-selected-button-size" type="hidden" value="'.get_option('wpsfb-button-size').'"/><input id="wpsfb-user-selected-animation" type="hidden" value="'.get_option('wpsfb-animation').'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option("wpsfb-margin-top-value").'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option("wpsfb-margin-top-type").'"/><input id="wpsfb-posts-option" type="hidden" value="'.get_option("wpsfb-posts-option").'"/>';

  if(get_option('wpsfb-enable-plugin') == 1 && is_home() || is_page() || is_single() || is_front_page()){

   

      if(get_option('wpsfb-posts-option') == 1){

        return $content = $tbcontent .$ncontent .$content;
      }

      if(get_option('wpsfb-posts-option') == 2){
        return $content =$content .$tbcontent . $ncontent;
      }

      if(get_option('wpsfb-posts-option') == 3){
        return $content = $tbcontent .$ncontent .$content. $tbcontent . $ncontent ;
      }
      if(get_option('wpsfb-posts-option') == 0){
        return $content = $ncontent .$content;
      }
    
  }else{
    return $content;
  }


}
 if(get_option('wpsfb-enable-plugin') ){
  add_filter('the_content', 'wpssfi_add_icons_home_post');
 }

 function wpssfi_add_icons_home($content){
  $ncontent='';
  $tbcontent = '';
  global $post;
  $url = get_permalink($post->ID);
  $url = esc_url($url);
  $ncontent .= '<input id="wpafi-post-id" type="hidden" value="' .$url.'" /><div id="wpsfb-floating-icon-theme"></div><input id="wpsfb-user-selected-facebook" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-twitter" type="hidden" value="'.get_option("wpsfb-twitter").'"/><input id="wpsfb-user-selected-google" type="hidden" value="'.get_option("wpsfb-google").'"/><input id="wpsfb-user-selected-pinterest" type="hidden" value="'.get_option("wpsfb-pinterest").'"/><input id="wpsfb-user-selected-linkedin" type="hidden" value="'.get_option("wpsfb-linkedin").'"/><input id="wpsfb-user-selected-icon" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-theme-value" type="hidden" value="'.get_option("wpsfb-selected-themes").'"/><input id="wpsfb-user-selected-float-value" type="hidden" value="'.get_option("wpsfb-floating-option").'"/><input id="wpsfb-enable-post-selection" type="hidden" value="'.get_option("wpsfb-enable-post").'"/><input id="wpsfb-enable-floating-selection" type="hidden" value="'.get_option("wpsfb-enable-floating").'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option('wpsfb-margin-top-value').'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option('wpsfb-margin-top-type').'"/><input id="wpsfb-user-selected-size-btw-button" type="hidden" value="'.get_option('wpsfb-margin-btw-button').'"/><input id="wpsfb-user-selected-button-size" type="hidden" value="'.get_option('wpsfb-button-size').'"/><input id="wpsfb-user-selected-animation" type="hidden" value="'.get_option('wpsfb-animation').'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option("wpsfb-margin-top-value").'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option("wpsfb-margin-top-type").'"/><input id="wpsfb-posts-option" type="hidden" value="'.get_option("wpsfb-posts-option").'"/>';

  if(get_option('wpsfb-enable-plugin') == 1 && is_home() || is_front_page()){

   

      if(get_option('wpsfb-posts-option') == 1){

        return $content = $tbcontent .$ncontent .$content;
      }

      if(get_option('wpsfb-posts-option') == 2){
        return $content =$content .$tbcontent . $ncontent;
      }

      if(get_option('wpsfb-posts-option') == 3){
        return $content = $tbcontent .$ncontent .$content. $tbcontent . $ncontent ;
      }
      if(get_option('wpsfb-posts-option') == 0){
        return $content = $ncontent .$content;
      }
    
  }else{
    return $content;
  }


}
 if(get_option('wpsfb-enable-home') == 1 ){
  add_filter('the_content', 'wpssfi_add_icons_home');
 }


 function wpssfi_add_icons_home_single($content){
  $ncontent='';
  $tbcontent = '';
  global $post;
  $url = get_permalink($post->ID);
  $url = esc_url($url);
  $tbcontent .='<div id="wpssfi-top-post-div" class="wpssfi-post-div"></div>';
  $ncontent .= '<input id="wpafi-post-id" type="hidden" value="' .$url.'" /><div id="wpsfb-floating-icon-theme"></div><input id="wpsfb-user-selected-facebook" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-twitter" type="hidden" value="'.get_option("wpsfb-twitter").'"/><input id="wpsfb-user-selected-google" type="hidden" value="'.get_option("wpsfb-google").'"/><input id="wpsfb-user-selected-pinterest" type="hidden" value="'.get_option("wpsfb-pinterest").'"/><input id="wpsfb-user-selected-linkedin" type="hidden" value="'.get_option("wpsfb-linkedin").'"/><input id="wpsfb-user-selected-icon" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-theme-value" type="hidden" value="'.get_option("wpsfb-selected-themes").'"/><input id="wpsfb-user-selected-float-value" type="hidden" value="'.get_option("wpsfb-floating-option").'"/><input id="wpsfb-enable-post-selection" type="hidden" value="'.get_option("wpsfb-enable-post").'"/><input id="wpsfb-enable-floating-selection" type="hidden" value="'.get_option("wpsfb-enable-floating").'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option('wpsfb-margin-top-value').'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option('wpsfb-margin-top-type').'"/><input id="wpsfb-user-selected-size-btw-button" type="hidden" value="'.get_option('wpsfb-margin-btw-button').'"/><input id="wpsfb-user-selected-button-size" type="hidden" value="'.get_option('wpsfb-button-size').'"/><input id="wpsfb-user-selected-animation" type="hidden" value="'.get_option('wpsfb-animation').'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option("wpsfb-margin-top-value").'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option("wpsfb-margin-top-type").'"/><input id="wpsfb-posts-option" type="hidden" value="'.get_option("wpsfb-posts-option").'"/>';

  if(get_option('wpsfb-enable-plugin') == 1 && is_single()){

   

      if(get_option('wpsfb-posts-option') == 1){

        return $content = $tbcontent .$ncontent .$content;
      }

      if(get_option('wpsfb-posts-option') == 2){
        return $content =$content .$tbcontent . $ncontent;
      }

      if(get_option('wpsfb-posts-option') == 3){
        return $content = $tbcontent .$ncontent .$content. $tbcontent . $ncontent ;
      }
      if(get_option('wpsfb-posts-option') == 0){
        return $content = $ncontent .$content;
      }
    
  }else{
    return $content;
  }


}
 if(get_option('wpsfb-enable-home') == 1 && get_option('wpsfb-enable-post') == 1 ){
  add_filter('the_content', 'wpssfi_add_icons_home_single');
 }

 function wpssfi_add_icons_home_post_single($content){
  $ncontent='';
  $tbcontent = '';
  global $post;
  $url = get_permalink($post->ID);
  $url = esc_url($url);
  $ncontent .= '<input id="wpafi-post-id" type="hidden" value="' .$url.'" /><div id="wpsfb-floating-icon-theme"></div><input id="wpsfb-user-selected-facebook" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-twitter" type="hidden" value="'.get_option("wpsfb-twitter").'"/><input id="wpsfb-user-selected-google" type="hidden" value="'.get_option("wpsfb-google").'"/><input id="wpsfb-user-selected-pinterest" type="hidden" value="'.get_option("wpsfb-pinterest").'"/><input id="wpsfb-user-selected-linkedin" type="hidden" value="'.get_option("wpsfb-linkedin").'"/><input id="wpsfb-user-selected-icon" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-theme-value" type="hidden" value="'.get_option("wpsfb-selected-themes").'"/><input id="wpsfb-user-selected-float-value" type="hidden" value="'.get_option("wpsfb-floating-option").'"/><input id="wpsfb-enable-post-selection" type="hidden" value="'.get_option("wpsfb-enable-post").'"/><input id="wpsfb-enable-floating-selection" type="hidden" value="'.get_option("wpsfb-enable-floating").'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option('wpsfb-margin-top-value').'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option('wpsfb-margin-top-type').'"/><input id="wpsfb-user-selected-size-btw-button" type="hidden" value="'.get_option('wpsfb-margin-btw-button').'"/><input id="wpsfb-user-selected-button-size" type="hidden" value="'.get_option('wpsfb-button-size').'"/><input id="wpsfb-user-selected-animation" type="hidden" value="'.get_option('wpsfb-animation').'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option("wpsfb-margin-top-value").'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option("wpsfb-margin-top-type").'"/><input id="wpsfb-posts-option" type="hidden" value="'.get_option("wpsfb-posts-option").'"/>';

  if(get_option('wpsfb-enable-plugin') == 1 && is_single() ){

   

      if(get_option('wpsfb-posts-option') == 1){

        return $content = $tbcontent .$ncontent .$content;
      }

      if(get_option('wpsfb-posts-option') == 2){
        return $content =$content .$tbcontent . $ncontent;
      }

      if(get_option('wpsfb-posts-option') == 3){
        return $content = $tbcontent .$ncontent .$content. $tbcontent . $ncontent ;
      }
      if(get_option('wpsfb-posts-option') == 0){
        return $content = $ncontent .$content;
      }
    
  }else{
    return $content;
  }


}
 if(get_option('wpsfb-enable-home') == 1 ){
  add_filter('the_content', 'wpssfi_add_icons_home_post_single');
 }

 function wpssfi_add_icons_posts_single($content){
  $ncontent='';
  $tbcontent = '';
  global $post;
  $url = get_permalink($post->ID);
  $url = esc_url($url);
  $tbcontent .='<div id="wpssfi-top-post-div" class="wpssfi-post-div"></div>';
  $ncontent .= '<input id="wpafi-post-id" type="hidden" value="' .$url.'" /><div id="wpsfb-floating-icon-theme"></div><input id="wpsfb-user-selected-facebook" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-twitter" type="hidden" value="'.get_option("wpsfb-twitter").'"/><input id="wpsfb-user-selected-google" type="hidden" value="'.get_option("wpsfb-google").'"/><input id="wpsfb-user-selected-pinterest" type="hidden" value="'.get_option("wpsfb-pinterest").'"/><input id="wpsfb-user-selected-linkedin" type="hidden" value="'.get_option("wpsfb-linkedin").'"/><input id="wpsfb-user-selected-icon" type="hidden" value="'.get_option("wpsfb-facebook").'"/><input id="wpsfb-user-selected-theme-value" type="hidden" value="'.get_option("wpsfb-selected-themes").'"/><input id="wpsfb-user-selected-float-value" type="hidden" value="'.get_option("wpsfb-floating-option").'"/><input id="wpsfb-enable-post-selection" type="hidden" value="'.get_option("wpsfb-enable-post").'"/><input id="wpsfb-enable-floating-selection" type="hidden" value="'.get_option("wpsfb-enable-floating").'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option('wpsfb-margin-top-value').'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option('wpsfb-margin-top-type').'"/><input id="wpsfb-user-selected-size-btw-button" type="hidden" value="'.get_option('wpsfb-margin-btw-button').'"/><input id="wpsfb-user-selected-button-size" type="hidden" value="'.get_option('wpsfb-button-size').'"/><input id="wpsfb-user-selected-animation" type="hidden" value="'.get_option('wpsfb-animation').'"/><input id="wpsfb-user-selected-margin-top-value" type="hidden" value="'.get_option("wpsfb-margin-top-value").'"/><input id="wpsfb-user-selected-margin-top-type" type="hidden" value="'.get_option("wpsfb-margin-top-type").'"/><input id="wpsfb-posts-option" type="hidden" value="'.get_option("wpsfb-posts-option").'"/>';

  if(get_option('wpsfb-enable-plugin') == 1  ){

   

      if(get_option('wpsfb-posts-option') == 1){

        return $content = $tbcontent .$ncontent .$content;
      }

      if(get_option('wpsfb-posts-option') == 2){
        return $content =$content .$tbcontent . $ncontent;
      }

      if(get_option('wpsfb-posts-option') == 3){
        return $content = $tbcontent .$ncontent .$content. $tbcontent . $ncontent ;
      }
      if(get_option('wpsfb-posts-option') == 0){
        return $content = $ncontent .$content;
      }
    
  }else{
    return $content;
  }


}


function wpafi_plugin_settings_page() {
  ?>
  <div>
    <?php settings_errors(); ?>
    <form method="post" action="options.php">
      <?php settings_fields( 'wpafi-plugin-settings-group' ); ?>
      <a style="    margin: 0 auto;
      left: 50%;
      display: block;
      width: 85%;
      text-align: center;" href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" 
      target="_blank"><img width= "66%" style="margin-top:15px;" src="<?php echo plugins_url("images/premium_banner.jpg",__FILE__);?>"/></a>
      <div id="wpssfi-main-container" >
        <div id="wpssfi-settings-header-tab">SOCIAL SHARING SETTINGS</div>
        <div id="wpssfi-settings-tab" style="display:inline-block;">
          <div class="control-group" style="width:255px;margin-top: 23px;">
            <label id="wpssfi-enable-plugin" class="control control--checkbox">Enable/Diable Plugin:
              <input type="checkbox" name="wpsfb-enable-plugin" value="1" <?php checked(1,esc_attr( get_option('wpsfb-enable-plugin'))) ?>/>
              <div id="wpssfi-enable-plugin-control" class="control__indicator"></div>
            </label>
          </div>
          <div class="control-group" style="width:370px;">
            <label id="wpssfi-enable-plugin" class="control control--checkbox">Show/Hide Floating Icons:
              <input type="checkbox" name="wpsfb-enable-floating" value="1" <?php checked(1,esc_attr( get_option('wpsfb-enable-floating'))) ?>/>
              <div id="wpssfi-floating-icons-control" class="control__indicator"></div>
            </label>
          </div>
          <div class="control-group" style="width:625px;">
            <label id="wpssfi-enable-plugin" class="control control--checkbox">Show/Hide Social Icons in Posts:
              <input type="checkbox" name="" value="" />
              <div id="wpssfi-posts-icons-control" class="control__indicator"></div><a href="
http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:119px;">Premium Only</a>
            </label>
          </div>
          <div class="control-group" style="width:625px;">
            <label id="wpssfi-enable-plugin" class="control control--checkbox">Show/Hide Social Icons on Home Page:
              <input type="checkbox" name="" value=""/>
              <div id="wpssfi-posts-icons-control" class="control__indicator"></div><a href="
http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:50px;">Premium Only</a>
            </label>
          </div>
        </div>
        <div id="wpssfi-settings-header-tab">Social Networks</div>
        <div id="wpssfi-settings-tab" style="height:136px;">
          <div id="wpssfi-social-network-selection">
            <div id="wpsssfi-facebook-selection-tab">
              <label for="wpssfi-facebook-selection-cb"><img style="width:50px;" src="<?php echo plugins_url( 'images/t0-facebook.png', __FILE__ ); ?> "/></label><br/>
              <label id="" class="control control--checkbox" >
                <input id="wpssfi-facebook-selection-cb" type="checkbox" name="wpsfb-facebook" value="1"<?php checked(1,esc_attr( get_option('wpsfb-facebook'))) ?>/>
                <div  class="control__indicator wpssfi-social-selection-checkbox"></div>
              </label>
            </div>
            <div id="wpsssfi-twitter-selection-tab">
              <label for="wpssfi-twitter-selection-cb"><img style="width:50px;" src="<?php echo plugins_url( 'images/t0-twitter.png', __FILE__ ); ?> "/></label><br/>
              <label id="" class="control control--checkbox" >
                <input id="wpssfi-twitter-selection-cb" type="checkbox" name="wpsfb-twitter" value="1" <?php checked(1,esc_attr( get_option('wpsfb-twitter'))) ?>/>
                <div  class="control__indicator wpssfi-social-selection-checkbox"></div>
              </label>
            </div>
            <div id="wpsssfi-google-selection-tab">
              <label for="wpssfi-google-selection-cb"><img style="width:50px;" src="<?php echo plugins_url( 'images/t0-google.png', __FILE__ ); ?> "/></label><br/>
              <label id="" class="control control--checkbox" >
                <input id="wpssfi-google-selection-cb" type="checkbox" name="wpsfb-google" value="1" <?php checked(1,esc_attr( get_option('wpsfb-google'))) ?>/>
                <div  class="control__indicator wpssfi-social-selection-checkbox"></div>
              </label>
            </div>
            <div id="wpsssfi-linkedin-selection-tab">
              <label for="wpssfi-linkedin-selection-cb"><img style="width:50px;" src="<?php echo plugins_url( 'images/t0-linkedin.png', __FILE__ ); ?> "/></label><br/>
              <label id="" class="control control--checkbox" >
                <input id="wpssfi-linkedin-selection-cb" type="checkbox" name="wpsfb-linkedin" value="1" <?php checked(1,esc_attr( get_option('wpsfb-linkedin'))) ?>/>
                <div  class="control__indicator wpssfi-social-selection-checkbox"></div>
              </label>
            </div>
            <div id="wpsssfi-pinterest-selection-tab">
              <label for="wpssfi-pinterest-selection-cb"><img style="width:50px;" src="<?php echo plugins_url( 'images/t0-pinterest.png', __FILE__ ); ?> "/></label><br/>
              <label id="" class="control control--checkbox" >
                <input id="wpssfi-pinterest-selection-cb" type="checkbox" name="wpsfb-pinterest" value="1" <?php checked(1,esc_attr( get_option('wpsfb-pinterest'))) ?>/>
                <div  class="control__indicator wpssfi-social-selection-checkbox"></div>
              </label>
            </div>
          </div>

        </div>
        <div id="wpssfi-settings-header-tab">MANAGE LOCATIONS</div>
        <div id="wpssfi-settings-tab" >
          <div id="wpssfi-floating-wrapper">
            <div id="wpssfi-floating-position-selection-tab">
              Floating Icons Position
            </div>
            <div id="wpssfi-floating-position-selection">
              <div id="wpsssfi-float-left-selection-tab">
                <label for="wpssfi-float-left-cb"><img style="" src="<?php echo plugins_url( 'images/float-left.png', __FILE__ ); ?> "/></label><br/>
                <label id="" class="control control--radio" >
                  <input id="wpssfi-float-left-cb" type="radio" name="wpsfb-floating-option" value="2"<?php checked(2,esc_attr( get_option('wpsfb-floating-option'))) ?>/>
                  <div  class="control__indicator wpssfi-floating-selection-checkbox"></div>
                </label>
              </div>
              <div id="wpsssfi-float-right-selection-tab">
                <label for="wpssfi-float-right-cb">
                  <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a>
                <img style="" src="<?php echo plugins_url( 'images/float-right.png', __FILE__ ); ?> "/></label><br/>
                <label id="" class="control control--radio" >
                  <input id="wpssfi-float-right-cb" type="radio" name="" value=""/>
                  <div  class="control__indicator wpssfi-floating-selection-checkbox"></div>
                </label>
              </div>
            </div>
          </div>
          <div id="wpssfi-post-icons-wrapper">
            <div id="wpssfi-post-icons-selection-tab">
              Post Icons Position & Alignment
            </div>
            <div id="wpssfi-post-icons-selection">
              <div id="wpsssfi-top-post-selection-tab">
                <label for="wpssfi-top-post-cb">
<a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a>
                <img style="" src="<?php echo plugins_url( 'images/top-post.png', __FILE__ ); ?> "/></label><br/>
                <label id="" class="control control--radio" >
                  <input id="wpssfi-top-post-cb" type="radio" name=" " value="1" />
                  <div  class="control__indicator wpssfi-floating-selection-checkbox"></div>
                </label>
              </div>
              <div id="wpsssfi-bottom-post-selection-tab">
                <label for="wpssfi-botom-post-cb">
                    <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a>
                <img style="" src="<?php echo plugins_url( 'images/bottom-post.png', __FILE__ ); ?> "/></label><br/>
                <label id="" class="control control--radio" >
                  <input id="wpssfi-botom-post-cb" type="radio" name="" value="2" />
                  <div  class="control__indicator wpssfi-floating-selection-checkbox"></div>
                </label>
              </div>
              <div id="wpsssfi-both-post-selection-tab">
                <label for="wpssfi-both-post-cb">
<a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a>
                <img style="" src="<?php echo plugins_url( 'images/both-post.png', __FILE__ ); ?> "/></label><br/>
                <label id="" class="control control--radio" >
                  <input id="wpssfi-both-post-cb" type="radio" name=" " value="3" />
                  <div  class="control__indicator wpssfi-floating-selection-checkbox"></div>
                </label>
              </div>
            </div>
          </div>

        </div>
        <div id="wpssfi-settings-header-tab">SOCIAL ICON SETTINGS</div>
        <div id="wpssfi-settings-tab" >
          <div id="wpssfi-social-icon-settings-selection">
            <div id="wpsssfi-margin-top-selection-tab">
              <label for="wpssfi-margin-top-tf">
<a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a>
              <img style="" src="<?php echo plugins_url( 'images/margin-top.png', __FILE__ ); ?> "/></label><br/>
              <input id="wpssfi-margin-top-tf" type="text" name="wpsfb-margin-top-value" value="<?php echo get_option('wpsfb-margin-top-value'); ?>"/>
              <input type="radio" name="" value="1" />px 
              <input type="radio" name="" value="2" />%
              <label id="" class="control control--checkbox" >

              </label>
            </div>
            <div id="wpsssfi-margin-between-selection-tab">
              <label for="wpssfi-margin-between-tf">
<a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a>
              <img style="" src="<?php echo plugins_url( 'images/margin-between.png', __FILE__ ); ?> "/></label><br/>
              <input id="wpssfi-margin-between-tf" type="text" name="" value="" />px
              <label id="" class="control control--checkbox" >

              </label>
            </div>
            <div id="wpsssfi-icon-size-selection-tab">
              <label for="wpssfi-icon-size-tf"><img style="" src="<?php echo plugins_url( 'images/icon-size.png', __FILE__ ); ?> "/></label><br/>
              <input id="wpssfi-icon-size-tf" type="text" name="wpsfb-button-size" value="<?php echo get_option('wpsfb-button-size'); ?>"/>px
              <label id="" class="control control--checkbox" >

              </label>
            </div>
          </div>
        </div>

        <div id="wpssfi-settings-header-tab">SOCIAL ICON THEMES</div>
        <div id="wpssfi-themes-settings-tab" >
          <div id="wpssfi-social-icon-themes-selection">

            <div id="theme5-icon-div" class="wpsfb-social-templates">
              <input type="radio" id="wpsfb-badge-radio" class="wpsfb-radio-button" name="wpsfb-selected-themes" value="1" <?php checked(1,esc_attr( get_option('wpsfb-selected-themes'))); ?> >
              <a href="#" class="hvr-push">
                <img id="wpsfb-theme5fb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t1-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-push">
                <img id="wpsfb-badgetwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t1-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-push">
                <img id="wpsfb-badgegoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t1-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-push">
                <img id="wpsfb-badgepin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t1-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-push">
                <img id="wpsfb-badgelinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t1-pinterest.png',__FILE__) ?>">
              </a>
            </div> <!-- end of badge-icon-div -->

            <div id="crystal-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-crystal-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="2" <?php checked(2,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-bounce-in" >
                <img id="wpsfb-crystalfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t2-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-crystaltwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t2-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-crystalgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t2-google.png',__FILE__) ?>">
              </a> 
              <a href="#"class="hvr-bounce-in">
                <img id="wpsfb-crystalfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t2-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-crystallinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t2-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of crystal-icon-div -->

            <div id="default-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-default-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="3" <?php checked(3,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-wobble-horizontal">
                <img id="wpsfb-defaultfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t3-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-horizontal">
                <img id="wpsfb-defaulttwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t3-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-horizontal">
                <img id="wpsfb-defaulgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t3-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-horizontal">
                <img id="wpsfb-defaultpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t3-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-horizontal">
                <img id="wpsfb-defaultlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t3-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of default-icon-div -->

            <div id="glossy-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-glossy-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="4" <?php checked(4,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-wobble-vertical">
                <img id="wpsfb-glossyfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t4-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-vertical">
                <img id="wpsfb-glossytwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t4-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-vertical">
                <img id="wpsfb-glossygoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t4-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-vertical">
                <img id="wpsfb-glossypin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t4-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-vertical">
                <img id="wpsfb-glossylinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t4-pinterest.png',__FILE__) ?>">
              </a>    
            </div> <!-- end of glossy-icon-div -->

            <div id="official-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-official-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="5" <?php checked(5,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-wobble-to-bottom-right">
                <img id="wpsfb-officialfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t5-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-bottom-right">
                <img id="wpsfb-officialtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t5-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-bottom-right">
                <img id="wpsfb-officialgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t5-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-bottom-right">
                <img id="wpsfb-officialpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t5-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-bottom-right">
                <img id="wpsfb-officiallinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t5-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of official-icon-div -->

            <div id="shaded-dark-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-shaded-dark-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="6" <?php checked(6,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-wobble-top">
                <img id="wpsfb-shaded_darkfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t6-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-top">
                <img id="wpsfb-shaded_darktwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t6-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-top">
                <img id="wpsfb-shaded_darkgoogle" class="wpsfb-theme-logo" src="<?php  echo plugins_url('images/t6-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-top">
                <img id="wpsfb-shaded_darkpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t6-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-top">
                <img id="wpsfb-shaded_darklinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t6-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of shaded_dark-icon-div -->

            <div id="shaded_light-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-shaded-light-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="7" <?php checked(7,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-shaded_lightfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t7-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-shaded_lighttwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t7-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-shaded_lightgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t7-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-shaded_lightpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t7-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-shaded_lightlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t7-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of shaded_light-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="8" <?php checked(8,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-buzz-out">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t8-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-buzz-out">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t8-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-buzz-out">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t8-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-buzz-out">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t8-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-buzz-out">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t8-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="9" <?php checked(9,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-grow-shadow">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t9-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-grow-shadow">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t9-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-grow-shadow">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t9-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-grow-shadow">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t9-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-grow-shadow">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t9-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="10" <?php checked(10,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t10-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t10-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t10-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t10-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-skew">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t10-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="11" <?php checked(11,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-bounce-out">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t11-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-out">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t11-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-out">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t11-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-bounce-out">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t11-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-bounce-out">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t11-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="12" <?php checked(12,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t12-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t12-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t12-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t12-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t12-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="13" <?php checked(13,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-grow-rotate">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t13-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-grow-rotate">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t13-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-grow-rotate">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t13-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-grow-rotate">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t13-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-grow-rotate">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t13-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="14" <?php checked(14,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-wobble-to-top-right">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t14-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-top-right">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t14-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-top-right">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t14-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-top-right">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t14-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-wobble-to-top-right">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t14-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="stitched-icon-div" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-stitched-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="15" <?php checked(15,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-stitchedfb" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t15-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-stitchedtwitter" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t15-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-stitchedgoogle" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t15-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-stitchedpin" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t15-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-stitchedlinked" class="wpsfb-theme-logo" src="<?php echo plugins_url('images/t15-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of stitched-icon-div -->

            <div id="theme16" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-theme-16-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="16" <?php checked(16,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t16fb" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t16-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t16twitter" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t16-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t16google" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t16-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t16linkedin" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t16-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t16pinterest" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t16-pinterest.png',__FILE__) ?>">
              </a> 

            </div> <!-- end of theme 16 -->

            <div id="theme17" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-theme-17-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="17" <?php checked(17,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t17fb" class="wpsfb-theme-logo hvr-buzz-out" src="<?php echo plugins_url('images/t17-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t17twitter" class="wpsfb-theme-logo hvr-buzz-out" src="<?php echo plugins_url('images/t17-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t17google" class="wpsfb-theme-logo hvr-buzz-out" src="<?php echo plugins_url('images/t17-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t17linkedin" class="wpsfb-theme-logo hvr-buzz-out" src="<?php echo plugins_url('images/t17-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t17pinterest" class="wpsfb-theme-logo hvr-buzz-out" src="<?php echo plugins_url('images/t17-pinterest.png',__FILE__) ?>">
              </a> 

            </div> <!-- end of theme 17 -->

            <div id="theme18" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-theme-18-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="18" <?php checked(18,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-t18fb" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t18-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-t18twitter" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t18-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-t18google" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t18-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-t18linkedin" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t18-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-bounce-in">
                <img id="wpsfb-t18pinterest" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t18-pinterest.png',__FILE__) ?>">
              </a> 

            </div> <!-- end of theme 18 -->

            <div id="theme19" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-theme-19-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="19" <?php checked(19,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-pop">
                <img id="wpsfb-t19fb" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t19-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-pop">
                <img id="wpsfb-t19twitter" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t19-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-pop">
                <img id="wpsfb-t19google" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t19-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-pop">
                <img id="wpsfb-t19linkedin" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t19-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-pop">
                <img id="wpsfb-t19pinterest" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t19-pinterest.png',__FILE__) ?>">
              </a> 

            </div> <!-- end of theme 19 -->

            <div id="theme20" class="wpsfb-social-templates">
            <a href="http://sites.fastspring.com/arrowplugins/product/socialsharefloatingicons" style="margin-left:0;">Premium Only</a><br/>
              <input type="radio" id="wpsfb-theme-20-radio" class="wpsfb-radio-button" disabled="disabled" name=" " value="20" <?php checked(20,esc_attr( get_option(' '))); ?> > 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t20fb" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t20-facebook.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t20twitter" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t20-twitter.png',__FILE__); ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t20google" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t20-google.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t20linkedin" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t20-linkedin.png',__FILE__) ?>">
              </a> 
              <a href="#" class="hvr-rotate">
                <img id="wpsfb-t20pinterest" class="wpsfb-theme-logo wpafi-rotate" src="<?php echo plugins_url('images/t20-pinterest.png',__FILE__) ?>">
              </a> 
            </div> <!-- end of theme 20 -->
          </div>
        </div>
        <p class="submit">
          <input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>" />
        </p>
      </form>
    </div>
  </div>
  <script type="text/javascript">
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
      }
    }
  </script>


  <?php 

  function wpassfi_delete_options(){
    delete_option('wpsocial-wpsfb-facebook');
    delete_option('wpsocial-wpsfb-twitter');
    delete_option('wpsocial-wpsfb-google');
    delete_option('wpsocial-wpsfb-linkedin');
    delete_option('wpsocial-wpsfb-pinterest');
    delete_option('wpsocial-psfb-floating-option');
    delete_option('wpsocial-wpsfb-margin-top-value');
    delete_option('wpsocial-wpsfb-margin-top-type');
    delete_option('wpsocial-wpsfb-margin-btw-button');
    delete_option('wpsocial-wpsfb-button-size');
    delete_option('wpsocial-wpsfb-animation');
    delete_option('wpsocial-wpsfb-selected-themes');
  }
} 
?>