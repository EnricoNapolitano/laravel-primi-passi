    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World</title>
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>

        <header class="bg-warning">
            <div class="container d-flex justify-content-between align-items-center">
                <h2>HELLO FOLKS</h2>
                <nav>
                    <ul class="d-flex p-3">
                        @foreach($links as $link)
                        <li class="p-3" style="list-style:none">
                            <a href="{{ route( 'link', ['index' => $loop->index] ) }}" style="text-decoration:none; color:black">{{$link}}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </header>

        <main class="container">
            <h1 class="text-center m-5">Hello World</h1>
            <div>
                <h4>Libri</h4>
                <ul>
                    @foreach($books as $book)
                    <li>{{$book}}</li>
                    @endforeach
                </ul>
            </div>
        </main>
    </body>
    </html>