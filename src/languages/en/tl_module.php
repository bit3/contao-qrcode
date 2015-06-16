<?php

/**
 * PHP version 5
 * @copyright  InfinitySoft 2011 - 2013
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    QRCode
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['qrcode']          = array('Text', 'Please enter the text for the QR code.');
$GLOBALS['TL_LANG']['tl_module']['qrcode_size']     = array('Size', 'Please select the size of the QR code.');
$GLOBALS['TL_LANG']['tl_module']['qrcode_margin']   = array('Border', 'Please select the size of the border around the QR code.');
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevel'] = array('Error Correction capacity', 'Please select the error correction level of the QR Code.');

$GLOBALS['TL_LANG']['tl_module']['fields']['alt'] = array('Alternate text', 'Here you can enter an alternate text for the image (&lt;em&gt;alt&lt;/em&gt; attribute).');
$GLOBALS['TL_LANG']['tl_module']['fields']['imagemargin'] = array('Image margin', 'Here you can enter the top, right, bottom and left margin.');
$GLOBALS['TL_LANG']['tl_module']['fields']['imageUrl'] = array('Image link target', 'A custom image link target will override the lightbox link, so the image cannot be viewed fullsize anymore.');
$GLOBALS['TL_LANG']['tl_module']['fields']['caption'] = array('Image caption', 'Here you can enter a short text that will be displayed below the image.');
$GLOBALS['TL_LANG']['tl_module']['fields']['fullsize'] = array('Full-size view/new window', 'Open the full-size image in a lightbox or the link in a new browser window.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['L'] = 'Log';
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['M'] = 'Good';
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['Q'] = 'Very good';
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['H'] = 'High';
