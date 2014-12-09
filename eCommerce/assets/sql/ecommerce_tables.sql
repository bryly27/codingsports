CREATE DATABASE  IF NOT EXISTS `ecommercesports` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `eCommerceSports`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: eCommerceSports
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(145) DEFAULT NULL,
  `last_name` varchar(145) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `email` varchar(145) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Bryant','Yu','12345678','bryant@bryant.com',NULL,NULL),(2,'Stephan ','Long','12345678','stephan@stephan.com',NULL,NULL),(3,'Arjun','Kankanala','12345678',NULL,NULL,NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billingInfos`
--

DROP TABLE IF EXISTS `billingInfos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billingInfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(145) DEFAULT NULL,
  `last_name` varchar(145) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `card_#` int(11) DEFAULT NULL,
  `security_code` varchar(45) DEFAULT NULL,
  `expiration` int(11) DEFAULT NULL,
  `cusomer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billingInfos`
--

LOCK TABLES `billingInfos` WRITE;
/*!40000 ALTER TABLE `billingInfos` DISABLE KEYS */;
/*!40000 ALTER TABLE `billingInfos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(145) DEFAULT NULL,
  `last_name` varchar(145) DEFAULT NULL,
  `address` varchar(145) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(145) DEFAULT NULL,
  `last_name` varchar(145) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `address` varchar(145) DEFAULT NULL,
  `total_price` decimal(8,2) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(145) DEFAULT NULL,
  `description` text,
  `photo` varchar(145) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `model_#` varchar(45) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `quantity_sold` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Addidas Performance','With the Adidas Cross \'Em 3 basketball sneakers you\'ll run circles around the defenders and shake fools all game long!','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shoes/addidasperformance.png',139.50,'basketball','shoes',NULL,'male','grey','Adidas',NULL,100,NULL,NULL,NULL),(2,'Nike Jordan Melo','Air Jordan Melo M9 Basketball Shoes','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shoes/nikejordan.png',69.99,'basketball','shoes',NULL,'male','red','Nike',NULL,100,NULL,NULL,NULL),(3,'Nike Lunars','A lightweight basketball shoe sports an innovative Hyperfuse construction for superior durability and breathability. Responsive Lunarlon cushioning provides lasting comfort and impact protection to keep him moving on the court.\n','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shoes/nikelunar.png',299.99,'basketball','shoes',NULL,'male','black','Nike',NULL,100,NULL,NULL,NULL),(4,'Nike Overplay','Nike The Overplay VII Basketball Shoes','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shoes/nikeoverplay.png',40.50,'basketball','shoes',NULL,'male','black','Nike',NULL,100,NULL,NULL,NULL),(5,'Nike Zoom','Nike Air Pegasus 83 Suede Retro Running Shoes','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shoes/nikezoom.png',59.99,'basketball','shoes',NULL,'male','blue','Nike',NULL,100,NULL,NULL,NULL),(6,'Nike Elite','The Nike Elite Stripe Men\'s Basketball Shorts are made with allover mesh fabric that pulls sweat away from the skin for outstanding comfort and breathability on and off the court. Contrast panels with laser-cut perforations add style and enhance ventilation.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shorts/nikeelite.png',32.99,'basketball','shorts',NULL,'male','red','Nike',NULL,100,NULL,NULL,NULL),(7,'Nike Layup','Designed with mesh panels and a length that extends past the knee, the Nike Master the Mind Men\'s Basketball Shorts provide ventilation and unrestricted motion on the court.FeaturesStretch waist with interior drawcord for a snug, comfortable fit.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shorts/nikelayup.png',32.98,'basketball','shorts',NULL,'male','black','Nike',NULL,100,NULL,NULL,NULL),(8,'Toptie','Cheap basketball shorts.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shorts/toptie.png',5.99,'basketball','shorts',NULL,'male','black','Toptie',NULL,100,NULL,NULL,NULL),(9,'Under Armour Big Boys','Textured knit fabric delivers durability without excess weight. Moisture Transport System wicks sweat away from the body.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shorts/underarmourbigboys.png',19.99,'basketball','shorts',NULL,'male','black','Under Armour',NULL,100,NULL,NULL,NULL),(10,'T-Shirt The Evolution','Fruit of the Loom T-Shirt','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shirts/evolution.png',5.99,'basketball','shirts',NULL,'male','blue','Fruit of the Loom',NULL,100,NULL,NULL,NULL),(11,'Nike Men\'s Making This Shot','Nike Men\'s Making This Shot Look Easy T-Shirt','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shirts/nikemakingthisshot.png',24.98,'basketball','shirts',NULL,'male','grey','Nike',NULL,100,NULL,NULL,NULL),(12,'Under Armour Big Boys T-Shirt','UA Tech™ fabric has an ultra-soft, more natural feel for unrivaled comfort. Moisture Transport System wicks sweat away from the body. Anti-odor technology prevents the growth of odor causing microbes. Soft screen-print graphics. 3.9 oz. Polyester. Imported.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shirts/underarmourtshirt.png',21.99,'basketball','shirts',NULL,'male','black','Under Armour',NULL,100,NULL,NULL,NULL),(13,'Under Armour Girls Shorts','Dual layer mesh delivers incredibly lightweight breathability. Signature Moisture Transport System wicks sweat to keep you dry and light. Soft covered elastic waistband with external drawcords for the perfect fit. Scalloped hem for extra mobility. Color blocked side panels. 7” inseam. Polyester. Imported.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shorts/underarmoursskillz.png',18.99,'basketball','shorts',NULL,'female','pink','Under Armour',NULL,100,NULL,NULL,NULL),(14,'ASICS GEL-Noosa Running','Boldly delivering lightweight performance, the iconic GEL-Noosa Tri series gets updated with Seamless Construction and is loaded with triathlon specific features. The Open Mesh Upper and Perforated Sockliner improves breathability and moisture drainage, while the optional Elastic Laces and tongue and heel grips make transition a breeze.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shoes/asicsgelnoosa.png',80.99,'running','shoes',NULL,'female','neon','Asics',NULL,100,NULL,NULL,NULL),(15,'ASICS GEL-Venture Running','In 1949, Mr. Kihachiro Onitsuka began his athletic footwear company (Onitsuka Co., Ltd.) by manufacturing basketball shoes out of his living room in Kobe, Japan. He chose the name ASICS for his company in 1977, based on a famous Latin phrase \"Anima Sana In Corpore Sano,\" which, when translated, expresses the ancient ideal of \"A Sound Mind in a Sound Body.\" Taking the acronym of this phrase, ASICS was founded on the belief that the best way to create a healthy and happy lifestyle is to promote total health and fitness. Today, ASICS offers a full line of performance-driven athletic shoes and technical active sports apparel and accessories dedicated to bringing harmony to the body and soul.','https://s3-us-west-1.amazonaws.com/codingdojoecommerce/shoes/asicsgelventure.png',39.95,'running','shoes',NULL,'female','grey','Asics',NULL,100,NULL,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-08 17:51:51
