<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 18/04/2018
 * Time: 17:34
 */

namespace Solid\Html\Tag;


interface ITagsContracts
{
    public function validate();
    public function __toString() :string;
}
