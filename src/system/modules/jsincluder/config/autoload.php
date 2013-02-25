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

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Sope',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Sope\JsIncluder\DcaLayout' => 'system/modules/jsincluder/classes/DcaLayout.php'
));
