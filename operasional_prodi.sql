-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 04:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `operasional_prodi`
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
-- Table structure for table `bph_himpunan`
--

CREATE TABLE `bph_himpunan` (
  `id_bph` int(11) NOT NULL,
  `ketua` varchar(100) NOT NULL,
  `wakil_ketua` varchar(100) NOT NULL,
  `bendahara` varchar(100) NOT NULL,
  `sekretaris` varchar(100) NOT NULL,
  `tahun_menjabat` int(11) NOT NULL,
  `tahun_selesai_menjabat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bph_himpunan`
--

INSERT INTO `bph_himpunan` (`id_bph`, `ketua`, `wakil_ketua`, `bendahara`, `sekretaris`, `tahun_menjabat`, `tahun_selesai_menjabat`) VALUES
(1, 'Moses Prisarsta Manurung', 'Jesika Laprina Manurung', 'Evita Silaen', 'Diantry A.S Pandiangan', 2021, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `bph_kpu`
--

CREATE TABLE `bph_kpu` (
  `id_ketua` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `wakil_ketua` varchar(100) NOT NULL,
  `skretaris` varchar(255) NOT NULL,
  `tahun_menjabat` int(11) NOT NULL,
  `tahun_selesai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bph_kpu`
--

INSERT INTO `bph_kpu` (`id_ketua`, `nama_ketua`, `wakil_ketua`, `skretaris`, `tahun_menjabat`, `tahun_selesai`) VALUES
(1, 'Josua Fanter Hasiholan Raja Guk-guk', 'Merry Margaretha Wijaya Tamba', 'Witasarah Sitinjak', 2022, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_data_divisi` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `tahun_menjabat` int(11) NOT NULL,
  `tahun_selesai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_divisi`
--

INSERT INTO `data_divisi` (`id_data_divisi`, `id_divisi`, `nama_ketua`, `tahun_menjabat`, `tahun_selesai`) VALUES
(1, 3, 'Theresia Devina Rumahorbo', 2021, 2022);

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
(1, 'Moses Prisarsta Manurung\r\n', '13319017', '2019', 'PT Zona Edukasi Nusantara\r\n', 6, '2021/2022', 'Belum'),
(2, 'Evita Silaen', '13319027', '2019', 'PT. Zona Edukasi Nusantara\r\n', 6, '2021/2022', 'Belum'),
(3, 'Evita Silaen\r\n', '13319024', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(4, 'Angelia Sondang Simanjuntak\r\n', '13319025', '2019', 'PT. Zona Edukasi Nusantara\r\n', 6, '2021/2022', 'Belum'),
(5, 'Tata Risa Panjaitan\r\n', '13319022', '2019', 'PT. Zona Edukasi Nusantara\r\n', 6, '2021/2022', 'Belum'),
(47, 'Horasw', '13319017', '2019', 'PT Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(48, 'Si Rajin', '13319027', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(49, 'Indra', '13319024', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(50, 'Angggiat', '13319025', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(51, 'Andree', '13319022', '2019', 'PT. Zona Edukasi Nusantara', 6, '2021/2022', 'Belum'),
(52, '0', '1', '2', '3', 4, '5', '6');

-- --------------------------------------------------------

--
-- Table structure for table `data_nahasiswa`
--

CREATE TABLE `data_nahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_nahasiswa`
--

INSERT INTO `data_nahasiswa` (`id`, `nama`, `nim`, `angkatan`) VALUES
(1, 'jhon', '13320041', 2020);

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
(15, 2, 'Eka Stephani Sinambela, SST., M.Sc.', 'Sistem Perawatan Tanaman Cabai  dan Pendeteksi Kematangan Cabai berbasis Internet of Things (IoT)', 3, 3, 4, 2022),
(22, 1, '-', 'Weather recognition with Convolutional Neural Network (CNN)', 3, 6, 7, 2022),
(23, 3, 'Sari Muthia Silalahi, S.Pd., M.Edc', 'Sistem Monitoring Pengunjung Menggunakan 2 Faktor Autentikasi', 3, 1, 4, 2022),
(24, 3, '-', 'Retrieving data. Wait a few seconds and try to cut or copy again.', 3, 7, 4, 2022),
(25, 4, 'Sari Muthia Silalahi, S.Pd., M.Edc', 'Retrieving data. Wait a few seconds and try to cut or copy again.', 3, 2, 5, 2022),
(26, 4, '-', 'Retrieving data. Wait a few seconds and try to cut or copy again.', 3, 6, 2, 2022),
(27, 2, '-', 'Retrieving data. Wait a few seconds and try to cut or copy again.', 3, 5, 1, 2022),
(28, 5, '-', 'Retrieving data. Wait a few seconds and try to cut or copy again.', 3, 6, 2, 2022),
(29, 7, '-', 'Retrieving data. Wait a few seconds and try to cut or copy again.', 3, 3, 5, 2022),
(30, 5, 'Gerry Italiano Wowiling, S.Tr.Kom., M.T.', 'Implementasi Private Cloud Menggunakan OpenStack', 3, 7, 4, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'Humas'),
(2, 'Kopetisi'),
(3, 'Pendidikan'),
(4, 'Kominfo'),
(5, 'Promosi'),
(6, 'Sarpras');

-- --------------------------------------------------------

--
-- Table structure for table `divisi_kpu`
--

CREATE TABLE `divisi_kpu` (
  `Id_divisi_kpu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `nidn` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lulusan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `nidn`, `status`, `no_telepon`, `email`, `lulusan`, `jurusan`, `username`, `password`, `foto`) VALUES
(1, 'Pandapotan Siagian, ST, M.Eng\n\n', '1018037401', '0', '\n', 'pandapotan.siagian@del.ac.id\n', 'Tenik Elektro', 'UGM', 'user123', 'user123', '\n'),
(2, 'Ahmad Zatnika Purwalaksana, S.Si., M.Si.', '0103029402', 'Asisten Ahli', '', '', 'Institut Teknologi Bandung', 'Fisika', 'purwa123', 'purwa123', 'Ahmad_Zatnika_ITDel.png'),
(3, 'Gerry Italiano Wowiling, S.Tr.Kom., M.T.', '0125059003', 'Tenaga Pengajar', '', 'gerry@del.ac.id\r\n\r\n', 'Universitas Indonesia', 'Teknik Elektro', '', '', 'Gerry_ITDel.png'),
(4, 'Istas Manalu, S.Si., M.Sc', '0104088902', 'Tenaga Pengajar', '', 'istas.manalu@del.ac.id', 'Chang Gung University', 'Mechanical Engineering\r\n\r\n', '', '', 'Istas_ITDel.png'),
(5, 'Marojahan MT. Sigiro, ST., M.Sc', '0108098301', 'Asisten Ahli', '', 'marojahan@del.ac.id', 'Delft University of Technology, Belanda', 'Computer science', '', '', 'Marojahan _It del.png'),
(6, 'Sari Muthia Silalahi, S.Pd., M.Edc', '0117109301', 'Asisten Ahli', '', '', 'National Taiwan University', 'Matematika', '', '', ''),
(7, 'Eka Stephani Sinambela, SST., M.Sc.', '0117078706', '	Asisten Ahli', '', 'eka@del.ac.id', 'VU University of Amsterdam', 'Computer Science', '', '', 'Eka IT del.jpg');

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
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kegiatan`
--

INSERT INTO `jadwal_kegiatan` (`id_jadwal`, `nama_kegiatan`, `jam_mulai`, `jam_selesai`, `keterangan`, `tanggal`) VALUES
(1, 'Rapat Dosen', '08:00:00', '08:09:00', 'Mempersiapkan bahan persentasi', '2022-05-09'),
(13, 'Seminar ta 1', '15:31:00', '15:31:00', '', '2022-06-07'),
(14, 'Bimbingann pa 2', '19:00:00', '16:03:00', 'di laksanakan di rmk', '2022-06-07'),
(15, 'Pertemuan', '19:20:00', '12:00:00', 'sharing session', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `kegitan_himpunan`
--

CREATE TABLE `kegitan_himpunan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `program_kerja` varchar(1000) NOT NULL,
  `tahun` int(11) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `angkatan`, `email`, `username`, `password`) VALUES
(1, 'query', '', 0000, 'jhonreimons90@gmail.com', 'query', 'query'),
(2, 'dkfnsdl', '', 0000, 'jhonreimons99@gmail.com', 'dkfnsdl', 'dkfnsdl'),
(3, 'yusuf panjaitan', '', 0000, 'yusufpanjaitan26@gmail.com', 'yusuf261101', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_keluar`
--

CREATE TABLE `mahasiswa_keluar` (
  `id_mahasiswa_keluar` int(11) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `nim` int(4) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_keluar`
--

INSERT INTO `mahasiswa_keluar` (`id_mahasiswa_keluar`, `nama_mahasiswa`, `tanggal_keluar`, `nim`, `status`) VALUES
(19, 'Edrick Ernest Sinaga', '2020-06-10', 13320008, 'DO');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matakuliah` int(11) NOT NULL,
  `kode_matakuliah` varchar(100) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matakuliah`, `kode_matakuliah`, `matakuliah`, `semester`, `sks`) VALUES
(1, 'KU31101', 'Bahasa Inggris I', 1, 2),
(2, 'TI31101', 'Inovasi Digital', 1, 3),
(3, 'KU31102	', 'Pembentukan Karakter Del', 1, 2),
(4, '1031101', 'Dasar Pemrograman', 1, 3),
(5, '1031102', 'Matematika Diskrit', 1, 3),
(6, '1031103', 'Arsitektur dan Organisasi Komputer', 1, 3),
(7, '1331104', 'Pengembangan Situs Web I', 1, 3),
(8, 'KU31201', 'Bahasa Inggris II', 2, 2),
(9, '1031201', 'Algoritma & Struktur Data', 2, 3),
(10, '1031202', 'Sistem Operasi', 2, 3),
(11, '1031203', 'Aljabar Linier', 2, 3),
(12, '1331204', 'Pengembangan Aplikasi Berbasis Internet', 2, 3),
(13, '1331205	', 'Proyek Akhir Tahun I', 2, 3),
(14, '1331206', 'Pengenalan Basisdata', 2, 2),
(15, 'KU32101', 'Bahasa Inggris III', 3, 2),
(16, 'MA32101', 'Probabilitas dan Statistika', 3, 3),
(17, '1032101', 'Jaringan Komputer', 3, 3),
(18, '1332102', 'Pemrograman Sistem', 3, 3),
(19, '1332103', 'Perancangan Antarmuka Pengguna', 3, 3),
(20, '1332104', 'Virtualisasi Komputer', 3, 3),
(21, '1332105', 'Dasar Elektronika', 3, 2),
(22, 'KU32201	', 'Bahasa Inggris IV', 4, 2),
(23, 'KU32202', 'Penulisan Karya Ilmiah', 4, 2),
(24, '1332201', 'Antar Jaringan', 4, 3),
(25, '1332202', 'Perangkat Lunak Sistem Jaringan', 4, 3),
(26, '1332203', 'Proyek Akhir Tahun II', 4, 3),
(27, '1332204', 'Sistem Terdistribusi', 4, 3),
(28, '1332205', 'Sistem Tertanam', 4, 3),
(29, 'KU33101', 'Bahasa Inggris V', 5, 2),
(30, 'TI33101', 'Keteknowiraan', 5, 2),
(31, '1333101', 'Administrasi Jaringan', 5, 3),
(32, '1333102', 'Keamanan Jaringan', 5, 3),
(33, '1333103', 'Penerapan Infrastruktur Cloud', 5, 3),
(34, '1333104', 'Teknologi IoT', 5, 3),
(35, '1333105', 'Tugas Akhir I', 5, 3),
(36, 'KU33201', 'Bahasa Inggris VI', 6, 2),
(37, 'KU33202', 'Agama & Etika', 6, 2),
(38, 'KU33203', 'Pancasila dan Kewarganegaraan', 6, 2),
(39, '1333290', 'Kerja Praktik', 6, 4),
(41, '1333202', 'Etika Profesi', 6, 4),
(42, '1333203', 'Komunikasi Data', 6, 2),
(43, '1333204', 'Pengembangan Profesi', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mtk_dosen`
--

CREATE TABLE `mtk_dosen` (
  `id_mk_dosen` int(11) NOT NULL,
  `tahun_ajaran` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_matakuliah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mtk_dosen`
--

INSERT INTO `mtk_dosen` (`id_mk_dosen`, `tahun_ajaran`, `semester`, `id_dosen`, `id_matakuliah`) VALUES
(7, 2020, 2, 4, 31),
(10, 1212, 2312, 2, 13),
(17, 2020, 2, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `pa1`
--

CREATE TABLE `pa1` (
  `id_pa1` int(11) NOT NULL,
  `judul_pa` varchar(500) NOT NULL,
  `tahun_ajaran` year(4) NOT NULL,
  `jumlah_yg_dibimbing` int(11) NOT NULL,
  `id_dosen_pembimbing` int(11) NOT NULL,
  `id_dosen_penguji1` int(11) NOT NULL,
  `id_dosen_penguji2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pa1`
--

INSERT INTO `pa1` (`id_pa1`, `judul_pa`, `tahun_ajaran`, `jumlah_yg_dibimbing`, `id_dosen_pembimbing`, `id_dosen_penguji1`, `id_dosen_penguji2`) VALUES
(1, 'vbnmk,l.;/', 0000, 78, 7, 3, 1),
(2, 'ghjkl;/', 2065, 342, 2, 7, 3),
(3, 'hgfd', 0000, 6543, 2, 3, 4);

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
(2, 'Automatic Door Unlock System by Voice Command Via Android with Arduino', 2022, 3, 2, 7, 4),
(3, 'Mesin pencacah rumput', 2022, 3, 1, 5, 4),
(4, 'Smart Trash Bin', 2022, 3, 3, 6, 1),
(5, 'Smart Trash Bin', 2022, 3, 4, 3, 5),
(6, 'Aplikasi Operasional Kerja Program Studi - Studi Kasus D3TK', 2022, 3, 7, 4, 3),
(7, 'Smart Garage Door', 2022, 3, 5, 1, 2),
(8, 'Detektor Penggunaaan Masker Wajah dan Temperatur Suhu Badan', 2022, 3, 6, 4, 1),
(9, 'Jemuran Otomatis Portable', 2022, 3, 2, 3, 1),
(10, 'Monitoring Kualitas Air Danau Toba Berbasis Web Aplikasi', 2022, 3, 4, 6, 5),
(11, 'Web-based Informatics Learning Application - Scope of Class VII', 2022, 3, 7, 2, 4),
(12, 'Fruit Sorter', 2022, 3, 1, 2, 3),
(13, 'Aplikasi Database Proyek IoT', 2022, 3, 5, 3, 2),
(14, 'Aplikasi Klik Del', 2022, 3, 7, 5, 6),
(15, 'Sistem Monitoring Suhu dan Kelembaban dalam Pembudidayaan Jamur Tiram', 2022, 3, 6, 2, 7),
(16, 'IoT Sistem Keamanan Pintu Menggunakan Sensor Reed Switch dengan Notifikasi Telegram', 2022, 3, 3, 7, 4),
(17, 'Sistem Kontrol Pakan Ikan dan Kekeruhan Air Berbasis Internet of Things', 2022, 2, 2, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `peneltian_dosen`
--

CREATE TABLE `peneltian_dosen` (
  `id_penelitian_dosen` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `judul_penelitian` varchar(1000) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jenis_peneltian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peneltian_dosen`
--

INSERT INTO `peneltian_dosen` (`id_penelitian_dosen`, `id_dosen`, `judul_penelitian`, `tahun`, `jenis_peneltian`) VALUES
(1, 7, 'Sistem monitoring tanaman cabai\n', 2020, 'Internal'),
(2, 2, 'Perancangan pemantauan pembelajaran jarak jauh menggunakan iot\n', 2021, 'Hibah');

-- --------------------------------------------------------

--
-- Table structure for table `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id_program_kerja` int(11) NOT NULL,
  `nama_program` varchar(500) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `id_data_divisi` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_kerja`
--

INSERT INTO `program_kerja` (`id_program_kerja`, `nama_program`, `tanggal_pelaksanaan`, `id_data_divisi`, `status`) VALUES
(2, 'Webinar penggunaan docker dari alumni D3 TK 2017', '2022-06-01', 1, 'Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi_dosen`
--

CREATE TABLE `publikasi_dosen` (
  `id_publikasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_publish` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publikasi_dosen`
--

INSERT INTO `publikasi_dosen` (`id_publikasi`, `judul`, `tahun_publish`, `id_dosen`) VALUES
(1, 'Web Based Monitoring and Control of Robotic Arm Using Raspberry Pi', 2016, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bph_himpunan`
--
ALTER TABLE `bph_himpunan`
  ADD PRIMARY KEY (`id_bph`);

--
-- Indexes for table `bph_kpu`
--
ALTER TABLE `bph_kpu`
  ADD PRIMARY KEY (`id_ketua`);

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_data_divisi`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `data_mbkm`
--
ALTER TABLE `data_mbkm`
  ADD PRIMARY KEY (`id_mbkm`);

--
-- Indexes for table `data_nahasiswa`
--
ALTER TABLE `data_nahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ta`
--
ALTER TABLE `data_ta`
  ADD PRIMARY KEY (`id_data_ta`),
  ADD KEY `data_ta_ibfk_1` (`id_dosen_penguji_1`),
  ADD KEY `id_dosen_penguji_2` (`id_dosen_penguji_2`),
  ADD KEY `id_dosen_pembimbing2` (`id_dosen_pembimbing2`),
  ADD KEY `id_dosen_pembimbing1` (`id_dosen_pembimbing1`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `divisi_kpu`
--
ALTER TABLE `divisi_kpu`
  ADD PRIMARY KEY (`Id_divisi_kpu`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kegitan_himpunan`
--
ALTER TABLE `kegitan_himpunan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `mahasiswa_keluar`
--
ALTER TABLE `mahasiswa_keluar`
  ADD PRIMARY KEY (`id_mahasiswa_keluar`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matakuliah`);

--
-- Indexes for table `mtk_dosen`
--
ALTER TABLE `mtk_dosen`
  ADD PRIMARY KEY (`id_mk_dosen`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_matakuliah` (`id_matakuliah`);

--
-- Indexes for table `pa1`
--
ALTER TABLE `pa1`
  ADD PRIMARY KEY (`id_pa1`),
  ADD KEY `id_dosen_pembimbing` (`id_dosen_pembimbing`),
  ADD KEY `id_dosen_penguji1` (`id_dosen_penguji1`),
  ADD KEY `id_dosen_penguji2` (`id_dosen_penguji2`);

--
-- Indexes for table `pa2`
--
ALTER TABLE `pa2`
  ADD PRIMARY KEY (`id_pa2`),
  ADD KEY `id_dosen_pembimbing` (`id_dosen_pembimbing`),
  ADD KEY `id_dosen_penguji1` (`id_dosen_penguji1`),
  ADD KEY `id_dosen_penguji2` (`id_dosen_penguji2`);

--
-- Indexes for table `peneltian_dosen`
--
ALTER TABLE `peneltian_dosen`
  ADD PRIMARY KEY (`id_penelitian_dosen`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `program_kerja`
--
ALTER TABLE `program_kerja`
  ADD PRIMARY KEY (`id_program_kerja`),
  ADD KEY `id_divisi` (`id_data_divisi`);

--
-- Indexes for table `publikasi_dosen`
--
ALTER TABLE `publikasi_dosen`
  ADD PRIMARY KEY (`id_publikasi`),
  ADD KEY `publikasi_dosen_ibfk_1` (`id_dosen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bph_himpunan`
--
ALTER TABLE `bph_himpunan`
  MODIFY `id_bph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bph_kpu`
--
ALTER TABLE `bph_kpu`
  MODIFY `id_ketua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_data_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_mbkm`
--
ALTER TABLE `data_mbkm`
  MODIFY `id_mbkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `data_nahasiswa`
--
ALTER TABLE `data_nahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_ta`
--
ALTER TABLE `data_ta`
  MODIFY `id_data_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisi_kpu`
--
ALTER TABLE `divisi_kpu`
  MODIFY `Id_divisi_kpu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kegitan_himpunan`
--
ALTER TABLE `kegitan_himpunan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa_keluar`
--
ALTER TABLE `mahasiswa_keluar`
  MODIFY `id_mahasiswa_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matakuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `mtk_dosen`
--
ALTER TABLE `mtk_dosen`
  MODIFY `id_mk_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pa1`
--
ALTER TABLE `pa1`
  MODIFY `id_pa1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pa2`
--
ALTER TABLE `pa2`
  MODIFY `id_pa2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `peneltian_dosen`
--
ALTER TABLE `peneltian_dosen`
  MODIFY `id_penelitian_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_kerja`
--
ALTER TABLE `program_kerja`
  MODIFY `id_program_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publikasi_dosen`
--
ALTER TABLE `publikasi_dosen`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD CONSTRAINT `data_divisi_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);

--
-- Constraints for table `data_ta`
--
ALTER TABLE `data_ta`
  ADD CONSTRAINT `data_ta_ibfk_1` FOREIGN KEY (`id_dosen_penguji_1`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `data_ta_ibfk_2` FOREIGN KEY (`id_dosen_penguji_2`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `data_ta_ibfk_3` FOREIGN KEY (`id_dosen_pembimbing1`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `mtk_dosen`
--
ALTER TABLE `mtk_dosen`
  ADD CONSTRAINT `mtk_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `mtk_dosen_ibfk_2` FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah` (`id_matakuliah`);

--
-- Constraints for table `pa1`
--
ALTER TABLE `pa1`
  ADD CONSTRAINT `pa1_ibfk_1` FOREIGN KEY (`id_dosen_pembimbing`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `pa1_ibfk_2` FOREIGN KEY (`id_dosen_penguji1`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `pa1_ibfk_3` FOREIGN KEY (`id_dosen_penguji2`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `pa2`
--
ALTER TABLE `pa2`
  ADD CONSTRAINT `pa2_ibfk_1` FOREIGN KEY (`id_dosen_pembimbing`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `pa2_ibfk_2` FOREIGN KEY (`id_dosen_penguji1`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `pa2_ibfk_3` FOREIGN KEY (`id_dosen_penguji2`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `peneltian_dosen`
--
ALTER TABLE `peneltian_dosen`
  ADD CONSTRAINT `peneltian_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `program_kerja`
--
ALTER TABLE `program_kerja`
  ADD CONSTRAINT `program_kerja_ibfk_1` FOREIGN KEY (`id_data_divisi`) REFERENCES `data_divisi` (`id_data_divisi`);

--
-- Constraints for table `publikasi_dosen`
--
ALTER TABLE `publikasi_dosen`
  ADD CONSTRAINT `publikasi_dosen_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
