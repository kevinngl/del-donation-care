<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Donation;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $donation = Donation::paginate(6);
        return view('page.user.home.main', ['donation' => $donation]);
    }
    public function list(Request $request)
    {
        $donation = Donation::paginate(9);
        return view('page.user.list.main', ['donation' => $donation]);
    }
    public function profilUser(Request $request)
    {
        $user = Auth::user();
        return view('page.user.profil.main', compact('user'));
    }
    public function signup(Request $request)
    {
        return view('page.user.auth.main');
    }
    public function signin(Request $request)
    {
        return view('page.user.auth.main');
    }
    public function single($single)
    {
        $donation = Donation::where('td_title', $single)->first();
        return view('page.user.single.main', compact('donation'));
    }
}
