<div class="container">
    @if(isset($records['google_plus_result']['result']))
    <div class="row row-offcanvas row-offcanvas-right">
        @if(isset($records['google_plus_result']['result']['details']))
            <table class="table table-striped table-hover">
            @foreach($records['google_plus_result']['result']['details'] as $key => $value)
            <tr>
                <th>{{$key}}</th>
                <td>{{$value}}</td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
    <!--/.container-->
    <div class="row">
        <!--post-->
        @if(isset($records['google_plus_result']['result']['posts']))
        @foreach($records['google_plus_result']['result']['posts'] as $post)
        <table class="table table-striped table-hover">
            @if(!empty($post))
            <tr>
                @if(isset($post['post']))
                <td>{{$post['post']}}</td>
                @endif
            </tr>
            <tr>
                <td> Likes:  @if(isset($post['likes'])) {{$post['likes']}} @else 0 @endif
                    Replies:  @if(isset($post['replies'])) {{$post['replies']}} @else 0 @endif
                    Reshares:  @if(isset($post['resharers'])) {{$post['resharers']}} @else 0 @endif
                </td>
            </tr>
            @if(isset($post['attachments']))
            @for($i = 0; $i < count($post['attachments']); $i++)
            <tr>
                @foreach($post['attachments'][$i] as $attach_key => $val)
                <td>{{$attach_key}}  : {{$val}}</td>
                @endforeach
            </tr>
            @endfor
            @endif
            @endif
        </table>
        @endforeach
        @endif
    </div>
    <!--/row-->
    @else
    <p>No result found for google page</p>
    @endif
    @if($records['google_plus_result']['error_code']!=0)
        <p>{{$records['google_plus_result']['error']}}</p>
    @endif
</div>

