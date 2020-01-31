<?php
class Connection{
    public function connection(){
        $conn_string = "host=ec2-54-174-221-35.compute-1.amazonaws.com port=5432 dbname=d13q26emo3cidu user=cxoizjmlydpszn password=909203503153867e30511c679d7f1f697d3dd561acecfdba7e6caae00809317b";
        $connection = pg_connect($conn_string)  or die('connection failed');
        return $connection;
    }
}