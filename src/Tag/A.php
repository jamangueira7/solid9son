<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 18/04/2018
 * Time: 17:38
 */

namespace Solid\Html\Tag;


class A extends Tag
{
  public function validate()
  {
      if(!isset($this->attrs[0])){
          throw new \Exception("Attribute src not found");
      }
      if(!is_string($this->attrs[0])){
          throw new \Exception("Attribute src must be string");
      }

      if(!isset($this->attrs[1])){
          throw new \Exception("Attribute src not found");
      }
      if(!is_string($this->attrs[1])){
          throw new \Exception("Attribute src must be string");
      }
  }
  public function __toString(): string
  {
      return '<a href="' . $this->attrs[0] . '"' . $this->opt_attrs . '>' . $this->attrs[1] . '</a>' ;
  }
}
