<form action="write_ok.php" method="post">

    <div class="form-group">
        <label>제목</label>
        <input class="form-control" name="title"  type="text"  value="" />
    </div>

    <div class="form-group">
        <label>글쓴이</label>
        <input class="form-control" name="writer"  type="text"  value="" />
    </div>

    <div class="form-group">
        <label>내용</label>
        <textarea class="form-control" name="content"  rows="10"  cols="50"></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="저장" />
    </div>

</form>

<?php
/*
get: 검색창, view.php(글보기 화면), ...  -> 정보를 가져오는 느낌
post: 글쓰기, 로그인, 글수정.. -> 정보를 입력하는 느낌

label, input 이 인라인이라서 div 쓰고 부트스트랩으로 이쁘게 해준다
*/
?>
