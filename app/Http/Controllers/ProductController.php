<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function createProduct(CreateRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_published'] = (bool)$request->get('is_published');

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request
                ->file('image_path')
                ->store('public/images');
        }

        $product = Product::query()->create($validated);

        return redirect()
            ->route('admin.index')
            ->with(['message' => "Товар \"$product->name\" добавлен."]);
    }

    public function single(Product $product): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.single', compact('product'));
    }

    public function updateProduct(UpdateRequest $request, Product $product): RedirectResponse
    {
        $validated = $request->validated();
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request
                ->file('image_path')
                ->store('public/images');
        }

        $product->update($validated);

        return redirect()
            ->route('admin.index')
            ->with(['message' => "Товар \"$product->name\" обновлен."]);
    }

    public function deleteProduct($id): RedirectResponse
    {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();

        return redirect()
            ->route('admin.index')
            ->with(['message' => "Товар \"$product->name\" удален."]);
    }
}
