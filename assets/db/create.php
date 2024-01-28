<?php
include_once"../../blog.php";


 
    $name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];


    $sql = "INSERT INTO post (name, title, content) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $title, $content);

    $stmt->execute();
        
?>
