@if ($video != null)
<div class="video-area" id="video">
    {{--<div class="video-overlay"></div>--}}
    {{--<div class="video-wrapper text-center">--}}
        {{--<div class="full-width-video">--}}
            {{--<video id="video-bg" src="video/library.mp4" loop></video>--}}
        {{--</div>--}}
        {{--<div class="video-text">--}}
            {{--<div class="table-cell">--}}
                {{--<div id="polina">--}}
                    {{--<button><i class="fa fa-play"></i></button>--}}
                {{--</div>--}}
                {{--<h1 class="video-title">Video <span>presentation</span></h1>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="container">
        <div class="row">
            <iframe width="{{ $video->largura }}" height="{{ $video->altura }}" src="https://www.youtube.com/embed/{{ $video->link }}" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endif