<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request)
    {
        $id = $request->id;

        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age
        ];

        $name = "access_token";
        $value = "123-XYZ";
        $expTime = 1;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;

        return response($data, 200)->cookie($name, $value, $expTime, $path, $domain, $secure, $httpOnly);
    }
}
