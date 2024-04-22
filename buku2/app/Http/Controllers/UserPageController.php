<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('nama');
        // save
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
    public function show()
    {
        // return Order::all();
        return view('/userpage', [
            'user' => User::all()
        ]);
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/userpage')->with('success', 'hapus item');
    }

    public function changeRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->is_admin = !$user->is_admin; // Toggle the user role
        $user->save();

        return redirect()->back()->with('success', 'User role has been updated.');
    }
}
