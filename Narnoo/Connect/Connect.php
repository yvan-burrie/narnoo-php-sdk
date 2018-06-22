<?

namespace Narnoo\Connect;
/**
*
*/
class Connect extends \Narnoo\Base
{
    
    public function getFollowing($value)
    {
        try{
            $url = "/connect/following";
            $response = $this->callNarnooAPI("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }



    public function findBusinesses($value)
    {
        try{
            $url = "/connect/find";
            $response = $this->callNarnooAPI("post",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }






}

?>