<?php

namespace Middlewares;

use Model\User;
use Src\Auth\Auth;
use Src\Request;

class RoleMiddleware
{
    public function handle(Request $request)
    {
        //Если пользователь не админ, то редирект на страницу сотрудника
        if (!User::checkRole()) {
            app()->route->redirect('/hello');
        }
    }
}
