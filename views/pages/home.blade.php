@extends('layouts.app')

@section('title', 'GULBANI | Luxury Gifting Concierge & Bespoke Royal Hampers • New Delhi')

@section('content')

<!-- Hero Section -->
<section class="hero-wrapper" id="hero">
    <img src="{{ $base_url }}/assets/images/hero_banner.jpg" class="hero-bg-media" alt="Gulbani Luxury Indian Bespoke Gifting">
    <div class="hero-overlay"></div>

    <div class="container" style="position: relative; z-index: 3;">
        <div class="hero-content">
            <div class="hero-tagline-badge">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                LUXE • CURATED • UNFORGETTABLE
            </div>

            <h1 class="hero-title">
                The Art of <em>Regal</em> Indian Gifting
            </h1>

            <p class="hero-subtitle">
                Your private luxury gifting concierge in New Delhi. Bespoke wedding favors, heirloom brass caskets, and artisanal hampers crafted to be treasured forever.
            </p>

            <div class="hero-cta-group">
                <a href="#signatureCollections" class="btn btn-gold btn-lg">
                    <span>Explore Curations</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#hamperBuilderSection" class="btn btn-outline-white btn-lg">
                    <span>Build Your Hamper</span>
                </a>
            </div>

            <!-- Metrics -->
            <div class="hero-metrics">
                <div class="metric-item">
                    <span class="metric-num">500+</span>
                    <span class="metric-label">Bespoke Royal Weddings</span>
                </div>
                <div class="metric-item">
                    <span class="metric-num">100%</span>
                    <span class="metric-label">Artisanal Keepsakes</span>
                </div>
                <div class="metric-item">
                    <span class="metric-num">Pan-India</span>
                    <span class="metric-label">& Global White-Glove Dispatch</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Strip -->
<section class="features-strip">
    <div class="container">
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Artisanal Mastercraft</h3>
                    <p class="feature-desc">Solid etched brass, hand-hammered silver, seasoned teak, and royal porcelain jars.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5zM16 8L2 22M17.5 15H9"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Personalized Monograms</h3>
                    <p class="feature-desc">Custom brass engraved tags, wax seals, and personalized gold-foil calligraphy ribbons.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Dedicated Concierge</h3>
                    <p class="feature-desc">One-on-one styling consultation for weddings, milestone announcements, and corporate VIPs.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">White-Glove Dispatch</h3>
                    <p class="feature-desc">Climate-controlled courier delivery across all Indian cities and international destinations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signature Curated Collections Section -->
<section class="section section-bg-cream" id="signatureCollections">
    <div class="container">
        <div class="section-header">
            <span class="section-pretitle">The Gulbani Catalogue</span>
            <h2 class="section-title">Signature <em>Royal Curations</em></h2>
            <p class="section-subtitle">Each hamper is an exquisite composition of heirloom keepsake vessels, rich gourmet delicacies, and signature ribbons.</p>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs-wrapper">
            <button class="filter-tab active" data-filter="all">All Curations</button>
            <button class="filter-tab" data-filter="weddings">Weddings & Trousseau</button>
            <button class="filter-tab" data-filter="festive">Festive & Sundarkand</button>
            <button class="filter-tab" data-filter="baby">Baby & Milestone</button>
            <button class="filter-tab" data-filter="keepsakes">Artisanal Keepsakes</button>
            <button class="filter-tab" data-filter="corporate">Corporate Connoisseur</button>
        </div>

        <!-- Hampers Grid -->
        <div class="hampers-grid">
            @foreach($products as $product)
                @include('partials.hamper_card', ['product' => $product])
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 3.5rem;">
            <a href="{{ $base_url }}/?page=collections" class="btn btn-outline btn-lg">
                <span>View Complete Catalogue ({{ count($products) }} Curations)</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- Interactive Hamper Concierge Builder Section -->
<section class="section section-bg-sand" id="hamperBuilderSection">
    <div class="container">
        <div class="section-header">
            <span class="section-pretitle">Bespoke Concierge Tool</span>
            <h2 class="section-title">Build Your <em>Custom Hamper</em></h2>
            <p class="section-subtitle">Curate a one-of-a-kind royal gifting ensemble. Select your artisanal vessel, handpicked confections, and personalized ribbon styling.</p>
        </div>

        <div class="builder-card-container">
            <!-- Stepper Header -->
            <div class="builder-stepper">
                <div class="step-item active" data-step="1">
                    <span class="step-num">1</span>
                    <span>1. Select Vessel</span>
                </div>
                <div class="step-item" data-step="2">
                    <span class="step-num">2</span>
                    <span>2. Curate Treats</span>
                </div>
                <div class="step-item" data-step="3">
                    <span class="step-num">3</span>
                    <span>3. Ribbons & Monogram</span>
                </div>
            </div>

            <!-- Builder Layout Grid -->
            <div class="builder-layout">
                <!-- Selection Panel -->
                <div class="builder-selection-panel">
                    <!-- Step 1: Vessels -->
                    <div class="step-content active" data-step-content="1">
                        <h4 style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-primary); letter-spacing: 0.1em; text-transform: uppercase;">Step 1: Choose Your Heirloom Presentation Vessel</h4>
                        <p style="font-size: 0.85rem; color: var(--color-charcoal-muted); margin-top: 0.3rem;">Every Gulbani curation begins with a permanent artisanal collectible that outlives the occasion.</p>

                        <div class="builder-options-grid">
                            @foreach($builder_options['vessels'] as $vessel)
                                <div class="option-selectable option-vessel" data-id="{{ $vessel['id'] }}" data-name="{{ $vessel['name'] }}" data-price="{{ $vessel['price'] }}" data-image="{{ $vessel['image'] }}">
                                    <img src="{{ $base_url }}/{{ $vessel['image'] }}" class="option-thumb" alt="{{ $vessel['name'] }}">
                                    <h5 class="option-title">{{ $vessel['name'] }}</h5>
                                    <div class="option-price">₹{{ number_format($vessel['price']) }}</div>
                                    <p class="option-desc">{{ $vessel['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Step 2: Gourmet Items -->
                    <div class="step-content" data-step-content="2">
                        <h4 style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-primary); letter-spacing: 0.1em; text-transform: uppercase;">Step 2: Add Artisanal Delicacies & Keepsakes</h4>
                        <p style="font-size: 0.85rem; color: var(--color-charcoal-muted); margin-top: 0.3rem;">Select multiple items to fill your vessel with gourmet treats, sacred tokens, or scented treasures.</p>

                        <div class="builder-options-grid">
                            @foreach($builder_options['items'] as $item)
                                <div class="option-selectable option-item" data-id="{{ $item['id'] }}" data-name="{{ $item['name'] }}" data-price="{{ $item['price'] }}">
                                    <h5 class="option-title">{{ $item['name'] }}</h5>
                                    <div class="option-price">+ ₹{{ number_format($item['price']) }}</div>
                                    <p class="option-desc">{{ $item['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Step 3: Ribbons & Personalization -->
                    <div class="step-content" data-step-content="3">
                        <h4 style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-primary); letter-spacing: 0.1em; text-transform: uppercase;">Step 3: Signature Ribbons & Personalization</h4>
                        <p style="font-size: 0.85rem; color: var(--color-charcoal-muted); margin-top: 0.3rem;">The hallmark Gulbani finish: jacquard silk ribbons, foil calligraphy, and brass monogram seals.</p>

                        <h5 style="font-family: var(--font-sans); font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin: 1.2rem 0 0.6rem; color: var(--color-charcoal);">Select Signature Ribbon:</h5>
                        <div class="builder-options-grid" style="grid-template-columns: repeat(2, 1fr);">
                            @foreach($builder_options['ribbons'] as $ribbon)
                                <div class="option-selectable option-ribbon" data-id="{{ $ribbon['id'] }}" data-name="{{ $ribbon['name'] }}" data-price="{{ $ribbon['price'] }}">
                                    <div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.4rem;">
                                        <span style="width: 20px; height: 20px; border-radius: 50%; background-color: {{ $ribbon['color'] }}; border: 1px solid #ccc; display: inline-block;"></span>
                                        <h5 class="option-title" style="margin: 0; font-size: 1rem;">{{ $ribbon['name'] }}</h5>
                                    </div>
                                    <div class="option-price">+ ₹{{ number_format($ribbon['price']) }}</div>
                                </div>
                            @endforeach
                        </div>

                        <h5 style="font-family: var(--font-sans); font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin: 1.8rem 0 0.6rem; color: var(--color-charcoal);">Bespoke Personalizations:</h5>
                        <div class="builder-options-grid" style="grid-template-columns: repeat(2, 1fr);">
                            @foreach($builder_options['personalizations'] as $pers)
                                <div class="option-selectable option-pers" data-id="{{ $pers['id'] }}" data-name="{{ $pers['name'] }}" data-price="{{ $pers['price'] }}">
                                    <h5 class="option-title">{{ $pers['name'] }}</h5>
                                    <div class="option-price">+ ₹{{ number_format($pers['price']) }}</div>
                                    <p class="option-desc">{{ $pers['desc'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Builder Step Navigation Buttons -->
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--color-sand);">
                        <button type="button" class="btn btn-outline btn-sm" id="builderPrevBtn" style="display: none;">
                            ← Previous Step
                        </button>
                        <button type="button" class="btn btn-primary" id="builderNextBtn" style="margin-left: auto;">
                            Proceed to Next Step →
                        </button>
                    </div>
                </div>

                <!-- Live Summary Panel -->
                <div class="builder-summary-panel">
                    <div class="summary-card-inner">
                        <div class="summary-title">
                            <span>Your Custom Hamper</span>
                            <span style="font-size: 0.75rem; color: var(--color-gold-dark);">Live Preview</span>
                        </div>

                        <div class="summary-items-list" id="builderSummaryList">
                            <!-- Populated dynamically by main.js -->
                        </div>

                        <div class="summary-total-box">
                            <div class="total-row">
                                <span class="total-label">Estimated Value:</span>
                                <span class="total-value" id="builderGrandTotal">₹0</span>
                            </div>

                            <button type="button" class="btn btn-gold" id="builderWhatsAppOrder" style="width: 100%; margin-bottom: 0.8rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2Z"/></svg>
                                Request Quote via WhatsApp
                            </button>

                            <p style="font-size: 0.72rem; color: var(--color-charcoal-muted); text-align: center; line-height: 1.4;">
                                Bulk wedding & corporate rates available. Includes complimentary calligraphy note & protective packaging.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Gulbani Craft & Atelier Section -->
<section class="section section-bg-cream" id="atelierStory">
    <div class="container">
        <div class="atelier-grid">
            <div class="atelier-image-cluster">
                <img src="{{ $base_url }}/assets/images/packaging_bag.jpg" class="atelier-img-main" alt="Gulbani Luxury Packaging Bag">
                <img src="{{ $base_url }}/assets/images/hammered_tray.jpg" class="atelier-img-floating" alt="Artisan Hammered Tray Gulbani">
            </div>

            <div>
                <span class="section-pretitle" style="justify-content: flex-start;">Our Heritage & Craft</span>
                <h2 class="section-title" style="text-align: left;">Made to Be <em>Remembered</em></h2>
                <p style="font-size: 1.05rem; color: var(--color-charcoal-light); line-height: 1.8; margin-bottom: 1.5rem;">
                    Rooted in New Delhi, <strong>GULBANI</strong> was born from a desire to elevate Indian gifting beyond the transient. We collaborate directly with hereditary silversmiths, brass artisans of Moradabad, and Jaipur royal ceramicists to sculpt pieces that remain cherished heirlooms long after the confections are savored.
                </p>

                <div class="craft-point">
                    <span class="craft-point-num">01</span>
                    <div>
                        <h4 style="font-family: var(--font-heading); font-size: 0.95rem; text-transform: uppercase; color: var(--color-charcoal); margin-bottom: 0.2rem;">Heirloom Metalcraft & Wood</h4>
                        <p style="font-size: 0.85rem; color: var(--color-charcoal-muted);">Cast brass, hand-beaten silver platters, and seasoned teakwood that serve as lasting dining and living room centerpieces.</p>
                    </div>
                </div>

                <div class="craft-point">
                    <span class="craft-point-num">02</span>
                    <div>
                        <h4 style="font-family: var(--font-heading); font-size: 0.95rem; text-transform: uppercase; color: var(--color-charcoal); margin-bottom: 0.2rem;">The Art of the Ribbon</h4>
                        <p style="font-size: 0.85rem; color: var(--color-charcoal-muted);">Our double-faced burgundy silk ribbons are custom-woven with gold foil lettering, tied with sculptural precision.</p>
                    </div>
                </div>

                <div class="craft-point">
                    <span class="craft-point-num">03</span>
                    <div>
                        <h4 style="font-family: var(--font-heading); font-size: 0.95rem; text-transform: uppercase; color: var(--color-charcoal); margin-bottom: 0.2rem;">Pure Culinary Connoisseurship</h4>
                        <p style="font-size: 0.85rem; color: var(--color-charcoal-muted);">From edible 24k gold vark sweets to Iranian pistachios and single-origin saffron, every indulgence meets royal standards.</p>
                    </div>
                </div>

                <div style="margin-top: 2.5rem;">
                    <a href="{{ $base_url }}/?page=about" class="btn btn-outline">
                        Read Our Full Atelier Story
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Love / Society Testimonials -->
<section class="section section-bg-wine">
    <div class="container">
        <div class="section-header" style="color: var(--color-cream);">
            <span class="section-pretitle" style="color: var(--color-gold-light);">Patron Love</span>
            <h2 class="section-title" style="color: var(--color-cream);">Cherished by <em>Royal Hosts</em></h2>
            <p class="section-subtitle" style="color: rgba(250, 247, 242, 0.75);">Words from brides, families, and corporate patrons who trusted Gulbani with their milestone moments.</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">"Gulbani curated 400 brass hamper boxes for our daughter's destination wedding in Udaipur. Our guests were mesmerized — especially by the personalized calligraphy ribbons and antique brass finish. True high luxury."</p>
                <div class="testimonial-author">Mr. & Mrs. Singhania</div>
                <div class="testimonial-location">The Oberoi Udaivilas • New Delhi</div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">"For our newborn daughter Aria’s arrival, Gulbani designed the most breathtaking sage velvet trunks with miniature plush charms and wildflower honey. It set a new benchmark for baby welcome gifting."</p>
                <div class="testimonial-author">Dr. Tanya & Rohit Verma</div>
                <div class="testimonial-location">Greater Kailash, New Delhi</div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">"Our annual Diwali executive hampers for senior board members needed to exude discretion and quiet luxury. The silver elephant teak platters were an absolute masterstroke."</p>
                <div class="testimonial-author">Managing Director, Capital Partners</div>
                <div class="testimonial-location">Nariman Point, Mumbai</div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Live Feed Section (Replicating Screenshot) -->
@include('partials.instagram_feed')

<!-- Private Concierge Consultation Form Section -->
<section class="section section-bg-cream" id="consultation">
    <div class="container container-narrow">
        <div class="concierge-form-box">
            <div class="section-header" style="margin-bottom: 2rem;">
                <span class="section-pretitle">Private Consultation</span>
                <h2 class="section-title">Design Your <em>Bespoke Curation</em></h2>
                <p class="section-subtitle">Whether planning an opulent wedding favor suite, sacred Sundarkand boxes, or corporate VIP hampers, our concierge is at your service.</p>
            </div>

            <form id="consultationForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Your Full Name *</label>
                        <input type="text" name="client_name" class="form-control" placeholder="e.g. Radhika Kapoor" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Phone & WhatsApp Number *</label>
                        <input type="tel" name="phone" class="form-control" placeholder="e.g. +91 98765 43210" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Occasion / Celebration *</label>
                        <select name="occasion" class="form-control" required>
                            <option value="">Select Celebration</option>
                            <option value="Wedding Trousseau & Favors">Wedding Trousseau & Bridal Favors</option>
                            <option value="Sundarkand / Sacred Puja">Sundarkand / Sacred Religious Puja</option>
                            <option value="Diwali / Festive Hampers">Diwali & Festive Gifting</option>
                            <option value="Baby Welcome Announcement">Baby Welcome / Birth Announcement</option>
                            <option value="Corporate Executive Gifting">Corporate & VIP Executive Gifting</option>
                            <option value="Housewarming & Keepsakes">Housewarming / Homeware Keepsakes</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estimated Hamper Count & Budget *</label>
                        <select name="budget" class="form-control" required>
                            <option value="">Select Scale</option>
                            <option value="25 - 50 Hampers (₹5k - ₹8k per hamper)">25 - 50 Hampers (₹5k - ₹8k each)</option>
                            <option value="50 - 150 Hampers (₹7k - ₹12k per hamper)">50 - 150 Hampers (₹7k - ₹12k each)</option>
                            <option value="150+ Royal Wedding Scale (Custom Suite)">150+ Royal Wedding Scale (Custom Suite)</option>
                            <option value="Single Keepsake / Private Order">Single Keepsake / Private Order</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">Your Vision, Date & Customization Notes</label>
                        <textarea name="notes" class="form-control" placeholder="Tell us about the venue, color palette, custom monogram preferences, and required delivery date..."></textarea>
                    </div>

                    <div class="form-group full-width" style="margin-top: 1rem;">
                        <button type="submit" class="btn btn-gold btn-lg" style="width: 100%;">
                            <span>Request Private Concierge Consultation</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
