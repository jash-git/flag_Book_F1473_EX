    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
     ?>


    <div id="main">
    <h3>開始建立你的Web網站</h3>

    <ol class="round">
        <li class="one">
            <h5>使用管理者登入</h5>
           網站管理者的使用者名稱和密碼是儲存在Includes目錄的simplecms-config.php設定檔. 
        </li>
        <li class="two">
            <h5>客制化你的網站</h5>
             在登入後, 你可以新增, 刪除和編輯Web網頁.
         </li>
        <li class="asterisk">
            <div class="visit">
                PHP網頁設計技術的官網: <a href="http://php.net" title="PHP.net Website">http://php.net</a>. 
            </div>
         </li>
    </ol>


    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php 
    include ("Includes/footer.php");      
 ?>