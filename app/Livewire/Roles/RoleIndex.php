<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = Role::with("permissions")->get();
        return view('livewire.roles.role-index', compact("roles"));
    }

    function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        
        session()->flash("success", "Role deleted successfully.");
        
        }
}
