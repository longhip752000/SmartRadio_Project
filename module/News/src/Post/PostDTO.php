<?php

namespace News\Post;

class PostDTO
{
    public $post_id;
    public $title;
    public $content;
    public $create_user;
    public $approve_user;
    public $create_date;
    public $modify_date;
    public $approve_date;
    public $status;
    public $subnews_id;

    public function __construct($post_id, $title, $content, $create_user, $approve_user, $create_date, $modify_date, $approve_date, $status, $subnews_id)
    {
        $this->post_id = $post_id;
        $this->title = $title;
        $this->content = $content;
        $this->create_user = $create_user;
        $this->approve_user = $approve_user;
        $this->create_date = $create_date;
        $this->modify_date = $modify_date;
        $this->approve_date = $approve_date;
        $this->status = $status;
        $this->subnews_id = $subnews_id;
    }


    /**
     * Get the value of post_id
     */
    public function getPost_id()
    {
        return $this->post_id;
    }

    /**
     * Set the value of post_id
     *
     * @return  self
     */
    public function setPost_id($post_id)
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of create_user
     */
    public function getCreate_user()
    {
        return $this->create_user;
    }

    /**
     * Set the value of create_user
     *
     * @return  self
     */
    public function setCreate_user($create_user)
    {
        $this->create_user = $create_user;

        return $this;
    }

    /**
     * Get the value of approve_user
     */
    public function getApprove_user()
    {
        return $this->approve_user;
    }

    /**
     * Set the value of approve_user
     *
     * @return  self
     */
    public function setApprove_user($approve_user)
    {
        $this->approve_user = $approve_user;

        return $this;
    }

    /**
     * Get the value of create_date
     */
    public function getCreate_date()
    {
        return $this->create_date;
    }

    /**
     * Set the value of create_date
     *
     * @return  self
     */
    public function setCreate_date($create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * Get the value of modify_date
     */
    public function getModify_date()
    {
        return $this->modify_date;
    }

    /**
     * Set the value of modify_date
     *
     * @return  self
     */
    public function setModify_date($modify_date)
    {
        $this->modify_date = $modify_date;

        return $this;
    }

    /**
     * Get the value of approve_date
     */
    public function getApprove_date()
    {
        return $this->approve_date;
    }

    /**
     * Set the value of approve_date
     *
     * @return  self
     */
    public function setApprove_date($approve_date)
    {
        $this->approve_date = $approve_date;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of subnews_id
     */
    public function getSubnews_id()
    {
        return $this->subnews_id;
    }

    /**
     * Set the value of subnews_id
     *
     * @return  self
     */
    public function setSubnews_id($subnews_id)
    {
        $this->subnews_id = $subnews_id;

        return $this;
    }
}
