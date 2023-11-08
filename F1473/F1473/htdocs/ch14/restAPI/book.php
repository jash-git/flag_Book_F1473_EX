<?php
require_once("dataAccess.php");

Class Book {
    private $books = array();
    public function getBooks(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = 'SELECT * FROM books WHERE bookid = "' .$id. '"';
        } else {
            $query = 'SELECT * FROM books';
        }
        $ds = new DataAccess();
        $this->books = $ds->executeSelectQuery($query);
        return $this->books;
    }

    public function addBook(){
        if(isset($_POST['id']) && isset($_POST['title'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $author = '';
            $price = '';
            if(isset($_POST['author'])){
                $author = $_POST['author'];
            }
            if(isset($_POST['price'])){
                $price = $_POST['price'];
            }    
            $query = "INSERT INTO books (bookid,booktitle,bookauthor,bookprice) ";
            $query .= "VALUES ('".$id."','".$title."','".$author."',".$price.")";
            $ds = new DataAccess();
            $result = $ds->executeQuery($query);
            if($result != 0){
                $result = array('success'=>1);
                return $result;
            }
        }
    }
    
    public function deleteBook(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "DELETE FROM books WHERE bookid = '".$id."'";
            $ds = new DataAccess();
            $result = $ds->executeQuery($query);
            if($result != 0){
                $result = array('success'=>1);
                return $result;
            }
        }
    }
    
    public function editBook(){
        if(isset($_POST['title']) && isset($_GET['id'])){
            $title = $_POST['title'];
            $author = $_POST['author'];
            $price = $_POST['price'];
            $query = "UPDATE books SET booktitle='".$title."',bookauthor='";
            $query .= $author ."',bookprice=". $price ." WHERE bookid = '".$_GET['id']."'";
        }
        $ds = new DataAccess();
        $result= $ds->executeQuery($query);
        if($result != 0){
            $result = array('success'=>1);
            return $result;
        }
    }    
}
?>