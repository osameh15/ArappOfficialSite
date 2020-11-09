<?php
function newFeedBacks($title = "عملیات موفق", $body = "عملیات موفقیت آمیز بود", $type = "success")
{
    session()->has("feedbacks") ? $session = session()->get("feedbacks") : [];
    $session[] = ["title" => $title, "body" => $body, "type" => $type];
    session()->flash("feedbacks", $session);
}