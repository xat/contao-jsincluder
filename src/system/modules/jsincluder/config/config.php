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

$GLOBALS['TL_HOOKS']['generatePage'][] = array('Sope\JsIncluder\DcaLayout', 'includeJs');