<?php session_start(); ?>
<?php 
if(isset($_POST['login'])){
include __DIR__."/functions.php";
$func = check_login($_POST);
if(is_string($func)){
    $error = $func;
}
else{
get_user_data($func);
header("location: ../index.php");
}
}
?> 
    <table class="loginform1">
  <form class="form_login" action="/index" method="post"> 
    <tbody class="login_tbody"> 
<tr class="form_login">
    <td class="login_cell"><span class="login_text">Имя пользователя</span></td>
<td class="login_cell"><input class="login_input" type="text" name="username" value=""></td>
</tr>
<tr>
    <td class="login_cell"><span class="login_text">Пароль</span></td>
<td class="login_cell"><input class="login_input" type="text" name="password" value=""></td>
</tr>
<tr>
    <input type="hidden" name="count" value ="1">
    <td class="login_cell"><input class="buttonlogin" name="login" type="submit" value="Вход"></td>
<td class="login_cell"><button class="buttonlogin"><a class="login_reg" href="/scripts/registration.php">Регистрация</a></button></td>
</tr>
<tr>
    <td class="login_error"><?php echo $error ?></td>
<td class="login_cell"><a class="login_forgot" href="">Забыли пароль?</a></td>
</tr>
    </tbody>
  </form>
</table>

    

