@extends('common.layouts.main')
@section('title', trans('cms_article.cms_article'))
@section('content')


    {{--*/

    $canEdit=canAccess('admin.cms_article.edit');
    $canDestroy=canAccess('admin.cms_article.destroy');

    $canCmsArticleLanguageRelation=canAccess('admin.cms_article_language.relation');
    $canCmsArticleLanguageEdit=canAccess('admin.cms_article_language.edit');
    $canCmsArticleLanguageDestroy=canAccess('admin.cms_article_language.destroy');
    $canCmsArticleLanguageCreate=canAccess('admin.cms_article_language.create');
    $canCmsArticleLanguageShow=canAccess('admin.cms_article_language.show');


    /*--}}





    <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('project.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('cms_article.cms_article') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('cms_article.cms_article') }}</a></li>
                            <li class="active">{{ trans('cms_article.details') }}</li>
                        </ol>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <form role="search" class="app-search hidden-xs pull-right">
                            <input type="text" placeholder=" {{ trans('general.search') }} ..." class="form-control">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">


                        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ trans('cms_article.cms_articleInfo') }}</span>
            </div>

            <div class="panel-body">


                                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_article.cms_article_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_article['cms_article_id'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_article.cms_language_id') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_article['cms_language_id'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_article.name') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_article['name'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_article.body') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_article['body'] }}</label>
                        </div>
                    </div>

                    </div>
                <div class="row">                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_article.created_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_article['created_at'] }}</label>
                        </div>
                    </div>

                    
                                    <div class="col-sm-2 text-right">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{ trans('cms_article.updated_at') }}  </label>
                        </div>
                    </div>

                    <div class="col-sm-4 text-left">
                        <div class="form-group no-margin-hr">
                            <label class="control-label">{{$cms_article['updated_at'] }}</label>
                        </div>
                    </div>

                    </div>




                    <div class="row">

                        <div class="col-xs-offset-6 col-xs-3">

@if($canEdit)
                            <a href="/admin/cms_article/{{ $cms_article['id'] }}/edit"
                               class="fa fa-edit btn btn-primary form-control"> {{trans('cms_article.edit')}}</a>
                        @endif
                        </div>
                        <div class=" col-xs-3">
                            @if($canDestroy)
                            {!! Form::open(['method' => 'DELETE',
                    'url' => ['/admin/cms_article',$cms_article['id']]]) !!}
                            <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                                <i class="fa fa-trash"></i>
                                {{trans('cms_article.delete')}}
                            </button>
                            {!! Form::close() !!}
                                @endif
                        </div>

                    </div>


                </div>
                <!-- row -->
            </div>







                            @if( $canCmsArticleLanguageRelation)

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('common.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('cms_article_language.cms_article_languageTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('cms_article_language.cms_article_languageTableDescription') }}</p>



                                        </div>

                                        @if( $canCmsArticleLanguageCreate)
                                        <div class="col-xs-3">
                                            <a  href="{{route('admin.cms_article_language.create')}}?cms_article_id={{$cms_article['id']}}"class="btn btn-primary form-control">
                                                + {{trans('cms_article_language.cms_article_languageCreate')}}
                                            </a>
                                        </div>
                                        @endif

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('cms_article_language.id'), 'id', $oCmsArticleLanguageResults) !!}
                                                </th>


                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('cms_article_language.cms_language'), 'cms_language_id', $oCmsArticleLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('cms_article_language.name'), 'name', $oCmsArticleLanguageResults) !!}
                                                </th>



                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('cms_article_language.created_at'), 'created_at', $oCmsArticleLanguageResults) !!}
                                                </th>

                                                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('cms_article_language.updated_at'), 'updated_at', $oCmsArticleLanguageResults) !!}
                                                </th>

                                                @if($canCmsArticleLanguageShow
|| $canCmsArticleLanguageEdit
|| $canCmsArticleLanguageDestroy
)
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>
    @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oCmsArticleLanguageResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oCmsArticleLanguageResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'>

                                                                                                                <td>{{ $oResult->id }}</td>


                                                                                                                <td>{{ isset($oResult->cms_language->name)? $oResult->cms_language->name:'' }}</td>

                                                                                                                <td>{{ $oResult->name }}</td>

                                                                                                                <td>{{ $oResult->created_at }}</td>

                                                                                                                <td>{{ $oResult->updated_at }}</td>

                                                        
                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>

@if($canCmsArticleLanguageDestroy )
                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/admin/cms_article_language',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}
@endif

 @if( $canCmsArticleLanguageEdit)
                                                                    <a href="/admin/cms_article_language/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
@endif
@if($canCmsArticleLanguageShow )
                                                                    <a href="/admin/cms_article_language/{{ $oResult->id }}"
                                                                       class="fa fa-file-text"></a>

@endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oCmsArticleLanguageResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oCmsArticleLanguageResults->firstItem() }} {{trans('general.to')}} {{ $oCmsArticleLanguageResults->lastItem() }} {{trans('general.of')}} {{ $oCmsArticleLanguageResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oCmsArticleLanguageResults->appends(Input::except('page_cms_article_language'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
@endif
                            






            <div class="panel-footer text-right">
                {{--<a href="{{ route('/client/product_list') }}">--}}
                    {{--<button type="submit" class="btn btn-primary"--}}
                            {{--name="edit_id">{{ trans('accounts::accounts.edit') }}</button>--}}
                {{--</a>--}}
            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



@stop