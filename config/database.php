<?php
$host = 'localhost';
$db   = 'crud_demo'; // Đảm bảo tên database chính xác
$user = 'rua';      // Thử với user khác nếu cần
$pass = 'RUA@12345';     // Mật khẩu MySQL của bạn (có thể là chuỗi rỗng '')
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Lỗi kết nối database: " . $e->getMessage());
}
?>
