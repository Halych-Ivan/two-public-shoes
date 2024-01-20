<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ConfigRequest;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{

    public function index()
    {
        $config = Config::find(1);

        return view('admin.config.index', compact('config'));
    }


    public function create()
    {
        $config = Config::find(1);
        return view('admin.config.form', compact('config'));
    }


    public function store(ConfigRequest $request, Config $config)
    {

    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(ConfigRequest $request, Config $config)
    {
        $data = $request->validated();

        $config->phone = $data['phone'] ?? '';
        $config->phone_1 = $data['phone_1'] ?? '';
        $config->phone_2 = $data['phone_2'] ?? '';
        $config->email = $data['email'] ?? '';
        $config->email_1 = $data['email_1'] ?? '';
        $config->email_2 = $data['email_2'] ?? '';
        $config->address = $data['address'] ?? '';
        $config->title = $data['title'] ?? '';
        $config->title_1 = $data['title_1'] ?? '';
        $config->title_2 = $data['title_2'] ?? '';
        $config->text = $data['text'] ?? '';
        $config->tit_1 = $data['tit_1'] ?? '';
        $config->tit_2 = $data['tit_2'] ?? '';
        $config->tit_3 = $data['tit_3'] ?? '';
        $config->tit_4 = $data['tit_4'] ?? '';
        $config->txt_1 = $data['txt_1'] ?? '';
        $config->txt_2 = $data['txt_2'] ?? '';
        $config->txt_3 = $data['txt_3'] ?? '';
        $config->txt_4 = $data['txt_4'] ?? '';


        $config->save();
        return redirect()->route('admin.config.index');
    }


    public function destroy(string $id)
    {
        //
    }
}
