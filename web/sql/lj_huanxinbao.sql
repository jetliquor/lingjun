
CREATE TABLE IF NOT EXISTS city (
  `id` SMALLINT PRIMARY KEY NOT NULL auto_increment,
  `name_cn` VARCHAR(16) NOT NULL default ''
);

-- INSERT INTO city VALUES (0, '上海');
-- INSERT INTO city VALUES (1, '北京');
-- INSERT INTO city VALUES (2, '重庆');

CREATE TABLE IF NOT EXISTS brand (
  `id` SMALLINT PRIMARY KEY NOT NULL auto_increment,
  `name_cn` VARCHAR(32) NOT NULL default '',
  `icon` VARCHAR(256) NOT NULL default ''
);

-- INSERT INTO brand VALUES (0, '爱惠浦', '');
-- INSERT INTO brand VALUES (1, '滨特尔', '');
-- INSERT INTO brand VALUES (2, '怡口', '');
-- INSERT INTO brand VALUES (3, '道尔顿', '');
-- INSERT INTO brand VALUES (4, '飞利浦', '');
-- INSERT INTO brand VALUES (5, '3M', '');

CREATE TABLE IF NOT EXISTS product_type (
  `id` SMALLINT PRIMARY KEY NOT NULL auto_increment,
  `name_cn` VARCHAR(16) NOT NULL default ''
);

-- INSERT INTO product_type VALUES (0, '滤芯');
-- INSERT INTO product_type VALUES (1, '净水器');

DROP TABLE IF EXISTS product;
CREATE TABLE IF NOT EXISTS product (
  `id` INT NOT NULL UNIQUE auto_increment,
  `type_id` INT NOT NULL,
  `brand_id` INT NOT NULL,
  `name` CHAR(255) NOT NULL,
  `brief` TEXT NOT NULL default '',
  `img` TINYTEXT NOT NULL default '',
  PRIMARY KEY (`type_id`, `brand_id`, `name`),
  FOREIGN KEY (`type_id`) REFERENCES product_type(`id`),
  FOREIGN KEY (`brand_id`) REFERENCES brand(`id`)
);

INSERT INTO product VALUES (0, 0, 0, '【特价】爱惠浦（Everpure） PP棉滤芯', 'xxx', '/image/product001.jpg');
INSERT INTO product VALUES (0, 0, 0, '【特价】爱惠浦（Everpure） PP棉滤芯', 'xxx', '/image/product001.jpg');
INSERT INTO product VALUES (0, 0, 1, '【特价】滨特尔（pentair）PP棉滤芯', 'xxx', '/image/product002.jpg');
INSERT INTO product VALUES (0, 0, 5, '3M SFKC01-CN1沐浴净化器替换滤芯', 'yyy', '/image/product002.jpg');

CREATE TABLE IF NOT EXISTS goods {
  `id` INT NOT NULL UNIQUE auto_increment,
  `product_id` INT,
  `city_id` INT,
  `price` FLOAT NOT NULL default 9999.99,
  `price_pre` VARCHAR(16) NOT NULL,
  `price_post` VARCHAR(16) NOT NULL，
  PRIMARY KEY (`product_id`, `city_id`),
  FOREIGN KEY (`product_id`) REFERENCES product(id)，
  FOREIGN KEY (`city_id`) REFERENCES city(id)
};
