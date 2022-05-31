<?php

namespace App\Http\Controllers;

use App\Patient;
use http\Env\Response;
use Illuminate\Http\Request;

class PatientController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $patient = Patient::all();

    return Response()->json($patient);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
//  public function create()
//  {
//
//  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */

  // sign-up
  public function store(Request $request)
  {

    $patient = new Patient();

    $patient->name = $request->name;
    $patient->phone = $request->phone;
    $patient->email = $request->email;
    $patient->date_of_birth = $request->date_of_birth;
    $patient->password = $request->password;

    $patient->save();

    return Response()->json($patient);
  }

  // login
    public function login(Request $request)
    {

            $userdata = array (

                'email' => $request->email ,

                'password' => $request->password

            );

            If (Auth::attempt ($userdata)) {

    // authentication success, enters home page

                //return Redirect::to('home');
                return "login successs";
            } else {

    // authentication fail, back to login page with errors

//                return Redirect::to('login')
//
//                    ->withErrors('Incorrect login details');
                return "Incorrect login details";
            }



    }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $patient = Patient::find($id);

    return Response()->json($patient);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
//  public function edit($id)
//  {
//
//  }

  /**
   * Update the specified resource in storage.
   *
   * @param int $id
   * @return Response
   */
  public function update(Request $request, int $id)
  {
      $patient = Patient::find($id);

      $patient->name = $request->name;
      $patient->phone = $request->phone;
      $patient->email = $request->email;
      $patient->date_of_birth = $request->date_of_birth;
      $patient->password = $request->password;

      $patient->save();

      return Response()->json($patient);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return Response
   */
  public function destroy(int $id)
  {
    $patient = Patient::find($id);

    $patient->delete();

    return Response()->json($patient);
  }



}

?>
