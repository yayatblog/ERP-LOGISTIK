-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 20.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpekspedisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `approval`
--

CREATE TABLE `approval` (
  `id` int(11) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `req_date` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `shipment_date` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `muatan` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `total_cost` varchar(50) NOT NULL,
  `total_approve` varchar(50) NOT NULL,
  `total_transfer` varchar(50) NOT NULL,
  `outstanding` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `approval`
--

INSERT INTO `approval` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `shipment_date`, `vehicle`, `fleet`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `total_cost`, `total_approve`, `total_transfer`, `outstanding`, `legal`) VALUES
(1, 'A-2 WE', '17-09-2020', '2000', 'AK-01', 'Barang mudah retak', '20-09-2020', 'B-210', 'FHJK', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', '1000', '900', '2500', 'Outstanding', 'Legal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `backup`
--

CREATE TABLE `backup` (
  `id` int(11) NOT NULL,
  `voucher` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `dd` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `backup`
--

INSERT INTO `backup` (`id`, `voucher`, `vehicle`, `dd`) VALUES
(1, 'MT/03006', 'B9158', '1'),
(2, 'MT/03006', 'B2/123', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `role_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `name`, `no_rekening`, `role_id`) VALUES
(1, 'BCA KCU Cikarang', '08657222221', '1'),
(3, 'BNI SELARAS', '77889900000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `branch`
--

INSERT INTO `branch` (`id`, `name`, `role_id`) VALUES
(1, 'Kas Besar', ''),
(3, 'Kas Kantor', ''),
(4, 'Kas Pool Cikarang', ''),
(5, 'Kas Pulogadung', ''),
(6, 'Kas Sparepart', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukubesar`
--

CREATE TABLE `bukubesar` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `no_bukti` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  `saldo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bukubesar`
--

INSERT INTO `bukubesar` (`id`, `tgl`, `transaksi`, `no_bukti`, `debit`, `kredit`, `saldo`) VALUES
(1, '11-20-2020', 'Beli Lemari', 'JP-0001', '100000', '0', '100000'),
(2, '13-06-2020', 'Beli Bangku', 'JP-0002', '0', '100000', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cancel`
--

CREATE TABLE `cancel` (
  `id` int(11) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `req_date` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `shipment_date` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `muatan` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cancel`
--

INSERT INTO `cancel` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `account`, `account_name`, `shipment_date`, `vehicle`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `legal`, `fleet`) VALUES
(1, 'A-2 WE', '17-09-2020', '2000', 'Bongkar', 'Pengiriman barang ini didahulukan', 'Ferra', 'Ferra Puspita', '20-09-2020', 'B-210', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', 'Legal', 'Fleet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chartofaccount`
--

CREATE TABLE `chartofaccount` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `saldo` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chartofaccount`
--

INSERT INTO `chartofaccount` (`id`, `kode_id`, `nama`, `jenis`, `nominal`, `saldo`, `debit`) VALUES
(2, '113', 'Fatimah', 'riel', 'kredit', '2000', '20000'),
(3, '117', 'Anggun Nur', 'Nominal', 'Debit', '1000', '900'),
(4, '117', 'Anggun Nur', 'Nominal', 'Debit', '1000', '900');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `pengirim` varchar(15) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `teks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES
(1, 'admin', '2017-05-22 15:53:30', 'Tes chat Admin'),
(2, 'moderator', '2017-05-22 15:53:39', 'Tes chat Moderator'),
(3, 'user', '2017-05-22 15:53:47', 'Hello World !'),
(4, 'admin', '2017-05-22 15:53:58', 'Hello Juga user :)'),
(5, 'moderator', '2017-05-13 18:47:34', 'HELLOW JUGA BROW'),
(7, 'admin', '2017-05-19 04:28:27', 'Hai gaes'),
(16, 'operator', '2017-05-22 16:01:41', 'tes hai :)'),
(17, 'admin', '2017-05-22 16:03:55', 'Halo juga operator'),
(18, 'operator', '2017-05-22 16:04:31', 'apa kabar ?'),
(19, 'reza', '2017-05-22 16:42:38', 'Halo'),
(20, 'admin', '2017-05-22 16:58:27', 'HALO SAYA ADMIN!'),
(21, 'tes', '2017-05-22 16:59:01', 'Halo ADMIN'),
(22, 'admin', '2017-05-22 17:12:54', 'HALO SALAM KENAL :)'),
(23, 'coba', '2017-05-22 17:13:19', 'Halo juga admin :)'),
(24, 'admin', '2017-05-22 17:25:12', 'Halo GOGO!'),
(25, 'gogo', '2017-05-22 17:25:42', 'Halo Juga Admin :)'),
(26, 'admin', '2017-05-23 22:49:44', 'HALO ROZI!'),
(27, 'rozi', '2017-05-23 22:50:14', 'Halo juga admin :)'),
(28, 'admin', '2020-06-23 08:21:00', 'Halo Jga'),
(29, 'tes', '2020-06-23 08:25:03', 'Saya mau tanya sesuatu kak?'),
(30, 'tes', '2020-06-23 08:25:48', 'Iya mau tanya apa ya?'),
(31, 'admin', '2020-06-23 09:03:41', ''),
(32, 'admin', '2020-06-23 09:04:05', 'Iya silahkan saja, apa yg ingin ditanyakan?'),
(33, 'gogo', '2020-06-23 09:10:49', 'Utuk pembuata website berapa y?'),
(34, 'admin', '2020-06-23 12:07:24', '5000.000 Mba'),
(35, 'gogo', '2020-06-23 12:08:37', 'Baik akan kami diskusika dengan team dlu y'),
(36, 'admin', '2020-06-23 12:09:08', 'Ok Mba'),
(37, 'admin', '2020-06-23 16:54:41', 'Iya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat2`
--

CREATE TABLE `chat2` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat2`
--

INSERT INTO `chat2` (`id`, `nama`, `message`) VALUES
(1, 'Maul', 'Assalamu\'alaikum'),
(2, 'Asep', 'Wa\'alaikumsalam'),
(3, 'Ayu', 'Apa Kabar'),
(4, 'Wibiarsa Ayu', 'Pesan'),
(5, 'Wibiarsa Ayu', 'Pesan'),
(6, 'Wibiarsa Ayu', 'Pesan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `role_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `city`
--

INSERT INTO `city` (`id`, `city`, `role_id`) VALUES
(1, '270 Depok Town Square', '1'),
(2, 'Cimone, Palmerah, Cengkareng', '2'),
(4, 'Sumedang', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cost`
--

CREATE TABLE `cost` (
  `id` int(11) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `group_truck` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cost`
--

INSERT INTO `cost` (`id`, `departure`, `arrival`, `group_truck`) VALUES
(1, 'Cikarang', 'API', 'CDD 4 TON'),
(3, 'Jakarta', 'API 2', 'CDD 4 TON');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cost_center`
--

CREATE TABLE `cost_center` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cost_center`
--

INSERT INTO `cost_center` (`id`, `name`, `role_id`) VALUES
(1, 'OOD2 BR', '1'),
(3, 'OOTD', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `max_ritase` varchar(50) NOT NULL,
  `max_amount` varchar(50) NOT NULL,
  `delivered` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `contact_person`, `address`, `phone`, `phone2`, `max_ritase`, `max_amount`, `delivered`) VALUES
(1, 'Yusuf', '0811111111', 'Jl. Pintu Air 2', '081111111', '0', '0', '2000000', ''),
(3, 'Delia', 'Barkah', 'Jl. Pintu Air', '081111111', '0', '1000', '10000', ''),
(4, 'Abdul Hanafi', 'Barkah', 'Jl. Pembangunan 2', '081111111', '0', '1000', '10000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarekspedisi`
--

CREATE TABLE `daftarekspedisi` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarekspedisi`
--

INSERT INTO `daftarekspedisi` (`id`, `kode`, `nama`) VALUES
(2, '1101', 'JNE REG'),
(3, '1102', 'Muda Karya Bersama'),
(4, '1103', 'Canon Prima Jaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarkirim`
--

CREATE TABLE `daftarkirim` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarkirim`
--

INSERT INTO `daftarkirim` (`id`, `nama`, `jenis`, `tarif`, `waktu`) VALUES
(1, 'Epson', 'Bahan Elektronik', '200000', '17-09-2019'),
(2, 'voltage', 'Bahan alat rumah tangga', '100000', '02-02-2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarmitra`
--

CREATE TABLE `daftarmitra` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `promoter` varchar(50) NOT NULL,
  `thn_gabung` varchar(50) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarmitra`
--

INSERT INTO `daftarmitra` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `promoter`, `thn_gabung`, `gudang`, `alamat`, `kota`, `telepon`, `email`) VALUES
(1, '1101', 'Vitkom 2', '2000-06-18', 'Programmer', 'HPI', '2014', 'Gudang 1', 'Jl. Pintu Air 10', 'Bahan Kesehatan', '0857777777', 'vitkom@gmail.com'),
(4, '1103', 'HP', '1999-06-24', 'Sekretaris', 'HRM', '2016', 'Gudang 3', 'Bogor', 'Elektronik', '0858832456', 'hperp@gmail.com'),
(5, '1106', 'Kurnia Ayu', '2000-06-11', 'Manager', 'HPO', '2015', 'Gudang 2', 'Jl. Belendung', 'Tangerang', '08788888888', 'admin@mail.com'),
(6, '1107', 'Ahmad Ali', '2000-06-10', 'Bendahara', 'HP', '2018', 'Gudang 2', 'Jl. Belendung', 'Tangerang', '08788888888', 'member@mail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivered`
--

CREATE TABLE `delivered` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `voucher` varchar(100) NOT NULL,
  `shipment` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `fleet` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `muatan` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `legal` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `revenue` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `transfer` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `delivery`
--

INSERT INTO `delivery` (`id`, `voucher`, `shipment`, `invoice`, `date`, `vehicle`, `fleet`, `driver`, `muatan`, `customer`, `departure`, `arrival`, `legal`, `notes`, `revenue`, `cost`, `transfer`, `balance`) VALUES
(1, '01/002/OP-LOG/2020', '1777778866', '11/00/11/20', '17-09-2020-20-10-2020', 'Car Box', 'Armada 1', 'Joko Susanto', '2 ton', 'Ririn Safitri', 'Kodam Jaya', 'Bandung', 'Legal', 'Barang antik mudah retak', '20000000', '1800000', '50000', '2000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `jumlah_deposit` varchar(50) NOT NULL,
  `jumlah_pengeluaran` varchar(50) NOT NULL,
  `total_deposit` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deposit`
--

INSERT INTO `deposit` (`id`, `tgl`, `manager`, `cabang`, `jumlah_deposit`, `jumlah_pengeluaran`, `total_deposit`, `status`) VALUES
(1, '11-06-2020', 'Saeful Rahman', 'Karang Tengah', '1000000', '100000', '900000', 'Aman'),
(2, '19-06-2020', 'Sofia Rahma', 'Tangerang', '2000000', '1000000', '1000000', 'Kurang Aman'),
(3, '2020-06-06', 'Iman Hanafi', 'Bandung', '2000000', '100000', '1900000', 'Aman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `distri`
--

CREATE TABLE `distri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `distri`
--

INSERT INTO `distri` (`id`, `nama`, `location`, `manager`, `profit`) VALUES
(1, 'CV Fatmawati', 'Serang', 'Saeful Rahman', '3,39%'),
(2, 'CV Adikarya', 'Tangerang', 'Sofia Rahma', '2,69%'),
(3, 'Ardhy Noviska', 'ghjiouk', 'Iman Hanafi', 'ikkkk'),
(4, 'CV Talenta', 'Surabaya', 'Iman Hanafi', '2,5%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `phone3` varchar(20) NOT NULL,
  `join_date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES
(3, 'Fajri', 'BK0023 KB', '081111111', '0', '0', '2020-12-16', 'Jl. Merdeka 2'),
(4, 'Marul', 'BK0023', '08111111', '085777777', '0', '2020-12-23', 'Jl. Pintu Air');

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver_settlement`
--

CREATE TABLE `driver_settlement` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `driver_settlement`
--

INSERT INTO `driver_settlement` (`id`, `code`, `name`, `alias`, `balance`) VALUES
(1, '1152', 'Muhammad Amru', 'Amru', 'balance');

-- --------------------------------------------------------

--
-- Struktur dari tabel `external`
--

CREATE TABLE `external` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `muatan` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `revenue` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `transfer` varchar(100) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `finish` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fleet`
--

CREATE TABLE `fleet` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fleet`
--

INSERT INTO `fleet` (`id`, `code`, `name`, `role_id`) VALUES
(1, 'CDD', 'CDD 5 Ton', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fleet_type`
--

CREATE TABLE `fleet_type` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fleet_type`
--

INSERT INTO `fleet_type` (`id`, `code`, `name`, `type`, `active`) VALUES
(1, '1102', 'CDD', 'CDD 5 Ton', 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fragh`
--

CREATE TABLE `fragh` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fragh`
--

INSERT INTO `fragh` (`id`, `code`, `name`, `role_id`) VALUES
(1, '1102', 'CDD', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jumlah_anak` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gapok` varchar(50) NOT NULL,
  `tunjangan_jabatan` varchar(50) NOT NULL,
  `gaji_diterima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `nama`, `jabatan`, `jumlah_anak`, `status`, `gapok`, `tunjangan_jabatan`, `gaji_diterima`) VALUES
(1, 'Ahmad Saeful ', 'Manager', '3', 'KAWIN', '3000000', '1000000', '4000000'),
(2, 'Miftahul Jannah', 'Wakil Manager', '1', 'KAWIN', '2700000', '800000', '3500000'),
(3, 'Ismatullah', 'Bendahara', '0', 'LAJANG', '2500000', '500000', '3000000'),
(4, 'Fatimah', 'Sekretaris', '2', 'KAWIN', '2500000', '300000', '2800000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grosssale`
--

CREATE TABLE `grosssale` (
  `id` int(11) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gross_sale` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `pcs` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `grosssale`
--

INSERT INTO `grosssale` (`id`, `manager`, `lokasi`, `gross_sale`, `profit`, `pcs`, `point`) VALUES
(1, 'Saeful Rahman', 'DKI Jakarta', '100', '3,39%', '100', '10'),
(2, 'Sofia Rahma', 'Tangerang Kota', '120', '4,69%', '100', '10'),
(3, 'dd', 'ddd', 'ddd', 'dd', 'dd', 'dd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grouptruck`
--

CREATE TABLE `grouptruck` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `role_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `grouptruck`
--

INSERT INTO `grouptruck` (`id`, `name`, `level`, `role_id`) VALUES
(1, 'CDD', '20', '1'),
(2, 'Gabungan', '30', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id`, `kode`, `nama`, `alamat`) VALUES
(2, '1101', 'Gudang ', 'Jakarta'),
(3, '1102', 'Gudang 2', 'Depok'),
(4, '1103', 'Gudang 3', 'Tangerang'),
(5, '1104', 'Gudang 4', 'Serang'),
(7, '1106', 'Gudang 6', 'Makassar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotnews`
--

CREATE TABLE `hotnews` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `nama` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hotnews`
--

INSERT INTO `hotnews` (`id`, `image`, `nama`, `manager`, `subject`, `date`) VALUES
(2, 'slider3.jpg', 'Karma Ilyas Nur', 'Sofia Rahma', 'Bersabar', '2020-06-06'),
(3, 'caterspot.jpg', 'Anggun Nur', 'Ashabul Kahfi', 'Alhamdulillah', '2020-06-06'),
(4, '3865967-wallpaper-full-hd_XNgM7er.jpg', 'Kurnia Ayu', 'Ferdian Nur', 'Alhamdulillah', '2020-06-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hutang`
--

CREATE TABLE `hutang` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_referensi` varchar(50) NOT NULL,
  `jatuh_tempo` varchar(50) NOT NULL,
  `mata_uang` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  `saldo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hutang`
--

INSERT INTO `hutang` (`id`, `tgl`, `no_referensi`, `jatuh_tempo`, `mata_uang`, `debit`, `kredit`, `saldo`) VALUES
(1, '11-05-2020', '000001', '09/09/2020', 'IDR', '10000', '0', '10000'),
(2, '13-06-2020', '000002', '19-10-2020', 'IDR', '20000', '0', '20000'),
(3, '2020-06-06', '000001', '2020-06-09', 'IDR', '10000', '0', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `internal`
--

CREATE TABLE `internal` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `muatan` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `revenue` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `transfer` varchar(100) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `finish` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `internal`
--

INSERT INTO `internal` (`id`, `voucher`, `shipment`, `invoice`, `date`, `vehicle`, `fleet`, `driver`, `muatan`, `customer`, `departure`, `arrival`, `legal`, `notes`, `revenue`, `cost`, `transfer`, `balance`, `finish`) VALUES
(1, '11/02/31/2020', 'A-2 WE', 'Notes', '2020-11-04', 'AB-2', 'Fleet', 'Joko Susanto', 'Muatan', 'Dedi Kurnia', 'BA-002', 'Jakarta', 'Legal', 'Barang mudah pecah', '150', '200', '1000000', 'Balance', 'Finish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  `customer` varchar(50) NOT NULL,
  `netto` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment_voucher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `voucher`, `date`, `due_date`, `customer`, `netto`, `status`, `payment_voucher`) VALUES
(1, 'WB-00231', '2020-11-04', '2020-11-20', 'Dedi Kurnia', '100', 'Belum dikirim', 'GH-002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoiced`
--

CREATE TABLE `invoiced` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoiced2`
--

CREATE TABLE `invoiced2` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `delivered` varchar(50) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `tax_one` varchar(50) NOT NULL,
  `tax_delivery` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `ppn` varchar(50) NOT NULL,
  `down_pay` varchar(50) NOT NULL,
  `netto` varchar(50) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `paid_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoiced2`
--

INSERT INTO `invoiced2` (`id`, `date`, `delivered`, `due_date`, `invoice_no`, `customer`, `tax_one`, `tax_delivery`, `total`, `insurance`, `ppn`, `down_pay`, `netto`, `paid`, `payment`, `paid_date`) VALUES
(1, '17-09-1999', 'Jakarta', '16 Oktober 2020', '019530', 'PT Daging Food', '100', '200', '250000', '0', '200000', '0', '2500000', '18250', '0094', '13 Oktober 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `juice`
--

CREATE TABLE `juice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL,
  `omzet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `juice`
--

INSERT INTO `juice` (`id`, `nama`, `lokasi`, `point`, `omzet`) VALUES
(1, 'CV Melati', 'DKI Jakarta', '70', '8%'),
(2, 'CV Andika', 'Tangerang Kota', '80', '8,5%'),
(3, 'CV Mekarsari', 'Surabaya', '90', '9%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnalumum`
--

CREATE TABLE `jurnalumum` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `no_bukti` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kode_debit` varchar(50) NOT NULL,
  `kode_kredit` varchar(50) NOT NULL,
  `nama_akundebit` varchar(50) NOT NULL,
  `didebit` varchar(50) NOT NULL,
  `nama_akunkredit` varchar(50) NOT NULL,
  `dikredit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurnalumum`
--

INSERT INTO `jurnalumum` (`id`, `tgl`, `transaksi`, `no_bukti`, `jumlah`, `kode_debit`, `kode_kredit`, `nama_akundebit`, `didebit`, `nama_akunkredit`, `dikredit`) VALUES
(1, '2020-06-20', 'Bayar Kue', 'JP-0001', '10000', 'KP-200', 'KP-200', 'Kas', '10000', 'Kas', '10000'),
(3, '2020-06-13', 'Beli Motherboard', '11/02/2020', '1000', 'K-200', '1000', 'Kas 2', 'Kas 2', 'Kas 2', '1000'),
(4, '2020-06-10', 'Beli Kipas Angin', '13/TF-AR/2020', '50000', 'K-300', '2000', 'Kas 3', 'Kas 3', 'Kas 3', '2000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `thn_gabung` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `thn_gabung`, `alamat`, `kota`, `no_telp`, `email`) VALUES
(2, '1101', 'Dedy Baharsyah', '2000-07-10', 'Karyawan', '2018', 'Jl. Pintu Air No.31', 'Jakarta', '0877883238', 'dedy@gmail.com'),
(3, '1102', 'Ekawati', '1999-05-14', 'CS', '2019', 'Jl. Pintu Seribu', 'Tangerang', '0812567321', 'ekawati@gmail.com'),
(4, '1103', 'Nabillah', '2000-05-15', 'Sekretaris', '2017', 'Jl. Pintu Seribu 2', 'Depok', '0857732387', 'nabillah@gmail.com'),
(6, '1105', 'Ahmad Rehan ', '2000-06-11', 'Programmer', '2015', 'Jl. Poris Gaga Cipondoh', 'Tangerang', '0811111111', 'rehan@gmail.com'),
(7, '1106', 'Hadi Zakaria', '2000-06-07', 'Supervisior', '2010', 'Jl. Pitu Seribu No.41', 'Kota Tasikmalaya', '081111111117', 'hadi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kernet`
--

CREATE TABLE `kernet` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `phone3` varchar(50) NOT NULL,
  `join_date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kernet`
--

INSERT INTO `kernet` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES
(1, 'Raehan', 'BK002', '0811111111', '0', '0', '2019-12-29', 'Jl. Pintu Air 2'),
(3, 'Faris', 'BK0024', '081111111', '085777777', '0', '2018-12-22', 'Jl. Ketapag no. 31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrast`
--

CREATE TABLE `kontrast` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontrast`
--

INSERT INTO `kontrast` (`id`, `customer`, `start_date`, `end_date`) VALUES
(1, 'Syahrizal', '2020-11-12', '2020-11-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `labar`
--

CREATE TABLE `labar` (
  `id` int(11) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `no_mobil` varchar(100) NOT NULL,
  `sopir` varchar(50) NOT NULL,
  `ritase` varchar(50) NOT NULL,
  `pendapatan` varchar(100) NOT NULL,
  `pengeluaran` varchar(100) NOT NULL,
  `persen` varchar(50) NOT NULL,
  `maintenance` varchar(100) NOT NULL,
  `persen2` varchar(50) NOT NULL,
  `laba_rugi` varchar(100) NOT NULL,
  `persen3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `labarugi`
--

CREATE TABLE `labarugi` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `komersil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanmodal`
--

CREATE TABLE `laporanmodal` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_harian`
--

CREATE TABLE `laporan_harian` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `track_no` varchar(100) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `kernet` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `persen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `legal`
--

CREATE TABLE `legal` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `legal`
--

INSERT INTO `legal` (`id`, `code`, `name`, `role_id`) VALUES
(1, '11025', 'CDD', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `loan` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loan`
--

INSERT INTO `loan` (`id`, `voucher`, `date`, `driver`, `loan`, `notes`, `amount`) VALUES
(1, 'WB-00231', '2020-11-04', 'Joko Susanto', '120000', 'Peminjaman Barang', '120000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loan_type`
--

CREATE TABLE `loan_type` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maintenance`
--

INSERT INTO `maintenance` (`id`, `name`, `role_id`) VALUES
(1, 'AKI 2', ''),
(2, 'BAN', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `oty` varchar(50) NOT NULL,
  `totalotc` varchar(50) NOT NULL,
  `ftc` varchar(50) NOT NULL,
  `totalftc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `manager`
--

INSERT INTO `manager` (`id`, `kode_id`, `nama`, `qty`, `oty`, `totalotc`, `ftc`, `totalftc`) VALUES
(1, '112', 'Beli Meja Bundar', '10', '5', '20', '10', '20'),
(2, '113', 'Beli Bangku', '20', '10', '30', '10', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `module`
--

INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES
(1, 'Master', 'Bank', 'BANK'),
(2, 'Master', 'Brach', 'BRANCH'),
(3, 'Master', 'city', 'CITY'),
(4, 'Master', 'cost', 'COST'),
(5, 'Master', 'Cost', 'Cost Center'),
(6, 'Tools', 'Module', 'MODULE'),
(7, 'Tools', 'Role', 'ROLE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `neraca`
--

CREATE TABLE `neraca` (
  `id` int(11) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `neraca_saldo` varchar(50) NOT NULL,
  `penyesuaian` varchar(50) NOT NULL,
  `neracasaldo_penyesuaian` varchar(50) NOT NULL,
  `rugi_laba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `neraca`
--

INSERT INTO `neraca` (`id`, `nama_akun`, `neraca_saldo`, `penyesuaian`, `neracasaldo_penyesuaian`, `rugi_laba`) VALUES
(1, 'Sunengsih', 'Debit 100000', 'Debit 100000', 'Debit 100000', 'Debit 100000'),
(2, 'Irfan Hakim', 'Kredit 200000', 'Kredit 200000', 'Kredit 200000', 'Kredit 200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ontheway`
--

CREATE TABLE `ontheway` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `voucher` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `netto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `voucher`, `order_date`, `customer`, `departure`, `arrival`, `netto`) VALUES
(1, '11/02/456/2020', '17-11-2020-24-11-2020', 'Adib', 'Aceh', 'Raihan', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outstanding`
--

CREATE TABLE `outstanding` (
  `id` int(11) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `req_date` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `shipment_date` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `muatan` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `outstanding`
--

INSERT INTO `outstanding` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `account`, `account_name`, `shipment_date`, `vehicle`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `legal`, `fleet`) VALUES
(1, 'A-2 WE', '17-09-2020', '2000', 'Bongkar', 'Pengiriman barang ini didahulukan', 'Ferra', 'Ferra Puspita', '20-09-2020', 'B-210', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', 'Legal', 'Fleet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `overrides`
--

CREATE TABLE `overrides` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kantor` varchar(50) NOT NULL,
  `summary` varchar(50) NOT NULL,
  `saldo_awal` varchar(50) NOT NULL,
  `masuk` varchar(50) NOT NULL,
  `keluar` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `total_saving` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `overrides`
--

INSERT INTO `overrides` (`id`, `nama`, `kantor`, `summary`, `saldo_awal`, `masuk`, `keluar`, `total`, `total_saving`) VALUES
(1, 'Fatimah', 'AL-Madinah 2', 'Simpanan', '1000', '500', '200', '300', '1300'),
(2, 'Badrun Salam', 'MMS Building', 'Summary', '2000', '1000', '500', '1500', '3500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `payment_total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `date`, `payment`, `customer`, `invoice_no`, `total`, `payment_total`) VALUES
(1, '17-09-2020', '0009', 'PT AGRENASI', '01064', '250000', '50000'),
(2, '2020-12-10', '1111', 'PT INDRA HALIN', '01023400', '11111', '1111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatanlain`
--

CREATE TABLE `pendapatanlain` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendapatanlain`
--

INSERT INTO `pendapatanlain` (`id`, `tgl`, `no_faktur`, `transaksi`, `jumlah`) VALUES
(1, '2020-06-03', '11/02/AFR/2020', 'Beli Lemari', '2'),
(2, '2020-06-02', '12/02/AFR/2020', 'Beli Meja Bundar', '4'),
(4, '2020-06-27', '11/02/AFR/2020', 'Bayar Kue Donat', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `total_qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `kode_id`, `nama`, `qty`, `satuan`, `total_qty`, `harga`, `total`) VALUES
(3, '116', 'Speaker', '100', '10', '1000', '10000', '100000'),
(5, '117', 'Processor', '10', '4', '40', '1000', '10000'),
(6, '117', 'LCD', '10', '100', '1000', '1000', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `reff` varchar(50) NOT NULL,
  `batasan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `no_akun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tgl`, `uraian`, `reff`, `batasan`, `jumlah`, `no_akun`) VALUES
(1, '2020-06-01', 'Pembelian Meja', '11/AR/K-21/2020', 'Terikat', '50.000', '111767899999'),
(2, '2020-06-05', 'Pembelian Bangku', '11/AR/K-21/2020', 'Tidak Terikat', '40000', '111767899998'),
(4, '2020-06-05', 'Membeli Donat', '11/AR/K-21/2020', 'Terikat', '10000', '1176811118');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty_karton` varchar(50) NOT NULL,
  `qty_perkarton` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `kode_id`, `nama`, `qty_karton`, `qty_perkarton`, `total`) VALUES
(1, '112', 'Motherboard', '10', '100', '1000'),
(2, '113', 'Mouse', '10', '50', '500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_chart`
--

CREATE TABLE `product_chart` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `profit_sabtu` varchar(50) NOT NULL,
  `profit_minggu` varchar(50) NOT NULL,
  `profit_senin` varchar(50) NOT NULL,
  `profit_selasa` varchar(50) NOT NULL,
  `profit_rabu` varchar(50) NOT NULL,
  `profit_kamis` varchar(50) NOT NULL,
  `profit_jumat` varchar(50) NOT NULL,
  `total_profit` varchar(50) NOT NULL,
  `total_poin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_chart`
--

INSERT INTO `product_chart` (`id`, `nama`, `manager`, `profit_sabtu`, `profit_minggu`, `profit_senin`, `profit_selasa`, `profit_rabu`, `profit_kamis`, `profit_jumat`, `total_profit`, `total_poin`) VALUES
(1, 'Fatimah', 'Saeful Rahman', '10%', '10%', '10%', '10%', '10%', '10%', '10%', '70%', '75'),
(2, 'Khanza Salsabilla', 'Sofia Rahma', '15%', '15%', '15%', '15%', '10%', '10%', '10%', '80%', '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `id_role` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `gudang` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `unitbagus` varchar(50) NOT NULL,
  `unitrusak` varchar(50) NOT NULL,
  `hpp` varchar(50) NOT NULL,
  `sebelumpajak` varchar(50) NOT NULL,
  `ppn` varchar(50) NOT NULL,
  `setelahpajak` varchar(50) NOT NULL,
  `hargasetoran` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES
(1, 'Printer', 'MK02', '1', 'Ferdian', 'Gudang 1', '200', '80', '20', '150000', '120000', '10%', '180000', '5000', '200000', 'ApelMerah.jpg'),
(3, 'Mouse', 'TPLD004', '1', 'Aman Jujur Simora', 'Gudang 2', '80', '60', '20', '120000', '100000', '10%', '150000', '10000', '300000', 'Alpukat.jpg'),
(4, 'Scanner', 'TPLE11', '1', 'Artika Malasari', 'Gudang 3', '90', '70', '20', '140000', '110000', '10%', '100000', '80000', '200000', 'Anggur.jpg'),
(6, 'Processor', 'TPLS01', '2', 'Saeful', 'Gudang 2', '100000', '20', '2', '100000', '10000', '10', '100000', '90000', '100000', 'default.jpg'),
(7, 'Buku Gambar Besar', '1107', '1', 'Rehan S', 'Gudang 4', '100000', '18', '2', '11000', '10000', '10', '100000', '90000', '100000', 'default.jpg'),
(8, 'VGA card', '1108', '1', 'Ahmad Sofyan', 'Gudang 2', '100', '15', '5', '100000', '10000', '10', '100000', '1000', '100000', 'default.jpg'),
(9, 'Kabel Data', '1109', '1', 'Ashabul Kahfi R', 'Gudang 5', '70', '10', '0', '9500', '1000', '10', '10000', '9000', '100000', 'default.jpg'),
(10, 'Ardhy Noviska', '1106', '2', 'Ashabul Kahfi', 'Gudang 2', '30', '20', '5', '11000', '10000', '10', '100000', '1000', '100000', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ready`
--

CREATE TABLE `ready` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `rent_no` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `truck` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `delivered` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rent`
--

INSERT INTO `rent` (`id`, `date`, `rent_no`, `customer`, `departure`, `arrival`, `group_truck`, `truck`, `driver`, `delivered`, `invoice_no`, `amount`, `cost`) VALUES
(1, '17-09-2020', '00001/NV-22/08', 'PT.Parit Padang Global', 'Kontrak', 'Jabodetabek', 'CDD 4 TON', 'BB927', 'Sefudin', '', '01971/INV-001/2019', '750000', '350000'),
(2, '2020-12-03', '11111', '1111', 'Jakarta', '11111', '1111111', '1111', '11111', '11111', '1111', '2', ''),
(3, '2020-12-02', '11111', '1111', '1111', '11111', 'CDE 2 TON 2', '1111', '11111', '11111', '1111', '2', ''),
(5, '2020-12-10', '000B AB', 'PT. Lion Super Indo', 'Tangerang', 'Bali ', 'CDD 4 TON 2', 'B 949', 'Joko Susanto Supriyatna', '', 'inv/90012/2020', '17,895', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `repair`
--

CREATE TABLE `repair` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `repair_no` varchar(50) NOT NULL,
  `truck` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `repair`
--

INSERT INTO `repair` (`id`, `date`, `repair_no`, `truck`, `total`) VALUES
(1, '2020-11-04', '0076/RP/09/20', 'Pembuatan Box', '164300'),
(2, '2020-12-10', '000076/RP/10/20', 'B 001', '100000'),
(3, '2020-12-10', '000076/RP/20/12', 'B 949', '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_rittase`
--

CREATE TABLE `report_rittase` (
  `id` int(11) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_shipment`
--

CREATE TABLE `report_shipment` (
  `id` int(11) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `police_no` varchar(50) NOT NULL,
  `fleet_class` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `returned`
--

CREATE TABLE `returned` (
  `id` int(11) NOT NULL,
  `voucher` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `return_gudang`
--

CREATE TABLE `return_gudang` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `gudang_tujuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `return_gudang`
--

INSERT INTO `return_gudang` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `jumlah`) VALUES
(1, '2020-06-03', '11/FKH/LM/2020', 'Pngembalian Meja Bundar', '1134', 'Meja Budar', 'Gudang 1', 'Gudang 2', '60'),
(2, '15-06-2020', '12/FKH/LM/2020', 'Pengembalian Printer', '1106', 'Elektronik', 'Gudang 3', 'Gudang 2', '20'),
(4, '2020-06-06', '13/02/AFR/2020', 'Pembelian Kursi Karyawan', '1106', 'Kursi', 'Gudang 3', 'Gudang 5', '50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `return_supplier`
--

CREATE TABLE `return_supplier` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `supplier_tujuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `return_supplier`
--

INSERT INTO `return_supplier` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `supplier_tujuan`, `jumlah`) VALUES
(1, '2020-06-03', '11/FKH/LM/2020', 'Pembelian Lemari Cokelat', '1134', 'Lemari', 'Gudang 1', 'MK-01', '100'),
(2, '2020-06-11', '12/02/AFR/2020', 'Pembelian Motherboard', '1106', 'Elektronik', 'Gudang 3', 'MK-04', '20'),
(4, '2020-06-03', '13/02/AFR/2020', 'Pembelian Sparepart Motor', '1106', 'Otomotif', 'Gudang 3', 'MK-02', '80'),
(5, '2020-06-04', '13/02/AFR/2020', 'Sudah dibayar', '1106', 'Kursi', 'Gudang 3', 'MK-03', '50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `name`, `role_id`) VALUES
(1, 'Admin Pool', '1'),
(2, 'Marketing dan Admin', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `route`
--

INSERT INTO `route` (`id`, `departure`, `arrival`, `distance`, `role_id`) VALUES
(1, 'Cikarang', 'AOS', '1250', 1),
(2, 'Jakarta', 'Bali', '50', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `police_no` varchar(50) NOT NULL,
  `fleet_class` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `summary`
--

CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_manager` varchar(50) NOT NULL,
  `total_pcs` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `summary`
--

INSERT INTO `summary` (`id`, `kode`, `nama`, `harga_manager`, `total_pcs`, `keterangan`, `debit`, `kredit`) VALUES
(1, '1105', 'Fatimah', '2000000', '100', 'sudah dibayar', '100000', '0'),
(2, '1106', 'Yogi Rustandi', '2000000', '50', 'Belum dibayar', '0', '200000'),
(4, '1106', 'Motherboard', '2000000', '100', 'Sudah dibayar', '10000', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `kode`, `nama`, `alamat`, `telepon`) VALUES
(2, '1102', 'voltage', 'Jl. Pembangunan 1', '08111111111'),
(3, '1103', 'HP', 'Jl. Pintu Seribu', '08211111111'),
(4, '1104', 'Falcon 2', 'Jl. Pintu Seribu', '08577883238');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`, `description`) VALUES
(1, 'Elektronik', 'Semua yang berhungan tentang elektronik'),
(2, 'ATK', 'Semua yang berhungan tentang alat tulis kantor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(3) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `id_role` int(3) NOT NULL,
  `hargajual` varchar(128) NOT NULL,
  `hargabeli` varchar(128) NOT NULL,
  `detail` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES
(0, 'Bayam L', 'TPLE11', 2, '100000', '80000', 'Wortel Bayam asal Aceh', '5eb67ab420635.jpg'),
(3, 'Wortel Surabaya', 'TPLD005', 2, '20000', '15000', 'Wortel Orange asal Surabaya', '5eb282618b9ea.jpg'),
(7, 'Alpukat', 'TPLD012', 1, '40000', '20000', 'Alpukat asal Lampung', '5eb67b0ac694d.jpg'),
(8, 'Apel Bandung', 'TPLED10', 1, '4000', '2000', 'Buah Apel Hijau asal Bandung', '.jpg'),
(10, 'Apel Bandung 3', 'TPLE012', 1, '30000', '20000', 'Buah Apel Merah asal Bandung', 'ApelMerah.jpg'),
(11, 'Apel Bandung 3', 'TPLE003', 1, '30000', '20000', 'Buah Apel Hijau asal Bandung', 'ApelMerah.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Hak akses Administrator'),
(2, 'Client', 'Hak akses Client');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_reset_key` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT '1526456245974.png',
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `user`, `password`, `password_reset_key`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activated`, `last_login`, `created_at`, `updated_at`, `status`, `akses`) VALUES
(1, 1, 'admin', 'admin', '$2y$05$OA.OoeNHoEkbGGKazYqPU.UOaI5jmgro8x2pRSV56ClTWlDf0EEn2', '', 'ADMIN', 'MAULANA', 'admin@mail.com', '081906515912', '1526456245974.png', 1, '2020-03-14 22:34:49', '2020-03-14 21:58:17', NULL, 1, 'ADMIN'),
(2, 2, 'member', 'coba', '$2y$05$8GdJw3BVbmhN6x2t0MNise7O0xqLMCNAN1cmP6fkhy0DZl4SxB5iO', '', 'MEMBER', 'MAULANA', 'member@mail.com', '081906515912', '1583991814826.png', 1, '2020-03-14 22:32:04', '2020-03-14 22:00:32', NULL, 1, 'USER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temperature`
--

CREATE TABLE `temperature` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `min` varchar(50) NOT NULL,
  `max` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `temperature`
--

INSERT INTO `temperature` (`id`, `customer`, `code`, `name`, `min`, `max`) VALUES
(1, 'Santia Dewi', '1152', 'Dewi', '100000', '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `term_of_payment`
--

CREATE TABLE `term_of_payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `term_of_payment`
--

INSERT INTO `term_of_payment` (`id`, `name`, `value`, `role_id`) VALUES
(1, 'Abdul Ghani', '1000000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tf_gudang`
--

CREATE TABLE `tf_gudang` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_transfer` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `gudang_tujuan` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tf_gudang`
--

INSERT INTO `tf_gudang` (`id`, `tgl`, `no_transfer`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `qty`) VALUES
(1, '2020-06-07', '11/KL/22/2020', 'Pembelian Meja Bundar', '1134', 'Meja', 'Gudang 1', 'Gudang 2', '30'),
(2, '2020-06-05', '12/KL/22/2020', 'Pembelian Motherboard', '1106', 'Elektronik', 'Gudang 3', 'Gudang 2', '15'),
(4, '2020-06-06', '13/KL/22/2020', 'Pembelian Kursi Karyawan', '1112', 'Kursi', 'Gudang 3', 'Gudang 5', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `topasmen`
--

CREATE TABLE `topasmen` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `poin_sendiri` varchar(50) NOT NULL,
  `poin_tim` varchar(50) NOT NULL,
  `peringkat_langsung` varchar(50) NOT NULL,
  `peringkat_tidaklangsung` varchar(50) NOT NULL,
  `jumlah_leader` varchar(50) NOT NULL,
  `jumlah_distributor` varchar(50) NOT NULL,
  `jumlah_retrain` varchar(50) NOT NULL,
  `jumlah_observasi` varchar(50) NOT NULL,
  `jumlah_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `topasmen`
--

INSERT INTO `topasmen` (`id`, `nama`, `manager`, `poin_sendiri`, `poin_tim`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES
(1, 'Siska', 'Saeful Rahman', '70', '70', 'CS', 'Karyawan', '2', '5', '2', '5', '2'),
(3, 'Anggun Nur', 'Iman Hanafi', '80', '90', 'Bendahara', 'Karyawan', '2', '3', '2', '2', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toplead`
--

CREATE TABLE `toplead` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `poin_sendiri` varchar(50) NOT NULL,
  `poin_tim` varchar(50) NOT NULL,
  `peringkat_langsung` varchar(50) NOT NULL,
  `peringkat_tidaklangsung` varchar(50) NOT NULL,
  `jumlah_leader` varchar(50) NOT NULL,
  `jumlah_distributor` varchar(50) NOT NULL,
  `jumlah_retrain` varchar(50) NOT NULL,
  `jumlah_observasi` varchar(50) NOT NULL,
  `jumlah_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toplead`
--

INSERT INTO `toplead` (`id`, `nama`, `manager`, `poin_sendiri`, `poin_tim`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES
(1, 'Siska', 'Saeful Rahman', '70', '70', 'CS', 'Karyawan', '2', '5', '2', '5', '2'),
(3, 'Anggun Nur', 'Iman Hanafi', '80', '90', 'Bendahara', 'Karyawan', '2', '3', '2', '2', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `shipment` varchar(50) NOT NULL,
  `req_date` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `shipment_date` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `muatan` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transfer`
--

INSERT INTO `transfer` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `account`, `account_name`, `shipment_date`, `vehicle`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `legal`, `fleet`) VALUES
(1, 'A-2 WE', '17-09-2020', '2000', 'Bongkar', 'Pengiriman barang ini didahulukan', 'Ferra', 'Ferra Puspita', '20-09-2020', 'B-210', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', 'Legal', 'Fleet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `truck`
--

CREATE TABLE `truck` (
  `id` int(11) NOT NULL,
  `truck_no` varchar(50) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `kerret` varchar(50) NOT NULL,
  `initial` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `kir` varchar(50) NOT NULL,
  `stnk` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `truck`
--

INSERT INTO `truck` (`id`, `truck_no`, `group_truck`, `driver`, `kerret`, `initial`, `distance`, `kir`, `stnk`, `target`, `year`) VALUES
(1, 'B9630 FRV', 'CDE 2 TON', 'Joko Susanto', '-', '0', '108,015', '', '06 JULI 2016', '2400000', '2004'),
(2, 'B9659 FXT', 'CDE 3 TON', 'Mahmud', '-', '0', '82,181', '', '02 Feb 2016', '0', '2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `truck_assigment`
--

CREATE TABLE `truck_assigment` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `legal` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `pool` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `truck_assigment`
--

INSERT INTO `truck_assigment` (`id`, `code`, `date`, `status`, `legal`, `notes`, `vehicle`, `pool`, `driver`) VALUES
(1, '1152', '2020-11-04', 'Aktif', 'Legal', 'Barang mudah pecah', 'Car Box', 'POL MN 23', 'Suparman'),
(2, '1156', '2020-11-04', 'Aktif', 'Legal', 'Harus diterima lebih dahulu', 'Car Box', 'MSN K20', 'Asgar Lazuardi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin'),
(7, 'admin2', 'admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909'),
(8, 'Raka', 'raka@gmail.com', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_config`
--

CREATE TABLE `user_config` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_config`
--

INSERT INTO `user_config` (`id`, `category`, `name`, `code`) VALUES
(1, 'Tools', 'Test 2', 'TESTING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `police` varchar(100) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `fleet` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `stnk` varchar(50) NOT NULL,
  `kir` varchar(50) NOT NULL,
  `siu` varchar(50) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  `cold` varchar(50) NOT NULL,
  `gps` varchar(50) NOT NULL,
  `gprs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vehicle`
--

INSERT INTO `vehicle` (`id`, `police`, `driver`, `fleet`, `year`, `stnk`, `kir`, `siu`, `insurance`, `active`, `cold`, `gps`, `gprs`) VALUES
(1, '89158FT', 'Joko Susanto', 'Fleet', '2018', '03-04-2020', '03-04-2020', '03-04-2020', 'Insurance', 'Active', 'Solo System', 'gps', 'gprs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vendors`
--

INSERT INTO `vendors` (`id`, `code`, `name`, `active`) VALUES
(1, '1152', 'CDD', 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `radius` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `zones`
--

INSERT INTO `zones` (`id`, `name`, `customer`, `city`, `radius`, `type`, `pic`) VALUES
(1, 'Raden Anggoro', 'Dedi Kurnia', 'Tangerang', '20 km', 'Bongkar', 'PIC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukubesar`
--
ALTER TABLE `bukubesar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chartofaccount`
--
ALTER TABLE `chartofaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `chat_ibfk_1` (`pengirim`);

--
-- Indeks untuk tabel `chat2`
--
ALTER TABLE `chat2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cost_center`
--
ALTER TABLE `cost_center`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftarekspedisi`
--
ALTER TABLE `daftarekspedisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftarkirim`
--
ALTER TABLE `daftarkirim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftarmitra`
--
ALTER TABLE `daftarmitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `delivered`
--
ALTER TABLE `delivered`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `distri`
--
ALTER TABLE `distri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `driver_settlement`
--
ALTER TABLE `driver_settlement`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fleet`
--
ALTER TABLE `fleet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fleet_type`
--
ALTER TABLE `fleet_type`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fragh`
--
ALTER TABLE `fragh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grosssale`
--
ALTER TABLE `grosssale`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `grouptruck`
--
ALTER TABLE `grouptruck`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hotnews`
--
ALTER TABLE `hotnews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `internal`
--
ALTER TABLE `internal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoiced`
--
ALTER TABLE `invoiced`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoiced2`
--
ALTER TABLE `invoiced2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `juice`
--
ALTER TABLE `juice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurnalumum`
--
ALTER TABLE `jurnalumum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `kernet`
--
ALTER TABLE `kernet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontrast`
--
ALTER TABLE `kontrast`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `labar`
--
ALTER TABLE `labar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `labarugi`
--
ALTER TABLE `labarugi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporanmodal`
--
ALTER TABLE `laporanmodal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_harian`
--
ALTER TABLE `laporan_harian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `legal`
--
ALTER TABLE `legal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loan_type`
--
ALTER TABLE `loan_type`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ontheway`
--
ALTER TABLE `ontheway`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outstanding`
--
ALTER TABLE `outstanding`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `overrides`
--
ALTER TABLE `overrides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendapatanlain`
--
ALTER TABLE `pendapatanlain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_chart`
--
ALTER TABLE `product_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ready`
--
ALTER TABLE `ready`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `report_rittase`
--
ALTER TABLE `report_rittase`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `report_shipment`
--
ALTER TABLE `report_shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `returned`
--
ALTER TABLE `returned`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `return_gudang`
--
ALTER TABLE `return_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `return_supplier`
--
ALTER TABLE `return_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `term_of_payment`
--
ALTER TABLE `term_of_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tf_gudang`
--
ALTER TABLE `tf_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `topasmen`
--
ALTER TABLE `topasmen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `toplead`
--
ALTER TABLE `toplead`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `truck_assigment`
--
ALTER TABLE `truck_assigment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_config`
--
ALTER TABLE `user_config`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `approval`
--
ALTER TABLE `approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bukubesar`
--
ALTER TABLE `bukubesar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `chartofaccount`
--
ALTER TABLE `chartofaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `chat2`
--
ALTER TABLE `chat2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `cost_center`
--
ALTER TABLE `cost_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `daftarekspedisi`
--
ALTER TABLE `daftarekspedisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `daftarkirim`
--
ALTER TABLE `daftarkirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `daftarmitra`
--
ALTER TABLE `daftarmitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `delivered`
--
ALTER TABLE `delivered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `distri`
--
ALTER TABLE `distri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `driver_settlement`
--
ALTER TABLE `driver_settlement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fleet`
--
ALTER TABLE `fleet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fleet_type`
--
ALTER TABLE `fleet_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fragh`
--
ALTER TABLE `fragh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `grosssale`
--
ALTER TABLE `grosssale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `grouptruck`
--
ALTER TABLE `grouptruck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `hotnews`
--
ALTER TABLE `hotnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `internal`
--
ALTER TABLE `internal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `invoiced`
--
ALTER TABLE `invoiced`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `invoiced2`
--
ALTER TABLE `invoiced2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `juice`
--
ALTER TABLE `juice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kernet`
--
ALTER TABLE `kernet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kontrast`
--
ALTER TABLE `kontrast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `labar`
--
ALTER TABLE `labar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_harian`
--
ALTER TABLE `laporan_harian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `legal`
--
ALTER TABLE `legal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `loan_type`
--
ALTER TABLE `loan_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ontheway`
--
ALTER TABLE `ontheway`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `outstanding`
--
ALTER TABLE `outstanding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ready`
--
ALTER TABLE `ready`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `repair`
--
ALTER TABLE `repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `report_rittase`
--
ALTER TABLE `report_rittase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_shipment`
--
ALTER TABLE `report_shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `returned`
--
ALTER TABLE `returned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `term_of_payment`
--
ALTER TABLE `term_of_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `truck_assigment`
--
ALTER TABLE `truck_assigment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_config`
--
ALTER TABLE `user_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
