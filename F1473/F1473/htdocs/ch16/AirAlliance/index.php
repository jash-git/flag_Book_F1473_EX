<!DOCTYPE html>    
<html>
    <head>
        <meta charset="utf-8" />
        <title>AirAlliance航空公司</title>
        <meta name="keywords" content="homepage, Web" />
        <meta name="description" content="Web site homepage" />
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>    
    <body>
        <div id="wrapper">
        <?php include 'include/header.php'; ?>
            <!-- end div#header -->
            <div id="page">
                <div id="content">
                    <div id="welcome">
                        <h1>歡迎進入AirAlliance航空公司的首頁</h1>
                        <!--body-->
                        <p>
                            AirAlliance目前已經發展成為一個世界知名的旅遊品牌。 
                            我們擁有世界上最年輕的空中客機，遍布世界五大洲的客戶、
														投資者、合作夥伴和工作人員網路 - 每個人都讓我們更佳
														的卓越。不只如此，在我們的休息室、會議室、工作關係，
														而且在每一個最細微的飛行細節，都提供AirAlliance完美
														服務的經驗。
                        </p>
                        <p>
                            我們每天提供超過 370 個航班, 飛航印度國內 44 個城巿，
														而且擁有最新和最佳服務的班機飛航英國、美國、加拿大、
														比利時、新加坡、泰國、馬來西亞、尼泊爾、斯里蘭卡、
														孟加拉、巴林、科威特、阿曼和卡達等國家的國際航班。
														AirAlliance航空公司計劃在未來數年擴充廣體客機的
														國際航班飛航北美、歐洲、非洲和亞洲各國.  
                        </p>                        
                        <p>
                            希望你再次搭乘AirAlliance航空公司!
                        </p>                       
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