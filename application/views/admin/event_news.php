<div style="margin-top:100px;"> 
    <?=form_open('admin/event_news',array('method'=>'post')); ?>
    <div>
        <label> Event News </label>
        <input type="text" name="event" value="<?=$event?>">
    </div>
    <div>
        <label> Comment </label>
        <input type="text" name="comment" value="<?=$comment?>">
    </div>
    <div>
        <label> Date </label>
        <input type="date" name="event_date" value="<?=$date?>">
    </div>
    <div>
        <label> Date </label>
        <input type="time" name="event_time" value="<?=$time?>">
    </div>
        <button type="submit" name="event_button">Save</button>
    <?php echo form_close(); ?>
</div>