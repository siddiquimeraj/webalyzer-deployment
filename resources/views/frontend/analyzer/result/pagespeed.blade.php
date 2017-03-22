<table class="table table-striped table-hover">
	@if($records['google_speed_result']['error_code']==0)
		@if(isset($records['google_speed_result']['result']))
		<tr>
			<th>Page Score</th>
			<td>{{$records['google_speed_result']['result']['score']}}</td>
		</tr>
		@foreach($records['google_speed_result']['result']["request_size_stat"] as $key => $value)
		<tr>
			<th>{{$key}}</th>
			<td>{{$value}}</td>
		</tr>
		@endforeach
		@if(isset($records['google_speed_result']['result']['file_compression_stat']))
			@foreach($records['google_speed_result']['result']['file_compression_stat'] as $key => $value)
					<tr>
						<th>{{$key}}</th>
					</tr>
				@for($i=0; $i < count($value); $i++)
					@foreach($value[$i] as $param => $paramval)
					<tr>
						<th>{{$param}}</th>
						<td>{{$paramval}}</td>
					</tr>
					@endforeach
				@endfor
			@endforeach
		@endif
		@endif
	@endif

</table>