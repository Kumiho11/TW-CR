<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $users_file = '../users.json';
    if (file_exists($users_file)) {
        $users_data = json_decode(file_get_contents($users_file), true);
    } else {
        $users_data = [];
    }
    foreach ($users_data as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            echo json_encode(['success' => true, 'message' => 'Logare reușită! Redirecționează...']);
            exit;
        }
    }
    echo json_encode(['success' => false, 'message' => 'Nume utilizator sau parolă incorectă!']);
    exit;
} else {
    echo json_encode(['success' => false, 'message' => 'Metodă nepermisă!']);
    exit;
}
