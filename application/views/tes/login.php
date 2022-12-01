<html>
<form action="<?php echo base_url() . "example/validateLogin"; ?>" method="post" name="input">
    Username: <input type="text" name="username" required>
    <br>
    Password: <input type="password" name="password" required>
    <br>
    <button type="submit" value="login">LOGIN</button>
</form>

</html>