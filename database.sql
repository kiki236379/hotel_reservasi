CREATE DATABASE ichiban_sushi;
USE ichiban_sushi;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('admin', 'admin123');

CREATE TABLE menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(10,2),
    gambar VARCHAR(255)
);

CREATE TABLE reservasi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100),
  tanggal DATE,
  waktu TIME,
  jumlah_tamu INT,
  catatan TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
