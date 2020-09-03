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
(2961837, '913372961837', NULL, '2020-08-05 02:19:26', 2, 1, '3', 'S', 'CASH', '913372961837', '9133729618377', '2020-08-05 09:33:08', '07:13:42', '5000', '31', 1, '6', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR1'),
(2961838, '984562961838', NULL, '2020-08-05 02:19:50', 2, 1, '3', 'S', 'CASH', '984562961838', '9845629618387', '2020-08-05 09:17:53', '06:58:03', '5000', '31', 1, '6', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR1')


INSERT INTO `t_parkir` (`id`, `kode_cus_in`, `kode_card_in`, `waktu_in`, `tipe`, `shift_in`, `pos_in`, `status`, `kode_bank_in`, `kode_cus_out`, `platnomor`, `waktu_out`, `lama_parkir`, `biayatotal`, `opkeluar`, `shift_out`, `pos_out`, `kode_bank_out`, `kode_lokasi`, `kode_lintas`, `kode_daop`, `jenis_pembayaran`, `kode_tarif`, `sts_kirim`, `settlement_id`, `saldo_awal`, `saldo_akhir`, `saldo_in`, `id_foto`, `nopol`, `status_setoran`, `settlement_idtl`, `term_id`, `tm`, `nama_pos_in`) VALUES
(2961840, '968072961840', NULL, '2020-08-05 02:20:04', 1, 1, '2', 'S', 'CASH', '968072961840', '9680729618406', '2020-08-05 10:34:34', '08:14:30', '8000', '9', 1, '5', 'CASH', '32', '3', '32', 'CASH', '1', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOBIL'),
(2961841, '914912961841', NULL, '2020-08-05 02:20:19', 2, 1, '4', 'S', 'CASH', '914912961841', '9149129618411', '2020-08-05 09:33:40', '07:13:21', '5000', '16', 1, '7', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR2'),
(2961842, '989362961842', NULL, '2020-08-05 02:20:22', 2, 1, '3', 'S', 'CASH', '989362961842', '9893629618425', '2020-08-05 07:47:05', '05:26:43', '5000', '16', 1, '7', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR1')

INSERT INTO `t_parkir` (`id`, `kode_cus_in`, `kode_card_in`, `waktu_in`, `tipe`, `shift_in`, `pos_in`, `status`, `kode_bank_in`, `kode_cus_out`, `platnomor`, `waktu_out`, `lama_parkir`, `biayatotal`, `opkeluar`, `shift_out`, `pos_out`, `kode_bank_out`, `kode_lokasi`, `kode_lintas`, `kode_daop`, `jenis_pembayaran`, `kode_tarif`, `sts_kirim`, `settlement_id`, `saldo_awal`, `saldo_akhir`, `saldo_in`, `id_foto`, `nopol`, `status_setoran`, `settlement_idtl`, `term_id`, `tm`, `nama_pos_in`) VALUES
(2961845, '955872961845', NULL, '2020-08-05 02:21:03', 1, 1, '2', 'S', 'CASH', '955872961845', 'L9611BU', '2020-08-05 02:32:08', '00:11:05', '8000', '10', 1, '5', 'CASH', '32', '3', '32', 'CASH', '1', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOBIL'),
(2961846, '911092961846', NULL, '2020-08-05 02:22:02', 2, 1, '3', 'S', 'CASH', '911092961846', '9110929618468', '2020-08-05 09:33:10', '07:11:08', '5000', '16', 1, '7', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR1'),
(2961847, '958792961847', NULL, '2020-08-05 02:22:04', 2, 1, '4', 'S', 'CASH', '958792961847', '9587929618475', '2020-08-05 09:22:01', '06:59:57', '5000', '31', 1, '6', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR2'),
(2961848, '935872961848', NULL, '2020-08-05 02:22:10', 2, 1, '3', 'S', 'CASH', '935872961848', '9358729618480', '2020-08-05 09:09:50', '06:47:40', '5000', '31', 1, '6', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR1'),
(2961849, '962182961849', NULL, '2020-08-05 02:22:11', 2, 1, '4', 'S', 'CASH', '962182961849', '9621829618491', '2020-08-05 03:15:56', '00:53:45', '5000', '16', 1, '7', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR2')



INSERT INTO `t_parkir` (`id`, `kode_cus_in`, `kode_card_in`, `waktu_in`, `tipe`, `shift_in`, `pos_in`, `status`, `kode_bank_in`, `kode_cus_out`, `platnomor`, `waktu_out`, `lama_parkir`, `biayatotal`, `opkeluar`, `shift_out`, `pos_out`, `kode_bank_out`, `kode_lokasi`, `kode_lintas`, `kode_daop`, `jenis_pembayaran`, `kode_tarif`, `sts_kirim`, `settlement_id`, `saldo_awal`, `saldo_akhir`, `saldo_in`, `id_foto`, `nopol`, `status_setoran`, `settlement_idtl`, `term_id`, `tm`, `nama_pos_in`) VALUES
(2961852, '978052961852', NULL, '2020-08-05 02:22:35', 2, 1, '3', 'S', 'CASH', '978052961852', '9780529618528', '2020-08-05 02:44:20', '00:21:45', '5000', '16', 1, '7', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR1'),
(2961853, '997962961853', NULL, '2020-08-05 02:22:52', 2, 1, '4', 'S', 'CASH', '997962961853', '9979629618532', '2020-08-05 09:22:57', '07:00:05', '5000', '16', 1, '7', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR2'),
(2961854, '905522961854', NULL, '2020-08-05 02:23:02', 2, 1, '4', 'S', 'CASH', '905522961854', '9055229618544', '2020-08-05 09:50:18', '07:27:16', '5000', '31', 1, '6', 'CASH', '32', '3', '32', 'CASH', '2', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOTOR2'),
(2961855, '947362961855', NULL, '2020-08-05 02:23:52', 1, 1, '2', 'S', 'CASH', '947362961855', 'L9976NK', '2020-08-05 03:12:07', '00:48:15', '8000', '10', 1, '5', 'CASH', '32', '3', '32', 'CASH', '1', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOBIL'),
(2961856, '909452961856', NULL, '2020-08-05 02:24:04', 1, 1, '2', 'S', 'CASH', '909452961856', '9337KCB', '2020-08-05 02:48:03', '00:23:59', '8000', '10', 1, '5', 'CASH', '32', '3', '32', 'CASH', '1', 0, '', '0', '0', NULL, '', NULL, '1', NULL, NULL, '0', 'PM-MOBIL')



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
  `kode_lokasi` varchar(10) DEFAULT '32',
  `kode_daop` varchar(3) DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `t_setorankasir` (`id`, `tanggal`, `kode_shift`, `kode_kasir`, `kode_admin`, `jumlah_casual`, `jumlah_emoney`, `jumlah_mastercard`, `jumlah_manualtiket`, `jumlah_losttiket`, `jumlah_setoran_tunai`, `Jumlah_setoran_kredit`, `jumlah_setoran_kasir`, `jumlah_tiketmasalah`, `selisih_setoran`, `waktu`, `sts_kirim`, `nama_kasir`, `nama_shift`, `jumlah_selisihbayar`, `keterangan`, `kode_lokasi`, `kode_daop`) VALUES
(1, '2017-04-13', '1', '9', 'SUHARNO', 6136000, 0, 0, 847000, 0, 6983000, 0, 6560000, 390000, -33000, '2017-04-20 15:30:18', '2', 'bahrul', 'PAGI', 33000, '', '32', '5'),
(2, '2017-04-13', '1', '15', 'SUHARNO', 3201000, 0, 0, 21000, 0, 3222000, 0, 3238000, 0, 16000, '2017-04-20 15:30:18', '2', 'agus', 'PAGI', 0, '', '32', '5'),
(3, '2017-04-13', '1', '16', 'SUHARNO', 3240000, 0, 0, 15000, 0, 3255000, 0, 3253000, 0, -2000, '2017-04-20 15:30:18', '2', 'sulton', 'PAGI', 2000, '', '32', '5'),
(4, '2017-04-14', '1', '9', 'suharno', 2880000, 0, 0, 132000, 0, 3012000, 0, 3030000, 78000, 96000, '2017-04-20 15:30:18', '2', 'bahrul', 'PAGI', 0, '', '32', '5'),
(5, '2017-04-14', '1', '16', 'suharno', 3099000, 0, 0, 12000, 0, 3111000, 0, 3100000, 0, -11000, '2017-04-20 15:30:19', '2', 'sulton', 'PAGI', 11000, 'bayar tunai', '32', '5')



INSERT INTO `t_setorankasir` (`id`, `tanggal`, `kode_shift`, `kode_kasir`, `kode_admin`, `jumlah_casual`, `jumlah_emoney`, `jumlah_mastercard`, `jumlah_manualtiket`, `jumlah_losttiket`, `jumlah_setoran_tunai`, `Jumlah_setoran_kredit`, `jumlah_setoran_kasir`, `jumlah_tiketmasalah`, `selisih_setoran`, `waktu`, `sts_kirim`, `nama_kasir`, `nama_shift`, `jumlah_selisihbayar`, `keterangan`, `kode_lokasi`, `kode_daop`) VALUES
(8, '2017-04-15', '1', '15', 'suharno', 3834000, 0, 0, 27000, 0, 3861000, 0, 3858000, 0, -3000, '2017-04-20 15:30:19', '2', 'agus', 'PAGI', 3000, '', '32', '5'),
(9, '2017-04-15', '1', '16', 'suharno', 2991000, 0, 0, 30000, 0, 3021000, 0, 3024000, 0, 3000, '2017-04-20 15:30:19', '2', 'sulton', 'PAGI', 0, '', '32', '5'),
(10, '2017-04-15', '1', '9', 'suharno', 3537000, 0, 0, 235000, 0, 3772000, 0, 3658000, 114000, 0, '2017-04-20 15:30:19', '2', 'bahrul', 'PAGI', 0, '', '32', '5'),
(11, '2017-04-16', '1', '15', 'suharno', 1953000, 0, 0, 12000, 0, 1965000, 0, 1966000, 0, 1000, '2017-04-20 15:30:19', '2', 'agus', 'PAGI', 0, '', '32', '5'),
(12, '2017-04-16', '1', '9', 'suharno', 2073000, 0, 0, 67000, 0, 2140000, 0, 2104000, 18000, -18000, '2017-04-20 15:30:20', '2', 'bahrul', 'PAGI', 18000, 'SALAH KEMBALIAN, DIBAYAR KASIR TUNAI', '32', '5'),
(13, '2017-04-16', '1', '16', 'suharno', 3291000, 0, 0, 24000, 0, 3315000, 0, 3311000, 0, -4000, '2017-04-20 15:30:20', '2', 'sulton', 'PAGI', 4000, 'KASIR SALAH KEMBALIAN, DIBAYAR TUNAI', '32', '5')