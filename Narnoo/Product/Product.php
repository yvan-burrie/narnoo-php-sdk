<?

namespace Narnoo\Product;
/**
*
*/
class Product extends \Narnoo\Base
{
    /**************************************************
    *
    *                --- Products ---
    *
    **************************************************/
    
    /**
    *   @title: Get Products
    *   @date: 25.06.2018
    *   @param: int business ID [optional]
    *   @result: JSON
    */
    public function getProducts($value = NULL)
    {   
        
        try{
            $url = "/product/list";
            if(!empty($value) && is_integer($value) ){
                $url .= "/".$value;
            }
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }

     /**
    *   @title: Get Product Details
    *   @date: 25.06.2018
    *   @param: int product ID [ required ]
    *   @param: int operator ID [ required if calling an operator product ID]
    *   @result: JSON
    */
    public function getProductDetails($id,$value = NULL)
    {   
        
        try{
            $url = "/product/list/".$id;
            if(!empty($value) && is_integer($value) ){
                $url .= "/".$value;
            }
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    
    /**************************************************
    *
    *                --- .Products ---
    *
    **************************************************/



}

?>