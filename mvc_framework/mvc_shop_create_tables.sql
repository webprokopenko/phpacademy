-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mvc
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attr_groups`
--

DROP TABLE IF EXISTS `attr_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attr_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attr_groups`
--

LOCK TABLES `attr_groups` WRITE;
/*!40000 ALTER TABLE `attr_groups` DISABLE KEYS */;
INSERT INTO `attr_groups` VALUES (1,'Обувь');
/*!40000 ALTER TABLE `attr_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attr_values`
--

DROP TABLE IF EXISTS `attr_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attr_values` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `attribute_id` smallint(5) unsigned DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attr_values`
--

LOCK TABLES `attr_values` WRITE;
/*!40000 ALTER TABLE `attr_values` DISABLE KEYS */;
INSERT INTO `attr_values` VALUES (1,1,'САНДАЛИИ'),(2,1,'ВЬЕТНАМКИ'),(3,1,'ШЛЁПАНЦЫ'),(4,2,'Красный'),(5,2,'Черный'),(6,2,'Белый'),(7,3,'39'),(8,3,'40'),(9,3,'41');
/*!40000 ALTER TABLE `attr_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attributes` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
INSERT INTO `attributes` VALUES (1,'Тип товара'),(2,'Цвет'),(3,'Размер');
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attributes_attr_groups`
--

DROP TABLE IF EXISTS `attributes_attr_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attributes_attr_groups` (
  `attribute_id` smallint(5) unsigned NOT NULL,
  `attr_group_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes_attr_groups`
--

LOCK TABLES `attributes_attr_groups` WRITE;
/*!40000 ALTER TABLE `attributes_attr_groups` DISABLE KEYS */;
INSERT INTO `attributes_attr_groups` VALUES (1,1),(2,1),(3,1);
/*!40000 ALTER TABLE `attributes_attr_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,0,'Обувь','obuv'),(2,0,'Одежда','odezhda'),(3,1,'Мужская обувь','muzhskaya-obyv'),(4,1,'Женская обувь','zhenskaya-obuv');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery_types`
--

DROP TABLE IF EXISTS `delivery_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery_types`
--

LOCK TABLES `delivery_types` WRITE;
/*!40000 ALTER TABLE `delivery_types` DISABLE KEYS */;
INSERT INTO `delivery_types` VALUES (1,'Курьер'),(2,'НП'),(3,'Самовывоз');
/*!40000 ALTER TABLE `delivery_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_products` (
  `order_id` mediumint(8) NOT NULL,
  `product_id` smallint(5) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `attr_value_id` mediumint(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_products`
--

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` VALUES (1,1,750,8),(1,3,2000,7);
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_statuses`
--

DROP TABLE IF EXISTS `order_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_statuses`
--

LOCK TABLES `order_statuses` WRITE;
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
INSERT INTO `order_statuses` VALUES (1,'Не оформлен'),(2,'Оформлен'),(3,'Оплачен частично'),(4,'Оплачен полностью'),(5,'Доставлен'),(6,'Возврат');
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `status_id` tinyint(3) unsigned DEFAULT NULL,
  `cookie` char(32) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `client_name` varchar(45) DEFAULT NULL,
  `delivery_type` tinyint(3) DEFAULT NULL,
  `comment` text,
  `sum_payed` float DEFAULT '0',
  `dt_create` timestamp NULL DEFAULT NULL,
  `dt_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,NULL,'0501112233','Олег',3,'Тест',0,NULL,NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  `is_new` tinyint(1) unsigned DEFAULT NULL,
  `is_popular` tinyint(1) DEFAULT NULL,
  `dt_created` timestamp NULL DEFAULT NULL,
  `dt_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'TIMBERLAND САНДАЛИИ МУЖСКИЕ МОДЕЛЬ TF3239','timberland_hollbrook','Мужские кожаные сандалии Timberland со стелькой Anti-Fatigue и износостойкой полиуретановой подошвой Vibram для более надежного сцепления с любыми типами поверхности',1749,1,1,NULL,NULL),(2,'TIMBERLAND ВЬЕТНАМКИ МУЖСКИЕ МОДЕЛЬ TF3242','timberland_wild_dunes','Мужские шлепанцы Timberland на мягкой резиновой подошве',909,1,NULL,NULL,NULL),(3,'TOMMY HILFIGER БОСОНОЖКИ ЖЕНСКИЕ МОДЕЛЬ TD812','tommy-hilfiger_103','Женские босоножки TOMMY HILFIGER, из текстиля. На удобной танкетке, с переплетениями и застежкой на щиколотке.',1399,1,1,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_attr_values`
--

DROP TABLE IF EXISTS `products_attr_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_attr_values` (
  `product_id` smallint(5) unsigned NOT NULL,
  `attr_value_id` mediumint(8) unsigned DEFAULT NULL,
  KEY `prod_id` (`product_id`),
  KEY `attr_id` (`attr_value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_attr_values`
--

LOCK TABLES `products_attr_values` WRITE;
/*!40000 ALTER TABLE `products_attr_values` DISABLE KEYS */;
INSERT INTO `products_attr_values` VALUES (1,1),(1,5),(2,2),(2,5),(3,1),(3,4),(1,9),(2,8),(3,7);
/*!40000 ALTER TABLE `products_attr_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_categories`
--

DROP TABLE IF EXISTS `products_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_categories` (
  `product_id` smallint(5) unsigned NOT NULL,
  `category_id` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_categories`
--

LOCK TABLES `products_categories` WRITE;
/*!40000 ALTER TABLE `products_categories` DISABLE KEYS */;
INSERT INTO `products_categories` VALUES (1,3),(2,3),(3,4);
/*!40000 ALTER TABLE `products_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_warehouses`
--

DROP TABLE IF EXISTS `products_warehouses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_warehouses` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` smallint(5) NOT NULL,
  `warehouse_id` tinyint(3) DEFAULT NULL,
  `count` tinyint(3) DEFAULT NULL,
  `attr_value_id` mediumint(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_warehouses`
--

LOCK TABLES `products_warehouses` WRITE;
/*!40000 ALTER TABLE `products_warehouses` DISABLE KEYS */;
INSERT INTO `products_warehouses` VALUES (1,1,1,5,9),(2,1,2,1,7),(3,2,1,1,8),(4,3,2,2,7);
/*!40000 ALTER TABLE `products_warehouses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warehouses`
--

DROP TABLE IF EXISTS `warehouses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warehouses` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warehouses`
--

LOCK TABLES `warehouses` WRITE;
/*!40000 ALTER TABLE `warehouses` DISABLE KEYS */;
INSERT INTO `warehouses` VALUES (1,'Киев','Крещатик 1'),(2,'Одесса','Маяковского 9');
/*!40000 ALTER TABLE `warehouses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;