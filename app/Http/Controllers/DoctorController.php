<?php

namespace App\Http\Controllers;

use App\Country;
use App\Doctor;
use http\Env\Response;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $doctor = Doctor::all();

      return Response()->json($doctor);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

      $doctor = new Doctor();

      // step-1
      $doctor->name = $request->name;
      $doctor->email = $request->email;
      $doctor->password = $request->password;

      $doctor->english_name = $request->english_name;
      $doctor->arabic_name = $request->arabic_name;
      $doctor->birth_year = $request->birth_year;
      $doctor->license_no = $request->license_no;
      $doctor->job_title = $request->job_title;
      $doctor->description = $request->description;
      $doctor->years_of_experience = $request->years_of_experience;
      // Upload files
      if ($cv = $request->file('cv')){
        $name = $cv->getClientOriginalName();
          $cv->move('CV',$name);
        $doctor->cv = $name;

      };
      if ($certificate = $request->file('certificate')){
          $name = $certificate->getClientOriginalName();
          $certificate->move('Certificate',$name);
          $doctor->certificate = $name;

      };
      $name = $request->country;
      $country = Country::where('name','=',$name)->first();
      $doctor->country_id = $country->id;
      $doctor->save();
      return Response()->json($doctor);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

      $doctor = Doctor::find($id);
      return Response()->json($doctor);

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {

      $doctor = Doctor::find($id);

      $doctor->name = $request->name;
      $doctor->email = $request->email;
      $doctor->password = $request->password;
      $doctor->english_name = $request->english_name;
      $doctor->arabic_name = $request->arabic->name;
      $doctor->birth_year = $request->birth_year;
      $doctor->years_of_experience = $request->years_of_experience;
      $doctor->save();
      return Response()->json($doctor);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $doctor = Doctor::find($id);
      $doctor->delete();
      return Response()->json($doctor);
  }




}

?>
