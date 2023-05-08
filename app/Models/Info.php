<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';

    /**
     * @var array $fillable
     */
    public $timestamps = false;
    protected $guard=['updated_at','created_at'];
    protected $fillable = [
        'id',
        'date',
        'categorie',
        'titre',
        'resume',
        'contenu',
        'image',
        'auteurid'
    ];
    use HasFactory;

    public static function current_date(){
        $tab = Info::fromQuery("select current_date");
        return $tab[0][0];
    }

    public static function liste(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id");
        return $tab;
    }

    public static function liste_actualite(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where categorieid = 1");
        return $tab;
    }

    public static function liste_formation(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where categorieid = 1");
        return $tab;
    }

    public static function liste_tendance(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where categorieid = 1");
        return $tab;
    }

    public static function liste_conseil(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where categorieid = 1");
        return $tab;
    }

    public static function get($id){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.id = ".$id);
        return $tab[0];
    }

}


