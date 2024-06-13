-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2024 at 12:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonnes_pratiques`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_article` date NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `description`, `date_article`, `id_user`) VALUES
(1, 'Bonne pratique 1', 'Morbi pharetra magna a lorem. Cras sapien. Duis porttitor vehicula urna. Phasellus iaculis, mi vitae varius consequat, purus nibh sollicitudin mauris, quis aliquam felis dolor vel elit. Quisque neque mi, bibendum non, tristique convallis, congue eu, quam. Etiam vel felis. Quisque ac ligula at orci pulvinar rutrum. Donec mi eros, sagittis eu, consectetuer sed, sagittis sed, lorem. Nunc sed eros. Nullam pellentesque ante quis lectus. Vivamus lacinia, sapien vel fermentum placerat, purus nisl aliquet odio, et porta wisi dui nec nunc. Fusce porta cursus libero.', '2024-06-04', 2),
(2, 'Bonne pratique 2', 'Sed at sem vitae purus ultrices vestibulum. Vestibulum tincidunt lacus et ligula. Pellentesque vitae elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis ornare, erat eget laoreet vulputate, lacus ipsum suscipit turpis, et bibendum nisl orci non lectus. Vestibulum nec risus nec libero fermentum fringilla. Morbi non velit in magna gravida hendrerit. Pellentesque quis lectus. Vestibulum eleifend lobortis leo. Vestibulum non augue. Vivamus dictum tempor dui. Maecenas at ligula id felis congue porttitor. Nulla leo magna, egestas quis, vulputate sit amet, viverra id, velit.\r\n\r\nSuspendisse a dolor. Nam erat eros, congue eget, sagittis a, lacinia in, pede. Maecenas in elit. Proin molestie varius nibh. Vivamus tristique purus sed augue. Proin egestas semper tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Vestibulum orci enim, sagittis ornare, eleifend ut, mattis at, ligula. Nulla molestie convallis arcu. Ut eros tellus, condimentum at, sodales in, ultrices vel, nulla.\r\n\r\nVivamus eu tellus sed tellus consequat suscipit. Nam orci orci, malesuada id, gravida nec, ultricies vitae, erat. Donec risus turpis, luctus sit amet, interdum quis, porta sed, ipsum. Suspendisse condimentum, tortor at egestas posuere, neque metus tempor orci, et tincidunt urna nunc a purus. Sed facilisis blandit tellus. Nunc risus sem, suscipit nec, eleifend quis, cursus quis, libero. Curabitur et dolor. Sed vitae sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ante. Duis ullamcorper enim. Donec tristique enim eu leo. Nullam molestie elit eu dolor. Nullam bibendum, turpis vitae tristique gravida, quam sapien tempor lectus, quis pretium tellus purus ac quam. Nulla facilisi.\r\n', '2024-06-06', 1),
(5, 'Bonne pratique 3', 'Suspendisse vitae elit. Aliquam arcu neque, ornare in, ullamcorper quis, commodo eu, libero. Fusce sagittis erat at erat tristique mollis. Maecenas sapien libero, molestie et, lobortis in, sodales eget, dui. Morbi ultrices rutrum lorem. Nam elementum ullamcorper leo. Morbi dui. Aliquam sagittis. Nunc placerat. Pellentesque tristique sodales est. Maecenas imperdiet lacinia velit. Cras non urna. Morbi eros pede, suscipit ac, varius vel, egestas non, eros. Praesent malesuada, diam id pretium elementum, eros sem dictum tortor, vel consectetuer odio sem sed wisi.\r\n\r\nVivamus vehicula leo a justo. Quisque nec augue. Morbi mauris wisi, aliquet vitae, dignissim eget, sollicitudin molestie, ligula. In dictum enim sit amet risus. Curabitur vitae velit eu diam rhoncus hendrerit. Vivamus ut elit. Praesent mattis ipsum quis turpis. Curabitur rhoncus neque eu dui. Etiam vitae magna. Nam ullamcorper. Praesent interdum bibendum magna. Quisque auctor aliquam dolor. Morbi eu lorem et est porttitor fermentum. Nunc egestas arcu at tortor varius viverra. Fusce eu nulla ut nulla interdum consectetuer. Vestibulum gravida. Morbi mattis libero sed est.\r\n\r\nVivamus sit amet pede. Duis interdum, nunc eget rutrum dignissim, nisl diam luctus leo, et tincidunt velit nisl id tellus. In lorem tellus, aliquet vitae, porta in, aliquet sed, lectus. Phasellus sodales. Ut varius scelerisque erat. In vel nibh eu eros imperdiet rutrum. Donec ac odio nec neque vulputate suscipit. Nam nec magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam porta, odio et sagittis iaculis, wisi neque fringilla sapien, vel commodo lorem lorem id elit. Ut sem lectus, scelerisque eget, placerat et, tincidunt scelerisque, ligula. Pellentesque non orci.\r\n\r\nInteger ac diam. Nullam porttitor dolor eget metus. Nulla sed metus quis tortor lacinia tempor. Mauris mauris dui, faucibus vitae, aliquet sit amet, placerat a, ante. Nunc placerat tincidunt neque. Mauris egestas dolor ut ipsum cursus malesuada. Curabitur odio. Nunc lobortis. Sed mattis tempor felis. Mauris dolor quam, facilisis at, bibendum sit amet, rutrum ornare, pede. Suspendisse accumsan sagittis velit. Pellentesque varius laoreet lorem. Vivamus egestas sapien id diam.', '2024-06-07', 1),
(6, 'Bonne pratique 4', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Aliquam interdum porttitor tortor. Donec ultricies justo eget sapien. Proin ac est. Aliquam erat volutpat. In tempus scelerisque ligula. Morbi scelerisque urna. Duis ac nisl. Donec sed leo. Fusce posuere orci mollis nunc. Sed arcu enim, pharetra nec, aliquam eu, consectetuer sit amet, eros. Sed id enim. Etiam mattis est at elit. Pellentesque est risus, pellentesque nec, dignissim vitae, egestas vitae, sapien. Maecenas et eros non libero iaculis facilisis. Mauris porttitor tempor justo. Sed sollicitudin neque nec libero.\r\n\r\nUt congue malesuada justo. Curabitur congue, felis at hendrerit faucibus, mauris lacus porttitor pede, nec aliquam turpis diam feugiat arcu. Nullam rhoncus ipsum at risus. Vestibulum a dolor sed dolor fermentum vulputate. Sed nec ipsum dapibus urna bibendum lobortis. Vestibulum elit. Nam ligula arcu, volutpat eget, lacinia eu, lobortis ac, urna. Nam mollis ultrices nulla. Cras vulputate. Suspendisse at risus at metus pulvinar malesuada. Nullam lacus. Aliquam tempus magna. Aliquam ut purus. Proin tellus.\r\n\r\nAenean velit sem, viverra eu, tempus id, rutrum id, mi. Nullam nec nibh. Proin ullamcorper, dolor in cursus tristique, eros augue tempor nibh, at gravida diam wisi at purus. Donec mattis ullamcorper tellus. Phasellus vel nulla. Praesent interdum, eros in sodales sollicitudin, nunc nulla pulvinar justo, a euismod eros sem nec nibh. Nullam sagittis dapibus lectus. Nullam eget ipsum eu tortor lobortis sodales. Etiam purus leo, pretium nec, feugiat non, ullamcorper vel, nibh. Sed vel elit et quam accumsan facilisis. Nunc leo. Suspendisse faucibus lacus.', '2024-06-10', 1),
(7, 'Bonne pratique 5', 'Praesent sed neque id pede mollis rutrum. Vestibulum iaculis risus. Pellentesque lacus. Ut quis nunc sed odio malesuada egestas. Duis a magna sit amet ligula tristique pretium. Ut pharetra. Vestibulum imperdiet magna nec wisi. Mauris convallis. Sed accumsan sollicitudin massa. Sed id enim. Nunc pede enim, lacinia ut, pulvinar quis, suscipit semper, elit. Cras accumsan erat vitae enim. Cras sollicitudin. Vestibulum rutrum blandit massa.\r\n\r\nInteger vel enim sed turpis adipiscing bibendum. Vestibulum pede dolor, laoreet nec, posuere in, nonummy in, sem. Donec imperdiet sapien placerat erat. Donec viverra. Aliquam eros. Nunc consequat massa id leo. Sed ullamcorper, lorem in sodales dapibus, risus metus sagittis lorem, non porttitor purus odio nec odio. Sed tincidunt posuere elit. Quisque eu enim. Donec libero risus, feugiat ac, dapibus eget, posuere a, felis. Quisque vel lectus ut metus tincidunt eleifend. Duis ut pede. Duis velit erat, venenatis vitae, vulputate a, pharetra sit amet, est. Etiam fringilla faucibus augue.', '2024-06-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `email`, `role`) VALUES
(1, 'Jean', '$2y$10$PphWFW3MVm.je3te515rEO/I0onueVC7trAqhZ1CB8px5Iglcqooq', 'jean@mail.com', 'administrateur'),
(2, 'Marcel', '$2y$10$j4NU1eZU9uKgGHUm8e3f..XMs.iripcck1Zb0.ydhMg1/VnPS9Cf6', 'marcel@mail.com', 'éditeur'),
(3, 'Julie', '$2y$10$zxbWpGWQqZQd3QlxYQEIIuTuAwD0UMmvhTHad3sUZifUd9YujnvPa', 'julie@mail.com', 'éditeur'),
(33, 'Martin', '$2y$10$.zRLPiPjf65th8C2pEidqOIza1OIH0JTzO5y0KAnv1AtDF7sE75Cu', 'martin@mail.com', 'éditeur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `titre` (`titre`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
