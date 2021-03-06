<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * 
 *
 * @author Eya  Nextweb
 */

class Annonce extends lib {

    private $table;

    function __construct($table) {
        //$this->data = $data;
        $this->table = $table;
        $this->con = $this->connetDB();
    }

    function getAnnonce() {

        $row = "";
        try {
            $query = "SELECT * FROM $this->table ";
            //echo "Display".$this->table.$query;
            if (!$result = $this->con->select($query)) {
                throw new Exception("ERROR QYERY NOT EXCUTED");
            } else {
                $num = $this->con->selectTableau($query);
                if (count($num) > 0) {
                    foreach ($result as $key => $value) {
                        $row[$key] = $value;
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        return $row;


        // var_dump($result);
    }

    function getAnnonceById($id) {

        $row = "";
        try {
            $query = "SELECT * FROM $this->table  WHERE id_$this->table=$id";
            //var_dump($query);

            if (!$result = $this->con->select($query)) {
                throw new Exception("ERROR QYERY NOT EXCUTED");
            } else {
                $num = $this->con->selectTableau($query);
                if (count($num) > 0) {
                    foreach ($result as $key => $value) {
                        $row[$key] = $value;
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        return $row;
    }

    function getAnnonceByCond($id, $cond) {

        $row = "";
        try {
            $query = "SELECT * FROM $this->table where $this->table.$id=$cond ORDER BY id_$this->table";

            //echo "Display".$this->table.$query;
            if (!$result = $this->con->select($query)) {
                throw new Exception("ERROR QYERY NOT EXCUTED");
            } else {
                $num = $this->con->selectTableau($query);
                if (count($num) > 0) {
                    foreach ($result as $key => $value) {
                        $row[$key] = $value;
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        return $row;
    }

    function getAnnoncePagineeByCond($cond, $page_position, $item_per_page) {

        $row = "";
        try {
            $query = "SELECT * FROM $this->table where $cond ORDER BY id_$this->table LIMIT  $page_position , $item_per_page";

            //echo "Display".$this->table.$query;
            if (!$result = $this->con->select($query)) {
                throw new Exception("ERROR QYERY NOT EXCUTED");
            } else {
                $num = $this->con->selectTableau($query);
                if (count($num) > 0) {
                    foreach ($result as $key => $value) {
                        $row[$key] = $value;
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        return $row;
    }

    function getDataBYcond($con) {

        try {


            $query = "SELECT * FROM `$this->table` WHERE $con ";
            // echo $query;
            $stmt = $this->con->prepare($query);
            $stmt->execute();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        return $stmt->fetchAll();
    }
    
        function updatedata($data,$id) {
        $som="";
        foreach ($data as $key => $value) {
            
         $arkey[]=$key;
           $arvalue[]=$value;
       }
                                               
                                                
      // echo $tabKeys=  implode( ',',$arkey)  ; 
        //echo $tabvalue=  '"'.implode( '","',$arvalue).'"'  ;  
        for ($index = 0; $index < count($arkey)-1; $index++) {
           $som.="`".$arkey[$index]."`='".$arvalue[$index]."',";
        }
        $som.="`".$arkey[$index]."`='".$arvalue[$index]."'";
        var_dump($som);
       $query='UPDATE `'.$this->table.'` SET '.$som.' where `id_annonce`='.$id;
       //var_dump($query);
        $result=$this->con->select($query);
        var_dump($result);
        return $result;
        
        
    }
    
    
         function deletedata($id) {
        
         
        $query="DELETE FROM `$this->table` where `id_annonce`=$id ";
        var_dump($query) ;
        $result=$this->con->select($query);
        
        return $result;
        
        
        
    }
    
    
    function get_exctract($chaine,$nbcaractere)
    {
        $extrait= substr($chaine,0,$nbcaractere);
        $espace=strrpos($extrait,' ');
       return substr($extrait,0,$espace);
    }

}
