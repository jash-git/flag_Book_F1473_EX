<?php        
        include("itinerarymanager.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>確認訂票</title>
        <meta name="keywords" content="reservation, list" />
        <meta name="description" content="This page confirm the reservations" />
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>    
    <body>
        <div id="wrapper">
        <?php include 'include/header.php'; ?>
            <!-- end div#header -->
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h1>確認訂票</h1>
                        <p>
                            當你線上訂票後, AirAlliance航空公司會提供你訂票編號.
                            你可以使用訂票編號來查詢預訂狀態.
                        </p>                            
                        <!--body-->                        
                        <?php   
                            $IID;                            
                            if(isset($_REQUEST["IID"])){
                                $IID = $_REQUEST["IID"];
                                
                                // 檢查是否是取消操作
                                $isCancelAction = false;
                                
                                if(isset($_REQUEST["action"])){
                                    $action = $_REQUEST["action"];
                                    if($action == "cancel"){
                                        $isCancelAction = true;
                                    }
                                }
                                if(!$isCancelAction){                                    
                                    // 取得指定編號的訂票資料
                                    $itineraryData = getItinerary($IID);
                                    if(count($itineraryData) > 0){   
                                        echo "<h3>訂票資料</h3>";
                                        echo "<table class='aatable'>";
                                        echo "<tr>";
                                        echo "<th>客戶姓名</th>";
                                        echo "<th>航班名稱</th>";
                                        echo "<th>出發地點</th>";
                                        echo "<th>目的地點</th>";
                                        echo "<th>出發日期</th> ";
                                        echo "</tr>";
                                        
                                        for($index=0;$index < count($itineraryData);$index++){
                                            $guestItinerary = $itineraryData[$index];
                                            echo "<tr>";
                                            echo "<td>".$guestItinerary->get_lastName().$guestItinerary->get_firstName()."</td>";
                                            echo "<td><a class='data' href='flightinfo.php?FID=".$guestItinerary->get_FID()."'>".$guestItinerary->get_FName()."</a></td>";

                                            echo "<td>".$guestItinerary->get_source()."</td>";
                                            echo "<td>".$guestItinerary->get_dest()."</td>";
                                            echo "<td>".$guestItinerary->get_travelDate()."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";

                                        echo "<br><a href='confirmreservation.php?action=cancel&IID=".$IID."'>取消訂票</a>";
                                    }
                                    else{
                                        echo "<br><br><h3>沒有找到訂票編號, 請再次檢查訂票編號</h3>";
                                        echo "<h4><a href='confirmreservation.php'>請再試一次</a></h4>";
                                    }                                    
                                }
                                else{
                                    // 客戶取消訂票                                    
                                    $result = cancelReservation($IID);
                                    if($result == 0){
                                        echo "<h2>取消訂票</h2>";
                                        echo "<h4>你的訂票資料已經取消. 是否保留客戶資料來處理新訂票.</h4>";
                                        echo "<p><a href='processitinerary.php'>建立新訂票</a></p>";
                                    }
                                }
                            }
                            else {
                            ?>
                                <form action="confirmreservation.php">
                                   <input class="form_tfield" type="text" name="IID" value=""/>
                                   <input class="form_submitb" name="imageField" type="submit" value="送出"/>
                                </form>
                                <div id="note">
                                   <p>請輸入訂票編號. (例如: 5)</p>
                                </div>
                        <?php
                            }
                        ?>                        
                        <!--body ends-->
                    </div>                    
                    <!-- end div#welcome -->			                    
                </div>
                <!-- end div#content -->
                <div id="sidebar">
                    <ul>
                    <?php include 'include/nav.php'; ?>
                        <!-- end navigation -->
                        <?php include 'include/updates.php'; ?>
                        <!-- end updates -->
                    </ul>
                </div>
                <!-- end div#sidebar -->
                <div style="clear: both; height: 1px"></div>
            </div>
            <?php include 'include/footer.php'; ?>
        </div>
        <!-- end div#wrapper -->
    </body>
</html>