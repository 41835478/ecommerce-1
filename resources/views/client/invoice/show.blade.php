@extends('client.layouts.main')
@section('title', trans('general.invoice'))
@section('content')





        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- .row -->
                <div class="row bg-title" style="background:url({{'/assets/'.config('mycp.layoutAssetsFolder')}}/plugins/images/heading-title-bg.jpg) no-repeat center center /cover;">
                    <div class="col-lg-12">
                        <h4 class="page-title">{{ trans('general.invoice') }}</h4>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <ol class="breadcrumb pull-left">
                            <li><a href="#">{{ trans('general.invoice') }}</a></li>
                            <li class="active">{{ trans('general.details') }}</li>
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



                <div class="row">

                    <div class="col-xs-offset-6 col-xs-3">


                        <a href="/client/invoice/{{ $invoice['id'] }}/edit"
                           class="fa fa-edit btn btn-primary form-control"> {{trans('general.edit')}}</a>
                    </div>
                    <div class=" col-xs-3">
                        {!! Form::open(['method' => 'DELETE',
                'url' => ['/client/invoice',$invoice['id']]]) !!}
                        <button type="submit" name="Delete" class="deleteRow  btn btn-danger form-control" >
                            <i class="fa fa-trash"></i>
                            {{trans('general.delete')}}
                        </button>
                        {!! Form::close() !!}
                    </div>

                </div>
                <span class="panel-title">{{ trans('general.invoiceInfo') }}</span>
            </div>

            <div class="panel-body">
















                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box printableArea">
                            <h3><b>INVOICE : {{$invoice['name'] }}</b> <span class="pull-right">#{{$invoice['id'] }}</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                           {!! trans('invoice.mqplanetAddress') !!}
                                        </address>
                                    </div>
                                    <div  class="pull-right text-right">
                                        @if(isset($invoice->company->name))
                                        <address>
                                            <h3>To,</h3>
                                            <h4 class="font-bold">{{ $invoice->company->name }}</h4>
                                            <p class="text-muted m-l-30">{{ $invoice->company->address}} <br/>
                                                {{ $invoice->company->city}} <br/>
                                                {{ $invoice->company->cuntry}} <br/>
                                                {{ $invoice->company->zipcode}}</p>
                                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> {{$invoice['create_date'] }}</p>
                                            <p><b>Due Date :</b> <i class="fa fa-calendar"></i> {{$invoice['due_date'] }}</p>
                                        </address>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div >
                                        <p>
                                            {{$invoice['description']}}
                                        </p>
                                    </div>
                                    <div class="table-responsive m-t-40" style="clear: both;">>
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>{{trans('general.contracts')}}</th>
                                                <th class="text-right">{{trans('general.contracts_renewal')}}</th>
                                                <th class="text-right">{{trans('general.service')}}</th>
                                                <th class="text-right">{{trans('general.description')}}</th>
                                                <th class="text-right">{{trans('general.total')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{-- */$totalPrice=0;/* --}}
                                            @if (count($oContractsRenewalInvoiceResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oContractsRenewalInvoiceResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    {{-- */$currentRowPrice =(isset($oResult->contracts_renewal->price))? $oResult->contracts_renewal->price:((isset($oResult->contracts->price))?$oResult->contracts->price:0 );
                                                    $totalPrice+=$currentRowPrice;
                                                    /* --}}
                                                    <tr class='{{ $class }}' onclick="window.location.href='/client/contracts_renewal_invoice/{{ $oResult->id }}';" style="cursor: pointer">

                                                        <td>{{ $oResult->id }}</td>

                                                        <td>{{ (isset($oResult->contracts->name))?$oResult->contracts->name:'' }}</td>
                                                        <td class="text-right">{{ (isset($oResult->contracts_renewal->to_date))? $oResult->contracts_renewal->price.'( '.$oResult->contracts_renewal->to_date.' )':'' }}</td>
<td class="text-right">
    @if(isset($oResult->contracts->type))
                                                        @if( $oResult->contracts->type == config('array.productsTypeIndex'))
                                                            {{trans('general.products')}}
                                                            @if(isset($oResult->contracts->products->name))
                                                                ( {{(isset($oResult->contracts->products->productsList->name))? $oResult->contracts->products->productsList->name:'' }} - {{$oResult->contracts->products->name  }})
                                                            @endif

                                                        @elseif( $oResult->contracts->type == config('array.domainsTypeIndex'))
                                                            {{trans('general.domains')}} ( {{(isset($oResult->contracts->domains->name))? $oResult->contracts->domains->name:'' }} )

                                                        @elseif( $oResult->contracts->type== config('array.webHostingPlansTypeIndex'))
                                                            {{trans('general.web_hosting_plans')}} ( {{(isset($oResult->contracts->webHostingPlans->name))? $oResult->contracts->webHostingPlans->name:'' }} )

                                                        @elseif( $oResult->contracts->type== config('array.serverTypeIndex'))
                                                            {{trans('general.server')}} ( {{(isset($oResult->contracts->server_detail->name))? $oResult->contracts->server_detail->name:'' }} )

                                                        @elseif( $oResult->contracts->type == config('array.supportTypeIndex'))
                                                            {{trans('general.support')}} ( {{(isset($oResult->contracts->support->name))? $oResult->contracts->support->name:'' }} )

                                                        @endif
        @endif
</td>
                                                        <td  class="text-right">{{ $oResult->description }}</td>

                                                        <td  class="text-right">{{ $currentRowPrice }}</td>



                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: {{$totalPrice}}</p>
                                        <p>vat (0%) :{{$totalPrice}}  </p>
                                        <hr>
                                        <h3><b>Total :</b> {{$totalPrice}}</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                       <a href="{{route('client.payment.create')}}?invoice_id={{$invoice['id']}}"><button class="btn btn-danger" type="submit"> Proceed to payment </button></a>
                                        <a href="{{route('client.contracts_renewal_invoice.create')}}?invoice_id={{$invoice['id']}}&company_id={{$invoice['company_id']}}"> <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-file"></i> {{trans('general.addToInvoice')}}</span> </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




























                </div>
                <!-- row -->
            </div>






                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="white-box">



                                        @include('client.partials.messages')

                                        <div class=" col-xs-9">
                                            <h3 class="box-title m-b-0">{{ trans('general.paymentTableHead') }}</h3>
                                            <p class="text-muted m-b-20">{{ trans('general.paymentTableDescription') }}</p>



                                        </div>
                                        <div class="col-xs-3">
                                            <a  href="{{route('client.payment.create')}}?invoice_id={{$invoice['id']}}"class="btn btn-primary form-control">
                                                + {{trans('general.paymentCreate')}}
                                            </a>
                                        </div>

                                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>

                                            <thead>
                                            <tr>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
                                                    {!! th_sort(trans('general.id'), 'id', $oPaymentResults) !!}
                                                </th>


                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                                    {!! th_sort(trans('general.amount'), 'amount', $oPaymentResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">
                                                    {!! th_sort(trans('general.status'), 'status', $oPaymentResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">
                                                    {!! th_sort(trans('general.payment_condition'), 'payment_condition', $oPaymentResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="6">
                                                    {!! th_sort(trans('general.create_date'), 'create_date', $oPaymentResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">
                                                    {!! th_sort(trans('general.due_date'), 'due_date', $oPaymentResults) !!}
                                                </th>

                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">
                                                    {!! th_sort(trans('general.description'), 'description', $oPaymentResults) !!}
                                                </th>
                                                <th class="actionHeader"><i class="fa fa-cog"></i> </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($oPaymentResults))
                                                {{-- */$i=0;/* --}}
                                                {{-- */$class='';/* --}}
                                                @foreach($oPaymentResults as $oResult)
                                                    {{-- */$class=($i%2==0)? 'gradeA even':'gradeA odd';$i+=1;/* --}}
                                                    <tr class='{{ $class }}'  onclick="window.location.href='/client/payment/{{ $oResult->id }}';" style="cursor: pointer">

                                                        <td><a href="/client/payment/{{ $oResult->id }}" >{{ $oResult->id }}</a></td>

                                                        <td>{{ $oResult->amount }}</td>

                                                        <td>{{(array_key_exists($oResult->status,config('array.payment_status')))? config('array.payment_status')[$oResult->status]:'' }}</td>

                                                        <td>{{ $oResult->payment_condition }}</td>

                                                        <td><a href="/client/payment/{{ $oResult->id }}" >{{ $oResult->create_date }}</a></td>

                                                        <td>{{ $oResult->due_date }}</td>

                                                        <td>{{ $oResult->description }}</td>

                                                        <td>

                                                            <div class="tableActionsMenuDiv">
                                                                <div class="innerContainer">
                                                                    <i class="fa fa-list menuIconList"></i>




                                                                    {!! Form::open(['method' => 'DELETE',
                                                                    'url' => ['/client/payment',$oResult->id]]) !!}
                                                                    <button type="submit" name="Delete" class="deleteRow" >
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                    {!! Form::close() !!}

                                                                    <a href="/client/payment/{{ $oResult->id }}/edit"
                                                                       class="fa fa-edit"></a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        @if (count($oPaymentResults))
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <span class="text-xs">{{trans('general.showing')}} {{ $oPaymentResults->firstItem() }} {{trans('general.to')}} {{ $oPaymentResults->lastItem() }} {{trans('general.of')}} {{ $oPaymentResults->total() }} {{trans('general.entries')}}</span>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 ">
                                                    {!! str_replace('/?', '?', $oPaymentResults->appends(Input::except('page_payment'))->appends($request->all())->render()) !!}
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>





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