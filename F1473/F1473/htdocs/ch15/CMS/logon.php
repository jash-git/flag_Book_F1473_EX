<?php   
    require_once ("Includes/session.php");
    require_once ("Includes/simplecms-config.php"); 
    require_once ("Includes/connectDB.php");
    include ("Includes/header.php");

    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT id, username FROM users WHERE username = ? AND password = SHA(?) LIMIT 1";
        $statement = $databaseConnection->prepare($query);
        $statement->bind_param('ss', $username, $password);

        $statement->execute();
        $statement->store_result();

        if ($statement->num_rows == 1)
        {
            $statement->bind_result($_SESSION['userid'], $_SESSION['username']);
            $statement->fetch();
            header ("Location: index.php");
        }
        else
        {
            echo "使用者名稱/密碼輸入不正確...";
        }
    }
?>
<div id="main">
    <h2>登入</h2>
        <form action="logon.php" method="post">
            <fieldset>
            <legend>登入</legend>
            <ol>
                <li>
                    <label for="username">使用者名稱:</label> 
                    <input type="text" name="username" value="" id="username" />
                </li>
                <li>
                    <label for="password">使用者密碼:</label>
                    <input type="password" name="password" value="" id="password" />
                </li>
            </ol>
            <input type="submit" name="submit" value="登入" />
            <p>
                <a href="index.php">取消</a>
            </p>
        </fieldset>
    </form>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php include ("Includes/footer.php"); ?>