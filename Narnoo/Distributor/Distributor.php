<?php

namespace Narnoo\Distributor;
/**
*
*/
class Distributor extends \Narnoo\Base
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
    public function getImages($distributorId,$value = NULL)
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
            $url = "/image/list/distributor/".$distributorId."?".$query;
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
    public function getImageDetails($id,$distributorId)
    {
        try{
            $url = "/image/details/".$id."/distributor/".$distributorId;
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
    public function getPrints($distributorId,$value = NULL)
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
            $url = "/brochure/list/distributor/".$id."?".$query;
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
    public function getPrintDetails($id,$distributorId)
    {
        try{
            $url = "/brochure/details/".$id."/distributor/".$distributorId;
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
    public function getVideos($distributorId,$value = NULL)
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
            $url = "/video/list/distributor/".$distributorId."?".$query;
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
    public function getVideoDetails($id,$distributorId)
    {
        try{
            $url = "/video/details/".$id."/distributor/".$distributorId;
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
    public function getLogos($distributorId,$value = NULL)
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
            $url = "/logo/list/distributor/".$distributorId."?".$query;
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
    public function getLogoDetails($id,$distributorId)
    {
       try{
            $url = "/logo/details/".$id."/distributor/".$distributorId;
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
    public function getAlbums($distributorId,$value = NULL)
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
            $url = "/album/list/distributor/".$distributorId;
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
    public function getAlbumImages($id,$distributorId,$value = NULL)
    {
        $params = [];
        if(empty($value['page'])){
            $params['page'] = 1;
        }else{
            $params['page'] = $value['page'];
        }
        $query = http_build_query( $params );

        
        try{
            $url = "/album/images/".$id."/distributor/".$distributorId;
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

    /**************************************************
    *
    *                --- Channel ---
    *
    **************************************************/

    /**
    *   @title: Get Channels
    *   @date: 02.08.2018
    *   @param: array page | total
    *   @result: JSON
    */
    public function getChannels($value = NULL)
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
            $url = "/channel/list?".$query;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /**
    *   @title: Get Channel Details
    *   @date: 02.08.2018
    *   @param: int Channel ID
    *   @param: array page | total
    *   @result: JSON
    */
    public function getChannelDetails( $id )
    {
       try{
            $url = "/channel/details/".$id;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }

    /**************************************************
    *
    *                --- .Channel ---
    *
    **************************************************/
    /**************************************************
    *
    *                --- Collection ---
    *
    **************************************************/

    /**
    *   @title: Get Collections
    *   @date: 02.08.2018
    *   @param: array page | total
    *   @result: JSON
    */
    public function getCollections($value = NULL)
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
            $url = "/collection/list?".$query;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    /**
    *   @title: Get Collection Details
    *   @date: 02.08.2018
    *   @param: int Channel ID
    *   @param: array page | total
    *   @result: JSON
    */
    public function getCollectionDetails( $id )
    {
       try{
            $url = "/collection/details/".$id;
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }
    /**************************************************
    *
    *                --- .Collection ---
    *
    **************************************************/



}

?>