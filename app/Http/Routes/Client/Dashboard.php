<?php

//Route::get('/', function () {
//    return view('client.public.dashboard');
//});

Route::group(['middleware' => ['authenticate.client']], function () {
    Route::get('/', ['as' => 'client.index', 'uses' => 'DashboardController@index']);

    

    Route::resource('company', 'Company');


    Route::resource('contacts', 'Contacts');

    Route::get('contracts/expired', ['as'=>'client.contracts.expired','uses'=>'Contracts@getExpiredContracts']);

    Route::resource('contracts', 'Contracts');


    Route::resource('contracts_documents', 'ContractsDocuments');


    Route::resource('contracts_renewal', 'ContractsRenewal');


    Route::resource('emails', 'Emails');


    Route::resource('licenses', 'Licenses');


    Route::resource('products', 'Products');

    Route::resource('domains', 'Domains');

    Route::resource('web_hosting_plans', 'WebHostingPlans');

    Route::resource('products_list', 'ProductsList');


    Route::resource('users', 'Users');


    Route::resource('versions', 'Versions');




   // Route::resource('server_company', 'ServerCompany');


    Route::resource('server_spec', 'ServerSpec');


  //  Route::resource('server_company_server_spec', 'ServerCompanyServerSpec');


    Route::resource('server_access', 'ServerAccess');


    Route::resource('server_detail', 'ServerDetail');


    Route::resource('server_ip', 'ServerIp');


   // Route::resource('server_locations', 'ServerLocations');


    Route::resource('support', 'Support');


    Route::resource('ticket', 'Ticket');


    Route::resource('ticket_reply', 'TicketReply');


    Route::resource('logtime', 'Logtime');



    Route::resource('documents', 'Documents');


    Route::resource('files', 'Files');


    Route::resource('invoice', 'Invoice');


    Route::resource('contracts_renewal_invoice', 'ContractsRenewalInvoice');


    Route::resource('payment', 'Payment');


    Route::resource('roles', 'Roles');

});
