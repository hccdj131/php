<?php
require __DIR__.'/lib/User.php';
$pdo = require __DIR__.'/lib/db.php';
$user = new User($pdo);