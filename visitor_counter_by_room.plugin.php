<?php
/**
 * Plugin Name: Visitor Counter By Room
 * Plugin URI: https://github.com/drajathasan/slims-visitor-room
 * Description: Visitor Counter untuk setiap ruangan
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus or hook
$plugin->registerMenu("opac", "visitor", __DIR__ . "/index.php");