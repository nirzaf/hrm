<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


/**
 * CodeIgniter CSV Import Class
 *
 * This library will help import a CSV file into
 * an associative array.
 * 
 * This library treats the first row of a CSV file
 * as a column header row.
 * 
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category        Libraries
 * @author          Brad Stinson
 */

class csvimport {

	private $filepath = "";
    private $handle = "";
    private $column_headers = "";

   /**
     * Function that parses a CSV file and returns results
     * as an array.
     *
     * @access  public
     * @param   filepath        string  Location of the CSV file
     * @param   column_headers  array   Alternate values that will be used for array keys instead of first line of CSV
     * @param   detect_line_endings  boolean  When true sets the php INI settings to allow script to detect line endings. Needed for CSV files created on Macs.
     * @return  array
     */
    public function get_array($filepath='', $column_headers='', $detect_line_endings=FALSE)
    {
        // If true, auto detect row endings
        if($detect_line_endings){
            ini_set("auto_detect_line_endings", TRUE);
        }

        // If file exists, set filepath
        if(file_exists($filepath))
        {
            $this->_set_filepath($filepath);
        }
        else
        {
            return FALSE;            
        }

        // If column headers provided, set them
        $this->_set_column_headers($column_headers);

        // Open the CSV for reading
        $this->_get_handle();
        
        $row = 0;

        while (($data = fgetcsv($this->handle, 0, ",")) !== FALSE) 
        {   
            // If first row, parse for column_headers
            if($row == 0)
            {
                // If column_headers already provided, use them
                if($this->column_headers)
                {
                    foreach ($this->column_headers as $key => $value)
                    {
                        $column_headers[$key] = trim($value);
                    }
                }
                else // Parse first row for column_headers to use
                {
                    foreach ($data as $key => $value)
                    {
                        $column_headers[$key] = trim($value);
                    }                
                }          
            }
            else
            {
                $new_row = $row - 1; // needed so that the returned array starts at 0 instead of 1
                foreach($column_headers as $key => $value) // assumes there are as many columns as their are title columns
                {
                    $result[$new_row][$value] = trim($data[$key]);
                }
            }
            $row++;
        }
 
        $this->_close_csv();

        return $result;
    }

   /**
     * Sets the filepath of a given CSV file
     *
     * @access  private
     * @param   filepath    string  Location of the CSV file
     * @return  void
     */
    private function _set_filepath($filepath)
    {
        $this->filepath = $filepath;
    }

   /**
     * Sets the alternate column headers that will be used when creating the array
     *
     * @access  private
     * @param   column_headers  array   Alternate column_headers that will be used instead of first line of CSV
     * @return  void
     */
    private function _set_column_headers($column_headers='')
    {
        if(is_array($column_headers) && !empty($column_headers))
        {
            $this->column_headers = $column_headers;
        }
    }

   /**
     * Opens the CSV file for parsing
     *
     * @access  private
     * @return  void
     */
    private function _get_handle()
    {
        $this->handle = fopen($this->filepath, "r");
    }

   /**
     * Closes the CSV file when complete
     *
     * @access  private
     * @return  array
     */
    private function _close_csv()
    {
        fclose($this->handle);
    }    
}