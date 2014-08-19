CREATE TABLE IF NOT EXISTS `wwwsqldesigner` (
  `keyword` varchar(30) NOT NULL default '',
  `data` mediumtext,
  `dt` timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY  (`keyword`)
);
