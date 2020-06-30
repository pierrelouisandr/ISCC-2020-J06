<?php
$nom_produit = "T-shirt femme";
$couleur = "Rouge";
$prix = 15.50; 
$disponible = true;
$quantite = 10;

include ('affichage.php');
afficher_produit($nom_produit, $couleur, $prix, $disponible);
include ('gestion-produit.php');

afficher_produit($nom_produit, $couleur, $prix, $disponible);
achat ($quantite, 5);
update_dispo($quantite);

afficher_produit($nom_produit, $couleur, $prix, $disponible);
achat ($quantite, 5);
update_dispo($quantite);

afficher_produit($nom_produit, $couleur, $prix, $disponible);
restockage($quantite, 5);
update_dispo($quantite);

afficher_produit($nom_produit, $couleur, $prix, $disponible);
?>
