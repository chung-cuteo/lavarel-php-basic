<h1>add sp</h1>
<form method="POST" action="<?php echo route('category.add') ?>">
    <input type="text" name="category_name">
    <?php echo csrf_field();?>
    <button type="submit">add sp</button>
</form>
