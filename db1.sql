
CREATE TABLE `t_setorankasir` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_shift` varchar(10) DEFAULT NULL,
  `kode_kasir` varchar(10) DEFAULT NULL,
  `kode_admin` varchar(30) DEFAULT NULL,
  `jumlah_casual` double DEFAULT NULL,
  `jumlah_emoney` double DEFAULT NULL,
  `jumlah_mastercard` double DEFAULT NULL,
  `jumlah_manualtiket` double DEFAULT NULL,
  `jumlah_losttiket` double DEFAULT NULL,
  `jumlah_setoran_tunai` double DEFAULT NULL,
  `Jumlah_setoran_kredit` double DEFAULT NULL,
  `jumlah_setoran_kasir` double DEFAULT NULL,
  `jumlah_tiketmasalah` double DEFAULT NULL,
  `selisih_setoran` double DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sts_kirim` varchar(1) DEFAULT '0',
  `kode_lokasi` varchar(1) DEFAULT '2',
  `kode_daop` varchar(1) DEFAULT '1',
  `nama_kasir` varchar(100) DEFAULT NULL,
  `nama_shift` varchar(100) DEFAULT NULL,
  `jumlah_selisihbayar` double DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `t_setorankasir` (`id`, `tanggal`, `kode_shift`, `kode_kasir`, `kode_admin`, `jumlah_casual`, `jumlah_emoney`, `jumlah_mastercard`, `jumlah_manualtiket`, `jumlah_losttiket`, `jumlah_setoran_tunai`, `Jumlah_setoran_kredit`, `jumlah_setoran_kasir`, `jumlah_tiketmasalah`, `selisih_setoran`, `waktu`, `sts_kirim`, `kode_lokasi`, `kode_daop`, `nama_kasir`, `nama_shift`, `jumlah_selisihbayar`, `keterangan`) VALUES
(2, '2020-03-02', '1', '16', 'support', 1423000, 0, 0, 0, 0, 1423000, 0, 825000, 610000, 12000, '2020-03-20 14:00:56', '1', '2', '1', 'DESSY', 'PAGI', 0, ''),
(3, '2020-03-02', '1', '22', 'support', 1437000, 0, 0, 0, 0, 1437000, 0, 796000, 642000, 1000, '2020-03-20 14:00:56', '1', '2', '1', 'ALAN', 'PAGI', 0, ''),
(4, '2020-03-02', '3', '21', 'TRI SETIAWAN', 315000, 0, 0, 0, 0, 315000, 0, 266000, 49000, 0, '2020-03-20 14:00:56', '1', '2', '1', 'ASEP', 'MALAM', 0, '')


INSERT INTO `t_setorankasir` (`id`, `tanggal`, `kode_shift`, `kode_kasir`, `kode_admin`, `jumlah_casual`, `jumlah_emoney`, `jumlah_mastercard`, `jumlah_manualtiket`, `jumlah_losttiket`, `jumlah_setoran_tunai`, `Jumlah_setoran_kredit`, `jumlah_setoran_kasir`, `jumlah_tiketmasalah`, `selisih_setoran`, `waktu`, `sts_kirim`, `kode_lokasi`, `kode_daop`, `nama_kasir`, `nama_shift`, `jumlah_selisihbayar`, `keterangan`) VALUES
(5, '2020-03-02', '1', '25', 'TRI SETIAWAN', 158000, 0, 0, 0, 0, 158000, 0, 100000, 103000, 45000, '2020-03-20 14:00:56', '1', '2', '1', 'USMAN', 'PAGI', 0, ''),
(6, '2020-03-02', '2', '25', 'TRI SETIAWAN', 2079000, 0, 0, 0, 0, 2079000, 0, 126000, 1893000, -60000, '2020-03-20 14:00:56', '1', '2', '1', 'USMAN', 'SIANG', 60000, 'LUNAS'),
(7, '2020-03-02', '1', '23', 'TRI SETIAWAN', 776000, 0, 0, 0, 0, 776000, 0, 346000, 373000, -57000, '2020-03-20 14:00:56', '1', '2', '1', 'ZULFAHMI', 'PAGI', 57000, '\r\n'),
(8, '2020-03-02', '2', '17', 'TRI SETIAWAN', 2264000, 0, 0, 0, 45000, 2309000, 0, 1364000, 904000, -41000, '2020-03-20 14:00:56', '1', '2', '1', 'EVI', 'SIANG', 41000, 'LUNAS'),
(9, '2020-03-02', '2', '19', 'TRI SETIAWAN', 2400000, 0, 0, 0, 0, 2400000, 0, 1525000, 844000, -31000, '2020-03-20 14:00:56', '1', '2', '1', 'AZIZ', 'SIANG', 31000, '')


INSERT INTO `t_setorankasir` (`id`, `tanggal`, `kode_shift`, `kode_kasir`, `kode_admin`, `jumlah_casual`, `jumlah_emoney`, `jumlah_mastercard`, `jumlah_manualtiket`, `jumlah_losttiket`, `jumlah_setoran_tunai`, `Jumlah_setoran_kredit`, `jumlah_setoran_kasir`, `jumlah_tiketmasalah`, `selisih_setoran`, `waktu`, `sts_kirim`, `kode_lokasi`, `kode_daop`, `nama_kasir`, `nama_shift`, `jumlah_selisihbayar`, `keterangan`) VALUES
(12, '2020-03-03', '1', '18', 'WINDA MEGAWATI', 53000, 0, 0, 0, 0, 53000, 0, 44000, 4000, -5000, '2020-03-20 14:00:56', '1', '2', '1', 'KHAIRUL', 'PAGI', 5000, 'LUNAS'),
(13, '2020-03-03', '1', '16', 'WINDA MEGAWATI', 996000, 0, 0, 0, 0, 996000, 0, 888000, 106000, -2000, '2020-03-20 14:00:56', '1', '2', '1', 'DESSY', 'PAGI', 2000, 'LUNAS'),
(14, '2020-03-03', '1', '20', 'WINDA MEGAWATI', 1045000, 0, 0, 0, 0, 1045000, 0, 808000, 182000, -55000, '2020-03-20 14:00:56', '1', '2', '1', 'DARSONO', 'PAGI', 55000, 'LUNAS'),
(15, '2020-03-03', '2', '25', 'ARUL', 454000, 0, 0, 0, 0, 454000, 0, 314000, 79000, -61000, '2020-03-20 14:00:56', '1', '2', '1', 'USMAN', 'SIANG', 96000, ''),
(16, '2020-03-03', '2', '18', 'ARUL', 264000, 0, 0, 0, 0, 264000, 0, 177000, 82000, -5000, '2020-03-20 14:00:56', '1', '2', '1', 'KHAIRUL', 'SIANG', 5000, ''),
(17, '2020-03-03', '2', '19', 'ARUL', 1964000, 0, 0, 6000, 0, 1970000, 0, 1322000, 670000, 22000, '2020-03-20 14:00:56', '1', '2', '1', 'AZIZ', 'SIANG', 0, ''),
(18, '2020-03-03', '2', '17', 'ARUL', 925000, 0, 0, 0, 0, 925000, 0, 1221000, 233000, 529000, '2020-03-20 14:00:56', '1', '2', '1', 'EVI', 'SIANG', 0, ''),
(19, '2020-03-03', '3', '22', 'TRI SETIAWAN', 315000, 0, 0, 0, 10000, 325000, 0, 288000, 35000, -2000, '2020-03-20 14:00:56', '1', '2', '1', 'ALAN', 'MALAM', 2000, ''),
