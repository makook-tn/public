<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Modeles/autoloader.php';
error_reporting();
 $annonce= new Annonce('annonce') ;
 $region= new Region('region');
 $sousCategorie= new SousCategorie('souscategorie');
 $categorie = new Categorie('categorie_annonce');
 //global $uneannonce;
if( !empty($_GET)&& isset($_GET['id_annonce']) )
{
   $uneannonce= $annonce->getAnnonceById($_GET['id_annonce']);
  
}
$souscategorie=$sousCategorie->getSousCatByCond('id_souscategorie', $uneannonce[0]['id_sousCategorie']);
 
$unecategorie= $categorie->getCategorieById($souscategorie[0]['id_Categorie']);
  
   $uneregion= $region->getRegionById($uneannonce[0]['id_region']);
 


include '../Views/detail-annonce.php';

?>