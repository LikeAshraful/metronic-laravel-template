<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index(Request $request)
    {
        if (auth()->user()->cannot('user.index')) {
            abort(403,"You don't have permission");
        }

        if($request->has('key')){
            $term=$request->key;
            $users=User::with(['roles'])
            ->where('name', 'like', '%'.$term.'%')
            ->orWhere('email', 'like', '%'.$term.'%')
            ->orWhere('phone', 'like', '%'.$term.'%')
            ->paginate(10);
        }else{
            $users=User::with(['roles'])->paginate(10);
        }
        return view('pages.user-management.users.index',compact('users', 'request'));
    }


    public function create()
    {
        if (auth()->user()->cannot('user.create')) {
            abort(403,"You don't have permission");
        }
        $roles=Role::all();
        return view('pages.user-management.users.create',compact('roles'));
    }


    public function store(Request $request)
    {

        if (auth()->user()->cannot('user.create')) {
            abort(403,"You don't have permission");
        }
        // return $request->all();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required','string', 'regex:/^\d{10,}$/', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($request->roles);

        return redirect()->route('users.index')->with('message', 'Successfully  Added');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (auth()->user()->cannot('user.edit')) {
            abort(403,"You don't have permission");
        }
        $roles=Role::all();
        $user=User::with(['roles'])->find($id);
        return view('pages.user-management.users.edit',compact('user','roles'));
    }


    public function update(Request $request, $id)
    {
        if (auth()->user()->cannot('user.edit')) {
            abort(403,"You don't have permission");
        }

        $userInfo=User::findOrFail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required','string','regex:/^\d{10,}$/', Rule::unique('users', 'phone')->ignore($userInfo->id)],
            'email' => ['required', 'string', 'email', 'max:255',
            Rule::unique('users', 'email')->ignore($userInfo->id)],
            'password' => ['nullable', 'string', 'min:8'],
        ]);

        if($request->password || $request->password!=null){
            $user=User::where('id',$id)->update([
                'name' => $request->name,
                'phone'=>$request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

        }else{
            $user=User::where('id',$id)->update([
                'name' => $request->name,
                'phone'=>$request->phone,
                'email' => $request->email,
            ]);
        }

        $userInfo->syncRoles($request->roles);
        return redirect()->route('users.index')->with('message', 'Successfully  Updated');
    }

    public function destroy(User $user)
    {
        if (auth()->user()->cannot('user.delete')) {
            abort(403,"You don't have permission");
        }
        $user->delete();
        return redirect()->route('users.index')->with('message', 'Successfully  deleted');

    }
}
