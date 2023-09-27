<?php
//add This  to  menu  section or  plugin section with admin_menu  hooks
add_menu_page( 'My Plugin Options', 'docs Management', 'view_custom_menu', 'documents', 'buyer_page_lead','',4 );
  ?>
<?php
//add This  to   functions.php
global $wp_roles; 
  $wp_roles->add_cap( 'administrator', 'view_custom_menu' ); 
  $wp_roles->add_cap( 'subscriber', 'view_custom_menu' );

?>
