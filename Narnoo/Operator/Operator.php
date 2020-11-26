<?php

namespace Narnoo\Operator;

use Exception;
use Narnoo\Base;

/**
 *
 */
class Operator extends Base
{
    /**
     * @title: Get Images
     * @date: 25.06.2018
     * @param: array page | total
     * @result: JSON
     */
    public function getImages($operatorId, $value = NULL)
    {

        $params = [];
        if (empty($value['page']))
        {
            $params['page'] = 1;
        }
        else
        {
            $params['page'] = $value['page'];
        }
        if (!empty($value['total']))
        {
            $params['total'] = $value['total'];
        }
        $query = http_build_query($params);

        try
        {
            $url = "/image/list/operator/" . $operatorId . "?" . $query;
            $response = $this->callNarnooAPI("get", $url, $value);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }


    /**
     * @title: Get Image Details
     * @date: 25.06.2018
     * @param: int image ID
     * @param: array page | total
     * @result: JSON
     */
    public function getImageDetails($id, $operatorId)
    {
        try
        {
            $url = "/image/details/" . $id . "/operator/" . $operatorId;
            $response = $this->callNarnooAPI("get", $url);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }

    /**
     * @title: Get Images
     * @date: 25.06.2018
     * @param: array page | total
     * @result: JSON
     */
    public function getPrints($operatorId, $value = NULL)
    {
        $params = [];
        if (empty($value['page']))
        {
            $params['page'] = 1;
        }
        else
        {
            $params['page'] = $value['page'];
        }
        if (!empty($value['total']))
        {
            $params['total'] = $value['total'];
        }

        $query = http_build_query($params);

        try
        {
            $url = "/brochure/operator/" . $id . "?" . $query;
            $response = $this->callNarnooAPI("get", $url, $value);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }

    /**
     * @title: Get Image Details
     * @date: 25.06.2018
     * @param: int image ID
     * @param: array page | total
     * @result: JSON
     */
    public function getPrintDetails($id, $operatorId)
    {
        try
        {
            $url = "/brochure/details/" . $id . "/operator/" . $operatorId;
            $response = $this->callNarnooAPI("get", $url);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }

    /**
     * @title: Get Images
     * @date: 25.06.2018
     * @param: array page | total
     * @result: JSON
     */
    public function getVideos($operatorId, $value = NULL)
    {
        $params = [];
        if (empty($value['page']))
        {
            $params['page'] = 1;
        }
        else
        {
            $params['page'] = $value['page'];
        }
        if (!empty($value['total']))
        {
            $params['total'] = $value['total'];
        }
        $query = http_build_query($params);

        try
        {
            $url = "/video/operator/" . $operatorId . "?" . $query;
            $response = $this->callNarnooAPI("get", $url, $value);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }

    /**
     * @title: Get Image Details
     * @date: 25.06.2018
     * @param: int image ID
     * @param: array page | total
     * @result: JSON
     */
    public function getVideoDetails($id, $operatorId)
    {
        try
        {
            $url = "/video/details/" . $id . "/operator/" . $operatorId;
            $response = $this->callNarnooAPI("get", $url);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }

    /**
     * @title: Get Images
     * @date: 25.06.2018
     * @param: array page | total
     * @result: JSON
     */
    public function getLogos($operatorId, $value = NULL)
    {

        $params = [];
        if (empty($value['page']))
        {
            $params['page'] = 1;
        }
        else
        {
            $params['page'] = $value['page'];
        }
        if (!empty($value['total']))
        {
            $params['total'] = $value['total'];
        }
        $query = http_build_query($params);

        try
        {
            $url = "/logo/operator/" . $operatorId . "?" . $query;
            $response = $this->callNarnooAPI("get", $url, $value);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }


    /**
     * @title: Get Image Details
     * @date: 25.06.2018
     * @param: int image ID
     * @param: array page | total
     * @result: JSON
     */
    public function getLogoDetails($id, $operatorId)
    {
        try
        {
            $url = "/logo/details/" . $id . "/operator/" . $operatorId;
            $response = $this->callNarnooAPI("get", $url, $value);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }

    /**
     * @title: Get Images
     * @date: 25.06.2018
     * @param: array page | total
     * @result: JSON
     */
    public function getAlbums($operatorId, $value = NULL)
    {

        $params = [];
        if (empty($value['page']))
        {
            $params['page'] = 1;
        }
        else
        {
            $params['page'] = $value['page'];
        }
        if (!empty($value['total']))
        {
            $params['total'] = $value['total'];
        }
        $query = http_build_query($params);

        try
        {
            $url = "/album/list/operator/" . $operatorId;
            $response = $this->callNarnooAPI("get", $url, $value);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }

    /**
     * @title: Get Image Details
     * @date: 25.06.2018
     * @param: int image ID
     * @param: array page | total
     * @result: JSON
     */
    public function getAlbumImages($id, $operatorId, $value = NULL)
    {
        $params = [];
        if (empty($value['page']))
        {
            $params['page'] = 1;
        }
        else
        {
            $params['page'] = $value['page'];
        }
        $query = http_build_query($params);

        try
        {
            $url = "/album/images/" . $id . "/operator/" . $operatorId;
            $response = $this->callNarnooAPI("get", $url, $value);

            return $response;
        }
        catch (Exception $e)
        {
            $response = array("error" => $e->getMessage());

            return $response;
        }
    }
}
