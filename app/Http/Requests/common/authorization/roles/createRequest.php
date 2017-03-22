<?php
namespace App\Http\Requests\common\authorization\roles;

use App\Http\Requests\Request;

class createRequest extends Request
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


        $aDenyPermissions = $this->denyPermissionOneText;
        $aDenyPermissions=(is_array($aDenyPermissions))? $aDenyPermissions:[$aDenyPermissions];

        $denyPermissions='';
        foreach($aDenyPermissions as $permission){
            $denyPermissions.='|'.$permission;
        }


        $slug=strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'),array('','-',''), $this->name));


        $this->merge(['slug'=>$slug,'permissions'=>$permissions,'deny_permissions'=>$denyPermissions]);
        return [

    "name"=>'required|unique:roles',
        ];
    }
}
