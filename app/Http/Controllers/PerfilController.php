<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PerfilController extends Controller
{
    public function index($username){

        $user = \App\User::where('username',$username)->first();

        if(!empty($user)){
            /// pegar os tweets
            $tweets = $user->tweets()->latest()->paginate(5);
            return view('perfil.index', ['user'=>$user,'tweets'=>$tweets]);

        }

        throw new NotFoundHttpException("o usario nao foi encontrado");

    }
}
