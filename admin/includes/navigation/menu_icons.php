<?php

  for($i = 0; $i < count($cl_box_groups); $i++) {
    switch ($cl_box_groups[$i]['heading']) {
       case BOX_HEADING_ORDERS:
       $cl_box_groups[$i]['icon'] = 'fa fa-shopping-cart';
       $cl_box_groups[$i]['sort_order'] = "01";
       break;
       case BOX_HEADING_CUSTOMERS:
       $cl_box_groups[$i]['icon'] = 'fa fa-user';
       $cl_box_groups[$i]['sort_order'] = "02";
       break;
       case BOX_HEADING_CATALOG:
       $cl_box_groups[$i]['icon'] = 'fa fa-gift';
       $cl_box_groups[$i]['sort_order'] = "03";
       break;
       case BOX_HEADING_REPORTS:
       $cl_box_groups[$i]['icon'] = 'far fa-chart-bar';
       $cl_box_groups[$i]['sort_order'] = "04";
       break;
       case BOX_HEADING_TOOLS:
       $cl_box_groups[$i]['icon'] = 'fa fa-wrench';
       $cl_box_groups[$i]['sort_order'] = "05";
       break;
       case BOX_HEADING_MODULES:
       $cl_box_groups[$i]['icon'] = 'fa fa-cogs';
       $cl_box_groups[$i]['sort_order'] = "07";
       break;
       case BOX_HEADING_CONFIGURATION:
       $cl_box_groups[$i]['icon'] = 'fa fa-cog';
       $cl_box_groups[$i]['sort_order'] = "08";
       break;
       case BOX_HEADING_LOCALIZATION:
       $cl_box_groups[$i]['icon'] = 'fa fa-globe';
       $cl_box_groups[$i]['sort_order'] = "09";
       break;
       case BOX_HEADING_LOCATION_AND_TAXES:
       $cl_box_groups[$i]['icon'] = 'fa fa-percent';
       $cl_box_groups[$i]['sort_order'] = "10";
       break;
       case MODULES_ADMIN_MENU_PAYPAL_HEADING:
       $cl_box_groups[$i]['icon'] = 'fab fa-paypal';
       $cl_box_groups[$i]['sort_order'] = "11";
       break;
       default:
       $cl_box_groups[$i]['sort_order'] = "99";
       break;
    }
  }