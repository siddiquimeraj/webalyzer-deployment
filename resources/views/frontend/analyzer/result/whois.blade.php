<table class="table table-striped table-hover">
	@if($records['whois_result']['error_code']==0)
		@if(!empty($records['whois_result']['result']))
			@foreach($records['whois_result']['result'] as $key => $value)
			<tr>
				<th>{{$key}}</th>
				<td>{{$value}}</td>
			</tr>
			@endforeach
		@else
			<p>Unable to find Whois using whois.com</p>
		@endif
	@else
	<p>{{$records['whois_result']['error']}}</p>
	@endif

</table>