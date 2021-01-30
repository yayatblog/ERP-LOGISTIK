#
# TABLE STRUCTURE FOR: account
#

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: approval
#

DROP TABLE IF EXISTS `approval`;

CREATE TABLE `approval` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `legal` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `approval` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `shipment_date`, `vehicle`, `fleet`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `total_cost`, `total_approve`, `total_transfer`, `outstanding`, `legal`) VALUES (1, 'A-2 WE', '17-09-2020', '2000', 'AK-01', 'Barang mudah retak', '20-09-2020', 'B-210', 'FHJK', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', '1000', '900', '2500', 'Outstanding', 'Legal');


#
# TABLE STRUCTURE FOR: backup
#

DROP TABLE IF EXISTS `backup`;

CREATE TABLE `backup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `dd` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `backup` (`id`, `voucher`, `vehicle`, `dd`) VALUES (1, 'MT/03006', 'B9158', '1');
INSERT INTO `backup` (`id`, `voucher`, `vehicle`, `dd`) VALUES (2, 'MT/03006', 'B2/123', '11');


#
# TABLE STRUCTURE FOR: bank
#

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `role_id` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `bank` (`id`, `name`, `atas_nama`, `no_rekening`, `role_id`) VALUES (1, 'BCA KCU Cikarang', '', '08657222221', '1');
INSERT INTO `bank` (`id`, `name`, `atas_nama`, `no_rekening`, `role_id`) VALUES (3, 'BNI SELARAS', 'Caca', '77889900000', '');
INSERT INTO `bank` (`id`, `name`, `atas_nama`, `no_rekening`, `role_id`) VALUES (5, 'Raihan', 'Raihan Abdul', '27000000000', '');


#
# TABLE STRUCTURE FOR: branch
#

DROP TABLE IF EXISTS `branch`;

CREATE TABLE `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `branch` (`id`, `name`, `role_id`) VALUES (1, 'Kas Besar', '');
INSERT INTO `branch` (`id`, `name`, `role_id`) VALUES (3, 'Kas Kantor', '');
INSERT INTO `branch` (`id`, `name`, `role_id`) VALUES (4, 'Kas Pool Cikarang', '');
INSERT INTO `branch` (`id`, `name`, `role_id`) VALUES (5, 'Kas Pulogadung', '');
INSERT INTO `branch` (`id`, `name`, `role_id`) VALUES (7, 'Kas Cabang', '');


#
# TABLE STRUCTURE FOR: bukubesar
#

DROP TABLE IF EXISTS `bukubesar`;

CREATE TABLE `bukubesar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` varchar(50) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `no_bukti` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  `saldo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `bukubesar` (`id`, `tgl`, `transaksi`, `no_bukti`, `debit`, `kredit`, `saldo`) VALUES (1, '11-20-2020', 'Beli Lemari', 'JP-0001', '100000', '0', '100000');
INSERT INTO `bukubesar` (`id`, `tgl`, `transaksi`, `no_bukti`, `debit`, `kredit`, `saldo`) VALUES (2, '13-06-2020', 'Beli Bangku', 'JP-0002', '0', '100000', '100000');


#
# TABLE STRUCTURE FOR: cancel
#

DROP TABLE IF EXISTS `cancel`;

CREATE TABLE `cancel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `fleet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `cancel` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `account`, `account_name`, `shipment_date`, `vehicle`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `legal`, `fleet`) VALUES (1, 'A-2 WE', '17-09-2020', '2000', 'Bongkar', 'Pengiriman barang ini didahulukan', 'Ferra', 'Ferra Puspita', '20-09-2020', 'B-210', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', 'Legal', 'Fleet');


#
# TABLE STRUCTURE FOR: chartofaccount
#

DROP TABLE IF EXISTS `chartofaccount`;

CREATE TABLE `chartofaccount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `saldo` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `chartofaccount` (`id`, `kode_id`, `nama`, `jenis`, `nominal`, `saldo`, `debit`) VALUES (2, '113', 'Fatimah', 'riel', 'kredit', '2000', '20000');
INSERT INTO `chartofaccount` (`id`, `kode_id`, `nama`, `jenis`, `nominal`, `saldo`, `debit`) VALUES (3, '117', 'Anggun Nur', 'Nominal', 'Debit', '1000', '900');
INSERT INTO `chartofaccount` (`id`, `kode_id`, `nama`, `jenis`, `nominal`, `saldo`, `debit`) VALUES (4, '117', 'Anggun Nur', 'Nominal', 'Debit', '1000', '900');


#
# TABLE STRUCTURE FOR: chat
#

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(15) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `teks` text NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `chat_ibfk_1` (`pengirim`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (1, 'admin', '2017-05-22 22:53:30', 'Tes chat Admin');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (2, 'moderator', '2017-05-22 22:53:39', 'Tes chat Moderator');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (3, 'user', '2017-05-22 22:53:47', 'Hello World !');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (4, 'admin', '2017-05-22 22:53:58', 'Hello Juga user :)');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (5, 'moderator', '2017-05-14 01:47:34', 'HELLOW JUGA BROW');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (7, 'admin', '2017-05-19 11:28:27', 'Hai gaes');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (16, 'operator', '2017-05-22 23:01:41', 'tes hai :)');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (17, 'admin', '2017-05-22 23:03:55', 'Halo juga operator');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (18, 'operator', '2017-05-22 23:04:31', 'apa kabar ?');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (19, 'reza', '2017-05-22 23:42:38', 'Halo');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (20, 'admin', '2017-05-22 23:58:27', 'HALO SAYA ADMIN!');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (21, 'tes', '2017-05-22 23:59:01', 'Halo ADMIN');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (22, 'admin', '2017-05-23 00:12:54', 'HALO SALAM KENAL :)');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (23, 'coba', '2017-05-23 00:13:19', 'Halo juga admin :)');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (24, 'admin', '2017-05-23 00:25:12', 'Halo GOGO!');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (25, 'gogo', '2017-05-23 00:25:42', 'Halo Juga Admin :)');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (26, 'admin', '2017-05-24 05:49:44', 'HALO ROZI!');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (27, 'rozi', '2017-05-24 05:50:14', 'Halo juga admin :)');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (28, 'admin', '2020-06-23 15:21:00', 'Halo Jga');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (29, 'tes', '2020-06-23 15:25:03', 'Saya mau tanya sesuatu kak?');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (30, 'tes', '2020-06-23 15:25:48', 'Iya mau tanya apa ya?');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (31, 'admin', '2020-06-23 16:03:41', '');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (32, 'admin', '2020-06-23 16:04:05', 'Iya silahkan saja, apa yg ingin ditanyakan?');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (33, 'gogo', '2020-06-23 16:10:49', 'Utuk pembuata website berapa y?');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (34, 'admin', '2020-06-23 19:07:24', '5000.000 Mba');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (35, 'gogo', '2020-06-23 19:08:37', 'Baik akan kami diskusika dengan team dlu y');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (36, 'admin', '2020-06-23 19:09:08', 'Ok Mba');
INSERT INTO `chat` (`id_chat`, `pengirim`, `waktu`, `teks`) VALUES (37, 'admin', '2020-06-23 23:54:41', 'Iya');


#
# TABLE STRUCTURE FOR: chat2
#

DROP TABLE IF EXISTS `chat2`;

CREATE TABLE `chat2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `chat2` (`id`, `nama`, `message`) VALUES (1, 'Maul', 'Assalamu\'alaikum');
INSERT INTO `chat2` (`id`, `nama`, `message`) VALUES (2, 'Asep', 'Wa\'alaikumsalam');
INSERT INTO `chat2` (`id`, `nama`, `message`) VALUES (3, 'Ayu', 'Apa Kabar');
INSERT INTO `chat2` (`id`, `nama`, `message`) VALUES (4, 'Wibiarsa Ayu', 'Pesan');
INSERT INTO `chat2` (`id`, `nama`, `message`) VALUES (5, 'Wibiarsa Ayu', 'Pesan');
INSERT INTO `chat2` (`id`, `nama`, `message`) VALUES (6, 'Wibiarsa Ayu', 'Pesan');


#
# TABLE STRUCTURE FOR: city
#

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL,
  `role_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `city` (`id`, `city`, `role_id`) VALUES (1, '270 Depok Town Square', '1');
INSERT INTO `city` (`id`, `city`, `role_id`) VALUES (2, 'Cimone, Palmerah, Cengkareng', '2');
INSERT INTO `city` (`id`, `city`, `role_id`) VALUES (6, 'Surabaya', '');


#
# TABLE STRUCTURE FOR: cost
#

DROP TABLE IF EXISTS `cost`;

CREATE TABLE `cost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departure` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `cost` (`id`, `departure`, `arrival`, `group_truck`, `cost_center`, `amount`) VALUES (1, 'Cikarang', 'API', 'CDD 4 TON', '', '');
INSERT INTO `cost` (`id`, `departure`, `arrival`, `group_truck`, `cost_center`, `amount`) VALUES (3, 'Jakarta', 'API 2', 'CDD 4 TON', '', '');
INSERT INTO `cost` (`id`, `departure`, `arrival`, `group_truck`, `cost_center`, `amount`) VALUES (4, 'Jakarta', 'Surabaya', 'LK001', '', '');
INSERT INTO `cost` (`id`, `departure`, `arrival`, `group_truck`, `cost_center`, `amount`) VALUES (5, 'Bandung', 'Surabaya', 'Gabungan', 'OOD2 BR', '1200');


#
# TABLE STRUCTURE FOR: cost_center
#

DROP TABLE IF EXISTS `cost_center`;

CREATE TABLE `cost_center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `cost_center` (`id`, `name`, `role_id`) VALUES (1, 'OOD2 BR', '1');
INSERT INTO `cost_center` (`id`, `name`, `role_id`) VALUES (3, 'OOTD', '');
INSERT INTO `cost_center` (`id`, `name`, `role_id`) VALUES (4, 'LE003', '');


#
# TABLE STRUCTURE FOR: customer
#

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `phone3` varchar(100) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tax_name` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `nppkp` varchar(50) NOT NULL,
  `tax_address` varchar(100) NOT NULL,
  `tax_address2` varchar(100) NOT NULL,
  `max_rittase` varchar(100) NOT NULL,
  `max_amount` varchar(100) NOT NULL,
  `delivered` varchar(100) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `customer` (`id`, `name`, `contact_person`, `address`, `address2`, `phone`, `phone2`, `phone3`, `fax`, `email`, `tax_name`, `npwp`, `nppkp`, `tax_address`, `tax_address2`, `max_rittase`, `max_amount`, `delivered`, `departure`, `arrival`, `group_truck`, `amount`) VALUES (1, 'Maulana H', '01111111111', 'Jl. Pintu Air', 'Jl. Pintu Air 2', '0811111111', '08222222', '0824555', '0822222', 'kuku@gmail.com', 'Maulana', '01111111111', '02222222222', 'Jl. Pintu Air', 'Jl. Pintu Air 2', '2000', '2000', 'on', 'Bandung', 'Medan', 'BH002', '12000');
INSERT INTO `customer` (`id`, `name`, `contact_person`, `address`, `address2`, `phone`, `phone2`, `phone3`, `fax`, `email`, `tax_name`, `npwp`, `nppkp`, `tax_address`, `tax_address2`, `max_rittase`, `max_amount`, `delivered`, `departure`, `arrival`, `group_truck`, `amount`) VALUES (2, 'Yusuf', '0811111111', 'Jl. Pintu Air 2', '', '081111111', '0', '', '0', '2000000', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `customer` (`id`, `name`, `contact_person`, `address`, `address2`, `phone`, `phone2`, `phone3`, `fax`, `email`, `tax_name`, `npwp`, `nppkp`, `tax_address`, `tax_address2`, `max_rittase`, `max_amount`, `delivered`, `departure`, `arrival`, `group_truck`, `amount`) VALUES (3, 'Delia', 'Barkah', 'Jl. Pintu Air', '', '081111111', '0', '', '1000', '10000', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `customer` (`id`, `name`, `contact_person`, `address`, `address2`, `phone`, `phone2`, `phone3`, `fax`, `email`, `tax_name`, `npwp`, `nppkp`, `tax_address`, `tax_address2`, `max_rittase`, `max_amount`, `delivered`, `departure`, `arrival`, `group_truck`, `amount`) VALUES (4, 'Abdul Hanafi', 'Barkah', 'Jl. Pembangunan 2', '', '081111111', '0', '', '1000', '10000', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `customer` (`id`, `name`, `contact_person`, `address`, `address2`, `phone`, `phone2`, `phone3`, `fax`, `email`, `tax_name`, `npwp`, `nppkp`, `tax_address`, `tax_address2`, `max_rittase`, `max_amount`, `delivered`, `departure`, `arrival`, `group_truck`, `amount`) VALUES (5, 'Fahri', '01111111111', 'Jl. Pembangunan 3', 'Jl. Pembangunan 3', '0811111111', '08222222', '0824555', '082222222', 'kuku@gmail.com', 'Maulana', '01111111111', '02222222222', 'Jl. Pembangunan 3', 'Jl. Pembangunan 3', '2000', '1000', '', 'Bandung', 'Medan', 'BH002', '12000');


#
# TABLE STRUCTURE FOR: daftarekspedisi
#

DROP TABLE IF EXISTS `daftarekspedisi`;

CREATE TABLE `daftarekspedisi` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `daftarekspedisi` (`id`, `kode`, `nama`) VALUES (2, '1101', 'JNE REG');
INSERT INTO `daftarekspedisi` (`id`, `kode`, `nama`) VALUES (3, '1102', 'Muda Karya Bersama');
INSERT INTO `daftarekspedisi` (`id`, `kode`, `nama`) VALUES (4, '1103', 'Canon Prima Jaya');


#
# TABLE STRUCTURE FOR: daftarkirim
#

DROP TABLE IF EXISTS `daftarkirim`;

CREATE TABLE `daftarkirim` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tarif` varchar(50) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `daftarkirim` (`id`, `nama`, `jenis`, `tarif`, `waktu`) VALUES (1, 'Epson', 'Bahan Elektronik', '200000', '17-09-2019');
INSERT INTO `daftarkirim` (`id`, `nama`, `jenis`, `tarif`, `waktu`) VALUES (2, 'voltage', 'Bahan alat rumah tangga', '100000', '02-02-2020');


#
# TABLE STRUCTURE FOR: daftarmitra
#

DROP TABLE IF EXISTS `daftarmitra`;

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
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `daftarmitra` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `promoter`, `thn_gabung`, `gudang`, `alamat`, `kota`, `telepon`, `email`) VALUES (1, '1101', 'Vitkom 2', '2000-06-18', 'Programmer', 'HPI', '2014', 'Gudang 1', 'Jl. Pintu Air 10', 'Bahan Kesehatan', '0857777777', 'vitkom@gmail.com');
INSERT INTO `daftarmitra` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `promoter`, `thn_gabung`, `gudang`, `alamat`, `kota`, `telepon`, `email`) VALUES (4, '1103', 'HP', '1999-06-24', 'Sekretaris', 'HRM', '2016', 'Gudang 3', 'Bogor', 'Elektronik', '0858832456', 'hperp@gmail.com');
INSERT INTO `daftarmitra` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `promoter`, `thn_gabung`, `gudang`, `alamat`, `kota`, `telepon`, `email`) VALUES (5, '1106', 'Kurnia Ayu', '2000-06-11', 'Manager', 'HPO', '2015', 'Gudang 2', 'Jl. Belendung', 'Tangerang', '08788888888', 'admin@mail.com');
INSERT INTO `daftarmitra` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `promoter`, `thn_gabung`, `gudang`, `alamat`, `kota`, `telepon`, `email`) VALUES (6, '1107', 'Ahmad Ali', '2000-06-10', 'Bendahara', 'HP', '2018', 'Gudang 2', 'Jl. Belendung', 'Tangerang', '08788888888', 'member@mail.com');


#
# TABLE STRUCTURE FOR: delivered
#

DROP TABLE IF EXISTS `delivered`;

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
  `arrival` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: delivery
#

DROP TABLE IF EXISTS `delivery`;

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
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `delivery` (`id`, `voucher`, `shipment`, `invoice`, `date`, `vehicle`, `fleet`, `driver`, `muatan`, `customer`, `departure`, `arrival`, `legal`, `notes`, `revenue`, `cost`, `transfer`, `balance`) VALUES (1, '01/002/OP-LOG/2020', '1777778866', '11/00/11/20', '17-09-2020-20-10-2020', 'Car Box', 'Armada 1', 'Joko Susanto', '2 ton', 'Ririn Safitri', 'Kodam Jaya', 'Bandung', 'Legal', 'Barang antik mudah retak', '20000000', '1800000', '50000', '2000000');


#
# TABLE STRUCTURE FOR: deposit
#

DROP TABLE IF EXISTS `deposit`;

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `jumlah_deposit` varchar(50) NOT NULL,
  `jumlah_pengeluaran` varchar(50) NOT NULL,
  `total_deposit` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `deposit` (`id`, `tgl`, `manager`, `cabang`, `jumlah_deposit`, `jumlah_pengeluaran`, `total_deposit`, `status`) VALUES (1, '11-06-2020', 'Saeful Rahman', 'Karang Tengah', '1000000', '100000', '900000', 'Aman');
INSERT INTO `deposit` (`id`, `tgl`, `manager`, `cabang`, `jumlah_deposit`, `jumlah_pengeluaran`, `total_deposit`, `status`) VALUES (2, '19-06-2020', 'Sofia Rahma', 'Tangerang', '2000000', '1000000', '1000000', 'Kurang Aman');
INSERT INTO `deposit` (`id`, `tgl`, `manager`, `cabang`, `jumlah_deposit`, `jumlah_pengeluaran`, `total_deposit`, `status`) VALUES (3, '2020-06-06', 'Iman Hanafi', 'Bandung', '2000000', '100000', '1900000', 'Aman');


#
# TABLE STRUCTURE FOR: distri
#

DROP TABLE IF EXISTS `distri`;

CREATE TABLE `distri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `distri` (`id`, `nama`, `location`, `manager`, `profit`) VALUES (1, 'CV Fatmawati', 'Serang', 'Saeful Rahman', '3,39%');
INSERT INTO `distri` (`id`, `nama`, `location`, `manager`, `profit`) VALUES (2, 'CV Adikarya', 'Tangerang', 'Sofia Rahma', '2,69%');
INSERT INTO `distri` (`id`, `nama`, `location`, `manager`, `profit`) VALUES (3, 'Ardhy Noviska', 'ghjiouk', 'Iman Hanafi', 'ikkkk');
INSERT INTO `distri` (`id`, `nama`, `location`, `manager`, `profit`) VALUES (4, 'CV Talenta', 'Surabaya', 'Iman Hanafi', '2,5%');


#
# TABLE STRUCTURE FOR: driver
#

DROP TABLE IF EXISTS `driver`;

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `phone3` varchar(20) NOT NULL,
  `join_date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `driver` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES (3, 'Fajri', 'BK0023 KB', '081111111', '0', '0', '2020-12-16', 'Jl. Merdeka 2');
INSERT INTO `driver` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES (4, 'Marul', 'BK0023', '08111111', '085777777', '0', '2020-12-23', 'Jl. Pintu Air');


#
# TABLE STRUCTURE FOR: driver_settlement
#

DROP TABLE IF EXISTS `driver_settlement`;

CREATE TABLE `driver_settlement` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `driver_settlement` (`id`, `code`, `name`, `alias`, `balance`) VALUES (1, '1152', 'Muhammad Amru', 'Amru', 'balance');


#
# TABLE STRUCTURE FOR: expense
#

DROP TABLE IF EXISTS `expense`;

CREATE TABLE `expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `expense_no` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `memo` varchar(50) NOT NULL,
  `maintenance` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `truck_no` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `expense` (`id`, `date`, `expense_no`, `branch`, `total`, `memo`, `maintenance`, `cost_center`, `truck_no`, `qty`, `amount`) VALUES (1, '2021-01-03', '111111102', 'Pondok Aren', '100000', '11111', 'Apply', '111111', '111111', '100', '1200');
INSERT INTO `expense` (`id`, `date`, `expense_no`, `branch`, `total`, `memo`, `maintenance`, `cost_center`, `truck_no`, `qty`, `amount`) VALUES (2, '2021-01-04', '111111103', 'Ciputat', '111111', '11111', '11111', '111111', '111111', '100', '120');


#
# TABLE STRUCTURE FOR: external
#

DROP TABLE IF EXISTS `external`;

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

#
# TABLE STRUCTURE FOR: fleet
#

DROP TABLE IF EXISTS `fleet`;

CREATE TABLE `fleet` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `fleet` (`id`, `code`, `name`, `role_id`) VALUES (1, 'CDD', 'CDD 5 Ton', 1);


#
# TABLE STRUCTURE FOR: fleet_type
#

DROP TABLE IF EXISTS `fleet_type`;

CREATE TABLE `fleet_type` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `fleet_type` (`id`, `code`, `name`, `type`, `active`) VALUES (1, '1102', 'CDD', 'CDD 5 Ton', 'active');


#
# TABLE STRUCTURE FOR: fragh
#

DROP TABLE IF EXISTS `fragh`;

CREATE TABLE `fragh` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `fragh` (`id`, `code`, `name`, `role_id`) VALUES (1, '1102', 'CDD', '1');


#
# TABLE STRUCTURE FOR: gaji
#

DROP TABLE IF EXISTS `gaji`;

CREATE TABLE `gaji` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jumlah_anak` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gapok` varchar(50) NOT NULL,
  `tunjangan_jabatan` varchar(50) NOT NULL,
  `gaji_diterima` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `gaji` (`id`, `nama`, `jabatan`, `jumlah_anak`, `status`, `gapok`, `tunjangan_jabatan`, `gaji_diterima`) VALUES (1, 'Ahmad Saeful ', 'Manager', '3', 'KAWIN', '3000000', '1000000', '4000000');
INSERT INTO `gaji` (`id`, `nama`, `jabatan`, `jumlah_anak`, `status`, `gapok`, `tunjangan_jabatan`, `gaji_diterima`) VALUES (2, 'Miftahul Jannah', 'Wakil Manager', '1', 'KAWIN', '2700000', '800000', '3500000');
INSERT INTO `gaji` (`id`, `nama`, `jabatan`, `jumlah_anak`, `status`, `gapok`, `tunjangan_jabatan`, `gaji_diterima`) VALUES (3, 'Ismatullah', 'Bendahara', '0', 'LAJANG', '2500000', '500000', '3000000');
INSERT INTO `gaji` (`id`, `nama`, `jabatan`, `jumlah_anak`, `status`, `gapok`, `tunjangan_jabatan`, `gaji_diterima`) VALUES (4, 'Fatimah', 'Sekretaris', '2', 'KAWIN', '2500000', '300000', '2800000');


#
# TABLE STRUCTURE FOR: grosssale
#

DROP TABLE IF EXISTS `grosssale`;

CREATE TABLE `grosssale` (
  `id` int(11) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gross_sale` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `pcs` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `grosssale` (`id`, `manager`, `lokasi`, `gross_sale`, `profit`, `pcs`, `point`) VALUES (1, 'Saeful Rahman', 'DKI Jakarta', '100', '3,39%', '100', '10');
INSERT INTO `grosssale` (`id`, `manager`, `lokasi`, `gross_sale`, `profit`, `pcs`, `point`) VALUES (2, 'Sofia Rahma', 'Tangerang Kota', '120', '4,69%', '100', '10');
INSERT INTO `grosssale` (`id`, `manager`, `lokasi`, `gross_sale`, `profit`, `pcs`, `point`) VALUES (3, 'dd', 'ddd', 'ddd', 'dd', 'dd', 'dd');


#
# TABLE STRUCTURE FOR: grouptruck
#

DROP TABLE IF EXISTS `grouptruck`;

CREATE TABLE `grouptruck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `role_id` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `grouptruck` (`id`, `name`, `level`, `role_id`) VALUES (1, 'LK001', '100', '');
INSERT INTO `grouptruck` (`id`, `name`, `level`, `role_id`) VALUES (2, 'CDD1', '20', '1');
INSERT INTO `grouptruck` (`id`, `name`, `level`, `role_id`) VALUES (3, 'Gabungan', '30', '2');
INSERT INTO `grouptruck` (`id`, `name`, `level`, `role_id`) VALUES (4, 'LK002', '100', '');


#
# TABLE STRUCTURE FOR: gudang
#

DROP TABLE IF EXISTS `gudang`;

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gudang` (`id`, `kode`, `nama`, `alamat`) VALUES (2, '1101', 'Gudang ', 'Jakarta');
INSERT INTO `gudang` (`id`, `kode`, `nama`, `alamat`) VALUES (3, '1102', 'Gudang 2', 'Depok');
INSERT INTO `gudang` (`id`, `kode`, `nama`, `alamat`) VALUES (4, '1103', 'Gudang 3', 'Tangerang');
INSERT INTO `gudang` (`id`, `kode`, `nama`, `alamat`) VALUES (5, '1104', 'Gudang 4', 'Serang');
INSERT INTO `gudang` (`id`, `kode`, `nama`, `alamat`) VALUES (7, '1106', 'Gudang 6', 'Makassar');


#
# TABLE STRUCTURE FOR: hotnews
#

DROP TABLE IF EXISTS `hotnews`;

CREATE TABLE `hotnews` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `nama` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hotnews` (`id`, `image`, `nama`, `manager`, `subject`, `date`) VALUES (2, 'slider3.jpg', 'Karma Ilyas Nur', 'Sofia Rahma', 'Bersabar', '2020-06-06');
INSERT INTO `hotnews` (`id`, `image`, `nama`, `manager`, `subject`, `date`) VALUES (3, 'caterspot.jpg', 'Anggun Nur', 'Ashabul Kahfi', 'Alhamdulillah', '2020-06-06');
INSERT INTO `hotnews` (`id`, `image`, `nama`, `manager`, `subject`, `date`) VALUES (4, '3865967-wallpaper-full-hd_XNgM7er.jpg', 'Kurnia Ayu', 'Ferdian Nur', 'Alhamdulillah', '2020-06-06');


#
# TABLE STRUCTURE FOR: hutang
#

DROP TABLE IF EXISTS `hutang`;

CREATE TABLE `hutang` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_referensi` varchar(50) NOT NULL,
  `jatuh_tempo` varchar(50) NOT NULL,
  `mata_uang` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  `saldo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hutang` (`id`, `tgl`, `no_referensi`, `jatuh_tempo`, `mata_uang`, `debit`, `kredit`, `saldo`) VALUES (1, '11-05-2020', '000001', '09/09/2020', 'IDR', '10000', '0', '10000');
INSERT INTO `hutang` (`id`, `tgl`, `no_referensi`, `jatuh_tempo`, `mata_uang`, `debit`, `kredit`, `saldo`) VALUES (2, '13-06-2020', '000002', '19-10-2020', 'IDR', '20000', '0', '20000');
INSERT INTO `hutang` (`id`, `tgl`, `no_referensi`, `jatuh_tempo`, `mata_uang`, `debit`, `kredit`, `saldo`) VALUES (3, '2020-06-06', '000001', '2020-06-09', 'IDR', '10000', '0', '10000');


#
# TABLE STRUCTURE FOR: internal
#

DROP TABLE IF EXISTS `internal`;

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
  `finish` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `internal` (`id`, `voucher`, `shipment`, `invoice`, `date`, `vehicle`, `fleet`, `driver`, `muatan`, `customer`, `departure`, `arrival`, `legal`, `notes`, `revenue`, `cost`, `transfer`, `balance`, `finish`) VALUES (1, '11/02/31/2020', 'A-2 WE', 'Notes', '2020-11-04', 'AB-2', 'Fleet', 'Joko Susanto', 'Muatan', 'Dedi Kurnia', 'BA-002', 'Jakarta', 'Legal', 'Barang mudah pecah', '150', '200', '1000000', 'Balance', 'Finish');


#
# TABLE STRUCTURE FOR: invoice
#

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `tax_no` varchar(100) NOT NULL,
  `tax_date` varchar(50) NOT NULL,
  `delivered_date` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `down_payment` varchar(100) NOT NULL,
  `ppn` varchar(50) NOT NULL,
  `netto` varchar(100) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `ppn2` varchar(50) NOT NULL,
  `insurance2` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `date2` varchar(50) NOT NULL,
  `rent_no` varchar(50) NOT NULL,
  `customer2` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `truck` varchar(50) NOT NULL,
  `insurance3` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `invoice` (`id`, `date`, `invoice_no`, `customer`, `tax_no`, `tax_date`, `delivered_date`, `bank`, `total`, `insurance`, `down_payment`, `ppn`, `netto`, `paid`, `ppn2`, `insurance2`, `notes`, `date2`, `rent_no`, `customer2`, `departure`, `arrival`, `group_truck`, `truck`, `insurance3`, `amount`) VALUES (2, '2021-01-08', '12111111111111', 'Mahmur', '11111111', '1110000', '17-09-2020', 'BJB', '100000', 'Indonesian Free', '1000', '10%', '10', '8000', 'on', 'on', 'Barang Jadi', '2021-01-13', '11170911111', 'Solihin', 'Bandung', 'Medan', 'BH002', 'WK01111', 'Indo', '1200');
INSERT INTO `invoice` (`id`, `date`, `invoice_no`, `customer`, `tax_no`, `tax_date`, `delivered_date`, `bank`, `total`, `insurance`, `down_payment`, `ppn`, `netto`, `paid`, `ppn2`, `insurance2`, `notes`, `date2`, `rent_no`, `customer2`, `departure`, `arrival`, `group_truck`, `truck`, `insurance3`, `amount`) VALUES (3, '2021-01-07', '1222222222222', 'Mahmur', '11111111', '1110000', '17-09-2020', 'BJB', '100000', 'Indonesian Insurance New', '500', '20%', '20', '10000', 'on', 'on', 'Barang Jadi', '2021-01-07', '1117091122', 'Mahmur', 'Bandung', 'Medan', 'BH002', 'WK01111', 'Indo', '20000');


#
# TABLE STRUCTURE FOR: invoiced
#

DROP TABLE IF EXISTS `invoiced`;

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
  `arrival` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: invoiced2
#

DROP TABLE IF EXISTS `invoiced2`;

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
  `paid_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `invoiced2` (`id`, `date`, `delivered`, `due_date`, `invoice_no`, `customer`, `tax_one`, `tax_delivery`, `total`, `insurance`, `ppn`, `down_pay`, `netto`, `paid`, `payment`, `paid_date`) VALUES (1, '17-09-1999', 'Jakarta', '16 Oktober 2020', '019530', 'PT Daging Food', '100', '200', '250000', '0', '200000', '0', '2500000', '18250', '0094', '13 Oktober 2020');


#
# TABLE STRUCTURE FOR: juice
#

DROP TABLE IF EXISTS `juice`;

CREATE TABLE `juice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL,
  `omzet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `juice` (`id`, `nama`, `lokasi`, `point`, `omzet`) VALUES (1, 'CV Melati', 'DKI Jakarta', '70', '8%');
INSERT INTO `juice` (`id`, `nama`, `lokasi`, `point`, `omzet`) VALUES (2, 'CV Andika', 'Tangerang Kota', '80', '8,5%');
INSERT INTO `juice` (`id`, `nama`, `lokasi`, `point`, `omzet`) VALUES (3, 'CV Mekarsari', 'Surabaya', '90', '9%');


#
# TABLE STRUCTURE FOR: jurnalumum
#

DROP TABLE IF EXISTS `jurnalumum`;

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
  `dikredit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `jurnalumum` (`id`, `tgl`, `transaksi`, `no_bukti`, `jumlah`, `kode_debit`, `kode_kredit`, `nama_akundebit`, `didebit`, `nama_akunkredit`, `dikredit`) VALUES (1, '2020-06-20', 'Bayar Kue', 'JP-0001', '10000', 'KP-200', 'KP-200', 'Kas', '10000', 'Kas', '10000');
INSERT INTO `jurnalumum` (`id`, `tgl`, `transaksi`, `no_bukti`, `jumlah`, `kode_debit`, `kode_kredit`, `nama_akundebit`, `didebit`, `nama_akunkredit`, `dikredit`) VALUES (3, '2020-06-13', 'Beli Motherboard', '11/02/2020', '1000', 'K-200', '1000', 'Kas 2', 'Kas 2', 'Kas 2', '1000');
INSERT INTO `jurnalumum` (`id`, `tgl`, `transaksi`, `no_bukti`, `jumlah`, `kode_debit`, `kode_kredit`, `nama_akundebit`, `didebit`, `nama_akunkredit`, `dikredit`) VALUES (4, '2020-06-10', 'Beli Kipas Angin', '13/TF-AR/2020', '50000', 'K-300', '2000', 'Kas 3', 'Kas 3', 'Kas 3', '2000');


#
# TABLE STRUCTURE FOR: karyawan
#

DROP TABLE IF EXISTS `karyawan`;

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
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `karyawan` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `thn_gabung`, `alamat`, `kota`, `no_telp`, `email`) VALUES (2, '1101', 'Dedy Baharsyah', '2000-07-10', 'Karyawan', '2018', 'Jl. Pintu Air No.31', 'Jakarta', '0877883238', 'dedy@gmail.com');
INSERT INTO `karyawan` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `thn_gabung`, `alamat`, `kota`, `no_telp`, `email`) VALUES (3, '1102', 'Ekawati', '1999-05-14', 'CS', '2019', 'Jl. Pintu Seribu', 'Tangerang', '0812567321', 'ekawati@gmail.com');
INSERT INTO `karyawan` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `thn_gabung`, `alamat`, `kota`, `no_telp`, `email`) VALUES (4, '1103', 'Nabillah', '2000-05-15', 'Sekretaris', '2017', 'Jl. Pintu Seribu 2', 'Depok', '0857732387', 'nabillah@gmail.com');
INSERT INTO `karyawan` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `thn_gabung`, `alamat`, `kota`, `no_telp`, `email`) VALUES (6, '1105', 'Ahmad Rehan ', '2000-06-11', 'Programmer', '2015', 'Jl. Poris Gaga Cipondoh', 'Tangerang', '0811111111', 'rehan@gmail.com');
INSERT INTO `karyawan` (`id`, `kode_id`, `nama`, `tgl_lahir`, `jabatan`, `thn_gabung`, `alamat`, `kota`, `no_telp`, `email`) VALUES (7, '1106', 'Hadi Zakaria', '2000-06-07', 'Supervisior', '2010', 'Jl. Pitu Seribu No.41', 'Kota Tasikmalaya', '081111111117', 'hadi@gmail.com');


#
# TABLE STRUCTURE FOR: kategori
#

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: kernet
#

DROP TABLE IF EXISTS `kernet`;

CREATE TABLE `kernet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `phone3` varchar(50) NOT NULL,
  `join_date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `kernet` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES (1, 'Andree', '11154', '0811111111', '08222222', '0824555', '2018-01-13', 'Jl. Pintu Air');
INSERT INTO `kernet` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES (2, 'Raehan', 'BK002', '0811111111', '0', '0', '2019-12-29', 'Jl. Pintu Air 2');
INSERT INTO `kernet` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES (3, 'Faris', 'BK0024', '081111111', '085777777', '0', '2018-12-22', 'Jl. Ketapag no. 31');
INSERT INTO `kernet` (`id`, `nama`, `code`, `phone`, `phone2`, `phone3`, `join_date`, `address`) VALUES (4, 'Raihan', '11154', '0811111111', '08222222', '0824555', '2021-01-21', 'Jl. Pintu Air 10');


#
# TABLE STRUCTURE FOR: kontrast
#

DROP TABLE IF EXISTS `kontrast`;

CREATE TABLE `kontrast` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kontrast` (`id`, `customer`, `start_date`, `end_date`) VALUES (1, 'Syahrizal', '2020-11-12', '2020-11-26');


#
# TABLE STRUCTURE FOR: labar
#

DROP TABLE IF EXISTS `labar`;

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
  `persen3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: labarugi
#

DROP TABLE IF EXISTS `labarugi`;

CREATE TABLE `labarugi` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `komersil` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: laporan_harian
#

DROP TABLE IF EXISTS `laporan_harian`;

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
  `persen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: laporanmodal
#

DROP TABLE IF EXISTS `laporanmodal`;

CREATE TABLE `laporanmodal` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: legal
#

DROP TABLE IF EXISTS `legal`;

CREATE TABLE `legal` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `legal` (`id`, `code`, `name`, `role_id`) VALUES (1, '11025', 'CDD', '1');


#
# TABLE STRUCTURE FOR: loan_type
#

DROP TABLE IF EXISTS `loan_type`;

CREATE TABLE `loan_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `expense_no` varchar(50) NOT NULL,
  `employee_type` varchar(20) NOT NULL,
  `employee` varchar(50) NOT NULL,
  `loan_type` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `memo` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `loan_type` (`id`, `date`, `expense_no`, `employee_type`, `employee`, `loan_type`, `amount`, `memo`, `code`, `name`, `role_id`) VALUES (1, '2021-01-06', '[AUTO]', '230001', '230002', '230003', '', 'Barang dikirim dengan paketan express', '1152', '', 0);
INSERT INTO `loan_type` (`id`, `date`, `expense_no`, `employee_type`, `employee`, `loan_type`, `amount`, `memo`, `code`, `name`, `role_id`) VALUES (2, '2021-01-05', '[AUTO]', '230001', '230002', '230003', '11022', 'Barang dikirm dengan Express', '1152', '', 0);


#
# TABLE STRUCTURE FOR: maintenance
#

DROP TABLE IF EXISTS `maintenance`;

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `maintenance` (`id`, `name`, `role_id`) VALUES (0, 'LK001', '');
INSERT INTO `maintenance` (`id`, `name`, `role_id`) VALUES (1, 'AKI 3', '');


#
# TABLE STRUCTURE FOR: manager
#

DROP TABLE IF EXISTS `manager`;

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `oty` varchar(50) NOT NULL,
  `totalotc` varchar(50) NOT NULL,
  `ftc` varchar(50) NOT NULL,
  `totalftc` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `manager` (`id`, `kode_id`, `nama`, `qty`, `oty`, `totalotc`, `ftc`, `totalftc`) VALUES (1, '112', 'Beli Meja Bundar', '10', '5', '20', '10', '20');
INSERT INTO `manager` (`id`, `kode_id`, `nama`, `qty`, `oty`, `totalotc`, `ftc`, `totalftc`) VALUES (2, '113', 'Beli Bangku', '20', '10', '30', '10', '30');


#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES (1, 'Master', 'Bank', 'BANK');
INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES (2, 'Master', 'Brach', 'BRANCH');
INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES (3, 'Master', 'city', 'CITY');
INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES (4, 'Master', 'cost', 'COST');
INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES (5, 'Master', 'Cost', 'Cost Center');
INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES (6, 'Tools', 'Module', 'MODULE');
INSERT INTO `module` (`id`, `category`, `name`, `code`) VALUES (7, 'Tools', 'Role', 'ROLE');


#
# TABLE STRUCTURE FOR: neraca
#

DROP TABLE IF EXISTS `neraca`;

CREATE TABLE `neraca` (
  `id` int(11) NOT NULL,
  `nama_akun` varchar(50) NOT NULL,
  `neraca_saldo` varchar(50) NOT NULL,
  `penyesuaian` varchar(50) NOT NULL,
  `neracasaldo_penyesuaian` varchar(50) NOT NULL,
  `rugi_laba` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `neraca` (`id`, `nama_akun`, `neraca_saldo`, `penyesuaian`, `neracasaldo_penyesuaian`, `rugi_laba`) VALUES (1, 'Sunengsih', 'Debit 100000', 'Debit 100000', 'Debit 100000', 'Debit 100000');
INSERT INTO `neraca` (`id`, `nama_akun`, `neraca_saldo`, `penyesuaian`, `neracasaldo_penyesuaian`, `rugi_laba`) VALUES (2, 'Irfan Hakim', 'Kredit 200000', 'Kredit 200000', 'Kredit 200000', 'Kredit 200000');


#
# TABLE STRUCTURE FOR: ontheway
#

DROP TABLE IF EXISTS `ontheway`;

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
  `arrival` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: orders
#

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `voucher` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `netto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orders` (`id`, `voucher`, `order_date`, `customer`, `departure`, `arrival`, `netto`) VALUES (1, '11/02/456/2020', '17-11-2020-24-11-2020', 'Adib', 'Aceh', 'Raihan', '10');


#
# TABLE STRUCTURE FOR: outstanding
#

DROP TABLE IF EXISTS `outstanding`;

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
  `fleet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `outstanding` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `account`, `account_name`, `shipment_date`, `vehicle`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `legal`, `fleet`) VALUES (1, 'A-2 WE', '17-09-2020', '2000', 'Bongkar', 'Pengiriman barang ini didahulukan', 'Ferra', 'Ferra Puspita', '20-09-2020', 'B-210', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', 'Legal', 'Fleet');


#
# TABLE STRUCTURE FOR: overrides
#

DROP TABLE IF EXISTS `overrides`;

CREATE TABLE `overrides` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kantor` varchar(50) NOT NULL,
  `summary` varchar(50) NOT NULL,
  `saldo_awal` varchar(50) NOT NULL,
  `masuk` varchar(50) NOT NULL,
  `keluar` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `total_saving` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `overrides` (`id`, `nama`, `kantor`, `summary`, `saldo_awal`, `masuk`, `keluar`, `total`, `total_saving`) VALUES (1, 'Fatimah', 'AL-Madinah 2', 'Simpanan', '1000', '500', '200', '300', '1300');
INSERT INTO `overrides` (`id`, `nama`, `kantor`, `summary`, `saldo_awal`, `masuk`, `keluar`, `total`, `total_saving`) VALUES (2, 'Badrun Salam', 'MMS Building', 'Summary', '2000', '1000', '500', '1500', '3500');


#
# TABLE STRUCTURE FOR: payment
#

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `payment_no` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `date2` varchar(50) NOT NULL,
  `customer2` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `outstanding` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `payment` (`id`, `date`, `payment_no`, `customer`, `payment_type`, `total`, `date2`, `customer2`, `invoice_no`, `amount`, `outstanding`, `payment`) VALUES (4, '2021-01-07', '1111111111', 'Solihin', 'BCA', '100000', '2021-01-12', 'Zaki', '12111111111111', '12000', '1111111', '1222222');
INSERT INTO `payment` (`id`, `date`, `payment_no`, `customer`, `payment_type`, `total`, `date2`, `customer2`, `invoice_no`, `amount`, `outstanding`, `payment`) VALUES (5, '2021-01-05', '10000000001', 'Zaenab', 'BCA', '100000', '2021-01-11', 'Kirin', '1222222222222', '20000', '1111111', '1222222');


#
# TABLE STRUCTURE FOR: pendapatanlain
#

DROP TABLE IF EXISTS `pendapatanlain`;

CREATE TABLE `pendapatanlain` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pendapatanlain` (`id`, `tgl`, `no_faktur`, `transaksi`, `jumlah`) VALUES (1, '2020-06-03', '11/02/AFR/2020', 'Beli Lemari', '2');
INSERT INTO `pendapatanlain` (`id`, `tgl`, `no_faktur`, `transaksi`, `jumlah`) VALUES (2, '2020-06-02', '12/02/AFR/2020', 'Beli Meja Bundar', '4');
INSERT INTO `pendapatanlain` (`id`, `tgl`, `no_faktur`, `transaksi`, `jumlah`) VALUES (4, '2020-06-27', '11/02/AFR/2020', 'Bayar Kue Donat', '10');


#
# TABLE STRUCTURE FOR: penerimaan
#

DROP TABLE IF EXISTS `penerimaan`;

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `total_qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `penerimaan` (`id`, `kode_id`, `nama`, `qty`, `satuan`, `total_qty`, `harga`, `total`) VALUES (3, '116', 'Speaker', '100', '10', '1000', '10000', '100000');
INSERT INTO `penerimaan` (`id`, `kode_id`, `nama`, `qty`, `satuan`, `total_qty`, `harga`, `total`) VALUES (5, '117', 'Processor', '10', '4', '40', '1000', '10000');
INSERT INTO `penerimaan` (`id`, `kode_id`, `nama`, `qty`, `satuan`, `total_qty`, `harga`, `total`) VALUES (6, '117', 'LCD', '10', '100', '1000', '1000', '10000');


#
# TABLE STRUCTURE FOR: pengeluaran
#

DROP TABLE IF EXISTS `pengeluaran`;

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `uraian` varchar(50) NOT NULL,
  `reff` varchar(50) NOT NULL,
  `batasan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `no_akun` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pengeluaran` (`id`, `tgl`, `uraian`, `reff`, `batasan`, `jumlah`, `no_akun`) VALUES (1, '2020-06-01', 'Pembelian Meja', '11/AR/K-21/2020', 'Terikat', '50.000', '111767899999');
INSERT INTO `pengeluaran` (`id`, `tgl`, `uraian`, `reff`, `batasan`, `jumlah`, `no_akun`) VALUES (2, '2020-06-05', 'Pembelian Bangku', '11/AR/K-21/2020', 'Tidak Terikat', '40000', '111767899998');
INSERT INTO `pengeluaran` (`id`, `tgl`, `uraian`, `reff`, `batasan`, `jumlah`, `no_akun`) VALUES (4, '2020-06-05', 'Membeli Donat', '11/AR/K-21/2020', 'Terikat', '10000', '1176811118');


#
# TABLE STRUCTURE FOR: pengiriman
#

DROP TABLE IF EXISTS `pengiriman`;

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `qty_karton` varchar(50) NOT NULL,
  `qty_perkarton` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `pengiriman` (`id`, `kode_id`, `nama`, `qty_karton`, `qty_perkarton`, `total`) VALUES (1, '112', 'Motherboard', '10', '100', '1000');
INSERT INTO `pengiriman` (`id`, `kode_id`, `nama`, `qty_karton`, `qty_perkarton`, `total`) VALUES (2, '113', 'Mouse', '10', '50', '500');


#
# TABLE STRUCTURE FOR: product_chart
#

DROP TABLE IF EXISTS `product_chart`;

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
  `total_poin` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product_chart` (`id`, `nama`, `manager`, `profit_sabtu`, `profit_minggu`, `profit_senin`, `profit_selasa`, `profit_rabu`, `profit_kamis`, `profit_jumat`, `total_profit`, `total_poin`) VALUES (1, 'Fatimah', 'Saeful Rahman', '10%', '10%', '10%', '10%', '10%', '10%', '10%', '70%', '75');
INSERT INTO `product_chart` (`id`, `nama`, `manager`, `profit_sabtu`, `profit_minggu`, `profit_senin`, `profit_selasa`, `profit_rabu`, `profit_kamis`, `profit_jumat`, `total_profit`, `total_poin`) VALUES (2, 'Khanza Salsabilla', 'Sofia Rahma', '15%', '15%', '15%', '15%', '10%', '10%', '10%', '80%', '90');


#
# TABLE STRUCTURE FOR: produk
#

DROP TABLE IF EXISTS `produk`;

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
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (1, 'Printer', 'MK02', '1', 'Ferdian', 'Gudang 1', '200', '80', '20', '150000', '120000', '10%', '180000', '5000', '200000', 'ApelMerah.jpg');
INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (3, 'Mouse', 'TPLD004', '1', 'Aman Jujur Simora', 'Gudang 2', '80', '60', '20', '120000', '100000', '10%', '150000', '10000', '300000', 'Alpukat.jpg');
INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (4, 'Scanner', 'TPLE11', '1', 'Artika Malasari', 'Gudang 3', '90', '70', '20', '140000', '110000', '10%', '100000', '80000', '200000', 'Anggur.jpg');
INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (6, 'Processor', 'TPLS01', '2', 'Saeful', 'Gudang 2', '100000', '20', '2', '100000', '10000', '10', '100000', '90000', '100000', 'default.jpg');
INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (7, 'Buku Gambar Besar', '1107', '1', 'Rehan S', 'Gudang 4', '100000', '18', '2', '11000', '10000', '10', '100000', '90000', '100000', 'default.jpg');
INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (8, 'VGA card', '1108', '1', 'Ahmad Sofyan', 'Gudang 2', '100', '15', '5', '100000', '10000', '10', '100000', '1000', '100000', 'default.jpg');
INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (9, 'Kabel Data', '1109', '1', 'Ashabul Kahfi R', 'Gudang 5', '70', '10', '0', '9500', '1000', '10', '10000', '9000', '100000', 'default.jpg');
INSERT INTO `produk` (`id`, `nama`, `kode`, `id_role`, `manager`, `gudang`, `qty`, `unitbagus`, `unitrusak`, `hpp`, `sebelumpajak`, `ppn`, `setelahpajak`, `hargasetoran`, `jumlah`, `image`) VALUES (10, 'Ardhy Noviska', '1106', '2', 'Ashabul Kahfi', 'Gudang 2', '30', '20', '5', '11000', '10000', '10', '100000', '1000', '100000', 'default.jpg');


#
# TABLE STRUCTURE FOR: ready
#

DROP TABLE IF EXISTS `ready`;

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
  `arrival` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: rent
#

DROP TABLE IF EXISTS `rent`;

CREATE TABLE `rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `rent_no` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `truck` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `kernet` varchar(50) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `late_pickup` varchar(50) NOT NULL,
  `late_delivered` varchar(50) NOT NULL,
  `combine` varchar(50) NOT NULL,
  `delivered` varchar(50) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `shipping_no` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount_cost` varchar(50) NOT NULL,
  `date_payment` varchar(50) NOT NULL,
  `amount_payment` varchar(50) NOT NULL,
  `date_other` varchar(50) NOT NULL,
  `cost_center2` varchar(50) NOT NULL,
  `memo` varchar(100) NOT NULL,
  `amount_other` varchar(100) NOT NULL,
  `amount_claim` varchar(100) NOT NULL,
  `amount_accident` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `rent` (`id`, `date`, `rent_no`, `customer`, `departure`, `arrival`, `group_truck`, `truck`, `driver`, `kernet`, `insurance`, `amount`, `late_pickup`, `late_delivered`, `combine`, `delivered`, `invoice_no`, `shipping_no`, `distance`, `cost_center`, `type`, `amount_cost`, `date_payment`, `amount_payment`, `date_other`, `cost_center2`, `memo`, `amount_other`, `amount_claim`, `amount_accident`, `notes`) VALUES (1, '2021-01-15', '11170911111', 'Solihin', 'Jakarta', 'Medan', 'BH002', 'WK01111', 'Romli', 'Firza', 'Indonesian Insurance', '1200', 'on', 'on', 'on', 'on', '12111111111111', '121111111111111', '', '100000', 'Bk001', '120000', '12/01/2021', '120000', '2021-01-01', 'Karawang', 'Pengiriman barang jadi', '1200', '1300', '1100', 'Barang Jadi');
INSERT INTO `rent` (`id`, `date`, `rent_no`, `customer`, `departure`, `arrival`, `group_truck`, `truck`, `driver`, `kernet`, `insurance`, `amount`, `late_pickup`, `late_delivered`, `combine`, `delivered`, `invoice_no`, `shipping_no`, `distance`, `cost_center`, `type`, `amount_cost`, `date_payment`, `amount_payment`, `date_other`, `cost_center2`, `memo`, `amount_other`, `amount_claim`, `amount_accident`, `notes`) VALUES (2, '17-09-2020', '00001/NV-22/08', 'PT.Parit Padang Global', 'Kontrak', 'Jabodetabek', 'CDD 4 TON', 'BB927', 'Sefudin', '', '', '', '', '', '', '', '01971/INV-001/2019', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `rent` (`id`, `date`, `rent_no`, `customer`, `departure`, `arrival`, `group_truck`, `truck`, `driver`, `kernet`, `insurance`, `amount`, `late_pickup`, `late_delivered`, `combine`, `delivered`, `invoice_no`, `shipping_no`, `distance`, `cost_center`, `type`, `amount_cost`, `date_payment`, `amount_payment`, `date_other`, `cost_center2`, `memo`, `amount_other`, `amount_claim`, `amount_accident`, `notes`) VALUES (3, '2020-12-03', '11111', '1111', 'Jakarta', '11111', '1111111', '1111', '11111', '', '', '', '', '', '', '', '1111', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `rent` (`id`, `date`, `rent_no`, `customer`, `departure`, `arrival`, `group_truck`, `truck`, `driver`, `kernet`, `insurance`, `amount`, `late_pickup`, `late_delivered`, `combine`, `delivered`, `invoice_no`, `shipping_no`, `distance`, `cost_center`, `type`, `amount_cost`, `date_payment`, `amount_payment`, `date_other`, `cost_center2`, `memo`, `amount_other`, `amount_claim`, `amount_accident`, `notes`) VALUES (4, '2020-12-02', '11111', '1111', '1111', '11111', 'CDE 2 TON 2', '1111', '11111', 'Romli', 'Indonesian Insurance', '1200', '', '', '', '', '1111', '1222222222222', '1200km', '100000', 'BK003', '12000', '12/01/2021', '120000', '2021-01-16', 'Karawang', 'Pengiriman barang jadi', '1200', '1300', '11000', 'Barang jadi');
INSERT INTO `rent` (`id`, `date`, `rent_no`, `customer`, `departure`, `arrival`, `group_truck`, `truck`, `driver`, `kernet`, `insurance`, `amount`, `late_pickup`, `late_delivered`, `combine`, `delivered`, `invoice_no`, `shipping_no`, `distance`, `cost_center`, `type`, `amount_cost`, `date_payment`, `amount_payment`, `date_other`, `cost_center2`, `memo`, `amount_other`, `amount_claim`, `amount_accident`, `notes`) VALUES (5, '2020-12-10', '000B AB', 'PT. Lion Super Indo', 'Tangerang', 'Bali ', 'CDD 4 TON 2', 'B 949', 'Joko Susanto Supriyatna', '', '', '', '', '', '', '', 'inv/90012/2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `rent` (`id`, `date`, `rent_no`, `customer`, `departure`, `arrival`, `group_truck`, `truck`, `driver`, `kernet`, `insurance`, `amount`, `late_pickup`, `late_delivered`, `combine`, `delivered`, `invoice_no`, `shipping_no`, `distance`, `cost_center`, `type`, `amount_cost`, `date_payment`, `amount_payment`, `date_other`, `cost_center2`, `memo`, `amount_other`, `amount_claim`, `amount_accident`, `notes`) VALUES (6, '2021-01-02', '11170911111', 'Mahmur', 'Jakarta', 'Medan', 'BH002', 'WK01111', 'Romli', 'Firza', 'Indonesian Insurance New', '1200', '', '', '', '', '1222222222222222', '1222222222222', '1200km', '1000000', 'Bk001', '120000', '12/01/2021', '120000', '2021-01-07', 'Karawang', 'Pengiriman barang jadi', '1200', '1300', '1100', 'Pengiriman Barang Jadi');


#
# TABLE STRUCTURE FOR: repair
#

DROP TABLE IF EXISTS `repair`;

CREATE TABLE `repair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `repair_no` varchar(50) NOT NULL,
  `truck` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `maintenance` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `memo` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `repair` (`id`, `date`, `repair_no`, `truck`, `total`, `maintenance`, `cost_center`, `memo`, `qty`, `amount`) VALUES (2, '2020-11-04', '0076/RP/09/20', 'Pembuatan Box', '164300', '', '', '', '', '');
INSERT INTO `repair` (`id`, `date`, `repair_no`, `truck`, `total`, `maintenance`, `cost_center`, `memo`, `qty`, `amount`) VALUES (3, '2020-12-10', '000076/RP/10/20', 'B 001', '100000', '', '', '', '', '');
INSERT INTO `repair` (`id`, `date`, `repair_no`, `truck`, `total`, `maintenance`, `cost_center`, `memo`, `qty`, `amount`) VALUES (4, '2020-12-10', '000076/RP/20/12', 'B 949', '200000', '', '', '', '', '');
INSERT INTO `repair` (`id`, `date`, `repair_no`, `truck`, `total`, `maintenance`, `cost_center`, `memo`, `qty`, `amount`) VALUES (5, '2021-01-07', '11111111', 'WK01111', '100000', 'Apply 2', '100000', 'Pengiriman barang jadi', '10', '1200');
INSERT INTO `repair` (`id`, `date`, `repair_no`, `truck`, `total`, `maintenance`, `cost_center`, `memo`, `qty`, `amount`) VALUES (6, '2021-01-13', '11111111', 'WK01111', '100000', 'asdff', '100000', 'Pengiriman barang jadi', '10', '20000');


#
# TABLE STRUCTURE FOR: report_rittase
#

DROP TABLE IF EXISTS `report_rittase`;

CREATE TABLE `report_rittase` (
  `id` int(11) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `legal` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: report_shipment
#

DROP TABLE IF EXISTS `report_shipment`;

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
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: return_gudang
#

DROP TABLE IF EXISTS `return_gudang`;

CREATE TABLE `return_gudang` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `gudang_tujuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `return_gudang` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `jumlah`) VALUES (1, '2020-06-03', '11/FKH/LM/2020', 'Pngembalian Meja Bundar', '1134', 'Meja Budar', 'Gudang 1', 'Gudang 2', '60');
INSERT INTO `return_gudang` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `jumlah`) VALUES (2, '15-06-2020', '12/FKH/LM/2020', 'Pengembalian Printer', '1106', 'Elektronik', 'Gudang 3', 'Gudang 2', '20');
INSERT INTO `return_gudang` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `jumlah`) VALUES (4, '2020-06-06', '13/02/AFR/2020', 'Pembelian Kursi Karyawan', '1106', 'Kursi', 'Gudang 3', 'Gudang 5', '50');


#
# TABLE STRUCTURE FOR: return_supplier
#

DROP TABLE IF EXISTS `return_supplier`;

CREATE TABLE `return_supplier` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_faktur` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `supplier_tujuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `return_supplier` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `supplier_tujuan`, `jumlah`) VALUES (1, '2020-06-03', '11/FKH/LM/2020', 'Pembelian Lemari Cokelat', '1134', 'Lemari', 'Gudang 1', 'MK-01', '100');
INSERT INTO `return_supplier` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `supplier_tujuan`, `jumlah`) VALUES (2, '2020-06-11', '12/02/AFR/2020', 'Pembelian Motherboard', '1106', 'Elektronik', 'Gudang 3', 'MK-04', '20');
INSERT INTO `return_supplier` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `supplier_tujuan`, `jumlah`) VALUES (4, '2020-06-03', '13/02/AFR/2020', 'Pembelian Sparepart Motor', '1106', 'Otomotif', 'Gudang 3', 'MK-02', '80');
INSERT INTO `return_supplier` (`id`, `tanggal`, `no_faktur`, `keterangan`, `kode`, `barang`, `gudang_asal`, `supplier_tujuan`, `jumlah`) VALUES (5, '2020-06-04', '13/02/AFR/2020', 'Sudah dibayar', '1106', 'Kursi', 'Gudang 3', 'MK-03', '50');


#
# TABLE STRUCTURE FOR: returned
#

DROP TABLE IF EXISTS `returned`;

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
  `arrival` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: revenue
#

DROP TABLE IF EXISTS `revenue`;

CREATE TABLE `revenue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `revenue_no` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `memo` varchar(50) NOT NULL,
  `maintenance` varchar(50) NOT NULL,
  `cost_center` varchar(50) NOT NULL,
  `truck_no` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `revenue` (`id`, `date`, `revenue_no`, `branch`, `total`, `memo`, `maintenance`, `cost_center`, `truck_no`, `qty`, `amount`) VALUES (1, '2021-01-06', '11111111112', 'Pondok Aren', '', 'Pengembalian barang', 'Apply', '1000000', '11/RUCK/004', '100', '100000');


#
# TABLE STRUCTURE FOR: role
#

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `role` (`id`, `name`, `role_id`) VALUES (1, 'Admin Pool', '1');
INSERT INTO `role` (`id`, `name`, `role_id`) VALUES (2, 'Marketing dan Admin', '2');


#
# TABLE STRUCTURE FOR: route
#

DROP TABLE IF EXISTS `route`;

CREATE TABLE `route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `group_truck` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `route` (`id`, `departure`, `arrival`, `distance`, `group_truck`, `amount`) VALUES (1, 'Jakarta', 'Surabaya', '1200km', 'LK001', '1200');
INSERT INTO `route` (`id`, `departure`, `arrival`, `distance`, `group_truck`, `amount`) VALUES (2, 'Cikarang', 'AOS', '1250', 'LK002', '12000');
INSERT INTO `route` (`id`, `departure`, `arrival`, `distance`, `group_truck`, `amount`) VALUES (3, 'Jakarta', 'Bali', '50', '', '');
INSERT INTO `route` (`id`, `departure`, `arrival`, `distance`, `group_truck`, `amount`) VALUES (4, 'Bandung', 'Medan', '1200km', 'LK002', '1200');
INSERT INTO `route` (`id`, `departure`, `arrival`, `distance`, `group_truck`, `amount`) VALUES (5, 'Jakarta', 'Papua', '1200km', 'CDD1', '1200');
INSERT INTO `route` (`id`, `departure`, `arrival`, `distance`, `group_truck`, `amount`) VALUES (6, 'Jakarta', 'Surabaya', '1300km', 'CDD1', '1200');


#
# TABLE STRUCTURE FOR: shipment
#

DROP TABLE IF EXISTS `shipment`;

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
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: status
#

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `status` (`status`) VALUES (1);


#
# TABLE STRUCTURE FOR: summary
#

DROP TABLE IF EXISTS `summary`;

CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_manager` varchar(50) NOT NULL,
  `total_pcs` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `debit` varchar(50) NOT NULL,
  `kredit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `summary` (`id`, `kode`, `nama`, `harga_manager`, `total_pcs`, `keterangan`, `debit`, `kredit`) VALUES (1, '1105', 'Fatimah', '2000000', '100', 'sudah dibayar', '100000', '0');
INSERT INTO `summary` (`id`, `kode`, `nama`, `harga_manager`, `total_pcs`, `keterangan`, `debit`, `kredit`) VALUES (2, '1106', 'Yogi Rustandi', '2000000', '50', 'Belum dibayar', '0', '200000');
INSERT INTO `summary` (`id`, `kode`, `nama`, `harga_manager`, `total_pcs`, `keterangan`, `debit`, `kredit`) VALUES (4, '1106', 'Motherboard', '2000000', '100', 'Sudah dibayar', '10000', '0');


#
# TABLE STRUCTURE FOR: supplier
#

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `supplier` (`id`, `kode`, `nama`, `alamat`, `telepon`) VALUES (2, '1102', 'voltage', 'Jl. Pembangunan 1', '08111111111');
INSERT INTO `supplier` (`id`, `kode`, `nama`, `alamat`, `telepon`) VALUES (3, '1103', 'HP', 'Jl. Pintu Seribu', '08211111111');
INSERT INTO `supplier` (`id`, `kode`, `nama`, `alamat`, `telepon`) VALUES (4, '1104', 'Falcon 2', 'Jl. Pintu Seribu', '08577883238');


#
# TABLE STRUCTURE FOR: tbl_category
#

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_category` (`id`, `name`, `description`) VALUES (1, 'Elektronik', 'Semua yang berhungan tentang elektronik');
INSERT INTO `tbl_category` (`id`, `name`, `description`) VALUES (2, 'ATK', 'Semua yang berhungan tentang alat tulis kantor');


#
# TABLE STRUCTURE FOR: tbl_product
#

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `id` int(3) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `id_role` int(3) NOT NULL,
  `hargajual` varchar(128) NOT NULL,
  `hargabeli` varchar(128) NOT NULL,
  `detail` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES (0, 'Bayam L', 'TPLE11', 2, '100000', '80000', 'Wortel Bayam asal Aceh', '5eb67ab420635.jpg');
INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES (3, 'Wortel Surabaya', 'TPLD005', 2, '20000', '15000', 'Wortel Orange asal Surabaya', '5eb282618b9ea.jpg');
INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES (7, 'Alpukat', 'TPLD012', 1, '40000', '20000', 'Alpukat asal Lampung', '5eb67b0ac694d.jpg');
INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES (8, 'Apel Bandung', 'TPLED10', 1, '4000', '2000', 'Buah Apel Hijau asal Bandung', '.jpg');
INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES (10, 'Apel Bandung 3', 'TPLE012', 1, '30000', '20000', 'Buah Apel Merah asal Bandung', 'ApelMerah.jpg');
INSERT INTO `tbl_product` (`id`, `nama`, `kode`, `id_role`, `hargajual`, `hargabeli`, `detail`, `image`) VALUES (11, 'Apel Bandung 3', 'TPLE003', 1, '30000', '20000', 'Buah Apel Hijau asal Bandung', 'ApelMerah.jpg');


#
# TABLE STRUCTURE FOR: tbl_role
#

DROP TABLE IF EXISTS `tbl_role`;

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES (1, 'Administrator', 'Hak akses Administrator');
INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES (2, 'Client', 'Hak akses Client');


#
# TABLE STRUCTURE FOR: tbl_user
#

DROP TABLE IF EXISTS `tbl_user`;

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
  `akses` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `user`, `password`, `password_reset_key`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activated`, `last_login`, `created_at`, `updated_at`, `status`, `akses`) VALUES (1, 1, 'admin', 'admin', '$2y$05$OA.OoeNHoEkbGGKazYqPU.UOaI5jmgro8x2pRSV56ClTWlDf0EEn2', '', 'ADMIN', 'MAULANA', 'admin@mail.com', '081906515912', '1526456245974.png', 1, '2020-03-14 22:34:49', '2020-03-14 21:58:17', NULL, 1, 'ADMIN');
INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `user`, `password`, `password_reset_key`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activated`, `last_login`, `created_at`, `updated_at`, `status`, `akses`) VALUES (2, 2, 'member', 'coba', '$2y$05$8GdJw3BVbmhN6x2t0MNise7O0xqLMCNAN1cmP6fkhy0DZl4SxB5iO', '', 'MEMBER', 'MAULANA', 'member@mail.com', '081906515912', '1583991814826.png', 1, '2020-03-14 22:32:04', '2020-03-14 22:00:32', NULL, 1, 'USER');


#
# TABLE STRUCTURE FOR: temperature
#

DROP TABLE IF EXISTS `temperature`;

CREATE TABLE `temperature` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `min` varchar(50) NOT NULL,
  `max` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `temperature` (`id`, `customer`, `code`, `name`, `min`, `max`) VALUES (1, 'Santia Dewi', '1152', 'Dewi', '100000', '1000000');


#
# TABLE STRUCTURE FOR: term_of_payment
#

DROP TABLE IF EXISTS `term_of_payment`;

CREATE TABLE `term_of_payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `term_of_payment` (`id`, `name`, `value`, `role_id`) VALUES (1, 'Abdul Ghani', '1000000', 1);


#
# TABLE STRUCTURE FOR: tf_gudang
#

DROP TABLE IF EXISTS `tf_gudang`;

CREATE TABLE `tf_gudang` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `no_transfer` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `barang` varchar(50) NOT NULL,
  `gudang_asal` varchar(50) NOT NULL,
  `gudang_tujuan` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tf_gudang` (`id`, `tgl`, `no_transfer`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `qty`) VALUES (1, '2020-06-07', '11/KL/22/2020', 'Pembelian Meja Bundar', '1134', 'Meja', 'Gudang 1', 'Gudang 2', '30');
INSERT INTO `tf_gudang` (`id`, `tgl`, `no_transfer`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `qty`) VALUES (2, '2020-06-05', '12/KL/22/2020', 'Pembelian Motherboard', '1106', 'Elektronik', 'Gudang 3', 'Gudang 2', '15');
INSERT INTO `tf_gudang` (`id`, `tgl`, `no_transfer`, `keterangan`, `kode`, `barang`, `gudang_asal`, `gudang_tujuan`, `qty`) VALUES (4, '2020-06-06', '13/KL/22/2020', 'Pembelian Kursi Karyawan', '1112', 'Kursi', 'Gudang 3', 'Gudang 5', '30');


#
# TABLE STRUCTURE FOR: topasmen
#

DROP TABLE IF EXISTS `topasmen`;

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
  `jumlah_team` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `topasmen` (`id`, `nama`, `manager`, `poin_sendiri`, `poin_tim`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES (1, 'Siska', 'Saeful Rahman', '70', '70', 'CS', 'Karyawan', '2', '5', '2', '5', '2');
INSERT INTO `topasmen` (`id`, `nama`, `manager`, `poin_sendiri`, `poin_tim`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES (3, 'Anggun Nur', 'Iman Hanafi', '80', '90', 'Bendahara', 'Karyawan', '2', '3', '2', '2', '3');


#
# TABLE STRUCTURE FOR: toplead
#

DROP TABLE IF EXISTS `toplead`;

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
  `jumlah_team` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `toplead` (`id`, `nama`, `manager`, `poin_sendiri`, `poin_tim`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES (1, 'Siska', 'Saeful Rahman', '70', '70', 'CS', 'Karyawan', '2', '5', '2', '5', '2');
INSERT INTO `toplead` (`id`, `nama`, `manager`, `poin_sendiri`, `poin_tim`, `peringkat_langsung`, `peringkat_tidaklangsung`, `jumlah_leader`, `jumlah_distributor`, `jumlah_retrain`, `jumlah_observasi`, `jumlah_team`) VALUES (3, 'Anggun Nur', 'Iman Hanafi', '80', '90', 'Bendahara', 'Karyawan', '2', '3', '2', '2', '3');


#
# TABLE STRUCTURE FOR: transfer
#

DROP TABLE IF EXISTS `transfer`;

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
  `fleet` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transfer` (`id`, `shipment`, `req_date`, `amount`, `type`, `notes`, `account`, `account_name`, `shipment_date`, `vehicle`, `driver`, `muatan`, `alias`, `departure`, `arrival`, `legal`, `fleet`) VALUES (1, 'A-2 WE', '17-09-2020', '2000', 'Bongkar', 'Pengiriman barang ini didahulukan', 'Ferra', 'Ferra Puspita', '20-09-2020', 'B-210', 'Joko Susanto', 'Muatan', 'Joko', 'BA-002', 'Jakarta', 'Legal', 'Fleet');


#
# TABLE STRUCTURE FOR: truck
#

DROP TABLE IF EXISTS `truck`;

CREATE TABLE `truck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `truck_no` varchar(50) NOT NULL,
  `group_truck` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `kernet` varchar(50) NOT NULL,
  `initial` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `kir` varchar(50) NOT NULL,
  `stnk` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `memo` varchar(100) NOT NULL,
  `maintenance` varchar(50) NOT NULL,
  `maximum` varchar(50) NOT NULL,
  `current` varchar(50) NOT NULL,
  `last` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `memo2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `truck` (`id`, `truck_no`, `group_truck`, `driver`, `kernet`, `initial`, `distance`, `kir`, `stnk`, `target`, `year`, `memo`, `maintenance`, `maximum`, `current`, `last`, `date`, `memo2`) VALUES (2, 'B9630 FRV', 'CDE 2 TON', 'Joko Susanto', 'Saiful', 'Jakarta', '108,015', '', '06 JULI 2016', '2400000', '2004', '', '', '', '', '', '', '');
INSERT INTO `truck` (`id`, `truck_no`, `group_truck`, `driver`, `kernet`, `initial`, `distance`, `kir`, `stnk`, `target`, `year`, `memo`, `maintenance`, `maximum`, `current`, `last`, `date`, `memo2`) VALUES (3, 'B9659 FXT', 'CDE 3 TON', 'Mahmud', 'Rizal', 'Medan', '82,181', '', '02 Feb 2016', '0', '2018', '', '', '', '', '', '', '');
INSERT INTO `truck` (`id`, `truck_no`, `group_truck`, `driver`, `kernet`, `initial`, `distance`, `kir`, `stnk`, `target`, `year`, `memo`, `maintenance`, `maximum`, `current`, `last`, `date`, `memo2`) VALUES (4, '10000000000001', 'CDD1', 'Fajri', 'Raehan', 'kkkkk', '1200km', 'Delivered', '100000000000001', '10000', '2014', 'Pengiriman barang jadi', 'Apply', '2000', 'Timur', 'Surabaya', '12-12-2020', 'B');
INSERT INTO `truck` (`id`, `truck_no`, `group_truck`, `driver`, `kernet`, `initial`, `distance`, `kir`, `stnk`, `target`, `year`, `memo`, `maintenance`, `maximum`, `current`, `last`, `date`, `memo2`) VALUES (5, 'B0057', 'CDD1', 'Fajri', 'Raehan', 'Bandung', '1300km', 'Delivered', '100000000000001', '2000', '2014', 'Pengiriman barang jadi', 'Apply', '2000', 'Timur', 'Surabaya', '10-12-2020', 'A');


#
# TABLE STRUCTURE FOR: truck_assigment
#

DROP TABLE IF EXISTS `truck_assigment`;

CREATE TABLE `truck_assigment` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `legal` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `pool` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `truck_assigment` (`id`, `code`, `date`, `status`, `legal`, `notes`, `vehicle`, `pool`, `driver`) VALUES (1, '1152', '2020-11-04', 'Aktif', 'Legal', 'Barang mudah pecah', 'Car Box', 'POL MN 23', 'Suparman');
INSERT INTO `truck_assigment` (`id`, `code`, `date`, `status`, `legal`, `notes`, `vehicle`, `pool`, `driver`) VALUES (2, '1156', '2020-11-04', 'Aktif', 'Legal', 'Harus diterima lebih dahulu', 'Car Box', 'MSN K20', 'Asgar Lazuardi');


#
# TABLE STRUCTURE FOR: user_config
#

DROP TABLE IF EXISTS `user_config`;

CREATE TABLE `user_config` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_config` (`id`, `category`, `name`, `code`) VALUES (1, 'Tools', 'Test 2', 'TESTING');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (1, 'Admin', 'admin@gmail.com', 'admin');
INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (7, 'admin2', 'admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909');
INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (8, 'Raka', 'raka@gmail.com', 'admin2');


#
# TABLE STRUCTURE FOR: vehicle
#

DROP TABLE IF EXISTS `vehicle`;

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
  `gprs` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `vehicle` (`id`, `police`, `driver`, `fleet`, `year`, `stnk`, `kir`, `siu`, `insurance`, `active`, `cold`, `gps`, `gprs`) VALUES (1, '89158FT', 'Joko Susanto', 'Fleet', '2018', '03-04-2020', '03-04-2020', '03-04-2020', 'Insurance', 'Active', 'Solo System', 'gps', 'gprs');


#
# TABLE STRUCTURE FOR: vendors
#

DROP TABLE IF EXISTS `vendors`;

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `vendors` (`id`, `code`, `name`, `active`) VALUES (1, '1152', 'CDD', 'active');


#
# TABLE STRUCTURE FOR: zones
#

DROP TABLE IF EXISTS `zones`;

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `radius` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `zones` (`id`, `name`, `customer`, `city`, `radius`, `type`, `pic`) VALUES (1, 'Raden Anggoro', 'Dedi Kurnia', 'Tangerang', '20 km', 'Bongkar', 'PIC');


