<?php
require "question.php";

for ($i = 1; $i <= count($questions); $i++) {
    $ans[$i] = $_POST["q" . $i] === $questions[$i-1][5] ? 1 : 0;
}
$score = count(array_keys($ans, 1));

if ($score == 30) {
    $message = "おめでとうございます！満点です！<br>合格への近道はとにかく過去問を解いて間違えた問題を復習し、解けるようにすることです。これを続ければ残り1週間でもかなり点数は上がります。<br>まだノー勉で「今年はダメかな」と思っている人もまだ諦めないでください！残り１週間で効率よく勉強して頑張れば点数は上がります。<br>試験が終わるまで気を抜かず勉強していきましょう！";
} elseif ($score > 20) {
    $message = "基本的な知識は身についていますね。<br>まだ一部曖昧な部分があるので、間違えた箇所は参考書で復習し、再度問題を解いて満点にしましょう！";
} elseif ($score > 10) {
    $message = "まだまだ合格までの知識は足りていません。<br>間違えた箇所を重点的に復習しましょう。<br>一通り復習したら当テストを再度解いてみましょう。";
} else {
    $message = "勉強が全然足りないです。<br>解説を読んで、まずは当テストで満点を目指しましょう！";
}
?>

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
        <meta name="description" content="第41回第2種ＭＥ技術実力検定試験試験直前実力テスト。当サイトはME2種を受験する方に向けて制作した「実力テスト」サイトです。試験によく出る問題・または基本的な問題を30問用意しました（選択肢は3つです）。受験される方は今の実力を試してみてください。">
        <link rel="shortcut icon" href="./images/favicon.ico">
        <link rel="apple-touch-icon" href="./images/apple-touch-icon.png">
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@juno_taku"/>
        <meta property="og:url" content="https://mechokuzen.site">
        <meta property="og:title" content="ＭＥ2種試験直前実力テスト">
        <meta property="og:description" content="第41回第2種ＭＥ技術実力検定試験試験直前実力テスト。当サイトはME2種を受験する方に向けて制作した「実力テスト」サイトです。試験によく出る問題・または基本的な問題を30問用意しました（選択肢は3つです）。受験される方は今の実力を試してみてください。">
        <meta property="og:image" content="https://mechokuzen.site/images/siteImage.png">
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
                    ・一部、過去問と内容を変えているものもあります。<br>
                    ・記載内容に間違いがないよう努めておりますが、受験者ご自身で正誤をご確認するようお願い致します。<br>
                    間違いを発見した際には<a href="https://twitter.com/juno_taku">こちら</a>にご連絡ください。

                    </p>
                </div>
                <div class="result_message">
                    <p class="result">
                        採点結果、あなたの得点は <span class="score"><?php echo $score; ?></span> 点でした！
                        <a href="https://twitter.com/share" class="twitter-share-button" data-text="ＭＥ2種試験直前実力テストの結果は【<?php echo $score ?>点】でした！" data-url="https://mechokuzen.site">Tweet</a>
                    </p>
                    <p><?php echo $message ?></p>
                </div>
                <div class="question">
                    <?php foreach($questions as $num => $q) { ?>
                    <section>
                        <p>【問題 <?php echo ++$num; ?> 】<?php echo $q[0]; ?><span class="font-color-red">【正解 <?php echo $q[5] ?> 】</span><br>
                            <?php if (!empty($q[4])) { ?>
                            <img src="<?php echo $q[4]; ?>" alt="image" width="250" height="250">
                            <?php } ?>
                            <input type="radio" name="<?php echo "q" . $num; ?>" value="1" <?php echo $_POST["q" . $num] == "1" ? "checked" : ""; ?>>1)<?php echo $q[1]; ?><br>
                            <input type="radio" name="<?php echo "q" . $num; ?>" value="2" <?php echo $_POST["q" . $num] == "2" ? "checked" : ""; ?>>2)<?php echo $q[2]; ?><br>
                            <input type="radio" name="<?php echo "q" . $num; ?>" value="3" <?php echo $_POST["q" . $num] == "3" ? "checked" : ""; ?>>3)<?php echo $q[3]; ?><br>
                        </p>
                        <?php
                            if ($ans[$num] == 1) {
                                echo "<p class='explanation' style='background: #cfc;'>正解！<br>" . $q[6] . "</p>";
                            } else {
                                echo "<p class='explanation' style='background: #fcc;'>誤り！<br>" . $q[6] . "</p>";
                            }
                        ?>
                    </section>
                    <?php } ?>
                    <a href="/"><button>もう一度トライ</button></a>
                </div>
            </div>
        </main>
    </body>
</html>