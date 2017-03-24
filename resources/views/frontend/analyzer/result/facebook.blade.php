<div class="container">
@if($records["request_params"]["facebook_check"]==1)
    @if(isset($records['facebook_result']['result']))
    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            @if(isset($records['facebook_result']['result']['page_details']['cover']))
            <div class="jumbotron" style="background-image: url({{$records['facebook_result']['result']['page_details']['cover']}}); height: 250px;">
            </div>
            @endif
            <div class="row">
                <div class="col-xs-3">
                    @if(isset($records['facebook_result']['result']['profile_pic']['profile_pic']))
                    <img src="{{$records['facebook_result']['result']['profile_pic']['profile_pic']}}" width="200px" height="200px">
                    @endif
                </div>
                <div class="col-xs-9">
                    @if(isset($records['facebook_result']['result']['identity']))
                    <h1><b>{{$records['facebook_result']['result']['identity']['name']}}</b></h1>
                    @if(isset($records['facebook_result']['result']['page_details']))
                    @endif
                    <table class="table table-striped table-hover">
                        @foreach($records['facebook_result']['result']['page_details'] as $key => $value) @if(is_array($value))
                        <tr>
                            <th>{{$key}}</th>
                        </tr>
                        @foreach($value as $new_par => $new_val)
                        <tr>
                            <th>{{$new_par}}</th>
                            <td>{{$new_val}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <th>{{$key}}</th>
                            <td>{{$value}}</td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
            <div class="row">
                <!--post-->
                @if(isset($records['facebook_result']['result']['fb_posts'])) @foreach($records['facebook_result']['result']['fb_posts'] as $key => $value)

                <table class="table table-striped table-hover">
                    <tr>
                        <td>
                            @if(isset($value['created_time']))
                            <p>{{$value['created_time']}}</p>
                            @endif
                            @if(isset($value['description']))
                            <p>{{$value['description']}}</p>
                            @endif @if(isset($value['message']))
                            <p>{{$value['message']}}</p>
                            @endif @if(isset($value['story']))
                            <p>{{$value['story']}}</p>
                            @endif
                            <p>Likees : {{$value['likes']}} Comments : {{$value['comments']}} Shares: @if(isset($value['shares']['count'])) {{$value['shares']['count']}} @endif
                            </p>
                        </td>
                    </tr>
                </table>

                @endforeach @endif
            </div>
            <!--/row-->
        </div>
        <!--/.col-xs-12.col-sm-9-->
    </div>
    @else
        @if($records['facebook_result']['error'])
            <p>{{$records['facebook_result']['error']}}</p>
        @else
            <p>No data found no error found .. write better algo</p>
        @endif
    <!--/row-->
    @endif
@else
<p>You did not make a request for this</p>
@endif
</div>
<!--/.container-->