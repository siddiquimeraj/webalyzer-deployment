<table class="table table-striped table-hover">
@if($records["request_params"]["whois_check"]==1)
@if(isset($records['whois_result']['error_code']))
	@if($records['whois_result']['error_code']==0)
		@if(isset($records['whois_result']['result']))
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
@else
<p>No whois record in database for this domain</p>
@endif
@else
<p>Yo did not made request for this data</p>
@endif
</table>