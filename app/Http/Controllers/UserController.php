<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\Stock;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.index');
    }


    public function shared()
    {

    }

    public function account()
    {

    }

    public function add()
    {
        return view('user.add');
    }

    /**
    * save the book
    */
    public function addsave(Request $request)
    {
        $douban_url = $request->get('douban_url');

        // get book id
        $douban_id = explode('/', $douban_url);
        $douban_id = $douban_id[4];


        $api_url = 'https://api.douban.com/v2/book/'.$douban_id;

        try {
            $client = new Client();
            $res  = $client->get($api_url);
            $data = $res->json();
        } catch (Exception $e) {
           $e->getMessage();
        }


        if(is_array($data)){
            //错误
        }
        
        $book = Book::where('isbn', $data['isbn13'])->first(); 
        if($book) {
            //book exists
        }else{
            //book not exists
            $book = Book::create([
                'title' => $data['subtitle'],
                'pic' => $data['image'],
                'author' => implode(' ', $data['author']),
                'publisher' => $data['publisher'],
                'publish_time' => date('Y-m-d', strtotime($data['pubdate'])),
                'isbn' => $data['isbn13'],
                'douban_url' => $data['alt']
            ]);
        }

        // save to stock
        // $stock = Stock::create([
        //     ''
        // ]);

        $stock = Stock::where('user_id', \Auth::id())->where('book_id', $book->id)->first();
        if(!$stock){
            $stock = Stock::create([
                'user_id' => \Auth::id(),
                'book_id' => $book->id,
                'available' => true
            ]);

        }

        return \Redirect::route('home')->with('message', 'success!');
    }

}