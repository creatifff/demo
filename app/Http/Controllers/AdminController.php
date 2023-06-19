<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request): View|\Illuminate\Foundation\Application|Factory|Application
    {
//        $products = Product::all();
        $categories = Category::all();

        $sortBy = $request->input('sort_by', 'id');

        $products = Product::orderBy($sortBy)->get();

        return view('pages.admin.admin', compact('products', 'categories'));
    }

    public function createProduct(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $categories = Category::all();

        return view('pages.admin.product.create', compact('categories'));
    }

    public function updateProduct(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $categories = Category::all();

        return view('pages.admin.product.update', compact('categories'));
    }

    /**
     *
     * Add cat page
     * @return View|\Illuminate\Foundation\Application|Factory|Application
     */
    public function addCategory(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.admin.category.create');
    }

    public function createCategory(CreateRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $category = Category::query()->create($validated);

        return redirect()
            ->route('admin.index')
            ->with(['message' => "Категория \"$category->name\" добавлена."]);
    }

    public function deleteCategory($id): RedirectResponse
    {
        $category = Category::where('id', $id)->firstOrFail();
        $category->delete();

        return redirect()
            ->route('admin.index')
            ->with(['message' => "Категория \"$category->name\" удалена."]);
    }

}
