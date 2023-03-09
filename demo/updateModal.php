<div class="modal-body">

<?php

$selects = "SELECT * FROM annonce WHERE id= $row[id]";
$results = $db->query($selects);

    while($rows = $results->fetch()){
        ?>






<div class="row">
    <div class="col-12 text-center mb-3" >
        <img src="images/<?php echo $rows['image'] ?>" style="max-width: 100% " alt="">
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label text-start">Title</label>
            <input type="text" class="form-control" name="titles"  value="<?php echo $rows['title'] ?>" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="formFile" class="form-label">Image</label>
            <input type="file" name="images" value="<?php echo $rows['image']?>" class="form-control" > 
            <input type="hidden" name="imageslink" value="<?php echo $rows['image']?>" >
            
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" name="descreptions" value="<?php echo $rows['descreption'] ?>" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="formFile" class="form-label">Superficie</label>
            <input class="form-control" type="number" name="superficies"  value="<?php echo $rows['superficie'] ?>" placeholder="superficie by DH"  min="1" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label">Addresse</label>
            <input type="text" name="adresses" value="<?php echo $rows['adresse'] ?>" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="formFile" class="form-label">Montant</label>
            <input class="form-control" type="number" name="montants" value="<?php echo $rows['montant'] ?>" placeholder="montant by M" min="1" required>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="formFile" class="form-label">Date d'annonce</label>
            <input class="form-control" type="date" name="dates" value="<?php echo $rows['date'] ?>" required>
        </div>
    </div>
    <div class="col-6">
        <label>Type annonce</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="types" value="<?php if("checked" == true)echo "location"  ?>" <?php if($rows['type'] == "location")echo "checked"  ?>  id="Location">
            <!-- <?php echo $rows['type'] ?> -->
            <label class="form-check-label" for="Location">Location</label>
        </div> 
        <div class="form-check">
            <input class="form-check-input" type="radio" name="types" value="<?php if("checked" == true)echo "vente"  ?>" <?php if($rows['type'] == "vente")echo "checked"  ?> id="vente">
            <label class="form-check-label" for="vente">Vente</label>
        </div>
    </div>
</div>

    <?php
    }

?>

</div>


