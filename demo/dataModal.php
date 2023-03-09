<!-- <?php include("updateModal") ?> -->

<?php 

$selectes = "SELECT * FROM annonce WHERE id= $row[id]";
$results = $db->query($selectes);

    while($rows = $results->fetch()){
        ?>




<div class="modal fade" id="data<?php echo $row["id"]?>" tabindex="-1" aria-labelledby="deletLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletLabel">Data announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <img src="images/<?php echo $rows['image']?>" alt="">
                </div>
                <div class="mt-5">
                    <p>Title : <?php echo $rows['title']?></p>
                    <p>Superficie : <?php echo $rows['superficie']?></p>
                    <p>Montant : <?php echo $rows['montant']?></p>
                    <p>Date : <?php echo $rows['date']?></p>
                    <p>Type : <?php echo $rows['type']?></p>
                    <p>Adresse : <?php echo $rows['adresse']?></p>
                    <p>Description : <?php echo $rows['descreption']?></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
    }


