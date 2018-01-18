<?php

namespace App\Http\Controllers;


use function MongoDB\BSON\toJSON;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return response()->json([
            'name' => app('db')->select("SELECT * FROM user")[0],
            'state' => $id
        ]);
    }
}
