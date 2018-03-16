-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 12 mars 2018 à 17:19
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forteroche`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

DROP TABLE IF EXISTS `chapters`;
CREATE TABLE IF NOT EXISTS `chapters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `author`, `content`, `date_created`) VALUES
(4, 'Chapitre 10 re modifié', 'Jean Forteroche', 'Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora.\r\nPost haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.\r\nSin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius, quod idem adipisci uterque non posset. Quod si qui longius in amicitia provecti essent, tamen saepe labefactari, si in honoris contentionem incidissent; pestem enim nullam maiorem esse amicitiis quam in plerisque pecuniae cupiditatem, in optimis quibusque honoris certamen et gloriae; ex quo inimicitias maximas saepe inter amicissimos exstitisse.\r\nVerum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.\r\nQuod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.\r\nEodem tempore Serenianus ex duce, cuius ignavia populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.\r\nIam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.\r\nUltima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas.\r\nBatnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.\r\n', '2018-01-25'),
(5, 'Chapitre 10 re modifié', 'Jean Forteroche', 'Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora.\r\nPost haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.\r\nSin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius, quod idem adipisci uterque non posset. Quod si qui longius in amicitia provecti essent, tamen saepe labefactari, si in honoris contentionem incidissent; pestem enim nullam maiorem esse amicitiis quam in plerisque pecuniae cupiditatem, in optimis quibusque honoris certamen et gloriae; ex quo inimicitias maximas saepe inter amicissimos exstitisse.\r\nVerum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.\r\nQuod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.\r\nEodem tempore Serenianus ex duce, cuius ignavia populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.\r\nIam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.\r\nUltima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas.\r\nBatnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.\r\n', '2018-01-25'),
(6, 'Chapitre 10 re modifié', 'Jean Forteroche', 'Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora.\r\nPost haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.\r\nSin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius, quod idem adipisci uterque non posset. Quod si qui longius in amicitia provecti essent, tamen saepe labefactari, si in honoris contentionem incidissent; pestem enim nullam maiorem esse amicitiis quam in plerisque pecuniae cupiditatem, in optimis quibusque honoris certamen et gloriae; ex quo inimicitias maximas saepe inter amicissimos exstitisse.\r\nVerum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.\r\nQuod cum ita sit, paucae domus studiorum seriis cultibus antea celebratae nunc ludibriis ignaviae torpentis exundant, vocali sonu, perflabili tinnitu fidium resultantes. denique pro philosopho cantor et in locum oratoris doctor artium ludicrarum accitur et bybliothecis sepulcrorum ritu in perpetuum clausis organa fabricantur hydraulica, et lyrae ad speciem carpentorum ingentes tibiaeque et histrionici gestus instrumenta non levia.\r\nEodem tempore Serenianus ex duce, cuius ignavia populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.\r\nCyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.\r\nIam virtutem ex consuetudine vitae sermonisque nostri interpretemur nec eam, ut quidam docti, verborum magnificentia metiamur virosque bonos eos, qui habentur, numeremus, Paulos, Catones, Galos, Scipiones, Philos; his communis vita contenta est; eos autem omittamus, qui omnino nusquam reperiuntur.\r\nUltima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas.\r\nBatnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.\r\nProinde die funestis interrogationibus praestituto imaginarius iudex equitum resedit magister adhibitis aliis iam quae essent agenda praedoctis, et adsistebant hinc inde notarii, quid quaesitum esset, quidve responsum, cursim ad Caesarem perferentes, cuius imperio truci, stimulis reginae exsertantis aurem subinde per aulaeum, nec diluere obiecta permissi nec defensi periere conplures.\r\n', '2018-01-25'),
(28, 'test', 'Jean Forteroche', '<p style=\"text-align: center;\"><strong><em>TEST&nbsp;</em></strong></p>', '2018-03-12');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` date NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `date_comment`, `flag`) VALUES
(36, 1, 'eric', 'Votre Commentaire à été modéré par l\' administrateur', '2018-03-01', 0),
(37, 6, 's', 'Votre Commentaire à été modéré par l\' administrateur', '2018-03-01', 0),
(51, 25, 'test 2', 'test 2', '2018-03-08', 0),
(55, 28, 'Jean Forteroche', 'Test de commentaire', '2018-03-12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `ad` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `ad`) VALUES
(1, 'Dhagnere', '1234', 'david', 'hagnere', 0),
(2, 'jforteroche', '1234', 'Jean', 'Forteroche', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
