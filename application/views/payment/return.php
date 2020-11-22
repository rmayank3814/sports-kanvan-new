<div style="margin:200px;">
<?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success">
        <strong><?php echo $this->session->flashdata('success'); ?></strong>Your order successfully confirmed.Click Here to <a href="<?=base_url();?>" class="alert-link">Home</a> or <a href="<?=base_url('index.php/pages/login');?>" class="alert-link">Login</a>
    </div>
<?php }else if($this->session->flashdata('failure')){ ?>
    <div class="alert alert-danger">
        <a href="<?=base_url('index.php/pages/registration');?>" class="close" data-dismiss="alert">&times;</a>
        <strong> <?php echo $this->session->flashdata('failure'); ?></strong>
    </div>
<?php }else{ ?>
    <div class="alert alert-info">
    <strong>Info!</strong> <p>This is the different alert from success or failure.</p>
  </div>
<?php }
?>
</div>
