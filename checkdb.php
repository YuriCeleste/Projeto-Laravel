<?php
$creds = [
    ['root', ''],
    ['root', 'root'],
    ['Projeto_Laravel', 'root'],
];
foreach ($creds as $cred) {
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;port=3306', $cred[0], $cred[1]);
        echo $cred[0] . '/' . ($cred[1] === '' ? 'empty' : $cred[1]) . ': ok\n';
    } catch (PDOException $e) {
        echo $cred[0] . '/' . ($cred[1] === '' ? 'empty' : $cred[1]) . ': ' . $e->getMessage() . '\n';
    }
}
