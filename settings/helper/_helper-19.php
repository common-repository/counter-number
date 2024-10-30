<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`      
        
        #con_6310_box_radius,
        #con_6310_border_size,
        #con_6310_border_color,
        #con_6310_border_hover_color,
        #con_6310_box_background_color,
        #con_6310_box_background_hover_color,
        #con_6310_box_shadow_width,
        #con_6310_box_shadow_blur,
        #con_6310_box_shadow_color,
        #con_6310_box_shadow_hover_color,
        #con_6310_1st_gradient_color_left,
        #con_6310_1st_gradient_color_right,
        #con_6310_2nd_gradient_color_left,
        #con_6310_2nd_gradient_color_right,
        #con_6310_3rd_gradient_color_left,
        #con_6310_3rd_gradient_color_right,
        #con_6310_4th_gradient_color_left,
        #con_6310_4th_gradient_color_right,
        #con_6310_5th_gradient_color_left,
        #con_6310_5th_gradient_color_right,
        #con_6310_6th_gradient_color_left,
        #con_6310_6th_gradient_color_right,

        #con_6310_icon_font_size,
        #con_6310_icon_color,
        #con_6310_icon_hover_color,
        #con_6310_icon_margin_top,
        #con_6310_icon_margin_bottom,
        #con_6310_icon_border_radius,
        #con_6310_icon_border_width,
        #con_6310_icon_border_color,
        #con_6310_icon_border_hover_color
     
      `).on('change', function() {

        var con_6310_box_radius = parseInt(jQuery('#con_6310_box_radius').val());
        var con_6310_border_size = parseInt(jQuery('#con_6310_border_size').val());
        var con_6310_border_color = jQuery('#con_6310_border_color').val();
        var con_6310_border_hover_color = jQuery('#con_6310_border_hover_color').val();
        var con_6310_box_background_color = jQuery('#con_6310_box_background_color').val();
        var con_6310_box_background_hover_color = jQuery('#con_6310_box_background_hover_color').val();
        var con_6310_box_shadow_width = parseInt(jQuery('#con_6310_box_shadow_width').val());
        var con_6310_box_shadow_blur = parseInt(jQuery('#con_6310_box_shadow_blur').val());
        var con_6310_box_shadow_color = jQuery('#con_6310_box_shadow_color').val();
        var con_6310_box_shadow_hover_color = jQuery('#con_6310_box_shadow_hover_color').val();
        var con_6310_1st_gradient_color_left = jQuery('#con_6310_1st_gradient_color_left').val();
        var con_6310_1st_gradient_color_right = jQuery('#con_6310_1st_gradient_color_right').val();
        var con_6310_2nd_gradient_color_left = jQuery('#con_6310_2nd_gradient_color_left').val();
        var con_6310_2nd_gradient_color_right = jQuery('#con_6310_2nd_gradient_color_right').val();
        var con_6310_3rd_gradient_color_left = jQuery('#con_6310_3rd_gradient_color_left').val();
        var con_6310_3rd_gradient_color_right = jQuery('#con_6310_3rd_gradient_color_right').val();
        var con_6310_4th_gradient_color_left = jQuery('#con_6310_4th_gradient_color_left').val();
        var con_6310_4th_gradient_color_right = jQuery('#con_6310_4th_gradient_color_right').val();
        var con_6310_5th_gradient_color_left = jQuery('#con_6310_5th_gradient_color_left').val();
        var con_6310_5th_gradient_color_right = jQuery('#con_6310_5th_gradient_color_right').val();
        var con_6310_6th_gradient_color_left = jQuery('#con_6310_6th_gradient_color_left').val();
        var con_6310_6th_gradient_color_right = jQuery('#con_6310_6th_gradient_color_right').val();


        var con_6310_icon_font_size = parseInt(jQuery('#con_6310_icon_font_size').val());
        var con_6310_icon_color = jQuery('#con_6310_icon_color').val();
        var con_6310_icon_hover_color = jQuery('#con_6310_icon_hover_color').val();
        var con_6310_icon_margin_top = parseInt(jQuery('#con_6310_icon_margin_top').val());
        var con_6310_icon_margin_bottom = parseInt(jQuery('#con_6310_icon_margin_bottom').val());
        var con_6310_icon_border_radius = parseInt(jQuery('#con_6310_icon_border_radius').val());
        var con_6310_icon_border_width = parseInt(jQuery('#con_6310_icon_border_width').val());
        var con_6310_icon_border_color = jQuery('#con_6310_icon_border_color').val();
        var con_6310_icon_border_hover_color = jQuery('#con_6310_icon_border_hover_color').val();



        

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."{
          background-color: \${con_6310_box_background_color} !important;
          border-radius: \${con_6310_box_radius}px !important;
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_color} !important;
          border: \${con_6310_border_size}px solid \${con_6310_border_color} !important;
        }</style>`).appendTo('.con-6310-preview'); 

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover{
          background-color: \${con_6310_box_background_hover_color} !important;
          box-shadow: 0px 0px \${con_6310_box_shadow_blur}px \${con_6310_box_shadow_width}px \${con_6310_box_shadow_hover_color} !important;
          border-color: \${con_6310_border_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":before{
          background-color: \${con_6310_box_background_color} !important;
        }</style>`).appendTo('.con-6310-preview') 
      
        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover:before{
          background-color: \${con_6310_box_background_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview') 



        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon{
          color: \${con_6310_icon_color} !important;
          font-size: \${con_6310_icon_font_size}px !important;
          margin-top: \${con_6310_icon_margin_top}px !important;
          margin-bottom: \${con_6310_icon_margin_bottom}px !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-counter-icon img{
          width: \${con_6310_icon_font_size}px !important;
          height: \${con_6310_icon_font_size}px !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-counter-icon{
          color: \${con_6310_icon_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-icon-wrapper {
          width: calc(\${con_6310_icon_font_size}px * 2) !important;
          height: calc(\${con_6310_icon_font_size}px * 2) !important;
          border: \${con_6310_icon_border_width}px solid \${con_6310_icon_border_color} !important;
          border-radius: \${con_6310_icon_border_radius}px !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId).":hover .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
          border-color: \${con_6310_icon_border_hover_color} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-counter-".esc_attr($templateId)."-section,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
          background: linear-gradient(to right, \${con_6310_1st_gradient_color_left}, \${con_6310_1st_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 1) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_1st_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-counter-".esc_attr($templateId)."-section,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
          background: linear-gradient(to right, \${con_6310_2nd_gradient_color_left}, \${con_6310_2nd_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 2) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_2nd_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-counter-".esc_attr($templateId)."-section,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
          background: linear-gradient(to right, \${con_6310_3rd_gradient_color_left}, \${con_6310_3rd_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 3) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_3rd_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-counter-".esc_attr($templateId)."-section,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
          background: linear-gradient(to right, \${con_6310_4th_gradient_color_left}, \${con_6310_4th_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 4) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_4th_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-counter-".esc_attr($templateId)."-section,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
          background: linear-gradient(to right, \${con_6310_5th_gradient_color_left}, \${con_6310_5th_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 5) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_5th_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-counter-".esc_attr($templateId)."-section,
        .con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-icon-wrapper{
          background: linear-gradient(to right, \${con_6310_6th_gradient_color_left}, \${con_6310_6th_gradient_color_right}) !important;
        }</style>`).appendTo('.con-6310-preview')

        jQuery(`<style type='text/css'>.con-6310-template-".esc_attr($templateId)."-parallax .con-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(6n + 6) .con-6310-template-".esc_attr($templateId)."-title{
          color: \${con_6310_6th_gradient_color_right} !important;
        }</style>`).appendTo('.con-6310-preview')
   
    });
  });
";

wp_register_script( "con-6310-template-".esc_attr($templateId)."-js", "" );
wp_enqueue_script( "con-6310-template-".esc_attr($templateId)."-js" );
wp_add_inline_script( "con-6310-template-".esc_attr($templateId)."-js", $jsCode );