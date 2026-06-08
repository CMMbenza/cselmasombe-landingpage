CREATE TABLE `inscriptions` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `responsable_id` int(11) NOT NULL,
 `code_famille` varchar(30) NOT NULL,
 `nom` varchar(100) NOT NULL,
 `postnom` varchar(100) DEFAULT NULL,
 `prenom` varchar(100) DEFAULT NULL,
 `lieu_naissance` varchar(150) DEFAULT NULL,
 `date_naissance` date DEFAULT NULL,
 `genre` enum('M','F') DEFAULT NULL,
 `classe` varchar(100) DEFAULT NULL,
 `OPTION` varchar(100) DEFAULT NULL,
 `ecole_provenance` varchar(255) DEFAULT NULL,
 `annee_scolaire` varchar(20) DEFAULT NULL,
 `statut` enum('EN_ATTENTE','VALIDE','REFUSE') DEFAULT 'EN_ATTENTE',
 `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`),
 KEY `responsable_id` (`responsable_id`),
 CONSTRAINT `inscriptions_ibfk_1` FOREIGN KEY (`responsable_id`) REFERENCES `responsables` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
responsables	CREATE TABLE `responsables` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `code_famille` varchar(30) DEFAULT NULL,
 `nom_complet` varchar(255) NOT NULL,
 `telephone1` varchar(30) DEFAULT NULL,
 `telephone2` varchar(30) DEFAULT NULL,
 `email` varchar(150) DEFAULT NULL,
 `profession` varchar(150) DEFAULT NULL,
 `adresse` text DEFAULT NULL,
 `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
 PRIMARY KEY (`id`),
 UNIQUE KEY `code_famille` (`code_famille`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci