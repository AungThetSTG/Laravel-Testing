<?php
/**
 * Created by PhpStorm.
 * User: aungthetwin
 * Date: 2017/12/22
 * Time: 15:26
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        // $request->user() returns an instance of the authenticated user...
        return null;

    }
}