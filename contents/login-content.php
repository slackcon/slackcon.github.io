<?php
/*
 * GNU GENERAL PUBLIC LICENSE -  Version 3, 29 June 2007
 * < https://www.gnu.org/licenses/gpl-3.0.en.html >  * 
 * Autor: Jefferson Rocha <root@slackjeff.com.br> 
 * Data : 2019-08-10
 */
?>
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