<?php               
    require_once ("Includes/session.php");
    require_once ("Includes/simplecms-config.php"); 
    require_once ("Includes/connectDB.php");
    include("Includes/header.php"); 
    confirm_is_admin();

    if (isset($_POST['submit']))
    {
        $menulabel = $_POST['menulabel'];
        $content = $_POST['content'];
        $query = "INSERT INTO pages (menulabel, content) VALUES (?, ?)";

        $statement = $databaseConnection->prepare($query);
        $statement->bind_param('ss', $menulabel, $content);
        $statement->execute();
        $statement->store_result();

        if ($statement->error)
        {
            die('Database query failed: ' . $statement->error);
        }

        $creationWasSuccessful = $statement->affected_rows == 1 ? true : false;
        if ($creationWasSuccessful)
        {
            header ("Location: index.php");
        }
        else
        {
            echo '錯誤: 新增新頁面失敗...';
        }
    }
?>
<div id="main">
    <h2>新增頁面</h2>
        <form action="addpage.php" method="post">
            <fieldset>
            <legend>新增頁面</legend>
            <ol>
                <li>
                    <label for="menulabel">選單標題:</label> 
                    <input type="text" name="menulabel" value="" id="menulabel" />
                </li>
                <li>
                    <label for="content">頁面內容:</label>
                    <textarea name="content" id="content"></textarea>
                </li>
            </ol>
            <input type="submit" name="submit" value="新增" />
            <p>
                <a href="index.php">取消</a>
            </p>
        </fieldset>
    </form>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php include ("Includes/footer.php"); ?>

