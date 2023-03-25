<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/recet.css")}}">
    <link rel="stylesheet" href="{{asset("css/portfolio.css")}}">
    <link rel="stylesheet" href="{{asset("css/fonts.css")}}">
    <link rel="stylesheet" href="{{asset("css/skill.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <div class="tags top_tag">
            <em> &lt;/html&gt; </em>
            <em class="body"> &lt;body&gt; </em>
        </div>
        <div class="my_info ">
            <div class="box">
                <div class="tags contact_tag">
                    <em> &lt;h2&gt; </em>
                </div>
                <h2>
                    <span class="title_hover">Skills,</span>
                    <span class="title_hover">Experience</span>
                </h2>
                <div class="tags contact_tag">
                    <em> &lt;/h2&gt; </em>
                </div>
                <div class="text">
                    <div class="tags tag">
                        <em> &lt;p&gt; </em>
                    </div>
                    <p>Since beginning my journey as a freelance developer nearly 10 years ago, I’ve done remote
                        work
                        for agencies, consulted for startups,
                        and collaborated with talented people to create web products for both business and consumer
                        use.</p>
                    <p>I create successful responsive websites that are fast, easy to use, and built with best
                        practices. The main area of my expertise is
                        front-end development, HTML, CSS, JS, building small and medium web apps, custom plugins,
                        features, animations, and
                        coding interactive layouts.</p>
                    <p>I also have full-stack developer experience with popular open-source CMS like (WordPress,
                        Drupal,
                        Magento, Keystone.js and others) .</p>
                    <p>Visit my <span>LinkedIn</span> profile for more details or just <span>contact</span> me.</p>
                </div>
                <div class="tags tag">
                    <em> &lt;p&gt; </em>
                </div>
                <div class="tags tags_end">
                    <p class="body_end"> &lt;body&gt; </p>
                    <p> &lt;/html&gt; </p>
                </div>
            </div>
            <div class="details">
                <div class="box_2">
                    <div class="chart ">
                        <h3>Front-end</h3>
                        <footer>
                            <div class="hr turquoise"></div>
                            <div class="hr"></div>
                        </footer>
                    </div>
                    <div class="chart ">
                        <h3>Back-end</h3>
                        <footer>
                            <div class="hr red"></div>
                            <div class="hr"></div>
                        </footer>
                    </div>
                    <div class="chart ">
                        <h3>ReactJS</h3>
                        <footer>
                            <div class="hr violet"></div>
                            <div class="hr"></div>
                        </footer>
                    </div>
                    <div class="chart ">
                        <h3>Front-end</h3>
                        <footer>
                            <div class="hr blue"></div>
                            <div class="hr"></div>
                        </footer>
                    </div>
                </div>
                <div class="cardList">
                    <div class="card">
                        <h4>Frontend developer</h4>
                        <p>To The End</p>
                        <p class="size">2017-2018</p>
                        <p>Award-winning Content Marketing Agency specialises in creating and sharing engaging
                            content.</p>
                    </div>
                    <div class="card">
                        <h4>Full stack developer</h4>
                        <p>Pixxels Digital</p>
                        <p class="size">2018-2021</p>
                        <p>Creative brand, website design and development studio that can bring your online business
                            dreams to life.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
<script src="{{asset("../js/title.js")}}"></script>
</body>
</html>
