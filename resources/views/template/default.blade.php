<!-- file : resources/views/html101.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HTML - @yield('title')</title>
            <link rel ="stylesheet" href="css/bootstrap.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

            <style>
                body {
                    font-family: "Kanit", sans-serif;
                }

                /* textarea{
                    border:1px solid #aaa;
                }

                input[type="radio"] {
                    margin-right : 5px;
                    border : 1px solid #aaa;
                }

                input[type="text"] {
                    border :1px solid #aaa;
                }

                input[type="date"]{
                    border :1px solid #aaa;
                }

                input[type="file"]{
                    border :1px solid #aaa;
                } */

                .square-box{
                    max-width: 1000px;
                    min-height: 600px;
                    border:1px solid #aaa;
                    border-radius: 20px;
                }




            </style>
            @stack('styles')

        </head>
    <body>

        <div class="container mt-4">
            <h1 class="text-center">File Default</h1>
            @yield('content')

        </div>
        @stack('scripts')

    </body>
</html>
