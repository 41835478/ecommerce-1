<?php
/*
namespace App\Http\Controllers\common;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;


use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
*/

class PermissionController // extends Controller
{
    private $permissionsSections=[];

    private $totalSectionsNumber=0;

    public function __construct(){
       $this->setTotalSections();
        $this->setTotalSectionsNumber();
}


    public function getTotalSections(){

        return $this->permissionsSections;
    }
    public function setTotalSections(){

        $this->permissionsSections=config('permission.permissionsSections');
    }

    public function setTotalSectionsNumber(){

        $this->totalSectionsNumber=count($this->getTotalSections());
    }

    public function getTotalSectionsNumber(){

        return  $this->totalSectionsNumber;
    }



    public function getCustomMissingSection($index){
        $section='*';
        if($index==3){$section='get';//\Illuminate\Http\Request::method();
        }
        return $section;
    }

    public function getPermissionSections($permission){

     $aPermission=explode('.',$permission);

        $aPermissionSections=[];
        for($i=0;$i<$this->getTotalSectionsNumber();$i++){
            $section='*';
            if(array_key_exists($i,$aPermission)){
                $section=$aPermission[$i];
               $this->addPermissionToConfig($i,$permission);
            }else{
                $section=$this->getCustomMissingSection($i);
            }
            $aPermissionSections[]=$section;


        }
        return $aPermissionSections;

    }

    public function getUserDenyPermissions(){

        return '
  |admin.*.create.*|
  |admin.*.*.*|
  |admin.product.create.*|
  |*.product.*.*|
  |*.product.*.post|

        ';
/*
*.product.create
admin.prduct.create
client.*.edit

        support.create
*/
    }

    public function checkIfPermissionDeny($permission,$denyPermissions){

        $currentPermissionSections=$this->getPermissionSections($permission);
$possibleMatchPermissions=$this->getPossibleMatchPermissions($currentPermissionSections);
        for($i=0;$i<$this->getTotalSectionsNumber();$i++){

        }
    }
    public function getPossibleMatchPermissions($sections){
        $possibleMatchPermissions=[];


        for($i=0;$i < $this->getTotalSectionsNumber();$i++){


        }



        return $possibleMatchPermissions;
    }
public function getPaddingPermission($sections){
    $final_array=[];
    for($i = 0; $i<count($sections); $i++)
    {
        $oneSectionPosible=['*',$sections[$i]];
        for($j = 0; $j<count($oneSectionPosible); $j++)
        {

                $one_final_array = [$oneSectionPosible[$j] , $s_nb["$b"] , $t_nb["$c"],''];
            []

        }
    }
    return $final_array;

}

    public function addPermissionToConfig($index,$permission){
if(in_array($permission,$this->getTotalSections()[$index])){
    return true;
}
        $newPermissionsSections=  $this->permissionsSections[$index][]=$permission;


    }

    public function deny($permission){

        return  $this->checkIfPermissionDeny($permission,$this->getUserDenyPermissions());
    }




}

$Permissions= new PermissionController();

die(var_dump($Permissions->deny('admin.product.create')));