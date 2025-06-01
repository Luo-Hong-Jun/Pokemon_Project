CREATE DATABASE pokemons
	CHARACTER SET utf8mb4
	COLLATE utf8mb4_hungarian_ci;

CREATE TABLE pokemons.pokemon_table (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) DEFAULT NULL,
  type VARCHAR(255) DEFAULT NULL,
  img VARCHAR(255) DEFAULT NULL,
  skill1 VARCHAR(255) DEFAULT NULL,
  skill2 VARCHAR(255) DEFAULT NULL,
  skill3 VARCHAR(255) DEFAULT NULL,
  skill4 VARCHAR(255) DEFAULT NULL,
  gender TINYINT(4) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AUTO_INCREMENT = 56,
AVG_ROW_LENGTH = 3276,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_hungarian_ci;

INSERT INTO `pokemon_table` (`id`, `name`, `type`, `img`, `skill1`, `skill2`, `skill3`, `skill4`, `gender`) VALUES (NULL, 'Vaporeon', 'Water', 'uploads/134.png', 'water gun', 'hydra pump', 'bite', 'freeze', '1'), (NULL, 'geodude', 'dsa', 'uploads/375px-0074Geodude.png', 'dddd', 'ssss', 'aaa', 'AAA', '0'), (NULL, 'diglett', 'ground', 'uploads/050.png', 'earthquake', 'rock slash', 'throw up', 'punch', '0'), (NULL, 'magnemite', 'dsadsa', 'uploads/081.png', 'sadasd', 'sadasd', 'sdadsadasd', 'dasdasda', '2'), (NULL, 'Gyattrados', 'water flying', 'uploads/130.png', 'water gun', 'freeze', 'fly', 'flamethrower', '0')