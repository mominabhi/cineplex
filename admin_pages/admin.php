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
       $date1=$data['date1'];
       $date2=$data['date2'];
       $date3=$data['date3'];
       $date4=$data['date4'];
       $show_time_1=$data['show_time_1'];
       $show_time_2=$data['show_time_2'];
       $show_time_3=$data['show_time_3'];
       $trailer=$data['trailer'];
//       start image upload
       $poster_image=$_FILES['poster']['name'];
       $image_path="image/".$poster_image;
       $tmp_poster_image=$_FILES['poster']['tmp_name'];
       $final_destination="../image/$poster_image";
       move_uploaded_file($tmp_poster_image,$final_destination);
//       end image upload
       $synopsis=$data['synopsis'];
       $rating=$data['rating'];
       $director=$data['director'];
       $release_date=$data['release_date'];
       $cast=$data['cast'];
       $genre=$data['genre'];



       if($movie_name=="" OR $date1=="" OR $date2=="" OR $date3=="" OR $date4=="" OR $show_time_1=="" OR $show_time_2=="" OR $show_time_3=="" OR $trailer=="" OR $poster_image=="" OR $synopsis=="" OR $rating=="" OR $director=="" OR $release_date=="" OR $cast=="" OR $genre=="")
       {
           return $msg="<div class='alert alert-danger'>Please inter the full form</div>";
       }
       else
       {
           $query="INSERT INTO movie_list(movie_name,date1,date2,date3,date4,show1,show2,show3,image,trailer,synopsis,rating,director,release_date,cast,genre) VALUES ('$movie_name','$date1','$date2','$date3','$date4','$show_time_1','$show_time_2','$show_time_3','$image_path','$trailer','$synopsis','$rating','$director','$release_date','$cast','$genre')";
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
    public function movie_details($id)
    {
        $query="SELECT * FROM movie_list WHERE movie_id='$id' ";
        $result=mysqli_query($this->db_connect,$query);
        return $result;
    }


}