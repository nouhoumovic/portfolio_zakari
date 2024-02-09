<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     //mon compte
     public function welcome()
     {
        $articles = Article::limit(4)->get();

         return view('welcome',compact('articles'));
     }

     //mon compte
     public function all_articles()
     {
        $articles = Article::all();

         return view('all_articles',compact('articles'));
     }

      //mon compte
      public function get_article($id)
      {
        $article = Article::find($id);
        $articles = Article::all();

          return view('get_article',compact('article','articles'));
      }

    public function index()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }

        $users = User::all();

        return view('user', compact('users'));
    }

    public function article()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }

        $articles = Article::all();

        return view('article', compact('articles'));
    }

    public function store(Request $request)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $id =  request('id');

        if($id){
            $article = Article::find($id);

        }else{
            $article = new Article();
        }

        $article->libelle = request('libelle');

        if ($request->file('file') || $request->file('file') != null) {

            $file = $request->file('file');
            $filename = uniqid() . '.' . $request->file('file')->extension();
            $filePath = public_path() . '/files/';
            $file->move($filePath, $filename);
            $article->file = '/files/' . $filename;
        }

        if($article->save()){}

        return redirect()->route('article_show',$article->id);
    }

    public function create($id = null)
    {

        $article = null;
        if($id){
            $article = Article::find($id);
        }

        return view('create', compact('article'));
    }

    public function article_show($id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }

        $article = Article::findOrFail($id);


        return view('article_show', compact('article'));
    }
    public function show($id)
    {
        //$this->authorize('user');
        if (auth()->guest()) {
            return redirect('/login');
        }

        $user = User::findOrFail($id);

        return view('user_detail', [
            'user' => $user
        ]);
    }

    public function password(Request $request)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        //method old password validation
        Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, current($parameters));
        }, 'Ancien mot de passe incorrect.');

        $validator = Validator::make(request()->all(), [
            'ancien_mot_de_passe' => 'required|old_password:' . auth()->user()->password,
            'password' => ['required', 'confirmed', 'min:4'],
            'password_confirmation' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('compte', )->withErrors($validator);
        }

        $update = auth()->user()->update([
            'password' => bcrypt(request('password'))
        ]);

        if ($update) {
            // flash()->success('Succès !', 'Mot de passe modifié avec succès.');
            return redirect()->route('compte', );
        }

        return redirect()->route('compte', )->withErrors($validator);
    }
     // Login
     public function login()
     {
         //verification
         if (auth()->check()) {
             return redirect()->route('/');
         }

         return view('login');
     }

     public function info(Request $request)
     {
         if (auth()->guest()) {
             return redirect('/login');
         }

         $validator = Validator::make(request()->all(), [
             'nom' => ['required'],
             'prenom' => ['required'],
         ]);
         if ($validator->fails()) {
             return \Redirect::route('profil')->withErrors($validator);
         }
         $update = auth()->user()->update([
             'nom' => request('nom'),
             'prenom' => request('prenom'),
             'profession' => request('profession'),
         ]);

         if ($update) {
            //  flash()->success('Succès !', 'Compte modifié avec succès.');
             return \Redirect::route('articles');
         }

         return \Redirect::route('profil', ['actif' => 1])->withErrors($validator);
     }

     //deconnexion
     public function deconnexion()
     {
         auth()->logout();
         return redirect('/');
     }

     //Connexion
     public function connexion()
     {
         //validation
         request()->validate([
             'email' => 'required|email',
             'password' => 'required',
         ]);
         // auth attempt laravel
         $resultat = auth()->attempt([
             'email' => request('email'),
             'password' => request('password'),
         ]);

         //if not
         if ($resultat) {
             return redirect()->route('articles');
         }

         return back()->withInput()->withErrors([
             'login' => 'Indentifiant introuvable ! Réessayez.',
         ]);
     }

     //mon compte
     public function compte()
     {
         if (auth()->guest()) {
             return redirect('/login');
         }
         return view('account');
     }

      //mon compte
      public function profil()
      {
          if (auth()->guest()) {
              return redirect('/login');
          }
          return view('profil');
      }

     public function delete($id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }

        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles');
    }
}
