<?php 

namespace App;

use MH\Init\Bootstrap;

class Route extends Bootstrap{

    protected function initRoutes() {


        $routes['home'] = array (
            'route' => '/',
            'controller' => 'estoque_controller',
            'action' => 'inserir'
        );
        $routes['atualizar'] = array (
            'route' => '/',
            'controller' => 'estoque_controller',
            'action' => 'atualizar'
        );
        $routes['recuperar'] = array (
            'route' => '/',
            'controller' => 'estoque_controller',
            'action' => 'recuperar'
        );
        $routes['remover'] = array (
            'route' => '/',
            'controller' => 'estoque_controller',
            'action' => 'remover'
        );
        $routes['home'] = array (
            'route' => '/',
            'controller' => 'insumo_controller',
            'action' => 'inserir'
        );
        $routes['atualizar'] = array (
            'route' => '/',
            'controller' => 'insumo_controller',
            'action' => 'atualizar'
        );
        $routes['recuperar'] = array (
            'route' => '/',
            'controller' => 'insumo_controller',
            'action' => 'recuperar'
        );
        $routes['remover'] = array (
            'route' => '/',
            'controller' => 'insumo_controller',
            'action' => 'remover'
        );
        $routes['home'] = array (
            'route' => '/',
            'controller' => 'paciente_controller',
            'action' => 'inserir'
        );
        $routes['atualizar'] = array (
            'route' => '/',
            'controller' => 'paciente_controller',
            'action' => 'atualizar'
        );
        $routes['recuperar'] = array (
            'route' => '/',
            'controller' => 'paciente_controller',
            'action' => 'recuperar'
        );
        $routes['remover'] = array (
            'route' => '/',
            'controller' => 'paciente_controller',
            'action' => 'remover'
        );
        $routes['home'] = array (
            'route' => '/',
            'controller' => 'usuario_controller',
            'action' => 'inserir'
        );
        $routes['atualizar'] = array (
            'route' => '/',
            'controller' => 'usuario_controller',
            'action' => 'atualizar'
        );
        $routes['recuperar'] = array (
            'route' => '/',
            'controller' => 'usuario_controller',
            'action' => 'recuperar'
        );
        $routes['remover'] = array (
            'route' => '/',
            'controller' => 'usuario_controller',
            'action' => 'remover'
        );

    

        $this->setRoutes($routes);
    }

  
}
?>