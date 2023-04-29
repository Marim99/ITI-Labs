<!DOCTYPE html>
<html>
<?php
session_start();
$index = $_SESSION["index"] ?? 0;
$file = simplexml_load_file('files/data.xml');
?>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div  class="d-flex justify-content-center" style="margin-top:10rem">
<form method="POST" action="index.php">
<div >
<input type="hidden" name="id" value="<?php echo $file->user[$index]-> id;?>">
				<div class="row form-group m-2">
					<div class="col-sm-2">
						<label class="control-label">Name:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="name" value="<?php echo $file->user[$index]->name;?>">
					</div>
				</div>
				<div class="row form-group m-2">
					<div class="col-sm-2">
						<label class="control-label" >Phone:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="phone" value="<?php echo $file->user[$index]->phone;?>">
					</div>
				</div>
				<div class="row form-group m-2">
					<div class="col-sm-2">
						<label class="control-label">Address:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="address" value="<?php echo $file->user[$index]->address;?>">
					</div>
				</div>
				<div class="row form-group m-2">
					<div class="col-sm-2">
						<label class="control-label" >Email:</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="email" value="<?php echo $file->user[$index]->email;?>">
					</div>
				</div>
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" id="form1" name="search" class="form-control" />
                    <label class="form-label" for="form1">Search</label>
                </div>
                <button type="submit" class="btn btn-primary" name="searchByName">
                </button>
            </div>
			<div class="modal-footer mt-3 d-flex justify-content-center">
				<button name="add" class="btn btn-primary"  type="button" class="btn btn-primary me-2 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">ِAdd</button>
                <button type="submit" class="btn btn-danger me-2 ms-2" name="delete">delete</button>
                <button type="submit" class="btn btn-primary me-2" name="update">update</button>
                <button type="submit" class="btn btn-primary me-2" name="next">next</button>
                <button type="submit" class="btn btn-primary me-2" name="prev">prev</button>
                <button type="submit" class="btn btn-success me-2" name="reset">reset</button>

			</div>
</div>

			</form>
            </div>
            <?php include('add_modal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>

 