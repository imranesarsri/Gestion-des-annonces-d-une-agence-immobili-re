
<?php


if(isset($_POST["updata"])){


    function valideLinkeImage(){

        if($_POST["images"]== NULL){
            return $_POST["imageslink"];
        }else{
            return $_POST["images"];
        };

    }
$valideLinkeImage = valideLinkeImage();

$id =  $_POST["updata"];

try{

    $update = "UPDATE `annonce` SET `title`='$_POST[titles]',`image`='$valideLinkeImage',
    `descreption`='$_POST[descreptions]',`superficie`='$_POST[superficies]',
    `adresse`='$_POST[adresses]',`montant`='$_POST[montants]',`date`='$_POST[dates]',
    `type`='$_POST[types]' WHERE id = $id";
    $db->query($update);

    }
    catch(PDOException $e) {
        die('error :'.$e->getMessage());
    }
    
    
};