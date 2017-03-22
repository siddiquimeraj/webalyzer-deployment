<table class="table table-striped table-hover">
	@if($records['link_analysis']['error_code']==0)
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
</table>