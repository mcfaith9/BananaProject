<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PersonRequest;
use App\Person;
use App\Phone;
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        $people = Person::all();
        return view('assign.pptable', compact('phones','people'));   
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assign.person');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {

       $person = new Person;

       $person->fname = $request->input('fname');
       $person->lname = $request->input('lname');
       $person->address = $request->input('address');
       $file = $request->file('avatar');

       if($file != null){
           $file->move(public_path().'/', $file->getClientOriginalName());
           $person->avatar = $file->getClientOriginalName();
       }
       else{
           $person->avatar = 'default.jpg';
       }

       $person->save();

       return redirect('phone');
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
        echo "Under Construction";
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Person::where('id',$id)->delete();
        return redirect('pptable');
    }

    public function showList(){
        $phones = Phone::all();
        return view('assign.pptable', compact('phones'));    
    }

    public function assign(Request $request)
    {
        $update_phone_id = Person::find($request->input('id'));
        $update_phone_id->phone_id = $request->input('phone_id');


        $update_person_id = Phone::find($request->input('id'));
        $update_person_id->person_id = $request->input('person_id');
        $update_person_id->save();
        $update_phone_id->save();
        return redirect('pptable');
    }
}
