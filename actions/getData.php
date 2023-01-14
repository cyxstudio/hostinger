<?php

    include '../db.php';

    $tag = $_GET["tag"];

    if (!$tag) {
        $stmt = $conn->prepare("SELECT * FROM bookmarks");
        $stmt->execute();
        $x = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($x);
    } else {
        $stmt = $conn->prepare("SELECT * FROM bookmarks WHERE tags LIKE '%$tag%'");
        $stmt->execute();
        $x = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($x);
    }
