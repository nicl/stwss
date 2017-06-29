<?php

function stwss_preprocess_page(&$vars) {
    $getLink = function($value) {
        $value['link']['in_active_trail'];

        return array('path' => url($value['link']['link_path']),
                     'title' => $value['link']['link_title'],
                     'active' => $value['link']['in_active_trail']);
    };

    $menu_items = menu_tree_page_data('main-menu');

    foreach($menu_items as $key => $m) {
        if ($m['link']['in_active_trail'] && $menu_items[$key]['below']) {
            $children = $menu_items[$key]['below'];
            $links = array_map($getLink, $children);
            $vars['stwss_child_links'] = $links;
        }
    }
}
