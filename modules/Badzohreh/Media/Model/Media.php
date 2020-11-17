<?php
/**
 * Created by PhpStorm.
 * User: Mohammad
 * Date: 16/11/2020
 * Time: 12:28 AM
 */

namespace Badzohreh\Media\Model;


use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $guarded=[];
    const MEDIA_TYPE_ZIP = "zip";
    const MEDIA_TYPE_IMAGE = "image";
    const MEDIA_TYPE_VIDEO = "video";
    static $TYPES = [self::MEDIA_TYPE_ZIP,self::MEDIA_TYPE_IMAGE,self::MEDIA_TYPE_VIDEO];

}