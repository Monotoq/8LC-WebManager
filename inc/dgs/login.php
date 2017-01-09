<link href="/css/login.css" rel="stylesheet" type="text/css">
<section class="login container">
    <div class="logo">&nbsp;
    </div>
    <p>SIGN IN</p>
    <?php
        if(isset($_GET["err"])){
    ?>
    <div class="login message"><p>Error de inicio de sesión</p></div>
    <?php
        }
    ?>
    <form action="/php/login.php" method="post">
        <input type="text" name="user" placeholder="Usuario" required <?php if(isset($_GET["usr"])){?> value="<?php echo $_GET['usr'];} ?>" /><br />
        <input type="password" name="password" placeholder="Contraseña" required /><br />
        <input type="hidden" name="path" value="<?php echo filter_input(INPUT_SERVER,'PHP_SELF'); ?>"/>
        <a href="javascript:void(0)">¿Olvidó su contraseña?</a><br>
        <input type="submit" value="ENTRAR"/>
    </form>

</section>
