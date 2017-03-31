-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 02:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `name`, `path`) VALUES
(1, 'file1', 'export.xlsx'),
(2, 'test', 'export.xlsx'),
(3, 'test', 'export.xlsx'),
(4, 'file1', 'export.xlsx'),
(5, 'file1', 'export.xlsx'),
(6, 'file1', 'export.xlsx'),
(7, 'file1', 'export.xlsx'),
(8, 'file1', 'export.xlsx'),
(9, 'file1', 'export.xlsx'),
(10, 'file1', 'export.xlsx'),
(11, 'Mohamed Ali', 'export.xlsx'),
(12, 'file1', 'export.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8F3F68C5A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `meet`
--

CREATE TABLE IF NOT EXISTS `meet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `npa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_modif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_modif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `age_enfant1` int(11) DEFAULT NULL,
  `age_enfant2` int(11) DEFAULT NULL,
  `age_enfant3` int(11) DEFAULT NULL,
  `age_enfant` int(11) DEFAULT NULL,
  `age_conjoint` int(11) DEFAULT NULL,
  `non_sante` int(11) DEFAULT NULL,
  `nom_medicament` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subside_combien` int(11) DEFAULT NULL,
  `adrese_modif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localite_modif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NPA_modif` int(11) DEFAULT NULL,
  `etage_app` int(11) DEFAULT NULL,
  `code_acces` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `natel` int(11) DEFAULT NULL,
  `commentaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mr_caisse_maladie_base` int(11) DEFAULT NULL,
  `mr_caisse_maladie_LCA` int(11) DEFAULT NULL,
  `enfant1_caisse_maladie_base` int(11) DEFAULT NULL,
  `enfant1_caisse_maladie_LCA` int(11) DEFAULT NULL,
  `enfant2_caisse_maladie_base` int(11) DEFAULT NULL,
  `enfant2_caisse_maladie__LCA` int(11) DEFAULT NULL,
  `enfant3_caisse_maladie_base` int(11) DEFAULT NULL,
  `enfant3_caisse_maladie_LCA` int(11) DEFAULT NULL,
  `enfant4_caisse_maladie_base` int(11) DEFAULT NULL,
  `enfant4_caisse_maladie_LCA` int(11) DEFAULT NULL,
  `navigateur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `base_com_modif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LCA_com_modif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `situation_familiale_modif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_enfant_modif` int(11) DEFAULT NULL,
  `famille_caisse_maladie_oui` tinyint(1) DEFAULT NULL,
  `Mr_caisse_maladie_base_liste` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mr_caisse_maladie_LCA_liste` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant1_caisse_maladie_base_liste` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant1_caisse_maladie_lca_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant2_caisse_maladie_base_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant2_caisse_maladie_lca_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant3_caisse_maladie_base_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant3_caisse_maladie_lca_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant4_caisse_maladie_base_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Enfant4_caisse_maladie_lca_list` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sante` tinyint(1) DEFAULT NULL,
  `consommation_medicam` tinyint(1) DEFAULT NULL,
  `decission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `travaille_mr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `travaille_madame` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subside_modif` tinyint(1) DEFAULT NULL,
  `franchise_Mme` int(11) DEFAULT NULL,
  `Mr_franchise` int(11) DEFAULT NULL,
  `Enfant1_franchise` int(11) DEFAULT NULL,
  `enfant2_franchise` int(11) DEFAULT NULL,
  `enfant3_franchise` int(11) DEFAULT NULL,
  `enfant4_franchise` int(11) DEFAULT NULL,
  `habitation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rdv_prie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_INDICE_CONTACT` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TELEPHONE_COMPOSE` int(11) DEFAULT NULL,
  `CMK_S_FIELD_DATE_DEBUT_TRAITEMENT` date DEFAULT NULL,
  `CMK_S_FIELD_DATEHEURETRAITEMENT` date DEFAULT NULL,
  `CMK_S_FIELD_DATETRAITEMENT` date DEFAULT NULL,
  `CMK_S_FIELD_HEURETRAITEMENT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_DATEHEURE_RACCROCHE` date DEFAULT NULL,
  `CMK_S_FIELD_DATE_DEBUT_RACCROCHE` date DEFAULT NULL,
  `CMK_S_FIELD_HEURE_DEBUT_RACCROCHE` date DEFAULT NULL,
  `CMK_S_FIELD_DATEHEURE_DEBUT_RAPPEL_PREVU` date DEFAULT NULL,
  `CMK_S_FIELD_DATE_DEBUT_RAPPEL_PREVU` date DEFAULT NULL,
  `CMK_S_FIELD_HEURE_DEBUT_RAPPEL_PREVU` date DEFAULT NULL,
  `CMK_S_FIELD_DUREE_APPEL` int(11) DEFAULT NULL,
  `CMK_S_FIELD_DUREE_ATTENTE` int(11) DEFAULT NULL,
  `CMK_S_FIELD_DUREE_COMMUNICATION` int(11) DEFAULT NULL,
  `CMK_S_FIELD_DUREE_POST_APPEL` int(11) DEFAULT NULL,
  `CMK_S_FIELD_DUREE_TRAITEMENT` int(11) DEFAULT NULL,
  `CMK_S_FIELD_DUREE_PRODUCTION` int(11) DEFAULT NULL,
  `CMK_S_FIELD_NOMCAMPAGNE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_NOMFICHIER` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_QUALIFICATION_MERE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_QUALIFICATION` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_CODE_QUALIFICATION` int(11) DEFAULT NULL,
  `CMK_S_FIELD_COMMENTAIRES` int(11) DEFAULT NULL,
  `CMK_S_FIELD_NUM_IMPORT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_NOM_IMPORT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_DATE_IMPORT` date DEFAULT NULL,
  `CMK_S_FIELD_AGENT_NOM` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_AGENT_LOGIN` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_POSTE_AGENT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_INDICE_AGENT` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_1` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_2` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_3` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_4` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_5` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_6` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_7` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_8` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_9` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_10` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_11` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_12` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_13` int(11) DEFAULT NULL,
  `cCMK_S_FIELD_TENTATIVES_14` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_15` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_16` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_17` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_18` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_19` int(11) DEFAULT NULL,
  `CMK_S_FIELD_TENTATIVES_20` int(11) DEFAULT NULL,
  `CMK_S_FIELD_COMMERCIAL_NOM` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_COMMERCIAL_DATE` date DEFAULT NULL,
  `CMK_S_FIELD_COMMERCIAL_RDV_HEUREMINUTE` int(11) DEFAULT NULL,
  `CMK_S_FIELD_COMMERCIAL_RDV_HEURE` int(11) DEFAULT NULL,
  `CMK_S_FIELD_COMMERCIAL_RDV_MINUTE` int(11) DEFAULT NULL,
  `CMK_S_FIELD_COMMERCIAL_RDV_OBSERVATION` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CMK_S_FIELD_COMMERCIAL_RDV_ETAT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmk_nom_fichier` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmk_nom_commercial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmk_date_prise_comm` date DEFAULT NULL,
  `cmk_date_rdv_comm` date DEFAULT NULL,
  `cmk_observation_comm` date DEFAULT NULL,
  `ref_contact_crm` int(11) DEFAULT NULL,
  `tel_crm` int(11) DEFAULT NULL,
  `poste_crm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_crm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_agent_crm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualification_commercial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observation_commercial` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_start_commercial` date DEFAULT NULL,
  `date_end_commercial` date DEFAULT NULL,
  `duration_commercial` int(11) DEFAULT NULL,
  `duration_call_commercial` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E9F6D3CE3414710B` (`agent_id`),
  KEY `IDX_E9F6D3CE9395C3F3` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `meet`
--

INSERT INTO `meet` (`id`, `agent_id`, `customer_id`, `nom`, `tel1`, `tel2`, `tel3`, `fax1`, `fax2`, `surname`, `adresse`, `ville`, `npa`, `nom_modif`, `prenom_modif`, `age`, `age_enfant1`, `age_enfant2`, `age_enfant3`, `age_enfant`, `age_conjoint`, `non_sante`, `nom_medicament`, `subside_combien`, `adrese_modif`, `localite_modif`, `NPA_modif`, `etage_app`, `code_acces`, `natel`, `commentaire`, `Mr_caisse_maladie_base`, `mr_caisse_maladie_LCA`, `enfant1_caisse_maladie_base`, `enfant1_caisse_maladie_LCA`, `enfant2_caisse_maladie_base`, `enfant2_caisse_maladie__LCA`, `enfant3_caisse_maladie_base`, `enfant3_caisse_maladie_LCA`, `enfant4_caisse_maladie_base`, `enfant4_caisse_maladie_LCA`, `navigateur`, `UserName`, `base_com_modif`, `LCA_com_modif`, `situation_familiale_modif`, `nombre_enfant_modif`, `famille_caisse_maladie_oui`, `Mr_caisse_maladie_base_liste`, `Mr_caisse_maladie_LCA_liste`, `Enfant1_caisse_maladie_base_liste`, `Enfant1_caisse_maladie_lca_list`, `Enfant2_caisse_maladie_base_list`, `Enfant2_caisse_maladie_lca_list`, `Enfant3_caisse_maladie_base_list`, `Enfant3_caisse_maladie_lca_list`, `Enfant4_caisse_maladie_base_list`, `Enfant4_caisse_maladie_lca_list`, `sante`, `consommation_medicam`, `decission`, `travaille_mr`, `travaille_madame`, `subside_modif`, `franchise_Mme`, `Mr_franchise`, `Enfant1_franchise`, `enfant2_franchise`, `enfant3_franchise`, `enfant4_franchise`, `habitation`, `rdv_prie`, `CMK_S_FIELD_INDICE_CONTACT`, `CMK_S_FIELD_TELEPHONE_COMPOSE`, `CMK_S_FIELD_DATE_DEBUT_TRAITEMENT`, `CMK_S_FIELD_DATEHEURETRAITEMENT`, `CMK_S_FIELD_DATETRAITEMENT`, `CMK_S_FIELD_HEURETRAITEMENT`, `CMK_S_FIELD_DATEHEURE_RACCROCHE`, `CMK_S_FIELD_DATE_DEBUT_RACCROCHE`, `CMK_S_FIELD_HEURE_DEBUT_RACCROCHE`, `CMK_S_FIELD_DATEHEURE_DEBUT_RAPPEL_PREVU`, `CMK_S_FIELD_DATE_DEBUT_RAPPEL_PREVU`, `CMK_S_FIELD_HEURE_DEBUT_RAPPEL_PREVU`, `CMK_S_FIELD_DUREE_APPEL`, `CMK_S_FIELD_DUREE_ATTENTE`, `CMK_S_FIELD_DUREE_COMMUNICATION`, `CMK_S_FIELD_DUREE_POST_APPEL`, `CMK_S_FIELD_DUREE_TRAITEMENT`, `CMK_S_FIELD_DUREE_PRODUCTION`, `CMK_S_FIELD_NOMCAMPAGNE`, `CMK_S_FIELD_NOMFICHIER`, `CMK_S_FIELD_QUALIFICATION_MERE`, `CMK_S_FIELD_QUALIFICATION`, `CMK_S_FIELD_CODE_QUALIFICATION`, `CMK_S_FIELD_COMMENTAIRES`, `CMK_S_FIELD_NUM_IMPORT`, `CMK_S_FIELD_NOM_IMPORT`, `CMK_S_FIELD_DATE_IMPORT`, `CMK_S_FIELD_AGENT_NOM`, `CMK_S_FIELD_AGENT_LOGIN`, `CMK_S_FIELD_POSTE_AGENT`, `CMK_S_FIELD_INDICE_AGENT`, `CMK_S_FIELD_TENTATIVES_1`, `CMK_S_FIELD_TENTATIVES_2`, `CMK_S_FIELD_TENTATIVES_3`, `CMK_S_FIELD_TENTATIVES_4`, `CMK_S_FIELD_TENTATIVES_5`, `CMK_S_FIELD_TENTATIVES_6`, `CMK_S_FIELD_TENTATIVES_7`, `CMK_S_FIELD_TENTATIVES_8`, `CMK_S_FIELD_TENTATIVES_9`, `CMK_S_FIELD_TENTATIVES_10`, `CMK_S_FIELD_TENTATIVES_11`, `CMK_S_FIELD_TENTATIVES_12`, `CMK_S_FIELD_TENTATIVES_13`, `cCMK_S_FIELD_TENTATIVES_14`, `CMK_S_FIELD_TENTATIVES_15`, `CMK_S_FIELD_TENTATIVES_16`, `CMK_S_FIELD_TENTATIVES_17`, `CMK_S_FIELD_TENTATIVES_18`, `CMK_S_FIELD_TENTATIVES_19`, `CMK_S_FIELD_TENTATIVES_20`, `CMK_S_FIELD_COMMERCIAL_NOM`, `CMK_S_FIELD_COMMERCIAL_DATE`, `CMK_S_FIELD_COMMERCIAL_RDV_HEUREMINUTE`, `CMK_S_FIELD_COMMERCIAL_RDV_HEURE`, `CMK_S_FIELD_COMMERCIAL_RDV_MINUTE`, `CMK_S_FIELD_COMMERCIAL_RDV_OBSERVATION`, `CMK_S_FIELD_COMMERCIAL_RDV_ETAT`, `cmk_nom_fichier`, `cmk_nom_commercial`, `cmk_date_prise_comm`, `cmk_date_rdv_comm`, `cmk_observation_comm`, `ref_contact_crm`, `tel_crm`, `poste_crm`, `agent_crm`, `login_agent_crm`, `qualification_commercial`, `observation_commercial`, `date_start_commercial`, `date_end_commercial`, `duration_commercial`, `duration_call_commercial`) VALUES
(1, 38, NULL, 'Edward', '478957895', '4789578789', '7', '7', '7', 'George', 'Paris', '7', '7', '7', '7', 7, 7, 7, 7, 7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ingenieur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, 'alain', NULL, NULL, NULL, NULL, NULL, 'gor', 'Paris', 'Paris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, 'alem', NULL, NULL, NULL, NULL, NULL, 'sa', 'tunis', 'tunis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'icone.PNG',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `phone_number`, `address`, `picture_name`) VALUES
(38, 'direction', 'direction', 'asma.drissi@talan.tn', 'asma.drissi@talan.tn', 1, 'eivcmb1aa8oc0o480scs4wss88ok40c', '$2y$13$eivcmb1aa8oc0o480scs4u6ro.Dh4eiARwdVYpIg0MlFVASToOmjm', '2017-03-23 12:22:38', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:13:"ROLE_AGENTTFR";}', 0, NULL, NULL, NULL, 'icone.PNG');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_8F3F68C5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `meet`
--
ALTER TABLE `meet`
  ADD CONSTRAINT `FK_E9F6D3CE3414710B` FOREIGN KEY (`agent_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E9F6D3CE9395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
