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
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <?php echo display('general_ledger');?>
                    </h4>
                </div>
            </div>
<div id="printArea">
            <table width="99%" align="center" style="margin:5px 5px;" cellpadding="5" cellspacing="5" border="2"> 

                <thead>
                <tr align="center">

                    <td colspan="7"><font size="+1" style="font-family:'Arial'"> <strong><?php echo display('general_ledger_of').' '.$ledger->HeadName.' on '.$dtpFromDate. ' To '  .$dtpToDate;?></strong></font><strong></th></strong>
                </tr>

                <tr>
                    <td height="25"><strong><?php echo display('sl');?></strong></td>
                    <td><strong><?php echo $Trans?"Transaction Date":"Head Code";?></strong></td>
                    <td><strong><?php echo $Trans?"Voucher No":"Head Name";?></strong></td>
                    <?php
                    if($chkIsTransction){
                        ?>
                        <td><strong><?php echo display('particulars')?></strong></td>
                    <?php
                    }
                    ?>
                    <td align="right"><strong><?php echo display('debit');?></strong></td>
                    <td align="right"><strong><?php echo display('credit');?></strong></td>
                    <td align="right"><strong><?php echo display('balance');?></strong></td>
                </tr>
                </thead>
                <tbody>

                <?php
                if($error){
                    ?>

                    <tr>
                        <td height="25"></td>
                        <td></td>
                        <td><?php echo display('no_report')?>.</td>
                        <?php
                        if($chkIsTransction){
                            ?>
                            <td></td>
                            <?php
                        }
                        ?>
                        <td align="right"></td>
                        <td align="right"></td>
						<td align="right"></td>
                    </tr>

                    <?php
                }
                else{
                $TotalCredit=0;
                $CurBalance =$prebalance;
                foreach($HeadName2 as $key=>$data) {
                    ?>
                    <tr>
                        <td height="25"><?php echo ++$key;?></td>
                        <td><?php echo $data->COAID; ?></td>
                        <td><?php echo $data->HeadName; ?></td>
                        <?php
                        if($chkIsTransction){
                            ?>
                            <td><?php echo $data->Narration; ?></td>
                            <?php
                        }
                        ?>

                        <td align="right"><?php echo  number_format($data->Debit,2,'.',','); ?></td>
                        <td align="right"><?php echo  number_format($data->Credit,2,'.',','); ?></td>
                        <?php
                        $TotalDebit += $data->Debit;
                        $CurBalance += $data->Debit;

                        $TotalCredit += $data->Credit;
                        $CurBalance -= $data->Credit;
                        ?>
                        <td align="right"><?php echo  number_format($CurBalance,2,'.',','); ?></td>
                        
                    </tr>
                <?php } ?>

                <tfoot>
                <tr class="table_data">
                    <?php
                        if($chkIsTransction)
							$colspan=4;
						else
							$colspan=3;
                            ?>
                    <td colspan="<?php echo $colspan;?>" align="right"><strong><?php echo display('total')?></strong></td>                    
                    <td align="right"><strong><?php echo number_format($TotalDebit,2,'.',','); ?></strong></td>
                    <td align="right"><strong><?php echo number_format($TotalCredit,2,'.',','); ?></strong></td>
                    <td align="right"><strong><?php echo number_format($CurBalance,2,'.',','); ?></strong></td>
                </tr>
                </tfoot>
                <?php
                }
                ?>
                </tbody>
                <h4>
                    <?php echo display('pre_balance')?> : <?php echo number_format($prebalance,2,'.',','); ?>
                    <br /> <?php echo display('current_balance')?> : <?php echo number_format($CurBalance,2,'.',','); ?>
                </h4>
            </table>
        </div>
            <div class="text-center" id="print" style="margin: 20px">
                <input type="button" class="btn btn-warning" name="btnPrint" id="btnPrint" value="Print" onclick="printDiv();"/>
                
            </div>
        </div>
    </div></div>