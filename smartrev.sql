-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartrev`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(50) NOT NULL COMMENT 'Найменование на техниката',
  `model` varchar(50) NOT NULL COMMENT 'Модел на техниката',
  `desc` text NOT NULL COMMENT 'Описание на техниката',
  `desc2` text NOT NULL COMMENT 'Второ описание при необходимост',
  `date` date NOT NULL DEFAULT current_timestamp() COMMENT 'Дата на публикуване',
  `url_image` varchar(255) NOT NULL COMMENT 'Изображение 1',
  `url_image1` varchar(255) NOT NULL COMMENT 'Изображение 2',
  `url_image2` varchar(255) NOT NULL COMMENT 'Изображение 3',
  `cat` int(11) NOT NULL COMMENT 'Категория на ревюто \r\n1. Смартфон\r\n2.Лаптоп/Таблет\r\n3.Аксесоари(смарт часовници, гривни и т.н)',
  `assessment` int(11) NOT NULL COMMENT 'Ocenka'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `model`, `desc`, `desc2`, `date`, `url_image`, `url_image1`, `url_image2`, `cat`, `assessment`) VALUES
(21, 'laptop', 'tablet', 'https://ardes.bg/uploads/p/lenovo-ideapad-3-14-gen-6-321743.jpg', 'https://ardes.bg/uploads/p/lenovo-ideapad-3-14-gen-6-321743.jpg', '2022-12-04', 'https://ardes.bg/uploads/p/lenovo-ideapad-3-14-gen-6-321743.jpg', 'https://ardes.bg/uploads/p/lenovo-ideapad-3-14-gen-6-321743.jpg', 'https://ardes.bg/uploads/p/lenovo-ideapad-3-14-gen-6-321743.jpg', 2, 5),
(22, 'accs', 'sda', 'https://beebom.com/wp-content/uploads/2016/12/18-Essential-Smartphone-Accessories-You-Can-Buy-in-2019.jpg?w=750&quality=75', 'https://beebom.com/wp-content/uploads/2016/12/18-Essential-Smartphone-Accessories-You-Can-Buy-in-2019.jpg?w=750&quality=75', '2022-12-04', 'https://beebom.com/wp-content/uploads/2016/12/18-Essential-Smartphone-Accessories-You-Can-Buy-in-2019.jpg?w=750&quality=75', 'https://beebom.com/wp-content/uploads/2016/12/18-Essential-Smartphone-Accessories-You-Can-Buy-in-2019.jpg?w=750&quality=75', 'https://beebom.com/wp-content/uploads/2016/12/18-Essential-Smartphone-Accessories-You-Can-Buy-in-2019.jpg?w=750&quality=75', 3, 4),
(23, 'smartphone', 'sad', 'https://www.notebookcheck.net/fileadmin/_processed_/4/5/csm_Fotos_Ansicht_04_a01cc968cb.jpg', 'https://www.notebookcheck.net/fileadmin/_processed_/4/5/csm_Fotos_Ansicht_04_a01cc968cb.jpg', '2022-12-27', 'https://www.notebookcheck.net/fileadmin/_processed_/4/5/csm_Fotos_Ansicht_04_a01cc968cb.jpg', 'https://www.notebookcheck.net/fileadmin/_processed_/4/5/csm_Fotos_Ansicht_04_a01cc968cb.jpg', 'https://www.notebookcheck.net/fileadmin/_processed_/4/5/csm_Fotos_Ansicht_04_a01cc968cb.jpg', 1, 10),
(24, 'das', 'dasdas', 'fdasdas', 'dasdasdas', '2022-12-08', 'https://img.freepik.com/premium-photo/astronaut-outer-open-space-planet-earth-stars-provide-background-erforming-space-planet-earth-sunrise-sunset-our-home-iss-elements-this-image-furnished-by-nasa_150455-16829.jpg?w=740', 'https://ardes.bg/uploads/p/lenovo-ideapad-3-14-gen-6-321743.jpg', 'https://beebom.com/wp-content/uploads/2016/12/18-Essential-Smartphone-Accessories-You-Can-Buy-in-2019.jpg?w=750&quality=75', 3, 10),
(25, 'Samsung', 'Galaxy S22 Ultra 5G', 'Тип SIM Nano SIM RAM памет 8 GB Вътрешна памет 128 GB Поддръжка Micro-SD Не Модел на Процесора Exynos 2200 Честота на процесора 1x2.8 GHz Cortex-X2 & 3x2.50 GHz Cortex-A710 & 4x1.8 GHz Cortex-A510 Операционна система specs.Android 12 Екран Dynamic AMOLED 2X Резолюция (пиксели) 1440 x 3088 pixels Портове Без Жак Bluetooth Да WiFi Да NFC Да Батерия 5000 mAh Задна камера specs.Patru camere: 108 MP, f/1.8, 23mm (wide), 1/1.33”, 0.8µm, PDAF, Laser AF, OIS, 10 MP, f/4.9, specs.230mm (periscope telephoto), specs.1/3_52”, 1.12µm, dual pixel PDAF, OIS, 10x optical zoom, 10 MP, f/2.4, 70mm (telephoto), specs.1/3_52”, 1.12µm, dual pixel PDAF, OIS, 3x optical zoom, 12 MP, f/2.2, 13mm, 120˚ (ultrawide), 1/2.55”, 1.4µm, dual pixel PDAF, Super Steady video Предна камера 40 MP, f/2.2, 26mm (wide), specs.1/2_82”, 0.7µm, PDAF Размери(W x H x D mm) 163.3 x 77.9 x 8.9 mm Друго specs.Amprenta Bixby Incarcare fara fir, зареждане', 'Мобилен телефон Samsung Galaxy S22 Ultra 5G Dual Sim, 128 GB, Burgundy Търсиш да купиш Samsung телефон и си се спрял на Galaxy S22 Ultra 5G Dual Sim? Само на една стъпка си от взимането на телефон, който не би могъл да бъде по подходящ за теб. Сигурно знаеш, че Samsung Galaxy S22 Ultra 5G Dual Sim е един от най-добрите телефони на Корейския производител от висок клас. Ще те впечатли с голям дисплей с добре балансирани цветове, четирите му камери готови да уловят любимите ти мигове в 4К до 50 мегапиксела, в комбинация с бърз процесор, ще направят цялостното ти изживяване изключително приятно. С не по-малко от пет варианта за вътрешна памет, а именно 128GB. 256GB, 512GB и 1TB и с RAM от 8GB RAM до 12GB RAM зависимост от модела, Samsung Galaxy S22 Ultra 5G Dual Sim е телефон, който ще обикнеш', '2022-12-08', 'https://cdn.flip.ro/device-photos/5b19629ee1-6a8f022efcc03ddc3d924d8badf7ab33-a6e93388-9bed-4cef-a548-7c25808f82d1_mip@_1000.jpg', 'https://cdn.flip.ro/device-photos/5b19629ee1-b6c92ee461b351fcf688c093d0985356-a2aa61b9-481a-4539-aac4-3d96d57c5281_mip@_1000.jpg', 'https://cdn.flip.ro/website/NewFlip/Flip-1-_1_-min.webp', 1, 8),
(26, 'HP', 'Spectre x360 14-ef0037nn 6X8G2EA', 'Серия:  Spectre\r\nСофтуер:  Windows 11 Home\r\nПроцесор, серия:  Intel Core i7\r\nПроцесор:  Intel Core i7-1255U 3.50 GHz, 12 MB cache\r\nЧипсет:  Intel\r\nПамет, GB:  16GB 4266MHz on board\r\nПамет, слотове:  -\r\nПамет, тип:  LPDDR4X\r\nТвърд диск, тип:  SSD\r\nТвърд диск, GB:  1000GB PCIe NVMe TLC M. 2\r\nДисплей, inch:  13.5\" (34.29 cm)\r\nСензорен дисплей:  Touch\r\nIPS матрица:  IPS\r\nДисплей, резолюция:  3000x2000\r\nЧестота на опресняване, Hz:  60Hz\r\nДисплей, тип:  Anti-Glare\r\nВидео карта, тип:  Integrated\r\nВидео карта, модел:  Intel Iris Xe Graphics\r\nВидео карта, GB:  -\r\nОптично устройство:  -\r\nЗвук:  Audio by Bang & Olufsen; Quad speakers; HP Audio Boost\r\nМрежа:  -\r\nБезжична мрежа:  Intel Wi-Fi 6E AX211 (2x2)\r\nBluetooth:  Bluetooth 5.2\r\n4G/LTE:  -\r\nM. 2 слот:  -\r\nUSB порт:  1 USB Type-A (HP Sleep and Charge)\r\nHDMI порт:  -\r\nDisplay порт:  -\r\nEthernet (RJ-45) порт:  -\r\nСериен (RS-232) порт:  -\r\nРазширителен порт:  2 Thunderbolt 4 with USB4 Type-C (USB захранване, DisplayPort 1.4, HP sleep and Charge)\r\nАудио портове:  1 combo headphone output/ microphone\r\nVGA конектор:  -\r\nДокинг конектор:  -\r\nЧетец за карти:  MicroSD Card Reader\r\nЧетец на пръстов отпечатък:  Fingerprint Reader\r\nWeb камера, MP:  HP True Vision 5MP IR Camera with Camera Shutter, Temporal Noise Reduction and built-in two digital microphones\r\nКлавиатура, тип:  Backlit Keyboard\r\nКирилизация:  Без кирилизация на клавиатурата\r\nWindows OS:  yes\r\nБатерия, cell:  4-cell, 66 Wh lithium-ion polymer battery, 65W USB Type-C Power Adapter\r\nРазмери (Ш, Д, В), cm:  29.8 x 22.0 x 1.7 cm\r\nЦвят:  Black\r\nПокритие на корпуса:  Metal\r\nПриложение:  за бизнеса и за дома', 'Лаптопът HP Spectre x360 2-в-1 се приспособява автоматично към заобикалящата ви среда, за ви осигури възможно най-качествените изображения на екрана. Той коригира настройките за производителност спрямо нуждите ви и ви осигурява полезни функции за поверителност с един клик. Smart Sense се приспособява към Вашите работни навици за оптимална производителност и включва разпознаване при прибиране, като знае дори кога е време за почивка. Благодарение на дисплея с висока резолюция видеоклиповете оживяват с ярки и кристално чисти детайли. Гарантирайте своята поверителност и спокойствие с надеждния превключвател за затвора на камерата, който я изключва и предотвратява хакването й. Гарантирайте поверителността на разговорите си със специалния бутон за заглушаване на микрофона. Благодарение на технологията, която осветява всеки пиксел отделно, OLED дисплеят ви осигурява по-наситени черни цветове за по-богат контраст, подобрена дълбочина на цветовете и по-висока енергийна ефективност от традиционните LED екрани. Виждате повече от екрана си с по-малко превъртане и в пропорция 3:2, която осигурява оптимизиран портретен изглед за един по-комфортен начин на четене и разглеждане.', '2022-12-05', 'https://p1.akcdn.net/full/1038766842.hp-spectre-x360-14-ef0037nn-6x8g2ea.jpg', 'https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c08278957.png?imwidth=270&imdensity=1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmw9pPAQFv0BQ0nwi85KQlysqJmCEmn_jk3Lqg75IVcU150i1UrxpanVRfbunU2XfEG0I&usqp=CAU', 2, 8),
(27, 'дас', 'дас', 'дасдас', 'дасдасдас', '2022-12-08', 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg', 'https://ardes.bg/uploads/p/lenovo-ideapad-3-14-gen-6-321743.jpg', 'https://img.freepik.com/premium-photo/astronaut-outer-open-space-planet-earth-stars-provide-background-erforming-space-planet-earth-sunrise-sunset-our-home-iss-elements-this-image-furnished-by-nasa_150455-16829.jpg?w=740', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL COMMENT 'ИД на потребителя',
  `rank` int(11) NOT NULL DEFAULT 1 COMMENT '1. Потребител 2. Администратор',
  `fname` varchar(30) NOT NULL COMMENT 'Първо име',
  `lname` varchar(30) NOT NULL COMMENT 'Фамилия',
  `username` varchar(50) NOT NULL COMMENT 'потребителско име',
  `email` varchar(50) NOT NULL COMMENT 'емайл адрес',
  `password` varchar(255) NOT NULL COMMENT 'парола на потребителя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `rank`, `fname`, `lname`, `username`, `email`, `password`) VALUES
(70, 2, 'Momchil', 'Stefanov', 'Admin', 'abders721@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(71, 1, 'Momchilдас', 'дасдас', 'дасдса', 'dsadas@gmail.com', 'e0d9d3862dfb270de65719d43749df5e'),
(72, 1, 'dasdas', 'dasdas', 'dasdas', 'cwadding83@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(73, 1, 'Mitko', 'Atanasov', 'matanasov', 'ma@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
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
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ИД на потребителя', AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
