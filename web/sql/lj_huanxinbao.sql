

CREATE TABLE IF NOT EXISTS `hxb_Goods` (
  `goods_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  `sn` varchar(60) NOT NULL default '',
  `name` varchar(120) NOT NULL default '',
  `click_count` int(10) unsigned NOT NULL default '0',
  `brand_id` smallint(5) unsigned NOT NULL default '0',
  `stock_number` smallint(5) unsigned NOT NULL default '0',
  `market_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `shop_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `keywords` varchar(255) NOT NULL default '',
  `goods_brief` varchar(255) NOT NULL default '',
  `desc` text NOT NULL,
  `img` varchar(255) NOT NULL default '',
  `img_thumb` varchar(255) NOT NULL default '',
  `img_original` varchar(255) NOT NULL default '',
  `add_time` int(10) unsigned NOT NULL default '0',
  `last_update` int(10) unsigned NOT NULL default '0',
  `type` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `sn` (`goods_sn`),
  KEY `cat_id` (`cat_id`),
  KEY `last_update` (`last_update`),
  KEY `brand_id` (`brand_id`),
  KEY `goods_weight` (`goods_weight`),
  KEY `promote_end_date` (`promote_end_date`),
  KEY `promote_start_date` (`promote_start_date`),
  KEY `goods_number` (`goods_number`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

【特价】爱惠浦（Everpure） PP棉滤芯	爱惠浦	80
【特价】滨特尔（pentair）PP棉滤芯	滨特尔	80
【特价】爱惠浦（Everpure） Microgard Pro4 净水机滤芯	爱惠浦	599
【特价】爱惠浦（Everpure） H-100 净水机滤芯	爱惠浦	375
【特价】爱惠浦（Everpure） I500（2） 净水机滤芯	爱惠浦	449
【特价】爱惠浦（Everpure）I2000（2）净水机滤芯	爱惠浦	525
【特价】爱惠浦（Everpure）BH2 加强款滤芯	爱惠浦	375
【特价】爱惠浦（Everpure）OW4 Plus加强款滤芯	爱惠浦	525
【特价】爱惠浦（Everpure） EF-900P 净水机滤芯	爱惠浦	615
【特价】爱惠浦（Everpure） 4FC-S 替换滤芯	爱惠浦	615
【特价】爱惠浦（Everpure） H-104 净水机滤芯	爱惠浦	435
【特价】爱惠浦（Everpure）4DC升级版滤芯	爱惠浦	375
【特价】爱惠浦（Everpure）MC2 加强款滤芯 	爱惠浦	488
【特价】爱惠浦（Everpure） H-300 净水机滤芯	爱惠浦	465
【特价】爱惠浦（Everpure） 4FC 替换主滤芯	爱惠浦	567
【特价】爱惠浦（Everpure） 4K Plus 加强款滤芯 	爱惠浦	426
【特价】爱惠浦（Everpure） PBS-400净水机滤芯	爱惠浦	495
【特价】爱惠浦（Everpure）7FC-S 替换主滤芯	爱惠浦	825
【特价】爱惠浦（Everpure） MH2 净水机滤芯 	爱惠浦	510
【特价】爱惠浦（Everpure） EF-900 滤芯	爱惠浦	565
【特价】爱惠浦（Everpure） SPA-400 滤芯	爱惠浦	465
【特价】爱惠浦（Everpure） I4000（2） 净水机滤芯	爱惠浦	675
【特价】滨特尔（pentair Water） EF-200M 替换主滤芯	滨特尔	705
【特价】滨特尔（pentair Water） EF-104M 替换主滤芯	滨特尔	817
【特价】滨特尔（pentair Water） EF-100MS 替换主滤芯	滨特尔	967
【特价】滨特尔（pentair Water） EF-200UL 替换主滤芯	滨特尔	968
怡口（ECOWATER） CTO 滤芯 	怡口	580
怡口（ECOWATER） GAC 滤芯 	怡口	420
怡口（ECOWATER） MR FACT 滤芯	怡口	960
怡口（ECOWATER） 超滤膜 滤芯	怡口	1280
怡口（ECOWATER） RO膜 滤芯	怡口	1880
怡口（ECOWATER） CES-150E/P 滤芯	怡口	930
怡口（ECOWATER） VC-3000 820VC专用滤芯	怡口	880
怡口（ECOWATER） MR-3000 820VC专用滤芯	怡口	1080
怡口（ECOWATER） LT-3000 811LT专用滤芯	怡口	880
英国道尔顿净水器滤芯M15系列净水器UCC滤芯	道尔顿	650
道尔顿Doulton净水器BSP-M10-UCC滤芯	道尔顿	498
道尔顿净水器M12-SCC滤芯 精度0.2微米	道尔顿	658
英国道尔顿（Doulton）ECO-FAST-UCC滤芯	道尔顿	750
英国道尔顿（Doulton） M68 UCC 矽藻瓷滤芯	道尔顿	720
飞利浦（PHILIPS） WP3911 超滤膜活性炭 复合滤芯	飞利浦	338
飞利浦（PHILIPS） WP3903 型超滤复合滤芯 	飞利浦	159
飞利浦(PHILIPS) WP3961 颗粒活性炭 滤芯 	飞利浦	169
3M 净滋CDW7101V 家用净水器 替换滤芯	3M	1299
3M DWS2000-C-CN 滤芯 	3M	1399
3M CDW7101V-C滤芯 	3M	1299
3M DWS4000-C-CN+PFS4000-C-CN 滤芯 	3M	2600
3M AP Easy-C-LC 滤芯 	3M	833
3M AP Easy Cyst-FF 净水器 替换滤芯 	3M	899
3M SFKC01-CN1沐浴净化器替换滤芯 	3M	299