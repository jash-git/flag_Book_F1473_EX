<?php     
if(! isset($_SESSION['sectors'])){
    session_start();
    include("conf/conf.php");
    // 建立AAConf物件取得資料庫連接資訊
    $dbConf = new AAConf();
    $databaseURL = $dbConf->get_databaseURL();
    $databaseUName = $dbConf->get_databaseUName();
    $databasePWord = $dbConf->get_databasePWord();
    $databaseName = $dbConf->get_databaseName();
        
    // 指定資料庫連接資訊的Session變數
    $_SESSION['databaseURL']=$databaseURL; 
    $_SESSION['databaseUName']=$databaseUName; 
    $_SESSION['databasePWord']=$databasePWord; 
    $_SESSION['databaseName']=$databaseName;

    $connection = mysqli_connect($databaseURL,$databaseUName,
                                $databasePWord,$databaseName)
                  or die ("錯誤: 連接伺服器或資料庫錯誤!");
    // 送出utf8編碼與校對     
    mysqli_query($connection,'SET CHARACTER SET utf8');
    mysqli_query($connection,"SET collation_connection = 'utf8_general_ci'");
    
    $rowArray;
    $rowID = 1;
    $query = "SELECT * FROM Sectors";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){    
            $rowArray[$rowID] = $row['Sector'];   
            $rowID = $rowID + 1;
        }  
        
    // 更新航點資訊的Session變數
    $_SESSION['sectors'] = $rowArray;  
    mysqli_close($connection);
}

$rowArray2 = $_SESSION['sectors']; 

?>
<?php
    include("itinerarymanager.php");    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>處理線上訂票</title>
        <meta name="keywords" content="itinerary, list" />
        <meta name="description" content="This page provides a list of all itineraries" />
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>    
    <body>
        <div id="wrapper">
            <?php include 'include/header.php'; ?>   						        
            <?php            
            $fname;
            $lname;
            $sourcelist;
            $destlist;  
						// 取得客戶名          
            if(isset($_REQUEST["fname"])){
                $fname = $_REQUEST["fname"];
            }
            // 取得客戶姓
            if(isset($_REQUEST["lname"])){
                $lname = $_REQUEST["lname"];
            }
            // 取得出發地點
            if(isset($_REQUEST["sourcelist"])){
                $sourcelist = $_REQUEST["sourcelist"];
            }
            // 取得目的地點
            if(isset($_REQUEST["destlist"])){
                $destlist = $_REQUEST["destlist"];
            } 
            // 取得出發日期
            if(isset($_REQUEST["sdate"])){
                $sdate = $_REQUEST["sdate"];
            }            
            ?>
            <!-- end div#header -->
            <div id="page">
                <div id="content">                    
                    <h1>提供旅程的訂票資料</h1>
                    <!--body-->
            <?php
            // 有輸入客名姓名, 進行表單處理
            if(isset($_REQUEST["fname"]) && !isset($_REQUEST["confirmed"])){                                
               // 取得旅程資料來進行訂票
               // 找出可用的航班
            ?>
                    <form action="processitinerary.php" method="POST">                        
                        <?php
                            // 找出可用的航班
                            $flightsArray = getAvailableFlights($sourcelist,$destlist);
                            if( count($flightsArray) < 1 ){  // 沒有可用的航班
                                echo "<h3>沒有可用的航班</h3>";
                                echo "<h4>在選擇的地點之間沒有可用的航班, 請重新選擇</h4><br><br>";
														  	echo "<a href='processitinerary.php'>返回</a> | <a href='flightinfo.php'>可用的航班</a><br>";                                
                            }
                            else {  // 有可用的航班
                                echo "<form action='processitinerary.php' method='POST'>";
                                echo "<h3>可用的航班</h3>";
                                echo "<h4>下列是選擇地點之間的可用航班, 請選擇一個航班後繼續</h4><br>";
                                for($index=0;$index < count($flightsArray);$index++){                                        
                                    // 顯示可用航班清單來確認航班
                                    echo "<input class='form_tfield' type='radio' name='flight' value='".$flightsArray[$index+1]."' /> ".$flightsArray[$index+1]."<br>";
                                }
                                echo "<br>";
                                // 使用隱藏欄位傳遞旅程資料
                                echo "<input type='hidden' name='fname' value='".$fname."'>";
                                echo "<input type='hidden' name='lname' value='".$lname."'>";
                                echo "<input type='hidden' name='sourcelist' value='".$sourcelist."'>";
                                echo "<input type='hidden' name='destlist' value='".$destlist."'>";
                                echo "<input type='hidden' name='sdate' value='".$sdate."'>";
                                echo "<input type='hidden' name='confirmed' value='yes'>";
                         ?>
                                
                        <input class="form_submitb" type="submit" value="處理訂票" />
                    </form>                     
                    <?php
                    }
            }
            elseif(isset($_REQUEST["confirmed"])){
                // 確認訂票, 建立訂票資料
                $flight;
                if(isset($_REQUEST["flight"])){
                   $flight = $_REQUEST["flight"];
                }  
                $IID = processReservation($fname,$lname,$sourcelist,$destlist,$flight,$sdate);
                if ( $IID != -1 ){
                    echo "<h2>確認旅程 - 訂票成功</h2>";
                    echo "<p>你的旅程已經成功處理訂票<br>";
                    echo "<p>你的訂票編號是 : ".$IID.". 請使用此訂票編號來進行之後的處理.";
                    echo "<br><br><a href='listitinerary.php'>顯示所有訂票</a>";
                }
                else{
                    echo "<h2>拒絕旅程 - 訂票失敗</h2>";
                    echo "<p>你的旅程已經被拒絕訂票<br>";
                    echo "<p>在我們的記錄中已經有相似旅程的訂票, 因為輸入的旅客姓名, 航班資訊和出發日期相同.";
                    echo "<br><br><a href='listitinerary.php'>顯示所有訂票</a>";                    
                }
            }
            else {            
            ?>
                <form action="processitinerary.php">
                    <div id="UILabel">客戶姓: </div><input class="form_tfield" type="text" name="lname" value="" /><br/><br/>
                    <div id="UILabel">客戶名: </div><input class="form_tfield" type="text" name="fname" value="" /><br/><br/>
                    <div id="UILabel">選擇出發地點: </div><select class="form_tfield" name="sourcelist"><br/><br/>
                        <?php
                            echo "<option selected>".$rowArray2[1]."</option>"; 
                            for ( $index=2;$index < count($rowArray2);$index++){
                               echo "<option>".$rowArray2[$index]."</option>";  
                            }
                        ?>                            
                    </select>
                    <br/><br/>
                    <div id="UILabel">選擇目的地點: </div><select class="form_tfield" name="destlist">
                        <?php
                            echo "<option selected>".$rowArray2[1]."</option>";
                            for ( $index=2;$index < count($rowArray2);$index++){
                               echo "<option>".$rowArray2[$index]."</option>";  
                            }
                        ?>
                    </select>
                    <br/><br/>
                    <div id="UILabel">出發日期: </div><input class="form_tfield" type="text" name="sdate" value="" /><br/>
                    <div id="note">
                        <p>輸入的日期格式為: yyyy-mm-dd</p>
                    </div>
                    <input class="form_submitb" type="submit" value="處理訂票" />
                </form>
            <?php
            }
            ?>                    
                    <!--body ends-->                    
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