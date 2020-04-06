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
                  <div>
                      <table width="100%" class="table_boxnew" style="padding: 5px">
                        <tr>
                            <td colspan="3" align="center"><h2 style="margin: 0;"><?php echo display('cash_flow_statement');?>  </h2></td>
                        </tr>
                        <tr class="table_head">
                            <td colspan="3" align="center" style="padding-left:10px"><b>On <?php echo $dtpFromDate; ?> To <?php echo $dtpToDate;?></b></td>
                        </tr>
                        <tr class="table_head">
                            <td width="73%" height="29" align="center" style="padding-left:10px; border:1px solid #000;"><b><?php echo display('particulars');?></b></td>
                            <td width="2%">&nbsp;</td>
                            <td width="30%" align="right" style="padding-left:10px; padding-right:10px;  border:1px solid #000;;"><b><?php echo display('amount_in_Dollar');?></b></td>
                        </tr>
                         <tr class="table_head">
                          <td colspan="3" style="padding-left:10px"><strong><?php echo display('opening_cash_and_equivalent');?>:</strong></td>
                        </tr>
                        <?php
                          $sql="SELECT * FROM acc_coa WHERE acc_coa.IsTransaction=1 AND acc_coa.HeadType='A' AND acc_coa.IsActive=1 AND acc_coa.HeadCode LIKE '1020101%'";

                          $sql = $this->db->query($sql);
                          $oResultAsset = $sql->result();
                  
                          $TotalOpening=0;
                          for($i=0;$i<count($oResultAsset);$i++)
                          {
                            $COAID=$oResultAsset[$i]->HeadCode;
                            $sql="SELECT SUM(acc_transaction.Debit)- SUM(acc_transaction.Credit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%'";

                            $sql1 = $this->db->query($sql);
                            $oResultAmountPre = $sql1->row();
                            if($oResultAmountPre->Amount!=0)
                            {
                        ?>
                          <tr >
                              <td align="left" style="padding-left:10px"><?php echo $oResultAsset[$i]->HeadName; ?></td>
                              <td>&nbsp;</td>
                              <td align="right" style="padding-right:10px; border-left: solid 1px #000; border-right:solid 1px #000;<?php if($TotalOpening==0) echo "border-top: solid 1px #000;"; ?>">
                                  <?php 
                                      $Total=$oResultAmountPre->Amount;
                                      echo number_format($Total);
                              
                                      $TotalOpening+=$Total; 
                                  ?>
                              </td>
                          </tr>
                                <?php
                            }
                          }
                        ?>
                        <tr>
                          <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="border-top: solid 1px #000;">&nbsp;</td>
                        </tr>
                        <tr>
                         <td align="left" style="padding-left:10px;padding-right:10px"><strong>Total Opening Cash & Cash Equivalent</strong></td>
                          <td>&nbsp;</td>
                           <td align="right" style="padding-right:10px; border-top: solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalOpening); ?></strong></td>
                        </tr>
                        <tr class="table_head">
                            <td colspan="3" style="padding-left:10px;text-decoration:underline"><b>Cashflow from Operating Activities</b></td>
                        </tr>
                        <?php
                            $TotalCurrAsset=0;
                            $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '102%' AND IsActive=1 AND HeadCode NOT LIKE '1020101%' AND HeadCode!='102' ";

                            $sql2 = $this->db->query($sql);
                            $oResultCurrAsset = $sql2->result();

                            for($s=0;$s<count($oResultCurrAsset);$s++)
                            {
                              $COAID=$oResultCurrAsset[$s]->HeadCode;
                              $sql="SELECT  SUM(acc_transaction.Credit) - SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%') ";

                              $sql3 = $this->db->query($sql);
                              $oResultAmount = $sql3->row();

                              if($oResultAmount->Amount!=0)
                              {
                                ?>
                                <tr >
                                    <td align="left" style="padding-left:10px"><?php echo $oResultCurrAsset[$s]->HeadName; ?></td>
                                    <td>&nbsp;</td>
                                    <td align="right" style="padding-right:10px; border-left:solid 1px #000; border-right:solid 1px #000;<?php if($TotalCurrAsset==0) echo "border-top: solid 1px #000;"; ?>">
                                        <?php 
                                            $Total=$oResultAmount->Amount;
                                            echo number_format($Total);
                                            $TotalCurrAsset+=$Total; 
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                          }
                        $sql="SELECT  SUM(acc_transaction.Credit) - SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '4%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%') ";

                        $sql4 = $this->db->query($sql);
                        $oResultAmount = $sql4->row();

                        if($oResultAmount->Amount!=0)
                        {
                          ?>
                         <tr>
                            <td align="left" style="padding-left:10px">Payment for Other Operating Activities</td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-left:solid 1px #000; border-right:solid 1px #000;">
                                <?php 
                                    $Total=$oResultAmount->Amount;
                                    echo number_format($Total,2);
                                    $TotalCurrAsset+=$Total; 
                                ?>
                            </td>
                        </tr>
                        <?php
                      }
                      ?>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td style="border-top: solid 1px #000;">&nbsp;</td>
                        </tr>
                        <tr >
                            <td align="left" style="padding-left:10px;padding-right:10px"><strong>Cash generated from Operating Activites before Changing in Opereating Assets &amp; Liabilities</strong></td>
                             <td>&nbsp;</td>
                           <td align="right" style="padding-right:10px; border-top: solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalCurrAsset); ?></strong></td>
                        </tr>
                        
                        <tr class="table_head">
                            <td colspan="3" style="padding-left:10px;text-decoration:underline"><b>Cashflow from Non Operating Activities</b></td>
                        </tr>
                        <?php
                          $TotalCurrAssetNon=0;
                          $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '3%' AND IsActive=1 ";

                          $sql5 = $this->db->query($sql);
                          $oResultCurrAsset = $sql5->result();

                          for($s=0;$s<count($oResultCurrAsset);$s++)
                          {
                          $COAID=$oResultCurrAsset[$s]->HeadCode;
                          $sql="SELECT  SUM(acc_transaction.Credit) - SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%') ";

                          $sql6 = $this->db->query($sql);
                          $oResultAmount = $sql6->row();

                          if($oResultAmount->Amount!=0)
                          {
                        ?>
                          <tr>
                              <td align="left" style="padding-left:10px"><?php echo $oResultCurrAsset[$s]->HeadName; ?></td>
                              <td>&nbsp;</td>
                              <td align="right" style="padding-right:10px; border-left:solid 1px #000; border-right:solid 1px #000;<?php if($TotalCurrAssetNon==0) echo "border-top: solid 1px #000;"; ?>">
                          <?php 
                              $Total=$oResultAmount->Amount;
                              echo number_format($Total);
                              $TotalCurrAssetNon+=$Total; 
                          ?>
                              </td>
                          </tr>
                        <?php
                            }
                          }
                        ?>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td style="border-top: solid 1px #000;">&nbsp;</td>
                        </tr>
                        <tr >
                            <td align="left" style="padding-left:10px;padding-right:10px"><strong>Cash generated from Non Operating Activites before Changing in Opereating Assets &amp; Liabilities</strong></td>
                             <td>&nbsp;</td>
                           <td align="right" style="padding-right:10px; border-top: solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalCurrAssetNon); ?></strong></td>
                        </tr>
                        <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td >&nbsp;</td>
                        </tr>
                         <tr class="table_head">
                            <td align="left" style="padding-left:10px;padding-right:10px"><strong>Increase/Decrease in Operating Assets &amp; Liabilites</strong></td>
                           <td>&nbsp;</td>
                           <td align="right" style="padding-right:10px">&nbsp;</td>
                      </tr>
                        
                      <?php
                      $TotalCurrLiab=0;
                      $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '20101%' AND HeadCode!=20101 AND IsActive=1";

                      $sql6 = $this->db->query($sql);
                      $oResultLiab = $sql6->result();

                      for($t=0;$t<count($oResultLiab);$t++)
                      {
                      $COAID=$oResultLiab[$t]->HeadCode;

                      $sql="SELECT SUM(acc_transaction.Credit)-SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%')";
                      $oResultAmount=$oAccount->SqlQuery($sql);

                      $sql7 = $this->Db->query($sql);
                      $oResultAmount = $sql7->row();

                      if($oResultAmount->Amount!=0)
                      {
                        ?>
                        <tr >
                            <td align="left" style="padding-left:10px"><?php echo $oResultLiab[$t]->HeadName; ?></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-left: solid 1px #000; border-right:solid 1px #000;<?php if($TotalCurrLiab==0) echo "border-top: solid 1px #000;"; ?>" >
                                <?php 
                                    $Total=$oResultAmount->Amount;
                                    echo number_format($Total);
                                    $TotalCurrLiab+=$Total;
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                          }
                        ?>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td style="border-top: solid 1px #000;">&nbsp;</td>
                        </tr>
                        <tr >
                            <td align="left" style="padding-left:10px;padding-right:10px"><strong>Total Increase/Decrease</strong></td>
                             <td>&nbsp;</td>
                           <td align="right" style="padding-right:10px; border-top: solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalCurrLiab); ?></strong></td>
                        </tr>
                       <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td >&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" style="padding-left:10px;padding-right:10px"><strong>Net Cash From Operating/Non Operating Activities</strong></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-top: solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalCurrAsset+$TotalCurrAssetNon+$TotalCurrLiab); ?></strong></td>
                        </tr>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td >&nbsp;</td>
                        </tr>
                        <tr class="table_head">
                            <td colspan="3" style="padding-left:10px;text-decoration:underline"><b>Cash Flow from Investing Activities</b></td>
                        </tr>
                        <?php
                        $TotalNonCurrAsset=0;
                        $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '101%' AND HeadCode!=101 AND IsActive=1";

                        $sql9 = $this->db->query($sql);
                        $oResultNonCurrAsset = $sql9->result();

                        for($t=0;$t<count($oResultNonCurrAsset);$t++)
                        {
                        $COAID=$oResultNonCurrAsset[$t]->HeadCode;

                        $sql="SELECT SUM(acc_transaction.Debit)-SUM(acc_transaction.Credit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%')";

                        $sql8 = $this->db->query($sql);
                        $oResultAmount = $sql8->row();

                        if($oResultAmount->Amount!=0)
                        {
                        ?>
                        <tr >
                            <td align="left" style="padding-left:10px"><?php echo $oResultNonCurrAsset[$t]->HeadName; ?></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-left: solid 1px #000; border-right:solid 1px #000;<?php if($TotalNonCurrAsset==0) echo "border-top: solid 1px #000;"; ?>">
                                <?php 
                                    $Total=$oResultAmount->Amount;
                                    echo number_format($Total,2);
                                    $TotalNonCurrAsset+=$Total;
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                          }
                        ?>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td style="border-top: solid 1px #000;">&nbsp;</td>
                        </tr>
                        <tr >
                            <td align="left" style="padding-left:10px;padding-right:10px"><strong>Net Cash Used Investing Activities</strong></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-top:solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalNonCurrAsset); ?></strong></td>
                        </tr>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td >&nbsp;</td>
                        </tr>
                       
                        <tr class="table_head">
                            <td colspan="3" style="padding-left:10px;text-decoration:underline"><b>Cash Flow from Financing Activities</b></td>
                        </tr>
                        <?php
                        $TotalNonCurrLiab=0;
                        $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '20102%' AND IsActive=1";

                        $sql10 = $this->db->query($sql);
                        $oResultNonCurrLiab = $sql10->result();

                        for($t=0;$t<count($oResultNonCurrLiab);$t++)
                        {
                        $COAID=$oResultNonCurrLiab[$t]->HeadCode;

                        $sql="SELECT SUM(acc_transaction.Credit)-SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%')";

                        $sql11 = $this->db->query($sql);
                        $oResultAmount = $sql11->row();

                        if($oResultAmount->Amount!=0)
                        {
                            ?>
                        <tr >
                            <td align="left" style="padding-left:10px"><?php echo $oResultNonCurrLiab[$t]->HeadName; ?></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-left: solid 1px #000; border-right:solid 1px #000;<?php if($TotalNonCurrLiab==0) echo "border-top: solid 1px #000;"; ?>">
                                <?php 
                                    $Total=$oResultAmount->Amount;
                                    echo number_format($Total);
                                    $TotalNonCurrLiab+=$Total;
                                ?>
                            </td>
                        </tr>
                        <?php
                          }
                        }
                        ?>
                        <?php
                        $TotalFund=0;
                        $sql="SELECT * FROM acc_coa WHERE IsGL=1 AND HeadCode LIKE '202%' AND IsActive=1";

                        $sql12 = $this->db->query($sql);
                        $oResultFund = $sql12->result();


                        for($t=0;$t<count($oResultFund);$t++)
                        {
                        $COAID=$oResultFund[$t]->HeadCode;

                        $sql="SELECT SUM(acc_transaction.Credit)-SUM(acc_transaction.Debit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove = 1 AND VDate BETWEEN '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%' AND VNo in (SELECT VNo FROM acc_transaction WHERE COAID LIKE '1020101%')";

                        $sql13 = $this->db->query($sql);
                        $oResultAmount = $sql13->row();

                        if($oResultAmount->Amount!=0)
                        {
                        ?>
                        <tr >
                            <td align="left" style="padding-left:10px"><?php echo $oResultFund[$t]->HeadName; ?></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-left: solid 1px #000; border-right:solid 1px #000;">
                                <?php 
                                    $Total=$oResultAmount->Amount;
                                    echo number_format($Total,2);
                                    $TotalFund+=$Total;
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                          }
                        ?>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td style="border-top: solid 1px #000;">&nbsp;</td>
                        </tr>
                        <tr >
                            <td align="left" style="padding-left:10px;padding-right:10px"><strong>Net  Cash Used Financing Activities</strong></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-top:solid 1px #000; border-bottom:solid 1px #000;"><strong><?php echo number_format($TotalFund+$TotalNonCurrLiab); ?></strong></td>
                        </tr>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td >&nbsp;</td>
                        </tr>
                        <tr >
                            <td align="left" style="padding-left:10px;"><strong>Net Cash Inflow/Outflow (Profit Loss <?php echo number_format($TotalCurrAsset+$TotalCurrAssetNon+$TotalCurrLiab+$TotalNonCurrAsset+$TotalFund+$TotalNonCurrLiab); ?>)</strong></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-top: solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalCurrAsset+$TotalCurrAssetNon+$TotalCurrLiab+$TotalNonCurrAsset+$TotalFund+$TotalNonCurrLiab+$TotalOpening); ?></strong></td>
                        </tr>
                         <tr >
                            <td >&nbsp;</td>
                             <td>&nbsp;</td>
                           <td >&nbsp;</td>
                        </tr>
                      
                      <tr class="table_head">
                          <td colspan="3" style="padding-left:10px"><strong>Closing Cash & Cash Equivalent:</strong></td>
                        </tr>
                      <?php
                        $sql="SELECT * FROM acc_coa WHERE acc_coa.IsTransaction=1 AND acc_coa.HeadType='A' AND acc_coa.IsActive=1 AND acc_coa.HeadCode LIKE '1020101%' ";

                        $sql14 = $this->db->query($sql);
                        $oResultAsset = $sql14->result();

                        $TotalAsset=0;
                        for($i=0;$i<count($oResultAsset);$i++)
                        {
                          $COAID=$oResultAsset[$i]->HeadCode;
                          $sql="SELECT SUM(acc_transaction.Debit)- SUM(acc_transaction.Credit) AS Amount FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN  '".$dtpFromDate."' AND '".$dtpToDate."' AND COAID LIKE '$COAID%'";

                          $sql15 = $this->db->query($sql);
                          $oResultAmount = $sql15->row();

                          if($oResultAmount->Amount!=0)
                          {
                      ?>
                        <tr >
                            <td align="left" style="padding-left:10px"><?php echo $oResultAsset[$i]->HeadName; ?></td>
                            <td>&nbsp;</td>
                            <td align="right" style="padding-right:10px; border-left: solid 1px #000; border-right:solid 1px #000;<?php if($TotalAsset==0) echo "border-top: solid 1px #000;"; ?>">
                                <?php 
                                    $Total=$oResultAmount->Amount;
                                    echo number_format($Total);
                                        $TotalAsset+=$Total; 
                                ?>
                            </td>
                        </tr>
                              <?php
                          }
                        }
                      ?>
                        <tr>
                          <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="border-top: solid 1px #000;">&nbsp;</td>
                        </tr>
                        <tr>
                         <td align="left" style="padding-left:10px;padding-right:10px"><strong>Total Closing Cash & Cash Equivalent</strong></td>
                          <td>&nbsp;</td>
                           <td align="right" style="padding-right:10px; border-top: solid 1px #000; border-bottom: solid 1px #000;"><strong><?php echo number_format($TotalAsset); ?></strong></td>
                        </tr>
                        <tr>
                          <td align="right" colspan="3">&nbsp;</td>
                        </tr>
                        
                         <tr>
                               <td colspan="4" align="center">
                    <table width="100%" cellpadding="1" cellspacing="20" style="margin-top: 50px">
                                    <tr>
                                        <td width="20%" style="border-top: solid 1px #000;" align="center">Prepared By</td>
                                        <td width="20%" style="border-top: solid 1px #000;" align="center">Accounts</td>
                                        <td width='20%' style='text-decoration:overline'>Authorized Signature</td>
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
</div>

