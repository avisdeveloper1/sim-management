<?php

class simInteractions {
     public function getSimCompanies($db, $companyId=0){
      $where = "";
            if($companyId) {
                  $where = " WHERE id = ".$companyId;
            }
            $res = array("error" => false, "message" => "", "data" => array());
            $simQuery = "SELECT * FROM sim_companies".$where;
            $simResult = mysqli_query($db, $simQuery);
            if ($simResult) {
                  while ($row = mysqli_fetch_assoc($simResult)) {
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
