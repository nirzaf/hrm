
<?php
class CResult{

public $row;
public $rows;
public $num_rows;
public $effected_row;
public $message;
public $error;
public $IsSucess;

 public function __construct(){
    $this->IsSucess=FALSE;
    $this->effected_row=0;
    $this->rows=array();
 }
}
?>