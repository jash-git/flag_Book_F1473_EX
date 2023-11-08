<?php require_once ("Includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>PHP 8+MySQL的教學網站</title>
        <link href="Styles/Site.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> 


    </head>
    <body>
        <div class="outer-wrapper">
        <header>
            <div class="content-wrapper">
                <div class="float-left">
                    <p class="site-title"><a href="index.php">PHP 8+MySQL的教學網站</a></p>
                </div>
                <div class="float-right">
                    <section id="login">
                        <ul id="login">
                        <?php
                        if (logged_on())
                        {
                            echo '<li><a href="logoff.php">登出</a></li>' . "\n";
                            if (is_admin())
                            {
                                echo '<li><a href="addpage.php">新增頁面</a></li>' . "\n";
                                echo '<li><a href="selectpagetoedit.php">編輯頁面</a></li>' . "\n";
                                echo '<li><a href="deletepage.php">刪除頁面</a></li>' . "\n";
                            }
                        }
                        else
                        {
                            echo '<li><a href="logon.php">登入</a></li>' . "\n";
                            echo '<li><a href="register.php">註冊</a></li>' . "\n";
                        }
                        ?>
                        </ul>
                        <?php if (logged_on()) {
                            echo "<div class=\"welcomeMessage\">歡迎, <strong>{$_SESSION['username']}</strong></div>\n";
                        } ?>
                    </section>
                </div>

                <div class="clear-fix"></div>
            </div>

                <section class="navigation" data-role="navbar">
                    <nav>
                        <ul id="menu">
                            <li><a href="index.php">首頁</a></li>
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
                                    echo "<li><a href=\"page.php?pageid=$id\">$menulabel</a></li>\n";
                                }
                            ?>
                        </ul>
                    </nav>
            </section>
        </header>
