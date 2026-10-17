@extends('layouts.app')

@section('title', 'Curated Collections | GULBANI - Royal Bespoke Hampers')

@section('content')

<!-- Header Banner -->
<section style="background: linear-gradient(135deg, var(--color-primary-dark), #120A0B); color: var(--color-cream); padding: 5rem 0 3.5rem; text-align: center; border-bottom: 2px solid var(--color-gold);">
    <div class="container">
        <span class="section-pretitle" style="color: var(--color-gold-light);">The Imperial Catalogue</span>
        <h1 style="font-family: var(--font-editorial); font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 400; margin-bottom: 1rem; color: #FFFFFF;">
            Curated <em>Royal Collections</em>
        </h1>
        <p style="max-width: 650px; margin: 0 auto; font-size: 1.05rem; color: rgba(250, 247, 242, 0.8); line-height: 1.7;">
            Discover our master curations for regal weddings, auspicious Sundarkand paths, festive celebrations, milestone arrivals, and heirloom homeware collectibles.
        </p>
    </div>
</section>

<!-- Catalogue Grid Section -->
<section class="section section-bg-cream">
    <div class="container">
        <!-- Filter Tabs -->
        <div class="filter-tabs-wrapper" style="margin-bottom: 3.5rem;">
            <button class="filter-tab {{ empty($_GET['cat']) ? 'active' : '' }}" data-filter="all">All Curations ({{ count($products) }})</button>
            <button class="filter-tab {{ isset($_GET['cat']) && $_GET['cat'] === 'weddings' ? 'active' : '' }}" data-filter="weddings">Weddings & Trousseau</button>
            <button class="filter-tab {{ isset($_GET['cat']) && $_GET['cat'] === 'festive' ? 'active' : '' }}" data-filter="festive">Festive & Sundarkand</button>
            <button class="filter-tab {{ isset($_GET['cat']) && $_GET['cat'] === 'baby' ? 'active' : '' }}" data-filter="baby">Baby & Milestone</button>
            <button class="filter-tab {{ isset($_GET['cat']) && $_GET['cat'] === 'keepsakes' ? 'active' : '' }}" data-filter="keepsakes">Artisanal Keepsakes</button>
            <button class="filter-tab {{ isset($_GET['cat']) && $_GET['cat'] === 'corporate' ? 'active' : '' }}" data-filter="corporate">Corporate Bespoke</button>
        </div>

        <!-- Hampers Grid -->
        <div class="hampers-grid">
            @foreach($products as $product)
                @include('partials.hamper_card', ['product' => $product])
            @endforeach
        </div>

        <!-- Custom Concierge Callout -->
        <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 3rem; margin-top: 5rem; border: 1px solid var(--color-gold); box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: space-between; gap: 2rem; flex-wrap: wrap;">
            <div style="max-width: 600px;">
                <span style="font-size: 0.78rem; letter-spacing: 0.2em; text-transform: uppercase; color: var(--color-gold-dark); font-weight: 600;">Looking for something completely bespoke?</span>
                <h3 style="font-family: var(--font-editorial); font-size: 2rem; font-weight: 500; margin: 0.4rem 0 0.8rem; color: var(--color-primary);">Create a Custom Hamper Suite</h3>
                <p style="font-size: 0.95rem; color: var(--color-charcoal-muted); line-height: 1.6;">Our New Delhi styling studio creates fully personalized gifting suites tailored to your wedding theme, color scheme, and budget specifications.</p>
            </div>
            <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
                <a href="{{ $base_url }}/?page=builder" class="btn btn-primary">Open Hamper Builder</a>
                <a href="https://wa.me/919876543210" target="_blank" class="btn btn-outline-gold">WhatsApp Stylist</a>
            </div>
        </div>
    </div>
</section>

@endsection
