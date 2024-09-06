<?php

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
    echo "Gie: " . $hello;

} catch (Exception $e) {
    echo "Cannot load env: " . $e->getMessage();
}
