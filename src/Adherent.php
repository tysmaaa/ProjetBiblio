<?php

class Adherent
{
private int $id;
private string $numeroAdherent;
private string $prenom;
private string $nom;
private string $email;
private string $dateAdhesion;

    /**
     * @param int $id
     * @param string $numeroAdherent
     * @param string $prenom
     * @param string $nom
     * @param string $email
     * @param string $dateAdhesion
     */
    public function __construct(int $id, string $numeroAdherent, string $prenom, string $nom, string $email, string $dateAdhesion)
    {
        $this->id = $id;
        $this->numeroAdherent = $numeroAdherent;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->dateAdhesion = $dateAdhesion;
    }


}