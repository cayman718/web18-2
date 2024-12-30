<style>
.type {
    border: 1px solid #999;
    padding: 5px 10px;
    margin: -1px;
}

.types {
    display: flex;
    margin: 1px;
}

.texts {}

.text {
    width: 90%;
    min-height: 450px;
    border: 1px solid #999;
    display: none;
}
</style>
<div class="types">
    <div class='type'>健康新知</div>
    <div class='type'>菸害防治</div>
    <div class='type'>癌症防治</div>
    <div class='type'>慢性病防治</div>
</div>
<div class="texts">
    <div class="text active">

    </div>
    <div class="text">

    </div>
    <div class="text">

    </div>
    <div class="text">

    </div>
</div>

<!-- 1.eq()方法 取得物件  2.index()方法 通常是抓資料 陣列使用 -->
<script>
$(".type").on('click', function() {
    let idx = $(this).index();
    $(".text").remove("active");
    $(".text").eq(idx).addClass("active");
})
</script>