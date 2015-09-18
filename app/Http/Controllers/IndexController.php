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
        foreach ($news as $item){
            $item['url'] = IndexController::translitURL($item['title']);
            $item['created'] = IndexController::restyleDate($item['created_at']);
        }
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
        $article->created_at = new \DateTime();
        $article->save();
        $last = App\News::orderby('id', 'desc')->first();
        $last['url'] = IndexController::translitURL($last['title']);
        $last['created'] = IndexController::restyleDate($last['created_at']);

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
        \DB::table('news')->count() > 7 + $offset ? $hide = false : $hide = true;
        foreach ($news as $item){
            $item['url'] = IndexController::translitURL($item['title']);
            $item['created'] = IndexController::restyleDate($item['created_at']);
        }
        return ['news' => $news, 'hide' => $hide];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function read($id)
    {
        $id = preg_replace("/[^0-9]/", '', $id);
        $item = App\News::where('id','=', $id)->get();
        return view('showarticle',['item' => $item]);
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

    public function translitURL($str)
    {

        $tr = array(
            "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g",
            "Д"=>"d","Е"=>"e","Ж"=>"j","З"=>"z","И"=>"i",
            "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
            "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
            "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"ts","Ч"=>"ch",
            "Ш"=>"sh","Щ"=>"sch","Ъ"=>"","Ы"=>"yi","Ь"=>"",
            "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
            "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
            "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
            "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
            "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
            "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
            "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
            " -"=> "_", ","=> "", " "=> "_", "."=> "", "/"=> "_",
            "-"=> "","%"=> "_","!"=> "","?"=> "","#"=> "","&"=> "",
            "@"=> "_"
        );
        $str = strtr($str,$tr);
        $str = substr($str, 0, 20);
        (strpos($str,"_")) ? $str = substr($str, 0, strrpos($str, "_")):null;

        return $str;
    }

    public function restyleDate($date){
        $now = time();
        $diff_date = strtotime($date)-intval(date('Z'));
        $difference = $now-$diff_date;
        if($difference < 3600 )return("Менее часа назад");
        if($difference < 3600*2 )return("Менее двух часов назад");
        if($difference < 3600*3 )return("Менее трех часов назад");
        if($difference < 3600*4 )return("Менее четырех часов назад");
        if($difference < 3600*24 )return("Сегодня, ".date('h:i',$diff_date));
        if($difference < 3600*24*2 )return("Вчера, ".date('h:i',$diff_date));
        if($difference < 3600*24*3 )return("три дня назад");
        if($difference < 3600*24*4 )return("четыре дня назад");
        if($difference < 3600*24*5 )return("пять дней назад");
        if($difference < 3600*24*6 )return("шесть дней назад");
        if($difference < 3600*24*7 )return("более недели назад");
        if($difference < 3600*24*7*2 )return("более двух недель назад");
        return ("более месяца назад");
    }

}
