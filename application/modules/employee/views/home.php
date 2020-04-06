<h1>inventory </h1>
<h3><?php echo $title ?> </h3>

<?php
$s = $this->session->userdata();
print_r($s);

echo "<img src='".base_url('application/modules/inventory/assets/images/t.gif')."'>";
