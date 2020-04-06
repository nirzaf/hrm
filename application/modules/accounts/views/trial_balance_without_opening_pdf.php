<!-- Printable area start -->
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
<!-- Printable area end -->


<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4></h4>
                </div>
            </div>
            <div id="printArea">
                <div class="panel-body">
                <table width="100%" class="table_boxnew" cellpadding="5" cellspacing="0">
                <tr>
                 <td colspan="4" align="center">
                <h3 style="font-size:18px">Trial Balance<br/>
        As On <?php echo $dtpFromDate; ?> To <?php echo $dtpToDate;?></h3></td></tr>
                <tr class="table_head">
                <td width="20%" align="center" style="border-left: solid 1px #000; border-top: solid 1px #000;"><strong>Accounts Code</strong></td>
                <td width="50%" align="center" style="border-left: solid 1px #000; border-top: solid 1px #000;"><strong>Accounts Name</strong></td>
                <td width="15%" align="center" style="border-left: solid 1px #000; border-top: solid 1px #000;"><strong>Debit</strong></td>
                <td width="15%" align="center" style="border-left: solid 1px #000; border-top: solid 1px #000; border-right: solid 1px #000;"><strong>Credit</strong></td>
                </tr>
        <?php
            $TotalCredit=0;
          $TotalDebit=0;  
          $k=0;
            for($i=0;$i<count($oResultTr);$i++)
          {
            $COAID=$oResultTr[$i]['HeadCode'];
            
              $sql="SELECT SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit FROM acc_transaction WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' ";
            
          

            $q1=$this->db->query($sql);
            $oResultTrial = $q1->row();


            $bg=$k&1?"#FFFFFF":"#E7E0EE";
            if($oResultTrial->Credit+$oResultTrial->Debit>0)
            {
              $k++; ?>
                <tr class="table_data">
                  <td  align="left" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><a href="javascript:"><?php echo $oResultTr[$i]['HeadCode'];?>
                   </a>
                  </td>
                  <td  align="left" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><?php echo $oResultTr[$i]['HeadName'];?></td>
                  <?php
            if($oResultTrial->Debit>$oResultTrial->Credit)
          {
          ?>
                  <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><?php 
            $TotalDebit += $oResultTrial->Debit-$oResultTrial->Credit;
           echo number_format($oResultTrial->Debit-$oResultTrial->Credit,2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-right: solid 1px #000; border-top: solid 1px #000;"><?php
           echo number_format('0.00',2);?></td>
                   <?php
          }
          else
          {
          ?>
                     <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><?php 
           echo number_format('0.00',2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-right: solid 1px #000; border-top: solid 1px #000;"><?php 
            $TotalCredit += $oResultTrial->Credit-$oResultTrial->Debit;
           echo number_format($oResultTrial->Credit-$oResultTrial->Debit,2);?></td>
                   <?php
          }
          ?>
                </tr>
                <?php
            }
          } 
          
          for($i=0;$i<count($oResultInEx);$i++)
          {
            $COAID=$oResultInEx[$i]['HeadCode'];
            
              $sql="SELECT SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit FROM acc_transaction WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' ";
          

            $q2=$this->db->query($sql);
            $oResultTrial = $q2->row();

            $bg=$k&1?"#FFFFFF":"#E7E0EE";
            if($oResultTrial->Credit+$oResultTrial->Debit>0)
            {
              $k++; ?>
                <tr class="table_data">
                  <td  align="left" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><a href="javascript:"><?php echo $oResultInEx[$i]['HeadCode'];?>
                   </a>
                  </td>
                  <td  align="left" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><?php echo $oResultInEx[$i]['HeadName'];?></td>
                  <?php
            if($oResultTrial->Debit>$oResultTrial->Credit)
          {
          ?>
                  <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><?php 
            $TotalDebit += $oResultTrial->Debit-$oResultTrial->Credit;
           echo number_format($oResultTrial->Debit-$oResultTrial->Credit,2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-right: solid 1px #000; border-top: solid 1px #000;"><?php
           echo number_format('0.00',2);?></td>
                   <?php
          }
          else
          {
          ?>
                     <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-top: solid 1px #000;"><?php 
           echo number_format('0.00',2);
           ?></td>
                  <td  align="right" bgcolor="<?php echo $bg;?>" style="border-left: solid 1px #000; border-right: solid 1px #000; border-top: solid 1px #000;"><?php 
            $TotalCredit += $oResultTrial->Credit-$oResultTrial->Debit;
           echo number_format($oResultTrial->Credit-$oResultTrial->Debit,2);?></td>
                   <?php
          }
          ?>
                </tr>
                <?php
            }
          } 
        ?>
                <tr class="table_head">
                  <td colspan="2" align="right" style="border-left: solid 1px #000; border-bottom: solid 1px #000; border-top: solid 1px #000;"><strong>Total</strong></td>
                  <td align="right" style="border-left: solid 1px #000; border-bottom: solid 1px #000; border-top: solid 1px #000;"><strong><?php echo number_format($TotalDebit); ?></strong></td>
                  <td align="right" style="border-left: solid 1px #000; border-bottom: solid 1px #000; border-right: solid 1px #000; border-top: solid 1px #000;"><strong><?php echo number_format( $TotalCredit,2); ?></strong></td>
                </tr>
                 <tr>
                  <td colspan="4" align="center">&nbsp;</td>
                </tr>
                 <tr>
                  <td colspan="4" align="center">
                    <table width="100%" cellpadding="1" cellspacing="20" style="margin-top: 50px">
                      <tr>
                          <td width="20%" style="border-top: solid 1px #000;" align="center">Prepared By</td>
                            <td width="20%" style="border-top: solid 1px #000;" align="center">Accounts Offical</td>
                            <td  width="20%" style="border-top: solid 1px #000;" align='center'>Chairman</td>
                        </tr>
                    </table>
                  </td>
                </tr>
            </table>
      
                </div>
            </div>
        </div>
    </div>
</div>