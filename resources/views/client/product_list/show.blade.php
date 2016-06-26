@extends('client.layouts.main')

@section('content')
<div class="container">

    <div id="content-wrapper">
    <h1>Career Center</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>{{ trans('title') }}</th><th>{{ trans('firstName') }}</th><th>{{ trans('lastName') }}</th><th>C.V.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product_list->id }}</td> <td> {{ $product_list->title }} </td><td> {{ $product_list->firstName }} </td><td> {{ $product_list->lastName }} </td>
                    <td>
                       <a href="/{{ Config::get('cms.asset_folder').'/'.$product_list->cv }}">C.V.</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection