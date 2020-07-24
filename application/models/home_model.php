<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
 
    
    public function __construct()
    {
        parent::__construct();
    }
    

    public function postBookingDetail($email,$name,$phone,$date)
    {
        $data = array('mail' => $email,
                        'name' => $name,
                        'phone' => $phone
                 );
        return $this->db->insert('booking', $data);
        
    }
 
    public function lastUpdateTip($id)
    {
        $sql = "SELECT *
                FROM tips
                WHERE tips.id != '$id'
               ORDER BY date DESC
               LIMIT 5
                ";
        $data = $this->db->query($sql)->result_array();
        
        return $data;
    }
    
    public function initProductPage()
    {
        $this->db->select('*');
        $data = $this->db->get('product', 2, 0);       
        $data = $data->result_array();
    
        return $data;
    }

    public function getProductByPageNumber($pageNumber)
    {
        $offset = ($pageNumber-1)*2;
        $this->db->select('*');
        $data = $this->db->get('product', 2, $offset)->result_array();
        
        return $data;
    }

    public function numberOfPage()
    {
        $this->db->select('*');
        $data = $this->db->get('product')->result_array();
        

        $numberOfPage = ceil(count($data)/2);
        return $numberOfPage;
    
    }
}

/* End of file home_model.php */

?> 