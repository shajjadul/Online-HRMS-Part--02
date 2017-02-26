DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
  `Code` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO products VALUES("c1","Product Name 01","100");
INSERT INTO products VALUES("c2","Product Name 02","102");
INSERT INTO products VALUES("c3","Product Name 03","103");
INSERT INTO products VALUES("c4","Product Name 04","104");
INSERT INTO products VALUES("c5","Product Name 05","105");
INSERT INTO products VALUES("c6","Product Name 06","106");
INSERT INTO products VALUES("c7","Product Name 07","107");
INSERT INTO products VALUES("c8","Product Name 08","108");
INSERT INTO products VALUES("c9","Product Name 09","109");


