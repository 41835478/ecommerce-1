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
            'App\Repositories\common\users\UsersContract',
            'App\Repositories\common\users\EloquentUsersRepository'
        );

        $this->app->bind(
            'App\Repositories\common\authorization\roles\RolesContract',
            'App\Repositories\common\authorization\roles\EloquentRolesRepository'
        );


        $this->app->bind(
            'App\Repositories\common\email\email_template\EmailTemplateContract',
            'App\Repositories\common\email\email_template\EloquentEmailTemplateRepository'
        );
        $this->app->bind(
            'App\Repositories\common\email\email_mass_template\EmailMassTemplateContract',
            'App\Repositories\common\email\email_mass_template\EloquentEmailMassTemplateRepository'
        );
        $this->app->bind(
            'App\Repositories\common\email\email_mass_queue\EmailMassQueueContract',
            'App\Repositories\common\email\email_mass_queue\EloquentEmailMassQueueRepository'
        );
        $this->app->bind(
            'App\Repositories\common\email\email_group\EmailGroupContract',
            'App\Repositories\common\email\email_group\EloquentEmailGroupRepository'
        );
        $this->app->bind(
            'App\Repositories\common\email\email_group_users\EmailGroupUsersContract',
            'App\Repositories\common\email\email_group_users\EloquentEmailGroupUsersRepository'
        );


    }
}
