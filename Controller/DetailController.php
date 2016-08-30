
<?php

 //r_dump($_POST);
  
  //var_dump($_GET);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../Modeles/autoloader.php';
include '../Controller/init/init.php';
error_reporting();
 $_SESSION['login']="sarra"; 

 $annonce= new Annonce('annonce') ;
 $region= new Region('region');
 $gov= new Gouvernorat('gouvernorat');
 $sousCategorie= new SousCategorie('souscategorie');
 $image = new Image('images_annonces');
 
 $categorie = new Categorie('categorie_annonce');
 $url=ROOT;
 //var_dump($url);
 //global $uneannonce;
if( isset($_GET) && isset($_GET['id_annonce']) && (!empty($_GET))  )
{
   
  //  var_dump($_GET);
    
   $uneannonce= $annonce->getAnnonceById($_GET['id_annonce']);
   $souscategorie=$sousCategorie->getSousCatByCond('id_souscategorie', $uneannonce[0]['id_sousCategorie']);
 
$unecategorie= $categorie->getCategorieById($souscategorie[0]['id_Categorie']);
  //var_dump($gouvernorat);
$uneregion= $region->getRegionById($uneannonce[0]['id_region']);
// var_dump($uneregion);
 $gouvernorat= $gov->getGouvernoratById($uneregion[0]['id_gov']);
 //var_dump($gouvernorat);
  $images = $image->getImageAnnonceById($_GET['id_annonce']);
  //var_dump($images);
 // var_dump(count($images));
}

  if (isset($_GET['id_annonce']) && isset($_GET['action'])) 
  {
      
      //var_dump($_GET);
 
    
      
            $action=$_GET['action'];
            $id=@$_GET['id_annonce'];
            $jsdata = array(
                'id' => $id,
                 'url' => $url,
                       
    );
            
if($action=='deleteAnnonce'){
    
        echo "
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                
                <h4 class='modal-title'>Suppression  annonce</h4>
            </div>
           
            <div class='modal-body'>
               
               <div id='success' class='uk-alert-success' ></div>
                <h2>voulez vous supprimer cette annonce ?</h2>
             
                </div;
              <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal' id='cancel' name='cancel' onclick='annonceClose()' >Fermer</button>
                <button type='button' class='btn btn-primary' id='save' name='save' onclick='deleteAnnonce($id)'>Confirmer</button>
            </div>
          </div>             
    </div>";
                 
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
                      <input type='hidden' id='id_categorie' value='{$unecategorie['0']['id_categorie']}'  />
                      <input class='form-control disabled'  id='categorie' type='text'  required='required'  value='{$unecategorie['0']['titre']}'  '> 
                       <span class='md-input-bar '> </span>
                 </div>
                 <div class='form-group right-addon inner-addon '>
                      <label> Sous Categorie: </label>
                      <input type='hidden' id='id_souscategorie' value='{$souscategorie['0']['id_souscategorie']}' name='id_souscategorie' />
                      <input class='form-control disabled'  id='sousCategorie' type='text'  required='required'  value='{$souscategorie['0']['titre']}'  ></input> 
                       <span class='md-input-bar '> </span>
                 </div>";



                  foreach ($souscategorie[0] as $i => $valeur) {
                   if (strpos($i, 'Critere') === 0) {
                  
                    
                       
                         if ($valeur !== '') {
                         
                            echo "<div class='form-group  right-addon inner-addon '> 
                                     <label>{$valeur}</label>
                     
                                     <input type='text' id='$valeur' class='form-control' value='{$uneannonce['0']['Val_'.$i]}' name='Val.$i' >
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
 
     
}
      
          }
         

        if( isset($_POST)&& isset($_POST['id_annonce'] ) )
        {
         //  var_dump($_POST);
          $annonce=new Annonce('annonce');
          $id=$_POST['id_annonce'];
           $uneannonce= $annonce->getAnnonceById($_POST['id_annonce']);
           $souscategorie=$sousCategorie->getSousCatByCond('id_souscategorie', $uneannonce[0]['id_sousCategorie']);

 var_dump($souscategorie);


        $unecategorie= $categorie->getCategorieById($souscategorie[0]['id_Categorie']);

        $uneregion= $region->getRegionById($uneannonce[0]['id_region']);

         $gouvernorat= $gov->getGouvernoratById($uneregion[0]['id_gov']);

                   
         
        }

        if (isset($_POST['id_annonce']) && isset($_POST['action'])) 
         {
                    
                var_dump($_POST);
            
                    $id=@$_POST['id_annonce'];
                    $action=$_POST['action'];
                    var_dump($action);
                    
            if ($action=='save')
                   
                  
                  {
                echo 'saaaaaaaaaave';
               unset($_POST['action']);
            var_dump($_POST);
            $updates=$annonce->updatedata($_POST, $id);
                  }
            else
                  {
                //action delete 
                  echo 'delete';
                $annonce->deletedata($id);
               var_dump($url.'/Views/monprofile.php')  ;
                 header('Location:' .$url.'/Views/monprofile.php');
                exit();
                
                  }

  
         }

 // pour ne pas inclure detail annonce quand on affiche le popup
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
       
              function deleteAnnonce(id,url){
                  
      // alert(id + url);
           
 
             //var dataString  = $('#form-edit-annonce').serialize();
            //alert (dataString);
             // AJAX code to submit form.
             var dataString = { 'id_annonce': id , 'action': 'delete'};
             alert (dataString);
             $.ajax({
             type: "POST",
             url: "DetailController.php",
             data: dataString,
            
             success: function(response) {
           //alert(response);
             },
             error:function(){
                 //alert ("errooooooooooooooooooooor");
             }
             });
             document.getElementById("myModal").style.display = 'none';
             //alert(document.location.pathname);
         document.location.href=  'http://localhost/makook/public'+'/Views/monprofile.php';
             }
             
             
       function updateAnnonce(){
     // alert("update");
           
 alert($('#form-edit-annonce').serialize()+'&action=save');
             //var dataString  = $('#form-edit-annonce').serialize();
            //alert (dataString);
             // AJAX code to submit form.
             $.ajax({
             type: "POST",
             url: "DetailController.php",
             data: $('#form-edit-annonce').serialize()+'&action=save',
          
             success: function(data) {
           //alert(response);
              document.getElementById("myModal").style.display = 'none';
               window.location.reload(true);
             },
             error:function(){
                 //alert ("errooooooooooooooooooooor");
             }
             });
          
             //location.refresh(true);
            
             }
          
       
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
    
             function supprimerAnnonce(id){
         //  alert(id);
             
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
        xmlhttp.open("POST", "../Controller/DetailController.php?id_annonce="+id+"&action=deleteAnnonce&affiche=yes" , true);
        xmlhttp.send();

             }
    
    </script>
