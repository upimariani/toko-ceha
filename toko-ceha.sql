-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2023 pada 16.32
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
-- Database: `toko-ceha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `nama_diskon` varchar(20) NOT NULL,
  `besar_diskon` int(11) NOT NULL,
  `tgl_selesai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_produk`, `nama_diskon`, `besar_diskon`, `tgl_selesai`) VALUES
(1, 1, 'sale of day', 10, '2023-08-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(125) NOT NULL,
  `alamat_konsumen` text NOT NULL,
  `no_hp_konsumen` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama_konsumen`, `alamat_konsumen`, `no_hp_konsumen`, `email`, `username`, `password`, `member`) VALUES
(1, 'adang sutisna', 'warung sembako samping gerbang uniku', '0857-2125-6549', 'adang sutisna@gmail.com', 'adang sutisna', 'adang sutisna', 1),
(2, 'ade aah', 'Jl Ir H Juanda Rt 4 Rw 3 gang delima Kel awirarangan  YG ISI 16', '085723116088', 'ade aah@gmail.com', 'ade aah', 'ade aah', 1),
(3, 'ade lukman', 'Rt.7/2 lingk.pahing kel citangtu patokan gg.bidan h.arumi', '0821-1630-8690', 'ade lukman@gmail.com', 'ade lukman', 'ade lukman', 1),
(4, 'ade tiyan', 'jl.pahlawan no.72 rt.3/5 cibumur ', '', 'ade tiyan@gmail.com', 'ade tiyan', 'ade tiyan', 2),
(5, 'adi warung', '', '', 'adi warung@gmail.com', 'adi warung', 'adi warung', 1),
(6, 'afc yogya chicken', 'jl.siliwangi dpn toko mas anggur', '0821-1630-5090', 'afc yogya chicken@gmail.com', 'afc yogya chicken', 'afc yogya chicken', 1),
(7, 'alam sumi', 'Ds.cileleuy dsn.wage blok gelempek dkt isi ulang galon', '081254710766', 'alam sumi@gmail.com', 'alam sumi', 'alam sumi', 3),
(8, 'alex', 'jl.syeh maulana akbar gg.aria kamuning no 64. Sebrang masjid al makmur. Dekat pasar darurat', '081919101281', 'alex@gmail.com', 'alex', 'alex', 3),
(9, 'anna', 'dpn biota laut', '0857-9495-8094', 'anna@gmail.com', 'anna', 'anna', 1),
(10, 'atik sri ', 'Jl.aruji kartawinata komplek sma kosgoro no.141 rt.3/8', '0813-2492-6696', 'atik sri @gmail.com', 'atik sri ', 'atik sri ', 1),
(11, 'bd sielmy', '', '', 'bd sielmy@gmail.com', 'bd sielmy', 'bd sielmy', 1),
(12, 'bp andi chicken', 'DIPOTONG 2 AJA KATANYA (ANTARA PAHA SAMA BADANNYA)', '', 'bp andi chicken@gmail.com', 'bp andi chicken', 'bp andi chicken', 1),
(13, 'bp andi chicken', '', '', 'bp andi chicken@gmail.com', 'bp andi chicken', 'bp andi chicken', 1),
(14, 'bp kanto carrywell', '', '', 'bp kanto carrywell@gmail.com', 'bp kanto carrywell', 'bp kanto carrywell', 1),
(15, 'bp sodikin', '', '', 'bp sodikin@gmail.com', 'bp sodikin', 'bp sodikin', 1),
(16, 'bu aan', 'jl RE martadinata belakang pemandian mobil ( annisa salon) cijoho', '085324963966', 'bu aan@gmail.com', 'bu aan', 'bu aan', 1),
(17, 'bu eeng', 'jln.Ir.H.Juanda no63 RT 02/08 lingk.lamepayung ', '0812-2308-0534', 'bu eeng@gmail.com', 'bu eeng', 'bu eeng', 1),
(18, 'bu merry', 'jl.kepuh blkg sanggariang', '0896-4661-9647', 'bu merry@gmail.com', 'bu merry', 'bu merry', 2),
(19, 'bu neneng', '', '', 'bu neneng@gmail.com', 'bu neneng', 'bu neneng', 1),
(20, 'bu rini', '', '', 'bu rini@gmail.com', 'bu rini', 'bu rini', 2),
(21, 'bu tintin', 'jl.wijaya no 21', '0823-1800-1977', 'bu tintin@gmail.com', 'bu tintin', 'bu tintin', 1),
(22, 'bu yuli', 'jl.karangasem 125', '0899-5348-302', 'bu yuli@gmail.com', 'bu yuli', 'bu yuli', 1),
(23, 'bunda erel', 'Blok Syech Muhibat rumah ke_6 setelah makam barat jalan', '0812-2452-3030', 'bunda erel@gmail.com', 'bunda erel', 'bunda erel', 1),
(24, 'cahaya', 'ciharendong stempel', '0877-2424-6865', 'cahaya@gmail.com', 'cahaya', 'cahaya', 2),
(25, 'ceu inah', '', '', 'ceu inah@gmail.com', 'ceu inah', 'ceu inah', 1),
(26, 'dedeh', 'toko zh blkg stadion mas\"ud', '0838-7914-2536', 'dedeh@gmail.com', 'dedeh', 'dedeh', 1),
(27, 'dedi ubeh', '', '', 'dedi ubeh@gmail.com', 'dedi ubeh', 'dedi ubeh', 1),
(28, 'dena mardiana', 'Jl. Pasir wangi cigadung regency blok c no. 11 rt. 3/7 cigadung', '083824742873', 'dena mardiana@gmail.com', 'dena mardiana', 'dena mardiana', 1),
(29, 'dera', 'Jl.otista blkg rumah no.158 (masuk gg.samping baso idaman, rumah yg ada saungnya)', '082115804543', 'dera@gmail.com', 'dera', 'dera', 1),
(30, 'dewi', 'cipicung sd 5 kng cafe stuyoi', '0878-3343-0211', 'dewi@gmail.com', 'dewi', 'dewi', 1),
(31, 'dhea eka', 'Dsn.wage rt.16/rw.4 ds.bayuninh kadugede', '081320511498', 'dhea eka@gmail.com', 'dhea eka', 'dhea eka', 1),
(32, 'diana', 'depan warung senglip sebelah gudang budi putri', '0896-6865-1073', 'diana@gmail.com', 'diana', 'diana', 1),
(33, 'didin', '', '', 'didin@gmail.com', 'didin', 'didin', 1),
(34, 'dilla (septyan)', '', '', 'dilla (septyan)@gmail.com', 'dilla (septyan)', 'dilla (septyan)', 1),
(35, 'dina apriani', 'sebrang rs juanda, keda d & a', '0822-1899-6543', 'dina apriani@gmail.com', 'dina apriani', 'dina apriani', 2),
(36, 'dina rosdiana', 'Jln Ramajaksa 271 rt 07/ 03 gg dahlia 4 sidapurna purwawinangun kng', '0896-3612-0667', 'dina rosdiana@gmail.com', 'dina rosdiana', 'dina rosdiana', 1),
(37, 'dini', 'rental ps viking sawahwaru', '', 'dini@gmail.com', 'dini', 'dini', 1),
(38, 'dini sarah cake', '', '', 'dini sarah cake@gmail.com', 'dini sarah cake', 'dini sarah cake', 1),
(39, 'dita', 'Dusun kliwon ( Cimenut ) Cikadu. Nusaherang ( depan pabrik tahu DR)', '087823892573', 'dita@gmail.com', 'dita', 'dita', 1),
(40, 'dwiyani', '', '', 'dwiyani@gmail.com', 'dwiyani', 'dwiyani', 1),
(41, 'een', 'jl.sudirman no.25 rt.3/1 lingk.serang blkg uci parfume', '0 823-2135-6562', 'een@gmail.com', 'een', 'een', 2),
(42, 'efa paujiah', '', '', 'efa paujiah@gmail.com', 'efa paujiah', 'efa paujiah', 1),
(43, 'elis', 'Jl.wijaya gg.tpa rt.1/1 purwawinangun', '081381316703', 'elis@gmail.com', 'elis', 'elis', 1),
(44, 'elis nasution', 'windusengkahan rt 6 DIBELAH 2 AJA', '0895-3336-36083', 'elis nasution@gmail.com', 'elis nasution', 'elis nasution', 1),
(45, 'emah nur', 'pedagang seblak sobar sblh barat pasar ancaran', '0877-6065-6687', 'emah nur@gmail.com', 'emah nur', 'emah nur', 1),
(46, 'emi sukaemi', '', '', 'emi sukaemi@gmail.com', 'emi sukaemi', 'emi sukaemi', 1),
(47, 'enggal motor', 'MINTA RADA PAGIAN', '0857-2011-1116', 'enggal motor@gmail.com', 'enggal motor', 'enggal motor', 1),
(48, 'enok/iman', '', '', 'enok/iman@gmail.com', 'enok/iman', 'enok/iman', 3),
(49, 'erin', 'Perum griyan bojong indah blok f 17 (ada mushola belok kiri, plaing mentok rumahnya)', '085222770700', 'erin@gmail.com', 'erin', 'erin', 1),
(50, 'erlin', 'Jl.pramuka gg.bougenville (blkg madrasah al hikmah)', '082316221408', 'erlin@gmail.com', 'erlin', 'erlin', 1),
(51, 'erna', 'jln Nanjung Mulya belakang rumah 141 cijoho', '0896-7786-1902', 'erna@gmail.com', 'erna', 'erna', 1),
(52, 'ernawati', 'jl pramuka,blok tanjung sari,sebelah rabbani,purwawinangun', '0882-2236-2202', 'ernawati@gmail.com', 'ernawati', 'ernawati', 1),
(53, 'eros rosita', '', '', 'eros rosita@gmail.com', 'eros rosita', 'eros rosita', 1),
(54, 'eti catering', '', '', 'eti catering@gmail.com', 'eti catering', 'eti catering', 1),
(55, 'eva yuliana', 'Pasapen 1, warior lurus belok kanan gg.pertama dkt garasi sdit', '0881-0232-26269', 'eva yuliana@gmail.com', 'eva yuliana', 'eva yuliana', 2),
(56, 'fajar luragung', '', '', 'fajar luragung@gmail.com', 'fajar luragung', 'fajar luragung', 3),
(57, 'fandi cijalim', 'cijalim blkg sd 2 kng', '0895-8013-64861', 'fandi cijalim@gmail.com', 'fandi cijalim', 'fandi cijalim', 1),
(58, 'fanny', 'Perum gkp jl venus 4 blok b3 a no.5 (rumah bp yana paling pojok)', '0895331338553', 'fanny@gmail.com', 'fanny', 'fanny', 1),
(59, 'faris frozen food', '', '', 'faris frozen food@gmail.com', 'faris frozen food', 'faris frozen food', 1),
(60, 'fera', 'kampung cimenut, desa cikadu, kecamatan Nusaherang ( Pabrik Tahu DR) ', '081214215149', 'fera@gmail.com', 'fera', 'fera', 1),
(61, 'frisca', '', '', 'frisca@gmail.com', 'frisca', 'frisca', 1),
(62, 'furri', '', '', 'furri@gmail.com', 'furri', 'furri', 1),
(63, 'gita tri', 'RT 02/01 Lingk.Manis (patokan dari masjid/kelurahan belok kanan skitar 100 meter, ada rumah warna biru sebelah kanan jalan, pagar hitam)', '082261653434', 'gita tri@gmail.com', 'gita tri', 'gita tri', 1),
(64, 'gladys', 'Jl. Siliwangi gg. Perhutani no. 417 rt. 11/4 Purwawinangun', '08882309356', 'gladys@gmail.com', 'gladys', 'gladys', 1),
(65, 'hanifah nusaibah', '', '', 'hanifah nusaibah@gmail.com', 'hanifah nusaibah', 'hanifah nusaibah', 1),
(66, 'hartuty', 'veteran 39', '08122495721', 'hartuty@gmail.com', 'hartuty', 'hartuty', 1),
(67, 'heni/rose', 'warung dpn makam sengkahan', '0898-9186-587', 'heni/rose@gmail.com', 'heni/rose', 'heni/rose', 1),
(68, 'hildan', 'Jl.pramuka gg.tunas 2 no.265 (dkt smk binaswasta samping plang kefir)', '0811202001', 'hildan@gmail.com', 'hildan', 'hildan', 1),
(69, 'hj anah', '', '0813-9557-6955', 'hj anah@gmail.com', 'hj anah', 'hj anah', 1),
(70, 'ibu cicih', 'jl.cut nyak dien gang h sobari rumah paling ujung pager biru. Ada banner sei sapi seilicius  GAUSAH DI NOTA', '0838-2440-8444', 'ibu cicih@gmail.com', 'ibu cicih', 'ibu cicih', 2),
(71, 'ibu eem', 'Perum gnl kertaungaran jl.glatik blok l1 warung mey mey', '083825231822', 'ibu eem@gmail.com', 'ibu eem', 'ibu eem', 3),
(72, 'ibu emin', 'Jl.otista 144 sblh kedai ebon/blkg baso hu', '089661944178', 'ibu emin@gmail.com', 'ibu emin', 'ibu emin', 1),
(73, 'ibu emin', 'Jl.otista 144 (blkg baso hu)', '089661944178', 'ibu emin@gmail.com', 'ibu emin', 'ibu emin', 1),
(74, 'ibu enih', '', '', 'ibu enih@gmail.com', 'ibu enih', 'ibu enih', 1),
(75, 'ibu eni   ', '', '', 'ibu eni   @gmail.com', 'ibu eni   ', 'ibu eni   ', 1),
(76, 'ibu enok', '', '', 'ibu enok@gmail.com', 'ibu enok', 'ibu enok', 1),
(77, 'ibu erin', ' jl.daeng sutigna no.8 depan terminal kertawangunan(jl.raya kaduagung) rumah dkt blk dkt tria', '0813-1441-2546', 'ibu erin@gmail.com', 'ibu erin', 'ibu erin', 1),
(78, 'ibu eroh', '', '', 'ibu eroh@gmail.com', 'ibu eroh', 'ibu eroh', 1),
(79, 'ibu ety', '', '', 'ibu ety@gmail.com', 'ibu ety', 'ibu ety', 2),
(80, 'ibu hj ety', 'Jl lingga malela no 1 btn cijoho\nDepan mushola,   MINTA DIPPISAH 2KG+1KG-AN A', '0821-2968-1499', 'ibu hj ety@gmail.com', 'ibu hj ety', 'ibu hj ety', 1),
(81, 'ibu hj ooh', 'lingk.karanganyar gg.angrumsari rt.8/3', '0813-1212-7991', 'ibu hj ooh@gmail.com', 'ibu hj ooh', 'ibu hj ooh', 1),
(82, 'ibu iik', '', '', 'ibu iik@gmail.com', 'ibu iik', 'ibu iik', 1),
(83, 'ibu ita yoga', '', '', 'ibu ita yoga@gmail.com', 'ibu ita yoga', 'ibu ita yoga', 1),
(84, 'ibu lena', 'pondok juanda blkg rm padang', '0896-1643-1992', 'ibu lena@gmail.com', 'ibu lena', 'ibu lena', 3),
(85, 'ibu may', 'Lamping sblm tahu fadilah (kalo dipanggil ga keluar, pencet aja bel)', '', 'ibu may@gmail.com', 'ibu may', 'ibu may', 1),
(86, 'ibu titin', '', '', 'ibu titin@gmail.com', 'ibu titin', 'ibu titin', 1),
(87, 'ibu titin/udin lp', '', '', 'ibu titin/udin lp@gmail.com', 'ibu titin/udin lp', 'ibu titin/udin lp', 1),
(88, 'ibu unah/bp maman', '', '', 'ibu unah/bp maman@gmail.com', 'ibu unah/bp maman', 'ibu unah/bp maman', 1),
(89, 'icha', 'Jl. Syekh maulana akbar no. 80b  rmh sblh kanaya hijab', '085724315101', 'icha@gmail.com', 'icha', 'icha', 1),
(90, 'idah', '', '', 'idah@gmail.com', 'idah', 'idah', 1),
(91, 'iin aminah', '', '', 'iin aminah@gmail.com', 'iin aminah', 'iin aminah', 1),
(92, 'iis kristiawati', 'jl.pramuka gg.siaga no.4 rt.1/1 lingk.pahing dkt yayasan siti fatimah ', '0877-2404-7943', 'iis kristiawati@gmail.com', 'iis kristiawati', 'iis kristiawati', 1),
(93, 'iis susanti', '', '', 'iis susanti@gmail.com', 'iis susanti', 'iis susanti', 3),
(94, 'ika', '', '', 'ika@gmail.com', 'ika', 'ika', 1),
(95, 'ika rikawati', 'windusebgkahan rt 10 rw 03 lingk subur', '085224468578', 'ika rikawati@gmail.com', 'ika rikawati', 'ika rikawati', 1),
(96, 'ikeu aap', 'Gg.perhutani no.428 rt.11/4', '082217508430', 'ikeu aap@gmail.com', 'ikeu aap', 'ikeu aap', 1),
(97, 'ina', 'Blkg ayam goreng ciporang lingk.serang rt.3/1  FILLET DADA PROMO', '082218954146', 'ina@gmail.com', 'ina', 'ina', 1),
(98, 'indah ina', 'jl.pramuka jl.siaga indah siaga 8 pager cat oren  SAYAPNYA YANG FROZEN (PROMO)', '0877-6433-5174', 'indah ina@gmail.com', 'indah ina', 'indah ina', 1),
(99, 'indri', 'jl. Siliwangi no.203 (belakang baso mustika PAHA UTUH DADA SAYAP 160 POTONG', '0896-0516-1763', 'indri@gmail.com', 'indri', 'indri', 1),
(100, 'inggi', 'Jalan nanjung mulya no.129 cijoho', '0812-1320-8697', 'inggi@gmail.com', 'inggi', 'inggi', 1),
(101, 'irma', 'lingk.karanganyar dpn salon shopi', '081310234392', 'irma@gmail.com', 'irma', 'irma', 1),
(102, 'itha nitnot', 'Jl.juanda gg.mulya rt.1/3  samping mushola al mukaromah    YANG ISI 16', '0895333637496', 'itha nitnot@gmail.com', 'itha nitnot', 'itha nitnot', 2),
(103, 'ivana', '', '', 'ivana@gmail.com', 'ivana', 'ivana', 1),
(104, 'jaenab', '', '', 'jaenab@gmail.com', 'jaenab', 'jaenab', 1),
(105, 'juju didi', '', '', 'juju didi@gmail.com', 'juju didi', 'juju didi', 1),
(106, 'Junia', 'JALAN PAHLAWAN GANG WARINGIN NO 182 RT 05 RW 02 LINGKUNGAN KARANGANYAR KELURAHAN WINDUHAJI ', '085659893389', 'Junia@gmail.com', 'Junia', 'Junia', 1),
(107, 'kantin okusa', 'kantin rs juanda', '0819-1141-6729', 'kantin okusa@gmail.com', 'kantin okusa', 'kantin okusa', 1),
(108, 'kantin virgie', '', '', 'kantin virgie@gmail.com', 'kantin virgie', 'kantin virgie', 1),
(109, 'kedai amirah', '', '0878-2474-8100', 'kedai amirah@gmail.com', 'kedai amirah', 'kedai amirah', 1),
(110, 'kiyora', '', '', 'kiyora@gmail.com', 'kiyora', 'kiyora', 1),
(111, 'laila noor', '', '', 'laila noor@gmail.com', 'laila noor', 'laila noor', 1),
(112, 'leni pusiani', 'Jl.pramuka no.142 rt.5/2 lingk.manis gg.mawar 2 lembur sukun', '081285967833', 'leni pusiani@gmail.com', 'leni pusiani', 'leni pusiani', 1),
(113, 'lia', 'Jl.otista no.6 dkt pemasaran graha alana', '089503498145', 'lia@gmail.com', 'lia', 'lia', 1),
(114, 'lilis', 'Jl.ahmad yani no 52 (rumah pager hitam tinggi)', '082127896220', 'lilis@gmail.com', 'lilis', 'lilis', 3),
(115, 'lina/bp oman', 'Jl.pramuka gg.tunas 2 rt.11/3', '083842241201', 'lina/bp oman@gmail.com', 'lina/bp oman', 'lina/bp oman', 1),
(116, 'linda aripin', '', '', 'linda aripin@gmail.com', 'linda aripin', 'linda aripin', 1),
(117, 'lisye', '', '', 'lisye@gmail.com', 'lisye', 'lisye', 1),
(118, 'lizhara', '', '', 'lizhara@gmail.com', 'lizhara', 'lizhara', 1),
(119, 'lucky', 'Jl.kepuh karangasem no.128 rt.4/8 gg buntu sblh toko busa mekar jaya (rumah ujung pager item)', '08990308899', 'lucky@gmail.com', 'lucky', 'lucky', 1),
(120, 'luviana', '', '', 'luviana@gmail.com', 'luviana', 'luviana', 1),
(121, 'mamah andes', 'dsn.manis rt.16/1 cibinuang', '0896-6799-2856', 'mamah andes@gmail.com', 'mamah andes', 'mamah andes', 1),
(122, 'mamah rika', 'jln raya windujanten Cipondok,RT 11 /RW 03,tepatna di kedai seblak Ciremai samping bengkel mys', '083846550939', 'mamah rika@gmail.com', 'mamah rika', 'mamah rika', 1),
(123, 'mamah sabilal', 'ruko panorama bandorasa', '0896-8105-1601', 'mamah sabilal@gmail.com', 'mamah sabilal', 'mamah sabilal', 1),
(124, 'masitoh', '', '', 'masitoh@gmail.com', 'masitoh', 'masitoh', 1),
(125, 'maya husen', 'warung blkg sd 2 sengkahan', '0896-6865-1073', 'maya husen@gmail.com', 'maya husen', 'maya husen', 1),
(126, 'mela', '', '', 'mela@gmail.com', 'mela', 'mela', 1),
(127, 'mety', 'windusengkahan rt.2', '0897-7797-190', 'mety@gmail.com', 'mety', 'mety', 1),
(128, 'mira mariana', 'Jln pramuka no 91 dpn toko madu sport blkng baso jatim', '0858-6454-3454', 'mira mariana@gmail.com', 'mira mariana', 'mira mariana', 1),
(129, 'moms azka', '', '', 'moms azka@gmail.com', 'moms azka', 'moms azka', 1),
(130, 'mulya bahagia', '', '0812-9363-1655', 'mulya bahagia@gmail.com', 'mulya bahagia', 'mulya bahagia', 1),
(131, 'nena anang', 'Jl.babakan no.519 rt.14/3 cilame cigadung (sblh saung ad)     SAYAP PROMO', '085324452789', 'nena anang@gmail.com', 'nena anang', 'nena anang', 1),
(132, 'neneng', 'Jl.baru awir rt.1/6 gg.pakualam ', '08986755482', 'neneng@gmail.com', 'neneng', 'neneng', 1),
(133, 'nia', 'Jl.siliwangi gg.kabupaten no.89rt.3/1 lingk.kliwon', '085224596958', 'nia@gmail.com', 'nia', 'nia', 3),
(134, 'nimas permata', 'jl baru awirarangan blkg susu nasional rt.4/5   TELURNYA JNGN DI NOTA', '0821-1605-8939', 'nimas permata@gmail.com', 'nimas permata', 'nimas permata', 1),
(135, 'nining suryani', 'Jl Tuba no 96 RT 03 RW 01 Karanganyar winduhaji', '085224596958', 'nining suryani@gmail.com', 'nining suryani', 'nining suryani', 1),
(136, 'nisa', 'Cigembang masul dari gg. Martabak pacenongan rumah ke 5 pager merah', '085323092163', 'nisa@gmail.com', 'nisa', 'nisa', 1),
(137, 'nopy', 'bunderan cijoho, sblh timur warung dita', '0857-2358-3035', 'nopy@gmail.com', 'nopy', 'nopy', 1),
(138, 'nova  ', 'gg.pakualam ', '0812-8650-6885', 'nova  @gmail.com', 'nova  ', 'nova  ', 3),
(139, 'novi', 'Perum grya bojong indah serang blok H4', '0852-9566-6786', 'novi@gmail.com', 'novi', 'novi', 3),
(140, 'nur andri', 'jl.lamtoro no.16 C peum alamasri MINTA PAGI', '', 'nur andri@gmail.com', 'nur andri', 'nur andri', 1),
(141, 'nur', 'cibinuang rt.2/1', '0838-2479-9059', 'nur@gmail.com', 'nur', 'nur', 1),
(142, 'nur decom', '', '', 'nur decom@gmail.com', 'nur decom', 'nur decom', 3),
(143, 'nurani', '', '', 'nurani@gmail.com', 'nurani', 'nurani', 1),
(144, 'nurul', '', '', 'nurul@gmail.com', 'nurul', 'nurul', 1),
(145, 'oom/iming', 'as putra matrial', '', 'oom/iming@gmail.com', 'oom/iming', 'oom/iming', 1),
(146, 'opi', 'gg Rambutan Rt 04 Rw 01 No. 149 Lingk. Ciwaru Kel. Cigadung ', '0895347868605', 'opi@gmail.com', 'opi', 'opi', 1),
(147, 'pa ade/eha', 'Blok kaliwon ds sindangsari dkt lapang bola pinggir jl. Ada plang aa sablon', '0815-6474-3095', 'pa ade/eha@gmail.com', 'pa ade/eha', 'pa ade/eha', 1),
(148, 'pa atang', '', '0852-2477-6400', 'pa atang@gmail.com', 'pa atang', 'pa atang', 1),
(149, 'pa mamah/bu diah', '', '', 'pa mamah/bu diah@gmail.com', 'pa mamah/bu diah', 'pa mamah/bu diah', 2),
(150, 'pa yoyo', 'Pabrik tahu pak yoyo cangkuang', '0857-9534-0288', 'pa yoyo@gmail.com', 'pa yoyo', 'pa yoyo', 1),
(151, 'pramudya', 'jl.kepuh gg.mawar indah no 132/5', '0818-0465-7845', 'pramudya@gmail.com', 'pramudya', 'pramudya', 1),
(152, 'rafiah', 'Perumahan bumi serang indah blok A2 no 91 sebelah apotik medika farma', '0852-2474-7367', 'rafiah@gmail.com', 'rafiah', 'rafiah', 1),
(153, 'rani', 'jl.wijaya no.7 don mie ocoy  MINTA DIPISAH 1/2KG-AN', '0812-2356-3336', 'rani@gmail.com', 'rani', 'rani', 1),
(154, 'rekha', 'DIPISAH 1KG-AN', '0822-4631-2138', 'rekha@gmail.com', 'rekha', 'rekha', 1),
(155, 'rika', 'mie baso seleran wayan blkg smp 6 kng', '0896-7520-3906', 'rika@gmail.com', 'rika', 'rika', 1),
(156, 'rinina', '', '', 'rinina@gmail.com', 'rinina', 'rinina', 1),
(157, 'rini', '', '', 'rini@gmail.com', 'rini', 'rini', 1),
(158, 'risa agit', 'Jl.pahlawan lingk.karanganyar rt.8/3 (dpn mushola al barokah simpang 4)', '089526029748', 'risa agit@gmail.com', 'risa agit', 'risa agit', 1),
(159, 'rizki fathur', '', '', 'rizki fathur@gmail.com', 'rizki fathur', 'rizki fathur', 1),
(160, 'rm cafella', '', '', 'rm cafella@gmail.com', 'rm cafella', 'rm cafella', 1),
(161, 'rm sadulur', '', '0853-2392-7035', 'rm sadulur@gmail.com', 'rm sadulur', 'rm sadulur', 1),
(162, 'rm serang', '', '0896-9143-1099', 'rm serang@gmail.com', 'rm serang', 'rm serang', 1),
(163, 'siska ', '', '', 'siska @gmail.com', 'siska ', 'siska ', 2),
(164, 'sri nuryani ', 'Perum alam asri jl.kelapa h 21', '083121071428', 'sri nuryani @gmail.com', 'sri nuryani ', 'sri nuryani ', 1),
(165, 'sri rohmatin', 'Jl.pramuka no.303 gg.tunas 2 rmh yang belakang', '081333614232', 'sri rohmatin@gmail.com', 'sri rohmatin', 'sri rohmatin', 2),
(166, 'sri sulasri', '', '', 'sri sulasri@gmail.com', 'sri sulasri', 'sri sulasri', 1),
(167, 'srie', 'blkg sanggariang masuk gg.buntu rumah warna ungu (sblh rumah lucy)', '0877-7114-4333', 'srie@gmail.com', 'srie', 'srie', 1),
(168, 'sri/dani', 'Jl cut nyak dien rt.3/9 bubulak gg.h basuni (rumah percetakan noor isrie)', '083824274611', 'sri/dani@gmail.com', 'sri/dani', 'sri/dani', 1),
(169, 'suci widi', 'Jl cisantana no 1 ruko secret garden stlh bubulak', '081310234392', 'suci widi@gmail.com', 'suci widi', 'suci widi', 1),
(170, 'suci widi', 'ruko secret garden, cisantana', '', 'suci widi@gmail.com', 'suci widi', 'suci widi', 1),
(171, 'sulistiani', 'dkt fadil saprol', '0819-1105-4795', 'sulistiani@gmail.com', 'sulistiani', 'sulistiani', 1),
(172, 'surahmat', '', '', 'surahmat@gmail.com', 'surahmat', 'surahmat', 1),
(173, 'taufik', 'Jl.otista gg.cempaka 1 rt.1/4 lingk.pasapen', '089651693885', 'taufik@gmail.com', 'taufik', 'taufik', 2),
(174, 'teh tia', '', '', 'teh tia@gmail.com', 'teh tia', 'teh tia', 1),
(175, 'tiara ', '', '', 'tiara @gmail.com', 'tiara ', 'tiara ', 1),
(176, 'tika', '', '', 'tika@gmail.com', 'tika', 'tika', 1),
(177, 'tina', 'blok ciweri rt.1/5 awirarangan  TELURNYA DIPISAH 1.5KG +1 KG', '0822-1583-3653', 'tina@gmail.com', 'tina', 'tina', 1),
(178, 'tita eternite', '', '', 'tita eternite@gmail.com', 'tita eternite', 'tita eternite', 1),
(179, 'tita nurbayanti', 'liang panas', '0859-1133-65406', 'tita nurbayanti@gmail.com', 'tita nurbayanti', 'tita nurbayanti', 2),
(180, 'tk arco', '', '', 'tk arco@gmail.com', 'tk arco', 'tk arco', 1),
(181, 'toko teras fo', '', '', 'toko teras fo@gmail.com', 'toko teras fo', 'toko teras fo', 2),
(182, 'umar dani', '', '', 'umar dani@gmail.com', 'umar dani', 'umar dani', 3),
(183, 'uum rumsinah', 'Jl.jend.sudirman bojong serang rt.5/1 blkg pos ronda', '088223024680', 'uum rumsinah@gmail.com', 'uum rumsinah', 'uum rumsinah', 1),
(184, 'vina ', 'Jl.juanda no.121 sbrg gg.delima', '081312060180', 'vina @gmail.com', 'vina ', 'vina ', 1),
(185, 'vivi yuliyanty', '', '', 'vivi yuliyanty@gmail.com', 'vivi yuliyanty', 'vivi yuliyanty', 1),
(186, 'warnas anyun', '', '', 'warnas anyun@gmail.com', 'warnas anyun', 'warnas anyun', 1),
(187, 'warung kembar', '', '', 'warung kembar@gmail.com', 'warung kembar', 'warung kembar', 1),
(188, 'warung obosh', '', '', 'warung obosh@gmail.com', 'warung obosh', 'warung obosh', 1),
(189, 'wati/dadang', '', '', 'wati/dadang@gmail.com', 'wati/dadang', 'wati/dadang', 1),
(190, 'wilma', 'Jl. Wahana 1 no. 95 btn cigugur sblh rumah kayu', '081254486633', 'wilma@gmail.com', 'wilma', 'wilma', 1),
(191, 'wina', 'gg.kalapa ciung rt.5/9 bubulak', '0819-9997-2445', 'wina@gmail.com', 'wina', 'wina', 1),
(192, 'wiwin didi', 'Gg.kedai nasi ujung rt.5/1', '0838-7460-6778', 'wiwin didi@gmail.com', 'wiwin didi', 'wiwin didi', 1),
(193, 'yani jne', 'blkg jne otista', '0812-2382-5357', 'yani jne@gmail.com', 'yani jne', 'yani jne', 1),
(194, 'yanti susanti', 'perun griya lingga asri jl.lingga manik', '0877-4400-7440', 'yanti susanti@gmail.com', 'yanti susanti', 'yanti susanti', 1),
(195, 'yanti yulianti', 'Puri Asri 1 Jl. Rajawali blok b 12/14', '089637276437', 'yanti yulianti@gmail.com', 'yanti yulianti', 'yanti yulianti', 2),
(196, 'yati', 'dpn sd 4 awir', '0838-2333-7085', 'yati@gmail.com', 'yati', 'yati', 2),
(197, 'yayah', 'Jl.ir.h.juanda no 61 gang mawar lamepayung      SAYAP PROMO', '0852-2428-3132', 'yayah@gmail.com', 'yayah', 'yayah', 1),
(198, 'yeni', 'jl.pramuka gg.kabupaten no.70 A belok kanan rumah cat pink pager item depannya ada kali', '0896-6480-6424', 'yeni@gmail.com', 'yeni', 'yeni', 1),
(199, 'yeti fuad', '', '', 'yeti fuad@gmail.com', 'yeti fuad', 'yeti fuad', 2),
(200, 'zaina', 'jln pramuka gg citamba rt 04 rw 01 kontrakan bpk yaya', '0838-2614-1999', 'zaina@gmail.com', 'zaina', 'zaina', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(125) NOT NULL,
  `ongkir` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_kecamatan`, `nama_kecamatan`, `ongkir`) VALUES
(1, 'ciawigebang', '10000'),
(2, 'cibeureum', '30000'),
(3, 'cibingbin', '25000'),
(4, 'cidahu', '15000'),
(5, 'cidahu', '13000'),
(6, 'cigandamekar', '25000'),
(7, 'cigugur', '15000'),
(8, 'cilebak', '30000'),
(9, 'cilimus', '16000'),
(10, 'cimahi', '14000'),
(11, 'ciniru', '28000'),
(12, 'cipicung', '21000'),
(13, 'ciwaru', '25000'),
(14, 'darma', '21000'),
(15, 'garawangi', '20000'),
(16, 'hantara', '30000'),
(17, 'jalaksana', '9000'),
(18, 'japara', '29000'),
(19, 'kadugede', '16000'),
(20, 'kalimanggis', '20000'),
(21, 'karangkacana', '18000'),
(22, 'kramatmulya', '15000'),
(23, 'kuningan', '7000'),
(24, 'lebakwangi', '26000'),
(25, 'luragung', '30000'),
(26, 'maleber', '29000'),
(27, 'mandirancan', '24000'),
(28, 'nusaherang', '19000'),
(29, 'pancalang', '30000'),
(30, 'pasawahan', '35000'),
(31, 'selajambe', '35000'),
(32, 'sindangagung', '25000'),
(33, 'subang', '35000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` varchar(30) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_detail`, `id_transaksi`, `id_produk`, `quantity`) VALUES
(1, '1', 13, 34),
(2, '2', 9, 10),
(3, '3', 7, 24),
(4, '4', 5, 10),
(5, '5', 4, 9),
(6, '6', 13, 4),
(7, '7', 5, 10),
(8, '8', 1, 32),
(9, '9', 7, 13),
(10, '10', 12, 25),
(11, '11', 11, 29),
(12, '12', 6, 10),
(13, '13', 11, 30),
(14, '14', 1, 3),
(15, '15', 5, 25),
(16, '16', 6, 17),
(17, '17', 5, 22),
(18, '18', 12, 26),
(19, '19', 6, 21),
(20, '20', 6, 13),
(21, '21', 5, 10),
(22, '22', 9, 23),
(23, '23', 10, 21),
(24, '24', 7, 20),
(25, '25', 5, 26),
(26, '26', 1, 14),
(27, '27', 4, 24),
(28, '28', 7, 31),
(29, '29', 8, 20),
(30, '30', 2, 7),
(31, '31', 3, 4),
(32, '32', 11, 12),
(33, '33', 10, 33),
(34, '34', 8, 13),
(35, '35', 7, 34),
(36, '36', 8, 31),
(37, '37', 11, 20),
(38, '38', 2, 30),
(39, '39', 7, 33),
(40, '40', 1, 20),
(41, '41', 7, 20),
(42, '42', 6, 25),
(43, '43', 1, 12),
(44, '44', 13, 26),
(45, '45', 5, 6),
(46, '46', 11, 3),
(47, '47', 3, 11),
(48, '48', 1, 8),
(49, '49', 9, 5),
(50, '50', 14, 29),
(51, '51', 6, 5),
(52, '52', 12, 9),
(53, '53', 10, 21),
(54, '54', 11, 13),
(55, '55', 10, 29),
(56, '56', 9, 11),
(57, '57', 7, 12),
(58, '58', 2, 18),
(59, '59', 10, 5),
(60, '60', 8, 21),
(61, '61', 9, 5),
(62, '62', 11, 15),
(63, '63', 3, 20),
(64, '64', 10, 31),
(65, '65', 12, 22),
(66, '66', 2, 32),
(67, '67', 9, 20),
(68, '68', 7, 14),
(69, '69', 6, 4),
(70, '70', 8, 4),
(71, '71', 2, 23),
(72, '72', 6, 31),
(73, '73', 11, 28),
(74, '74', 2, 21),
(75, '75', 12, 17),
(76, '76', 2, 13),
(77, '77', 14, 15),
(78, '78', 14, 6),
(79, '79', 4, 14),
(80, '80', 8, 17),
(81, '81', 10, 7),
(82, '82', 4, 17),
(83, '83', 10, 15),
(84, '84', 14, 7),
(85, '85', 11, 26),
(86, '86', 13, 13),
(87, '87', 10, 14),
(88, '88', 5, 5),
(89, '89', 10, 8),
(90, '90', 3, 19),
(91, '91', 5, 21),
(92, '92', 1, 18),
(93, '93', 1, 16),
(94, '94', 4, 23),
(95, '95', 2, 26),
(96, '96', 4, 19),
(97, '97', 11, 11),
(98, '98', 4, 26),
(99, '99', 3, 27),
(100, '100', 4, 29),
(101, '101', 3, 8),
(102, '102', 9, 7),
(103, '103', 11, 11),
(104, '104', 14, 23),
(105, '105', 5, 4),
(106, '106', 3, 8),
(107, '107', 1, 33),
(108, '108', 1, 22),
(109, '109', 4, 18),
(110, '110', 8, 23),
(111, '111', 1, 32),
(112, '112', 4, 4),
(113, '113', 9, 22),
(114, '114', 12, 6),
(115, '115', 3, 17),
(116, '116', 13, 18),
(117, '117', 10, 3),
(118, '118', 6, 27),
(119, '119', 12, 22),
(120, '120', 6, 25),
(121, '121', 9, 15),
(122, '122', 11, 25),
(123, '123', 2, 19),
(124, '124', 6, 7),
(125, '125', 8, 14),
(126, '126', 10, 33),
(127, '127', 4, 30),
(128, '128', 12, 18),
(129, '129', 6, 31),
(130, '130', 10, 8),
(131, '131', 11, 32),
(132, '132', 3, 18),
(133, '133', 10, 4),
(134, '134', 1, 5),
(135, '135', 11, 3),
(136, '136', 5, 14),
(137, '137', 9, 15),
(138, '138', 5, 33),
(139, '139', 5, 31),
(140, '140', 2, 17),
(141, '141', 14, 9),
(142, '142', 9, 28),
(143, '143', 11, 25),
(144, '144', 14, 10),
(145, '145', 6, 21),
(146, '146', 13, 6),
(147, '147', 2, 6),
(148, '148', 9, 8),
(149, '149', 12, 19),
(150, '150', 10, 23),
(151, '151', 12, 6),
(152, '152', 10, 17),
(153, '153', 7, 22),
(154, '154', 9, 29),
(155, '155', 9, 9),
(156, '156', 8, 20),
(157, '157', 6, 5),
(158, '158', 5, 30),
(159, '159', 13, 21),
(160, '160', 14, 15),
(161, '161', 5, 18),
(162, '162', 3, 31),
(163, '163', 13, 20),
(164, '164', 3, 9),
(165, '165', 12, 26),
(166, '166', 1, 23),
(167, '167', 10, 32),
(168, '168', 2, 3),
(169, '169', 5, 5),
(170, '170', 7, 9),
(171, '171', 9, 17),
(172, '172', 2, 15),
(173, '173', 9, 23),
(174, '174', 2, 30),
(175, '175', 8, 9),
(176, '176', 4, 28),
(177, '177', 10, 6),
(178, '178', 6, 34),
(179, '179', 13, 24),
(180, '180', 5, 26),
(181, '181', 12, 18),
(182, '182', 4, 5),
(183, '183', 10, 24),
(184, '184', 13, 4),
(185, '185', 3, 13),
(186, '186', 3, 19),
(187, '187', 12, 28),
(188, '188', 14, 5),
(189, '189', 10, 14),
(190, '190', 9, 17),
(191, '191', 12, 23),
(192, '192', 11, 16),
(193, '193', 9, 11),
(194, '194', 6, 27),
(195, '195', 11, 12),
(196, '196', 4, 3),
(197, '197', 9, 11),
(198, '198', 5, 3),
(199, '199', 12, 14),
(200, '200', 12, 3),
(201, '101', 6, 1),
(202, '101', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `stok`, `keterangan`, `gambar`) VALUES
(1, 'Ampela', 'Halo #sahabatceha di #ceha ada Ampela untuk harga per produknya sangat ekonomis yaa sahabatceha ', '32000', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(2, 'ceker', 'Halo #sahabatceha di #ceha ada ceker untuk harga per produknya sangat ekonomis yaa #sahabatceha', '26000', 129, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(3, 'Dada', 'Halo #sahabatceha di #ceha ada Dada untuk harga per produknya sangat ekonomis yaa sahabatceha', '31500', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(4, 'Fillet Dada', 'Halo #sahabatceha di #ceha ada Fillet Dada untuk harga per produknya sangat ekonomis yaa sahabatceha', '38500', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(5, 'Fillet Paha', 'Halo #sahabatceha di #ceha ada Fillet Paha untuk harga per produknya sangat ekonomis yaa sahabatceha', '37500', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(6, 'Karkas', 'Halo #sahabatceha di #ceha ada Karkas untuk harga per produknya sangat ekonomis yaa sahabatceha', '33000', 129, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(7, 'Kepala', 'Halo #sahabatceha di #ceha ada kepala untuk harga per produknya sangat ekonomis yaa sahabatceha', '10000', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(8, 'Kulit', 'Halo #sahabatceha di #ceha ada kulit untuk harga per produknya sangat ekonomis yaa sahabatceha', '30000', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(9, 'Paha Atas', 'Halo #sahabatceha di #ceha ada paha atas untuk harga per produknya sangat ekonomis yaa sahabatceha', '26000', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(10, 'Paha Bawah', 'Halo #sahabatceha di #ceha ada paha bawah untuk harga per produknya sangat ekonomis yaa sahabatceha', '33000', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(11, 'Paha Utuh', 'Halo #sahabatceha di #ceha ada Paha utuh untuk harga per produknya sangat ekonomis yaa sahabatceha', '30500', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(12, 'Sayap', 'Halo #sahabatceha di #ceha ada sayap untuk harga per produknya sangat ekonomis yaa sahabatceha', '30000', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(13, 'Telur', 'Halo #sahabatceha di #ceha ada Telur untuk harga per produknya sangat ekonomis yaa sahabatceha', '24500', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg'),
(14, 'Usus', 'Halo #sahabatceha di #ceha ada usus untuk harga per produknya sangat ekonomis yaa sahabatceha', '18000', 130, 'kg', '92242855_156286442368405_3909977544653233395_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `tgl_transaksi` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `status_order` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_konsumen`, `id_kecamatan`, `tgl_transaksi`, `total_bayar`, `status_order`, `bukti_pembayaran`) VALUES
(1, 7, 12, '2022-10-01', '74796', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(2, 8, 16, '2022-10-02', '42737', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(3, 170, 25, '2022-10-03', '132248', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(4, 169, 12, '2022-10-04', '132010', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(5, 140, 15, '2022-10-05', '87442', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(6, 22, 24, '2022-10-06', '50696', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(7, 72, 16, '2022-10-07', '90315', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(8, 79, 16, '2022-10-08', '27689', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(9, 137, 33, '2022-10-09', '104608', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(10, 35, 7, '2022-10-10', '31143', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(11, 109, 14, '2022-10-11', '93464', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(12, 39, 16, '2022-10-12', '113372', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(13, 59, 13, '2022-10-13', '112184', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(14, 149, 13, '2022-10-14', '31378', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(15, 31, 8, '2022-10-15', '84240', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(16, 167, 33, '2022-10-16', '101955', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(17, 165, 5, '2022-10-17', '38087', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(18, 153, 9, '2022-10-18', '148345', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(19, 87, 16, '2022-10-19', '118752', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(20, 163, 16, '2022-10-20', '22449', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(21, 103, 30, '2022-10-21', '105017', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(22, 182, 15, '2022-10-22', '62920', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(23, 173, 7, '2022-10-23', '40000', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(24, 84, 28, '2022-10-24', '56307', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(25, 137, 16, '2022-10-25', '147777', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(26, 10, 33, '2022-10-26', '61288', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(27, 61, 18, '2022-10-27', '96926', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(28, 24, 5, '2022-10-28', '44974', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(29, 117, 30, '2022-10-29', '86122', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(30, 62, 12, '2022-10-30', '108382', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(31, 107, 12, '2022-10-31', '22629', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(32, 23, 5, '2022-11-01', '132109', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(33, 28, 7, '2022-11-02', '82600', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(34, 185, 19, '2022-11-03', '139616', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(35, 103, 19, '2022-11-04', '109046', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(36, 41, 10, '2022-11-05', '23484', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(37, 107, 1, '2022-11-06', '59894', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(38, 18, 3, '2022-11-07', '14024', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(39, 20, 5, '2022-11-08', '33457', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(40, 120, 17, '2022-11-09', '124441', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(41, 78, 25, '2022-11-10', '64574', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(42, 78, 7, '2022-11-11', '97532', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(43, 8, 26, '2022-11-12', '25607', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(44, 59, 9, '2022-11-13', '27082', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(45, 161, 25, '2022-11-14', '97911', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(46, 107, 30, '2022-11-15', '36760', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(47, 82, 2, '2022-11-16', '133797', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(48, 156, 30, '2022-11-17', '120982', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(49, 183, 30, '2022-11-18', '148931', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(50, 93, 33, '2022-11-19', '58594', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(51, 152, 23, '2022-11-20', '51998', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(52, 138, 28, '2022-11-21', '69909', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(53, 196, 17, '2022-11-22', '26190', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(54, 152, 26, '2022-11-23', '102456', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(55, 55, 32, '2022-11-24', '33319', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(56, 114, 28, '2022-11-25', '76018', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(57, 26, 4, '2022-11-26', '87102', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(58, 51, 17, '2022-11-27', '129479', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(59, 102, 22, '2022-11-28', '35797', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(60, 37, 27, '2022-11-29', '82994', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(61, 172, 32, '2022-11-30', '112597', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(62, 48, 8, '2022-12-01', '53945', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(63, 199, 9, '2022-12-02', '41342', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(64, 26, 19, '2022-12-03', '73202', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(65, 70, 18, '2022-12-04', '43768', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(66, 113, 23, '2022-12-05', '131730', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(67, 109, 22, '2022-12-06', '18146', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(68, 59, 30, '2022-12-07', '116913', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(69, 185, 17, '2022-12-08', '146905', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(70, 26, 29, '2022-12-09', '140769', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(71, 133, 11, '2022-12-10', '57340', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(72, 181, 11, '2022-12-11', '30235', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(73, 118, 23, '2022-12-12', '107588', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(74, 18, 26, '2022-12-13', '18787', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(75, 27, 26, '2022-12-14', '119954', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(76, 139, 25, '2022-12-15', '49770', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(77, 22, 20, '2022-12-16', '108783', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(78, 71, 29, '2022-12-17', '66925', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(79, 75, 9, '2022-12-18', '29844', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(80, 25, 17, '2022-12-19', '119364', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(81, 147, 31, '2022-12-20', '103068', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(82, 103, 12, '2022-12-21', '105268', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(83, 25, 13, '2022-12-22', '28863', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(84, 142, 31, '2022-12-23', '77714', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(85, 4, 7, '2022-12-24', '15875', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(86, 117, 1, '2022-12-25', '124084', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(87, 61, 31, '2022-12-26', '122668', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(88, 195, 13, '2022-12-27', '35755', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(89, 66, 14, '2022-12-28', '132536', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(90, 171, 27, '2022-12-29', '140646', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(91, 171, 3, '2022-12-30', '149396', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(92, 152, 26, '2022-11-01', '86610', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(93, 109, 21, '2022-11-02', '139887', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(94, 10, 11, '2022-11-03', '40654', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(95, 12, 17, '2022-11-04', '139968', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(96, 117, 16, '2022-11-05', '49906', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(97, 9, 2, '2022-11-06', '131624', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(98, 179, 24, '2022-11-07', '35685', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(99, 56, 31, '2022-11-08', '59326', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(100, 75, 19, '2022-11-09', '113756', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-1.jpg'),
(101, 1, 2, '2022-10-04', '89000', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', 'Kuningan Jawa Barat', '085156727368', 'admin', 'admin', 1),
(3, 'Pemilik', 'Kuningan', '089767876779', 'pemilik', 'pemilik', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
