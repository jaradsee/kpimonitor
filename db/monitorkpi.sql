/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : monitorkpi

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2018-12-06 09:22:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for budyear
-- ----------------------------
DROP TABLE IF EXISTS `budyear`;
CREATE TABLE `budyear` (
  `BUDYEAR_ID` int(4) NOT NULL AUTO_INCREMENT,
  `BUDYEAR_NAME` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`BUDYEAR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of budyear
-- ----------------------------
INSERT INTO `budyear` VALUES ('1', '2560');
INSERT INTO `budyear` VALUES ('2', '2561');
INSERT INTO `budyear` VALUES ('3', '2562');

-- ----------------------------
-- Table structure for goal
-- ----------------------------
DROP TABLE IF EXISTS `goal`;
CREATE TABLE `goal` (
  `GOAL_ID` int(2) NOT NULL AUTO_INCREMENT,
  `GOAL_NAME` longtext,
  PRIMARY KEY (`GOAL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goal
-- ----------------------------
INSERT INTO `goal` VALUES ('1', 'R1.1 ระบบบริการได้มาตรฐานผ่านการรับรองคุณภาพ');
INSERT INTO `goal` VALUES ('2', 'S2.1 ประชาชนได้รับการดูแลสุขภาพอย่างมีมาตรฐาน');
INSERT INTO `goal` VALUES ('3', 'S2.2 ผู้รับบริการมีความพึงพอใจ');
INSERT INTO `goal` VALUES ('4', 'S2.3 ผู้รับบริการเข้าถึงบริการที่จำเป็น มีคุณภาพและปลอดภัย');
INSERT INTO `goal` VALUES ('5', 'M 3.1 พัฒนาระบบบริการสุขภาพที่จำเป็นของโรงพยาบาลให้ได้มาตรฐาน');
INSERT INTO `goal` VALUES ('6', 'M 3.2 พัฒนาระบบบริการสุขภาพระดับปฐมภูมิของเครือข่ายบริการสุขภาพอำเภอฟากท่า');
INSERT INTO `goal` VALUES ('7', 'M 3.3 พัฒนาระบบการแพทย์ฉุกเฉินและระบบส่งต่อ');
INSERT INTO `goal` VALUES ('8', 'M 3.4 พัฒนาระบบบริการสุขภาพกลุ่มผู้สูงอายุและผู้มีภาวะพึ่งพิงด้านสุขภาพ');
INSERT INTO `goal` VALUES ('9', 'R 1.2 ประชาชนมีสุขภาพดีและมีพฤติกรรมสุขภาพที่เหมาะสม');
INSERT INTO `goal` VALUES ('10', 'S 2.4 ภาคีเครือข่ายสุขภาพอำเภอฟากท่ามีความเข้มแข็งในการจัดการสุขภาพในพื้นที่(พชอ.)');
INSERT INTO `goal` VALUES ('11', 'S 2.5 ประชาชนมีพฤติกรรมสุขภาพที่เหมาะสม');
INSERT INTO `goal` VALUES ('12', 'M 3.5 พัฒนาการดำเนินงานด้านส่งเสริมและป้องกันสุขภาพในประชาชนทุกกลุ่มวัย');
INSERT INTO `goal` VALUES ('13', 'M 3.6 ส่งเสริมความปลอดภัยด้านอาหารและยา ผลิตภัณฑ์และบริการสุขภาพ และการจัดการ Green and Clean Hospital');
INSERT INTO `goal` VALUES ('14', 'M 3.7 ส่งเสริมการจัดการอนามัยสิ่งแวดล้อมและอาชีวอนามัย');
INSERT INTO `goal` VALUES ('15', 'R 1.3 บุคลากรมีความสุขและมีความผูกพันต่อองค์กร');
INSERT INTO `goal` VALUES ('16', 'S 2.6 บุคลากรมีความรู้ สมรรถนะเหมาะสมกับการให้บริการ');
INSERT INTO `goal` VALUES ('17', 'C 4.1 พัฒนาระบบHRM ขององค์กร');
INSERT INTO `goal` VALUES ('18', 'C 4.2 ส่งเสริมค่านิยม MOPH ขององค์กร');
INSERT INTO `goal` VALUES ('19', 'R 1.4 องค์กรมีธรรมาภิบาล');
INSERT INTO `goal` VALUES ('20', 'S 2.7 องค์กรโปร่งใส ตรวจสอบได้');
INSERT INTO `goal` VALUES ('21', 'C 4.4 พัฒนาเทคโนโลยีสารสนเทศ');
INSERT INTO `goal` VALUES ('22', 'C 4.5 พัฒนาการบริหารจัดการด้านการเงิน การคลังอย่างมีประสิทธิภาพ');
INSERT INTO `goal` VALUES ('23', 'C 4.6 พัฒนาระบบการจัดการความรู้ งานวิจัยและนวัตกรรม');

-- ----------------------------
-- Table structure for issues
-- ----------------------------
DROP TABLE IF EXISTS `issues`;
CREATE TABLE `issues` (
  `ISSUES_ID` int(2) NOT NULL AUTO_INCREMENT,
  `ISSUES_NAME` longtext,
  PRIMARY KEY (`ISSUES_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of issues
-- ----------------------------
INSERT INTO `issues` VALUES ('1', '1.ด้านบริการเป็นเลิศ(Service Excellent)');
INSERT INTO `issues` VALUES ('2', '2.ด้านส่งเสริมสุขภาพ ป้องกันโรคและคุ้มครองผู้บริโภคเป็นเลิศ(P&P Excellence)');
INSERT INTO `issues` VALUES ('3', '3.ด้านบุคลากรเป็นเลิศ (Personnel Excellence)');
INSERT INTO `issues` VALUES ('4', '4.ด้านบริหารเป็นเลิศด้วยธรรมาภิบาล(Governance Excellence)');

-- ----------------------------
-- Table structure for keykpi
-- ----------------------------
DROP TABLE IF EXISTS `keykpi`;
CREATE TABLE `keykpi` (
  `keyk_id` int(2) NOT NULL AUTO_INCREMENT,
  `kpi_id` int(2) DEFAULT NULL,
  `kpi_name` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `successkey` varchar(255) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `qarter` int(1) DEFAULT NULL,
  `user_key` int(2) DEFAULT NULL,
  `position` int(2) DEFAULT NULL,
  `Created_at` date DEFAULT NULL,
  `Crearted_by` int(11) DEFAULT NULL,
  `Updated_at` date DEFAULT NULL,
  `Updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`keyk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of keykpi
-- ----------------------------

-- ----------------------------
-- Table structure for kpi
-- ----------------------------
DROP TABLE IF EXISTS `kpi`;
CREATE TABLE `kpi` (
  `kpi_id` int(2) NOT NULL AUTO_INCREMENT,
  `kpi_name` varchar(500) DEFAULT NULL,
  `kpi_template` varchar(500) DEFAULT NULL,
  `stratetgic` int(2) DEFAULT NULL,
  `issues` int(2) DEFAULT NULL,
  `goal` int(2) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `sucess` int(2) DEFAULT NULL,
  `kpi` varchar(500) DEFAULT NULL,
  `date_record` date DEFAULT NULL,
  `bud_year` varchar(5) DEFAULT NULL,
  `project` longtext,
  `owner` varchar(255) DEFAULT NULL,
  `Created_by` varchar(255) DEFAULT NULL,
  `Updated_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kpi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kpi
-- ----------------------------
INSERT INTO `kpi` VALUES ('1', 'รพ.ฟากท่าผ่านการรับรองมาตรฐาน มาตรฐาน HA ขั้นที่ 3/Re act.', '', '1', '1', '1', 'ผ่านการรับรองขั้น3', '', null, '', null, '', 'แผนปฏิบัติการพัฒนาคุณภาพ HA โรงพยาบาลฟากท่า', 'ทพ.สุริยา รักเจริญ', '', '');

-- ----------------------------
-- Table structure for kpi_input
-- ----------------------------
DROP TABLE IF EXISTS `kpi_input`;
CREATE TABLE `kpi_input` (
  `KPI_ID` int(2) NOT NULL AUTO_INCREMENT,
  `KPI_NAME` varchar(500) DEFAULT NULL,
  `KPI_TEMPLATE` varchar(500) DEFAULT NULL,
  `STRATEGIC` int(2) DEFAULT NULL,
  `ISSUES` int(2) DEFAULT NULL,
  `GOAL` int(2) DEFAULT NULL,
  `TARGET` varchar(255) DEFAULT NULL,
  `RESULT` varchar(255) DEFAULT NULL,
  `SUCESS` int(2) DEFAULT NULL,
  `KPI` varchar(500) DEFAULT NULL,
  `DATE_RECORD` date DEFAULT NULL,
  `BUD_YEAR` varchar(5) DEFAULT NULL,
  `PROJECT` longtext,
  `OWNER` varchar(255) DEFAULT NULL,
  `Created_by` varchar(255) DEFAULT NULL,
  `Updated_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`KPI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kpi_input
-- ----------------------------
INSERT INTO `kpi_input` VALUES ('1', 'รพ.ฟากท่าผ่านการรับรองมาตรฐาน มาตรฐาน HA ขั้นที่ 3/Re act.', '', null, null, null, 'ผ่านการรับรองขั้น3', '', null, '', null, '', 'แผนปฏิบัติการพัฒนาคุณภาพ HA โรงพยาบาลฟากท่า', 'ทพ.สุริยา รักเจริญ', '', '');

-- ----------------------------
-- Table structure for quarter
-- ----------------------------
DROP TABLE IF EXISTS `quarter`;
CREATE TABLE `quarter` (
  `QUARTER_ID` int(2) NOT NULL AUTO_INCREMENT,
  `FISCAL_YEAR` varchar(255) DEFAULT NULL,
  `QUARTER_NAME` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`QUARTER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quarter
-- ----------------------------
INSERT INTO `quarter` VALUES ('1', '2560', 'ไตรมาสที่ 1 ต.ค.2559 -31ธ.ค.2559');
INSERT INTO `quarter` VALUES ('2', '2560', 'ไตรมาสที่ 2 1ม.ค.2560 -31มี.ค.2560');
INSERT INTO `quarter` VALUES ('3', '2560', 'ไตรมาสที่ 3 1เม.ย.2560 -30 มิ.ย.2560');
INSERT INTO `quarter` VALUES ('4', '2560', 'ไตรมาสที่ 4 1ก.ค.2560 -30 ก.ย.2560');

-- ----------------------------
-- Table structure for stratetgic
-- ----------------------------
DROP TABLE IF EXISTS `stratetgic`;
CREATE TABLE `stratetgic` (
  `STRAT_ID` int(2) NOT NULL AUTO_INCREMENT,
  `STRAT_NAME` longtext,
  PRIMARY KEY (`STRAT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stratetgic
-- ----------------------------
INSERT INTO `stratetgic` VALUES ('1', 'ยุทธศาสตร์ที่ 1 พัฒนาระบบบริการสุขภาพให้มีคุณภาพได้มาตรฐาน');
INSERT INTO `stratetgic` VALUES ('2', 'ยุทธศาสตร์ที่ ๒ พัฒนาระบบส่งเสริมสุขภาพ ป้องกันโรค และคุ้มครองผู้บริโภค');
INSERT INTO `stratetgic` VALUES ('3', 'ยุทธศาสตร์ที่ 3 พัฒนาระบบบริหารจัดการบุคลากรขององค์กร');
INSERT INTO `stratetgic` VALUES ('4', 'ยุทธศาสตร์ที่ 4 พัฒนาระบบบริหารเพื่อมุ่งสู่องค์กรที่มีธรรมาภิบาล');
