<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: lv
 * Date: 2015/5/9
 * Time: 21:18
 */
class Product
{
    public function Product($id, $city, $name, $desc, $img, $price)
    {
        $this->id = $id;
        $this->city = $city;
        $this->name = $name;
        $this->description = $desc;
        $this->img = $img;
        $this->price = $price;
    }

    function __toString()
    {
        return $this->name . ' | ' . $this->description;
    }

    public $id;
    public $city;
    public $name;
    public $description;
    public $img;
    public $price;
}

class MProduct extends CI_Model
{
    private $data;

    public function MProduct()
    {
        parent::__construct();
        $this->data = array(
            new Product(0, 'shanghai', '上门安装', '专业培训、标准化服务、品质保障，加入会员更享优惠', '/image/product001.jpg', '￥200元/台'),
            new Product(1, 'shanghai', '上门换芯', '专业培训、标准化服务、品质保障，加入会员更享优惠', '/image/product002.jpg', '￥100元/台'),
            new Product(2, 'beijing', '上门换芯', '专业培训、标准化服务、品质保障，加入会员更享优惠', '/image/product002.jpg', '￥100元/台'),
            new Product(3, 'chongqing', '上门换芯', '专业培训、标准化服务、品质保障，加入会员更享优惠', '/image/product001.jpg', '￥80元/台'),
        );
    }

    public function getAll()
    {
        return $this->data;
    }

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
            $ret = $query->result()[0];
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
