<?

namespace Narnoo\Media;
/**
*
*/
class Media extends \Narnoo\Base
{
    
    public function getImages($value)
    {   
       /* if(empty($value['page'])){
            $value['page'] = 1;
        }
        $query = http_build_query($value);*/
        try{
            $url = "/image/list";
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }



    public function getImageDetails($id,$value)
    {
        if(empty($value['page'])){
            $value['page'] = 1;
        }
        
        $query = http_build_query($value);
        try{
            $url = "/image/details/".$id."?".$query;
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }






}

?>