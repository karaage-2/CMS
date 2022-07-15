<?php require '/templates/settings.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="format-detection" content="email=no,telephone=no,address=no" />
	<link rel="stylesheet" href="style.css" />
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:type" content="<?php echo $sitetype ?>">
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:locale" content="<?php echo $oglocale; ?>" />
	<meta property="og:image" content="<?php echo $thumbnailurl; ?>" />
	<meta name="twitter:card" content="<?php echo $ogsummary; ?>" />
	<link rel="icon" href="<?php echo $icon16; ?>" sizes="16x16" type="image/png" />
	<link rel="icon" href="<?php echo $icon32; ?>" sizes="32x32" type="image/png" />
	<link rel="icon" href="<?php echo $icon48; ?>" sizes="48x48" type="image/png" />
	<link rel="icon" href="<?php echo $icon62; ?>" sizes="62x62" type="image/png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $appimg; ?>" />
	<meta name="msapplication-TileImage" content="<?php echo $appimg; ?>" />
	<meta name="msapplication-TileColor" content="<?php echo $themecolor; ?>" />
	<meta name="theme-color" content="<?php echo $themecolor; ?>">
	<meta property="og:site_name" content="<?php echo $sitename; ?>" />
	<meta name="twitter:site" content="<?php echo $author_twitter_account; ?>" />
	<meta property="fb:app_id" content="<?php echo $facebook_app_id; ?>" />
</head>