<?php
require_once __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;

try {
    // Muat file .env dari direktori saat ini
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    // Mengambil nilai dari variabel lingkungan menggunakan $_ENV atau getenv()
    $hello = $_ENV['NAME'] ?? null; 
    
    // Memeriksa apakah variabel lingkungan berhasil diambil
    if (!$hello) {
        throw new Exception('Environment variables are not set.');
    }
    
    // Gunakan variabel ini di tempat lain dalam aplikasi
    $message = "Gie: " . $hello;

} catch (Exception $e) {
    $message = "Cannot load env: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment Variable Example</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>
