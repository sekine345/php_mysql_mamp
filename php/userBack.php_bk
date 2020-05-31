<!doctype html>
<html>
    <head>
        <title>新規登録</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../html/css/user.css">
    </head>
    <body>
        <div id="container">
            <img src="../html/images/large_logo.gif">
            <h2>在庫管理システム 社員登録</h2>
            <form action="stockList.html" method="post">
                <table>
                    <tr>
                        <th>社員番号</th>
                        <td>
                            <?php
                                echo $_POST["user_number"]
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <td>
                            <?php
                                echo $_POST["user_name"]
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td>
                            <?= $_POST["user_password"] ?> <!-- echo だけなら、この書き方で良い -->
                        </td>
                    </tr>
                    <tr>
                        <th>パスワード確認</th>
                        <td>
                            <?=$_POST["user_password2"]?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2"><input type="submit" value="新規登録"></th>
                    </tr>
                </table>
            </form>
            <a href="index.html">ログインに戻る</a>
        </div>
    </body>
</html>