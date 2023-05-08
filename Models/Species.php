<?php


class Species
{

    public $kind;
    public $icon;



    public function __construct(string $_kind, string $_icon)
    {

        $this->kind = $_kind;
        $this->icon = $_icon;
    }


    public function getKind()
    {
        return $this->kind;
    }
}
