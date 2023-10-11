<?php

class Bluray
{
private int $id;

public string $titre;
public string $realisateur;
public string $duree;
public int $anneeSortie;

    /**
     * @param int $id
     * @param string $titre
     * @param string $realisateur
     * @param string $duree
     * @param int $anneeSortie
     */
    public function __construct(int $id, string $titre, string $realisateur, string $duree, int $anneeSortie)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->duree = $duree;
        $this->anneeSortie = $anneeSortie;
    }


}