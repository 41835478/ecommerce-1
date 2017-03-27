<?php
namespace App\Repositories\admin\cms_article;

use Session;
use App\Models\CmsArticle;
use App\Repositories\admin\cms_article\CmsArticleContract;

class EloquentCmsArticleRepository implements CmsArticleContract
{

    public function getByFilter($data)
    {

        $oResults = CmsArticle::with('cms_page');

        if(config('app.locale') != config('app.default_language')){
            $oResults=$oResults->with(['cms_article_language'=>function($relation){
                $relation= $relation->where('cms_language_id','=',config('app.locale'));
                $relation= $relation->first();
            }]);
        }

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->body) && !empty($data->body)) {
            $oResults = $oResults->where('body', 'like', '%' . $data['body'] . '%');
        }
        if (isset($data->cms_page_id) && !empty($data->cms_page_id)) {
            $oResults = $oResults->where('cms_page_id', '=',$data['cms_page_id'] );
        }
        if (isset($data->created_at) && !empty($data->created_at)) {
            $oResults = $oResults->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }
        if (isset($data->updated_at) && !empty($data->updated_at)) {
            $oResults = $oResults->where('updated_at', 'like', '%' . $data['updated_at'] . '%');
        }
        if (isset($data->order) && !empty($data->order)) {
            $sort = (isset($data->sort) && !empty($data->sort)) ? $data->sort : 'desc';
            $oResults = $oResults->orderBy($data->order, $sort);
        }


        if(isset($data->getAllRecords) && !empty($data->getAllRecords)){
             $oResults = $oResults->get();
        }
        elseif (isset($data->page_name) && !empty($data->page_name)) {
             $oResults = $oResults->paginate(config('cms.pagination_size'), ['*'], $data->page_name);
        }else{
             $oResults = $oResults->paginate(config('cms.pagination_size'));
        }
        return $oResults;
    }

    public function getAllList(){

          $oResults = new CmsArticle();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsArticle::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_article added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_article = CmsArticle::findOrFail($id);

        return $cms_article;
    }

    public function destroy($id)
    {

        $result =  CmsArticle::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_article deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_article = CmsArticle::findOrFail($id);
       $result= $cms_article->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_article updated!');
            return true;
        } else {
            return false;
        }

    }

}
