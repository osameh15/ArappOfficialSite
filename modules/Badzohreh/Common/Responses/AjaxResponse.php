<?php

namespace Badzohreh\Common\Responses;

use Illuminate\Http\Response;

class AjaxResponse
{
    public static function Success($title = "عملیات موفقیت آمیز",$message = "عملیات موفقت آمیز بود")
    {
        return response()->json(compact("title","message"),
            Response::HTTP_OK);
    }

    public static function fail($title = "خطا در عملیات",$message = "عملیات با خطا مواجهه شد.")
    {
        return response()->json(compact("title","message"),
            Response::HTTP_INTERNAL_SERVER_ERROR);
    }

}
