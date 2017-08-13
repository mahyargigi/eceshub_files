<?php
OW::getLanguage()->importPluginLangs(OW::getPluginManager()->getPlugin('startups')->getRootDir() . 'langs.zip', 'startups');

$sql = "CREATE TABLE `" . OW_DB_PREFIX . "startups_startup` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(30) NOT NULL,
    `shortDescription` VARCHAR(140) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `description` text NOT NULL,
    `website`  text default '',
    `address`  text default '',
    `telephoneNumber`  int,
    `creator`  int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `creator` (`creator`)
)
ENGINE=MyISAM CHARSET=utf8
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql);

$sql2 = "CREATE TABLE `" . OW_DB_PREFIX . "startups_like` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `userid`  int(11) NOT NULL,
    `startupid`  int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `userid` (`userid`),
    KEY `startupid` (`startupid`)
)
ENGINE=MyISAM CHARSET=utf8
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql2);

$sql3= "CREATE TABLE `" . OW_DB_PREFIX . "startups_ad`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `userId`  int(11) NOT NULL,
    `startupId`  int(11) NOT NULL,
    `adId`  int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `userId` (`userId`),
    KEY `startupId` (`startupId`),
    KEY `adId` (`adId`)
)
ENGINE=MyISAM CHARSET=utf8
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql3);

$sql4= "CREATE TABLE `" . OW_DB_PREFIX . "startups_news`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `startupId`  int(11) NOT NULL,
    `title` VARCHAR(30) NOT NULL,
    `image` VARCHAR(255),
    `description` text NOT NULL,
    PRIMARY KEY (`id`),
    KEY `startupId` (`startupId`)
)
ENGINE=MyISAM CHARSET=utf8
ROW_FORMAT=DEFAULT";
OW::getDbo()->query($sql4);