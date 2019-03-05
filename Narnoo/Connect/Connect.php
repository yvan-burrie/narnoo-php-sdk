<?php

namespace Narnoo\Connect;
/**
*
*/
class Connect extends \Narnoo\Base
{
    
        public function getFollowing($value = NULL)
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
            $url = "/connect/following?".$query;
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /*
    *
    *   {"latitude":"167";"longitude":"-16"}
    */
    public function findBusinesses( $value = NULL,$data = NULL )
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
            $url = "/connect/find";
            $response = $this->callNarnooAPI("post",$url,NULL, $data);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }

    /*
    *
    *   {"name":"Narnoo"}
    */
    public function searchBusinesses($value = NULL)
    {
        try{
            $url = "/connect/search";
            $response = $this->callNarnooAPI("post",$url,NULL,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }

    /*
    *
    *   {"type":"operator","id":78}
    */
    public function followBusiness($value)
    {
        try{
            $url = "/connect/add";
            $response = $this->callNarnooAPI("post",$url,NULL,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }
    /*
    *
    *   {"type":"operator","id":78}
    */
    public function removeBusiness($value)
    {
        try{
            $url = "/connect/remove";
            $response = $this->callNarnooAPI("post",$url,NULL,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }






}

?>