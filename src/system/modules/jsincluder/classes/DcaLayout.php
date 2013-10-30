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

namespace Sope\JsIncluder;

class DcaLayout
{

	/**
	 * Inject some JS files into the layout
	 *
	 * @param $objPage
	 * @param $objLayout
	 */
	public function includeJs($objPage, $objLayout)
	{
		$arrExternal = deserialize($objLayout->externalJs);

		// External JS files
		if (is_array($arrExternal) && !empty($arrExternal))
		{
			if ($objLayout->orderJsExt != '')
			{
				if (version_compare(VERSION, '3.2', '<'))
				{
					$arrOrdered = array_map('intval', explode(',', $objLayout->orderJsExt));
					$arrExternal = array_merge($arrOrdered, array_diff($arrExternal, $arrOrdered));
				} else
				{
					$arrExternal = deserialize($objLayout->orderJsExt);
				}
			}

			// Get the file entries from the database
			if (version_compare(VERSION, '3.2', '<'))
			{
				$objFiles = \FilesModel::findMultipleByIds($arrExternal);
			} else
			{
				$objFiles = \FilesModel::findMultipleByUuids($arrExternal);
			}

			if ($objFiles !== null)
			{
				while ($objFiles->next())
				{
					if (file_exists(TL_ROOT . '/' . $objFiles->path))
					{
						$GLOBALS['TL_JAVASCRIPT'][] = $objFiles->path;
					}
				}
			}
		}
	}

}
