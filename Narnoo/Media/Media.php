<?php

namespace Narnoo\Media;
/**
*
*/
class Media extends \Narnoo\Base
{
    /**************************************************
    *
    *                --- IMAGES ---
    *
    **************************************************/
    
    /**
    *   @title: Get Images
    *   @date: 25.06.2018
    *   @param: array page | total
    *   @result: JSON
    */
    public function getImages($value = NULL)
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
            $url = "/image/list?".$query;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


     /**
    *   @title: Get Image Details
    *   @date: 25.06.2018
    *   @param: int image ID
    *   @param: array page | total
    *   @result: JSON
    */
    public function getImageDetails($id)
    {
        try{
            $url = "/image/details/".$id;
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /**************************************************
    *
    *                --- .IMAGES ---
    *
    **************************************************/

    /**************************************************
    *
    *                --- BROCHURES ---
    *
    **************************************************/
    
    /**
    *   @title: Get Images
    *   @date: 25.06.2018
    *   @param: array page | total
    *   @result: JSON
    */
    public function getPrints($value = NULL)
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
            $url = "/brochure/list?".$query;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


     /**
    *   @title: Get Image Details
    *   @date: 25.06.2018
    *   @param: int image ID
    *   @param: array page | total
    *   @result: JSON
    */
    public function getPrintDetails($id)
    {
        try{
            $url = "/brochure/details/".$id;
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /**************************************************
    *
    *                --- .BROCHURES ---
    *
    **************************************************/
    /**************************************************
    *
    *                --- Videos ---
    *
    **************************************************/
    
    /**
    *   @title: Get Images
    *   @date: 25.06.2018
    *   @param: array page | total
    *   @result: JSON
    */
    public function getVideos($value = NULL)
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
            $url = "/video/list?".$query;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


     /**
    *   @title: Get Image Details
    *   @date: 25.06.2018
    *   @param: int image ID
    *   @param: array page | total
    *   @result: JSON
    */
    public function getVideoDetails($id)
    {
        try{
            $url = "/video/details/".$id;
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /**************************************************
    *
    *                --- .Videos ---
    *
    **************************************************/

    /**************************************************
    *
    *                --- Logos ---
    *
    **************************************************/
    
    /**
    *   @title: Get Images
    *   @date: 25.06.2018
    *   @param: array page | total
    *   @result: JSON
    */
    public function getLogos($value = NULL)
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
            $url = "/logo/list?".$query;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


     /**
    *   @title: Get Image Details
    *   @date: 25.06.2018
    *   @param: int image ID
    *   @param: array page | total
    *   @result: JSON
    */
    public function getLogoDetails($id)
    {
       try{
            $url = "/logo/details/".$id;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /**************************************************
    *
    *                --- .Logos ---
    *
    **************************************************/

    /**************************************************
    *
    *                --- Albums ---
    *
    **************************************************/
    
    /**
    *   @title: Get Images
    *   @date: 25.06.2018
    *   @param: array page | total
    *   @result: JSON
    */
    public function getAlbums($value = NULL)
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
            $url = "/album/list?".$query;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


     /**
    *   @title: Get Image Details
    *   @date: 25.06.2018
    *   @param: int image ID
    *   @param: array page | total
    *   @result: JSON
    */
    public function getAlbumImages($id,$value = NULL)
    {
        $params = [];
        if(empty($value['page'])){
            $params['page'] = 1;
        }else{
            $params['page'] = $value['page'];
        }
        $query = http_build_query( $params );

        
        try{
            $url = "/album/images/".$id;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /**************************************************
    *
    *                --- .Albums ---
    *
    **************************************************/



}

?>