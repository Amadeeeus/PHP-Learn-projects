
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="../styles/favicon.ico">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <nav>
    <ul><li><a href="../index.html" style="display: block;">Главная</a></li>
    <li>Дополнительные функции</li>
    <li>Ссылки</li></ul>
</nav>
    </div>
    <form action="../scripts/calc.php" method="POST">
        <?php 
        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";*/
         $fst=  $_POST['stroka1'];
         $sec=  $_POST['stroka2'];
         $signs = $_POST['signs'];?>
         <input type="button" name="test" value="test">
        <input type="number" id="1 "name="stroka1" value="<?php echo "$fst"?>" required>
        <select name="signs">
            <option name="plus" value="+">+</option>
            <option name="minus" value="-">-</option>
            <option name="multiply" value="*">*</option>
            <option name="divide" value="/">/</option>
            <option name="timesof" value="^">^</option>
            <option name="proc" value="%">%</option>
            </select>
        <input type="number" id="2 "name="stroka2"  value="<?php echo "$sec"?>" required>
        <input type="submit" value="=">
        </form>
        <?php



//{
 //$res = $fst + $sec;
//}
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