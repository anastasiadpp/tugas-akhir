<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends MY_Model
{
	function getAllData($cat)
    {
    	if($cat == 'document')
    	{
    		$this->db->join('document_links', 'document_links.link_id = document.link_id');
    		$this->db->join('portals', 'document.portal_id = portals.portal_id');
    	}
        if($cat == 'comment')
        {
            $this->db->join('document', 'document.document_id = comment.document_id');
            $this->db->join('document_links', 'document_links.link_id = document.link_id');
        }
        $query = $this->db->get($cat);
        return $query->result_array();
    }
    function getSpecificData($field, $table, $key)
    {
        $this->db->where($field, $key);
        $query = $this->db->get($table);
        return $query->result_array();
    }
    function getPortalList()
    {
        $query = $this->db->get('portals');
        return $query->result_array();
    }
    function getDetailedData($field, $whereField, $table, $key)
    {
        $this->db->select($field);
        $this->db->where($whereField, $key);
        $query = $this->db->get($table);
        return $query->result_array();
    }
    function getDetailDataIn($field, $table, $array)
    {
        $this->db->where_in($field, $array);
        $query = $this->db->get($table);
        return $query->result_array();
    }
}