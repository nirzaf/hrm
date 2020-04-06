<?php
class CResult
{
    public $row;
    public $rows;
    public $num_rows;
    public $effected_row;
    public $message;
    public $error;
    public $IsSucess;
    public function __construct()
    {
        $this->IsSucess=FALSE;
        $this->effected_row=0;
        $this->rows=array();
    }
};
?>
<?php
class CConManager
{
    private $DataBase='new_hmvc';
    private $Host='localhost';
    private $User='root';
    private $Password='';
    private $conn;
    public function __construct()
    {
        $this->conn=mysqli_connect($this->Host,$this->User,$this->Password,$this->DataBase) or die( "Unable to Connect: ".mysqli_connect_error());
    }
    public function Open()
    {
        /*if(!mysqli_select_db($this->DataBase,$this->conn))
            exit('Error: Could not connect to database ' . $this->DataBase);
        */
        mysqli_query($this->conn,"SET NAMES 'utf8'" );
        mysqli_query($this->conn,"SET CHARACTER SET utf8" );
        mysqli_query( $this->conn,"SET CHARACTER_SET_CONNECTION=utf8");
        mysqli_query($this->conn, "SET SQL_MODE = ''");
        return TRUE;
    }

    public function getLastId()
    {
        return mysqli_insert_id($this->conn);
    }

    public function query($sql)
    {
        try
        {
            $resource = mysqli_query($this->conn,$sql );
            //print_r($resource); exit;
            if ($resource)
            {
                if ($resource instanceof mysqli_result)
                {
                    $i = 0;
                    $data = array();
                    while ($result = mysqli_fetch_assoc($resource))
                    {
                        $data[$i] = $result;
                        $i++;
                    }
                    mysqli_free_result($resource);
                    $oResult = new CResult();
                    $oResult->row = isset($data[0]) ? $data[0] : array();
                    $oResult->rows = $data;
                    $oResult->num_rows = $i;
                    $oResult->IsSucess=TRUE;
                    unset($data);
                    //print_r($oResult); exit;
                    return $oResult;
                }
                else
                {
                    $oResult = new CResult();
                    //print_r($this->conn);

                    $oResult->effected_row=mysqli_affected_rows($this->conn);

                    $oResult->IsSucess=TRUE;

                    /*echo "<br>&nbsp;<br>";
                    print_r($oResult->IsSucess);
                    echo "<br>&nbsp;<br>";
                    print_r($oResult);
                    exit;*/

                    return $oResult;


                }
            }
            else
            {
                $oResult=new CResult();
                $oResult->message=mysqli_error($this->conn);
                $oResult->error=mysqli_errno($this->conn);
                $oResult->IsSucess=FALSE;
                return $oResult;
            }
        }
        catch(Exception $e)
        {
            $oResult=new CResult();
            $oResult->message=$e->getMessage();
            $oResult->error=$e->getCode();
            $oResult->IsSucess=FALSE;
            return $oResult;
        }
    }
    public function Close()
    {
        mysqli_close($this->conn);
    }
}
?>


<?php
class CAccount
{
    private $oConnManager;
    public function __construct()
    {
        $this->oConnManager = new CConManager();
    }


    public function SqlQuery($sql)  //Read all Catagory For Drowdownlist
    {
        $oResult =new CResult();
        if($this->oConnManager->Open())
        {
            $oResult=$this->oConnManager->query($sql);
        }
        return $oResult;
    }


};
?>

<?php
if(isset($_POST['btnSave']))
{

    $oAccount=new CAccount();
    //$oCommon=new CCommon();
    $oResult=new CResult();



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



    $sql="SELECT acc_transaction.VNo, acc_transaction.Vtype, acc_transaction.VDate, SUM(acc_transaction.Debit) AS Debit, SUM(acc_transaction.Credit) AS Credit, acc_transaction.IsAppove, acc_transaction.COAID, acc_coa.HeadName, acc_coa.PHeadName, acc_coa.HeadType, acc_transaction.Narration
              FROM acc_transaction INNER JOIN acc_coa ON acc_transaction.COAID = acc_coa.HeadCode
			  WHERE acc_transaction.IsAppove =1 AND VDate BETWEEN '$FromDate 00:00:00' AND '$ToDate 00:00:00' AND VNo IN (SELECT VNo FROM acc_transaction acc WHERE acc.COAID LIKE '$HeadCode%' AND acc.IsAppove =1 AND acc.VDate BETWEEN '$FromDate' AND '$ToDate')  ";


    $oResult=$oAccount->SqlQuery($sql);

}
?>


<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-body">
                <tr align="center">
                    <td id="ReportName" style="font:'Times New Roman', Times, serif; font-size:20px;"><b><?php echo display('cash_book_voucher')?></b></td>
                </tr>
                <div class="">
                    <table width="100%" class="table_boxnew" cellpadding="6" cellspacing="1" style="line-height:120%;">
                        <tr>
                        <tr align="center">
                            <td colspan="7"><font size="+1" style="font-family:'Arial'"> <strong><?php echo display('cash_book_report_on')?> <?php echo $FromDate; ?> <?php echo display('to')?> <?php echo $ToDate;?></strong></font><strong>
                            </th>
                            </strong></tr>

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
                                        
                                        echo $oResult->rows[$i]['VNo'];
                                        ?></td>
                                    <td align="justify" bgcolor="<?php echo $bg; ?>"><a href="javascript:"><?php echo $oResult->rows[$i]['Vtype'];
                                            ?><div id="HidePODetail"><?php echo $oResult->rows[$i]['Narration'];
                                                ?>
                                            </div></a>
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
                        <tr class="table_data">
                            <td bgcolor="#9999CC">&nbsp;</td>
                            <td align="center" bgcolor="#9999CC">&nbsp;</td>
                            <td align="center" bgcolor="#9999CC">&nbsp;</td>
                            <td align="center" bgcolor="#9999CC">&nbsp;</td>
                            <td  align="right" bgcolor="#9999CC"><strong>Total</strong></td>
                            <td  align="right" bgcolor="#9999CC"><?php echo number_format($TotalDebit,2,'.',','); ?></td>
                            <td  align="right" bgcolor="#9999CC"><?php echo number_format($TotalCredit,2,'.',','); ?></td>
                            <td  align="right" bgcolor="#9999CC"><?php echo number_format($PreBalance,2,'.',','); ?></td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div id="print" align="center">
                                    <div class="login_input">
                                        <div class="login_submit">
                                            <input type="button" name="btnPrint" id="btnPrint" value="Print" style="border:none; background:none; cursor: pointer; width:80px; height:20px" onclick="btnPrint();"/>
                                        </div>
                                        <div class="login_submit"><input type="button" name="btnBack" id="btnBack" value="Back" style="border:none; background:none; cursor: pointer; width:80px; height:20px" onclick="window.history.back();"/></div>
                                    </div>
                                </div>

                                <div id="back" align="center" style="display:none;">
                                    <div class="login_input">
                                        <div class="login_submit">
                                            <a href="?Acc=CB" name="btnBack" id="btnBack" style="border:none; background:none; cursor: pointer; width:80px; height:20px;" >Back</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>