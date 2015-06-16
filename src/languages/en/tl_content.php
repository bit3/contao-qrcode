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
$GLOBALS['TL_LANG']['tl_content']['qrcode']          = array('Text', 'Please enter the text for the QR code.');
$GLOBALS['TL_LANG']['tl_content']['qrcode_size']     = array('Size', 'Please select the size of the QR code.');
$GLOBALS['TL_LANG']['tl_content']['qrcode_margin']   = array('Border', 'Please select the size of the border around the QR code.');
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevel'] = array('Error Correction capacity', 'Please select the error correction level of the QR Code.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['L'] = 'Log';
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['M'] = 'Good';
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['Q'] = 'Very good';
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['H'] = 'High';
