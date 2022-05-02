-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql-ulysseperret.alwaysdata.net
-- Généré le : mer. 06 avr. 2022 à 19:34
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ulysseperret_devstip`
--

-- --------------------------------------------------------

--
-- Structure de la table `Astuces`
--

CREATE TABLE `Astuces` (
  `idAstuce` int(11) NOT NULL,
  `contentAstuce` text NOT NULL,
  `descriptionAstuce` text NOT NULL,
  `specificationAstuce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Astuces`
--

INSERT INTO `Astuces` (`idAstuce`, `contentAstuce`, `descriptionAstuce`, `specificationAstuce`) VALUES
(1, 'Titre de section - Navigation - HTML', 'Navigation\r\nLes personnes utilisant des lecteurs d\'écran utilisent fréquemment les niveaux de titre en passant de l\'un à l\'autre afin de déterminer rapidement le contenu de la page. Pour cette raison, il est important de ne pas sauter un niveau de titre. En effet, l\'absence d\'un titre intermédiaire pourrait amener le lecteur à se demander où le titre a été placé.\r\nMauvaises pratiques\r\n<h1>Heading level 1</h1>\r\n<h3>Heading level 3</h3>\r\n<h4>Heading level 4</h4>\r\nBonnes pratiques\r\n<h1>Heading level 1</h1>\r\n<h2>Heading level 2</h2>\r\n<h3>Heading level 3</h3>', 'HTML'),
(2, 'Affichage un contenue - différence entre console.log et console.dir - JS', 'Différence entre console.log() et console.dir()\r\nVous pourriez vous demander quelles sont les différences entre console.dir() et console.log().\r\nCelles-ci concernent principalement la gestion particulière des objets du DOM :\r\nconsole.log() affiche les éléments dans un arbre de type HTML,\r\nconsole.dir() affiche les propriétés de l\'objet JavaScript.', 'JS');

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
  `idCategorie` int(11) NOT NULL,
  `nameLanguage` varchar(255) NOT NULL,
  `validCategorie` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Categorie`
--

INSERT INTO `Categorie` (`idCategorie`, `nameLanguage`, `validCategorie`) VALUES
(1, 'HTML', 0),
(2, 'CSS', 0),
(3, 'Design', 0),
(4, 'JS', 0),
(5, 'PHP', 0),
(6, 'MYSQL', 0),
(7, 'API-JS', 0);

-- --------------------------------------------------------

--
-- Structure de la table `Code`
--

CREATE TABLE `Code` (
  `idCode` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contentCode` text NOT NULL,
  `description` text NOT NULL,
  `specifications` text NOT NULL,
  `idNote` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `idAstuce` int(11) NOT NULL,
  `tableau_comptabilité` text DEFAULT NULL,
  `docOfficielle` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='3';

--
-- Déchargement des données de la table `Code`
--

INSERT INTO `Code` (`idCode`, `titre`, `contentCode`, `description`, `specifications`, `idNote`, `idCategorie`, `idAstuce`, `tableau_comptabilité`, `docOfficielle`) VALUES
(1, '<h1>-<h6> : les éléments de titre de section - HTML', '<h1>Titre de niveau 1</h1>\r\n<h2>Titre de niveau 2</h2>\r\n<h3>Titre de niveau 3</h3>\r\n<h4>Titre de niveau 4</h4>\r\n<h5>Titre de niveau 5</h5>\r\n<h6>Titre de niveau 6</h6>', 'Les éléments <h1> à <h6> représentent six niveaux de titres dans un document, <h1> est le plus important et <h6> est le moins important. Un élément de titre décrit brièvement le sujet de la section qu\'il introduit.\r\nAttributs\r\nCes éléments acceptent uniquement les attributs universels (communs à l\'ensemble des éléments).\r\nNote : L\'attribut align est obsolète et ne doit pas être utilisé.', '[Exposed=Window]\r\ninterface HTMLHeadingElement : HTMLElement {\r\n  [HTMLConstructor] constructor();\r\n\r\n  // also has obsolete members\r\n};\r\n\r\n<!ENTITY % heading \"H1|H2|H3|H4|H5|H6\">\r\n<!--\r\n  There are six levels of headings from H1 (the most important)\r\n  to H6 (the least important).\r\n-->\r\n\r\n<!ELEMENT (%heading;)  - - (%inline;)* -- heading -->\r\n<!ATTLIST (%heading;)\r\n  %attrs;                              -- %coreattrs, %i18n, %events --\r\n  >', 1, 1, 1, 'Desktop : \r\n* Chrome : True - Yes\r\n* Edge : True - 12\r\n* Firefox : True -  1\r\n* Internet Explorer : True - Yes\r\n* Opera : True - Yes\r\n* Safari : True - Yes\r\n\r\nMobile:\r\n* WebView Android : True - Yes\r\n* Chrome Android : True - Yes\r\n* Firefox for Android : True - 4\r\n* Opera Android : True - Yes\r\n* Safari on iOS : True - Yes\r\nSamsung Internet : True - Yes', 'https://developer.mozilla.org/fr/docs/Web/HTML/Element/Heading_Elements'),
(2, 'Console.log() - JS', 'console.log(obj1 [, obj2, ..., objN]);\r\nOR\r\nconsole.log(msg [, subst1, ..., substN]);', 'La méthode console.log() affiche un message dans la console Web. Le message peut être une simple chaine de caractères (avec des valeurs optionnelles de substitution) ou peut être composé d\'un ou plusieurs objets JavaScript.', 'Paramètres\r\nobj1 ... objN\r\nUne liste d\'objets Javascript à afficher. Les représentations textuelles de chacun de ces objets seront affichées dans la console du navigateur selon l\'ordre indiqué. Attention, pour les versions récentes de Chrome et Firefox, ce qui apparaît dans la console est une référence à l\'objet et pas nécessairement la valeur de l\'objet au moment de l\'appel à console.log() mais sa valeur au moment où on ouvre la console.\r\nmsg\r\nUne chaîne de caractères JavaScript contenant zéro ou plusieurs chaînes de substitution.\r\nsubst1 ... substN\r\nDes objets JavaScript dont les valeurs textuelles remplaceront les emplacements à substituer indiqués dans msg. Cela offre plus de contrôle sur le format d\'affichage.', 2, 4, 2, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/log'),
(3, '<dialog> : l\'élément de boîte de dialogue', '<dialog open>\r\n  <p>Salutations, à tous et à toutes !</p>\r\n</dialog>', 'L\'élément HTML <dialog> représente une boite de dialogue ou un composant interactif (par exemple un inspecteur ou une fenêtre).', '[Exposed=Window]\r\ninterface HTMLDialogElement : HTMLElement {\r\n  [HTMLConstructor] constructor();\r\n\r\n  [CEReactions] attribute boolean open;\r\n  attribute DOMString returnValue;\r\n  [CEReactions] undefined show();\r\n  [CEReactions] undefined showModal();\r\n  [CEReactions] undefined close(optional DOMString returnValue);\r\n};', 4, 7, 0, 'dialog\r\nDesktop : \r\n* Chrome : True - 37\r\n* Edge : True - 79\r\n* Firefox : True - 98\r\n* Internet Explorer : No\r\n* Opera : True - 24\r\n* Safari : True - 15.4\r\n\r\nMobile:\r\n* WebView Android : True - 37\r\n* Chrome Android : True - 37\r\n* Firefox for Android : True - 98\r\n* Opera Android : True - 24\r\n* Safari on iOS : True - 15.4\r\n* Samsung Internet : True - 3.0\r\n\r\nopen\r\nDesktop : \r\n* Chrome : True - 37\r\n* Edge : True - 79\r\n* Firefox : True - 98\r\n* Internet Explorer : No\r\n* Opera : True - 24\r\n* Safari : True - 15.4\r\n\r\nMobile:\r\n* WebView Android : True - 37\r\n* Chrome Android : True - 37\r\n* Firefox for Android : True - 98\r\n* Opera Android : True - 24\r\n* Safari on iOS : True - 15.4\r\n* Samsung Internet : True - 3.0', 'https://developer.mozilla.org/fr/docs/Web/HTML/Element/dialog'),
(4, '<details> : l\'élément de divulgation des détails', '<details>\r\n    <summary>Details</summary>\r\n    Something small enough to escape casual notice.\r\n</details>\r\n', 'L\'élément HTML <details> est utilisé comme un outil permettant de révéler une information. Un résumé ou un intitulé peuvent être fournis grâce à un élément <summary>.\r\n\r\nLa plupart du temps, le contrôle utilisé pour cet élément est un triangle qui est tourné ou tordu afin d\'indiquer si l\'élément est révélé ou non. Si le premier élément fils de l\'élément <details> est un élément <summary>, c\'est le contenu de ce dernier qui est utilisé comme intitulé pour le contenu à révéler (l\'intitulé est donc toujours visible).\r\n', '', 2, 1, 0, 'Desktop : \r\n* Chrome : True - 12\r\n* Edge : True - 79\r\n* Firefox : True -  49\r\n* Internet Explorer : False\r\n* Opera : True - 15\r\n* Safari : True - 6\r\n\r\nMobile:\r\n* WebView Android : True - Yes\r\n* Chrome Android : True  - Yes\r\n* Firefox for Android : True - 49\r\n* Opera Android : True - 49\r\n* Safari on iOS : True - 6\r\n*Samsung Internet : True - Yes\r\n\r\nopen\r\nDesktop : \r\n* Chrome : True - 12\r\n* Edge : True - 79\r\n* Firefox : True -  49\r\n* Internet Explorer : False\r\n* Opera : True - 15\r\n* Safari : True - 6\r\n\r\nMobile:\r\n* WebView Android : True - Yes\r\n* Chrome Android : True  - Yes\r\n* Firefox for Android : True - 49\r\n* Opera Android : True - 49\r\n* Safari on iOS : True - 6\r\n*Samsung Internet : True - Yes', 'https://developer.mozilla.org/fr/docs/Web/HTML/Element/details'),
(9, 'Console.assert() - API - JS', 'console.assert(assertion, obj1 [, obj2, ..., objN]);\r\nconsole.assert(assertion, msg [, subst1, ..., substN]);', 'Affiche un message d\'erreur dans la console si l\'assertion est fausse. Si l\'assertion est vraie, rien ne se produit.\r\nParamètres\r\nassertion\r\nN\'importe quelle expression booléenne. Si l\'assertion est fausse, le message s\'affichera dans la console.\r\nobj1 ... objN\r\nUne liste d\'objets javascript à afficher. La représentation textuelle de chacun de ces objets est ajoutée à la suite de la précédente dans l\'ordre donné et est ensuite affichée.\r\nmsg\r\nUne chaîne de caractères javascript contenant zéro ou plus chaîne(s) de caractères de substitution.\r\nsubst1 ... substN\r\nL\'objet javascript avec lequel remplacer les chaînes de substitution dans msg. Ceci vous offre plus de contrôle sur ce qui est affiché.', 'Spécification \r\nIf condition is true, return.\r\nLet message be a string without any formatting specifiers indicating generically an assertion failure (such as \"Assertion failed\").\r\nIf data is empty, append message to data.\r\nOtherwise:\r\nLet first be data[0].\r\nIf Type(first) is not String, then prepend message to data.\r\nOtherwise:\r\nLet concat be the concatenation of message, U+003A (:), U+0020 SPACE, and first.\r\nSet data[0] to concat.\r\nPerform Logger(\"assert\", data).', 5, 7, 3, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/assert'),
(10, 'Console.count() - API - JS', 'console.count([label]);', 'Affiche dans la console le nombre de fois où la fonction count() a été appelée. Cette fonction accepte l\'argument optionnel label.\r\nSi un label est passé en paramètre, la fonction affiche le nombre de fois où la fonction count() a été appelée pour ce label spécifiquempent.\r\nSi aucun label est passé en paramètre, la fonction affiche le nombre de fois où la fonction count() a été appelée jusqu\'à présent.', 'Paramètres\r\nlabel\r\nUne chaîne de caractères. Si ce paramètre est renseigné, count() affiche le nombre de fois que la fonction a été appelée jusqu\'à présent avec ce libellé. S\'il est omis, count() affiche le nombre de fois que la fonction a été appelée sur cette ligne.\r\nSpécifications\r\nLet map be the associated count map.\r\nIf map[label] exists, set map[label] to map[label] + 1.\r\nOtherwise, set map[label] to 1.\r\nLet concat be the concatenation of label, U+003A (:), U+0020 SPACE, and ToString(map[label]).\r\nPerform Logger(\"count\", « concat »).', 4, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/count'),
(11, 'Console.countReset() - API - JS', 'console.countReset([label]);', 'Remet le compteur à zero. Cette fonction prend un argument optionnel label', 'Parametres\r\nlabel\r\nSi specifié, countReset() remet à zero le compteur associé à ce label. S\'il n\'est pas specifié, countReset() remet à zéro le compteur par defaut.\r\nReturn value\r\nSi le paramètre label à été spécifié :\r\n counter-name: 0\r\nSi aucun label n\'as été specifié\r\ndefault: 0\r\nSpécification\r\nLet map be the associated count map.\r\nIf map[label] exists, set map[label] to map[label] + 1.\r\nOtherwise, set map[label] to 1.\r\nLet concat be the concatenation of label, U+003A (:), U+0020 SPACE, and ToString(map[label]).\r\nPerform Logger(\"count\", « concat »).', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/countReset'),
(12, 'Console.debug() - API - JS\r\n', 'console.debug(obj1 [, obj2, ..., objN]);\r\nconsole.debug(msg [, subst1, ..., substN]);', 'Affiche un message dans la console web, avec le niveau de log \"debug\". Le message est affiché uniquement si la console est configurée pour afficher les messages de type debug.', 'Perform Logger(\"debug\", data).', 3, 7, 0, 'No compatibility data found ', 'https://phpmyadmin.alwaysdata.com/phpmyadmin/index.php?route=/sql&server=1&db=ulysseperret_devstip&table=Code&pos=0'),
(14, 'Console.dir() - API - JS', 'console.dir(object);', 'La méthode console.dir() affiche une liste interactive des propriétés de l\'objet JavaScript passé en argument. La sortie est présentée comme une liste hiérarchique avec des triangles qui permettent de développer l\'arborescence de l\'objet et de voir le contenu des objets descendants.\r\n\r\nAutrement dit, console.dir() permet de voir l\'ensemble des propriétés d\'un objet JavaScript dans la console.', 'Let object be item with generic JavaScript object formatting applied.\r\nPerform Printer(\"dir\", « object », options).', 3, 1, 0, 'Desktop : \r\n* Chrome : True - 1\r\n* Edge : True - 12\r\n* Firefox : True -  8\r\n* Internet Explorer : True - 9\r\n* Opera : True - 11\r\n* Safari : True - 4\r\n\r\nMobile:\r\n* WebView Android : True - 37\r\n* Chrome Android : True - 18\r\n* Firefox for Android : True - 8\r\n* Opera Android : True - 11\r\n* Safari on iOS : True - 3.2\r\nSamsung Internet : True - 1.0\r\nServer :\r\n* Deno : True - 1.0\r\n* Node.js - True - 1.00', 'https://developer.mozilla.org/fr/docs/Web/API/console/dir'),
(15, 'Console.dirxml() - API - JS', 'console.dirxml(object);', 'Affiche un arbre interactif des éléments descendants de l\'élément XML / HTML spécifié. S\'il n\'est pas possible d\'afficher en tant qu\'élément, la vue Objet JavaScript est affichée à la place. La sortie est présentée sous la forme d\'une liste hiérarchique des noeuds extensibles qui vous permettent de voir le contenu des nœuds enfants.\r\n', 'Let finalList be a new list, initially empty.\r\nFor each item of data:\r\nLet converted be a DOM tree representation of item if possible; otherwise let converted be item with optimally useful formatting applied.\r\nAppend converted to finalList.\r\nPerform Logger(\"dirxml\", finalList).', 3, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/dirxml'),
(16, 'Console.error() - API - JS', 'console.error(obj1 [, obj2, ..., objN]);\r\nconsole.error(msg [, subst1, ..., substN]);\r\nconsole.exception(obj1 [, obj2, ..., objN]);\r\nconsole.exception(msg [, subst1, ..., substN]);\r\nobj1 ... objN\r\nUne liste d\'objets JavaScript à afficher. La représentation, en chaîne de caractéres, de chacun de ces objets est affichée dans l\'ordre de la liste.\r\nmsg\r\nUne chaîne de caractères JavaScript contenant zéro ou plusieurs subdivisions de chaîne de caractères.\r\nsubst1 ... substN\r\nUne liste d\'objets JavaScript qui remplace les chaînes de caractéres de msg. Cela vous donne plus de contrôle sur le format de sortie.\r\nVoir Afficher du texte dans la console dans la documentation de console pour plus de détails.', 'Affiche un message d\'erreur dans la console du navigateur.', 'Perform Logger(\"error\", data).', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/error'),
(17, 'Console.group() - API - JS', 'console.group();', 'Création d\'un nouveau groupe en ligne dans la console Web. Cela indente les messages de console suivants par un niveau supplémentaire, jusqu\'à ce que console.groupEnd() soit appelé.', '', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/group'),
(18, 'Console.groupCollapsed() - API - JS', 'console.groupCollapsed([label]);', 'Crée un nouveau groupe intégré dans la console Web. Contrairement à console.group (), le nouveau groupe est créé réduit. L\'utilisateur devra utiliser le bouton de divulgation à côté pour le développer, en révélant les entrées créées dans le groupe.\r\nAppellez console.groupEnd() pour revenir au groupe parent.\r\nVoir Using groups in the console dans la documentation de console pour plus de détails et des exemples.', 'Let group be a new group.\r\nIf data is not empty, let groupLabel be the result of Formatter(data). Otherwise, let groupLabel be an implementation-chosen label representing a group.\r\nIncorporate groupLabel as a label for group.\r\nOptionally, if the environment supports interactive groups, group should be collapsed by default.\r\nPerform Printer(\"groupCollapsed\", « group »).\r\nPush group onto the appropriate group stack.', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/groupCollapsed'),
(19, 'Console.groupEnd() - API - JS', 'console.groupEnd();', 'Quitte le groupe en ligne actuel dans la console Web. Voir Using groups in the console dans la documentation console.group() pour plus de détails et des exemples.', 'Pop the last group from the group stack.', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/groupEnd'),
(20, 'Console.info() - API - JS', 'console.info(obj1 [, obj2, ..., objN]);\r\nconsole.info(msg [, subst1, ..., substN]);', 'Affiche un message informatif dans la console du navigateur. Dans Firefox et Chrome, une petit icône de i s\'affiche devant le message.\r\n', 'Perform Logger(\"info\", data).', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/info'),
(21, 'Console.log() - API - JS', 'console.log(obj1 [, obj2, ..., objN]);\r\nconsole.log(msg [, subst1, ..., substN]);', 'La méthode console.log() affiche un message dans la console Web. Le message peut être une simple chaine de caractères (avec des valeurs optionnelles de substitution) ou peut être composé d\'un ou plusieurs objets JavaScript.\r\n', 'None', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/log'),
(22, 'Console.table() - API - JS', '// un tableau de chaînes de caractères\r\nconsole.table([\"apples\", \"oranges\", \"bananas\"]);\r\n// un objet dont les propriétés sont des chaînes de caractères\r\nfunction Person(firstName, lastName) {\r\n  this.firstName = firstName;\r\n  this.lastName = lastName;\r\n}', 'Affiche des données tabulaires sous la forme d\'un tableau.\r\nCette fonction prend un argument obligatoire data, qui doit être un tableau (Array) ou un objet, et un argument facultatif columns.\r\nIl affiche data sous la forme d\'un tableau. Chaque élément dans le tableau fourni (Array) sera affiché comme une ligne dans le tableau. (ou les propriétés énumérables s\'il s\'agit d\'un objet)\r\nLa première colonne dans le tableau sera intitulé (index). Si data est un tableau (Array), alors les valeurs de cette colonne seront les index du tableau (Array). Si data est un objet, alors ses valeurs seront les noms des propriétés.À noter (dans Firefox) : console.table est limité à l\'affichage de 1000 lignes (la première ligne est l\'index étiqueté)', 'Try to construct a table with the columns of the properties of tabularData (or use properties) and rows of tabularData and log it with a logLevel of \"log\". Fall back to just logging the argument if it can’t be parsed as tabular.', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/table'),
(23, 'Clear() - API - JS', 'console.clear();', 'Vide la console.\r\nTous les messages de la console seront supprimés et remplacés par un message de confirmation (\"Console was cleared\").\r\n', 'Empty the appropriate group stack.\r\nIf possible for the environment, clear the console. (Otherwise, do nothing.)\r\n\r\nÀ noter: sur Google Chrome, console.clear() n\'a aucun effet si l\'utilisateur a coché \"Preserve log upon navigation\" dans les paramètres de l\'inspecteur.', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/clear'),
(24, 'Console.time  - API - JS', 'console.time(label);', 'Chronomètre une opération. Chaque \"timer\" doit avoir un nom unique. Il peut y avoir jusqu\'à 10000 \"timers\" sur une même page. En appelant console.timeEnd() avec le même nom, le navigateur affichera le temps d\'execution en millisecondes dans la console.\r\n\r\nVoir Timers dans la documentation de console pour plus de details et d\'exemples.', '✔MDN\r\nIf the associated timer table contains an entry with key label, return, optionally reporting a warning to the console indicating that a timer with label label has already been started.\r\n\r\nOtherwise, set the value of the entry with key label in the associated timer table to the current time.', 2, 7, 0, 'No compatibility data found', 'https://developer.mozilla.org/fr/docs/Web/API/Console/time'),
(26, 'Console.timeEnd - API - JS', 'console.timeEnd(label);', 'Arrête un chronomètre (timer) précédemment démarré par console.time().\r\n\r\nVoir Timers dans la documentation de console pour des détails et des exemples.', 'No Spefication', 3, 7, 0, 'No compatibility data found', 'https://developer.mozilla.org/fr/docs/Web/API/Console/timeEnd'),
(27, ' Console.timeLog() - API - JS', 'console.timeLog(label);', 'Affiche dans la console la valeur actuelle d\'un timer précédemment appelé par console.time()\r\n\r\nVoir Timers dans la documentation pour des exemples et plus de détails', '✔MDN\r\nLet timerTable be the associated timer table.\r\n\r\nLet startTime be timerTable[label].\r\n\r\nLet duration be a string representing the difference between the current time and startTime, in an implementation-defined format.\r\n\r\n\"4650\", \"4650.69 ms\", \"5 seconds\", and \"00:05\" are all reasonable ways of displaying a 4650.69 ms duration.\r\n\r\nLet concat be the concatenation of label, U+003A (:), U+0020 SPACE, and duration.\r\n\r\nPrepend concat to data.\r\n\r\nPerform Printer(\"timeLog\", data).', 4, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/timeLog'),
(28, 'Console.trace()', 'console.trace();', 'Affiche la stack trace dans la Web ', 'Let trace be some implementation-specific, potentially-interactive representation of the callstack from where this function was called.\r\nOptionally, let formattedData be the result of Formatter(data), and incorporate formattedData as a label for trace.\r\nPerform Printer(\"trace\", « trace »).', 3, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/trace'),
(29, 'Console.warn()', 'console.warn(obj1 [, obj2, ..., objN]);\r\nconsole.warn(msg [, subst1, ..., substN]);', 'Affiche un message d\'avertissement dans la console web.', 'Perform Logger(\"warn\", data).', 2, 7, 0, 'No compatibility data found ', 'https://developer.mozilla.org/fr/docs/Web/API/Console/warn');

-- --------------------------------------------------------

--
-- Structure de la table `Commentaires`
--

CREATE TABLE `Commentaires` (
  `idCommentaire` int(11) NOT NULL,
  `contentCommentaire` varchar(255) NOT NULL,
  `idCode` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Commentaires`
--

INSERT INTO `Commentaires` (`idCommentaire`, `contentCommentaire`, `idCode`, `idUser`) VALUES
(1, 'Le code de base par excellence', 1, 1),
(2, 'Très bon article pour les débutants.', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `ExempleCode`
--

CREATE TABLE `ExempleCode` (
  `idExempleCode` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `idCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ExempleCode`
--

INSERT INTO `ExempleCode` (`idExempleCode`, `content`, `idCode`) VALUES
(1, 'Hello World, le code le plus commun et basique pour l\'affichage', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Note`
--

CREATE TABLE `Note` (
  `idNote` int(11) NOT NULL,
  `validNote` tinyint(1) NOT NULL,
  `numberNote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Note`
--

INSERT INTO `Note` (`idNote`, `validNote`, `numberNote`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `Snippet`
--

CREATE TABLE `Snippet` (
  `idSnippet` int(11) NOT NULL,
  `contentSnippet` varchar(255) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Snippet`
--

INSERT INTO `Snippet` (`idSnippet`, `contentSnippet`, `idCategorie`) VALUES
(1, 'Test Snippet', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `addressmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `pseudo`, `addressmail`) VALUES
(1, 'Ulysse', 'ulysseperret@orange.fr'),
(2, 'Nikolla', 'nikola.marinkovic.ort@gmail.com '),
(3, 'Baptiste', 'baptistedantaspro@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Astuces`
--
ALTER TABLE `Astuces`
  ADD PRIMARY KEY (`idAstuce`);

--
-- Index pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `Code`
--
ALTER TABLE `Code`
  ADD PRIMARY KEY (`idCode`),
  ADD KEY `code_1` (`idCategorie`),
  ADD KEY `code_2` (`idNote`);

--
-- Index pour la table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `commentaires_1` (`idUser`),
  ADD KEY `commentaires_2` (`idCode`);

--
-- Index pour la table `ExempleCode`
--
ALTER TABLE `ExempleCode`
  ADD KEY `exemplecode_1` (`idCode`);

--
-- Index pour la table `Note`
--
ALTER TABLE `Note`
  ADD PRIMARY KEY (`idNote`);

--
-- Index pour la table `Snippet`
--
ALTER TABLE `Snippet`
  ADD PRIMARY KEY (`idSnippet`),
  ADD KEY `snippet_1` (`idCategorie`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Astuces`
--
ALTER TABLE `Astuces`
  MODIFY `idAstuce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Code`
--
ALTER TABLE `Code`
  MODIFY `idCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `Commentaires`
--
ALTER TABLE `Commentaires`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Note`
--
ALTER TABLE `Note`
  MODIFY `idNote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Snippet`
--
ALTER TABLE `Snippet`
  MODIFY `idSnippet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Astuces`
--
ALTER TABLE `Astuces`
  ADD CONSTRAINT `astuces_1` FOREIGN KEY (`idAstuce`) REFERENCES `Code` (`idCode`);

--
-- Contraintes pour la table `Code`
--
ALTER TABLE `Code`
  ADD CONSTRAINT `code_1` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`),
  ADD CONSTRAINT `code_2` FOREIGN KEY (`idNote`) REFERENCES `Note` (`idNote`);

--
-- Contraintes pour la table `Commentaires`
--
ALTER TABLE `Commentaires`
  ADD CONSTRAINT `commentaires_1` FOREIGN KEY (`idUser`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `commentaires_2` FOREIGN KEY (`idCode`) REFERENCES `Code` (`idCode`);

--
-- Contraintes pour la table `ExempleCode`
--
ALTER TABLE `ExempleCode`
  ADD CONSTRAINT `exemplecode_1` FOREIGN KEY (`idCode`) REFERENCES `Code` (`idCode`);

--
-- Contraintes pour la table `Snippet`
--
ALTER TABLE `Snippet`
  ADD CONSTRAINT `snippet_1` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
