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
$GLOBALS['TL_LANG']['tl_module']['qrcode']          = array('Text', 'Bitte geben Sie den Text für den QR Code ein.');
$GLOBALS['TL_LANG']['tl_module']['qrcode_size']     = array('Größe', 'Bitte wählen Sie die Größe des QR Code.');
$GLOBALS['TL_LANG']['tl_module']['qrcode_margin']   = array('Rahmen', 'Bitte wählen Sie die Größe des Randes um den QR Code.');
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevel'] = array('Fehlerkorrekturgehalt', 'Bitte wählen Sie den Fehlerkorrekturgehalt des QR Code.');

$GLOBALS['TL_LANG']['tl_module']['alt']             = array('Alternativer Text', 'Hier können Sie einen alternativen Text für das Bild eingeben (&lt;em&gt;alt&lt;/em&gt;-Attribut).');
$GLOBALS['TL_LANG']['tl_module']['imagemargin']     = array('Bildabstand', 'Hier können Sie den oberen, rechten, unteren und linken Bildabstand eingeben.');
$GLOBALS['TL_LANG']['tl_module']['imageUrl']        = array('Bildlink-Adresse', 'Eine eigene Bildlink-Adresse überschreibt den Lightbox-Link, so dass das Bild nicht mehr in der Großansicht dargestellt werden kann.');
$GLOBALS['TL_LANG']['tl_module']['caption']         = array('Bildunterschrift', 'Hier können Sie einen kurzen Text eingeben, der unterhalb des Bildes angezeigt wird.');
$GLOBALS['TL_LANG']['tl_module']['fullsize']        = array('Großansicht/Neues Fenster', 'Großansicht des Bildes in einer Lightbox bzw. den Link in einem neuem Browserfenster öffnen.');

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['L'] = 'Gering';
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['M'] = 'Gut';
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['Q'] = 'Sehr gut';
$GLOBALS['TL_LANG']['tl_module']['qrcode_ecclevels']['H'] = 'Hoch';
