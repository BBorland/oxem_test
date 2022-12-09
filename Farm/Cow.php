<?php

namespace Farm;

class Cow extends Animal
{
    protected string $animalName = 'cow';
    protected string $animalProduct = 'milk';

    public function getProductCount()
    {
        return rand(8, 12);
    }
}
