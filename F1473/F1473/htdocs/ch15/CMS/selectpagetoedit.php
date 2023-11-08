<?php         
require_once ("Includes/simplecms-config.php");
require_once  ("Includes/connectDB.php");
include("Includes/header.php");
confirm_is_admin();

if (isset($_POST['submit']))
{
    $pageId = $_POST['pageId'];
    $query = "SELECT Id FROM pages WHERE id = ?";
    $statement = $databaseConnection->prepare($query);
    $statement->bind_param('d', $pageId);
    $statement->execute();
    $statement->store_result();

    if ($statement->error)
    {
        die('資料庫查詢錯誤: ' . $statement->error);
    }

    // TODO: Check for == 1 instead of > 0 when page names become unique.
    $pageExists = $statement->num_rows == 1;
    if ($pageExists)
    {
        header ("Location: editpage.php?id=$pageId");
    }
    else
    {
        echo "無法找到編輯的頁面...";
    }
}
?>
<div id="main">
    <h2>編輯頁面</h2>
    <form action="selectpagetoedit.php" method="post">
        <fieldset>
            <legend>編輯頁面</legend>
            <ol>
                <li>
                    <label for="pageId">標題:</label>
                    <select id="pageId" name="pageId">
                        <option value="0">--選擇頁面--</option>
                        <?php
                        $statement = $databaseConnection->prepare("SELECT id, menulabel FROM pages");
                        $statement->execute();

                        if($statement->error)
                        {
                            die("資料庫查詢錯誤: " . $statement->error);
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
            <input type="submit" name="submit" value="編輯" />
        </fieldset>
    </form>
    <br/>
    <a href="index.php">取消</a>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php include ("Includes/footer.php"); ?>