@extends('layouts.app')

@section('title', 'Product Detail - Ecommerce Store')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-5 mb-4 mb-md-0">
            <div class="border rounded p-3 bg-white">
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="Product Image">
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-7">
            <h1 class="h3 mb-3">Smartphone Pro Max 256GB</h1>
            <p class="h4 text-primary mb-3">$899.00</p>

            <!-- Short Description -->
            <p class="text-muted mb-4">
                Premium flagship smartphone with an edge-to-edge display, advanced triple camera system, and all-day battery life.
            </p>

            <!-- Long Description -->
            <div class="mb-4">
                <h5 class="mb-2">Product Description</h5>
                <p class="text-muted mb-1">
                    Experience exceptional performance with the latest processor, stunning visuals with a high-refresh-rate OLED display, and
                    pro-level photography features including night mode, portrait mode, and 4K video recording.
                </p>
                <p class="text-muted mb-1">
                    With 256GB of storage, you have plenty of space for your apps, photos, videos, and more. The sleek design and durable glass
                    make it both stylish and reliable for everyday use.
                </p>
                <ul class="text-muted mb-0">
                    <li>6.7" OLED display with 120Hz refresh rate</li>
                    <li>256GB internal storage</li>
                    <li>Triple 64MP camera system</li>
                    <li>5G connectivity</li>
                    <li>Fast charging and wireless charging support</li>
                </ul>
            </div>

            <!-- Quantity and Add to Cart -->
            <form class="mb-4">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div>
                        <label for="quantity" class="form-label mb-1">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" style="max-width: 120px;">
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg">
                    <i class="bi bi-cart-plus"></i> Add to Cart
                </button>
            </form>

            <!-- Additional Info -->
            <div class="text-muted small">
                <p class="mb-1"><strong>Category:</strong> Smartphones</p>
                <p class="mb-0"><strong>SKU:</strong> SP-256-PRO-MAX</p>
            </div>
        </div>
    </div>
</div>
@endsection

{
  "cells": [],
  "metadata": {
    "language_info": {
      "name": "python"
    }
  },
  "nbformat": 4,
  "nbformat_minor": 2
}