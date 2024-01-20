<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannersRequest;
use App\Models\Banner;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function index()
    {
        $messages = Message::all();
        return view('admin.messages.index', compact('messages'));
    }


    public function create(Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function store(Request $request, Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function show(Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function edit(Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function update(Request $request, Message $message)
    {
        return redirect()->route('admin.messages.index');
    }


    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')->with('alert', 'Дія виконана успішно!');
    }
}
