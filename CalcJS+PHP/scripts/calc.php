
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="../styles/favicon.ico">
    <link rel="stylesheet" href=".\styles\styles.css">
</head>
<body>
    <div class="container">
        <nav>
    <ul><li><a href="../index.html" style="display: block;">Главная</a></li>
    <li>Дополнительные функции</li>
    <li>Ссылки</li></ul>
</nav>
    </div>
    <table id="calc">
        <tr>
            <td colspan="3"><input type="text" id="result"></td>
            <td><input type="button" value="c" onclick="clr()"/></td>
        </tr>
            <tr>
            <td><input type="button" value="1" onclick="dis('1')" onkeydown="myFunction(event)"></td>
            <td><input type="button" value="2" onclick="dis('2')" onkeydown="myFunction(event)"></td>
            <td><input type="button" value="3" onclick="dis('3')" onkeydown="myFunction(event)"></td>
            <td><input type="button" value="/" onclick="dis('/')" onkeydown="myFunction(event)"></td>
</tr>
<tr>
    <td><input type="button" value="4" onclick="dis('4')" onkeydown="myFunction(event)"></td>
    <td><input type="button" value="5" onclick="dis('5')" onkeydown="myFunction(event)"></td>
    <td><input type="button" value="6" onclick="dis('6')" onkeydown="myFunction(event)"></td>
    <td><input type="button" value="*" onclick="dis('*')" onkeydown="myFunction(event)"></td>
</tr>
<tr>
    <td><input type="button" value="7" onclick="dis('7')" onkeydown="myFunction(event)"></td>
    <td><input type="button" value="8" onclick="dis('8')" onkeydown="myFunction(event)"></td>
    <td><input type="button" value="9" onclick="dis('9')" onkeydown="myFunction(event)"></td>
    <td><input type="button" value="-" onclick="dis('-')" onkeydown="myFunction(event)"></td>
</tr>
<tr>
<td><input type="button" value="0" onclick="dis('0')" onkeydown="myFunction(event)"></td>
<td><input type="button" value="." onclick="dis('.')" onkeydown="myFunction(event)"></td>
<td><input type="button" value="=" onclick="dis('=')" onkeydown="myFunction(event)"></td>
<td><input type="button" value="+" onclick="dis('+')" onkeydown="myFunction(event)"></td>
</tr>
        <?php
 
         $fst=  $_POST['stroka1'];
         $sec=  $_POST['stroka2'];
         $signs = $_POST['signs'];
switch($signs)
{
    case ("+"): $res=$fst + $sec; break; 
    case ("-"): $res=$fst - $sec; break;
    case ("*"): $res=$fst * $sec; break;
    case ("/"): $res=$fst / $sec; break;
    case ("^"): $res=$fst **$sec; break;
    case ("%"): $res=$fst % $sec; break;
    default: 0; break;

}
//if()
//echo "Результат = $res";

?>
<input type="text" name="result" value="<?php echo "Результат= $res"?>">
</body>
</html>