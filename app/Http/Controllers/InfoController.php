<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Categorie;
use App\Models\V_Liste;
use App\Models\V_Liste_actualite;
use App\Models\V_Liste_formation;
use App\Models\V_Liste_tendance;
use App\Models\V_Liste_conseil;
use Illuminate\Support\Facades\Session;

class InfoController extends Controller
{
    public function back_office_list(Request $request)
    {
        $info = V_Liste::paginate(3);
        return view('back_office.liste',[
            'info' => $info
        ]);
    }

    public function back_office_list_actualite(Request $request)
    {
        $info = V_Liste_actualite::paginate(3);
        return view('back_office.liste_actualite',[
            'info' => $info
        ]);
    }

    public function back_office_list_formation(Request $request)
    {
        $info = V_Liste_formation::paginate(3);
        return view('back_office.liste_formation',[
            'info' => $info
        ]);
    }

    public function back_office_list_tendance(Request $request)
    {
        $info = V_Liste_tendance::paginate(3);
        return view('back_office.liste_tendance',[
            'info' => $info
        ]);
    }

    public function back_office_list_conseil(Request $request)
    {
        $info = V_Liste_conseil::paginate(3);
        return view('back_office.liste_conseil',[
            'info' => $info
        ]);
    }

    public function back_office_detail(string $slug,string $id)
    {
        $info = Info::detail($id);
        return view('back_office.detail',[
            'info' => $info
        ]);
    }

    public function front_office_list(Request $request)
    {
        $info = V_Liste::paginate(3);
        return view('front_office.liste',[
            'info' => $info
        ]);
    }

    public function front_office_list_actualite(Request $request)
    {
        $info = V_Liste_actualite::paginate(3);
        return view('front_office.liste_actualite',[
            'info' => $info
        ]);
    }

    public function front_office_list_formation(Request $request)
    {
        $info = V_Liste_formation::paginate(3);
        return view('front_office.liste_formation',[
            'info' => $info
        ]);
    }

    public function front_office_list_tendance(Request $request)
    {
        $info = V_Liste_tendance::paginate(3);
        return view('front_office.liste_tendance',[
            'info' => $info
        ]);
    }

    public function front_office_list_conseil(Request $request)
    {
        $info = V_Liste_conseil::paginate(3);
        return view('front_office.liste_conseil',[
            'info' => $info
        ]);
    }

    public function front_office_detail(string $slug,string $id)
    {
        $info = Info::detail($id);
        return view('front_office.detail',[
            'info' => $info
        ]);
    }


    public function createform(Request $request)
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
        $info->auteurid = $request->session()->get('idauteur');
        $info->save();
        return redirect('/information/create-form');
    }

    public function updateform(Request $request)
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

    public function delete(Request $request)
    {
        $id = request('id');
        $info = new Info();
        $info->id = $id;
        $info->delete();
    }

}


