<?php
require_once 'common/config.php';
class simInteractions {

     public function getSimCompanies($companyId=0){
      global $db;
            $where = "";
            if($companyId) {
                  $where = " WHERE id = ".$companyId;
            }
            $res = array("error" => false, "message" => "", "data" => array());
            $query = "SELECT * FROM sim_companies".$where;
            $result = mysqli_query($db, $query);
            if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                        $res['data'][] = $row;
                  }
            } else {
                  $res['error'] = true;
                  $res['message'] = "No Data Found.";
            }
            return $res;
      }
}

?>
