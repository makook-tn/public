<?php

/**
 * 
 *
 * @author Eya  Nextweb
 */

include '../Modeles/autoloader.php';
error_reporting();
if(!empty($_POST)){

$Annonce=new Add($_POST, 'annonce');
}
if( !empty($_GET)&& isset($_GET['id_annonce']) )
{
 $annonce= new Annonce('annonce') ;
 $uneannonce= $annonce->getAnnonceById($_GET['id_annonce']);
            

 return $uneannonce;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

