
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./styles/favicon.ico">
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
        <div class="all">
        <nav class="cont">
    <ul class="hr"><li><a class="text" href="">Главная</a></li>
    <li>Дополнительные функции</li>
    <li>Ссылки</li></ul>
</nav>
        </div>
        <div class="cont1">
            <a  href="../index.html">Главная</a>
            <a  href="">></a>
            <a  href="./scripts/calc.php">Калькулятор</a>
        </div>
        <div class="cont2">
            Калькулятор на PHP+JS
</div>
        <div class="textformat">
            <?php
            $textdesc = file_get_contents('zametka1.txt');
            echo $textdesc;
            ?>
</div>
<script>function addTextToInput(anElement)
{
 var text = document.getElementById('result').value;
 text+= anElement.innerText;
 document.getElementById('result').value = text;
}
function clr()
{
    document.getElementById("result").value = ""
}
</script>
     <?php
       $fst = $_POST['stroka'];
        if(preg_match('/(\d{0,})(?:\s*)(\w{1,4}|\*|\%|\^|\+|\-|\\|%%|√)(?:\s*)(\d+)/', $fst, $matches) !== FALSE){
            $operator = $matches[2];
            switch($operator){
                case"+":
                    $res =$matches[1] + $matches[3];
                    break;
                case "-":
                    $res = $matches[1] - $matches[3];
                    break;
                case "*":
                    $res = $matches[1] * $matches[3];
                    break;
                case "/":
                    $res =$matches[1] / $matches[3];
                    break;
                case "^":
                    $res =$matches[1] ** $matches[3];
                    break;   
                case "%":
                    $res =$matches[1] % $matches[3];
                    break;    
                case "/":
                    $res =$matches[1] / $matches[3];
                    break; 
                case "√":
                    if($matches[1] == 0)
                    {
                        $matches[1]=1;
                    }
                    $res = $matches[1]*(sqrt($matches[3]));
                    break;
                case "perc":
                    $res =($matches[1]/100)*$matches[3];
                    break;
                    }
            }
?>
    <form  class="calc" action="calc.php" method="POST">
    <table class="calc1">
        <tr class="calc1">
            <td class="calc1" colspan="3"><input class="result" type="text" name="stroka" id="result" value="<?php echo $res?>"></td>
            <td class="calc1"><button class="button" type="button" value="c" onclick="clr()">C</td>
        </tr class="calc1">
            <tr class="calc1">
            <td class="calc1"><button class="button" type="button" value="1" onclick="addTextToInput(this)">1</button></td>
            <td class="calc1"><button class="button" type="button" value="2" onclick="addTextToInput(this)">2</button></td>
            <td class="calc1"><button class="button" type="button" value="3" onclick="addTextToInput(this)">3</button></td>
            <td class="calc1"><button class="button" type="button" value="/" onclick="addTextToInput(this)">/</button></td>
</tr class="calc1">
<tr class="calc1">
    <td class="calc1"><button class="button" type="button" value="4" onclick="addTextToInput(this)">4</button></td>
    <td class="calc1"><button class="button" type="button" value="5" onclick="addTextToInput(this)">5</button></td>
    <td class="calc1"><button class="button" type="button" value="6" onclick="addTextToInput(this)">6</button></td>
    <td class="calc1"><button class="button" type="button" value="*" onclick="addTextToInput(this)">*</button></td>
</tr>
<tr class="calc1">
    <td class="calc1"><button class="button" type="button" value="7" onclick="addTextToInput(this)">7</button></td>
    <td class="calc1"><button class="button" type="button" value="8" onclick="addTextToInput(this)">8</button></td>
    <td class="calc1"><button class="button" type="button" value="9" onclick="addTextToInput(this)">9</button></td>
    <td class="calc1"><button class="button" type="button" value="-" onclick="addTextToInput(this)">-</button></td>
</tr>
<tr class="calc1">
<td class="calc1"><button class="button" type="button" value="0" onclick="addTextToInput(this)">0</button></td>
<td class="calc1"><button class="button" type="button" value="." onclick="addTextToInput(this)">.</button></td>
<td class="calc1"><input class="button" type="submit" value="="></td>
<td class="calc1"><button class="button" type="button" value="+" onclick="addTextToInput(this)">+</button></td>
</tr>
<tr class="calc1">
<td class="calc1"><button class="button" type="button" value="**" onclick="addTextToInput(this)">^</button></td>
<td class="calc1"><button class="button" type="button" value="%" onclick="addTextToInput(this)">%</button></td>
<td class="calc1"><button class="button" type="button" value="√" onclick="addTextToInput(this)">&radic;</button></td>
<td class="calc1"><button class="button" type="button" value="%%" onclick="addTextToInput(this)">perc</button></td>
</tr>
</form>
</body>
</html>