<?php
    if(isset($_GET["target"]) && $_GET["target"] !== ""){
        $target = $_GET["target"];
    
    }
    else{
        header("Location: detail.php");
    }
    try {
        $user = "MajunIT";
        $pass = "MajunITPass";
        $pdo = new PDO("mysql:dbname=majunit;host=192.168.71.171;charset=utf8", $user, $pass);
        $sql = "SELECT * FROM images WHERE id = :target;";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindValue(":target", $target, PDO::PARAM_STR);
        $stmt -> execute();
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        header("Content-Type: ".$row["mine"]);
        echo ($row["image"]);
    }
    catch (PDOException $e) {
        echo("<p>500 Inertnal Server Error</p>");
        exit($e->getMessage());
    }
?>