<?php

namespace App\Helpers;

use Module,
    Config,
    Lang;

class Menu {

    public function __construct() {
        //
    }

    public function getClientMenu() {
//        dd( Config::get('mycp.client_menu'));
//        return Config::get('mycp.client_menu');

        $aModules = [];

        $mainClientMenus = Config::get('mycp.client_menu', []);
        foreach ($mainClientMenus as $mainClientMenu) {

            foreach ($mainClientMenu['subMenus'] as &$subMenu) {
                $subMenu['title'] = trans('general.' . $subMenu['title']);
                if (empty($subMenu['route'])) {
                    $subMenu['route'] = '#';
                } else {
                    $subMenu['route'] = route($subMenu['route']);
                }
            }
            $menuTab = [
                'route' => $mainClientMenu['route'],
                'icon' => $mainClientMenu['icon'],
                'title' => trans('general.' . $mainClientMenu['title']),
                'originTitle' => $mainClientMenu['title'],
                'menu' => $mainClientMenu['subMenus'],
            ];
            $aModules[] = $menuTab;
        }

        return $aModules;
    }

}
