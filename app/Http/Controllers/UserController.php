<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//use DB;

class UserController extends Controller {
    

    //  **********  para la Vista 'index'  **********
    public function index() {

        //dd("Hello World!!!");
        
        //  **********  Metodo Eloquent  **********
        
        //  Recuperamos todos los datos en el Modelo del Usuario. Todos los Registros. Utilizamos Eloquent.
        $users = User::all();

        //  Recuperamos valores con condicionantes.
        //$users = User::where('age', '>', 30)->orWhere('zip_code', 280828)->orderBy('age', 'asc')->get();
        //$users = User::where('age', '>', 30)->orderBy('age', 'asc')->get();
        //$users = User::where('age', '>', 30)->limit(5, 10)->get();
        //$users = User::where('age', '>', 30)->first();
        //$users = User::find(1);
        

        //  **********  Metodo Consultas SQL  **********
        //$users = DB::select(DB::raw("SELECT * FROM users"));


        //  **********  Metodo DIVI  **********
        //$users = DB::table('users')->select();

        //return view('user.index', ["users" => $users]);
        return view('user.index', compact('users'));     //  El Campo Igual Nombre que la Variable. Ver linea de arriba comentada.

    }

    //  **********  para la Vista 'create'  **********
    public function create() {

        //  Creacion de Valores a traves de un objeto de tipo 'User' del modelo.
        $user = new User;
        
        //  Creacion Usuario 1.
        $user->name = "Juanjo";
        $user->email = "demo@demo.com";
        $user->password = Hash::make('123456');
        $user->age = 25;
        $user->address = "Calle Demostracion 12";
        $user->zip_code = 290909;

        //  Guardar Datos en el Sistema de Persistencia o Base de Datos.
        $user->save();


        //  Metodo para crear Valores. Otra Forma. Con Metodo Estatico - Usuario 2.
        User::create([
            "name"     => "Ruiz",
            "email"    => "info@demo.com",
            "password" => Hash::make('12345678'),
            "age"      => 42,
            "address"  => "Avenida de pruebas 17",
            "zip_code" => 280828
        ]);

        //  Metodo para crear Valores. Otra Forma. Con Metodo Estatico - Usuario 3.
        User::create([
            "name"     => "Alejandro",
            "email"    => "info@demodemo.com",
            "password" => Hash::make('123456789'),
            "age"      => 40,
            "address"  => "Calle de pruebas 21",
            "zip_code" => 280854
        ]);

        //  Volcamos o retornamos la informacion a la vista 'index'.
        return redirect()->route('user.index');

    }

}

