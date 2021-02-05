<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/regist.js"></script>
    <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
</head>
<body>
    <h2>회원가입</h2>
    <form name="regform" id="regform" method="post" action="3_regist_ok.php" onsubmit="return sendit()">
        <input type="hidden" name="isSsn" id="isSsn" value="false">
        <p><label>아이디 : <input type="text" name="userid" id="userid" maxlength="20"></label></p>
        <p><label>비밀번호 : <input type="password" name="userpw" id="userpw" maxlength="20"></label></p>
        <p><label>비밀번호 확인 : <input type="password" name="userpw_re" id="userpw_re" maxlength="20"></label></p>
        <p><label>이름 : <input type="text" name="username" id="username"></label></p>
        <p><label>휴대폰 번호 : <input type="text" name="hp" id="hp"></label> ('-' 을 포함)</p>
        <p><label>이메일 : <input type="text" name="email" id="email"></label></p>
        <p>취미 : 
            <label>드라이브<input type="checkbox" name="hobby[]" value="드라이브"></label>
            <label>등산<input type="checkbox" name="hobby[]" value="등산"></label>
            <label>게임<input type="checkbox" name="hobby[]" value="게임"></label>
            <label>영화감상<input type="checkbox" name="hobby[]" value="영화감상"></label>
            <label>쇼핑<input type="checkbox" name="hobby[]" value="쇼핑"></label>
        </p>
        <p>주민등록번호 : 
            <input type="text" name="ssn1" id="ssn1" maxlength="6" onkeyup="moveFocus()"> - <input type="text" name="ssn2" id="ssn2" maxlength="7">
            <input type="button" value="주민등록번호 검증" onclick="ssnCheck()">
        </p>
        <p>우편번호 : <input type="text" name="zipcode" id="sample6_postcode"> <input type="button" value="우편번호 검색" onclick="sample6_execDaumPostcode()"></p>
        <p><label>주소 : <input type="text" name="address1" id="sample6_address"></label></p>
        <p><label>상세주소 : <input type="text" name="address2" id="sample6_detailAddress"></label></p>
        <p><label>참고항목 : <input type="text" name="address3" id="sample6_extraAddress"></label></p>
        <p><input type="submit" value="가입완료"> <input type="reset" value="다시작성"> 
           <input type="button" value="로그인" onclick="location.href='./3_login.php'"></p>
    </form>
</body>
</html>