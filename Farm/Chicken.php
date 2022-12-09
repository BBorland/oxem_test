<?php

namespace Farm;

class Chicken extends Animal
{
    protected string $animalName = 'chicken';
    protected string $animalProduct = 'egg';

    public function getProductCount()
    {
        return rand(0, 1);
    }
}
