<?php


$status_code = 800;

$message = match($status_code) {
    200 => "Success",
    300 => "Redirect",
    403 => "Not found",
    500 => "Server Error",
    700, 800 => null,
    default => "Unknown"
};


var_dump($status_code, $message);
