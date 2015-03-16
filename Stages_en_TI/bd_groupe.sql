-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2015 at 08:12 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_groupe`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `iddocument` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchnomdocument` varchar(150) NOT NULL,
  `txtdescripdocument` text,
  `vchecheancierdocument` varchar(150) DEFAULT NULL,
  `vchponderationdocument` varchar(10) DEFAULT NULL,
  `enumtypedocument` enum('ass','etud','emp','groupe','utile') NOT NULL DEFAULT 'etud',
  `idgroupe` int(11) unsigned DEFAULT NULL,
  `idlien` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`iddocument`),
  KEY `FK_documents_idgroupe` (`idgroupe`),
  KEY `FK_documents_idlien` (`idlien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`iddocument`, `vchnomdocument`, `txtdescripdocument`, `vchecheancierdocument`, `vchponderationdocument`, `enumtypedocument`, `idgroupe`, `idlien`) VALUES
(1, 'Rapports hebdomadaires', NULL, 'Tous les lundis', '25 %', 'etud', 1, NULL),
(2, 'Rapport final de stage', 'incluant le formulaire d''évaluation du stage ', NULL, '35 %', 'etud', 1, NULL),
(3, 'Évaluation du stagiaire', 'À la mi-stage', 'À remettre à l''enseignant superviseur lors de sa visite en milieu de travail effectuée vers la mi-stage \r\n', '10 %', 'emp', 1, NULL),
(4, 'Évaluation finale du stagiaire', 'À la fin du stage', 'À remettre à l''enseignant superviseur lors de sa visite de fin de stage \r\n', '30 %', 'emp', 1, NULL),
(5, 'Guide de stage ', 'du DEC régulier en intégration multimédia ', NULL, NULL, 'groupe', 1, NULL),
(6, 'Assurance responsabilité civile', NULL, NULL, NULL, 'ass', NULL, NULL),
(7, 'Santé et sécurité au travail', NULL, NULL, NULL, 'ass', NULL, NULL),
(8, 'Procédures en cas d''accident de travail', NULL, NULL, NULL, 'ass', NULL, NULL),
(9, 'Trucs', NULL, NULL, NULL, 'utile', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etapes`
--

CREATE TABLE IF NOT EXISTS `etapes` (
  `idetape` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vchnometape` varchar(255) NOT NULL,
  `enumetape` enum('0','1','2','3','4') NOT NULL,
  `intordre` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`idetape`),
  UNIQUE KEY `vchnometape` (`vchnometape`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `etapes`
--

INSERT INTO `etapes` (`idetape`, `vchnometape`, `enumetape`, `intordre`) VALUES
(1, 'Comment dénicher un stage personnel', '0', NULL),
(2, 'Informations utiles', '0', NULL),
(3, 'Stages à l''étranger', '0', NULL),
(4, 'Dès que votre stage est confirmé avec un employeur ...', '0', NULL),
(5, 'Localiser les employeurs', '0', NULL),
(6, 'Permis de conduire', '0', NULL),
(7, 'Inscivez-vous sur ces sites', '0', NULL),
(8, 'Consultez...', '0', NULL),
(9, 'Secteur multimédia', '0', NULL),
(10, 'Secteurs divers', '0', NULL),
(11, 'Stages offerts', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groupes`
--

CREATE TABLE IF NOT EXISTS `groupes` (
  `idgroupe` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchnomgroupe` varchar(20) DEFAULT NULL,
  `idprogramme` int(11) unsigned DEFAULT NULL,
  `idmembre` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`idgroupe`),
  KEY `FK_groupes_idprogramme` (`idprogramme`),
  KEY `FK_groupes_idmembre` (`idmembre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `groupes`
--

INSERT INTO `groupes` (`idgroupe`, `vchnomgroupe`, `idprogramme`, `idmembre`) VALUES
(1, 'TIM3_10', 5, 1),
(2, '1691', 9, 2),
(3, '1635', 9, NULL),
(4, '1636', 9, NULL),
(5, 'INFR3_10', 4, NULL),
(6, 'INFG3_10', 3, NULL),
(7, 'LCE.3R', 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `liens`
--

CREATE TABLE IF NOT EXISTS `liens` (
  `idlien` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchnomlien` varchar(150) NOT NULL,
  `urllien` varchar(255) NOT NULL,
  PRIMARY KEY (`idlien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `liens`
--

INSERT INTO `liens` (`idlien`, `vchnomlien`, `urllien`) VALUES
(1, 'Formulaire d''offre de stages', 'LCE_3R_fiche.doc'),
(2, 'Profil des étudiants', 'LCE_3R_profil.pdf'),
(3, 'Descriptif du programme', 'LCE_3R_formation.pdf'),
(4, 'Emploi Québec', 'http://emploiquebec.net/index.asp'),
(5, 'Emploi Étudiant', 'http://emploietudiant.qc.ca/fr/accueil.asp'),
(6, 'Workopolis', 'http://www.workopolis.com/FR/Theme/Default/Common/recruiter/posting-job.aspx?s_kwcid=TC|4163|workopolis||S||3330820596&gclid=CPzPg5PM55wCFQE73Aod1Gm2KQ'),
(7, 'Monster', 'http://francais.monster.ca/'),
(8, 'Conseil du trésor', 'http://www.tresor.gouv.qc.ca/'),
(9, 'ICRIQ', 'http://www.icriq.com/fr/'),
(10, 'Alliance Numérique', 'http://www.alliancenumerique.com/index.aspx'),
(11, 'STM', 'http://www.stcum.qc.ca/en-bref/formulaire.htm'),
(12, 'Descriptif de la formation', '420_AA_formation.pdf'),
(13, 'Compétences', '420_AA_profil.pdf'),
(14, 'Formulaire d''offres de stage', 'INFR3_10_fiche.doc'),
(15, 'Formulaire d''offres de stage', 'INFG3_10_fiche.doc'),
(16, 'Description du programme', '420_AC_formation.pdf'),
(17, 'Compétences', '420_AC_profil.pdf'),
(18, 'Rapport hebdomadaire', 'TIM3_10_rap_hebdo.doc'),
(19, 'Rapport final', 'TIM3_10_rapfinal.doc'),
(20, 'Évaluation', 'TIM3_10_annexeII.doc'),
(21, 'Assurance responsabilité civile', 'Certificat_d''assurance_juillet08.pdf'),
(22, 'Santé et sécurité au travail', 'Lois_accidents_travail.pdf'),
(23, 'Procédures en cas d''accident de travail', 'Procedures_accident_stage_non_remunere.pdf'),
(24, 'Guide de stage', 'TIM3_10_guide_30mars09.pdf'),
(25, 'Convention de stage', 'convention.pdf'),
(26, 'Formulaire de choix de stage', 'TIM3_10choix.doc');

-- --------------------------------------------------------

--
-- Table structure for table `logiciels`
--

CREATE TABLE IF NOT EXISTS `logiciels` (
  `idlogiciel` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchnomlogiciel` varchar(255) NOT NULL,
  `enumcategorie` enum('Bureautique','Programmation','Création','Vidéo/son','Web','Base de données') NOT NULL,
  PRIMARY KEY (`idlogiciel`),
  UNIQUE KEY `vchnomlogiciel` (`vchnomlogiciel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `logiciels`
--

INSERT INTO `logiciels` (`idlogiciel`, `vchnomlogiciel`, `enumcategorie`) VALUES
(1, 'Photoshop', 'Création'),
(2, 'Illustrator', 'Création'),
(3, 'ImageReady', 'Création'),
(4, 'InDesign', 'Création'),
(5, 'Acrobat', 'Création'),
(6, 'Flash', 'Création'),
(7, 'Dreamweaver', 'Web'),
(8, 'Virtools', 'Programmation'),
(9, 'Action Script', 'Programmation'),
(10, '(X)HTML', 'Web'),
(11, 'CSS', 'Web'),
(12, 'JavaScript', 'Web'),
(13, 'PHP', 'Programmation'),
(14, 'DHTML', 'Web'),
(15, 'Maya', 'Création'),
(16, 'Final Cut Pro', 'Vidéo/son'),
(17, 'After Effects', 'Vidéo/son'),
(18, 'SoundTrack', 'Vidéo/son'),
(19, 'FileMaker', 'Base de données'),
(20, 'MySQL', 'Base de données'),
(21, 'MS Office', 'Bureautique'),
(22, 'Word', 'Bureautique'),
(23, 'Excel', 'Bureautique'),
(24, 'PowerPoint', 'Bureautique'),
(25, 'Publisher', 'Bureautique'),
(26, 'Outlook', 'Bureautique'),
(27, 'Internet Explorer', 'Web'),
(28, 'FTP', 'Web'),
(29, 'Simple Comptable', 'Bureautique'),
(30, 'Access', 'Base de données'),
(31, 'Nero', 'Bureautique');

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `idmembre` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchnommembre` varchar(150) NOT NULL,
  `vchprenommembre` varchar(150) NOT NULL,
  `vchtitremembre` varchar(255) NOT NULL,
  `txtdescripmembre` text,
  `urlphotomembre` varchar(255) NOT NULL,
  `vchcourrielmembre` varchar(255) NOT NULL,
  `vchtelmembre` varchar(150) NOT NULL,
  `vchMotDePasse` varchar(32) NOT NULL,
  PRIMARY KEY (`idmembre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`idmembre`, `vchnommembre`, `vchprenommembre`, `vchtitremembre`, `txtdescripmembre`, `urlphotomembre`, `vchcourrielmembre`, `vchtelmembre`, `vchMotDePasse`) VALUES
(1, 'St-Laurent', 'Susan', 'Responsable du Service des stages de l''ITI', 'À l''emploi du Collège de Maisonneuve dans le secteur technologique depuis 1989, Susan St-Laurent fait partie d''une équipe de conseillers qui encadrent les services aux adultes, aux jeunes et aux entreprises.\r\n ', 'medias/membres/sstlaurent.jpg', 'Susan@cmaisonneuve.qc.ca', '4825', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Giraud', 'Chantal', 'Formation continue ITI', 'Mme Giraud est une ressource professionnelle qui fait partie de l''équipe du Service des stages.', 'medias/membres/cgiraud.jpg', 'chantal@cmaisonneuve.qc.ca', '4283', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `presente`
--

CREATE TABLE IF NOT EXISTS `presente` (
  `idtexte` int(11) unsigned NOT NULL,
  `idlien` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idtexte`,`idlien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE IF NOT EXISTS `programmes` (
  `idprogramme` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchnomprogramme` varchar(255) NOT NULL,
  `vchnoprogramme` varchar(150) NOT NULL,
  `txtdescriptprogramme` text,
  `txtdescriptlgprogramme` text,
  `datefinprogramme` date DEFAULT NULL,
  `enumformation` enum('FC','Rég.','FC/Rég.') NOT NULL,
  `enumdomaine` enum('Multimédia/web','Informatique','TGE','Bureautique') NOT NULL,
  `idlien` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`idprogramme`),
  UNIQUE KEY `vchnoprogramme` (`vchnoprogramme`),
  KEY `FK_programmes_idlien` (`idlien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`idprogramme`, `vchnomprogramme`, `vchnoprogramme`, `txtdescriptprogramme`, `txtdescriptlgprogramme`, `datefinprogramme`, `enumformation`, `enumdomaine`, `idlien`) VALUES
(1, 'Technologie de systèmes ordinés', '243.A0', 'Vous aimeriez concevoir et fabriquer des appareils programmables comme un robot, un simulateur de vol, des ordinateurs pour les voitures ou des moniteurs médicaux? Ce programme pourrait être pour vous. ', 'Concevez et fabriquez des appareils électroniques programmables comme les robots, les appareils de mesure et de contrôle, les moniteurs médicaux, les simulateurs de vols, les systèmes de contrôle de la température, les ordinateurs pour les voitures, etc.\r\nAnalysez des problèmes et imaginez les solutions.\r\nConcevez des instruments à l''aide d''outils de pointe en dessin assisté par ordinateur.', '2010-05-27', 'Rég.', 'TGE', NULL),
(2, 'Technologie de l''électronique, option Télécommunications', '243.BA', 'Vous aimeriez savoir « comment c''est fait », comment fonctionnent les réseaux de télécommunications et les équipements électroniques ?Ce programme pourrait être pour vous.', 'Vous êtes passionné par les mécanismes, les appareils, les circuits\r\nVous aimez manipuler de petites pièces, démonter et réparer des objets\r\nVous avez de la facilité pour les mathématiques', '2010-05-27', 'Rég.', 'TGE', NULL),
(3, 'Informatique de gestion - DEC en informatique ', '420.AA', 'Vous aimez travailler tant en solo qu''en équipe et vous êtes attiré par le monde de la programmation? Ce programme pourrait être pour vous.', 'Avez-vous envie de :\r\n\r\npasser beaucoup de temps à l''ordinateur;\r\n\r\nactualiser régulièrement vos connaissances des nouvelles technologies;\r\ndévelopper votre esprit logique et rationnel;\r\nfaire preuve d’initiative et chercher à innover, essentiellement dans les processus de résolution de problèmes.', '2010-05-27', 'Rég.', 'Informatique', NULL),
(4, 'Gestion de réseaux - DEC en informatique', '420.AC', 'Vous êtes passionné par tout ce qui touche les réseaux informatiques, les ordinateurs et leurs composantes et aimeriez partager vos connaissances? Ce programme pourrait être pour vous.', 'Avez-vous envie de :\r\nfournir un service à un client, en considérant qu’une panne de réseau informatique est la pire chose qui puisse arriver;\r\nfaire preuve d’initiative et chercher à innover, surtout en situation de résolution de problèmes;\r\nêtre une personne-ressource dans votre domaine;\r\nactualiser régulièrement vos connaissances des nouvelles technologies.', '2010-05-27', 'Rég.', 'Informatique', NULL),
(5, 'Techniques d''intégration multimédia', '582.A1', 'Vous aimeriez participer activement à toutes les étapes de la production d''un site Web ou d''un cédérom sous différents angles que ce soit par l''analyse, la programmation ou la création? Ce programme pourrait être pour vous.', 'Avez-vous envie de :\r\n\r\ntravailler dans un milieu hautement informatisé et créatif\r\n\r\ninnover et développer votre créativité\r\n\r\nutiliser votre pensée logique pour faire de la programmation\r\n\r\nréaliser des projets en faisant preuve d’autonomie et de débrouillardise', '2010-05-27', 'Rég.', 'Multimédia/web', NULL),
(6, 'Développement de sites Web et commerce électronique', 'NWE.0F', 'Vous aimeriez créer et développer des applications interactives sur le web, acquérir les concepts nécessaires à l''utilisation des principaux langages de codes et de programmation ainsi que développer une pensée marketing en ligne? Ce programme pourrait être pour vous.', 'Ce programme vise à former des spécialistes aptes à créer, maintenir et développer des applications interactives sur le Web.\r\n\r\nTout au long de ce programme vous acquerrez une aisance certaine à utiliser les principaux langages de codes et de programmation, vous apprendrez les fonctions avancées des principaux logiciels de création et de maintenance de site, sans oublier le fait que vous développerez une pensée marketing en ligne.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\ntravailler adéquatement sur plate-forme Windows en exploitant les fonctionnalités d''un réseau\r\n\r\nutiliser Internet comme outil de communication\r\n\r\nprogrammer sous différents langages de programmation tels que XML, JavaScript, HTML\r\n\r\nmettre en ligne une base de données avec PHP et ASP\r\n\r\ntraiter et monter des éléments numériques tels que des images, des photos, du son et de la vidéo\r\n\r\nexploiter le concept de pensée marketing\r\n\r\nanalyser l''exploitation et les contraintes d''un site transactionnel en incluant les aspects sécurité et législation\r\n\r\nadministrer des services Internet tels qu''un serveur DHCP et un serveur DNS.', NULL, 'FC', 'Multimédia/web', NULL),
(7, 'Infographie multimédia', 'NWE.1E', 'Vous êtes un infographiste d''expérience ou encore un graphiste ou un illustrateur désirant réorienter votre carrière? Vous aimeriez traiter des images, des animations en 2D/3D, de la vidéo et des sons? Ce programme pourrait être pour vous.', 'Ce programme vise à compléter la formation d''infographistes d''expérience. Il offre également à des graphistes, ou à des illustrateurs qui satisfont aux conditions d''admission, la possibilité d''amorcer une réorientation de carrière en infographie.\r\n\r\nTout au long de ce programme, vous serez amenés à traiter les éléments du multimédia tels les images et les animations 2D/3D, la vidéo et les sons.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\nutiliser un micro-ordinateur, ses périphériques et les réseaux de communication\r\n\r\nrechercher, organiser et transmettre de l''information\r\n\r\neffectuer le montage d''une présentation informatisée\r\n\r\ntraiter la bande son\r\n\r\nconcevoir et adapter le design d''un site\r\n\r\ncréer et transformer de façon artistique des images et des animations 2D ou 3D simples\r\n\r\ntraiter des images en mouvement\r\n\r\nassembler des éléments médiatiques à l''aide des codes appropriés\r\n\r\nanalyser la conception d''un projet et réaliser un produit multimédia en ligne\r\n\r\nexpérimenter les fonctions d''infographiste multimédia dans un milieu réel de travail.', NULL, 'FC', 'Multimédia/web', NULL),
(8, 'Programmation Internet ', 'LEA.5S', 'Vous détenez une expérience en programmation? Vous aimeriez vous approprier les concepts et les technologies utilisés dans le secteur du multimédia grâce à la programmation pour le Web et celle orientée objet? Vous souhaiteriez aussi acquérir les concepts nécessaires à l''exploitation et la mise en ligne de base de données? Ce programme pourrait être pour vous.', 'Ce programme vise à compléter la formation de personnes qui détiennent déjà une expérience en programmation. Il a été conçu pour le programmeur-analyste qui désire s''approprier les concepts, les technologies nouvelles et les langages de programmation utilisés dans le secteur du multimédia et liés au développement de produits pour Internet.\r\n\r\nTout au long de ce programme, vous acquerrez les notions de la programmation orientée objet et celle pour le Web. De plus, vous saurez exploiter et mettre en ligne des bases de données.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\nappliquer une approche de développement par objets\r\n\r\nprogrammer en Java et en C++\r\n\r\nprogrammer des produits multimédias dans un contexte Internet avec HTML, JavaScript, DHTML, XML\r\n\r\nadministrer et mettre en ligne des bases de données avec SQL, ASP et PHP\r\n\r\nparticiper à l''analyse, à la conception et au développement d''une application client / serveur pour le Web\r\n\r\nmettre en œuvre une application en milieu de travail.', NULL, 'FC', 'Multimédia/web', NULL),
(9, 'Soutien administratif ', 'LCE.3R', 'Vous aimeriez travailler dans un bureau et voir au bon déroulement des tâches administratives? Ce programme bilingue pourrait être pour vous.', 'Ce programme bilingue vise à former des spécialistes aptes à assurer le bon déroulement des tâches administratives reliées à une organisation.\r\n\r\nS''appuyant sur le DEC en Techniques de bureautique, profil micro-édition et hypermédia, ce programme comporte quatre principaux volets : langue, communication et organisation, exploitation des outils et des logiciels de bureau ainsi que l''utilisation des logiciels de base en multimédia. Il se termine par un projet de fin d''études. De plus, une certaine couleur locale est donnée à travers un cours lié au commerce électronique et à la législation.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\nutiliser correctement un ordinateur connecté en réseau\r\n\r\nrechercher et gérer de l''information notamment en utilisant Internet\r\n\r\nécrire, corriger et traduire des documents en français et en anglais\r\n\r\nconcevoir, mettre en page et produire des articles publicitaires, des journaux, des cahiers de formation, etc.\r\n\r\nmanipuler, extraire et présenter des informations à l''aide d''un tableur et d''un logiciel de bases de données\r\n\r\nconcevoir des présentations multimédia\r\n\r\ncréer des pages Web et mettre à jour des sites Internet simples.', NULL, 'FC', 'Bureautique', NULL),
(10, 'Cisco-Linux ', 'LEA.5R', 'Vous possédez déjà l''expérience de l''exploitation de réseaux informatiques et aimeriez acquérir les concepts nécessaires pour réussir les examens de certification CCNA de Cisco et LPIC de Linux? Ce programme pourrait être pour vous.', 'Ce programme vise à actualiser les connaissances de personnes déjà qualifiées en exploitation de réseaux informatiques.\r\n\r\nCe programme couvre le contenu des examens de certification suivants : CCNA 3,0 de Cisco, LPIC (Linux Professional Institute Certification).\r\n\r\nCe programme se subdivise en deux grands domaines d''applications : les applications liées à la technologie Linux et les applications liées à la technologie Cisco.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\ngérer des stations de travail sous environnement Linux\r\n\r\ngérer des serveurs de fichiers et des serveurs Internet sous Linux\r\n\r\nplanifier et implanter un réseau étendu avec des routeurs et des commutateurs Cisco\r\n\r\ndéfinir des politiques et procédures de sécurité et les mettre partiellement en place sous Linux et avec du matériel d''interconnexion Cisco.', NULL, 'FC', 'Informatique', NULL),
(11, 'Conception d''applications avec Oracle', 'LEA.8A', 'Vous aimeriez créer des bases de données et des programmes informatiques avec Oracle? Ce programme pourrait être pour vous.', 'Ce programme vise à former des spécialistes qui occuperont les fonctions de programmeurs-analystes et de concepteurs de bases de données sur produits Oracle.\r\n\r\nCe programme se subdivise en quatre grandes parties : la programmation, la conception de bases de données, la gestion de projets ainsi que l''initiation à la gestion et à l''administration de bases de données et de systèmes centralisés de gestion de l''information.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\nmodéliser des données et des flux de données\r\n\r\nprogrammer, développer des applications de bases de données et développer du contenu Web dynamique avec Java\r\n\r\nconsulter des bases de données à l''aide de Oracle SQL et SQL *Plus\r\n\r\ndévelopper et contrôler des applications à l''aide de Oracle PL/SQL\r\n\r\ndévelopper des formulaires, des rapports et des applications avec Oracle Developer\r\n\r\ngérer la modélisation et gérer des écrans à l''aide de Oracle Designer\r\n\r\ndéployer une application sur le Web\r\n\r\nappliquer une technique d''assurance qualité\r\n\r\nparticiper à l''analyse, à la planification et à la réalisation d''un projet de conception et d''un projet d''intégration d''une application\r\n\r\nêtre initié aux tâches d''un administrateur de bases de données\r\n\r\nêtre initié au travail dans un contexte de gestion centralisée (ERP).', NULL, 'FC', 'Informatique', NULL),
(12, 'Gestion de réseaux ', 'LEA.82', 'Vous aimeriez gérer un réseau Microsoft ou Linux et paramétrer du matériel d''interconnexion Cisco tout en acquérant les concepts nécessaires pour réussir les examens de certification de MCSE de Microsoft, CCNA de Cisco et LPIC de Linux? Ce programme pourrait être pour vous.', 'Ce programme vise à former des spécialistes aptes à gérer, en tout ou en partie, un réseau Microsoft ou Linux et à paramétrer du matériel d''interconnexion Cisco.\r\n\r\nCe programme couvre le contenu des examens de certification suivants : MCSE de Microsoft, CCNA 3,0 de Cisco, et LPIC (Linux Professionnal Institute Certification).\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\ngérer des stations de travail sous environnement Linux et Microsoft\r\n\r\ngérer des serveurs de fichiers et des serveurs Internet sous plates-formes Windows et Linux\r\n\r\ngérer un serveur de messagerie sous plate-forme Microsoft à l''aide de Exchange Server\r\n\r\nimplémenter, administrer et dépanner des systèmes informatiques équipés de Microsoft Systems Management Server (SMS)\r\n\r\nplanifier et implanter un réseau étendu avec du matériel Cisco\r\n\r\ndéfinir des politiques et procédures de sécurité et les mettre partiellement en place sous les différentes plates-formes étudiées.', NULL, 'FC', 'Informatique', NULL),
(13, 'Administration et gestion de réseaux Microsoft', 'LEA.1K ', 'Vous aimeriez planifier, installer et optimiser un réseau Microsoft dans le respect des normes et procédures de sécurité? Vous souhaiteriez acquérir les concepts nécessaires pour réussir les examens de certification MCP, MCSE et MCSA de Microsoft? Ce programme pourrait être pour vous.', 'Ce programme vise à former des spécialistes aptes à planifier, installer et optimiser un réseau Microsoft dans le respect des normes et procédures de sécurité, tout en utilisant les outils d''administration appropriés.\r\n\r\nCe programme couvre le contenu des examens de certification suivants : MCP de Microsoft 2003 - Microsoft Certified Professional, MCSE de Microsoft 2003- Microsoft Certified Systems Engineer et MCSA de Microsoft 2003 - Microsoft Certified System Administrator.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\ngérer des stations de travail sous environnement Microsoft Windows XP Professional\r\n\r\ngérer un serveur de fichiers Microsoft Windows Server 2003\r\n\r\ngérer un serveur Intranet/Internet dans un environnement Microsoft Windows Server 2003\r\n\r\nimplémenter et dépanner une infrastructure de services d''annuaire Microsoft Windows Server 2003 Active Directory\r\n\r\nmettre à jour et administrer une infrastructure de messagerie fiable et sécurisée en utilisant Microsoft Exchange 2003\r\n\r\ndéfinir des politiques et procédures de sécurité et les mettre partiellement en place sous plate-forme Microsoft Windows 2003\r\n\r\nassurer la gestion d''un parc informatique dont les postes sont reliés à un serveur de fichiers, à un serveur Internet, à un serveur Active Directory, à un serveur de messagerie et à un pare-feu.', NULL, 'FC', 'Informatique', NULL),
(14, 'Animation et interactivité 2D / 3D ', 'NWE.23', 'Vous travaillez déjà dans le domaine du multimédia en ligne et vous aimeriez créer des sites de quatrième génération? Ce programme pourrait être pour vous.', 'Ce programme est une formation de perfectionnement qui permettra aux travailleurs qui œuvrent dans le domaine du multimédia en ligne de créer des sites de quatrième génération.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\nappliquer des notions des langages esthétiques\r\n\r\ncréer des animations linéaires en 2D\r\n\r\ncréer des animations linéaires en 3D\r\n\r\ncréer des vidéos numériques\r\n\r\ncréer des applications multimédias interactives en 2D\r\n\r\ncréer des applications multimédias interactives en 3D\r\n\r\ntraiter des bandes sons pour diffusion sur Internet.', NULL, 'FC', 'Multimédia/web', NULL),
(15, 'Production 3D', 'NWE.2H', 'Le monde de l''animation 3D, des effets spéciaux ou la postproduction vous passionne et vous aimeriez travailler dans les studios de télévision, dans les entreprises de jeux vidéo ou dans les entreprises spécialisées en production multimédia? Ce programme pourrait être pour vous.', 'Ce programme est une formation de perfectionnement qui vise à former des artistes 3D. La structure de ce programme de formation, dont le cursus est articulé sur les maillons communs des trois chaînes de production 3D (animation 3D, effets spéciaux et jeu vidéo), permet notamment d''enseigner et de faire comprendre aux étudiants comment l''industrie fonctionne. Cette structure permet aux étudiants d''acquérir des compétences dans un contexte de réalisation s''approchant de ce que l''on retrouve en entreprise. Elle permet également une transition harmonieuse avec l''environnement réel de production sur le marché du travail.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\nexploiter les fonctions de base des logiciels de production 3D\r\n\r\nanalyser les domaines de l''animation 3D, des effets spéciaux et du jeu vidéo\r\n\r\nanalyser les fonctions de travail et les contextes de production 3D\r\n\r\nexploiter des techniques artistiques destinées à une production 3D\r\n\r\nconcevoir une production 3D\r\n\r\nmodéliser des éléments 3D\r\n\r\ncréer et ajuster des matériaux, des textures et des algorithmes de rendu 3D\r\n\r\norganiser la hiérarchie, le système d''articulation et de déformation d''un élément 3D\r\n\r\ncréer et animer des caméras 3D\r\n\r\nanimer une scène 3D\r\n\r\ncréer des effets visuels numériques 3D et de la simulation dynamique 3D\r\n\r\néclairer une scène 3D\r\n\r\nrendre une scène 3D en image fixe ou animée\r\n\r\nutiliser des techniques de postproduction destinées à une production 3D\r\n\r\ncréer une application 3D temps-réel\r\n\r\nréaliser une production 3D.', NULL, 'FC', 'Multimédia/web', NULL),
(16, 'Téléphonie IP', 'ELJ.2W', 'Vous travaillez déjà dans le domaine des télécommunications ou de la gestion de réseaux et vous aimeriez savoir ce que les avancées technologiques, la disponibilité des infrastructures et la maîtrise du protocole IP peuvent fournir aux clients? Ce programme pourrait être pour vous.', 'Ce programme de perfectionnement vise à compléter la formation d''un spécialiste en télécommunications ou en gestion de réseaux. Cette spécialisation lui permettra de réaliser les tâches techniques reliées au transport de la voix sur les réseaux à protocole Internet.\r\n\r\nCe programme couvre le contenu des examens de plusieurs certifications de deux fabricants de matériel de téléphonie IP : Cisco et Nortel.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\névaluer l''architecture et le fonctionnement d''un réseau de téléphonie traditionnelle\r\n\r\nimplanter un réseau de téléphonie IP avec et sans fil\r\n\r\nplanifier la migration vers la téléphonie IP\r\n\r\nmaximaliser les fonctionnalités des systèmes de traitement de la voix\r\n\r\nassurer la fiabilité et la sécurité du réseau convergé\r\n\r\nentretenir un réseau de téléphonie IP\r\n\r\nassurer l''évolution du réseau de téléphonie IP\r\n\r\nconcevoir un réseau de téléphonie IP.', NULL, 'FC', 'TGE', NULL),
(17, 'Développement d''applications informatiques', 'Perfectionnement ', 'Vous détenez une expérience en programmation et vous aimeriez acquérir une expertise en programmation Web? Ce programme pourrait être pour vous.', 'Ce programme bilingue et non crédité vise à offrir aux programmeurs une expertise en programmation Web.\r\n\r\nChacun des sept modules composant le programme est préalable au suivant, à l''exception du module A qui sera donné tout au long de la formation. Chacun des modules comporte plusieurs cours qui peuvent être donnés en français ou en anglais.\r\n\r\nAu terme de la formation, vous pourrez :\r\n\r\nutiliser différentes technologies de programmation Web\r\n\r\nconcevoir, développer, tester et déployer des applications Web multiniveaux\r\n\r\nutiliser les technologies Java et .NET pour développer des applications orientées-objets\r\n\r\ncomprendre le contexte technologique, l''architecture et les composantes des applications Web\r\n\r\nutiliser les technologies XML dans le développement d''applications informatiques\r\n\r\ntravailler dans un environnement bilingue\r\n\r\ntravailler en équipe tout en étant autonome.', NULL, 'FC', 'Informatique', NULL),
(18, 'Perfectionnement en développement d''applications informatiques', '080.02', NULL, NULL, NULL, 'FC', 'Informatique', NULL),
(19, 'Technologie de l''électronique (télécommunications et ordinateurs)', '243.11', NULL, NULL, NULL, 'Rég.', 'TGE', NULL),
(20, 'Technologie de conception électronique ', '243.16', NULL, NULL, NULL, 'Rég.', 'TGE', NULL),
(21, 'Bureautique avec spécialisation Adjoint(e) de direction', 'LCE.2R', '<p>La reconnaissance des acquis et des compétences (RAC) en bureautique vise à vous reconnaître le plus grand nombre de compétences possible et à vous offrir une formation d''appoint, qui vous permettra d''exercer la profession d''adjoint(e) de direction.</p>\r\n\r\n\r\n<p>Ce programme d’AEC vous offre une plus-value intéressantes car il intègre des compétences émergentes comme :</p>\r\n<ul>\r\n    <li>Méthodes de résolution de problèmes</li>\r\n    <li>Organisation d’évènements spéciaux</li>\r\n    <li>Spécialisation d’adjoint(e) de direction</li>\r\n</ul>', NULL, '2009-11-04', 'FC', 'Bureautique', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ressources`
--

CREATE TABLE IF NOT EXISTS `ressources` (
  `idressource` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchnomressource` varchar(255) NOT NULL,
  `txtdescripressource` text,
  `urlmedia` varchar(255) DEFAULT NULL,
  `idetape` int(11) unsigned NOT NULL,
  `idlien` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`idressource`),
  UNIQUE KEY `vchnomressource` (`vchnomressource`),
  KEY `FK_ressources_idetape` (`idetape`),
  KEY `FK_ressources_idlien` (`idlien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `ressources`
--

INSERT INTO `ressources` (`idressource`, `vchnomressource`, `txtdescripressource`, `urlmedia`, `idetape`, `idlien`) VALUES
(1, 'Quoi faire si votre stage est trouvé ?', NULL, NULL, 1, NULL),
(2, 'Où trouver des employeurs potentiels ?', NULL, NULL, 1, NULL),
(3, 'Service de placement', 'Visitez le site et voyez la responsable des stages si un emploi vous intéresse.', NULL, 1, NULL),
(4, 'Se préparer à l''entrevue', NULL, NULL, 1, NULL),
(5, 'Compétences recherchées', 'par les employeurs', NULL, 2, NULL),
(6, 'Le guide de recherche d''emploi d''Emploi-Québec', NULL, NULL, 2, NULL),
(7, 'Emploi-Québec', '(inscription comme candidat) - Informations sur le marché du travail \r\n', NULL, 7, NULL),
(8, 'Placement étudiant du Québec', '(12 mois par année)', NULL, 7, NULL),
(9, 'Workopolis', 'site d''emplois', NULL, 7, NULL),
(10, 'Monster.ca', 'Site d''emplois', NULL, 7, NULL),
(11, 'Conseil du trésor', NULL, NULL, 8, NULL),
(12, 'ICRIQ', 'Banque d’information industrielle sur près de 30 000 entreprises', NULL, 8, NULL),
(13, 'Alliance Numérique', NULL, NULL, 9, NULL),
(14, 'STM', 'Société de transport de Montréal', NULL, 10, NULL),
(15, 'Formulaire de choix de stage', NULL, NULL, 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

CREATE TABLE IF NOT EXISTS `stages` (
  `idstage` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `txtdescripstage` text NOT NULL,
  `booremunerationstage` tinyint(1) NOT NULL,
  `datedebstage` date DEFAULT NULL,
  `datefinstage` date DEFAULT NULL,
  `datelimitestage` date DEFAULT NULL,
  `dureestage` tinyint(3) unsigned DEFAULT '3',
  `idgroupe` int(11) unsigned NOT NULL,
  `idlien` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`idstage`),
  KEY `FK_stages_idgroupe` (`idgroupe`),
  KEY `FK_stages_idlien` (`idlien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`idstage`, `txtdescripstage`, `booremunerationstage`, `datedebstage`, `datefinstage`, `datelimitestage`, `dureestage`, `idgroupe`, `idlien`) VALUES
(1, 'Stage de six semaines à temps plein dans une entreprise œuvrant en multimédia. ', 0, '2010-04-15', '2010-05-25', '2010-03-30', 6, 1, NULL),
(2, '3 semaines, à temps complet (stage non rémunéré) ', 0, NULL, NULL, '2009-08-31', 3, 2, NULL),
(3, '3 semaines, à temps complet', 0, '2010-04-12', '2010-04-30', '2010-01-31', 3, 3, NULL),
(4, '3 semaines, à temps complet', 0, '2010-04-12', '2010-04-30', '2010-01-31', 3, 4, NULL),
(5, '10 semaines, 4 jours par semaine (du mardi au vendredi)', 0, '2010-01-26', '2010-04-06', '2009-12-31', 10, 5, NULL),
(6, '13 semaines, 4 jours par semaine (du mardi au vendredi), stage non rémunéré', 0, '2010-01-26', '2010-04-27', '2010-01-31', 13, 6, NULL),
(7, 'Stage de six semaines à temps plein dans une entreprise œuvrant en multimédia. ', 0, '2010-04-15', '2010-05-25', '2010-03-30', 6, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suit`
--

CREATE TABLE IF NOT EXISTS `suit` (
  `idetape` int(11) unsigned NOT NULL,
  `idgroupe` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idetape`,`idgroupe`),
  KEY `FK_suit_idgroupe` (`idgroupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suit`
--

INSERT INTO `suit` (`idetape`, `idgroupe`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `textes`
--

CREATE TABLE IF NOT EXISTS `textes` (
  `idtexte` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchtitretexte` varchar(255) NOT NULL DEFAULT '',
  `txtcontenutexte` text NOT NULL,
  `enumtypetexte` enum('groupe','utile','') DEFAULT NULL,
  `idgroupe` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`idtexte`),
  KEY `FK_textes_idgroupe` (`idgroupe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `textes`
--

INSERT INTO `textes` (`idtexte`, `vchtitretexte`, `txtcontenutexte`, `enumtypetexte`, `idgroupe`) VALUES
(1, 'Trucs pour bien prévoir l''accueil d''un stagiaire', '<dl>\r\n<dt>Planification des tâches</dt>\r\n\r\n<dd>La conception théorique du projet de stage doit être complétée avant l''accueil du stagiaire </dd>\r\n<dd>\r\nVous devez disposer à l''avance du matériel brut requis (textes, logos, illustrations, photos, etc.) sinon le projet pourrait être difficile à réaliser durant le terme du stage \r\n</dd>\r\n<dd>\r\nPrévoyez un plan de travail ainsi qu''une  liste de tâches à réaliser par le stagiaire \r\n</dd>\r\n<dd>\r\nFaites connaître au stagiaire son  échéancier ainsi que  les objectifs qui sont visés par son travail  (idéalement, par écrit, à son arrivée) \r\n</dd>\r\n<dt>Espace de travail et équipement</dt>\r\n<dd>\r\nDonnez au stagiaire un accès aux ressources et outils requis (ordinateur, logiciels, périphériques, codes d''accès) \r\n</dd>\r\n<dt>Travail d''équipe </dt>\r\n<dd>\r\nPrésentez le stagiaire aux divers collaborateurs du projet dans votre organisation \r\n</dd>\r\n<dd>\r\nVeillez à l''intégration du stagiaire au travail d''équipe continu, dans la mesure des possibilités  \r\n</dd>\r\n<dt>Aide technique</dt>\r\n<dd>\r\nFaites connaître au stagiaire les ressources techniques à sa disposition, ainsi que sa marge de manoeuvre pour la résolution des problèmes \r\n</dd>\r\n<dd>\r\nLe stagiaire étant en situation d''apprentissage, assurez-vous de lui donner le support technique requis pour fonctionner efficacement \r\n</dd>\r\n<dt>Communications</dt>\r\n<dd>\r\nConsidérez la communication interpersonnelle comme votre meilleur atout pour résoudre un ensemble de situations \r\n</dd>\r\n<dd>\r\nAu besoin, communiquez avec l''enseignant désigné par le Collège comme superviseur du stagiaire afin de formuler vos commentaires ou questions pour favoriser l''intégration du stagiaire à vos opérations \r\n</dd>\r\n</dl>', '', NULL),
(2, 'Encadrement, supervision et évaluation du stage ', '<p>CONGÉS : les 10 avril, 13 avril, 18 mai (fériés) et 13 mai (épreuve uniforme de français)</p>\r\n<p>Le stage crédité faisant partie du DEC en Techniques d’intégration multimédia est d’une durée de six semaines à temps complet\r\n(210 heures). Divers éléments sont évalués, en cours et en fin de stage, et une note finale est attribuée par l’enseignant*\r\nà l’étudiant, à partir de plusieurs indicateurs listés dans le tableau ci-dessous.</p>\r\n<p>\r\n* Le Règlement sur la politique des apprentissages du Collège de Maisonneuve reconnaît à l’enseignant la responsabilité finale de l’attribution d’une note à ses étudiants, à partir des indicateurs</p>', '', NULL),
(3, 'Calendrier 2009-2010 des stages ', '<p>Renseignements : 514-254-7131, p. 4283 \r\n<a href="mailto:stages@cmaisonneuve.qc.ca">stages@cmaisonneuve.qc.ca</a> </p>\r\n\r\n', '', NULL),
(4, 'Trucs relatifs à l''entrevue', '<ul>\r\n<li>Prenez note à l''avance du nom de la personne que vous devez rencontrer lors de l''entrevue. </li>\r\n\r\n<li>Notez l''heure et l''adresse exactes de l''entrevue. Soyez ponctuel! </li>\r\n\r\n<li>Utilisez les outils Web pour calculer votre temps de transport grâce au code postal de l''entreprise. Validez si nécessaire avec l''employeur les directions pour vous rendre au lieu de l''entrevue. </li>\r\n\r\n<li>Apportez une copie de l''offre de stage pour en discuter et éclaircir les points sur lesquels vous auriez des questions. </li>\r\n\r\n<li>Apportez une ou deux copies de votre CV. Cela peut vous servir d''aide-mémoire si nécessaire en cours d''entrevue. D''autre part, vous pourriez en remettre un exemplaire à tout intervieweur qui ne l''a pas déjà. </li>\r\n\r\n<li>Visitez le site Web de l''organisation qui propose le stage. Essayez de retenir au minimum un élément que vous appréciez sur ce site.</li>  \r\n\r\n<li>Préparez-vous à répondre aux questions pratiquement universelles: Pourquoi désirez-vous réaliser ce stage? Qu''est-ce qui vous plaît dans notre organisation? Quelles sont vos forces en rapport avec ce stage? Disposez-vous d''un portfolio? </li>\r\n\r\n<li>Ayez du papier à votre disposition pour prendre des notes durant l''entrevue. </li>\r\n\r\n<li>Retenez que les employeurs vont chercher à identifier vos qualités personnelles (ex.: travail d''équipe, débrouillardise, autonomie) pour vous distinguer parmi plusieurs candidats qui ont des profils techniques semblables. </li>\r\n</ul>', '', NULL),
(5, 'Localiser les employeurs ', '<dl>\r\n<dt>Transport en commun</dt>\r\n<dd>Calculez à l''avance votre trajet et \r\nvotre temps de transport grâce aux sites suivants :</dd>\r\n<dd><a href="http://www.stcum.qc.ca/azimuts/index.htm"><img border="0" src="medias/localiser/stm.jpg" width="173" height="55"></a></dd>\r\n<dd><a href="http://www.rtl-longueuil.qc.ca/"><img border="0" src="medias/localiser/rtl.jpg" width="173" height="55"></a></dd>\r\n<dd><a href="http://www.stl.laval.qc.ca/w/simulateur/index.wcs?EFF=OD"><img border="0" src="medias/localiser/stl.jpg" width="173" height="55"></a></dd>\r\n</dl>\r\n<dl>\r\n<dt>Cartes géographiques</dt>\r\n<dd>Obtenez les indications pour vous \r\nrendre à une certaine adresse en fournissant le code postal de l''employeur à </dd>\r\n\r\n<dd><a href="http://www.mapquest.ca/directions/">MapQuest</a>   ou   <a href="http://ca.maps.yahoo.com/">Yahoo!</a>  </dd>\r\n</dl>\r\n', '', NULL),
(6, 'Compétences recherchées par les employeurs', '<dl>\r\n<dt>SELON EMPLOI-QUÉBEC...</dt>\r\n\r\n \r\n<dd>Voici les compétences personnelles les plus recherchées par les employeurs du domaine de l''informatique :\r\n<ul>\r\n      <li>Capacité à travailler en équipe </li>\r\n      <li>Sens de l''analyse</li> \r\n      <li>Souci du détail</li> \r\n      <li>Clarté de la communication orale et écrite </li>\r\n      <li>Autonomie</li> \r\n      <li>Sens de l''organisation </li>\r\n      <li>Formulation et réaction face à la critique</li> \r\n      <li>Leadership</li>\r\n</ul>\r\n</dd>\r\n</dl>', '', NULL),
(7, 'Informations concernant l''obtention du permis de conduire', '<ul>\r\n<li><a href="http://www.saaq.gouv.qc.ca/publications/permis/bientot_promenade.pdf">Comment obtenir un permis de conduire</a> délivré par la Société de l''assurance automobile du Québec <acronym title="Société de l''assurance automobile du Québec">(SAAQ)</acronym></li> \r\n\r\n<li>Page d''accueil du site Web de la <a href="http://www.saaq.gouv.qc.ca"><acronym title="Société de l''assurance automobile du Québec">SAAQ</acronym></a> </li>\r\n\r\n<li>Localiser un bureau de la <a href="http://www.saaq.gouv.qc.ca/recherche/recherche_service.php">SAAQ</a> </li>   \r\n\r\n<li>Obtenir une copie de votre état de <a href="http://www.saaq.gouv.qc.ca/saaqclic/grandpublic/etatdossier/index.html">dossier de conduite</a>  </li>\r\n\r\n<li>L''État du dossier de conduite est un document imprimé qui peut être obtenu en vous présentant dans les centres de service de la Société assurance auto du Québec (mais non chez les mandataires). Ce document atteste la catégorie de permis dont vous êtes titulaire et confirme le nombre de points d''inaptitude enregistrés à votre dossier ainsi que les infractions.</li>\r\n\r\n<li>L''état de dossier de conduite est gratuit et il est délivré sur le champ. Vous devrez présenter votre permis de conduire au comptoir pour l''obtenir. ATTENTION. Les bureaux de sociétés mandataires de la SAAQ ne délivrent pas l''État du dossier de conduite.</li>\r\n</ul>', '', NULL),
(8, 'Démarche personnelle pour trouver et faire valider votre stage ', '<h2>La recherche du stage : une co-responsabilité «Collège - étudiant» </h2>\r\n\r\n<p>Le Service des stages fait une large promotion auprès des employeurs pour trouver des offres de stages dans votre domaine; vous avez toutefois la responsabilité de contribuer avec nous à trouver votre propre stage. \r\n\r\nVotre implication personnelle a en effet de meilleures chances de mener à ce que votre stage corresponde davantage à vos centres d''intérêts et qu''il puisse se transformer éventuellement en emploi. \r\n\r\nPour vos démarches personnelles, vous devez absolument identifier des employeurs qui sont distincts de ceux que le Collège fera connaître lors des périodes d''affichages d''offres de stages; il vous donc est interdit de proposer vos services directement aux employeurs dont nous afficherons les offres de stages à un groupe de finissants, sauf si le Service des stages vous y assigne comme candidat à une entrevue. \r\n\r\nNous vous encourageons à effectuer des démarches auprès des employeurs dont vous trouverez la liste dans notre page des «meilleures suggestions». </p>\r\n\r\n<h2>Votre stage est  maintenant trouvé? </h2>\r\n\r\n<p>L''employeur qui accepte de vous proposer un stage devra compléter le formulaire d''offre de stage sur le site du Service des stages et nous le transmettre par courriel pour validation des tâches proposées. N''oubliez pas de mentionner à l''employeur d''inscrire votre nom dans la case prévue à cette fin dans le formulaire, pour confirmer que ce stage s''adresse spécifiquement à vous. \r\n\r\nLa conseillère aux stages procèdera à la validation des tâches du stages et communiquera avec l''employeur par téléphone pour accuser réception de la documentation. \r\n\r\nUn courriel de confirmation finale sera transmis à l''employeur incluant une copie pour vous-même. \r\n\r\nUne convention de stage devra être signée, dans l''ordre, par l''étudiant(e), par le Collège et par l''employeur. Vous aurez éventuellement votre copie de ce document. </p>\r\n', '', NULL),
(9, 'Encadrement, supervision et évaluation du stage', '* Le Règlement sur la politique des apprentissages du Collège de Maisonneuve reconnaît à l’enseignant la responsabilité finale de l’attribution d’une note à ses étudiants, à partir des indicateurs.', 'utile', NULL),
(10, '', 'Divers éléments sont évalués, en cours et en fin de stage, et une note finale est attribuée par l’enseignant*\r\nà l’étudiant, à partir de plusieurs indicateurs listés dans le tableau ci-dessous.', 'utile', NULL),
(11, 'CONGÉS : les 10 avril, 13 avril, 18 mai (fériés) et 13 mai (épreuve uniforme de français)', 'Le stage crédité faisant partie du DEC en Techniques d’intégration multimédia est d’une durée de six semaines à temps complet\r\n(210 heures).', 'groupe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `traite`
--

CREATE TABLE IF NOT EXISTS `traite` (
  `idprogramme` int(11) unsigned NOT NULL,
  `idlogiciel` int(11) unsigned NOT NULL,
  PRIMARY KEY (`idprogramme`,`idlogiciel`),
  KEY `FK_traite_idlogiciel` (`idlogiciel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `traite`
--

INSERT INTO `traite` (`idprogramme`, `idlogiciel`) VALUES
(5, 1),
(9, 1),
(5, 2),
(9, 2),
(5, 3),
(5, 4),
(9, 4),
(5, 5),
(9, 5),
(5, 6),
(5, 7),
(9, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(9, 21),
(9, 22),
(9, 23),
(9, 24),
(9, 25),
(9, 26),
(9, 27),
(9, 28),
(9, 29),
(9, 30),
(9, 31);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vchloginuser` varchar(150) NOT NULL,
  `vchpwduser` varchar(150) NOT NULL,
  `idgroupe` int(11) unsigned NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `FK_users_idgroupe` (`idgroupe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `vchloginuser`, `vchpwduser`, `idgroupe`) VALUES
(1, 'TIM3_10', '123456', 1),
(2, '1691', '78945', 2),
(3, 'steven', '827ccb0eea8a706c4c34a16891f84e7b', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `FK_documents_idgroupe` FOREIGN KEY (`idgroupe`) REFERENCES `groupes` (`idgroupe`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_documents_idlien` FOREIGN KEY (`idlien`) REFERENCES `liens` (`idlien`) ON DELETE CASCADE;

--
-- Constraints for table `groupes`
--
ALTER TABLE `groupes`
  ADD CONSTRAINT `FK_groupes_idmembre` FOREIGN KEY (`idmembre`) REFERENCES `membres` (`idmembre`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_groupes_idprogramme` FOREIGN KEY (`idprogramme`) REFERENCES `programmes` (`idprogramme`) ON DELETE CASCADE;

--
-- Constraints for table `programmes`
--
ALTER TABLE `programmes`
  ADD CONSTRAINT `FK_programmes_idlien` FOREIGN KEY (`idlien`) REFERENCES `liens` (`idlien`) ON DELETE CASCADE;

--
-- Constraints for table `ressources`
--
ALTER TABLE `ressources`
  ADD CONSTRAINT `FK_ressources_idetape` FOREIGN KEY (`idetape`) REFERENCES `etapes` (`idetape`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ressources_idlien` FOREIGN KEY (`idlien`) REFERENCES `liens` (`idlien`) ON DELETE CASCADE;

--
-- Constraints for table `stages`
--
ALTER TABLE `stages`
  ADD CONSTRAINT `FK_stages_idgroupe` FOREIGN KEY (`idgroupe`) REFERENCES `groupes` (`idgroupe`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_stages_idlien` FOREIGN KEY (`idlien`) REFERENCES `liens` (`idlien`) ON DELETE CASCADE;

--
-- Constraints for table `suit`
--
ALTER TABLE `suit`
  ADD CONSTRAINT `FK_suit_idetape` FOREIGN KEY (`idetape`) REFERENCES `etapes` (`idetape`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_suit_idgroupe` FOREIGN KEY (`idgroupe`) REFERENCES `groupes` (`idgroupe`) ON DELETE CASCADE;

--
-- Constraints for table `textes`
--
ALTER TABLE `textes`
  ADD CONSTRAINT `FK_textes_idgroupe` FOREIGN KEY (`idgroupe`) REFERENCES `groupes` (`idgroupe`) ON DELETE CASCADE;

--
-- Constraints for table `traite`
--
ALTER TABLE `traite`
  ADD CONSTRAINT `FK_traite_idlogiciel` FOREIGN KEY (`idlogiciel`) REFERENCES `logiciels` (`idlogiciel`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_traite_idprogramme` FOREIGN KEY (`idprogramme`) REFERENCES `programmes` (`idprogramme`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_idgroupe` FOREIGN KEY (`idgroupe`) REFERENCES `groupes` (`idgroupe`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
