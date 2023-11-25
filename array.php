<?php

// Créer un tableau de produits
$produit1 = array(
    "nom" => "Laptop Screen Keyboard Cleaner Kit",
    "prix" => 13.59,
    "description" => "Ceci est le produit 1"
);

$produit2 = array(
    "nom" => "Produit 2",
    "prix" => 29.99,
    "description" => "Ceci est le produit 2"
);

$produit3 = array(
    "nom" => "Produit 3",
    "prix" => 39.99,
    "description" => "Ceci est le produit 3"
);

$produit4 = array(
        "nom" => "Laptop Screen Keyboard Cleaner Kit",
        "prix" => 13.59,
        "description" => "Ceci est le produit 1"
    );
    
    $produit5 = array(
        "nom" => "Produit 2",
        "prix" => 29.99,
        "description" => "Ceci est le produit 2"
    );
    
    $produit6 = array(
        "nom" => "Produit 3",
        "prix" => 39.99,
        "description" => "Ceci est le produit 3"
    );

    $produit7 = array(
        "nom" => "Laptop Screen Keyboard Cleaner Kit",
        "prix" => 13.59,
        "description" => "Ceci est le produit 1"
    );
    
    $produit8 = array(
        "nom" => "Produit 2",
        "prix" => 29.99,
        "description" => "Ceci est le produit 2"
    );
    
    $produit9 = array(
        "nom" => "Produit 3",
        "prix" => 39.99,
        "description" => "Ceci est le produit 3"
    );

    $produit10 = array(
        "nom" => "Produit 3",
        "prix" => 39.99,
        "description" => "Ceci est le produit 3"
    );

// Stocker les produits dans un tableau principal
$produits = array($produit1, $produit2, $produit3, $produit4, $produit5, $produit6, $produit7, $produit8, $produit9, $produit10);

// Accéder aux informations d'un produit spécifique
echo "Nom du produit 1 : " . $produits[0]["nom"] . "<br>";
echo "Prix du produit 2 : " . $produits[1]["prix"] . "<br>";
echo "Nom du produit 3 : " . $produits[2]["nom"] . "<br>";
echo "Prix du produit 4 : " . $produits[3]["prix"] . "<br>";
echo "Nom du produit 5 : " . $produits[4]["nom"] . "<br>";
echo "Prix du produit 6 : " . $produits[5]["prix"] . "<br>";
echo "Nom du produit 7 : " . $produits[6]["nom"] . "<br>";
echo "Prix du produit 8 : " . $produits[7]["prix"] . "<br>";
echo "Nom du produit 9 : " . $produits[8]["nom"] . "<br>";
echo "Prix du produit 10 : " . $produits[9]["prix"] . "<br>";

?>
