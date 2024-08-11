<?php
// https://sentry.io/answers/returning-json-from-a-php-script/
// Set the header content-type
header('Content-Type: application/json');

// Create or get a PHP array (or object)
$array = [
    'Canada' => 'Ottawa',
    'India' => 'New Delhi',
    'United States' => 'Washington, D.C.',
    'France' => 'Paris'
];

// Encode to JSON format
$json = json_encode($array, JSON_PRETTY_PRINT);

// Display
echo $json;
