<?php

namespace App\Http\Controllers;

use App\Memo;
use App\Folder;
use DB;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    /**
     * メモ一覧を表示する。
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('memos.index');
    }

    public function searchTag(Request $request)
    {
        $tag = $request->input('tag');
        $memos = Memo::where('tag', $tag)->get();
        $folders = Folder::where('tag', $tag)->get();
        return view('memos.memoList', compact('memos', 'folders'));
    }

    public function folders()
    {
        $folders = Folder::where('folder_id', 0)->get();
        return view('memos.folderList', compact('folders'));
    }

    public function memos($folderId)
    {
        $memos = Folder::find($folderId)->memos->where('del_flag', false);
        $folders = Folder::where('folder_id', $folderId)->get();
        return view('memos.memoList', compact('memos', 'folders'));
    }

    public function detail($id)
    {
        $memo = Memo::find($id);
        return view('memos.memoDetail', compact('memo'));
    }

    public function delete($id)
    {
        DB::table('memos')
            ->where('id', $id)
            ->update(['del_flag' => true]);
        $folderId = Memo::find($id)->folder->id;
        return redirect(url('memos/'.$folderId));
    }

    public function newMemoDetail()
    {
        return view('memos.editMemo');
    }

    public function editMemo(Request $request)
    {
        $title = $request->input('title');
        $tag = $request->input('tag');
        $text = $request->input('text');

        DB::table("memos")->insert([
            "title" => $title,
            "tag" => $tag,
            // "image" => "",
            "text" => $text,
            "folder_id" => 1
        ]);;
        return redirect(url('memos/1'));
    }
}
