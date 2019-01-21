<?php
include_once('common/db_main.php');
$db = new db;
include_once("common/templates/header.tpl");
?>
    <div id="contents" class="clearfix">
    	<div class="main-cont">
            <div class="list-title">
                <img src="common/images/main/cp.png" alt="会社概要" class="fix">
            </div>
                <table class="cp">
                    <tr>
                        <th>社名</th>
                        <td>シーサーＮｅｔ　株式会社</td>
                    </tr>
                    <tr>
                        <th>設立年月日</th>
                        <td>2012年11月</td>
                    </tr>
                    <tr>
                        <th>本社</th>
                        <td>沖縄県那覇市高良3-8-23<br>
                            眞浩商事ビル　４階 <a href="http://goo.gl/vdj4G4" target="_blank" rel="nofollow">【Map】</a>
                        </td>
                    </tr>
                    <tr>
                        <th>代表取締役</th>
                        <td>種田 貴彌</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>15,000,000円</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>コーポレートサイト制作<br>
                            名刺やロゴ制作<br>
                            インフラ構築(ＷｅｂサーバーやＤＢ等)<br>
                            オープンシステム開発<br>
                            講師派遣(Ｊａｖａ，ＰＨＰ，Ａｎｄｒｏｉｄ，Ｏｆｆｉｃｅ系)<br>
                            プログラミング講座
                        </td>
                    </tr>
                </table>
        </div>
<?php include_once("common/templates/footer.tpl") ?>