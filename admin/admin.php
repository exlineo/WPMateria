<?php

add_menu_page(
    page_title,         // page title
    menu_title,         // menu title
    manage_option,      // capability
    custom_plugin,      // menu slug
    custom_function1,   // callable function
    icon_url,           // icon URL
);



function custom_function1()
{
    include_once('content-admin.php');
    admin_content();
}