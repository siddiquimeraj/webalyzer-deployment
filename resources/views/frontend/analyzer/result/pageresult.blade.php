<table class="table table-striped table-hover">
	@if($records['page_meta_tag']['error_code']==0)
		@foreach($records['page_meta_tag']['result'] as $key => $value)
			@if(is_array($value))
				<tr>
					<th>{{$key}}</th>
				</tr>
				@foreach($value as $new_key => $new_value)
				<tr>
					<th>{{$new_key}}</th>
					<td>{{$new_value}}</td>
				</tr>
				@endforeach
			@else
				<tr>
					<th>{{$key}}</th>
					<td>{{$value}}</td>
				</tr>
			@endif

		@endforeach
		@else
		<p>Could Not Find any meta tags in the page</p>
	@endif
	<hr>
	@if($records['page_detail_extract']['error_code']==0)
		@foreach($records['page_detail_extract']['result'] as $key => $value)
			@if(is_array($value))
				<tr>
					<th>{{$key}}</th>
				</tr>
				@foreach($value as $new_key => $new_value)
				<tr>
					<th>{{$new_key}}</th>
					<td>{{$new_value}}</td>
				</tr>
				@endforeach
			@else
				<tr>
					<th>{{$key}}</th>
					<td>{{$value}}</td>
				</tr>
			@endif

		@endforeach
		@else
		<p>{{$records['page_detail_extract']['error']}} For page detail extractions</p>
	@endif
</table>