<?php

namespace News\Post;

use News\Post\PostDTO;
use News\DBUtils\DBHelper;
use mysqli;

class PostDAO
{

    public function getPostById($id)
    {
        $test = new DBHelper();
        $conn = $test->connectDB();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $title = $content = $cd = $md = $ad = $ce = $ae = $status =  $si = "";
            $sql = "SELECT title, content, create_date, modify_date, approve_date, create_user, approve_user, status, subnews_id 
             FROM introduce_post
             WHERE post_id = " . $id;

            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $title = $row["title"];
                $content = $row["content"];
                $cd = $row["create_date"];
                $md = $row["modify_date"];
                $ad = $row["approve_date"];
                $ce = $row["create_user"];
                $ae = $row["approve_user"];
                $status = $row["status"];
                $si = $row["subnews_id"];
                $p = new PostDTO($id, $title, $content, $cd, $md, $ad, $ce, $ae, $status, $si);
                return $p;
            }
        }
        return null;
    }

    function getAllPost()
    {
        $test = new DBHelper();
        $conn = $test->connectDB();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $post_list = array();
            $sql = "SELECT * FROM introduce_post";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_object($result)) {
                $id = $row->post_id;
                $title = $row->title;
                $content = $row->content;
                $cd = $row->create_date;
                $md = $row->modify_date;
                $ad = $row->approve_date;
                $ce = $row->create_user;
                $ae = $row->approve_user;
                $status = $row->status;
                $si = $row->subnews_id;
                $p = new PostDTO($id, $title, $content, $cd, $md, $ad, $ce, $ae, $status, $si);
                array_push($post_list, $p);
            }
        }
        return $post_list;
    }



    public function createPost()
    {
        $test = new DBHelper();
        $conn = $test->connectDB();

        $id = $title = $content = $cd = $md = $ad = $ce = $ae = $status =  $si = "";
        if (isset($_POST['id'])) {

            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $cd =  $_POST['cd'];
            $md =  $_POST['md'];
            $ad =  $_POST['ad'];
            $cu =  $_POST['cu'];
            $au = $_POST['au'];
            $status = $_POST['status'];
            $si = $_POST['si'];

            $sql = "INSERT INTO introduce_post (post_id, title, content, create_date, modify_date, approve_date, create_user, approve_user, status, subnews_id) VALUES ('$id', '$title', '$content', '$cd', '$md', '$ad', '$cu', '$au', '$status', '$si')";

            // INSERT INTO introduce_post(post_id, title, content, create_date, modify_date, approve_date, create_user, approve_user, status, subnews_id) 
            // VALUES ('04', 'gia bac', 'bac giam 20k', '1998-01-23 12:45:56', '1998-01-23 12:45:56', '1998-01-23 12:45:56', '1998-01-23 12:45:56', '1998-01-23 12:45:56', '1', '01');
            $result = mysqli_query($conn, $sql);

            return $result;
        }
    }

    public function updatePost()

    {
        $test = new DBHelper();
        $conn = $test->connectDB();

        $postID = $title = $content = $cd = $md = $ad = $ce = $ae = $status =  $si = "";
        if (isset($_POST['postID'])) {

            $postID = $_POST['postID'];
            $title = $_POST['title_update'];
            $content = $_POST['content_update'];
            $cd =  $_POST['cd_update'];
            $md =  $_POST['md_update'];
            $ad =  $_POST['ad_update'];
            $cu =  $_POST['cu_update'];
            $au = $_POST['au_update'];
            $status = $_POST['status_update'];
            $si = $_POST['si'];

            $sql = "UPDATE introduce_post SET title = '$title', content = '$content', create_date = '$cd', modify_date = '$md', approve_date = '$ad', create_user = '$cu', approve_user = '$au', status = '$status', subnews_id = '$si' WHERE post_id = '$postID'";
            $result = mysqli_query($conn, $sql);

            return $result;
        }
    }

    public function deletePost($deleteID)
    {
        $test = new DBHelper();
        $conn = $test->connectDB();

        if (isset($_POST['deleteID'])) {

            $postID = $_POST['deleteID'];
            $sql = "DELETE FROM introduce_post WHERE  post_id = '$postID'";
            $result = mysqli_query($conn, $sql);

            return $result;
        }
    }
}
