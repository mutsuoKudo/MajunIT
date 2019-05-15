<?php
    if(isset($_GET["target"]) && $_GET["target"] !== ""){
        $target = $_GET["target"];
    
    }
    else{
        header("Location: footer.tpl");
    }
    try {
        include_once('admin/libs/db_config.php');
        $pdo =new PDO(DB_HOST, DB_USER, DB_PASS);
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