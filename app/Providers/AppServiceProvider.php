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
            'App\Repositories\admin\cms_page\CmsPageContract',
            'App\Repositories\admin\cms_page\EloquentCmsPageRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_article\CmsArticleContract',
            'App\Repositories\admin\cms_article\EloquentCmsArticleRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_article_language\CmsArticleLanguageContract',
            'App\Repositories\admin\cms_article_language\EloquentCmsArticleLanguageRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_content\CmsContentContract',
            'App\Repositories\admin\cms_content\EloquentCmsContentRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_html\CmsHtmlContract',
            'App\Repositories\admin\cms_html\EloquentCmsHtmlRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_html_language\CmsHtmlLanguageContract',
            'App\Repositories\admin\cms_html_language\EloquentCmsHtmlLanguageRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_form\CmsFormContract',
            'App\Repositories\admin\cms_form\EloquentCmsFormRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_form_field\CmsFormFieldContract',
            'App\Repositories\admin\cms_form_field\EloquentCmsFormFieldRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_menu\CmsMenuContract',
            'App\Repositories\admin\cms_menu\EloquentCmsMenuRepository'
        );

        $this->app->bind(
            'App\Repositories\admin\cms_menu_item\CmsMenuItemContract',
            'App\Repositories\admin\cms_menu_item\EloquentCmsMenuItemRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_menu_item_language\CmsMenuItemLanguageContract',
            'App\Repositories\admin\cms_menu_item_language\EloquentCmsMenuItemLanguageRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_page_content\CmsPageContentContract',
            'App\Repositories\admin\cms_page_content\EloquentCmsPageContentRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_page_content_page\CmsPageContentPageContract',
            'App\Repositories\admin\cms_page_content_page\EloquentCmsPageContentPageRepository'
        );









        $this->app->bind(
            'App\Repositories\admin\cms_category\CmsCategoryContract',
            'App\Repositories\admin\cms_category\EloquentCmsCategoryRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_category_description\CmsCategoryDescriptionContract',
            'App\Repositories\admin\cms_category_description\EloquentCmsCategoryDescriptionRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_product\CmsProductContract',
            'App\Repositories\admin\cms_product\EloquentCmsProductRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_product_description\CmsProductDescriptionContract',
            'App\Repositories\admin\cms_product_description\EloquentCmsProductDescriptionRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_cart\CmsCartContract',
            'App\Repositories\admin\cms_cart\EloquentCmsCartRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_wishlist\CmsWishlistContract',
            'App\Repositories\admin\cms_wishlist\EloquentCmsWishlistRepository'
        );
        $this->app->bind(
            'App\Repositories\admin\cms_compare_list\CmsCompareListContract',
            'App\Repositories\admin\cms_compare_list\EloquentCmsCompareListRepository'
        );











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
