<div style="margin-top:100px;">
    <?=form_open('blog/blogs', array('method'=>'post','enctype' => 'multipart/form-data')); ?>

    <div>
        <label> Photo </label>
        <input type="file" name="photo"> 
    </div>
    <div>
        <label> Title </label>
        <input type="text" name="title"> 
    </div>
    <div>
        <label> Author </label>
        <input type="text" name="author"> 
    </div>
    <div>
        <label> Content </label>
        <input type="text" name="content"> 
    </div>
    <button type="submit" name="blog_button">Save</button>

    <?php echo form_close(); ?>

</div>