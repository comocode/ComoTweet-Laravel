<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">

<head>
    <meta charset="utf-8">
    <title>ComoTweet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/css/uikit.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.15/vue.min.js"></script>
</head>

<body class="{{ !empty($body_class) ? $body_class : '' }}">
@section("corpo")
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom " id="tweets">

    <nav class="uk-navbar uk-margin-large-bottom">
        <a class="uk-navbar-brand uk-hidden-small" href="{{ route('casa') }}">ComoTweet</a>
        <ul class="uk-navbar-nav uk-hidden-small">
            @section('nav')
                <li>
                    <a href="{{ route('feed') }}">Newfeed</a>
                </li>
                @if(\Auth::check())
                    <li>
                        <a href="{{ \Auth::user()->profile_url() }}">Perfil</a>
                    </li>
                    <li>
                        <a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a>
                    </li>
                @endif
            @show
        </ul>
        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
        <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
    </nav>

    @yield('conteudo')
</div>

<div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-offcanvas">
            @yield("nav")
        </ul>
    </div>
</div>
@show

@if ($errors->count() > 0)
    <div id="error_modal" class="uk-modal">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close uk-close"></a>
            @foreach($errors->all('<p>:message</p>') as $error)
                {!! $error !!}
            @endforeach
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            var modal = UIkit.modal("#error_modal");
            modal.options.center = true;
            if(modal.isActive()){
                modal.hide();
            }
            else {
                $('#error_modal').css({'display':'block'})
                modal.show({center:true});
            }
        })
    </script>
@endif
</body>

</html>