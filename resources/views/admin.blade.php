<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>サイトタイトル</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="{{ asset('assets/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>
<div class="wrapper" id="admin">
    <!----- ヘッダー ----->
    <header>
        <div class="top_container">
            <div class="header_container">
                <a href="{{ url('/createBlog') }}">記事作成</a>
            </div>
        </div>
    </header>
    <nav></nav>
    <!----- ヘッダー END ----->

    <!----- メインコンテンツ ----->
    <article>
        <section>
        </section>
    </article>
    <!----- メインコンテンツ END ----->

    <!----- フッター ----->
    <footer></footer>
    <!----- フッター END ----->
</div>
</body>
</html>
