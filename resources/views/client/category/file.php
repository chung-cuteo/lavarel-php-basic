<h1>upload file</h1>
<form method="POST" action="<?php echo route('category.upload') ?>" enctype="multipart/form-data">
    <input type="file" name="photo">
    <?php echo csrf_field();?>
    <button type="submit">upload file</button>
</form>
