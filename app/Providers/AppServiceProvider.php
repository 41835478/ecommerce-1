<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\admin\company\CompanyContract',
            'App\Repositories\admin\company\EloquentCompanyRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\contacts\ContactsContract',
            'App\Repositories\admin\contacts\EloquentContactsRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\contracts\ContractsContract',
            'App\Repositories\admin\contracts\EloquentContractsRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\contracts_documents\ContractsDocumentsContract',
            'App\Repositories\admin\contracts_documents\EloquentContractsDocumentsRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\contracts_renewal\ContractsRenewalContract',
            'App\Repositories\admin\contracts_renewal\EloquentContractsRenewalRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\emails\EmailsContract',
            'App\Repositories\admin\emails\EloquentEmailsRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\licenses\LicensesContract',
            'App\Repositories\admin\licenses\EloquentLicensesRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\products\ProductsContract',
            'App\Repositories\admin\products\EloquentProductsRepository'
        );

        $this->app->bind(
            'App\Repositories\admin\products_list\ProductsListContract',
            'App\Repositories\admin\products_list\EloquentProductsListRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\users\UsersContract',
            'App\Repositories\admin\users\EloquentUsersRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\versions\VersionsContract',
            'App\Repositories\admin\versions\EloquentVersionsRepository'
        );


        $this->app->bind(
            'App\Repositories\client\company\CompanyContract',
            'App\Repositories\client\company\EloquentCompanyRepository'
        );
        $this->app->bind(
            'App\Repositories\client\contacts\ContactsContract',
            'App\Repositories\client\contacts\EloquentContactsRepository'
        );
        $this->app->bind(
            'App\Repositories\client\contracts\ContractsContract',
            'App\Repositories\client\contracts\EloquentContractsRepository'
        );
        $this->app->bind(
            'App\Repositories\client\contracts_documents\ContractsDocumentsContract',
            'App\Repositories\client\contracts_documents\EloquentContractsDocumentsRepository'
        );
        $this->app->bind(
            'App\Repositories\client\contracts_renewal\ContractsRenewalContract',
            'App\Repositories\client\contracts_renewal\EloquentContractsRenewalRepository'
        );
        $this->app->bind(
            'App\Repositories\client\emails\EmailsContract',
            'App\Repositories\client\emails\EloquentEmailsRepository'
        );
        $this->app->bind(
            'App\Repositories\client\licenses\LicensesContract',
            'App\Repositories\client\licenses\EloquentLicensesRepository'
        );
        $this->app->bind(
            'App\Repositories\client\products\ProductsContract',
            'App\Repositories\client\products\EloquentProductsRepository'
        );
        $this->app->bind(
            'App\Repositories\client\domains\DomainsContract',
            'App\Repositories\client\domains\EloquentDomainsRepository'
        );
        $this->app->bind(
            'App\Repositories\client\web_hosting_plans\WebHostingPlansContract',
            'App\Repositories\client\web_hosting_plans\EloquentWebHostingPlansRepository'
        );
        $this->app->bind(
            'App\Repositories\client\products_list\ProductsListContract',
            'App\Repositories\client\products_list\EloquentProductsListRepository'
        );
        $this->app->bind(
            'App\Repositories\client\users\UsersContract',
            'App\Repositories\client\users\EloquentUsersRepository'
        );
        $this->app->bind(
            'App\Repositories\client\versions\VersionsContract',
            'App\Repositories\client\versions\EloquentVersionsRepository'
        );


    }
}
