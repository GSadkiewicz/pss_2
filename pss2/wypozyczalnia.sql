SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Name` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `item`
--

INSERT INTO `item` (`item_id`, `Price`, `Name`, `type_id`) VALUES
(1, 23, 'Kijki narciarskie', 4),
(2, 11, 'Kask - męski', 4),
(3, 37, 'Deska snowboardowa', 1),
(4, 25, 'Buty narciarskie', 3),
(5, 25, 'Buty snowboardowe', 5),
(6, 45, 'Narty do slalomu', 2),
(7, 20, 'Deska męska', 1),
(8, 15, 'Deska dziecięca', 1),
(9, 17, 'Deska krótka', 1),
(10, 25, 'Deska długa', 1),
(11, 12, 'Kask wyczynowy', 4),
(12, 23, 'Kask damski', 4),
(13, 13, 'Kask dziecięcy', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `data_odbioru` date NOT NULL,
  `data_zwrotu` date NOT NULL,
  `numer_telefonu` varchar(100) NOT NULL,
  `imie` varchar(100) NOT NULL,
  `nazwisko` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `data_odbioru`, `data_zwrotu`, `numer_telefonu`, `imie`, `nazwisko`, `user_id`, `item_id`, `total_price`) VALUES
(1, '2023-01-28', '2023-02-01', '123123123', 'Jan', 'Jan', 2, 1, 92),
(2, '2023-01-28', '2023-02-02', '123123123', 'Jan ', 'Jan ', 2, 6, 225),
(3, '2023-02-05', '2023-02-08', '123123123', 'Test ', 'Test ', 2, 1, 69),
(4, '2023-01-29', '2023-02-02', '123123123', 'Józek', 'Józek', 2, 3, 148);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sub_page`
--

CREATE TABLE `sub_page` (
  `sub_page_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `sub_page`
--

INSERT INTO `sub_page` (`sub_page_id`, `name`, `content`) VALUES
(1, 'Kontakt', 'dzwon  do nas teraz !!!'),
(2, 'O_nas', 'gggg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(1, 'Deski snowboardowe'),
(2, 'Narty zjazdowe'),
(3, 'Buty narciarskie'),
(4, 'Akcesoria'),
(5, 'Buty snowboardowe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `who_edited` varchar(100) NOT NULL,
  `when_edited` date NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(4) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`, `who_edited`, `when_edited`, `is_active`, `role_id`) VALUES
(1, 'admin', 'admin', '', '2023-01-27', 1, 1),
(2, 'user', 'user', '', '2023-01-27', 1, 2),
(4, 'gosc', 'gosc', '', '2023-01-28', 1, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indeksy dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `Reservation_FK` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeksy dla tabeli `sub_page`
--
ALTER TABLE `sub_page`
  ADD PRIMARY KEY (`sub_page_id`);

--
-- Indeksy dla tabeli `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `Users_FK` (`role_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `sub_page`
--
ALTER TABLE `sub_page`
  MODIFY `sub_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`type_id`);

--
-- Ograniczenia dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Reservation_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_FK` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
