<form method="POST" action="/unicode">
    <input type="text" name="username">
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    <button type="submit">submid</button>
</form>
