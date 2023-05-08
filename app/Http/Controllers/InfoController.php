<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Categorie;
use Illuminate\Support\Facades\Session;

class InfoController extends Controller
{
    public function back_office_list()
    {
        $info = Info::liste();
        return view('back_office.liste',[
            'info' => $info
        ]);
    }

    public function createform()
    {
        $categorie = Categorie::all();
        return view('back_office.create_form',[
            'categorie' => $categorie
        ]);
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        $destinationPath = 'uploads';
        $photo = $file->getClientOriginalName();
        $file->move($destinationPath, $file->getClientOriginalName());

        $info = new Info();
        $info->image = $destinationPath . "/" . $photo;
        $info->date = request('date');
        $info->categorieid = request('categorie');
        $info->titre = request('titre');
        $info->resume = request('resume');
        $info->contenu = request('contenu');
        $info->auteurid = Session::get('idauteur');
        $info->save();
        return redirect('/information/create-form');
    }

    public function updateform()
    {
        $id = request('id');
        $info = Info::get($id);
        $categorie = Categorie::all();
        return view('back_office.update_form',[
            'info' => $info,
            'categorie' => $categorie
        ]);
    }

    public function update(Request $request)
    {
        $info = new Info();
        $info->id = request('id');
        $info->date = request('date');
        $info->categorieid = request('categorie');
        $info->titre = request('titre');
        $info->resume = request('resume');
        $info->contenu = request('contenu');
        $info->update();
        // return redirect('/information/create-form');
    }

    public function delete()
    {
        $id = request('id');
        $info = new Info();
        $info->id = $id;
        $info->delete();
    }

}


