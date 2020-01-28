<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: rgb(248,239,241);
                color: #636b6f;
                font-family:century gothic;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-size: 50;	
				border:1px;
				align-content: right;
				padding-bottom: 50px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            #footer{
	width:100%;
	height:30%;
	background:#3c3b3a;
	margin-top: 20px;
	font-size:20;
	color: white;
	text-align: center;
	font-family:century gothic;
	padding-top: 30px;
	padding-bottom: 30px;
}


            .links > a {
                color: #fff;
                padding: 0 30px;
                font-size: 15px;
                font-weight: 600;
                padding-top: 10px;
                padding-bottom: 10px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background-color: #ccc
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TUGAS INSTALASI LARAVEL
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <div id="footer">
				<font color="#cacaca">Oleh : Tika Sukra Afrida <br> 183140714111037</font>
		</div>
            </div>
        </div>
    </body>
</html>
