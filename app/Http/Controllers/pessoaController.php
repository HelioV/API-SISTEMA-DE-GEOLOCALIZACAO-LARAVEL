<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Services\PayUService\Exception;

class pessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $dados=Pessoa::all();
            if($dados!=null)return $this->Sms($dados,204);
            else return $this->Sms($dados,404);

          } catch (\Exception $e) {

              return $this->Sms($e->getMessage(),404);
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $dados=Pessoa::create($request->all());
            return $this->Sms($dados,204);
            } catch (\Exception $e) {

                return $this->Sms($e->getMessage(),404);
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    try {
        $dados=Pessoa::create($request->all());
        return $this->Sms($dados,204);
        } catch (\Exception $e) {

            return $this->Sms($e->getMessage(),404);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $dados=Pessoa::find($id);
             if($dados!=null)return $this->Sms($dados,204);
             else return $this->Sms($dados,404);
          } catch (\Exception $e) {

              return $this->Sms($e->getMessage(),404);
          }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados=Pessoa::find($id);
            if($dados)
            {
                try {
                    $dados->update($request->all());
                    return $this->Sms($dados,204);
                  } catch (\Exception $e) {

                      return $this->Sms($e->getMessage(),404);
                  }

            }
            else return $this->Sms($dados,404);
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
        $dados=Pessoa::find($id);
            if($dados)
            {
                try {
                    $dados->update($request->all());
                    return $this->Sms($dados,204);
                  } catch (\Exception $e) {

                      return $this->Sms($e->getMessage(),404);
                  }

            }
            else return $this->Sms($dados,404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {

            $dados=Pessoa::destroy($id);
            return $this->Sms("Sucesso",204);
          } catch (\Exception $e) {

              return $this->Sms($e->getMessage(),404);
          }
    }

    public function Sms($dados,$codigo)
    {
        return response()->json(['data'=>$dados, 'code' => $codigo]);
    }
}
