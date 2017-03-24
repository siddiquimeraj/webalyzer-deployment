@extends('frontend.layouts.app')
@section('content')
<div class="row">
<div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">Analyzer Request</div>
    <!--form -->
        <div class="panel-body">
        @if(isset($message))
            <span>{{$message}}</span>
        @endif
{{ Form::open(array('url' => '/analyzer')) }}
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Website Url:</label>
      <div class="col-sm-7">
        <input type="url" class="form-control" name="domain_name" placeholder="Website Url">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"  name="facebook_check"> Facebook</label>
        </div>
      </div>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="twitter_check">Twitter</label>
        </div>
      </div>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="google_plus_check"> GooglePlus</label>
        </div>
      </div>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"  name="page_check" > Page SEO</label>
        </div>
      </div>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="link_analysis"> Page Links</label>
        </div>
      </div>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="whois_check"> Whois</label>
        </div>
      </div>
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="google_speed_check"> Google Page Speed</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  {{ Form::close() }}

                </div><!-- panel body -->
                </div>
                </div>
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">Analyzer Request</div>
            <div class="panel-body">
                <p><b>*Note :</b> Correct Sign (<i class="glyphicon glyphicon-ok"></i>) denote those profile were requested. While Wrong sign (<i class="glyphicon glyphicon-remove"></i>) were not.</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Requested Domain</th>
                            <th colspan="3">
                                <center>Social Analysis</center>
                            </th>
                            <th colspan="3">
                                <center>Page Analysis</center>
                            </th>
                            <th>
                                <center>Info</center>
                            </th>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <th>Facebook</th>
                            <th>Google Plus</th>
                            <th>Twitter</th>
                            <th>Page SEO</th>
                            <th>PageLinks</th>
                            <th>PageSpeed</th>
                            <th>Whois</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($analyzer_results as $analyzer_result)
                        <tr>
                            <td><a href="{{ route('frontend.analyzer.result', ['domain_name' => (string)$analyzer_result->_id]) }}">{{$analyzer_result->domain_name}}</a></td>
                            <td>
                                <center><i class="glyphicon {{($analyzer_result->facebook_check == 1) ? 'glyphicon-ok' : 'glyphicon-remove'}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{($analyzer_result->google_plus_check == 1) ? 'glyphicon-ok' : 'glyphicon-remove'}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{($analyzer_result->twitter_check == 1) ? 'glyphicon-ok' : 'glyphicon-remove'}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{($analyzer_result->page_detail_extract == 1) ? 'glyphicon-ok' : 'glyphicon-remove'}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{($analyzer_result->link_analysis == 1) ? 'glyphicon-ok' : 'glyphicon-remove'}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{($analyzer_result->google_speed_check == 1) ? 'glyphicon-ok' : 'glyphicon-remove'}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{($analyzer_result->whois_check == 1) ? 'glyphicon-ok' : 'glyphicon-remove'}}"></i></center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $analyzer_results->links() !!}
            </div>
            <!--panel body-->
        </div>
        <!-- panel -->
    </div>
    <!-- col-xs-12 -->
</div>
<!-- row -->
@endsection