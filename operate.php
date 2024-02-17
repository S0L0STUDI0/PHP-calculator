<!--#solostudio
    _  _    _____       _       _____ _             _ _       
  _| || |_ / ____|     | |     / ____| |           | (_)      
 |_  __  _| (___   ___ | | ___| (___ | |_ _   _  __| |_  ___  
  _| || |_ \___ \ / _ \| |/ _ \\___ \| __| | | |/ _` | |/ _ \ 
 |_  __  _|____) | (_) | | (_) |___) | |_| |_| | (_| | | (_) |
   |_||_| |_____/ \___/|_|\___/_____/ \__|\__,_|\__,_|_|\___/ 
-->
<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        default:
            $result = "Invalid operator";
            break;
    }

    echo $result;
?>
<!--#SoloStuio-2024-->
