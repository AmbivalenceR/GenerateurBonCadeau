<?php
class BonCadeau
{
    protected float $valeur;
    protected string $beneficiaire;
    protected string $offrant;
    protected string $mois;
    protected string $annee;
    public bool $dateValide;


    public function __construct($valeur, $beneficiaire, $offrant, $mois, $annee)
    {
        $this->valeur = $valeur;
        $this->beneficiaire = $beneficiaire;
        $this->offrant = $offrant;
        $this->mois = $mois;
        $this->annee = $annee;
    }

    public function getValeur()
    {
        return $this->valeur . " €";
    }
    public function getBeneficiaire()
    {
        return ucfirst($this->beneficiaire);
    }
    public function getOffrant()
    {
        return ucfirst($this->offrant);
    }
    public function getDate()
    {
        return $this->mois . "/" . $this->annee;
    }
    public function getValidite()
    {
        return $this->mois . "/" . $this->annee + 1;
    }
    public function getNumeroBon()
    {
        return $this->mois . "-" . $this->annee . "-" . random_int(10, 99);
    }

    public function afficherBonCadeau()
    {
        return "
    <p>Numéro du bon : " . $this->getNumeroBon() . "</p>
    <p>Valeur du bon : " . $this->getValeur() . "</p>
    <p>Nom du bénéficiaire : " . $this->getBeneficiaire() . "</p>
    <p>Nom de l'offrant : " . $this->getOffrant() . "</p>
    <p>Date du bon cadeau : " . $this->getDate() . "</p>
    <p>Date d'expiration : " . $this->getValidite() . "</p>";
    }
}
