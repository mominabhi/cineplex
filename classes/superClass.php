<?php
//Author mominAbhi

class superClass
{
    private $db_connect;

    public function __construct()
    {

        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "cineplex";
        $this->db_connect = mysqli_connect("$hostName", "$userName", "$password", "$dbName");
    }

    public function get_date_by_movie($id)
    {
        $query_dis = "SELECT date_tbl.date,movie_list.movie_name,date_movie.id FROM date_movie JOIN date_tbl ON date_tbl.id = date_movie.date_id JOIN movie_list ON movie_list.movie_id = date_movie.movie_id WHERE movie_list.movie_id ='$id'";
        $result = mysqli_query($this->db_connect, $query_dis)->fetch_all();
        return $result;
    }
    public function get_showTime_by_movie($date_movie_id)
    {
                $query = "SELECT time_tbl.time FROM movie_date_time JOIN date_movie ON date_movie.id=movie_date_time.date_movie_id JOIN time_tbl ON time_tbl.id=movie_date_time.time_id WHERE date_movie.id='$date_movie_id'";
                $result = $this->db_connect->query($query)->fetch_all();
                return $result;
    }
    public function date_read()
    {
        $query = "SELECT * FROM date_tbl order by date ASC ";
        $result = mysqli_query($this->db_connect, $query);
        return $result;
    }
    public function get_movie_by_date($date_id)
    {
        $query = "SELECT date_tbl.date,movie_list.movie_name,date_movie.id FROM date_movie JOIN date_tbl ON date_tbl.id = date_movie.date_id JOIN movie_list ON movie_list.movie_id = date_movie.movie_id WHERE date_movie.date_id='$date_id'";
        $result = mysqli_query($this->db_connect, $query)->fetch_all();
        return $result;
    }

}