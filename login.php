<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require_once 'html/head.php' ?>
    </head>
    <body>

        <!-- LOGO PRINCIPAL -->
        <header>
            <?php require_once 'html/logo.php' ?>
        </header>

        <!-- LINKS -->
        <?php require_once 'html/nav.php' ?>

        <div id="container">
            <h1>Login SlackCON</h1>
            <form action="action_page.php">
                <div class="container">
                    <label for="uname"><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="uname" required>

		    <label for="psw"><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" required>

		    <button type="submit">Login</button>
		    <button type="button" class="cancelbtn">Cancel</button>
		  </div>

		  <div class="containerformclass" style="background-color:#f1f1f1">
		    <span class="psw">Esqueceu a <a href="#">senha?</a></span>
                    <br>
                    <span class="psw">Registre-se <a href="#">agora</a></span>
		  </div>
            </form>

        </div>
        <?php require_once 'html/footer.php' ?>
    </body>
</html>
