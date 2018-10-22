<?php

//Author mominAbhi

class admin
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

    public function movie_post($data)
    {
        $movie_name = $data['movie_name'];
        $trailer = $data['trailer'];
//       start image upload
        $poster_image = $_FILES['poster']['name'];
        $image_path = "image/" . $poster_image;
        $tmp_poster_image = $_FILES['poster']['tmp_name'];
        $final_destination = "../image/$poster_image";
        move_uploaded_file($tmp_poster_image, $final_destination);
//       end image upload
        $synopsis = $data['synopsis'];
        $rating = $data['rating'];
        $director = $data['director'];
        $release_date = $data['release_date'];
        $cast = $data['cast'];
        $genre = $data['genre'];


        if ($movie_name == "" OR $trailer == "" OR $poster_image == "" OR $synopsis == "" OR $rating == "" OR $director == "" OR $release_date == "" OR $cast == "" OR $genre == "") {
            return $msg = "<div class='alert alert-danger'>Please inter the full form</div>";
        } else {
            $query = "INSERT INTO movie_list(movie_name,image,trailer,synopsis,rating,director,release_date,cast,genre) VALUES ('$movie_name','$image_path','$trailer','$synopsis','$rating','$director','$release_date','$cast','$genre')";
            mysqli_query($this->db_connect, $query);
            return $msg = "<div class='alert alert-success'>Movie Info uploaded successfully</div>";
        }
    }

    public function movie_read()
    {
        $query = "SELECT * FROM movie_list";
        $result = mysqli_query($this->db_connect, $query);
        return $result;
    }

    public function coming_movie_post($data)
    {
        $movie_name = $data['movie_name'];
        $date = $data['release_date'];
        $trailer = $data['trailer'];

        $poster_image = $_FILES['movie_image']['name'];
        $image_path = "image/" . $poster_image;
        $tmp_poster_image = $_FILES['movie_image']['tmp_name'];
        $final_destination = "../image/$poster_image";
        move_uploaded_file($tmp_poster_image, $final_destination);

        if ($movie_name == "" OR $date == "" OR $trailer == "" OR $poster_image == "") {
            return $msg = "<div class='alert alert-danger'>Please inter the full form</div>";
        } else {
            $query = "INSERT INTO coming_movie(movie_name,release_date,movie_image,trailer) VALUES ('$movie_name','$date','$image_path','$trailer')";
            mysqli_query($this->db_connect, $query);
            return $msg = "<div class='alert alert-success'>Movie Info uploaded successfully</div>";
        }

    }

    public function coming_movie_read()
    {
        $query = "SELECT * FROM coming_movie";
        $result = mysqli_query($this->db_connect, $query);
        return $result;
    }

    public function movie_details($id)
    {
        $query = "SELECT * FROM movie_list WHERE movie_id='$id' ";
        $result = mysqli_query($this->db_connect, $query);
        return $result;
    }

    public function dates($data)
    {
        $query = "INSERT INTO date_tbl(date) VALUES ('$data[date]')";
        $result = mysqli_query($this->db_connect, $query);
        if ($result) {
            return $msg = "<div class='alert alert-success'>Date uploaded successfully</div>";
        }

    }

    public function showtimes($data)
    {
        $query = "INSERT INTO time_tbl(time) VALUES ('$data[showtime]')";
        $result = mysqli_query($this->db_connect, $query);
        if ($result) {
            return $msg = "<div class='alert alert-success'>Time uploaded successfully</div>";
        }
    }

    public function date_read()
    {
        $query = "SELECT * FROM date_tbl order by date ASC ";
        $result = mysqli_query($this->db_connect, $query)->fetch_all();
        return $result;
    }

    public function time_read()
    {
        $query = "SELECT * FROM time_tbl order by time ASC";
        $result = mysqli_query($this->db_connect, $query)->fetch_all();
        return $result;
    }

    public function set_show_time($data)
    {
        $movie_id = $data['movie'];
        $date_id = $data['date'];
        $show_id = $data['show'];
        $query = "INSERT INTO date_movie(movie_id,date_id) VALUES('$movie_id',$date_id)";
        mysqli_query($this->db_connect, $query);
        $date_movie_id = mysqli_insert_id($this->db_connect);
        foreach ($show_id as $key => $chk) {
            $query = "insert into movie_date_time(date_movie_id,time_id) values ('$date_movie_id','$chk')";
            mysqli_query($this->db_connect, $query);
        }
    }

}