<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="Content-Language" content="ja">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <title>サンプルトップページ（このタイトルは自由に変えてください）</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<script>
    function articleDisplay($ele) {
        $.ajax({
            type: 'POST',
            url: '/articleGet',
            data: {
                id: $ele.getAttribute("id")
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        }).done((res) => {
            let articleTitle = document.getElementById('article_title');
            let articleText = document.getElementById('article_text');
            let article = JSON.parse(res);
            articleTitle.innerText = article.title;
            articleText.innerText = article.text;
        });
    }
</script>

<body>

<div class="container">
    <header>
        <h1 style="margin-bottom: 1rem">kakuchanのブログ</h1>
        <nav id="snav">
            <ul>
                <li><a href="#"></a></li>
            </ul>
        </nav>
    </header>
    <div id="page_content">
        <article>
            <h2 id="article_title">トップページ</h2>
            <div id="article_text">kakuchanのブログへようこそ！</div>
        </article>
    </div>
    <div id="sidebar">
        <nav>
            <h3>アーカイブ</h3>
            <ul>
                @foreach($articles as $article)
                    <li>
                        <a id="{{$article->id}}" href="#page_content" onclick="articleDisplay(this)">
                            {{$article->title}}<br>
                            <div style="font-size: 12px">
                                {{$article->created_at}}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <footer>
    </footer>
</div>

</body>

</html>
