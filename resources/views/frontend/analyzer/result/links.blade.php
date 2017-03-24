<table class="table table-striped table-hover">
@if($records["request_params"]["link_analysis"]==1)
	@if($records['link_analysis']['error_code']==0)
		@if(isset($records['link_analysis']['result']))
		<thead>
			<th>#</th>
			<th>Url</th>
			<th>Follow/ No Follow</th>
			<th>Internal/External</th>
			<th>SEO Friendly</th>
		</thead>
		<tbody>
		@foreach($records['link_analysis']['result'] as $key => $value)
		<tr>
			<td>{{$key}}</td>
			<td>
			<a href="{{$value['url']}}" target="_blank">{{$value['url']}}</a>
			</td>
			<td>{{$value['nofollows']}}</td>
			<td>{{$value['type']}}</td>
			<td>{{$value['seofriendly']}}</td>
		</tr>
		@endforeach
		</tbody>
		@endif
	@endif
@else
<p>You did naot ask us for this</p>
@endif
</table>