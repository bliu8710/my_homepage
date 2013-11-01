<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>マイフォーム</title>
</head>
<body>
<p><?php echo anchor('blog/form', '新規追加'); ?></p>
<table>
<?php foreach($blogs as $blog): ?>
<tr>
<td><?php echo $blog['id']; ?></td>
<td><?php echo $blog['title']; ?></td>
<td><?php echo $blog['description']; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>