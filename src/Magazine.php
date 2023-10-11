<?php

class Magazine
{
private int $id;
public string $titre;
public int $numero;
public string $datePublication;

    /**
     * @param int $id
     * @param string $titre
     * @param int $numero
     * @param string $datePublication
     */
    public function __construct(int $id, string $titre, int $numero, string $datePublication)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->numero = $numero;
        $this->datePublication = $datePublication;
    }


}