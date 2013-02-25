<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   jsincluder
 * @author    Simon Kusterer
 * @license   LGPL
 * @copyright Simon Kusterer 2013
 */

$GLOBALS['TL_DCA']['tl_layout']['palettes']['default']= str_replace(',script', ',script,externalJs', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_layout']['fields']['externalJs'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['externalJs'],
	'exclude'                 => true,
	'inputType'               => 'fileTree',
	'eval'                    => array('multiple'=>true, 'orderField'=>'orderJsExt', 'fieldType'=>'checkbox', 'filesOnly'=>true, 'extensions'=>'js' ),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['orderJsExt'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_layout']['orderJsExt'],
	'sql'                     => "text NULL"
);