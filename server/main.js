$(function(){
  /*=================================================
  // カレンダー用 jQueryプラグイン「Datepicker」
  ===================================================*/
  $('#reservation').datepicker();

  /*=================================================
  // ラジオボタン下のテキスト切り替え
  //（ラジオボタンが変更されたタイミングで実行）
  ===================================================*/
  $('.lesson').on('change', function(){
    // チェックされている方のラジオボタンのvalue値を取得
    let lesson = $('input[name=your-lesson]:checked').val();

    // 「オンラインで受講」がチェックされている場合
    if (lesson == 'online') {
      // 「オンラインで受講」用のテキストを表示する
      $('.note-online').css('display', 'block');
      // 「会場で受講」用のテキストを非表示にする
      $('.note-venue').css('display', 'none');

    // 「会場で受講」がチェックされている場合
    } else if (lesson == 'venue') {
      // 「オンラインで受講」用のテキストを非表示にする
      $('.note-online').css('display', 'none');
      // 「会場で受講」用のテキストを表示する
      $('.note-venue').css('display', 'block');
    }
  });

  /*=================================================
  // 入力チェック（申し込みボタン押下時に実行）
  ===================================================*/
  $('#submit-button').on('click', function(){
    // エラーメッセージを表示するためのエリアを初期化
    $('#name-error').text("");
    $('#tel-error').text("");
    $('#reservation-error').text("");
    $('#lesson-error').text("");

    // 名前が未入力の場合
    if($('input[name="your-name"]').val() == "") {
      // エラーメッセージをセット
      $("#name-error").text("名前は必須項目です。");
    }

    // 電話番号の入力欄に1つでも未入力がある場合
    if(
      ($('input[name="your-tel1"]').val() == "") ||
      ($('input[name="your-tel2"]').val() == "") ||
      ($('input[name="your-tel3"]').val() == "")
    ) {
      // エラーメッセージをセット
      $("#tel-error").text("電話番号は必須項目です。");
    }

    // 予約日が未入力の場合
    if($('input[name="your-reservation"]').val() == "") {
      // エラーメッセージをセット
      $("#reservation-error").text("予約日は必須項目です。");
    }
  });
});
