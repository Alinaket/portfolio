@extends("layout.app")
@section("content")
    <style>
        iframe{
            height:900px;
            width: 900px;
        }
    </style>
        <div class="title">
            <div class="title_text">
                <div class="tags top_tag">
                    <em> &lt;/html&gt; </em>
                    <em class="body"> &lt;body&gt; </em>
                </div>
                <div class="tags">
                    <em> &lt;h1&gt; </em>
                </div>
{{--                <h1 class="title_hover">Hi,I'm JJack, web developer </h1>--}}
                <h1><span class="title_hover">Hi,</span><br><span class="title_hover">I'm</span> <span class="name">J</span><span class="volume">J</span>
                    <span class="title_hover">ack,</span><br><span class="title_hover">web developer</span> <span class="tags">&lt;h1&gt;</span></h1>
                <div class="text">
{{--                    <div class="tads">--}}
{{--                       <em>&lt;h1&gt;</em>--}}
{{--                    </div>--}}
                    <div class="tags">
                        <em> &lt; p &gt; </em>
                    </div>
                    <p>Front End Developer / WordPress Expert</p>
                    <div class="tags">
                        <em> &lt; p/ &gt; </em>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="#">
                    <p><span>Contact me!</span></p>
                </a>
            </div>
            <div class="scroll">
                <em class="right_top"><span class="scroll_text">scroll down</span><span><i class="fa-solid fa-arrow-down"></i></span></em>
                <em class="left_top"><span class="scroll_text">scroll down</span><span><i class="fa-solid fa-arrow-down"></i></span></em>
            </div>
        </div>
        <div class="myself">
            <span class="background" id="layer2">Blog</span>
            <div class="content_blog">
                <div class="info_my">
                    <div class="box">
                        <div class="text">
                            <div class="tags">
                                <em> &lt;h2&gt; </em>
                            </div>
                            <h2> <span class="title_hover">Me, Myself and I</span></h2>
                            <div class="tags">
                                <em> &lt;h2/&gt; </em>
                            </div>
                            <div class="tags">
                                <em> &lt;p&gt; </em>
                            </div>
                            <p>Since Adobe Flash was a complete innovation, alongside with CSS 1.0 and HTML 4.01 as
                                standards of the current web I've been passionate about web.</p>
                            <p class="margin">For over a decade I had many opportunities to work in a vast spectrum of
                                <span>web technologies</span> what let me gather a significant amount of various experience.
                                Working for companies and individuals around the globe I met and learnt from amazing and
                                ambitious people.
                            </p>
                            <p>I currently work remotely with a selected freelance client base being open for new
                                opportunities.</p>
                            <div class="tags">
                                <em> &lt;p&gt; </em>
                            </div>
                        </div>
                        <div id="sphere-wrap">
                            <canvas id="sphere"></canvas>
                        </div>
                    </div>
                    <div class="scroll">
                        <em class="right_top"><span class="scroll_text">scroll down</span><span><i class="fa-solid fa-arrow-down"></i></span></em>
                        <em class="left_top"><span class="scroll_text">scroll down</span><span><i class="fa-solid fa-arrow-down"></i></span></em>
                    </div>
                </div>
                <div class="blog">
                    <div class="cardList">
                        @foreach($skills as $item)
                                <?php
                                $class = "";
                                $type = "";
                                switch ($item->type) {
                                    case 1 :
                                        $class = "yellow";
                                        $type = "SQL & DATABASES";
                                        break;
                                    case 2 :
                                        $class = "blue";
                                        $type = "COMPUTER SCIENCE";
                                        break;
                                    case 3 :
                                        $class = "red";
                                        $type = "WEB DEVELOPMENT";
                                        break;
                                    case 4 :
                                        $class = "orange";
                                        $type = "JAVASCRIPT";
                                        break;
                                    case 5 :
                                        $class = "turquoise";
                                        $type = "HTML & CSS";
                                        break;
                                }
                                ?>
                        <div class="card {{$class}}">
                            <h4>{{$type}}</h4>
                            <a href="#"><h3>{{$item->name}}</h3></a>
                            <p>{{$item->text}}</p>
                        </div>
                        @endforeach
                    </div>

                    <div class="more">
                        <span> See all articles.... </span>
                    </div>
                </div>
            </div>
            </div>

        <div class="contact">
            <div class="container">
                <div class="message">
                    <div class="text">
                        <div class="tags contact_tag">
                            <em> &lt;h2&gt; </em>
                        </div>
                        <h2> <span class="title_hover">Contact me</span></h2>
                        <div class="tags contact_tag">
                            <em> &lt;h2/&gt; </em>
                        </div>
                        <div class="tags tag">
                            <em> &lt;p&gt; </em>
                        </div>
                        <p>I’m interested in freelance opportunities – especially ambitious or large projects. However,
                            if you have other request or question, don’t hesitate to use the form.</p>
                        <div class="tags tag">
                            <em> &lt;p&gt; </em>
                        </div>
                    </div>
                    <div class="input">
                        <div class="tags from_top">
                            <em> &lt;form&gt; </em>
                        </div>
                        <form action="">
                            <label  for="">
                                <input class="margin" type="text" placeholder="Name">
                            </label>
                            <label for="">
                                <input type="text" placeholder="Email">
                            </label>
                            <label class="span_2" for="">
                                <input class="subject" type="text" placeholder="Subject">
                            </label>
                            <label class="span_2" for="">
                                <textarea class="height" placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
                            </label>
                        </form>

                    </div>
                    <div class="button">
                        <a href="#">
                            <p>Send message!</p>
                        </a>
                    </div>
                    <div class="tags from_end">
                        <em> &lt;/form&gt; </em>
                    </div>
                    <div class="tags body_bottom">
                        <em> &lt;/body&gt; </em>
                    </div>
                    <div class="tags html_bottom">
                        <em> &lt;/html&gt; </em>
                    </div>
                </div>
                <div class="map">
                    <div class="info_map">
                        <p>Jacek Jeznach,<br> Poland,ul. Maciejowicka 11/2, 70-786 Szczecin <br> <br><span><span>@</span>: jeznacki13@gmail.com</span>
                        </p>
                        <em></em>
                    </div>
                    <div class="img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101558.7990101944!2d16.536145978776563!3d50.32994948911634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165bf50b7ea863%3A0xbb9a89b2e8763e04!2z0J_QvtC70YzRiNCwINC00LXRiNC10LLRi9C1INCQ0L_QsNGA0YLQsNC80LXQvdGC0Ys!5e0!3m2!1suk!2sua!4v1677599357523!5m2!1suk!2sua"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
@stop
