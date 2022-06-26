<?php
namespace Products;

use Database\ReturnAllFromTable as Db;

class Product extends Db {

    const ORDER_BY_PRICE_ASC = "price-asc";
    const ORDER_BY_PRICE_DSC = "price-dsc";
    

    private $id;
    private $barcode;
    private $title;
    private $description;
    private $img;
    private $price;
    private $category;
    private $brand;
    private $available;


    public function __construct($product){
        $this->id = $product['id'];
        $this->barcode = $product['barcode'];
        $this->title = $product['title'];
        $this->description = $product['descript'];
        $this->img = $product['img'];
        $this->price = $product['price'];
        $this->category = $product['category'];
        $this->brand = $product['brand'];
        $this->available = $product['available'];
    }
    public function getId(){
        return $this->id;
    }
    public function getBarcode(){
        return $this->barcode;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImg(){
        return $this->img;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getAvailable(){
        return $this->available;
    }

    /**
     * @return array of objects
     */
    public static function getAllProducts(){
        $allProducts = array();
        foreach (Db::fetchAllFromDatabaseTable("ec_products") as $product){
            $allProducts[] = new self($product);
        }
        return $allProducts;
    }
    /**
     * @return array of objects
     */
    /*
    public static function getAvailableProducts(){
        $availableProducts = array();
        foreach (self::getAllProducts() as $product){
            if($product->available == 1){
                $availableProducts[] = $product;
            }
        }
        return $availableProducts;
    }
    */
    /**
     * @return array of objects
     */
    public static function getFourRandomPruducts(){
        $randomProducts = array();
        foreach (self::getAvailableProducts(self::getAllProducts()) as $product){
            if(count($randomProducts)<4){
                $randomProducts[]=$product;
            } else {break;}
        }
        return $randomProducts;
    }
    /**
     * @return array of objects
     */
    
    public static function getProductsByOrderAsc(){
        $allProducts = array();
        foreach (Db::fetchAllByPriceAsc("ec_products") as $product){
            $allProducts[] = new self($product);
        }
        return $allProducts;  
    }

    /**
     * @return array of objects
     */
    public static function getProductsByOrderDsc(){
        $allProducts = array();
        foreach (Db::fetchAllByPriceDsc("ec_products") as $product){
            $allProducts[] = new self($product);
        }
        return $allProducts;  
    }

    /**
     * @param array of objects
     * @return array of objects
     */
    public static function getAvailableProducts($productsArray){
        $availableProducts = array();
        foreach ($productsArray as $product){
            if($product->available == 1){
                $availableProducts[] = $product;
            }
        }
        return $availableProducts;
    }
    /**
    * @param array $object_arr 
    * @param string $search_term 
    * @return array
    */
    public static function searchProducts($object_arr = [], $search_term){
        $filtered_arr = array();
        $search_term1 = strtolower($search_term);
        $object_arr = !empty($object_arr) ? $object_arr : self::getAvailableProducts(self::getAllProducts());
        foreach ($object_arr as $product) {
            if(str_contains(strtolower($product->getTitle()), $search_term1) || str_contains(strtolower($product->getDescription()), $search_term1)){
                $filtered_arr[] = $product;
            }
        }
        return $filtered_arr;
    }

    /**
     * @param string $id
     * @return object
     */
    public static function getOneProductById($id){
        $product_arr = self::getAvailableProducts(self::getAllProducts());
        foreach ($product_arr as $product){
            if ($product->getId() == $id) {
                return $product;
            }
        }
    }

    /**
     * @return array
     */
    public function getRelatedProducts(){
        $products_arr = array();
        foreach (self::getAvailableProducts(self::getAllProducts()) as $product) {
            if ($product->category == $this->category && $product->barcode != $this->barcode){
                $products_arr[] = $product;
                if (count($products_arr) == 3){
                    break;
                }
            }
        }
        return $products_arr;
    }

    /**
     * @return integer
     */
    public function getNextProductID(){
        $products_arr = self::getAvailableProducts(self::getAllProducts());
        foreach ($products_arr as $key => $value){
            if ($value->getBarcode() == $this->getBarcode()){
                if ($key == count($products_arr) -1){
                    return $products_arr[0]->getId();
                } else {
                    return $products_arr[$key+1]->getId();
                }
            }
        }
    }

    /**
     * @return integer
     */
    public function getPrevProductID(){
        $products_arr = self::getAvailableProducts(self::getAllProducts());
        foreach ($products_arr as $key => $value){
            if ($value->getBarcode() == $this->getBarcode()){
                if ($key == 0){
                    return $products_arr[count($products_arr)-1]->getId();   
                } else {
                    return $products_arr[$key - 1]->getId();
                }
            }
        }
    }
}
?>