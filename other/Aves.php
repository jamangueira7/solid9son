<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 18/04/2018
 * Time: 18:52
 */

interface Aves
{

    public function andar();
}

interface AvesQueVoam extends Aves
{
    public function voar();
}

interface AvesQueNadam extends Aves
{
    public function nadar();
}

class Pato implements AvesQueVoam,AvesQueNadam
{
    public function voar()
    {

    }
    public function nadar()
    {

    }
    public function andar()
    {

    }
}

class Pinguim implements AvesQueNadam
{

    public function nadar()
    {

    }
    public function andar()
    {

    }
}

class Andorinha implements AvesQueVoam
{

    public function voar()
    {

    }
    public function andar()
    {

    }
}

class AmbienteAviario
{
    public function __construct(Aves $ave)
    {
        $ave->andar();
    }
}

class AmbienteAgua
{
    public function __construct(Aves $ave)
    {
        $ave->nadar();
    }
}
