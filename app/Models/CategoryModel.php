<?php

class CategoryModel extends CI_Model
{
    public function getCategoriesTree()
    {
        $this->load->helper('array');
        $query = $this->db->get('category_list');

        return $query;
    }
}
