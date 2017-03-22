@extends('common.layouts.main')
@section('title', Lang::get('dashboard.PageTitle'))
@section('content')


    <div id="page-wrapper" style="min-height: 366px;">
        <div class="container-fluid">
            <div class="row bg-title"
                 style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                <div class="col-lg-12">
                    <h4 class="page-title">{{ trans('general.translate') }}</h4>
                </div>
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <ol class="breadcrumb pull-left">
                        <li><a href="#">Project</a></li>
                        <li class="active">{{ trans('general.translate') }}</li>
                    </ol>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">

                        <h3 class="box-title m-b-0">{{ trans('general.translate') }}</h3>
                        <p class="text-muted m-b-30 font-13">{{ trans('general.translate') }}</p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    {!! Form::open(['method'=>'get']) !!}
                                    {!! Form::select('module',$modules,$module,['onChange'=>'$(this).parent().submit();']) !!}
                                    {!! Form::select('language',$languages,$language,['onChange'=>'$(this).parent().submit();']) !!}
                                    {!! Form::select('file',$files,$file,['onChange'=>'$(this).parent().submit();']) !!}
                                    {!! Form::close() !!}
                                </div>
                                {!! Form::open() !!}
                                <div class="panel-body">
                                    <div class="row">
{{--*/$i=0;/*--}}
                                        @foreach($enArray as $key=>$value)

                                            @if($i%2 ==0) <div class="row" style="margin:20px 0px;"> @endif
                                            <div class="col-sm-6 oneTranslateDiv">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label col-xs-4">
                                                        <i class="fa fa-trash"></i>
                                                        {!! str_replace(']','',$key) !!}
                                                    </label>

                                                    @if(array_key_exists($key,$otherLanguageArray))
                                                        {!! Form::text('translate['.$key,$otherLanguageArray[$key],['class'=>'col-xs-8']) !!}
                                                    @else
                                                        {!! Form::text('translate['.$key,$value,['class'=>'col-xs-8']) !!}
                                                    @endif

                                                </div>
                                            </div>

                                                @if($i%2 ==1) </div> @endif
                                                    {{--*/$i++;/*--}}
                                        @endforeach
                                        <div id="newValueDiv" class="row"  style="margin:20px 0px;">

                                        </div>

<div class="row"  style="margin:20px 0px;">
                                            <div class="col-sm-5">
                                                <div class="form-group no-margin-hr">
                                                    <label class="control-label col-xs-4">Key </label>

                                                    {!! Form::text('newKey',null,['class'=>'col-xs-8','id'=>'newKey']) !!}


                                                </div>
                                            </div>

    <div class="col-sm-5">
        <div class="form-group no-margin-hr">
            <label class="control-label col-xs-4">Value </label>

            {!! Form::text('newValue',null,['class'=>'col-xs-8','id'=>'newValue']) !!}


        </div>
    </div>

    <div class="col-sm-2">
        <div class="form-group no-margin-hr">

            {!! Form::button('addNew',['class'=>'col-xs-12','id'=>'addNew']) !!}


        </div>
    </div>

</div>



                                    </div>
                                </div>
                                <div class="panel-footer text-right">
                                    {!! Form::hidden('module',$module) !!}
                                    {!! Form::hidden('language',$language) !!}
                                    {!! Form::hidden('file',$file) !!}
                                    {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop
@section('script')
    @parent

    <script>
        $('#addNew').click(function(){

            var newKey=$('#newKey').val();
            var newValue=$('#newValue').val();

            if(newKey == '' || newValue =='')return false;
            var inputHtml='<div class="col-sm-6">'+
                    '<div class="form-group no-margin-hr">'+
                    '<label class="control-label col-xs-4"><i class="fa fa-trash"></i> '+newKey+' </label>'+
                    '<input name="translate['+newKey+']" value="'+newValue+'"  class="col-xs-8">'+
                    '</div>'+
                    '</div>';
            $('#newValueDiv').append(inputHtml);
$('#newKey').val('');
            $('#newValue').val('');
        });

        $('.oneTranslateDiv .fa-trash').click(function(){
            if(confirm('are you sure about deleting this word?')){

                $(this).parent().parent().remove();
            }
        });
    </script>
    @stop
