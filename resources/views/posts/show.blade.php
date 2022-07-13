<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
                <div class='post'>
                    <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="PostDelete()" type="button">delete</button> 
                    </form>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                    <p class='updated_at'>{{ $post->updated_at}}</p> 
                </div>
                <div class='back'>[<a href ='/'>back</a>]</div>
        </div>
        <script>
        function PostDelete(){
            const choise =window.confirm('本当に削除してもいいですか？');
            if (choise){
                document.getElementById('form_{{ $post->id }}').submit();
            }
        }
        </script>
    </body>
</html>