

<?php
 echo 'poooooooooooooost ';
 var_dump($_POST);
   
   
  echo 'geeeeeeeeeeeeeeeeeeeeeeet'  ;
  //var_dump($_GET);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Modeles/autoloader.php';
error_reporting();
 $_SESSION['login']="sarra"; 

 $annonce= new Annonce('annonce') ;
 $region= new Region('region');
 $gov= new Gouvernorat('gouvernorat');
 $sousCategorie= new SousCategorie('souscategorie');
 $categorie = new Categorie('categorie_annonce');
 
 //global $uneannonce;
if( isset($_GET) && isset($_GET['id_annonce']) && (!empty($_GET))  )
{
   echo " get reçu";
    
    
   $uneannonce= $annonce->getAnnonceById($_GET['id_annonce']);
   $souscategorie=$sousCategorie->getSousCatByCond('id_souscategorie', $uneannonce[0]['id_sousCategorie']);
 
  
  
 
$unecategorie= $categorie->getCategorieById($souscategorie[0]['id_Categorie']);
  
$uneregion= $region->getRegionById($uneannonce[0]['id_region']);
 
 $gouvernorat= $gov->getGouvernoratById($uneregion[0]['id_gov']);
  
}

  if (isset($_GET['id_annonce']) && isset($_GET['action'])) 
  {
      
      //var_dump($_GET);
       echo " get reçu id et action";
    
      
            $action=$_GET['action'];
            $id=@$_GET['id_annonce'];
            
if($action=='deleteAnnonce'){
    
    
}
            
elseif($action=='editAnnonce'){
   
    
       echo "
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                
                <h4 class='modal-title'>Modification annonce</h4>
            </div>
            <form id='form-edit-annonce'>
            <div class='modal-body'>
               
                <div id='success' class='uk-alert-success' ></div>
                
                <div class='form-group'>
                    <div class='md-input-wrapper md-input-wrapper-count'>
                        <label>Titre :</label>
                        <input type='hidden' id='id_annonce' value='{$uneannonce['0']['id_annonce']}' name='id_annonce' />
                          <input class='form-control'  id='titre' type='text'  required='required' value='{$uneannonce['0']['titre']}' name='titre'> 
                          
                           <span class='md-input-bar '> </span>
                    </div>
                </div>
                <div class='form-group right-addon inner-addon '>
                      <label>Description: </label>
                      <input class='form-control'  id='description ' type='text'  required='required' value='{$uneannonce['0']['description']}' name='description'> 
                       <span class='md-input-bar '> </span>
                 </div>
                 <div class='form-group right-addon inner-addon '>
                      <label>Categorie: </label>
                      <input class='form-control disabled'  id='categorie' type='text'  required='required'  value='{$unecategorie['0']['titre']}' name='categorie'> 
                       <span class='md-input-bar '> </span>
                 </div>
                 <div class='form-group right-addon inner-addon '>
                      <label> Sous Categorie: </label>
                      <input class='form-control disabled'  id='sousCategorie' type='text'  required='required' value='{$souscategorie['0']['titre']}' name='sousCategorie'> 
                       <span class='md-input-bar '> </span>
                 </div>";



                  foreach ($souscategorie[0] as $i => $valeur) {
                   if (strpos($i, 'Critere') === 0) {
                      
                         if ($valeur !== '') {
                          //echo $valeur;
                            echo "<div class='form-group  right-addon inner-addon '> 
                                     <label>{$valeur}</label>
                     
                                     <input type='text' id='$valeur' class='form-control' value='{$uneannonce['0']['Val_'.$i]}'' name='$valeur'  >
                                     <span class='md-input-bar '></span> 
                                    </div>";
                         }
                   }
                   }



      

             echo"   <p class='text-warning'><small>Si vous ne sauvegardez pas , vos modifications seront perdues.</small></p>
                 </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal' id='cancel' name='cancel' onclick='annonceClose()' >Fermer</button>
                <button type='button' class='btn btn-primary' id='save' name='save' onclick='updateAnnonce()'>Enregistrer</button>
            </div>
            </form>
        </div>
    </div>
    
 ";
 
      /* <div class="form-group right-addon inner-addon ">

                                    <input class="form-control " id="titreAnnonce" type="text" placeholder=" Titre annonce" required="required" name="titre"></div>
                            </div>
    */
}
      /*  elseif($action=='save'){
            $data['titre']=$_GET['titre'];
            $update=new Annonce('annonce');
            $updates=$update->updatedata($data, $id);



        }*/
          }
         

        if( isset($_POST)&& isset($_POST['id_annonce'] ) )
        {
         //  var_dump($_POST);
 
                $id=$_POST['id_annonce'];
           $uneannonce= $annonce->getAnnonceById($_POST['id_annonce']);
           $souscategorie=$sousCategorie->getSousCatByCond('id_souscategorie', $uneannonce[0]['id_sousCategorie']);




        $unecategorie= $categorie->getCategorieById($souscategorie[0]['id_Categorie']);

        $uneregion= $region->getRegionById($uneannonce[0]['id_region']);

         $gouvernorat= $gov->getGouvernoratById($uneregion[0]['id_gov']);

                     $data=$_POST;
                  var_dump($data);
                  $update=new Annonce('annonce');
                  $updates=$update->updatedata($data, $id);
         
        }

        if (isset($_POST['id_annonce']) && isset($_POST['save'])) 
         {

            echo "tayyyyyyyyyyyyyyy";
                 /*   //$action=$_POST['action'];
                    $id=@$_POST['id_annonce'];
            
                   
                  $data['titre']=$_POST['titre'];
                  $data['description']=$_POST['description'];*/




              
         }

 //if (count($_GET)==1)
     if ((!isset($_GET['affiche']))|| (!empty($_POST)))
          {include '../Views/detail-annonce.php';}
?>

  <script type="text/javascript" >
      
       $(document).ready(function() {
           
         // $(document).on(load,function(){
       
         var varSession = '<?php   if (isset($_SESSION['login'])){echo $_SESSION['login']; } else { echo "null";} ?>'; 
            
            if (varSession !== "null")
            {$('.aside-actions-annonce').addClass('show-action-annonce');}
              
         // }); 
         

        
       });
  
        function annonceClose(){
        
            document.getElementById('success').style.display='none';
         document.getElementById("myModal").style.display = 'none';
        // window.opener.location.reload(true);
           // window.close();
         
       }
       function updateAnnonce(){
      // alert("update");
           
           //  var titre = document.getElementById("titreAnnonce").value;
            // var id = document.getElementById("idAnnonce").value;
            // var description = document.getElementById("descriptionAnnonce").value;
             // Returns successful data submission message when the entered information is stored in database.
            //var dataString = 'id_annonce=' + id + '&titre=' + titre + '&description=' + description +'&action=save';
           
             var dataString  = $('#form-edit-annonce').serialize();
            //alert (dataString);
             // AJAX code to submit form.
             $.ajax({
             type: "POST",
             url: "DetailController.php",
             data: $('#form-edit-annonce').serialize(),
              
             success: function(response) {
           //alert(response);
             },
             error:function(){
                 alert ("errooooooooooooooooooooor");
             }
             });
             document.getElementById("myModal").style.display = 'none';
             }
               
        //  var titre = $('#titreAnnonce').val();
         // var id=$('#idAnnonce').val();
         
          
         /* 
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("POST", "../Controller/DetailController.php?id_annonce="+id+"&action=save", true);
        xmlhttp.send();
        document.getElementById("#myModal").style.display = 'none';
          
        
        }*/
       
            function editAnnonce(id){
         ///  alert(id);
             
                  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("myModal").style.display = 'block';
                document.getElementById("myModal").innerHTML = xmlhttp.responseText;
            }
        };
      //  xmlhttp.open("POST", "../Controller/DetailController.php?id_annonce="+id+"&action=editAnnonce", true);
        xmlhttp.open("POST", "../Controller/DetailController.php?id_annonce="+id+"&action=editAnnonce&affiche=yes" , true);
        xmlhttp.send();

    }
    
    </script>