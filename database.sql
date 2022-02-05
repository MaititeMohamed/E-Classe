
--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cours` varchar(20) COLLATE utf8_bin NOT NULL,
  `typecours` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `cours`, `typecours`) VALUES
(1, 'php', 'scripting language'),
(2, 'c', 'Programminglanguage'),
(3, 'C++', 'Programming language'),
(4, 'C#', 'Programming language'),
(5, 'javascript', 'scripting language'),
(6, 'HTML', 'Markup Language');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` varchar(15) COLLATE utf8_bin NOT NULL,
  `EnrolNumber` varchar(40) COLLATE utf8_bin NOT NULL,
  `DateOfAdmission` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `Name`, `Email`, `phone`, `EnrolNumber`, `DateOfAdmission`) VALUES
(2, 'khalid', 'khalid@gmail.com', '0720359827', '2514738322792', '2022-02-05 14:11:31'),
(3, 'Mohamed', 'MaititeMohamed@gmail.com', '0642705352', '3892392302019', '2022-02-05 14:13:30'),
(6, 'aymen', 'aymen@gmail.com', '0771656263', '2356554321684', '2022-02-05 16:03:04'),
(9, 'ahmed', 'ahmed@gmail.com', '0758231604', '052198757485', '2022-02-05 20:05:03');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fullName` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullName`, `Email`, `password`) VALUES
(1, 'MAITITE MOHAMED', 'maitite@gmail.com', 'pass1100'),
(2, 'ahmed', 'ahmed@gmail.com', '0101');


