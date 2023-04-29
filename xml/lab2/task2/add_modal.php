<!-- Add New -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group m-2">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name">
					</div>
				</div>
				<div class="row form-group  m-2">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Phone:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="phone">
					</div>
				</div>
				<div class="row form-group  m-2">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address">
					</div>
				</div>
				<div class="row form-group  m-2">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" name="add" class="btn btn-primary" >ِAdd</button>
			</div>
			</form>

 
        </div>
    </div>
</div>