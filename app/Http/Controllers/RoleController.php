<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->cannot('role.index')) {
            abort(403,"You don't have permission");
        }
        if ($request->has('key')) {
            $term = $request->key;
            $roles = Role::with(['permissions'])
                ->where('name', 'like', '%' . $term . '%')
                ->paginate(10);
        } else {
            $roles = Role::with(['permissions'])->paginate(10);
        }
        return view('pages.user-management.roles.index', compact('roles', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->cannot('role.create')) {
            abort(403,"You don't have permission");
        }
        $permissions = Permission::all();
        return view('pages.user-management.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->cannot('role.create')) {
            abort(403,"You don't have permission");
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        // return $request->all();

        $role = Role::create([
            'name' => $request->name,
        ]);
        $role->permissions()->sync($request->input('permissions', []));
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        return redirect()->route('roles.index')->with('message', 'Successfully  Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->cannot('role.edit')) {
            abort(403,"You don't have permission");
        }

        $permissions = Permission::all();
        $role = Role::with(['permissions'])->find($id);
        return view('pages.user-management.roles.edit', compact('permissions', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (auth()->user()->cannot('role.edit')) {
            abort(403,"You don't have permission");
        }

        $roleInfo = Role::findOrFail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $role = Role::where('id', $id)->update([
            'name' => $request->name,
        ]);

        $roleInfo->permissions()->sync($request->input('permissions', []));
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        return redirect()->route('roles.index')->with('message', 'Successfully  Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (auth()->user()->cannot('role.delete')) {
            abort(403,"You don't have permission");
        }
        $role->delete();
        return redirect()->route('roles.index')->with('message', 'Successfully  deleted');
    }
}
