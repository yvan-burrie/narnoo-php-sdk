<?

namespace Narnoo\Booking;
/**
*
*/
class Booking extends \Narnoo\Base
{
    /**************************************************
    *
    *                --- Product Details ---
    *
    **************************************************/
    
     /**
    *   @title: Get Product Details
    *   @date: 25.06.2018
    *   @param: int operator ID [required]
    *   @param: int product ID [required]
    *   @result: JSON
    */
    public function getProductBookingDetails( $operatorId, $productId )
    {   
        
        try{
            $url = "/booking/product/".$operatorId."/".$productId;
            
            $response = $this->callNarnooAPI("get",$url);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    
    /**************************************************
    *
    *                --- .Product Details ---
    *
    **************************************************/

    /**************************************************
    *
    *                --- Product Booking Details ---
    *
    **************************************************/
    
     /**
    *   @title: Get Product Details
    *   @date: 25.06.2018
    *   @param: int operator ID [required]
    *   @param: int product ID [required]
    *   @result: JSON
    */
    public function getBookingDetails( $operatorId, $productId, $bookingCode )
    {   

        $query = ['id' => $bookingCode];
        
        try{
            $url = "/booking/details/".$operatorId."/".$productId;
            
            $response = $this->callNarnooAPI( "get", $url, $query );
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    
    /**************************************************
    *
    *                --- .Product Details ---
    *
    **************************************************/


    /**************************************************
    *
    *                --- Product Availablity Details ---
    *
    **************************************************/
    
     /**
    *   @title: Get Product Details
    *   @date: 25.06.2018
    *   @param: int operator ID [required]
    *   @param: int product ID [required]
    *   @result: JSON
    */
    public function getProductAvailablity( $operatorId, $productId, $bookingCode, $startDate, $endDate )
    {   

        $query = ['id' => $bookingCode, 'startDate' => $startDate, 'endDate' => $endDate];
        
        try{
            $url = "/booking/availability".$operatorId."/".$productId;
            
            $response = $this->callNarnooAPI( "get", $url, $query );
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }


    
    /**************************************************
    *
    *                --- .Product Availablity Details ---
    *
    **************************************************/



}

?>