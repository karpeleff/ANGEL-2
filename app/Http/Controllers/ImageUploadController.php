<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageUploadRequest;
use Illuminate\Support\Facades\File;
use App\Models\Img;
use App\Models\Note;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('image-upload.index');
    }
    public function editor()
    {
        $data = Img::all();

        return view('editor')->with('data',$data);
    }

    public  function  image_delete($id)
    {
        $record = Img::find($id);

        $file = $record->name;

       // dd($file);

        $record->delete();

       // $path = public_path('images/').$file;

        if(File::exists(public_path('images/'.$file)))
        {
            File::delete(public_path('images/'.$file));
        }


        return  redirect('image-editor');


    }


    public function upload(ImageUploadRequest $request)
    {
        $filename = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $filename);

        $record = new Img;
        $record->name = $filename ;
        $record->save();

        // save uploaded image filename here to your database
//dd();
        return back()
            ->with('success','Изображение загружено успешно')
            ->with('image', $filename);
    }


    public function  message_view()
    {
        $data = Note::all();
        return view('message')->with('data',$data);
    }

public function  message_add(Request $request)
{
    $record = new Note;
    $record->note    = $request->text;
    $record->country = $request->country;
    $record->name    = $request->name;
    $record->surname = $request->surname;
    $record->save();

    return back()
        ->with('success','Ваше сообщение доставлено !');
}

public  function  message_del($id)
{
    $record = Note::find($id);
    $record->delete();

          return back()
              ->with('success','Ваше сообщение доставлено !');
}


}
