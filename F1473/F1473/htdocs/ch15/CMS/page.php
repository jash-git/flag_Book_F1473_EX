<?php   
    require_once ("Includes/simplecms-config.php"); 
    require_once  ("Includes/connectDB.php");
    include("Includes/header.php"); 
?>

<div id="main">
    <?php
        $pageid = $_GET['pageid'];
        $query = 'SELECT menulabel, content FROM pages WHERE id = ? LIMIT 1';
        $statement = $databaseConnection->prepare($query);
        $statement->bind_param('s', $pageid);
        $statement->execute();
        $statement->store_result();
        if ($statement->error)
        {
            die('資料庫查詢錯誤: ' . $statement->error);
        }

        if ($statement->num_rows == 1)
        {
            $statement->bind_result($menulabel, $content);
            $statement->fetch();
            echo "<h2>$menulabel</h2> $content";
        }
        else
        {
            echo '頁面沒有找到...';
        }
    ?>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php 
    include ("Includes/footer.php");
 ?>