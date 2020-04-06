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

class CCommon
{
    public function NumberToWord($number)
    {
        $hyphen = '-';
        $conjunction = ' and ';
        $separator = ', ';
        $negative = 'negative ';
        $decimal = ' taka ';
        $paisa = ' paisa ';
        $dictionary = array(
            0 => 'zero',
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six',
            7 => 'seven',
            8 => 'eight',
            9 => 'nine',
            10 => 'ten',
            11 => 'eleven',
            12 => 'twelve',
            13 => 'thirteen',
            14 => 'fourteen',
            15 => 'fifteen',
            16 => 'sixteen',
            17 => 'seventeen',
            18 => 'eighteen',
            19 => 'nineteen',
            20 => 'twenty',
            30 => 'thirty',
            40 => 'fourty',
            50 => 'fifty',
            60 => 'sixty',
            70 => 'seventy',
            80 => 'eighty',
            90 => 'ninety',
            100 => 'hundred',
            1000 => 'thousand',
            100000 => 'lac',
            10000000 => 'crore'
        );
        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int)$number < 0) || (int)$number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error('convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX, cE_USER_WARNING);
            return false;
        }

        if ($number < 0) {
            return $negative . NumberToWord(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens = ((int)($number / 10)) * 10;
                $units = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= ' ' . $this->NumberToWord($remainder);
                }
                break;
            case $number < 100000:
                $thousand = $number / 1000;
                $remainder = $number % 1000;
                $string = $this->NumberToWord((int)$thousand) . ' ' . $dictionary[1000];
                if ($remainder) {
                    $string .= ' ' . $this->NumberToWord($remainder);
                }
                break;
            case $number < 10000000:
                $lac = $number / 100000;
                $remainder = $number % 100000;
                $string = $this->NumberToWord((int)$lac) . ' ' . $dictionary[100000];
                if ($remainder) {
                    $string .= ' ' . $this->NumberToWord($remainder);
                }
                break;
            case $number > 10000000:
                $crore = $number / 10000000;
                $remainder = $number % 10000000;
                $string = $this->NumberToWord((int)$crore) . ' ' . $dictionary[10000000];
                if ($remainder) {
                    $string .= ' ' . $this->NumberToWord($remainder);
                }
                break;
            default:
                $baseUnit = pow(10000000, floor(log($number, 10000000)));
                $numBaseUnits = (int)($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = $this->NumberToWord($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= $this->NumberToWord($remainder);
                }
                break;
        }

        if (is_numeric($fraction)) {
            $string .= $decimal;

            $words = $this->NumberToWord((int)$fraction);

            $string .= $conjunction . $words . $paisa;
        }
        return $string;
    }
}


?>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-body"  id="printArea">
                <tr align="center">
                    <td id="ReportName" style="font:'Times New Roman', Times, serif; font-size:20px;"><b>Cash Credit Voucher</b></td>
                </tr>
                <div class="">
                    <table class="datatable2 table table-bordered table-hover">
                        <thead>
                        <tr>
                            <td width="7%" height="25"><strong>SL#</strong></td>
                            <td width="15%" align="center"><strong>Account Code</strong></td>
                            <td width="48%" align="center"><strong>Account Head</strong></td>
                            <td width="15%" align="right"><strong>Credit</strong></td>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $TotalCredit=0;
                        foreach($vouchar_view as $v_data) {
                            ?>
                            <tr>
                                <td height="25">1</td>
                                <td><?php echo $v_data->COAID; ?></td>
                                <td><?php echo $v_data->HeadName; ?></td>
                                <td align="right"><?php
                                    $Amount =$v_data->Amount;
                                    $TotalCredit +=$Amount;
                                    printf("%.2f",$Amount);?></td>

                            </tr>
                            <?php
                        }
                        ?>

                        <tr class="table_data">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td  align="right"><strong>Total</strong></td>
                            <td  align="right"><strong><?php printf("%.2f",$TotalCredit); ?></strong></td>
                        </tr>

                        <tr class="table_data">
                            <td height="45" valign="top" class="rptInWords" align="right">In word :</td>
                            <td colspan="3" valign="top">
                                <?php
                                $Amount=number_format($TotalCredit,2,'.','');
                                $data=new CCommon();
                                echo ucwords($data->NumberToWord($Amount)). " Only.";

                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top">&nbsp;</td>
                            <td valign="top">&nbsp;</td>
                            <td align="right" valign="top">&nbsp;</td>
                            <td align="right" valign="top">&nbsp;</td>
                        </tr>
                        <tr>
                            <td valign="top">&nbsp;</td>
                            <td valign="top">Accounts Officer</td>
                            <td align="right" valign="top">&nbsp;</td>
                            <td align="right" valign="top">Print Date: <?php echo date("Y-m-d");?></td>
                        </tr>

                        </tbody>
                    </table>

                    <div class="text-center" id="print" style="margin: 20px">
                        <input type="button" class="btn btn-warning" name="btnPrint" id="btnPrint" value="Print" onclick="printDiv();"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>