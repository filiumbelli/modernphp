<?php

class Animal
{
    private $name;
    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function bark(): string
    {
        return "wuf wuf";
    }

    public function respond(String $sayName): string
    {
        $sayName = strtolower($sayName);
        $this->name = strtolower($this->name);

        if (strpos($sayName, $this->name) === false) {
            throw new Exception(
                sprintf("You should call me by my name!", $this->name)
            );
        }
        return "wuf wuf";
    }
}
