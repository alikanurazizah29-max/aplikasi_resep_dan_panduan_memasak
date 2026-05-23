<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $data_user=User::all();
        return view('admin.user.index',[
            'type_menu' => 'master-data',
            'data_user' => $data_user
        ]);
    }

        public function create()
        {
            return view('admin.user.create',[
                'type_menu' => 'master-data'
            ]);
        }
    
        public function proses_create(Request $request)
        {
            
            $request -> validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]);
            
            User::create($request -> all());
            return redirect()-> route('admin.user');
        }

        public function edit($id)
        {
            $user=User::findOrFail($id);

            return view('admin.user.edit',[
                'type_menu' => 'master-data',
                'user'=>$user
                ]);
        }

        public function proses_edit(Request $request)
        {
            $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            ]);

            $user=User::findOrFail($request-> id);

            $user -> name= $request-> name;
            $user -> email= $request-> email;
            $user -> password= $request-> password;
            $user -> updated_at = now();
            $user -> save();
         return redirect()-> route('admin.user');
        }

        public function delete($id)
        {
            $user=User::findOrFail($id);

            $user->delete();
            return redirect()-> route('admin.user');
        }

}