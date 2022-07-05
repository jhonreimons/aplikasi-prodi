-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 11:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_prodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `nidn` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lulusan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `nidn`, `no_telepon`, `email`, `lulusan`, `jurusan`, `username`, `password`) VALUES
(2, 'Eka Stephani Sinambela, SST., M.Sc.', '0117078706', '+623324234342', 'eka@del.ac.id', 'S2 Vrije Universiteit Amsterdam', 'Software Engineering and Green IT', 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `data_mbkm`
--

CREATE TABLE `data_mbkm` (
  `id_mbkm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mbkm`
--

INSERT INTO `data_mbkm` (`id_mbkm`, `nama`, `nim`, `angkatan`, `perusahaan`, `semester`, `tahun_ajaran`, `status`) VALUES
(76, 'Indra Sinaga Andre', '13319024', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(77, 'Angggiat', '13319025', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(78, 'Andree', '13319022', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `data_ta`
--

CREATE TABLE `data_ta` (
  `id_data_ta` int(11) NOT NULL,
  `id_dosen_pembimbing1` int(11) NOT NULL,
  `id_dosen_pembimbing2` varchar(255) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `jumlah_yg_dibimbing` int(11) NOT NULL,
  `id_dosen_penguji_1` int(11) NOT NULL,
  `id_dosen_penguji_2` int(11) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ta`
--

INSERT INTO `data_ta` (`id_data_ta`, `id_dosen_pembimbing1`, `id_dosen_pembimbing2`, `judul`, `jumlah_yg_dibimbing`, `id_dosen_penguji_1`, `id_dosen_penguji_2`, `tahun_ajaran`) VALUES
(49, 27, 'Eka Stephani Sinambela, SST., M.Sc.', '\"Sistem Perawatan Tanaman Cabai  dan Pendeteksi Kematangan Cabai berbasis Internet of Things (IoT)\"', 3, 26, 29, 5),
(50, 32, '0', 'Weather recognition with Convolutional Neural Network (CNN)', 3, 33, 28, 5),
(51, 26, 'Sari Muthia Silalahi, S.Pd., M.Ed', 'Sistem Monitoring Pengunjung Menggunakan 2 Faktor Autentikasi', 3, 32, 29, 5),
(52, 26, '0', 'Threat Detection System Berbasis Integrasi IDS dan File Integrity Checker', 3, 28, 29, 5),
(53, 29, 'Sari Muthia Silalahi, S.Pd., M.Ed', 'Agricultural Monitoring using LoRa', 3, 27, 31, 5),
(54, 29, '0', 'Truck Tracking system using LoRA', 3, 33, 27, 5),
(55, 27, '0', 'Automated Nutrition Doser for Hydroponic Based on IoT', 3, 31, 32, 5),
(57, 28, '0', 'Comparative Study of Different Load Balancing and Failover Techniques in Web Server Cluster', 3, 26, 31, 5),
(58, 31, 'Gerry Italiano Wowiling, S.Tr.Kom., M.T.', 'Implementasi Private Cloud Menggunakan OpenStack', 3, 28, 29, 5);

-- --------------------------------------------------------

--
-- Table structure for table `d_pkm`
--

CREATE TABLE `d_pkm` (
  `id_detail_pkm` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `tema` varchar(255) DEFAULT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `judul_kegiatan` varchar(255) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id_jadwal` int(11) NOT NULL,
  `nama_kegiatan` varchar(225) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kegiatan`
--

INSERT INTO `jadwal_kegiatan` (`id_jadwal`, `nama_kegiatan`, `jam_mulai`, `jam_selesai`, `keterangan`, `tanggal`, `status`) VALUES
(1, 'Rapat Dosen', '08:00:00', '08:09:00', 'Mempersiapkan bahan persentasi', '2022-05-09', ''),
(13, 'Seminar ta 1', '15:31:00', '15:31:00', '', '2022-06-07', ''),
(14, 'Bimbingann pa 2', '19:00:00', '16:03:00', 'di laksanakan di rmk', '2022-06-07', ''),
(15, 'Pertemuan', '19:20:00', '12:00:00', 'sharing session', '2022-06-10', ''),
(16, 'rapat dosen', '08:03:00', '09:00:00', 'mempersiapkan persentasi', '2022-06-24', ''),
(17, 'dsfsdf', '20:49:00', '20:50:00', 'sdfsdf', '2022-06-25', ''),
(18, 'pertemuan dosen', '17:33:00', '21:30:00', 'Mempersiapkan persentasi', '2022-06-28', ''),
(19, 'rencana pernikahan febrian', '18:35:00', '20:35:00', 'membuat undangan', '2022-06-27', ''),
(20, 'dsfsdf', '22:08:00', '21:06:00', 'sdfsdf', '2022-06-30', 'Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_keluar`
--

CREATE TABLE `mahasiswa_keluar` (
  `id_mahasiswa_keluar` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `nim` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_keluar`
--

INSERT INTO `mahasiswa_keluar` (`id_mahasiswa_keluar`, `nama_mahasiswa`, `tanggal_keluar`, `nim`, `status`) VALUES
(32, 'Andre sirait', '2022-07-03', '13320043', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_dosen`
--

CREATE TABLE `m_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `jabatan_akademik` int(11) NOT NULL,
  `pascasarjana` varchar(200) NOT NULL,
  `universitas_s2` varchar(200) NOT NULL,
  `bidang_keahlian` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_dosen`
--

INSERT INTO `m_dosen` (`id_dosen`, `nama_dosen`, `nidn`, `status`, `jabatan_akademik`, `pascasarjana`, `universitas_s2`, `bidang_keahlian`, `foto`) VALUES
(26, 'Gerry Italiano Wowiling, S.Tr.Kom., M.T.         ', '0125059003', 1, 1, 'Teknik Elektro', 'Universitas Indonesia', '', '62c3f62aa8cf8.png'),
(27, 'Ahmad Zatnika Purwalaksana, S.Si., M.Si.  ', '0103029402', 1, 1, 'Fisika', 'Institut Teknologi Bandung', '', '62c3f61fc6115.png'),
(28, 'Eka Stephani Sinambela, SST., M.Sc. ', '0117078706', 1, 1, 'Computer Science', 'VU University of Amsterdam', '', '62c3f8827108a.jpg'),
(29, 'Istas Manalu, S.Si., M.Sc ', '0104088902', 1, 1, ' Mechanical Engineering', 'Chang Gung University', '', '62c3f88e0b7f4.png'),
(31, 'Marojahan MT. Sigiro, ST., M.Sc ', '0108098301', 1, 1, 'Computer science', 'Delft University of Technology, Belanda', '', '62c3f8990c9be.png'),
(32, 'Pandapotan Siagian, ST, M.Eng', '1018037401', 1, 3, 'Tenik Elektro', 'UGM', '', ''),
(33, 'Sari Muthia Silalahi, S.Pd., M.Ed ', '0117109301', 1, 1, 'Matematika', 'National Taiwan University', '', '62c3fb40842f3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `m_ipk_lulusan`
--

CREATE TABLE `m_ipk_lulusan` (
  `id_ipk_lulusan` int(11) NOT NULL,
  `jumlah_lulusan` int(11) DEFAULT NULL,
  `ipk_min` int(11) DEFAULT NULL,
  `ipk_rata2` int(11) DEFAULT NULL,
  `ipk_max` int(11) DEFAULT NULL,
  `tahun_lulusan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_karya_ilmiah_dosen`
--

CREATE TABLE `m_karya_ilmiah_dosen` (
  `id_karya_ilmiah` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `judul_karya_ilmiah` varchar(255) NOT NULL,
  `jumlah_sitasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_kerjsama_prodi`
--

CREATE TABLE `m_kerjsama_prodi` (
  `id_kerjsama_prodi` int(11) NOT NULL,
  `lembaga_mitra` varchar(100) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `judul_kerjasama` varchar(255) NOT NULL,
  `manfaat` varchar(225) NOT NULL,
  `waktu` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `bukti_kerjasama` varchar(255) NOT NULL,
  `tahun_berakhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_kerjsama_prodi`
--

INSERT INTO `m_kerjsama_prodi` (`id_kerjsama_prodi`, `lembaga_mitra`, `tingkat`, `judul_kerjasama`, `manfaat`, `waktu`, `durasi`, `bukti_kerjasama`, `tahun_berakhir`) VALUES
(3, 'huawei', 1, 'sdf', 'sdf', 1, 2, 'lkfsdf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_luaran_peneltian`
--

CREATE TABLE `m_luaran_peneltian` (
  `id_luaran_penelitian` int(11) NOT NULL,
  `judul_luaran_penetitian` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_maba`
--

CREATE TABLE `m_maba` (
  `id_maba` int(11) NOT NULL,
  `daya_tampung` int(11) NOT NULL,
  `pendaftar` int(11) NOT NULL,
  `lulus_seleksi` int(11) NOT NULL,
  `maba_reguler` int(11) NOT NULL,
  `maba_transfer` int(11) NOT NULL,
  `matif_reguler` int(11) NOT NULL,
  `matif_transfer` int(11) NOT NULL,
  `tahun_akademik` int(11) NOT NULL,
  `id_ts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_maba`
--

INSERT INTO `m_maba` (`id_maba`, `daya_tampung`, `pendaftar`, `lulus_seleksi`, `maba_reguler`, `maba_transfer`, `matif_reguler`, `matif_transfer`, `tahun_akademik`, `id_ts`) VALUES
(4, 32, 232, 3, 32, 32, 23, 23, 23, 7),
(5, 232, 3, 23, 23, 23, 43, 43, 2019, 7);

-- --------------------------------------------------------

--
-- Table structure for table `m_mahasiswa_asing`
--

CREATE TABLE `m_mahasiswa_asing` (
  `id_mahasiswa_asing` int(11) NOT NULL,
  `nama_prodi` int(11) NOT NULL,
  `jumlah_matif` int(11) NOT NULL,
  `masing__penuh_waktu` int(11) NOT NULL,
  `masing_paruh_wkatu` int(11) NOT NULL,
  `tahun_akademik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_matakuliah`
--

CREATE TABLE `m_matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_matakuliah`
--

INSERT INTO `m_matakuliah` (`id_matakuliah`, `nama_matakuliah`, `kode_matakuliah`, `semester`, `sks`) VALUES
(8, 'Bahasa Inggris I', 'KU31101', 1, 2),
(9, 'Inovasi Digital', 'TI31101', 1, 2),
(10, 'Pembentukan Karakter Del', 'KU31102', 1, 2),
(11, 'Dasar Pemrograman', '1031101', 1, 3),
(12, 'Matematika Diskrit', '1031102', 1, 3),
(13, 'Arsitektur dan Organisasi Komputer', '1031103', 1, 2),
(14, 'Pengembangan Situs Web I', '1331104', 1, 3),
(15, 'Pengenalan Rekayasa Perangkat Lunak', '1331105', 1, 3),
(16, 'Bahasa Inggris II', 'KU31201', 2, 2),
(17, 'Algoritma & Struktur Data', '1031201', 2, 3),
(18, 'Sistem Operasi', '1031202', 2, 3),
(19, 'Aljabar Linier', '1031203', 2, 3),
(20, 'Pengembangan Aplikasi Berbasis Internet', '1331204', 2, 3),
(21, 'Proyek Akhir Tahun I', '1331205', 2, 3),
(22, 'Pengenalan Basisdata', '1331206', 2, 2),
(23, 'Bahasa Inggris III', 'KU32101', 3, 2),
(24, 'Probabilitas dan Statistika', 'MA32101', 3, 3),
(25, 'Jaringan Komputer', '1032101', 3, 3),
(26, 'Pemrograman Sistem', '1332102', 3, 3),
(27, 'Perancangan Antarmuka Pengguna', '1332103', 3, 3),
(28, 'Virtualisasi Komputer', '1332104', 3, 3),
(29, 'Dasar Elektronika', '1332105', 3, 2),
(30, 'Bahasa Inggris IV', 'KU32201', 4, 2),
(31, 'Penulisan Karya Ilmiah', 'KU32202', 4, 2),
(32, 'Antar Jaringan', '1332201', 4, 3),
(33, 'Perangkat Lunak Sistem Jaringan', '1332202', 4, 3),
(34, 'Proyek Akhir Tahun II', '1332203', 4, 3),
(35, 'Sistem Terdistribusi', '1332204', 4, 3),
(36, 'Sistem Tertanam', '1332205', 4, 3),
(37, 'Bahasa Inggris V', 'KU33101', 5, 2),
(38, 'Keteknowiraan', 'TI33101', 5, 2),
(39, 'Administrasi Jaringan', '1333101', 5, 3),
(40, 'Keamanan Jaringan', '1333102', 5, 3),
(41, 'Penerapan Infrastruktur Cloud', '1333103', 5, 3),
(42, 'Teknologi IoT', '1333104', 5, 3),
(43, 'Tugas Akhir I', '1333105', 5, 3),
(45, 'Bahasa Inggris VI', 'KU33201', 6, 2),
(46, 'Agama & Etika', 'KU33202', 6, 2),
(47, 'KU33203	', 'Pancasila ', 6, 2),
(48, 'Kerja Praktik', '1333290', 6, 4),
(49, 'Tugas Akhir II', '1333201', 6, 4),
(50, 'Etika Profesi', '1333202', 6, 2),
(52, 'Komunikasi Data', '1333203', 6, 2),
(53, 'Pengembangan Profesi', '1333204', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `m_mitra`
--

CREATE TABLE `m_mitra` (
  `id_mitra` int(11) NOT NULL,
  `nama_lembaga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_mitra`
--

INSERT INTO `m_mitra` (`id_mitra`, `nama_lembaga`) VALUES
(1, 'cisco academy\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `m_pembiayaan`
--

CREATE TABLE `m_pembiayaan` (
  `id_pembiayaan` int(11) NOT NULL,
  `sumber_pembiyaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_pembiayaan`
--

INSERT INTO `m_pembiayaan` (`id_pembiayaan`, `sumber_pembiyaan`) VALUES
(1, 'a) Perguruan tinggi\r\nb) Mandiri'),
(2, 'Lembaga dalam negeri (diluar PT)\r\n'),
(3, 'Lembaga luar negeri\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `m_pembimbing`
--

CREATE TABLE `m_pembimbing` (
  `id_pembimbing` int(11) NOT NULL,
  `id_dosen_penguji1` int(11) NOT NULL,
  `id_dosen_penguji2` int(11) NOT NULL,
  `jumlah_yang_dibimbing` int(11) NOT NULL,
  `tahun_akademik` int(11) NOT NULL,
  `jenis_pembimbingan` int(11) NOT NULL,
  `rata-rata_bimbingan/tahun` int(11) NOT NULL,
  `rata-rata_seleuruh_program/pertahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_penelitian`
--

CREATE TABLE `m_penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `judul_penelitian` varchar(255) DEFAULT NULL,
  `tahun_akademik` int(11) DEFAULT NULL,
  `id_pembiayaan` int(11) DEFAULT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_penelitian`
--

INSERT INTO `m_penelitian` (`id_penelitian`, `id_dosen`, `judul_penelitian`, `tahun_akademik`, `id_pembiayaan`, `tahun_ajaran`) VALUES
(7, 26, 'Sistem Monitoring Tanaman Tomat', NULL, 2, 4),
(8, 27, 'iot', NULL, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `m_pkm`
--

CREATE TABLE `m_pkm` (
  `id_pkm` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `judul_pkm` varchar(255) DEFAULT NULL,
  `id_tahun_akademik` int(11) DEFAULT NULL,
  `id_sumber_pembiayaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_prestasi_mahasiswa`
--

CREATE TABLE `m_prestasi_mahasiswa` (
  `id_jenis_prestasi` int(11) NOT NULL,
  `jenis_prestasi` int(11) DEFAULT NULL,
  `wakktu` int(11) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `prestasi_yang_dicapai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_prodi`
--

CREATE TABLE `m_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_produk_jasa`
--

CREATE TABLE `m_produk_jasa` (
  `id_produk_jasa` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_publikasi`
--

CREATE TABLE `m_publikasi` (
  `id_publikasi` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `judul_publikasi` varchar(255) DEFAULT NULL,
  `sumber_pembiyaan` varchar(255) DEFAULT NULL,
  `id_tahun_akademik` int(11) DEFAULT NULL,
  `id_jenis_publikasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_recognisi`
--

CREATE TABLE `m_recognisi` (
  `id_recognisi` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `bukti_recognisi` varchar(255) DEFAULT NULL,
  `id_tingkat` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pa1`
--

CREATE TABLE `pa1` (
  `id_pa1` int(11) NOT NULL,
  `judul_pa` varchar(500) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL,
  `jumlah_yg_dibimbing` int(11) NOT NULL,
  `id_dosen_pembimbing` int(11) NOT NULL,
  `id_dosen_penguji1` int(11) NOT NULL,
  `id_dosen_penguji2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pa1`
--

INSERT INTO `pa1` (`id_pa1`, `judul_pa`, `tahun_ajaran`, `jumlah_yg_dibimbing`, `id_dosen_pembimbing`, `id_dosen_penguji1`, `id_dosen_penguji2`) VALUES
(11, 'Website Kemahasiswaan', 5, 2, 27, 33, 26),
(12, 'Website Profile Kelurahan Sangkar Nihuta', 5, 3, 32, 29, 28),
(13, 'website pengenalan hardware', 5, 3, 26, 31, 27),
(14, 'Sistem Booking Jadwal Dosen', 5, 3, 29, 28, 33),
(15, 'Klinik IT Del', 5, 3, 31, 33, 28),
(16, 'Sistem Administrasi Kelurahan Sangkar Nihuta', 5, 3, 32, 29, 26),
(17, 'Marsiajar STEM', 5, 3, 33, 28, 27),
(18, '', 5, 3, 33, 28, 27),
(19, 'Peminjaman Alat Laboratorium IT DEL', 5, 3, 29, 32, 26),
(20, 'Website Keasramaan IT Del', 5, 3, 31, 27, 31),
(21, 'kelembagaan dan bantuan sosial sangkar nihuta', 5, 3, 32, 27, 31),
(22, 'Omni Present', 5, 3, 33, 26, 28),
(23, 'Pelayanan Jasa Laundry', 5, 3, 27, 31, 29),
(24, 'Website Technology Computer', 5, 3, 26, 28, 32),
(25, 'Pemesanan Tiket Kapal Kalimantung', 5, 3, 27, 27, 32),
(26, 'Jasa Titip Instan', 5, 3, 31, 26, 33),
(27, 'Tarombo Batak Toba', 5, 3, 28, 31, 29),
(28, 'Koperasi jual beli IT Del berbasis web', 5, 3, 26, 32, 33),
(29, 'Toba Belajar', 5, 3, 33, 27, 31),
(30, 'Website Sistem Booking Mobil IT Del', 5, 3, 27, 32, 31);

-- --------------------------------------------------------

--
-- Table structure for table `pa2`
--

CREATE TABLE `pa2` (
  `id_pa2` int(11) NOT NULL,
  `judul_pa` varchar(500) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL,
  `jumlah_yg_dibimbing` int(11) NOT NULL,
  `id_dosen_pembimbing` int(11) NOT NULL,
  `id_dosen_penguji1` int(11) NOT NULL,
  `id_dosen_penguji2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pa2`
--

INSERT INTO `pa2` (`id_pa2`, `judul_pa`, `tahun_ajaran`, `jumlah_yg_dibimbing`, `id_dosen_pembimbing`, `id_dosen_penguji1`, `id_dosen_penguji2`) VALUES
(23, 'Automatic Door Unlock System by Voice Command Via Android with Arduino', 5, 3, 27, 28, 29),
(24, 'Mesin pencacah rumput', 5, 3, 32, 31, 29),
(26, 'Transfer Data Menggunakan Wi-Fi', 5, 3, 29, 26, 31),
(27, 'Aplikasi Operasional Kerja Program Studi - Studi Kasus D3TK', 5, 3, 28, 29, 26),
(28, 'Smart Garage Door', 5, 3, 31, 32, 27),
(29, 'Detektor Penggunaaan Masker Wajah dan Temperatur Suhu Badan', 5, 3, 33, 29, 32),
(30, 'Jemuran Otomatis Portable', 5, 3, 27, 26, 32),
(31, 'Monitoring Kualitas Air Danau Toba Berbasis Web Aplikasi', 5, 3, 29, 33, 31),
(32, 'Web-based Informatics Learning Application - Scope of Class VII', 5, 3, 28, 27, 33),
(33, 'Fruit Sorter', 5, 3, 32, 27, 26),
(34, 'Aplikasi Database Proyek IoT', 5, 3, 31, 26, 27),
(35, 'Aplikasi Klik Del', 5, 3, 28, 31, 33),
(36, 'Sistem Monitoring Suhu dan Kelembaban dalam Pembudidayaan Jamur Tiram', 5, 3, 33, 27, 28),
(37, 'IoT Sistem Keamanan Pintu Menggunakan Sensor Reed Switch dengan Notifikasi Telegram', 5, 3, 26, 28, 29),
(38, 'Sistem Kontrol Pakan Ikan dan Kekeruhan Air Berbasis Internet of Things', 5, 3, 27, 31, 33);

-- --------------------------------------------------------

--
-- Table structure for table `r_jabatan_akademik`
--

CREATE TABLE `r_jabatan_akademik` (
  `id_jabatan_akademik` int(11) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_jabatan_akademik`
--

INSERT INTO `r_jabatan_akademik` (`id_jabatan_akademik`, `nama_jabatan`) VALUES
(1, 'Asisten Ahli'),
(2, 'Tenaga Pengajar'),
(3, 'Lektor'),
(4, 'Kepala Lektor'),
(5, 'Profesor');

-- --------------------------------------------------------

--
-- Table structure for table `r_jenis_pembimbingan`
--

CREATE TABLE `r_jenis_pembimbingan` (
  `id_jenis_pembimbingan` int(11) NOT NULL,
  `jenis_pembimbingan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_jenis_pembimbingan`
--

INSERT INTO `r_jenis_pembimbingan` (`id_jenis_pembimbingan`, `jenis_pembimbingan`) VALUES
(1, 'pada PS Lain pada Program yang sama di PT'),
(2, 'pada PS yang Diakreditasi	');

-- --------------------------------------------------------

--
-- Table structure for table `r_jenis_prestasi`
--

CREATE TABLE `r_jenis_prestasi` (
  `id_jenis_prestasi` int(11) NOT NULL,
  `jenis_prestasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `r_jenis_program`
--

CREATE TABLE `r_jenis_program` (
  `id_jenis_program` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `jenis_program` varchar(255) NOT NULL,
  `nama_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `r_jenis_publikasi`
--

CREATE TABLE `r_jenis_publikasi` (
  `id_jenis_publikasi` int(11) NOT NULL,
  `jenis_publikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `r_peringkat`
--

CREATE TABLE `r_peringkat` (
  `id_peringkat` int(11) NOT NULL,
  `peringkat` varchar(255) NOT NULL,
  `no_sk` varchar(255) NOT NULL,
  `tanggal_sk` date NOT NULL,
  `jumlah_mhs_ts` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `r_status_dosen`
--

CREATE TABLE `r_status_dosen` (
  `id_status` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_status_dosen`
--

INSERT INTO `r_status_dosen` (`id_status`, `status`) VALUES
(1, 'Tetap'),
(2, 'Tidak Tetap'),
(3, 'Praktisi/Industri');

-- --------------------------------------------------------

--
-- Table structure for table `r_tahun`
--

CREATE TABLE `r_tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_tahun`
--

INSERT INTO `r_tahun` (`id_tahun`, `tahun`) VALUES
(1, 2019),
(4, 2020),
(5, 2021),
(6, 2022),
(7, 2023),
(8, 2024),
(9, 2025),
(10, 2026),
(11, 2027),
(12, 2028),
(13, 2029),
(14, 2030);

-- --------------------------------------------------------

--
-- Table structure for table `r_tahun_akademik`
--

CREATE TABLE `r_tahun_akademik` (
  `id_tahun_akademik` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_tahun_akademik`
--

INSERT INTO `r_tahun_akademik` (`id_tahun_akademik`, `tahun`) VALUES
(6, 'TS-4'),
(7, 'TS-3'),
(8, 'TS-2'),
(9, 'TS-1'),
(10, 'TS');

-- --------------------------------------------------------

--
-- Table structure for table `r_tingkat`
--

CREATE TABLE `r_tingkat` (
  `id_tingkat` int(11) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_tingkat`
--

INSERT INTO `r_tingkat` (`id_tingkat`, `tingkat`) VALUES
(1, 'Internasional'),
(2, 'Nasional'),
(3, 'Wilayah/Lokal');

-- --------------------------------------------------------

--
-- Table structure for table `r_tingkat_kesesuaian`
--

CREATE TABLE `r_tingkat_kesesuaian` (
  `id_kesesuaian_bidang` int(11) NOT NULL,
  `rendah` int(11) DEFAULT NULL,
  `sedang` int(11) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_mahasiswa`
--

CREATE TABLE `status_mahasiswa` (
  `id_status_mahasiswa` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_mahasiswa`
--

INSERT INTO `status_mahasiswa` (`id_status_mahasiswa`, `status`) VALUES
(1, 'Mengundurkan Diri'),
(2, 'DO');

-- --------------------------------------------------------

--
-- Table structure for table `t_pengajaran`
--

CREATE TABLE `t_pengajaran` (
  `id_pengajaran` int(11) NOT NULL,
  `matakuliah` int(11) NOT NULL,
  `nama_dosen` int(11) NOT NULL,
  `kesesuaian_kompetensi` int(11) NOT NULL,
  `sertifikat_pendidik` varchar(500) NOT NULL,
  `sertifikat_kompetensi` varchar(500) NOT NULL,
  `kesesuaian_bidang` varchar(50) NOT NULL,
  `matakuliah_prodi_lain` varchar(100) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pengajaran`
--

INSERT INTO `t_pengajaran` (`id_pengajaran`, `matakuliah`, `nama_dosen`, `kesesuaian_kompetensi`, `sertifikat_pendidik`, `sertifikat_kompetensi`, `kesesuaian_bidang`, `matakuliah_prodi_lain`, `tahun_ajaran`) VALUES
(8, 18, 28, 0, '', '', '', '', 5),
(9, 28, 26, 0, '', '', '', '', 4),
(10, 13, 29, 0, '', '', '', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_mbkm`
--
ALTER TABLE `data_mbkm`
  ADD PRIMARY KEY (`id_mbkm`);

--
-- Indexes for table `data_ta`
--
ALTER TABLE `data_ta`
  ADD PRIMARY KEY (`id_data_ta`),
  ADD KEY `data_ta_ibfk_1` (`id_dosen_penguji_1`),
  ADD KEY `id_dosen_penguji_2` (`id_dosen_penguji_2`),
  ADD KEY `id_dosen_pembimbing2` (`id_dosen_pembimbing2`),
  ADD KEY `id_dosen_pembimbing1` (`id_dosen_pembimbing1`),
  ADD KEY `tahun_ajaran` (`tahun_ajaran`);

--
-- Indexes for table `d_pkm`
--
ALTER TABLE `d_pkm`
  ADD PRIMARY KEY (`id_detail_pkm`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `mahasiswa_keluar`
--
ALTER TABLE `mahasiswa_keluar`
  ADD PRIMARY KEY (`id_mahasiswa_keluar`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `m.dosen_ibfk_1` (`status`),
  ADD KEY `jabatan_akademik` (`jabatan_akademik`);

--
-- Indexes for table `m_ipk_lulusan`
--
ALTER TABLE `m_ipk_lulusan`
  ADD PRIMARY KEY (`id_ipk_lulusan`);

--
-- Indexes for table `m_karya_ilmiah_dosen`
--
ALTER TABLE `m_karya_ilmiah_dosen`
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `m_kerjsama_prodi`
--
ALTER TABLE `m_kerjsama_prodi`
  ADD PRIMARY KEY (`id_kerjsama_prodi`),
  ADD KEY `tingkat` (`tingkat`),
  ADD KEY `lembaga_mitra` (`lembaga_mitra`),
  ADD KEY `tahun_berakhir` (`tahun_berakhir`),
  ADD KEY `waktu` (`waktu`);

--
-- Indexes for table `m_luaran_peneltian`
--
ALTER TABLE `m_luaran_peneltian`
  ADD PRIMARY KEY (`id_luaran_penelitian`);

--
-- Indexes for table `m_maba`
--
ALTER TABLE `m_maba`
  ADD PRIMARY KEY (`id_maba`),
  ADD KEY `tahun_akademik` (`tahun_akademik`),
  ADD KEY `id_ts` (`id_ts`);

--
-- Indexes for table `m_mahasiswa_asing`
--
ALTER TABLE `m_mahasiswa_asing`
  ADD PRIMARY KEY (`id_mahasiswa_asing`),
  ADD KEY `nama_prodi` (`nama_prodi`),
  ADD KEY `tahun_akademik` (`tahun_akademik`);

--
-- Indexes for table `m_matakuliah`
--
ALTER TABLE `m_matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `m_mitra`
--
ALTER TABLE `m_mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `m_pembiayaan`
--
ALTER TABLE `m_pembiayaan`
  ADD PRIMARY KEY (`id_pembiayaan`);

--
-- Indexes for table `m_pembimbing`
--
ALTER TABLE `m_pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`),
  ADD KEY `id_dosen_penguji1` (`id_dosen_penguji1`),
  ADD KEY `id_dosen_penguji2` (`id_dosen_penguji2`),
  ADD KEY `tahun_akademik` (`tahun_akademik`),
  ADD KEY `jenis_pembimbingan` (`jenis_pembimbingan`);

--
-- Indexes for table `m_penelitian`
--
ALTER TABLE `m_penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_pembiayaan` (`id_pembiayaan`),
  ADD KEY `tahun_akademik` (`tahun_akademik`),
  ADD KEY `tahun_ajaran` (`tahun_ajaran`);

--
-- Indexes for table `m_pkm`
--
ALTER TABLE `m_pkm`
  ADD PRIMARY KEY (`id_pkm`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_tahun_akademik` (`id_tahun_akademik`);

--
-- Indexes for table `m_prestasi_mahasiswa`
--
ALTER TABLE `m_prestasi_mahasiswa`
  ADD PRIMARY KEY (`id_jenis_prestasi`),
  ADD KEY `jenis_prestasi` (`jenis_prestasi`),
  ADD KEY `tingkat` (`tingkat`);

--
-- Indexes for table `m_prodi`
--
ALTER TABLE `m_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `m_produk_jasa`
--
ALTER TABLE `m_produk_jasa`
  ADD PRIMARY KEY (`id_produk_jasa`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `m_publikasi`
--
ALTER TABLE `m_publikasi`
  ADD PRIMARY KEY (`id_publikasi`),
  ADD KEY `id_jenis_publikasi` (`id_jenis_publikasi`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `m_recognisi`
--
ALTER TABLE `m_recognisi`
  ADD PRIMARY KEY (`id_recognisi`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `pa1`
--
ALTER TABLE `pa1`
  ADD PRIMARY KEY (`id_pa1`),
  ADD KEY `id_dosen_pembimbing` (`id_dosen_pembimbing`),
  ADD KEY `id_dosen_penguji1` (`id_dosen_penguji1`),
  ADD KEY `id_dosen_penguji2` (`id_dosen_penguji2`),
  ADD KEY `tahun_ajaran` (`tahun_ajaran`);

--
-- Indexes for table `pa2`
--
ALTER TABLE `pa2`
  ADD PRIMARY KEY (`id_pa2`),
  ADD KEY `id_dosen_pembimbing` (`id_dosen_pembimbing`),
  ADD KEY `id_dosen_penguji1` (`id_dosen_penguji1`),
  ADD KEY `id_dosen_penguji2` (`id_dosen_penguji2`),
  ADD KEY `tahun_ajaran` (`tahun_ajaran`);

--
-- Indexes for table `r_jabatan_akademik`
--
ALTER TABLE `r_jabatan_akademik`
  ADD PRIMARY KEY (`id_jabatan_akademik`);

--
-- Indexes for table `r_jenis_pembimbingan`
--
ALTER TABLE `r_jenis_pembimbingan`
  ADD PRIMARY KEY (`id_jenis_pembimbingan`);

--
-- Indexes for table `r_jenis_prestasi`
--
ALTER TABLE `r_jenis_prestasi`
  ADD PRIMARY KEY (`id_jenis_prestasi`);

--
-- Indexes for table `r_jenis_program`
--
ALTER TABLE `r_jenis_program`
  ADD PRIMARY KEY (`id_jenis_program`),
  ADD KEY `r.jenis_program_ibfk_1` (`nama_prodi`);

--
-- Indexes for table `r_jenis_publikasi`
--
ALTER TABLE `r_jenis_publikasi`
  ADD PRIMARY KEY (`id_jenis_publikasi`);

--
-- Indexes for table `r_peringkat`
--
ALTER TABLE `r_peringkat`
  ADD PRIMARY KEY (`id_peringkat`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `r_status_dosen`
--
ALTER TABLE `r_status_dosen`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `r_tahun`
--
ALTER TABLE `r_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `r_tahun_akademik`
--
ALTER TABLE `r_tahun_akademik`
  ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indexes for table `r_tingkat`
--
ALTER TABLE `r_tingkat`
  ADD PRIMARY KEY (`id_tingkat`);

--
-- Indexes for table `r_tingkat_kesesuaian`
--
ALTER TABLE `r_tingkat_kesesuaian`
  ADD PRIMARY KEY (`id_kesesuaian_bidang`);

--
-- Indexes for table `status_mahasiswa`
--
ALTER TABLE `status_mahasiswa`
  ADD PRIMARY KEY (`id_status_mahasiswa`);

--
-- Indexes for table `t_pengajaran`
--
ALTER TABLE `t_pengajaran`
  ADD PRIMARY KEY (`id_pengajaran`),
  ADD KEY `matakuliah` (`matakuliah`),
  ADD KEY `nama_dosen` (`nama_dosen`),
  ADD KEY `tahun_ajaran` (`tahun_ajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_mbkm`
--
ALTER TABLE `data_mbkm`
  MODIFY `id_mbkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `data_ta`
--
ALTER TABLE `data_ta`
  MODIFY `id_data_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `d_pkm`
--
ALTER TABLE `d_pkm`
  MODIFY `id_detail_pkm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mahasiswa_keluar`
--
ALTER TABLE `mahasiswa_keluar`
  MODIFY `id_mahasiswa_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `m_dosen`
--
ALTER TABLE `m_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `m_ipk_lulusan`
--
ALTER TABLE `m_ipk_lulusan`
  MODIFY `id_ipk_lulusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_kerjsama_prodi`
--
ALTER TABLE `m_kerjsama_prodi`
  MODIFY `id_kerjsama_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_luaran_peneltian`
--
ALTER TABLE `m_luaran_peneltian`
  MODIFY `id_luaran_penelitian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_maba`
--
ALTER TABLE `m_maba`
  MODIFY `id_maba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_mahasiswa_asing`
--
ALTER TABLE `m_mahasiswa_asing`
  MODIFY `id_mahasiswa_asing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_matakuliah`
--
ALTER TABLE `m_matakuliah`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `m_mitra`
--
ALTER TABLE `m_mitra`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `m_pembiayaan`
--
ALTER TABLE `m_pembiayaan`
  MODIFY `id_pembiayaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_pembimbing`
--
ALTER TABLE `m_pembimbing`
  MODIFY `id_pembimbing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_penelitian`
--
ALTER TABLE `m_penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_pkm`
--
ALTER TABLE `m_pkm`
  MODIFY `id_pkm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_prestasi_mahasiswa`
--
ALTER TABLE `m_prestasi_mahasiswa`
  MODIFY `id_jenis_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_prodi`
--
ALTER TABLE `m_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_produk_jasa`
--
ALTER TABLE `m_produk_jasa`
  MODIFY `id_produk_jasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_publikasi`
--
ALTER TABLE `m_publikasi`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_recognisi`
--
ALTER TABLE `m_recognisi`
  MODIFY `id_recognisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pa1`
--
ALTER TABLE `pa1`
  MODIFY `id_pa1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pa2`
--
ALTER TABLE `pa2`
  MODIFY `id_pa2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `r_jabatan_akademik`
--
ALTER TABLE `r_jabatan_akademik`
  MODIFY `id_jabatan_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `r_jenis_pembimbingan`
--
ALTER TABLE `r_jenis_pembimbingan`
  MODIFY `id_jenis_pembimbingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_jenis_prestasi`
--
ALTER TABLE `r_jenis_prestasi`
  MODIFY `id_jenis_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_jenis_program`
--
ALTER TABLE `r_jenis_program`
  MODIFY `id_jenis_program` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_jenis_publikasi`
--
ALTER TABLE `r_jenis_publikasi`
  MODIFY `id_jenis_publikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_peringkat`
--
ALTER TABLE `r_peringkat`
  MODIFY `id_peringkat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_status_dosen`
--
ALTER TABLE `r_status_dosen`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `r_tahun`
--
ALTER TABLE `r_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `r_tahun_akademik`
--
ALTER TABLE `r_tahun_akademik`
  MODIFY `id_tahun_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `r_tingkat`
--
ALTER TABLE `r_tingkat`
  MODIFY `id_tingkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `r_tingkat_kesesuaian`
--
ALTER TABLE `r_tingkat_kesesuaian`
  MODIFY `id_kesesuaian_bidang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_mahasiswa`
--
ALTER TABLE `status_mahasiswa`
  MODIFY `id_status_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_pengajaran`
--
ALTER TABLE `t_pengajaran`
  MODIFY `id_pengajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_ta`
--
ALTER TABLE `data_ta`
  ADD CONSTRAINT `data_ta_ibfk_1` FOREIGN KEY (`id_dosen_pembimbing1`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `data_ta_ibfk_2` FOREIGN KEY (`id_dosen_penguji_1`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `data_ta_ibfk_3` FOREIGN KEY (`id_dosen_penguji_2`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `data_ta_ibfk_4` FOREIGN KEY (`tahun_ajaran`) REFERENCES `r_tahun` (`id_tahun`);

--
-- Constraints for table `d_pkm`
--
ALTER TABLE `d_pkm`
  ADD CONSTRAINT `d_pkm_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `d_pkm_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`);

--
-- Constraints for table `mahasiswa_keluar`
--
ALTER TABLE `mahasiswa_keluar`
  ADD CONSTRAINT `mahasiswa_keluar_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status_mahasiswa` (`id_status_mahasiswa`);

--
-- Constraints for table `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD CONSTRAINT `m_dosen_ibfk_1` FOREIGN KEY (`status`) REFERENCES `r_status_dosen` (`id_status`),
  ADD CONSTRAINT `m_dosen_ibfk_2` FOREIGN KEY (`jabatan_akademik`) REFERENCES `r_jabatan_akademik` (`id_jabatan_akademik`);

--
-- Constraints for table `m_karya_ilmiah_dosen`
--
ALTER TABLE `m_karya_ilmiah_dosen`
  ADD CONSTRAINT `m_karya_ilmiah_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `m_dosen` (`id_dosen`);

--
-- Constraints for table `m_kerjsama_prodi`
--
ALTER TABLE `m_kerjsama_prodi`
  ADD CONSTRAINT `m_kerjsama_prodi_ibfk_1` FOREIGN KEY (`tingkat`) REFERENCES `r_tingkat` (`id_tingkat`),
  ADD CONSTRAINT `m_kerjsama_prodi_ibfk_2` FOREIGN KEY (`tahun_berakhir`) REFERENCES `r_tahun` (`id_tahun`),
  ADD CONSTRAINT `m_kerjsama_prodi_ibfk_3` FOREIGN KEY (`waktu`) REFERENCES `r_tahun` (`id_tahun`);

--
-- Constraints for table `m_maba`
--
ALTER TABLE `m_maba`
  ADD CONSTRAINT `m_maba_ibfk_1` FOREIGN KEY (`id_ts`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`);

--
-- Constraints for table `m_mahasiswa_asing`
--
ALTER TABLE `m_mahasiswa_asing`
  ADD CONSTRAINT `m_mahasiswa_asing_ibfk_1` FOREIGN KEY (`nama_prodi`) REFERENCES `m_prodi` (`id_prodi`),
  ADD CONSTRAINT `m_mahasiswa_asing_ibfk_2` FOREIGN KEY (`tahun_akademik`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`);

--
-- Constraints for table `m_pembimbing`
--
ALTER TABLE `m_pembimbing`
  ADD CONSTRAINT `m_pembimbing_ibfk_1` FOREIGN KEY (`id_dosen_penguji1`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `m_pembimbing_ibfk_2` FOREIGN KEY (`id_dosen_penguji2`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `m_pembimbing_ibfk_3` FOREIGN KEY (`tahun_akademik`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`),
  ADD CONSTRAINT `m_pembimbing_ibfk_4` FOREIGN KEY (`jenis_pembimbingan`) REFERENCES `r_jenis_pembimbingan` (`id_jenis_pembimbingan`);

--
-- Constraints for table `m_penelitian`
--
ALTER TABLE `m_penelitian`
  ADD CONSTRAINT `m_penelitian_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `m_penelitian_ibfk_2` FOREIGN KEY (`id_pembiayaan`) REFERENCES `m_pembiayaan` (`id_pembiayaan`),
  ADD CONSTRAINT `m_penelitian_ibfk_3` FOREIGN KEY (`tahun_akademik`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`),
  ADD CONSTRAINT `m_penelitian_ibfk_4` FOREIGN KEY (`tahun_ajaran`) REFERENCES `r_tahun` (`id_tahun`);

--
-- Constraints for table `m_pkm`
--
ALTER TABLE `m_pkm`
  ADD CONSTRAINT `m_pkm_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `m_pkm_ibfk_2` FOREIGN KEY (`id_tahun_akademik`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`);

--
-- Constraints for table `m_prestasi_mahasiswa`
--
ALTER TABLE `m_prestasi_mahasiswa`
  ADD CONSTRAINT `m_prestasi_mahasiswa_ibfk_1` FOREIGN KEY (`jenis_prestasi`) REFERENCES `r_jenis_prestasi` (`id_jenis_prestasi`),
  ADD CONSTRAINT `m_prestasi_mahasiswa_ibfk_2` FOREIGN KEY (`tingkat`) REFERENCES `r_peringkat` (`id_peringkat`);

--
-- Constraints for table `m_produk_jasa`
--
ALTER TABLE `m_produk_jasa`
  ADD CONSTRAINT `m_produk_jasa_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `m_dosen` (`id_dosen`);

--
-- Constraints for table `m_publikasi`
--
ALTER TABLE `m_publikasi`
  ADD CONSTRAINT `m_publikasi_ibfk_1` FOREIGN KEY (`id_jenis_publikasi`) REFERENCES `r_jenis_publikasi` (`id_jenis_publikasi`),
  ADD CONSTRAINT `m_publikasi_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`);

--
-- Constraints for table `m_recognisi`
--
ALTER TABLE `m_recognisi`
  ADD CONSTRAINT `m_recognisi_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `m_recognisi_ibfk_2` FOREIGN KEY (`id_tahun`) REFERENCES `r_tahun_akademik` (`id_tahun_akademik`);

--
-- Constraints for table `pa1`
--
ALTER TABLE `pa1`
  ADD CONSTRAINT `pa1_ibfk_1` FOREIGN KEY (`id_dosen_penguji1`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `pa1_ibfk_2` FOREIGN KEY (`id_dosen_penguji2`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `pa1_ibfk_3` FOREIGN KEY (`id_dosen_pembimbing`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `pa1_ibfk_4` FOREIGN KEY (`tahun_ajaran`) REFERENCES `r_tahun` (`id_tahun`);

--
-- Constraints for table `pa2`
--
ALTER TABLE `pa2`
  ADD CONSTRAINT `pa2_ibfk_1` FOREIGN KEY (`id_dosen_pembimbing`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `pa2_ibfk_2` FOREIGN KEY (`id_dosen_penguji1`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `pa2_ibfk_3` FOREIGN KEY (`id_dosen_penguji2`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `pa2_ibfk_4` FOREIGN KEY (`tahun_ajaran`) REFERENCES `r_tahun` (`id_tahun`);

--
-- Constraints for table `r_jenis_program`
--
ALTER TABLE `r_jenis_program`
  ADD CONSTRAINT `r_jenis_program_ibfk_1` FOREIGN KEY (`nama_prodi`) REFERENCES `m_prodi` (`id_prodi`);

--
-- Constraints for table `r_peringkat`
--
ALTER TABLE `r_peringkat`
  ADD CONSTRAINT `r_peringkat_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `m_prodi` (`id_prodi`);

--
-- Constraints for table `t_pengajaran`
--
ALTER TABLE `t_pengajaran`
  ADD CONSTRAINT `t_pengajaran_ibfk_1` FOREIGN KEY (`matakuliah`) REFERENCES `m_matakuliah` (`id_matakuliah`),
  ADD CONSTRAINT `t_pengajaran_ibfk_2` FOREIGN KEY (`nama_dosen`) REFERENCES `m_dosen` (`id_dosen`),
  ADD CONSTRAINT `t_pengajaran_ibfk_3` FOREIGN KEY (`tahun_ajaran`) REFERENCES `r_tahun` (`id_tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
