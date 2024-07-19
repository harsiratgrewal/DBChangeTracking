<?php
$file = '/var/www/html/messages.txt';

// Read existing messages
$messages = is_file($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];

// Output messages as JSON
header('Content-Type: application/json');
echo json_encode($messages);

