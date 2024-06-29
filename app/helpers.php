<?php

use Illuminate\Support\Facades\DB;

if(!function_exists('get_lijan')) {
    function get_lijan() {
        $lijan = DB::table('members_categories')->where('parent_id', 9)->get();
        if($lijan) {
            return $lijan;
        } else {
            return [];
        }
    }
}

if(!function_exists('carouselImg')) {
    function carouselImg() {
        $img = DB::table('carousels')->first();
        if($img) {
            return $img->image;
        } else {
            return null;
        }
    }
}


if (!function_exists('menu_front')) {
    function menu_front() {
        $menu = DB::table('menu_items')->where('menu_id', 2)->orderBy('order')->get();
        return $menu ?: [];
    }
}

if (!function_exists('buildMenuTree')) {
    function buildMenuTree($items, $parentId = null) {
        $branch = [];

        foreach ($items as $item) {
            if ($item->parent_id == $parentId) {
                $children = buildMenuTree($items, $item->id);
                if ($children) {
                    $item->children = $children;
                }
                $branch[] = $item;
            }
        }

        return $branch;
    }
}



if (!function_exists('heading')) {
    function heading($id) {
        $heading = DB::table('headings')->where('id', $id)->first();
        return $heading ?: '';
    }
}

if (!function_exists('getYouTubeVideoID')) {
    function getYouTubeVideoID($url) {
        preg_match('/embed\/([^\?]*)/', $url, $matches);
        return $matches[1] ?? null;
    }
}



if (!function_exists('videos')) {
    function videos() {
        $videos = DB::table('videos')->get();
        return $videos ?: [];
    }
}
