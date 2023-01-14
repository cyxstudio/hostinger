<?php

    include '../db.php';

    $id = $_POST["id"];

    $sql = "DELETE FROM bookmarks WHERE id='$id'";

    $stmt= $conn->prepare($sql);
    $stmt->execute();


    echo "success";