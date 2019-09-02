<?php require "question.php"; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139382417-8"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-139382417-8');
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/nomalize.css">
        <link rel="stylesheet" href="./css/style.css">
        <title>ＭＥ2種試験直前実力テスト</title>
        <meta name="description" content="第41回第2種ＭＥ技術実力検定試験試験直前実力テスト。当サイトはME2種を受験する方に向けて制作した「実力テスト」サイトです。試験によく出る問題・または基本的な問題を30問用意しました（選択肢は3つです）。受験される方は今の実力を試してみてください。">
        <link rel="shortcut icon" href="./images/favicon.ico">
        <link rel="apple-touch-icon" href="./images/apple-touch-icon.png">
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@juno_taku"/>
        <meta property="og:url" content="https://mechokuzen.site">
        <meta property="og:title" content="ＭＥ2種試験直前実力テスト">
        <meta property="og:description" content="第41回第2種ＭＥ技術実力検定試験試験直前実力テスト。当サイトはME2種を受験する方に向けて制作した「実力テスト」サイトです。試験によく出る問題・または基本的な問題を30問用意しました（選択肢は3つです）。受験される方は今の実力を試してみてください。">
        <meta property="og:image" content="https://mechokuzen.site/images/siteImage.png">
    </head>
    <body class="me42">
        <header>
            <h1>第41回第2種ＭＥ技術実力検定試験 試験直前 実力テスト</h1>
        </header>
        <main>
            <div class="content">
                <div class="info">
                    <p>
                    当サイトはME2種を受験する方に向けて制作した実力テストサイトです。<br>
                    試験によく出る問題・または基本的な問題を30問用意しました（選択肢は3つです）。<br>
                    受験される方は是非今の実力を試してみてください。<br>
                    ※注意事項<br>
                    ・主に第40-37回の過去問を参考に制作しています。ネタバレ困るという方はお控えください。<br>
                    ・一部、過去問と内容を変えているものもあります。
                    </p>
                </div>
                <div class="question">
                    <form action="answer.php" method="POST">
                        <?php foreach($questions as $num => $q) { ?>
                        <section>
                            <p>【問題 <?php echo ++$num; ?> 】<?php echo $q[0]; ?><br>
                                <?php if (!empty($q[4])) { ?>
                                <img src="<?php echo $q[4]; ?>" alt="image" width="250" height="250">
                                <?php } ?>
                                <input type="radio" name="<?php echo "q" . $num ?>" value="1">1)<?php echo $q[1]; ?><br>
                                <input type="radio" name="<?php echo "q" . $num ?>" value="2">2)<?php echo $q[2]; ?><br>
                                <input type="radio" name="<?php echo "q" . $num ?>" value="3">3)<?php echo $q[3]; ?><br>
                            </p>
                        </section>
                        <?php } ?>
                        <input type="submit" value="採点">
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>