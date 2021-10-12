<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function create()
    {
        Role::create(['name' => 'first_name']);
        return response()->json(true);
    }
}
