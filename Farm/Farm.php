<?php

namespace Farm;

class Farm
{
    private $animalsList = [];
    private $animalsCount = [];
    private $productsCount = [];

    public function addAnimal(Animal $animal, $amount = 1)
    {
        for ($i = 0; $i < $amount; $i++) {
            $this->animalsList[] = $animal->newAnimal();
        }
    }

    public function getAnimalsList()
    {
        $this->animalsCount = [];
        foreach ($this->animalsList as $animal) {
            if (isset($this->animalsCount[$animal->getAnimalName()])) {
                $this->animalsCount[$animal->getAnimalName()] += 1;
            } else {
                $this->animalsCount[$animal->getAnimalName()] = 1;
            }
        }
        return $this->animalsCount;
    }
    
    public function getProductsCount()
    {
        return $this->productsCount;
    }

    public function getAllProducts($iter = 1)
    {
        for ($i = 0; $i < $iter; $i++) {
            foreach ($this->animalsList as $animal) {
                if (isset($this->productsCount[$animal->getAnimalProduct()])) {
                    $this->productsCount[$animal->getAnimalProduct()] += $animal->getProductCount();
                } else {
                    $this->productsCount[$animal->getAnimalProduct()] = $animal->getProductCount();
                }
            }
        }
    }

}
