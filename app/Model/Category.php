<?php
namespace App\Model;
use PDO;
class Category{
    private $con;
    public $table_name="categories";
    public function __construct($connected){
        $this->con=$connected;
    }
    public function getData(){
        $sql ="SELECT *FROM categories";
        $smt=$this->con->prepare($sql);
        $smt->execute();
        $num_rows=$smt->rowcOUNT();
        IF ($num_rows<0){
            $result_array =array();
            while($row =$row=$smt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $category_attribues=array('id'=>$id,'name'=>$name,'name_mm'=>$name_mm);
                array_push($result_array,$categ);
            }
            echo json_encode($result_array);
        }
    }
}
?>