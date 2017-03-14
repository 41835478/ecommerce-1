<?php
namespace App\Http\Requests\client\roles;

use App\Http\Requests\Request;

class editRequest extends Request
{
/**
* Determine if the user is authorized to make this request.
*
* @return bool
*/
public function authorize()
{
return true;
}

/**
* Get the validation rules that apply to the request.
*
* @return array
*/
public function rules()
{
    $aPermissions = $this->permissionOneText;
    $aPermissions=(is_array($aPermissions))? $aPermissions:[$aPermissions];

    $permissions='';
    foreach($aPermissions as $permission){
        $permissions.='|'.$permission;
    }
    $slug=strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'),array('','-',''), $this->name));

    $this->merge(['slug'=>$slug,'permissions'=>$permissions]);
    return [

        "name"=>'required',
    ];
}
}
