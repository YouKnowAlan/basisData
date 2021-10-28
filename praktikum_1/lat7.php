<?php
    echo "<p>the input number is </p> " . $_POST["number"] . "<br>";

    switch($_POST["number"]) {
        case "0":
            echo "black";
            break;
        case "1":
            echo "brown";
            break;
        case "2":
            echo "red";
            break;
        case "3":
            echo "orange";
            break;
        case "4":
            echo "yellow";
            break;
        case "5":
            echo "green";
            break;
        case "6":
            echo "blue";
            break;
        case "7":
            echo "violet";
            break;
        case "8":
            echo "gray";
            break;
        case "9":
            echo "white";
            break;
        default:
            echo "black";
    }
?>