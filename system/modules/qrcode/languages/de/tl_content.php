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
$GLOBALS['TL_LANG']['tl_content']['qrcode']          = array('Text', 'Bitte geben Sie den Text für den QR Code ein.');
$GLOBALS['TL_LANG']['tl_content']['qrcode_size']     = array('Größe', 'Bitte wählen Sie die Größe des QR Code.');
$GLOBALS['TL_LANG']['tl_content']['qrcode_margin']   = array('Rahmen', 'Bitte wählen Sie die Größe des Randes um den QR Code.');
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevel'] = array('Fehlerkorrekturgehalt', 'Bitte wählen Sie den Fehlerkorrekturgehalt des QR Code.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['L'] = 'Gering';
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['M'] = 'Gut';
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['Q'] = 'Sehr gut';
$GLOBALS['TL_LANG']['tl_content']['qrcode_ecclevels']['H'] = 'Hoch';
