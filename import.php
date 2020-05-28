<?php
if(!empty($_FILES["contact_file"]["name"]))
{
  

$connect = mysqli_connect("localhost", "root", "", "jabalpurbills");
 

if ($connect->connect_error) {
  die("Connection failed:".$connect->connect_error);
 }else{
  echo "successsssssss";
 }
   
   
  $allowed_ext = array("csv");
  $extension = end(explode(".",$_FILES["contact_file"]["name"]));
  // echo "successsssssss".in_array($extension,$allowed_ext);
  if(in_array($extension,$allowed_ext)){
  $file_data = fopen($_FILES["contact_file"]["tmp_name"],'r');

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
                $BILLMONHINDI = mysqli_real_escape_string($connect,$row[11]);
                $BILL_ISSUE_DATE = mysqli_real_escape_string($connect,$row[12]);
                $CONS_NAME_H = mysqli_real_escape_string($connect,$row[13]);
                $FATH_HUS_NAME_H = mysqli_real_escape_string($connect,$row[14]);
                $CONS_ADDH1 = mysqli_real_escape_string($connect,$row[15]);
                $CONS_ADDH2 = mysqli_real_escape_string($connect,$row[16]);
                $PIN_CODE = mysqli_real_escape_string($connect,$row[17]);
                $TELEPHONE = mysqli_real_escape_string($connect,$row[18]);
                $MOB_NO = mysqli_real_escape_string($connect,$row[19]);
                $EXIST_POLE_NO = mysqli_real_escape_string($connect,$row[20]);
                $MTR_NO = mysqli_real_escape_string($connect,$row[21]);
                $PHASE1 = mysqli_real_escape_string($connect,$row[22]);
                $RDG_DT = mysqli_real_escape_string($connect,$row[23]);
                $LOAD1 = mysqli_real_escape_string($connect,$row[24]);
                $LOADUNIT = mysqli_real_escape_string($connect,$row[25]);
                $RDG_TYP = mysqli_real_escape_string($connect,$row[26]);
                $CURR_RDG = mysqli_real_escape_string($connect,$row[27]);
                $PREV_RDG = mysqli_real_escape_string($connect,$row[28]);
                $MF = mysqli_real_escape_string($connect,$row[29]);
                $CONSMP = mysqli_real_escape_string($connect,$row[30]);
                $ASS_CONSMP = mysqli_real_escape_string($connect,$row[31]);
                $TOTCONSMP = mysqli_real_escape_string($connect,$row[32]);
                $DCLOC = mysqli_real_escape_string($connect,$row[33]);
                $DCADD1 = mysqli_real_escape_string($connect,$row[34]);
                $DCADD2 = mysqli_real_escape_string($connect,$row[35]);
                $DCADD3 = mysqli_real_escape_string($connect,$row[36]);
                $DCPINCD = mysqli_real_escape_string($connect,$row[37]);
                $DCPHONE = mysqli_real_escape_string($connect,$row[38]);
                $TOT_SD_HELD = mysqli_real_escape_string($connect,$row[39]);
                $BILL_TYPE = mysqli_real_escape_string($connect,$row[40]);
                $SD_DUE = mysqli_real_escape_string($connect,$row[41]);
                $DAILY_AVG_BILL = mysqli_real_escape_string($connect,$row[42]);
                $DAILY_AVG_CONSMP = mysqli_real_escape_string($connect,$row[43]);
                $OLDCONSNO = mysqli_real_escape_string($connect,$row[44]);
                $TRF_CATG = mysqli_real_escape_string($connect,$row[45]);
                $CURR_DEMAND = mysqli_real_escape_string($connect,$row[46]);
                $BILL_NET = mysqli_real_escape_string($connect,$row[47]);
                $FIRST_CHQ_DT_H = mysqli_real_escape_string($connect,$row[48]);
                $FIRST_CASH_DT_H = mysqli_real_escape_string($connect,$row[49]);
                $ENERGY_CHRG = mysqli_real_escape_string($connect,$row[50]);
                $FIXED_CHARGE = mysqli_real_escape_string($connect,$row[51]);
                $DUTY = mysqli_real_escape_string($connect,$row[52]);
                $CESS = mysqli_real_escape_string($connect,$row[53]);
                $MTR_RENT = mysqli_real_escape_string($connect,$row[54]);
                $ADJ_AMT = mysqli_real_escape_string($connect,$row[55]);
                $SD_BILLED = mysqli_real_escape_string($connect,$row[56]);
                $OTHER_CHRG = mysqli_real_escape_string($connect,$row[57]);
                $LAST_MONTH_AV = mysqli_real_escape_string($connect,$row[58]);
                $INST_AMT = mysqli_real_escape_string($connect,$row[59]);
                $EMP_REBATE = mysqli_real_escape_string($connect,$row[60]);
                $LOCK_CR_AMT = mysqli_real_escape_string($connect,$row[61]);
                $SUBSIDY = mysqli_real_escape_string($connect,$row[62]);
                $CURR_BILL = mysqli_real_escape_string($connect,$row[63]);
                $PREV_BAL = mysqli_real_escape_string($connect,$row[64]);
                $MTR_READ_TAKEN_BY = mysqli_real_escape_string($connect,$row[65]);
                $TRFLINE = mysqli_real_escape_string($connect,$row[66]);
                $MSGLINE_H = mysqli_real_escape_string($connect,$row[67]);
                $CONS_STA_CD = mysqli_real_escape_string($connect,$row[68]);
                $BILL_CORR_FLG = mysqli_real_escape_string($connect,$row[69]);
                $BILL_COPY = mysqli_real_escape_string($connect,$row[70]);
                $RDG_TYP_CD = mysqli_real_escape_string($connect,$row[71]);
                $BILL_TYP_CD = mysqli_real_escape_string($connect,$row[72]);
                $CHQ_DSHNRD_FLG = mysqli_real_escape_string($connect,$row[73]);
                $REV_CATG_CD = mysqli_real_escape_string($connect,$row[74]);
                $LOAD_UNIT_CD = mysqli_real_escape_string($connect,$row[75]);
                $SPOT_BILL_FLG = mysqli_real_escape_string($connect,$row[76]);
                $EMP_RBTE_FLG = mysqli_real_escape_string($connect,$row[77]);
                $INST_BAL_ARRS = mysqli_real_escape_string($connect,$row[78]);
                $INSTL_AMT_BLD = mysqli_real_escape_string($connect,$row[79]);
                $CORR_CITY = mysqli_real_escape_string($connect,$row[80]);
                $CONN_TYP_CD = mysqli_real_escape_string($connect,$row[81]);
                $MTR_READER = mysqli_real_escape_string($connect,$row[82]);
                $BILL_MON1 = mysqli_real_escape_string($connect,$row[83]);
                $RDG_DT1 = mysqli_real_escape_string($connect,$row[84]);
                $CURR_RDG1 = mysqli_real_escape_string($connect,$row[85]);
                $CONSMP1 = mysqli_real_escape_string($connect,$row[86]);
                $BILL_MON2 = mysqli_real_escape_string($connect,$row[87]);
                $RDG_DT2 = mysqli_real_escape_string($connect,$row[88]);
                $CURR_RDG2 = mysqli_real_escape_string($connect,$row[89]);
                $CONSMP2 = mysqli_real_escape_string($connect,$row[90]);
                $BILL_MON3 = mysqli_real_escape_string($connect,$row[91]);
                $RDG_DT3 = mysqli_real_escape_string($connect,$row[92]);
                $CURR_RDG3 = mysqli_real_escape_string($connect,$row[93]);
                $CONSMP3 = mysqli_real_escape_string($connect,$row[94]);
                $BILL_MON4 = mysqli_real_escape_string($connect,$row[95]);
                $RDG_DT4 = mysqli_real_escape_string($connect,$row[96]);
                $CURR_RDG4 = mysqli_real_escape_string($connect,$row[97]);
                $CONSMP4 = mysqli_real_escape_string($connect,$row[98]);
                $BILL_MON5 = mysqli_real_escape_string($connect,$row[99]);
                $RDG_DT5 = mysqli_real_escape_string($connect,$row[100]);
                $CURR_RDG5 = mysqli_real_escape_string($connect,$row[101]);
                $CONSMP5 = mysqli_real_escape_string($connect,$row[102]);
                $BILL_MON6 = mysqli_real_escape_string($connect,$row[103]);
                $RDG_DT6 = mysqli_real_escape_string($connect,$row[104]);
                $CURR_RDG6 = mysqli_real_escape_string($connect,$row[105]);
                $CONSMP6 = mysqli_real_escape_string($connect,$row[106]);
                $PYMT_DT1 = mysqli_real_escape_string($connect,$row[107]);
                $CAC_NO1 = mysqli_real_escape_string($connect,$row[108]);
                $AMT_PAID1 = mysqli_real_escape_string($connect,$row[109]);
                $PYMT_MODE1 = mysqli_real_escape_string($connect,$row[110]);
                $WINDOW_NO1 = mysqli_real_escape_string($connect,$row[111]);
                $PUNCH_DT1 = mysqli_real_escape_string($connect,$row[112]);
                $YMT_DT2 = mysqli_real_escape_string($connect,$row[113]);
                $CAC_NO2 = mysqli_real_escape_string($connect,$row[114]);
                $AMT_PAID2 = mysqli_real_escape_string($connect,$row[115]);
                $YMT_MODE2 = mysqli_real_escape_string($connect,$row[116]);
                $WINDOW_NO2 = mysqli_real_escape_string($connect,$row[117]);
                $PUNCH_DT2 = mysqli_real_escape_string($connect,$row[118]);
                $PYMT_DT3 = mysqli_real_escape_string($connect,$row[119]);
                $CAC_NO3 = mysqli_real_escape_string($connect,$row[120]);
                $AMT_PAID3 = mysqli_real_escape_string($connect,$row[121]);
                $PYMT_MODE3 = mysqli_real_escape_string($connect,$row[122]);
                $WINDOW_NO3 = mysqli_real_escape_string($connect,$row[123]);
                $PUNCH_DT3 = mysqli_real_escape_string($connect,$row[124]);
                $NAME_JE = mysqli_real_escape_string($connect,$row[125]);
                $PH_JE1 = mysqli_real_escape_string($connect,$row[126]);
                $PH_JE2 = mysqli_real_escape_string($connect,$row[127]);
                $NAME_AE = mysqli_real_escape_string($connect,$row[128]);
                $PH_AE1 = mysqli_real_escape_string($connect,$row[129]);
                $PH_AE2 = mysqli_real_escape_string($connect,$row[130]);
                $BILL_NO = mysqli_real_escape_string($connect,$row[131]);
                $SURCHRGE_DUE = mysqli_real_escape_string($connect,$row[132]);
                $FCA = mysqli_real_escape_string($connect,$row[133]);
                $EMP_FREE_FCA = mysqli_real_escape_string($connect,$row[134]);
                $FCA_RATE = mysqli_real_escape_string($connect,$row[135]);
                $CONS_NAME_HINDI = mysqli_real_escape_string($connect,$row[136]);
                $FATH_HUS_NAME_HINDI = mysqli_real_escape_string($connect,$row[137]);
                $CONS_ADD1_HINDI = mysqli_real_escape_string($connect,$row[138]);
                $CONS_ADD2_HINDI = mysqli_real_escape_string($connect,$row[139]);
                $S_BILL_AMT = mysqli_real_escape_string($connect,$row[140]);
                $S_GOVT_SUBSIDY = mysqli_real_escape_string($connect,$row[141]);
                $S_MON_BILL = mysqli_real_escape_string($connect,$row[142]);
                $SAMADHAN_ARR = mysqli_real_escape_string($connect,$row[143]);
                $QR_CODE = mysqli_real_escape_string($connect,$row[144]);
                $ADV_PAY_INCENT = mysqli_real_escape_string($connect,$row[145]);
                $ONLINE_REBATE = mysqli_real_escape_string($connect,$row[146]);
                $PROMPT_PAY_INCENT = mysqli_real_escape_string($connect,$row[147]);




  
  $query = "INSERT INTO igjy(DIVISION_LOC_CD,DIVISION_LOC_DESC,LOC_CD,CONS_NO,BILL_MON,BATCH_NO,
GR_NO,RD_NO,IVRSID,CONNID,CONS_LOC_DESC,BILLMONHINDI,BILL_ISSUE_DATE,
CONS_NAME_H,FATH_HUS_NAME_H,CONS_ADDH1,CONS_ADDH2,PIN_CODE,TELEPHONE,
MOB_NO,EXIST_POLE_NO,MTR_NO,PHASE1,RDG_DT,LOAD1,LOADUNIT,RDG_TYP,CURR_RDG,
PREV_RDG,MF,CONSMP,ASS_CONSMP,TOTCONSMP,DCLOC,DCADD1,DCADD2,DCADD3,DCPINCD,
DCPHONE,TOT_SD_HELD,BILL_TYPE,SD_DUE,DAILY_AVG_BILL,DAILY_AVG_CONSMP,
OLDCONSNO,TRF_CATG,CURR_DEMAND,BILL_NET,FIRST_CHQ_DT_H,FIRST_CASH_DT_H,
ENERGY_CHRG,FIXED_CHARGE,DUTY,CESS,MTR_RENT,ADJ_AMT,SD_BILLED,OTHER_CHRG,
LAST_MONTH_AV,INST_AMT,EMP_REBATE,LOCK_CR_AMT,SUBSIDY,CURR_BILL,PREV_BAL,
MTR_READ_TAKEN_BY,TRFLINE,MSGLINE_H,CONS_STA_CD,BILL_CORR_FLG,BILL_COPY,RDG_TYP_CD,
BILL_TYP_CD,CHQ_DSHNRD_FLG,REV_CATG_CD,LOAD_UNIT_CD,SPOT_BILL_FLG,EMP_RBTE_FLG,
INST_BAL_ARRS,INSTL_AMT_BLD,CORR_CITY,CONN_TYP_CD,MTR_READER,BILL_MON1,RDG_DT1,
CURR_RDG1,CONSMP1,BILL_MON2,RDG_DT2,CURR_RDG2,CONSMP2,BILL_MON3,RDG_DT3,CURR_RDG3,CONSMP3,
BILL_MON4,RDG_DT4,CURR_RDG4,CONSMP4,BILL_MON5,RDG_DT5,CURR_RDG5,CONSMP5,BILL_MON6,RDG_DT6,
CURR_RDG6,CONSMP6,PYMT_DT1,CAC_NO1,AMT_PAID1,PYMT_MODE1,WINDOW_NO1,PUNCH_DT1,PYMT_DT2,CAC_NO2,
AMT_PAID2,PYMT_MODE2,WINDOW_NO2,PUNCH_DT2,PYMT_DT3,CAC_NO3,AMT_PAID3,PYMT_MODE3,
WINDOW_NO3,PUNCH_DT3,NAME_JE,PH_JE1,PH_JE2,NAME_AE,PH_AE1,PH_AE2,BILL_NO,SURCHRGE_DUE,
FCA,EMP_FREE_FCA,FCA_RATE,CONS_NAME_HINDI,FATH_HUS_NAME_HINDI,CONS_ADD1_HINDI,CONS_ADD2_HINDI,
S_BILL_AMT,S_GOVT_SUBSIDY,S_MON_BILL,SAMADHAN_ARR,QR_CODE,ADV_PAY_INCENT,ONLINE_REBATE,PROMPT_PAY_INCENT)
VALUES('$DIVISION_LOC_CD','$DIVISION_LOC_DESC','$LOC_CD','$CONS_NO','$BILL_MON','$BATCH_NO',
'$GR_NO','$RD_NO','$IVRSID','$CONNID','$CONS_LOC_DESC','$BILLMONHINDI','$BILL_ISSUE_DATE',
'$CONS_NAME_H','$FATH_HUS_NAME_H','$CONS_ADDH1','$CONS_ADDH2','$PIN_CODE','$TELEPHONE',
'$MOB_NO','$EXIST_POLE_NO','$MTR_NO','$PHASE1','$RDG_DT','$LOAD1','$LOADUNIT','$RDG_TYP','$CURR_RDG',
'$PREV_RDG','$MF','$CONSMP','$ASS_CONSMP','$TOTCONSMP','$DCLOC','$DCADD1','$DCADD2','$DCADD3','$DCPINCD',
'$DCPHONE','$TOT_SD_HELD','$BILL_TYPE','$SD_DUE','$DAILY_AVG_BILL','$DAILY_AVG_CONSMP',
'$OLDCONSNO','$TRF_CATG','$CURR_DEMAND','$BILL_NET','$FIRST_CHQ_DT_H','$FIRST_CASH_DT_H',
'$ENERGY_CHRG','$FIXED_CHARGE','$DUTY','$CESS','$MTR_RENT','$ADJ_AMT','$SD_BILLED','$OTHER_CHRG',
'$LAST_MONTH_AV','$INST_AMT','$EMP_REBATE','$LOCK_CR_AMT','$SUBSIDY','$CURR_BILL','$PREV_BAL',
'$MTR_READ_TAKEN_BY','$TRFLINE','$MSGLINE_H','$CONS_STA_CD','$BILL_CORR_FLG','$BILL_COPY','$RDG_TYP_CD',
'$BILL_TYP_CD','$CHQ_DSHNRD_FLG','$REV_CATG_CD','$LOAD_UNIT_CD','$SPOT_BILL_FLG','$EMP_RBTE_FLG',
'$INST_BAL_ARRS','$INSTL_AMT_BLD','$CORR_CITY','$CONN_TYP_CD','$MTR_READER','$BILL_MON1','$RDG_DT1',
'$CURR_RDG1','$CONSMP1','$BILL_MON2','$RDG_DT2','$CURR_RDG2','$CONSMP2','$BILL_MON3','$RDG_DT3','$CURR_RDG3','$CONSMP3',
'$BILL_MON4','$RDG_DT4','$CURR_RDG4','$CONSMP4','$BILL_MON5','$RDG_DT5','$CURR_RDG5','$CONSMP5','$BILL_MON6','$RDG_DT6',
'$CURR_RDG6','$CONSMP6','$PYMT_DT1','$CAC_NO1','$AMT_PAID1','$PYMT_MODE1','$WINDOW_NO1','$PUNCH_DT1','$PYMT_DT2','$CAC_NO2',
'$AMT_PAID2','$PYMT_MODE2','$WINDOW_NO2','$PUNCH_DT2','$PYMT_DT3','$CAC_NO3','$AMT_PAID3','$PYMT_MODE3',
'$WINDOW_NO3','$PUNCH_DT3','$NAME_JE','$PH_JE1','$PH_JE2','$NAME_AE','$PH_AE1','$PH_AE2','$BILL_NO','$SURCHRGE_DUE',
'$FCA','$EMP_FREE_FCA','$FCA_RATE','$CONS_NAME_HINDI','$FATH_HUS_NAME_HINDI','$CONS_ADD1_HINDI','$CONS_ADD2_HINDI',
'$S_BILL_AMT','$S_GOVT_SUBSIDY','$S_MON_BILL','$SAMADHAN_ARR','$QR_CODE','$ADV_PAY_INCENT','$ONLINE_REBATE','$PROMPT_PAY_INCENT')";

  echo $query;

  mysqli_query($connect,$query);
  
  




    }
  }
}
else{
  echo "Error";
}
$connect->close();
?>

<script>
setTimeout(function () {    
    window.location.href = 'index1.php'; 
},3000);
</script>