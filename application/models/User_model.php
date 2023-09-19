<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{

      public function __construct() {
        parent::__construct();
    }

  function get_admin()
 {
     $this->db->select('*');
     $this->db->from('admin');
     $this->db->where('id',$this->session->userdata('seflofinancial'));
    $query = $this->db->get();
    if ( $query->num_rows() > 0 )
    {
        $row = $query->result_array();
        return $row;
    }
 }
 

    function totalcounts()
    {
        /*$result['categories']=$this->total_categories();
        $result['subcategories']=$this->total_subcategories();
        $result['subcategories2']=$this->total_subcategories2();
        $result['subcategories3']=$this->total_subcategories3();
        $result['subcategories4']=$this->total_subcategories4();
        $result['products']=$this->total_products();
        $result['vendors']=$this->total_vendors();
        $result['users']=$this->total_users();
        $result['size']=$this->total_size();
        $result['trending_vendor']=$this->total_trending_vendor();
        $result['trending_products']=$this->total_trending_products();
        $result['locations']=$this->total_locations();
        $result['vendor_types']=$this->total_vendor_types();
        $result['expertise']=$this->total_expertise();
        $result['price_range']=$this->total_price_range();
        return $result;*/
    }

    function total_users()
    {
      return $this->db->select('count(uid) as totalusers')->where('status',1)->get('user')->row()->totalusers;
    }
    
   }