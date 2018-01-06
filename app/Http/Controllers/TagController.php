<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;

class TagController extends Controller
{

    public function getTagsIndex()
    {
        $tags = Tag::orderBy('id', 'desc')->paginate(15);
        return view('tags.index')->withTags($tags);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:25'
        ));

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();

        Session::flash('success', 'Tag已經新增成功囉！');
        return redirect()->route('tags.index');
    }
}
