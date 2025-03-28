<?php

/**
 * This Is Products Routes
 */

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/**
 * GET -> /products
 * GET -> /products/create
 * POST -> /products
 * GET -> /products/{id}
 * GET -> /products/{id}/edit
 * PUT -> /products/{id}
 * DELETE -> /products/{id}
 */

Route::get(
  '/products',
  [ProductController::class, 'index']
)->name('products.index.view');

Route::get(
  '/products/create',
  [ProductController::class, 'create']
)->name('products.create.view');

Route::post(
  '/products',
  [ProductController::class, 'store']
)->name('products.store.action');

Route::get(
  '/products/{id}',
  [ProductController::class, 'show']
)->name('products.show.view');

Route::get(
  '/products/{id}/edit',
  [ProductController::class, 'edit']
)->name('products.edit.view');

Route::put(
  '/products/{id}',
  [ProductController::class, 'update']
)->name('products.update.action');

Route::delete(
  '/products/{id}',
  [ProductController::class, 'delete']
)->name('products.delete.action');
