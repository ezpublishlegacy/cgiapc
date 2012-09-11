<?php
/**
 * File containing the module definition
 *
 * @version //autogentag//
 * @package LogicaAPC
 * @copyright Copyright (C) 2012 Logica WebFactory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module     = array( "Logica APC" => "Logica APC monitoring" );
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