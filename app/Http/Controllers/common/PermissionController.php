<?php

namespace App\Http\Controllers\common;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;


use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;



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
        if($index==3){$section=\Illuminate\Http\Request::method();
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
  |admin.*.create.*
  |admin.*.*.*
  |admin.product.create.*
  |*.join.create.*
  |*.*.*.get
  |*.*.*.*
        ';

    }

    public function getUserAllowPermissions(){

        return '
  |admin.*.create.*
  |admin.*.*.*
  |admin.product.create.*
  |*.join.create.*
  |*.*.*.get
  |*.*.*.*
        ';

    }

    public function checkIfPermissionMatch($permission,$denyPermissions){

        $currentPermissionSections=$this->getPermissionSections($permission);
        $possibleMatchPermissions=$this->getPossibleMatchPermissions($currentPermissionSections);

        foreach($possibleMatchPermissions as $possibleMatch){

            if(preg_match('/'.preg_quote($possibleMatch, '/').'/',$denyPermissions)){
                return true;

            }

        }
        return false;
    }
    public function getPossibleMatchPermissions($sections){

        $sectionsNumber=count($sections);
        $totalOptionsNumber=pow(2,$sectionsNumber);

        $final_array=[];
        $newSections=[];
        $index=[];
        for($i = 0; $i<$sectionsNumber; $i++)
        {
            $newSections[$i]=[$sections[$i],'*'];
            $index[$i]=1;
        }

        for($i=0;$i<$totalOptionsNumber;$i++){

            for($j = 0; $j<$sectionsNumber; $j++)
            {
                $index[$j]=($i%($totalOptionsNumber/pow(2,$j+1)) ==0)? (($index[$j] ==0)? 1:0):$index[$j];
            }


            $one_final_array=[];
            for($j = 0; $j<$sectionsNumber; $j++)
            {
                $one_final_array[]=$newSections[$j][$index[$j]];
            }



            $one_final_text=join('.', $one_final_array);
            $final_array[$one_final_text] =$one_final_text ;

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



        return  $this->checkIfPermissionMatch($permission,$this->getUserDenyPermissions());
    }

    public function allow($permission){

        return  $this->checkIfPermissionMatch($permission,$this->getUserAllowPermissions());
    }

    public function access($permission){
        return($this->allow)? true:(($this->deny)? false:true);
    }



}

$Permissions= new PermissionController();

var_dump($Permissions->access('client.product.create'));
var_dump($Permissions->access('admin.product.create'));
die(var_dump($Permissions->access('client.product.create')));