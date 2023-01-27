<?php
//php opp
class init
{

private $db_host = "localhost";    
private $db_username = "root";    
private $db_pswd = "";    
private $db_name = "jenny's_edress_book";

public $con = false;    
public $mysqli = "";    
private $result = array();    

public function __construct()
{
    if(!$this->con)
    {
        $this->mysqli = new mysqli($this->db_host,$this->db_username,$this->db_pswd,$this->db_name);
        echo "<script>console.log('connection established')</script>";
        $this->con = true;
        if($this->mysqli->connect_error)
        {
            array_push($this->result,$this->mysqli->connect_error);
        }
    }
    else
    {
        return true;
    }
}


public function add($tbl_name,$values = array())
{
        //print_r($values);
        $tbl_columns = implode(', ',array_keys($values));
        $tbl_values = implode("', '",$values);
        $sql = "INSERT INTO `$tbl_name` ($tbl_columns) VALUES('$tbl_values')";
        if($this->mysqli->query($sql))
        {
            array_push($this->result,$this->mysqli->insert_id);
            echo "<script>console.log('added')</script>";
            return true;
        }
        else
        {
            array_push($this->result,$this->mysqli->error);
            return false;
        }
 }


public function update($tbl_name,$values = array(),$where = null)
{
         $args = array();
        foreach($values as $keys=> $value)
        {
            $args[] = "$keys = '$value'";
        }
        $sql = "UPDATE $tbl_name SET ".implode(', ',$args);
        if($where != null)
        {
            $sql .= " WHERE $where";
        }
        if($this->mysqli->query($sql))
        {
            echo "<script>console.log('updated')</script>";
            array_push($this->result,$this->mysqli->affected_rows);
            return true;
        }
        else
        {
            array_push($this->result,$this->mysqli->error);
            return false;
        }    
    }
 


public function delete($tbl_name,$where = null)
{
        $sql = "DELETE FROM $tbl_name" ;
        if($where != null)
        {
            $sql .= " WHERE $where";
        }
        if($this->mysqli->query($sql))
        {
            echo "<script>console.log('deleted')</script>";
            array_push($this->result,$this->mysqli->affected_rows);
            return true;
        }
        else
        {
            array_push($this->result,$this->mysqli->error);
            return false;
        }
}

public function selectall($sql)
{
    $query = $this->mysqli->query($sql);
    if($query)
    {
        $this->result = $query->fetch_all(MYSQLI_ASSOC);
        return true;
    }
    else
    {
        array_push($this->result,$this->mysqli->error);
        return false;
    }
}

public function select($table, $rows="*",$join = null,$where = null,$and=null,$eqaul=null,$order=null,$limit=null){
    
       $sql = "SELECT $rows FROM $table";
       if($join != null){
         $sql .= " JOIN $join";
       }
       if($where != null){
         $sql .= " WHERE $where";
       }
       if($order != null){
         $sql .= " ORDER BY $order";
       }
       if($and != null){
        $sql .= " AND  $and";
      }
      if($eqaul != null){
        $sql .= " !=  $eqaul";
      }
       if($limit != null){
         if(isset($_GET['page'])){
           $page = $_GET['page'];
         }else{
           $page = 1;
         }
         $start = ($page - 1) * $limit;
         $sql .= " LIMIT $start,$limit";
       }

    $query =$this->mysqli->query($sql);

       if($query){
         $this->result = $query->fetch_all(MYSQLI_ASSOC);
         return true; 
       }else{
         array_push($this->result, $this->mysqli->error);
         return false; 
       }
 }



public function get_result()
{
    $var = $this->result;
    $this->result = array();
    return $var;
}

public static function query($sql)
{
    $this->mysqli->query($sql);
}

public function __destruct()
{
    if($this->con)
    {
        if($this->mysqli->close())
        {
            $this->con = false;
            echo "<script>console.log('connection closed')</script>";
            return true;
        }
    }
    else
    {
        return false;
    }
}

}
?>