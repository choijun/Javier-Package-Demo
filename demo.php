<?php
$file_url = plugin_dir_path( __FILE__ ) . 'demo-data/';
$image_url  = plugin_dir_url( __FILE__ ) . 'previews/';
$demo_array = array(
    'main-fashion-01' => array(
        'title' 		=> 'Fashion Main',
        'tags'          => 'Fashion',
        'slider' 		=> $file_url . 'main-fashion-01.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-fashion-01.json',
        'preview'		=> $image_url  . 'fashion-01.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Fashion 01',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-fashion-01',
        'demo_url'      => 'http://javier.la-studioweb.com/main-fashion-01'
    ),
    'main-fashion-02' => array(
        'title' 		=> 'Fashion Classic',
        'tags'          => 'Fashion',
        'slider' 		=> $file_url . 'main-fashion-02.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-fashion-02.json',
        'preview'		=> $image_url  . 'fashion-02.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Fashion 02',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-fashion-02',
        'demo_url'      => 'http://javier.la-studioweb.com/main-fashion-02'
    ),
    'main-fashion-03' => array(
        'title' 		=> 'Fashion Simple',
        'tags'          => 'Fashion',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-fashion-03.json',
        'preview'		=> $image_url  . 'fashion-03.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Fashion 03',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-fashion-03',
        'demo_url'      => 'http://javier.la-studioweb.com/main-fashion-03'
    ),
    'main-fashion-04' => array(
        'title' 		=> 'Fashion Minimalist',
        'tags'          => 'Fashion',
        'slider' 		=> $file_url . 'main-fashion-04.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-fashion-04.json',
        'preview'		=> $image_url  . 'fashion-04.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Fashion 04',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-fashion-04',
        'demo_url'      => 'http://javier.la-studioweb.com/main-fashion-04'
    ),
    'main-fashion-05' => array(
        'title' 		=> 'Vertical Header',
        'tags'          => 'Fashion',
        'slider' 		=> $file_url . 'main-fashion-05.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-fashion-05.json',
        'preview'		=> $image_url  . 'fashion-05.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Fashion 05',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-fashion-05',
        'demo_url'      => 'http://javier.la-studioweb.com/main-fashion-05'
    ),
    'main-sport-01' => array(
        'title' 		=> 'Main Sport',
        'tags'          => 'Sport',
        'slider' 		=> $file_url . 'main-sport-01.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-sport-01.json',
        'preview'		=> $image_url  . 'sport-01.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Sport 01',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-sport-01',
        'demo_url'      => 'http://javier.la-studioweb.com/main-sport-01'
    ),
    'main-furniture-01' => array(
        'title' 		=> 'Main Furniture',
        'tags'          => 'Furniture',
        'slider' 		=> $file_url . 'main-furniture-01.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-furniture-01.json',
        'preview'		=> $image_url  . 'furniture-01.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Furniture 01',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-furniture-01',
        'demo_url'      => 'http://javier.la-studioweb.com/main-furniture-01'
    ),
    'main-organic-01' => array(
        'title' 		=> 'Main Organic',
        'tags'          => 'Other',
        'slider' 		=> $file_url . 'main-organic-01.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-organic-01.json',
        'preview'		=> $image_url  . 'organic-01.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Organic 01',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-organic-01',
        'demo_url'      => 'http://javier.la-studioweb.com/main-organic-01'
    ),
    'main-watch-01' => array(
        'title' 		=> 'Watch',
        'tags'          => 'Other',
        'slider' 		=> $file_url . 'main-watch-01.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-watch-01.json',
        'preview'		=> $image_url  . 'watch-01.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Watch 01',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-watch-01',
        'demo_url'      => 'http://javier.la-studioweb.com/main-watch-01'
    ),
    'main-bike-01' => array(
        'title' 		=> 'Bike',
        'tags'          => 'Other',
        'slider' 		=> $file_url . 'main-bike-01.zip',
        'content' 		=> $file_url . 'data-sample.xml',
        'widget' 		=> $file_url . 'widgets.json',
        'option' 		=> $file_url . 'main-bike-01.json',
        'preview'		=> $image_url  . 'bike-01.jpg',
        'menu-locations'=> array(
            'main-nav' 		=> 'Main Menu',
            'top-nav'       => 'Top Navigation',
            'footer-nav'    => 'Footer Menu 2'
        ),
        'pages'			=> array(
            'page_on_front' 	=> 'Main Bike 01',
            'page_for_posts' 	=> 'Blog'
        ),
        'demo_preset'   => 'main-bike-01',
        'demo_url'      => 'http://javier.la-studioweb.com/main-bike-01'
    )
);