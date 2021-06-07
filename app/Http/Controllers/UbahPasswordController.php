<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UbahPasswordController extends Controller
{
    //
    public function index()
    {
        return view('kabupaten/ubah-password', ['pages' => 'ubahpassword']);
    }

    public function updatePassword(Request $request)
    {
        $oldPassword = $request->post('oldPassword');
        $newPassword = $request->post('newPassword');

        // check old password is correct
        $currentUser = User::find(auth()->user()->id);
        $check = Hash::check($oldPassword, $currentUser->password);

        if ($check == 1) {
            // old password is correct
            // then, update password
            $update = User::where('email', $request->session()->get('loggedUserEmail'))->update(['password' => bcrypt($newPassword)]);
            if ($update) {
                // update success
                $request->session()->flash('update-password-success', 'true');
                return redirect('/ubah-password');
            } else {
                // update success
                $request->session()->flash('update-password-failed', 'false');
                return redirect('/ubah-password');
            }
        } else {
            // old password is wrong
            $request->session()->flash('old-password-wrong', 'false');
            return redirect('/ubah-password');
        }
    }
}
