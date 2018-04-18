<?php
namespace Solid\Html;

use PHPUnit\Framework\TestCase;
use Solid\Html\Tag\Img;
use Solid\Html\Attributes;

class ImgTest extends TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img = new Img(new Attributes, 'img/photo.png');
        $this->assertEquals('<img src="img/photo.png">',$img);
    }

    public function testCriarTagImgComSrcEAtributosHtmlAdicionais()
    {
        $attr = [
            'class'=>'image-responsive'
        ];
        $img = new Img(new Attributes, 'img/photo.png');
        $img->attributes($attr);
        $this->assertEquals('<img src="img/photo.png">',$img);
    }

}

