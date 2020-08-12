<?php

namespace App\Http\Controllers;
use App\Show;
use App\Label;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function index(){
        $shows = Show::orderBy('start_date','desc')->get();
        foreach($shows as $show){
            $show->label;
        }

        return $shows;
    }

    public function getToday(){
        $shows = Show::whereDate('start_date','=',Carbon::now())->get();
        foreach($shows as $show){
            $show->label;
        }

        return $shows;
    }

    public function show($id){
        $show = Show::findOrFail($id);
        return $show;
    }

    public function create(Request $request){
        $validator = Validator::make( $request->all(), [
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'label_id' => 'required',
        ] );

        if ( $validator->fails() ) {
            return response()->json( $validator->errors(), 400 );
        }

        $show = Show::create($request->all());

        return $show;
    }

    public function edit($id, Request $request){
        $validator = Validator::make( $request->all(), [
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'label_id' => 'required',
        ] );

        if ( $validator->fails() ) {
            return response()->json( $validator->errors(), 400 );
        }

        $show = Show::findOrFail($id);
        $show->fill($request->all());
        $show->update();

        return $show;
    }

    public function delete($id){
        $show = Show::findOrFail($id);
        $show->delete();

        return response()->json(['message' => "Deleted succesfully"], 200);
    }
}
