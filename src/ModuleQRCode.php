<?php

/**
 * PHP version 5
 * @copyright  InfinitySoft 2011 - 2013
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    QRCode
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Class ModuleQRCode 
 *
 * @copyright  InfinitySoft 2011 - 2013
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    QRCode
 */
class ModuleQRCode extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_qrcode';
	
	public function compile() {
		QRCodeGenerator::addQRCodeToTemplate($this, $this->Template);
	}
}
