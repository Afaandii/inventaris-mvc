-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 12:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventarisnew_afandi`
--

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `ID_DENDA` int(11) NOT NULL,
  `KODE_DENDA` varchar(255) NOT NULL,
  `DENDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`ID_DENDA`, `KODE_DENDA`, `DENDA`) VALUES
(1, 'DND001', 5200),
(2, 'DND002', 12000),
(3, 'DND003', 15000),
(4, 'DND004', 20000),
(5, 'DND005', 25000),
(6, 'DND006', 35000),
(9, 'DND007', 40000),
(10, 'DND008', 45500),
(11, 'DND009', 3000),
(12, 'DND010', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `ID_DETAIL_PEMESANAN` int(11) NOT NULL,
  `ID_PERALATAN` int(11) NOT NULL,
  `ID_PEMESANAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `ID_DETAILPERBAIKAN` int(11) NOT NULL,
  `ID_PEMINJAMAN` int(11) DEFAULT NULL,
  `ID_PERALATAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_perbaikan`
--

CREATE TABLE `detail_perbaikan` (
  `ID_DETAIL_PERBAIKAN` int(11) NOT NULL,
  `KODE_DTLPERBAIKAN` varchar(255) NOT NULL,
  `ID_PERBAIKAN` int(11) NOT NULL,
  `ID_PERALATAN` int(11) NOT NULL,
  `KETERANGAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_perbaikan`
--

INSERT INTO `detail_perbaikan` (`ID_DETAIL_PERBAIKAN`, `KODE_DTLPERBAIKAN`, `ID_PERBAIKAN`, `ID_PERALATAN`, `KETERANGAN`) VALUES
(1, 'DTLPER001', 1, 1, 'Ganti layar laptop'),
(2, 'DTLPER002', 2, 2, 'Ganti lcd'),
(3, 'DTLPER003\r\n', 3, 3, 'Isi tinta'),
(4, 'DTLPER004', 4, 4, 'Engsel rusak'),
(5, 'DTLPER005', 5, 5, 'Ganti kaca');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `ID_GURU` int(11) NOT NULL,
  `KODE_GURU` varchar(255) NOT NULL,
  `ID_PEMINJAM` int(11) DEFAULT NULL,
  `ID_JABATAN` int(11) DEFAULT NULL,
  `NIK` int(11) DEFAULT NULL,
  `NAMA_GURU` varchar(30) DEFAULT NULL,
  `ALAMAT_GURU` varchar(30) DEFAULT NULL,
  `TANGGALLAHIR_GURU` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`ID_GURU`, `KODE_GURU`, `ID_PEMINJAM`, `ID_JABATAN`, `NIK`, `NAMA_GURU`, `ALAMAT_GURU`, `TANGGALLAHIR_GURU`) VALUES
(1, 'GR001', 1, 1, 1234567890, 'Agus Susanto', 'Jl. Merdeka No. 10', '1980-01-15'),
(2, 'GR002', 2, 2, 987654321, 'Budi Prasetyo', 'Jl. Kembang No. 21', '1975-03-12'),
(3, 'GR003', 3, 3, 123450987, 'Citra Lestari', 'Jl. Anggrek No. 5', '1983-05-25'),
(4, 'GR004', 4, 4, 112233445, 'Diana Puspita', 'Jl. Melati No. 18', '1978-07-30'),
(5, 'GR005', 5, 5, 998877665, 'Eko Saputra', 'Jl. Mawar No. 3', '1982-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `ID_HARI` int(11) NOT NULL,
  `KODE_HARI` varchar(255) NOT NULL,
  `NAMA_HARI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`ID_HARI`, `KODE_HARI`, `NAMA_HARI`) VALUES
(1, 'HRI001', 'Senin'),
(2, 'HRI002', 'Selasa'),
(3, 'HRI003', 'Rabu'),
(4, 'HRI004', 'Kamis'),
(5, 'HRI005', 'Jumat'),
(6, 'HRI006', 'Sabtu'),
(7, 'HRI007', 'Minggu'),
(8, 'HRI007', 'Jumat'),
(14, 'HRI008', 'Sabtu'),
(15, 'HRI009', 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `ID_JABATAN` int(11) NOT NULL,
  `KODE_JABATAN` varchar(255) NOT NULL,
  `NAMA_JABATAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`ID_JABATAN`, `KODE_JABATAN`, `NAMA_JABATAN`) VALUES
(1, 'JBTN001', 'Kepala Sekolah'),
(2, 'JBTN002', 'Wakil Kepala Sekolah'),
(3, 'JBTN003', 'Guru Konseling'),
(4, 'JBTN004', 'Guru IPS'),
(5, 'JBTN005', 'Guru Jurusan'),
(6, 'JBTN006', 'Guru Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_JADWAL` int(11) NOT NULL,
  `KODE_JADWAL` varchar(255) NOT NULL,
  `ID_KELASSISWA` int(11) DEFAULT NULL,
  `ID_PELAJARAN` int(11) DEFAULT NULL,
  `ID_GURU` int(11) DEFAULT NULL,
  `ID_HARI` int(11) DEFAULT NULL,
  `JAM_MASUK` time DEFAULT NULL,
  `JAM_KELUAR` time DEFAULT NULL,
  `SEMESTER` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`ID_JADWAL`, `KODE_JADWAL`, `ID_KELASSISWA`, `ID_PELAJARAN`, `ID_GURU`, `ID_HARI`, `JAM_MASUK`, `JAM_KELUAR`, `SEMESTER`) VALUES
(1, 'JDWL001', 1, 1, 1, 1, '07:00:00', '09:00:00', 'Ganjil'),
(2, 'JDWL002', 2, 2, 2, 2, '09:00:00', '11:00:00', 'Ganjil'),
(3, 'JDWL003', 3, 3, 3, 3, '07:00:00', '09:00:00', 'Genap'),
(4, 'JDWL004', 4, 4, 4, 4, '10:00:00', '12:00:00', 'Ganjil'),
(5, 'JDWL005', 5, 5, 5, 5, '06:45:00', '14:00:00', 'Genap'),
(8, 'JDWL006', 1, 1, 1, 1, '07:00:00', '14:45:00', 'Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `ID_JENIS` int(11) NOT NULL,
  `KODE_JENIS` varchar(255) NOT NULL,
  `NAMA_JENIS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`ID_JENIS`, `KODE_JENIS`, `NAMA_JENIS`) VALUES
(1, 'JNS001', 'Elektronik'),
(2, 'JNS002', 'Makanan'),
(3, 'JNS003', 'Pakaian'),
(4, 'JNS004', 'Olahraga'),
(5, 'JNS005', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `ID_JURUSAN` int(11) NOT NULL,
  `KODE_JURUSAN` varchar(255) NOT NULL,
  `NAMA_JURUSAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`ID_JURUSAN`, `KODE_JURUSAN`, `NAMA_JURUSAN`) VALUES
(1, 'JRSN001', 'Rekayasa Perangkat Lunak'),
(2, 'JRSN002', 'Teknik Komputer Dan Jaringan'),
(3, 'JRSN003', 'Teknik Mekatronika'),
(4, 'JRSN004', 'Desain Komunikasi Visual'),
(5, 'JRSN005', 'Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ID_KELAS` int(11) NOT NULL,
  `KODE_KELAS` varchar(255) NOT NULL,
  `NAMA_KELAS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_KELAS`, `KODE_KELAS`, `NAMA_KELAS`) VALUES
(1, 'KLS001', 'XI RPL 1'),
(2, 'KLS002', 'XI DKV 2'),
(3, 'KLS003', 'XI TKJ 1'),
(4, 'KLS004', 'XI TM 2'),
(5, 'KLS005', 'XI AKL 3'),
(6, 'KLS006', 'XI PB 2'),
(7, 'KLS007', 'XI RPL 2');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `ID_KELASSISWA` int(11) NOT NULL,
  `KODE_KELASSISWA` varchar(255) NOT NULL,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `ID_KELAS` int(11) DEFAULT NULL,
  `NAMA_KELASSISWA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`ID_KELASSISWA`, `KODE_KELASSISWA`, `ID_JURUSAN`, `ID_KELAS`, `NAMA_KELASSISWA`) VALUES
(1, 'KLSIS001', 1, 1, 'A1-0.4'),
(2, 'KLSIS002', 2, 3, 'B2-0.3'),
(3, 'KLSIS003', 3, 4, 'B3-0.5'),
(4, 'KLSIS004', 4, 2, 'C1-0.2'),
(5, 'KLSIS005', 5, 5, 'A1-1.4');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `ID_MERK` int(11) NOT NULL,
  `KODE_MERK` varchar(255) NOT NULL,
  `NAMA_MEREK` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`ID_MERK`, `KODE_MERK`, `NAMA_MEREK`) VALUES
(1, 'MRK001', 'Samsung'),
(2, 'MRK002', 'Apple'),
(3, 'MRK003', 'Xiaomi'),
(4, 'MRK004', 'Sony'),
(5, 'MRK005', 'Asus'),
(8, 'MRK007', 'Adidas');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `ID_PELAJARAN` int(11) NOT NULL,
  `KODE_PELAJARAN` varchar(255) NOT NULL,
  `NAMA_PELAJARAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`ID_PELAJARAN`, `KODE_PELAJARAN`, `NAMA_PELAJARAN`) VALUES
(1, 'PLJN001', 'Bahasa Inggris'),
(2, 'PLJN002', 'PBO'),
(3, 'PLJN003', 'Pemograman Web'),
(4, 'PLJN004', 'Sosiologi'),
(5, 'PLJN005', 'Penjas'),
(6, 'PLJN006', 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `ID_PEMESANAN` int(11) NOT NULL,
  `KODE_PEMESANAN` varchar(255) NOT NULL,
  `ID_PEMINJAM` int(11) DEFAULT NULL,
  `TANGGAL_PEMESANAN` date DEFAULT NULL,
  `STATUS_PEMESANAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`ID_PEMESANAN`, `KODE_PEMESANAN`, `ID_PEMINJAM`, `TANGGAL_PEMESANAN`, `STATUS_PEMESANAN`) VALUES
(1, 'PMSN001', 1, '2024-10-01', 'Selesai'),
(2, 'PMSN002', 2, '2024-10-05', 'Dalam Proses'),
(3, 'PMSN003', 3, '2024-10-10', 'Dibatalkan'),
(4, 'PMSN004', 4, '2024-10-15', 'Selesai'),
(5, 'PMSN005', 5, '2024-10-20', 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `ID_PEMINJAM` int(11) NOT NULL,
  `KODE_PEMINJAM` varchar(255) NOT NULL,
  `USERNAME_PEMINJAM` varchar(50) DEFAULT NULL,
  `PASSWORD_PEMINJAM` varchar(50) DEFAULT NULL,
  `STATUS_PEMINJAM` varchar(50) DEFAULT NULL,
  `KETERANGAN_PERINGATAN` varchar(100) DEFAULT NULL,
  `IMAGE_PEMINJAM` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`ID_PEMINJAM`, `KODE_PEMINJAM`, `USERNAME_PEMINJAM`, `PASSWORD_PEMINJAM`, `STATUS_PEMINJAM`, `KETERANGAN_PERINGATAN`, `IMAGE_PEMINJAM`) VALUES
(1, 'PMJM001', 'andi_setiawan', 'andi123', 'Aktif', 'Tidak ada peringatan', 'andi.jpg'),
(2, 'PMJM002', 'budi_santoso', 'budi456', 'Aktif', 'Perlu pengembalian buku', 'budi.jpg'),
(3, 'PMJM003', 'citra_dewi', 'citra789', 'Tidak Aktif', 'Buku belum dikembalikan', 'citra.jpg'),
(4, 'PMJM004', 'dedi_rahman', 'dedi123', 'Aktif', 'Tidak ada peringatan', 'dedi.jpg'),
(5, 'PMJM005', 'eko_prabowo', 'eko456', 'Aktif', 'Perlu mengembalikan buku', 'eko.jpg'),
(6, 'PMJM006', 'wijaya kusumo', 'wijaya123', 'Baru', 'Tidak ada peringatan sama sekali', '684eb12ce34c8.png'),
(8, 'PMJM007', 'coba', 'coba', 'coba', 'coba', '684febbe2d18b.png');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_PEMINJAMAN` int(11) NOT NULL,
  `KODE_PEMINJAMAN` varchar(255) NOT NULL,
  `ID_PEMINJAM` int(11) DEFAULT NULL,
  `ID_GURU` int(11) DEFAULT NULL,
  `ID_DENDA` int(11) DEFAULT NULL,
  `TANGGAL_PEMINJAMAN` datetime DEFAULT NULL,
  `TANGGAL_KEMBALI` date DEFAULT NULL,
  `TANGGAL_PENGEMBALIAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`ID_PEMINJAMAN`, `KODE_PEMINJAMAN`, `ID_PEMINJAM`, `ID_GURU`, `ID_DENDA`, `TANGGAL_PEMINJAMAN`, `TANGGAL_KEMBALI`, `TANGGAL_PENGEMBALIAN`) VALUES
(1, 'PMJMN001', 1, 1, 1, '2024-11-01 10:00:00', '2024-11-15', '2024-11-14'),
(2, 'PMJMN002', 2, 2, 2, '2024-11-02 11:00:00', '2024-11-16', '2024-11-12'),
(3, 'PMJMN003', 3, 3, 3, '2024-11-03 12:00:00', '2024-11-17', '2024-11-17'),
(4, 'PMJMN004', 4, 4, 4, '2024-11-04 09:30:00', '2024-11-18', '2024-11-21'),
(5, 'PMJMN005', 5, 5, 5, '2024-11-05 14:00:00', '2024-11-19', '2024-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_guru`
--

CREATE TABLE `peminjaman_guru` (
  `ID_PEMINJAMAN_GURU` int(11) NOT NULL,
  `KODE_PEMINJAMAN_GURU` varchar(255) NOT NULL,
  `ID_PEMINJAM` int(11) DEFAULT NULL,
  `KETERANGAN_PEMINJAMAN` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman_guru`
--

INSERT INTO `peminjaman_guru` (`ID_PEMINJAMAN_GURU`, `KODE_PEMINJAMAN_GURU`, `ID_PEMINJAM`, `KETERANGAN_PEMINJAMAN`) VALUES
(1, 'PMJMN_GR001', 1, 'Untuk Mengajar'),
(2, 'PMJMN_GR002', 2, 'Refrensi untuk mata pelajaran kelas'),
(3, 'PMJMN_GR003', 3, 'Persiapan Evaluasi Semester Awal'),
(4, 'PMJMN_GR004', 4, 'Persiapan Evaluasi Semester Akhir'),
(5, 'PMJMN_GR005', 5, 'Materi untuk kelas'),
(6, 'PMJMN_GR006', 4, 'untuk pajak');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_siswa`
--

CREATE TABLE `peminjaman_siswa` (
  `ID_PEMINJAMAN_SISWA` int(11) NOT NULL,
  `KODE_PEMINJAMAN_SISWA` varchar(255) NOT NULL,
  `ID_PEMINJAM` int(11) DEFAULT NULL,
  `MATA_PELAJARAN` varchar(50) DEFAULT NULL,
  `GURU_PENGAJAR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman_siswa`
--

INSERT INTO `peminjaman_siswa` (`ID_PEMINJAMAN_SISWA`, `KODE_PEMINJAMAN_SISWA`, `ID_PEMINJAM`, `MATA_PELAJARAN`, `GURU_PENGAJAR`) VALUES
(1, 'PMJMN_SIS001', 1, 'Bahasa Inggris', 'Ibu Erny'),
(2, 'PMJMN_SIS002', 2, 'Bahasa Jawa', 'Bapak Eko'),
(3, 'PMJMN_SIS003', 3, 'PBO ', 'Bapak Firman'),
(4, 'PMJMN_SIS004', 4, 'Pemograman website', 'Bapak Purwanto'),
(5, 'PMJMN_SIS005', 5, 'Bahasa Jepang', 'Bapak Joko'),
(6, 'PMJMN_SIS006', 3, 'Biologi', 'Budiono'),
(7, 'PMJMN_SIS007', 5, 'PKWU', 'satrio utomo darmo');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `ID_PERALATAN` int(11) NOT NULL,
  `KODE_PERALATAN` varchar(255) NOT NULL,
  `ID_JENIS` int(11) DEFAULT NULL,
  `ID_MERK` int(11) DEFAULT NULL,
  `ID_WARNA` int(11) DEFAULT NULL,
  `NAMA_PERALATAN` varchar(50) DEFAULT NULL,
  `TANGGALBELI_PERALATAN` date DEFAULT NULL,
  `STATUS_PERALATAN` varchar(50) DEFAULT NULL,
  `JUMLAHKERUSAKAN_PERALATAN` int(11) DEFAULT NULL,
  `STATUSKETERSEDIAAN_PERALATAN` varchar(50) DEFAULT NULL,
  `ATURANSERVICE_PERALATAN` int(11) DEFAULT NULL,
  `IMAGE_PERALATAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`ID_PERALATAN`, `KODE_PERALATAN`, `ID_JENIS`, `ID_MERK`, `ID_WARNA`, `NAMA_PERALATAN`, `TANGGALBELI_PERALATAN`, `STATUS_PERALATAN`, `JUMLAHKERUSAKAN_PERALATAN`, `STATUSKETERSEDIAAN_PERALATAN`, `ATURANSERVICE_PERALATAN`, `IMAGE_PERALATAN`) VALUES
(1, 'PRLT001', 1, 1, 1, 'Laptop Dell', '2022-03-10', 'Baik', 0, 'Tersedia', 2, 'laptop_dell.jpg'),
(2, 'PRLT002', 2, 2, 2, 'Proyektor Epson', '2021-08-15', 'Rusak', 1, 'Tidak Tersedia', 4, 'proyektor_epson.jpg'),
(3, 'PRLT003', 3, 3, 3, 'Printer Canon', '2023-01-20', 'Baik', 0, 'Tersedia', 1, 'printer_canon.jpg'),
(4, 'PRLT004', 4, 4, 4, 'Mesin Fotokopi', '2020-06-05', 'Perlu Servis', 2, 'Tersedia', 2, 'mesin_fotokopi.jpg'),
(5, 'PRLT005', 5, 5, 5, 'Kamera Nikon', '2022-09-17', 'Baik', 0, 'Tersedia', 3, 'kamera_nikon.jpg'),
(6, 'PRLT006', 4, 8, 5, 'Base Layer', '2025-06-15', 'Baru', 0, 'Masih Sedia', 6, '685022af47023.png');

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `ID_PERBAIKAN` int(11) NOT NULL,
  `KODE_PERBAIKAN` varchar(255) NOT NULL,
  `ID_GURU` int(11) DEFAULT NULL,
  `TANGGAL_PERBAIKAN` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`ID_PERBAIKAN`, `KODE_PERBAIKAN`, `ID_GURU`, `TANGGAL_PERBAIKAN`) VALUES
(1, 'PRBK001', 1, '2024-10-15'),
(2, 'PRBK002', 2, '2024-01-15'),
(3, 'PRBK003', 3, '2024-02-10'),
(4, 'PRBK004', 4, '2024-03-05'),
(5, 'PRBK005', 5, '2024-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_SISWA` int(11) NOT NULL,
  `KODE_SISWA` varchar(255) NOT NULL,
  `ID_PEMINJAM` int(11) DEFAULT NULL,
  `ID_KELASSISWA` int(11) DEFAULT NULL,
  `NIS` int(11) DEFAULT NULL,
  `NAMA_SISWA` varchar(50) DEFAULT NULL,
  `ALAMAT_SISWA` varchar(100) DEFAULT NULL,
  `ANGKATAN_SISWA` char(4) DEFAULT NULL,
  `KETERANGAN_SISWA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_SISWA`, `KODE_SISWA`, `ID_PEMINJAM`, `ID_KELASSISWA`, `NIS`, `NAMA_SISWA`, `ALAMAT_SISWA`, `ANGKATAN_SISWA`, `KETERANGAN_SISWA`) VALUES
(1, 'SIS001', 1, 1, 20240101, 'Ahmad Fauzi', 'Jl. Merdeka No. 10	', '2021', 'Aktif'),
(2, 'SIS002', 2, 2, 20240102, 'Budi Santoso', 'Jl. Sudirman No. 5', '2020', 'Aktif'),
(3, 'SIS003', 3, 3, 20240103, 'Cindy Rahmawati', 'Jl. Diponegoro No. 3', '2021', 'Aktif'),
(4, 'SIS004', 4, 4, 20240104, 'Dian Prasetyo', 'Jl. Gatot Subroto No. 7', '2019', 'cuti'),
(5, 'SIS005', 5, 5, 20240105, 'Eka Putri', 'Jl. Ahmad Yani No. 15', '2022', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE `warna` (
  `ID_WARNA` int(11) NOT NULL,
  `KODE_WARNA` varchar(255) NOT NULL,
  `NAMA_WARNA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`ID_WARNA`, `KODE_WARNA`, `NAMA_WARNA`) VALUES
(1, 'WRN001', 'Merah'),
(2, 'WRN002', 'Pink'),
(3, 'WRN003', 'Kuning'),
(4, 'WRN004', 'Hijau'),
(5, 'WRN005', 'Putih'),
(6, 'WRN006', 'Maroon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`ID_DENDA`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`ID_DETAIL_PEMESANAN`),
  ADD KEY `FK_RELATIONSHIP_19` (`ID_PERALATAN`),
  ADD KEY `FK_RELATIONSHIP_20` (`ID_PEMESANAN`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`ID_DETAILPERBAIKAN`),
  ADD KEY `fk_peminjaman` (`ID_PEMINJAMAN`),
  ADD KEY `fk_peralatan` (`ID_PERALATAN`);

--
-- Indexes for table `detail_perbaikan`
--
ALTER TABLE `detail_perbaikan`
  ADD PRIMARY KEY (`ID_DETAIL_PERBAIKAN`),
  ADD KEY `FK_RELATIONSHIP_26` (`ID_PERBAIKAN`),
  ADD KEY `FK_RELATIONSHIP_27` (`ID_PERALATAN`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`ID_GURU`),
  ADD KEY `FK_RELATIONSHIP_15` (`ID_PEMINJAM`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_JABATAN`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`ID_HARI`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`ID_JABATAN`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_JADWAL`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_HARI`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_PELAJARAN`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_KELASSISWA`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_GURU`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`ID_JURUSAN`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_KELAS`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`ID_KELASSISWA`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_KELAS`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_JURUSAN`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`ID_MERK`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`ID_PELAJARAN`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`ID_PEMESANAN`),
  ADD KEY `FK_RELATIONSHIP_14` (`ID_PEMINJAM`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`ID_PEMINJAM`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_PEMINJAMAN`),
  ADD KEY `FK_RELATIONSHIP_16` (`ID_DENDA`),
  ADD KEY `FK_RELATIONSHIP_17` (`ID_PEMINJAM`),
  ADD KEY `FK_RELATIONSHIP_18` (`ID_GURU`);

--
-- Indexes for table `peminjaman_guru`
--
ALTER TABLE `peminjaman_guru`
  ADD PRIMARY KEY (`ID_PEMINJAMAN_GURU`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_PEMINJAM`);

--
-- Indexes for table `peminjaman_siswa`
--
ALTER TABLE `peminjaman_siswa`
  ADD PRIMARY KEY (`ID_PEMINJAMAN_SISWA`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID_PEMINJAM`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`ID_PERALATAN`),
  ADD KEY `FK_RELATIONSHIP_23` (`ID_WARNA`),
  ADD KEY `FK_RELATIONSHIP_24` (`ID_JENIS`),
  ADD KEY `FK_RELATIONSHIP_25` (`ID_MERK`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`ID_PERBAIKAN`),
  ADD KEY `FK_RELATIONSHIP_9` (`ID_GURU`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_SISWA`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_PEMINJAM`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_KELASSISWA`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`ID_WARNA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `ID_DENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `ID_DETAIL_PEMESANAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_perbaikan`
--
ALTER TABLE `detail_perbaikan`
  MODIFY `ID_DETAIL_PERBAIKAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `ID_GURU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `ID_HARI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `ID_JABATAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID_JADWAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `ID_JENIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `ID_JURUSAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `ID_KELAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `ID_KELASSISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `ID_MERK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `ID_PELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `ID_PEMESANAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `ID_PEMINJAM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `ID_PEMINJAMAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman_guru`
--
ALTER TABLE `peminjaman_guru`
  MODIFY `ID_PEMINJAMAN_GURU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman_siswa`
--
ALTER TABLE `peminjaman_siswa`
  MODIFY `ID_PEMINJAMAN_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `ID_PERALATAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `ID_PERBAIKAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
  MODIFY `ID_WARNA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_PERALATAN`) REFERENCES `peralatan` (`ID_PERALATAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ID_PEMESANAN`) REFERENCES `pemesanan` (`ID_PEMESANAN`);

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `fk_peminjaman` FOREIGN KEY (`ID_PEMINJAMAN`) REFERENCES `peminjaman` (`ID_PEMINJAMAN`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peralatan` FOREIGN KEY (`ID_PERALATAN`) REFERENCES `peralatan` (`ID_PERALATAN`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `detail_perbaikan`
--
ALTER TABLE `detail_perbaikan`
  ADD CONSTRAINT `FK_RELATIONSHIP_26` FOREIGN KEY (`ID_PERBAIKAN`) REFERENCES `perbaikan` (`ID_PERBAIKAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`ID_PERALATAN`) REFERENCES `peralatan` (`ID_PERALATAN`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `peminjam` (`ID_PEMINJAM`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_JABATAN`) REFERENCES `jabatan` (`ID_JABATAN`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_HARI`) REFERENCES `hari` (`ID_HARI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_PELAJARAN`) REFERENCES `pelajaran` (`ID_PELAJARAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_KELASSISWA`) REFERENCES `kelas_siswa` (`ID_KELASSISWA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_GURU`) REFERENCES `guru` (`ID_GURU`);

--
-- Constraints for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_KELAS`) REFERENCES `kelas` (`ID_KELAS`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `peminjam` (`ID_PEMINJAM`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `FK_RELATIONSHIP_16` FOREIGN KEY (`ID_DENDA`) REFERENCES `denda` (`ID_DENDA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `peminjam` (`ID_PEMINJAM`),
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`ID_GURU`) REFERENCES `guru` (`ID_GURU`);

--
-- Constraints for table `peminjaman_guru`
--
ALTER TABLE `peminjaman_guru`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `peminjam` (`ID_PEMINJAM`);

--
-- Constraints for table `peminjaman_siswa`
--
ALTER TABLE `peminjaman_siswa`
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `peminjam` (`ID_PEMINJAM`);

--
-- Constraints for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`ID_WARNA`) REFERENCES `warna` (`ID_WARNA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_24` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis` (`ID_JENIS`),
  ADD CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`ID_MERK`) REFERENCES `merk` (`ID_MERK`);

--
-- Constraints for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_GURU`) REFERENCES `guru` (`ID_GURU`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `peminjam` (`ID_PEMINJAM`),
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_KELASSISWA`) REFERENCES `kelas_siswa` (`ID_KELASSISWA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
