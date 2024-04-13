<?php

namespace Controller;

use Src\Auth\Auth;
use Model\User;
use Model\Post;
use Src\View;
use Src\Request;

class Admin
{
    public function addLib(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/addLib');
        }
        return new View('site.addLib');
    }
}