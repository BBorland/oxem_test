<?php

namespace Farm;

abstract class Animal
{
    private $animalID;
    protected string  $animalName;
    protected string  $animalProduct;

    public function __construct()
    {
        return $this->animalID = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);;
    }

    public function getID()
    {
        return $this->animalID;
    }

    public function getAnimalName()
    {
        return $this->animalName;
    }

    public function getAnimalProduct()
    {
        return $this->animalProduct;
    }

    public function newAnimal()
    {
        return $this;
    }

     abstract public function getProductCount();
}
