<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $con = new mysqli('localhost', 'root', '', 'staff');
    $con->set_charset('utf8mb4');
} catch (mysqli_sql_exception $exception) {
    error_log('Foodie database connection failed: ' . $exception->getMessage());
    http_response_code(500);
    exit('Foodie is temporarily unavailable. Please try again later.');
}
