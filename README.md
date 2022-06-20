# Country-Codes-PHP-Script
PHP scripts that inserts a list of countries to a MySQL database

# Create country table on your MySQL DB to store the list of countries.

CREATE TABLE `countries` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
 `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`),
 KEY `countries_code_index` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
