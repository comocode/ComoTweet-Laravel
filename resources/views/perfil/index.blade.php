@extends('layouts.master')
@section('conteudo')

    <h1>{{$user->username}}'s Tweets</h1>

    @foreach($tweets as $tweet)
    <div class="uk-grid  uk-panel uk-panel-box" data-uk-grid-margin>
        <div class="uk-width-1-1" style="padding-left:95px">
            <div class="uk-thumbnail uk-overlay-hover uk-border-circle  uk-float-left" style="margin-left:-75px">
                <figure class="uk-overlay">
                    <img class="uk-border-circle" width="50" height="50" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjUwcHgiIGhlaWdodD0iMjUwcHgiIHZpZXdCb3g9IjAgMCAyNTAgMjUwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNTAgMjUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIyNTAiIGhlaWdodD0iMjUwIi8+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMjI3LjgxOCwyMDcuMjQ1Yy0xLjA0NS01Ljg0Ny0yLjM2OS0xMS4yNTktMy45NjUtMTYuMjUyYy0xLjU5OC00Ljk5NC0zLjc0Mi05Ljg1OS02LjQ0MS0xNC42MDYNCgkJYy0yLjY5Ny00Ljc0LTUuNzg5LTguNzg1LTkuMjgzLTEyLjEzMWMtMy41MDEtMy4zNDMtNy43NjgtNi4wMTUtMTIuODA5LTguMDEyYy01LjA0NS0xLjk5Ni0xMC42MTEtMi45OTUtMTYuNy0yLjk5NQ0KCQljLTAuODk3LDAtMi45OTQsMS4wNzQtNi4yOTEsMy4yMTljLTMuMjk1LDIuMTUtNy4wMTcsNC41NDYtMTEuMTU4LDcuMTg4Yy00LjE0NiwyLjY0Ni05LjUzNyw1LjA0NC0xNi4xNzYsNy4xODkNCgkJYy02LjY0MiwyLjE0OC0xMy4zMDgsMy4yMjEtMTkuOTk1LDMuMjIxYy02LjY4OSwwLTEzLjM1NC0xLjA3MS0xOS45OTUtMy4yMjFjLTYuNjQzLTIuMTQ2LTEyLjAzNi00LjU0My0xNi4xNzYtNy4xODkNCgkJYy00LjE0OC0yLjY0My03Ljg2My01LjAzNy0xMS4xNTgtNy4xODhjLTMuMjk1LTIuMTQ1LTUuMzkxLTMuMjE5LTYuMjkxLTMuMjE5Yy02LjA5NSwwLTExLjY2MSwwLjk5OS0xNi43MDEsMi45OTUNCgkJYy01LjA0MSwxLjk5Ny05LjMxMyw0LjY2OS0xMi44MDMsOC4wMTJjLTMuNTAxLDMuMzQ2LTYuNTkyLDcuMzkxLTkuMjg3LDEyLjEzMWMtMi42OTYsNC43NDctNC44NDcsOS42MTItNi40NDEsMTQuNjA2DQoJCWMtMS41OTcsNC45OTMtMi45MjIsMTAuNDA1LTMuOTcxLDE2LjI1MmMtMS4wNDYsNS44MzktMS43NDgsMTEuMjgtMi4wOTYsMTYuMzIzYy0wLjM0OSw1LjA0My0wLjUyNCwxMC4yMTMtMC41MjQsMTUuNQ0KCQljMCwzLjkyNSwwLjQzMiw3LjU1LDEuMjExLDEwLjkzMmgyMDguNDY0YzAuNzgxLTMuMzgyLDEuMjEzLTcuMDA3LDEuMjEzLTEwLjkzMmMwLTUuMjg3LTAuMTc2LTEwLjQ1Ny0wLjUyNi0xNS41DQoJCUMyMjkuNTY2LDIxOC41MjUsMjI4Ljg2OSwyMTMuMDg0LDIyNy44MTgsMjA3LjI0NXoiLz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMTI1LDE2Mi44MzRjMTUuODc1LDAsMjkuNDMtNS42MTcsNDAuNjY2LTE2Ljg1YzExLjIzMi0xMS4yMzUsMTYuODUtMjQuNzg5LDE2Ljg1LTQwLjY2Nw0KCQljMC0xNS44NzctNS42MTctMjkuNDI5LTE2Ljg1LTQwLjY2M0MxNTQuNDMsNTMuNDIyLDE0MC44NzUsNDcuODA0LDEyNSw0Ny44MDRzLTI5LjQzNCw1LjYxOS00MC42NjQsMTYuODUyDQoJCUM3My4xLDc1Ljg5LDY3LjQ4NCw4OS40NDEsNjcuNDg0LDEwNS4zMThjMCwxNS44NzgsNS42MTUsMjkuNDMxLDE2Ljg1Miw0MC42NjdDOTUuNTY2LDE1Ny4yMTcsMTA5LjEyNSwxNjIuODM0LDEyNSwxNjIuODM0eiIvPg0KPC9nPg0KPC9zdmc+DQo=" alt="">
                    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                        <div>
                            <a href="#" class="uk-icon-button uk-icon-envelope"></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <h2 class="uk-margin-top-remove">{{$tweet->user->username}}</h2>
            <p class="uk-text-large uk-margin-top-remove uk-text-muted">{{$tweet->tweet}}</p>
        </div>
    </div>
    @endforeach

    <hr>
    {!! (new Landish\Pagination\UIKit($tweets))->render() !!}
@stop