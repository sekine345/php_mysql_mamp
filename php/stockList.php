<?php
    $user_name="毘沙門太郎";
    // $n[] = 3;
    // $n[] = 4;
    // $n[] = 7;
    // $n = array(9, 10, 11);
    // $stock_id = array(4 , 5 , 6);
    // $stock_name = array("バター" , "ショートニング" , "スキムミルク"); 
    // $amount = array("450g" , "15kg" , "25kg");
    // $n = array(9 , 5 , 3);
    // $remarks = array("無塩" , "バターロール 揚げパン" , "");
    // $stock_data[] = array(
    //     "stock_id" => 1, 
    //     "stock_name" => "強力粉", 
    //     "amount" => "25kg", 
    //     "n" => 3,
    //     "remarks" => "食パン・バターロール・ピザ向き"
    // );
    // $stock_data[] = array(
    //     "stock_id" => 2 , 
    //     "stock_name" => "薄力粉" , 
    //     "amount" => "25kg" , 
    //     "n" => 4 ,
    //     "remarks" => "メロンパンの外生地・クッキー・マフィン"
    //     );
    // $stock_data[] = array(
    //     "stock_id" => 3 , 
    //     "stock_name" => "ドライイースト" , 
    //     "amount" => "1kg" , 
    //     "n" => 7 ,
    //     "remarks" => ""
    //     );
    include "stochData.php";

    // --- $mode ---
    if(isset($_GET['m'])){ // m があるかどうか -> isset
        $mode=$_GET['m'];
    }
    else{
        $mode=0;
    }
?>

<!doctype html>
<html>
    <head>
        <title>在庫管理</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../html/css/stock.css">
    </head>
    <body>
        <div id="container">
            <!-- ### header ### -->
            <div id="header">
                <img src="../html/images/large_logo.gif">
                <div id="header_title">在庫管理システム</div>
                <div id="header_user"><?=$user_name?> 様</div>
            </div>

            <!-- ### nav ### -->
            <div id="nav">
                <ul>
                    <li>メニューを選択</li>
                    <li><a href="stockList.php?m=0">在庫一覧</a></li>
                    <li><a href="stockList.php?m=1">入庫（仕入れ）</a></li>
                    <li><a href="stockList.php?m=2">出庫（消費）</a></li>
                </ul>
            </div>

            <!-- ### main ### -->
            <div id="main">
                <?php
                    if($mode==0){
                ?>
                <div id="main_title">在庫一覧</div>
                <?php
                    }
                    else if($mode==1){
                ?>
                <div id="main_title">入庫（仕入れ）</div>
                <?php
                    }
                    else{
                ?>
                <div id="main_title">出庫（消費）</div>
                <?php
                    }
                ?>


                <form action="stockList.html" method="POST">
                    種類の選択 : <select name="type_select">
                        <option value="0" selected>すべて</option>
                        <option value="1">パン生地の材料</option>
                        <option value="2">ドライフルーツ</option>
                        <option value="3">調味料</option>
                        <option value="4">和菓子の材料</option>
                    </select>
                    <input type="submit" value="切り替え">
                </form>
                <table>
                    <tr>
                        <th>番号</th>
                        <th>材料</th>
                        <th>内容量</th>
                        <th>種類</th>
                        <th>個数</th>
                        <?php
                            if($mode==0){
                        ?>
                        <th>備考</th>
                        <?php
                            }
                        ?>
                        <?php
                            if($mode==1){
                        ?>
                        <th>入庫個数</th>
                        <?php
                            }
                        ?>
                        <?php
                            if($mode==2){
                        ?>
                        <th>出庫個数</th>
                        <?php
                            }
                        ?>
                    </tr>
                    <?php
                        foreach( $stock_data as $val){
                    ?>
                    <tr>
                        <td class="num"><?= $val["stock_id"] ?></td>
                        <td><?= $val["stock_name"] ?></td>
                        <td class="num"><?= $val["amount"] ?></td>
                        <td>パン生地の材料</td>
                        <td class="num"><?=$val["n"]?></td>
                        <?php
                            if($mode==0){
                        ?>
                            <td><?= $val["remarks"] ?></td>
                        <?php
                            }
                            else{
                        ?>
                            <td class="center_elements">
                                <input type="text" size="4" name="<?= $val["stack_id"] ?>">    
                            </td>
                        <?php
                            }
                        ?>

                        
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <?php
                    if($mode==1){
                ?>
                    <div class="right_elements"><input type="submit" value="入庫"></div>
                <?php
                    }
                    else if($mode==2){
                ?>
                    <div class="right_elements"><input type="submit" value="出庫"></div>
                <?php
                    }
                ?>
            </div>
            <!-- ### footer ### -->
            <div id="footer">
                Copyright © All Right Reserved by JMOOC
            </div>
        </div>
    </body>
</html>