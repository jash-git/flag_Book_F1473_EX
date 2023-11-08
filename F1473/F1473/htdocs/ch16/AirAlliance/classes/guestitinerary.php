<?php    
/*
繼承Guest的GuestItinerary類別
 - 儲存客戶的旅程資訊
*/

include("guest.php");

class GuestItinerary extends Guest{
    private $FID;
    private $fName;
    private $SID;
    private $source;
    private $dest;
    private $travelDate;

    function __constructor($FID,$SID,$source,$dest,$travelDate){
            $this->FID = $FID;
            $this->SID = $SID;
            $this->source = $source;
            $this->dest = $dest;
            $this->travelDate = $travelDate;
        }

    function set_FID($FID){
            $this->FID = $FID;
        }
    function set_FName($fName){
            $this->fName = $fName;
        }
    function set_SID($SID){
            $this->SID = $SID;
        }
    function set_source($source){
            $this->source = $source;
        }
    function set_dest($dest){
            $this->dest = $dest;
        }
    function set_travelDate($travelDate){
            $this->travelDate = $travelDate;
        }

    function get_FID(){
            return $this->FID;
        }
    function get_SID(){
            return $this->SID;
        }
    function get_source(){
            return $this->source;
        }
    function get_dest(){
            return $this->dest;
        }
    function get_travelDate(){
            return $this->travelDate;
        }
    function get_FName(){
            return $this->fName;
        }
}
?>