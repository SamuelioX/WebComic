<?php

include "connect.php";

class DatabaseQuery {

    private $db;
    private $postId;
    private $postImg;
    private $postTitle;
    private $postDate;
    private $postBody;
    
    public function __construct($searchTerm) {
        $this->db = connect();
        if($searchTerm === 0){
            $this->getQueryTerms($this->getTotalPostCount());
        } else {
            $this->getQueryTerms($searchTerm);
        }
    }
    
    function getQueryTerms($searchTerm){
        $this->postId = (int)mysqli_real_escape_string($this->db, $searchTerm);
        $this->postSearchTerm = mysqli_query($this->db, "SELECT * FROM posts WHERE postId = '$this->postId'");
        $this->postRow = mysqli_fetch_assoc($this->postSearchTerm);
        $this->postTitle = $this->postRow["postTitle"];
        $this->postBody = $this->postRow["postBody"];
        $this->postDate = $this->postRow["postDate"];
        $this->postImg = $this->postRow["postImg"];
    }

    function getTotalPostCount() {
        $query = mysqli_real_escape_string($this->db, "SELECT COUNT(*) FROM posts");
        $maxRow = mysqli_query($this->db, $query);
        $max = (int)mysqli_fetch_assoc($maxRow)['COUNT(*)'];
        return $max;
    }

    function getPostTitle() {
        return $this->postTitle;
    }
    
    function getPostId() {
        return $this->postId;
    }

    function getPostImg() {
        return $this->postImg;
    }

    function getPostDate() {
        return $this->postDate;
    }

    function getPostBody() {
        return $this->postBody;
    }
    
    function getNextPostId(){
        return $this->postId+1;
    }
    
    function getPrevPostId(){
        return $this->postId-1;
    }
    
    function convertDate(){
        $this->postDate = date("F d, Y", strtotime($this->postDate));
    }
    
    function printNavigation($index){
        if($index === 1){
            echo "<a href='" . $this->getNextPostId() . "' class='next' rel='next'></a>";
            echo "<a href='" . $this->getTotalPostCount() . "' class='last' rel='index'></a>";
        } else if($index === $this->getTotalPostCount()){
            echo "<a href='1' class='first' rel='start'></a>";
            echo "<a href='" . $this->getPrevPostId() . "' class='prev' rel='prev'></a>";
        } else {
            echo "<a href='1' class='first' rel='start'></a>";
            echo "<a href='" . $this->getPrevPostId() . "' class='prev' rel='prev'></a>";
            echo "<a href='" . $this->getNextPostId() . "' class='next' rel='next'></a>";
            echo "<a href='" . $this->getTotalPostCount() . "' class='last' rel='index'></a>";
        }

    }
}

?>
