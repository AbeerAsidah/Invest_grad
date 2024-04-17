<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponseTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Models\Article;

class ArticleController extends Controller
{
    use  ApiResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scolarships = ArticleResource::collection(Article::get());
        return $this->apiResponse($scolarships, 'ok', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $input=$request->all();
    //     $validator = Validator::make($input , [
    //         'max_number'=>'required',
    //         'description'=>'required',
    //         'image'=>['nullable',],
    //         'academic_years'=>'required',
    //         'charity_id'=>'required',
    //         'college'=>'required',

    //     ]);

    //     $file_name=$this->saveImage($request->image,'images/scolarship');




    //     if ($validator->fails()){
    //         return $this->apiResponse(null,$validator ->errors() , 400);
    //     }

    //     $scolarship = Scolarship::query()->create([
    //         'max_number' => $request->max_number,
    //         'image' => $file_name,
    //         'description' => $request->description,
    //         'academic_years' => $request->academic_years,
    //         'charity_id' => $request->charity_id,
    //         'college' => $request->college,

    //     ]);
    //     if($scolarship) {
    //         return $this->apiResponse(new ScolarshipResource($scolarship), 'This Scolarship save', 201);
    //     }
    //     return $this->apiResponse(null, 'This Scolarship not save', 400);
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
