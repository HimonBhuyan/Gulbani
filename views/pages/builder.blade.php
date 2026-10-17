@extends('layouts.app')

@section('title', 'Bespoke Hamper Concierge Builder | GULBANI')

@section('content')

<!-- Header Banner -->
<section style="background: linear-gradient(135deg, var(--color-primary-dark), #120A0B); color: var(--color-cream); padding: 4.5rem 0 3rem; text-align: center; border-bottom: 2px solid var(--color-gold);">
    <div class="container">
        <span class="section-pretitle" style="color: var(--color-gold-light);">Interactive Concierge Suite</span>
        <h1 style="font-family: var(--font-editorial); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 400; margin-bottom: 0.8rem; color: #FFFFFF;">
            Build Your <em>Bespoke Hamper</em>
        </h1>
        <p style="max-width: 650px; margin: 0 auto; font-size: 1rem; color: rgba(250, 247, 242, 0.8); line-height: 1.6;">
            Select your handcrafted heirloom vessel, pair it with royal gourmet sweets or aromatic treasures, and personalize with custom ribbon printing and brass monogram seals.
        </p>
    </div>
</section>

<!-- Interactive Builder Section -->
<section class="section section-bg-sand" id="hamperBuilderSection" style="padding: 4rem 0 6rem;">
    <div class="container">
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
                                Dedicated concierge stylist will review your customization, packaging lead times, and special calligraphy notes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
