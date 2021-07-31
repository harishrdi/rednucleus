<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Model
{
    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    /**
     * Method to get the users from the projects.
     *
     * @param       string  $str
     * @return      array
     */
    function getProjectUsers()
    {
        $query = "select *from projects";
        $res   = $this->db->query($query);
        if($res->result()) {
            return $res->result('array');
        } else {
            return array();
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */