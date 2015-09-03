<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = App\News::latest('created_at')->take(6)->get();
        $count = \DB::table('news')->count();
        $count > 7 ? $show = true : $show = false;
        return view('index', ['news' => $news, 'showmore' => $show]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = Input::get('title');
        $text = Input::get('text');
        $tags = '<p><b>';
        $article = new App\News;
        $article->title = strip_tags($title, $tags);
        $article->text_news = strip_tags($text, $tags);
        $article->save();
        $last = App\News::orderby('id', 'desc')->first();
        return ['article'=>$last];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show()
    {
        $offset = Input::get('offset');
        $news = App\News::latest('created_at')->skip($offset)->take(6)->get();
        \DB::table('news')->count() > 7 + $offset ? $show = true : $show = false;
        return ['news' => $news, 'showmore' => $show];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
