<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 18/04/2018
 * Time: 17:33
 */

namespace Solid\Html\Tag;

use Solid\Html\Attributes;
use Solid\Html\IAttributes;

abstract class Tag implements ITagsContracts
{
    protected $attrs;
    protected $opt_attrs;
    protected $attr_class;

    public function __construct(IAttributes $attr)
    {
        $this->attrs = func_get_args();

        foreach ($this->attrs as $key => &$value){
            if (is_a($value, 'Solid\Html\Tag\ITagsContracts')){
                $value = (string) $value;
            }
            if (is_a($value, 'Solid\Html\IAttributes')){
                $this->attr_class = $attr;
                unset($this->attrs[$key]);
            }
        }

        $this->attrs = array_values($this->attrs);
        $this->validate();

    }

    public function attributes($attr)
    {
       /* if(is_array($attr)){
            $attr = new Attributes($attr);
        }
        if(is_a($attr,'Solid\Html\Tag\ITagsContracts')){
            throw new \Exception("$attr must be a Solid\Html\Tag\ITagsContracts instance");
        }*/
        $this->attr_class->setAttr($attr);
        $this->opt_attrs = (string) $this->attr_class;
    }
}
