TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `can\'t add product already exists` BEFORE INSERT ON `my_product` FOR EACH ROW IF EXISTS(SELECT * \n              FROM my_product\n              WHERE id_product =NEW.id_product \n              AND id_user = NEW.id_user)\nTHEN\n	    SIGNAL SQLSTATE VALUE \'45000\' SET MESSAGE_TEXT = \'INSERT failed due to duplicate wish item\';\nEND IF'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='utf8mb4_unicode_ci'
created=161632577069
