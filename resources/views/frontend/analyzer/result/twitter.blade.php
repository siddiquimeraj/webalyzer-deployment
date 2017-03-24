<div class="container">
@if($records["request_params"]["twitter_check"]==1)
@if($records['twitter_result']['status']==2)
    @if($records['twitter_result']['error_code']==0)
    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
        	 		@if(isset($records['twitter_result']['result']))
                    <table class="table table-striped table-hover">
                        @foreach($records['twitter_result']['result'] as $key => $value)
	                        @if($key!="entities")
		                    	@if(is_array($value))
			                        <tr>
			                            <th>{{$key}}</th>
			                        </tr>
			                        @foreach($value as $new_par => $new_val)
				                        @if(!is_array($new_val))
				                        <tr>
				                            <th>{{$new_par}}</th>
				                            <td>{{$new_val}}</td>
				                        </tr>
				                        @endif
			                        @endforeach
		                        @else
		                        <tr>
		                            <th>{{$key}}</th>
		                            <td>{{$value}}</td>
		                        </tr>
		                        @endif

	                        @endif
                        @endforeach
                    </table>
                    @endif
            <!--/row-->
        </div>
        <!--/.col-xs-12.col-sm-9-->
    </div>
    <!--/row-->
	@else
		@if($records['twitter_result']['error'])
    	<p>{{$records['twitter_result']['error']}}</p>
    	@else
    		<p>No data found and i don't know why</p>
    	@endif
    @endif
     @else
        <p>Wait ... Loading...</p>
    @endif
@else
<p>Sorry but you didn't requested this</p>
@endif
</div>
<!--/.container-->