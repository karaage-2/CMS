<?php

// ライブラリの読み込み
require_once "./Item.php";
require_once "./Feed.php";
require_once "./RSS2.php";

// エイリアスの作成
use \FeedWriter\RSS2;

// インスタンスの作成
$feed = new RSS2;

// チャンネル情報
$feed->setTitle("SYNCER");			// チャンネル名
$feed->setLink("https://syncer.jp");		// URLアドレス
$feed->setDescription("");	// チャンネル紹介テキスト
$feed->setImage("SYNCER", "https://syncer.jp", "https://syncer.jp/images/DHFgXv5Rfe4d1Lej1lnQfuffZtzsj/assets/logo/490x196.png");	// ロゴなどの画像
$feed->setDate(date(DATE_RSS, time()));	// フィードの更新時刻
$feed->setChannelElement("language", "ja-JP");	// 言語
$feed->setChannelElement("pubDate", date(\DATE_RSS, strtotime("2014-11-23 15:30")));	// フィードの変更時刻
$feed->setChannelElement("category", "Blog");	// カテゴリー

// アイテム(1つだけ登録)
$item = $feed->createNewItem();
$item->setTitle("PHPでRSS、AtomのFeedを作成する方法");	// タイトル
$item->setLink("https://syncer.jp/how-to-make-feed-by-php");	// リンク
$item->setDescription("PHPを使って、RSS、Atomのフィード・ファイルを作成する方法を解説します。");	// 紹介テキスト
$item->setDate(strtotime("2014-11-23 18:30"));	// 更新日時
$item->setAuthor("あらゆ", "info@syncer.jp");	// 著者の連絡先(E-mail)
$item->setId("https://syncer.jp/how-to-make-feed-by-php", true);	// 一意のID(第1引数にURLアドレス、第2引数にtrueで通常は大丈夫)
$feed->addItem($item);

// コードの生成
$xml = $feed->generateFeed();

// ファイルの保存場所を設定
$file = "./rss2.xml";

// ファイルの保存を実行
@file_put_contents($file, $xml);

// 初期値
$html = '';

// HTMLの作成
$html .= '<h2>生成したコード</h2>';
$html .= '<p>Atomの仕様に従って、生成したコードです。</p>';
$html .= '<p><textarea rows="8">' . $xml . '</textarea></p>';

$html .= '<h2>生成したファイル</h2>';
$html .= '<p>生成したファイルへのリンクです。生成するには、ディレクトリに書き込み権限を設定する(パーミッションを777などにする)必要があります。</p>';
$html .= '<p><a href="' . $file . '">' . ltrim($file, "./") . '</a></p>';

$html .= '<h2>文法チェック</h2>';
$html .= '<p>生成したファイルを、W3Cのバリデーション・チェッカーを利用して、文法チェックにかけます。</p>';
$html .= '<p><a href="http://validator.w3.org/feed/check.cgi?url=' . rawurlencode(rtrim((empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], 'make-rss2-feed.php') . ltrim($file, "./")) . '" target="_blank">W3C Validation</a></p>';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex,nofollow">

	<!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>PHPでRSS2フィードを作成するサンプルデモ</title>
	<!--

/********************************************************************************

	SYNCER 〜 知識、感動をみんなと同期(Sync)するブログ

	* 配布場所
	https://syncer.jp/how-to-make-feed-by-php

	* 動作確認
	https://syncer.jp/how-to-make-feed-by-php/demo/make-rss2-feed.php

	* 最終更新日時
	2015/09/13 18:06

	* 作者
	あらゆ

	** 連絡先
	Twitter: https://twitter.com/arayutw
	Facebook: https://www.facebook.com/arayutw
	Google+: https://plus.google.com/114918692417332410369/
	E-mail: info@syncer.jp

	※ バグ、不具合の報告、提案、ご要望など、お待ちしております。
	※ 申し訳ありませんが、ご利用者様、個々の環境における問題はサポートしていません。

********************************************************************************/

		-->
</head>

<body>



	<?php echo $html ?>


	<p style="text-align:center"><a href="https://syncer.jp/how-to-make-feed-by-php">配布元: Syncer</a></p>






</body>

</html>