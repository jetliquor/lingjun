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

CREATE TABLE IF NOT EXISTS category (
  `id`      SMALLINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name_cn` VARCHAR(16)          NOT NULL DEFAULT ''
);

INSERT INTO category VALUES (0, '滤芯');
INSERT INTO category VALUES (1, '净水器');

DROP TABLE IF EXISTS product;
CREATE TABLE IF NOT EXISTS product (
  `id`       INT       NOT NULL UNIQUE AUTO_INCREMENT,
  `category_id`  SMALLINT  NOT NULL,
  `brand_id` SMALLINT  NOT NULL,
  `name`     CHAR(255) NOT NULL,
  `brief`    TEXT      NOT NULL        DEFAULT '',
  `img`      TINYTEXT  NOT NULL        DEFAULT '',
  PRIMARY KEY (`category_id`, `brand_id`, `name`),
  FOREIGN KEY (`category_id`) REFERENCES category (id),
  FOREIGN KEY (`brand_id`) REFERENCES brand (id)
);

INSERT INTO product VALUES (0, 0, 0, '【特价】爱惠浦（Everpure） PP棉滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (1, 0, 1, '【特价】滨特尔（pentair）PP棉滤芯',	'滨特尔', '/image/product001.jpg');
INSERT INTO product VALUES (2, 0, 0, '【特价】爱惠浦（Everpure） Microgard Pro4 净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (3, 0, 0, '【特价】爱惠浦（Everpure） H-100 净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (4, 0, 0, '【特价】爱惠浦（Everpure） I500（2） 净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (5, 0, 0, '【特价】爱惠浦（Everpure）I2000（2）净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (6, 0, 0, '【特价】爱惠浦（Everpure）BH2 加强款滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (7, 0, 0, '【特价】爱惠浦（Everpure）OW4 Plus加强款滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (8, 0, 0, '【特价】爱惠浦（Everpure） EF-900P 净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (9, 0, 0, '【特价】爱惠浦（Everpure） 4FC-S 替换滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (10, 0, 0, '【特价】爱惠浦（Everpure） H-104 净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (11, 0, 0, '【特价】爱惠浦（Everpure）4DC升级版滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (12, 0, 0, '【特价】爱惠浦（Everpure）MC2 加强款滤芯', 	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (13, 0, 0, '【特价】爱惠浦（Everpure） H-300 净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (14, 0, 0, '【特价】爱惠浦（Everpure） 4FC 替换主滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (15, 0, 0, '【特价】爱惠浦（Everpure） 4K Plus 加强款滤芯', 	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (16, 0, 0, '【特价】爱惠浦（Everpure） PBS-400净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (17, 0, 0, '【特价】爱惠浦（Everpure）7FC-S 替换主滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (18, 0, 0, '【特价】爱惠浦（Everpure） MH2 净水机滤芯', 	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (19, 0, 0, '【特价】爱惠浦（Everpure） EF-900 滤芯','爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (20, 0, 0, '【特价】爱惠浦（Everpure） SPA-400 滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (21, 0, 0, '【特价】爱惠浦（Everpure） I4000（2） 净水机滤芯',	'爱惠浦', '/image/product001.jpg');
INSERT INTO product VALUES (22, 0, 1, '【特价】滨特尔（pentair Water） EF-200M 替换主滤芯',	'滨特尔', '/image/product001.jpg');
INSERT INTO product VALUES (23, 0, 1, '【特价】滨特尔（pentair Water） EF-104M 替换主滤芯',	'滨特尔', '/image/product001.jpg');
INSERT INTO product VALUES (24, 0, 1, '【特价】滨特尔（pentair Water） EF-100MS 替换主滤芯',	'滨特尔', '/image/product001.jpg');
INSERT INTO product VALUES (25, 0, 1, '【特价】滨特尔（pentair Water） EF-200UL 替换主滤芯',	'滨特尔', '/image/product001.jpg');
INSERT INTO product VALUES (26, 0, 2, '怡口（ECOWATER） CTO 滤芯', 	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (27, 0, 2, '怡口（ECOWATER） GAC 滤芯', 	'怡口' , '/image/product001.jpg');
INSERT INTO product VALUES (28, 0, 2, '怡口（ECOWATER） MR FACT 滤芯',	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (29, 0, 2, '怡口（ECOWATER） 超滤膜 滤芯',	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (30, 0, 2, '怡口（ECOWATER） RO膜 滤芯',	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (31, 0, 2, '怡口（ECOWATER） CES-150E/P 滤芯',	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (32, 0, 2, '怡口（ECOWATER） VC-3000 820VC专用滤芯',	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (33, 0, 2, '怡口（ECOWATER） MR-3000 820VC专用滤芯',	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (34, 0, 2, '怡口（ECOWATER） LT-3000 811LT专用滤芯',	'怡口', '/image/product001.jpg');
INSERT INTO product VALUES (35, 0, 3, '英国道尔顿净水器滤芯M15系列净水器UCC滤芯',	'道尔顿', '/image/product001.jpg');
INSERT INTO product VALUES (36, 0, 3, '道尔顿Doulton净水器BSP-M10-UCC滤芯',	'道尔顿', '/image/product001.jpg');
INSERT INTO product VALUES (37, 0, 3, '道尔顿净水器M12-SCC滤芯 精度0.2微米',	'道尔顿', '/image/product001.jpg');
INSERT INTO product VALUES (38, 0, 3, '英国道尔顿（Doulton）ECO-FAST-UCC滤芯',	'道尔顿', '/image/product001.jpg');
INSERT INTO product VALUES (39, 0, 3, '英国道尔顿（Doulton） M68 UCC 矽藻瓷滤芯',	'道尔顿', '/image/product001.jpg');
INSERT INTO product VALUES (40, 0, 4, '飞利浦（PHILIPS） WP3911 超滤膜活性炭 复合滤芯',	'飞利浦', '/image/product001.jpg');
INSERT INTO product VALUES (41, 0, 4, '飞利浦（PHILIPS） WP3903 型超滤复合滤芯', 	'飞利浦', '/image/product001.jpg');
INSERT INTO product VALUES (42, 0, 4, '飞利浦(PHILIPS) WP3961 颗粒活性炭 滤芯', 	'飞利浦', '/image/product001.jpg');
INSERT INTO product VALUES (43, 0, 5, '3M 净滋CDW7101V 家用净水器 替换滤芯',	'3M', '/image/product001.jpg');
INSERT INTO product VALUES (44, 0, 5, '3M DWS2000-C-CN 滤芯', 	'3M', '/image/product001.jpg');
INSERT INTO product VALUES (45, 0, 5, '3M CDW7101V-C滤芯', 	'3M', '/image/product001.jpg');
INSERT INTO product VALUES (46, 0, 5, '3M DWS4000-C-CN+PFS4000-C-CN 滤芯', 	'3M', '/image/product001.jpg');
INSERT INTO product VALUES (47, 0, 5, '3M AP Easy-C-LC 滤芯', 	'3M', '/image/product001.jpg');
INSERT INTO product VALUES (48, 0, 5, '3M AP Easy Cyst-FF 净水器 替换滤芯', 	'3M', '/image/product001.jpg');
INSERT INTO product VALUES (49, 0, 5, '3M SFKC01-CN1沐浴净化器替换滤芯', 	'3M', '/image/product001.jpg');

CREATE TABLE IF NOT EXISTS goods (
  `id`         INT         NOT NULL UNIQUE AUTO_INCREMENT,
  #`sn`         CHAR(16)    NOT NULL UNIQUE,
  `city_id`    SMALLINT    NOT NULL,
  `product_id` INT         NOT NULL,
  `price`      SMALLINT    NOT NULL        DEFAULT 0,
  `price_pre`  VARCHAR(16) NOT NULL,
  `price_post` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`product_id`, `city_id`),
  FOREIGN KEY (`product_id`) REFERENCES product (id),
  FOREIGN KEY (`city_id`) REFERENCES city (id)
);

INSERT INTO goods VALUES (0,  0, 0,  80   , '￥', '台');
INSERT INTO goods VALUES (1,  0, 1,  80   , '￥', '台');
INSERT INTO goods VALUES (2,  0, 2,  599  , '￥', '台');
INSERT INTO goods VALUES (3,  0, 3,  375  , '￥', '台');
INSERT INTO goods VALUES (4,  0, 4,  449  , '￥', '台');
INSERT INTO goods VALUES (5,  0, 5,  525  , '￥', '台');
INSERT INTO goods VALUES (6,  0, 6,  375  , '￥', '台');
INSERT INTO goods VALUES (7,  0, 7,  525  , '￥', '台');
INSERT INTO goods VALUES (8,  0, 8,  615  , '￥', '台');
INSERT INTO goods VALUES (9,  0, 9,  615  , '￥', '台');
INSERT INTO goods VALUES (10, 0, 10, 435  , '￥', '台');
INSERT INTO goods VALUES (11, 0, 11, 375  , '￥', '台');
INSERT INTO goods VALUES (12, 0, 12, 488  , '￥', '台');
INSERT INTO goods VALUES (13, 0, 13, 465  , '￥', '台');
INSERT INTO goods VALUES (14, 0, 14, 567  , '￥', '台');
INSERT INTO goods VALUES (15, 0, 15, 426  , '￥', '台');
INSERT INTO goods VALUES (16, 0, 16, 495  , '￥', '台');
INSERT INTO goods VALUES (17, 0, 17, 825  , '￥', '台');
INSERT INTO goods VALUES (18, 0, 18, 510  , '￥', '台');
INSERT INTO goods VALUES (19, 0, 19, 565  , '￥', '台');
INSERT INTO goods VALUES (20, 0, 20, 465  , '￥', '台');
INSERT INTO goods VALUES (21, 0, 21, 675  , '￥', '台');
INSERT INTO goods VALUES (22, 0, 22, 705  , '￥', '台');
INSERT INTO goods VALUES (23, 0, 23, 817  , '￥', '台');
INSERT INTO goods VALUES (24, 0, 24, 967  , '￥', '台');
INSERT INTO goods VALUES (25, 0, 25, 968  , '￥', '台');
INSERT INTO goods VALUES (26, 0, 26, 580  , '￥', '台');
INSERT INTO goods VALUES (27, 0, 27, 420  , '￥', '台');
INSERT INTO goods VALUES (28, 0, 28, 960  , '￥', '台');
INSERT INTO goods VALUES (29, 0, 29, 1280 , '￥', '台');
INSERT INTO goods VALUES (30, 0, 30, 1880 , '￥', '台');
INSERT INTO goods VALUES (31, 0, 31, 930  , '￥', '台');
INSERT INTO goods VALUES (32, 0, 32, 880  , '￥', '台');
INSERT INTO goods VALUES (33, 0, 33, 1080 , '￥', '台');
INSERT INTO goods VALUES (34, 0, 34, 880  , '￥', '台');
INSERT INTO goods VALUES (35, 0, 35, 650  , '￥', '台');
INSERT INTO goods VALUES (36, 0, 36, 498  , '￥', '台');
INSERT INTO goods VALUES (37, 0, 37, 658  , '￥', '台');
INSERT INTO goods VALUES (38, 0, 38, 750  , '￥', '台');
INSERT INTO goods VALUES (39, 0, 39, 720  , '￥', '台');
INSERT INTO goods VALUES (40, 0, 40, 338  , '￥', '台');
INSERT INTO goods VALUES (41, 0, 41, 159  , '￥', '台');
INSERT INTO goods VALUES (42, 0, 42, 169  , '￥', '台');
INSERT INTO goods VALUES (43, 0, 43, 1299 , '￥', '台');
INSERT INTO goods VALUES (44, 0, 44, 1399 , '￥', '台');
INSERT INTO goods VALUES (45, 0, 45, 1299 , '￥', '台');
INSERT INTO goods VALUES (46, 0, 46, 2600 , '￥', '台');
INSERT INTO goods VALUES (47, 0, 47, 833  , '￥', '台');
INSERT INTO goods VALUES (48, 0, 48, 899  , '￥', '台');
INSERT INTO goods VALUES (49, 0, 49, 299  , '￥', '台');
