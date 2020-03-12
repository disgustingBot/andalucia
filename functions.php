<?php


// DNS VIEJOS
// dns49.servidoresdns.net
// 217.76.128.165

// dns50.servidoresdns.net
// 82.223.218.165


require_once 'customPosts.php';

function lattte_setup(){
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
  wp_enqueue_script('main', get_theme_file_uri('/js/custom.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'lattte_setup');

// Adding Theme Support

function gp_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
  // add_theme_support( 'woocommerce' );
  // add_theme_support( 'wc-product-gallery-zoom' );
  // add_theme_support( 'wc-product-gallery-lightbox' );
  // add_theme_support( 'wc-product-gallery-slider' );
}
add_action('after_setup_theme', 'gp_init');
















// this removes the "Archive" word from the archive title in the archive page
add_filter('get_the_archive_title',function($title){
  if(is_category()){$title=single_cat_title('',false);
  }elseif(is_tag()){$title=single_tag_title('',false);
  }elseif(is_author()){$title='<span class="vcard">'.get_the_author().'</span>';
  }return $title;
});






function excerpt($charNumber){
  if(!$charNumber){$charNumber=1000000;}
  $excerpt = get_the_excerpt();
  if(strlen($excerpt)<=$charNumber){return $excerpt;}else{
    $excerpt = substr($excerpt, 0, $charNumber);
    $result  = substr($excerpt, 0, strrpos($excerpt, ' '));
    // $result .= $result . '(...)';
    // return var_dump($excerpt);
    return $result;
  }
}









 function register_menus() {
   // register_nav_menu('navBar',__( 'Header' ));
   // register_nav_menu('navBarMobile',__( 'Header Mobile' ));
   // register_nav_menu('contactMenu',__( 'Contact Menu' ));
   add_post_type_support( 'page', 'excerpt' );
 }
 add_action( 'init', 'register_menus' );


















 // add_action(        'admin_post_lt_form_response', 'lt_form_handler');
 // add_action( 'admin_post_nopriv_lt_form_response', 'lt_form_handler');
 add_action(        'admin_post_lt_form_handler', 'lt_form_handler');
 add_action( 'admin_post_nopriv_lt_form_handler', 'lt_form_handler');
 function lt_form_handler() {
   $link=$_POST['link'];
   // $mail=$_POST['mail'];
   $mail='molinerozadkiel@gmail.com';

   $subject='Form from '.$link;
   $message='';

   if(isset($_POST['a01'])){$a01=$_POST['a01'];$message=$message.'<strong>Data 01:</strong> '.$a01.' - </br>';}
   if(isset($_POST['a02'])){$a02=$_POST['a02'];$message=$message.'<strong>Data 02:</strong> '.$a02.' - </br>';}
   if(isset($_POST['a03'])){$a03=$_POST['a03'];$message=$message.'<strong>Data 03:</strong> '.$a03.' - </br>';}
   if(isset($_POST['a04'])){$a04=$_POST['a04'];$message=$message.'<strong>Data 04:</strong> '.$a04.' - </br>';}
   if(isset($_POST['a05'])){$a05=$_POST['a05'];$message=$message.'<strong>Data 05:</strong> '.$a05.' - </br>';}
   if(isset($_POST['a06'])){$a06=$_POST['a06'];$message=$message.'<strong>Data 06:</strong> '.$a06.' - </br>';}
   if(isset($_POST['a07'])){$a07=$_POST['a07'];$message=$message.'<strong>Data 07:</strong> '.$a07.' - </br>';}
   if(isset($_POST['a08'])){$a08=$_POST['a08'];$message=$message.'<strong>Data 08:</strong> '.$a08.' - </br>';}
   if(isset($_POST['a09'])){$a09=$_POST['a09'];$message=$message.'<strong>Data 09:</strong> '.$a09.' - </br>';}
   if(isset($_POST['a10'])){$a10=$_POST['a10'];$message=$message.'<strong>Data 10:</strong> '.$a10.' - </br>';}
   if(isset($_POST['a11'])){$a11=$_POST['a11'];$message=$message.'<strong>Data 11:</strong> '.$a11.' - </br>';}
   if(isset($_POST['a12'])){$a12=$_POST['a12'];$message=$message.'<strong>Data 12:</strong> '.$a12.' - </br>';}
   if(isset($_POST['a13'])){$a13=$_POST['a13'];$message=$message.'<strong>Data 13:</strong> '.$a13.' - </br>';}
   if(isset($_POST['a14'])){$a14=$_POST['a14'];$message=$message.'<strong>Data 14:</strong> '.$a14.' - </br>';}
   if(isset($_POST['a15'])){$a15=$_POST['a15'];$message=$message.'<strong>Data 15:</strong> '.$a15.' - </br>';}
   if(isset($_POST['a16'])){$a16=$_POST['a16'];$message=$message.'<strong>Data 16:</strong> '.$a16.' - </br>';}
   if(isset($_POST['a17'])){$a17=$_POST['a17'];$message=$message.'<strong>Data 17:</strong> '.$a17.' - </br>';}
   if(isset($_POST['a18'])){$a18=$_POST['a18'];$message=$message.'<strong>Data 18:</strong> '.$a18.' - </br>';}
   if(isset($_POST['a19'])){$a19=$_POST['a19'];$message=$message.'<strong>Data 19:</strong> '.$a19.' - </br>';}
   if(isset($_POST['a20'])){$a20=$_POST['a20'];$message=$message.'<strong>Data 20:</strong> '.$a20.' - </br>';}


  // echo $message;


  // $cosa = var_dump(wp_mail( $mail , $subject , $message ));
  if (wp_mail( $mail , $subject , $message )) {
    // code...
       $link = add_query_arg( array(
         'email' => 'sent',
         // 'status' => $status,
         // 'resultado' => username_exists( $mail ),
       ), $link );
  } else {

       $link = add_query_arg( array(
         'email' => 'error',
         // 'status' => $status,
         // 'resultado' => username_exists( $mail ),
       ), $link );
  }
   // wp_mail( $mail , $subject , $message );


   // $a2 = $_POST['a2'];
   // $a3 = $_POST['a3'];
   // $a4 = $_POST['a4'];
   // $a5 = $_POST['a5'];
   // $a6 = $_POST['a6'];

   // $link = add_query_arg( array(
   //   'email' => 'sent',
   //   // 'status' => $status,
   //   // 'resultado' => username_exists( $mail ),
   // ), $link );



   wp_redirect($link);
 }

 // show wp_mail() errors
 // add_action( 'wp_mail_failed', 'onMailError', 10, 1 );
 // function onMailError( $wp_error ) {
 //     echo "<pre>";
 //     print_r($wp_error);
 //     echo "</pre>";
 // }

 function wpse27856_set_content_type(){
     return "text/html";
 }
 add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );

 // add_action( 'phpmailer_init', 'my_phpmailer_example' );
 // function my_phpmailer_example( $phpmailer ) {
 //     $phpmailer->isSMTP();
 //     //$phpmailer->Host = 'smtp.example.com';
 //     //    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
 //     $phpmailer->Port = 25;
 //     $phpmailer->Host = gethostbyname('mail.idemomotors.com'); // Specify main and backup SMTP servers
 //     $phpmailer->SMTPAuth = true;                              // Enable SMTP authentication
 //        $phpmailer->Username = 'info@workshopandalucia.com';
 //        $phpmailer->Password = 'n9dc3KCWUO';
 //
 //     // Additional settings…
 //     //$phpmailer->SMTPSecure = "tls"; // Choose SSL or TLS, if necessary for your server
 //     $phpmailer->setFrom( "info@workshopandalucia.com", "Info Test" );
 //     $phpmailer->addAddress( "molinerozadkiel@gmail.com", "Your name" );
 //     $phpmailer->Subject    = "Testing PHPMailer";
 //     $phpmailer->Body     = "Hurray! \n\n Great.";
 //     if( !$phpmailer->send() ) {
 //         echo "Mailer Error: " . $phpmailer->ErrorInfo;
 //     } else {
 //         echo "Message sent!";
 //     }
 //
 // }


















// FUCTION FOR USER GENERATION
// https://tommcfarlin.com/create-a-user-in-wordpress/
add_action( 'admin_post_nopriv_lt_login', 'lt_login');
add_action(        'admin_post_lt_login', 'lt_login');
function lt_login(){
  $link=$_POST['link'];
  $name=$_POST['name'];
  $fono=$_POST['fono'];
  $mail=$_POST['mail'];
  $pass=$_POST['pass'];


  if( null == username_exists( $mail ) ) {

    // Generate the password and create the user for security
    // $password = wp_generate_password( 12, false );
    // $user_id = wp_create_user( $mail, $password, $mail );

    // user generated pass for local testing
    $user_id = wp_create_user( $mail, $pass, $mail );
    // Set the nickname and display_name
    wp_update_user(
      array(
        'ID'              =>    $user_id,
        'display_name'    =>    $name,
        'nickname'        =>    $name,
      )
    );
    update_user_meta( $user_id, 'phone', $fono );


    // Set the role
    $user = new WP_User( $user_id );
    $user->set_role( 'subscriber' );

    // Email the user
    wp_mail( $mail, 'Welcome '.$name.'!', 'Your Password: ' . $pass );
  // end if
  $action='register';
  $creds = array(
      'user_login'    => $mail,
      'user_password' => $pass,
      'remember'      => true
  );

  $status = wp_signon( $creds, false );
} else {

  $creds = array(
      'user_login'    => $mail,
      'user_password' => $pass,
      'remember'      => true
  );

  $status = wp_signon( $creds, false );

  // $status=wp_login($mail, $pass);

  $action='login';
}

  $link = add_query_arg( array(
    'action' => $action,
    // 'status' => $status,
    // 'resultado' => username_exists( $mail ),
  ), $link );
  wp_redirect($link);
}
















add_action( 'admin_post_nopriv_lt_new_pass', 'lt_new_pass');
add_action(        'admin_post_lt_new_pass', 'lt_new_pass');
function lt_new_pass(){
  $link=$_POST['link'];
  $oldp=$_POST['oldp'];
  $newp=$_POST['newp'];
  $cnfp=$_POST['cnfp'];



  // if(isset($_POST['current_password'])){
  if(isset($_POST['oldp'])){
    $_POST = array_map('stripslashes_deep', $_POST);
    $current_password = sanitize_text_field($_POST['oldp']);
    $new_password = sanitize_text_field($_POST['newp']);
    $confirm_new_password = sanitize_text_field($_POST['cnfp']);
    $user_id = get_current_user_id();
    $errors = array();
    $current_user = get_user_by('id', $user_id);
  }

  $link = add_query_arg( array(
    'action' => $action,
  ), $link );
  // Check for errors
  if($current_user && wp_check_password($current_password, $current_user->data->user_pass, $current_user->ID)){
  //match
  } else {
    $errors[] = 'Password is incorrect';

    $link = add_query_arg( array(
      'pass'  => 'incorrect',
    ), $link );
  }
  if($new_password != $confirm_new_password){
    $errors[] = 'Password does not match';

    $link = add_query_arg( array(
      'match'  => 'no',
    ), $link );
  }
  if(empty($errors)){
      wp_set_password( $new_password, $current_user->ID );
      $link = add_query_arg( array(
        'success'  => true,
      ), $link );
  }
  wp_redirect($link);
}










































//Second solution : two or more files.
//If you're using a child theme you could use:
// get_stylesheet_directory_uri() instead of get_template_directory_uri()
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
  // wp_enqueue_style( 'admin_css_foo', get_template_directory_uri() . '/css/backoffice.css', false, '1.0.0' );
}
