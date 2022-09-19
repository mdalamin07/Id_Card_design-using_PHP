<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="my_form">
        <form action="output.php" enctype="multipart/form-data" method="POST">
            <label>Name :</label>
            </br>
            <input type="text" name="name" placeholder="Enter Your Name">
            </br>
            <label>Department :</label>
            </br>
            <input type="text" name="dept" placeholder="Enter Your Department">
            </br>
            <label>Session :</label>
            </br>
            <input type="text" name="session" placeholder="Enter Your Session">
            </br>
            <label>Roll :</label>
            </br>
            <input type="number" name="roll" placeholder="Enter Your Roll">
            </br>
            <label>Register No. :</label>
            </br>
            <input type="number" name="reg" placeholder="Enter Your Register No.">
            </br>
            <label> Select a Image :</label>
            </br>
            <input type="file" value = "upload Profile Picture" name="file">
            </br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>