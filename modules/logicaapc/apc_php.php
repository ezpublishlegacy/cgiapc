<?php
/**
 * File containing the module view
 *
 * @version //autogentag//
 * @package LogicaAPC
 * @copyright Copyright (C) 2012 Logica WebFactory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

if ( function_exists( 'apc_cache_info' ) )
{
    include 'extension/logicaapc/classes/third_party/apc.php';
}
else
{
    echo ezpI18n::tr( 'logicaapc/apc', 'APC is not enabled.' );
}
eZExecution::cleanExit();

?>