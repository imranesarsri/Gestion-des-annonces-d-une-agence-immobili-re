<div class="modal fade" id="delet" tabindex="-1" aria-labelledby="deletLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletLabel">Delete announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure to delete this announcement ?</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="delete" value="<?php echo $row["id"]?>">Delete</button>
            </div>
        </div>
    </div>
</div>