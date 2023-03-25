<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/recet.css")}}">
    <link rel="stylesheet" href="{{asset("css/portfolio.css")}}">
    <link rel="stylesheet" href="{{asset("css/fonts.css")}}">
    <link rel="stylesheet" href="{{asset("css/about.css")}}">
    <link rel="stylesheet" href="{{asset("css/blog.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="big_container">
    <div class="panel_fixed">
        <div class="side_panel">
            <ul class="menu">
                <li class="home">
                    <a href="{{route("home")}}">
                        <div class="logo">
                            <div class="box">
                                <h2>J</h2>
                                <h2 class="volume">J</h2>
                            </div>
                            <div class="name">
                                <h3>Jack</h3>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="sections">
                        <ul>
                            <li>
                                <a href="{{route("about")}}">About</a>
                            </li>
                            <li>
                                <a href="{{route("skill")}}">My Skills</a>
                            </li>
                            <li>
                                <a href="{{route("work")}}">Work</a>
                            </li>
                            <li>
                                <a href="{{route("contact")}}">Contact</a>
                            </li>
                            <li class="turquoise">
                                <a href="{{route("blog")}}">Blog</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="network">
                        <ul>
                            <li>
                                <a href="https://pl.linkedin.com/in/jacek-jeznach-0a99b640/pl"><span>in</span></a>
                            </li>
                            <li>
                                <a class="width" href="https://github.com/jeznacki/"><span><i
                                            class="fa-brands fa-github"></i></span></a>
                            </li>
                            <li>
                                <a class="text" href="https://www.youtube.com/channel/UCqa84f7r4QIYKV7EVgoVwgQ"><span><i
                                            class="fa-brands fa-square-youtube"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        @yield("content")
    </div>
</div>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
<script src="{{asset("../js/title.js")}}"></script>
<script src="{{asset("../js/skills.js")}}"></script>
</body>
</html>
