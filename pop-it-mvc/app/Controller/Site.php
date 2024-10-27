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
use Model\Author;
use Model\Issue;
use Model\Statuses;

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
        $book = Book::where('id', $request->get('id'))->first();
        return (new View())->render('site.book', ['book' => $book]);
    }

    public function reader(Request $request): string
    {
        $reader = Reader::where('id', $request->get('id'))->first();
        if ($request->method === 'POST') {
            Issue::where('id', $request->get('issue_id'))->first()->update([
                'actual_date' => date('Y.m.d'),
                'id_status' => 1
            ]);
            app()->route->redirect('/reader?id=' . $reader->id);
        }
        return new View('site.reader', ['reader' => $reader]);
    }
    public function books(Request $request): string
    {
        $message = null;
        $books = [];
        if($request->method==='POST'){
            if ($request->get('search')) {
                $search = $request->get('search');
                if ($search) {
                    $books = Book::where('title', 'like', '%' . $search . '%')->get();
                    $author = Author::all();
                }
                if ($books->isEmpty()) {
                    $message = 'Книги с таким названием отсутствуют';
                }

            }
        } else {
            $books = Book::all();
            $author = Author::all();
        };

        return (new View())->render('site.books', ['books' => $books, 'author' => $author, 'message' => $message ?? null]);

    }
    public function readers(Request $request): string
    {
        $message = null;
        $readers = [];
        if($request->method==='POST'){
            if ($request->get('search')) {
                $search = $request->get('search');
                if ($search) {
                    $readers = Reader::where('surname', 'like', '%' . $search . '%')->get();

                }
                if ($readers->isEmpty()) {
                    $message = 'читатели отсутствуют';
                }

            }
        } else {
            $readers = Reader::all();
        };

        return (new View())->render('site.readers', ['readers' => $readers, 'message' => $message ?? null]);

    }
}
