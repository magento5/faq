<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('faqmanage')};
CREATE TABLE {$this->getTable('faqmanage')} (
  `faqmanage_id` int(11) unsigned NOT NULL auto_increment,
  `catid` varchar(255) NOT NULL default '',
  `question1` varchar(255) NOT NULL default '',
  `question2` varchar(255) NOT NULL default '',
  `question3` varchar(255) NOT NULL default '',
  `question4` varchar(255) NOT NULL default '',
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`faqmanage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 