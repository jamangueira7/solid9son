<?php
namespace Solid\Html;

use PHPUnit\Framework\TestCase;
use Solid\Html\Tag\A;
use Solid\Html\Attributes;

class ATest extends TestCase
{
    public function testCriarTagAComHrefEAncora()
    {
        $a = new A(new Attributes,'http://www.example.com.br','meu site');
        $this->assertEquals('<a href="http://www.example.com.br">meu site</a>',$a);
    }

    public function testCriarTagAComHrefEAncoraEAtributosAdicionais()
    {
        $attr = [
            'class'=>'btn btn-default',
            'data-modal'=>'#login',
            'id'=>'login',
        ];
        $a = new A(new Attributes,'#','login');
        $a->attributes($attr);
        $this->assertEquals('<a href="#" class="btn btn-default" data-modal="#login" id="login">login</a>',$a);
    }
}

