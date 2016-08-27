<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Setting
 *
 * @author Eya  Nextweb
 */
class Setting  extends lib {

    private $conn;
    private $table;

    public function __construct($table) {

        try {
            $this->table = $table;
            $database = new lib();
            $this->conn = $database->connetDB();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function runQuery($sql) {
        echo $sql;
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    function getDataBYcond($con) {
       
        try {
            
            
            $query = "SELECT * FROM `$this->table` WHERE $con ";
        //echo $query;
             $stmt=$this->conn->prepare($query);
             $stmt->execute();
                   
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

        return $stmt->fetchAll();
    }
    
     function deletdata($id) {
        
         
        $query="DELETE FROM `$this->table` where `id_$this->table`=$id ";
         echo $query;
        $result=$this->conn->select($query);
        
        return $result;
        
        
        
    }
    function getData(){
        
        try {
            
            
            $query = "SELECT * FROM `$this->table` ORDER BY `id_$this->table` DESC LIMIT 0,1";
        //echo $query;
             $stmt=$this->conn->prepare($query);
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
        echo $som;
       $query='UPDATE `'.$this->table.'` SET '.$som.' where `id_$this->table`='.$id;
        echo $query;
        $result=$this->conn->select($query);
        
        return $result;
        
        
        
    }
    function adddata($data) {
        var_dump($data);
        foreach ($data as $key => $value) {

            $arkey[] = $key;
            $arvalue[] = $value;
        }
        $tabKeys = implode(',', $arkey);
        $tabvalue = '"' . implode('","', $arvalue) . '"';
        echo $query = "INSERT INTO `$this->table` ($tabKeys) VALUES ($tabvalue)";

        $result = $this->conn->select($query);
       // $this->id_insert = $this->conn->GetID();
        return $result;
    }
    

}

//put your code here

