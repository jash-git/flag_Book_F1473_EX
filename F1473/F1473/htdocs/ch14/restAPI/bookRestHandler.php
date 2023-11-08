<?php
header('Content-Type: application/json');
require_once("book.php");
        
class BookRestHandler {
    function getBooks() { 
        $book = new Book();
        $rawData = $book->getBooks();
        if(empty($rawData)) {
            $rawData = array('success' => 0); 
        }
        $result["output"] = $rawData;
        $response = $this->encodeJson($result);
        echo $response;
    }
   
    function addBook() {    
        $book = new Book();
        $rawData = $book->addBook();
        if(empty($rawData)) {
            $rawData = array('success' => 0);        
        } 
        $result["output"] = $rawData;
        $response = $this->encodeJson($result);
        echo $response;
    }

    function deleteBookById() {    
        $book = new Book();
        $rawData = $book->deleteBook();        
        if(empty($rawData)) {
            $rawData = array('success' => 0);        
        } 
        $result["output"] = $rawData;
        $response = $this->encodeJson($result);
        echo $response;
    }
    
    function editBookById() {    
        $book = new Book();
        $rawData = $book->editBook();
        if(empty($rawData)) {
            $rawData = array('success' => 0);        
        }
        $result["output"] = $rawData;
        $response = $this->encodeJson($result);
        echo $response;
    }
    
    public function encodeJson($responseData) {
        $jsonResponse = json_encode($responseData);
        return $jsonResponse;        
    }
}
?>