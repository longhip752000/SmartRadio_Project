<?php

namespace News\DBUtils;

use News\Post\PostDAO;

class PostValidator
{
    public static function checkPostID($id)
    {
        $dao = new PostDAO();
        if (empty($id)) {
            return "PostID is empty!";
        } else if (strlen($id) > 10) {
            return "The length of ID smaller than 10!";
        } else if (preg_match('/(^[0-9]+$)/', $id) != 1) {
            return "PostID must be number!";
        } else if ($rs = $dao->getPostById($id) != null) {
            return "PostID has exist!";
        }
        return null;
    }

    public static function checkPostTitle($title)
    {
        $dao = new PostDAO();
        if (empty($title)) {
            return "Title is empty!";
        } else if (strlen($title) > 500) {
            return "The length of Title smaller than 500!";
        } else if (preg_match('/^([\pL\s\d.,?!\])+$/', $title) != 0) {
            return "Title has not special characaters!";
        }
        return null;
    }

    public static function checkPostContent($content)
    {
        $dao = new PostDAO();
        if (empty($content)) {
            return "Title is empty!";
        } else if (strlen($content) > 3000) {
            return "The length of Title smaller than 3000!";
        } 
        return null;
    }

    public static function checkDate($date)
    {
    }
}
