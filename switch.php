<?php
$motor =  $_GET['motor'];

switch($motor){
    case "Honda metik" :
        echo "Sa punya Motor Honda Metik";
        break;
    case "Yamaha Beat" :
        echo "Sa punya Motor Yamaha Beat";
        break;
    case "Zusuki" :
        echo "Sa Punya Motor Zusuki";
        break;
    default :
        echo "Sa belum punya motor";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="" method="get">
        <select name="motor" id="">
            <option value="Honda metik"> Honda metik </option>
            <option value="Yamaha Beat"> Yamaha Beat </option>
            <option value="Zusuki"> Zusuki </option>
            <option value="">Belum Ada </option>
        </select>

    <button type="submit"> Cek Motor </button>
    </form>


</body>
</html>