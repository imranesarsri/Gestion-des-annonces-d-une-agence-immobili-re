<?php
if(isset($_POST["delete"])){
    $idr =  $_POST["delete"];
    echo $idr;

    try{
        $delete = "DELETE FROM `annonce` WHERE id = $idr ";
        $db->query($delete);
    
    
    }
    catch(PDOException $e) {
        die('error :'.$e->getMessage());
    }
    
    
};
?>