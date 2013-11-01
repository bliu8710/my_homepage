<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>マイフォーム</title>
</head>
<body>
<?php echo validation_errors(); ?>
<?php echo form_open('blog/form'); ?>
<h5>タイトル</h5>
<input type="text" name="title" value="" size="30" />
<h5>文章</h5>
<textarea cols="30" name="description" rows="7"></textarea>
<div><input type="submit" value="送信" /></div>
</form>
</body>
</html>