-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mag 28, 2015 alle 20:37
-- Versione del server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proposalsdatabase`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` text NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Cognome` varchar(255) NOT NULL,
  `DataNascita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Email`, `Nome`, `Cognome`, `DataNascita`) VALUES
('HunterActual95', 'root', 'leonardo952008@live.it', 'Leonardo', 'Zucco', '1995-09-10'),
('root', 'root', 'thegonzo96@live.it', 'Andres ', 'Loaiza', '1996-05-12'),
('SgtRoma90', 'root', 'sgt.roma90@gmail.com', 'alessio', 'romagnoli', '1997-01-23');

-- --------------------------------------------------------

--
-- Struttura della tabella `commento`
--

CREATE TABLE IF NOT EXISTS `commento` (
  `IDCommento` int(11) NOT NULL,
  `Descrizione` text NOT NULL,
  `UtenteEffettuante` varchar(255) NOT NULL,
  `IDProposta` int(11) NOT NULL,
  `IDUtente` int(11) NOT NULL,
  `DataEffCommento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `modifica`
--

CREATE TABLE IF NOT EXISTS `modifica` (
  `IDModifica` int(11) NOT NULL,
  `DettaglioModifica` text NOT NULL,
  `Descrizione` text NOT NULL,
  `IDProposta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `proposta`
--

CREATE TABLE IF NOT EXISTS `proposta` (
  `ID` int(11) NOT NULL,
  `Autore` varchar(15) NOT NULL DEFAULT '',
  `Titolo` varchar(255) NOT NULL,
  `Esposizione` text NOT NULL,
  `Categoria` varchar(15) NOT NULL,
  `AdminResponsabile` varchar(255) NOT NULL,
  `DataEffProposta` datetime NOT NULL,
  `Voti` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `proposta`
--

INSERT INTO `proposta` (`ID`, `Autore`, `Titolo`, `Esposizione`, `Categoria`, `AdminResponsabile`, `DataEffProposta`, `Voti`) VALUES
(6, 'Ryder', 'Test 1', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae fringilla ipsum, sed faucibus massa. Quisque sed odio non velit imperdiet imperdiet ut et arcu. Vivamus sit amet lacinia nunc. In id nisi vestibulum, lacinia nisi eu, scelerisque ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquet lorem eu vulputate consequat. Aliquam lobortis pulvinar iaculis. Morbi quis neque semper, consectetur dolor quis, scelerisque nisi. Sed quis ex posuere, posuere nunc id, egestas eros. Donec non facilisis arcu. Morbi velit mi, facilisis et dapibus non, tempus et ex. Sed diam tortor, egestas sed urna eu, tincidunt posuere libero.\r\n\r\nIn ullamcorper, neque ac laoreet aliquam, lacus orci suscipit dolor, sed rhoncus mi dui in lorem. Quisque mollis sodales purus vitae venenatis. Ut egestas, erat a semper rutrum, mi enim venenatis mi, id pellentesque nulla nulla convallis magna. Etiam quis eleifend lacus. Donec sit amet turpis vel sapien dignissim pulvinar et vel velit. Sed id velit id augue lacinia auctor. Nunc in erat at turpis convallis sagittis vel ac diam. Mauris eget est efficitur, pulvinar est vitae, semper augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut sodales laoreet feugiat. Praesent nec accumsan lectus, vel dignissim arcu. Aliquam eleifend egestas diam nec egestas. Donec at aliquet ligula, ac rutrum est. Vestibulum sed malesuada erat.\r\n\r\nCurabitur mattis eros a urna viverra, porttitor dignissim libero tincidunt. Curabitur ut consectetur augue, ac porttitor sem. Aliquam odio sapien, fringilla at metus vitae, lobortis sodales orci. Duis auctor, justo sed posuere semper, purus est ullamcorper ex, a viverra lectus risus laoreet odio. Praesent tempus maximus risus, iaculis consequat lorem. Nulla facilisi. Aliquam auctor ultricies quam eget finibus. Proin placerat venenatis faucibus. Cras facilisis eros nec elit rutrum, vitae iaculis nibh venenatis. Praesent mauris mi, luctus ac turpis vitae, eleifend accumsan velit.\r\n\r\nMorbi rhoncus est magna, et tincidunt dolor pellentesque vitae. Donec mollis aliquet libero, et vulputate magna aliquam vitae. Nunc euismod sapien eu ipsum tincidunt porttitor. Quisque mollis nunc non massa aliquet fermentum. Aliquam ligula elit, vulputate quis erat vitae, imperdiet consequat urna. Mauris non vehicula erat. Nam dictum, tortor ac ultricies sagittis, lorem magna ornare nunc, quis feugiat ante orci convallis nunc. Phasellus vulputate aliquam diam, vitae blandit nulla aliquet a. Integer maximus vulputate hendrerit. Integer venenatis ipsum nec dapibus fringilla. Fusce imperdiet erat nec gravida interdum. Nunc eu mattis mi. Pellentesque dignissim arcu condimentum nisi volutpat bibendum.\r\n\r\nVivamus sed fermentum mi, ut vestibulum erat. Etiam vitae elementum risus, id aliquet nulla. Suspendisse potenti. Cras ac mi ac eros efficitur sagittis. Vivamus sed dui eget justo pellentesque venenatis quis sed ligula. Sed ornare nunc tempor ipsum interdum, non tincidunt mi condimentum. Vestibulum dignissim dolor at turpis eleifend, pretium tincidunt erat ullamcorper. Donec quis congue dolor, non egestas nulla. Maecenas quis ipsum lectus. Nulla a posuere arcu, et sollicitudin magna. Sed interdum eu nunc sit amet pellentesque.', 'Difesa', 'root', '2015-05-28 20:24:15', 0),
(7, 'Andres96', 'Test 2', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae fringilla ipsum, sed faucibus massa. Quisque sed odio non velit imperdiet imperdiet ut et arcu. Vivamus sit amet lacinia nunc. In id nisi vestibulum, lacinia nisi eu, scelerisque ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquet lorem eu vulputate consequat. Aliquam lobortis pulvinar iaculis. Morbi quis neque semper, consectetur dolor quis, scelerisque nisi. Sed quis ex posuere, posuere nunc id, egestas eros. Donec non facilisis arcu. Morbi velit mi, facilisis et dapibus non, tempus et ex. Sed diam tortor, egestas sed urna eu, tincidunt posuere libero.\r\n\r\nIn ullamcorper, neque ac laoreet aliquam, lacus orci suscipit dolor, sed rhoncus mi dui in lorem. Quisque mollis sodales purus vitae venenatis. Ut egestas, erat a semper rutrum, mi enim venenatis mi, id pellentesque nulla nulla convallis magna. Etiam quis eleifend lacus. Donec sit amet turpis vel sapien dignissim pulvinar et vel velit. Sed id velit id augue lacinia auctor. Nunc in erat at turpis convallis sagittis vel ac diam. Mauris eget est efficitur, pulvinar est vitae, semper augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut sodales laoreet feugiat. Praesent nec accumsan lectus, vel dignissim arcu. Aliquam eleifend egestas diam nec egestas. Donec at aliquet ligula, ac rutrum est. Vestibulum sed malesuada erat.\r\n\r\nCurabitur mattis eros a urna viverra, porttitor dignissim libero tincidunt. Curabitur ut consectetur augue, ac porttitor sem. Aliquam odio sapien, fringilla at metus vitae, lobortis sodales orci. Duis auctor, justo sed posuere semper, purus est ullamcorper ex, a viverra lectus risus laoreet odio. Praesent tempus maximus risus, iaculis consequat lorem. Nulla facilisi. Aliquam auctor ultricies quam eget finibus. Proin placerat venenatis faucibus. Cras facilisis eros nec elit rutrum, vitae iaculis nibh venenatis. Praesent mauris mi, luctus ac turpis vitae, eleifend accumsan velit.\r\n\r\nMorbi rhoncus est magna, et tincidunt dolor pellentesque vitae. Donec mollis aliquet libero, et vulputate magna aliquam vitae. Nunc euismod sapien eu ipsum tincidunt porttitor. Quisque mollis nunc non massa aliquet fermentum. Aliquam ligula elit, vulputate quis erat vitae, imperdiet consequat urna. Mauris non vehicula erat. Nam dictum, tortor ac ultricies sagittis, lorem magna ornare nunc, quis feugiat ante orci convallis nunc. Phasellus vulputate aliquam diam, vitae blandit nulla aliquet a. Integer maximus vulputate hendrerit. Integer venenatis ipsum nec dapibus fringilla. Fusce imperdiet erat nec gravida interdum. Nunc eu mattis mi. Pellentesque dignissim arcu condimentum nisi volutpat bibendum.\r\n\r\nVivamus sed fermentum mi, ut vestibulum erat. Etiam vitae elementum risus, id aliquet nulla. Suspendisse potenti. Cras ac mi ac eros efficitur sagittis. Vivamus sed dui eget justo pellentesque venenatis quis sed ligula. Sed ornare nunc tempor ipsum interdum, non tincidunt mi condimentum. Vestibulum dignissim dolor at turpis eleifend, pretium tincidunt erat ullamcorper. Donec quis congue dolor, non egestas nulla. Maecenas quis ipsum lectus. Nulla a posuere arcu, et sollicitudin magna. Sed interdum eu nunc sit amet pellentesque.', 'Giustizia', 'root', '2015-05-28 20:25:21', 0),
(8, 'Giovanni', 'Test 3', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae fringilla ipsum, sed faucibus massa. Quisque sed odio non velit imperdiet imperdiet ut et arcu. Vivamus sit amet lacinia nunc. In id nisi vestibulum, lacinia nisi eu, scelerisque ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquet lorem eu vulputate consequat. Aliquam lobortis pulvinar iaculis. Morbi quis neque semper, consectetur dolor quis, scelerisque nisi. Sed quis ex posuere, posuere nunc id, egestas eros. Donec non facilisis arcu. Morbi velit mi, facilisis et dapibus non, tempus et ex. Sed diam tortor, egestas sed urna eu, tincidunt posuere libero.\r\n\r\nIn ullamcorper, neque ac laoreet aliquam, lacus orci suscipit dolor, sed rhoncus mi dui in lorem. Quisque mollis sodales purus vitae venenatis. Ut egestas, erat a semper rutrum, mi enim venenatis mi, id pellentesque nulla nulla convallis magna. Etiam quis eleifend lacus. Donec sit amet turpis vel sapien dignissim pulvinar et vel velit. Sed id velit id augue lacinia auctor. Nunc in erat at turpis convallis sagittis vel ac diam. Mauris eget est efficitur, pulvinar est vitae, semper augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut sodales laoreet feugiat. Praesent nec accumsan lectus, vel dignissim arcu. Aliquam eleifend egestas diam nec egestas. Donec at aliquet ligula, ac rutrum est. Vestibulum sed malesuada erat.\r\n\r\nCurabitur mattis eros a urna viverra, porttitor dignissim libero tincidunt. Curabitur ut consectetur augue, ac porttitor sem. Aliquam odio sapien, fringilla at metus vitae, lobortis sodales orci. Duis auctor, justo sed posuere semper, purus est ullamcorper ex, a viverra lectus risus laoreet odio. Praesent tempus maximus risus, iaculis consequat lorem. Nulla facilisi. Aliquam auctor ultricies quam eget finibus. Proin placerat venenatis faucibus. Cras facilisis eros nec elit rutrum, vitae iaculis nibh venenatis. Praesent mauris mi, luctus ac turpis vitae, eleifend accumsan velit.\r\n\r\nMorbi rhoncus est magna, et tincidunt dolor pellentesque vitae. Donec mollis aliquet libero, et vulputate magna aliquam vitae. Nunc euismod sapien eu ipsum tincidunt porttitor. Quisque mollis nunc non massa aliquet fermentum. Aliquam ligula elit, vulputate quis erat vitae, imperdiet consequat urna. Mauris non vehicula erat. Nam dictum, tortor ac ultricies sagittis, lorem magna ornare nunc, quis feugiat ante orci convallis nunc. Phasellus vulputate aliquam diam, vitae blandit nulla aliquet a. Integer maximus vulputate hendrerit. Integer venenatis ipsum nec dapibus fringilla. Fusce imperdiet erat nec gravida interdum. Nunc eu mattis mi. Pellentesque dignissim arcu condimentum nisi volutpat bibendum.\r\n\r\nVivamus sed fermentum mi, ut vestibulum erat. Etiam vitae elementum risus, id aliquet nulla. Suspendisse potenti. Cras ac mi ac eros efficitur sagittis. Vivamus sed dui eget justo pellentesque venenatis quis sed ligula. Sed ornare nunc tempor ipsum interdum, non tincidunt mi condimentum. Vestibulum dignissim dolor at turpis eleifend, pretium tincidunt erat ullamcorper. Donec quis congue dolor, non egestas nulla. Maecenas quis ipsum lectus. Nulla a posuere arcu, et sollicitudin magna. Sed interdum eu nunc sit amet pellentesque.', 'Infrastrutture ', 'root', '2015-05-28 20:28:58', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `propostavotata`
--

CREATE TABLE IF NOT EXISTS `propostavotata` (
  `IDProposta` int(11) NOT NULL,
  `NomeUtente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Cognome` varchar(255) NOT NULL,
  `DataNascita` date NOT NULL,
  `LuogoNascita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`Username`, `Password`, `Email`, `Nome`, `Cognome`, `DataNascita`, `LuogoNascita`) VALUES
('andres96', 'asd', 'thegonzo96@live.it', 'andres', 'loaiza', '1996-05-31', 'Quito'),
('Giovanni', 'asd', 'example@example.com', 'giovanni', 'rossi', '1995-03-07', 'Milano'),
('HunterActual', 'gonzo', 'leonardo.zucco@gmail.com', 'Leonardo', 'Zucco', '1995-10-09', 'Fiesole'),
('Ryder', 'aa', 'thegonzo96@live.it', 'andres', 'loaiza', '1996-12-05', 'quito');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`) USING BTREE;

--
-- Indexes for table `commento`
--
ALTER TABLE `commento`
  ADD PRIMARY KEY (`IDCommento`), ADD KEY `IDProposta` (`IDProposta`);

--
-- Indexes for table `modifica`
--
ALTER TABLE `modifica`
  ADD PRIMARY KEY (`IDModifica`);

--
-- Indexes for table `proposta`
--
ALTER TABLE `proposta`
  ADD PRIMARY KEY (`ID`), ADD KEY `Autore` (`Autore`), ADD KEY `AdminResponsabile` (`AdminResponsabile`), ADD KEY `Autore_2` (`Autore`);

--
-- Indexes for table `propostavotata`
--
ALTER TABLE `propostavotata`
  ADD PRIMARY KEY (`NomeUtente`), ADD KEY `IDProposta` (`IDProposta`), ADD KEY `NomeUtente` (`NomeUtente`);

--
-- Indexes for table `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commento`
--
ALTER TABLE `commento`
  MODIFY `IDCommento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modifica`
--
ALTER TABLE `modifica`
  MODIFY `IDModifica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proposta`
--
ALTER TABLE `proposta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commento`
--
ALTER TABLE `commento`
ADD CONSTRAINT `Commento_ibfk_1` FOREIGN KEY (`IDProposta`) REFERENCES `proposta` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `proposta`
--
ALTER TABLE `proposta`
ADD CONSTRAINT `Proposta_ibfk_1` FOREIGN KEY (`AdminResponsabile`) REFERENCES `admin` (`Username`),
ADD CONSTRAINT `Proposta_ibfk_2` FOREIGN KEY (`Autore`) REFERENCES `utente` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `propostavotata`
--
ALTER TABLE `propostavotata`
ADD CONSTRAINT `Propostavotata_ibfk_1` FOREIGN KEY (`IDProposta`) REFERENCES `proposta` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `Propostavotata_ibfk_2` FOREIGN KEY (`NomeUtente`) REFERENCES `utente` (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
