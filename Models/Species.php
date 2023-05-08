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

    public function animalAge($animal)
    {
        $now = date("Y");

        if (!is_numeric($animal)) {
            throw new Exception('Il valore non è valido');
        } else if ($animal < 2000 || $animal > $now) {
            throw new Exception('Anno di nascita non valido');
        }

        return "Il tuo animale ha " . ($now - $animal) . ' anni';
    }
}
