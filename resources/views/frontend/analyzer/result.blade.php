@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">Web Analysis Result</div>

                <div class="panel-body">
                		<div class="alert alert-success" role="alert">
                		<center>
                			{{$records['domain_name']}}
                		</center>
                		</div>
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab">Facebook Profile</a>
                            </li>
                            <li role="presentation" >
                                <a href="#twitter" aria-controls="twitter" role="tab" data-toggle="tab">Twitter Profile</a>
                            </li>
                             <li role="presentation" >
                                <a href="#gplus" aria-controls="gplus" role="tab" data-toggle="tab">Google Plus profile</a>
                            </li>
                             <li role="presentation" >
                                <a href="#whois" aria-controls="whois" role="tab" data-toggle="tab">Whois Information</a>
                            </li>
                             <li role="presentation" >
                                <a href="#pagespeed" aria-controls="pagespeed" role="tab" data-toggle="tab">Page Speed</a>
                            </li>
                             <li role="presentation" >
                                <a href="#pageseo" aria-controls="pageseo" role="tab" data-toggle="tab">Page Seo</a>
                            </li>
                             <li role="presentation" >
                                <a href="#pagelinks" aria-controls="pagelinks" role="tab" data-toggle="tab">Page Links</a>
                            </li>


                        </ul>

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane mt-30 active" id="facebook">
                                @include('frontend.analyzer.result.facebook')
                            </div><!--tab panel profile-->
                             <div role="tabpanel" class="tab-pane mt-30" id="twitter">
                                @include('frontend.analyzer.result.twitter')
                            </div><!--tab panel profile-->
                             <div role="tabpanel" class="tab-pane mt-30" id="gplus">
                                @include('frontend.analyzer.result.googleplus')
                            </div><!--tab panel profile-->
                             <div role="tabpanel" class="tab-pane mt-30" id="whois">
                                @include('frontend.analyzer.result.whois')
                            </div><!--tab panel profile-->
                             <div role="tabpanel" class="tab-pane mt-30" id="pagespeed">
                                @include('frontend.analyzer.result.pagespeed')
                            </div><!--tab panel profile-->
                             <div role="tabpanel" class="tab-pane mt-30" id="pageseo">
                                @include('frontend.analyzer.result.pageresult')
                            </div><!--tab panel profile-->
                             <div role="tabpanel" class="tab-pane mt-30" id="pagelinks">
                                @include('frontend.analyzer.result.links')
                            </div><!--tab panel profile-->


                        </div><!--tab content-->

                    </div><!--tab panel-->

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-xs-12 -->

    </div><!-- row -->
@endsection