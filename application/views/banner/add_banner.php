
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Banner Management</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
.bann_btn{
    border:1px solid black;
    padding:5px;
    font-size:8px;
}

</style>

<body>
<div class="container-lg" style="margin-top:100px">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Banner <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"> <span>Add New Banner</span></a>
                    </div>
                </div>
            </div>
            <!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
                <?php echo form_open('banner/add_banner',array('method'=>'post','enctype' => "multipart/form-data")); ?>
					<div class="modal-header">						
						<h4 class="modal-title">New Banner</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
                    <?php echo validation_errors(); ?>
					<div class="modal-body">					
						<div class="form-group">
							<label>File:<span class="text-danger font-weight-medium">*</span></label>
							<input type="file" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Sub-title</label>
							<input type="text" name="sub-title" class="form-control">
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" name="description" class="form-control">
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="submit" class="btn btn-success" name="add_banner_button">Add</button>
					</div>
                <?php echo form_close(); ?>
			</div>
		</div>
	</div>
   
    <div id="updateEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
                <?php echo form_open('banner/update_banner',array('method'=>'post','enctype' => "multipart/form-data")); ?>
                    <?php echo validation_errors(); ?>
					<div class="modal-header">						
						<h4 class="modal-title">Update Banner</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>File:<span class="text-danger font-weight-medium">*</span></label>
							<input type="file" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Sub-title</label>
							<input type="text" name="sub-title" class="form-control">
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" name="description" class="form-control">
						</div>	
                        <!-- <input type="hidden" name="id" value="">				 -->
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="submit" class="btn btn-success" name="update_banner_button">Update</button>
					</div>
                <?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.No</th>
                <th>File</th>
                <th>Title</th>
                <th>Sub-title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php 
        if ($banner_data) {
            $i = 0;
            foreach($banner_data as $bannerData) {
                $i++; 
                ?>
        <tbody>
            <tr>
                <td><?=$i;?></td>
                <td><img src="<?php echo base_url();?>/main/images/banners/<?=$bannerData['name']?>"> </td>
                <td><?=$bannerData['title']?></td>
                <td><?=$bannerData['sub-title']?></td>
                <td><?=$bannerData['description']?></td>
                <td>
                    <a href="#updateEmployeeModal" class="btn btn-success" data-toggle="modal">Update</a>
                    <a href="<?php echo base_url();?>index.php/banner/delete_banner/<?=$bannerData['id'];?>"> Delete </a>
                </td>
            </tr>     
        </tbody>
        <?php } ?>
        <?php } ?>
    </table>
</div>
</div>
</div>