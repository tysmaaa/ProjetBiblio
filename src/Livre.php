<?php

class Livre
{
private $id;
public string $isbn;
public string $titre;
public string $auteur;
public int $nombrePages;

    /**
     * @param string $isbn
     * @param string $titre
     * @param string $auteur
     * @param int $nombrePages
     */
    public function __construct(int $id, string $isbn, string $titre, string $auteur, int $nombrePages)
    {
        $this->id = $id;
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nombrePages = $nombrePages;
    }


}