<?php

namespace App\Http\Controllers;

use App\Http\Repository\Product\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;

    private ProductService $productService;

    public function __construct(ProductRepositoryInterface $productRepository, ProductService $productService)
    {
        $this->productRepository = $productRepository;
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productRepository->get();
        
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        if ($request->file('image')) {
            $this->productService->uploadImage($request->image);
            $this->productRepository->create($request->validated());
        } else {
            $this->productRepository->create($request->validated());
        }
        
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->productRepository->findById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->productRepository->findById($id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->productRepository->findById($id);

    }
}
