<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $filerepo;

    public function prepare($request, $fillables): array
    {
        $data = array();
        foreach ($fillables as $fillable) {
            if ($request->has($fillable)) {
                $data[$fillable] = $request->get($fillable);
            }
        }
       

        if (count($request->allFiles()) > 0) {
            foreach ($request->allFiles() as $key => $value) {
                $uploadedFile = $request->file($key);
                $data[$key] = $uploadedFile->hashName();
                $uploadedFile->storeAs($this->fileRepo, $data[$key]);
            }
        }

        return $data;
    }
}
