<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>運転日誌</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <div class="content">
        <h1 class="page-title">運転日誌フォーム</h1>
        <form action="#">
            <dl class="form-area">
                <dt><label for="name">日にち</label><span>必須</span></dt>
                <dd>
                    <input type="text" id="name" name="your-name">
                    <p id="name-error" class="error-text"></p>
                </dd>
                <dt><label for="name">使用車両</label><span>必須</span></dt>
                <dd>
                    <input type="text" id="name" name="your-name">
                    <p id="name-error" class="error-text"></p>
                </dd>
                <dt><label for="name">目的地</label><span>必須</span></dt>
                <dd>
                    <input type="text" id="name" name="your-name">
                    <p id="name-error" class="error-text"></p>
                </dd>
                <dt><label for="name">使用用途</label><span>必須</span></dt>
                <dd>
                    <input type="text" id="name" name="your-name">
                    <p id="name-error" class="error-text"></p>
                </dd>
                <dt><label for="tel1">所属</label><span>必須</span></dt>
                <dd>
                    <input type="text" id="name" name="your-name">
                    <p id="name-error" class="error-text"></p>
                </dd>

            </dl>

            <div class="note-online">
                <p>
                    当日はオンライン会議システムを使用いたします。<br>
                    ご受講にあたり、端末とネットワーク環境が必要になりますのでご準備をお願いいたします。<br>
                    参加方法については、前日までに別途ご案内を差し上げます。
                </p>
            </div>

            <div class="note-venue">
                <p>
                    【会場情報】<br>
                    会場：代々木GIプラザ3F Room1<br>
                    住所：〒151-0053　東京都渋谷区代々木1-1-1<br>
                    電話番号：00-0000-0000
                </p>
            </div>

            <div class="button-area">
                <button id="submit-button" type="button" value="">上記の内容で申し込む</button>
            </div>
        </form>
    </div>
</body>

</html>
