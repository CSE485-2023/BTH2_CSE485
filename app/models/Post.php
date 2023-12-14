<?php


class Post
{

    private $id;
    private $title;
    private $message;
    private $category;
    private $user;
    private $status;
    private $created;
    private $updated;



    public function __construct($id = null, $title = null, $message = null, $category = null, $user = null, $status = null, $created = null, $updated = null) {
        $this->id = $id;
        $this->title = $title;
        $this->message = $message;
        $this->category = $category;
        $this->user = $user;
        $this->status = $status;
        $this->created = $created;
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed|null $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed|null
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed|null $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function limitMessage($message) {
        $limitedMessage = substr($message, 0, 100);
        $limitedMessage .= (strlen($message) > 100) ? '...' : '';
        return $limitedMessage;
    }

}