<?php

/**
 * This block shows the downloads statistics
 *
 * @copyright &copy; 2010 Education Department of Catalonia
 * @author felix.casanellas@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

include_once("$CFG->dirroot/blocks/download_statistics/lib.php"); 

class block_download_statistics extends block_list {
    
    function init() {
        $this->title = get_string('download_statistics','block_download_statistics');
    }
    
    function has_config() {return false;}
    
    function applicable_formats() {
        return array('all' => true);
    }
    
    function get_content(){
        global $CFG;
      	if (has_capability('moodle/site:config', context_system::instance())) {
            if ($this->content !== NULL) {
                return $this->content;
            }
            
            $this->content = new stdClass;
            $this->content->items = array();
            $this->content->icons = array();
            $this->content->footer = '';
            
            $content = get_string('total_of_downloads','block_download_statistics');
            $content.= "<ul>";
            $old_dataname = '';
            if ($fields = block_download_statistics_fields()){
                foreach ($fields as $field){
                    if ($field['dataname'] != $old_dataname){
                        $content .= '<li> <b>' . $field['dataname'] . '</b></li>';
                        $old_dataname = $field['dataname'];
                    }
                    $content .= $field['name'] . ': ' . $field['downloads'].'<br>';
                }            
            }
            $content.="</ul>";
            $this->content->items[] = $content;
            return $this->content;    
        }                  
    }
}