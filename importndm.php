<?php
if(!empty($_FILES["contact_file2"]["name"]))
{
  

$connect = mysqli_connect("localhost", "root", "", "jabalpurbills");
 

if ($connect->connect_error) {
  die("Connection failed:".$connect->connect_error);
 }else{
  echo "successsssssss";
 }
   
   
  $allowed_ext = array("csv");
  $extension = end(explode(".",$_FILES["contact_file2"]["name"]));
  // echo "successsssssss".in_array($extension,$allowed_ext);
  if(in_array($extension,$allowed_ext)){
  $file_data = fopen($_FILES["contact_file2"]["tmp_name"],'r');

  fgetcsv($file_data);
  while($row = fgetcsv($file_data)){

    	     

                $DIVISION_LOC_CD = mysqli_real_escape_string($connect,$row[0]);
                $DIVISION_LOC_DESC = mysqli_real_escape_string($connect,$row[1]);
                $LOC_CD = mysqli_real_escape_string($connect,$row[2]);
                $CONS_NO = mysqli_real_escape_string($connect,$row[3]);
                $BILL_MON = mysqli_real_escape_string($connect,$row[4]);
                $BATCH_NO = mysqli_real_escape_string($connect,$row[5]);
                $GR_NO = mysqli_real_escape_string($connect,$row[6]);
                $RD_NO = mysqli_real_escape_string($connect,$row[7]);
                $IVRSID = mysqli_real_escape_string($connect,$row[8]);
                $CONNID = mysqli_real_escape_string($connect,$row[9]);
                $CONS_LOC_DESC = mysqli_real_escape_string($connect,$row[10]);
                $CONS_NO_STUFF = mysqli_real_escape_string($connect,$row[11]);
                $BILLMONHINDI = mysqli_real_escape_string($connect,$row[12]);
                $BILL_ISSUE_DATE = mysqli_real_escape_string($connect,$row[13]);
                $CONS_NAME_H = mysqli_real_escape_string($connect,$row[14]);
                $FATH_HUS_NAME_H = mysqli_real_escape_string($connect,$row[15]);
                $CONS_ADDH1 = mysqli_real_escape_string($connect,$row[16]);
                $CONS_ADDH2 = mysqli_real_escape_string($connect,$row[17]);
                $PIN_CODE = mysqli_real_escape_string($connect,$row[18]);
                $TELEPHONE = mysqli_real_escape_string($connect,$row[19]);
                $MOB_NO = mysqli_real_escape_string($connect,$row[20]);
                $EXIST_POLE_NO = mysqli_real_escape_string($connect,$row[21]);
                $MTR_NO = mysqli_real_escape_string($connect,$row[22]);
                $PHASE1 = mysqli_real_escape_string($connect,$row[23]);
                $RDG_DT = mysqli_real_escape_string($connect,$row[24]);
                $LOAD1 = mysqli_real_escape_string($connect,$row[25]);
                $LOADUNIT = mysqli_real_escape_string($connect,$row[26]);
                $RDG_TYP = mysqli_real_escape_string($connect,$row[27]);
                $AGRMT_CON_DEM = mysqli_real_escape_string($connect,$row[28]);
                $CLOADUNIT = mysqli_real_escape_string($connect,$row[29]);
                $MD_KW = mysqli_real_escape_string($connect,$row[30]);
                $CURR_RDG = mysqli_real_escape_string($connect,$row[31]);
                $PREV_RDG = mysqli_real_escape_string($connect,$row[32]);
                $MF = mysqli_real_escape_string($connect,$row[33]);
                $AVG_PF = mysqli_real_escape_string($connect,$row[34]);
                $CONSMP = mysqli_real_escape_string($connect,$row[35]);
                $ASS_CONSMP = mysqli_real_escape_string($connect,$row[36]);
                $TOTCONSMP = mysqli_real_escape_string($connect,$row[37]);
                $DCLOC = mysqli_real_escape_string($connect,$row[38]);
                $DCADD1 = mysqli_real_escape_string($connect,$row[39]);
                $DCADD2 = mysqli_real_escape_string($connect,$row[40]);
                $DCADD3 = mysqli_real_escape_string($connect,$row[41]);
                $DCPINCD = mysqli_real_escape_string($connect,$row[42]);
                $DCPHONE = mysqli_real_escape_string($connect,$row[43]);
                $TOT_SD_HELD = mysqli_real_escape_string($connect,$row[44]);
                $BILL_TYPE = mysqli_real_escape_string($connect,$row[45]);
                $SD_DUE = mysqli_real_escape_string($connect,$row[46]);
                $DAILY_AVG_BILL = mysqli_real_escape_string($connect,$row[47]);
                $DAILY_AVG_CONSMP = mysqli_real_escape_string($connect,$row[48]);
                $OLDCONSNO = mysqli_real_escape_string($connect,$row[49]);
                $TRF_CATG = mysqli_real_escape_string($connect,$row[50]);
                $BILLED_UNIT = mysqli_real_escape_string($connect,$row[51]);
                $CURR_DEMAND = mysqli_real_escape_string($connect,$row[52]);
                $BILL_NET = mysqli_real_escape_string($connect,$row[53]);
                $FIRST_CHQ_DT_H = mysqli_real_escape_string($connect,$row[54]);
                $FIRST_CASH_DT_H = mysqli_real_escape_string($connect,$row[55]);
                $ENERGY_CHRG = mysqli_real_escape_string($connect,$row[56]);
                $FIXED_CHARGE = mysqli_real_escape_string($connect,$row[57]);
                $DUTY = mysqli_real_escape_string($connect,$row[58]);
                $CESS = mysqli_real_escape_string($connect,$row[59]);
                $MTR_RENT = mysqli_real_escape_string($connect,$row[60]);
                $ADJ_AMT = mysqli_real_escape_string($connect,$row[61]);
                $SD_BILLED = mysqli_real_escape_string($connect,$row[62]);
                $WELD_CAP_CHRG = mysqli_real_escape_string($connect,$row[63]);
                $PENAL_CHRGS = mysqli_real_escape_string($connect,$row[64]);
                $TOD_SUR = mysqli_real_escape_string($connect,$row[65]);
                $OTHER_CHRG = mysqli_real_escape_string($connect,$row[66]);
                $LAST_MONTH_AV = mysqli_real_escape_string($connect,$row[67]);
                $INST_AMT = mysqli_real_escape_string($connect,$row[68]);
                $LOAD_FACTOR = mysqli_real_escape_string($connect,$row[69]);
                $PWR_SVG_DEV_RBTE = mysqli_real_escape_string($connect,$row[70]);
                $LOCK_CR_AMT = mysqli_real_escape_string($connect,$row[71]);
                $SUBSIDY = mysqli_real_escape_string($connect,$row[72]);
                $CURR_BILL = mysqli_real_escape_string($connect,$row[73]);
                $PREV_BAL = mysqli_real_escape_string($connect,$row[74]);
                $SURCHRGE_DUE = mysqli_real_escape_string($connect,$row[75]);
                $TOTAL_REC_AMT_AFTER_DUE_DT = mysqli_real_escape_string($connect,$row[76]);
                $MTR_READ_TAKEN_BY = mysqli_real_escape_string($connect,$row[77]);
                $TRFLINE = mysqli_real_escape_string($connect,$row[78]);
                $MSGLINE_H = mysqli_real_escape_string($connect,$row[79]);
                $BILL_PRD = mysqli_real_escape_string($connect,$row[80]);
                $CONS_STA_CD = mysqli_real_escape_string($connect,$row[81]);
                $BILL_CORR_FLG = mysqli_real_escape_string($connect,$row[82]);
                $BILL_COPY = mysqli_real_escape_string($connect,$row[83]);
                $RDG_TYP_CD = mysqli_real_escape_string($connect,$row[84]);
                $BILL_TYP_CD = mysqli_real_escape_string($connect,$row[85]);
                $CHQ_DSHNRD_FLG = mysqli_real_escape_string($connect,$row[86]);
                $REV_CATG_CD = mysqli_real_escape_string($connect,$row[87]);
                $LOAD_UNIT_CD = mysqli_real_escape_string($connect,$row[88]);
                $SPOT_BILL_FLG = mysqli_real_escape_string($connect,$row[89]);
                $INSTL_AMT_BLD = mysqli_real_escape_string($connect,$row[90]);
                $INST_BAL_ARRS = mysqli_real_escape_string($connect,$row[91]);
                $TRF_CATG_OLD = mysqli_real_escape_string($connect,$row[92]);
                $CORR_CITY = mysqli_real_escape_string($connect,$row[93]);
                $CONN_TYP_CD = mysqli_real_escape_string($connect,$row[94]);
                $MTR_READER = mysqli_real_escape_string($connect,$row[95]);
                $BILL_MON1 = mysqli_real_escape_string($connect,$row[96]);
                $RDG_DT1 = mysqli_real_escape_string($connect,$row[97]);
                $CURR_RDG1 = mysqli_real_escape_string($connect,$row[98]);
                $CONSMP1 = mysqli_real_escape_string($connect,$row[99]);
                $BILL_MON2 = mysqli_real_escape_string($connect,$row[100]);
                $RDG_DT2 = mysqli_real_escape_string($connect,$row[101]);
                $CURR_RDG2 = mysqli_real_escape_string($connect,$row[102]);
                $CONSMP2 = mysqli_real_escape_string($connect,$row[103]);
                $BILL_MON3 = mysqli_real_escape_string($connect,$row[104]);
                $RDG_DT3 = mysqli_real_escape_string($connect,$row[105]);
                $CURR_RDG3 = mysqli_real_escape_string($connect,$row[106]);
                $CONSMP3 = mysqli_real_escape_string($connect,$row[107]);
                $BILL_MON4 = mysqli_real_escape_string($connect,$row[108]);
                $RDG_DT4 = mysqli_real_escape_string($connect,$row[109]);
                $CURR_RDG4 = mysqli_real_escape_string($connect,$row[110]);
                $CONSMP4 = mysqli_real_escape_string($connect,$row[111]);
                $BILL_MON5 = mysqli_real_escape_string($connect,$row[112]);
                $RDG_DT5 = mysqli_real_escape_string($connect,$row[113]);
                $CURR_RDG5 = mysqli_real_escape_string($connect,$row[114]);
                $CONSMP5 = mysqli_real_escape_string($connect,$row[115]);
                $BILL_MON6 = mysqli_real_escape_string($connect,$row[116]);
                $RDG_DT6 = mysqli_real_escape_string($connect,$row[117]);
                $CURR_RDG6 = mysqli_real_escape_string($connect,$row[118]);
                $CONSMP6 = mysqli_real_escape_string($connect,$row[119]);
                $PYMT_DT1 = mysqli_real_escape_string($connect,$row[120]);
                $CAC_NO1 = mysqli_real_escape_string($connect,$row[121]);
                $AMT_PAID1 = mysqli_real_escape_string($connect,$row[122]);
                $PYMT_MODE1 = mysqli_real_escape_string($connect,$row[123]);
                $WINDOW_NO1 = mysqli_real_escape_string($connect,$row[124]);
                $PUNCH_DT1 = mysqli_real_escape_string($connect,$row[125]);
                $PYMT_DT2 = mysqli_real_escape_string($connect,$row[126]);
                $CAC_NO2 = mysqli_real_escape_string($connect,$row[127]);
                $AMT_PAID2 = mysqli_real_escape_string($connect,$row[128]);
                $PYMT_MODE2 = mysqli_real_escape_string($connect,$row[129]);
                $WINDOW_NO2 = mysqli_real_escape_string($connect,$row[130]);
                $PUNCH_DT2 = mysqli_real_escape_string($connect,$row[131]);
                $PYMT_DT3 = mysqli_real_escape_string($connect,$row[132]);
                $CAC_NO3 = mysqli_real_escape_string($connect,$row[133]);
                $AMT_PAID3 = mysqli_real_escape_string($connect,$row[134]);
                $PYMT_MODE3 = mysqli_real_escape_string($connect,$row[135]);
                $WINDOW_NO3 = mysqli_real_escape_string($connect,$row[136]);
                $PUNCH_DT3 = mysqli_real_escape_string($connect,$row[137]);
                $NAME_JE = mysqli_real_escape_string($connect,$row[138]);
                $PH_JE1 = mysqli_real_escape_string($connect,$row[139]);
                $PH_JE2 = mysqli_real_escape_string($connect,$row[140]);
                $NAME_AE = mysqli_real_escape_string($connect,$row[141]);
                $PH_AE1 = mysqli_real_escape_string($connect,$row[142]);
                $PH_AE2 = mysqli_real_escape_string($connect,$row[143]);
                $BILL_NO = mysqli_real_escape_string($connect,$row[144]);
                $FCA = mysqli_real_escape_string($connect,$row[145]);
                $EMP_FREE_FCA = mysqli_real_escape_string($connect,$row[146]);
                $FCA_RATE = mysqli_real_escape_string($connect,$row[147]);
                $CONS_NAME_HINDI = mysqli_real_escape_string($connect,$row[148]);
                $FATH_HUS_NAME_HINDI = mysqli_real_escape_string($connect,$row[149]);
                $CONS_ADD1_HINDI = mysqli_real_escape_string($connect,$row[150]);
                $CONS_ADD2_HINDI = mysqli_real_escape_string($connect,$row[151]);
                $QR_CODE = mysqli_real_escape_string($connect,$row[152]);
                $ADV_PAY_INCENT = mysqli_real_escape_string($connect,$row[153]);
                $ONLINE_REBATE = mysqli_real_escape_string($connect,$row[154]);
                $PROMPT_PAY_INCENT = mysqli_real_escape_string($connect,$row[155]);




  
  $query = "INSERT INTO ndm(DIVISION_LOC_CD,	DIVISION_LOC_DESC,	LOC_CD,	CONS_NO,	BILL_MON,	
  BATCH_NO,	GR_NO,	RD_NO,	IVRSID,	CONNID,	CONS_LOC_DESC,	
  CONS_NO_STUFF,	BILLMONHINDI,	BILL_ISSUE_DATE,	CONS_NAME_H,	
  FATH_HUS_NAME_H,	CONS_ADDH1,	CONS_ADDH2,	PIN_CODE,	TELEPHONE,	
  MOB_NO,	EXIST_POLE_NO,	MTR_NO,	PHASE1,	RDG_DT,	LOAD1,	LOADUNIT,	
  RDG_TYP,	AGRMT_CON_DEM,	CLOADUNIT,	MD_KW,	CURR_RDG,	PREV_RDG,	
  MF,	AVG_PF,	CONSMP,	ASS_CONSMP,	TOTCONSMP,	DCLOC,	DCADD1,	DCADD2,	
  DCADD3,	DCPINCD,	DCPHONE,	TOT_SD_HELD,	BILL_TYPE,	SD_DUE,	DAILY_AVG_BILL,	
  DAILY_AVG_CONSMP,	OLDCONSNO,	TRF_CATG,	BILLED_UNIT,	CURR_DEMAND,	BILL_NET,	
  FIRST_CHQ_DT_H,	FIRST_CASH_DT_H,	ENERGY_CHRG,	FIXED_CHARGE,	DUTY,	CESS,	
  MTR_RENT,	ADJ_AMT,	SD_BILLED,	WELD_CAP_CHRG,	PENAL_CHRGS,	TOD_SUR,	OTHER_CHRG,	
  LAST_MONTH_AV,	INST_AMT,	LOAD_FACTOR,	PWR_SVG_DEV_RBTE,	LOCK_CR_AMT,	SUBSIDY,	
  CURR_BILL,	PREV_BAL,	SURCHRGE_DUE,	TOTAL_REC_AMT_AFTER_DUE_DT,	MTR_READ_TAKEN_BY,	
  TRFLINE,	MSGLINE_H,	BILL_PRD,	CONS_STA_CD,	BILL_CORR_FLG,	BILL_COPY,	
  RDG_TYP_CD,	BILL_TYP_CD,	CHQ_DSHNRD_FLG,	REV_CATG_CD,	LOAD_UNIT_CD,	
  SPOT_BILL_FLG,	INSTL_AMT_BLD,	INST_BAL_ARRS,	TRF_CATG_OLD,	CORR_CITY,	
  CONN_TYP_CD,	MTR_READER,	BILL_MON1,	RDG_DT1,	CURR_RDG1,	CONSMP1,	BILL_MON2,	
  RDG_DT2,	CURR_RDG2,	CONSMP2,	BILL_MON3,	RDG_DT3,	CURR_RDG3,	CONSMP3,	BILL_MON4,	
  RDG_DT4,	CURR_RDG4,	CONSMP4,	BILL_MON5,	RDG_DT5,	CURR_RDG5,	CONSMP5,	BILL_MON6,	
  RDG_DT6,	CURR_RDG6,	CONSMP6,	PYMT_DT1,	CAC_NO1,	AMT_PAID1,	PYMT_MODE1,	WINDOW_NO1,	
  PUNCH_DT1,	PYMT_DT2,	CAC_NO2,	AMT_PAID2,	PYMT_MODE2,	WINDOW_NO2,	PUNCH_DT2,	
  PYMT_DT3,	CAC_NO3,	AMT_PAID3,	PYMT_MODE3,	WINDOW_NO3,	PUNCH_DT3,	NAME_JE,	PH_JE1,	
  PH_JE2,	NAME_AE,	PH_AE1,	PH_AE2,	BILL_NO,	FCA,	EMP_FREE_FCA,	FCA_RATE,	
  CONS_NAME_HINDI,	FATH_HUS_NAME_HINDI,	CONS_ADD1_HINDI,	CONS_ADD2_HINDI,	QR_CODE,	
  ADV_PAY_INCENT,	ONLINE_REBATE,	PROMPT_PAY_INCENT)
VALUES('$DIVISION_LOC_CD',	'$DIVISION_LOC_DESC',	'$LOC_CD',	'$CONS_NO',	'$BILL_MON',	
'$BATCH_NO',	'$GR_NO',	'$RD_NO',	'$IVRSID',	'$CONNID',	'$CONS_LOC_DESC',	
'$CONS_NO_STUFF',	'$BILLMONHINDI',	'$BILL_ISSUE_DATE',	'$CONS_NAME_H',	
'$FATH_HUS_NAME_H',	'$CONS_ADDH1',	'$CONS_ADDH2',	'$PIN_CODE',	'$TELEPHONE',	
'$MOB_NO',	'$EXIST_POLE_NO',	'$MTR_NO',	'$PHASE1',	'$RDG_DT',	'$LOAD1',	'$LOADUNIT',	
'$RDG_TYP',	'$AGRMT_CON_DEM',	'$CLOADUNIT',	'$MD_KW',	'$CURR_RDG',	'$PREV_RDG',	
'$MF',	'$AVG_PF',	'$CONSMP',	'$ASS_CONSMP',	'$TOTCONSMP',	'$DCLOC',	'$DCADD1',	'$DCADD2',	
'$DCADD3',	'$DCPINCD',	'$DCPHONE',	'$TOT_SD_HELD',	'$BILL_TYPE',	'$SD_DUE',	'$DAILY_AVG_BILL',	
'$DAILY_AVG_CONSMP',	'$OLDCONSNO',	'$TRF_CATG',	'$BILLED_UNIT',	'$CURR_DEMAND',	'$BILL_NET',	
'$FIRST_CHQ_DT_H',	'$FIRST_CASH_DT_H',	'$ENERGY_CHRG',	'$FIXED_CHARGE',	'$DUTY',	'$CESS',	
'$MTR_RENT',	'$ADJ_AMT',	'$SD_BILLED',	'$WELD_CAP_CHRG',	'$PENAL_CHRGS',	'$TOD_SUR',	'$OTHER_CHRG',	
'$LAST_MONTH_AV',	'$INST_AMT',	'$LOAD_FACTOR',	'$PWR_SVG_DEV_RBTE',	'$LOCK_CR_AMT',	'$SUBSIDY',	
'$CURR_BILL',	'$PREV_BAL',	'$SURCHRGE_DUE',	'$TOTAL_REC_AMT_AFTER_DUE_DT',	'$MTR_READ_TAKEN_BY',	
'$TRFLINE',	'$MSGLINE_H',	'$BILL_PRD',	'$CONS_STA_CD','$BILL_CORR_FLG',	'$BILL_COPY',	
'$RDG_TYP_CD',	'$BILL_TYP_CD',	'$CHQ_DSHNRD_FLG',	'$REV_CATG_CD',	'$LOAD_UNIT_CD',	
'$SPOT_BILL_FLG',	'$INSTL_AMT_BLD',	'$INST_BAL_ARRS',	'$TRF_CATG_OLD',	'$CORR_CITY',	
'$CONN_TYP_CD',	'$MTR_READER',	'$BILL_MON1',	'$RDG_DT1',	'$CURR_RDG1',	'$CONSMP1',	'$BILL_MON2',	
'$RDG_DT2',	'$CURR_RDG2',	'$CONSMP2',	'$BILL_MON3',	'$RDG_DT3',	'$CURR_RDG3',	'$CONSMP3',	'$BILL_MON4',	
'$RDG_DT4',	'$CURR_RDG4',	'$CONSMP4',	'$BILL_MON5',	'$RDG_DT5',	'$CURR_RDG5',	'$CONSMP5',	'$BILL_MON6',	
'$RDG_DT6',	'$CURR_RDG6',	'$CONSMP6',	'$PYMT_DT1',	'$CAC_NO1',	'$AMT_PAID1',	'$PYMT_MODE1',	'$WINDOW_NO1',	
'$PUNCH_DT1',	'$PYMT_DT2',	'$CAC_NO2',	'$AMT_PAID2',	'$PYMT_MODE2',	'$WINDOW_NO2',	'$PUNCH_DT2',	
'$PYMT_DT3',	'$CAC_NO3',	'$AMT_PAID3',	'$PYMT_MODE3',	'$WINDOW_NO3',	'$PUNCH_DT3',	'$NAME_JE',	'$PH_JE1',	
'$PH_JE2',	'$NAME_AE',	'$PH_AE1',	'$PH_AE2',	'$BILL_NO',	'$FCA',	'$EMP_FREE_FCA',	'$FCA_RATE',	
'$CONS_NAME_HINDI',	'$FATH_HUS_NAME_HINDI',	'$CONS_ADD1_HINDI',	'$CONS_ADD2_HINDI',	'$QR_CODE',	
'$ADV_PAY_INCENT',	'$ONLINE_REBATE',	'$PROMPT_PAY_INCENT')";

  echo $query;

  mysqli_query($connect,$query);
  
  




    }
  }
}
else{
  echo "Error";
}
?>


