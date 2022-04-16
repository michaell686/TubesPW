-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2022 pada 17.55
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_item`
--

CREATE TABLE `category_item` (
  `id` int(11) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `emblem`
--

CREATE TABLE `emblem` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `emblem`
--

INSERT INTO `emblem` (`id`, `nama`) VALUES
(3, 'Jungle'),
(4, 'Mage'),
(5, 'Assasin'),
(6, 'Figther'),
(7, 'Support'),
(8, 'Marksman'),
(9, 'Physical'),
(10, 'Magic'),
(13, 'Jungle'),
(14, 'Jungle'),
(15, 'Jungle'),
(17, 'Jungle'),
(18, 'Jungle'),
(19, 'Assasin'),
(20, 'Jungle'),
(21, 'aaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `komentar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `attack` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `hero`
--

INSERT INTO `hero` (`id`, `name`, `attack`, `health`, `description`) VALUES
(2, 'Sun', 10, 100, 'Hero Sun merupakan salah satu hero bertipe Fighter yang ada di Game eSports Mobile Legends. Hero ini terbilang kuat karena mampu mengkloning dirinya menjadi tiga karakter yang membuatnya didapuk sebagai hero fighter terkuat. Selain itu Sun juga memiliki pasif dan skill-skill yang cukup merepotkan'),
(3, 'Badang', 30, 100, 'Badang merupakan hero fighter yang dapat juga dijadikan menjadi hero semi tanker berkat durabilitasnya yang cukup tinggi. Setiap 3 kali basic attack dapat memberikan poin ekstra (+ 120 persen Total Physical ATK) Physical Damage sebagai Fist Wind.'),
(4, 'Miya', 30, 100, 'Miya adalah Hero Marksman yang menggunakan panah sebagai media serangnya (Range), Hero ini memiliki potensi damage yang cukup besar dan berbahaya nantinya. Saat memainkan Miya baik di early dan late game, ia bisa menyimbangi bahkan mampu membalikan keadaan dengan cepat jika cara bermain, build dan hal lainnya tepat.'),
(5, 'Franco', 10, 100, 'Franco adalah salah satu hero Tank paling mematikan di Mobile Legends, hero ini punya skill crowd control yang bikin lawan gak ada yang berani mengarang. Franco termasuk hero yang sangat sulit untuk dikuasai, dibutuhkan kecepatan tangan dan instinct yang kuat untuk menggunakan skill yang dimiliki hero ini'),
(6, 'Yi Sun-shin', 60, 100, 'Hero YSS Mobile Legend merupakan hero marksman, ia seorang pemimpin pasukan atau Jendral di Asia Tenggara yang dikenal kehebatannya dan kepemimpinannya.'),
(7, 'lesley', 70, 100, 'Lesley adalah salah satu hero Marksman paling mematikan di Mobile Legends, hero ini memiliki damage yang sangat besar dan juga mematikan ketika di late game. Sayangnya hero ini kurang diminati di Mobile Legends, Lesley jarang banget di-pick saat bermain di rank tinggi.'),
(8, 'zilong', 80, 100, 'Di dalam game, Zilong dikenal sebagai salah satu Hero Fighter/Assassin yang cukup menyusahkan lawan. Pasalnya, dia bisa dengan mudah menghancurkan turret lawan dengan strategi split push. Hero anggota faksi Oriental Fighters ini juga bisa jadi momok bagi Hero-Hero tipis di late game.'),
(9, 'selena', 40, 100, 'Selena adalah hero mage assassin yang memiliki dua tipe serangan dengan fungsi yang berbeda tapi saling membutuhkan. Karena kondisi tersebut, memainkan Selena seperti memainkan dua hero sekaligus dengan peran dan kombinasi yang saling bersimbiosis.'),
(10, 'odette', 50, 100, 'Odette adalah salah satu Hero Mobile Legends yang masuk ke dalam kategori “Mage” atau dikenal juga dengan sebutan “Penyihir”. Setiap kemampuan yang ia punya cukup unik dan sangat mengganggu Hero lawannya, dimulai dari skill yang mampu membuat musuhnya tidak bisa bergerak sampai memberikan damage per second'),
(11, 'yu zhong', 80, 100, 'Sebagai seorang Fighter, Yu Zhong tergolong sebagai seorang Fighter yang memiliki gaya pertarungan agresif. Kondisi tersebut didukung dengan kemampuan Spell Vamp miliknya. Selain itu, dia juga memiliki kombinasi Physical Damage dan CC yang sangat ampuh untuk menghabisi musuh'),
(13, 'xa', 10, 10, 'msm'),
(14, 'xa', 10, 10, 'mantap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `video_url` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `nama`, `video_url`) VALUES
(1, 'video home', 'https:sdasdasdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `category_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `shape` varchar(45) NOT NULL,
  `coords` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `gambar` varchar(45) NOT NULL,
  `deskripsi` varchar(45) NOT NULL,
  `newscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prize_chances`
--

CREATE TABLE `prize_chances` (
  `id` int(11) NOT NULL,
  `prize_id` int(11) NOT NULL,
  `type_chances_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prize_life_token`
--

CREATE TABLE `prize_life_token` (
  `id` int(11) NOT NULL,
  `token` varchar(45) NOT NULL,
  `chances` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prize_point`
--

CREATE TABLE `prize_point` (
  `id` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `chances` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prize_rewards`
--

CREATE TABLE `prize_rewards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prize_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_chances`
--

CREATE TABLE `type_chances` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `chances` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `point` int(11) NOT NULL,
  `life_token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `role`, `point`, `life_token`) VALUES
(1, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 0, 0),
(2, 'michael', 'michael', '827ccb0eea8a706c4c34a16891f84e7b', 'user', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_item`
--
ALTER TABLE `category_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `emblem`
--
ALTER TABLE `emblem`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`,`category_item_id`),
  ADD KEY `fk_item_category_item_idx` (`category_item_id`);

--
-- Indeks untuk tabel `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prize_chances`
--
ALTER TABLE `prize_chances`
  ADD PRIMARY KEY (`id`,`type_chances_id`),
  ADD KEY `fk_prize_chances_type_chances1_idx` (`type_chances_id`);

--
-- Indeks untuk tabel `prize_life_token`
--
ALTER TABLE `prize_life_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prize_point`
--
ALTER TABLE `prize_point`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prize_rewards`
--
ALTER TABLE `prize_rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `type_chances`
--
ALTER TABLE `type_chances`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_item`
--
ALTER TABLE `category_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `emblem`
--
ALTER TABLE `emblem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prize_chances`
--
ALTER TABLE `prize_chances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prize_life_token`
--
ALTER TABLE `prize_life_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prize_point`
--
ALTER TABLE `prize_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prize_rewards`
--
ALTER TABLE `prize_rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `type_chances`
--
ALTER TABLE `type_chances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_category_item` FOREIGN KEY (`category_item_id`) REFERENCES `category_item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `prize_chances`
--
ALTER TABLE `prize_chances`
  ADD CONSTRAINT `fk_prize_chances_type_chances1` FOREIGN KEY (`type_chances_id`) REFERENCES `type_chances` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
