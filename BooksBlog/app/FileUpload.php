<?php

namespace App;

use Illuminate\Http\Request;
trait FileUpload
{
    public function StoreFile(Request $request,$FolderName){
        $file = $request->file("file")->getClientOriginalName();
        $path = $request->file("file")->storeAs($FolderName, $file,"public");
        return $path;

    }

    public function StoreAvatar(Request $request,$FolderName){
        $file = $request->file("photo")->getClientOriginalName();
        $path = $request->file("photo")->storeAs($FolderName, $file,"public");
        return $path;

    }
    //
}
