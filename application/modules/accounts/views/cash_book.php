<script type="text/javascript">
    function printDiv() {
        var divName = "printArea";
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        // document.body.style.marginTop="-45px";
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<?php
include ('Class/CConManager.php');
include ('Class/Ccommon.php');
include ('Class/CResult.php');
include ('Class/CAccount.php');
?>

<?php
if(isset($_POST['btnSave']))
{

    $oAccount=new CAccount();
    //$oCommon=new CCommon();
    $oResult=new CResult();
    $Semester='';
    $Department='';

    if(isset($_POST['cmbSemester']))
        $Semester=$_POST['cmbSemester'];
    if(isset($_POST['cmbDepartment']))
        $Department=$_POST['cmbDepartment'];

    $HeadCode=$_POST['txtCode'];
    $HeadName=$_POST['txtName'];
    $FromDate=$_POST['dtpFromDate'];
    $ToDate=$_POST['dtpToDate'];


    $sql="SELECT SUM(Debit) Debit, SUM(Credit) Credit, IsAppove, COAID FROM acc_transaction
              WHERE VDate < '$FromDate' AND COAID LIKE '$HeadCode%' AND IsAppove =1 ";
    $sql.="GROUP BY IsAppove, COAID";
    $oResult=$oAccount->SqlQuery($sql);
    $PreBalance=0;

    if($oResult->num_rows>0)
    {
        $PreBalance=$oResult->row['Debit'];
        $PreBalance=$PreBalance- $oResult->row['Credit'];
    }

    $sql="SELECT acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, acc_transaction.Debit, acc_transaction.Credit, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration 
		FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode
        WHERE acc_transaction.IsAppove =1 AND acc_transaction.VDate BETWEEN '$FromDate' AND '$ToDate' AND acc_transaction.COAID LIKE '$HeadCode%' ";

   /* $sql="SELECT acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration
              FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode
			  WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '$FromDate' AND '$ToDate' AND VNo in (SELECT VNo FROM acc_transaction acc WHERE acc.COAID LIKE '$HeadCode%' AND acc.IsAppove =1 AND acc.VDate BETWEEN '$FromDate' AND '$ToDate') ";*/
  
    $sql.="GROUP BY acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration
               HAVING SUM(acc_transaction.Debit)-SUM(acc_transaction.Credit)<>0
               ORDER BY  acc_transaction.VDate, acc_transaction.VNo";

    $oResult=$oAccount->SqlQuery($sql);
    //echo $sql;

   
}
?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <?php echo display('cash_book')?>
                    </h4>
                </div>
            </div>
            <div class="panel-body">
                <form name="form1" id="form1" action="" method="post" enctype="multipart/form-data">
                <div class="row" id="">
                    <div class="col-sm-6">

                        <input type="hidden" id="txtCode" name="txtCode" value="1020101"/>
                        <input type="hidden"  id="txtName" name="txtName" size="40" value="Cash In Hand"/>

                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('from_date') ?><?php echo display('from_date')?></label>
                            <div class="col-sm-8">
                                <input type="text" name="dtpFromDate" value="" placeholder="<?php echo display('date') ?>" class="datepicker form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('to_date') ?><?php echo display('to_date')?></label>
                            <div class="col-sm-8">
                                <input type="text"  name="dtpToDate" value="" placeholder="<?php echo display('date') ?>" class="datepicker form-control">
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button type="submit" name="btnSave" class="btn btn-success w-md m-b-5"><?php echo display('find') ?></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
            <div class="panel-body"  id="printArea">
                <tr align="center">
                    <td id="ReportName" style="font:'Times New Roman', Times, serif; font-size:20px;"><b><?php echo display('cash_book_voucher')?></b></td>
                </tr>
                <div>

                    <table width="100%" class="table_boxnew" cellpadding="6" cellspacing="1" style="line-height:120%;">
                        <tr>
                        <tr align="center">
                            <td colspan="7"><font size="+1" style="font-family:'Arial'"> <strong><?php echo display('cash_book_report_on')?> <?php echo $FromDate; ?> <?php echo display('to')?> <?php echo $ToDate;?></strong></font><strong>
                            </th>
                            </strong></tr>
                        <tr  align="left">
                            <td colspan="8"><font style="font-family:'Arial';">&nbsp;&nbsp;</font></td>
                        </tr>
                        <tr class="table_data">
                            <td width="3%" >&nbsp;</td>
                            <td width="10%">&nbsp;</td>
                            <td width="14%">&nbsp;</td>
                            <td width="5%" >&nbsp;</td>
                            <td width="35%" >&nbsp;</td>
                            <td colspan="2" align="right"><strong><?php echo display('opening_balance')?></strong></td>
                            <td width="11%" align="right"><?php echo number_format($PreBalance,2,'.',','); ?></td>
                        </tr>
                        <tr class="table_head">
                            <td height="25"><strong><?php echo display('sl')?></strong></td>
                            <td align="center"><strong><?php echo display('transaction_date')?></strong></td>
                            <td align="center" ><strong><?php echo display('voucher_no')?></strong></td>
                            <td align="center"><strong><?php echo display('voucher_type')?></strong></td>
                            <td align="center"><strong><?php echo display('particulars')?></strong></td>
                            <td width="11%" align="right"><strong><?php echo display('debit')?></strong></td>
                            <td width="11%" align="right"><strong><?php echo display('credit')?></strong></td>
                            <td align="right" ><strong><?php echo display('balance')?></strong></td>
                        </tr>
                        <?php
                        $TotalCredit=0;
                        $TotalDebit=0;
                        $VNo="";
                        $CountingNo=1;
                        for($i=0;$i<$oResult->num_rows;$i++)
                        {
                            if($i&1)
                                $bg="#F8F8F8";
                            else
                                $bg="#FFFFFF";
                            ?>
                            <tr class="table_data">
                                <?php
                                if($VNo!=$oResult->rows[$i]['VNo'])
                                {
                                    ?>
                                    <td  height="25" bgcolor="<?php echo $bg; ?>"><?php echo $CountingNo++;?></td>
                                    <td bgcolor="<?php echo $bg; ?>"><?php echo substr($oResult->rows[$i]['VDate'],0,10);?></td>
                                    <td align="left" bgcolor="<?php echo $bg; ?>"><?php
                                        if($oResult->rows[$i]['Vtype']=="MR")
                                            echo "<a href=\"?Acc=MoneyRecept&VNo=".base64_encode($oResult->rows[$i]['VNo'])."\" target='_blank'><img src='ic/page.png' alt='Money Receipt Reprint' title='Money Receipt Reprint'></a> &nbsp;";
                                        else if($oResult->rows[$i]['Vtype']=="AVR")
                                        {
                                            $sql="SELECT * FROM advising_register WHERE VNo='".$oResult->rows[$i]['VNo']."'";
                                            $oResultRegi=$oAccount->SqlQuery($sql);
//                                            echo "<a href=\"?Basic=AdvisingReceipt&RegId=".base64_encode($oResultRegi->row['AdvRegId'])."\" target='_blank'>
//                                                     <i class='ti-bag'></i>
//                                                   </a>&nbsp;";
                                        }
                                        else if($oResult->rows[$i]['Vtype']=="AD")
                                        {
//                                            echo "<a href=\"?Student=AdmissionReport&InvNo==".base64_encode($oResult->rows[$i]['VNo'])."\" target='_blank'>
//                                                   <i class='ti-bag'></i>
//                                                  </a>&nbsp;";
                                        }
                                        /* if($oResult->rows[$i]['Vtype']=="MR")
                                             echo "<a href=\"?Acc=MR&VNo=".base64_encode($oResult->rows[$i]['VNo'])."\" target='_blank'>".$oResult->rows[$i]['VNo']."</a>";
                                      else */
                                        echo $oResult->rows[$i]['VNo'];
                                        ?></td>
                                       <td align="justify" bgcolor="<?php echo $bg; ?>"><?php echo $oResult->rows[$i]['Vtype'];
                                            ?>
<!--                                            <div id="HidePODetail">--><?php //echo $oResult->rows[$i]['Narration'];
//                                                ?>
<!--                                            </div>-->

                                    </td>

                                    <?php
                                    $VNo=$oResult->rows[$i]['VNo'];
                                }
                                else
                                {
                                    ?>
                                    <td bgcolor="<?php echo $bg; ?>" colspan="4">&nbsp;</td>
                                    <?php
                                }
                                ?>
                                <td align="justify" bgcolor="<?php echo $bg; ?>"><?php echo $oResult->rows[$i]['HeadName'];?></td>
                                <td align="right" bgcolor="<?php echo $bg; ?>"><?php
                                    $TotalDebit += $oResult->rows[$i]['Credit'];
                                    $PreBalance += $oResult->rows[$i]['Credit'];
                                    echo number_format($oResult->rows[$i]['Credit'],2,'.',',');?></td>
                                <td  align="right" bgcolor="<?php echo $bg; ?>"><?php
                                    $TotalCredit += $oResult->rows[$i]['Debit'];
                                    $PreBalance -= $oResult->rows[$i]['Debit'];
                                    echo number_format($oResult->rows[$i]['Debit'],2,'.',',');?></td>
                                <td align="right" bgcolor="<?php echo $bg; ?>"><?php echo number_format($PreBalance,2,'.',','); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <tr class="table_data" style="color:#FFF">
                            <td bgcolor="green">&nbsp;</td>
                            <td align="center" bgcolor="green">&nbsp;</td>
                            <td align="center" bgcolor="green">&nbsp;</td>
                            <td align="center" bgcolor="green">&nbsp;</td>
                            <td  align="right" bgcolor="green"><strong>Total</strong></td>
                            <td  align="right" bgcolor="green"><?php echo number_format($TotalDebit,2,'.',','); ?></td>
                            <td  align="right" bgcolor="green"><?php echo number_format($TotalCredit,2,'.',','); ?></td>
                            <td  align="right" bgcolor="green"><?php echo number_format($PreBalance,2,'.',','); ?></td>
                        </tr>

                    </table>

                   
                </div>

            </div>
            <div class="text-center" id="print" style="margin: 20px">
                        <input type="button" class="btn btn-warning" name="btnPrint" id="btnPrint" value="Print" onclick="printDiv();"/>
                    </div>
        </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    
     $(function(){
        $(".datepicker").datepicker({ dateFormat:'yy-mm-dd' });
       
    });
</script>











