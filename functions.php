<?php
function wikiplus_custom_admin_css() {
    echo '<style>
  ul#adminmenu > li {
    margin: 5px;
    background: linear-gradient(112.36deg, #324C54 0.76%, #171E20 36.31%, #171E20 53.27%, #41293A 99.38%);
    border-radius: 4px;
}

#adminmenu, #adminmenuback, #adminmenuwrap {
    background: none;
}

#adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu {
    border-radius: 4px;
    background: #adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu;
}

#adminmenu div.wp-menu-name {
}

#adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus {
    border-radius: 5px;
    color: #ED0080;
}

#adminmenu li a:focus div.wp-menu-image:before, #adminmenu li.opensub div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before {
    color: #ED0080;
}

#adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus {
    color: #ED0080;
}
  </style>';
}

// Hook into the admin_head action to inject CSS into the admin dashboard
add_action('admin_head', 'wikiplus_custom_admin_css');