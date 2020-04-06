

<style>

.nav-tabs > li > a {
    background:#4682B4;
    border-radius:4px 4px 0 0;
    color:#ffffff;
}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
    background: #0e0d0d;
    color:#ffffff;
}
.nav-tabs > li > a:hover {
    background: #0e0d0d;
    border-radius:4px 4px 0 0;
    color:#ffffff;
}

</style>

<ul  class="nav nav-tabs" role="tablist">
  
    <li class="active"><a href="#home"  role="tab" data-toggle="tab" class="btn btn-primary"><?php echo display('basic_information')?></a></li>
    <li><a href="#menu1"  role="tab" data-toggle="tab" class="btn btn-primary"><?php echo display('past_experience')?></a></li>
    <li><a href="#menu2"  role="tab" data-toggle="tab" class="btn btn-primary"><?php echo display('educational_information')?></a></li>
  </ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="row">
    <!--  table area -->

    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                             <th><?php echo display('Sl') ?></th>
                             <th><?php echo display('name') ?></th>
                             <th><?php echo display('can_id') ?></th>
                             <th><?php echo display('picture') ?></th>
                             <th><?php echo display('email') ?></th>
                              <th><?php echo display('ssn') ?></th>
                             <th><?php echo display('phone') ?></th>
                             <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($caninfo)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($caninfo as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->first_name.' '.$que->last_name; ?></td>
                                   <td><?php echo $que->can_id; ?></td>
                                   <td>
                                    <?php echo "<img src='" . base_url().$que->picture."' width=60px; height=60px; class=img-circle>";?>
                                    </td>
                                    <td><?php echo $que->email; ?></td>
                                     <td><?php echo $que->ssn; ?></td>
                                    <td><?php echo $que->phone; ?></td>
                                     <td class="center">
                                    <?php if($this->permission->method('circularprocess','update')->access()): ?>
                                        <a href="<?php echo base_url("circularprocess/Candidate/update_canifo_form/$que->can_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                         <?php endif; ?>
                                    
                                    <?php if($this->permission->method('circularprocess','delete')->access()): ?> 
                                        <a href="<?php echo base_url("circularprocess/Candidate/delete_canInfo/$que->can_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
                                        <?php endif; ?> 
                                        <?php if($this->permission->method('circularprocess','read')->access()): ?> 
                                        <a href="<?php echo base_url("circularprocess/Candidate/cv/$que->can_id");?>" class="btn btn-default btn-xs"> <i class="fa fa-eye"></i></a>
                                        <?php endif; ?> 
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
    
</div>
  </div>

<!--######## work experience porsion #########################-->
  <div id="menu1" class="tab-pane fade">
   
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('company_name') ?></th>
                             <th><?php echo display('working_period') ?></th>
                            <th><?php echo display('duties') ?></th>
                             <th><?php echo display('supervisor') ?></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($exp)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($exp as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->company_name; ?></td>
                                    <td><?php echo $que->working_period; ?></td>
                                    <td><?php echo $que->duties; ?></td>
                                    <td><?php echo $que->supervisor; ?></td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
 
 
  </div>
  <!--######## Educational  porsion #########################-->
  <div id="menu2" class="tab-pane fade">
<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><?php echo display('Sl') ?></th>
                            <th><?php echo display('can_id') ?></th>
                            <th><?php echo display('degree_name') ?></th>
                             <th><?php echo display('university_name') ?></th>
                            <th><?php echo display('cgp') ?></th>
                             <th><?php echo display('comments') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($edu)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($edu as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $que->can_id; ?></td>
                                    <td><?php echo $que->degree_name; ?></td>
                                    <td><?php echo $que->university_name; ?></td>
                                    <td><?php echo $que->cgp; ?></td>
                                    <td><?php echo $que->comments; ?></td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
            </div>
        </div>
    </div>
</div>
 
 
  </div>
</div>





 
 