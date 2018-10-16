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
       $movie_name=$data['movie_name'];
       $date=$data['date'];
       $show_time_1=$data['show_time_1'];
       $show_time_2=$data['show_time_2'];
       $show_time_3=$data['show_time_3'];
       $trailer=$data['trailer'];

       $poster_image=$_FILES['poster']['name'];
       $image_path="image/".$poster_image;
       $tmp_poster_image=$_FILES['poster']['tmp_name'];
       $final_destination="../image/$poster_image";
       move_uploaded_file($tmp_poster_image,$final_destination);

       if($movie_name=="" OR $date=="" OR $show_time_1=="" OR $show_time_2=="" OR $show_time_3=="" OR $trailer=="" OR $poster_image=="" )
       {
           return $msg="<div class='alert alert-danger'>Please inter the full form</div>";
       }
       else
       {
           $query="INSERT INTO movie_list(movie_name,date,show1,show2,show3,image,trailer) VALUES ('$movie_name','$date','$show_time_1','$show_time_2','$show_time_3','$image_path','$trailer')";
           mysqli_query($this->db_connect,$query);
           return $msg="<div class='alert alert-success'>Movie Info uploaded successfully</div>";
       }
    }

    public function movie_read()
    {
        $query="SELECT * FROM movie_list";
        $result=mysqli_query($this->db_connect,$query);
        return $result;
    }

    public function coming_movie_post($data)
    {
        $movie_name=$data['movie_name'];
        $date=$data['release_date'];
        $trailer=$data['trailer'];

        $poster_image=$_FILES['movie_image']['name'];
        $image_path="image/".$poster_image;
        $tmp_poster_image=$_FILES['movie_image']['tmp_name'];
        $final_destination="../image/$poster_image";
        move_uploaded_file($tmp_poster_image,$final_destination);

        if($movie_name=="" OR $date=="" OR  $trailer=="" OR $poster_image=="" )
        {
            return $msg="<div class='alert alert-danger'>Please inter the full form</div>";
        }
        else
        {
            $query="INSERT INTO coming_movie(movie_name,release_date,movie_image,trailer) VALUES ('$movie_name','$date','$image_path','$trailer')";
            mysqli_query($this->db_connect,$query);
            return $msg="<div class='alert alert-success'>Movie Info uploaded successfully</div>";
        }

    }

    public function coming_movie_read()
    {
        $query="SELECT * FROM coming_movie";
        $result=mysqli_query($this->db_connect,$query);
        return $result;
    }

}