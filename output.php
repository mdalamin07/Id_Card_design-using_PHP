<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="output">
        <div class="main_output">
        <?php
            if (isset($_POST["submit"])) {
                $filepath ="images/" . $_FILES["file"]["name"];
                $name = $_POST ["name"];
                $dept = $_POST ["dept"];
                $roll = $_POST ["roll"];
                $reg = $_POST ["reg"];
                $session = $_POST ["session"];
            }
        ?>
        <?php

            if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
            {
            echo "<img src=".$filepath." height=150 width=150 />";
            }
            
        ?>
        <h2>
            Name :
            <?php 
                if (isset($name)) {
                    echo $name;
                }
            ?>
        </h2>
        <h2>
            Dept :
            <?php 
                if (isset($dept)) {
                    echo $dept;
                }
            ?>
        </h2>
        <h2>
            Session :
            <?php 
                if (isset($session)) {
                    echo $session;
                }
            ?>
        </h2>
        <h2>
            Roll :
            <?php 
                if (isset($roll)) {
                    echo $roll;
                }
            ?>
        </h2>
        <h2>
            Reg No. :
            <?php 
                if (isset($reg)) {
                    echo $reg;
                }
            ?>
        </h2>
        </div>
    </div>
</body>
</html>




