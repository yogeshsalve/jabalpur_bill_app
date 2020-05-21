<?php


if(isset($_POST['submit'])){
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpurbills");

	
}
    
   
    $connect = mysqli_connect("localhost", "root", "", "jabalpurbills");
    
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        }

 
        		

      
 $query = "SELECT DIVISION_LOC_CD,DIVISION_LOC_DESC,LOC_CD,CONS_NO,BILL_MON,BATCH_NO,
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
S_BILL_AMT,S_GOVT_SUBSIDY,S_MON_BILL,SAMADHAN_ARR,QR_CODE,ADV_PAY_INCENT,ONLINE_REBATE,PROMPT_PAY_INCENT FROM igjy"; 


 // WHERE ivrs like '%".$ivrs."%'";
         
    $result = mysqli_query($connect, $query);

 
    if(mysqli_num_rows($result) > 0)
    {

        ?>

            <html>
                    <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>ELECTRICITY BILL APP</title>

                    </head>
                         <style type="text/css"> 
                          table{ 
                           
                        width: 193mm;
                        /* height: 253.5mm;  */
                           border: 2px  Solid dodgerBlue;
                           border-collapse: collapse;
                          border-spacing: 0 1px; 
                          } 
                          td{
                            border:1px Solid dodgerBlue;
                            padding: 2px;      
                          }
                          tr.hide_right > td, td.hide_right{
                            border-right-style:hidden;
                            }
                            tr.hide_all > td, td.hide_all{
                            border-style:hidden;
                            }
                            tr.hide_top > td, td.hide_top{
                            border-top-style:hidden;
                            }
                            .rotate {
                            /* FF3.5+ */
                            -moz-transform: rotate(-90.0deg);
                            /* Opera 10.5 */
                            -o-transform: rotate(-90.0deg);
                            /* Saf3.1+, Chrome */
                            -webkit-transform: rotate(-90.0deg);
                            /* IE6,IE7 */
                             filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=0.083);
                            /* IE8 */
                            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
                            /* Standard */
                            transform: rotate(-90.0deg);
                            }

                    </style>
                    <style>
                        @media print {
                        form {page-break-after: always;}
                        }
                    </style>

                   


                    <body>  
          <?php      
       
       
       for($i=0;$i<mysqli_num_rows($result);$i++)
        {
                   
        
                while ($row = mysqli_fetch_array($result))
                {
          
                $DIVISION_LOC_CD = $row[0];
                $DIVISION_LOC_DESC = $row[1];
                $LOC_CD = $row[2];
                $CONS_NO = $row[3];
                $BILL_MON = $row[4];
                $BATCH_NO = $row[5];
                $GR_NO = $row[6];
                $RD_NO = $row[7];
                $IVRSID = $row[8];
                $CONNID = $row[9];
                $CONS_LOC_DESC = $row[10]; 
                $BILLMONHINDI = $row[11];
                $BILL_ISSUE_DATE = $row[12];
                $CONS_NAME_H = $row[13];
                $FATH_HUS_NAME_H = $row[14];
                $CONS_ADDH1 = $row[15];
                $CONS_ADDH2 = $row[16];
                $PIN_CODE = $row[17];
                $TELEPHONE = $row[18];
                $MOB_NO = $row[19];
                $EXIST_POLE_NO = $row[20];
                $MTR_NO = $row[21];
                $PHASE1 = $row[22];
                $RDG_DT = $row[23];
                $LOAD1 = $row[24];
                $LOADUNIT = $row[25];
                $RDG_TYP = $row[26];
                $CURR_RDG = $row[27];
                $PREV_RDG = $row[28];
                $MF = $row[29];
                $CONSMP = $row[30];
                $ASS_CONSMP = $row[31];
                $TOTCONSMP = $row[32];
                $DCLOC = $row[33];
                $DCADD1 = $row[34];
                $DCADD2 = $row[35];
                $DCADD3 = $row[36];
                $DCPINCD = $row[37];
                $DCPHONE = $row[38];
                $TOT_SD_HELD = $row[39];
                $BILL_TYPE = $row[40];
                $SD_DUE = $row[41];
                $DAILY_AVG_BILL = $row[42];
                $DAILY_AVG_CONSMP = $row[43];
                $OLDCONSNO = $row[44];
                $TRF_CATG = $row[45];
                $CURR_DEMAND = $row[46];
                $BILL_NET = $row[47];
                $FIRST_CHQ_DT_H = $row[48];
                $FIRST_CASH_DT_H = $row[49];
                $ENERGY_CHRG = $row[50]; 
                $FIXED_CHARGE = $row[51];
                $DUTY = $row[52];
                $CESS = $row[53];
                $MTR_RENT = $row[54];
                $ADJ_AMT = $row[55];
                $SD_BILLED = $row[56];
                $OTHER_CHRG = $row[57];
                $LAST_MONTH_AV = $row[58];
                $INST_AMT = $row[59];
                $EMP_REBATE = $row[60];
                $LOCK_CR_AMT = $row[61]; 
                $SUBSIDY = $row[62];
                $CURR_BILL = $row[63];
                $PREV_BAL = $row[64];
                $MTR_READ_TAKEN_BY = $row[65];
                $TRFLINE = $row[66];
                $MSGLINE_H = $row[67];
                $CONS_STA_CD = $row[68];
                $BILL_CORR_FLG = $row[69];
                $BILL_COPY = $row[70];
                $RDG_TYP_CD = $row[71];
                $BILL_TYP_CD = $row[72];
                $CHQ_DSHNRD_FLG = $row[73];
                $REV_CATG_CD = $row[74];
                $LOAD_UNIT_CD = $row[75];
                $SPOT_BILL_FLG = $row[76];
                $EMP_RBTE_FLG = $row[77];
                $INST_BAL_ARRS = $row[78];
                $INSTL_AMT_BLD = $row[79];
                $CORR_CITY = $row[80];
                $CONN_TYP_CD = $row[81];
                $MTR_READER = $row[82];
                $BILL_MON1 = $row[83];
                $RDG_DT1 = $row[84];
                $CURR_RDG1 = $row[85];
                $CONSMP1 = $row[86];
                $BILL_MON2 = $row[87];
                $RDG_DT2 = $row[88];
                $CURR_RDG2 = $row[89];
                $CONSMP2 = $row[90];
                $BILL_MON3 = $row[91];
                $RDG_DT3 = $row[92];
                $CURR_RDG3 = $row[93];
                $CONSMP3 = $row[94];
                $BILL_MON4 = $row[95];
                $RDG_DT4 = $row[96];
                $CURR_RDG4 = $row[97];
                $CONSMP4 = $row[98];
                $BILL_MON5 = $row[99];
                $RDG_DT5 = $row[100]; 
                $CURR_RDG5 = $row[101];
                $CONSMP5 = $row[102];
                $BILL_MON6 = $row[103];
                $RDG_DT6 = $row[104];
                $CURR_RDG6 = $row[105];
                $CONSMP6 = $row[106];
                $PYMT_DT1 = $row[107];
                $CAC_NO1 = $row[108];
                $AMT_PAID1 = $row[109];
                $PYMT_MODE1 = $row[110];
                $WINDOW_NO1 = $row[111];
                $PUNCH_DT1 = $row[112];
                $YMT_DT2 = $row[113];
                $CAC_NO2 = $row[114];
                $AMT_PAID2 = $row[115];
                $YMT_MODE2 = $row[116];
                $WINDOW_NO2 = $row[117];
                $PUNCH_DT2 = $row[118];
                $PYMT_DT3 = $row[119];
                $CAC_NO3 = $row[120];
                $AMT_PAID3 = $row[121];
                $PYMT_MODE3 = $row[122];
                $WINDOW_NO3 = $row[123]; 
                $PUNCH_DT3 = $row[124];
                $NAME_JE = $row[125];
                $PH_JE1 = $row[126];
                $PH_JE2 = $row[127];
                $NAME_AE = $row[128];
                $PH_AE1 = $row[129];
                $PH_AE2 = $row[130];
                $BILL_NO = $row[131];
                $SURCHRGE_DUE = $row[132];
                $FCA = $row[133];
                $EMP_FREE_FCA = $row[134];
                $FCA_RATE = $row[135];
                $CONS_NAME_HINDI = $row[136];
                $FATH_HUS_NAME_HINDI = $row[137];
                $CONS_ADD1_HINDI = $row[138];
                $CONS_ADD2_HINDI = $row[139];
                $S_BILL_AMT = $row[140];
                $S_GOVT_SUBSIDY = $row[141];
                $S_MON_BILL = $row[142];
                $SAMADHAN_ARR = $row[143];
                $QR_CODE = $row[144];
                $ADV_PAY_INCENT = $row[145];
                $ONLINE_REBATE = $row[146];
                $PROMPT_PAY_INCENT = $row[147];


                ?>
                <!-- style="color: dodgerBlue" -->
                <form action="" method="POST" id="myfrm"> 
                <table align="center" style  height:"253.5mm" >
                <tr><td colspan="4" align="center"><font size="2"><b>मध्यप्रदेश पुर्व  क्षेत्र  विदयुत  वितरण कंपनी  लिमिटेड : विदयुत देयक </b> </font></td></tr>
                <tr><td class="hide_top" colspan="4" align="center"><font size="1"><b>ब्लॉक नं ७ शक्ति भवन, रामपूर, जबलपूर CIN NO. U40109MP2002SGC015120  &nbsp;Website:www.mpez.co.in </b></font></td></tr>
                <tr><td  colspan="4" align="center"><font size="1"><b>विद्युत प्रदाय एवं बिल संबंधी शिकायत / जानकारी के लिये उपभोक्ता सेवा केंद्र के (निःशुल्क ) दूरभाष क्र १९१२ पर २४ घंटे संपर्क किया जा सकता है ।</b></font></td></tr>
                <tr><td width="61%"><font size="1">आई  वी  आर एस क्रमांक :</font><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $IVRSID;?></font></td>
                <td colspan="3"width="39%" align="left"><font size="1">पुराना सर्विस क्रमांक : <?php echo $OLDCONSNO;?></td></tr>
                <tr><td class="hide_top" width="61%"><font size="1">संभाग का नाम :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $DIVISION_LOC_CD;?>,&nbsp;<?php echo $DIVISION_LOC_DESC;?></font></td>
                <td class="hide_top" colspan="3"width="39%" align="left"><font size="1">टैरिफ श्रेणी / बिल माह :<?php echo $TRF_CATG;?>,&nbsp;<?php echo $BILL_MON;?></td></tr>
                <tr><td class="hide_top" width="61%"><font size="1">सर्विस क्रमांक :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $CONNID;?></font></td>
                <td class="hide_top" colspan="3" width="39%" align="left"><font size="1">खपत (युनिट्स ) : </td></tr>
                <tr><td class="hide_top"  width="61%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $CONS_LOC_DESC;?></font></td>
                <td class="hide_top" colspan="3" width="39%" align="left"><font size="1">बिलिंग मांग : <?php echo $CURR_DEMAND;?></td></tr>
                <tr><td class="hide_top"  width="61%"><font size="1">बिल क्रमांक तथा दिनांक :&nbsp;&nbsp;&nbsp;<?php echo $BILL_NO;?>,&nbsp;<?php echo $BILL_ISSUE_DATE;?></font></td>
                <td class="hide_top" colspan="3" width="39%" align="left"><font size="1">नियत तिथी तक देय राशी रुपयों  में : <?php echo $BILL_NET;?></td></tr>

                <tr><td class="hide_top"width="61%"><font size="1">श्री /सुश्री : <?php echo $CONS_NAME_HINDI;?></font></td>
                <td  colspan="3" width="39%" align="center"><font size="1"><b>भुगतान की अंतिम तिथी</b> </td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">पता :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $CONS_ADDH1;?> </font></td>
                <td  colspan="3" width="39%" align="left"><font size="1"><b>चैक हेतु :</b><?php echo $FIRST_CHQ_DT_H;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $CONS_ADDH2;?>,<?php echo $MOB_NO;?></font></td>
                <td  colspan="3" width="39%" align="left"><font size="1"><b>नगद  हेतु :</b> <?php echo $FIRST_CASH_DT_H;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">पोल क्रमांक :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $EXIST_POLE_NO;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;मीटर क्रमांक / प्रदाय फेज : <?php echo $MTR_NO;?> / <?php echo $PHASE1;?> </font></td>
                <td  colspan="3" width="39%" align="center"><font size="1"><b>चालू माह का विवरण </b></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">स्वीकृत / अधिकृत भार :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $LOAD1;?>,<?php echo $LOADUNIT;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;रीडिंग प्रकार :<?php echo $RDG_TYP;?></font></td>
                <td  colspan="3" width="39%" align="left"><font size="1"><b>कुल देयक राशी :</b><?php echo $S_BILL_AMT;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">संविदा मांग / अधिकतम मांग :</font></td>
                <td  colspan="3" width="39%" align="left"><font size="1"><b>राज्य शासन सब्सिडी : </b><?php echo $S_GOVT_SUBSIDY;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">पिछली रिडींग तथा गुणांक :&nbsp;&nbsp;<?php echo $PREV_RDG;?>,<?php echo $MF;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; वर्तमान  रिडींग / दिनांक :<?php echo $CURR_RDG;?> / <?php echo $RDG_DT;?></font></td>
                <td colspan="3" width="39%" align="left"><font size="1"><b>मासिक देयक राशी :</b><?php echo $S_MON_BILL;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">पावर फैक्टर :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;मीटर खपत तथा आंकलीत खपत :<?php echo $CONSMP;?>,<?php echo $ASS_CONSMP;?></font></td>
                <td width="7%" align="left"><font size="1"></td>
                <td width="20%" align="center"><font size="1"><b>राशी गणना विवरण </b></td>
                <td width="12%" align="center"><font size="1"><b>रुपये / पैसे </b></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">कुल खपत :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $TOTCONSMP;?></font></td>
                <td width="7%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1">ऊर्जा प्रभार : </td>
                <td width="12%" align="left"><font size="1"><?php echo $ENERGY_CHRG;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1"></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">नियत प्रभार : </td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $FIXED_CHARGE;?></td></tr>    

                <tr><td class="hide_top" width="61%"><font size="1">वितरण केंद्र :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DCLOC;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">फ्युल कास्ट समायोजन (FCA)</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $FCA;?></td></tr>    

                <tr><td class="hide_top" width="61%"><font size="1">नाम /पता / दूरभाष क्रमांक : <?php echo $DCADD1;?></font></td>
                <td  width="7%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1">विदयुत शुल्क (ड्युटी) :</td>
                <td width="12%" align="left"><font size="1"><?php echo $FCA;?></td></tr>    

                <tr><td class="hide_top" width="61%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DCADD2;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">ऊर्जा विकास उपकर (सेस ): </td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $CESS;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">शिकायत हेतु संपर्क :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $NAME_JE;?></font></td>
                <td width="7%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1">मीटरींग प्रभार :</td>
                <td width="12%" align="left"><font size="1"><?php echo $MTR_RENT;?></td></tr>    

                <tr><td class="hide_top" width="61%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PH_JE1;?></font></td>
                <td class="hide_top"width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">समायोजन / गणना राशी (CCB) :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $ADJ_AMT;?></td></tr>    

                <tr><td class="hide_top" width="61%"><font size="1">मीटर रीडर :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $MTR_READ_TAKEN_BY;?></font></td>
                <td class="hide_top"width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">शामिल सुरक्षा निधी किश्त : </td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $SD_BILLED;?></td></tr>    

                <tr><td class="hide_top" width="61%"><font size="1">सप्लाई के घंटे (औसतं दैनिक विद्युत प्रदाय ):<?php echo $IVRSID;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">केपी / पावर फैक्टर अधिभार : </td>
                <td class="hide_top" width="12%" align="left"><font size="1"></td></tr>       

                <tr><td class="hide_top" width="61%"><font size="1">प्रयोजन :</font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">अन्य प्रभार :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $OTHER_CHRG;?></td></tr>       

                <tr><td class="hide_top" width="61%"><font size="1">बिल आधार :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_TYPE;?></font></td>
                <td width="7%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1">उपभोक्ता द्वारा जमा राशी :</td>
                <td width="12%" align="left"><font size="1"><?php echo $LAST_MONTH_AV;?></td></tr>      

                <tr><td class="hide_top" width="61%"><font size="1">सुरक्षा निधी जो जमा है :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $TOT_SD_HELD;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">सुरक्षा निधी पर ब्याज :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $INST_BAL_ARRS;?></td></tr>      

                <tr><td class="hide_top" width="61%"><font size="1">सुरक्षा निधी जो लेना  है :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $MSGLINE_H;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">कर्मचारी छुट :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $EMP_REBATE;?></td></tr>     
               
                <tr><td class="hide_top" width="61%"><font size="1">विगत माह प्राप्त भुगतान का ब्योरा :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_MON1;?>,&nbsp;&nbsp;&nbsp;<?php echo $RDG_DT1;?>,&nbsp;&nbsp;&nbsp;<?php echo $CURR_RDG1;?>,&nbsp;&nbsp;&nbsp;<?php echo $CONSMP1;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">अग्रिम जमा पर छुट :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $ADV_PAY_INCENT;?></td></tr>  

                <tr><td class="hide_top" width="61%"><font size="1">विगत माह में  खपत  का ब्योरा :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_MON2;?>,&nbsp;&nbsp;&nbsp;<?php echo $RDG_DT2;?>,&nbsp;&nbsp;&nbsp;<?php echo $CURR_RDG2;?>,&nbsp;&nbsp;&nbsp;<?php echo $CONSMP2;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">ऑनलाईन भुगतान पर छुट :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $ONLINE_REBATE;?></td></tr> 

                <tr><td class="hide_top" width="61%"><font size="1">वाचन माह, वाचन की तिथी :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_MON3;?>,&nbsp;&nbsp;&nbsp;<?php echo $RDG_DT3;?>,&nbsp;&nbsp;&nbsp;<?php echo $CURR_RDG3;?>,&nbsp;&nbsp;&nbsp;<?php echo $CONSMP3;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">त्वरित भुगतान पर छुट :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $PROMPT_PAY_INCENT;?></td></tr> 

                <tr><td class="hide_top" width="61%"><font size="1">वाचन (रिडींग ) तथा खपत :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_MON4;?>,&nbsp;&nbsp;&nbsp;<?php echo $RDG_DT4;?>,&nbsp;&nbsp;&nbsp;<?php echo $CURR_RDG4;?>,&nbsp;&nbsp;&nbsp;<?php echo $CONSMP4;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">लॉक क्रेडिट :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $LOCK_CR_AMT;?></td></tr>   

                <tr><td class="hide_top" width="61%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_MON5;?>,&nbsp;&nbsp;&nbsp;<?php echo $RDG_DT5;?>,&nbsp;&nbsp;&nbsp;<?php echo $CURR_RDG5;?>,&nbsp;&nbsp;&nbsp;<?php echo $CONSMP5;?></font></td>
                <td class="hide_top" width="7%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1"> सबसिडी :</td>
                <td class="hide_top" width="12%" align="left"><font size="1"><?php echo $SUBSIDY;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_MON6;?>,&nbsp;&nbsp;&nbsp;<?php echo $RDG_DT6;?>,&nbsp;&nbsp;&nbsp;<?php echo $CURR_RDG6;?>,&nbsp;&nbsp;&nbsp;<?php echo $CONSMP6;?></font></td>
                <td colspan="2" width="20%" align="left"><font size="1">वर्तमान देयक राशी :</td>
                <td width="12%" align="left"><font size="1"><?php echo $CURR_BILL;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1"></font></td>
                <td colspan="2" width="20%" align="left"><font size="1">पिछला बकाया / अधिभार अवशेष :</td>
                <td width="12%" align="left"><font size="1"><?php echo $PREV_BAL;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1"></font></td>
                <td colspan="2" width="20%" align="left"><font size="1">नियत तिथी तक कुल देयक राशी :</td>
                <td width="12%" align="left"><font size="1"><?php echo $BILL_NET;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">वर्तमान बिल का दैनिक औसत है : रु.&nbsp;<?php echo $DAILY_AVG_BILL;?></font></td>
                <td colspan="2" width="20%" align="left"><font size="1">नियत तिथी विलंब भुगतान अधिभार :</td>
                <td width="12%" align="left"><font size="1"><?php echo $SURCHRGE_DUE;?></td></tr>

                <tr><td class="hide_top" width="61%"><font size="1">औसत दैनिक खपत युनिट्स में &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DAILY_AVG_CONSMP;?></font></td>
                <td colspan="2" width="20%" align="left"><font size="1">अधिभार सहित सकल देय राशी :</td>
                <td width="12%" align="left"><font size="1"><?php echo $SURCHRGE_DUE + $BILL_NET;?></td></tr>

                <tr><td colspan="2" width="71%" align="center"><font size="1">असुविधा से बचने के लिये बिल का भुगतान शीघ्र करें एवं अंतिम तिथी तक प्रतीक्षा न करें </font></td>
                
                <td width="17%" align="left"><font size="1">भूल चूक लेनी देनी </td>
                <td width="12%" align="left"><font size="1">कार्यपालन यंत्री </td></tr>

                <tr><td colspan="2" width="71%" align="center"><font size="3"><b>इंदिरा गृह ज्योती योजना </b></font></td>
                <td colspan="2" width="32%" align="left"><font size="1">भुगतान राशी रसीद मुहर सहित </td></tr>

                <tr><td class="hide_top" colspan="2" width="71%" align="center"><font size="1"></font></td>
                <td class="hide_top" colspan="2" width="32%" align="left"><font size="1"></td></tr>

                <!-- <tr><td class="hide_top" colspan="2" width="71%"><font size="1">.</font></td>
                <td class="hide_top" colspan="2" width="32%" align="left"><font size="1"></td></tr> -->

                <tr><td colspan="2" width="71%" align="center"><font size="1">"इंदिरा गृह ज्योती योजना " में  घरेलू श्रेणी के १५० युनिट प्रति माह तक की खपत </font></td>
                <td class="hide_top" colspan="2" width="32%" align="left"><font size="1"></td></tr>

                <tr><td class="hide_top" colspan="2" width="71%" align="center"><font size="1">वाले उपभोक्ता पात्र हैं । १०० युनिट की खपत पर  १०० रु  एवं १०० युनिट से </font></td>
                <td class="hide_top" colspan="2" width="32%" align="left"><font size="1"></td></tr>

                <tr><td class="hide_top" colspan="2" width="71%" align= "center"><font size="1">अधिक की खपत पर निर्धारित दरों के अनुसार वास्तविक राशी देय होगी ।</font></td>
                <td class="hide_top" colspan="2" width="32%" align="left"><font size="1"></td></tr>

                <!-- blank box -->
                <tr><td colspan="4"><font size="1">.</font></td></tr>
                <tr><td class="hide_top" colspan="4"><font size="1">.</font></td></tr>
                <tr><td class="hide_top" colspan="4"><font size="1">.</font></td></tr>
                
                
                
                <!-- blank box end -->
                </table>

                <table align="center" style  height:"35.5mm" >
                <tr><td colspan="4" align="center"><font size="1"><b>मध्यप्रदेश पूर्व क्षेत्र विद्युत वितरण'कंपनी लिमिटेड : विदयुत देयक : अधपन्ना (कार्यालयीन उपयोग हेतु )</b></font></td></tr>

                <tr><td width="25%"><font size="1">सर्विस क्रमांक :</font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"><?php echo $CONNID;?> , <?php echo $CONS_LOC_DESC;?></td>
                <td width="25%" align="left"><font size="1">भुगतान राशी रसीद मुहर सहित</td></tr>

                <tr><td width="25%"><font size="1">बिल क्रमांक व बिल दिनांक :</font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"><?php echo $BILL_NO;?> , <?php echo $BILL_ISSUE_DATE;?></td>
                <td class="hide_top" width="25%" align="left"><font size="1"><?php echo $OLDCONSNO;?></td></tr>

                <tr><td width="25%"><font size="1">बिल माह :</font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"><?php echo $BILL_MON;?></td>
                <td class="hide_top" width="25%" align="left"><font size="1"></td></tr>

                <tr><td width="25%"><font size="1">श्री /सुश्री :</font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"><?php echo $CONS_NAME_H;?></td>
                <td class="hide_top" width="25%" align="left"><font size="1"><?php echo $OLDCONSNO;?></td></tr>

                <tr><td width="25%"><font size="1"><b>भुगतान की अंतिम तिथी</b></font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"></td>
                <td class="hide_top" width="25%" align="left"><font size="1"></td></tr>

                <tr><td width="25%"><font size="1">चैक / नगद हेतु :</font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"><?php echo $FIRST_CHQ_DT_H;?>&nbsp; / &nbsp; <?php echo $FIRST_CASH_DT_H;?></td>
                <td class="hide_top" width="25%" align="left"><font size="1"></td></tr>

                <tr><td width="25%"><font size="1">नियत तिथी तक कुल देयक राशी :</font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"><?php echo $BILL_NET;?></td>
                <td class="hide_top" width="25%" align="left"><font size="1"></td></tr>

                <tr><td width="25%"><font size="1">अधिभार सहित सकल देय राशी :</font></td>
                <td  class="hide_top" colspan="2" width="50%" align="left"><font size="1"><?php echo $SURCHRGE_DUE + $BILL_NET;?></td>
                <td class="hide_top" width="25%" align="left"><font size="1"></td></tr>
                
                
                </table>
                </form>
             
                











                               

            <?php
                }
                        
                           
            ?>

<?php
   }
    }
?>

</body>
                </html>
<script>
    console.log("calling print")
    myFunction();
    console.log("calling print end")
function myFunction() {
  // document.getElementById("fetchDetails").style["display"]="none";
  window.print();
  // setTimeout(function(){ 
  //   document.getElementById("fetchDetails").style["display"]="block";
  //    }, 5000);
      }

</script>