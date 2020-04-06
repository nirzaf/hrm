<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>event/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>event/css/colorbox.css"/>
    <script type="text/javascript" src="<?php echo base_url();?>event/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>event/js/jquery.colorbox-min.js"></script>

        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
       <div class="se-pre-con"></div>

  <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2  style="text-align: center;"><span class="count-number"><?php 
                foreach ($emp as $value) {
                    echo $value;
                };
                 ?></span></h2>
                                        <div class="small"  style="text-align: center;">Total Employees</div>
                                        <div class="sparkline4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2 style="text-align: center;"><span class="count-number"><?php 
                foreach ($atn as $emnu) {
                    echo $emnu;
                };
                 ?></span></h2>
                                        <div class="small"  style="text-align: center;">Today's Present</div>
                                        <div class="sparkline2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2  style="text-align: center;"><span class="count-number"><?php 
                foreach ($atn as $emnu) {
                    echo  $value-$emnu;
                };
                 ?></span></h2>
                                        <div class="small"  style="text-align: center;">Absent</div>
                                        <div class="sparkline3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="panel panel-bd">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2 style="text-align: center;"><span class="count-number"><?php 
                foreach ($lnamount as $loan) {
                    echo $loan;
                };
                 ?></span></h2>
                                        <div class="small"  style="text-align: center;"><?php echo display('total_loan_amount')?></div>
                                        <div class="sparkline4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<div id="evencal">
<div class="row">
    <!-- Bar Chart -->
    <div class="col-sm-12 col-md-8">
        <div class="panel panel-bd lobidisable">

           <div class="event_detail">
            <h2 class="s_date">View Details<?php echo "$day $month $year";?></h2>
            <div class="detail_event">
                <?php 
                    if(isset($events)){
                        $i = 1;
                        foreach($events as $e){
                         if($i % 2 == 0){
                                echo '<div class="info1"><h4>'.$e['time'].'<img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>Employee'.$e['employee_id'].'</p>
                          
                                </div>';
                            }else{
                                echo '<div class="info2"><h4>'.$e['time'].'<img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>Attend:'.$e['employee_id'].'</p></div>';
                            } 
                            $i++;
                        }
                    }else{
                        echo '<div class="message"><h4>No Result</h4><p>There\'s no result in this date</p></div>';
                    }
                ?>
                
                <!-- <input type="button" name="add" value="Add Event" val="<?php echo $day;?>" class="add_event"/> -->
            </div>
        </div>
        <div class="event_detail">
            
            <div class="detail_notice">
            
                <?php 
                    if(isset($notice)){
                        $i = 1;
                        foreach($notice as $e){
                         if($i % 2 == 0){
                                echo '<div class="info1"><h4>'.$e['time'].'<img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>'.$e['notice_type'].'</p>
                          
                                </div>';
                            }else{
                                echo '<div class="info2"><h4>'.$e['time'].'<img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>'.$e['notice_type'].'</p></div>';
                            } 
                            $i++;
                        }
                    }else{
                        echo '<div class="message"><h4>No Result</h4><p>There\'s no result in this date</p></div>';
                    }
                ?>
                <!-- <input type="button" name="add" value="Add Event" val="<?php echo $day;?>" class="add_event"/> -->
            </div>
        </div>

         <div class="event_detail">
            
            <div class="detail_leave">
            
                <?php 
                    if(isset($leave)){
                        $i = 1;
                        foreach($leave as $e){
                         if($i % 2 == 0){
                                echo '<div class="info1"><h4>'.$e['time'].'<img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>'.$e['employee_id'].'</p>
                          
                                </div>';
                            }else{
                                echo '<div class="info2"><h4>'.$e['time'].'<img src="'.base_url().'css/images/delete.png" class="delete" alt="" title="delete this event" day="'.$day.'" val="'.$e['id'].'" /></h4><p>'.$e['employee_id'].'</p></div>';
                            } 
                            $i++;
                        }
                    }else{
                        echo '<div class="message"><h4>No Result</h4><p>There\'s no result in this date</p></div>';
                    }
                ?>
                <!-- <input type="button" name="add" value="Add Event" val="<?php echo $day;?>" class="add_event"/> -->
            </div>
        </div>
        </div>
    </div>
    <!-- Radar Chart -->
    <div class="col-sm-12 col-md-4">
   

<div class="calendar">
            <?php echo $notes?>
            
        </div>
 
        
    </div>
    <!-- Line Chart -->
    
</div>
 </div>

        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Counter js --> 
        <script src="<?php echo base_url('assets/plugins/counterup/waypoints.js') ?>" type="text/javascript"></script>

       <script src="<?php echo base_url('assets/plugins/counterup/jquery.counterup.min.js') ?>" type="text/javascript"></script>
       <script src="<?php echo base_url('assets/plugins/sparkline/sparkline.min.js') ?>" type="text/javascript"></script>
        <!-- Sparklines js -->
       
        <!-- End Page Lavel Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->

       


<!-- Chart js -->


<!-- Dashboard js -->
        
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //Sparklines Charts
                $('.sparkline1').sparkline([4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 7, 4, 3, 1], {
                    type: 'bar',
                    barColor: '#37a000',
                    height: '30',
                    barWidth: '8',
                    barSpacing: 1
                });
                $(".sparkline2").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {
                    type: 'line',
                    height: '30',
                    width: '100%',
                    lineColor: '#37a000',
                    fillColor: '#fff'
                });
                $(".sparkline3").sparkline([2, 5, 3, 7, 5, 10, 3, 6, 5, 7], {
                    type: 'line',
                    height: '30',
                    width: '100%',
                    lineColor: '#37a000',
                    fillColor: '#fff'
                });
                $(".sparkline4").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                    type: 'line',
                    height: '30',
                    width: '100%',
                    lineColor: '#37a000',
                    fillColor: 'rgba(55, 160, 0, 0.7)'
                });
                $("#sparkline5").sparkline([34, 43, 43, 35, 44, 32, 44, 52, 25], {
                    type: 'line',
                    lineColor: '#37a000',
                    fillColor: '#37a000',
                    width: '150',
                    height: '20'
                });
                $("#sparkline6").sparkline([5, 6, 7, 2, 0, -4, -2, 4], {
                    type: 'bar',
                    barColor: '#37a000',
                    negBarColor: '#c6c6c6',
                    width: '150',
                    height: '20'
                });
                $("#sparkline7").sparkline([10, 2], {
                    type: 'pie',
                    sliceColors: ['#37a000', '#ffffff'],
                    width: '150',
                    height: '20'
                });
                $("#sparkline8").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
                    type: 'line',
                    lineColor: '#37a000',
                    fillColor: '#37a000',
                    width: '150',
                    height: '20'
                });
                $("#sparkline9").sparkline([1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1], {
                    type: 'tristate',
                    posBarColor: '#37a000',
                    negBarColor: '#ffffff',
                    width: '150',
                    height: '20'
                });
                $("#sparkline10").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7], {
                    type: 'discrete',
                    lineColor: '#37a000',
                    width: '150',
                    height: '20'
                });

            });
            
        </script>