<?php
require_once("bookRestHandler.php");
$method = $_SERVER['REQUEST_METHOD'];
$view = "";
if (isset($_GET["type"])) {
    $type = $_GET["type"];
    switch($type){
        case "list":
            // 處理 REST URL: /book/list/
            // 處理 REST URL: /book/list/<row_id>
            $bookRestHandler = new BookRestHandler();
            $result = $bookRestHandler->getBooks();
            break;      
        case "create":
            // 處理 REST URL: /book/create/
            $bookRestHandler = new BookRestHandler();
            $bookRestHandler->addBook();
            break;        
        case "delete":
            // 處理 REST URL: /book/delete/<row_id>
            $bookRestHandler = new BookRestHandler();
            $result = $bookRestHandler->deleteBookById();
            break;         
        case "update":
            // 處理 REST URL: /book/update/<row_id>
            $bookRestHandler = new BookRestHandler();
            $bookRestHandler->editBookById();
            break;
     }       
}
?>
