CREATE TABLE `t_parkir` (
  `id` bigint(20) NOT NULL,
  `kode_cus_in` varchar(25) DEFAULT NULL,
  `kode_card_in` varchar(100) DEFAULT NULL,
  `waktu_in` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipe` tinyint(4) DEFAULT NULL,
  `shift_in` tinyint(4) DEFAULT NULL,
  `pos_in` varchar(5) DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT 'B',
  `kode_bank_in` varchar(10) DEFAULT NULL,
  `kode_cus_out` varchar(25) NOT NULL DEFAULT '',
  `platnomor` varchar(25) DEFAULT NULL,
  `waktu_out` timestamp NULL DEFAULT NULL,
  `lama_parkir` varchar(100) DEFAULT NULL,
  `biayatotal` decimal(10,0) DEFAULT NULL,
  `opkeluar` varchar(30) DEFAULT NULL,
  `shift_out` tinyint(4) DEFAULT NULL,
  `pos_out` varchar(5) DEFAULT NULL,
  `kode_bank_out` varchar(10) DEFAULT NULL,
  `kode_lokasi` varchar(5) DEFAULT NULL,
  `kode_lintas` varchar(5) DEFAULT NULL,
  `kode_daop` varchar(10) DEFAULT NULL,
  `jenis_pembayaran` varchar(50) DEFAULT NULL,
  `kode_tarif` varchar(10) DEFAULT NULL,
  `sts_kirim` tinyint(4) NOT NULL DEFAULT 0,
  `settlement_id` text DEFAULT NULL,
  `saldo_awal` decimal(20,0) DEFAULT NULL,
  `saldo_akhir` decimal(10,0) DEFAULT NULL,
  `saldo_in` decimal(20,0) DEFAULT NULL,
  `id_foto` varchar(100) DEFAULT NULL,
  `nopol` varchar(100) DEFAULT NULL,
  `status_setoran` varchar(1) DEFAULT '0',
  `settlement_idtl` text DEFAULT NULL,
  `term_id` varchar(25) DEFAULT NULL,
  `tm` varchar(2) DEFAULT '0',
  `nama_pos_in` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `t_parkir` (`id`, `kode_cus_in`, `kode_card_in`, `waktu_in`, `tipe`, `shift_in`, `pos_in`, `status`, `kode_bank_in`, `kode_cus_out`, `platnomor`, `waktu_out`, `lama_parkir`, `biayatotal`, `opkeluar`, `shift_out`, `pos_out`, `kode_bank_out`, `kode_lokasi`, `kode_lintas`, `kode_daop`, `jenis_pembayaran`, `kode_tarif`, `sts_kirim`, `settlement_id`, `saldo_awal`, `saldo_akhir`, `saldo_in`, `id_foto`, `nopol`, `status_setoran`, `settlement_idtl`, `term_id`, `tm`, `nama_pos_in`) VALUES
(2, '947529793012', NULL, '2017-04-11 14:38:45', 2, 2, '2', 'S', 'CASH', '947529793012', 'L2538SV', '2017-04-11 15:49:17', '01:10:32', '3000', '3', 2, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(3, '962277751463', NULL, '2017-04-11 14:39:00', 2, 2, '2', 'S', 'CASH', '962277751463', 'L5264JE', '2017-04-12 09:39:15', '19:00:15', '3000', '14', 2, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(4, '918480736224', NULL, '2017-04-11 14:42:55', 2, 2, '2', 'S', 'CASH', '918480736224', 'L5692YO', '2017-04-11 16:23:59', '01:41:04', '3000', '7', 3, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(5, '940152637065', NULL, '2017-04-11 14:43:51', 2, 2, '2', 'S', 'CASH', '940152637065', 'L6409WK', '2017-04-11 17:41:51', '02:58:00', '3000', '7', 3, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(6, '992398279766', NULL, '2017-04-11 05:07:00', 1, 2, '3', 'S', 'MM', '992398279766MM', 'S3649PB', '2017-04-11 14:45:45', '09:38:45', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(7, '978270894347', NULL, '2017-04-07 00:03:00', 1, 2, '3', 'S', 'MM', '978270894347MM', 'W4107WZ', '2017-04-11 14:46:42', '110:43:42', '51000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(8, '921614892138', NULL, '2017-04-11 13:30:00', 1, 2, '3', 'S', 'MM', '921614892138MM', 'L2138FK', '2017-04-11 14:48:18', '01:18:18', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(9, '936902074149', NULL, '2017-04-11 14:15:00', 1, 2, '3', 'S', 'MM', '936902074149MM', 'L6296XQ', '2017-04-11 14:50:21', '00:35:21', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL)



INSERT INTO `t_parkir` (`id`, `kode_cus_in`, `kode_card_in`, `waktu_in`, `tipe`, `shift_in`, `pos_in`, `status`, `kode_bank_in`, `kode_cus_out`, `platnomor`, `waktu_out`, `lama_parkir`, `biayatotal`, `opkeluar`, `shift_out`, `pos_out`, `kode_bank_out`, `kode_lokasi`, `kode_lintas`, `kode_daop`, `jenis_pembayaran`, `kode_tarif`, `sts_kirim`, `settlement_id`, `saldo_awal`, `saldo_akhir`, `saldo_in`, `id_foto`, `nopol`, `status_setoran`, `settlement_idtl`, `term_id`, `tm`, `nama_pos_in`) VALUES
(13, '993000997913', NULL, '2017-04-11 00:14:00', 1, 2, '3', 'S', 'MM', '993000997913MM', 'AG2884CA', '2017-04-11 14:57:06', '14:43:06', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(14, '924684477314', NULL, '2017-04-11 14:57:29', 2, 2, '2', 'S', 'CASH', '924684477314', 'L4445BX', '2017-04-11 15:06:55', '00:09:26', '3000', '3', 2, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(15, '996363623115', NULL, '2017-04-11 10:05:00', 1, 2, '3', 'S', 'MM', '996363623115MM', 'W2454SY', '2017-04-11 14:58:08', '04:53:08', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(16, '946852642016', NULL, '2017-04-11 14:58:19', 2, 2, '2', 'S', 'CASH', '946852642016', 'L5530CF', '2017-04-11 20:39:41', '05:41:22', '3000', '7', 3, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(17, '925936433417', NULL, '2017-04-11 11:30:00', 1, 2, '3', 'S', 'MM', '925936433417MM', 'L2016FL', '2017-04-11 14:58:52', '03:28:52', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(18, '968519603618', NULL, '2017-04-11 15:02:11', 2, 2, '2', 'S', 'CASH', '968519603618', 'W5987BQ', '2017-04-11 16:18:41', '01:16:30', '3000', '7', 3, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(19, '928630984719', NULL, '2017-04-10 21:47:00', 1, 2, '3', 'S', 'MM', '928630984719MM', 'L3970ZT', '2017-04-11 15:03:39', '17:16:39', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(20, '904943395720', NULL, '2017-04-11 10:47:00', 1, 2, '3', 'S', 'MM', '904943395720MM', 'M6670HF', '2017-04-11 15:04:29', '04:17:29', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(21, '961872106320', NULL, '2017-04-11 15:04:21', 2, 2, '2', 'S', 'CASH', '961872106320', 'L5235KY', '2017-04-11 15:28:30', '00:24:09', '3000', '3', 2, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(22, '961074264222', NULL, '2017-04-11 15:04:39', 2, 2, '2', 'S', 'CASH', '961074264222', 'S5812XQ', '2017-04-11 15:44:24', '00:39:45', '3000', '3', 2, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL)


INSERT INTO `t_parkir` (`id`, `kode_cus_in`, `kode_card_in`, `waktu_in`, `tipe`, `shift_in`, `pos_in`, `status`, `kode_bank_in`, `kode_cus_out`, `platnomor`, `waktu_out`, `lama_parkir`, `biayatotal`, `opkeluar`, `shift_out`, `pos_out`, `kode_bank_out`, `kode_lokasi`, `kode_lintas`, `kode_daop`, `jenis_pembayaran`, `kode_tarif`, `sts_kirim`, `settlement_id`, `saldo_awal`, `saldo_akhir`, `saldo_in`, `id_foto`, `nopol`, `status_setoran`, `settlement_idtl`, `term_id`, `tm`, `nama_pos_in`) VALUES
(25, '942106035825', NULL, '2017-04-11 15:07:20', 2, 2, '2', 'S', 'CASH', '942106035825', 'L5186ET', '2017-04-11 18:40:13', '03:32:53', '3000', '7', 3, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(26, '937806904026', NULL, '2017-04-11 11:04:00', 1, 2, '3', 'S', 'MM', '937806904026MM', 'L6283AW', '2017-04-11 15:08:11', '04:04:11', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(27, '917020429827', NULL, '2017-04-08 04:05:00', 1, 2, '3', 'S', 'MM', '917020429827MM', 'L5668CF', '2017-04-11 15:09:01', '83:04:01', '39000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(28, '937552304928', NULL, '2017-04-08 20:48:00', 1, 2, '3', 'S', 'MM', '937552304928MM', 'AG6057TX', '2017-04-11 15:09:32', '66:21:32', '27000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(29, '950381279429', NULL, '2017-04-11 15:09:37', 2, 2, '2', 'S', 'CASH', '950381279429', 'H5982NJ', '2017-04-11 16:56:38', '01:47:01', '3000', '7', 3, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(30, '909395935030', NULL, '2017-04-10 21:25:00', 1, 2, '3', 'S', 'MM', '909395935030MM', 'L3475AG', '2017-04-11 15:09:51', '17:44:51', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(31, '919904942931', NULL, '2017-04-11 13:40:00', 1, 2, '3', 'S', 'MM', '919904942931MM', 'L5594ZU', '2017-04-11 15:10:30', '01:30:30', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(32, '915058341432', NULL, '2017-04-11 05:21:00', 1, 2, '3', 'S', 'MM', '915058341432MM', 'L6890FS', '2017-04-11 15:11:03', '09:50:03', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(33, '963617338233', NULL, '2017-04-10 00:18:00', 1, 2, '3', 'S', 'MM', '963617338233MM', 'AG5515TD', '2017-04-11 15:11:39', '38:53:39', '15000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(34, '906998630234', NULL, '2017-04-11 15:12:15', 2, 2, '2', 'S', 'CASH', '906998630234', 'L6105KJ', '2017-04-12 03:11:50', '11:59:35', '3000', '14', 1, '3', 'CASH', '28', '3', '28', 'CASH', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL),
(35, '992378061735', NULL, '2017-04-10 21:32:00', 1, 2, '3', 'S', 'MM', '992378061735MM', 'L2507GA', '2017-04-11 15:12:43', '17:40:43', '3000', '3', 2, '3', 'MM', '28', '3', '28', 'MM', '1', 2, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', NULL)







CREATE TABLE `t_setorankasir` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_shift` varchar(10) DEFAULT NULL,
  `kode_kasir` varchar(10) DEFAULT NULL,
  `kode_admin` varchar(10) DEFAULT NULL,
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
  `nama_kasir` varchar(100) DEFAULT NULL,
  `nama_shift` varchar(100) DEFAULT NULL,
  `jumlah_selisihbayar` double DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `kode_lokasi` varchar(2) DEFAULT '28',
  `kode_daop` varchar(3) DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `t_setorankasir` (`id`, `tanggal`, `kode_shift`, `kode_kasir`, `kode_admin`, `jumlah_casual`, `jumlah_emoney`, `jumlah_mastercard`, `jumlah_manualtiket`, `jumlah_losttiket`, `jumlah_setoran_tunai`, `Jumlah_setoran_kredit`, `jumlah_setoran_kasir`, `jumlah_tiketmasalah`, `selisih_setoran`, `waktu`, `sts_kirim`, `nama_kasir`, `nama_shift`, `jumlah_selisihbayar`, `keterangan`, `kode_lokasi`, `kode_daop`) VALUES
(1, '2017-04-11', '2', '3', 'admin', 18000, 0, 0, 864000, 0, 882000, 0, 1643000, 0, 761000, '2017-04-11 16:46:14', '2', 'mustrihono', 'SIANG', 0, '', '28', '5'),
(2, '2017-04-11', '3', '7', 'ADMIN', 171000, 0, 0, 195000, 0, 366000, 0, 381000, 3000, 18000, '2017-04-12 00:37:28', '2', 'heri', 'MALAM', 0, '', '28', '5'),
(3, '2017-04-12', '1', '14', 'admin', 1050000, 0, 0, 471000, 118000, 1639000, 0, 1576000, 72000, 9000, '2017-04-12 08:49:16', '2', 'RANDA', 'PAGI', 0, '', '28', '5'),
(4, '2017-04-12', '2', '14', 'admin', 840000, 0, 0, 741000, 0, 1581000, 0, 1561000, 24000, 4000, '2017-04-12 16:27:03', '2', 'RANDA', 'SIANG', 0, '', '28', '5'),
(5, '2017-04-12', '3', '15', 'admin', 321000, 0, 0, 0, 0, 321000, 0, 312000, 6000, -3000, '2017-04-13 00:11:17', '2', 'AFANDI', 'MALAM', 3000, 'SALAH PENGEMBALIAN', '28', '5'),
(6, '2017-04-12', '3', '4', 'admin', 3000, 0, 0, 0, 0, 3000, 0, 3000, 0, 0, '2017-04-13 00:18:15', '2', 'sugeng', 'MALAM', 0, '', '28', '5'),
(7, '2017-04-13', '1', '14', 'admin', 1368000, 0, 0, 642000, 0, 2010000, 0, 2006000, 9000, 5000, '2017-04-13 08:20:19', '2', 'RANDA', 'PAGI', 0, '', '28', '5'),
(8, '2017-04-13', '2', '15', 'ADMIN', 1077000, 0, 0, 258000, 65000, 1400000, 0, 1370000, 33000, 3000, '2017-04-13 16:13:43', '2', 'AFANDI', 'SIANG', 0, '', '28', '5'),
(9, '2017-04-13', '3', '6', 'ADMIN', 405000, 0, 0, 27000, 0, 432000, 0, 436000, 0, 4000, '2017-04-14 00:20:33', '2', 'winarko', 'MALAM', 0, '', '28', '5'),



INSERT INTO `t_setorankasir` (`id`, `tanggal`, `kode_shift`, `kode_kasir`, `kode_admin`, `jumlah_casual`, `jumlah_emoney`, `jumlah_mastercard`, `jumlah_manualtiket`, `jumlah_losttiket`, `jumlah_setoran_tunai`, `Jumlah_setoran_kredit`, `jumlah_setoran_kasir`, `jumlah_tiketmasalah`, `selisih_setoran`, `waktu`, `sts_kirim`, `nama_kasir`, `nama_shift`, `jumlah_selisihbayar`, `keterangan`, `kode_lokasi`, `kode_daop`) VALUES
(11, '2017-04-14', '2', '5', 'ADMIN', 1407000, 0, 0, 231000, 0, 1638000, 0, 1684000, 0, 46000, '2017-04-14 16:27:35', '2', 'sodik', 'SIANG', 0, '', '28', '5'),
(12, '2017-04-14', '3', '15', 'ADMIN', 432000, 0, 0, 0, 0, 432000, 0, 400000, 30000, -2000, '2017-04-15 00:10:37', '2', 'AFANDI', 'MALAM', 0, '', '28', '5'),
(13, '2017-04-15', '1', '14', 'admin', 1701000, 0, 0, 75000, 53000, 1829000, 0, 1788000, 39000, -2000, '2017-04-15 08:23:34', '2', 'RANDA', 'PAGI', 2000, 'LANGSUNG DI BAYAR', '28', '5'),
(14, '2017-04-15', '2', '3', 'ADMIN', 2031000, 0, 0, 189000, 53000, 2273000, 0, 2234000, 39000, 0, '2017-04-15 16:10:39', '2', 'mustrihono', 'SIANG', 0, '', '28', '5'),
(15, '2017-04-15', '3', '6', 'ADMIN', 495000, 0, 0, 39000, 53000, 587000, 0, 555000, 36000, 4000, '2017-04-16 00:15:41', '2', 'winarko', 'MALAM', 0, '', '28', '5'),
(16, '2017-04-16', '1', '14', 'ADMIN', 2715000, 0, 0, 0, 130000, 2845000, 0, 2792000, 61000, 8000, '2017-04-16 08:23:03', '2', 'RANDA', 'PAGI', 0, '', '28', '5'),
(17, '2017-04-16', '2', '6', 'ADMIN', 7332000, 0, 0, 126000, 53000, 7511000, 0, 7421000, 36000, -54000, '2017-04-16 16:23:38', '2', 'winarko', 'SIANG', 54000, 'KELIRU KEMBALIAN, KONSUMEN KURANG BAYAR NINGGAL JAMINAN STNK. DAN SELISIH SUDAH DIBAYARKAN OLEH KASIR', '28', '5'),
(18, '2017-04-16', '3', '6', 'ADMIN', 1368000, 0, 0, 99000, 53000, 1520000, 0, 1535000, 0, 15000, '2017-04-17 00:21:17', '2', 'winarko', 'MALAM', 0, '', '28', '5'),
(19, '2017-04-17', '1', '5', 'admin', 3657000, 0, 0, 0, 118000, 3775000, 0, 3725000, 50000, 0, '2017-04-17 08:18:34', '2', 'sodik', 'PAGI', 0, '', '28', '5'),
(20, '2017-04-17', '2', '15', 'admin', 2640000, 0, 0, 3000, 154000, 2797000, 0, 2717000, 63000, -17000, '2017-04-17 16:25:30', '2', 'AFANDI', 'SIANG', 17000, 'SUDAH DIBAYARKAN KASIR\r\n', '28', '5')