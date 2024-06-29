<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Comitee;
use App\Contactu;
use App\History;
use App\Lcategory;
use App\Lpost;
use App\Member;
use App\MembersCategory;
use App\Models\Carousel;
use App\News;
use App\Structure;
use App\StructureType;
use App\Task;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class FrontendController extends Controller
{
    public function index() {
        $carousel = Carousel::first();
        $activities = Activity::limit(10)->get();
        $tasks = Task::get();
        $comitees = Comitee::get();
        $contactus = Contactu::get();
        $news = News::get();

        return view('index', compact('comitees','carousel', 'activities', 'tasks', 'contactus', 'news'));
    }

    public function posts($id) {
        $activity = Activity::findOrFail($id);
        $activities = Activity::limit(3)->get();
        return view('post_act', compact('activity', 'activities'));
    }


    public function post($id) {
        $post = Lpost::where('id',$id)->first();
        if(!$post) abort(404);
        $posts = Lpost::where('category_id', $post->category_id)->limit(3)->get();
        return view('post', compact('post', 'posts'));
    }

    public function page($title) {
        $post = Page::where('slug',$title)->first();
        return view('page', compact('post'));
    }

    public function history() {
        $histories = History::get();
        return view('history', compact('histories'));
    }

    public function members($id) {
        $categories = MembersCategory::where('parent_id', $id)->get();
        return view('members', compact( 'categories'));
    }
    public function lijan($id) {
        $categories = MembersCategory::where('id', $id)->get();
        return view('lijan', compact( 'categories'));
    }
    public function structures($type) {
        $structures = Structure::where('type_id', $type)->get();
        $type = StructureType::where('id', $type)->first();
        return view('structures', compact( 'structures', 'type'));
    }
    public function news($id) {
       $news = News::where('id', $id)->first();
        return view('news', compact('news'));
    }

    public function blog($id) {
        $blogs = Lpost::where('category_id', $id)->paginate(1);
        if($blogs->isEmpty()) abort(404);
         return view('blog', compact('blogs'));
     }

     public function search(Request $request) {
        $query = $request->input('s');
        $blogs = Lpost::where('title', 'like', '%' . $query . '%')->get();
        return view('blog', compact('blogs', 'query'));
    }

}
