<?php

namespace Modules\Shop\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Shop\Repositories\Front\Interfaces\CategoryRepositoryInterface;
use Modules\Shop\Repositories\Front\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $productRepository;
    protected $categoryRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository)
    {
        parent::__construct();

        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;

        $this->data['categories'] = $this->categoryRepository->findAll();
        // dd($this->data);

    }

    public function index()
    {
        $options = [
            'per_page' => $this->perPage,
        ];

        $this->data['products'] = $this->productRepository->findAll($options);

        return $this->loadTheme('products.index', $this->data);
    }

    public function category($categorySlug)
    {
        $category = $this->categoryRepository->findBySlug($categorySlug);

        $options = [
            'per_page' => $this->perPage,
            'filter' => [
                'category' => $categorySlug,

            ],
        ];

        $this->data['products'] = $this->productRepository->findAll($options);
        $this->data['category'] = $category;

        return $this->loadTheme('products.category', $this->data);

    }

}
