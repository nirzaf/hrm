#
# TABLE STRUCTURE FOR: acc_account_name
#

DROP TABLE IF EXISTS `acc_account_name`;

CREATE TABLE `acc_account_name` (
  `account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) NOT NULL,
  `account_type` int(11) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('1', 'Employee Salary', '0');
INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('3', 'Example', '1');
INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('4', 'Loan Expense', '0');
INSERT INTO `acc_account_name` (`account_id`, `account_name`, `account_type`) VALUES ('5', 'Loan Income', '1');


#
# TABLE STRUCTURE FOR: acc_coa
#

DROP TABLE IF EXISTS `acc_coa`;

CREATE TABLE `acc_coa` (
  `HeadCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PHeadName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HeadLevel` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `IsTransaction` tinyint(1) NOT NULL,
  `IsGL` tinyint(1) NOT NULL,
  `HeadType` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `IsBudget` tinyint(1) NOT NULL,
  `IsDepreciation` tinyint(1) NOT NULL,
  `DepreciationRate` decimal(18,2) NOT NULL,
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CreateDate` datetime NOT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UpdateDate` datetime NOT NULL,
  PRIMARY KEY (`HeadName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021403', 'AC', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:33:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50202', 'Account Payable', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:50:43', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10203', 'Account Receivable', 'Current Asset', '2', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2013-09-18 15:29:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020201', 'Advance', 'Advance, Deposit And Pre-payments', '3', '1', '0', '1', 'A', '0', '0', '0.00', 'Zoherul', '2015-05-31 13:29:12', 'admin', '2015-12-31 16:46:32');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020103', 'Advance House Rent', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-10-02 16:55:38', 'admin', '2016-10-02 16:57:32');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10202', 'Advance, Deposit And Pre-payments', 'Current Asset', '2', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-12-31 16:46:24');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020602', 'Advertisement and Publicity', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:51:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010410', 'Air Cooler', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-05-23 12:13:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020603', 'AIT Against Advertisement', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:52:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1', 'Assets', 'COA', '0', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010204', 'Attendance Machine', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:49:31', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40216', 'Audit Fee', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2017-07-18 12:54:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010202', 'Bank AlFalah', 'Cash At Bank', '4', '1', '1', '1', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:32:37', 'admin', '2015-10-15 15:32:52');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021002', 'Bank Charge', 'Financial Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:21:03', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30203', 'Bank Interest', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'Obaidul', '2015-01-03 14:49:54', 'admin', '2016-09-25 11:04:19');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010104', 'Book Shelf', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:46:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010407', 'Books and Journal', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:45:37', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10201020301', 'Branch 1', 'Standard Bank', '5', '1', '1', '1', 'A', '0', '0', '0.00', '2', '2018-07-19 13:44:33', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020604', 'Business Development Expenses', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:52:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020606', 'Campaign Expenses', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:52:57', 'admin', '2016-09-19 14:52:48');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020502', 'Campus Rent', 'House Rent', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:46:53', 'admin', '2017-04-27 17:02:39');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40212', 'Car Running Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:28:43', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10201', 'Cash & Cash Equivalent', 'Current Asset', '2', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-10-15 15:57:55');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020102', 'Cash At Bank', 'Cash & Cash Equivalent', '3', '1', '0', '0', 'A', '0', '0', '0.00', '2', '2018-07-19 13:43:59', 'admin', '2015-10-15 15:32:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020101', 'Cash In Hand', 'Cash & Cash Equivalent', '3', '1', '1', '1', 'A', '0', '0', '0.00', '2', '2018-07-31 12:56:28', 'admin', '2016-05-23 12:05:43');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30101', 'Cash Sale', 'Store Income', '1', '1', '1', '1', 'I', '0', '0', '0.00', '2', '2018-07-08 07:51:26', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010207', 'CCTV', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:24', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020102', 'CEO Current A/C', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-09-25 11:54:54', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010101', 'Class Room Chair', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:45:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021407', 'Close Circuit Cemera', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:35:35', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020601', 'Commision on Admission', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:51:21', 'admin', '2016-09-19 14:42:54');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010206', 'Computer', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021410', 'Computer (R)', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-03-24 12:38:52', 'Zoherul', '2016-03-24 12:41:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010102', 'Computer Table', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:45:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('301020401', 'Continuing Registration fee - UoL (Income)', 'Registration Fee (UOL) Income', '4', '1', '1', '0', 'I', '0', '0', '0.00', 'admin', '2015-10-15 17:40:40', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020904', 'Contratuall Staff Salary', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:34', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('403', 'Cost of Sale', 'Expence', '0', '1', '1', '0', 'E', '0', '0', '0.00', '2', '2018-07-08 10:37:16', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30102', 'Credit Sale', 'Store Income', '1', '1', '1', '1', 'I', '0', '0', '0.00', '2', '2018-07-08 07:51:34', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020709', 'Cultural Expense', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'nasmud', '2017-04-29 12:45:10', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102', 'Current Asset', 'Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2018-07-07 11:23:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502', 'Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40100002', 'cw-Chichawatni', 'Store Expenses', '2', '1', '1', '0', 'E', '0', '0', '0.00', '2', '2018-08-02 16:30:41', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020202', 'Deposit', 'Advance, Deposit And Pre-payments', '3', '1', '0', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:40:42', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020605', 'Design & Printing Expense', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:55:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020404', 'Dish Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:58:21', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40215', 'Dividend', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2016-09-25 14:07:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020403', 'Drinking Water Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:58:10', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010211', 'DSLR Camera', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:53:17', 'admin', '2016-01-02 16:23:25');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200008', 'E4Y9T7CJ-JahidHasan', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', 'Jhon  Doe', '2018-10-17 08:48:04', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200010', 'E78PIKVA-SharifMahmud', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', 'Jhon  Doe', '2018-10-24 07:49:57', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020908', 'Earned Leave', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:38', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020607', 'Education Fair Expenses', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:53:42', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200009', 'EF9F7DAR-sdfsdf', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', 'Jhon  Doe', '2018-10-24 07:40:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020200010', 'EJ721I8E-', 'Account Payable', '2', '1', '1', '0', 'L', '0', '0', '0.00', 'Jhon  Doe', '2018-10-24 10:34:45', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010602', 'Electric Equipment', 'Electrical Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:44:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010203', 'Electric Kettle', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:49:07', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10106', 'Electrical Equipment', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:43:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020407', 'Electricity Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:59:31', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10202010501', 'employ', 'Salary', '5', '1', '0', '0', 'A', '0', '0', '0.00', 'admin', '2018-07-05 11:47:10', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020301', 'Employee Receivable', 'Account Receivable', '3', '1', '0', '1', 'A', '0', '0', '0.00', '2', '2018-10-17 11:13:45', 'admin', '2018-07-07 12:31:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40201', 'Entertainment', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2013-07-08 16:21:26', 'anwarul', '2013-07-17 14:21:47');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('2', 'Equity', 'COA', '0', '1', '0', '0', 'L', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4', 'Expence', 'COA', '0', '1', '0', '0', 'E', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020903', 'Faculty,Staff Salary & Allowances', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:21', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021404', 'Fax Machine', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:34:15', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020905', 'Festival & Incentive Bonus', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:48', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010103', 'File Cabinet', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:46:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40210', 'Financial Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-08-20 12:24:31', 'admin', '2015-10-15 19:20:36');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010403', 'Fire Extingushier', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:39:32', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021408', 'Furniture', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:35:47', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10101', 'Furniture & Fixturers', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'anwarul', '2013-08-20 16:18:15', 'anwarul', '2013-08-21 13:35:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020406', 'Gas Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:59:20', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('20201', 'General Reserve', 'Reserve & Surplus', '2', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-25 14:07:12', 'admin', '2016-10-02 17:48:49');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10105', 'Generator', 'Non Current Assets', '2', '1', '1', '1', 'A', '0', '0', '0.00', 'Zoherul', '2016-02-27 16:02:35', 'admin', '2016-05-23 12:05:18');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021414', 'Generator Repair', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-06-16 10:21:05', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40213', 'Generator Running Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:29:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10103', 'Groceries and Cutleries', 'Non Current Assets', '2', '1', '1', '1', 'A', '0', '0', '0.00', '2', '2018-07-12 10:02:55', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010408', 'Gym Equipment', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:46:03', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020907', 'Honorarium', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:26', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40205', 'House Rent', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-08-24 10:26:56', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40100001', 'HP-Hasilpur', 'Academic Expenses', '2', '1', '1', '0', 'E', '0', '0', '0.00', '2', '2018-07-29 03:44:23', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020702', 'HR Recruitment Expenses', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-09-25 12:55:49', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020703', 'Incentive on Admission', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-09-25 12:56:09', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3', 'Income', 'COA', '0', '1', '0', '0', 'I', '0', '0', '0.00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30204', 'Income from Photocopy & Printing', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'Zoherul', '2015-07-14 10:29:54', 'admin', '2016-09-25 11:04:28');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020302', 'Income Tax Payable', 'Liabilities for Expenses', '3', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2016-09-19 11:18:17', 'admin', '2016-09-28 13:18:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020302', 'Insurance Premium', 'Prepayment', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-09-19 13:10:57', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021001', 'Interest on Loan', 'Financial Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:20:53', 'admin', '2016-09-19 14:53:34');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020401', 'Internet Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:56:55', 'admin', '2015-10-15 18:57:32');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10107', 'Inventory', 'Non Current Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '2', '2018-07-07 15:21:58', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10205010101', 'Jahangir', 'Hasan', '1', '1', '0', '0', 'A', '0', '0', '0.00', '2', '2018-07-07 10:40:56', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010210', 'LCD TV', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:52:27', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30103', 'Lease Sale', 'Store Income', '1', '1', '1', '1', 'I', '0', '0', '0.00', '2', '2018-07-08 07:51:52', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5', 'Liabilities', 'COA', '0', '1', '0', '0', 'L', '0', '0', '0.00', 'admin', '2013-07-04 12:32:07', 'admin', '2015-10-15 19:46:54');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50203', 'Liabilities for Expenses', 'Current Liabilities', '2', '1', '0', '0', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:50:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020707', 'Library Expenses', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2017-01-10 15:34:54', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021409', 'Lift', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:36:12', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50101', 'Long Term Borrowing', 'Non Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2013-07-04 12:32:26', 'admin', '2015-10-15 19:47:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020608', 'Marketing & Promotion Exp.', 'Promonational Expence', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:53:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020901', 'Medical Allowance', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:11:33', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010411', 'Metal Ditector', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'Zoherul', '2016-08-22 10:55:22', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021413', 'Micro Oven', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-05-12 14:53:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30202', 'Miscellaneous (Income)', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'anwarul', '2014-02-06 15:26:31', 'admin', '2016-09-25 11:04:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020909', 'Miscellaneous Benifit', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:53', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020701', 'Miscellaneous Exp', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-09-25 12:54:39', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40207', 'Miscellaneous Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2014-04-26 16:49:56', 'admin', '2016-09-25 12:54:19');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010401', 'Mobile Phone', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-01-29 10:43:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020101', 'Mr Ashiqur Rahman', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-12-31 16:47:23', 'admin', '2016-09-25 11:55:13');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010212', 'Network Accessories', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-01-02 16:23:32', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020408', 'News Paper Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-01-02 15:55:57', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('101', 'Non Current Assets', 'Assets', '1', '1', '0', '0', 'A', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-10-15 15:29:11');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('501', 'Non Current Liabilities', 'Liabilities', '1', '1', '0', '0', 'L', '0', '0', '0.00', 'anwarul', '2014-08-30 13:18:20', 'admin', '2015-10-15 19:49:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010404', 'Office Decoration', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:40:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10102', 'Office Equipment', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'anwarul', '2013-12-06 18:08:00', 'admin', '2015-10-15 15:48:21');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021401', 'Office Repair & Maintenance', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:33:15', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30201', 'Office Stationary (Income)', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'anwarul', '2013-07-17 15:21:06', 'admin', '2016-09-25 11:04:50');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('402', 'Other Expenses', 'Expence', '1', '1', '0', '0', 'E', '0', '0', '0.00', '2', '2018-07-07 14:00:16', 'admin', '2015-10-15 18:37:42');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('302', 'Other Income', 'Income', '1', '1', '0', '0', 'I', '0', '0', '0.00', '2', '2018-07-07 13:40:57', 'admin', '2016-09-25 11:04:09');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40211', 'Others (Non Academic Expenses)', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'Obaidul', '2014-12-03 16:05:42', 'admin', '2015-10-15 19:22:09');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30205', 'Others (Non-Academic Income)', 'Other Income', '2', '1', '0', '1', 'I', '0', '0', '0.00', 'admin', '2015-10-15 17:23:49', 'admin', '2015-10-15 17:57:52');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('10104', 'Others Assets', 'Non Current Assets', '2', '1', '0', '1', 'A', '0', '0', '0.00', 'admin', '2016-01-29 10:43:16', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020910', 'Outstanding Salary', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-04-24 11:56:50', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021405', 'Oven', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:34:31', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021412', 'PABX-Repair', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-04-24 14:40:18', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020902', 'Part-time Staff Salary', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:12:06', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010202', 'Photocopy & Fax Machine', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:47:27', 'admin', '2016-05-23 12:14:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021411', 'Photocopy Machine Repair', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'Zoherul', '2016-04-24 12:40:02', 'admin', '2017-04-27 17:03:17');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3020503', 'Practical Fee', 'Others (Non-Academic Income)', '3', '1', '1', '1', 'I', '0', '0', '0.00', 'admin', '2017-07-22 18:00:37', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1020203', 'Prepayment', 'Advance, Deposit And Pre-payments', '3', '1', '0', '1', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:40:51', 'admin', '2015-12-31 16:49:58');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010201', 'Printer', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:47:15', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40202', 'Printing and Stationary', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2013-07-08 16:21:45', 'admin', '2016-09-19 14:39:32');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3020502', 'Professional Training Course(Oracal-1)', 'Others (Non-Academic Income)', '3', '1', '1', '0', 'I', '0', '0', '0.00', 'nasim', '2017-06-22 13:28:05', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30207', 'Professional Training Course(Oracal)', 'Other Income', '2', '1', '0', '1', 'I', '0', '0', '0.00', 'nasim', '2017-06-22 13:24:16', 'nasim', '2017-06-22 13:25:56');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010208', 'Projector', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40206', 'Promonational Expence', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-07-11 13:48:57', 'anwarul', '2013-07-17 14:23:03');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40214', 'Repair and Maintenance', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:32:46', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('202', 'Reserve & Surplus', 'Equity', '1', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2016-09-25 14:06:34', 'admin', '2016-10-02 17:48:57');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('20102', 'Retained Earnings', 'Share Holders Equity', '2', '1', '1', '1', 'L', '0', '0', '0.00', 'admin', '2016-05-23 11:20:40', 'admin', '2016-09-25 14:05:06');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020708', 'River Cruse', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2017-04-24 15:35:25', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020105', 'Salary', 'Advance', '4', '1', '0', '0', 'A', '0', '0', '0.00', 'admin', '2018-07-05 11:46:44', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40209', 'Salary & Allowances', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-12-12 11:22:58', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('404', 'Sale Discount', 'Expence', '1', '1', '1', '0', 'E', '0', '0', '0.00', '2', '2018-07-19 10:15:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010406', 'Security Equipment', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:41:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('20101', 'Share Capital', 'Share Holders Equity', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'anwarul', '2013-12-08 19:37:32', 'admin', '2015-10-15 19:45:35');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('201', 'Share Holders Equity', 'Equity', '1', '1', '0', '0', 'L', '0', '0', '0.00', '', '0000-00-00 00:00:00', 'admin', '2015-10-15 19:43:51');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50201', 'Short Term Borrowing', 'Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:50:30', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40208', 'Software Development Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-11-21 14:13:01', 'admin', '2015-10-15 19:02:51');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020906', 'Special Allowances', 'Salary & Allowances', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:13:13', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('50102', 'Sponsors Loan', 'Non Current Liabilities', '2', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:48:02', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020706', 'Sports Expense', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'nasmud', '2016-11-09 13:16:53', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010203', 'Standard Bank', 'Cash At Bank', '4', '1', '1', '1', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:33:33', 'admin', '2015-10-15 15:33:48');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102010204', 'State Bank', 'Cash At Bank', '4', '1', '1', '1', 'A', '0', '0', '0.00', 'admin', '2015-12-31 16:44:14', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('401', 'Store Expenses', 'Expence', '1', '1', '0', '0', 'E', '0', '0', '0.00', '2', '2018-07-07 13:38:59', 'admin', '2015-10-15 17:58:46');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('301', 'Store Income', 'Income', '1', '1', '0', '0', 'I', '0', '0', '0.00', '2', '2018-07-07 13:40:37', 'admin', '2015-09-17 17:00:02');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('3020501', 'Students Info. Correction Fee', 'Others (Non-Academic Income)', '3', '1', '1', '0', 'I', '0', '0', '0.00', 'admin', '2015-10-15 17:24:45', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010601', 'Sub Station', 'Electrical Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:44:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020704', 'TB Care Expenses', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-10-08 13:03:04', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('30206', 'TB Care Income', 'Other Income', '2', '1', '1', '1', 'I', '0', '0', '0.00', 'admin', '2016-10-08 13:00:56', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020501', 'TDS on House Rent', 'House Rent', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:44:07', 'admin', '2016-09-19 14:40:16');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502030201', 'TDS Payable House Rent', 'Income Tax Payable', '4', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-19 11:19:42', 'admin', '2016-09-28 13:19:37');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502030203', 'TDS Payable on Advertisement Bill', 'Income Tax Payable', '4', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-28 13:20:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('502030202', 'TDS Payable on Salary', 'Income Tax Payable', '4', '1', '1', '0', 'L', '0', '0', '0.00', 'admin', '2016-09-28 13:20:17', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021402', 'Tea Kettle', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:33:45', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020402', 'Telephone Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:57:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010209', 'Telephone Set & PABX', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:51:57', 'admin', '2016-10-02 17:10:40');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('102020104', 'Test', 'Advance', '4', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2018-07-05 11:42:48', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40203', 'Travelling & Conveyance', 'Other Expenses', '2', '1', '1', '1', 'E', '0', '0', '0.00', 'admin', '2013-07-08 16:22:06', 'admin', '2015-10-15 18:45:13');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4021406', 'TV', 'Repair and Maintenance', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 19:35:07', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010205', 'UPS', 'Office Equipment', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:50:38', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('40204', 'Utility Expenses', 'Other Expenses', '2', '1', '0', '1', 'E', '0', '0', '0.00', 'anwarul', '2013-07-11 16:20:24', 'admin', '2016-01-02 15:55:22');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020503', 'VAT on House Rent Exp', 'House Rent', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:49:22', 'admin', '2016-09-25 14:00:52');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('5020301', 'VAT Payable', 'Liabilities for Expenses', '3', '1', '0', '1', 'L', '0', '0', '0.00', 'admin', '2015-10-15 19:51:11', 'admin', '2016-09-28 13:23:53');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010409', 'Vehicle A/C', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'Zoherul', '2016-05-12 12:13:21', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010405', 'Voltage Stablizer', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-03-27 10:40:59', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010105', 'Waiting Sofa - Steel', 'Furniture & Fixturers', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2015-10-15 15:46:29', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020405', 'WASA Bill', 'Utility Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2015-10-15 18:58:51', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('1010402', 'Water Purifier', 'Others Assets', '3', '1', '1', '0', 'A', '0', '0', '0.00', 'admin', '2016-01-29 11:14:11', '', '0000-00-00 00:00:00');
INSERT INTO `acc_coa` (`HeadCode`, `HeadName`, `PHeadName`, `HeadLevel`, `IsActive`, `IsTransaction`, `IsGL`, `HeadType`, `IsBudget`, `IsDepreciation`, `DepreciationRate`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`) VALUES ('4020705', 'Website Development Expenses', 'Miscellaneous Expenses', '3', '1', '1', '0', 'E', '0', '0', '0.00', 'admin', '2016-10-15 12:42:47', '', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: acc_transaction
#

DROP TABLE IF EXISTS `acc_transaction`;

CREATE TABLE `acc_transaction` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VNo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vtype` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VDate` date DEFAULT NULL,
  `COAID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Narration` text COLLATE utf8_unicode_ci,
  `Debit` decimal(18,2) DEFAULT NULL,
  `Credit` decimal(18,2) DEFAULT NULL,
  `StoreID` int(11) NOT NULL,
  `IsPosted` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreateDate` datetime DEFAULT NULL,
  `UpdateBy` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UpdateDate` datetime DEFAULT NULL,
  `IsAppove` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=367 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('90', '1003', 'LSIV', '2018-07-10', '30102', 'LSIV For Invoice No1003', '0.00', '28175.00', '2', '1', '2', '2018-07-10 14:46:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('92', '1003', 'LSIV', '2018-07-10', '10107', 'LSIV For Invoice No1003', '0.00', '20000.00', '2', '1', '2', '2018-07-10 14:46:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('95', '1004', 'CRIV', '2018-07-11', '30102', 'CRIV For Invoice No1004', '0.00', '46000.00', '2', '1', '2', '2018-07-11 10:52:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('97', '1004', 'CIV', '2018-07-11', '10107', 'CIV For Invoice No1004', '0.00', '40000.00', '2', '1', '2', '2018-07-11 10:52:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('100', '1005', 'LSIV', '2018-07-12', '30102', 'LSIV For Invoice No1005', '0.00', '28175.00', '2', '1', '2', '2018-07-12 05:51:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('102', '1005', 'LSIV', '2018-07-12', '10107', 'LSIV For Invoice No1005', '0.00', '20000.00', '2', '1', '2', '2018-07-12 05:51:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('104', '1004', 'RECVIV', '2018-07-12', '102030108', 'RECVIV For Invoice No1004', '0.00', '-5000.00', '2', '1', '2', '2018-07-12 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('105', '1006', 'CRIV', '2018-07-12', '102030200', 'CRIV For Invoice No1006', '0.00', '0.00', '2', '1', '2', '2018-07-12 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('106', '1006', 'CRIV', '2018-07-12', '102030200', 'CRIV For Invoice No1006', '0.00', '23000.00', '2', '1', '2', '2018-07-12 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('108', '1006', 'CRIV', '2018-07-12', '30102', 'CRIV For Invoice No1006', '0.00', '23000.00', '2', '1', '2', '2018-07-12 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('110', '1006', 'CIV', '2018-07-12', '10107', 'CIV For Invoice No1006', '0.00', '20000.00', '2', '1', '2', '2018-07-12 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('111', '1007', 'LSIV', '2018-07-12', '102030200', 'LSIV For Invoice No1007', '0.00', '0.00', '2', '1', '2', '2018-07-12 06:10:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('112', '1007', 'LSIV', '2018-07-12', '102030200', 'LSIV For Invoice No1007', '0.00', '0.00', '2', '1', '2', '2018-07-12 06:10:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('114', '1007', 'LSIV', '2018-07-12', '30102', 'LSIV For Invoice No1007', '0.00', '0.00', '2', '1', '2', '2018-07-12 06:10:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('116', '1007', 'LSIV', '2018-07-12', '10107', 'LSIV For Invoice No1007', '0.00', '20000.00', '2', '1', '2', '2018-07-12 06:10:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('118', '1006', 'RECVIV', '2018-07-12', '102030200', 'RECVIV For Invoice No1006', '0.00', '2000.00', '2', '1', '2', '2018-07-12 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('120', '1008', 'LSIV', '2018-07-16', '30102', 'LSIV For Invoice No1008', '0.00', '33350.00', '2', '1', '2', '2018-07-16 11:51:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('122', '1008', 'LSIV', '2018-07-16', '10107', 'LSIV For Invoice No1008', '0.00', '20000.00', '2', '1', '2', '2018-07-16 11:51:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('124', 'DV-1', 'DV', '2018-07-16', '102020103', '', '5000.00', '0.00', '2', '1', '2', '2018-07-16 15:55:01', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('125', 'DV-2', 'DV', '2018-07-16', '102010203', '', '0.00', '2000.00', '2', '1', '2', '2018-07-16 15:55:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('126', 'DV-2', 'DV', '2018-07-16', '', '', '2000.00', '0.00', '2', '1', '2', '2018-07-16 15:55:15', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('127', '1009', 'LSIV', '2018-07-17', '102030200', 'LSIV For Invoice No1009', '2300.00', '0.00', '2', '1', '2', '2018-07-17 06:21:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('128', '1009', 'LSIV', '2018-07-17', '102030200', 'LSIV For Invoice No1009', '0.00', '28175.00', '2', '1', '2', '2018-07-17 06:21:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('130', '1009', 'LSIV', '2018-07-17', '30102', 'LSIV For Invoice No1009', '0.00', '28175.00', '2', '1', '2', '2018-07-17 06:21:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('132', '1009', 'LSIV', '2018-07-17', '10107', 'LSIV For Invoice No1009', '0.00', '20000.00', '2', '1', '2', '2018-07-17 06:21:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('133', '1010', 'LSIV', '2018-07-17', '1020301000007', 'LSIV For Invoice No1010', '4600.00', '0.00', '2', '1', '2', '2018-07-17 07:00:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('134', '1010', 'LSIV', '2018-07-17', '1020301000007', 'LSIV For Invoice No1010', '0.00', '29440.00', '2', '1', '2', '2018-07-17 07:00:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('136', '1010', 'LSIV', '2018-07-17', '30102', 'LSIV For Invoice No1010', '0.00', '29440.00', '2', '1', '2', '2018-07-17 07:00:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('138', '1010', 'LSIV', '2018-07-17', '10107', 'LSIV For Invoice No1010', '0.00', '20000.00', '2', '1', '2', '2018-07-17 07:00:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('139', '1011', 'LSIV', '2018-07-18', '1020301000008', 'ls-9-Zubair Credit For Invoice No1011', '0.00', '2300.00', '2', '1', '2', '2018-07-18 16:34:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('140', '1011', 'LSIV', '2018-07-18', '1020301000008', 'ls-9-Zubair Debit of Remaining Price For Invoice#1011', '28175.00', '0.00', '2', '1', '2', '2018-07-18 16:34:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('142', '1011', 'LSIV', '2018-07-18', '30102', 'Store Credit For Invoice No1011', '0.00', '28175.00', '2', '1', '2', '2018-07-18 16:34:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('144', '1011', 'LSIV', '2018-07-18', '10107', 'Inventory Credit For Invoice No1011', '0.00', '20000.00', '2', '1', '2', '2018-07-18 16:34:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('145', '20180718163807', 'PO', '2018-07-18', '5020203', 'PO For 20180718163807', '0.00', '230000.00', '2', '1', '2', '2018-07-18 16:38:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('147', 'DV-3', 'DV', '2018-07-18', '5020203', '', '150000.00', '0.00', '2', '1', '2', '2018-07-18 16:41:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('148', '20180719051134', 'PO', '2018-07-19', '5020204', 'PO For 20180719051134', '0.00', '400000.00', '2', '1', '2', '2018-07-19 05:11:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('149', '20180721071535', 'PO', '2018-07-21', '10107', 'PO Receive Receive No 20180721071558', '40000.00', '0.00', '7', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('150', '1012', 'LSIV', '2018-07-24', '1020301000009', 'ls-10-abc Credit For Invoice No1012', '0.00', '0.00', '2', '1', '2', '2018-07-24 06:08:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('151', '1012', 'LSIV', '2018-07-24', '1020301000009', 'ls-10-abc Debit of Total Package Price For Invoice#1012', '0.00', '0.00', '2', '1', '2', '2018-07-24 06:08:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('153', '1012', 'LSIV', '2018-07-24', '30102', 'Store Credit For Invoice No1012', '0.00', '0.00', '2', '1', '2', '2018-07-24 06:08:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('155', '1012', 'LSIV', '2018-07-24', '10107', 'Inventory Credit For Invoice No1012', '0.00', '100000.00', '2', '1', '2', '2018-07-24 06:08:35', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('156', '1012', 'LSIV', '2018-07-24', '1020301000009', 'ls-10-abc Credit For Invoice No1012', '0.00', '2300.00', '2', '1', '2', '2018-07-24 06:08:43', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('157', '1012', 'LSIV', '2018-07-24', '1020301000009', 'ls-10-abc Debit of Total Package Price For Invoice#1012', '28175.00', '0.00', '2', '1', '2', '2018-07-24 06:08:43', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('159', '1012', 'LSIV', '2018-07-24', '30102', 'Store Credit For Invoice No1012', '0.00', '28175.00', '2', '1', '2', '2018-07-24 06:08:43', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('161', '1012', 'LSIV', '2018-07-24', '10107', 'Inventory Credit For Invoice No1012', '0.00', '20000.00', '2', '1', '2', '2018-07-24 06:08:43', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('162', '1012', 'LSIV', '2018-07-24', '1020301000009', 'ls-10-abc Credit For Invoice No1012', '0.00', '2300.00', '2', '1', '2', '2018-07-24 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('163', '1012', 'LSIV', '2018-07-24', '1020301000009', 'ls-10-abc Debit of Total Package Price For Invoice#1012', '28175.00', '0.00', '2', '1', '2', '2018-07-24 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('165', '1012', 'LSIV', '2018-07-24', '30102', 'Store Credit For Invoice No1012', '0.00', '28175.00', '2', '1', '2', '2018-07-24 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('167', '1012', 'LSIV', '2018-07-24', '10107', 'Inventory Credit For Invoice No1012', '0.00', '20000.00', '2', '1', '2', '2018-07-24 06:08:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('168', '1013', 'LSIV', '2018-07-24', '1020301000010', 'ls-11-xyz Credit For Invoice No1013', '0.00', '2300.00', '2', '1', '2', '2018-07-24 06:12:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('169', '1013', 'LSIV', '2018-07-24', '1020301000010', 'ls-11-xyz Debit of Total Package Price For Invoice#1013', '28175.00', '0.00', '2', '1', '2', '2018-07-24 06:12:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('171', '1013', 'LSIV', '2018-07-24', '30102', 'Store Credit For Invoice No1013', '0.00', '28175.00', '2', '1', '2', '2018-07-24 06:12:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('173', '1013', 'LSIV', '2018-07-24', '10107', 'Inventory Credit For Invoice No1013', '0.00', '20000.00', '2', '1', '2', '2018-07-24 06:12:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('174', '1014', 'CIV', '2018-07-24', '30101', 'Cash sale credit For Invoice No1014', '0.00', '5000.00', '2', '1', '2', '2018-07-24 06:13:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('177', '1014', 'CIV', '2018-07-24', '10107', 'Inventory credit For Invoice No1014', '0.00', NULL, '2', '1', '2', '2018-07-24 06:13:54', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('178', '1015', 'CRIV', '2018-07-24', '1020301000010', 'Customer Credit For Invoice No1015', '0.00', '5000.00', '2', '1', '2', '2018-07-24 06:15:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('179', '1015', 'CRIV', '2018-07-24', '1020301000010', 'Customer Debit For Invoice No1015', '23000.00', '0.00', '2', '1', '2', '2018-07-24 06:15:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('181', '1015', 'CRIV', '2018-07-24', '30102', 'store credit For Invoice No1015', '0.00', '23000.00', '2', '1', '2', '2018-07-24 06:15:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('183', '1015', 'CIV', '2018-07-24', '10107', 'Inventory Credit For Invoice No1015', '0.00', '0.00', '2', '1', '2', '2018-07-24 06:15:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('185', '1013', 'RECVIV', '2018-07-24', '1020301000010', 'Recovery Payment For Invoice No1013', '0.00', '2000.00', '2', '1', '2', '2018-07-24 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('187', '1015', 'RECVIV', '2018-07-24', '1020301000010', 'Credit Payment For Invoice No1015', '0.00', '10000.00', '2', '1', '2', '2018-07-24 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('188', '1016', 'CIV', '2018-07-24', '30101', 'Cash sale credit For Invoice No1016', '0.00', '50000.00', '2', '1', '2', '2018-07-24 06:19:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('191', '1016', 'CIV', '2018-07-24', '10107', 'Inventory credit For Invoice No1016', '0.00', NULL, '2', '1', '2', '2018-07-24 06:19:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('192', '20180724062050', 'PO', '2018-07-24', '5020203', 'PO For 20180724062050', '0.00', '2300000.00', '2', '1', '2', '2018-07-24 06:20:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('193', '20180727095912', 'PO', '2018-07-27', '5020205', 'PO For 20180727095912', '0.00', '75000.00', '2', '1', '2', '2018-07-27 09:59:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('194', '20180727095912', 'PO', '2018-07-27', '10107', 'PO Receive Receive No 20180727100252', '15000.00', '0.00', '7', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('195', '20180727095912', 'PO', '2018-07-27', '10107', 'PO Receive Receive No 20180727100328', '4900.00', '0.00', '7', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('196', '20180727100912', 'PO', '2018-07-27', '10107', 'PO Receive Receive No 20180727101053', '5000.00', '0.00', '7', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('197', '20180727101658', 'PO', '2018-07-27', '5020206', 'PO For 20180727101658', '0.00', '5000.00', '2', '1', '2', '2018-07-27 10:16:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('198', '1017', 'CIV', '2018-07-27', '30101', 'Cash sale credit For Invoice No1017', '0.00', '6500.00', '7', '1', '25', '2018-07-27 10:18:48', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('201', '1017', 'CIV', '2018-07-27', '10107', 'Inventory credit For Invoice No1017', '0.00', NULL, '7', '1', '25', '2018-07-27 10:18:48', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('202', '1018', 'CIV', '2018-07-27', '30101', 'Cash sale credit For Invoice No1018', '0.00', '6500.00', '6', '1', '24', '2018-07-27 10:24:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('205', '1018', 'CIV', '2018-07-27', '10107', 'Inventory credit For Invoice No1018', '0.00', NULL, '6', '1', '24', '2018-07-27 10:24:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('206', '1019', 'CIV', '2018-07-27', '30101', 'Cash sale credit For Invoice No1019', '0.00', '6500.00', '6', '1', '24', '2018-07-27 10:41:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('209', '1019', 'CIV', '2018-07-27', '10107', 'Inventory credit For Invoice No1019', '0.00', NULL, '6', '1', '24', '2018-07-27 10:41:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('210', '1020', 'CIV', '2018-07-29', '30101', 'Cash sale credit For Invoice No1020', '0.00', '5500.00', '6', '1', '24', '2018-07-29 03:21:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('213', '1020', 'CIV', '2018-07-29', '10107', 'Inventory credit For Invoice No1020', '0.00', NULL, '6', '1', '24', '2018-07-29 03:21:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('214', '1021', 'LSIV', '2018-07-29', '1020301000012', 'ls-12-asd Credit For Invoice No1021', '0.00', '1200.00', '6', '1', '24', '2018-07-29 03:31:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('215', '1021', 'LSIV', '2018-07-29', '1020301000012', 'ls-12-asd Debit of Total Package Price For Invoice#1021', '14700.00', '0.00', '6', '1', '24', '2018-07-29 03:31:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('217', '1021', 'LSIV', '2018-07-29', '30102', 'Store Credit For Invoice No1021', '0.00', '14700.00', '6', '1', '24', '2018-07-29 03:31:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('219', '1021', 'LSIV', '2018-07-29', '10107', 'Inventory Credit For Invoice No1021', '0.00', '5000.00', '6', '1', '24', '2018-07-29 03:31:06', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('221', '1015', 'RECVIV', '2018-07-29', '1020301000010', 'Credit Payment For Invoice No1015', '0.00', '100000.00', '2', '1', '2', '2018-07-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('223', '1013', 'RECVIV', '2018-07-29', '1020301000010', 'Recovery Payment For Invoice No1013', '0.00', '18700.00', '2', '1', '2', '2018-07-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('224', '1013', 'RECVIV', '2018-07-29', '404', 'Settlement Discount For Invoice# 1013 to 1020301000010', '0.00', '5175.00', '2', '1', '2', '2018-07-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('225', '1013', 'RECVIV', '2018-07-29', '1020301000010', 'Discounted Amount Credited to Customer Balance For Invoice# 1013', '0.00', '5175.00', '2', '1', '2', '2018-07-29 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('226', '4', 'RT', '2018-07-29', '1020301000012', 'Receive For 4', '3250000.00', '0.00', '6', '1', '2', '2018-07-29 03:39:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('228', '1021', 'RT', '2018-07-29', '10107', 'RT For Invoice No1021', '0.00', '0.00', '2', '1', '2', '2018-07-29 03:39:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('230', '20180727095912', 'PO', '2018-07-29', '5020205', 'P Return For 20180727095912', '4900.00', '0.00', '2', '1', '2', '2018-07-29 03:42:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('231', '20180727095912', 'PO', '2018-07-29', '10107', 'Purchase Return For PO No20180727095912', '0.00', '4900.00', '2', '1', '2', '2018-07-29 03:42:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('232', '20180730093805', 'PO', '2018-07-30', '5020203', 'PO For 20180730093805', '0.00', '20000.00', '2', '1', '2', '2018-07-30 09:38:05', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('233', '20180730093805', 'PO', '2018-07-30', '10107', 'PO Receive Receive No 20180730093823', '11900.00', '0.00', '6', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('234', '20180730093930', 'PO', '2018-07-30', '5020203', 'PO For 20180730093930', '0.00', '4000.00', '2', '1', '2', '2018-07-30 09:39:30', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('235', '20180730093930', 'PO', '2018-07-30', '10107', 'PO Receive Receive No 20180730093947', '4000.00', '0.00', '6', '1', NULL, NULL, NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('236', '1022', 'CIV', '2018-07-31', '30101', 'Cash sale credit For Invoice No1022', '0.00', '6500.00', '2', '1', '2', '2018-07-31 10:55:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('239', '1022', 'CIV', '2018-07-31', '10107', 'Inventory credit For Invoice No1022', '0.00', NULL, '2', '1', '2', '2018-07-31 10:55:40', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('240', '1023', 'CIV', '2018-07-31', '30101', 'Cash sale credit For Invoice No1023', '0.00', '13000.00', '2', '1', '2', '2018-07-31 10:57:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('243', '1023', 'CIV', '2018-07-31', '10107', 'Inventory credit For Invoice No1023', '0.00', NULL, '2', '1', '2', '2018-07-31 10:57:09', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('244', '1024', 'CIV', '2018-07-31', '30101', 'Cash sale credit For Invoice No1024', '0.00', '13000.00', '2', '1', '2', '2018-07-31 11:10:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('247', '1024', 'CIV', '2018-07-31', '10107', 'Inventory credit For Invoice No1024', '0.00', NULL, '2', '1', '2', '2018-07-31 11:10:39', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('249', '1009', 'RECVIV', '2018-08-01', '102030200', 'Recovery Payment For Invoice No1009', '0.00', '8625.00', '2', '1', '2', '2018-08-01 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('251', '1021', 'RECVIV', '2018-08-01', '1020301000012', 'Recovery Payment For Invoice No1021', '0.00', '4500.00', '2', '1', '2', '2018-08-01 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('253', '1011', 'RECVIV', '2018-08-01', '1020301000008', 'Recovery Payment For Invoice No1011', '0.00', '8000.00', '2', '1', '2', '2018-08-01 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('254', '1025', 'CIV', '2018-08-02', '1020101000001', 'Cash in hand debit For Invoice No1025', '32500.00', '0.00', '2', '1', '2', '2018-08-02 08:05:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('256', '1025', 'CIV', '2018-08-02', '10107', 'Inventory credit For Invoice No1025', '0.00', NULL, '2', '1', '2', '2018-08-02 08:05:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('257', '1025', 'CIV', '2018-08-02', '1020301000015', 'Customer debit for Product For Invoice No1025', '32500.00', '0.00', '2', '1', '2', '2018-08-02 08:05:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('258', '1025', 'CIV', '2018-08-02', '1020301000015', 'Customer credit for Paid Amount For Invoice No1025', '0.00', '32500.00', '2', '1', '2', '2018-08-02 08:05:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('259', '1026', 'CIV', '2018-08-02', '1020101000002', 'Cash in hand debit For Invoice No1026', '13000.00', '0.00', '2', '1', '2', '2018-08-02 08:23:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('261', '1026', 'CIV', '2018-08-02', '10107', 'Inventory credit For Invoice No1026', '0.00', NULL, '2', '1', '2', '2018-08-02 08:23:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('262', '1026', 'CIV', '2018-08-02', '1020301000015', 'Customer debit for Product For Invoice No1026', '13000.00', '0.00', '2', '1', '2', '2018-08-02 08:23:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('263', '1026', 'CIV', '2018-08-02', '1020301000015', 'Customer credit for Paid Amount For Invoice No1026', '0.00', '13000.00', '2', '1', '2', '2018-08-02 08:23:14', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('264', '1021', 'RECVIV', '2018-08-02', '1020301000012', 'Recovery Paid For Invoice No1021', '0.00', '2000.00', '2', '1', '2', '2018-08-02 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('265', '20180802162437', 'PO', '2018-08-02', '10107', 'PO Receive Receive No 20180802162451', '40000.00', '0.00', '6', '1', '2', '2018-08-02 16:24:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('266', '20180802162437', 'PO', '2018-08-02', '10107', 'PO Receive Receive No 20180802162451', '10000.00', '0.00', '9', '1', '2', '2018-08-02 16:24:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('267', '20180802162437', 'PO', '2018-08-02', '5020200007', 'PO received For PO No.20180802162437 Receive No.20180802162451', '0.00', '50000.00', '2', '1', '2', '2018-08-02 16:24:51', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('268', '1027', 'CIV', '2018-08-02', '1020101000002', 'Cash in hand debit For Invoice No1027', '15000.00', '0.00', '2', '1', '2', '2018-08-02 16:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('270', '1027', 'CIV', '2018-08-02', '10107', 'Inventory credit For Invoice No1027', '0.00', NULL, '2', '1', '2', '2018-08-02 16:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('271', '1027', 'CIV', '2018-08-02', '1020301000016', 'Customer debit for Product For Invoice No1027', '15000.00', '0.00', '2', '1', '2', '2018-08-02 16:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('272', '1027', 'CIV', '2018-08-02', '1020301000016', 'Customer credit for Paid Amount For Invoice No1027', '0.00', '15000.00', '2', '1', '2', '2018-08-02 16:32:47', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('274', '1028', 'CIV', '2018-08-02', '10107', 'Inventory credit For Invoice No1028', '0.00', NULL, '6', '1', '24', '2018-08-02 16:44:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('275', '1028', 'CIV', '2018-08-02', '1020301000012', 'Customer debit for Product For Invoice No1028', '15000.00', '0.00', '6', '1', '24', '2018-08-02 16:44:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('276', '1028', 'CIV', '2018-08-02', '1020301000012', 'Customer credit for Paid Amount For Invoice No1028', '0.00', '15000.00', '6', '1', '24', '2018-08-02 16:44:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('277', '20180804045253', 'PO', '2018-08-04', '10107', 'PO Receive Receive No 20180804045304', '700000.00', '0.00', '2', '1', '2', '2018-08-04 04:53:04', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('278', '1029', 'LSIV', '2018-08-04', '1020301000015', 'cc-2-TikTik Credit For Invoice No1029', '0.00', '8000.00', '2', '1', '2', '2018-08-04 05:06:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('279', '1029', 'LSIV', '2018-08-04', '1020301000015', 'cc-2-TikTik Debit of Total Package Price For Invoice#1029', '94400.00', '0.00', '2', '1', '2', '2018-08-04 05:06:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('280', '1029', 'LSIV', '2018-08-04', '1020101000002', 'Cash In Hand Debit For Lease Invoice No1029', '8000.00', '0.00', '2', '1', '2', '2018-08-04 05:06:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('281', '1029', 'LSIV', '2018-08-04', '30102', 'Store Credit For Invoice No1029', '0.00', '94400.00', '2', '1', '2', '2018-08-04 05:06:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('283', '1029', 'LSIV', '2018-08-04', '10107', 'Inventory Credit For Invoice No1029', '0.00', '70000.00', '2', '1', '2', '2018-08-04 05:06:07', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('284', '20180804052157', 'PO', '2018-08-04', '10107', 'PO Receive Receive No 20180804052456', '100000.00', '0.00', '10', '1', '26', '2018-08-04 05:24:56', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('285', '20180804052157', 'PO', '2018-08-04', '5020200002', 'PO received For PO No.20180804052157 Receive No.20180804052456', '0.00', '100000.00', '10', '1', '26', '2018-08-04 05:24:56', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('286', '1030', 'CIV', '2018-08-04', '1020101000003', 'Cash in hand debit For Invoice No1030', '19500.00', '0.00', '10', '1', '26', '2018-08-04 05:26:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('288', '1030', 'CIV', '2018-08-04', '10107', 'Inventory credit For Invoice No1030', '0.00', NULL, '10', '1', '26', '2018-08-04 05:26:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('289', '1030', 'CIV', '2018-08-04', '1020301000017', 'Customer debit for Product For Invoice No1030', '19500.00', '0.00', '10', '1', '26', '2018-08-04 05:26:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('290', '1030', 'CIV', '2018-08-04', '1020301000017', 'Customer credit for Paid Amount For Invoice No1030', '0.00', '19500.00', '10', '1', '26', '2018-08-04 05:26:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('291', '20180727101658', 'PO', '2018-08-04', '10107', 'PO Receive Receive No 20180804063814', '5000.00', '0.00', '7', '1', '2', '2018-08-04 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('292', '20180727101658', 'PO', '2018-08-04', '5020200006', 'PO received For PO No.20180727101658 Receive No.20180804063814', '0.00', '5000.00', '2', '1', '2', '2018-08-04 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('293', '20180804162054', 'PO', '2018-08-04', '10107', 'PO Receive Receive No 20180804162129', '20000.00', '0.00', '2', '1', '2', '2018-08-04 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('294', '20180804162054', 'PO', '2018-08-04', '5020200007', 'PO received For PO No.20180804162054 Receive No.20180804162129', '0.00', '20000.00', '2', '1', '2', '2018-08-04 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('295', '1031', 'CIV', '2018-08-04', '1020101000002', 'Cash in hand debit For Invoice No1031', '30000.00', '0.00', '2', '1', '2', '2018-08-04 16:22:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('297', '1031', 'CIV', '2018-08-04', '10107', 'Inventory credit For Invoice No1031', '0.00', NULL, '2', '1', '2', '2018-08-04 16:22:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('298', '1031', 'CIV', '2018-08-04', '1020301000018', 'Customer debit for Product For Invoice No1031', '30000.00', '0.00', '2', '1', '2', '2018-08-04 16:22:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('299', '1031', 'CIV', '2018-08-04', '1020301000018', 'Customer credit for Paid Amount For Invoice No1031', '0.00', '30000.00', '2', '1', '2', '2018-08-04 16:22:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('300', '5', 'RT', '2018-08-04', '1020301000018', 'Receive For 5', '15000.00', '0.00', '2', '1', '2', '2018-08-04 16:23:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('302', '1031', 'RT', '2018-08-04', '10107', 'RT For Invoice No1031', '0.00', '0.00', '2', '1', '2', '2018-08-04 16:23:31', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('304', '20180804162054', 'PO', '2018-08-04', '5020200007', 'P Return For 20180804162054', '9900.00', '0.00', '2', '1', '2', '2018-08-04 16:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('305', '20180804162054', 'PO', '2018-08-04', '10107', 'Purchase Return For PO No20180804162054', '0.00', '9900.00', '2', '1', '2', '2018-08-04 16:26:20', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('306', '20180804162054', 'PO', '2018-08-04', '5020200007', 'P Return For 20180804162054', '19500.00', '0.00', '2', '1', '2', '2018-08-04 16:28:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('307', '20180804162054', 'PO', '2018-08-04', '10107', 'Purchase Return For PO No20180804162054', '0.00', '19500.00', '2', '1', '2', '2018-08-04 16:28:12', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('308', '20180804045253', 'PO', '2018-08-05', '10107', 'Purchase Return For PO No20180804045253', '0.00', '175000.00', '2', '1', '2', '2018-08-05 05:20:37', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('309', '20180805054633', 'PO', '2018-08-05', '10107', 'PO Receive Receive No 20180805054643', '100000.00', '0.00', '2', '1', '2', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('310', '20180805054633', 'PO', '2018-08-05', '5020200002', 'PO received For PO No.20180805054633 Receive No.20180805054643', '0.00', '100000.00', '2', '1', '2', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('311', '1032', 'CIV', '2018-08-05', '1020101000002', 'Cash in hand debit For Invoice No1032', '15000.00', '0.00', '2', '1', '2', '2018-08-05 05:48:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('313', '1032', 'CIV', '2018-08-05', '10107', 'Inventory credit For Invoice No1032', '0.00', NULL, '2', '1', '2', '2018-08-05 05:48:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('314', '1032', 'CIV', '2018-08-05', '1020301000007', 'Customer debit for Product For Invoice No1032', '15000.00', '0.00', '2', '1', '2', '2018-08-05 05:48:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('315', '1032', 'CIV', '2018-08-05', '1020301000007', 'Customer credit for Paid Amount For Invoice No1032', '0.00', '15000.00', '2', '1', '2', '2018-08-05 05:48:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('316', '20180805054633', 'PO', '2018-08-05', '5020200002', 'P Return For 20180805054633', '20000.00', '0.00', '2', '1', '2', '2018-08-05 05:49:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('317', '20180805054633', 'PO', '2018-08-05', '10107', 'Purchase Return For PO No20180805054633', '0.00', '20000.00', '2', '1', '2', '2018-08-05 05:49:08', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('318', '20180804162054', 'PO', '2018-08-05', '5020200007', 'P Return For 20180804162054', '10000.00', '0.00', '2', '1', '2', '2018-08-05 06:06:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('319', '20180804162054', 'PO', '2018-08-05', '10107', 'Purchase Return For PO No20180804162054', '0.00', '10000.00', '2', '1', '2', '2018-08-05 06:06:34', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('320', '20180805063043', 'PO', '2018-08-05', '10107', 'PO Receive Receive No 20180805063116', '20000.00', '0.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('321', '20180805063043', 'PO', '2018-08-05', '5020200007', 'PO received For PO No.20180805063043 Receive No.20180805063116', '0.00', '20000.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('323', '1033', 'CIV', '2018-08-05', '10107', 'Inventory credit For Invoice No1033', '0.00', NULL, '9', '1', '27', '2018-08-05 06:33:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('324', '1033', 'CIV', '2018-08-05', '1020301000019', 'Customer debit for Product For Invoice No1033', '30000.00', '0.00', '9', '1', '27', '2018-08-05 06:33:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('325', '1033', 'CIV', '2018-08-05', '1020301000019', 'Customer credit for Paid Amount For Invoice No1033', '0.00', '30000.00', '9', '1', '27', '2018-08-05 06:33:02', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('326', '6', 'RT', '2018-08-05', '1020301000019', 'Receive For 6', '15000.00', '0.00', '9', '1', '27', '2018-08-05 06:33:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('328', '1033', 'RT', '2018-08-05', '10107', 'RT For Invoice No1033', '0.00', '0.00', '9', '1', '27', '2018-08-05 06:33:50', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('330', '20180805063043', 'PO', '2018-08-05', '5020200007', 'P Return For 20180805063043', '10000.00', '0.00', '9', '1', '27', '2018-08-05 06:34:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('331', '20180805063043', 'PO', '2018-08-05', '10107', 'Purchase Return For PO No20180805063043', '0.00', '10000.00', '9', '1', '27', '2018-08-05 06:34:10', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('332', '20180805092943', 'PO', '2018-08-05', '10107', 'PO Receive Receive No 20180805093026', '30000.00', '0.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('333', '20180805092943', 'PO', '2018-08-05', '5020200003', 'PO received For PO No.20180805092943 Receive No.20180805093026', '0.00', '30000.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('334', '20180805092943', 'PO', '2018-08-05', '10107', 'PO Receive Receive No 20180805093043', '10000.00', '0.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('335', '20180805092943', 'PO', '2018-08-05', '5020200003', 'PO received For PO No.20180805092943 Receive No.20180805093043', '0.00', '10000.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('336', '20180805092943', 'PO', '2018-08-05', '10107', 'PO Receive Receive No 20180805093057', '10000.00', '0.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('337', '20180805092943', 'PO', '2018-08-05', '5020200003', 'PO received For PO No.20180805092943 Receive No.20180805093057', '0.00', '10000.00', '9', '1', '27', '2018-08-05 00:00:00', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('338', '7', 'RT', '2018-08-06', '1020301000019', 'Receive For 7', '15000.00', '0.00', '9', '1', '2', '2018-08-06 05:57:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('340', '1033', 'RT', '2018-08-06', '10107', 'RT For Invoice No1033', '0.00', '0.00', '2', '1', '2', '2018-08-06 05:57:58', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('342', '20180805092943', 'PO', '2018-08-06', '5020200003', 'P Return For 20180805092943', '10000.00', '0.00', '2', '1', '2', '2018-08-06 05:58:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('343', '20180805092943', 'PO', '2018-08-06', '10107', 'Purchase Return For PO No20180805092943', '0.00', '10000.00', '2', '1', '2', '2018-08-06 05:58:23', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('344', 'DV-4', 'DV', '2018-08-06', '102010204', 'sdfsdf', '0.00', '500000.00', '10', '1', '26', '2018-08-06 07:30:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('345', 'DV-4', 'DV', '2018-08-06', '102020103', 'sdfsdf', '500000.00', '0.00', '10', '1', '26', '2018-08-06 07:30:28', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('346', 'DV-5', 'DV', '2018-08-06', '102010203', '', '0.00', '2000.00', '10', '1', '26', '2018-08-06 07:59:33', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('347', 'DV-5', 'DV', '2018-08-06', '4021002', '', '2000.00', '0.00', '10', '1', '26', '2018-08-06 07:59:33', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('349', 'DV-6', 'DV', '2018-09-27', '102010202', '', '5000.00', '0.00', '2', '1', '2', '2018-09-27 12:10:55', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('351', 'DV-7', 'DV', '2018-09-27', '102010202', '', '2000.00', '0.00', '2', '1', '2', '2018-09-27 12:11:19', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('352', 'DV-8', 'DV', '2018-09-27', '102010203', '', '0.00', '1000000.00', '2', '1', '2', '2018-09-27 12:16:57', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('353', 'DV-8', 'DV', '2018-09-27', '4021002', '', '1000000.00', '0.00', '2', '1', '2', '2018-09-27 12:16:57', NULL, NULL, '0');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('354', '1034', 'CIV', '2018-10-03', '1020101000002', 'Cash in hand debit For Invoice No1034', '55000.00', '0.00', '2', '1', '2', '2018-10-03 14:18:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('356', '1034', 'CIV', '2018-10-03', '10107', 'Inventory credit For Invoice No1034', '0.00', NULL, '2', '1', '2', '2018-10-03 14:18:49', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('357', '21', 'GrantLoan', '2018-10-17', '1020101', 'Cash in hand Credit For Employee IdE4Y9T7CJ', '0.00', '20000.00', '0', '1', '2', '2018-10-17 14:27:53', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('358', '22', 'GrantLoan', '2018-10-17', '1020101', 'Cash in hand Credit For Employee IdE4Y9T7CJ', '0.00', '30000.00', '0', '1', '2', '2018-10-17 14:39:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('359', '22', 'Loan Grant', '2018-10-17', '5020200008', 'Payable For Employee IdE4Y9T7CJ', '30000.00', '0.00', '0', '1', '2', '2018-10-17 14:39:57', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('360', '21', 'Salary', '2018-10-18', '1020101', 'Cash in hand Debit For Employee IdE4Y9T7CJ', NULL, '0.00', '0', '1', '2', '2018-10-18 05:34:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('361', '21', 'Salary', '2018-10-18', '5020200008', 'Salary For Employee IdE4Y9T7CJ', '0.00', NULL, '0', '1', '2', '2018-10-18 05:34:13', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('362', '26', 'Salary', '2018-10-18', '1020101', 'Cash in hand Debit For Employee IdE4Y9T7CJ', '24.00', '0.00', '0', '1', '2', '2018-10-18 05:40:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('363', '26', 'Salary', '2018-10-18', '5020200008', 'Salary For Employee IdE4Y9T7CJ', '0.00', '24.00', '0', '1', '2', '2018-10-18 05:40:52', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('364', '31', 'Salary', '2018-10-18', '1020101', 'Cash in hand Debit For Employee IdE4Y9T7CJ', '24950.40', '0.00', '0', '1', '2', '2018-10-18 05:49:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('365', '31', 'Salary', '2018-10-18', '5020200008', 'Salary For Employee IdE4Y9T7CJ', '0.00', '24950.40', '0', '1', '2', '2018-10-18 05:49:55', NULL, NULL, '1');
INSERT INTO `acc_transaction` (`ID`, `VNo`, `Vtype`, `VDate`, `COAID`, `Narration`, `Debit`, `Credit`, `StoreID`, `IsPosted`, `CreateBy`, `CreateDate`, `UpdateBy`, `UpdateDate`, `IsAppove`) VALUES ('366', '23', 'GrantLoan', '2018-10-24', '1020101', 'Cash in hand Credit For Employee IdEU8EH6BY', '0.00', '5000.00', '0', '1', '2', '2018-10-24 05:40:55', NULL, NULL, '1');


#
# TABLE STRUCTURE FOR: acn_account_transaction
#

DROP TABLE IF EXISTS `acn_account_transaction`;

CREATE TABLE `acn_account_transaction` (
  `account_tran_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `transaction_description` varchar(255) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `tran_date` date NOT NULL,
  `payment_id` int(11) NOT NULL,
  `create_by_id` varchar(25) NOT NULL,
  PRIMARY KEY (`account_tran_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `tran_date`, `payment_id`, `create_by_id`) VALUES ('12', '1', 'jhk', '20000', '2017-08-28', '45', 'Jhon  Doe');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `tran_date`, `payment_id`, `create_by_id`) VALUES ('15', '1', 'fgfdg', '18000', '2017-08-29', '234', 'Jhon  Doe');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `tran_date`, `payment_id`, `create_by_id`) VALUES ('19', '3', 'Example transaction', '150000', '2017-09-11', '0', 'Jhon  Doe');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `tran_date`, `payment_id`, `create_by_id`) VALUES ('20', '3', 'fsdf', '2000', '2018-09-15', '3244', 'Jhon  Doe');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `tran_date`, `payment_id`, `create_by_id`) VALUES ('21', '4', 'Loan payment Loan ID20Employee ID145454', '6000', '2018-10-09', '145454', 'Jhon  Doe');
INSERT INTO `acn_account_transaction` (`account_tran_id`, `account_id`, `transaction_description`, `amount`, `tran_date`, `payment_id`, `create_by_id`) VALUES ('22', '5', 'Loan installment Loan ID17Employee ID145454', '522', '2018-10-08', '12', 'Jhon  Doe');


#
# TABLE STRUCTURE FOR: award
#

DROP TABLE IF EXISTS `award`;

CREATE TABLE `award` (
  `award_id` int(11) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(50) NOT NULL,
  `aw_description` varchar(200) NOT NULL,
  `awr_gift_item` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `awarded_by` varchar(30) NOT NULL,
  PRIMARY KEY (`award_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `award` (`award_id`, `award_name`, `aw_description`, `awr_gift_item`, `date`, `employee_id`, `awarded_by`) VALUES ('2', 'PriceMoney', 'sdfasdf', '1000tk', '2017-09-09', 'EVJ77XOI', 'Isahq');
INSERT INTO `award` (`award_id`, `award_name`, `aw_description`, `awr_gift_item`, `date`, `employee_id`, `awarded_by`) VALUES ('3', 'fdg', 'dfg', 'dfg', '2017-09-08', 'EVJ77XOI', 'dfg');
INSERT INTO `award` (`award_id`, `award_name`, `aw_description`, `awr_gift_item`, `date`, `employee_id`, `awarded_by`) VALUES ('4', 'Gift', 'fsdf', 'Laptop', '2017-09-10', '4324', 'Bdtask');
INSERT INTO `award` (`award_id`, `award_name`, `aw_description`, `awr_gift_item`, `date`, `employee_id`, `awarded_by`) VALUES ('5', 'World Cup', 'sdfasdf', 'Money Price', '2018-10-15', 'EY2T1OWA', 'Isahaq');


#
# TABLE STRUCTURE FOR: candidate_basic_info
#

DROP TABLE IF EXISTS `candidate_basic_info`;

CREATE TABLE `candidate_basic_info` (
  `can_id` varchar(20) NOT NULL,
  `first_name` varchar(11) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `alter_phone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `present_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `parmanent_address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `picture` text NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  PRIMARY KEY (`can_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('150073689333S', 'Rishab ', 'Pant', 'pant@bdtask.com', '987654323456', '976544564567', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-07-22/hum1.jpg', '', '', '', '0');
INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('150078881074S', 'Mr', 'Kabir', 'kabir@gmail.com', '01955110016', '01730164623', 'Mirpur', 'Shariatpur', './application/modules/circularprocess/assets/images/2017-09-14/145.jpg', '', '', '', '0');
INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('150080778404S', 'Tory', 'Burhan', 'tory@bdtask.com', '123456789078', '876543456789', 'South Ferri Ghat,Padma River,Chandpur', '231,East Patalipur,Sonamuri', './application/modules/circularprocess/assets/images/2017-09-09/chr.jpg', '', '', '', '0');
INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('15052929747581L', 'Jasim', 'Uddin', 'jassim@gmail.com', '01621815163', '14645541', 'Barishal', 'Dhanmonci', './application/modules/circularprocess/assets/images/2017-09-18/1458.jpg', '', '', '', '0');
INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('15386317585979L', 'Md', 'Sala uddin', 'salauddin@gmail.com', '03123165', '5465464', 'ijlkjo', '555', './application/modules/circularprocess/assets/images/2018-10-04/isa.png', '1212313', '', '', '0');
INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('154020580259L', 'sdfsd', 'fsdf', 'fsdf@gmail.com', '234234', '234234', 'fsdf', 'sdfsdf', './application/modules/circularprocess/assets/images/2018-10-22/log.jpg', '234234', '', '', '0');
INSERT INTO `candidate_basic_info` (`can_id`, `first_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `ssn`, `state`, `city`, `zip`) VALUES ('15402730915417L', 'A.', 'Zabbar', 'jabbar@gmail.com', '03216456', '21545', 'khilkhet,dhaka', '545', './application/modules/circularprocess/assets/images/2018-10-23/ava.png', '12645', '', '', '0');


#
# TABLE STRUCTURE FOR: candidate_education_info
#

DROP TABLE IF EXISTS `candidate_education_info`;

CREATE TABLE `candidate_education_info` (
  `can_edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) NOT NULL,
  `degree_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `university_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cgp` varchar(30) CHARACTER SET latin1 NOT NULL,
  `comments` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sequencee` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`can_edu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('47', '150073627021S', 'kkkkkkkkkk', 'University Of Mosco', '3.45', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('48', '150073627021S', 'Diploma in International Relat', 'University Of Mosco', '3.45', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('49', '150073627021S', 'Diploma in International Relat', 'University Of Mosco', '3.45', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('50', '150073627021S', 'Goood88', 'Nordan', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('51', '150073627021S', 'MSceeeeeeeeee', 'National University', '3.30', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('52', '150073627021S', 'MMMMMMMMM', 'National University', '3.30', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('53', '150073627021S', 'hhhhhhhhhh', 'df', '3.30', 'Lorem ipsum dolor sit amet, consectetur adipiscing', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('54', '150080778404S', 'MBA', 'Dhaka University', '3.45', 'lorem ipasd orgat tugan rtuedr', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('55', '150080778404S', 'BBA', 'University Of South Amishapara', '3.47', 'lorem ipasd orgat tugan rtuedr', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('56', '150080778404S', '', '', '', 'lorem ipasd orgat tugan rtuedr', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('60', '15052932955274L', '', '', '', '', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('61', '15052932955274L', '', '', '', '', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('62', '15052932955274L', '', '', '', '', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('64', '15052929747581L', 'Ihave nothing to hide', 'Taker hat High School', '4', 'dfgdfgdfg', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('71', '150072625687S', 'Mizan Jamat', 'kowmi', '3.30', 'fghfghfgh', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('72', '150072625687S', 'csc', 'National University', '3.30', 'fghfghfgh', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('73', '150072625687S', 'Msc', 'National University', '3.30', 'fghfghfgh', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('74', '150073689333S', 'Ihave nothing to hide', 'Sayed Abul Hossain College', 'First Class', 'rtytry', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('76', '15386317585979L', 'ssc', 'khoajpur', '5', 'djflsdkjf', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('77', '154020580259L', 'Masters', 'National University', '4.80', 'dsfsdaf', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('78', '15402730915417L', 'Masters', 'National University', '3.7', 'fsdakfjlks', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('79', '15402730915417L', 'Honour\'s', 'Dhaka University', '3.8', 'fsdakfjlks', NULL);
INSERT INTO `candidate_education_info` (`can_edu_id`, `can_id`, `degree_name`, `university_name`, `cgp`, `comments`, `sequencee`) VALUES ('80', '15402730915417L', 'H.S.c', 'Sayed Abul Hossain college', '4.8', 'fsdakfjlks', NULL);


#
# TABLE STRUCTURE FOR: candidate_interview
#

DROP TABLE IF EXISTS `candidate_interview`;

CREATE TABLE `candidate_interview` (
  `can_int_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `job_adv_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `interviewer_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `written_total_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mcq_total_marks` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_marks` varchar(30) NOT NULL,
  `recommandation` varchar(50) CHARACTER SET latin1 NOT NULL,
  `selection` varchar(50) CHARACTER SET latin1 NOT NULL,
  `details` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`can_int_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('1', '150028880547S', 'Pk', '20-07-2017', 'test', '20', '32', '25', '91', 'ewr', 'ok', 'fgdfg');
INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('2', '14995956377771L', 'management', '2017-07-23', 'ceo', '50', '100', '50', '200', 'na', 'ok', 'uyyh');
INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('3', '150073610425S', 'Junior Executive ', '2017-07-27', 'Michele Kusu', '78', '70', '89', '237', 'Yes', 'ok', 'Lorem ipsum dolor sit amet, consectetur adipiscing');
INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('4', '150073648921S', 'Junior Software Developer', '2017-07-28', 'Niranjan Khan Bin Latif', '50', '60', '70', '180', 'No', 'No', 'Lorem ipsum dolor sit amet, consectetur adipiscing');
INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('5', '150078881074S', 'Chief Executive', '2017-07-23', 'MR', '25', '25', '20', '70', 'ewr', 'ok', 'ghfg');
INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('6', '150073689333S', 'Lead Programmar Manager', '2017-07-17', 'MR', '10', '26', '23', '59', 'ewr', 'ok', 'sdfsdf');
INSERT INTO `candidate_interview` (`can_int_id`, `can_id`, `job_adv_id`, `interview_date`, `interviewer_id`, `interview_marks`, `written_total_marks`, `mcq_total_marks`, `total_marks`, `recommandation`, `selection`, `details`) VALUES ('7', '154020580259L', '8', '2018-10-22', 'isahaq mia', '34', '34', '54', '122', 'dfgdsfg', 'ok', 'oksdfd');


#
# TABLE STRUCTURE FOR: candidate_selection
#

DROP TABLE IF EXISTS `candidate_selection`;

CREATE TABLE `candidate_selection` (
  `can_sel_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pos_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `selection_terms` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`can_sel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_selection` (`can_sel_id`, `can_id`, `employee_id`, `pos_id`, `selection_terms`) VALUES ('1', '150073610425S', 'STD897', 'Junior Executive ', 'Lorem ipsum dolor sit amet, consectetur adipiscing');
INSERT INTO `candidate_selection` (`can_sel_id`, `can_id`, `employee_id`, `pos_id`, `selection_terms`) VALUES ('3', '150078881074S', '1111', 'Chief Executive', 'Mango');
INSERT INTO `candidate_selection` (`can_sel_id`, `can_id`, `employee_id`, `pos_id`, `selection_terms`) VALUES ('4', '150073689333S', 'E6WBW7YD', '7', 'dfgdfg');
INSERT INTO `candidate_selection` (`can_sel_id`, `can_id`, `employee_id`, `pos_id`, `selection_terms`) VALUES ('5', '154020580259L', 'EJ721I8E', '8', 'sdfsdfsd');


#
# TABLE STRUCTURE FOR: candidate_shortlist
#

DROP TABLE IF EXISTS `candidate_shortlist`;

CREATE TABLE `candidate_shortlist` (
  `can_short_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `job_adv_id` int(11) NOT NULL,
  `date_of_shortlist` varchar(50) CHARACTER SET latin1 NOT NULL,
  `interview_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`can_short_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_shortlist` (`can_short_id`, `can_id`, `job_adv_id`, `date_of_shortlist`, `interview_date`) VALUES ('5', '150073610425S', '4', '2017-07-22', '29-07-2017');
INSERT INTO `candidate_shortlist` (`can_short_id`, `can_id`, `job_adv_id`, `date_of_shortlist`, `interview_date`) VALUES ('6', '150072625687S', '5', '2017-07-22', '30-07-2017');
INSERT INTO `candidate_shortlist` (`can_short_id`, `can_id`, `job_adv_id`, `date_of_shortlist`, `interview_date`) VALUES ('7', '150073648921S', '6', '2017-07-22', '26-07-2017');
INSERT INTO `candidate_shortlist` (`can_short_id`, `can_id`, `job_adv_id`, `date_of_shortlist`, `interview_date`) VALUES ('8', '150073689333S', '7', '2017-07-22', '27-07-2017');
INSERT INTO `candidate_shortlist` (`can_short_id`, `can_id`, `job_adv_id`, `date_of_shortlist`, `interview_date`) VALUES ('9', '154020580259L', '8', '2018-10-22', '2018-10-22');


#
# TABLE STRUCTURE FOR: candidate_workexperience
#

DROP TABLE IF EXISTS `candidate_workexperience`;

CREATE TABLE `candidate_workexperience` (
  `can_workexp_id` int(11) NOT NULL AUTO_INCREMENT,
  `can_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `company_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `duties` varchar(30) CHARACTER SET latin1 NOT NULL,
  `supervisor` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sequencee` varchar(10) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`can_workexp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('4', '150073610425S', 'ELIASH & ASSOCIATES', '03/22/2017 - 07/22/2017', '500', 'Mira Chetarjee ', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('5', '150073610425S', '', '07/22/2017 - 07/22/2017', '', '', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('6', '150073610425S', '', '07/22/2017 - 07/22/2017', '', '', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('7', '150073627021S', 'UTY BANG', '07/22/2017 - 07/22/2017', '670', 'Murat Rodriguaz', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('8', '150073627021S', 'MEDI LIVE', '07/22/2017 - 07/22/2017', '5000', 'Nicola Ogastin', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('9', '150073627021S', '', '07/22/2017 - 07/22/2017', '', '', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('22', '15052932955274L', 'Infinity', '2017-02-16-2018', 'Juniour Programmar', 'dfsdf', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('23', '15052932955274L', 'Infinity', '2017-05454', 'sdf', 'sadasd', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('24', '15052932955274L', 'Innovedious', '2017-02-16-2018', 'Lead programmar', 'dfsdf', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('25', '150073648921S', 'BDTASK', '01/22/2017 - 07/22/2017', '5000', 'Murat Rodriguaz', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('26', '150073648921S', 'ELIASH & ASSOCIATES', '07/22/2017 - 07/22/2017', '700', 'Murad Zadran', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('27', '150073648921S', 'Bangladesh', '07/22/2017 - 07/22/2017', 'senior Programmar', 'dfsdf', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('28', '15052929747581L', 'Bdtask', '2017-05454', 'Juniour Programmar', 'sadasd', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('35', '150072625687S', 'Bdtask', '07/22/2017 - 07/22/2017', 'Senior Programmar', 'Ok thanks', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('36', '150072625687S', 'Bdtask', '07/22/2017 - 07/22/2017', 'Senior Programmar', 'Ok thanks', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('37', '150072625687S', 'Bdtask', '07/22/2017 - 07/22/2017', 'Senior Programmar', 'Ok thanks', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('42', '15386317585979L', 'Bdtask', '2017-2018', 'Programmar', 'Tarek', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('43', '154020580259L', 'Bdtask', '2017-2018', 'sdff', 'dfasdf', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('44', '150073689333S', 'Other Co.', '01/22/2017 - 07/22/2017', 'Executive', 'Murad Zadran', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('45', '150073689333S', 'Michle Co.', '01/22/2017 - 07/22/2017', 'Executive', 'Murad Zadran', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('46', '150073689333S', 'Laser Co.', '01/22/2017 - 07/22/2017', 'Executive', 'Murad Zadran', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('50', '15402730915417L', 'Soft Ltd Dhaka', '2016-2017', 'Junior Programmar', 'Jahid', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('51', '15402730915417L', 'Orange  co', '2017-2017', 'Senior Programmar', 'Habib', '');
INSERT INTO `candidate_workexperience` (`can_workexp_id`, `can_id`, `company_name`, `working_period`, `duties`, `supervisor`, `sequencee`) VALUES ('52', '15402730915417L', 'Techno Bd', '2017-2018', 'Senior Programmar', 'M', '');


#
# TABLE STRUCTURE FOR: custom_table
#

DROP TABLE IF EXISTS `custom_table`;

CREATE TABLE `custom_table` (
  `custom_id` int(11) NOT NULL AUTO_INCREMENT,
  `custom_field` varchar(100) NOT NULL,
  `custom_data_type` int(11) NOT NULL,
  `custom_data` text NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  PRIMARY KEY (`custom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('7', 'Field1', '1', 'value1', 'EU8EH6BY');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('9', 'Teacher Name', '2', 'Abdul Halim', 'EF6MQRAX');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('12', 'Primary School', '1', 'Test Primary School', 'E4ZNFBIC');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('13', 'High School Name', '2', 'Taker Hat High school', 'E4ZNFBIC');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('14', 'Versity Name', '3', 'Nu', 'E4ZNFBIC');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('15', 'Company Name', '1', 'Bdtask', 'ER6RJAY8');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('16', 'House Name', '3', 'Shikder Bari', 'ER6RJAY8');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('17', 'Person name', '2', 'Tuhin', 'ER6RJAY8');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('21', 'customfield1', '1', 'custom value1', 'E0LHJ447');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('22', 'dsfsdf', '1', 'sdfdsf', 'E0LHJ447');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('23', 'dsfsd', '1', 'fdsfsdf', 'E0LHJ447');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('24', '', '1', '', 'E0LHJ447');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('25', '', '1', '', 'E0LHJ447');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('34', 'isahadf', '1', '23424', 'ELPGMMRL');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('35', 'dfsdf', '1', 'dfgdfg', 'ELPGMMRL');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('36', 'hhh', '1', 'sdfsdf', 'ELPGMMRL');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('37', 'fdfgdfg', '1', 'dfg', 'ELPGMMRL');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('38', 'dfgdfg', '1', '', 'ELPGMMRL');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('39', 'First isahaq', '1', 'sdfsdf', 'E4K0I0DA');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('40', 'sdfsadf', '1', 'sdfsdf', 'EYOBEEFQ');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('41', 'fsdfsadf', '1', '234234324', 'EHBEEFQQ');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('43', 'My Mother', '1', 'Ma', 'E4Y9T7CJ');
INSERT INTO `custom_table` (`custom_id`, `custom_field`, `custom_data_type`, `custom_data`, `employee_id`) VALUES ('44', 'rrrr', '2', '07-08-2018', 'E78PIKVA');


#
# TABLE STRUCTURE FOR: department
#

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('2', 'IT Department', '0');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('3', 'php', '2');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('4', 'Wordpress', '0');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('6', 'html', '4');
INSERT INTO `department` (`dept_id`, `department_name`, `parent_id`) VALUES ('7', 'javascript', '4');


#
# TABLE STRUCTURE FOR: duty_type
#

DROP TABLE IF EXISTS `duty_type`;

CREATE TABLE `duty_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('1', 'Full Time');
INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('2', 'Part Time');
INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('3', 'Contructual');
INSERT INTO `duty_type` (`id`, `type_name`) VALUES ('4', 'Other');


#
# TABLE STRUCTURE FOR: emp_attendance
#

DROP TABLE IF EXISTS `emp_attendance`;

CREATE TABLE `emp_attendance` (
  `att_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sign_in` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sign_out` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `staytime` time DEFAULT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB AUTO_INCREMENT=372 DEFAULT CHARSET=utf8;

INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('210', '4324', '2017-08-30', '05:28:52 pm', '11:49:17 am', '05:39:35');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('211', '4324', '2017-08-30', '05:28:59 pm', '11:45:43 am', '05:43:16');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('212', '123456', '2017-08-30', '05:58:17 pm', '11:45:26 am', '06:12:51');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('213', '4324', '2017-08-30', '05:58:23 pm', '09:52:43 am', '08:05:40');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('215', '4324', '2017-08-31', '10:07:08', '11:49:04 am', '01:41:56');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('217', '123456', '2017-08-31', '12:28:57', '12:29:02 pm', '00:00:05');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('218', '123456', '2017-09-07', '09:41:12', '09:41:37 am', '00:00:25');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('219', '4324', '2017-09-07', '09:41:19', '09:41:27 am', '00:00:08');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('220', '3598875', '2017-09-07', '05:36:48', '05:39:35 pm', '12:02:47');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('221', '123456', '2017-09-09', '09:47:46', '09:48:05 ', '00:00:19');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('222', '3598875', '2017-09-09', '12:32:14', '10:03:53 ', '02:28:21');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('226', '3598875', '2017-09-10', '03:50:20', '03:51:00', '12:00:40');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('235', '4324', '2017-09-10', '04:56:07 pm', '04:56:30 pm', '00:00:23');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('236', '4324', '2017-09-10', '05:03:56', '05:37:29', '00:26:27');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('241', '123456', '2017-09-11', '10:20:58', '10:34:24', '00:13:26');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('242', '4324', '2017-09-11', '11:27:03', '01:50:48', '02:23:45');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('243', '4324', '2017-09-11', '02:31:26', '01:52:49', '00:00:00');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('245', '4324', '2017-09-12', '01:54:43', '01:54:53', '12:00:10');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('246', '123456', '2017-09-12', '01:56:46 pm', '01:56:53 pm', '00:00:07');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('247', '123456', '2018-09-15', '11:13:46 am', '08:14:19 am', '02:59:27');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('248', 'E71Z8SYQ', '2018-10-04', '05:05:10 pm', '05:07:31 pm', '00:02:21');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('249', 'EY2T1OWA', '2018-10-07', '11:38:48 am', '11:39:21 am', '00:00:33');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('250', 'E1Q5NMGS', '2018-10-07', '12:14:50 pm', '08:15:12 am', '03:59:38');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('252', '0', '2018-10-07', '12:26:17 pm', NULL, NULL);
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('253', 'EY2T1OWA', '2018-10-07', '9:30', '4:55', '00:00:07');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('358', 'EY2T1OWA', '10/7/2018', '12:30', '', '00:00:00');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('359', 'EU8EH6BY', '2018-10-08', '03:38:04 pm', '03:38:18 pm', '00:00:14');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('360', '145454', '2018-10-09', '11:08:47 am', '11:08:56 am', '00:00:09');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('361', 'EU8EH6BY', '2018-10-14', '11:36:21 am', '11:42:20 am', '00:05:59');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('362', 'EY2T1OWA', '2018-10-14', '11:36:28 am', '11:42:27 am', '00:05:59');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('363', 'E1Q5NMGS', '2018-10-14', '11:36:34 am', '11:42:31 am', '00:05:57');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('364', '145454', '2018-10-14', '11:36:40 am', '11:42:34 am', '00:05:54');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('365', 'EU8EH6sdBY', '2018-10-14', '11:36:45 am', '11:42:39 am', '00:05:54');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('366', 'EY2T1OWA', '2018-10-15', '01:07:38 pm', '01:09:04 pm', '00:01:26');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('367', '145454', '2018-10-15', '01:10:42 pm', '01:17:12 pm', '00:06:30');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('368', 'EU8EH6sdBY', '2018-10-15', '04:53:50 pm', '06:06:10 pm', '01:12:20');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('369', 'EY2T1OWA', '2018-10-15', '06:09:16 pm', '06:34:50 pm', '00:25:34');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('370', 'EY2T1OWA', '2018-10-16', '06:43:24 pm', '06:43:42 pm', '00:00:18');
INSERT INTO `emp_attendance` (`att_id`, `employee_id`, `date`, `sign_in`, `sign_out`, `staytime`) VALUES ('371', 'E1Q5NMGS', '2018-10-16', '06:43:56 pm', '10:46:13 pm', '04:02:17');


#
# TABLE STRUCTURE FOR: employee_benifit
#

DROP TABLE IF EXISTS `employee_benifit`;

CREATE TABLE `employee_benifit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bnf_cl_code` varchar(100) NOT NULL,
  `bnf_cl_code_des` varchar(250) NOT NULL,
  `bnff_acural_date` date NOT NULL,
  `bnf_status` tinyint(4) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('1', '234234', '23423sdfsdfs', '0000-00-00', '1', 'EYOBEEFQ');
INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('2', '3243245', '43dfgdfsgdfg', '0000-00-00', '1', 'EYOBEEFQ');
INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('3', '23423', '32432', '0000-00-00', '1', 'EHBEEFQQ');
INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('4', '34532423', 'sdfsaf', '0000-00-00', '2', 'EHBEEFQQ');
INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('5', 'sdf34234', '23dfsdfasdf', '0000-00-00', '1', 'EHBEEFQQ');
INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('8', '234234', 'benefit Description', '2018-10-17', '1', 'E4Y9T7CJ');
INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('9', '234234', 'fsdfasdf', '2018-10-18', '1', 'E4Y9T7CJ');
INSERT INTO `employee_benifit` (`id`, `bnf_cl_code`, `bnf_cl_code_des`, `bnff_acural_date`, `bnf_status`, `employee_id`) VALUES ('10', 'sdfsad', 'sdfs', '2018-10-24', '1', 'EF9F7DAR');


#
# TABLE STRUCTURE FOR: employee_equipment
#

DROP TABLE IF EXISTS `employee_equipment`;

CREATE TABLE `employee_equipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `damarage_desc` text NOT NULL,
  `return_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('92', 'E71Z8SYQ', '1', '2018-09-20', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('93', 'E71Z8SYQ', '2', '2018-09-24', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('102', 'EF6MQRAX', '1', '2018-10-01', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('103', 'EF6MQRAX', '2', '2018-10-03', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('104', 'EY2T1OWA', '2', '2018-09-18', '', '0000-00-00');
INSERT INTO `employee_equipment` (`id`, `employee_id`, `equipment_id`, `issue_date`, `damarage_desc`, `return_date`) VALUES ('105', 'EY2T1OWA', '3', '2018-09-26', '', '0000-00-00');


#
# TABLE STRUCTURE FOR: employee_history
#

DROP TABLE IF EXISTS `employee_history`;

CREATE TABLE `employee_history` (
  `emp_his_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) NOT NULL,
  `pos_id` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `alter_phone` varchar(30) NOT NULL,
  `present_address` varchar(100) DEFAULT NULL,
  `parmanent_address` varchar(100) DEFAULT NULL,
  `picture` text,
  `degree_name` varchar(30) DEFAULT NULL,
  `university_name` varchar(50) DEFAULT NULL,
  `cgp` varchar(30) DEFAULT NULL,
  `passing_year` varchar(30) DEFAULT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `working_period` varchar(30) DEFAULT NULL,
  `duties` varchar(30) DEFAULT NULL,
  `supervisor` varchar(30) DEFAULT NULL,
  `signature` text,
  `is_admin` int(2) NOT NULL DEFAULT '0',
  `dept_id` int(11) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `maiden_name` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `citizenship` int(11) NOT NULL,
  `duty_type` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `original_hire_date` date NOT NULL,
  `termination_date` date NOT NULL,
  `termination_reason` text NOT NULL,
  `voluntary_termination` int(11) NOT NULL,
  `rehire_date` date NOT NULL,
  `rate_type` int(11) NOT NULL,
  `rate` float NOT NULL,
  `pay_frequency` int(11) NOT NULL,
  `pay_frequency_txt` varchar(50) NOT NULL,
  `hourly_rate2` float NOT NULL,
  `hourly_rate3` float NOT NULL,
  `home_department` varchar(100) NOT NULL,
  `department_text` varchar(100) NOT NULL,
  `class_code` varchar(50) NOT NULL,
  `class_code_desc` varchar(100) NOT NULL,
  `class_acc_date` date NOT NULL,
  `class_status` tinyint(4) NOT NULL,
  `is_super_visor` int(11) NOT NULL,
  `super_visor_id` varchar(30) NOT NULL,
  `supervisor_report` text NOT NULL,
  `dob` date NOT NULL,
  `gender` int(11) NOT NULL,
  `marital_status` int(11) NOT NULL,
  `ethnic_group` varchar(100) NOT NULL,
  `eeo_class_gp` varchar(100) NOT NULL,
  `ssn` varchar(50) NOT NULL,
  `work_in_state` int(11) NOT NULL,
  `live_in_state` int(11) NOT NULL,
  `home_email` varchar(50) NOT NULL,
  `business_email` varchar(50) NOT NULL,
  `home_phone` varchar(30) NOT NULL,
  `business_phone` varchar(30) NOT NULL,
  `cell_phone` varchar(30) NOT NULL,
  `emerg_contct` varchar(30) NOT NULL,
  `emrg_h_phone` varchar(30) NOT NULL,
  `emrg_w_phone` varchar(30) NOT NULL,
  `emgr_contct_relation` varchar(50) NOT NULL,
  `alt_em_contct` varchar(30) NOT NULL,
  `alt_emg_h_phone` varchar(30) NOT NULL,
  `alt_emg_w_phone` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_his_id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;

INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('161', 'EU8EH6BY', '1', 'shafullah', NULL, 'Rahman', 'hab@gmail.com', '34234', '34234', '234234', 'dfg', './application/modules/employee/assets/images/2017-08-30/145.jpg', 'H.S.C', 'National University', '3', '21321', 'Infostystem', '07/23/2017 - 07/23/2017', 'Senior Programmar', 'Isahaq', '', '0', '3', '0', '', '', '', '0', '0', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0000-00-00', '2', '0', '0', '', '0', '0', '', '', '', '', '0000-00-00', '0', '0', '0', '', '0000-00-00', '0', '0', '', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('162', 'EY2T1OWA', '4', 'jahangir', NULL, 'Ahmad', 'jahangir@gmail.com', '0195511016', '234234', NULL, NULL, './application/modules/employee/assets/images/2018-09-20/pra.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', '2', '3', 'Kala', 'New York', 'New', '234234', '0', '1', '2018-09-19', '2018-09-19', '2018-09-19', 'sdfasdf', '2', '2018-09-26', '1', '323', '2', '234', '324234', '2523', '234', '234532', '', '', '0000-00-00', '0', '1', '0', 'dfasdfsdf', '2018-09-19', '1', '2', 'sunni', '234324', '23423', '1', '1', 'u@gmail.com', 'b@gmail.com', 'dsfsdf', 'dsfdsf', 'sdfsdf', '42342323', '234234', '234234', '2343', '234', '324234', '324324');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('164', 'E1Q5NMGS', '5', 'Harun', NULL, 'Ur Rashid', 'harun@gmail.com', '01955110016', '23423523', NULL, NULL, './application/modules/employee/assets/images/2018-09-20/log.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '4', '7', 'Harun', 'New York', 'test', '32244', '0', '2', '2018-09-20', '2018-09-21', '2018-09-21', 'sdfsdf', '1', '2018-09-21', '2', '6000', '2', '234', '234', '234', '234', '23', '', '', '0000-00-00', '0', '0', '0', 'supervisor reports', '2018-07-04', '2', '1', 'sunni', 'dsfsd', '23423', '1', '1', 'home@gmail.com', 'bussiness@gmail.com', '23423', '234', '4234234', '235543', '234324', '325345', '423432', '2342', '34234', '234234');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('165', '145454', '6', 'Hm', NULL, 'Isahaq', 'hmisahaq@gmail.com', '2344098234', '49023', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '3', '6', 'Yousuf', 'Alabama', 'deom', '3243', '0', '1', '2018-09-20', '2018-09-20', '2018-09-29', 'fsdf', '1', '2018-09-29', '1', '234', '3', '234', '0', '0', '', '', '', '', '1970-01-01', '1', '1', '0', '324', '2018-09-29', '1', '1', 'sdfsdf', '', '23423', '1', '1', '234', 'sd', '82309423', '', '234', '324234', '34242', '546456', '', '', '', '');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('167', 'EU8EH6sdBY', '1', 'SAgore', NULL, 'Rahman', 'hasab@gmail.com', '34234', '34234', '234234', 'dfg', './application/modules/employee/assets/images/2017-08-30/145.jpg', 'H.S.C', 'National University', '3', '21321', 'Infostystem', '07/23/2017 - 07/23/2017', 'Senior Programmar', 'Isahaq', '', '0', '3', '0', '', '', '', '0', '0', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0000-00-00', '2', '7000', '0', '', '0', '0', '', '', '', '', '0000-00-00', '0', '0', '0', '', '0000-00-00', '0', '0', '', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('168', 'E4Y9T7CJ', '7', 'Jahid', 'Ahmad', 'Hasan', 'jahid@gmail.com', '01730164623', '015646', NULL, NULL, './application/modules/employee/assets/images/2018-10-17/wal.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '7', '0', 'jahid', 'Indiana', 'Marakana', '123456', '1', '1', '2018-10-17', '2018-10-18', '2018-10-19', 'sdfasdf', '1', '2018-10-18', '2', '25000', '3', 'this is pay frequency', '25', '324', 'Web Development', 'sdfsadf', '234234', 'dfsdfsdaf', '2018-10-16', '1', '145454', '1', '324sdf', '1990-10-12', '1', '1', '234234', '5345', '23423423', '1', '1', 'home@gmail.com', 'business@gmail.com', '234234', '5435345', '53245', '3245', '5463242', '234234', 'fdgdsfg', '32453245', '53324', '435345');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('169', 'E6WBW7YD', '7', 'Rishab ', NULL, 'Pant', 'pant@bdtask.com', '987654323456', '976544564567', 'South Ferri Ghat,Padma River,Chandpur', 'South Ferri Ghat,Padma River,Chandpur', './application/modules/circularprocess/assets/images/2017-07-22/hum1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '', '', '', '0', '0', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0000-00-00', '0', '0', '0', '', '0', '0', '', '', '', '', '0000-00-00', '0', '0', '', '', '0000-00-00', '0', '0', '', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('170', 'EF9F7DAR', '6', 'sdfsdf', '', '', 'hmisaa@gmail.com', '234234', '234234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '3', '0', '', 'Alabama', '', '234234', '1', '1', '2018-10-24', '2018-10-26', '2018-10-24', '', '0', '2018-10-24', '1', '234', '1', '', '0', '0', '', '', '4234', '234234', '2018-10-24', '1', '145454', '1', 'sdfsdaf', '2018-10-01', '1', '1', '', '', '23423', '1', '1', '', '', '234234', '', '234234', '23423423', '234234', '4324234', '', '', '', '');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('171', 'E78PIKVA', '5', 'Sharif', 'Hassan', 'Mahmud', 'shmarafat06@yahoo.com', '01552301408', '', NULL, NULL, './application/modules/employee/assets/images/2018-10-24/db1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '3', '0', 'Arafat', 'Colorado', 'Dhaka', '1208', '1', '1', '2018-08-01', '2018-08-01', '2018-10-24', '', '0', '2018-10-24', '1', '50', '1', '', '0', '0', '', '', '', '', '2018-10-24', '1', '145454', '1', '', '2017-11-01', '1', '2', 'Muslim', '', '68465465465465', '1', '1', '', '', '3424342', '', '234234234', '234232', '1212121', '879789', '', '', '', '');
INSERT INTO `employee_history` (`emp_his_id`, `employee_id`, `pos_id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `alter_phone`, `present_address`, `parmanent_address`, `picture`, `degree_name`, `university_name`, `cgp`, `passing_year`, `company_name`, `working_period`, `duties`, `supervisor`, `signature`, `is_admin`, `dept_id`, `division_id`, `maiden_name`, `state`, `city`, `zip`, `citizenship`, `duty_type`, `hire_date`, `original_hire_date`, `termination_date`, `termination_reason`, `voluntary_termination`, `rehire_date`, `rate_type`, `rate`, `pay_frequency`, `pay_frequency_txt`, `hourly_rate2`, `hourly_rate3`, `home_department`, `department_text`, `class_code`, `class_code_desc`, `class_acc_date`, `class_status`, `is_super_visor`, `super_visor_id`, `supervisor_report`, `dob`, `gender`, `marital_status`, `ethnic_group`, `eeo_class_gp`, `ssn`, `work_in_state`, `live_in_state`, `home_email`, `business_email`, `home_phone`, `business_phone`, `cell_phone`, `emerg_contct`, `emrg_h_phone`, `emrg_w_phone`, `emgr_contct_relation`, `alt_em_contct`, `alt_emg_h_phone`, `alt_emg_w_phone`) VALUES ('172', 'EJ721I8E', '8', 'sdfsd', NULL, 'fsdf', 'fsdf@gmail.com', '234234', '234234', 'fsdf', 'sdfsdf', './application/modules/circularprocess/assets/images/2018-10-22/log.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '', '', '', '0', '0', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0000-00-00', '0', '0', '0', '', '0', '0', '', '', '', '', '0000-00-00', '0', '0', '', '', '0000-00-00', '0', '0', '', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '');


#
# TABLE STRUCTURE FOR: employee_performance
#

DROP TABLE IF EXISTS `employee_performance`;

CREATE TABLE `employee_performance` (
  `emp_per_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `note` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `note_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  `number_of_star` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`emp_per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('7', 'EY2T1OWA', 'Nice short', '2017-09-09', 'Jhon  Doe', '3', 'sdf', '');
INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('8', 'EY2T1OWA', 'sdfsdf', '2018-10-09', 'Jhon  Doe', '3', 'dfsdf', '');
INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('9', 'EY2T1OWA', 'sdfs', '2018-10-09', 'Jhon  Doe', '4', 'sadfsadf', '');
INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('10', '145454', 'sdfsdf', '2018-10-09', 'Jhon  Doe', '4', 'fsdf', '');
INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('11', '145454', 'sdfasdf', '2018-10-09', 'Jhon  Doe', '1', 'sdf', '');
INSERT INTO `employee_performance` (`emp_per_id`, `employee_id`, `note`, `date`, `note_by`, `number_of_star`, `status`, `updated_by`) VALUES ('12', 'EU8EH6sdBY', 'fdgsdfg', '2018-10-14', 'Jhon  Doe', '2', 'cvsdfasdf', '');


#
# TABLE STRUCTURE FOR: employee_position
#

DROP TABLE IF EXISTS `employee_position`;

CREATE TABLE `employee_position` (
  `emp_pos_id` int(10) unsigned NOT NULL,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `position_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `position_details` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: employee_sal_pay_type
#

DROP TABLE IF EXISTS `employee_sal_pay_type`;

CREATE TABLE `employee_sal_pay_type` (
  `emp_sal_pay_type_id` int(11) unsigned NOT NULL,
  `payment_period` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `employee_sal_pay_type` (`emp_sal_pay_type_id`, `payment_period`) VALUES ('2', 'test');
INSERT INTO `employee_sal_pay_type` (`emp_sal_pay_type_id`, `payment_period`) VALUES ('4', 'monthly');
INSERT INTO `employee_sal_pay_type` (`emp_sal_pay_type_id`, `payment_period`) VALUES ('5', 'weekly');
INSERT INTO `employee_sal_pay_type` (`emp_sal_pay_type_id`, `payment_period`) VALUES ('6', 'hourly');


#
# TABLE STRUCTURE FOR: employee_salary_payment
#

DROP TABLE IF EXISTS `employee_salary_payment`;

CREATE TABLE `employee_salary_payment` (
  `emp_sal_pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_salary` varchar(50) CHARACTER SET latin1 NOT NULL,
  `total_working_minutes` varchar(50) CHARACTER SET latin1 NOT NULL,
  `working_period` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_due` varchar(50) CHARACTER SET latin1 NOT NULL,
  `payment_date` varchar(50) CHARACTER SET latin1 NOT NULL,
  `paid_by` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`emp_sal_pay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('1', '145454', '63.49', '0.21', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('2', 'EU8EH6sdBY', '7,728.00', '0.10', '1', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('3', 'EY2T1OWA', '47.47', '0.13', '5', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('4', '145454', '-8,707.92', '120', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('5', 'EU8EH6sdBY', '7,728.00', '120', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('6', 'EY2T1OWA', '-14,104.15', '120', '5', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('7', '145454', '14,611.71', '70', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('8', 'EU8EH6sdBY', '7,728.00', '70', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('9', 'EY2T1OWA', '9,563.75', '70', '5', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('10', '145454', '63.49', '0.21', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('11', 'EU8EH6sdBY', '7,728.00', '0.10', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('12', 'EY2T1OWA', '47.47', '0.13', '5', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('13', '145454', '63.49', '0.21', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('14', 'EU8EH6sdBY', '7,728.00', '1.30', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('15', 'EY2T1OWA', '47.47', '0.13', '5', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('16', '145454', '17,077.44', '70', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('17', 'EU8EH6sdBY', '7,728.00', '70', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('18', 'EY2T1OWA', '20,205.41', '70', '6', 'paid', '2018-10-17', 'Jhon  Doe');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('19', '145454', '63.49', '0.21', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('20', 'E1Q5NMGS', '6,442.93', '8.13', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('21', 'E4Y9T7CJ', '24,950.40', '0.00', '0', 'paid', '2018-10-18', 'Jhon  Doe');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('22', 'EU8EH6sdBY', '7,728.00', '1.30', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('23', 'EY2T1OWA', '208.14', '0.57', '7', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('24', '145454', '63.49', '0.21', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('25', 'E1Q5NMGS', '6,442.93', '8.13', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('26', 'E4Y9T7CJ', '24,950.40', '0.00', '0', 'paid', '2018-10-18', 'Jhon  Doe');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('27', 'EU8EH6sdBY', '7,728.00', '1.30', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('28', 'EY2T1OWA', '208.14', '0.57', '7', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('29', '145454', '63.240131506849', '0.20916666666667', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('30', 'E1Q5NMGS', '6442.93', '8.1311111111111', '3', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('31', 'E4Y9T7CJ', '24950.4', '0', '0', 'paid', '2018-10-18', 'Jhon  Doe');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('32', 'EU8EH6sdBY', '7728', '1.3038888888889', '2', '', '', '');
INSERT INTO `employee_salary_payment` (`emp_sal_pay_id`, `employee_id`, `total_salary`, `total_working_minutes`, `working_period`, `payment_due`, `payment_date`, `paid_by`) VALUES ('33', 'EY2T1OWA', '206.61812545662', '0.56583333333333', '7', '', '', '');


#
# TABLE STRUCTURE FOR: employee_salary_setup
#

DROP TABLE IF EXISTS `employee_salary_setup`;

CREATE TABLE `employee_salary_setup` (
  `e_s_s_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sal_type` varchar(30) NOT NULL,
  `salary_type_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` datetime(6) DEFAULT NULL,
  `update_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gross_salary` float NOT NULL,
  PRIMARY KEY (`e_s_s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('1', 'EY2T1OWA', '1', '6', '10', '2018-10-14', NULL, '', '384.37');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('2', 'EY2T1OWA', '1', '10', '5', '2018-10-14', NULL, '', '384.37');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('3', 'EY2T1OWA', '1', '15', '10', '2018-10-14', NULL, '', '384.37');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('4', 'EY2T1OWA', '1', '16', '4', '2018-10-14', NULL, '', '384.37');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('5', 'EY2T1OWA', '1', '12', '6', '2018-10-14', NULL, '', '384.37');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('6', 'EY2T1OWA', '1', '13', '4', '2018-10-14', NULL, '', '384.37');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('7', '145454', '1', '6', '10', '2018-10-14', NULL, '', '318.24');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('8', '145454', '1', '10', '20', '2018-10-14', NULL, '', '318.24');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('9', '145454', '1', '15', '10', '2018-10-14', NULL, '', '318.24');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('10', '145454', '1', '16', '3', '2018-10-14', NULL, '', '318.24');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('11', '145454', '1', '12', '5', '2018-10-14', NULL, '', '318.24');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('12', '145454', '1', '13', '2', '2018-10-14', NULL, '', '318.24');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('13', 'EU8EH6sdBY', '2', '6', '10', '2018-10-14', NULL, '', '7728');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('14', 'EU8EH6sdBY', '2', '10', '20', '2018-10-14', NULL, '', '7728');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('15', 'EU8EH6sdBY', '2', '15', '5', '2018-10-14', NULL, '', '7728');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('16', 'EU8EH6sdBY', '2', '16', '10', '2018-10-14', NULL, '', '7728');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('17', 'EU8EH6sdBY', '2', '12', '15', '2018-10-14', NULL, '', '7728');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('18', 'EU8EH6sdBY', '2', '13', '10', '2018-10-14', NULL, '', '7728');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('25', 'E4Y9T7CJ', '2', '6', '10', '2018-10-18', NULL, '', '24950.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('26', 'E4Y9T7CJ', '2', '10', '5', '2018-10-18', NULL, '', '24950.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('27', 'E4Y9T7CJ', '2', '15', '3', '2018-10-18', NULL, '', '24950.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('28', 'E4Y9T7CJ', '2', '16', '4', '2018-10-18', NULL, '', '24950.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('29', 'E4Y9T7CJ', '2', '12', '5', '2018-10-18', NULL, '', '24950.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('30', 'E4Y9T7CJ', '2', '13', '5', '2018-10-18', NULL, '', '24950.4');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('41', 'E1Q5NMGS', '2', '6', '5', '2018-10-24', NULL, '', '5780.53');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('42', 'E1Q5NMGS', '2', '10', '0', '2018-10-24', NULL, '', '5780.53');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('43', 'E1Q5NMGS', '2', '15', '0', '2018-10-24', NULL, '', '5780.53');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('44', 'E1Q5NMGS', '2', '16', '0', '2018-10-24', NULL, '', '5780.53');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('45', 'E1Q5NMGS', '2', '17', '0', '2018-10-24', NULL, '', '5780.53');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('46', 'E1Q5NMGS', '2', '12', '3', '2018-10-24', NULL, '', '5780.53');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('47', 'E1Q5NMGS', '2', '13', '0', '2018-10-24', NULL, '', '5780.53');
INSERT INTO `employee_salary_setup` (`e_s_s_id`, `employee_id`, `sal_type`, `salary_type_id`, `amount`, `create_date`, `update_date`, `update_id`, `gross_salary`) VALUES ('48', 'E1Q5NMGS', '2', '18', '0', '2018-10-24', NULL, '', '5780.53');


#
# TABLE STRUCTURE FOR: equipment
#

DROP TABLE IF EXISTS `equipment`;

CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `is_assign` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `type_id`, `model`, `serial_no`, `is_assign`) VALUES ('1', 'First Equipment', '2', 'modle1', '3245', '1');
INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `type_id`, `model`, `serial_no`, `is_assign`) VALUES ('2', 'Secong Equipment', '2', 'm1564', '234234', '1');
INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `type_id`, `model`, `serial_no`, `is_assign`) VALUES ('3', 'Third E', '2', 'dfsdfs', '234', '1');


#
# TABLE STRUCTURE FOR: equipment_type
#

DROP TABLE IF EXISTS `equipment_type`;

CREATE TABLE `equipment_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `equipment_type` (`type_id`, `type_name`) VALUES ('2', 'First type');


#
# TABLE STRUCTURE FOR: event_detail
#

DROP TABLE IF EXISTS `event_detail`;

CREATE TABLE `event_detail` (
  `idevent` int(11) NOT NULL AUTO_INCREMENT,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event` varchar(200) NOT NULL,
  PRIMARY KEY (`idevent`),
  KEY `event_date` (`event_date`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('3', '2017-08-19', '02:11:13', 'good');
INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('4', '2017-10-12', '01:05:00', 'Hi');
INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('6', '2017-08-02', '02:02:00', 'gfdfg');
INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('7', '2017-08-19', '03:05:00', 'Hello alamin');
INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('10', '2017-08-21', '01:02:00', 'hj');
INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('11', '2017-08-21', '01:02:00', 'teas');
INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('13', '2017-08-02', '01:03:00', 'how');
INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event`) VALUES ('14', '2017-08-23', '03:03:00', 'how are you');


#
# TABLE STRUCTURE FOR: events
#

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `event_date` date NOT NULL,
  `total_events` int(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`event_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `events` (`event_date`, `total_events`) VALUES ('2017-08-02', '2');
INSERT INTO `events` (`event_date`, `total_events`) VALUES ('2017-08-19', '2');
INSERT INTO `events` (`event_date`, `total_events`) VALUES ('2017-08-21', '2');
INSERT INTO `events` (`event_date`, `total_events`) VALUES ('2017-08-23', '1');
INSERT INTO `events` (`event_date`, `total_events`) VALUES ('2017-10-12', '1');


#
# TABLE STRUCTURE FOR: gender
#

DROP TABLE IF EXISTS `gender`;

CREATE TABLE `gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `gender` (`id`, `gender_name`) VALUES ('1', 'Male');
INSERT INTO `gender` (`id`, `gender_name`) VALUES ('2', 'Female');
INSERT INTO `gender` (`id`, `gender_name`) VALUES ('3', 'Other');


#
# TABLE STRUCTURE FOR: grand_loan
#

DROP TABLE IF EXISTS `grand_loan`;

CREATE TABLE `grand_loan` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `permission_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `loan_details` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `interest_rate` varchar(30) CHARACTER SET latin1 NOT NULL,
  `installment` varchar(30) CHARACTER SET latin1 NOT NULL,
  `installment_period` varchar(30) CHARACTER SET latin1 NOT NULL,
  `repayment_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_of_approve` varchar(30) CHARACTER SET latin1 NOT NULL,
  `repayment_start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `loan_status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('13', '123456', 'Bdtask', 'example', '50000', '10', '2517', '24', '60417.00', '2017-09-09', '2017-09-20', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('14', '4324', 'Bdtask', 'dsfasfd', '30000', '12', '1563', '24', '37500.00', '2017-09-09', '2017-09-21', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('15', '123456', 'isahaq', 'sdfsdf', '5000', '4', '518', '10', '5183.00', '2018-09-15', '2018-09-16', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('16', 'E71Z8SYQ', 'EY2T1OWA', 'sadfasdf', '5000', '5', '439', '12', '5271.00', '2018-10-08', '2018-10-09', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('17', '145454', 'E1Q5NMGS', 'sdfasdf', '6100', '4', '522', '12', '6260.00', '2018-10-08', '2018-10-09', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('18', 'E1Q5NMGS', 'EY2T1OWA', 'sdfsdf', '10000', '4', '867', '12', '10400.00', '2018-10-08', '2018-10-08', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('19', 'E1Q5NMGS', '145454', 'sdfasdf', '30000', '8', '3220', '10', '32200.00', '2018-10-09', '2018-10-10', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('20', '145454', 'EY2T1OWA', 'this  is test loan', '6000', '4', '522', '12', '6260.00', '2018-10-09', '2018-10-10', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('21', 'E4Y9T7CJ', '145454', 'fsdafsdaf', '20000', '4', '1739', '12', '20867.00', '2018-10-17', '2018-10-18', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('22', 'E4Y9T7CJ', 'EU8EH6sdBY', 'sdfsadf', '30000', '6', '3919', '8', '31350.00', '2018-10-17', '2018-10-18', '', '', '1');
INSERT INTO `grand_loan` (`loan_id`, `employee_id`, `permission_by`, `loan_details`, `amount`, `interest_rate`, `installment`, `installment_period`, `repayment_amount`, `date_of_approve`, `repayment_start_date`, `created_by`, `updated_by`, `loan_status`) VALUES ('23', 'EU8EH6BY', 'EU8EH6BY', '', '5000', '10', '546', '10', '5458.00', '2018-10-01', '2018-10-24', '', '', '1');


#
# TABLE STRUCTURE FOR: job_advertisement
#

DROP TABLE IF EXISTS `job_advertisement`;

CREATE TABLE `job_advertisement` (
  `job_adv_id` int(10) unsigned NOT NULL,
  `pos_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adv_circular_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `circular_dadeline` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adv_file` tinytext CHARACTER SET latin1 NOT NULL,
  `adv_details` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `job_advertisement` (`job_adv_id`, `pos_id`, `adv_circular_date`, `circular_dadeline`, `adv_file`, `adv_details`) VALUES ('1', 'Pk', '09-07-2017', '09-07-2017', '0', 'dsfdsf');
INSERT INTO `job_advertisement` (`job_adv_id`, `pos_id`, `adv_circular_date`, `circular_dadeline`, `adv_file`, `adv_details`) VALUES ('2', 'Pk', '10-07-2017', '10-07-2017', './application/modules/circularprocess/assets/images/2017-07-10/Exa1.pdf', 'dfgsdf');


#
# TABLE STRUCTURE FOR: language
#

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(100) NOT NULL,
  `english` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=707 DEFAULT CHARSET=utf8;

INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('2', 'login', 'Login');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('3', 'email', 'Email Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('4', 'password', 'Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('5', 'reset', 'Reset');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('6', 'dashboard', 'Dashboard');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('7', 'home', 'Home');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('8', 'profile', 'Profile');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('9', 'profile_setting', 'Profile Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('10', 'firstname', 'First Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('11', 'lastname', 'Last Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('12', 'about', 'About');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('13', 'preview', 'Preview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('14', 'image', 'Image');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('15', 'save', 'Save');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('16', 'upload_successfully', 'Upload Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('17', 'user_added_successfully', 'User Added Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('18', 'please_try_again', 'Please Try Again...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('19', 'inbox_message', 'Inbox Messages');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('20', 'sent_message', 'Sent Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('21', 'message_details', 'Message Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('22', 'new_message', 'New Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('23', 'receiver_name', 'Receiver Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('24', 'sender_name', 'Sender Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('25', 'subject', 'Subject');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('26', 'message', 'Message');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('27', 'message_sent', 'Message Sent!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('28', 'ip_address', 'IP Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('29', 'last_login', 'Last Login');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('30', 'last_logout', 'Last Logout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('31', 'status', 'Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('32', 'delete_successfully', 'Delete Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('33', 'send', 'Send');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('34', 'date', 'Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('35', 'action', 'Action');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('36', 'sl_no', 'SL No.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('37', 'are_you_sure', 'Are You Sure ? ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('38', 'application_setting', 'Application Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('39', 'application_title', 'Application Title');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('40', 'address', 'Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('41', 'phone', 'Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('42', 'favicon', 'Favicon');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('43', 'logo', 'Logo');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('44', 'language', 'Language');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('45', 'left_to_right', 'Left To Right');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('46', 'right_to_left', 'Right To Left');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('47', 'footer_text', 'Footer Text');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('48', 'site_align', 'Application Alignment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('49', 'welcome_back', 'Welcome Back!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('50', 'please_contact_with_admin', 'Please Contact With Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('51', 'incorrect_email_or_password', 'Incorrect Email/Password');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('52', 'select_option', 'Select Option');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('53', 'ftp_setting', 'Data Synchronize [FTP Setting]');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('54', 'hostname', 'Host Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('55', 'username', 'User Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('56', 'ftp_port', 'FTP Port');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('57', 'ftp_debug', 'FTP Debug');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('58', 'project_root', 'Project Root');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('59', 'update_successfully', 'Update Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('60', 'save_successfully', 'Save Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('61', 'delete_successfully', 'Delete Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('62', 'internet_connection', 'Internet Connection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('63', 'ok', 'Ok');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('64', 'not_available', 'Not Available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('65', 'available', 'Available');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('66', 'outgoing_file', 'Outgoing File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('67', 'incoming_file', 'Incoming File');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('68', 'data_synchronize', 'Data Synchronize');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('69', 'unable_to_upload_file_please_check_configuration', 'Unable to upload file! please check configuration');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('70', 'please_configure_synchronizer_settings', 'Please configure synchronizer settings');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('71', 'download_successfully', 'Download Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('72', 'unable_to_download_file_please_check_configuration', 'Unable to download file! please check configuration');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('73', 'data_import_first', 'Data Import First');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('74', 'data_import_successfully', 'Data Import Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('75', 'unable_to_import_data_please_check_config_or_sql_file', 'Unable to import data! please check configuration / SQL file.');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('76', 'download_data_from_server', 'Download Data from Server');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('77', 'data_import_to_database', 'Data Import To Database');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('79', 'data_upload_to_server', 'Data Upload to Server');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('80', 'please_wait', 'Please Wait...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('81', 'ooops_something_went_wrong', ' Ooops something went wrong...');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('82', 'module_permission_list', 'Module Permission List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('83', 'user_permission', 'User Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('84', 'add_module_permission', 'Add Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('85', 'module_permission_added_successfully', 'Module Permission Added Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('86', 'update_module_permission', 'Update Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('87', 'download', 'Download');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('88', 'module_name', 'Module Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('89', 'create', 'Create');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('90', 'read', 'Read');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('91', 'update', 'Update');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('92', 'delete', 'Delete');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('93', 'module_list', 'Module List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('94', 'add_module', 'Add Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('95', 'directory', 'Module Direcotory');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('96', 'description', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('97', 'image_upload_successfully', 'Image Upload Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('98', 'module_added_successfully', 'Module Added Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('99', 'inactive', 'Inactive');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('100', 'active', 'Active');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('101', 'user_list', 'User List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('102', 'see_all_message', 'See All Messages');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('103', 'setting', 'Setting');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('104', 'logout', 'Logout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('105', 'admin', 'Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('106', 'add_user', 'Add User');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('107', 'user', 'User');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('108', 'module', 'Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('109', 'new', 'New');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('110', 'inbox', 'Inbox');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('111', 'sent', 'Sent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('112', 'synchronize', 'Synchronize');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('113', 'data_synchronizer', 'Data Synchronizer');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('114', 'module_permission', 'Module Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('115', 'backup_now', 'Backup Now!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('116', 'restore_now', 'Restore Now!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('117', 'backup_and_restore', 'Backup and Restore');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('118', 'captcha', 'Captcha Word');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('119', 'database_backup', 'Database Backup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('120', 'restore_successfully', 'Restore Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('121', 'backup_successfully', 'Backup Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('122', 'filename', 'File Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('123', 'file_information', 'File Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('124', 'size', 'size');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('125', 'backup_date', 'Backup Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('126', 'overwrite', 'Overwrite');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('127', 'invalid_file', 'Invalid File!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('128', 'invalid_module', 'Invalid Module');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('129', 'remove_successfully', 'Remove Successfully!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('130', 'install', 'Install');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('131', 'uninstall', 'Uninstall');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('132', 'tables_are_not_available_in_database', 'Tables are not available in database.sql');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('133', 'no_tables_are_registered_in_config', 'No tables are registerd in config.php');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('134', 'enquiry', 'Enquiry');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('135', 'read_unread', 'Read/Unread');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('136', 'enquiry_information', 'Enquiry Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('137', 'user_agent', 'User Agent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('138', 'checked_by', 'Checked By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('139', 'new_enquiry', 'New Enquiry');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('140', 'crud', 'Crud');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('141', 'view', 'View');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('142', 'name', 'Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('143', 'add', 'Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('144', 'ph', 'Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('145', 'cid', 'SL No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('146', 'view_atn', 'AttendanceView');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('147', 'mang', 'Employemanagement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('148', 'designation', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('149', 'test', 'Test');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('150', 'sl', 'SL');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('151', 'bdtask', 'BDTASK');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('152', 'practice', 'Practice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('153', 'branch_name', 'Branch Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('154', 'chairman_name', 'Chairman');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('155', 'b_photo', 'Photo');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('156', 'b_address', 'Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('157', 'position', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('158', 'advertisement', 'Advertisement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('159', 'position_name', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('160', 'position_details', 'Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('161', 'circularprocess', 'Recruitment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('162', 'pos_id', 'Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('163', 'adv_circular_date', 'Publish Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('164', 'circular_dadeline', 'Dadeline');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('165', 'adv_file', 'Documents');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('166', 'adv_details', 'Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('167', 'attendance', 'Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('168', 'employee', 'Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('169', 'emp_id', 'Employee Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('170', 'sign_in', 'Sign In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('171', 'sign_out', 'Sign Out');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('172', 'staytime', 'Stay Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('173', 'abc', '1');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('174', 'first_name', 'First Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('175', 'last_name', 'Last Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('176', 'alter_phone', 'Alternative Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('177', 'present_address', 'Present Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('178', 'parmanent_address', 'Permanent Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('179', 'candidateinfo', 'Candidate Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('180', 'add_advertisement', 'Add Advertisement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('181', 'advertisement_list', 'Manage Advertisement ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('182', 'candidate_basic_info', 'Candidate Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('183', 'can_basicinfo_list', 'Manage Candidate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('184', 'add_canbasic_info', 'Add New Candidate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('185', 'candidate_education_info', 'Candidate Educational Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('186', 'can_educationinfo_list', 'Candidate Edu Info list');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('187', 'add_edu_info', 'Add Educational Info');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('188', 'can_id', 'Candidate Id');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('189', 'degree_name', 'Obtained Degree');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('190', 'university_name', 'University');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('191', 'cgp', 'CGPA');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('192', 'comments', 'Comments');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('193', 'signature', 'Signature');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('194', 'candidate_workexperience', 'Candidate Work Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('195', 'can_workexperience_list', 'Work Experience list');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('196', 'add_can_experience', 'Add Work Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('197', 'company_name', 'Company Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('198', 'working_period', 'Working Period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('199', 'duties', 'Duties');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('200', 'supervisor', 'Supervisor');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('201', 'candidate_workexpe', 'Candidate Work Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('202', 'candidate_shortlist', 'Candidate Shortlist');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('203', 'shortlist_view', 'Manage Shortlist');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('204', 'add_shortlist', 'Add Shortlist');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('205', 'date_of_shortlist', 'Shortlist Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('206', 'interview_date', 'Interview Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('207', 'submit', 'Submit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('208', 'candidate_id', 'Your ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('209', 'job_adv_id', 'Job Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('210', 'sequence', 'Sequence');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('211', 'candidate_interview', 'Interview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('212', 'interview_list', 'Interview list');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('213', 'add_interview', 'Add interview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('214', 'interviewer_id', 'Interviewer');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('215', 'interview_marks', 'Viva Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('216', 'written_total_marks', 'Written Total Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('217', 'mcq_total_marks', 'MCQ Total Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('218', 'recommandation', 'Recommandation');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('219', 'selection', 'Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('220', 'details', 'Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('221', 'candidate_selection', 'Candidate Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('222', 'selection_list', 'Selection List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('223', 'add_selection', 'Add Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('224', 'employee_id', 'Employee Id');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('225', 'position_id', '1');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('226', 'selection_terms', 'Selection Terms');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('227', 'total_marks', 'Total Marks');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('228', 'photo', 'Picture');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('229', 'your_id', 'Your ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('230', 'change_image', 'Change Photo');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('231', 'picture', 'Photograph');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('232', 'ad', 'Add');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('233', 'write_y_p_info', 'Write Your Persoanal Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('234', 'emp_position', 'Employee Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('235', 'add_pos', 'Add Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('236', 'list_pos', 'List of Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('237', 'emp_salary_stup', 'Employee Salary SetUp');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('238', 'add_salary_stup', 'Add Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('239', 'list_salarystup', 'List of Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('240', 'emp_sal_name', 'Salary Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('241', 'emp_sal_type', 'Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('242', 'emp_performance', 'Employee Performance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('243', 'add_performance', 'Add Performance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('244', 'list_performance', 'List of Performance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('245', 'note', 'Note');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('246', 'note_by', 'Note By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('247', 'number_of_star', 'Number of Star');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('248', 'updated_by', 'Updated By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('249', 'emp_sal_payment', 'Manage Employee Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('250', 'add_payment', 'Add Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('251', 'list_payment', 'List of payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('252', 'total_salary', 'Total Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('253', 'total_working_minutes', 'Working Hour');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('254', 'payment_due', 'Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('255', 'payment_date', 'Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('256', 'paid_by', 'Paid By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('257', 'view_employee_payment', 'Employee Payment List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('258', 'sal_payment_type', 'Salary Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('259', 'add_payment_type', 'Add Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('260', 'list_payment_type', 'List of Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('261', 'payment_period', 'Payment Period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('262', 'payment_type', 'Payment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('263', 'time', 'Punch Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('264', 'shift', 'Shift');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('265', 'location', 'Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('266', 'logtype', 'Log Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('267', 'branch', 'Location');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('268', 'student', 'Students');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('269', 'csv', 'CSV');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('270', 'save_successfull', 'Your Data Save Successfully');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('271', 'successfully_updated', 'Your Data Successfully Updated');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('272', 'atn_form', 'Attendance Form');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('273', 'atn_report', 'Attendance Reports');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('274', 'end_date', 'To');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('275', 'start_date', 'From');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('276', 'done', 'Done');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('277', 'employee_id_se', 'Write Employee Id or name here ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('278', 'attendance_repor', 'Attendance Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('279', 'e_time', 'End Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('280', 's_time', 'Start Time');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('281', 'atn_datewiserer', 'Date Wise Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('282', 'atn_report_id', 'Date And Id base Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('283', 'atn_report_time', 'Date And Time report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('284', 'payroll', 'Payroll');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('285', 'loan', 'Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('286', 'loan_grand', 'Grant Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('287', 'add_loan', 'Add Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('288', 'loan_list', 'List of Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('289', 'loan_details', 'Loan Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('290', 'amount', 'Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('291', 'interest_rate', 'Interest Percentage');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('292', 'installment_period', 'Installment Period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('293', 'repayment_amount', 'Repayment Total');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('294', 'date_of_approve', 'Approve Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('295', 'repayment_start_date', 'Repayment From');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('296', 'permission_by', 'Permitted By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('297', 'grand', 'Grant');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('298', 'installment', 'Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('299', 'loan_status', 'status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('300', 'installment_period_m', 'Installment Period in Month');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('301', 'successfully_inserted', 'Your loan Successfully Granted');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('302', 'loan_installment', 'Loan Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('303', 'add_installment', 'Add Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('304', 'installment_list', 'List of Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('305', 'loan_id', 'Loan No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('306', 'installment_amount', 'Installment Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('307', 'payment', 'Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('308', 'received_by', 'Receiver');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('309', 'installment_no', 'Install No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('310', 'notes', 'Notes');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('311', 'paid', 'Paid');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('312', 'loan_report', 'Loan Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('313', 'e_r_id', 'Enter Your Employee ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('314', 'leave', 'Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('315', 'add_leave', 'Add Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('316', 'list_leave', 'List of Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('317', 'dayname', 'Weekly Leave Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('318', 'holiday', 'Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('319', 'list_holiday', 'List of Holidays');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('320', 'no_of_days', 'Number of Days');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('321', 'holiday_name', 'Holiday Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('322', 'set', 'SET');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('323', 'tax', 'Tax');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('324', 'tax_setup', 'Tax Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('325', 'add_tax_setup', 'Add Tax Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('326', 'list_tax_setup', 'List of Tax setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('327', 'tax_collection', 'Tax collection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('328', 'start_amount', 'Start Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('329', 'end_amount', 'End Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('330', 'rate', 'Tax Rate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('331', 'date_start', 'Date Start');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('332', 'amount_tax', 'Tax Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('333', 'collection_by', 'Collection By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('334', 'date_end', 'Date End');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('335', 'income_net_period', 'Income  Net period');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('336', 'default_amount', 'Default Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('337', 'add_sal_type', 'Add Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('338', 'list_sal_type', 'Salary Type List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('339', 'salary_type_setup', 'Salary Type Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('340', 'salary_setup', 'Salary SetUp');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('341', 'add_sal_setup', 'Add Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('342', 'list_sal_setup', 'Salary Setup List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('343', 'salary_type_id', 'Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('344', 'salary_generate', 'Salary Generate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('345', 'add_sal_generate', 'Generate Now');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('346', 'list_sal_generate', 'Generated Salary List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('347', 'gdate', 'Generate Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('348', 'start_dates', 'Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('349', 'generate', 'Generate ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('350', 'successfully_saved_saletup', ' Set up Successfull');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('351', 's_date', 'Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('352', 'e_date', 'End Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('353', 'salary_payable', 'Payable Salary');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('354', 'tax_manager', 'Tax');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('355', 'generate_by', 'Generate By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('356', 'successfully_paid', 'Successfully Paid');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('357', 'direct_empl', ' Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('358', 'add_emp_info', 'Add New Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('359', 'new_empl_pos', 'Add New Employee Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('360', 'manage', 'Manage Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('361', 'ad_advertisement', 'ADD POSITION');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('362', 'moduless', 'Modules');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('363', 'next', 'Next');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('364', 'finish', 'Finish');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('365', 'request', 'Request');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('366', 'successfully_saved', 'Your Data Successfully Saved');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('367', 'sal_type', 'Salary Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('368', 'sal_name', 'Salary Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('369', 'leave_application', 'Leave Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('370', 'apply_strt_date', 'Application Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('371', 'apply_end_date', 'Application End date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('372', 'leave_aprv_strt_date', 'Approve Start Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('373', 'leave_aprv_end_date', 'Approved End Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('374', 'num_aprv_day', 'Aproved Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('375', 'reason', 'Reason');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('376', 'approve_date', 'Approved Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('377', 'leave_type', 'Leave Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('378', 'apply_hard_copy', 'Application Hard Copy');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('379', 'approved_by', 'Approved By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('380', 'notice', 'Notice Board');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('381', 'noticeboard', 'Notice Board');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('382', 'notice_descriptiion', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('383', 'notice_date', 'Notice Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('384', 'notice_type', 'Notice Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('385', 'notice_by', 'Notice By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('386', 'notice_attachment', 'Attachment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('387', 'account_name', 'Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('388', 'account_type', 'Account Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('389', 'account_id', 'Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('390', 'transaction_description', 'Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('391', 'payment_id', 'Payment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('392', 'create_by_id', 'Created By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('393', 'account', 'Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('394', 'account_add', 'Add Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('395', 'account_transaction', 'Transaction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('396', 'award', 'Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('397', 'new_award', 'New Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('398', 'award_name', 'Award Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('399', 'aw_description', 'Award Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('400', 'awr_gift_item', 'Gift Item');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('401', 'awarded_by', 'Award By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('402', 'employee_name', 'Employee Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('403', 'employee_list', 'Atn List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('404', 'department', 'Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('405', 'department_name', 'Department Name ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('406', 'clockout', 'ClockOut');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('407', 'se_account_id', 'Select Account Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('408', 'division', 'Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('409', 'add_division', 'Add Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('410', 'update_division', 'Update Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('411', 'division_name', 'Division Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('412', 'division_list', 'Manage Division ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('413', 'designation_list', 'Position List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('414', 'manage_designation', 'Manage Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('415', 'add_designation', 'Add Positionn');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('416', 'select_division', 'Select Division');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('417', 'select_designation', 'Select Position');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('418', 'asset', 'Asset');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('419', 'asset_type', 'Asset Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('420', 'add_type', 'Add Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('421', 'type_list', 'Type List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('422', 'type_name', 'Type Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('423', 'select_type', 'Select Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('424', 'equipment_name', 'Equipment Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('425', 'model', 'Model');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('426', 'serial_no', 'Serial No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('427', 'equipment', 'Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('428', 'add_equipment', 'Add Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('429', 'equipment_list', 'Equipment List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('430', 'type', 'Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('431', 'equipment_maping', 'Equipment Mapping');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('432', 'add_maping', 'Add Mapping');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('433', 'maping_list', 'Mapping List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('434', 'update_equipment', 'Update Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('435', 'select_employee', 'Select Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('436', 'select_equipment', 'Select Equipment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('437', 'basic_info', 'Basic Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('438', 'middle_name', 'Middle Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('439', 'state', 'State');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('440', 'city', 'City');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('441', 'zip_code', 'Zip Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('442', 'maiden_name', 'Maiden Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('443', 'add_employee', 'Add Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('444', 'manage_employee', 'Manage Employee');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('445', 'employee_update_form', 'Employee Update Form');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('446', 'what_you_search', 'What You Search');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('447', 'search', 'Search');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('448', 'duty_type', 'Duty Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('449', 'hire_date', 'Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('450', 'original_h_date', 'Original Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('451', 'voluntary_termination', 'Voluntary Termination');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('452', 'termination_reason', 'Termination Reason');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('453', 'termination_date', 'Termination Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('454', 're_hire_date', 'Re Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('455', 'rate_type', 'Rate Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('456', 'pay_frequency', 'Pay Frequency');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('457', 'pay_frequency_txt', 'Pay Frequency Text');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('458', 'hourly_rate2', 'Hourly rate2');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('459', 'hourly_rate3', 'Hourly Rate3');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('460', 'home_department', 'Home Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('461', 'department_text', 'Department Text');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('462', 'benifit_class_code', 'Benifite Class code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('463', 'benifit_desc', 'Benifit Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('464', 'benifit_acc_date', 'Benifit Accrual Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('465', 'benifit_sta', 'Benifite Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('466', 'super_visor_name', 'Supervisor Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('467', 'is_super_visor', 'Is Supervisor');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('468', 'supervisor_report', 'Supervisor Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('469', 'dob', 'Date of Birth');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('470', 'gender', 'Gender');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('471', 'marital_stats', 'Marital Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('472', 'ethnic_group', 'Ethnic Group');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('473', 'eeo_class_gp', 'EEO Class');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('474', 'ssn', 'SSN');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('475', 'work_in_state', 'Work in State');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('476', 'live_in_state', 'Live in State');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('477', 'home_email', 'Home Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('478', 'business_email', 'Business Email');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('479', 'home_phone', 'Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('480', 'business_phone', 'Business Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('481', 'cell_phone', 'Cell Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('482', 'emerg_contct', 'Emergency Contact');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('483', 'emerg_home_phone', 'Emergency Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('484', 'emrg_w_phone', 'Emergency Work Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('485', 'emer_con_rela', 'Emergency Contact Relation');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('486', 'alt_em_contct', 'Alter Emergency Contact');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('487', 'alt_emg_h_phone', 'Alt Emergency Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('488', 'alt_emg_w_phone', 'Alt Emergency  Work Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('489', 'reports', 'Reports');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('490', 'employee_reports', 'Employee Reports');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('491', 'demographic_report', 'Demographic Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('492', 'posting_report', 'Positional Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('493', 'custom_report', 'Custom Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('494', 'benifit_report', 'Benifit Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('495', 'demographic_info', 'Demographical Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('496', 'positional_info', 'Positional Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('497', 'assets_info', 'Assets Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('498', 'custom_field', 'Custom Field');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('499', 'custom_value', 'Custom Data');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('500', 'adhoc_report', 'Adhoc Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('501', 'asset_assignment', 'Asset Assignment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('502', 'assign_asset', 'Assign Assets');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('503', 'assign_list', 'Assign List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('504', 'update_assign', 'Update Assign');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('505', 'citizenship', 'Citizenship');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('506', 'class_sta', 'Class status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('507', 'class_acc_date', 'Class Accrual date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('508', 'class_descript', 'Class Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('509', 'class_code', 'Class Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('510', 'return_asset', 'Return Assets');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('511', 'dept_id', 'Department ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('512', 'parent_id', 'Parent ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('513', 'equipment_id', 'Equipment ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('514', 'issue_date', 'Issue Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('515', 'damarage_desc', 'Damarage Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('516', 'return_date', 'Return Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('517', 'is_assign', 'Is Assign');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('518', 'emp_his_id', 'Employee History ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('519', 'damarage_descript', 'Damage Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('520', 'return', 'Return');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('521', 'return_successfull', 'Return Successfull');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('522', 'return_list', 'Return List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('523', 'custom_data', 'Custom Data');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('524', 'passing_year', 'Passing Year');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('525', 'is_admin', 'Is Admin');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('526', 'zip', 'Zip Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('527', 'original_hire_date', 'Original Hire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('528', 'rehire_date', 'Rehire Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('529', 'class_code_desc', 'Class Code Description');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('530', 'class_status', 'Class Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('531', 'super_visor_id', 'Supervisor ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('532', 'marital_status', 'Marital Status');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('533', 'emrg_h_phone', 'Emergency Home Phone');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('534', 'emgr_contct_relation', 'Emergency Contact Relation');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('535', 'id', 'ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('536', 'type_id', 'Equipment Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('537', 'custom_id', 'Custom ID');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('538', 'custom_data_type', 'Custom Data Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('539', 'role_permission', 'Role Permission');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('540', 'permission_setup', 'Permission Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('541', 'add_role', 'Add Role');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('542', 'role_list', 'Role List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('543', 'user_access_role', 'User Access Role');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('544', 'menu_item_list', 'Menu Item List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('545', 'ins_menu_for_application', 'Ins Menu  For Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('546', 'menu_title', 'Menu Title');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('547', 'page_url', 'Page Url');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('548', 'parent_menu', 'Parent Menu');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('549', 'role', 'Role');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('550', 'role_name', 'Role Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('551', 'single_checkin', 'Single Check In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('552', 'bulk_checkin', 'Bulk Check In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('553', 'manage_attendance', 'Manage Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('554', 'attendance_list', 'Attendance List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('555', 'checkin', 'Check In');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('556', 'checkout', 'Check Out');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('557', 'stay', 'Stay');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('558', 'attendance_report', 'Attendance Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('559', 'work_hour', 'Work Hour');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('560', 'cancel', 'Cancel');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('561', 'confirm_clock', 'Confirm Checkout');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('562', 'add_attendance', 'Add Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('563', 'upload_csv', 'Upload CSV');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('564', 'import_attendance', 'Import Attendance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('565', 'manage_account', 'Manage Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('566', 'add_account', 'Add Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('567', 'add_new_account', 'Add New Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('568', 'account_details', 'Account Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('569', 'manage_transaction', 'Manage Transaction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('570', 'add_expence', 'Add Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('571', 'add_income', 'Add Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('572', 'return_now', 'Return Now !!');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('573', 'manage_award', 'Manage Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('574', 'add_new_award', 'Add New Award');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('575', 'personal_information', 'Personal Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('576', 'educational_information', 'Educational Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('577', 'past_experience', 'Past Experience');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('578', 'basic_information', 'Basic Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('579', 'result', 'Result');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('580', 'institute_name', 'Institute Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('581', 'education', 'Education');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('582', 'manage_shortlist', 'Manage Short List');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('583', 'manage_interview', 'Manage Interview');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('584', 'manage_selection', 'Manage Selection');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('585', 'add_new_dept', 'Add New Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('586', 'manage_dept', 'Manage Department');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('587', 'successfully_checkout', 'Checkout Successful !');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('588', 'grant_loan', 'Grant Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('589', 'successfully_installed', 'Successfully Installed');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('590', 'total_loan', 'Total Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('591', 'total_amount', 'Total Amount');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('592', 'filter', 'Filter');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('593', 'weekly_holiday', 'Weekly Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('594', 'manage_application', 'Manage Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('595', 'add_application', 'Add Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('596', 'manage_holiday', 'Manage Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('597', 'add_more_holiday', 'Add More Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('598', 'manage_weekly_holiday', 'Manage Weekly Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('599', 'add_weekly_holiday', 'Add Weekly Holiday');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('600', 'manage_granted_loan', 'Manage Granted Loan');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('601', 'manage_installment', 'Manage Installment');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('602', 'add_new_notice', 'Add New Notice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('603', 'manage_notice', 'Manage Notice');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('604', 'salary_type', 'Salary Benefits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('605', 'manage_salary_generate', 'Manage Salary Generate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('606', 'generate_now', 'Generate Now');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('607', 'add_salary_setup', 'Add Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('608', 'manage_salary_setup', 'Manage Salary Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('609', 'add_salary_type', 'Add Salary Benefits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('610', 'manage_salary_type', 'Manage Salary Benefits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('611', 'manage_tax_setup', 'Manage Tax Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('612', 'setup_tax', 'Setup Tax');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('613', 'add_more', 'Add More');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('614', 'tax_rate', 'Tax Rate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('615', 'no', 'No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('616', 'setup', 'Setup');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('617', 'biographicalinfo', 'Bio-Graphical Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('618', 'positional_information', 'Positional Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('620', 'benifits', 'Benifits');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('621', 's_rate', 'Rate');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('622', 'others_leave_application', 'Leave Application');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('623', 'add_leave_type', 'Add Leave Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('624', 'others_leave', 'Others Leave');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('625', 'number_of_leave_days', 'Number of Leave Days');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('626', 'app_date', 'Application Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('627', 'apply_day', 'Apply Day');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('628', 'time_zone', 'Time Zone ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('629', 'accounts', 'Accounts');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('630', 'c_o_a', 'Chart of Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('631', 'debit_voucher', 'Debit Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('632', 'credit_voucher', 'Credit Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('633', 'contra_voucher', 'Contra Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('634', 'journal_voucher', 'Journal Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('635', 'voucher_approval', 'Voucher Approval');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('636', 'account_report', 'Account Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('637', 'voucher_report', 'Voucher Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('638', 'cash_book', 'Cash Book');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('639', 'bank_book', 'Bank Book');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('640', 'general_ledger', 'General Ledger');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('641', 'trial_balance', 'Trial Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('642', 'profit_loss', 'Profit Loss');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('643', 'cash_flow', 'Cash Flow');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('644', 'coa_print', 'Coa Print');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('645', 'grant', 'Grant');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('646', 'confirm', 'Confirm');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('647', 'pay_now', 'Pay Now ??');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('648', 'find', 'Find');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('649', 'gl_head', 'GL Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('650', 'acc_code', 'Account Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('651', 'from_date', 'From Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('652', 'to_date', 'To Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('653', 'bank_book_voucher', 'Bank Book Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('654', 'bank_book_report_of', 'Bank Book Report Of');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('655', 'on', 'On');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('656', 'to', 'To');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('657', 'opening_balance', 'Opening Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('658', 'balance', 'Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('659', 'credit', 'Credit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('660', 'debit', 'Debit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('661', 'head_of_account', 'Head Of Account');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('662', 'voucher_type', 'Voucher Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('663', 'voucher_no', 'Voucher No');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('664', 'transaction_date', 'Transaction Date');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('665', 'cash_book_voucher', 'Cash Book Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('666', 'cash_book_report_on', 'Cash Book Report On');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('667', 'particulars', 'Particulars');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('668', 'amount_in_dollar', 'Amount In Dollar');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('669', 'opening_cash_and_equivalent', 'Opening Cash && Equivalent');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('670', 'cash_flow_statement', 'Cash Flow Statement');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('671', 'code', 'Code');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('672', 'remark', 'Remark');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('673', 'debit_account_head', 'Debit Account Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('674', 'cash_in_hand', 'Cash In Hand');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('675', 'credit_account_head', 'Credit Account Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('676', 'transaction_head', 'Transaction Head');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('677', 'with_details', 'With Details');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('678', 'no_report', 'No Of Report');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('679', 'total', 'Total');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('680', 'current_balance', 'Current Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('681', 'pre_balance', 'Pre Balance');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('682', 'trial_balance_with_opening_as_on', 'Trial Balance With Opening ');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('683', 'as_on', 'As On');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('684', 'chairman', 'Chairman');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('685', 'prepared_by', 'Prepared By');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('686', 'statement_of_comprehensive_income', 'Statement Of Comprehensive Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('687', 'from', 'From');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('688', 'total_expenses', 'Total Expenses');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('689', 'total_income', 'Total Income');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('690', 'authorized_signature', 'Authorize Signature');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('691', 'account_official', 'Account Official');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('692', 'approved', 'Approved');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('693', 'update_credit_voucher', 'Update Credit Voucher');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('694', 'benefits', 'Benifit');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('695', 'class', 'Class');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('696', 'biographical_info', 'Biographical Information');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('697', 'additional_address', 'Additional Address');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('698', 'custom', 'Custom');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('699', 'can_name', 'Candidate Name');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('700', 'select', 'Select');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('701', 'benefit_type', 'Benefit Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('702', 'salary_benefits_type', 'Benefits Type');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('703', 'addition', 'Addition');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('704', 'basic', 'Basic');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('705', 'deduction', 'Deduction');
INSERT INTO `language` (`id`, `phrase`, `english`) VALUES ('706', 'gross_salary', 'Gross Salary');


#
# TABLE STRUCTURE FOR: leave_apply
#

DROP TABLE IF EXISTS `leave_apply`;

CREATE TABLE `leave_apply` (
  `leave_appl_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `leave_type_id` int(2) NOT NULL,
  `apply_strt_date` varchar(20) NOT NULL,
  `apply_end_date` varchar(20) NOT NULL,
  `apply_day` int(11) NOT NULL,
  `leave_aprv_strt_date` varchar(20) NOT NULL,
  `leave_aprv_end_date` varchar(20) NOT NULL,
  `num_aprv_day` varchar(15) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `apply_hard_copy` text,
  `apply_date` varchar(20) NOT NULL,
  `approve_date` varchar(20) NOT NULL,
  `approved_by` varchar(30) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  PRIMARY KEY (`leave_appl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('10', '123456', '0', '2017-09-07', '2017-09-21', '0', '2017-09-07', '2017-09-19', '12', 'Marriage', '0', '2017-09-07', '2017-09-07', 'pingbd', 'dfsdf');
INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('11', '3598875', '0', '2017-09-09', '2017-09-21', '0', '2017-09-09', '2017-09-20', '11', 'Festival', '0', '2017-09-09', '2017-09-09', 'Bdtask', 'df');
INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('12', '3598875', '0', '2017-09-12', '2017-09-20', '0', '2017-09-12', '2017-09-20', '8', 'Festival', '0', '2017-09-11', '2017-09-11', 'Bdtask', 'dfsdf');
INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('13', '123456', '0', '2018-09-16', '2018-09-19', '0', '2018-09-10', '2018-09-12', '2', 'Private', NULL, '2018-09-15', '2018-09-15', 'isahaq', 'sdfsdf');
INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('14', 'EU8EH6BY', '1', '2018-10-10', '2018-10-13', '0', '2018-10-12', '2018-10-11', '', 'sick', NULL, '2018-10-13', '2018-10-13', 'as', 'Earn Leave');
INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('15', 'EY2T1OWA', '2', '2018-10-16', '2018-10-18', '0', '2018-10-15', '2018-10-17', '2', 'sick', '', '2018-10-15', '2018-10-08', 'Isahaq', '');
INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('16', '145454', '2', '2018-10-18', '2018-10-19', '2', '2018-10-18', '2018-10-19', '2', 'Fever...', '', '2018-10-16', '2018-10-16', 'EY2T1OWA', '');
INSERT INTO `leave_apply` (`leave_appl_id`, `employee_id`, `leave_type_id`, `apply_strt_date`, `apply_end_date`, `apply_day`, `leave_aprv_strt_date`, `leave_aprv_end_date`, `num_aprv_day`, `reason`, `apply_hard_copy`, `apply_date`, `approve_date`, `approved_by`, `leave_type`) VALUES ('17', '145454', '2', '2018-10-23', '2018-10-25', '3', '2018-10-24', '2018-10-23', '2', '[pi8uy7yh', NULL, '2018-10-23', '2018-10-23', 'EY2T1OWA', '');


#
# TABLE STRUCTURE FOR: leave_type
#

DROP TABLE IF EXISTS `leave_type`;

CREATE TABLE `leave_type` (
  `leave_type_id` int(2) NOT NULL AUTO_INCREMENT,
  `leave_type` varchar(50) NOT NULL,
  `leave_days` int(2) NOT NULL,
  PRIMARY KEY (`leave_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('1', 'Earn Leave', '3');
INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('2', 'Sick Leave', '6');
INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('3', 'Half Day Leave', '2');
INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('4', 'Maternity Leave', '8');
INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('6', 'Test ', '4');
INSERT INTO `leave_type` (`leave_type_id`, `leave_type`, `leave_days`) VALUES ('7', 'hello', '6');


#
# TABLE STRUCTURE FOR: loan_installment
#

DROP TABLE IF EXISTS `loan_installment`;

CREATE TABLE `loan_installment` (
  `loan_inst_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(21) CHARACTER SET latin1 NOT NULL,
  `loan_id` varchar(21) CHARACTER SET latin1 NOT NULL,
  `installment_amount` varchar(20) CHARACTER SET latin1 NOT NULL,
  `payment` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date` varchar(20) CHARACTER SET latin1 NOT NULL,
  `received_by` varchar(20) CHARACTER SET latin1 NOT NULL,
  `installment_no` varchar(20) CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `notes` varchar(80) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`loan_inst_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('5', '123456', '13', '2517', '2517', '2017-09-21', 'sdf', '1', 'sdfsdf\"');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('6', '4324', '14', '1563', '1563', '2017-09-09', 'dfgdsfg', '1', 'dfgdfg');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('7', '4324', '14', '1563', '1563', '2018-10-08', 'sfsdfsdf', '2', 'wrtwer');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('8', '145454', '17', '522', '522', '2018-10-08', 'dderwer', '1', 'sdfsadf');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('9', 'E71Z8SYQ', '16', '439', '439', '2018-10-08', 'isa', '1', 'cxvxczv');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('10', 'E1Q5NMGS', '18', '867', '867', '2018-10-08', 'jahid', '1', 'sdfsdf');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('11', 'E1Q5NMGS', '19', '3220', '3220', '2018-10-10', 'yyyy', '1', 'fgsdfgsdfg');
INSERT INTO `loan_installment` (`loan_inst_id`, `employee_id`, `loan_id`, `installment_amount`, `payment`, `date`, `received_by`, `installment_no`, `notes`) VALUES ('12', '145454', '17', '522', '522', '2018-10-08', 'isahaq', '2', 'sdfsdf');


#
# TABLE STRUCTURE FOR: marital_info
#

DROP TABLE IF EXISTS `marital_info`;

CREATE TABLE `marital_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marital_sta` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('1', 'Single');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('2', 'Married');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('3', 'Divorced');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('4', 'Widowed');
INSERT INTO `marital_info` (`id`, `marital_sta`) VALUES ('5', 'Other');


#
# TABLE STRUCTURE FOR: message
#

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `sender_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete',
  `receiver_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unseen, 1=seen, 2=delete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('1', '2', '1', 'TEST', '<p> TEST</p>', '2017-02-07 00:00:00', '2', '2');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('3', '26', '3', 'TEST', '<p>receiver_id<strong></strong></p>', '2017-02-07 00:00:00', '0', '1');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('10', '2', '17', 'TEST', '<p>bbjkjhjh</p>', '2017-02-07 11:34:41', '0', '0');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('11', '2', '1', 'morning', '<p>sadefsdasdaff</p>', '2017-07-19 06:57:36', '1', '1');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('12', '2', '7', 'hi', '<p>fgdfg</p>', '2017-07-23 10:08:55', '1', '0');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('13', '2', '1', 'Salary report', '<p>Please send me salary report.....</p>', '2017-07-23 02:01:04', '1', '1');
INSERT INTO `message` (`id`, `sender_id`, `receiver_id`, `subject`, `message`, `datetime`, `sender_status`, `receiver_status`) VALUES ('14', '2', '7', 'fbhz', 'dzfhdfh', '2017-11-22 09:06:48', '2', '0');


#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('39', 'attendance Details ', 'Simple attendance processing System', 'application/modules/attendance/assets/images/thumbnail.jpg', 'attendance', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('40', 'Employee circulation processing System', 'Simple circulation processing System', 'application/modules/circularprocess/assets/images/thumbnail.jpg', 'circularprocess', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('41', 'Employee Details ', 'Simple hrm processing System', 'application/modules/employee/assets/images/thumbnail.jpg', 'employee', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('42', 'Leave Details ', 'Simple leave processing System', 'application/modules/leave/assets/images/thumbnail.jpg', 'leave', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('43', 'Loan Details ', 'Simple loan processing System', 'application/modules/loan/assets/images/thumbnail.jpg', 'loan', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('44', 'TAX Details ', 'Simple tax processing System', 'application/modules/tax/assets/images/thumbnail.jpg', 'tax', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('46', 'Payroll Details ', 'Simple payroll processing System', 'application/modules/payroll/assets/images/thumbnail.jpg', 'payroll', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('48', 'Account', 'Account information', 'application/modules/account/assets/images/thumbnail.jpg', 'account', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('49', 'Notice Details ', 'Simple Notice', 'application/modules/noticeboard/assets/images/thumbnail.jpg', 'noticeboard', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('50', 'Award Details ', 'Simple Award', 'application/modules/award/assets/images/thumbnail.jpg', 'award', '1');
INSERT INTO `module` (`id`, `name`, `description`, `image`, `directory`, `status`) VALUES ('52', 'asset Details ', 'Simple asset', 'application/modules/asset/assets/images/thumbnail.jpg', 'asset', '1');


#
# TABLE STRUCTURE FOR: module_permission
#

DROP TABLE IF EXISTS `module_permission`;

CREATE TABLE `module_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_module_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `create` tinyint(1) DEFAULT NULL,
  `read` tinyint(1) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_module_id` (`fk_module_id`),
  KEY `fk_user_id` (`fk_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('5', '39', '3', '1', '1', '1', '1');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('6', '40', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('7', '41', '3', '0', '1', '1', '1');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('8', '42', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('9', '43', '3', '0', '1', '1', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('10', '44', '3', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('21', '39', '1', '1', '1', '1', '1');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('22', '40', '1', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('23', '41', '1', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('24', '42', '1', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('25', '43', '1', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('26', '44', '1', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('27', '46', '1', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('28', '48', '1', '1', '1', '1', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('29', '49', '1', '0', '0', '0', '0');
INSERT INTO `module_permission` (`id`, `fk_module_id`, `fk_user_id`, `create`, `read`, `update`, `delete`) VALUES ('30', '50', '1', '0', '0', '0', '0');


#
# TABLE STRUCTURE FOR: notice_board
#

DROP TABLE IF EXISTS `notice_board`;

CREATE TABLE `notice_board` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_descriptiion` text NOT NULL,
  `notice_date` date NOT NULL,
  `notice_type` varchar(50) NOT NULL,
  `notice_by` varchar(50) NOT NULL,
  `notice_attachment` text,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('2', 'Attention Please It is a large for Describe our notice', '2017-08-25', 'Salary', 'sdfdsf', './application/modules/noticeboard/assets/images/2017-08-16/Exa.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('3', 'sdf', '2017-08-22', 'Testing Notice', 'sdf', './application/modules/noticeboard/assets/images/2017-08-22/Exa.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('4', 'sdf', '2017-08-22', 'Second test', 'Isahq', '0');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('5', 'dsfdsf', '2017-08-21', 'Vacaition holiday', 'sdfsdf', './application/modules/noticeboard/assets/images/2017-08-22/Exa1.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('6', 'Holy Eid ul Azha', '2017-08-23', 'Leave', 'Isahaq', '0');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('7', 'sdfsdf', '2017-08-23', 'Eid Ul Azha', 'Khan', '0');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('8', 'sdfsaf', '2017-08-16', 'Vacaition holiday', 'ewr', '');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('9', 'sdfdsfsdf', '2017-08-28', 'Eid Ul Azha Holiday', 'SAkir', './application/modules/noticeboard/assets/images/2017-08-29/Exa2.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('10', 'sdfsdf', '2017-08-29', 'Jamtul Bidha', 'sakib', './application/modules/noticeboard/assets/images/2017-08-29/Exa1.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('11', 'dfdsf', '2017-08-29', 'Summer vacation', 'Mizan', './application/modules/noticeboard/assets/images/2017-08-29/Exa.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('12', 'Our office will be open at 7', '2017-09-07', 'Office Open', 'bdtask', './application/modules/noticeboard/assets/images/2017-09-07/Exa.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('13', 'asdfsdaf', '2017-09-09', 'Test Notice', 'Bdtask', './application/modules/noticeboard/assets/images/2017-09-09/Exa.pdf');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('14', 'Mohorrom', '2018-09-15', 'Govt.holiday', 'isahaq', '');
INSERT INTO `notice_board` (`notice_id`, `notice_descriptiion`, `notice_date`, `notice_type`, `notice_by`, `notice_attachment`) VALUES ('15', 'sdfsadf', '2018-10-08', 'Testing Notice', 'isahaq', './application/modules/noticeboard/assets/images/2018-10-08/Exa.pdf');


#
# TABLE STRUCTURE FOR: pay_frequency
#

DROP TABLE IF EXISTS `pay_frequency`;

CREATE TABLE `pay_frequency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequency_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `pay_frequency` (`id`, `frequency_name`) VALUES ('1', 'Weekly');
INSERT INTO `pay_frequency` (`id`, `frequency_name`) VALUES ('2', 'Biweekly');
INSERT INTO `pay_frequency` (`id`, `frequency_name`) VALUES ('3', 'Annual');


#
# TABLE STRUCTURE FOR: payroll_holiday
#

DROP TABLE IF EXISTS `payroll_holiday`;

CREATE TABLE `payroll_holiday` (
  `payrl_holi_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `holiday_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `no_of_days` varchar(30) CHARACTER SET latin1 NOT NULL,
  `created_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `updated_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`payrl_holi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('1', 'Eid holiay', '2017-07-16', '2017-07-21', '232', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('2', 'fdgds', '2017-07-20', '2017-07-23', '3', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('3', 'sad', '2017-07-18', '2017-07-21', '3', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('4', 'Eid holiay', '2017-07-18', '2017-07-20', '2', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('5', 'eid', '2017-08-01', '2017-08-11', 'NaN', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('6', 'eid ul fitar', '2017-07-20', '2017-07-25', '5', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('7', 'pohela Bayshak', '2017-07-20', '2017-07-25', '7', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('8', 'summer vacation', '2017-07-23', '2017-07-30', '7', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('10', 'Ramadan', '2017-07-01', '2017-07-25', '24', '', '');
INSERT INTO `payroll_holiday` (`payrl_holi_id`, `holiday_name`, `start_date`, `end_date`, `no_of_days`, `created_by`, `updated_by`) VALUES ('11', 'Eid Ul Azha', '2017-08-30', '2017-09-05', '6', '', '');


#
# TABLE STRUCTURE FOR: payroll_tax_collection
#

DROP TABLE IF EXISTS `payroll_tax_collection`;

CREATE TABLE `payroll_tax_collection` (
  `tax_coll_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_start` varchar(30) CHARACTER SET latin1 NOT NULL,
  `amount_tax` varchar(30) CHARACTER SET latin1 NOT NULL,
  `collection_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_end` varchar(30) CHARACTER SET latin1 NOT NULL,
  `income_net_period` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tax_coll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: payroll_tax_setup
#

DROP TABLE IF EXISTS `payroll_tax_setup`;

CREATE TABLE `payroll_tax_setup` (
  `tax_setup_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `start_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_amount` varchar(30) CHARACTER SET latin1 NOT NULL,
  `rate` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tax_setup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('1', '1', '5000', '5', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('7', '5001', '10000', '8', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('8', '10001', '20000', '12', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('9', '20001', '30000', '15', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('10', '30001', '50000', '18', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('11', '50001', '100000', '20', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('12', '100001', '200000', '25', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('13', '200001', '300000', '30', '');
INSERT INTO `payroll_tax_setup` (`tax_setup_id`, `start_amount`, `end_amount`, `rate`, `status`) VALUES ('14', '300001', '2000000', '35', '');


#
# TABLE STRUCTURE FOR: position
#

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `pos_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `position_details` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('4', 'Junior Executive ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('5', 'Senior Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('6', 'Chief Executive', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('7', 'Junior Software Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('8', 'Lead Programmer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('9', 'HR Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('10', 'Chief Information Officer  ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('11', 'Chief Operation Officer ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('12', 'Chief Executive Officer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor quam eu maximus pulvinar.');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('13', 'SEO', 'highligting');
INSERT INTO `position` (`pos_id`, `position_name`, `position_details`) VALUES ('14', 'Supervisor', 'Monitoring Division');


#
# TABLE STRUCTURE FOR: rate_type
#

DROP TABLE IF EXISTS `rate_type`;

CREATE TABLE `rate_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: salary_setup_header
#

DROP TABLE IF EXISTS `salary_setup_header`;

CREATE TABLE `salary_setup_header` (
  `s_s_h_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(30) CHARACTER SET latin1 NOT NULL,
  `salary_payable` varchar(30) CHARACTER SET latin1 NOT NULL,
  `absent_deduct` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tax_manager` varchar(30) CHARACTER SET latin1 NOT NULL,
  `status` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`s_s_h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('1', '5001', 'monthly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('2', '1234bd', 'monthly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('3', '1235', 'weekly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('4', '20021', 'monthly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('5', '100001', 'monthly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('6', '3598875', 'monthly', '1', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('7', 'E71Z8SYQ', 'weekly', '1', '0', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('8', 'EY2T1OWA', 'monthly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('9', '145454', '', '0', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('10', 'E1Q5NMGS', 'monthly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('11', 'EU8EH6BY', 'monthly', '1', '1', '');
INSERT INTO `salary_setup_header` (`s_s_h_id`, `employee_id`, `salary_payable`, `absent_deduct`, `tax_manager`, `status`) VALUES ('12', 'EY2T1OWA', 'monthly', '1', '1', '');


#
# TABLE STRUCTURE FOR: salary_sheet_generate
#

DROP TABLE IF EXISTS `salary_sheet_generate`;

CREATE TABLE `salary_sheet_generate` (
  `ssg_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(20) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `gdate` varchar(20) DEFAULT NULL,
  `start_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `end_date` varchar(30) CHARACTER SET latin1 NOT NULL,
  `generate_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ssg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('1', '145454', 'October', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('2', 'EU8EH6sdBY', 'October', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('3', 'EY2T1OWA', 'October', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('4', '145454', 'Second', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('5', 'EU8EH6sdBY', 'Second', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('6', 'EY2T1OWA', 'Second', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('7', '145454', 'Third', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('8', 'EU8EH6sdBY', 'Third', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('9', 'EY2T1OWA', 'Third', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('10', '145454', 'hhh', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('11', 'EU8EH6sdBY', 'hhh', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('12', 'EY2T1OWA', 'hhh', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('13', '145454', 'dfgsdfasd', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('14', 'EU8EH6sdBY', 'dfgsdfasd', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('15', 'EY2T1OWA', 'dfgsdfasd', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('16', '145454', 'tttt', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('17', 'EU8EH6sdBY', 'tttt', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('18', 'EY2T1OWA', 'tttt', '2018-10-15', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('19', '145454', 'October', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('20', 'E1Q5NMGS', 'October', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('21', 'E4Y9T7CJ', 'October', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('22', 'EU8EH6sdBY', 'October', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('23', 'EY2T1OWA', 'October', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('24', '145454', 'trdyfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('25', 'E1Q5NMGS', 'trdyfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('26', 'E4Y9T7CJ', 'trdyfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('27', 'EU8EH6sdBY', 'trdyfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('28', 'EY2T1OWA', 'trdyfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('29', '145454', 'hggfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('30', 'E1Q5NMGS', 'hggfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('31', 'E4Y9T7CJ', 'hggfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('32', 'EU8EH6sdBY', 'hggfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');
INSERT INTO `salary_sheet_generate` (`ssg_id`, `employee_id`, `name`, `gdate`, `start_date`, `end_date`, `generate_by`) VALUES ('33', 'EY2T1OWA', 'hggfd', '2018-10-18', '2018-10-01', '2018-10-31', 'Jhon  Doe');


#
# TABLE STRUCTURE FOR: salary_type
#

DROP TABLE IF EXISTS `salary_type`;

CREATE TABLE `salary_type` (
  `salary_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sal_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `emp_sal_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `default_amount` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`salary_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('6', 'Medical', '1', '10000', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('10', 'house Rent', '1', '1000', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('12', 'Provident fund', '0', '200', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('13', 'Bima', '0', '1000', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('15', 'Month', '1', '50', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('16', 'new', '1', '321', '');
INSERT INTO `salary_type` (`salary_type_id`, `sal_name`, `emp_sal_type`, `default_amount`, `status`) VALUES ('17', 'Etcss', '1', '1000', '');


#
# TABLE STRUCTURE FOR: sampledata
#

DROP TABLE IF EXISTS `sampledata`;

CREATE TABLE `sampledata` (
  `brand` varchar(30) NOT NULL,
  `dealer_name` varchar(30) NOT NULL,
  `authorized` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `website_addr` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: sec_menu_item
#

DROP TABLE IF EXISTS `sec_menu_item`;

CREATE TABLE `sec_menu_item` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_url` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_menu` int(11) DEFAULT NULL,
  `is_report` tinyint(1) DEFAULT NULL,
  `createby` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('134', 'asset_type', '', 'asset', NULL, '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('135', 'add_type', 'type_form', 'asset', '134', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('136', 'type_list', 'type_list', 'asset', '134', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('137', 'equipment', '', 'asset', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('138', 'add_equipment', 'equipment_form', 'asset', '137', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('139', 'equipment_list', 'equipment_list', 'asset', '137', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('140', 'asset_assignment', '', 'asset', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('141', 'assign_asset', 'maping_form', 'asset', '140', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('142', 'assign_list', 'maping_list', 'asset', '140', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('143', 'return', '', 'asset', NULL, '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('144', 'return_asset', 'asset_return_form', 'asset', '143', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('145', 'return_list', 'return_list', 'asset', '143', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('146', 'attendance', '', 'attendance', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('147', 'atn_form', 'atnview', 'attendance', '146', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('148', 'atn_report', 'attendance_list', 'attendance', '146', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('149', 'new_award', 'award_form', 'award', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('150', 'candidate_basic_info', '', 'circularprocess', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('151', 'add_canbasic_info', 'canInfo_form', 'circularprocess', '150', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('152', 'can_basicinfo_list', 'canInfoview', 'circularprocess', '150', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('153', 'candidate_shortlist', 'shortlist_form', 'circularprocess', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('154', 'candidate_interview', 'interview_form', 'circularprocess', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('155', 'candidate_selection', 'selection_form', 'circularprocess', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('156', 'department', 'dept_form', 'department', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('157', 'division', '', 'department', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('158', 'add_division', 'division_form', 'department', '157', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('159', 'division_list', 'division_list', 'department', '157', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('161', 'position', 'position_form', 'employee', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('162', 'Direct_Empl', '', 'employee', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('163', 'add_employee', 'employ_form', 'employee', '162', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('164', 'manage_employee', 'employee_view', 'employee', '162', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('165', 'emp_performance', 'emp_performance_form', 'employee', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('166', 'emp_sal_payment', 'paymentview', 'employee', '0', '0', '2', '2018-10-04 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('167', 'weekly_holiday', 'weeklyform', 'leave', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('168', 'holiday', 'holiday_form', 'leave', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('169', 'others_leave_application', '', 'leave', NULL, '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('170', 'loan_grand', 'grandloan_form', 'loan', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('171', 'loan_installment', 'installment_form', 'loan', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('172', 'loan_report', 'ln_report', 'loan', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('173', 'notice', 'notice_form', 'noticeboard', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('174', 'create_salary_setup', 'emp_salarysetup_form', 'payroll', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('175', 'salary_setup', 'salarysetup_form', 'payroll', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('176', 'salary_generate', 'salary_generate_form', 'payroll', '0', '0', '2', '2018-10-08 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('177', 'employee_reports', '', 'reports', '0', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('178', 'demographic_report', 'demographic_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('179', 'posting_report', 'positional_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('180', 'asset', 'assets_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('181', 'benifit_report', 'benifit_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('182', 'custom_report', 'custom_list', 'reports', '177', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('183', 'adhoc_report', 'adhoc_form', 'reports', '0', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('184', 'tax_setup', 'tax_setupform', 'tax', '0', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('185', 'tax_collection', 'tax_collection_view', 'tax', '0', '0', '2', '2018-10-09 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('186', 'add_leave_type', 'leave_type_form', 'leave', '169', '0', '2', '2018-10-16 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('187', 'leave_application', 'other_leave_application_form', 'leave', '169', '0', '2', '2018-10-16 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('188', 'c_o_a', 'treeview', 'accounts', NULL, '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('189', 'debit_voucher', 'debit_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('190', 'credit_voucher', 'credit_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('191', 'contra_voucher', 'contra_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('192', 'journal_voucher', 'journal_voucher', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('193', 'voucher_approval', 'voucher_approve', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('194', 'account_report', '', 'accounts', '0', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('195', 'voucher_report', 'coa', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('196', 'cash_book', 'cash_book', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('197', 'bank_book', 'bank_book', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('198', 'general_ledger', 'general_ledger', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('199', 'trial_balance', 'trial_balance', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('200', 'profit_loss', 'profit_loss_report', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('201', 'cash_flow', 'cash_flow_report', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');
INSERT INTO `sec_menu_item` (`menu_id`, `menu_title`, `page_url`, `module`, `parent_menu`, `is_report`, `createby`, `createdate`) VALUES ('202', 'coa_print', 'coa_print', 'accounts', '194', '0', '2', '2018-10-18 00:00:00');


#
# TABLE STRUCTURE FOR: sec_role_permission
#

DROP TABLE IF EXISTS `sec_role_permission`;

CREATE TABLE `sec_role_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `can_access` tinyint(1) NOT NULL,
  `can_create` tinyint(1) NOT NULL,
  `can_edit` tinyint(1) NOT NULL,
  `can_delete` tinyint(1) NOT NULL,
  `createby` int(11) NOT NULL,
  `createdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1162 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1039', '3', '132', '1', '1', '1', '1', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1040', '3', '133', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1041', '3', '134', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1042', '3', '135', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1043', '3', '136', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1044', '3', '137', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1045', '3', '138', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1046', '3', '139', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1047', '3', '140', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1048', '3', '141', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1049', '3', '142', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1050', '3', '143', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1051', '3', '144', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1052', '3', '145', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1053', '3', '146', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1054', '3', '147', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1055', '3', '148', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1056', '3', '149', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1057', '3', '150', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1058', '3', '151', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1059', '3', '152', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1060', '3', '153', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1061', '3', '154', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1062', '3', '155', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1063', '3', '156', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1064', '3', '157', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1065', '3', '158', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1066', '3', '159', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1067', '3', '161', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1068', '3', '162', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1069', '3', '163', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1070', '3', '164', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1071', '3', '165', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1072', '3', '166', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1073', '3', '167', '1', '1', '1', '1', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1074', '3', '168', '1', '1', '1', '1', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1075', '3', '169', '1', '1', '1', '1', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1076', '3', '186', '1', '1', '1', '1', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1077', '3', '187', '1', '1', '1', '1', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1078', '3', '170', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1079', '3', '171', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1080', '3', '172', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1081', '3', '173', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1082', '3', '174', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1083', '3', '175', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1084', '3', '176', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1085', '3', '177', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1086', '3', '178', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1087', '3', '179', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1088', '3', '180', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1089', '3', '181', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1090', '3', '182', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1091', '3', '183', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1092', '3', '184', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1093', '3', '185', '0', '0', '0', '0', '2', '2018-10-16 12:43:07');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1094', '4', '188', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1095', '4', '189', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1096', '4', '190', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1097', '4', '191', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1098', '4', '192', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1099', '4', '193', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1100', '4', '194', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1101', '4', '195', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1102', '4', '196', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1103', '4', '197', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1104', '4', '198', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1105', '4', '199', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1106', '4', '200', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1107', '4', '201', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1108', '4', '202', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1109', '4', '134', '1', '1', '1', '1', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1110', '4', '135', '1', '1', '1', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1111', '4', '136', '1', '1', '1', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1112', '4', '137', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1113', '4', '138', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1114', '4', '139', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1115', '4', '140', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1116', '4', '141', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1117', '4', '142', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1118', '4', '143', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1119', '4', '144', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1120', '4', '145', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1121', '4', '146', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1122', '4', '147', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1123', '4', '148', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1124', '4', '149', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1125', '4', '150', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1126', '4', '151', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1127', '4', '152', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1128', '4', '153', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1129', '4', '154', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1130', '4', '155', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1131', '4', '156', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1132', '4', '157', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1133', '4', '158', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1134', '4', '159', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1135', '4', '161', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1136', '4', '162', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1137', '4', '163', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1138', '4', '164', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1139', '4', '165', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1140', '4', '166', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1141', '4', '167', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1142', '4', '168', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1143', '4', '169', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1144', '4', '186', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1145', '4', '187', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1146', '4', '170', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1147', '4', '171', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1148', '4', '172', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1149', '4', '173', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1150', '4', '174', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1151', '4', '175', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1152', '4', '176', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1153', '4', '177', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1154', '4', '178', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1155', '4', '179', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1156', '4', '180', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1157', '4', '181', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1158', '4', '182', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1159', '4', '183', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1160', '4', '184', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');
INSERT INTO `sec_role_permission` (`id`, `role_id`, `menu_id`, `can_access`, `can_create`, `can_edit`, `can_delete`, `createby`, `createdate`) VALUES ('1161', '4', '185', '0', '0', '0', '0', '2', '2018-10-24 08:07:37');


#
# TABLE STRUCTURE FOR: sec_role_tbl
#

DROP TABLE IF EXISTS `sec_role_tbl`;

CREATE TABLE `sec_role_tbl` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` text NOT NULL,
  `role_description` text NOT NULL,
  `create_by` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `role_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `sec_role_tbl` (`role_id`, `role_name`, `role_description`, `create_by`, `date_time`, `role_status`) VALUES ('3', 'Manager', 'sdfdfsdf', '2', '2018-10-04 11:22:31', '1');
INSERT INTO `sec_role_tbl` (`role_id`, `role_name`, `role_description`, `create_by`, `date_time`, `role_status`) VALUES ('4', 'Second Role', 'sdfasdf', '2', '2018-10-24 08:07:37', '1');


#
# TABLE STRUCTURE FOR: sec_user_access_tbl
#

DROP TABLE IF EXISTS `sec_user_access_tbl`;

CREATE TABLE `sec_user_access_tbl` (
  `role_acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_role_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  PRIMARY KEY (`role_acc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('5', '3', '1');
INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('6', '3', '16');
INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('7', '3', '7');
INSERT INTO `sec_user_access_tbl` (`role_acc_id`, `fk_role_id`, `fk_user_id`) VALUES ('8', '4', '7');


#
# TABLE STRUCTURE FOR: setting
#

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `address` text,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `timezone` varchar(150) NOT NULL,
  `site_align` varchar(50) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `setting` (`id`, `title`, `address`, `email`, `phone`, `logo`, `favicon`, `language`, `timezone`, `site_align`, `footer_text`) VALUES ('2', 'Human Resource Management', '98 Green Road, Farmgate, Dhaka-1215.', 'bdtask@gmail.com', '0123456789', 'assets/img/icons/2017-07-22/HRM.png', 'assets/img/icons/2017-04-03/m.png', 'english', 'Asia/Dhaka', 'LTR', '2017©Copyright');


#
# TABLE STRUCTURE FOR: synchronizer_setting
#

DROP TABLE IF EXISTS `synchronizer_setting`;

CREATE TABLE `synchronizer_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `port` varchar(10) NOT NULL,
  `debug` varchar(10) NOT NULL,
  `project_root` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `synchronizer_setting` (`id`, `hostname`, `username`, `password`, `port`, `debug`, `project_root`) VALUES ('8', '70.35.198.244', 'spreadcargo', 'SpreadShorob1@', '21', 'true', './public_html/');


#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `about` text,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_reset_token` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `ip_address` varchar(14) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('1', 'AB', 'Doe', 'TEST', 'john@doe.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/images41.jpg', '2018-10-10 08:01:48', '2018-10-10 08:02:18', '::1', '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('2', 'Jhon ', 'Doe', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'admin@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/profile_img1.png', '2018-10-24 05:33:26', '2018-10-21 13:50:11', '::1', '1', '1');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('3', 'Tahia ', 'Duke', 'Test', 'tahia@example.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/download13.jpg', '2017-04-10 14:00:29', '2017-04-09 14:01:46', '::1', '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('7', 'abs', 'link', 'm ,mn,.m', 'abs@yahoo.com', '202cb962ac59075b964b07152d234b70', '', './assets/img/user/images_(3)2.jpg', NULL, NULL, NULL, '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('9', 'HM', 'Isahaq', 'heessee', 'hmisahaq@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './assets/img/user/61.png', '2017-08-28 07:21:50', '2017-08-28 07:35:12', '::1', '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('10', 'gg', 'tt', NULL, 'jahed@example.com', 'e10adc3949ba59abbe56e057f20f883e', '', './application/modules/employee/assets/images/2017-08-26/32.jpg', '2017-08-26 11:49:15', '2017-08-26 12:08:32', '::1', '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('11', '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('12', '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('13', '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('14', '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL, NULL, NULL, '1', '0');
INSERT INTO `user` (`id`, `firstname`, `lastname`, `about`, `email`, `password`, `password_reset_token`, `image`, `last_login`, `last_logout`, `ip_address`, `status`, `is_admin`) VALUES ('16', 'jahangir', 'Ahmad', NULL, 'jahangir@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', './application/modules/employee/assets/images/2018-09-20/pra.jpg', '2018-10-16 13:07:45', '2018-10-16 13:09:12', '::1', '1', '0');


#
# TABLE STRUCTURE FOR: weekly_holiday
#

DROP TABLE IF EXISTS `weekly_holiday`;

CREATE TABLE `weekly_holiday` (
  `wk_id` int(11) NOT NULL AUTO_INCREMENT,
  `dayname` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`wk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO `weekly_holiday` (`wk_id`, `dayname`) VALUES ('9', 'Friday');
INSERT INTO `weekly_holiday` (`wk_id`, `dayname`) VALUES ('10', 'Satarday');
INSERT INTO `weekly_holiday` (`wk_id`, `dayname`) VALUES ('20', 'Friday');
INSERT INTO `weekly_holiday` (`wk_id`, `dayname`) VALUES ('21', 'Friday,Satarday,Sunday');
INSERT INTO `weekly_holiday` (`wk_id`, `dayname`) VALUES ('22', 'Friday,Satarday,Sunday');


