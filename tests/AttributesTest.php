<?php
namespace Solid\Html;

use PHPUnit\Framework\TestCase;

class AttributesTest extends TestCase
{//PHPUnit_Framework_TestCase
    public function testCriarAttributosHtmlParaTags()
    {
        $attributes = new Attributes([
           'class'=>'btn btn-default',
           'data-modal'=>'#login' ,
           'id'=>'login' ,
        ]);
        $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"',$attributes);
    }

}

