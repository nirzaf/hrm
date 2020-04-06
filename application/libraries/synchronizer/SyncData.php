<?php defined('BASEPATH') OR exit('No direct script access allowed');
/* 
* ------------------------------------------
* Developed by <sourav.diubd@gmail.com>
* ------------------------------------------
*/

class SyncData
{  
	private $incomingDir  = './assets/data/incoming/';

	public function importSQL()
	{  
		$ci =& get_instance();
        $mysqli = mysqli_connect( 
			$ci->db->hostname, 
			$ci->db->username, 
			$ci->db->password, 
			$ci->db->database
        );

		/* check connection */
		if ($mysqli->connect_errno) {
		    $data['error'] = "Connect failed: ". $mysqli->connect_error;
		    echo json_encode($data);
		    exit;
		}

       	$filePath = $this->incomingDir.'backup.sql';
       	
        if (file_exists($filePath) )
        {
        	$sql = file_get_contents($filePath);
			/* execute multi query */
			if ($mysqli->multi_query($sql)) {
				@unlink($filePath); 
				$mysqli->close();
				return true;
			} else {
				return false; 
			}

        } else {
        	return false;
        } 
    }

}
 
