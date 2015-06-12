<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Qrcode
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'QRCodeGenerator' => 'system/modules/qrcode/QRCodeGenerator.php',
	'ContentQRCode'   => 'system/modules/qrcode/ContentQRCode.php',
	'ModuleQRCode'    => 'system/modules/qrcode/ModuleQRCode.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_qrcode' => 'system/modules/qrcode/templates',
	'ce_qrcode'  => 'system/modules/qrcode/templates',
));
