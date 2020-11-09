<?php

namespace Badzohreh\Category\Http\Controllers;
use App\Http\Controllers\Controller;
use Badzohreh\Category\Http\Requests\CategoryRequest;
use Badzohreh\Category\Models\Category;
use Badzohreh\Category\Repositories\CategoryRepo;
use Badzohreh\Common\Responses\AjaxResponse;

class CategoryController extends Controller
{

    public  $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo)
    {

        $this->categoryRepo = $categoryRepo;
    }

    public function index()
    {
        $this->authorize("index",Category::class);
        $categories = $this->categoryRepo->all();
        return view("Category::index",compact("categories"));
    }

    public function create(CategoryRequest $request)
    {
        $this->authorize("create",Category::class);
        $this->categoryRepo->create($request);
        newFeedBacks();
        return back();
    }

    public function delete($categoryId){
        $this->authorize("delete",Category::class);
        $this->categoryRepo->delete($categoryId);
        return AjaxResponse::Success();
    }

    public function edit($categoryId){
        $this->authorize("edit",Category::class);
        $category = $this->categoryRepo->findById($categoryId);
       $categories = $this->categoryRepo->exceptById($categoryId);
       return view("Category::edit",compact("category","categories"));
    }
    public function update($categoryId,CategoryRequest $request)
    {
        $this->authorize("edit",Category::class);
        $this->categoryRepo->edit($categoryId,$request);
        newFeedBacks();
        return redirect()->route("categories");
    }
}