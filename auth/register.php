<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $users_file = '../users.json';
    if (file_exists($users_file)) {
        $users_data = json_decode(file_get_contents($users_file), true);
    } else {
        $users_data = [];
    }
    foreach ($users_data as $user) {
        if ($user['username'] === $username) {
            echo json_encode(['success' => false, 'message' => 'Username-ul este deja înregistrat!']);
            exit;
        }
    }

    $users_data[] = [
        'username' => $username,
        'password' => $password
    ];

    file_put_contents($users_file, json_encode($users_data, JSON_PRETTY_PRINT));
    $_SESSION['user'] = $username;

    echo json_encode(['success' => true, 'message' => 'Înregistrare reușită! Redirecționează...']);
    exit;
} else {
    echo json_encode(['success' => false, 'message' => 'Metodă nepermisă!']);
    exit;
}
