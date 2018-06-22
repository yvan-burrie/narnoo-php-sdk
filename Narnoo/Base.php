<?php 

namespace Narnoo;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

/**
*
*/
class Base
{

    const API_URL = "https://apis.narnoo.com/api/v1/";

    protected $client;
    protected $token;
    protected $secretkey;
    protected $accesskey;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function setToken($token)
    {
        $this->token 		= $token;
    }

   /* protected function prepareAccessToken()
    {
        try{
           /* $url = "https://api.twitter.com/oauth2/token";
            $value = ['grant_type' => "client_credentials"
            ];
            $header = array('Authorization'=>'Basic ' .base64_encode($this->token.":".$this->tokensecret),
            "Content-Type"=>"application/x-www-form-urlencoded;charset=UTF-8");
            $response = $this->client->post($url, ['query' => $value,'headers' => $header]);
            $result = json_decode($response->getBody()->getContents());

            $this->accesstoken = $result->access_token;
        }
        catch (RequestException $e) {
           /* $response = $this->statusCodeHandling($e);
            return $response;
        }
    }*/
    protected function callNarnooAPI($method,$request,$post = [])
    {
        try{

            //$this->prepareAccessToken();
            $url = self::API_URL . $request;
            $header = array('Authorization'=>'bearer '. $this->token);
            

            $response = $this->client->request($method,$url, array('query' => $post,'headers' => $header));
            

            return json_decode($response->getBody()->getContents());
        
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
    protected function statusCodeHandling($e)
    {
        $response = array("statuscode" => $e->getResponse()->getStatusCode(),
        "error" => json_decode($e->getResponse()->getBody(true)->getContents()));
        return $response;
    }
}