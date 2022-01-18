<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    protected $ingredients;

    public function __construct(User $users){
        $this->users = $users;
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->input('email') )->first();
        return response()->json($user);
    }
}
