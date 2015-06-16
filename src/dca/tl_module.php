<?php

/**
 * PHP version 5
 * @copyright  InfinitySoft 2011 - 2013
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    QRCode
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['qrcode'] = '{title_legend},name,type,headline,qrcode,qrcode_size,qrcode_margin,qrcode_ecclevel;{image_legend},alt,imgSize,imagemargin,imageUrl,fullsize,caption;{protected_legend:hide},protected;{expert_legend:hide},guests';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['qrcode'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['qrcode'],
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'tl_class'=>'clr'),
  'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['qrcode_size'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['qrcode_size'],
	'default'                 => '3',
	'inputType'               => 'select',
	'options'                 => array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40'),
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'clr w50'),
  'sql'                     => "int(2) NOT NULL default '3'"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['qrcode_margin'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['qrcode_margin'],
	'default'                 => '3',
	'inputType'               => 'select',
	'options'                 => array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40'),
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
  'sql'                     => "char(1) NOT NULL default 'L'"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['qrcode_ecclevel'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevel'],
	'default'                 => '0',
	'inputType'               => 'select',
	'options'                 => array('L','M','Q','H'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels'],
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
  'sql'                     => "char(1) NOT NULL default 'L'"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['alt']         = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['alt'],
  'exclude'                 => true,
  'search'                  => true,
  'inputType'               => 'text',
  'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
  'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['imagemargin'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['imagemargin'],
  'exclude'                 => true,
  'inputType'               => 'trbl',
  'options'                 => array('px', '%', 'em', 'ex', 'pt', 'pc', 'in', 'cm', 'mm'),
  'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
  'sql'                     => "varchar(128) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['imageUrl']    = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['imageUrl'],
  'exclude'                 => true,
  'search'                  => true,
  'inputType'               => 'text',
  'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
  'wizard' => array
  (
    array('tl_content', 'pagePicker')
  ),
  'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['caption']     = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['caption'],
  'exclude'                 => true,
  'search'                  => true,
  'inputType'               => 'text',
  'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
  'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_module']['fields']['fullsize']     = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['fullsize'],
  'exclude'                 => true,
  'inputType'               => 'checkbox',
  'eval'                    => array('tl_class'=>'w50 m12'),
  'sql'                     => "char(1) NOT NULL default ''"
);
