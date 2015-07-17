<?php

/**
 * PHP version 5
 * @copyright  InfinitySoft 2011 - 2013
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    QRCode
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Class ContentQRCode
 *
 * @copyright  InfinitySoft 2011 - 2013
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    QRCode
 */
class ContentQRCode extends ContentElement
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_qrcode';
	
	public function compile() {
		QRCodeGenerator::addQRCodeToTemplate($this, $this->Template);
	}
}
