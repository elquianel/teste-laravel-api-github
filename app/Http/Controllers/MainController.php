<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class MainController extends Controller
{

    public function index(){
        $user = new User();

        $user = $user->find(session('user'));

        $dataUser = json_decode($user, true);

        // $data = [$dataUser, $repos];

        // return session('user');
        return view('index', $dataUser);
    }

    public function getRepos(){
        $user = new User();

        $user = $user->find(session('user'));
        $login = $user->login;

        $data = [
            'repos' => Http::get('https://api.github.com/users/'.$login.'/repos')->json()
        ];

        // return $data;
        return view('repos', $data);

    }

    public function getDetailsRepos(Request $r){
        $user = new User();

        $user = $user->find(session('user'));
        $login = $user->login;

        $data = [
            'repo' => Http::get('https://api.github.com/repos/'.$login.'/'.$r->repoSelected.'/commits')->json()
        ];

        // $commitsCount = count($data['repo']);
        $commits = ['repo' => $data['repo']];

        // return $data['repo'][0]['sha'];
        // return $commits;

        return view('detailsRepo', $commits);
    }
}
