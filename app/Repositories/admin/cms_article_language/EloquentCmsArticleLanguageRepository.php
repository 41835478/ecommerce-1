<?php
namespace App\Repositories\admin\cms_article_language;

use Session;
use App\Models\CmsArticleLanguage;
use App\Repositories\admin\cms_article_language\CmsArticleLanguageContract;

class EloquentCmsArticleLanguageRepository implements CmsArticleLanguageContract
{

    public function getByFilter($data)
    {

        $oResults = CmsArticleLanguage::with('cms_article');

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id',  '=', $data['id'] );
        }
        if (isset($data['cms_article_id']) && !empty($data['cms_article_id'])) {
            $oResults = $oResults->where('cms_article_id',  '=', $data['cms_article_id']);
        }
        if (isset($data['cms_language_id']) && !empty($data['cms_language_id'])) {
            $oResults = $oResults->where('cms_language_id', '=', $data['cms_language_id']);
        }
        if (isset($data['name']) && !empty($data['name'])) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data['body']) && !empty($data['body'])) {
            $oResults = $oResults->where('body', 'like', '%' . $data['body'] . '%');
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('updated_at', 'like', '%' . $data['updated_at'] . '%');
        }
        if (isset($data['order']) && !empty($data['order'])) {
            $sort = (isset($data['sort']) && !empty($data['sort'])) ? $data['sort'] : 'desc';
            $oResults = $oResults->orderBy($data['order'], ['$sort']);
        }


        if(isset($data['getAllRecords']) && !empty($data['getAllRecords'])){
             $oResults = $oResults->get();
        }
        elseif (isset($data['page_name']) && !empty($data['page_name'])) {
             $oResults = $oResults->paginate(config('cms.pagination_size'), ['*'], $data->page_name);
        }else{
             $oResults = $oResults->paginate(config('cms.pagination_size'));
        }
        return $oResults;
    }

    public function getAllList(){

          $oResults = new CmsArticleLanguage();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsArticleLanguage::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_article_language added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_article_language = CmsArticleLanguage::findOrFail($id);

        return $cms_article_language;
    }

    public function destroy($id)
    {

        $result =  CmsArticleLanguage::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_article_language deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_article_language = CmsArticleLanguage::findOrFail($id);
       $result= $cms_article_language->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_article_language updated!');
            return true;
        } else {
            return false;
        }

    }

}
