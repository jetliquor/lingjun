#
CREATE TABLE IF NOT EXISTS city (
  `id`      SMALLINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name_cn` VARCHAR(16)          NOT NULL DEFAULT ''
);

INSERT INTO city VALUES (0, '上海');
INSERT INTO city VALUES (1, '北京');
INSERT INTO city VALUES (2, '重庆');

CREATE TABLE IF NOT EXISTS brand (
  `id`      SMALLINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name_cn` VARCHAR(32)          NOT NULL DEFAULT '',
  `icon`    VARCHAR(256)         NOT NULL DEFAULT ''
);

INSERT INTO brand VALUES (0, '爱惠浦', '');
INSERT INTO brand VALUES (1, '滨特尔', '');
INSERT INTO brand VALUES (2, '怡口', '');
INSERT INTO brand VALUES (3, '道尔顿', '');
INSERT INTO brand VALUES (4, '飞利浦', '');
INSERT INTO brand VALUES (5, '3M', '');

CREATE TABLE IF NOT EXISTS product_type (
  `id`      SMALLINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name_cn` VARCHAR(16)          NOT NULL DEFAULT ''
);

INSERT INTO product_type VALUES (0, '滤芯');
INSERT INTO product_type VALUES (1, '净水器');

DROP TABLE IF EXISTS product;
CREATE TABLE IF NOT EXISTS product (
  `id`       INT       NOT NULL UNIQUE AUTO_INCREMENT,
  `type_id`  SMALLINT  NOT NULL,
  `brand_id` SMALLINT  NOT NULL,
  `name`     CHAR(255) NOT NULL,
  `brief`    TEXT      NOT NULL        DEFAULT '',
  `img`      TINYTEXT  NOT NULL        DEFAULT '',
  PRIMARY KEY (`type_id`, `brand_id`, `name`),
  FOREIGN KEY (`type_id`) REFERENCES product_type (id),
  FOREIGN KEY (`brand_id`) REFERENCES brand (id)
);

INSERT INTO product VALUES (0, 0, 0, '【特价】爱惠浦（Everpure） PP棉滤芯', 'xxx', '/image/product001.jpg');
INSERT INTO product VALUES (1, 1, 1, '【特价】爱惠浦（Everpure） PP棉滤芯00', 'xxx', '/image/product002jpg');
INSERT INTO product VALUES (2, 0, 1, '【特价】滨特尔（pentair）PP棉滤芯', 'xxx', '/image/product002.jpg');
INSERT INTO product VALUES (3, 0, 5, '3M SFKC01-CN1沐浴净化器替换滤芯', 'yyy', '/image/product002.jpg');

CREATE TABLE IF NOT EXISTS goods (
  `id`         INT         NOT NULL UNIQUE AUTO_INCREMENT,
  `product_id` INT         NOT NULL,
  `city_id`    SMALLINT    NOT NULL,
  `price`      SMALLINT    NOT NULL        DEFAULT 0,
  `price_pre`  VARCHAR(16) NOT NULL,
  `price_post` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`product_id`, `city_id`),
  FOREIGN KEY (`product_id`) REFERENCES product (id),
  FOREIGN KEY (`city_id`) REFERENCES city (id)
);

INSERT INTO `goods` (`id`, `product_id`, `city_id`, `price`, `price_pre`, `price_post`)
VALUES (0, 3, 0, 9800, '$', '台');

