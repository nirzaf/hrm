<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adhoc_controller extends MX_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array(
     'report_model'
   ));		 
  }

  public function index(){   
    $this->permission->method('reports','read')->redirect();
    $data['title']  = display('adhoc_report'); 
    $data['tables'] = $this->db->list_tables();
    $data['module'] = "reports";
    $data['page']   = "adhoc_form";   
    echo Modules::run('template/layout', $data);
  }
  public function findtablefield(){
    $tabl = $this->input->post('tables');
    $data = '';
    foreach ($tabl as $field) {
      $data.='<span class="tb">'.$field.'</span>'."<br><hr class='border'>";
      $info= $this->db->list_fields($field);
      foreach ($info as  $value) {
      $data.="<input name='fields[]' type='checkbox' value='".$field.'.'.$value."' onclick='addme(this.value)'>".display($value)."<br>";
     }
     $data.="<br><br>";
   }
   echo ($data);
 }

 public function selectedfield(){
  $field = $this->input->post('fields');
  foreach ($field as $value) {
    $html .='<option value="'.$value.'">'.$value.'</option>';
  }   
  echo $html;       
}

public function resultss(){
  $field = $this->input->post('fields');

  $tables = $this->input->post('tables');
  $operator = $this->input->post('operator');
  $q = $this->input->post('q');
  $p = $this->input->post('p');
  $string=implode(",",$tables);
  $f = implode(",",$field);
  $fst =str_replace($tables[0].'.','',$field);
  $scnd =str_replace($tables[1].'.','',$fst);
  $tablcount = count($tables);
  if($tablcount==1){
    $this->db->select('*');
    $this->db->from($string);
    for ($i=0; $i < count($p); $i++) {
     $this->db->where($p[$i].' '.$operator[$i],$q[$i]);
   }
   $data=$this->db->get();
   $query = $data->result();
   $html.='<table  class="table table-border">
   <thead><tr>';
   foreach ($scnd as $fild) {
    $html.='<th>'.display($fild).'</th>';
  }
  $html.='</tr></thead><tbody>';
  if(!empty($query)){                      
   foreach ($query as $value) {
    $html .='<tr>';
    foreach ($scnd as $flds) {
      $html .='<td>'.$value->$flds.'</td>';
    }  
    $html .='</tr>';
  } 
}else{
  $html .='<tr>';

  $html .='<td colspan="'.count($field).'" class="text-center"> No Data Found </td>';

  $html .='</tr>';
} 
$html.='</tbody></table> '; 
}else if($tablcount==2){
  $array1 = $this->db->list_fields($tables[0]);
  $array2 = $this->db->list_fields($tables[1]);
                   // echo $tables[0];
  $result=array_intersect($array1,$array2);
  $joinid = (!empty($result[0])?$result[0]:$result[1]);
  $first =str_replace($tables[0].'.','',$field);
  $second =str_replace($tables[1].'.','',$first);
  $this->db->select($f);
  $this->db->from($tables[0]);
  $this->db->join($tables[1],$tables[0].'.'.$joinid.'='.$tables[1].'.'.$joinid,'inner');
  for ($i=0; $i < count($p); $i++) {
   $this->db->where($p[$i].' '.$operator[$i],$q[$i]);
 }
 $data=$this->db->get();
 $query = $data->result();
 $html.='<table  class="table table-border">
 <thead><tr>';
 foreach ($second as $fild) {
  $html.='<th>'.display($fild).'</th>';
}
$html.='</tr></thead><tbody ></tbody>';

if(!empty($query)){   
  foreach ($query as $value) {
    $html .='<tr>';
    foreach ($second as $flds) {

      $html .='<td>'.$value->$flds.'</td>';
    }  
    $html .='</tr>';
  }  

}else{
  $html .='<tr>';

  $html .='<td colspan="'.count($field).'" class="text-center"> No Data Found </td>';

  $html .='</tr>';
} 
$html.='</table> '; 
}else if($tablcount==3){
  $array1 = $this->db->list_fields($tables[0]);
  $array2 = $this->db->list_fields($tables[1]);
  $array3 = $this->db->list_fields($tables[2]);
                   // echo $tables[0];
  $result=array_intersect($array1,$array2);
  $res2=array_intersect($array2,$array3);
  $joinid = (!empty($result[0])?$result[0]:$result[1]);
  $joinid2 =(!empty($res2[1])?$res2[1]:$res2[2]);
  $first =str_replace($tables[0].'.','',$field);
  $second =str_replace($tables[1].'.','',$first);
  $third =str_replace($tables[2].'.','',$second);
  $this->db->select($f);
  $this->db->from($tables[0]);
  $this->db->join($tables[1],$tables[0].'.'.$joinid.'='.$tables[1].'.'.$joinid,'inner');
  $this->db->join($tables[2],$tables[1].'.'.$joinid2.'='.$tables[2].'.'.$joinid2,'inner');
  for ($i=0; $i < count($p); $i++) {
   $this->db->where($p[$i].' '.$operator[$i],$q[$i]);
 }
 $data=$this->db->get();
 $query = $data->result();
 $html.='<table  class="table table-border">
 <thead><tr>';
 foreach ($third as $fild) {
  $html.='<th>'.display($fild).'</th>';
}
$html.='</tr></thead><tbody ></tbody>';

if(!empty($query)){   
  foreach ($query as $value) {
    $html .='<tr>';
    foreach ($third as $flds) {

      $html .='<td>'.$value->$flds.'</td>';
    }  
    $html .='</tr>';
  }  
}else{
  $html .='<tr>';

  $html .='<td colspan="'.count($field).'" class="text-center"> No Data Found </td>';

  $html .='</tr>';
} 
$html.='</table> '; 
}else if($tablcount==4){
  $array1 = $this->db->list_fields($tables[0]);
  $array2 = $this->db->list_fields($tables[1]);
  $array3 = $this->db->list_fields($tables[2]);
  $array4 = $this->db->list_fields($tables[3]);
                   // echo $tables[0];
  $result=array_intersect($array1,$array2);
  $res2=array_intersect($array2,$array3);
  $res3=array_intersect($array3,$array4);

  $joinid = (!empty($result[0])?$result[0]:$result[1]);
  $joinid2 =(!empty($res2[1])?$res2[1]:$res2[2]);
  $joinid3 =(!empty($res3[2])?$res3[2]:$res3[3]);
  $first =str_replace($tables[0].'.','',$field);
  $second =str_replace($tables[1].'.','',$first);
  $third =str_replace($tables[2].'.','',$second);
  $forth =str_replace($tables[3].'.','',$third);
  $this->db->select($f);
  $this->db->from($tables[0]);
  $this->db->join($tables[1],$tables[0].'.'.$joinid.'='.$tables[1].'.'.$joinid,'right');
  $this->db->join($tables[2],$tables[1].'.'.$joinid2.'='.$tables[2].'.'.$joinid2,'left');
  $this->db->join($tables[3],$tables[2].'.'.$joinid3.'='.$tables[3].'.'.$joinid3,'left');
  for ($i=0; $i < count($p); $i++) {
   $this->db->where($p[$i].' '.$operator[$i],$q[$i]);
 }
 $data = $this->db->get();
 $query = $data->result();
 $html.='<table  class="table table-border">
 <thead><tr>';
 foreach ($forth as $fild) {
  $html.='<th>'.display($fild).'</th>';
}
$html.='</tr></thead><tbody ></tbody>';

if(!empty($query)){ 
  foreach ($query as $value) {
    $html .='<tr>';
    foreach ($forth as $flds) {

      $html .='<td>'.$value->$flds.'</td>';
    }  
    $html .='</tr>';
  }
}else{
  $html .='<tr>';

  $html .='<td colspan="'.count($field).'" class="text-center"> No Data Found </td>';

  $html .='</tr>';
}   
$html.='</table> '; 
}else if($tablcount==5){
  $array1 = $this->db->list_fields($tables[0]);
  $array2 = $this->db->list_fields($tables[1]);
  $array3 = $this->db->list_fields($tables[2]);
  $array4 = $this->db->list_fields($tables[3]);
  $array5 = $this->db->list_fields($tables[4]);
                   // echo $tables[0];
  $result=array_intersect($array1,$array2);
  $res2=array_intersect($array2,$array3);
  $res3=array_intersect($array3,$array4);
  $res4=array_intersect($array2,$array5);
  $joinid = (!empty($result[0])?$result[0]:$result[1]);
  $joinid2 =(!empty($res2[1])?$res2[1]:$res2[2]);
  $joinid3 =(!empty($res3[2])?$res3[2]:$res3[3]);
  $joinid4 =(!empty($res4[0])?$res4[0]:$res4[1]);
  $first =str_replace($tables[0].'.','',$field);
  $second =str_replace($tables[1].'.','',$first);
  $third =str_replace($tables[2].'.','',$second);
  $forth =str_replace($tables[3].'.','',$third);
  $fifth =str_replace($tables[4].'.','',$forth);
  $this->db->select($f);
  $this->db->from($tables[0]);
  $this->db->join($tables[1],$tables[0].'.'.$joinid.'='.$tables[1].'.'.$joinid,'right');
  $this->db->join($tables[2],$tables[1].'.'.$joinid2.'='.$tables[2].'.'.$joinid2,'left');
  $this->db->join($tables[3],$tables[2].'.'.$joinid3.'='.$tables[3].'.'.$joinid3,'left');
  $this->db->join($tables[4],$tables[1].'.'.$joinid4.'='.$tables[4].'.'.$joinid4);
  for ($i=0; $i < count($p); $i++) {
   $this->db->where($p[$i].' '.$operator[$i],$q[$i]);
 }
 $data = $this->db->get();
 $query = $data->result();
 $html.='<table  class="table table-border">
 <thead><tr>';
 foreach ($fifth as $fild) {
  $html.='<th>'.display($fild).'</th>';
}
$html.='</tr></thead><tbody ></tbody>';

if(!empty($query)){ 
  foreach ($query as $value) {
    $html .='<tr>';
    foreach ($fifth as $flds) {

      $html .='<td>'.$value->$flds.'</td>';
    }  
    $html .='</tr>';
  }
}else{
  $html .='<tr>';

  $html .='<td colspan="'.count($field).'" class="text-center"> No Data Found </td>';

  $html .='</tr>';
}   
$html.='</table> '; 
}



echo $html;
}
}
