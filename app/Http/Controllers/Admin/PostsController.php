<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePostsRequest;
use App\Http\Requests\Admin\UpdatePostsRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of Post.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('post_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('post_delete')) {
                return abort(401);
            }
            $posts = Post::onlyTrashed()->get();
        } else {
            $posts = Post::all();
        }

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating new Post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('post_create')) {
            return abort(401);
        }
        return view('admin.posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param  \App\Http\Requests\StorePostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostsRequest $request)
    {
        if (! Gate::allows('post_create')) {
            return abort(401);
        }
        $post = Post::create($request->all());



        return redirect()->route('admin.posts.index');
    }


    /**
     * Show the form for editing Post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('post_edit')) {
            return abort(401);
        }
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update Post in storage.
     *
     * @param  \App\Http\Requests\UpdatePostsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostsRequest $request, $id)
    {
        if (! Gate::allows('post_edit')) {
            return abort(401);
        }
        $post = Post::findOrFail($id);
        $post->update($request->all());



        return redirect()->route('admin.posts.index');
    }


    /**
     * Display Post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('post_view')) {
            return abort(401);
        }
        $post = Post::findOrFail($id);

        return view('admin.posts.show', compact('post'));
    }


    /**
     * Remove Post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('post_delete')) {
            return abort(401);
        }
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Delete all selected Post at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('post_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Post::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('post_delete')) {
            return abort(401);
        }
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Permanently delete Post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('post_delete')) {
            return abort(401);
        }
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();

        return redirect()->route('admin.posts.index');
    }
}
