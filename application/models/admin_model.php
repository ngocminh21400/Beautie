<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class admin_model extends CI_Model {
 
     
    public function __construct() 
    {
        parent::__construct();
        //Do your magic here
    }
     
    public function login($username, $password)
    {
        $sql = "SELECT *
                FROM admin
                Where admin.username = '$username'
                AND admin.password = '$password'
                ";
        $data = $this->db->query($sql)->result_array();
        return $data;   
    }

    public function confirmEmail($email)
    {

        $this->db->select('*');
        $this->db->where('email', $email);
        $data = $this->db->get('admin');
        $data = $data->result_array();
        // echo '<pre>';
        // var_dump($data);
        // echo '</pre>';
        return count($data);
    }

    public function getVarify($email)
    {
        $this->db->select('varify');
        $this->db->where('email', $email);
        $data = $this->db->get('admin')->result_array();
        $varify = $data[0]['varify'];
        //$this->setNewVarify($email);
        return $varify;
        
    }

    public function setNewVarify($email)
    {

        $varify = rand(1000,9999);

        $data = array('varify' => $varify);
        $this->db->select('*');
        
        $this->db->where('email', $email);

        if($this->db->update('admin', $data))
        {
        return true;}
    }

    public function resetPassword($email, $password)
    {
        $data = array('email' => $email,
                        'password' => $password);
        $this->db->select('*');
        $this->db->where('email', $email);

        if($this->db->update('admin', $data))
        {
            return true;
        }
        
        
    }

    public function getSlideData()
    {
        $this->db->select('*');
        $this->db->where('attributeName', 'slide_topbanner');
        $data = $this->db->get('homeAttribute');
 
        $data = $data->result_array();

        //lấy phần json - thuộc tính trong cột value trong SQL
        foreach ($data as $key => $value) {
            $valueText = $value['value'];    
        }
 
        return $valueText;
    }

    public function updateSlideData($data)
    {
        $dataUpdate = array('attributeName' => 'slide_topbanner' ,
                    'value' => $data );
        $this->db->where('attributeName', 'slide_topbanner');
        return $this->db->update('homeAttribute', $dataUpdate);
            
    }
     
    public function getFooterData()
    {
        $this->db->select('value');
        $this->db->where('attributeName', 'footer');
        $data = $this->db->get('homeAttribute')->result_array();
        $valueText = $data[0]['value'];
        
        return $valueText;
        
    }

    public function updateFooter($data)
    {
        $dataUpdate = array('attributeName' => 'footer',
                            'value' => $data);
        $this->db->where('attributeName', 'footer');
        $this->db->update('homeAttribute', $dataUpdate);
        
        return true;
    }

    public function addProduct($name,$brand,$price,$description,$image,$ctgr_id)
    {
        $data = array('name' => $name,
                        'brand' => $brand,
                        'price' => $price,
                        'description'  => $description,
                        'ctgr_id' => $ctgr_id,
                        'image' => $image);

        $this->db->insert('product', $data);
        if($this->db->insert_id())
        {return true;}
        
        
    }

    public function getProduct()
    {
        $this->db->select('*');
        $data = $this->db->get('product');
        $data = $data->result_array();
        
        return $data;
    }

    public function getOneProduct($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $data = $this->db->get('product');
        $data = $data->result_array();
        
        return $data;
    }

    public function deleteProduct($id)
    {   
       // $this->db->select('*');
        
        $this->db->where('id', $id);
        return $this->db->delete('product');
        
    }

    public function getCategory()
    {
        $this->db->select('*');
        $data = $this->db->get('ctgr_detail');
        $data = $data->result_array();
        
        return $data;
    }

    public function addTip($title, $tip, $image)
    {
        
        $data = array('title' => $title ,
                        'tip' => $tip,
                        'image' => $image );

        $this->db->insert('tips', $data);
        if($this->db->insert_id())
        {
            return true;
        }
        
        
    }

    public function getTip()
    {
        $this->db->select('*');
        $data = $this->db->get('tips');
        $data = $data->result_array();
        
        return $data;
    } 

    public function getOneTip($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $data = $this->db->get('tips');
        $data = $data->result_array();

        // $sql = "SELECT * FROM tips WHERE id = 7";
        // $data = $this->db->query($sql);
        // $data = $data->result_array();
        
        return $data;
    }

    public function deleteTip($id)
    {
        //$this->db->select('*');
        $this->db->where('id', $id);
        
        
        return $this->db->delete('tips');
    }



 }
 
 /* End of file admin_model.php */
 
?>