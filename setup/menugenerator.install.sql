/* Create menus data table */
CREATE TABLE IF NOT EXISTS cot_menugenerator (
        mg_id int(10) unsigned NOT NULL auto_increment,
        mg_path varchar(255) NOT NULL default '0',
        mg_title varchar(255) NOT NULL default '',
        mg_extra varchar(255) NOT NULL default '',
        mg_href varchar(255) NOT NULL default '',
        mg_desc varchar(255) NOT NULL default '',
        mg_users varchar(255) NOT NULL default '',
        PRIMARY KEY  (mg_id)
        );