<?php


if(isset($_POST['submit'])){
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpurbills");

	
}
    
   
    $connect = mysqli_connect("localhost", "root", "", "jabalpurbills");
    
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        }

 
        		

      
 $query = "SELECT DIVISION_LOC_CD,	DIVISION_LOC_DESC,	LOC_CD,	CONS_NO,	BILL_MON,	
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
 ADV_PAY_INCENT,	ONLINE_REBATE,	PROMPT_PAY_INCENT FROM ndm"; 


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
    .mytable {
      border-collapse: collapse;
      border: 2px  Solid dodgerBlue;
      width: 193mm;
      
    }
    .mytable-head {
      border: 1px solid black;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    .mytable-head td {
      border: 1px solid black;
    }
    .mytable-body {
      border: 1px solid black;
      border-top: 0;
      margin-top: 0;
      padding-top: 0;
      margin-bottom: 0;
      padding-bottom: 0;
    }
    .mytable-body td {
      border: 1px solid black;
      border-top: 0;
    }
    .mytable-footer {
      border: 1px solid black;
      border-top: 0;
      margin-top: 0;
      padding-top: 0;
    }
    .mytable-footer td {
      border: 1px solid black;
      border-top: 0;
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
                $CONS_NO_STUFF = $row[11];
                $BILLMONHINDI = $row[12];
                $BILL_ISSUE_DATE = $row[13];
                $CONS_NAME_H = $row[14];
                $FATH_HUS_NAME_H = $row[15];
                $CONS_ADDH1 = $row[16];
                $CONS_ADDH2 = $row[17];
                $PIN_CODE = $row[18];
                $TELEPHONE = $row[19];
                $MOB_NO = $row[20];
                $EXIST_POLE_NO = $row[21];
                $MTR_NO = $row[22];
                $PHASE1 = $row[23];
                $RDG_DT = $row[24];
                $LOAD1 = $row[25];
                $LOADUNIT = $row[26];
                $RDG_TYP = $row[27];
                $AGRMT_CON_DEM = $row[28];
                $CLOADUNIT = $row[29];
                $MD_KW = $row[30];
                $CURR_RDG = $row[31];
                $PREV_RDG = $row[32];
                $MF = $row[33];
                $AVG_PF = $row[34];
                $CONSMP = $row[35];
                $ASS_CONSMP = $row[36];
                $TOTCONSMP = $row[37];
                $DCLOC = $row[38];
                $DCADD1 = $row[39];
                $DCADD2 = $row[40];
                $DCADD3 = $row[41];
                $DCPINCD = $row[42];
                $DCPHONE = $row[43];
                $TOT_SD_HELD = $row[44];
                $BILL_TYPE = $row[45];
                $SD_DUE = $row[46];
                $DAILY_AVG_BILL = $row[47];
                $DAILY_AVG_CONSMP = $row[48];
                $OLDCONSNO = $row[49];
                $TRF_CATG = $row[50];
                $BILLED_UNIT = $row[51];
                $CURR_DEMAND = $row[52];
                $BILL_NET = $row[53];
                $FIRST_CHQ_DT_H = $row[54];
                $FIRST_CASH_DT_H = $row[55];
                $ENERGY_CHRG = $row[56];
                $FIXED_CHARGE = $row[57];
                $DUTY = $row[58];
                $CESS = $row[59];
                $MTR_RENT = $row[60];
                $ADJ_AMT = $row[61];
                $SD_BILLED = $row[62];
                $WELD_CAP_CHRG = $row[63];
                $PENAL_CHRGS = $row[64];
                $TOD_SUR = $row[65];
                $OTHER_CHRG = $row[66];
                $LAST_MONTH_AV = $row[67];
                $INST_AMT = $row[68];
                $LOAD_FACTOR = $row[69];
                $PWR_SVG_DEV_RBTE = $row[70];
                $LOCK_CR_AMT = $row[71];
                $SUBSIDY = $row[72];
                $CURR_BILL = $row[73];
                $PREV_BAL = $row[74];
                $SURCHRGE_DUE = $row[75];
                $TOTAL_REC_AMT_AFTER_DUE_DT = $row[76];
                $MTR_READ_TAKEN_BY = $row[77];
                $TRFLINE = $row[78];
                $MSGLINE_H = $row[79];
                $BILL_PRD = $row[80];
                $CONS_STA_CD = $row[81];
                $BILL_CORR_FLG = $row[82];
                $BILL_COPY = $row[83];
                $RDG_TYP_CD = $row[84];
                $BILL_TYP_CD = $row[85];
                $CHQ_DSHNRD_FLG = $row[86];
                $REV_CATG_CD = $row[87];
                $LOAD_UNIT_CD = $row[88];
                $SPOT_BILL_FLG = $row[89];
                $INSTL_AMT_BLD = $row[90];
                $INST_BAL_ARRS = $row[91];
                $TRF_CATG_OLD =$row[92];
                $CORR_CITY = $row[93];
                $CONN_TYP_CD = $row[94];
                $MTR_READER = $row[95];
                $BILL_MON1 = $row[96];
                $RDG_DT1 = $row[97];
                $CURR_RDG1 = $row[98];
                $CONSMP1 = $row[99];
                $BILL_MON2 = $row[100];
                $RDG_DT2 = $row[101];
                $CURR_RDG2 = $row[102];
                $CONSMP2 = $row[103];
                $BILL_MON3 = $row[104];
                $RDG_DT3 = $row[105];
                $CURR_RDG3 =$row[106];
                $CONSMP3 = $row[107];
                $BILL_MON4 = $row[108];
                $RDG_DT4 = $row[109];
                $CURR_RDG4 = $row[110];
                $CONSMP4 = $row[111];
                $BILL_MON5 = $row[112];
                $RDG_DT5 = $row[113];
                $CURR_RDG5 = $row[114];
                $CONSMP5 = $row[115];
                $BILL_MON6 = $row[116];
                $RDG_DT6 = $row[117];
                $CURR_RDG6 = $row[118];
                $CONSMP6 = $row[119];
                $PYMT_DT1 = $row[120];
                $CAC_NO1 = $row[121];
                $AMT_PAID1 = $row[122];
                $PYMT_MODE1 = $row[123];
                $WINDOW_NO1 = $row[124];
                $PUNCH_DT1 = $row[125];
                $PYMT_DT2 = $row[126];
                $CAC_NO2 = $row[127];
                $AMT_PAID2 = $row[128];
                $PYMT_MODE2 = $row[129];
                $WINDOW_NO2 = $row[130];
                $PUNCH_DT2 = $row[131];
                $PYMT_DT3 = $row[132];
                $CAC_NO3 = $row[133];
                $AMT_PAID3 = $row[134];
                $PYMT_MODE3 = $row[135];
                $WINDOW_NO3 = $row[136];
                $PUNCH_DT3 = $row[137];
                $NAME_JE = $row[138];
                $PH_JE1 = $row[139];
                $PH_JE2 = $row[140];
                $NAME_AE = $row[141];
                $PH_AE1 = $row[142];
                $PH_AE2 = $row[143];
                $BILL_NO = $row[144];
                $FCA =$row[145];
                $EMP_FREE_FCA = $row[146];
                $FCA_RATE = $row[147];
                $CONS_NAME_HINDI = $row[148];
                $FATH_HUS_NAME_HINDI = $row[149];
                $CONS_ADD1_HINDI = $row[150];
                $CONS_ADD2_HINDI = $row[151];
                $QR_CODE = $row[152];
                $ADV_PAY_INCENT = $row[153];
                $ONLINE_REBATE = $row[154];
                $PROMPT_PAY_INCENT = $row[155];


                ?>
                <!-- style="color: dodgerBlue" -->
                <form action="" method="POST" id="myfrm"> 
                <table class ="mytable mytable-head" align="center">
                <tr><td  colspan="7" align="center"><font size="1"><b>यह बिल केवल सामान्य खपत के लिए है - पेनाल्टी / सतर्कता इकाई से संबन्धित वसूली हेतु पृथक फार्म निर्धारित है |</b></font></td></tr>
                <tr><td colspan="7" align="center"><font size="2"><b>मध्यप्रदेश मध्य क्षेत्र  विदयुत  वितरण कंपनी  लिमिटेड :गैर घरेलु विदयुत देयक </b> </font></td></tr>
                <tr><td class="hide_top" colspan="7" align="center"><font size="1"><b>( मध्यप्रदेश शासन का उपक्रम )</b></font></td></tr>
            
                <tr><td colspan="4" width="60%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;आई  वी  आर एस क्रमांक :</font><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $IVRSID;?></font></td>
                <td colspan="2"width="20%" align="left"><font size="1">पुराना सर्विस क्रमांक : </td>
                <td width="20%" align="left"><font size="1"><?php echo $OLDCONSNO;?></td></tr>

                <tr><td colspan="4" width="60%"><font size="1">संभाग का नाम :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $DIVISION_LOC_CD;?>,&nbsp;<?php echo $DIVISION_LOC_DESC;?></font></td>
                <td width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1">टैरिफ श्रेणी :</td>
                <td width="20%" align="left"><font size="1"><?php echo $TRF_CATG;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="60%"><font size="1">सर्विस क्रमांक :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $CONNID;?>&nbsp;&nbsp;<?php echo $CONS_LOC_DESC;?> </font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1">माह :</td>
                <td width="20%" align="left"><font size="1"><?php echo $BILL_MON;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="60%"><font size="1">बिल क्रमांक : :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_NO;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; बिल दिनांक : <?php echo $BILL_ISSUE_DATE;?> </font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1">बिलिंग खपत (यु) :</td>
                <td width="20%" align="left"><font size="1"><?php echo $BILLED_UNIT;?></td></tr>

                <tr><td colspan="4" width="60%"><font size="1">श्री / सुश्री :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $CONS_NAME_H;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1">बिलिंग माँग :</td>
                <td width="20%" align="left"><font size="1"><?php echo $CURR_DEMAND;?></td></tr>

                <tr><td colspan="4" width="60%"><font size="1">पता  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $CONS_ADDH1;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1">नियत तिथी तक</td>
                <td width="20%" align="left"><font size="1"></td></tr>

                <tr><td class="hide_top" colspan="4" width="60%"><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $CONS_ADDH2;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="15%" align="left"><font size="1">देय राशी रुपयों मे :</td>
                <td class="hide_top" width="20%" align="left"><font size="1"><?php echo $BILL_NET;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="60%"><font size="1"></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td colspan="2" width="15%" align="center"><font size="1">भुगतान की अंतिम तिथी :</td></tr>

                
                <tr><td class="hide_top" colspan="4" width="60%"><font size="1"></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1">चेक हेतु :</td>
                <td width="20%" align="left"><font size="1">नगद हेतु :</td></tr>

                <tr><td  colspan="4" width="60%"><font size="1">फोन नं : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $MOB_NO;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; मो. :<?php echo $MOB_NO;?> </font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1"><?php echo $FIRST_CHQ_DT_H;?></td>
                <td width="20%" align="left"><font size="1"><?php echo $FIRST_CASH_DT_H;?></td></tr>

                <tr><td colspan="4" width="60%"><font size="1">पोल क्रमांक :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $EXIST_POLE_NO;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="15%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1"></td></tr>

                <tr><td  class="hide_top" colspan="4" width="60%"><font size="1">मीटर क्रमांक :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $MTR_NO;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;प्रदाय फेज:<?php echo $PHASE1;?></font></td>
                <td colspan="3"  width="5%" align="center"><font size="1">बिजली की बचत कीजिये </td></tr>

                <tr><td colspan="4"  class="hide_top"  width="60%"><font size="1">रीडिंग प्रकार  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $RDG_TYP;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;संविदा मांग : </font></td>
                <td colspan="3"    width="60%"><font size="1">अधिकतम मांग :</font></td></tr>
                </table>

                <table class="mytable mytable-body" align="center">
                <tr><td><font size="1">वर्तमान रीडिंग :</font></td>
                <td><font size="1">पिछली रीडिंग :</font></td>
                <td><font size="1">गुणांक  :</font></td>
                <td><font size="1">पावर फ्याक्टर :</font></td>
                <td><font size="1">मीटर खपत  :</font></td>
                <td><font size="1">अंकलीत खपत   :</font></td>
                <td><font size="1">कुल खपत  :</font></td></tr>

                <tr><td><font size="1"><?php echo $CURR_RDG;?></font></td>
                <td><font size="1"><?php echo $PREV_RDG;?></font></td>
                <td><font size="1"><?php echo $MF;?></font></td>
                <td><font size="1"><?php echo $AVG_PF;?></font></td>
                <td><font size="1"><?php echo $CONSMP;?></font></td>
                <td><font size="1"><?php echo $ASS_CONSMP;?></font></td>
                <td><font size="1"><?php echo $TOTCONSMP;?></font></td></tr>

                <tr><td colspan="7" width="100%" align="center"><font size="1">टी ओ डी खपत </font></td></tr>
                </table>



                <table class="mytable mytable-body" align="center">
                <tr><td colspan="4" width="55%"><font size="1">वितरण केंद्र : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DCLOC;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1">राशी गणना विवरण </td>
                <td width="20%" align="left"><font size="1">रुपये / पैसे </td></tr>

                <tr><td colspan="4" width="55%"><font size="1">नाम / पता / फोन : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DCADD1;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1">.</td>
                <td width="20%" align="left"><font size="1">ऊर्जा प्रभार : </td>
                <td width="20%" align="left"><font size="1"><?php echo $ENERGY_CHRG;?></td></tr>

                <tr><td  class="hide_top" colspan="4" width="55%"><font size="1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DCADD2;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">नियत प्रभार : </td>
                <td class="hide_top" width="20%" align="left"><font size="1"><?php echo $FIXED_CHARGE;?></td></tr>

                <tr><td  class="hide_top" colspan="4" width="55%"><font size="1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DCADD3;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1">विद्युत शुल्क (ड्यूटी) </td>
                <td width="20%" align="left"><font size="1"><?php echo $DUTY;?></td></tr>

                <tr><td  class="hide_top" colspan="4" width="55%"><font size="1"></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">ऊर्जा विकास उपकार सेस : </td>
                <td class="hide_top" width="20%" align="left"><font size="1"><?php echo $CESS;?></td></tr>

                <tr><td colspan="4" width="55%"><font size="1"><b>शिकायत हेतु संपर्क</b> </font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td width="20%" align="left"><font size="1">मीटर किराया : </td>
                <td width="20%" align="left"><font size="1"><?php echo $MTR_RENT;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1">क श्री कनिष्ठ अभियंता से :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $NAME_JE;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">समायोजन / गणना :(CCB)</td>
                <td class="hide_top"width="20%" align="left"><font size="1"><?php echo $ADJ_AMT;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1">दूरभाष क्रमांक  एवम :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PH_JE1;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">शामिल सुरक्षा निधि किश्त </td>
                <td class="hide_top"width="20%" align="left"><font size="1"><?php echo $SD_BILLED;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1"><b>ख. सात दिवस मे शिकायत का निराकरण न होने पर</b></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">ऑनलाइन बिल भुगतान की छुट </td>
                <td class="hide_top"width="20%" align="left"><font size="1"><?php echo $ONLINE_REBATE;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1">श्री  सहायक / कार्यपालन अभियंता से &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $NAME_AE;?> </font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">पावर फैक्टर अधिभार  </td>
                <td class="hide_top"width="20%" align="left"><font size="1"><?php echo $AVG_PF;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1">दूरभाष क्रमांक पर संपर्क साधे : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $PH_AE1;?></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">पीनल चार्ज </td>
                <td class="hide_top"width="20%" align="left"><font size="1"><?php echo $PENAL_CHRGS;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1"></font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">टी ओ डी सरचार्ज </td>
                <td class="hide_top"width="20%" align="left"><font size="1"><?php echo $TOD_SUR;?> </td></tr>

                <tr><td colspan="4" width="55%"><font size="1">प्रयोजन : सुरक्षा निधी जो जमा है :</font></td>
                <td class="hide_top" width="5%" align="left"><font size="1"></td>
                <td class="hide_top" width="20%" align="left"><font size="1">अन्य प्रभार </td>
                <td class="hide_top"width="20%" align="left"><font size="1"><?php echo $OTHER_CHRG;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1">बिल आधार :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $BILL_TYPE;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सुरक्षा निधी जो लेना है :<?php echo $MSGLINE_H;?></font></td>
                <td  width="5%" align="left"><font size="1"></td>
                <td  width="20%" align="left"><font size="1">उपभोक्ता द्वारा जमा राशी : </td>
                <td  width="20%" align="left"><font size="1"><?php echo $LAST_MONTH_AV;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1">विगत माह किए गए भुगतान का ब्योरा :</font></td>
                <td  class="hide_top"width="5%" align="left"><font size="1"></td>
                <td  class="hide_top"width="20%" align="left"><font size="1">सुरक्षा निधि / अग्रीम जमा पर व्याज  : </td>
                <td  class="hide_top"width="20%" align="left"><font size="1"><?php echo $INST_BAL_ARRS;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1"></font></td>
                <td  class="hide_top"width="5%" align="left"><font size="1"></td>
                <td  class="hide_top"width="20%" align="left"><font size="1">लोड फैक्टर रियायत : </td>
                <td  class="hide_top"width="20%" align="left"><font size="1"><?php echo $PWR_SVG_DEV_RBTE;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1"></font></td>
                <td  class="hide_top"width="5%" align="left"><font size="1"></td>
                <td  class="hide_top"width="20%" align="left"><font size="1">लॉक क्रेडिट : </td>
                <td  class="hide_top"width="20%" align="left"><font size="1"><?php echo $LOCK_CR_AMT;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1"></font></td>
                <td  class="hide_top"width="5%" align="left"><font size="1"></td>
                <td  class="hide_top" width="20%" align="left"><font size="1">सबसिडी : </td>
                <td  class="hide_top"width="20%" align="left"><font size="1"><?php echo $SUBSIDY;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1"></font></td>
                <td  colspan="2" width="25%" align="left"><font size="1">वर्तमान देयक राशी  : </td>
                <td  width="20%" align="left"><font size="1"><?php echo $CURR_BILL;?></td></tr>

                <tr><td class="hide_top" colspan="4" width="55%"><font size="1">विगत माहों मे खपत का ब्योरा <?php echo $MSGLINE_H;?></font></td>
                <td  colspan="2" width="25%" align="left"><font size="1">पिछला बकाया / अधिभार अवशेष : </td>
                <td  width="20%" align="left"><font size="1"><?php echo $PREV_BAL;?></td></tr>
                </table>

                <table class="mytable mytable-body" align="center">
                <tr><td width="13%"><font size="1">वाचन माह </font></td>
                <td width="14%"><font size="1">वाचन की तिथी </font></td>
                <td width="14%"><font size="1">वाचन (रीडिंग)  </font></td>
                <td width="14%"><font size="1">खपत </font></td>
                <td  colspan="2" align="left"><font size="1">नियत तिथी तक कुल देयक राशी : </td>
                <td  width="20%" align="left"><font size="1"><?php echo $BILL_NET;?></td></tr>

                



                <tr><td><font size="1"><?php echo $BILL_MON1;?></font></td>
                <td><font size="1"><?php echo $RDG_DT1;?></font></td>
                <td><font size="1"><?php echo $CURR_RDG1;?></font></td>
                <td><font size="1"><?php echo $CONSMP1;?></font></td>
                <td  colspan="2" width="25%" align="left"><font size="1">नियत तिथी विलंब भुगताम अधिभार  : </td>
                <td  width="20%" align="left"><font size="1"><?php echo $SURCHRGE_DUE;?></td></tr>

                <tr><td class="hide_top"><font size="1"><?php echo $BILL_MON2;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $RDG_DT2;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CURR_RDG2;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CONSMP2;?></font></td>
                <td  colspan="2" width="25%" align="left"><font size="1">अधिभार सहित सकल देय राशी : </td>
                <td  width="20%" align="left"><font size="1"><?php echo $SURCHRGE_DUE + $BILL_NET;?></td></tr>

                <tr><td class="hide_top"><font size="1"><?php echo $BILL_MON3;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $RDG_DT3;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CURR_RDG3;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CONSMP3;?></font></td>
                <td  colspan="2" width="25%" align="left"><font size="1"> </td>
                <td  width="20%" align="left"><font size="1"> </td></tr>

                <tr><td class="hide_top"><font size="1"><?php echo $BILL_MON4;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $RDG_DT4;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CURR_RDG4;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CONSMP4;?></font></td>
                <td  class="hide_top" colspan="2" width="25%" align="left"><font size="1"></td>
                <td  class="hide_top" width="20%" align="left"><font size="1"> </td></tr>

                <tr><td class="hide_top"><font size="1"><?php echo $BILL_MON5;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $RDG_DT5;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CURR_RDG5;?></font></td>
                <td class="hide_top"><font size="1"><?php echo $CONSMP5;?></font></td>
                <td class="hide_top" colspan="2" width="25%" align="left"><font size="1"> </td>
                <td class="hide_top" width="20%" align="left"><font size="1"> </td></tr>

                <tr><td colspan="4"><font size="1">वर्तमान बिल का दैनिक औसत रु &nbsp;&nbsp;<?php echo $DAILY_AVG_BILL;?>&nbsp;&nbsp; है ।   </font></td>
                <td class="hide_top" colspan="2" width="20%" align="left"><font size="1"> </td>
                <td class="hide_top"  width="20%" align="left"><font size="1"> </td></tr>

                <tr><td colspan="4"><font size="1">औसत दैनिक खपत &nbsp;&nbsp;<?php echo $DAILY_AVG_CONSMP;?>&nbsp;&nbsp; यूनिट है ।  </font></td>
                <td class="hide_top" colspan="2" width="25%" align="left"><font size="1"> </td>
                <td class="hide_top" width="20%" align="left"><font size="1"> </td></tr>


                <tr><td  colspan="7"><font size="1" color="white">.</font></td></tr>
                <tr><td  class="hide_top" colspan="7"><font size="1" color="white">.</font></td></tr>
               
                </table>

                <table class="mytable mytable-footer" align="center">
                <tr><td  colspan="7" align="center"><font size="1"><b>मध्य प्रदेश मध्य क्षेत्र विद्युत वितरण कंपनी लिमिटेड : विद्युत देयक : अप पन्ना </b></font></td></tr>
                <tr><td colspan="2"><font size="0.8">बिल अवधि :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $BILL_PRD;?>  </font></td>
                <td colspan="2" width="25%" align="left"><font size="0.8">बिल क्रमांक :<?php echo $BILL_NO;?> </td>
                <td   colspan="3" width="20%" align="left"><font size="0.8"></td></tr>
               
               

                <tr><td colspan="4"><font size="0.8">सर्विस क्रमांक : &nbsp;&nbsp;&nbsp; <?php echo $CONNID;?> </font></td>
                <td  class="hide_top" colspan="3" width="20%" align="left"><font size="0.8"> </td></tr>

                <tr><td colspan="4"><font size="0.8">उपभोक्ता नाम : &nbsp;&nbsp;&nbsp; <?php echo $CONS_NAME_H;?> </font></td>
                <td  class="hide_top" colspan="3" width="20%" align="left"><font size="0.8"> </td></tr>

                <tr><td colspan="4" align="center" ><font size="0.8"><b>भुगतान की अंतिम तिथी </b></font></td>
                <td  class="hide_top" colspan="3" width="20%" align="left"><font size="0.8"> </td></tr>

                <tr><td colspan="3"><font size="0.8">चेक हेतु : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $FIRST_CHQ_DT_H;?> </font></td>
                <td  width="25%" align="left"><font size="0.8"> नगद हेतु : &nbsp;&nbsp;&nbsp; <?php echo $FIRST_CASH_DT_H;?></td>
                <td  class="hide_top" colspan="3" width="20%" align="left"><font size="0.8"> </td></tr>

                <tr><td colspan="3"><font size="0.8">नियत तिथी तक कुल देयक राशी : <?php echo $BILL_NET;?>  </font></td>
                <td  width="25%" align="left"><font size="0.8"> </td>
                <td  class="hide_top" colspan="3" width="20%" align="left"><font size="0.8"> </td></tr>

                
                <tr><td colspan="3"><font size="0.8">अधिभार सहित सकल देयक राशी : <?php echo $SURCHRGE_DUE + $BILL_NET;?> </font></td>
                <td  width="25%" align="left"><font size="0.8"> </td>
                <td  class="hide_top" colspan="3" width="20%" align="left"><font size="0.8"> </td></tr>
                </table>




                
                   

                

                

                
                
                
                <!-- blank box end -->
                

               
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