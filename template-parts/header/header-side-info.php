<?php 

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package biddut
   */

    $header_side_logo = get_theme_mod( 'header_side_logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );

    // Contacts Text 
    $header_side_contacts_text = get_theme_mod( 'header_side_contacts_text', __( 'CONTACT US', 'biddut' ) );

    $header_side_update_text = get_theme_mod( 'header_side_get_uPdate_text', __( 'Get Update', 'biddut' ) );

    $header_side_mailchimp = get_theme_mod( 'header_side_get_mailchimp', __( '', 'biddut' ) );

    // Contacts Text 
    $header_side_contacts_text = get_theme_mod( 'header_side_contacts_text', __( 'CONTACT US', 'biddut' ) );
   // Email id 
   $header_top_email = get_theme_mod( 'header_email', __( 'biddut@support.com', 'biddut' ) );

   // Phone Number
   $header_top_phone = get_theme_mod( 'header_phone', __( '+8801310-069824', 'biddut' ) );

   // Header Address Text
   $header_top_address_text = get_theme_mod( 'header_address', __( '734 H, Bryan Burlington, NC 27215', 'biddut' ) );

   // Header Address Link
   $header_top_address_link = get_theme_mod( 'header_address_link', __( 'https://www.google.com/maps/@36.0758266,-79.4558848,17z', 'biddut' ) );


   //Offcanvas About Us
   $offcanvas_about_us = get_theme_mod( 'header_top_offcanvas_textarea', __( 'Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .', 'biddut' ) );

    // footer area links  switch
    $header_side_info_switch_text = get_theme_mod( 'header_side_info_switch_text', false );
    $header_side_info_switch_contact = get_theme_mod( 'header_side_info_switch_text', false );
    $header_side_info_switch_getupdate = get_theme_mod( 'header_side_info_switch_text', false );
    $header_side_info_switch_social = get_theme_mod( 'header_side_info_switch_text', false );

?>

   <!-- tp-offcanvus-area-start -->    
   <div class="tpoffcanvas">
      <div class="row">
         <div class="col-6">
               <div class="tpoffcanvas__close-btn">
                  <button class="close-btn"><i class="fal fa-times"></i></button>
               </div>
         </div>
         <div class="col-6">
               <div class="tpoffcanvas__logo">                  
                  <a href="<?php print esc_url('/');?>">               
                     <img src="<?php echo esc_url($header_side_logo);?>" alt="<?php echo esc_attr($header_side_logo);?>">
                  </a>
               </div>
         </div>
      </div>      
         
      <div class="tpoffcanvas__content">

         <?php if(!empty($header_side_info_switch_text)): ?>
            <div class="tpoffcanvas__title">
               <p><?php echo esc_html($offcanvas_about_us); ?></p>
            </div>
         <?php endif  ?>         

         <div class="header__nav tp-main-menu-mobile d-xl-none mt-4">                    
               <nav></nav>                    
         </div>

         <div class="tpoffcanvas__contact-info">
               <div class="tpoffcanvas__contact-title">
                  <h5><?php echo esc_html( $header_side_contacts_text);?></h5>
               </div>
               <ul>

               <?php if(!empty($header_top_address_text)): ?>
                  <li>
                     <i class="fa-light fa-location-dot"></i>
                     <a href="<?php echo esc_attr($header_top_address_link);?>" target="_blank"><?php echo esc_html($header_top_address_text);?></a>                     
                  </li>
               <?php endif  ?>
               <?php if(!empty($header_top_email)): ?>
                  <li>
                     <i class="fas fa-envelope"></i>
                     <a href="mailto:<?php echo esc_attr($header_top_email);?>"><?php echo esc_html($header_top_email); ?></a>
                  </li>
               <?php endif  ?>
               <?php if(!empty($header_top_phone)): ?>
                  <li>
                     <i class="fal fa-phone-alt"></i>
                     <a href="tel:<?php echo esc_attr($header_top_phone);?>"><?php echo esc_html($header_top_phone);?></a>
                  </li>
               <?php endif  ?>
               </ul>
         </div>
         <div class="tpoffcanvas__input">
               <div class="tpoffcanvas__input-title">
                  <h4><?php echo esc_html($header_side_update_text);?></h4>
               </div>
               <form action="#">
                  <div class="p-relative"> 
                     <?php if(!empty($header_side_mailchimp)): ?>
                        <?php echo do_shortcode($header_side_mailchimp); ?>
                     <?php else: ?>
                        <p><?php echo esc_html('Please Enter your shortcode') ?></p>
                     <?php endif  ?>
                  </div>
               </form>
         </div>         
         <div class="tpoffcanvas__social">
               <div class="social-icon">
                  <?php sifa_header_side_info_social_profiles() ?>
               </div>
         </div>                 
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->