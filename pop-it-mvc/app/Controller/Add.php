<?php
namespace Controller;
use Model\Book;
use Model\Reader;
use Src\View;
use Src\Request;

class Add {

    public function add_book(): string
    {
        return new View('site.add_book');
    }

    public function add_reader(Request $request): string
    {
        if ($request->method === 'POST' && Reader::create($request->all())) {
            return new View('site.add_reader');
        }

        return new View('site.add_reader');
    }

}