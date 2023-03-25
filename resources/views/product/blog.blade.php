@extends("layout.app")
@section("content")
    <div class="blog_new">
        <div class="cardList">
            @foreach($home as $item)
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
                    <img
                        src="{{$item->img}}"
                        alt="">
                </div>
            @endforeach
        </div>
        <div class="sidebar">
            <div class="categories">
                <a href="{{route("blog")}}"><h3>categories</h3></a>
                <ul>
                    <li>
                        <a href="{{route("blog", ["type"=>2])}}">Computer Science <span>(11)</span></a>
                    </li>
                    <li>
                        <a href="{{route("blog", ["type"=>5])}}">HTML & CSS<span>(7)</span></a>
                    </li>
                    <li>
                        <a href="{{route("blog", ["type"=>4])}}">JavaScript<span>(7)</span></a>
                    </li>
                    <li>
                        <a href="{{route("blog", ["type"=>1])}}">SQL & Databases<span>(8)</span></a>
                    </li>
                    <li>
                        <a href="{{route("blog", ["type"=>3])}}">Web Development<span>(8)</span></a>
                    </li>
                    <li>
                        <a href="{{route("blog", ["type"=>6])}}">WordPress<span>(5)</span></a>
                    </li>
                </ul>
            </div>
            <div class="contact_me">
                <h3>contact me</h3>
                <div class="input">
                    <from>
                        <label>
                            <input type="text" placeholder="Email">
                        </label>
                        <label>
                            <input type="text" placeholder="Subject">
                        </label>
                        <label>
                            <textarea class="height" placeholder="Message" name="" id="" cols="29" rows="9"></textarea>
                        </label>
                    </from>
                    <div class="button">
                        <p>Send</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
