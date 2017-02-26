DROP TABLE IF EXISTS add_employee;

CREATE TABLE `add_employee` (
  `table_id` varchar(50) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_id` varchar(256) NOT NULL,
  `emp_email` varchar(256) NOT NULL,
  `emp_joiningdate` date NOT NULL,
  `emp_designation` varchar(256) NOT NULL,
  `emp_department` varchar(256) NOT NULL,
  `emp_message` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO add_employee VALUES("1yG27DDd4","Lutfar Rahman","Lutfarit","kljkl@yahoo.com","2013-12-14","programmer","4","gdfgdgf","0");
INSERT INTO add_employee VALUES("77eRp6LHaZ","Raju","654321","kljkl@yahoo.com","2013-12-15","Programmer","5"," mnbmnbmnbmb","1");
INSERT INTO add_employee VALUES("Bes5IMG9yN","Raju","123456","raju4059@yahoo.com","2013-12-31","Programmer","2","Congratulation","1");
INSERT INTO add_employee VALUES("NjBfMPPIkK","Raju","gatewayit05","ghjhg@yahoo.com","2013-12-14","programmer","4","sadd","2");


DROP TABLE IF EXISTS app_experience;

CREATE TABLE `app_experience` (
  `ae_id` varchar(50) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `app_company` varchar(256) NOT NULL,
  `app_exp_type` int(10) NOT NULL,
  `app_exp_area` int(10) NOT NULL,
  `app_exp_post` varchar(256) NOT NULL,
  `app_department` varchar(256) NOT NULL,
  `app_unit` varchar(256) NOT NULL,
  `app_job_location` varchar(256) NOT NULL,
  `app_super_name` varchar(256) NOT NULL,
  `app_super_phone` varchar(50) NOT NULL,
  `app_super_email` varchar(256) NOT NULL,
  `app_reservation` varchar(100) NOT NULL,
  `app_serve_from` varchar(50) NOT NULL,
  `app__serve_to` varchar(50) NOT NULL,
  `app_duty` text NOT NULL,
  `app_achieve` text NOT NULL,
  `app_orga_address` text NOT NULL,
  PRIMARY KEY (`ae_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO app_experience VALUES("8yH9LrrJpm","8yH9LrrJpm","10E","3","2","16E","11E","17E","13E","14E","20E","15E","N0","2012-09-01","2013-09-01","12E","19E","18E");
INSERT INTO app_experience VALUES("EP1Ics67Hw","EP1Ics67Hw","Organization Name","2","3","Position Held","Department","Unit","Job Location","Name of Supervisor","Supervisor′s Contact Number","Supervisor′s Email","N0","2011-09-01","1","Major responsibilities","Key Achievement","Organization Address");
INSERT INTO app_experience VALUES("fnuUBK2YRP","fnuUBK2YRP","","0","0","","","","","","","","","","","","","");


DROP TABLE IF EXISTS app_extra_status;

CREATE TABLE `app_extra_status` (
  `aes_id` varchar(50) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `extracurriculamactivities` text NOT NULL,
  `otherskills` text NOT NULL,
  PRIMARY KEY (`aes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO app_extra_status VALUES("8yH9LrrJpm","8yH9LrrJpm","8","9");
INSERT INTO app_extra_status VALUES("EP1Ics67Hw","EP1Ics67Hw","Nothing","Nothing");
INSERT INTO app_extra_status VALUES("fnuUBK2YRP","fnuUBK2YRP","","");


DROP TABLE IF EXISTS app_personal_info;

CREATE TABLE `app_personal_info` (
  `api_id` varchar(50) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `app_name` varchar(256) NOT NULL,
  `app_father_name` varchar(256) NOT NULL,
  `app_mother_name` varchar(256) NOT NULL,
  `app_present_address` text NOT NULL,
  `app_permanent_address` text NOT NULL,
  `app_cell_no` varchar(100) NOT NULL,
  `app_email` varchar(256) NOT NULL,
  `app_birth_date` varchar(100) NOT NULL,
  `app_nationality` varchar(256) NOT NULL,
  `app_national_id_no` varchar(50) NOT NULL,
  `app_religion` int(10) NOT NULL,
  `app_marital_status` int(10) NOT NULL,
  `app_gender` int(10) NOT NULL,
  `blood_group` int(10) NOT NULL,
  `submit_moment` varchar(30) NOT NULL,
  PRIMARY KEY (`api_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO app_personal_info VALUES("8yH9LrrJpm","8yH9LrrJpm","1","2","3","4","6","01675299796","raju4059@yahoo.com","1985-12-31","Bangladeshi","7","1","1","1","3","");
INSERT INTO app_personal_info VALUES("EP1Ics67Hw","EP1Ics67Hw","Raju","Aziz","Ranju Ara","Dhaka","Natore","01675299796","raju.actualit@gmail.com","1985-12-31","Bangladeshi","123456789","18","6","3","2","");
INSERT INTO app_personal_info VALUES("fnuUBK2YRP","fnuUBK2YRP","Raju","Aziz","Ranju Ara","Dhaka","Natore","016752997968","kljkl@yahoo.com","1985-12-32","BangladeshiE","123456789","5","2","1","5","");


DROP TABLE IF EXISTS app_photo;

CREATE TABLE `app_photo` (
  `ap_id` varchar(50) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO app_photo VALUES("8yH9LrrJpm","8yH9LrrJpm","8yH9LrrJpm.jpg");
INSERT INTO app_photo VALUES("EP1Ics67Hw","EP1Ics67Hw","EP1Ics67Hw.jpg");
INSERT INTO app_photo VALUES("fnuUBK2YRP","fnuUBK2YRP","fnuUBK2YRP.jpg");


DROP TABLE IF EXISTS app_references;

CREATE TABLE `app_references` (
  `ar_id` varchar(50) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `app_ref_name` varchar(256) NOT NULL,
  `app_ref_desig` varchar(256) NOT NULL,
  `app_ref_orga` varchar(256) NOT NULL,
  `app_ref_address` varchar(256) NOT NULL,
  `app_ref_phone_no` varchar(50) NOT NULL,
  `app_ref_cell_no` varchar(50) NOT NULL,
  `app_ref_email` varchar(256) NOT NULL,
  `app_ref_relation` varchar(256) NOT NULL,
  `position` int(10) NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO app_references VALUES("8yH9LrrJpm1","8yH9LrrJpm","21","22","23","24","25","123456789126","raju4059@yahoo.com","27","1");
INSERT INTO app_references VALUES("8yH9LrrJpm2","8yH9LrrJpm","28","29","30","31","32","123456789126","raju4059@yahoo.com","33","2");
INSERT INTO app_references VALUES("EP1Ics67Hw1","EP1Ics67Hw","Name","Designation","Organization","Mailing Address","123456789","123456789126","Mailing@Address.com","Brother","1");
INSERT INTO app_references VALUES("EP1Ics67Hw2","EP1Ics67Hw","Name","Designation","Organization","Mailing Address","123456789","123456789126","Mailing@Address.com","Teacher","2");
INSERT INTO app_references VALUES("fnuUBK2YRP1","fnuUBK2YRP","Name","Designation","Organization","Mailing Address","123456789","123456789","Mailing@Address.com","Brother","1");
INSERT INTO app_references VALUES("fnuUBK2YRP2","fnuUBK2YRP","Name","Designation","Organization1","Mailing Address","123456789","1234567891261","Mailing@Address.com","Teacher","2");


DROP TABLE IF EXISTS app_scholastic_status;

CREATE TABLE `app_scholastic_status` (
  `ass_id` varchar(50) NOT NULL,
  `app_id` varchar(50) NOT NULL,
  `app_name_of_exam` int(10) NOT NULL,
  `app_group_sub` int(10) NOT NULL,
  `app_result` int(10) NOT NULL,
  `app_marks_gpa` float NOT NULL,
  `app_gpa_outof` float NOT NULL,
  `app_board_uni` int(10) NOT NULL,
  `app_pass_year` int(10) NOT NULL,
  `app_position` int(10) NOT NULL,
  PRIMARY KEY (`ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO app_scholastic_status VALUES("8yH9LrrJpm1","8yH9LrrJpm","1","1","1","659","1000","0","0","1");
INSERT INTO app_scholastic_status VALUES("8yH9LrrJpm2","8yH9LrrJpm","1","1","2","596","1000","0","0","2");
INSERT INTO app_scholastic_status VALUES("8yH9LrrJpm3","8yH9LrrJpm","4","121","2","1780","3200","0","0","3");
INSERT INTO app_scholastic_status VALUES("8yH9LrrJpm4","8yH9LrrJpm","6","121","1","488","800","0","0","4");
INSERT INTO app_scholastic_status VALUES("EP1Ics67Hw1","EP1Ics67Hw","1","1","4","5","5","1","2000","1");
INSERT INTO app_scholastic_status VALUES("EP1Ics67Hw2","EP1Ics67Hw","1","1","5","4.8","5","2","2002","2");
INSERT INTO app_scholastic_status VALUES("EP1Ics67Hw3","EP1Ics67Hw","6","1","6","3.6","4","4","2006","3");
INSERT INTO app_scholastic_status VALUES("EP1Ics67Hw4","EP1Ics67Hw","1","74","7","3.2","4","3","2008","4");
INSERT INTO app_scholastic_status VALUES("fnuUBK2YRP1","fnuUBK2YRP","0","0","0","0","0","0","0","1");
INSERT INTO app_scholastic_status VALUES("fnuUBK2YRP2","fnuUBK2YRP","0","0","0","0","0","0","0","2");
INSERT INTO app_scholastic_status VALUES("fnuUBK2YRP3","fnuUBK2YRP","0","0","0","0","0","0","0","3");
INSERT INTO app_scholastic_status VALUES("fnuUBK2YRP4","fnuUBK2YRP","0","0","0","0","0","0","0","4");


DROP TABLE IF EXISTS emp_attendance;

CREATE TABLE `emp_attendance` (
  `atten_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `emp_atten_date` date NOT NULL,
  `emp_atten_time` varchar(50) NOT NULL,
  `emp_atten_moment` varchar(20) NOT NULL,
  `message` varchar(256) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`atten_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_attendance VALUES("6MCitcNWBI","gatewayit05","2013-12-15","14:08:45","20140115140845","","2");
INSERT INTO emp_attendance VALUES("6NnWzbaxLs","123456","2014-04-16","11:55:43","20140416115543","","2");
INSERT INTO emp_attendance VALUES("82oZtWJf6x","123456","2014-04-16","11:28:14","20140416112814","Nothing","1");
INSERT INTO emp_attendance VALUES("9z6pQvwbvv","123456","2013-12-15","10:15:01","20140115140822","Noting","1");
INSERT INTO emp_attendance VALUES("jkLQqJX3oS","654321","2014-04-16","11:58:49","20140416115849","dgfdgfgfd","1");
INSERT INTO emp_attendance VALUES("Sb5tUVVsMY","123456","2014-02-09","13:33:06","20140209133306","sorry","1");
INSERT INTO emp_attendance VALUES("V5UGmaQHcV","123456","2014-04-17","13:06:16","20140417130616","Enter 10:06 AM","1");
INSERT INTO emp_attendance VALUES("w9CmdFfQX9","123456","2013-12-13","14:09:36","20140115140936","Code Test","1");


DROP TABLE IF EXISTS emp_experience;

CREATE TABLE `emp_experience` (
  `ee_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `emp_company` varchar(256) NOT NULL,
  `emp_exp_type` int(10) NOT NULL,
  `emp_exp_area` int(10) NOT NULL,
  `emp_exp_post` varchar(256) NOT NULL,
  `emp_department` varchar(256) NOT NULL,
  `emp_unit` varchar(256) NOT NULL,
  `emp_job_location` varchar(256) NOT NULL,
  `emp_super_name` varchar(256) NOT NULL,
  `emp_super_phone` varchar(50) NOT NULL,
  `emp_super_email` varchar(256) NOT NULL,
  `emp_reservation` varchar(100) NOT NULL,
  `emp_serve_from` date NOT NULL,
  `emp__serve_to` date NOT NULL,
  `emp_duty` text NOT NULL,
  `emp_achieve` text NOT NULL,
  `emp_orga_address` text NOT NULL,
  PRIMARY KEY (`ee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_experience VALUES("Jt8obDNPK0","123456","Organization Name","2","42","Position Held","Department","Unit","Job Location","Name of Supervisor","Supervisor′s Contact Number","Supervisor′s Email","N0","2011-09-11","2012-09-10","Major responsibilities","Key Achievement","Organization Address");


DROP TABLE IF EXISTS emp_extra_status;

CREATE TABLE `emp_extra_status` (
  `ees_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `extracurriculamactivities` text NOT NULL,
  `otherskills` text NOT NULL,
  PRIMARY KEY (`ees_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_extra_status VALUES("Jt8obDNPK0","123456","Enough","Nothing");


DROP TABLE IF EXISTS emp_leave_app;

CREATE TABLE `emp_leave_app` (
  `LeaveAppId` varchar(50) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `TypeOfLeave` int(11) NOT NULL,
  `FromStart` date NOT NULL,
  `ToEnd` date NOT NULL,
  `TotalWorkingDays` int(11) NOT NULL,
  `RejoiningDate` date NOT NULL,
  `PurposeOfLeave` text NOT NULL,
  `AdressDuringLeave` text NOT NULL,
  `ResName` varchar(50) NOT NULL,
  `SubmitDate` date NOT NULL,
  `SubmitTime` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`LeaveAppId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_leave_app VALUES("hzzmB8oCuI","123456","1","2013-12-23","2014-01-02","6","2014-01-30","NothingE","OKE","Lutfarit","2014-01-19","20140119174556","1");
INSERT INTO emp_leave_app VALUES("RRIoH0G7LB","123456","1","2013-12-31","2014-01-28","3","2014-01-29","hgfhgfh","hfghfgh","123456","2014-01-25","20140125172635","1");
INSERT INTO emp_leave_app VALUES("sAeBcryrdH","123456","4","2014-01-25","2014-01-27","2","2014-01-28","How are you. I am raju chowdhury. Employee of gateway IT. This is first application.","2nd AddressE","123456","2014-01-19","20140119174557","0");


DROP TABLE IF EXISTS emp_leave_recom;

CREATE TABLE `emp_leave_recom` (
  `EmdLeaveId` varchar(50) NOT NULL,
  `LeaveAppId` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`EmdLeaveId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_leave_recom VALUES("cv1Ea7PTLO","RRIoH0G7LB","Leave cancel");
INSERT INTO emp_leave_recom VALUES("f7rLqfJgzb","hzzmB8oCuI","Leave cancel");
INSERT INTO emp_leave_recom VALUES("H16WVeZT9V","sAeBcryrdH","Sorry");


DROP TABLE IF EXISTS emp_login;

CREATE TABLE `emp_login` (
  `table_id` varchar(50) NOT NULL,
  `emp_id` varchar(256) NOT NULL,
  `emp_password` varchar(256) NOT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_login VALUES("1yG27DDd4","Lutfarit","1yG27DDd4");
INSERT INTO emp_login VALUES("77eRp6LHaZ","654321","77eRp6LHaZ");
INSERT INTO emp_login VALUES("kljk54l56jl","123456","12345678");
INSERT INTO emp_login VALUES("NjBfMPPIkK","gatewayit05","NjBfMPPIkK");


DROP TABLE IF EXISTS emp_personal_info;

CREATE TABLE `emp_personal_info` (
  `epi_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `emp_name` varchar(256) NOT NULL,
  `emp_father_name` varchar(256) NOT NULL,
  `emp_mother_name` varchar(256) NOT NULL,
  `emp_present_address` text NOT NULL,
  `emp_permanent_address` text NOT NULL,
  `emp_cell_no` varchar(100) NOT NULL,
  `emp_email` varchar(256) NOT NULL,
  `emp_birth_date` varchar(100) NOT NULL,
  `emp_nationality` varchar(256) NOT NULL,
  `emp_national_id_no` varchar(50) NOT NULL,
  `emp_religion` int(10) NOT NULL,
  `emp_marital_status` int(10) NOT NULL,
  `emp_gender` int(10) NOT NULL,
  `blood_group` int(10) NOT NULL,
  PRIMARY KEY (`epi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_personal_info VALUES("Jt8obDNPK0","123456","Raju","A Aziz","Ranju Ara","Dhaka","Natore","01675299796","raju4059@yahoo.com","1985-12-31","Bangladeshi","6926303355854 ","1","1","1","3");


DROP TABLE IF EXISTS emp_photo;

CREATE TABLE `emp_photo` (
  `ep_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  PRIMARY KEY (`ep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_photo VALUES("Jt8obDNPK0","123456","123456.jpg");


DROP TABLE IF EXISTS emp_references;

CREATE TABLE `emp_references` (
  `er_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `emp_ref_name` varchar(256) NOT NULL,
  `emp_ref_desig` varchar(256) NOT NULL,
  `emp_ref_orga` varchar(256) NOT NULL,
  `emp_ref_address` varchar(256) NOT NULL,
  `emp_ref_phone_no` varchar(50) NOT NULL,
  `emp_ref_cell_no` varchar(50) NOT NULL,
  `emp_ref_email` varchar(256) NOT NULL,
  `emp_ref_relation` varchar(256) NOT NULL,
  `position` int(10) NOT NULL,
  PRIMARY KEY (`er_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_references VALUES("Jt8obDNPK01","123456","Name1","Designation1","Organization1","Mailing Address1","1234567891","011234567891","Mailing@Address1.com","Brother1","1");
INSERT INTO emp_references VALUES("Jt8obDNPK02","123456","Name2","Designation2","Organization2","Mailing Address2","1234567892","12345678912612","Mailing@Address2.com","Teacher","2");


DROP TABLE IF EXISTS emp_salary;

CREATE TABLE `emp_salary` (
  `EmpSalaryId` varchar(50) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `BasicTotal` int(10) NOT NULL,
  `HouseAllowance` int(10) NOT NULL,
  `MedicalAllowance` int(10) NOT NULL,
  `Convenience` int(10) NOT NULL,
  `designation` varchar(256) NOT NULL,
  `department` int(11) NOT NULL,
  `submit_date` date NOT NULL,
  PRIMARY KEY (`EmpSalaryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_salary VALUES("4A2mYPOnCc","123456","8000","60","20","20","Sr. Programmer","2","2014-03-15");
INSERT INTO emp_salary VALUES("k9cCXuNPw4","123456","7000","60","20","20","Programmer","2","2013-12-31");
INSERT INTO emp_salary VALUES("lUmKt6ziXq","123456","9000","60","20","20","Sr. Programmer","2","2014-03-16");


DROP TABLE IF EXISTS emp_salary_slip01;

CREATE TABLE `emp_salary_slip01` (
  `EmpSalSlip01Id` varchar(50) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `EmpDesignation` varchar(256) NOT NULL,
  `EmpDepartment` varchar(256) NOT NULL,
  `EmpSalMonth` varchar(50) NOT NULL,
  `CreateDate` date NOT NULL,
  PRIMARY KEY (`EmpSalSlip01Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_salary_slip01 VALUES("htEG4uTavc","123456","Sr. Programmer","Gateway Migration Ltd.","2014-03","2014-04-12");
INSERT INTO emp_salary_slip01 VALUES("oKyduOjm0i","123456","Sr. Programmer","Gateway Migration Ltd.","2014-02","2014-03-01");
INSERT INTO emp_salary_slip01 VALUES("X53YWxah83","123456","Programmer","Gateway Migration Ltd.","2014-02","2014-02-01");


DROP TABLE IF EXISTS emp_salary_slip02;

CREATE TABLE `emp_salary_slip02` (
  `EmpSalSlip02Id` varchar(50) NOT NULL,
  `EmpSalIdenti` varchar(50) NOT NULL,
  `EmpTotalDay` int(11) NOT NULL,
  `EmpTotalWorkDay` int(11) NOT NULL,
  `EmpHoliday` int(11) NOT NULL,
  `EmpLeave` int(11) NOT NULL,
  `EmpUnpaidLeave` int(11) NOT NULL,
  `EmpPresent` int(11) NOT NULL,
  `EmpAbsence` int(11) NOT NULL,
  `EmpDelay` int(11) NOT NULL,
  PRIMARY KEY (`EmpSalSlip02Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_salary_slip02 VALUES("CBE540QUKu","htEG4uTavc","31","30","1","0","0","0","30","0");
INSERT INTO emp_salary_slip02 VALUES("DA7co4jJ8D","oKyduOjm0i","31","30","1","0","0","0","30","0");
INSERT INTO emp_salary_slip02 VALUES("tI15uBQ5oE","X53YWxah83","31","31","0","0","0","0","31","0");


DROP TABLE IF EXISTS emp_salary_slip03;

CREATE TABLE `emp_salary_slip03` (
  `EmpSalSlip03Id` varchar(50) NOT NULL,
  `EmpSalIdenti` varchar(50) NOT NULL,
  `EmpBasicSalary` int(11) NOT NULL,
  `EmpHouseAllowance` double NOT NULL,
  `EmpMedicalAllowance` double NOT NULL,
  `EmpConvenience` double NOT NULL,
  `EmpRemuneration` double NOT NULL,
  `EmpFestivalBonus` double NOT NULL,
  `EmpEarnOthers` double NOT NULL,
  PRIMARY KEY (`EmpSalSlip03Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_salary_slip03 VALUES("CBE540QUKu","htEG4uTavc","9000","5400","1800","1800","0","0","0");
INSERT INTO emp_salary_slip03 VALUES("DA7co4jJ8D","oKyduOjm0i","9000","5400","1800","1800","0","0","0");
INSERT INTO emp_salary_slip03 VALUES("tI15uBQ5oE","X53YWxah83","7000","2100","700","700","500","600","400");


DROP TABLE IF EXISTS emp_salary_slip04;

CREATE TABLE `emp_salary_slip04` (
  `EmpSalSlip04Id` varchar(50) NOT NULL,
  `EmpSalIdenti` varchar(50) NOT NULL,
  `EmpAbsence` float NOT NULL,
  `EmpDelay` float NOT NULL,
  `EmpProvFund` float NOT NULL,
  `EmpProfeTax` float NOT NULL,
  `EmpDeducOther` float NOT NULL,
  PRIMARY KEY (`EmpSalSlip04Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_salary_slip04 VALUES("CBE540QUKu","htEG4uTavc","17419.3","0","0","0","0");
INSERT INTO emp_salary_slip04 VALUES("DA7co4jJ8D","oKyduOjm0i","17419.3","0","0","0","0");
INSERT INTO emp_salary_slip04 VALUES("tI15uBQ5oE","X53YWxah83","10500","0","100","50","25");


DROP TABLE IF EXISTS emp_scholastic_status;

CREATE TABLE `emp_scholastic_status` (
  `ess_id` varchar(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `emp_name_of_exam` int(10) NOT NULL,
  `emp_group_sub` int(10) NOT NULL,
  `emp_result` int(10) NOT NULL,
  `emp_marks_gpa` float NOT NULL,
  `emp_gpa_outof` float NOT NULL,
  `emp_board_uni` int(10) NOT NULL,
  `emp_pass_year` int(10) NOT NULL,
  `emp_position` int(10) NOT NULL,
  PRIMARY KEY (`ess_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_scholastic_status VALUES("Jt8obDNPK01","123456","1","1","1","1000","659","7","2000","1");
INSERT INTO emp_scholastic_status VALUES("Jt8obDNPK02","123456","1","1","2","1000","596","7","2002","2");
INSERT INTO emp_scholastic_status VALUES("Jt8obDNPK03","123456","4","121","2","3200","1720","70","2006","3");
INSERT INTO emp_scholastic_status VALUES("Jt8obDNPK04","123456","6","121","1","800","488","70","2008","4");


DROP TABLE IF EXISTS emp_termination;

CREATE TABLE `emp_termination` (
  `EmpTerId` varchar(50) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `TerReason` text NOT NULL,
  `TerDate` date NOT NULL,
  PRIMARY KEY (`EmpTerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO emp_termination VALUES("aEnopdJOSX","123456","Termination Reason","2014-02-28");


DROP TABLE IF EXISTS holiday;

CREATE TABLE `holiday` (
  `HoliDayId` varchar(50) NOT NULL,
  `HoliDayDescription` varchar(256) NOT NULL,
  `HoliDayDate` date NOT NULL,
  PRIMARY KEY (`HoliDayId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO holiday VALUES("1upL5fxaOA","Independence day","2014-03-26");
INSERT INTO holiday VALUES("J5O2oAaSar","Crismasday","2013-12-25");
INSERT INTO holiday VALUES("mqq8Rvv1dh","Birthday of Raju","2014-02-14");
INSERT INTO holiday VALUES("PtEHeDj6cW","Bijoy Dibos","2013-12-16");


DROP TABLE IF EXISTS login_control;

CREATE TABLE `login_control` (
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `securitycode` varchar(100) DEFAULT NULL,
  `link_access` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO login_control VALUES("admin","21232f297a57a5a743894a0e4a801fc3","123456","admin");


DROP TABLE IF EXISTS notice;

CREATE TABLE `notice` (
  `NoticeId` varchar(50) NOT NULL,
  `NoticeNo` varchar(100) NOT NULL,
  `NoticeFor` varchar(50) NOT NULL,
  `Headline` text NOT NULL,
  `Details` text NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Designation` varchar(256) NOT NULL,
  `NoticeDate` date NOT NULL,
  `NoticeTime` varchar(50) NOT NULL,
  PRIMARY KEY (`NoticeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO notice VALUES("cSsONVZ8wG","1","1","2","3","4","5","2014-01-25","20140125172823");
INSERT INTO notice VALUES("eDKOq21xNM","1e","2","2e","3e","4e","5e","2014-01-25","20140125172925");
INSERT INTO notice VALUES("vZvdYJkdsl","2","1","Apparel exporters are now breathing easy as foreign buyers","Senior journalist Amanullah Kabir and Managing Director of Ekattor Television Mozammel Babu have also joined the event Senior journalist Amanullah Kabir and Managing Director of Ekattor Television Mozammel Babu have also joined the event Senior journalist Amanullah Kabir and Managing Director of Ekattor Television Mozammel Babu have also joined the event Senior journalist Amanullah Kabir and Managing Director of Ekattor Television Mozammel Babu have also joined the event Senior journalist Amanullah Kabir and Managing Director of Ekattor Television Mozammel Babu have also joined the event Senior journalist Amanullah Kabir and Managing Director of Ekattor Television Mozammel Babu have also joined the event Senior journalist Amanullah Kabir and Managing Director of Ekattor Television Mozammel Babu have also joined the event","Lutfar Rahman","Sr.Web Developer","2014-01-25","20140125173041");


DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
  `Code` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO products VALUES("c1","Product Name 01","100");
INSERT INTO products VALUES("c2","Product Name 02","102");
INSERT INTO products VALUES("c3","Product Name 03","103");
INSERT INTO products VALUES("c4","Product Name 04","104");
INSERT INTO products VALUES("c5","Product Name 05","105");
INSERT INTO products VALUES("c6","Product Name 06","106");
INSERT INTO products VALUES("c7","Product Name 07","107");
INSERT INTO products VALUES("c8","Product Name 08","108");
INSERT INTO products VALUES("c9","Product Name 09","109");


