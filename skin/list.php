<table class="table table-striped">
	<tr>
		<th>제목</th>
		<th>글쓴이</th>
		<th>시간</th>
	</tr>




<?php foreach($vars['list'] as $list) { ?>
	
	<tr>
	
		<td><?=$list['title'] ?></td>
		<td><?=$list['writer']?></td>
		<td><?=$list['time']  ?></td>

	</tr>
<?php }?>
</table>
<a href="write.php" class="btn btn-warning">글쓰기</a>

<?php

/* 
	<?= ?>
	<?php echo ?>]
*/
?>


