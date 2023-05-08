<?php


class Species
{

    public $kind;



    public function __construct(string $_kind)
    {

        $this->kind = $_kind;
    }


    public function getKind()
    {
        return $this->kind;
    }
}
