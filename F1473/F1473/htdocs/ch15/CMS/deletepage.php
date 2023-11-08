<?php          
    require_once ("Includes/simplecms-config.php"); 
    require_once  ("Includes/connectDB.php");
    include("Includes/header.php"); 
    confirm_is_admin();

    if (isset($_POST['submit']))
    {
        $pageId = $_POST['menulabel'];
        $query = "DELETE FROM pages WHERE id = ?";
        $statement = $databaseConnection->prepare($query);
        $statement->bind_param('d', $pageId);
        $statement->execute();
        $statement->store_result();

        if ($statement->error)
        {
            die('Database query failed: ' . $statement->error);
        }

        // TODO: Check for == 1 instead of > 0 when page names become unique.
        $deletionWasSuccessful = $statement->affected_rows > 0 ? true : false;
        if ($deletionWasSuccessful)
        {
            header ("Location: index.php");
        }
        else
        {
            echo "錯誤: 刪除頁面錯誤...";
        }
    }
?>
<div id="main">
    <h2>刪除頁面</h2>
    <form action="deletepage.php" method="post">
        <fieldset>
            <legend>刪除頁面</legend>
            <ol>
                <li>
                    <label for="menulabel">標題:</label>
                    <select id="menulabel" name="menulabel">
                        <option value="0">--選擇頁面--</option>
                            <?php
                                $statement = $databaseConnection->prepare("SELECT id, menulabel FROM pages");
                                $statement->execute();

                                if($statement->error)
                                {
                                    die("Database query failed: " . $statement->error);
                                }

                                $statement->bind_result($id, $menulabel);
                                while($statement->fetch())
                                {
                                    echo "<option value=\"$id\">$menulabel</option>\n";
                                }
                            ?>
                    </select>
                </li>
            </ol>
            <input type="submit" name="submit" value="刪除" />
            <p>
                <a href="index.php">取消</a>
            </p>
        </fieldset>
    </form>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php include ("Includes/footer.php"); ?>
