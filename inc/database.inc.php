<?php
session_start();
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $pswd = "";
    private $database_name = "d3db";

    private $link = "null";

    public function __construct()
    {
        $this->link = mysqli_connect(
            $this->host,
            $this->user,
            $this->pswd,
            $this->database_name
        );
        if ($this->link) {


        } else {
            die('not connected❌');
        }
    }

    public function get_link()
    {
        return $this->link;
    }

    public function query($query)
    {
        return mysqli_query($this->link, $query);
    }

    // slect query

    public function list_entity($tbl)
    {
        $q = "SELECT * from `$tbl` ";

        return $this->query($q);

    }


    //insert query
    public function insert_entity($tbl, $values)
    {
        $q = "INSERT into `$tbl` values(";

        for ($i = 0; $i < count($values); $i++) {
            if ($i == count($values) - 1) {
                $q .= "'$values[$i]'";
            } else {
                $q .= "'$values[$i]',";
            }

        }


        $q .= ");";

        return $this->query($q);
    }



    public function dlt_query($tbl, $col, $value)
    {
        $q = "DELETE from `$tbl` where `$col` = '$value';";

        return $this->query($q);

    }

}