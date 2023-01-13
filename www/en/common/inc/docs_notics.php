<?php
$sql = " select * from `g5_write_notice` WHERE wr_1 = '".$nowFileName."' ";
$result = sql_query($sql);
$total_record = sql_num_rows($result);
if($total_record) {
  for ($i=0; $row=sql_fetch_array($result); $i++) {
    $wr_href = "https://iksanlightfesta.kr/bbs/board.php?bo_table=notice&wr_id=".$row['wr_id'];
?>
    <a href="<?php echo $wr_href; ?>" class="subPacade--news-item">
        <p class="subPacade--news-item-text1"><?php echo $row['wr_subject']; ?></p>
        <p class="subPacade--news-item-text2">공지사항</p>
        <p class="subPacade--news-item-text3"><?php echo date("Y.m.d", strtotime($row['wr_datetime'])); ?></p>
    </a>
<?php
    }   // for
} else {
    echo '<div class="subPacade--news-item none-item"><p class="subPacade--news-item-text1">최신 소식을 기다려주세요 👀</p></div>';
}
?>

<!-- <a href="" class="subPacade--news-item">
    <p class="subPacade--news-item-text1">2022 익산 미륵사지 미디어아트 페스타 하준수(탑의나라, 소망을 쌓다) 개최</p>
    <p class="subPacade--news-item-text2">공지사항</p>
    <p class="subPacade--news-item-text3">2022.08.05</p>
</a>
<a href="" class="subPacade--news-item">
    <p class="subPacade--news-item-text1">2022 익산 미륵사지 미디어아트 페스타 하준수(탑의나라, 소망을 쌓다) 개최</p>
    <p class="subPacade--news-item-text2">공지사항</p>
    <p class="subPacade--news-item-text3">2022.08.05</p>
</a>
<a href="" class="subPacade--news-item">
    <p class="subPacade--news-item-text1">2022 익산 미륵사지 미디어아트 페스타 하준수(탑의나라, 소망을 쌓다) 개최</p>
    <p class="subPacade--news-item-text2">공지사항</p>
    <p class="subPacade--news-item-text3">2022.08.05</p>
</a> -->
