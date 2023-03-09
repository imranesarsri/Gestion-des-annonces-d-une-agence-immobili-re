
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
	                            <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Image</label>
		        		    	<input type="file" name="image" class="form-control" required> 
                                
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Description</label>
		        			    <input type="text" name="descreption" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Superficie</label>
		        				<input class="form-control" type="number" name="superficie" placeholder="superficie by DH"  min="1" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Addresse</label>
		        			    <input type="text" name="adresse" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Montant</label>
		        		    	<input class="form-control" type="number" name="montant" placeholder="montant by M" min="1" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Date d'annonce</label>
		        				<input class="form-control" type="date" name="date" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>Type annonce</label>
		        			<div class="form-check">
		        				<input class="form-check-input" type="radio" name="type" value="location" id="flexRadioDefault1">
		        				<label class="form-check-label" for="flexRadioDefault1">Location</label>
		        			</div> 
		        			<div class="form-check">
		        				<input class="form-check-input" type="radio" name="type" value="vente" id="flexRadioDefault2">
		        				<label class="form-check-label" for="flexRadioDefault2">Vente</label>
		        			</div>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="btn-serche" class="btn btn-primary" id="btnAdd">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>



