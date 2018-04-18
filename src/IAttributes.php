<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 18/04/2018
 * Time: 19:08
 */

namespace Solid\Html;


interface IAttributes
{
    public function __toString():string;
    public function setAttr(array $attr);
}
