<?php

namespace Narnoo\Business;
/**
*
*/
class Business extends \Narnoo\Base
{
    /**************************************************
    *
    *                --- Listing ---
    *
    **************************************************/
    
     /**
    *   @title: Get Listing
    *   @date: 25.06.2018
    *   @param: int business ID [optional]
    *   @result: JSON
    */
    public function getListing($operatorId = NULL)
    {   
        
        try{
            $url = "/business/listing";
            if( !empty($operatorId) ){
                $url .= "/".$operatorId;
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
    *                --- .Listing ---
    *
    **************************************************/



}

?>