<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>메인</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- href 가 왜 저렇게 구성되어잇는지..style.css은 skin바깥에 잇는데 -->
    <!-- 합쳐지고 최소화된 최신 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- 부가적인 테마 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body>

<!-- 헤더 -->
<div id="header" >
	<h1>아름다운 세상.</h1>
	<ol class="nav nav-pills">
		<li class="active"><a href="#">홈으로</a></li>
		<li><a>소개</a></li>
		<li><a>자유게시판</a></li>
		<li><a>방명록</a></li>
	</ol>
</div>

<!-- 내용 -->
<div id="content">
	<div id="sidebar">

<?php if(!isLogged() ){ ?>
		<form class="form-horizontal">
			<div class="form-group">
				<label for="inputid" class="col-sm-2 control-label">id</label>
				<div class="col-sm-10">
					<input type="text" name="user_id" class="form-control" id="inputid" placeholder="id">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">pw</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">로그인</button>
				</div>
			</div>

		</form>
<?php }else{ ?>

	<p><?=getUserInfo('name') ?>님 안녕하세요! 반가워용 </p>
<?php }?>
		<p>블라블라</p>
		<p>블라블라</p>
		<p>블라블라</p>
	</div>

	<div id="body">