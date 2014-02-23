<section id="login_page">
    <article id="login">
        <div class="login">
            <div class="logo_login"></div>
            <form id="log_form" action='airlogin/loginRun' method="POST">
                <div><label for="login">Имя пользователя</label></div>
                <div><input type="text" id="log" name="login"
                            placeholder="Login" value="" required/></div>
                <div> <label for="password">Пароль </label></div>
                <div><input type="password" id="pass" name="password"
                            placeholder="Password" value="" required/></div>

                <input id = 'log_check' name="autovhod" type="checkbox" value=''>Запомнить пароль

                <input type="submit" id="log_b" name="send_form"  value="Вход"/>

            </form>
            <a href="<?=URL?>login/forgot">Забыли    пароль?</a>
        </div>

    </article>
</section>
