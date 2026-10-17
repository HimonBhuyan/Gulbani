<div class="hamper-card" data-category="{{ $product['category'] }}" id="hamper-{{ $product['id'] }}">
    <div class="card-media-wrapper">
        <img class="card-media-img" src="{{ $base_url }}/{{ $product['image'] }}" alt="{{ $product['name'] }}" loading="lazy">
        <span class="card-badge">{{ $product['badge'] }}</span>
        
        <div class="card-quick-actions">
            <button class="btn-quick-view" data-product="{{ htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') }}">
                Quick View & Details
            </button>
        </div>
    </div>

    <div class="card-body">
        <span class="card-category">{{ $product['category_label'] }}</span>
        <h3 class="card-title">
            <a href="javascript:void(0);" class="btn-quick-view" data-product="{{ htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') }}">
                {{ $product['name'] }}
            </a>
        </h3>
        <p class="card-tagline">{{ $product['tagline'] }}</p>

        <div class="card-footer">
            <div class="card-price-block">
                <span class="card-price-label">Concierge Curation</span>
                <span class="card-price">{{ $product['price'] }}</span>
            </div>

            <div class="card-actions-row">
                <button class="btn-icon" onclick='addToInquiry({{ json_encode($product) }})' title="Add to Wishlist & Inquiry Bag">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </button>
                <a href="https://wa.me/919876543210?text={{ urlencode('Hello Gulbani Concierge, I would like to inquire about ' . $product['name'] . ' (' . $product['price'] . ').') }}" target="_blank" class="btn btn-primary btn-sm">
                    Inquire
                </a>
            </div>
        </div>
    </div>
</div>
