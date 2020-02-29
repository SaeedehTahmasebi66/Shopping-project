<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allComments = Comment::all();
        return view('admin.comments.index',compact('allComments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment_text'=>'required',
        ]);

        $newComment = new Comment;
        $newComment->comment_text = $request->post('comment_text');
        $newComment->users_id = 2;                                      //فعلا
        $newComment->save();

        return redirect('admin/comment')->with('success', 'پیام جدید افزوده شد !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selectedComment = Comment::find($id);
        return view('admin.comments.edit', compact('selectedComment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'comment_text'=>'required',
        ]);
        $updatedComment = Comment::find($id);
        $updatedComment->comment_text = $request->post('comment_text');
        $updatedComment->save();
        return redirect('/admin/comment')->with('success', 'پیام ویرایش شد!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect('admin/comment')->with('success', 'پیام مورد نظر حذف شد!');
    }
}
