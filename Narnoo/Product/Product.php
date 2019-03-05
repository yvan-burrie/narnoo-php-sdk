<?php

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

        $params = [];
        if(empty($value['page'])){
            $params['page'] = 1;
        }else{
            $params['page'] = $value['page'];
        }
        if(!empty($value['total'])){
            $params['total'] = $value['total'];
        }
        $query = http_build_query( $params );
        
        try{
            

            $url = "/product/list";
            if( !empty($value['operator']) ){
                $url .= "/".$value['operator'];
            }
            $url .= "?".$query;


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
    public function getProductDetails( $id, $operator=NULL )
    {   
        
        try{
            $url = "/product/details/".$id;

            if( !empty($operator) ){
                $url .= "/".$operator;
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