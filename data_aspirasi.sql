SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `data_aspirasi` (
  `nomor` int(11) NOT NULL PRIMARY KEY CLUSTERED,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kritik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;