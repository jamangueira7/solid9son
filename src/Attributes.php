<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 18/04/2018
 * Time: 17:16
 */

namespace Solid\Html;


class Attributes implements IAttributes
{
    private $attr;
    public function __construct(array $attr = null)
    {
        if($attr){
            $this->attr = $attr;
        }

    }

    public function setAttr(array $attr)
    {
        $this->attr = $attr;
    }
    public function __toString() : string
    {
        $result = [];
        foreach ($this->attr as $key=>$value) {
            $result[] = $key . '="' . $value . '"';
        }
        return ' '.implode(' ',$result);
    }
}
