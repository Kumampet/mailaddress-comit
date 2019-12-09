<!DOCTYPE html>

<head>
  <!--Metas-->
  <meta charset="utf-8">
  <meta lang="ja">
  <meta name="viewport" content="width=device-width,initial-scale=1,maxmun-scale=1">

  <!--Title-->
  <title>学籍メアド生成</title>

  <!--Links-->
  <link rel="shortcut icon" href="./image/top_s/wakata_ico.png">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet"><!--Font-->


  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="./css/layout.css">
  <link rel="stylesheet" type="text/css" href="./css/header.css">
  <link rel="stylesheet" type="text/css" href="./css/mail_make.css?20190409">
  <link rel="stylesheet" type="text/css" href="./css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

  <!--Scripts-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>
  <div id="layout">
    <div class="group1">
      <header id="site_header" class="site_header">
        <div class="header_logo">
          <div class="logo">
            <a href="index.html"><img class="main-logo" src="./image/logo.png"></a>
          </div>
        </div>
      </header>

      <!----------------------------------------------------->
      <?php
      $id = $_POST['id'];
      $name = $_POST['name'];
      $name_sub = $_POST['name_sub'];
      $file_1 = './id/id_name.txt';
      $file_2 = './id/mail.txt';

      if($id != ""){
        //----文字のエンコード-----
        $id = htmlspecialchars($id,ENT_QUOTES,'utf-8');
        $name = htmlspecialchars($name,ENT_QUOTES,'utf-8');
        $name_sub = htmlspecialchars($name_sub,ENT_QUOTES,'utf-8');
        // ファイルをオープンして既存のコンテンツを取得します
        $f1 = fopen($file_1, "a");
        $f2 = fopen($file_2, "a");
        // 新しい人物をファイルに追加します
        @fwrite($f1, $id."@hoge.com , ".$name."(".$name_sub.")\n");
        @fwrite($f2, $id."@hoge.com, ");
        // 結果をファイルに書き出します
        fclose($f1);
        fclose($f2);
      }
      ?>
      <!----------------------------------------------------->
      <div class="about-main">
        <div class="about-content">
          <h2>入力欄</h2>
          <div class="form-back">
            <h3>学籍番号とお名前を入力してください。</h3>
            <form class="entry" action="#" method="post" name="id2mail" autocomplete="off" >
              <div class="input-box">
                <p>学籍番号(sを付けて入力してください)</p>
                <input id="id" class="input-box" type="text" name="id" required>
              </div>
              <div class="input-box">
                <p>お名前</p>
                <input id="name" class="input-box" type="text" name="name" required>
              </div>
              <div class="input-box">
                <p>ふりがな</p>
                <input id="name_sub" class="input-box" type="text" name="name_sub" required>
              </div>
              <div class="submit-box">
                <input type="submit" value"送信する" class="submit-btn">
                <p>＊入部や説明会にかかわるメールの送信以外には使用いたしません。</p>
              </div>
              <script>
              $(function () {
                $('input[type="submit"]').click(); {
                  alert("送信されました！");
                }
              })
              </script>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="footer-left">
        &copy;1999 企画開発部 PandD<br>
        当サイト上のバナーを除くあらゆるデータの無断複製、無断転載を禁止します。
      </div>
    </footer>

  </div>

</body>

</html>
