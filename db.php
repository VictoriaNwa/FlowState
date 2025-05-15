<?php
try {
    $db = new PDO("sqlite:" . __DIR__ . "/db/flows.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}