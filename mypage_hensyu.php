<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

//mypage.phpからの導線以外は、「login_error.php」へリダイレクト
if(!empty($_POST['mypage.php'])){
        header("Location:login_error.php");
    }

?>
<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
   <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>
        
        <main>
         <form action="mypage_update.php" method="post">
                <div class="jyouhou">
                    <h2>会員情報</h2>
                    <p>こんにちは！<?php echo $_SESSION['name']."さん。"; ?> </p>
                    <div class="top">
                        <div class="profile_pic">
                            <img src="<?php echo $_SESSION['picture']; ?>">
                        </div>
                    
                        <div class="syousai">
                            <p>氏名:<input type="text" class="formbox" size="30" value="<?php echo $_SESSION['name'];?>" name="name"></p>
                            <p>メール:<input type="text" class="formbox" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail"> </p>
                            <p>パスワード:<input type="text" class="formbox" size="30" value="<?php echo $_SESSION['password'];?>" name="password"></p>
                        </div>
                    </div>
                     <div class="border"></div>
                    <div class="comments">
                        <p><textarea rows="5" cols="55" value="<?php echo $_SESSION['comments'];?>" name="comments"></textarea></p>
                    </div>
                    <div class="button">
                       <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                    </div>
                </div>
         </form>
        </main>