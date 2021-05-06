TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `add_cart_detail-update-total-cart` AFTER INSERT ON `cart_detail` FOR EACH ROW UPDATE cart SET total_cart = (SELECT SUM(total) FROM cart_detail WHERE cart_detail.id_cart = NEW.id_cart)\nWHERE cart.id = NEW.id_cart' 'CREATE DEFINER=`root`@`localhost` TRIGGER `update_cart_detail-Cart` AFTER UPDATE ON `cart_detail` FOR EACH ROW UPDATE cart \n    SET total_cart = (SELECT SUM(total) \n                      FROM cart_detail\n                      WHERE cart_detail.id_cart = 						NEW.id_cart)\n    WHERE id = NEW.id_cart' 'CREATE DEFINER=`root`@`localhost` TRIGGER `remove_cart_detail` AFTER DELETE ON `cart_detail` FOR EACH ROW UPDATE cart \n    SET total_cart = (SELECT SUM(total) \n                      FROM cart_detail\n                      WHERE cart_detail.id_cart = 						old.id_cart)\n    WHERE id = old.id_cart'
sql_modes=524288 524288 524288
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
db_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
created=161632576885 161632576914 161632576903
