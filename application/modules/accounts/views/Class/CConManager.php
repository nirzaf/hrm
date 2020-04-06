<?php
class CConManager
{

    public function __construct()
    {

        $CI =& get_instance();
        $CI->load->database('dbname');

        $this->conn=mysqli_connect($CI->db->hostname,$CI->db->username,$CI->db->password,$CI->db->database) or die( "Unable to Connect: ".mysqli_connect_error());
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