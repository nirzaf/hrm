<?php

	
class booking_diary {


// Mysqli connection
function __construct($link) {
    $this->link = $link;

}

// Settings you can change:


// Time Related Variables
public $booking_start_time          = "09:30";			// The time of the first slot in 24 hour H:M format  
public $booking_end_time            = "19:00"; 			// The time of the last slot in 24 hour H:M format  
public $booking_frequency           = 30;   			// The slot frequency per hour, expressed in minutes.  	

// Day Related Variables

public $day_format					= 1;				// Day format of the table header.  Possible values (1, 2, 3)   
															// 1 = Show First digit, eg: "M"
															// 2 = Show First 3 letters, eg: "Mon"
															// 3 = Full Day, eg: "Monday"
	
public $day_closed					= array("Saturday", "Sunday"); 	// If you don't want any 'closed' days, remove the day so it becomes: = array();
public $day_closed_text				= "CLOSED"; 		// If you don't want any any 'closed' remove the text so it becomes: = "";

// Cost Related Variables
public $cost_per_slot				= 20.50;			// The cost per slot
public $cost_currency_tag			= "&pound;";		// The currency tag in HTML such as &euro; &pound; &yen;


//  DO NOT EDIT BELOW THIS LINE

public $day_order = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
public $day, $month, $year, $selected_date, $back, $back_month, $back_year, $forward, $forward_month, $forward_year, $bookings, $count, $days, $is_slot_booked_today;


/*========================================================================================================================================================*/


function make_calendar($selected_date, $back, $forward, $day, $month, $year) {

    // $day, $month and $year are the $_GET variables in the URL
    $this->day = $day;    
    $this->month = $month;
    $this->year = $year;
    echo $this->day .' ----day <br/> '. $this->month.' ---month <br/>  '.$this->year  .' ---year <br/>';
   
   
	// $back and $forward are Unix Timestamps of the previous / next month, used to give the back arrow the correct month and year 
    $this->selected_date = $selected_date;       
    $this->back = $back;
    $this->back_month = date("m", $back);
    $this->back_year = date("Y", $back); // Minus one month back arrow

    echo $this->selected_date .' ----selected_date <br/> ' ; 
    echo $this->back .' ----back <br/> ' ; 
    echo $this->back_month .' ----back_month <br/> ' ; 
    echo $this->back_year .' ----back_year <br/> ' ; 
    
    $this->forward = $forward;
    $this->forward_month = date("m", $forward);
    $this->forward_year = date("Y", $forward); // Add one month forward arrow    
    
    // Make the booking array
    $this->make_booking_array($year, $month);
    
}


function make_booking_array($year, $month, $j = 0) { 

	$stmt = $this->link->prepare("SELECT name, date, start FROM bookings WHERE date LIKE  CONCAT(?, '-', ?, '%')"); 

	$this->is_slot_booked_today = 0; // Defaults to 0

	$stmt->bind_param('ss', $year, $month);	
	$stmt->bind_result($name, $date, $start);	
	$stmt->execute();
	$stmt->store_result();
	$i=0;
	while($stmt->fetch()) {    

        echo $i."<br/>";  
		$this->bookings_per_day[$date][] = $start;
		$this->bookings[] = array(
            "name" => $name, 
            "date" => $date, 
            "start" => $start   

 		); 
	
	  

		// Used by the 'booking_form' function later to check whether there are any booked slots on the selected day  		
		if($date == $this->year . '-' . $this->month . '-' . $this->day) {
			$this->is_slot_booked_today = 1;
		} 

		$i++;

	}

	// Calculate how many slots there are per day
	$this->slots_per_day = 0;	
	for($i = strtotime($this->booking_start_time); $i<= strtotime($this->booking_end_time); $i = $i + $this->booking_frequency * 60) {
		$this->slots_per_day ++;
	}	

	$stmt->close();		
    $this->make_days_array($year, $month);    
            
} // Close function

 
function make_days_array($year, $month) { 

    // Calculate the number of days in the selected month                 
    $num_days_month = cal_days_in_month(CAL_GREGORIAN, $month, $year); 


    // Make $this->days array containing the Day Number and Day Number in the selected month	   
	
	for ($i = 1; $i <= $num_days_month; $i++) {	
	
		// Work out the Day Name ( Monday, Tuesday... ) from the $month and $year variables
        $d = mktime(0, 0, 0, $month, $i, $year); 
		
		// Create the array
        $this->days[] = array("daynumber" => $i, "dayname" => date("l", $d));

    		
    }   

	/*	
	Sample output of the $this->days array:
	
	[0] => Array
        (
            [daynumber] => 1
            [dayname] => Monday
        )

    [1] => Array
        (
            [daynumber] => 2
            [dayname] => Tuesday
        )
	*/
	
	$this->make_blank_start($year, $month);
	$this->make_blank_end($year, $month);	

} // Close function


function make_blank_start($year, $month) {

	/*
	Calendar months start on different days
	Therefore there are often blank 'unavailable' days at the beginning of the month which are showed as a grey block
	The code below creates the blank days at the beginning of the month
	*/	
	
	// Get first record of the days array which will be the First Day in the month ( eg Wednesday )
	$first_day = $this->days[0]['dayname'];	$s = 0;
		
		// Loop through $day_order array ( Monday, Tuesday ... )
		foreach($this->day_order as $i => $r) {
		
			// Compare the $first_day to the Day Order
			if($first_day == $r && $s == 0) {
				
				$s = 1;  // Set flag to 1 stop further processing
				
			} elseif($s == 0) {

				$blank = array(
					"daynumber" => 'blank',
					"dayname" => 'blank'
				);
			
				// Prepend elements to the beginning of the $day array
				array_unshift($this->days, $blank);
			}
			
	} // Close foreach	

} // Close function
	

function make_blank_end($year, $month) {

	/*
	Calendar months start on different days
	Therefore there are often blank 'unavailable' days at the end of the month which are showed as a grey block
	The code below creates the blank days at the end of the month
	*/
	
	// Add blank elements to end of array if required.
    $pad_end = 7 - (count($this->days) % 7);

    if ($pad_end < 7) {
	
		$blank = array(
			"daynumber" => 'blank',
			"dayname" => 'blank'
		);
	
        for ($i = 1; $i <= $pad_end; $i++) {							
			array_push($this->days, $blank);
		}
		
    } // Close if
		
	$this->calendar_top(); 

} // Close function
   
    
function calendar_top() {

	// This function creates the top of the table containg the date and the forward and back arrows 

	echo "
    <div id='lhs'><div id='outer_calendar'>
    
	<table border='0' cellpadding='0' cellspacing='0' id='calendar'>
        <tr id='week'>
        <td align='left'><a href='?month=" . date("m", $this->back) . "&amp;year=" . date("Y", $this->back) . "'>&laquo;</a></td>
        <td colspan='5' id='center_date'>" . date("F, Y", $this->selected_date) . "</td>    
        <td align='right'><a href='?month=" . date("m", $this->forward) . "&amp;year=" . date("Y", $this->forward) . "'>&raquo;</a></td>
    </tr>
    <tr>";
		
	/*
	Make the table header with the appropriate day of the week using the $day_format variable as user defined above
	Definition:
	
		1: Show First digit, eg: "M"
		2: Show First 3 letters, eg: "Mon"
		3: Full Day, eg: "Monday"		
		
	*/
	
	foreach($this->day_order as $r) {
	
		switch($this->day_format) {
		
			case(1): 	
				echo "<th>" . substr($r, 0, 1) . "</th>";					
			break;
			
			case(2):
				echo "<th>" . substr($r, 0, 3) . "</th>";			
			break;
			
			case(3): 	
				echo "<th>" . $r . "</th>";
			break;
			
		} // Close switch
	
	} // Close foreach

			
	echo "</tr>";   

	$this->make_cells();
    
} // Close function


function make_cells($table = '') {

	echo "<tr>";

	foreach($this->days as $i => $r) { // Loop through the date array

		$j = $i + 1; $tag = 0;	 		

		// If the the current day is found in the day_closed array, bookings are not allowed on this day  
		if(in_array($r['dayname'], $this->day_closed)) {			
			echo "\r\n<td width='21' valign='top' class='closed'>" . $this->day_closed_text . "</td>";		
			$tag = 1;
		}
		

		// Past days are greyed out
		if (mktime(0, 0, 0, $this->month, sprintf("%02s", $r['daynumber']) + 1, $this->year) < strtotime("now") && $tag != 1) {		
			
			echo "\r\n<td width='21' valign='top' class='past'>";			
				// Output day number 
				if($r['daynumber'] != 'blank') echo $r['daynumber']; 

			echo "</td>";		
			$tag = 1;
		}
		

		// If the element is set as 'blank', insert blank day
		if($r['dayname'] == 'blank' && $tag != 1) {		
			echo "\r\n<td width='21' valign='top' class='unavailable'></td>";	
			$tag = 1;
		}
				
				
		// Now check the booking array $this->booking to see whether we have a booking on this day 				
		$current_day = $this->year . '-' . $this->month . '-' . sprintf("%02s", $r['daynumber']);

		if(isset($this->bookings_per_day[$current_day]) && $tag == 0) {
		
			$current_day_slots_booked = count($this->bookings_per_day[$current_day]);

				if($current_day_slots_booked < $this->slots_per_day) {
				
					echo "\r\n<td width='21' valign='top'>
					<a href='calendar.php?month=" .  $this->month . "&amp;year=" .  $this->year . "&amp;day=" . sprintf("%02s", $r['daynumber']) . "' class='part_booked' title='This day is part booked'>" . 
					$r['daynumber'] . "</a></td>"; 
					$tag = 1;
				
				} else {
				
					echo "\r\n<td width='21' valign='top'>
					<a href='calendar.php?month=" .  $this->month . "&amp;year=" .  $this->year . "&amp;day=" . sprintf("%02s", $r['daynumber']) . "' class='fully_booked' title='This day is fully booked'>" . 
					$r['daynumber'] . "</a></td>"; 
					$tag = 1;			
				
				} // Close else	
		
		} // Close if

		
		if($tag == 0) {
		
			echo "\r\n<td width='21' valign='top'>
			<a href='calendar.php?month=" .  $this->month . "&amp;year=" .  $this->year . "&amp;day=" . sprintf("%02s", $r['daynumber']) . "' class='green' title='Please click to view bookings'>" . 
			$r['daynumber'] . "</a></td>";			
		
		}
		
		// The modulus function below ($j % 7 == 0) adds a <tr> tag to every seventh cell + 1;
			if($j % 7 == 0 && $i >1) {
			echo "\r\n</tr>\r\n<tr>"; // Use modulus to give us a <tr> after every seven <td> cells
		}		
		
	}		
		
	echo "</tr></table></div><!-- Close outer_calendar DIV -->";
	
	if(isset($_GET['year']))
	$this->basket();
		
	echo "</div><!-- Close LHS DIV -->";

	// Check booked slots for selected date and only show the booking form if there are available slots	
	$current_day = $this->year . '-' . $this->month . '-' . $this->day;	
	$slots_selected_day = 0;
	
	if(isset($this->bookings_per_day[$current_day]))
	$slots_selected_day = count($this->bookings_per_day[$current_day]);
	
	if($this->day != 0 && $slots_selected_day < $this->slots_per_day) { 
		$this->booking_form();
	}
	
	
} // Close function


function booking_form() {

	echo "
	<div id='outer_booking'><h2>Available Slots</h2>

	<p>
	The following slots are available on <span> " . $this->day . "-" . $this->month . "-" . $this->year . "</span>
	</p>
	
	<table width='400' border='0' cellpadding='2' cellspacing='0' id='booking'>
		<tr>
			<th width='150' align='left'>Start</th>
			<th width='150' align='left'>End</th>
			<th width='150' align='left'>Price</th>
			<th width='20' align='left'>Book</th>			
		</tr>
		<tr>
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
		</tr>";
				

		// Create $slots array of the booking times
		for($i = strtotime($this->booking_start_time); $i<= strtotime($this->booking_end_time); $i = $i + $this->booking_frequency * 60) {
			$slots[] = date("H:i:s", $i);  
		}			
				

		// Loop through $this->bookings array and remove any previously booked slots
		
		if($this->is_slot_booked_today == 1) { // $this->is_slot_booked_today created in function 'make_booking_array'
		
			foreach($this->bookings as $i => $b) { 
				
				if($b['date'] == $this->year . '-' . $this->month . '-' . $this->day) {

					// Remove any booked slots from the $slots array
					$slots = array_diff($slots, array($b['start']));
					
				} // Close if
				
			} // Close foreach
		
		} // Close if
		
				
		
		// Loop through the $slots array and create the booking table
		
		foreach($slots as $i => $start) {			

			// Calculate finish time
			$finish_time = strtotime($start) + $this->booking_frequency * 60; 
		
			echo "
			<tr>\r\n
				<td>" . $start . "</td>\r\n
				<td>" . date("H:i:s", $finish_time) . "</td>\r\n
				<td>" . $this->cost_currency_tag . number_format($this->cost_per_slot, 2) . "</td>\r\n
				<td width='110'><input data-val='" . $start . " - " . date("H:i:s", $finish_time) . "' class='fields' type='checkbox'></td>
			</tr>";
		
		} // Close foreach			
	
		echo "</table></div><!-- Close outer_booking DIV -->";
		

} // Close function


function basket($selected_day = '') {

	if(!isset($_GET['day']))
	$day = '01';
	else
	$day = $_GET['day'];	

	// Validate GET date values
	if(checkdate($_GET['month'], $day, $_GET['year']) !== false) {
		$selected_day = $_GET['year'] . '-' . $_GET['month'] . '-' . $day;	
	} else { 
		echo 'Invalid date!';
		exit();
	}
	
	echo "<div id='outer_basket'>
	
	<h2>Selected Slots</h2>
		
		<div id='selected_slots'></div>		
	
			<div id='basket_details'>
			
				<form method='post' action='book_slots.php'>
				
					<label>Name</label>
					<input name='name' id='name' type='text' class='text_box'>

					<label>Email</label>
					<input name='email' id='email' type='text' class='text_box'>	

					<label>Phone</label>
					<input name='phone' id='phone' type='text' class='text_box'>	

						<div id='outer_price'>
							<div id='currency'>" . $this->cost_currency_tag . "</div>
							<div id='total'></div>
						</div>									
					
					<input type='hidden' name='slots_booked' id='slots_booked'>
					<input type='hidden' name='cost_per_slot' id='cost_per_slot' value='" . $this->cost_per_slot . "'>
					<input type='hidden' name='booking_date' value='" . $_GET['year'] . '-' . $_GET['month'] . '-' . $day . "'>
					
					<input type='submit' class='classname' value='Make Booking'>

				</form>
			
			</div><!-- Close basket_details DIV -->
		
	</div><!-- Close outer_basket DIV -->";

} // Close function

                 
} // Close Class

?>