<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{ protected $table = 'auteur';

    /**
     * @var array $fillable
     */
    protected $id;
    protected $nom;
    protected $email;
    protected $mdp;

    public $timestamps = false;
    protected $guard=['updated_at','created_at'];
    protected $fillable = [
        'id',
        'nom',
        'email',
        'mdp'
    ];
    use HasFactory;

    public static function get($id){
        $tab = Auteur::fromQuery("select * from Auteur where id = ".$id);
        return $tab[0];
    }

    public static function login($email,$mdp){
        $tab = Auteur::fromQuery("select * from Auteur where Email='".$email."' and mdp=md5('".$mdp."') limit 1");
        $id=0;
        if(count($tab)==0){
            return -1;
        }
        return $tab[0]['id'];

    }
}
