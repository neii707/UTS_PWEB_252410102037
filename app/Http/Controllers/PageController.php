<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username', 'Neii');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function showDashboard(Request $request)
    {
        $username = $request->query('username', 'Neii');

        $musics = [
            ['id' => 1, 'title' => 'RedRed', 'artist' => 'Chase Atlantic', 'img' => 'emboh.jpg', 'time' => '3:15', 'file' => 'whistle.mp4'],
            ['id' => 2, 'title' => 'Con Calma', 'artist' => 'Daddy Yankee', 'img' => 'cuking.jpg', 'time' => '3:45', 'file' => 'papa ayah.mp4'],
            ['id' => 3, 'title' => 'Welcome To The Jungle', 'artist' => 'Guns N Roses', 'img' => 'luwe.jpg', 'time' => '4:20', 'file' => 'me when.mp4'],
            ['id' => 4, 'title' => 'Eyeless', 'artist' => 'Slipknot', 'img' => 'ngantuk.jpg', 'time' => '3:56', 'file' => 'berkelas.mp4'],
        ];

        return view('dashboard', compact('username', 'musics'));
    }

    public function showProfile(Request $request)
    {
        $username = $request->query('username', 'Neii');
        
        $userProfile = [
            'name' => $username,
            'bio' => 'iwak tempe & musik vibe',
            'status' => 'Suki Liar',
            'email' =>  'neiinaiad@gmail.com'
        ];

        return view('profile', compact('username', 'userProfile'));
    }

    public function showPengelolaan(Request $request)
    {
        $username = $request->query('username', 'Neii');

        $musics = [
            ['id' => 1, 'title' => 'RedRed', 'artist' => 'Chase Atlantic', 'img' => 'emboh.jpg', 'time' => '3:15', 'file' => 'whistle.mp4'],
            ['id' => 2, 'title' => 'Con Calma', 'artist' => 'Daddy Yankee', 'img' => 'cuking.jpg', 'time' => '3:45', 'file' => 'papa ayah.mp4'],
            ['id' => 3, 'title' => 'Welcome To The Jungle', 'artist' => 'Guns N Roses', 'img' => 'luwe.jpg', 'time' => '4:20', 'file' => 'me when.mp4'],
            ['id' => 4, 'title' => 'Eyeless', 'artist' => 'Slipknot', 'img' => 'ngantuk.jpg', 'time' => '3:56', 'file' => 'berkelas.mp4'],
        ];

        return view('pengelolaan', compact('username', 'musics'));
    }
}
