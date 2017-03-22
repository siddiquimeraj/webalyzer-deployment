@extends('frontend.layouts.app')
@section('content')
<div class="row">
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
                        @for($i = 0; $i < count($request_list); $i++)
                        <tr>
                            <td><a href="/analysis/{{$request_list[$i]->url}}">{{$request_list[$i]->url}}</a></td>
                            <td>
                                <center><i class="glyphicon {{$request_list[$i]->facebook}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{$request_list[$i]->gplus}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{$request_list[$i]->twitter}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{$request_list[$i]->pageseo}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{$request_list[$i]->pagelink}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{$request_list[$i]->speed}}"></i></center>
                            </td>
                            <td>
                                <center><i class="glyphicon {{$request_list[$i]->whois}}"></i></center>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <!--panel body-->
        </div>
        <!-- panel -->
    </div>
    <!-- col-xs-12 -->
</div>
<!-- row -->
@endsection