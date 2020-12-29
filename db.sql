-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 01:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `z_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE `gelombang` (
  `id` int(12) UNSIGNED NOT NULL,
  `tahun_id` int(12) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_tutup` date NOT NULL,
  `kuota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id`, `tahun_id`, `nama`, `tanggal_buka`, `tanggal_tutup`, `kuota`) VALUES
(1, 1, 'Gelombang 1', '2020-12-31', '2020-12-31', '10');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(12) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(1, 'Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(12) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama`, `tahun`) VALUES
(1, 'MTK', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-12-29-071451', 'App\\Database\\Migrations\\AddGelombang', 'default', 'App', 1609226501, 1),
(2, '2020-12-29-071452', 'App\\Database\\Migrations\\AddJurusan', 'default', 'App', 1609226501, 1),
(3, '2020-12-29-071453', 'App\\Database\\Migrations\\AddSiswaAsalSekolah', 'default', 'App', 1609226501, 1),
(4, '2020-12-29-071454', 'App\\Database\\Migrations\\AddSiswaAyah', 'default', 'App', 1609226501, 1),
(5, '2020-12-29-071455', 'App\\Database\\Migrations\\AddSiswaIbu', 'default', 'App', 1609226501, 1),
(6, '2020-12-29-071456', 'App\\Database\\Migrations\\AddSiswaPrestasiAkademik', 'default', 'App', 1609226501, 1),
(7, '2020-12-29-071456', 'App\\Database\\Migrations\\SiswaNilai', 'default', 'App', 1609226501, 1),
(8, '2020-12-29-071457', 'App\\Database\\Migrations\\AddSiswaAkademik', 'default', 'App', 1609226501, 1),
(9, '2020-12-29-071458', 'App\\Database\\Migrations\\AddSiswa', 'default', 'App', 1609226501, 1),
(10, '2020-12-29-071459', 'App\\Database\\Migrations\\AddTahun', 'default', 'App', 1609226501, 1),
(11, '2020-12-29-071832', 'App\\Database\\Migrations\\MataPelajaran', 'default', 'App', 1609226501, 1),
(12, '2020-12-29-071411', 'App\\Database\\Migrations\\AddUsers', 'default', 'App', 1609243863, 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(12) UNSIGNED NOT NULL,
  `NIK` int(12) NOT NULL,
  `NIS` int(12) NOT NULL,
  `tahun_id` int(12) UNSIGNED NOT NULL,
  `gelombang_id` int(12) UNSIGNED NOT NULL,
  `jurusan_id` int(12) UNSIGNED NOT NULL,
  `user_id` int(12) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL,
  `jumlah_pembayaran` varchar(255) NOT NULL,
  `no_pendaftaran` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `tinggal_dengan` varchar(255) NOT NULL,
  `anak_ke` int(12) NOT NULL,
  `jumlah_saudara` int(12) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `NIK`, `NIS`, `tahun_id`, `gelombang_id`, `jurusan_id`, `user_id`, `nama_lengkap`, `jenis_kelamin`, `agama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `status`, `status_pembayaran`, `jumlah_pembayaran`, `no_pendaftaran`, `no_telepon`, `tinggal_dengan`, `anak_ke`, `jumlah_saudara`, `tanggal`) VALUES
(2, 2, 213213, 1, 1, 1, 1, 'Rizky Fadillah', 'Laki-laki', 'Islam', '2', '2', '0002-02-02', 'Lulus', 'Lunas', '2', '2020122911001', '2', '22', 2, 2, '2020-12-29 01:47:06'),
(4, 2, 213221, 1, 1, 1, 1, 'Rizky Doe', 'Laki-laki', 'Islam', '2', '2', '0002-02-02', 'Tidak Lulus', 'Lunas', '2', '2020122911001', '2', '22', 2, 2, '2020-12-29 01:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_asal_sekolah`
--

CREATE TABLE `siswa_asal_sekolah` (
  `id` int(12) UNSIGNED NOT NULL,
  `siswa_id` int(12) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa_asal_sekolah`
--

INSERT INTO `siswa_asal_sekolah` (`id`, `siswa_id`, `nama`, `alamat`, `no_telepon`) VALUES
(1, 1, '1', '', '1'),
(2, 2, '2', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_ayah`
--

CREATE TABLE `siswa_ayah` (
  `id` int(12) UNSIGNED NOT NULL,
  `siswa_id` int(12) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `penghasilan` varchar(255) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `alamat_rumah` text NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `no_telepon_kantor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa_ayah`
--

INSERT INTO `siswa_ayah` (`id`, `siswa_id`, `nama_lengkap`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `nama_instansi`, `jabatan`, `penghasilan`, `alamat_kantor`, `alamat_rumah`, `no_telepon`, `no_telepon_kantor`, `email`) VALUES
(1, 1, '1', '1', '', '1', '1', '1', '', '', '', '1', '1', '1'),
(2, 2, '2', '2', '', '2', '2', '2', '', '', '', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_ibu`
--

CREATE TABLE `siswa_ibu` (
  `id` int(12) UNSIGNED NOT NULL,
  `siswa_id` int(12) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `penghasilan` varchar(255) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `alamat_rumah` text NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `no_telepon_kantor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa_ibu`
--

INSERT INTO `siswa_ibu` (`id`, `siswa_id`, `nama_lengkap`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `nama_instansi`, `jabatan`, `penghasilan`, `alamat_kantor`, `alamat_rumah`, `no_telepon`, `no_telepon_kantor`, `email`) VALUES
(1, 1, '1', '1', '', '1', '1', '1', '', '', '', '1', '1', '1'),
(2, 2, '2', '2', '', '2', '2', '2', '', '', '', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_nilai`
--

CREATE TABLE `siswa_nilai` (
  `id` int(12) UNSIGNED NOT NULL,
  `siswa_id` int(12) UNSIGNED NOT NULL,
  `mata_pelajaran_id` int(12) UNSIGNED NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa_nilai`
--

INSERT INTO `siswa_nilai` (`id`, `siswa_id`, `mata_pelajaran_id`, `nilai`) VALUES
(1, 2, 1, '80');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_prestasi_akademik`
--

CREATE TABLE `siswa_prestasi_akademik` (
  `id` int(12) UNSIGNED NOT NULL,
  `siswa_id` int(12) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `juara` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa_prestasi_akademik`
--

INSERT INTO `siswa_prestasi_akademik` (`id`, `siswa_id`, `nama`, `juara`, `tingkat`, `penyelenggara`) VALUES
(1, 1, '1', '1', '1', '1'),
(2, 1, '', '', '', ''),
(3, 1, '', '', '', ''),
(4, 2, '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_prestasi_non_akademik`
--

CREATE TABLE `siswa_prestasi_non_akademik` (
  `id` int(12) UNSIGNED NOT NULL,
  `siswa_id` int(12) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `juara` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa_prestasi_non_akademik`
--

INSERT INTO `siswa_prestasi_non_akademik` (`id`, `siswa_id`, `nama`, `juara`, `tingkat`, `penyelenggara`) VALUES
(1, 1, '1', '1', '1', '1'),
(4, 2, '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id` int(12) UNSIGNED NOT NULL,
  `tahun` int(12) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`, `status`) VALUES
(1, 2020, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Admin Ganteng', 'admin', 'adminpass', 'admin'),
(2, 'Petugas 1', 'petugas1', 'petugas1pass', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_asal_sekolah`
--
ALTER TABLE `siswa_asal_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_ayah`
--
ALTER TABLE `siswa_ayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_ibu`
--
ALTER TABLE `siswa_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_nilai`
--
ALTER TABLE `siswa_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_prestasi_akademik`
--
ALTER TABLE `siswa_prestasi_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_prestasi_non_akademik`
--
ALTER TABLE `siswa_prestasi_non_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa_asal_sekolah`
--
ALTER TABLE `siswa_asal_sekolah`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa_ayah`
--
ALTER TABLE `siswa_ayah`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa_ibu`
--
ALTER TABLE `siswa_ibu`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa_nilai`
--
ALTER TABLE `siswa_nilai`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa_prestasi_akademik`
--
ALTER TABLE `siswa_prestasi_akademik`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa_prestasi_non_akademik`
--
ALTER TABLE `siswa_prestasi_non_akademik`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
