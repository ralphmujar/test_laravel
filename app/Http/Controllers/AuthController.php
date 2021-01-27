<?php namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 *@param Request $request
	 *@return array ['success' => bool, 'msg' => string, 'data' => $user]
	 */
	public function login(Request $request)
	{
		$uid = $request->uid;
		$pw = $request->pw;		
		$user =$this->user->where('uid', $uid)->first();

		if (!$user) {
			return response()->json(['success' => false, 'msg' => 'fail check username']);
		}
		if (!Hash::check($pw, $user->pw)) {
			return response()->json(['success' => false, 'msg' => 'fail invalid password']);
		}
		$u = ['id' => $user->id, 'uid' => $user->uid];
		return response()->json(['success' => true, 'msg' => 'login success', 'user' => $u]);
	}
}
