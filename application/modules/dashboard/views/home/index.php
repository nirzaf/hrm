
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>


        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
       <div class="se-pre-con"></div>

                    
                    
                    
                 <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-primary">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a> 
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer"><span class="count-number"><?php 
                foreach ($emp as $value) {
                    echo $value;
                };
                 ?></span></div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">people</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Total Employee</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-warning">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh2" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a> 
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer"><span class="count-number"><?php 
                foreach ($atn as $emnu) {
                  
                };
                  echo  $emnu;
                 ?></span></div>
                                        <div class="cardbox-icon">
                                            <i class="material-icons">perm_contact_calendar</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Present Employee</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-success">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a> 
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer"><span class=""><?php 
                foreach($atnworkhour as $value) {
                   print($value);
                };
                 ?></span></div>
                                        <div class="cardbox-icon">
                                          <i class="material-icons">schedule</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Last Day worked hours</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="panel cardbox bg-dark">
                                    <div class="panel-body card-item panel-refresh">
                                        <a class="refresh" href="#">
                                            <span class="fa fa-refresh"></span>
                                        </a> 
                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                        <div class="timer"><span class="count-number"><?php 
                foreach ($transaction as $loan) {
                    
                }

foreach ($transactiondduct as $dduct) {
                    
                }
              echo ($loan-$dduct);
                 ?></span></div>
                                        <div class="cardbox-icon">
                                           <i class="material-icons">attach_money</i>
                                        </div>
                                        <div class="card-details">
                                            <h4>Today's Transaction</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./counter Number --> 
                             </div>

            <div class="row">
                <!-- Radar Chart -->
                <div class="col-sm-12 col-md-6">
                    <div class="panel panel-bd lobidisable">
                    
                        <div class="panel-body">
                            <div class="calendar"><?php echo $notes?></div>
                        </div>
                    </div>
                </div><!-- Calender -->
                
                <div class="col-sm-12 col-md-6">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-body" style="padding-top: 0px">
                            <h4><b>Attendence</b><span class="s_date" style="padding-left: 10px">Details <?php echo "$day $month $year";?></span></h4>
                            <div class="attendence">
                               <div class="table-responsive">
                                       <div class="detail_event">
                <?php 
                    if(isset($events)){
                        $i = 1;
                        foreach($events as $e){
                         if($i % 2 == 0){
                                echo '<div class="info2"><table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                
                                                <th>Attent Employees</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>'.$e['department_name'].'</td>
                                               
                                                <td>'.$e['att_id'].'</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>';
                            }else{
                                echo '<div class="info2"><table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                
                                                <th>Attent Employees</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>'.$e['department_name'].'</td>
                                               
                                                <td>'.$e['att_id'].'</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>';
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
                            <h4><b>Today's Notice</b></h4>
                            <div class="transaction">
                               <div class="table-responsive">
                                     <div class="detail_notice">
            
                <?php 
                    if(isset($notice)){
                        $i = 1;
                        foreach($notice as $e){
                         if($i % 2 == 0){
                            $f="/";
                                echo '<div class="info3"><a href="home/view_details'.                                $f.''.$e['id'].'" class="view" target="blank"><h3><i class="fa fa-eye"></i></h3></a><p>Notice For:'.$e['notice_type'].'</p><p>Notice By:'.$e['notice_by'].'</p></a>
                          
                                </div>';
                            }else{
                                $f="/";
                                echo '<div class="info3">
                                <a href="home/view_details'.                                $f.''.$e['id'].'" class="view" target="blank"><h3><i class="fa fa-eye"></i></h3></a>
                                <p>Notice For:'.$e['notice_type'].'</p><p>Notice By:'.$e['notice_by'].'</p></a></div>';

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
                            <h4><b>Loan Payment</b></h4>
                            <div class="payment">
                               <div class="detail_loan">
            
                <?php 
                    if(isset($loans)){
                        $i = 1;
                        foreach($loans as $e){
                         if($i % 2 == 0){
                                echo '<div class="info6">
                                <table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>Loan Amount</th>
                                                <th>Details </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>'.$e['first_name'].'  '.$e['last_name'].'</td>
                                                <td>'.$e['amount'].'</td>
                                                <td>'.$e['loan_details'].'</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table></div>';
                            }else{
                                echo '<div class="info6"><table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>Loan Amount</th>
                                                <th>Details </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>'.$e['first_name'].'  '.$e['last_name'].'</td>
                                                <td>'.$e['amount'].'</td>
                                                <td>'.$e['loan_details'].'</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table></div>';
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
                                <h4><b>Leave</b></h4>
                                <div class="payment">
                                     <div class="detail_leave">
            
                <?php 
                    if(isset($leave)){
                        $i = 1;
                        foreach($leave as $e){
                         if($i % 2 == 0){
                                echo '<div class="info5"><table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>Leave Day</th>
                                                <th>Leave finish </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>'.$e['first_name'].'  '.$e['last_name'].'</td>
                                                <td>'.$e['num_aprv_day'].'</td>
                                                <td>'.$e['leave_aprv_end_date'].'</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table></div>';
                            }else{
                                echo '<div class="info5"><table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>Leave Day</th>
                                                <th>Leave finish </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>'.$e['first_name'].'  '.$e['last_name'].'</td>
                                                <td>'.$e['num_aprv_day'].'</td>
                                                <td>'.$e['leave_aprv_end_date'].'</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table></div>';
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
                    </div>
                </div>
            </div>
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Counter js --> 
        <script src="<?php echo base_url('assets/plugins/counterup/waypoints.js') ?>" type="text/javascript"></script>

       <script src="<?php echo base_url('assets/plugins/counterup/jquery.counterup.min.js') ?>" type="text/javascript"></script>
       <script src="<?php echo base_url('assets/plugins/sparkline/sparkline.min.js') ?>" type="text/javascript"></script>
        <!-- Sparklines js -->
       
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
                
                
                //panel refresh
                $.fn.refreshMe = function (opts) {
                    var $this = this,
                            defaults = {
                                ms: 1500,
                                started: function () {},
                                completed: function () {}
                            },
                            settings = $.extend(defaults, opts);

                    var panelToRefresh = $this.parents('.panel').find('.refresh-container');
                    var dataToRefresh = $this.parents('.panel').find('.refresh-data');
                    var ms = settings.ms;
                    var started = settings.started;		//function before timeout
                    var completed = settings.completed;	//function after timeout

                    $this.click(function () {
                        $this.addClass("fa-spin");
                        panelToRefresh.show();
                        started(dataToRefresh);
                        setTimeout(function () {
                            completed(dataToRefresh);
                            panelToRefresh.fadeOut(800);
                            $this.removeClass("fa-spin");
                        }, ms);
                        return false;
                    });
                };

                $(document).ready(function () {
                    $('.refresh, .refresh2').refreshMe({
                        started: function (ele) {
                            ele.html("Getting new data..");
                        },
                        completed: function (ele) {
                            ele.html("This is the new data after refresh..");
                        }
                    });
                });
                
            
            $('.event_inner').slimScroll({
                size: '3px',
                height: '440px',
                allowPageScroll: true,
                railVisible: true
            });
            
            $('.attendence, .notice, .payment, .transaction').slimScroll({
                size: '3px',
                height: '80px',
                allowPageScroll: true,
                railVisible: true
            });

            });
        </script>
        <script>
       
		$(".detail").live('click',function(){
			$(".s_date").html("Details of "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '<input type="hidden" name="add" value="Add New" val="'+day+'" class="add_event"/>';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("dashboard/home/detail_event");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info2"><table class="table table-bordered"><thead><tr><th>Department Name</th><th>Attent Employees</th></tr></thead><tbody><tr><td>'+value.department_name+'</td><td>'+value.att_id+'</td></tr></tbody></table></div>';
							}
							else{
								html = html+'<div class="info2"><table class="table table-bordered"><thead><tr><th>Department Name</th><th>Attent Employees</th></tr></thead><tbody><tr><td>'+value.department_name+'</td><td>'+value.att_id+'</td></tr></tbody></table></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html+add;
					$( ".detail_event" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
			
		});
		
$(".detail").live('click',function(){
			$(".s_date").html(" Details of "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '<input type="hidden" name="add" value="Add New" val="'+day+'" class="add_event"/>';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("dashboard/home/detail_notice");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info3"><a href="home/view_details/'+value.id+'" class="view" target="blank"><h3><i class="fa fa-eye"></i></h2></a><h4>Notice:'+value.notice_type+'</h3><p>Notice By:'+value.notice_by+'</p></div>';
							}
							else{
								html = html+'<div class="info4"><a href="home/view_details/'+value.id+'" class="view" target="blank"><h3><i class="fa fa-eye"></i></h3></a><h4>Notice:'+value.notice_type+'</h4><p>Notice By:'+value.notice_by+'</p></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html+add;
					$( ".detail_notice" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
			
		});
		
		$(".detail").live('click',function(){
			$(".s_date").html(" Details of "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '<input type="hidden" name="add" value="Add New" val="'+day+'" class="add_event"/>';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("dashboard/home/detail_leave");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info5"><table class="table table-bordered"><thead><tr><th>Employee Name</th><th>Leave Day</th><th>Leave finish</th></tr></thead><tbody><tr><td>'+value.first_name+' '+value.last_name+'</td><td>'+value.num_aprv_day+'</td><td>'+value.leave_aprv_end_date+'</td></tr></tbody></table></div>';
							}
							else{
								html = html+'<div class="info5"><table class="table table-bordered"><thead><tr><th>Employee Name</th><th>Leave Day</th><th>Leave finish</th></tr></thead><tbody><tr><td>'+value.first_name+' '+value.last_name+'</td><td>'+value.num_aprv_day+'</td><td>'+value.leave_aprv_end_date+'</td></tr></tbody></table></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html+add;
					$( ".detail_leave" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
			
		});

		$(".detail").live('click',function(){
			$(".s_date").html(" Details of "+$(this).attr('val')+" <?php echo "$month $year";?>");
			var day = $(this).attr('val');
			var add = '<input type="hidden" name="add" value="Add New" val="'+day+'" class="add_event"/>';
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: "<?php echo site_url("dashboard/home/detail_loan");?>",
				data:{<?php echo "year: $year, mon: $mon";?>, day: day},
				success: function( data ) {
					var html = '';
					if(data.status){
						var i = 1;
						$.each(data.data, function(index, value) {
						    if(i % 2 == 0){
								html = html+'<div class="info6"><table class="table table-bordered"><thead><tr><th>Employee Name</th><th>Loan Amount</th><th>Details</th></tr></thead><tbody><tr><td>'+value.first_name+' '+value.last_name+'</td><td>'+value.amount+'</td><td>'+value.loan_details+'</td></tr></tbody></table></div>';
							}
							else{
								html = html+'<div class="info6"><table class="table table-bordered"><thead><tr><th>Employee Name</th><th>Loan Amount</th><th>Details</th></tr></thead><tbody><tr><td>'+value.first_name+' '+value.last_name+'</td><td>'+value.amount+'</td><td>'+value.loan_details+'</td></tr></tbody></table></div>';
							} 
							i++;
						});
					}else{
						html = '<div class="message"><h4>'+data.title_msg+'</h4><p>'+data.msg+'</p></div>';
					}
					html = html+add;
					$( ".detail_loan" ).fadeOut("slow").fadeIn("slow").html(html);
				} 
			});
			
		});
</script>
