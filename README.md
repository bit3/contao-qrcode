# QRCode generator for Contao

Display QR codes as content elements, modules or embed in templates

## Usage

As a content element

![Use as a content element](http://pdir.de/git/qrcode/qrcode-module-usage-as-a-content-element.png)

As modules

![Use as modules](http://pdir.de/git/qrcode/qrcode-module-usage-as-module.png)

Sample code for use in Contao templates or in your own extension:

    \PHPQRCode\QRcode::png("Test", "/tmp/qrcode.png", 'L', 4, 2);

This code will generate a PNG file on '/tmp/qrcode.png' with a QRCode that contains the word 'Test'.

## Dependencies and Acknowledgments 

https://github.com/kairosagency/phpqrcode

This library is an import of PHP QR Code by Dominik Dzienia that you can find at http://phpqrcode.sourceforge.net

Based on C libqrencode library (ver. 3.1.1), Copyright (C) 2006-2010 by Kentaro Fukuchi
http://megaui.net/fukuchi/works/qrencode/index.en.html

QR Code is registered trademarks of DENSO WAVE INCORPORATED in JAPAN and other countries.

Reed-Solomon code encoder is written by Phil Karn, KA9Q. Copyright (C) 2002, 2003, 2004, 2006 Phil Karn, KA9Q