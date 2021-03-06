<?php
/**
 * @package argcom
 * @since 1.0
 */
function argcom_login_logo() { ?>
  <style type="text/css">
  body.login div#login h1 a {
    background-image: none, url("<?php echo get_stylesheet_directory_uri(); ?>/img/logo-login.svg");
    background-size: 320px 80px;
    background-position: center top;
    background-repeat: no-repeat;
    color: #999;
    height: 80px;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.3em;
    margin: 0 auto 25px;
    padding: 0;
    text-decoration: none;
    width: 320px;
    text-indent: -9999px;
    outline: 0 none;
    overflow: hidden;
    display: block;
  }
  body.login {
    background: #f1f1f1;
  }
  
  .login form {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'argcom_login_logo' );

function argcom_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'argcom_login_logo_url' );

function argcom_login_logo_url_title() {
  return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'argcom_login_logo_url_title' );
