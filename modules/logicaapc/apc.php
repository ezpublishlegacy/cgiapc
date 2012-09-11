<?php
/**
 * File containing the module view
 *
 * @version //autogentag//
 * @package LogicaAPC
 * @copyright Copyright (C) 2012 Logica WebFactory. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

$Module = $Params['Module'];
$tpl = eZTemplate::factory();

$Result = array();
$Result['content'] = $tpl->fetch( 'design:logicaapc/apc.tpl' );
$Result['path'] = array( array( 'text' => ezpI18n::tr( 'logicaapc/apc', 'APC monitoring' ),
        'url' => false ) );

$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
{
    $contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );
}

$Result['left_menu'] = 'design:parts/setup/menu.tpl';
$Result['content_info'] = $contentInfoArray;

?>