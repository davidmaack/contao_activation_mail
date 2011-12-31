-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_member`
-- 

CREATE TABLE `tl_member` (
  `am_send_mail` char(1) NOT NULL default '',
  `am_mail_template_enable` int(10) NOT NULL default '0',
  `am_mail_template_disable` int(10) NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
