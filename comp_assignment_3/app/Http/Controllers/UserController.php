<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $persons = [];
        if ($request->search) {
            $persons = $this->handleSearch($request->search);
        }
        return view("persons", ["persons" => $persons]);
    }

    private function handleSearch($search_value)
    {
        $search = User::where("first_name", "like", $search_value . "%")
            ->orWhere("last_name", "like", $search_value . "%")
            ->orWhere("email", "like", $search_value . "%")
            ->orWhere("phone_number", "like", $search_value . "%")
            ->paginate();
        return $search;
    }

}
