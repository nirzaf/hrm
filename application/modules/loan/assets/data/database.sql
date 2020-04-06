CREATE TABLE `grand_loan` (
  `loan_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `loan_installment`(
`loan_inst_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`employee_id` varchar(21) CHARACTER SET latin1 NOT NULL,
`loan_id` varchar(21) CHARACTER SET latin1 NOT NULL,
`installment_amount` varchar(20) CHARACTER SET latin1 NOT NULL,
`payment` varchar(20) CHARACTER SET latin1 NOT NULL,
`date` varchar(20) CHARACTER SET latin1 NOT NULL,
`received_by` varchar(20) CHARACTER SET latin1 NOT NULL,
`installment_no` varchar(20) CHARACTER SET latin1 NOT NULL,
`notes` varchar(80) CHARACTER SET latin1 NOT NULL,
 PRIMARY KEY (`loan_inst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
