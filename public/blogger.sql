-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 04:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarii`
--

CREATE TABLE `comentarii` (
  `id_comment` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `content` text DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentarii`
--

INSERT INTO `comentarii` (`id_comment`, `date`, `content`, `id_user`, `id_post`) VALUES
(1, '2020-12-02 14:57:50', 'Wow! Un blog plin de sfaturi bune. Chiar util!', 3, 3),
(2, '2020-12-04 15:42:05', 'Delicioasa ciocolata! Si reteta e super simpla si rapida. Recomand!', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `postari`
--

CREATE TABLE `postari` (
  `id_post` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `visualization` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postari`
--

INSERT INTO `postari` (`id_post`, `title`, `content`, `date`, `visualization`, `id_user`) VALUES
(1, 'Cum sa faci un blog de succes', 'Orice blog are povestea lui, dar fiecare blog de succes are in spate o serie de pasi.\r\n\r\nPrimul pas este crearea lui. Alege domeniul despre care vrei sa vorbesti si ofera-i blogului tau un nume credibil, ce inspira incredere.\r\n\r\nUrmatorul pas este alegerea unei teme potrivite. O tema buna iti ofera multiple functionalitati.\r\n\r\nPersonalizarea blogului este un factor important. Scrie-ti singur textele, alege imagini sugestive, poate chiar facute de tine pentru unicitate.\r\n\r\nIn ceea ce priveste continutul, ai nevoie de o planificare. Gandeste-te in avans ce doresti sa scrii, documenteaza-te daca e necesar, chiar lucreaza la o schita pentru a-ti organiza ideile intr-un mod cat mai eficient. De asemenea, pentru a avea succes ai nevoie de postarea constanta de articole.\r\n\r\nUn alt secret al blogurilor de succes este reprezentat de modul in care sunt alese titlurile. Ele sunt primul contact cu cititorii, tocmai de aceea acorda-le multa atentie. Alege un titlu ce capteaza atentia, dar sa aiba legatura cu ceea ce ai scris in blog.\r\n\r\nUltimul pas ar fi promovarea blogului. Te poti folosi de social media sau te poti implica in forumuri online. O idee buna de promovare este realizarea de concursuri pe blog, astfel atragand audienta.\r\n\r\nIn final, orice ai alege, daca adaugi pasiune si munca, rezultatele vor fi pe masura.', '2020-12-02 14:57:50', 0, 1),
(2, 'Ciocolata calda pentru zile friguroase', 'Cum suntem in plin sezon de sarbatori, cu zapada batandu-ne, la propriu, la usa, m-am gandit sa impartasesc o reteta simpla, dar minunata de ciocolata calda cu scortisoara.\r\n\r\nAvem nevoie de lapte, o tableta de ciocolata amaruie, cateva batoane de scortisoara. Pentru decor scortisoara macinata si frisca.\r\n\r\nTot ce trebuie sa facem este sa topim ciocolata in laptele preincalzit. Procesul poate dura cateva minute si este nevoie sa amestecam tot timpul cu o lingura de lemn pentru ca ciocolata calda sa nu lipeasca de oala. Dupa ce totul s-a topit, adaugam batoanele de scortisoara, iar in functie de preferinte putem completa cu scortisoara macinata si frisca.\r\n\r\nStay warm!', '2020-12-01 14:57:50', 0, 3),
(3, 'Cum sa iti alegi masina potrivita', 'Fie ca esti gata sa iti cumperi prima masina si nu stii de unde sa incepi sau pur si simplu nu te pricepi la masini, dar ai vrea sa aflii mai multe, ai venit in locul potrivit. Dupa lectura de 10 minute a acestei postari, vei afla cum si unde sa te documentezi, vei avea o idee despre avantajele si dezavantajele unei masini second hand si vei stii ce sa eviti atunci cand alegi o masina.\r\n\r\nIn primul rand, trebuie sa iti cunosti nevoile, deci e necesar sa raspunzi la intrebarea \"Pentru ce imi trebuie o masina?\". Raspunsul va influenta tipul de masina in care vrei sa investesti. Gandeste-te la detalii precum numarul de pasageri, daca ai de mers distante mari, pe ce teren vei folosi preponderent masina, de cat spatiu ai nevoie in porbagaj, daca vei avea nevoie de scaun pentru copii si asa mai departe.\r\n\r\nUrmatorul pas este sa iti setezi bugetul. Acest lucru va decide daca trebuie sa cumperi o masina second hand dau daca poti sa cumperi una noua. Fiecare dintre optiuni vine cu avantaje si dezavantaje. De exemplu, o masina second hand este mai ieftina decat una noua, dar pot aparea diferite probleme la partea mecanica, iar reparatiile ar putea fi costisitoare. O masina noua iti ofera garantia ca totul este perfect functional, dar poate fi, intr-adevar, mai scumpa.\r\n\r\nDaca ai posibilitatea, incearca un test drive. In acest fel iti poti face o idee despre ce iti place si poti descoperi lucruri la care nu te-ai fi gandit. De exemplu, exista posibilitatea ca o anumita functionalitate sa nu iti placa atat de mult precum te-ai fi asteptat. \r\n\r\nNu in ultimul rand, locul de unde cumperi este important. Ideal ar fi sa cumperi dintr-o reprezentanta, dar daca acest lucru nu e posbil, mergi pe recomandari si documenteaza-te bine inainte de a finaliza tranzactia.', '2020-11-30 15:25:13', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'George Vasici', 'georgevasici', 'george.vasici@yahoo.com'),
(2, 'Ion Popescu', 'ionpopescu', 'ion.popescu@yahoo.com'),
(3, 'Maria Vasilescu', 'mariavasilescu', 'maria.vasilescu@yahoo.com'),
(4, 'Viorica Georgescu', 'vioricageorgescu', 'viorica.georgescu@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarii`
--
ALTER TABLE `comentarii`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user_comm` (`id_user`);

--
-- Indexes for table `postari`
--
ALTER TABLE `postari`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarii`
--
ALTER TABLE `comentarii`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postari`
--
ALTER TABLE `postari`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarii`
--
ALTER TABLE `comentarii`
  ADD CONSTRAINT `id_post` FOREIGN KEY (`id_post`) REFERENCES `postari` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_comm` FOREIGN KEY (`id_user`) REFERENCES `utilizatori` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postari`
--
ALTER TABLE `postari`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `utilizatori` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
