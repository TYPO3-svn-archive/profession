#
# Table structure for table 'tt_address'
#
CREATE TABLE tt_address (
	privacy int(4) DEFAULT '0' NOT NULL,
	newsletter int(4) DEFAULT '0' NOT NULL,
	record_type varchar(255) DEFAULT '' NOT NULL,
	organisation tinytext NOT NULL,
	staff tinytext NOT NULL,
	address2 text NOT NULL,
	state int(11) DEFAULT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	department int(11) DEFAULT NULL
);
