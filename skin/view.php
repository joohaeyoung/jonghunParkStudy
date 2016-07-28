<h2><?=$vars['post']['title'] ?></h2>
<p>글쓴이 : <?=$vars['post']['writer'] ?></p>
<p>글쓴 시간 : <?=$vars['post']['time'] ?></p>

<div>
<?=$vars['post']['content'] ?>
</div>

<a href="upload_file/<?= $vars['file']['file_name'] ?>"><?= $vars['file']['file_name'] ?></a>
<!-- 컨트롤러는 모델와 뷰사이의 다리역할...-->