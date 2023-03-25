@extends("layout.app")
@section("content")


        <div class="tags tags_about">
            <p> &lt;/html&gt; </p>
            <p class="body_about_top"> &lt;body&gt; </p>
        </div>
        <div class="info_my">
            <div class="box">
                <div class="text">
                    <div class="tags">
                        <em> &lt;h2&gt; </em>
                    </div>
                    <h2><span class="title_hover">A bit about me</span></h2>
                    <div class="tags">
                        <em> &lt;h2/&gt; </em>
                    </div>
                    <div class="tags">
                        <em> &lt;p&gt; </em>
                    </div>
                    <p>I’m a Front-End Developer located in Poland. I have a serious passion for UI effects, animations
                        and creating
                        intuitive, dynamic user experiences.</p>
                    <p class="margin">Well-organised person, problem solver, independent employee with high attention to
                        detail. Fan of MMA, outdoor activities,
                        TV series and English literature. A family person and father of two fractious boys,
                    </p>
                    <p>Interested in the entire frontend spectrum and working on ambitious projects with positive
                        people.</p>
                    <a href="#"><p>Let’s make something special.</p></a>
                    <div class="tags">
                        <em> &lt;p&gt; </em>
                    </div>
                </div>
                <div id="sphere-wrap">
                    <canvas id="sphere"></canvas>
                </div>
            </div>
            <div class="tags tags_about_end">
                <p class="body_about"> &lt;body&gt; </p>
                <p> &lt;/html&gt; </p>
            </div>
        </div>
    </div>

<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
<script src="{{asset("../js/portfolio.js")}}"></script>
<script src="{{asset("../js/title.js")}}"></script>
@stop
