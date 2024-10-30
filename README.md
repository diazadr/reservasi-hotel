-- Buat Database
CREATE DATABASE db_hotel;
USE db_hotel;

-- Tabel Kamar
CREATE TABLE Kamar (
    id_kamar INT AUTO_INCREMENT PRIMARY KEY,
    nomor_kamar VARCHAR(10) NOT NULL,
    tipe_kamar VARCHAR(50) NOT NULL,
    status_kamar VARCHAR(20) NOT NULL
);

-- Tabel Tamu
CREATE TABLE Tamu (
    id_tamu INT AUTO_INCREMENT PRIMARY KEY,
    nama_tamu VARCHAR(100) NOT NULL,
    kontak_tamu VARCHAR(15),
    alamat_tamu TEXT
);

-- Tabel Reservasi
CREATE TABLE Reservasi (
    id_reservasi INT AUTO_INCREMENT PRIMARY KEY,
    id_kamar INT NOT NULL,
    id_tamu INT NOT NULL,
    tanggal_checkin DATE NOT NULL,
    tanggal_checkout DATE NOT NULL,
    status_reservasi ENUM('Booked', 'Check-in', 'Check-out', 'Dibatalkan') NOT NULL,
    FOREIGN KEY (id_kamar) REFERENCES Kamar(id_kamar) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_tamu) REFERENCES Tamu(id_tamu) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Tabel Pembayaran
CREATE TABLE Pembayaran (
    id_pembayaran INT AUTO_INCREMENT PRIMARY KEY,
    id_reservasi INT NOT NULL,
    metode_pembayaran VARCHAR(50) NOT NULL,
    tanggal_pembayaran DATE NOT NULL,
    jumlah_pembayaran DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_reservasi) REFERENCES Reservasi(id_reservasi) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Database digunakan
USE db_hotel;

-- Menambahkan data ke tabel Kamar
INSERT INTO Kamar (nomor_kamar, tipe_kamar, status_kamar) VALUES
('101', 'Single', 'Tersedia'),
('102', 'Double', 'Tersedia'),
('103', 'Suite', 'Tersedia'),
('104', 'Single', 'Dipesan');

-- Menambahkan data ke tabel Tamu
INSERT INTO Tamu (nama_tamu, kontak_tamu, alamat_tamu) VALUES
('Andreas Pahala', '081234567890', 'Jl. Dago No. 10, Bandung'),
('Azka', '081298765432', 'Jl. Kanayakan No. 20, Bandung'),
('Diaz', '081234567891', 'Jl. Cihaur No. 15, Bandung'),
('Bagas', '081212345678', 'Jl. Cisitu No. 7, Bandung');

-- Menambahkan data ke tabel Reservasi
INSERT INTO Reservasi (id_kamar, id_tamu, tanggal_checkin, tanggal_checkout, status_reservasi) VALUES
(1, 1, '2024-10-10', '2024-10-15', 'Booked'),
(2, 2, '2024-10-12', '2024-10-17', 'Check-in'),
(3, 3, '2024-10-15', '2024-10-20', 'Booked'),
(4, 4, '2024-10-18', '2024-10-23', 'Dibatalkan');

-- Menambahkan data ke tabel Pembayaran
INSERT INTO Pembayaran (id_reservasi, metode_pembayaran, tanggal_pembayaran, jumlah_pembayaran) VALUES
(1, 'Kartu Kredit', '2024-10-09', 500000.00),
(2, 'Transfer Bank', '2024-10-11', 750000.00),
(3, 'Tunai', '2024-10-14', 1000000.00),
(4, 'Kartu Debit', '2024-10-19', 700000.00);

