<?php
session_start();
require("creds.php");
$cnxn = mysqli_connect($host, $user, $password, $database)

or die("error connectinggg");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advise-It</title>
    <link rel="stylesheet" href="styles/styles.css">



</head>
<body>
<div id="advise">
    <h1>Advise-It11</h1>
    <div id="button">
        <a href="planning"><button id="plan">Create New Plan</button></a>
    </div>
</div>


<a href="login.php"><button id="click" type="submit">Administrator llogin</button>
    </button></a>

</body>
</html>