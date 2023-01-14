<?php

    include '../db.php';

    $name = $_POST["name"];
    $url = $_POST["url"];
    $description = $_POST["description"];
    $tags = $_POST["tags"];
    $id = $_POST["id"];

    $sql = "UPDATE bookmarks SET name=?, url=?, description=?, tags=? WHERE id ='$id' ";

    $stmt= $conn->prepare($sql);
    $stmt->execute([$name, $url, $description, $tags]);
    

    echo "success";

