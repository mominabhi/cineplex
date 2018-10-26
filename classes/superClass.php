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
        $query = "SELECT time_tbl.time,movie_date_time.id FROM movie_date_time JOIN date_movie ON date_movie.id=movie_date_time.date_movie_id JOIN time_tbl ON time_tbl.id=movie_date_time.time_id WHERE date_movie.id='$date_movie_id'";
        $result = $this->db_connect->query($query)->fetch_all();
        return $result;
    }

    public function get_info_by_id($id)
    {
        $query = "SELECT time_tbl.time,date_tbl.date,movie_list.movie_name FROM movie_date_time JOIN date_movie ON date_movie.id=movie_date_time.date_movie_id JOIN time_tbl ON time_tbl.id=movie_date_time.time_id JOIN date_tbl ON date_tbl.id = date_movie.date_id JOIN movie_list ON movie_list.movie_id = date_movie.movie_id WHERE movie_date_time.id='$id'";
        $result = mysqli_query($this->db_connect, $query)->fetch_all();
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

    public function user_registration($data)
    {
        $email = $this->validation($data['user_email']);
        $name = $this->validation($data['user_name']);
        $password = $this->validation(md5($data['password']));
        $con_pass = $this->validation(md5($data['confirm_pass']));
        $number = $this->validation($data['phone_number']);
        $query_1 = "SELECT * FROM user_tbl WHERE usr_email='$email'";
        $result_1 = mysqli_query($this->db_connect, $query_1);
        $count = mysqli_num_rows($result_1);

        if ($email == "" OR $name == "" OR $password == "" OR $con_pass == "" OR $number == "") {
            echo "<div class='alert alert-danger'>Fill Up All Perfectly</div>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='alert alert-danger'>Email is Wrong</div>";
        } elseif ($password != $con_pass) {
            echo "<div class='alert alert-danger'>Password and confirm Password not same</div>";
        } else {
            if ($count == 0) {
                $query = "INSERT INTO user_tbl(usr_email,name,password,con_pass,number) VALUES('$email','$name','$password','$con_pass','$number')";
                $result = mysqli_query($this->db_connect, $query);
                if (isset($result)) {
                    echo "<div class='alert alert-success'> Registration Successfully</div>";
                }
            } else {
                echo "<div class='alert alert-danger'> Duplicate Email Is Found</div>";
            }

        }

    }

    public function validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function user_read($id)
    {
        $query = "SELECT * FROM user_tbl WHERE id='$id'";
        $result = mysqli_query($this->db_connect, $query);
        return $result;
    }

    public function user_login($data)
    {
        $email = $data['user_email'];
        $pass = md5($data['user_pass']);
        $query = "SELECT * FROM user_tbl WHERE usr_email='$email' AND password='$pass'";
        $result = mysqli_query($this->db_connect, $query);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['usr_email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['number'] = $row['number'];
                header("Location:buy_ticket.php");
            }
        } else {
            echo "<div class='alert alert-danger'> Invalid Email and Password</div>";
        }
    }

    public function all_seats()
    {
        $query = "SELECT * from seats";
        $result = mysqli_query($this->db_connect, $query);
        return $result;
    }

    public function seat($data)
    {
        $seats = $data['seat'];
        $movie_date_time_id = $data['movie_date_time_id'];
        $cal = 0;
        for ($i = 0; $i < sizeof($seats); $i++) {
            $cal += 200;
        }
        $amount = "Total Amount:" . $cal;
        foreach ($seats as $key => $seat) {
            $query = "INSERT INTO final_selection(movie_date_time_id,seats_id,user_id,movie_name,movie_date,movie_time,current_date_time) VALUES ('$movie_date_time_id','$seat','$data[user_id]','$data[movie_name]','$data[movie_date]','$data[movie_time]','$data[current_time]')";
            mysqli_query($this->db_connect, $query);
            $insert_id=mysqli_insert_id($this->db_connect);
            $query2="INSERT INTO tickets(final_selection_id) VALUES ('$insert_id')";
            mysqli_query($this->db_connect,$query2);

        }
        header("Location:tickets.php");
        return $amount;

    }
    public function last_submission()
    {
        $query = "SELECT * from tickets";
        $result = mysqli_query($this->db_connect, $query);
        return $result;

    }

    public function check($seat, $id)
    {
        $query = "SELECT * from final_selection WHERE seats_id='$seat' AND movie_date_time_id='$id'";
        $result1 = mysqli_query($this->db_connect, $query);
        $result = mysqli_num_rows($result1);
        return $result;
    }
    public function truncate_table()
    {
        $query="TRUNCATE TABLE tickets";
        mysqli_query($this->db_connect,$query);
        header("LOCATION:buy_ticket.php");
    }
    public function get_seat_Number($seat_id)
    {
        $query="SELECT seats.seat FROM tickets JOIN final_selection ON tickets.final_selection_id=final_selection.id JOIN seats ON final_selection.seats_id=seats.id WHERE tickets.final_selection_id='$seat_id'";
        $result= mysqli_query($this->db_connect, $query)->fetch_all();
        return $result;
    }
}