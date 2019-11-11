-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 09.21
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_nope`
--

CREATE TABLE `log_nope` (
  `id_log` int(50) NOT NULL,
  `nim_mhs` varchar(20) DEFAULT NULL,
  `nope_lama` varchar(15) DEFAULT NULL,
  `nope_baru` varchar(15) DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_nope`
--

INSERT INTO `log_nope` (`id_log`, `nim_mhs`, `nope_lama`, `nope_baru`, `tgl_update`) VALUES
(1, '1612401', '81235', '81235', '2019-10-29 16:00:08'),
(4, '1612402', '82326', '082326', '2019-10-30 11:44:34'),
(5, '1612405', '081226', '081226', '2019-10-30 19:05:20'),
(6, '1612403', '089786', '089787', '2019-10-30 23:40:28'),
(7, '1612401', '081235', '081265', '2019-10-31 00:21:48'),
(8, '1612407', '085666', '085777', '2019-11-11 15:02:12'),
(10, '1612406', '081256', '0812577', '2019-11-11 15:18:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(20) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id_mhs`, `nim_mhs`, `nama_mhs`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(1, '1612401', 'edy saputra', 'L', 'karanganyar', '081265'),
(2, '1612402', 'putri', 'P', 'Tahunan', '082326'),
(3, '1612403', 'andik', 'L', 'Tahunan', '089787'),
(5, '1612405', 'reno', 'L', 'Jekulo', '081226'),
(6, '1612406', 'yuda', 'L', 'Ngabul', '0812577'),
(7, '1612407', 'cahya', 'P', 'Bulungan', '085777');

--
-- Trigger `mhs`
--
DELIMITER $$
CREATE TRIGGER `nope_update` AFTER UPDATE ON `mhs` FOR EACH ROW BEGIN
IF (NEW.no_hp != OLD.no_hp) THEN
    insert into log_nope (nim_mhs,nope_lama,nope_baru,tgl_update)   
    VALUES (old.nim_mhs, old.no_hp, new.no_hp,NOW()); 
    END IF;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_mahasiswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_mahasiswa` (
`nama_mhs` varchar(50)
,`nim_mhs` varchar(20)
,`alamat` varchar(100)
,`no_hp` varchar(15)
,`nope_baru` varchar(15)
,`tgl_update` datetime
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_mahasiswa`
--
DROP TABLE IF EXISTS `view_mahasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_mahasiswa`  AS  select `m`.`nama_mhs` AS `nama_mhs`,`m`.`nim_mhs` AS `nim_mhs`,`m`.`alamat` AS `alamat`,`m`.`no_hp` AS `no_hp`,`l`.`nope_baru` AS `nope_baru`,`l`.`tgl_update` AS `tgl_update` from (`mhs` `m` join `log_nope` `l` on(`m`.`nim_mhs` = `l`.`nim_mhs`)) WITH CASCADED CHECK OPTION ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log_nope`
--
ALTER TABLE `log_nope`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `nim_mhs` (`nim_mhs`),
  ADD KEY `nope_lama` (`nope_lama`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `nim_mhs` (`nim_mhs`),
  ADD KEY `nim_mhs_2` (`nim_mhs`),
  ADD KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log_nope`
--
ALTER TABLE `log_nope`
  MODIFY `id_log` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `log_nope`
--
ALTER TABLE `log_nope`
  ADD CONSTRAINT `log_nope_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mhs` (`nim_mhs`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
