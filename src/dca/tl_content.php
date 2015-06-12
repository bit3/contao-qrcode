<?php

/**
 * PHP version 5
 * @copyright  InfinitySoft 2011 - 2013
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    QRCode
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['qrcode'] = '{type_legend},type,headline,qrcode,qrcode_size,qrcode_margin,qrcode_ecclevel;{image_legend},alt,size,imagemargin,imageUrl,fullsize,caption,floating;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['qrcode'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['qrcode'],
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'tl_class'=>'clr'),
  'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['qrcode_size'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['qrcode_size'],
	'default'                 => '3',
	'inputType'               => 'select',
	'options'                 => array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40'),
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'clr w50'),
  'sql'                     => "int(2) NOT NULL default '3'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['qrcode_margin'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['qrcode_margin'],
	'default'                 => '3',
	'inputType'               => 'select',
	'options'                 => array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40'),
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
  'sql'                     => "int(2) NOT NULL default '4'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['qrcode_ecclevel'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevel'],
	'default'                 => '0',
	'inputType'               => 'select',
	'options'                 => array('L','M','Q','H'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels'],
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
  'sql'                     => "char(1) NOT NULL default 'L'"
);
