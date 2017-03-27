<?php


require_once __DIR__ . "/Routes/common/files.php";

require_once __DIR__ . "/Routes/common/authentication.php";

require_once __DIR__ . "/Routes/common/Dashboard.php";
require_once __DIR__ . "/Routes/common/email.php";
require_once __DIR__ . "/Routes/common/authorization.php";
require_once __DIR__ . "/Routes/common/language.php";

require_once __DIR__ . "/Routes/common/users.php";

require_once __DIR__ . "/Routes/admin/cms_page.php";

require_once __DIR__ . "/Routes/admin/cms_article.php";

require_once __DIR__ . "/Routes/admin/cms_article_language.php";

require_once __DIR__ . "/Routes/admin/cms_content.php";

require_once __DIR__ . "/Routes/admin/cms_html.php";

require_once __DIR__ . "/Routes/admin/cms_html_language.php";

require_once __DIR__ . "/Routes/admin/cms_form.php";

require_once __DIR__ . "/Routes/admin/cms_form_field.php";

require_once __DIR__ . "/Routes/admin/cms_menu.php";

require_once __DIR__ . "/Routes/admin/cms_menu_item.php";

require_once __DIR__ . "/Routes/admin/cms_menu_item_language.php";

require_once __DIR__ . "/Routes/admin/cms_page_content.php";

require_once __DIR__ . "/Routes/admin/cms_page_content_page.php";




require_once __DIR__ . "/Routes/admin/cms_category.php";

require_once __DIR__ . "/Routes/admin/cms_category_description.php";

require_once __DIR__ . "/Routes/admin/cms_product.php";

require_once __DIR__ . "/Routes/admin/cms_product_description.php";

require_once __DIR__ . "/Routes/admin/cms_cart.php";


require_once __DIR__ . "/Routes/admin/cms_wishlist.php";
require_once __DIR__ . "/Routes/admin/cms_compare_list.php";


//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});