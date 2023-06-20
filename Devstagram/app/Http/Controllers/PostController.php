<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //Constructor de la sesion
    public function __construct()
    {
        //Proteger el constructor con autenticacion, es decir antes de ejecutar el metodo index debemos pasar el parametro de autenticacion
        $this->middleware('auth');
    }

    //Para mostrar el muro de perfil
    public function index(User $user){
        //Obtenemos los Post de publicacion del usuario
        $post=Post::where('user_id',$user->id)->get();
        //dd($post);
        //Aplicamos un helper para revisar que el usuario esta autenciado
        //dd(auth()->user());
       // $servicios = DB::table('posts')->where('user_id',auth()->user()->id)->get();
        return view('dashboard');
        return view('dashboard',[
            'user'=>$user,
            //Pasamos los Post de publicacion a la vista dashboard
            'posts'=>$post
        ]);
    }

    //Crear metodo create para mostrar el formulario d publicacion
    public function create(){
        //dd('Creando post');
        return view('posts.create');
    }

    //Método para guardar imágenes
    public function store(Request $request) {
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);
        //Guardar los campos en el modelo Post
        //Post::create([
            /*'titulo'=>$request->titulo,
            'descripcion'=>$request->decripcion,
            'imagen'=>$request->imagen,
            //Identificar el usuario autenticado para guardarlo
            'user_id'=>auth()->user()->id

            //Guardar la informacino con relaciones (Modelo ER)
            //"post" es el nombre de la relacion*/
        $request->user()->post()->create([
            'titulo'=>$request->titulo,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'user_id'=>auth()->user()->id
        ]);
        //]);
        //Redireccionar al muro principal despues de guardar el Post de publicacion
        return redirect()->route('post.index');
    }
}
