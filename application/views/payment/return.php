<style>
.btn, .btn:link, .btn:visited {
         padding: .5rem 1rem;
}
.confirm {
    display: flex;
    justify-content: space-evenly;
}
i.fa.fa-check-circle {
    font-size: 100px;
}
.effect1{
-webkit-box-shadow: 0 10px 6px -6px #777;
   -moz-box-shadow: 0 10px 6px -6px #777;
        box-shadow: 0 10px 6px -6px #777;
}
</style>
<div style="margin:140px 0px; text-align: -webkit-center;">
<?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success success-msg effect1">
          <h1 class="text-center mt-3">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <br><?php echo $this->session->flashdata('success'); ?>
          </h1> 
        <br>
        <h5 >Your order successfully confirmed.</h5><br>
        <div class="confirm mt-2 mb-4"> <a href="<?=base_url();?>" class="alert-link btn btn-success">Home</a> 
         <a href="<?=base_url('index.php/pages/login');?>" class="alert-link btn btn-success">Login</a>
         </div>
    </div>
<?php }else if($this->session->flashdata('failure')){ ?>
    <div class="alert alert-danger failure-message">
    
        <a href="<?=base_url('index.php/pages/registration');?>" class="close" data-dismiss="alert">&times;</a>
        <h2 class="text-center"><i class="fa fa-window-close" aria-hidden="true"></i>
        <br>
        <?php echo $this->session->flashdata('failure'); ?></h2>
    </div>
<?php }else{ ?>
    <div class="alert alert-info">
    <strong>Info!</strong> <p>This is the different alert from success or failure.</p>
  </div>
<?php }
?>
</div>
