<?php

class MProduct extends CI_Model
{
    public function getGoodsById($goods_id)
    {
        $ret = null;
        $query = $this->db->get_where('hxb_goods', array('id'=>$goods_id))->result();
        if (count($query) > 0) {
            $this->db->select('
            hxb_city.name_cn AS city,
            hxb_category.id AS category,
            hxb_product.name AS name, hxb_product.brief, hxb_product.img,
            hxb_goods.id, hxb_goods.price, hxb_goods.price_pre, hxb_goods.price_post,
            hxb_brand.name_cn AS brand');

            $city_id = $query[0]->id;
            $this->db->from('hxb_goods');
            $this->db->where('hxb_goods.id = ' . $goods_id);
            $this->db->join('hxb_product', 'hxb_product.id = hxb_goods.product_id');
            $this->db->join('hxb_city', 'hxb_city.id = hxb_goods.city_id');
            $this->db->join('hxb_brand', 'hxb_brand.id = hxb_product.brand_id');
            $this->db->join('hxb_category', 'hxb_category.id = hxb_product.category_id');
            $this->db->order_by('hxb_brand.id', 'asc');
            $this->db->order_by('hxb_goods.price', 'asc');
            $query = $this->db->get();
            $ret = $query->result();
            $ret = $ret[0];
        }

        return $ret;
    }

    public function getGoodsByCity($city, $size = 0, $offset = 0)
    {
        $ret = null;
        $city_query = $this->db->get_where('hxb_city', array('name_cn' => $city));
        $query = $city_query->result();
        if (count($query) > 0) {
            $this->db->select('
            hxb_city.name_cn AS city,
            hxb_category.id AS category,
            hxb_product.name AS name, hxb_product.brief, hxb_product.img,
            hxb_goods.id, hxb_goods.price, hxb_goods.price_pre, hxb_goods.price_post,
            hxb_brand.name_cn AS brand');

            $city_id = $query[0]->id;
            $this->db->from('hxb_goods');
            $this->db->where('hxb_goods.city_id = ' . $city_id);
            if ($size > 0 && $offset > 0) {
                $this->db->limit($size, $offset);
            }
            $this->db->join('hxb_product', 'hxb_product.id = hxb_goods.product_id');
            $this->db->join('hxb_city', 'hxb_city.id = hxb_goods.city_id');
            $this->db->join('hxb_brand', 'hxb_brand.id = hxb_product.brand_id');
            $this->db->join('hxb_category', 'hxb_category.id = hxb_product.category_id');
            $this->db->order_by('hxb_brand.id', 'asc');
            $this->db->order_by('hxb_goods.price', 'asc');
            $query = $this->db->get();
            $ret = $query->result();
        }

        return $ret;
    }
}
