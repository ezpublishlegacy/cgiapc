<?php
/**
 * File containing the module view
 *
 * @version 1.0.0-LS
 * @package CGIAPC
 * @copyright Copyright (C) 2012-2015 CGI Digital Factory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module = $Params['Module'];
$tpl = eZTemplate::factory();

$Result = array();
$Result['content'] = $tpl->fetch( 'design:cgiapc/apc.tpl' );
$Result['path'] = array( array( 'text' => ezpI18n::tr( 'cgiapc/apc', 'APC monitoring' ),
        'url' => false ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
{
    $contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );
}

$Result['left_menu'] = 'design:parts/setup/menu.tpl';
$Result['content_info'] = $contentInfoArray;

?>