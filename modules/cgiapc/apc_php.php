<?php
/**
 * File containing the module view
 *
 * @version 1.0.0-LS
 * @package CGIAPC
 * @copyright Copyright (C) 2012-2015 CGI Digital Factory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

if ( function_exists( 'apc_cache_info' ) )
{
    include 'extension/cgiapc/classes/third_party/apc.php';
}
else
{
    echo ezpI18n::tr( 'cgiapc/apc', 'APC is not enabled.' );
}
eZExecution::cleanExit();

?>