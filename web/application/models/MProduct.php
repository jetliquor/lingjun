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
        return $this->name. ' | '. $this->description;
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

    public function getProductById($product_id)
    {
        $ret = null;
        foreach ($this->data as $product) {
            if ($product->id == $product_id) {
                $ret = $product;
                break;
            }
        }
        return $ret;
    }

    public function getProductByCity($city, $size = 0)
    {
        $teaches = $this->db->get('test_teacher');
        $lle = $teaches->result();
        $ret = array();
        $count = 0;
        foreach ($this->data as $product) {
            if ($product->city == $city) {
                array_push($ret, $product);
                if (++$count == $size) {
                    break;
                }
            }
        }
        return $ret;
    }
}
