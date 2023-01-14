<?php

    include '../db.php';

    $name = $_POST["name"];
    $url = $_POST["url"];
    $description = $_POST["description"];
    $tags = $_POST["tags"];

    if ($name == "") {
        try {
            $page = file_get_contents($url);
            $name = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
        } catch(Exception $e) {
            echo $e;
        }

    }



    $sql = 'INSERT INTO bookmarks(name, url, description, tags) VALUES(?,?,?,?)';

    $stmt= $conn->prepare($sql);
    $stmt->execute([$name, $url, $description, $tags]);
    
    $id = $conn->lastInsertId();

    echo $id;