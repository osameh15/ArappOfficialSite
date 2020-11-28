<?php
/**
 * Created by PhpStorm.
 * User: Mohammad
 * Date: 27/11/2020
 * Time: 10:35 PM
 */

namespace Badzohreh\Media\Services;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MediaService
{

    public static function upload(UploadedFile $file, $type)
    {
        $extention = $file->getClientOriginalExtension();

        switch ($type) {
            case "image":
                ImageService::upload($file);
        }
        $fileName = $file->getClientOriginalName();
        $name = uniqid();
        Storage::putFileAs("\\public\\userAvatar", $file, $name . "." . $extention);

    }
}