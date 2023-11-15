<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Author;


class ContactController extends Controller
{
    public function index()
  {
    return view('index');

  }
     public function confirm2(ContactRequest $request)
     {
        $contact = $request->only(['secondname', 'firstname', 'gender', 'email', 'postcode', 'adress', 'building', 'content']);
        return view('confirm2', ['contact' => $contact]);
     }

     public function store(ContactRequest $request)
   {
     $contact = $request->only(['name', 'email', 'tel', 'content']);
     Contact::create($contact);
     return view('thanks');
   }
       public function store2(ContactRequest $request)
   {
     $contact = $request->only(['secondname', 'firstname', 'gender', 'email', 'postcode', 'adress', 'building', 'content']);
     Contact::create($contact);       
     return view('thanks');
   }

    public function management()
   {
    //$authors = Author::Paginate(4)
   // return view('management', ['authors' => $authors]);

    //$authors = Author::Paginate(4);
    //return view('management', ['authors' => $authors]);
    return view('management');
   }

   public function search(Request $request)
   {
    //$authors = Author::Paginate(4)
   // return view('management', ['authors' => $authors]);

    //$authors = Author::Paginate(4);
    //return view('management', ['authors' => $authors]);
    //$todos = Todo::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
    //$todos = Todo::with('category')->KeywordSearch($request->keyword)->get();
    
     //$categories = Category::all();
     //$item = Author::where('secondname', 'LIKE',"%{$request->input}%")->first();
     $item = Contact::where('secondname', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        //return view('find', $param);

    //return view('management',['todos']);
    return view('search',compact('param'));
   }

       public function bind(Author $author)
    {
        $data = [
            'item'=>$author,
        ];
        return view('author.binds', $data);
    }

      //public function search2(Request $request)
      public function search2()
    {

         /* テーブルから全てのレコードを取得する */
           $companies = Contact::query();
           //$companies = 1;


        /* キーワードから検索処理 */
        /*$keyword = $request->input('keyword');
        if(!empty($keyword)) {//$keyword　が空ではない場合、検索処理を実行します
            $companies->where('secondname', 'LIKE', "%{$keyword}%")
            ->orwhereHas('contacts', function ($query) use ($keyword) {
                $query->where('firstname', 'LIKE', "%{$keyword}%");
            })->get();

        }*/

        /* ページネーション */
        //$posts = $companies->paginate(5);

        //return view('search', ['posts' => $posts]);
        //return view('search', compact('campanies'));
        return view('search', ['campanies' => $companies]);

    }

        public function verror()
    {
    return view('index');
    }





}
