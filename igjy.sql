-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 11:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igjy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_print`
--

CREATE TABLE `bill_print` (
  `DIVISION_LOC_CD` longtext DEFAULT NULL,
  `DIVISION_LOC_DESC` longtext DEFAULT NULL,
  `LOC_CD` longtext DEFAULT NULL,
  `CONS_NO` longtext DEFAULT NULL,
  `BILL_MON` longtext DEFAULT NULL,
  `BATCH_NO` longtext DEFAULT NULL,
  `GR_NO` longtext DEFAULT NULL,
  `RD_NO` longtext DEFAULT NULL,
  `IVRSID` longtext DEFAULT NULL,
  `CONNID` longtext DEFAULT NULL,
  `CONS_LOC_DESC` longtext DEFAULT NULL,
  `BILLMONHINDI` longtext DEFAULT NULL,
  `BILL_ISSUE_DATE` longtext DEFAULT NULL,
  `CONS_NAME_H` longtext DEFAULT NULL,
  `FATH_HUS_NAME_H` longtext DEFAULT NULL,
  `CONS_ADDH1` longtext DEFAULT NULL,
  `CONS_ADDH2` longtext DEFAULT NULL,
  `PIN_CODE` longtext DEFAULT NULL,
  `TELEPHONE` longtext DEFAULT NULL,
  `MOB_NO` longtext DEFAULT NULL,
  `EXIST_POLE_NO` longtext DEFAULT NULL,
  `MTR_NO` longtext DEFAULT NULL,
  `PHASE1` longtext DEFAULT NULL,
  `RDG_DT` longtext DEFAULT NULL,
  `LOAD1` longtext DEFAULT NULL,
  `LOADUNIT` longtext DEFAULT NULL,
  `RDG_TYP` longtext DEFAULT NULL,
  `CURR_RDG` longtext DEFAULT NULL,
  `PREV_RDG` longtext DEFAULT NULL,
  `MF` longtext DEFAULT NULL,
  `CONSMP` longtext DEFAULT NULL,
  `ASS_CONSMP` longtext DEFAULT NULL,
  `TOTCONSMP` longtext DEFAULT NULL,
  `DCLOC` longtext DEFAULT NULL,
  `DCADD1` longtext DEFAULT NULL,
  `DCADD2` longtext DEFAULT NULL,
  `DCADD3` longtext DEFAULT NULL,
  `DCPINCD` longtext DEFAULT NULL,
  `DCPHONE` longtext DEFAULT NULL,
  `TOT_SD_HELD` longtext DEFAULT NULL,
  `BILL_TYPE` longtext DEFAULT NULL,
  `SD_DUE` longtext DEFAULT NULL,
  `DAILY_AVG_BILL` longtext DEFAULT NULL,
  `DAILY_AVG_CONSMP` longtext DEFAULT NULL,
  `OLDCONSNO` longtext DEFAULT NULL,
  `TRF_CATG` longtext DEFAULT NULL,
  `CURR_DEMAND` longtext DEFAULT NULL,
  `BILL_NET` longtext DEFAULT NULL,
  `FIRST_CHQ_DT_H` longtext DEFAULT NULL,
  `FIRST_CASH_DT_H` longtext DEFAULT NULL,
  `ENERGY_CHRG` longtext DEFAULT NULL,
  `FIXED_CHARGE` longtext DEFAULT NULL,
  `DUTY` longtext DEFAULT NULL,
  `CESS` longtext DEFAULT NULL,
  `MTR_RENT` longtext DEFAULT NULL,
  `ADJ_AMT` longtext DEFAULT NULL,
  `SD_BILLED` longtext DEFAULT NULL,
  `OTHER_CHRG` longtext DEFAULT NULL,
  `LAST_MONTH_AV` longtext DEFAULT NULL,
  `INST_AMT` longtext DEFAULT NULL,
  `EMP_REBATE` longtext DEFAULT NULL,
  `LOCK_CR_AMT` longtext DEFAULT NULL,
  `SUBSIDY` longtext DEFAULT NULL,
  `CURR_BILL` longtext DEFAULT NULL,
  `PREV_BAL` longtext DEFAULT NULL,
  `MTR_READ_TAKEN_BY` longtext DEFAULT NULL,
  `TRFLINE` longtext DEFAULT NULL,
  `MSGLINE_H` longtext DEFAULT NULL,
  `CONS_STA_CD` longtext DEFAULT NULL,
  `BILL_CORR_FLG` longtext DEFAULT NULL,
  `BILL_COPY` longtext DEFAULT NULL,
  `RDG_TYP_CD` longtext DEFAULT NULL,
  `BILL_TYP_CD` longtext DEFAULT NULL,
  `CHQ_DSHNRD_FLG` longtext DEFAULT NULL,
  `REV_CATG_CD` longtext DEFAULT NULL,
  `LOAD_UNIT_CD` longtext DEFAULT NULL,
  `SPOT_BILL_FLG` longtext DEFAULT NULL,
  `EMP_RBTE_FLG` longtext DEFAULT NULL,
  `INST_BAL_ARRS` longtext DEFAULT NULL,
  `INSTL_AMT_BLD` longtext DEFAULT NULL,
  `CORR_CITY` longtext DEFAULT NULL,
  `CONN_TYP_CD` longtext DEFAULT NULL,
  `MTR_READER` longtext DEFAULT NULL,
  `BILL_MON1` longtext DEFAULT NULL,
  `RDG_DT1` longtext DEFAULT NULL,
  `CURR_RDG1` longtext DEFAULT NULL,
  `CONSMP1` longtext DEFAULT NULL,
  `BILL_MON2` longtext DEFAULT NULL,
  `RDG_DT2` longtext DEFAULT NULL,
  `CURR_RDG2` longtext DEFAULT NULL,
  `CONSMP2` longtext DEFAULT NULL,
  `BILL_MON3` longtext DEFAULT NULL,
  `RDG_DT3` longtext DEFAULT NULL,
  `CURR_RDG3` longtext DEFAULT NULL,
  `CONSMP3` longtext DEFAULT NULL,
  `BILL_MON4` longtext DEFAULT NULL,
  `RDG_DT4` longtext DEFAULT NULL,
  `CURR_RDG4` longtext DEFAULT NULL,
  `CONSMP4` longtext DEFAULT NULL,
  `BILL_MON5` longtext DEFAULT NULL,
  `RDG_DT5` longtext DEFAULT NULL,
  `CURR_RDG5` longtext DEFAULT NULL,
  `CONSMP5` longtext DEFAULT NULL,
  `BILL_MON6` longtext DEFAULT NULL,
  `RDG_DT6` longtext DEFAULT NULL,
  `CURR_RDG6` longtext DEFAULT NULL,
  `CONSMP6` longtext DEFAULT NULL,
  `PYMT_DT1` longtext DEFAULT NULL,
  `CAC_NO1` longtext DEFAULT NULL,
  `AMT_PAID1` longtext DEFAULT NULL,
  `PYMT_MODE1` longtext DEFAULT NULL,
  `WINDOW_NO1` longtext DEFAULT NULL,
  `PUNCH_DT1` longtext DEFAULT NULL,
  `PYMT_DT2` longtext DEFAULT NULL,
  `CAC_NO2` longtext DEFAULT NULL,
  `AMT_PAID2` longtext DEFAULT NULL,
  `PYMT_MODE2` longtext DEFAULT NULL,
  `WINDOW_NO2` longtext DEFAULT NULL,
  `PUNCH_DT2` longtext DEFAULT NULL,
  `PYMT_DT3` longtext DEFAULT NULL,
  `CAC_NO3` longtext DEFAULT NULL,
  `AMT_PAID3` longtext DEFAULT NULL,
  `PYMT_MODE3` longtext DEFAULT NULL,
  `WINDOW_NO3` longtext DEFAULT NULL,
  `PUNCH_DT3` longtext DEFAULT NULL,
  `NAME_JE` longtext DEFAULT NULL,
  `PH_JE1` longtext DEFAULT NULL,
  `PH_JE2` longtext DEFAULT NULL,
  `NAME_AE` longtext DEFAULT NULL,
  `PH_AE1` longtext DEFAULT NULL,
  `PH_AE2` longtext DEFAULT NULL,
  `BILL_NO` longtext DEFAULT NULL,
  `SURCHRGE_DUE` longtext DEFAULT NULL,
  `FCA` longtext DEFAULT NULL,
  `EMP_FREE_FCA` longtext DEFAULT NULL,
  `FCA_RATE` longtext DEFAULT NULL,
  `CONS_NAME_HINDI` longtext DEFAULT NULL,
  `FATH_HUS_NAME_HINDI` longtext DEFAULT NULL,
  `CONS_ADD1_HINDI` longtext DEFAULT NULL,
  `CONS_ADD2_HINDI` longtext DEFAULT NULL,
  `S_BILL_AMT` longtext DEFAULT NULL,
  `S_GOVT_SUBSIDY` longtext DEFAULT NULL,
  `S_MON_BILL` longtext DEFAULT NULL,
  `SAMADHAN_ARR` longtext DEFAULT NULL,
  `QR_CODE` longtext DEFAULT NULL,
  `ADV_PAY_INCENT` longtext DEFAULT NULL,
  `ONLINE_REBATE` longtext DEFAULT NULL,
  `PROMPT_PAY_INCENT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_print`
--

INSERT INTO `bill_print` (`DIVISION_LOC_CD`, `DIVISION_LOC_DESC`, `LOC_CD`, `CONS_NO`, `BILL_MON`, `BATCH_NO`, `GR_NO`, `RD_NO`, `IVRSID`, `CONNID`, `CONS_LOC_DESC`, `BILLMONHINDI`, `BILL_ISSUE_DATE`, `CONS_NAME_H`, `FATH_HUS_NAME_H`, `CONS_ADDH1`, `CONS_ADDH2`, `PIN_CODE`, `TELEPHONE`, `MOB_NO`, `EXIST_POLE_NO`, `MTR_NO`, `PHASE1`, `RDG_DT`, `LOAD1`, `LOADUNIT`, `RDG_TYP`, `CURR_RDG`, `PREV_RDG`, `MF`, `CONSMP`, `ASS_CONSMP`, `TOTCONSMP`, `DCLOC`, `DCADD1`, `DCADD2`, `DCADD3`, `DCPINCD`, `DCPHONE`, `TOT_SD_HELD`, `BILL_TYPE`, `SD_DUE`, `DAILY_AVG_BILL`, `DAILY_AVG_CONSMP`, `OLDCONSNO`, `TRF_CATG`, `CURR_DEMAND`, `BILL_NET`, `FIRST_CHQ_DT_H`, `FIRST_CASH_DT_H`, `ENERGY_CHRG`, `FIXED_CHARGE`, `DUTY`, `CESS`, `MTR_RENT`, `ADJ_AMT`, `SD_BILLED`, `OTHER_CHRG`, `LAST_MONTH_AV`, `INST_AMT`, `EMP_REBATE`, `LOCK_CR_AMT`, `SUBSIDY`, `CURR_BILL`, `PREV_BAL`, `MTR_READ_TAKEN_BY`, `TRFLINE`, `MSGLINE_H`, `CONS_STA_CD`, `BILL_CORR_FLG`, `BILL_COPY`, `RDG_TYP_CD`, `BILL_TYP_CD`, `CHQ_DSHNRD_FLG`, `REV_CATG_CD`, `LOAD_UNIT_CD`, `SPOT_BILL_FLG`, `EMP_RBTE_FLG`, `INST_BAL_ARRS`, `INSTL_AMT_BLD`, `CORR_CITY`, `CONN_TYP_CD`, `MTR_READER`, `BILL_MON1`, `RDG_DT1`, `CURR_RDG1`, `CONSMP1`, `BILL_MON2`, `RDG_DT2`, `CURR_RDG2`, `CONSMP2`, `BILL_MON3`, `RDG_DT3`, `CURR_RDG3`, `CONSMP3`, `BILL_MON4`, `RDG_DT4`, `CURR_RDG4`, `CONSMP4`, `BILL_MON5`, `RDG_DT5`, `CURR_RDG5`, `CONSMP5`, `BILL_MON6`, `RDG_DT6`, `CURR_RDG6`, `CONSMP6`, `PYMT_DT1`, `CAC_NO1`, `AMT_PAID1`, `PYMT_MODE1`, `WINDOW_NO1`, `PUNCH_DT1`, `PYMT_DT2`, `CAC_NO2`, `AMT_PAID2`, `PYMT_MODE2`, `WINDOW_NO2`, `PUNCH_DT2`, `PYMT_DT3`, `CAC_NO3`, `AMT_PAID3`, `PYMT_MODE3`, `WINDOW_NO3`, `PUNCH_DT3`, `NAME_JE`, `PH_JE1`, `PH_JE2`, `NAME_AE`, `PH_AE1`, `PH_AE2`, `BILL_NO`, `SURCHRGE_DUE`, `FCA`, `EMP_FREE_FCA`, `FCA_RATE`, `CONS_NAME_HINDI`, `FATH_HUS_NAME_HINDI`, `CONS_ADD1_HINDI`, `CONS_ADD2_HINDI`, `S_BILL_AMT`, `S_GOVT_SUBSIDY`, `S_MON_BILL`, `SAMADHAN_ARR`, `QR_CODE`, `ADV_PAY_INCENT`, `ONLINE_REBATE`, `PROMPT_PAY_INCENT`) VALUES
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '5001914303', 'FEB-2020', '', 'BA1', '22', '5001914303', '144420207-1 -22-5001914303 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'RAEESA BANO', '', 'H.NO.1806 (TG/34) BAHORABAG', 'HADDI GOUDAM THAKKAR GRAM WARD', '', '', '7898377342', 'TG/34', '005814938       ', 'SINGLE          ', '29/02/2020', '400', ' W', 'NORMAL', '50', '1', '1', '49', '0', '49', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '500', 'ACTUAL BILL', '0', '3.46', '1.75', '', 'LV1.2   ', '97', '97', '13/03/2020', '16/03/2020', '198.45', '60', '18', '0', '10', '0', '0', '0', '0', '-3.11', '0', '0', '-191.35', '97', '0', 'NA', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'NA', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '500198564350', '5', '4.9 ', '', '10', '', '', '', '', '288.35', '-191.35', '97', '', '000201010211021644038478003617000415522024078003617061661000307800361770822CITI0100000CITIHDF11111115311501000020017520449005303356540597.005802IN5908MPPKVCLJ6006MUMBAI610640005362270511A50019143030708780036176304AFB9', '0', '0', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '0343789143', 'FEB-2020', '', 'BA1', '22', '0343789143', '144420207-1 -22-0343789143 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'MO. IKBAL', '', '1763 SLATER HOUSE', 'MANSUR KIRANA', '', '', '', 'TG-77SP-2C', '0173502         ', 'SINGLE          ', '01/03/2020', '250', ' W', 'NORMAL', '636', '503', '1', '133', '0', '133', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '201', 'ACTUAL BILL', '0', '10.59', '4.93', '', 'LV1.2   ', '286', '472', '13/03/2020', '16/03/2020', '616.05', '100', '62', '0', '10', '0', '0', '0', '0', '-1.04', '0', '0', '-514.7', '286', '186', 'HARIOM', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'HARIOM', 'AUG-2019', '02/09/2019', '387', '41', 'SEP-2019', '04/10/2019', '387', '99', 'OCT-2019', '04/11/2019', '470', '83', 'NOV-2019', '02/12/2019', '472', '100', 'DEC-2019', '04/01/2020', '490', '100', 'JAN-2020', '03/02/2020', '503', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '034378129042', '6', '13.3 ', '', '10', '', '', '', '', '800.7', '-514.7', '286', '', '000201010211021644038478003617000415522024078003617061661000307800361770822CITI0100000CITIHDF111111153115010000200175204490053033565406472.005802IN5908MPPKVCLJ6006MUMBAI610640005362270511A034378914307087800361763045946', '0', '0', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '7153988762', 'FEB-2020', '', 'BA1', '22', '7153988762', '144420207-1 -22-7153988762 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'SHEKH BASHEER', '', 'H.NO.2792/1(TG-20/BSP-1) BAHORABAG', 'KILKARI GARDAN  KE SAMANE', '', '', '8085809553', 'TG-20/BSP-2', '5806606         ', 'SINGLE          ', '29/02/2020', '355', ' W', 'NORMAL', '50', '1', '1', '49', '0', '49', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '500', 'ACTUAL BILL', '0', '2.16', '1.09', '', 'LV1.2   ', '97', '97', '13/03/2020', '16/03/2020', '198.45', '120', '18', '0', '20', '0', '0', '0', '0', '-3.29', '0', '0', '-261.35', '97', '0', 'NA', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'NA', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '715396402971', '5', '4.9 ', '', '10', '', '', '', '', '358.35', '-261.35', '97', '', '000201010211021644038478003617000415522024078003617061661000307800361770822CITI0100000CITIHDF11111115311501000020017520449005303356540597.005802IN5908MPPKVCLJ6006MUMBAI610640005362270511A71539887620708780036176304AA1B', '0', '0', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '5342487938', 'FEB-2020', '', 'BA1', '22', '5342487938', '144420207-1 -22-5342487938 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'MO. ADIL ANSARI', '', 'BENI SINGH KI TAIILYA', 'CHAR KHAMBA', '', '', '', 'GL-4', '323898          ', 'SINGLE          ', '29/02/2020', '800', ' W', 'NORMAL', '3900', '3873', '1', '27', '0', '27', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '1000', 'ACTUAL BILL', '0', '3.28', '.93', '', 'LV1.2   ', '95', '11740', '13/03/2020', '16/03/2020', '109.35', '60', '10', '0', '10', '0', '0', '0', '0', '-5.16', '0', '0', '-92.05', '95', '11645', 'NA', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'NA', 'AUG-2019', '10/09/2019', '3389', '386', 'SEP-2019', '01/10/2019', '3415', '26', 'OCT-2019', '01/11/2019', '3520', '105', 'NOV-2019', '30/11/2019', '3615', '95', 'DEC-2019', '31/12/2019', '3720', '105', 'JAN-2020', '31/01/2020', '3873', '153', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '534249505803', '147', '2.7 ', '', '10', '', '', '', '', '187.05', '-92.05', '95', '', '000201010211021644038478003617000415522024078003617061661000307800361770822CITI0100000CITIHDF11111115311501000020017520449005303356540811740.005802IN5908MPPKVCLJ6006MUMBAI610640005362270511A5342487938070878003617630434BA', '0', '0', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '2525429640', 'FEB-2020', '', 'BA1', '22', '2525429640', '144420207-1 -22-2525429640 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'MO. SHAHZAD', '', '494 SHASTRI WARD', 'BAHORABAGH', '', '', '', 'TG-72-SP-1', '0723777         ', 'SINGLE          ', '29/02/2020', '520', ' W', 'NORMAL', '3300', '3265', '1', '35', '0', '35', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '1', 'ACTUAL BILL', '0', '3.45', '1.21', '', 'LV1.2   ', '100', '27837', '13/03/2020', '16/03/2020', '141.75', '60', '13', '0', '10', '0', '0', '0', '0', '-.01', '0', '0', '-128.25', '100', '27737', 'NA', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'NA', 'AUG-2019', '10/09/2019', '2731', '79', 'SEP-2019', '01/10/2019', '2830', '99', 'OCT-2019', '01/11/2019', '2922', '92', 'NOV-2019', '30/11/2019', '3035', '113', 'DEC-2019', '31/12/2019', '3160', '125', 'JAN-2020', '31/01/2020', '3265', '105', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '252542108569', '348', '3.5 ', '', '10', '', '', '', '', '228.25', '-128.25', '100', '', '000201010211021644038478003617000415522024078003617061661000307800361770822CITI0100000CITIHDF11111115311501000020017520449005303356540827837.005802IN5908MPPKVCLJ6006MUMBAI610640005362270511A252542964007087800361763042DEF', '0', '0', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '5452805353', 'FEB-2020', '', 'BA1', '22', '5452805353', '144420207-1 -22-5452805353 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'SHRI SALEEM AHMAD ANSARI', '', 'GL-4 CHAR KHAMBA', 'BENI SINGH KI TALLIYA', '', '', '', 'GL-4', '323797          ', 'SINGLE          ', '29/02/2020', '800', ' W', 'NORMAL', '2400', '2360', '1', '40', '0', '40', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '891', 'ACTUAL BILL', '0', '3.28', '1.38', '', 'LV1.2   ', '95', '18237', '13/03/2020', '16/03/2020', '162', '60', '15', '0', '10', '0', '0', '0', '0', '-4.6', '0', '0', '-151', '95', '18142', 'NA', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'NA', 'AUG-2019', '10/09/2019', '1852', '23', 'SEP-2019', '01/10/2019', '1890', '38', 'OCT-2019', '01/11/2019', '2020', '130', 'NOV-2019', '30/11/2019', '2135', '115', 'DEC-2019', '31/12/2019', '2240', '105', 'JAN-2020', '31/01/2020', '2360', '120', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '545289569967', '228', '4 ', '', '10', '', '', '', '', '246', '-151', '95', '', '000201010211021644038478003617000415522024078003617061661000307800361770822CITI0100000CITIHDF11111115311501000020017520449005303356540818237.005802IN5908MPPKVCLJ6006MUMBAI610640005362270511A54528053530708780036176304383F', '0', '0', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '0799422000', 'FEB-2020', '', 'BA1', '22', '0799422000', '144420207-1 -22-0799422000 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'SHRI SHARWAN KUMAR GHASIYA', '', 'S/O SANTOSH GHASIYA,GHASIYACOLONI', '.', '', '', '9098400112', 'TG-20A', '017981          ', 'SINGLE          ', '01/03/2020', '210', ' W', 'NORMAL', '7009', '6943', '1', '66', '0', '66', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '1665', 'ACTUAL BILL', '0', '3.19', '2.44', '1444200173733  ', 'LV1.2   ', '86', '0', '13/03/2020', '16/03/2020', '284.4', '100', '26', '0', '10', '0', '0', '0', '0', '-8.6', '0', '0', '-327', '86', '-86', 'NATIK ALI', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'NATIK ALI', 'AUG-2019', '10/09/2019', '6282', '132', 'SEP-2019', '01/10/2019', '6355', '73', 'OCT-2019', '02/11/2019', '6536', '181', 'NOV-2019', '02/12/2019', '6690', '154', 'DEC-2019', '04/01/2020', '6835', '145', 'JAN-2020', '03/02/2020', '6943', '108', '04/02/2020', '079942201704', '132', '', 'J_PORTAL', '14/02/2020', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '079949844776', '0', '6.6 ', '', '10', '', '', '', '', '413', '-327', '86', '', '', '0', '-5', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '0037322000', 'FEB-2020', '', 'BA1', '22', '0037322000', '144420207-1 -22-0037322000 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'RIYAZ AHMED', '', '818/A', 'BAHORABAG', '482001', '', '8800536963', 'TG-37', '14312           ', 'SINGLE          ', '01/03/2020', '240', ' W', 'NORMAL', '9704', '9614', '1', '90', '0', '90', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '1672', 'ACTUAL BILL', '0', '3.07', '3.21', '14442005021297 ', 'LV1.2   ', '86', '-14', '13/03/2020', '16/03/2020', '402.3', '100', '37', '0', '10', '0', '0', '0', '0', '-8.63', '0', '0', '-458.3', '86', '-100', 'VIJAY JHARIA', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'VIJAY JHARIA', 'AUG-2019', '01/09/2019', '8971', '154', 'SEP-2019', '03/10/2019', '9145', '174', 'OCT-2019', '02/11/2019', '9296', '151', 'NOV-2019', '02/12/2019', '9427', '131', 'DEC-2019', '03/01/2020', '9536', '109', 'JAN-2020', '02/02/2020', '9614', '78', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '003730579798', '0', '9 ', '', '10', '', '', '', '', '544.3', '-458.3', '86', '', '', '0', '-5', '0'),
('1444200         ', 'E E CITY DN EAST JBP', '144420207       ', '0304046586', 'FEB-2020', '', 'BA1', '23', '0304046586', '144420207-1 -23-0304046586 BAHORABAG', 'DOMESTIC', '', '01/03/2020', 'PRAHLAD SHRIJAN GHASIYA', '', '1999  KILKARI GARDEN THAKKER GRAM WARD', 'BAHORABAG', '482001', '', '9826720568', 'TG/68/SP/7', '437930          ', 'SINGLE          ', '01/03/2020', '530', ' W', 'ASSESSED UNITS', '1384', '1335', '1', '49', '51', '100', 'City Division East', 'CCC:07612560231', 'CCC:0761-2530104', 'FOC:0761-2650704', '', '', '.01', 'ACTUAL BILL', '0', '3.7', '3.7', '', 'LV1.2   ', '100', '4293', '13/03/2020', '16/03/2020', '452.7', '100', '42', '0', '10', '0', '0', '0', '0', '0', '0', '0', '-514.7', '100', '4141', 'NATIK ALI', '', '', '', 'N ', '', '', '', 'Y', '', '', '', '', '', '', '', '', 'NATIK ALI', 'AUG-2019', '02/09/2019', '900', '141', 'SEP-2019', '03/10/2019', '1032', '132', 'OCT-2019', '02/11/2019', '1138', '106', 'NOV-2019', '02/12/2019', '1215', '77', 'DEC-2019', '04/01/2020', '1289', '74', 'JAN-2020', '03/02/2020', '1335', '100', '08/02/2020', '030404664943', '4200', '', 'J_ENSP  ', '08/02/2020', '', '', '', '', '', '', '', '', '', '', '', '', 'Mr.Aslam Ansari', '7612650704', '', 'Mr.Ravindra Kausal', '7612560231', '', '030401160410', '54', '10 ', '', '10', '', '', '', '', '614.7', '-514.7', '100', '', '000201010211021644038478003617000415522024078003617061661000307800361770822CITI0100000CITIHDF1111111531150100002001752044900530335654074293.005802IN5908MPPKVCLJ6006MUMBAI610640005362270511A03040465860708780036176304F307', '0', '0', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
