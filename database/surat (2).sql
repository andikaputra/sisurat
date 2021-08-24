-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 03:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `lingkungan_tgs` varchar(30) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `password` varchar(10) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `user`, `nama`, `lingkungan_tgs`, `no_hp`, `password`, `hak_akses`) VALUES
(1001, 'toya', 'Ir. I Made Toya Asmara', 'Ubung', '08123840172', '1', 'kaling'),
(1002, 'pantaisari', 'I Nyoman Rata', 'Pantai Sari', '082146154288', '102', 'kaling'),
(1003, 'menega', 'I Nyoman Darma Arsana', 'Menega', '08123913726', '103', 'kaling'),
(1004, 'pesalakan', 'I Ketut Sukadana, SH', 'Pesalakan', '08123833632', '104', 'kaling'),
(1005, 'teba', 'I Wayan Arnawa', 'Teba', '089680151383', '105', 'kaling'),
(1007, 'jerokuta', 'I Wayan Suartha', 'Jerokuta', '082147466911', '106', 'kaling'),
(1008, 'kalanganyar', 'I Made Sudartha ', 'Kalanganyar', '081337400777', '107', 'kaling'),
(1009, 'tegal', 'I Ketut Sukartayasa, SH, S.Kep, M.Sc', 'Tegal', '081907541491', '108', 'kaling'),
(1010, 'perarudan', 'I Ketut Nika, S.Sos', 'Perarudan', '081236803310', '109', 'kaling'),
(1012, 'anggaswara', 'I Wayan Sudina', 'Anggaswara', '081246756631', '110', 'kaling'),
(1013, 'mekarsari', 'I Wayan Tama', 'Mekar Sari', '0895700278478', '111', 'kaling'),
(1014, 'bhuanagubug', 'I Wayan Mana', 'Bhuana Gubug', '087860553111', '112', 'kaling'),
(1015, 'cengiling', 'I Kadek Adnyana', 'Cengiling', '081338556652', '1', 'kaling'),
(1016, 'pegawai', 'Andika', 'Jimbaran', '08123840172', '12345', 'Staf'),
(1212, 'lurah', 'I Ketut Rimbawan', 'Jimbaran', '08123840172', '1212', 'Lurah');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemohon`
--

CREATE TABLE `data_pemohon` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `lingkungan` varchar(30) NOT NULL,
  `kebangsaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pemohon`
--

INSERT INTO `data_pemohon` (`nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `pekerjaan`, `lingkungan`, `kebangsaan`) VALUES
('1111111111111111', 'Fachri Shofiyyuddin Ahmad', '2000-05-28', 'Kudus', 'Laki-Laki', 'Islam', '                   RT 01 RW 07', '087897315639', 'Mahasiswa', '', 'INDONESIA'),
('2222222222222222', 'Amalia', '1997-02-08', 'Kudus', 'Perempuan', 'Islam', ' RT 02 RW 03', '087897315639', 'Mahasiswa', '', 'INDONESIA'),
('3333333333333333', 'Muhammad Ilham', '2021-01-08', 'Kudus', 'Laki-Laki', 'Islam', '      RT 01 RW 03', '087897315639', 'Mahasiswa', '', 'INDONESIA'),
('4444444444444444', 'Muhammad Farih Ahbab', '2003-10-08', 'Kudus', 'Laki-Laki', 'Islam', '     RT 01 RW 05', '087897315639', 'Mahasiswa', '', 'INDONESIA'),
('5555555555555555', 'Bintang Sultan Mimbar Maulana', '1999-11-15', 'Kudus', 'Laki-Laki', 'Islam', 'RT 04 RW 02', '087897315639', 'Mahasiswa', '', 'INDONESIA'),
('9999999999999999', 'Budi', '2021-01-12', 'Kudus', 'Laki-Laki', '', '', '', '', '', 'INDONESIA'),
('1000000000000000', 'Hadi', '2021-01-12', 'Pati', 'Laki-Laki', '', '', '', '', '', 'INDONESIA'),
('7777777777777777', 'Fiki', '2021-01-12', 'Kudus', 'Perempuan', '', '', '', '', '', 'INDONESIA'),
('8888888888888888', 'Inayah', '2021-01-12', 'Kudus', 'Perempuan', 'Islam', ' RT 01 RW 07', '087897315639', 'Mahasiswa', '', 'INDONESIA'),
('1234', 'Fahri', '2021-03-16', 'Kudus', 'Laki-Laki', 'Islam', 'Kauman', '087897315639', 'Mahasiswa', '', 'INDONESIA'),
('98', 'Fahri', '2021-03-16', 'Kudus', 'Laki-Laki', 'Islam', '  ', '', '', '', 'INDONESIA'),
('00', 'firman', '2021-03-16', 'Kudus', 'Laki-Laki', 'Islam', '  Kauman', '087897315639', 'Mahasiswa', 'cengiling', 'jerman'),
('1111', 'Rachmad Hidayat', '2021-07-08', 'badung', 'Laki-Laki', 'Islam', 'Jl. Merpati No.12 Tuban, Kuta', '', 'WIBU', 'Ubung', 'INDONESIA'),
('123', 'Gede Andika Sista Wicaksana', '1993-10-21', 'Cianjur', 'Laki-Laki', 'Hindu', 'jalan palm no 4 lingk cengiling jimbaran', '081999016105', 'swasta', 'cengiling', 'INDONESIA'),
('123456789', 'Rahmad Hidayat', '2021-07-01', 'badung', 'Laki-Laki', '', '', '', '', 'menega', ''),
('5208051304950001', 'Rachmad Hidayat', '1995-04-13', 'Denpasar', 'Laki-Laki', 'Islam', 'Jl. Merpati No.12 Tuban, Kuta', '089687807904', 'Staff STIKOM Jimbaran', 'Jerokuta', 'Indonesia'),
('100', 'Rachmad Hidayat', '2021-07-03', 'Denpasar', 'Laki-Laki', 'Islam', 'Jl. Merpati No.12 Tuban, Kuta', '', 'Staff STIKOM Jimbaran', 'ubung', 'Indonesia'),
('0', 'aa', '1998-10-13', 'jimbaran', 'Laki-Laki', '', '', '', '', 'ubung', ''),
('123123', 'a', '1991-07-11', 'az', 'Laki-Laki', '', '', '', '', 'cengiling', ''),
('22', 'q', '2021-07-14', 'q', 'Laki-Laki', 'Kristen', 'asda', '12', 'ff', 'cengiling', 'i'),
('10', 'ANDIKA', '1993-10-21', 'CIANJUR', 'Laki-Laki', 'Hindu', 'JALAN PALM', '081999', 'SWASTA', 'cengiling', 'INDONESIA'),
('5103052110930002', 'Gede Andika Sista Wicaksana', '1993-10-21', 'cianjur', 'Laki-Laki', 'Hindu', 'Jalan Palm No 4 Lingk Cengiling', '081999016105', 'Swasta', 'cengiling', 'Indonesia'),
('50034567821045', 'Ni Kadek Reva Deandary', '2000-10-26', 'Denpasar', 'Perempuan', 'Hindu', 'Jln.kebajikan gg.moksa no.1', '082266175157', 'Mahasiswa', 'ubung', 'Indonesia'),
('2589', 'Julianto Rustanto', '2000-07-11', 'Jakarta', 'Laki-Laki', '', '', '', '', 'mekar sari', ''),
('110', 'Rahmad Hidayat', '2021-04-13', 'Denpasar', 'Laki-Laki', 'Islam', 'Jl. Merpati No. 12 Tuban, Kuta', '089687807904', 'Staff STIKOM Jimbaran', 'ubung', 'Indonesia'),
('14789', 'Ahmad Raden', '1995-02-14', 'Tabanan', 'Laki-Laki', 'Kristen', 'Jl. Kampus STIKOM', '081548769325', 'Mahasiswa', 'ubung', 'Indonesia'),
('789', 'g', '1995-10-21', 'badung', 'Laki-Laki', 'Hindu', 'jl', '081999105', 'swasta', 'cengiling', 'indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skb`
--

CREATE TABLE `data_request_skb` (
  `id_request_skb` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa',
  `request` varchar(20) NOT NULL DEFAULT 'KELAKUAN BAIK',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_request_skb`
--

INSERT INTO `data_request_skb` (`id_request_skb`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(7, '1111111111111111', '2021-01-11 10:50:31', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Sakit', 'Surat dicetak, bisa diambil!', 'KELAKUAN BAIK', 3, '2021-01-11'),
(8, '4444444444444444', '2021-01-11 16:03:13', '4444444444444444 - Muhammad Farih Ahbab_.jpg', '4444444444444444 - Muhammad Farih Ahbab_.jpg', 'Ijin Sakit', 'Surat dicetak, bisa diambil!', 'KELAKUAN BAIK', 3, '2021-01-14'),
(9, '1111111111111111', '2021-01-13 21:11:53', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Sakit', 'Surat dicetak, bisa diambil!', 'KELAKUAN BAIK', 3, '2021-01-14'),
(12, '1111', '2021-07-13 04:46:20', '1111_.jpg', '1111_.jpg', 'efef', 'Surat dicetak, bisa diambil!', 'KELAKUAN BAIK', 3, '2021-07-15'),
(14, '100', '2021-07-21 00:30:31', '100_.jpg', '100_.jpg', 'KAWIN CUY', 'Surat dicetak, bisa diambil!', 'KELAKUAN BAIK', 3, '2021-07-23'),
(20, '50034567821045', '2021-07-24 00:13:44', '50034567821045_.jpg', '50034567821045_.jpg', 'Melamar Jodoh', 'Surat sedang dalam proses cetak', 'KELAKUAN BAIK', 4, '2021-07-24'),
(21, '50034567821045', '2021-07-24 00:39:42', '50034567821045_.jpg', '50034567821045_.jpg', 'aku terlalu baik buat kamu', 'Data sedang diperiksa oleh Staf', 'KELAKUAN BAIK', 2, '0000-00-00'),
(24, '14789', '2021-07-26 00:53:28', '14789_.jpg', '14789_.jpg', 'kepo deh', 'Data sedang diperiksa oleh Staf', 'KELAKUAN BAIK', 0, '0000-00-00'),
(27, '110', '2021-07-27 01:08:41', '110_.jpg', '110_.jpg', 'CETAK SKCK', 'Data sedang diperiksa oleh Staf', 'KELAKUAN BAIK', 2, '0000-00-00'),
(28, '123', '2021-07-27 03:53:44', '123_.jpg', '123_.jpg', 'cari kerja', 'Data sedang diperiksa oleh Staf', 'KELAKUAN BAIK', 4, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skbd`
--

CREATE TABLE `data_request_skbd` (
  `id_request_skbd` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `berkasbeda` varchar(50) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'KETERANGAN BEDA DATA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL,
  `ktrdatasalah` text NOT NULL,
  `bedadata` varchar(50) NOT NULL,
  `datasalah` varchar(20) NOT NULL,
  `databeda` varchar(30) NOT NULL,
  `databenar` varchar(20) NOT NULL,
  `databermasalah` varchar(20) NOT NULL,
  `datasalahinput` text NOT NULL,
  `databenarinput` text NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skbd`
--

INSERT INTO `data_request_skbd` (`id_request_skbd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `berkasbeda`, `keterangan`, `request`, `status`, `acc`, `ktrdatasalah`, `bedadata`, `datasalah`, `databeda`, `databenar`, `databermasalah`, `datasalahinput`, `databenarinput`, `keperluan`) VALUES
(9, '100', '2021-07-22 03:00:20', '100_.jpg', '100_.jpg', '100_.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN BEDA DATA', 4, '2021-07-23', 'NO. 86652', '', 'data shm', '', 'data ktp baru', 'nama', 'Rachmad Hidayat', 'Ir. H. Rahmad Hidayat, S.Kom. ,M.Kom.', ''),
(11, '100', '2021-07-23 02:19:51', '100_.jpg', '100_.jpg', '100_.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN BEDA DATA', 4, '2021-07-23', 'NO. 86652', '', 'data ktp', '', 'data ktp baru', 'nama', 'Rachmad Hidayat', 'Ir. H. Rahmad Hidayat, S.Kom. ,M.Kom.', ''),
(13, '50034567821045', '2021-07-24 00:18:58', '50034567821045_.jpg', '50034567821045_.jpg', '50034567821045_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN BEDA DATA', 2, '0000-00-00', '', '', 'data ktp', '', 'data ktp', '', 'umhh apaya', 'reva deandary cantik ', ''),
(14, '14789', '2021-07-26 00:58:07', '14789_.jpg', '14789_.jpg', '14789_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN BEDA DATA', 0, '0000-00-00', '', '', 'data ktp baru', '', 'data ktp baru', 'nik ktp', '125487963', '123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skbpk`
--

CREATE TABLE `data_request_skbpk` (
  `id_request_skbpk` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'TIDAK MAMPU',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL,
  `lingkungan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_request_skbpk`
--

INSERT INTO `data_request_skbpk` (`id_request_skbpk`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`, `lingkungan`) VALUES
(14, '5555555555555555', '2021-01-11 08:30:37', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', 'Bantuan Beasiswa', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-01-11', ''),
(17, '2222222222222222', '2021-01-11 10:57:03', '2222222222222222 - Amalia_.jpg', '2222222222222222 - Amalia_.jpg', 'Bantuan Beasiswa', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-01-11', ''),
(18, '8888888888888888', '2021-01-12 04:38:01', '8888888888888888 - Inayah_.jpg', '8888888888888888 - Inayah_.jpg', 'Bantuan Beasiswa', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-01-12', ''),
(21, '1111111111111111', '2021-01-13 21:08:05', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Bantuan Beasiswa', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-01-14', ''),
(47, '98', '2021-03-16 05:33:29', '98_.jpg', '98_.jpg', 'Beasiswa', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-03-16', ''),
(48, '123', '2021-07-15 04:14:51', '123_.jpg', '123_.jpg', '', 'BELUM PENAH KAWIN', 'Data sedang diperiksa oleh Staf', 1, '0000-00-00', ''),
(49, '1111', '2021-07-17 03:34:45', '1111_.jpg', '1111_.jpg', '', 'BELUM PENAH KAWIN', 'Data sedang diperiksa oleh Staf', 0, '0000-00-00', ''),
(50, '123', '2021-07-17 04:28:13', '123_.jpg', '123_.jpg', '', 'BELUM PENAH KAWIN', 'Data sedang diperiksa oleh Staf', 0, '0000-00-00', ''),
(52, '5208051304950001', '2021-07-17 04:39:53', '5208051304950001_.jpg', '5208051304950001_.jpg', 'mengurus akta nikah', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-07-15', 'jerokuta'),
(58, '100', '2021-07-17 06:15:27', '100_.jpg', '100_.jpg', '', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-07-23', 'ubung'),
(59, '1111', '2021-07-19 02:58:38', '1111_.jpg', '1111_.jpg', '', 'BELUM PENAH KAWIN', 'Data sedang diperiksa', 0, '0000-00-00', 'Laki-Laki'),
(60, '1111', '2021-07-19 03:00:09', '1111_.jpg', '1111_.jpg', '', 'BELUM PENAH KAWIN', 'Surat dicetak, bisa diambil!', 3, '2021-07-23', 'Ubung'),
(62, '123123', '2021-07-19 05:31:00', '123123_.jpg', '123123_.jpg', '', 'BELUM PENAH KAWIN', 'Data sedang diperiksa', 0, '0000-00-00', 'ubung'),
(63, '100', '2021-07-23 02:18:28', '100_.jpg', '100_.jpg', '', 'BELUM PENAH KAWIN', 'Surat sedang dalam proses cetak', 4, '2021-07-23', 'ubung'),
(64, '50034567821045', '2021-07-24 00:12:54', '50034567821045_.jpg', '50034567821045_.jpg', '', 'TIDAK MAMPU', 'Data sedang diperiksa', 2, '0000-00-00', 'ubung'),
(65, '2589', '2021-07-26 00:48:00', '2589_.jpg', '2589_.jpg', '', 'TIDAK MAMPU', 'Data sedang diperiksa', 0, '0000-00-00', 'mekar sari'),
(66, '110', '2021-07-26 00:49:37', '110_.jpg', '110_.jpg', 'KAWIN CUY', 'TIDAK MAMPU', 'TOLONG LENGKAPI DATA FOTO KK', 2, '0000-00-00', 'ubung'),
(67, '100', '2021-07-26 00:50:45', '100_.jpg', '100_.jpg', '', 'TIDAK MAMPU', 'Data sedang diperiksa', 1, '0000-00-00', 'ubung'),
(68, '14789', '2021-07-26 00:53:01', '14789_.jpg', '14789_.jpg', 'Mau nikah besok', 'TIDAK MAMPU', 'Data sedang diperiksa', 1, '0000-00-00', 'ubung'),
(69, '100', '2021-07-26 01:15:38', '100_.jpg', '100_.jpg', 'KAWIN CUY', 'TIDAK MAMPU', 'Data sedang diperiksa', 1, '0000-00-00', 'ubung'),
(72, '123', '2021-07-27 05:50:37', '123_.jpg', '123_.jpg', 'asdassss', 'TIDAK MAMPU', 'Surat sedang dalam proses cetak', 4, '2021-07-27', 'cengiling');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skd`
--

CREATE TABLE `data_request_skd` (
  `id_request_skd` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(50) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(12, '1111111111111111', '2021-01-11 03:22:38', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 4, '2021-01-11'),
(17, '5555555555555555', '2021-01-11 08:27:04', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-01-31'),
(19, '5555555555555555', '2021-01-11 08:41:15', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-01-11'),
(20, '1111111111111111', '2021-01-13 21:12:25', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-01-14'),
(21, '00', '2021-07-02 00:26:48', '00_.jpg', '00_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2121-03-02'),
(30, '50034567821045', '2021-07-24 00:14:44', '50034567821045_.jpg', '50034567821045_.jpg', 'Pindah ke hatimuuu', 'Data sedang diperiksa oleh Staf', 'DOMISILI', 0, '0000-00-00'),
(31, '14789', '2021-07-26 00:54:03', '14789_.jpg', '14789_.jpg', 'Ganti KTP Baru', 'Data sedang diperiksa oleh Staf', 'DOMISILI', 0, '0000-00-00'),
(33, '110', '2021-07-26 02:23:41', '110_.jpg', '110_.jpg', 'banyak', 'Data sedang diperiksa oleh Staf', 'DOMISILI', 0, '0000-00-00'),
(41, '789', '2021-07-26 06:08:27', '789_.jpg', '789_.jpg', 'vaksinasi corona', 'Data sedang diperiksa oleh Staf', 'DOMISILI', 0, '0000-00-00'),
(43, '123', '2021-07-27 00:58:56', '123_.jpg', '123_.jpg', 'Vaksinasi Corona', 'Surat sedang dalam proses cetak', 'DOMISILI', 4, '2021-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skdoa`
--

CREATE TABLE `data_request_skdoa` (
  `id_request_skdoa` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `keperluan` varchar(20) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI ORANG ASING',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL,
  `scan_kepolisian` text NOT NULL,
  `masapaspor` date NOT NULL,
  `masakitas` date NOT NULL,
  `nopaspor` varchar(10) NOT NULL,
  `nokitas` varchar(15) NOT NULL,
  `norangasing` varchar(100) NOT NULL,
  `tmpl` varchar(40) NOT NULL,
  `tgllahir` date NOT NULL,
  `kerja` varchar(25) NOT NULL,
  `bangsa` text NOT NULL,
  `tinggal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skdoa`
--

INSERT INTO `data_request_skdoa` (`id_request_skdoa`, `nik`, `tanggal_request`, `keperluan`, `keterangan`, `request`, `status`, `acc`, `scan_kepolisian`, `masapaspor`, `masakitas`, `nopaspor`, `nokitas`, `norangasing`, `tmpl`, `tgllahir`, `kerja`, `bangsa`, `tinggal`) VALUES
(15, '50034567821045', '2021-07-24 00:17:50', 'Menjadi warga +62', 'Data sedang diperiksa oleh Staf', 'DOMISILI ORANG ASING', 1, '0000-00-00', '50034567821045_.jpg', '2021-12-07', '2022-12-12', '000', '000', 'Reva Dea', 'Denpasar', '2000-10-26', 'Lecture', 'Singapura', 'Washington DC'),
(16, '14789', '2021-07-26 00:56:11', 'Tinggal Sementara', 'Data sedang diperiksa oleh Staf', 'DOMISILI ORANG ASING', 0, '0000-00-00', '14789_.jpg', '2025-07-17', '2023-10-26', 'F45879', '1254879631', 'Stanley Roschid', 'Amerika Serikat', '1989-06-06', 'Investor', 'Amerika Serikat', 'Jl. Mumbul'),
(18, '110', '2021-07-27 01:13:52', 'Pindah Kewarganegara', 'Data sedang diperiksa oleh Staf', 'DOMISILI ORANG ASING', 2, '0000-00-00', '110_.jpg', '2021-07-31', '2021-07-31', '223224', '23445', 'Jonson', 'Denver', '2021-07-01', 'Staff', 'USA', 'Jimbaran'),
(19, '123', '2021-07-27 01:35:09', 'administrasi kependu', 'Surat sedang dalam proses cetak', 'DOMISILI ORANG ASING', 4, '0000-00-00', '123 - Gede Andika Sista Wicaksana_.jpg', '2021-07-28', '2021-07-28', '111', '222', 'james', 'London', '2021-07-13', 'bayi', 'Inggris', 'jalan palm no 4 lingkungan cengiling');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skkm`
--

CREATE TABLE `data_request_skkm` (
  `id_request_skkm` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_rumahsakit` varchar(40) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(30) NOT NULL DEFAULT 'KETERANGAN KEMATIAN',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL,
  `ktp1` text NOT NULL,
  `ktp2` varchar(17) NOT NULL,
  `namajenazah` varchar(40) NOT NULL,
  `nikjenazah` varchar(30) NOT NULL,
  `tempatlahirjenazah` varchar(50) NOT NULL,
  `tgllahirjenazah` date NOT NULL,
  `agamajenazah` varchar(10) NOT NULL,
  `nama1` varchar(40) NOT NULL,
  `tmplhr1` varchar(50) NOT NULL,
  `tgllhr1` date NOT NULL,
  `nama2` varchar(40) NOT NULL,
  `tmplhr2` varchar(50) NOT NULL,
  `tgllhr2` date NOT NULL,
  `alamatjenazah` varchar(40) NOT NULL,
  `tglmeninggal` date NOT NULL,
  `nik1` varchar(30) NOT NULL,
  `nik2` varchar(30) NOT NULL,
  `scan_ahliwaris` text NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skkm`
--

INSERT INTO `data_request_skkm` (`id_request_skkm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `scan_rumahsakit`, `keterangan`, `request`, `status`, `acc`, `ktp1`, `ktp2`, `namajenazah`, `nikjenazah`, `tempatlahirjenazah`, `tgllahirjenazah`, `agamajenazah`, `nama1`, `tmplhr1`, `tgllhr1`, `nama2`, `tmplhr2`, `tgllhr2`, `alamatjenazah`, `tglmeninggal`, `nik1`, `nik2`, `scan_ahliwaris`, `keperluan`) VALUES
(7, '1111', '2021-07-17 03:35:45', '', '1111_.jpg', '1111_.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KEMATIAN', 3, '2021-07-21', '1111_.jpg', '1111_.jpg', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', '0', '0000-00-00', '', '', '', ''),
(8, '1111', '2021-07-19 04:05:19', '', '1111_.jpg', '1111_.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KEMATIAN', 3, '2021-07-21', '1111_.jpg', '1111_.jpg', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', '0', '0000-00-00', '', '', '', ''),
(28, '100', '2021-07-23 01:20:04', '100000000000000_.jpg', '100000000000000_.jpg', '_mati.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KEMATIAN', 3, '2021-07-23', '1000001_.jpg', '011001_.jpg', 'Andika Subagya Putri', '100000000000000', 'DENPASAR', '2021-07-01', 'Kristen', 'ANDIKA WICAK SANA', 'JIMBARAN', '2021-07-01', 'ANDIKA SUBAGYA', 'BEDUGUL', '2021-07-02', 'JIMBARAN', '2021-07-23', '1000001', '011001', '100_.jpg', 'PEN MATI'),
(29, '100', '2021-07-23 01:24:45', '1000000000000001_.jpg', '1000000000000001_.jpg', '_mati.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KEMATIAN', 3, '2021-07-23', '10000011_.jpg', '01100111_.jpg', 'Andika Subagya Putri', '1000000000000001', 'DENPASAR', '2021-07-01', 'Kristen', 'ANDIKA WICAK SANA', 'JIMBARAN', '2021-07-01', 'ANDIKA SUBAGYA', 'BEDUGUL', '2021-07-02', 'JIMBARAN', '2021-07-21', '10000011', '01100111', '100_.jpg', 'PEN MATI'),
(30, '100', '2021-07-23 01:30:28', '10000000000000012_.jpg', '10000000000000012_.jpg', '_mati.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KEMATIAN', 3, '2021-07-23', '10000011_.jpg', '011001111_.jpg', 'Andika Subagya Putri', '10000000000000012', 'DENPASAR', '2021-07-01', 'Kristen', 'ANDIKA WICAK SANA', 'JIMBARAN', '2021-07-01', 'ANDIKA SUBAGYA', 'BEDUGUL', '2021-07-02', 'JIMBARAN', '2021-07-23', '10000011', '011001111', '100_.jpg', 'PEN MATI'),
(35, '50034567821045', '2021-07-24 00:30:42', '000_.jpg', '000_.jpg', '_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN KEMATIAN', 1, '0000-00-00', '000_.jpg', '000_.jpg', 'rasa yang pernah ada', '000', 'tak tau', '3000-12-12', 'Islam', 'guguk', 'ada', '2099-02-02', 'guguk 2', 'matahari', '2099-02-02', 'hhjgccf', '2099-12-12', '000', '000', '50034567821045_.jpg', '-'),
(36, '14789', '2021-07-26 01:22:10', '123456789_.jpg', '123456789_.jpg', '_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN KEMATIAN', 2, '0000-00-00', '456789_.jpg', '123456897_.jpg', 'Joookokok', '123456789', 'Denpasar', '1970-05-21', 'Hindu', 'Indiasih', 'Jakarta', '1980-07-15', 'Wijaya', 'Banten', '1979-05-21', 'Jl. Bali Jimbaran', '2021-07-26', '456789', '123456897', '14789_.jpg', 'Surat Kematiannn'),
(42, '110', '2021-07-27 00:55:10', '11111_.jpg', '11111_.jpg', '11111_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN KEMATIAN', 2, '0000-00-00', '22222_.jpg', '33333_.jpg', 'Andika Subagya Putri', '11111', 'DENPASAR', '2021-07-01', 'Islam', 'ANDIKA WICAK SANA', 'JIMBARAN', '2021-07-01', 'ANDIKA SUBAGYA', 'BEDUGUL', '2021-07-03', 'JIMBARAN', '2021-07-27', '22222', '33333', '110-Rahmad Hidayat_.jpg', 'PEN MATI'),
(43, '123', '2021-07-27 01:42:39', '555_.jpg', '555_.jpg', '555_.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KEMATIAN', 4, '0000-00-00', '666_.jpg', '777_.jpg', 'g', '555', 'g', '1980-11-11', 'Hindu', 'h', 'h', '1990-11-22', 'j', 'j', '1990-12-21', 'g', '2021-07-26', '666', '777', '123-Gede Andika Sista Wicaksana_.jpg', 'gggg');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skl`
--

CREATE TABLE `data_request_skl` (
  `id_request_skl` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp1` text NOT NULL,
  `scan_ktp2` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_rumahsakit` varchar(40) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(30) NOT NULL DEFAULT 'KETERANGAN KELAHIRAN',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL,
  `nama_anak` varchar(40) NOT NULL,
  `tmpl_anak` varchar(40) NOT NULL,
  `tgllahir_anak` date NOT NULL,
  `alamat_anak` varchar(40) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `nik_ayah` text NOT NULL,
  `tmpl_ayah` varchar(40) NOT NULL,
  `tgll_ayah` date NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `nik_ibu` text NOT NULL,
  `tmpl_ibu` varchar(40) NOT NULL,
  `tgll_ibu` date NOT NULL,
  `keperluan` text NOT NULL,
  `saksi1` varchar(50) NOT NULL,
  `nik_saksi1` varchar(20) NOT NULL,
  `umur_saksi1` int(11) NOT NULL,
  `saksi2` varchar(50) NOT NULL,
  `nik_saksi2` varchar(20) NOT NULL,
  `umur_saksi2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skl`
--

INSERT INTO `data_request_skl` (`id_request_skl`, `nik`, `tanggal_request`, `scan_ktp1`, `scan_ktp2`, `scan_kk`, `scan_rumahsakit`, `keterangan`, `request`, `status`, `acc`, `nama_anak`, `tmpl_anak`, `tgllahir_anak`, `alamat_anak`, `nama_ayah`, `nik_ayah`, `tmpl_ayah`, `tgll_ayah`, `nama_ibu`, `nik_ibu`, `tmpl_ibu`, `tgll_ibu`, `keperluan`, `saksi1`, `nik_saksi1`, `umur_saksi1`, `saksi2`, `nik_saksi2`, `umur_saksi2`) VALUES
(20, '100', '2021-07-23 01:59:04', '123_.jpg', '321_.jpg', '123 - Gede Andika Sista Wicaksana_.jpg', '123 - Gede Andika Sista Wicaksana_.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KELAHIRAN', 3, '2021-07-23', 'ni luh kadek', 'mangupura', '2021-07-22', 'jalan palm no 4 lingk cengiling', 'Gede Andika Sista Wicaksana', '123', 'Cianjur', '1993-10-21', 'Ni Luh Kadek jelita', '321', 'Tusan', '1995-07-06', 'asdasdasdasd', 'g', '1', 21, 'h', '2', 21),
(23, '50034567821045', '2021-07-24 00:22:22', '123_.jpg', '321_.jpg', '123 - Gede Andika Sista Wicaksana_.jpg', '123 - Gede Andika Sista Wicaksana_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN KELAHIRAN', 0, '0000-00-00', 'ni luh kadek', 'mangupura', '2021-07-22', 'jalan palm no 4 lingk cengiling', 'Gede Andika Sista Wicaksana', '123', 'Cianjur', '1993-10-21', 'Ni Luh Kadek jelita', '321', 'Tusan', '1995-07-06', 'asdasdasdasd', 'g', '1', 21, 'h', '2', 21),
(25, '14789', '2021-07-26 01:08:28', '123_.jpg', '321_.jpg', '123 - Gede Andika Sista Wicaksana_.jpg', '123 - Gede Andika Sista Wicaksana_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN KELAHIRAN', 0, '0000-00-00', 'ni luh kadek', 'mangupura', '2021-07-22', 'jalan palm no 4 lingk cengiling', 'Gede Andika Sista Wicaksana', '123', 'Cianjur', '1993-10-21', 'Ni Luh Kadek jelita', '321', 'Tusan', '1995-07-06', 'asdasdasdasd', 'g', '1', 21, 'h', '2', 21),
(29, '110', '2021-07-26 03:28:15', '11111111111111111111111111111111111_.jpg', '222222222222222222222222222222222_.jpg', '110_.jpg', '110_.jpg', 'Data sedang diperiksa oleh Staf', 'KETERANGAN KELAHIRAN', 0, '0000-00-00', 'Anak', 'Bali', '2021-07-27', 'Bali Cuy', 'Ayah', '11111111111111111111111111111111111', 'Bali', '2021-07-01', 'Ibu', '222222222222222222222222222222222', 'Beli', '2021-07-02', 'PEN MATI', 'A', '1212121', 23, 'B', '987654321', 20),
(33, '123', '2021-07-27 01:25:12', '123_.jpg', '321_.jpg', '123_.jpg', '123_.jpg', 'Surat sedang dalam proses cetak', 'KETERANGAN KELAHIRAN', 4, '2021-07-27', 'ni luh kadek', 'mangupura', '2021-07-20', 'jalan palm no 4 lingk cengiling', 'Gede Andika Sista Wicaksana', '123', 'Cianjur', '1993-10-21', 'Ni Luh Kadek jelita', '321', 'Tusan', '1995-07-06', 'administrasi kependudukan', 'g', '1', 21, 'h', '2', 21);

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sku`
--

CREATE TABLE `data_request_sku` (
  `id_request_sku` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(7, '5555555555555555', '2021-01-11 09:26:15', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', 'Warung Kopi', 'Bantuan UMKM', 'Surat dicetak, bisa diambil!', 'USAHA', 3, '2021-01-11'),
(8, '1111111111111111', '2021-01-13 21:07:43', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Warung Kopi', 'Bantuan UMKM', '', 'USAHA', 3, '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_staf`
--

CREATE TABLE `data_staf` (
  `id_data_staf` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_surat_registrasi`
--

CREATE TABLE `data_surat_registrasi` (
  `no_regis` varchar(20) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `nik` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`) VALUES
('0', '111', 'Pemohon'),
('00', '123', 'Pemohon'),
('1', '1', 'Staf'),
('10', '10', 'Pemohon'),
('100', '100', 'Pemohon'),
('1000000000000000', '10', 'Pemohon'),
('1001', '1', 'kaling'),
('1007', '1007', 'kaling'),
('101', 'cengiling123', 'kaling'),
('1015', 'cengiling123', 'kaling'),
('110', '110', 'Pemohon'),
('1111', '1234', 'Pemohon'),
('1111111111111111', '123', 'Pemohon'),
('1212', '1212', 'Lurah'),
('123', '123321', 'Pemohon'),
('123123', 'a', 'Pemohon'),
('1234', '123', 'Pemohon'),
('12345', '12345', 'Staf'),
('123456789', '123456789', 'Pemohon'),
('14789', '123456', 'Pemohon'),
('2', '2', 'Lurah'),
('22', '22', 'Pemohon'),
('2222222222222222', '2', 'Pemohon'),
('2589', '12345', 'Pemohon'),
('3333333333333333', '3', 'Pemohon'),
('4444444444444444', '4', 'Pemohon'),
('50034567821045', '12345678', 'Pemohon'),
('5103052110930002', 'andika123', 'Pemohon'),
('5208051304950001', '1234', 'Pemohon'),
('5555555555555555', '5', 'Pemohon'),
('7777777777777777', '7', 'Pemohon'),
('789', '789', 'Pemohon'),
('8888888888888888', '8', 'Pemohon'),
('98', '123', 'Pemohon'),
('9999999999999999', '9', 'Pemohon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `data_request_skb`
--
ALTER TABLE `data_request_skb`
  ADD PRIMARY KEY (`id_request_skb`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skbd`
--
ALTER TABLE `data_request_skbd`
  ADD PRIMARY KEY (`id_request_skbd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skbpk`
--
ALTER TABLE `data_request_skbpk`
  ADD PRIMARY KEY (`id_request_skbpk`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skdoa`
--
ALTER TABLE `data_request_skdoa`
  ADD PRIMARY KEY (`id_request_skdoa`);

--
-- Indexes for table `data_request_skkm`
--
ALTER TABLE `data_request_skkm`
  ADD PRIMARY KEY (`id_request_skkm`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skl`
--
ALTER TABLE `data_request_skl`
  ADD PRIMARY KEY (`id_request_skl`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_staf`
--
ALTER TABLE `data_staf`
  ADD PRIMARY KEY (`id_data_staf`);

--
-- Indexes for table `data_surat_registrasi`
--
ALTER TABLE `data_surat_registrasi`
  ADD PRIMARY KEY (`no_regis`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12350;

--
-- AUTO_INCREMENT for table `data_request_skb`
--
ALTER TABLE `data_request_skb`
  MODIFY `id_request_skb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_request_skbd`
--
ALTER TABLE `data_request_skbd`
  MODIFY `id_request_skbd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_request_skbpk`
--
ALTER TABLE `data_request_skbpk`
  MODIFY `id_request_skbpk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `data_request_skdoa`
--
ALTER TABLE `data_request_skdoa`
  MODIFY `id_request_skdoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_request_skkm`
--
ALTER TABLE `data_request_skkm`
  MODIFY `id_request_skkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `data_request_skl`
--
ALTER TABLE `data_request_skl`
  MODIFY `id_request_skl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_staf`
--
ALTER TABLE `data_staf`
  MODIFY `id_data_staf` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD CONSTRAINT `data_pemohon_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_skb`
--
ALTER TABLE `data_request_skb`
  ADD CONSTRAINT `data_request_skb_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_skbpk`
--
ALTER TABLE `data_request_skbpk`
  ADD CONSTRAINT `data_request_skbpk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
