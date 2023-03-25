@extends("layout.app")
@section("content")

    <meta name="viewport">
    <link rel="stylesheet" href="{{asset("css/contact.css")}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <div class="contact">
        <div class="container container_contact">
            <div class="message">
                <div class="text">
                    <div class="tags contact_tag">
                        <em> &lt;h2&gt; </em>
                    </div>
                    <h2><span class="title_hover">Contact me</span></h2>
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
                {{--                <div class="box_contact">--}}
                <div class="input">
                    <div class="tags from_top">
                        <em> &lt;form&gt; </em>
                    </div>
                    <form action="">
                        <label for="">
                            <input type="text" placeholder="Name">
                        </label>
                        <label for="">
                            <input type="text" placeholder="Email">
                        </label>
                        <label class="span_2" for="">
                            <input class="subject" type="text" placeholder="Subject">
                        </label>
                        <label class="span_2" for="">
                                <textarea class="height" placeholder="Message" name="" id="" cols="30"
                                          rows="10"></textarea>
                        </label>
                    </form>
                </div>
                <div class="button">
                    <a href="#">
                        <p>Send message!</p>
                    </a>
                    <div class="tags from_end">
                        <em> &lt;/form&gt; </em>
                    </div>
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
                    <p>Jacek Jeznach,<br> Poland,ul. Maciejowicka 11/2, 70-786 Szczecin <br>
                        <br><span><span>@</span>: jeznacki13@gmail.com</span>
                    </p>
                    <em></em>
                </div>
                <div class="img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101558.7990101944!2d16.536145978776563!3d50.32994948911634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165bf50b7ea863%3A0xbb9a89b2e8763e04!2z0J_QvtC70YzRiNCwINC00LXRiNC10LLRi9C1INCQ0L_QsNGA0YLQsNC80LXQvdGC0Ys!5e0!3m2!1suk!2sua!4v1677599357523!5m2!1suk!2sua"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            {{--            </div>--}}
        </div>
    </div>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
<script src="{{asset("../js/portfolio.js")}}"></script>

@stop
