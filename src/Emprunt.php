<?php

class Emprunt
{

private int $id;
private string $dateEmprunt;
private string $dateRetour;
private string $dureeEmprunt;

    /**
     * @param string $dateEmprunt
     * @param string $dateRetour
     * @param string $dureeEmprunt
     */
    public function __construct(int $id, string $dateEmprunt, string $dateRetour, string $dureeEmprunt)
    {
        $this->id = $id;
        $this->dateEmprunt = $dateEmprunt;
        $this->dateRetour = $dateRetour;
        $this->dureeEmprunt = $dureeEmprunt;
    }


}