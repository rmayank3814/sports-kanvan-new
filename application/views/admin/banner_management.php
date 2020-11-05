<style>

.banner_btn{
   border:2px solid black;
   padding:5px;
   font-size:14px;
   margin-top:50px;
}

</style>

<div style="margin-top:120px;">
<?= form_open('admin/banner_management',array('method'=>'post','novalidate'=>"novalidate",'enctype' => "multipart/form-data")); ?>
<?= validation_errors(); ?>
<div>
   <label> File: <span class="text-danger font-weight-medium">*</span> </label>
   <input type="file" name="name">
   <label> Title: </label>
   <input type="text" name="title">
   <label> Sub-title: </label>
   <input type="text" name="sub-title">
   <label> Description: </label>
   <input type="text" name="description">
</div>
<div class="text-center">
   <button class="banner_btn" name="banner_button" type="submit"> Upload </button>
</div>

<?= form_close(); ?>
</div>
