<!DOCTYPE html>      
<html>
    <head>
        <meta charset="utf-8" />
        <title>顯示航班資訊</title>
        <meta name="keywords" content="fight info, info" />
        <meta name="description" content="This page provides flight info." />
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <?php
        include("itinerarymanager.php");
        $FID = 0;
        if(isset($_REQUEST["FID"])){
            $FID = $_REQUEST["FID"];
        }
    ?>    
    <body>
        <div id="wrapper">
        <?php include 'include/header.php'; ?>
            <!-- end div#header -->
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h1>顯示航班資訊</h1>
                        <p>
                            您可以透過我們廣泛舒適的航班，了解我們航班可以到達的城市。
                        </p>
                        <!-- Fetch Rows -->
                        <table class="aatable">
                            <tr>
                                <th>航班編號</th>
                                <th>航班名稱</th>
                                <th>起飛地點</th>
                                <th>降落地點</th>                                 
                            </tr>
                            <?php
                            $flightData = getFlightInfo($FID);
                            
                            for($index=0;$index < count($flightData);$index++){
                                $flight = $flightData[$index];
                                echo "<tr>";
                                echo "<td>".$flight->get_FID()."</td>";
                                echo "<td>".$flight->get_FName()."</td>";
                            
                                echo "<td>".$flight->get_source()."</td>";
                                echo "<td>".$flight->get_dest()."</td>";
                            
                                echo "</tr>";
                            }
                            ?>
                        </table>
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
