<?php       
    require_once ("Includes/simplecms-config.php"); 
    require_once  ("Includes/connectDB.php");
    include("Includes/header.php"); 

    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO users (username, password) VALUES (?, SHA(?))";

        $statement = $databaseConnection->prepare($query);
        $statement->bind_param('ss', $username, $password);
        $statement->execute();
        $statement->store_result();

        $creationWasSuccessful = $statement->affected_rows == 1 ? true : false;
        if ($creationWasSuccessful)
        {
            $userId = $statement->insert_id;

            $addToUserRoleQuery = "INSERT INTO users_in_roles (user_id, role_id) VALUES (?, ?)";
            $addUserToUserRoleStatement = $databaseConnection->prepare($addToUserRoleQuery);

            // TODO: Extract magic number for the 'user' role ID.
            $userRoleId = 2;
            $addUserToUserRoleStatement->bind_param('dd', $userId, $userRoleId);
            $addUserToUserRoleStatement->execute();
            $addUserToUserRoleStatement->close();

            $_SESSION['userid'] = $userId;
            $_SESSION['username'] = $username;
            header ("Location: index.php");
        }
        else
        {
            echo "錯誤: 註冊失敗...";
        }
    }
?>
<div id="main">
    <h2>註冊帳戶</h2>
        <form action="register.php" method="post">
            <fieldset>
                <legend>註冊帳戶</legend>
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
                <input type="submit" name="submit" value="註冊" />
                <p>
                    <a href="index.php">取消</a>
                </p>
            </fieldset>
        </form>
     </div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php
    include ("Includes/footer.php");
?>