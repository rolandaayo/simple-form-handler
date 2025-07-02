<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["pets"]);

    if(empty($firstname)) {
        echo "First name is required.";
        exit;
    }

    echo "These are the values you submitted:";
    echo "<br>"
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;

    header("Location: ../index.php");
}
else {
    header("Location: ../index.php");
}
