<style>
.title-events {
    font-size: 20px;
    font-weight:600;
}
</style>

<div style="margin-top:100px;"> 
    <?=form_open('admin/event_news',array('method'=>'post')); ?>
    <div class="container">
    <div class="col-lg-10">
        <div class="row ">
            <div class="col-md-12 mb-3">
                <label class="label-input title-events"> Event News </label>
                <input type="text" class="form-control form-control-lg" name="event" value="<?=$event?>">
            </div>
        </div>
         <div class="row">
            <div class="col-md-12 mb-3">
                <label class="label-input title-events">Comment</label>
                <input type="text" class="form-control form-control-lg" name="comment" value="<?=$comment?>">
            </div>
        </div>
      <div class="row">
            <div class="col-md-12 mb-3">
                <label class="label-input title-events"> Date </label>
                <input type="date" class="form-control form-control-lg" name="event_date" value="<?=$date?>">
            </div>
     </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label class="label-input title-events"> Time </label>
            <input type="time" class="form-control form-control-lg" name="event_time" value="<?=$time?>">
        </div>
    </div>
        <button type="submit" class="btn btn-primary btn-lg" name="event_button">Save</button>
    <?php echo form_close(); ?>
</div>
</div>
