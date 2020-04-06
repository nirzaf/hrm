<?php
class CCommon
{
    public function __construct()
    {
    }
    //Number To Word Converter
    public function NumberToWord($number)
    {
        $hyphen      = '-';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' taka ';
        $paisa     = ' paisa ';
        $dictionary  = array(
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'fourty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            100000              => 'lac',
            10000000            => 'crore'
        );
        if (!is_numeric($number))
        {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX)
        {
            // overflow
            trigger_error('convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX, cE_USER_WARNING);
            return false;
        }

        if ($number < 0)
        {
            return $negative . NumberToWord(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false)
        {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true)
        {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units)
                {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder)
                {
                    $string .= ' ' .$this->NumberToWord($remainder);
                }
                break;
            case $number < 100000:
                $thousand  = $number / 1000;
                $remainder = $number % 1000;
                $string =$this->NumberToWord((int)$thousand). ' ' . $dictionary[1000];
                if ($remainder)
                {
                    $string .= ' '.$this->NumberToWord($remainder);
                }
                break;
            case $number < 10000000:
                $lac  = $number / 100000;
                $remainder = $number % 100000;
                $string = $this->NumberToWord((int)$lac). ' ' . $dictionary[100000];
                if ($remainder)
                {
                    $string .= ' ' .$this->NumberToWord($remainder);
                }
                break;
            case $number > 10000000:
                $crore  = $number / 10000000;
                $remainder = $number % 10000000;
                $string = $this->NumberToWord((int)$crore). ' ' . $dictionary[10000000];
                if ($remainder)
                {
                    $string .= ' ' .$this->NumberToWord($remainder);
                }
                break;
            default:
                $baseUnit = pow(10000000, floor(log($number, 10000000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = $this->NumberToWord($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder)
                {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= $this->NumberToWord($remainder);
                }
                break;
        }

        if (is_numeric($fraction))
        {
            $string .= $decimal;

            $words =$this->NumberToWord((int)$fraction);

            $string .= $conjunction . $words . $paisa;
        }
        return $string;
    }

    function makecomma($input)
    {
        if(strlen($input)<=2)
        {
            return $input;
        }
        $length=substr($input,0,strlen($input)-2);
        $formatted_input = $this->makecomma($length).",".substr($input,-2);
        return $formatted_input;
    }

    function number_format($num)
    {
        return number_format($num,2,'.',',');
    }

    /*
    function number_format($num)
    {
        $neg='';
        $pos = strpos((string)$num, ".");
        if ($pos === false)
            $decimalpart="00";
        else
        {
            $decimalpart= substr($num, $pos+1, 2);
            $num = substr($num,0,$pos);
        }
        if($num=='')
            $num=0;
        if($num<0)
        {
            $neg='-';
            $num=abs($num);
        }


        if(strlen($num)>3 & strlen($num) <= 12)
        {
            $last3digits = substr($num, -3 );
            $numexceptlastdigits = substr($num, 0, -3 );
            $formatted = $this->makecomma($numexceptlastdigits);
            $stringtoreturn = $neg.$formatted.",".$last3digits.".".$decimalpart ;
        }
        elseif(strlen($num)<=3)
            $stringtoreturn = $num.".".$decimalpart ;
        elseif(strlen($num)>12)
            $stringtoreturn = number_format($num, 2);
        return $stringtoreturn;
    }
    */
    //Company Info

    public function ReadAllSemester($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM semister WHERE IsActive=1 ORDER BY Name";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadAllProgram($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM program ORDER BY Name";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadAllSelectedOption($Sql,$Value,$Display,$Selected)
    {
        $disp = explode("^",$Display);
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($Sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                {
                    echo "<option value='".$oResult->rows[$i][$Value]."' selected='selected'>";
                    for($j=0;$j<count($disp);$j++)
                    {
                        if($j) echo "-";
                        echo $oResult->rows[$i][$disp[$j]];
                    }
                    echo"</option>";
                }
                else
                {
                    echo "<option value='".$oResult->rows[$i][$Value]."'>";
                    for($j=0;$j<count($disp);$j++)
                    {
                        if($j) echo "-";
                        echo $oResult->rows[$i][$disp[$j]];
                    }
                    echo"</option>";
                }
            }
        }
    }

    public function ReadAllSchool($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM school ORDER BY Name";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadAllCountry($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM country ORDER BY name";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadAllRole($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM sec_role ORDER BY Name";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadAllModule($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT DISTINCT ModuleName FROM  sec_menuitem ORDER BY ID";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadAllDept($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM  department ORDER BY Name";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }
    public function ReadSelectedDepartment($sql,$Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }
    public function ReadAllCoursesChkbx($sql,$Value,$Display,$Selected)
    {
        $disp = explode("^",$Display);
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'><tr>";
            for($i=0; $i<$oResult->num_rows; $i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                {
                    echo "<td width='2%' valign='top'><input type=\"checkbox\" name=\"chkCourse[]\" id=\"chkCourse[]\" value=\"".$oResult->rows[$i][$Value]."\" checked=\"checked\"></td><td width='31%' style='font-size:13px;' valign='top'><label >".$oResult->rows[$i][$disp[0]];
                    for($Dloop=1; $Dloop<count($disp); $Dloop++)
                    {
                        echo " - ".$oResult->rows[$i][$disp[$Dloop]];
                    }
                    echo "</label></td>";
                }
                else
                {
                    echo "<td width='2%'  valign='top'><input type=\"checkbox\" name=\"chkCourse[]\" id=\"chkCourse[]\" value=\"".$oResult->rows[$i][$Value]."\" ></td><td width='31%' style='font-size:13px;' valign='top'><label>".$oResult->rows[$i][$disp[0]];
                    for($Dloop=1; $Dloop<count($disp); $Dloop++)
                    {
                        echo " - ".$oResult->rows[$i][$disp[$Dloop]];
                    }
                    echo "</label></td>";
                }
                if(($i+1)%3 == 0)
                    echo "</tr><tr>";
            }
            echo "</tr></table>";
        }
    }

    public function ReadNewCoursesChkbx($sql,$arr,$Value,$Display,$Selected)
    {
        $disp = explode("^",$Display);
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0; $i<$oResult->num_rows; $i++)
            {
                if(! @in_array($oResult->rows[$i][$Value],$arr))
                {
                    $ChkId = $i;
                    echo "&nbsp;<span style=\"font-size:13px\"><input type=\"checkbox\" name=\"chkCourse[]\" id=\"ChkNew_".$ChkId."\" value=\"".$oResult->rows[$i][$Value]."\" onclick=\"GetCapacity(this.value,this.id);\"> ".$oResult->rows[$i][$disp[0]];
                    for($Dloop=1; $Dloop<count($disp); $Dloop++)
                    {
                        echo " - ".$oResult->rows[$i][$disp[$Dloop]];
                    }
                    echo "</span><br>";
                }
            }
        }
    }
    public function ReadRetakeCoursesChkbx($sql,$arr,$Value,$Display,$Selected)
    {
        $disp = explode("^",$Display);
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0; $i<$oResult->num_rows; $i++)
            {
                if(@in_array($oResult->rows[$i][$Value],$arr))
                {
                    $ChkId = $i;
                    echo "&nbsp;<span style=\"font-size:13px\"><input type=\"checkbox\" name=\"chkRetakeCourse[]\" id=\"ChkRtk_".$ChkId."\" value=\"".$oResult->rows[$i][$Value]."\" > ".$oResult->rows[$i][$disp[0]];
                    for($Dloop=1; $Dloop<count($disp); $Dloop++)
                    {
                        echo " - ".$oResult->rows[$i][$disp[$Dloop]];
                    }
                    echo "</span><br>";
                }
            }
        }
    }
    public function ReadDropCoursesChkbx($sql,$arr,$Value,$Display,$Selected)
    {
        $disp = explode("^",$Display);
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0; $i<$oResult->num_rows; $i++)
            {
                if(@in_array($oResult->rows[$i][$Value],$arr))
                {
                    echo "&nbsp;<span style=\"font-size:13px\"><input type=\"checkbox\" name=\"chkDropCourse[]\" id=\"chkDropCourse[]\" value=\"".$oResult->rows[$i][$Value]."\" > ".$oResult->rows[$i][$disp[0]];
                    for($Dloop=1; $Dloop<count($disp); $Dloop++)
                    {
                        echo " - ".$oResult->rows[$i][$disp[$Dloop]];
                    }
                    echo "</span><br>";
                }
            }
        }
    }

    public function ReadAllDesignation($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM  designation ORDER BY Name";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }


    public function ReadEmployee($sql,$Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadSelectedOption($sql, $Value, $Display, $Selected)
    {
        $disp = explode("^",$Display);
        $oAccount=new CAccount();
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$disp[0]]." (".$oResult->rows[$i][$disp[1]].")</option>";
                else
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$disp[0]]." (".$oResult->rows[$i][$disp[1]].")</option>";
            }
        }
    }

    //read all members

    public function ReadAllEmployeeStudent($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        //$sql="SELECT employee.Name,employee.EmployeeNo FROM employee";
        $sql="SELECT tbl.memberId,tbl.Name FROM(SELECT Student_Id AS memberId,Name,'Student' AS Type FROM stu_basic
	UNION ALL
	SELECT employee.EmployeeNo AS memberId, employee.Name, designation.Name AS Type FROM employee INNER JOIN designation ON employee.Designation=designation.ID) as tbl
WHERE tbl.memberId NOT IN (SELECT EmployeeID FROM sec_user)";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i]['memberId']."-".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    //read all members
    ///////////////////////////////////////////////////////////////////
    //check all member
    public function memberavailability($id)
    {
        $oAccount=new CAccount();
        $oResult =new CResult();
        $sql="SELECT Type FROM( SELECT Student_Id AS memberId,Name,'Student' AS Type FROM stu_basic
			  UNION ALL
			  SELECT employee.EmployeeNo AS memberId, employee.Name, designation.Name AS Type
			  FROM employee INNER JOIN designation ON employee.Designation=designation.ID) AS RESULTS 
			  WHERE RESULTS.memberId='$id'";
        $oResult=$oAccount->SqlQuery($sql);
        return $oResult;
    }
    //check all members
    //read user
    public function ReadAllUser()
    {
        $oAccount=new CAccount();
        $oResult =new CResult();
        $sql="SELECT * FROM sec_user ORDER BY sec_user.ID ASC";
        $oResult=$oAccount->SqlQuery($sql);
        return $oResult;
    }
    //read user
    ///////////////////////////////////////////////////////////////////////

    public function AdvisingCourseVoNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="RC-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='RC' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function AdvisingCourseRVoNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="RCF-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='RCF' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function getMoneyReceiptNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="MR-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='MR' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }

        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }
    //ReadAll Course Option
    public function ReadAllCourse($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT ID,Name,Title FROM course ORDER BY Title";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }

    public function ReadAllSemseterProgramWiseCourse($Value,$Display,$Selected,$SemsterID,$Program)
    {
        $oAccount=new CAccount();
        if($Program=='')
            $sql="SELECT course.ID, course.Name, course.Title FROM assign_course_to_semester INNER JOIN course ON course.ID=assign_course_to_semester.CourseID WHERE assign_course_to_semester.SemesterId='$SemsterID' ORDER BY Title";
        else
            echo $sql="SELECT course.ID, course.Name, course.Title FROM assign_course_to_semester INNER JOIN course ON course.ID=assign_course_to_semester.CourseID WHERE assign_course_to_semester.SemesterId='$SemsterID' AND assign_course_to_semester.ProgramId='$Program' ORDER BY Title";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }
    //
    public function AdvisingRegisationVoNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="AVR-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='AVR' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }
    //Accounting

    public function AdmissionNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="AD-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='AD' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function RegistrtionNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="RI-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='RI' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function CreditVoNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="CV-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='CV' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function JournalVoNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="JV-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='JV' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }

        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function ContraVoNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="CONTRA-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='CONTRA' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }

        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function EmployeePaymentSLNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="SP-BAC-";
        $sql="SELECT MAX(SerialNo) AS M FROM hrm_salarypayment";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }

        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function DebitVoNo()
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $str="DV-BAC-";
        $sql="SELECT MAX(VNo) AS M FROM acc_transaction WHERE Vtype='DV' AND VNo LIKE '%$str%'";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                $Serial=$oResult->row["M"];
                if($Serial)
                {
                    $Serial=substr($Serial, strlen($str));
                    return $str.($Serial+1);
                }
                else
                    return $str.'100001';
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function ReadAllBankCOA($value,$dispaly,$selected)
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $sql="SELECT * FROM acc_coa WHERE HeadCode LIKE '1020102%' AND IsTransaction=1 ORDER BY HeadName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                for($i=0;$i<$oResult->num_rows;$i++)
                {
                    if($selected==$oResult->rows[$i][$value])
                        echo "<option value=\"".$oResult->rows[$i][$value]."\" selected='selected'>".$oResult->rows[$i][$dispaly]."</option>";
                    else
                        echo "<option value=\"".$oResult->rows[$i][$value]."\">".$oResult->rows[$i][$dispaly]."</option>";
                }
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function ReadAllTransactionCOA($value,$dispaly,$selected)
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $sql="SELECT * FROM acc_coa WHERE IsTransaction=1 ORDER BY HeadName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                for($i=0;$i<$oResult->num_rows;$i++)
                {
                    if($selected==$oResult->rows[$i][$dispaly])
                        echo "<option value=\"".$oResult->rows[$i][$value]."\" selected='selected'>".$oResult->rows[$i][$dispaly]."</option>";
                    else
                        echo "<option value=\"".$oResult->rows[$i][$value]."\">".$oResult->rows[$i][$dispaly]."</option>";
                }
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function ReadAllTransactionIncome($value,$dispaly,$selected)
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $sql="SELECT * FROM acc_coa WHERE HeadCode LIKE ('301%') AND IsTransaction=1 ORDER BY acc_coa.HeadName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                for($i=0;$i<$oResult->num_rows;$i++)
                {
                    if($selected==$oResult->rows[$i][$dispaly])
                        echo "<option value=\"".$oResult->rows[$i][$value]."\" selected='selected'>".$oResult->rows[$i][$dispaly]."</option>";
                    else
                        echo "<option value=\"".$oResult->rows[$i][$value]."\">".$oResult->rows[$i][$dispaly]."</option>";
                }
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function ReadAllGLCOA($value,$dispaly,$selected)
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $sql="SELECT * FROM acc_coa WHERE IsGL=1 ORDER BY HeadName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {

                for($i=0;$i<$oResult->num_rows;$i++)
                {
                    if($selected==$oResult->rows[$i][$value])
                        echo "<option value=\"".$oResult->rows[$i][$value]."\" selected='selected'>".$oResult->rows[$i][$dispaly]."</option>";
                    else
                        echo "<option value=\"".$oResult->rows[$i][$value]."\">".$oResult->rows[$i][$dispaly]."</option>";
                }
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    //AllTrasationCOA
    public function ReadAllTransactionHeadByPHead($PHeadName,$value,$dispaly,$selected)
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $sql="SELECT * FROM acc_coa WHERE IsTransaction=1 AND PHeadName='$PHeadName' ORDER BY HeadName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                for($i=0;$i<$oResult->num_rows;$i++)
                {
                    if($selected==$oResult->rows[$i][$value])
                        echo "<option value=\"".$oResult->rows[$i][$value]."\" selected='selected'>".$oResult->rows[$i][$dispaly]."</option>";
                    else
                        echo "<option value=\"".$oResult->rows[$i][$value]."\">".$oResult->rows[$i][$dispaly]."</option>";
                }
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }

    public function ReadAllTransactionAllCOA($value,$dispaly,$selected)
    {
        $oAccount=new CAccount();
        $oResult=new CResult();
        $sql="SELECT * FROM acc_coa WHERE IsTransaction=1 ORDER BY HeadName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            if($oResult->num_rows>0)
            {
                for($i=0;$i<$oResult->num_rows;$i++)
                {
                    if($selected==$oResult->rows[$i][$dispaly])
                        echo "<option value=\"".$oResult->rows[$i][$value]."\" selected='selected'>".$oResult->rows[$i][$dispaly]."</option>";
                    else
                        echo "<option value=\"".$oResult->rows[$i][$value]."\">".$oResult->rows[$i][$dispaly]."</option>";
                }
            }
        }
        else
        {
            echo ("<script>window.alert(\"Error-".$oResult->message." ".$oResult->error."\");</script>");
        }
    }
    //end TransactionCOA

    public function ReadAllBookCatagory($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM lib_bookcatagory ORDER BY CatagoryName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }
    //read all catagory


    //read all calagory

    public function ReadAllBookSubCatagory($Value,$Display,$Selected,$CatagoryCode)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM lib_subbookcatagory WHERE CatagoryID = '$CatagoryCode' ORDER BY SubCatagoryName";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }
    //read all catagory

    //read all Leave Type

    public function ReadAllCommonLeave($Value,$Display,$Selected)
    {
        $oAccount=new CAccount();
        $sql="SELECT * FROM  hrm_commonleave";
        $oResult=$oAccount->SqlQuery($sql);
        if($oResult->IsSucess)
        {
            for($i=0;$i<$oResult->num_rows;$i++)
            {
                if($oResult->rows[$i][$Value]==$Selected)
                    echo "<option value=\"".$oResult->rows[$i][$Value]."\" selected=\"selected\">".$oResult->rows[$i][$Display]."</option>";
                else echo "<option value=\"".$oResult->rows[$i][$Value]."\">".$oResult->rows[$i][$Display]."</option>";
            }
        }
    }
    //read all Leave type
};

?>