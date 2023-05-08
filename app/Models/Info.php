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

    public static function detail($id){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.id = ".$id);
        return $tab[0];
    }

    public static function liste_actualite(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 1");
        return $tab;
    }

    public static function liste_formation(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 2");
        return $tab;
    }

    public static function liste_tendance(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 3");
        return $tab;
    }

    public static function liste_conseil(){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.categorieid = 4");
        return $tab;
    }

    public static function get($id){
        $tab = Info::fromQuery("select i.*,c.categorie,a.nom,a.email from info i join auteur a on i.auteurid = a.id join categorie c on i.categorieid = c.id where i.id = ".$id);
        return $tab[0];
    }

    public static function slugify($text)
   {
       // Strip html tags
       $text=strip_tags($text);
       // Replace non letter or digits by -
       $text = preg_replace('~[^\pL\d]+~u', '-', $text);
       // Transliterate
       setlocale(LC_ALL, 'en_US.utf8');
       $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
       // Remove unwanted characters
       $text = preg_replace('~[^-\w]+~', '', $text);
       // Trim
       $text = trim($text, '-');
       // Remove duplicate -
       $text = preg_replace('~-+~', '-', $text);
       // Lowercase
       $text = strtolower($text);
       // Check if it is empty
       if (empty($text)) { return 'n-a'; }
       // Return result
       return $text;
   }

   public static function slugify_($urlString)
    {
         $search = ['Ș', 'Ț', 'ş', 'ţ', 'Ş', 'Ţ', 'ș', 'ț', 'î', 'â', 'ă', 'Î', ' ', 'Ă', 'ë', 'Ë'];
         $replace = ['s', 't', 's', 't', 's', 't', 's', 't', 'i', 'a', 'a', 'i', 'a', 'a', 'e', 'E'];
         $str = str_ireplace($search, $replace, strtolower(trim($urlString)));
         $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
         $str = str_replace(' ', '-', $str);
         return preg_replace('/\-{2,}', '-', $str);
    }


}


