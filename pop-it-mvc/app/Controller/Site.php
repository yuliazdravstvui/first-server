<?php

namespace Controller;

use Model\Reader;
use Src\Auth\Auth;
use Model\User;
use Model\Post;
use Src\View;
use Src\Request;
use Src\Validator\Validator;
use Model\Book;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Добро пожаловать!']);
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }


    public function book(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.book');
        }
    }
    public function accept(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.accept');
        }
    }
    public function issue(): string
    {
        $book = Book::all();
        return new View('site.issue', ['book' => $book]);
    }

    public function reader(): string
    {
        return new View('site.reader');
    }
        public function books(): string
    {
        return new View('site.books');
    }
    public function readers(): string
    {
        $readers = Reader::all();
        return new View('site.readers', ['readers' => $readers]);
    }
}
