<?php
/**
 * File containing the module definition
 *
 * @version 1.0.0-LS
 * @package CGIAPC
 * @copyright Copyright (C) 2012-2015 CGI Digital Factory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module     = array( "CGI APC" => "CGI APC monitoring" );
$ViewList = array();
$FunctionList = array();

$ViewList['apc'] = array(
    'script' => 'apc.php',
    'functions' => array( 'view' ),
);

$ViewList['apc.php'] = array(
    'script' => 'apc_php.php',
    'functions' => array( 'view' ),
);

$FunctionList['view'] = array();

?>