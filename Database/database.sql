
--
-- Base de données : `e_classe_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cours` varchar(20) COLLATE utf8_bin NOT NULL,
  `typecours` varchar(30) COLLATE utf8_bin NOT NULL,
  `prix` int(11) NOT NULL
) ;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `cours`, `typecours`, `prix`) VALUES
(1, 'php', 'scripting language', 200),
(2, 'c', 'Programminglanguage', 250),
(3, 'C++', 'Programming language', 150),
(4, 'C#', 'Programming language', 300),
(5, 'javascript', 'scripting language', 100),
(6, 'HTML', 'Markup Language', 50);

-- --------------------------------------------------------

--
-- Structure de la table `payment_details`
--

CREATE TABLE `payment_details` (
  `Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `PaymentSchedule` varchar(20) COLLATE utf8_bin NOT NULL,
  `BillNumber` varchar(20) COLLATE utf8_bin NOT NULL,
  `AmountPaid` varchar(20) COLLATE utf8_bin NOT NULL,
  `BalanceAmount` varchar(40) COLLATE utf8_bin NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ;

--
-- Déchargement des données de la table `payment_details`
--

INSERT INTO `payment_details` (`Name`, `PaymentSchedule`, `BillNumber`, `AmountPaid`, `BalanceAmount`, `Date`) VALUES
('Karthi', 'First', '00012223', '100,000', 'DHS 500,000', '2022-02-05 20:45:26'),
('aymen', 'First', '00012223', '100,000', 'DHS 600,000', '2022-02-05 20:45:41');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8_bin NOT NULL,
  `Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `EnrolNumber` varchar(40) COLLATE utf8_bin NOT NULL,
  `DateOfAdmission` timestamp NOT NULL DEFAULT current_timestamp()
);

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `img`, `Name`, `Email`, `phone`, `EnrolNumber`, `DateOfAdmission`) VALUES
(16, 'pu.jpg', 'khalid', 'khalid@gmail.com', '0720359827', '2514738322792', '2022-02-08 09:56:46'),
(17, 'pu.jpg', 'Mohamed', 'MaititeMohamed@gmail.com', '0642705352', '3892392302019', '2022-02-08 09:56:46'),
(18, 'pu.jpg', 'aymen', 'aymen@gmail.com', '0771656263', '2356554321684', '2022-02-08 09:56:46'),
(19, 'pu.jpg', 'ahmed', 'ahmed@gmail.com', '0758231604', '052198757485', '2022-02-08 09:56:46'),
(20, 'med.png', 'ali', 'maititemohamed@gmail.com', '0725168395', '2356554321684', '2022-02-08 10:32:08'),
(21, 'med.png', 'test', 'test@gmail.com', '5555555', '251505743287', '2022-02-08 10:46:27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullName` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
);

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullName`, `Email`, `password`) VALUES
(1, 'MAITITE MOHAMED', 'maitite@gmail.com', 'pass1100'),
(2, 'ahmed', 'ahmed@gmail.com', '0101');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

