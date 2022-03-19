<?php 
    class database{
        public $que;
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='test';
        private $result=array();
        private $mysqli='';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }

        public function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            $result = $this->mysqli->query($sql);
            if($result){
                return true;
            }else{
                return false;
            }

        }

        public function update($table,$para=array(),$id){
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $id";

            $result = $this->mysqli->query($sql);
        }

        public function delete($table,$id){
            
            $sql="SELECT * FROM $table WHERE $id";
            $getResult = $this->mysqli->query($sql);
            if(mysqli_num_rows($getResult) > 0 ){
                $sql="DELETE FROM $table";
                $sql .=" WHERE $id";
                $sql;
                $result = $this->mysqli->query($sql);
                return true;
            }else{
                return false;
            }
        }

        public $sql;

        public function select($table,$rows="*",$where = null){
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }

            $getResult = $this->mysqli->query($sql);
            $result = array();
            if(mysqli_num_rows($getResult) > 0){
                while($row = mysqli_fetch_assoc($getResult))
                {
                    $result[] = $row;
                }
            }
           

            $this->dataArray  = $result ;
        }

        public function __destruct(){
            $this->mysqli->close();
        }
    }
?>