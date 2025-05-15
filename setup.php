<?php
require 'db.php';

try {
    $db->exec("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT, 
        username TEXT UNIQUE,
        email TEXT UNIQUE,
        password TEXT
    );");
} catch (PDOException $e) {
    echo "Error users table: " . $e->getMessage();
}

try {
    $db->exec("CREATE TABLE IF NOT EXISTS lyrics (
        id INTEGER PRIMARY KEY AUTOINCREMENT, 
        user_id INTEGER,
        title TEXT, 
        body TEXT, 
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );");
} catch (PDOException $e) {
    echo "Error lyrics table: " . $e->getMessage();
}

try {
    $db->exec("CREATE TABLE IF NOT EXISTS challenge (
        id INTEGER PRIMARY KEY AUTOINCREMENT, 
        lyrics_id INTEGER,
        word1 TEXT, 
        word2 TEXT, 
        word3 TEXT, 
        FOREIGN KEY (lyrics_id) REFERENCES lyrics(id)
    );");
} catch (PDOException $e) {
    echo "Error challenge table: " . $e->getMessage();
}
?>