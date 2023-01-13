function GoPage(code) {

	if ( !code )						{	window.location = "/";	}

	else if ( code == "main" )			{	window.location = "/en/index.php";		} //메인
	else if ( code == "en" )			{	window.location = "http://iksanlightfesta.kr/en/";		} //메인
	else if ( code == "kr" )			{	window.location = "http://iksanlightfesta.kr";		} //메인

  //행사소개
	else if ( code == "introduce01" )		{	window.location = "/en/docs/introduce01.php"; }
  else if ( code == "introduce02" )		{	window.location = "/en/docs/introduce02.php"; }
  else if ( code == "introduce03" )		{	window.location = "/en/docs/introduce03.php"; }
  else if ( code == "introduce04" )		{	window.location = "/en/docs/introduce04.php"; }
  else if ( code == "introduce05" )		{	window.location = "/en/docs/introduce05.php"; }

  //역사를 쌓다
  else if ( code == "history" )		{	window.location = "/en/docs/history.php"; }
  else if ( code == "history01" )		{	window.location = "/en/docs/history01.php"; } //pacade01
  else if ( code == "history02" )		{	window.location = "/en/docs/history02.php"; } //pacade02
  else if ( code == "history03" )		{	window.location = "/en/docs/history03.php"; } //pacade022
  else if ( code == "history04" )		{	window.location = "/en/docs/history04.php"; } //event03

  //예술을 쌓다
  else if ( code == "art" )		{	window.location = "/en/docs/art.php"; }
  else if ( code == "art01" )		{	window.location = "/en/docs/art01.php"; }
  else if ( code == "art02" )		{	window.location = "/en/docs/art02.php"; }
  else if ( code == "art03" )		{	window.location = "/en/docs/art03.php"; }
  else if ( code == "art04" )		{	window.location = "/en/docs/art04.php"; }
  else if ( code == "art05" )		{	window.location = "/en/docs/art05.php"; } //pacade03
  else if ( code == "art06" )		{	window.location = "/en/docs/art06.php"; } //pacade04

  //소망을 쌓다
  else if ( code == "hope" )		{	window.location = "/en/docs/hope.php"; }
  else if ( code == "hope01" )		{	window.location = "/en/docs/hope01.php"; } //light01
  else if ( code == "hope02" )		{	window.location = "/en/docs/hope02.php"; } //light02
  else if ( code == "hope03" )		{	window.location = "/en/docs/hope03.php"; } //light03
  else if ( code == "hope04" )		{	window.location = "/en/docs/hope04.php"; } //light04

  //연계행사
  else if ( code == "event" )		{	window.location = "/en/docs/event.php"; }
  else if ( code == "event01" )		{	window.location = "/en/docs/event01.php"; } //event01
  else if ( code == "event02" )		{	window.location = "/en/docs/event02.php"; } //event04
  else if ( code == "event03" )		{	window.location = "/en/docs/event03.php"; }



	else if ( code == "board01" )		{	window.location = "/bbs/board.php?bo_table=notice"; }
	else if ( code == "board02" )		{	window.location = "/bbs/board.php?bo_table=faq"; }

	else if ( code == "blog" )		{	window.open('about:blank').location.href="https://blog.naver.com/ "}

	else if ( code == "fun01" )		{	window.open('about:blank').location.href="https://blog.naver.com/PostList.nhn?blogId=hiksanin&from=postList&categoryNo=78"}	//맛집소개
	else if ( code == "fun02" )		{	window.open('about:blank').location.href="https://www.iksan.go.kr/tour/board/list.iksan?boardId=BBS_TOUR_STAY&menuCd=DOM_000005904002000000&contentsSid=3954&cpath=%2Ftour"}	//숙박소개
	// else if ( code == "fun02" )		{	alert("준비중입니다.") }	//숙박소개
	else if ( code == "fun03" )		{	window.open('about:blank').location.href="https://iksan.museum.go.kr/ "}	//국립익산박물관
	else if ( code == "fun04" )		{	window.open('about:blank').location.href="https://iksan.museum.go.kr/ismchild/ "}	//익산어린이박물관
	else if ( code == "fun05" )		{	window.open('about:blank').location.href="https://www.jewelmuseum.go.kr/"}	//보석박물관
	else if ( code == "fun06" )		{	window.open('about:blank').location.href="https://www.iksan.go.kr/wg/index.iksan"}	//보석박물관


	else if ( code == "facebook" )		{	alert("준비중입니다.") }
	else if ( code == "instagram" )		{	alert("준비중입니다.") }
	// else if ( code == "youtube" )		{	alert("준비중입니다.") }
  else if ( code == "youtube" )		{	window.open('about:blank').location.href="https://www.youtube.com/watch?v=2hgGhGx4cPA"}
	else if ( code == "kakao" )		{	alert("준비중입니다.") }
}
