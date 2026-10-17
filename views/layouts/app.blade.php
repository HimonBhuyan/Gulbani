<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GULBANI | Luxury Gifting Concierge & Bespoke Hampers')</title>
    <meta name="description" content="@yield('meta_desc', 'GULBANI - Your luxury gifting concierge in New Delhi. Bespoke wedding favors, royal trousseau hampers, festive silver & brass keepsakes, baby announcement trunks.')">
    <meta name="keywords" content="luxury gifting delhi, bespoke wedding hampers, trousseau packing delhi, brass gifting, festive dry fruit hampers, baby announcement hampers india, gulbani creative co">
    <meta name="theme-color" content="#5A1521">

    <!-- OpenGraph / Social Sharing -->
    <meta property="og:title" content="GULBANI | Luxe • Curated • Unforgettable">
    <meta property="og:description" content="Your luxury gifting concierge. Bespoke Indian royal hampers, artisanal silver & brass keepsakes, personalized trousseau & festive curations.">
    <meta property="og:image" content="{{ $base_url }}/assets/images/hero_banner.jpg">
    <meta property="og:type" content="website">

    <!-- Favicon (Lotus Symbol) -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23C5A059'><path d='M12 2C12 2 9 6.5 9 10C9 12.21 10.34 14 12 14C13.66 14 15 12.21 15 10C15 6.5 12 2 12 2ZM5.5 10C5.5 10 3 13.5 3 16C3 17.66 4.34 19 6 19C7.38 19 8.5 18 8.88 16.75C7.24 15.5 6.13 13.3 5.5 10ZM18.5 10C17.87 13.3 16.76 15.5 15.12 16.75C15.5 18 16.62 19 18 19C19.66 19 21 17.66 21 16C21 13.5 18.5 10 18.5 10ZM12 15C10.5 15 8.5 16 7 18C7 18 9 21 12 21C15 21 17 18 17 18C15.5 16 13.5 15 12 15Z'/></svg>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap">
    <link rel="stylesheet" href="{{ $base_url }}/assets/css/style.css">
</head>
<body>

    <!-- Top Announcement Bar -->
    <aside class="announcement-bar">
        <div class="announcement-content">
            <span class="announcement-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                Complimentary Hand-Calligraphed Monograms & Luxury Wax Seals on All Curations
            </span>
            <span class="announcement-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z"/></svg>
                Pan-India White Glove Dispatch & Global Courier Services
            </span>
        </div>
    </aside>

    <!-- Main Navigation Header -->
    <header class="site-header">
        <div class="container">
            <div class="nav-wrapper">
                <!-- Mobile Menu Hamburger -->
                <button class="mobile-menu-toggle" aria-label="Toggle Navigation Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>

                <!-- Brand Logo (Matching Gulbani Instagram Identity) -->
                <a href="{{ $base_url }}/?page=home" class="brand-logo" id="headerLogo">
                    <svg class="brand-icon-lotus" viewBox="0 0 24 16">
                        <path d="M12 0C12 0 9 4.5 9 8C9 10.2 10.3 12 12 12C13.7 12 15 10.2 15 8C15 4.5 12 0 12 0ZM5.5 8C5.5 8 3 11 3 13.5C3 15.2 4.3 16 6 16C7.4 16 8.5 15.1 8.9 14C7.2 12.8 6.1 10.8 5.5 8ZM18.5 8C17.9 10.8 16.8 12.8 15.1 14C15.5 15.1 16.6 16 18 16C19.7 16 21 15.2 21 13.5C21 11 18.5 8 18.5 8Z"/>
                    </svg>
                    <span class="brand-title">GULBANI</span>
                    <span class="brand-subtitle">CREATIVE CO. • NEW DELHI</span>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav>
                    <ul class="nav-menu">
                        <li><a href="{{ $base_url }}/?page=home" class="nav-link {{ $current_page === 'home' ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ $base_url }}/?page=collections" class="nav-link {{ $current_page === 'collections' ? 'active' : '' }}">Curated Collections</a></li>
                        <li><a href="{{ $base_url }}/?page=builder" class="nav-link {{ $current_page === 'builder' ? 'active' : '' }}">Hamper Concierge</a></li>
                        <li><a href="{{ $base_url }}/?page=about" class="nav-link {{ $current_page === 'about' ? 'active' : '' }}">Our Atelier</a></li>
                        <li><a href="{{ $base_url }}/?page=contact" class="nav-link {{ $current_page === 'contact' ? 'active' : '' }}">Consultation</a></li>
                    </ul>
                </nav>

                <!-- Actions / Wishlist Drawer, Currency & CTA -->
                <div class="nav-actions">
                    <div class="currency-selector-wrapper">
                        <span style="font-size: 0.65rem; opacity: 0.85; text-transform: uppercase;">Cur:</span>
                        <select class="currency-dropdown" id="globalCurrencySelector" aria-label="Select Currency">
                            <option value="INR" selected>INR (₹)</option>
                            <option value="USD">USD ($)</option>
                            <option value="AED">AED (د.إ)</option>
                            <option value="GBP">GBP (£)</option>
                        </select>
                    </div>

                    <button class="btn-icon btn-inquiry-trigger" aria-label="View Hamper Inquiries" title="View Wishlist & Inquiries">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span class="cart-badge" style="display: none;">0</span>
                    </button>

                    <a href="{{ $base_url }}/?page=builder" class="btn btn-primary btn-sm" id="navBuildBtn">
                        <span>Bespoke Hamper</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav-backdrop" id="mobileNavBackdrop"></div>
    <div class="mobile-nav-drawer" id="mobileNavDrawer">
        <div class="mobile-drawer-header">
            <div class="brand-logo" style="align-items: flex-start;">
                <span class="brand-title" style="font-size: 1.4rem;">GULBANI</span>
                <span class="brand-subtitle" style="font-size: 0.52rem;">LUXURY GIFTING CONCIERGE</span>
            </div>
            <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close menu">✕</button>
        </div>
        <div class="mobile-drawer-body">
            <ul class="mobile-nav-list">
                <li><a href="{{ $base_url }}/?page=home" class="mobile-nav-link {{ $current_page === 'home' ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ $base_url }}/?page=collections" class="mobile-nav-link {{ $current_page === 'collections' ? 'active' : '' }}">Curated Collections</a></li>
                <li><a href="{{ $base_url }}/?page=builder" class="mobile-nav-link {{ $current_page === 'builder' ? 'active' : '' }}">Hamper Concierge</a></li>
                <li><a href="{{ $base_url }}/?page=about" class="mobile-nav-link {{ $current_page === 'about' ? 'active' : '' }}">Our Atelier & Heritage</a></li>
                <li><a href="{{ $base_url }}/?page=contact" class="mobile-nav-link {{ $current_page === 'contact' ? 'active' : '' }}">Private Consultation</a></li>
            </ul>

            <div class="mobile-drawer-cta">
                <a href="{{ $base_url }}/?page=builder" class="btn btn-primary" style="width: 100%; margin-bottom: 0.8rem;">
                    Build Custom Hamper
                </a>
                <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn btn-gold" style="width: 100%;">
                    WhatsApp Concierge
                </a>
            </div>

            <div class="mobile-drawer-footer">
                <p style="font-size: 0.8rem; color: var(--color-charcoal-muted); margin-bottom: 0.5rem;">New Delhi Atelier • Defence Colony</p>
                <a href="https://instagram.com/gulbani.india/" target="_blank" rel="noopener" style="color: var(--color-primary); font-weight: 600; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    @gulbani.india
                </a>
            </div>
        </div>
    </div>


    <!-- Main Content Injection -->
    <main>
        @yield('content')
    </main>

    <!-- Physical Sample Box Assurance Banner -->
    <section class="section" style="padding: 1rem 0 3rem;">
        <div class="container">
            <div class="sample-request-banner">
                <div class="sample-banner-icon">📦</div>
                <div class="sample-banner-text">
                    <h4>Planning a Curated Bulk Order of 30+ Units?</h4>
                    <p>Experience the texture of our velvet trunks, taste slow-roasted dry fruits, and inspect brass seals in person. We courier an unboxing prototype to your doorstep within 48 hours.</p>
                </div>
                <a href="https://wa.me/919876543210?text=Hello%20Gulbani,%20I%20am%20planning%20a%20bulk%20order%20of%2030+%20units%20and%20would%20like%20to%20request%20a%20physical%20sample%20box." target="_blank" rel="noopener" class="btn btn-gold btn-sm">
                    Request Sample Box
                </a>
            </div>
        </div>
    </section>

    <!-- Master Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top-grid">
                <!-- Brand Info -->
                <div class="footer-brand">
                    <h3>GULBANI</h3>
                    <p>Luxe • Curated • Unforgettable. Your private luxury gifting concierge based in New Delhi, crafting bespoke royal hampers, artisanal brass keepsakes, and heirloom celebrations.</p>
                    <div style="display: flex; gap: 1rem; align-items: center; margin-top: 1.2rem;">
                        <a href="https://instagram.com/gulbani.india/" target="_blank" rel="noopener" style="color: var(--color-gold-light); display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.85rem; font-weight: 600;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            @gulbani.india
                        </a>
                    </div>
                </div>

                <!-- Curations Column -->
                <div>
                    <h4 class="footer-col-title">Collections</h4>
                    <ul class="footer-links">
                        <li><a href="{{ $base_url }}/?page=collections&cat=weddings" class="footer-link">Weddings & Trousseau</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=festive" class="footer-link">Festive & Sundarkand</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=baby" class="footer-link">Baby & Milestones</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=keepsakes" class="footer-link">Artisanal Keepsakes</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=corporate" class="footer-link">Corporate Connoisseur</a></li>
                    </ul>
                </div>

                <!-- Concierge Column -->
                <div>
                    <h4 class="footer-col-title">Concierge</h4>
                    <ul class="footer-links">
                        <li><a href="{{ $base_url }}/?page=builder" class="footer-link">Build Your Hamper</a></li>
                        <li><a href="{{ $base_url }}/?page=about" class="footer-link">The Gulbani Craft</a></li>
                        <li><a href="{{ $base_url }}/?page=contact" class="footer-link">Book Studio Visit</a></li>
                        <li><a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="footer-link">WhatsApp Direct</a></li>
                        <li><a href="{{ $base_url }}/?page=contact" class="footer-link">Bulk Corporate Gifting</a></li>
                    </ul>
                </div>

                <!-- Newsletter & Atelier -->
                <div class="footer-newsletter">
                    <h4 class="footer-col-title">The Royal Gazette</h4>
                    <p>Subscribe for private preview catalogues, seasonal festival trunk shows, and artisanal invitations.</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault(); showToast('Thank you for subscribing to The Royal Gazette.'); this.reset();">
                        <input type="email" class="newsletter-input" placeholder="Your email address..." required>
                        <button type="submit" class="btn btn-gold btn-sm">Join</button>
                    </form>
                    <div style="margin-top: 1.5rem; font-size: 0.8rem; color: rgba(250, 247, 242, 0.7);">
                        <strong>Atelier & Studio:</strong><br>
                        Defence Colony / South Extension II, New Delhi - 110024
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div>&copy; {{ date('Y') }} GULBANI CREATIVE CO. • All Rights Reserved • Made to be Remembered.</div>
                <div>Handcrafted Luxury • Designed with Imperial Elegance</div>
            </div>
        </div>
    </footer>

    <!-- Inquiry / Wishlist Drawer -->
    <div class="drawer-backdrop" id="inquiryBackdrop"></div>
    <div class="inquiry-drawer" id="inquiryDrawer">
        <div class="drawer-header">
            <div>
                <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: var(--color-primary); letter-spacing: 0.1em; text-transform: uppercase;">Curated Inquiry Bag</h3>
                <span style="font-size: 0.72rem; color: var(--color-charcoal-muted); text-transform: uppercase; letter-spacing: 0.1em;">Private Concierge Quotation</span>
            </div>
            <button id="inquiryDrawerClose" style="background: none; border: none; font-size: 1.5rem; color: var(--color-charcoal); cursor: pointer; padding: 0.5rem;">✕</button>
        </div>
        <div class="drawer-body" id="drawerItemsList">
            <!-- Dynamically Rendered by JS -->
        </div>
        <div class="drawer-footer">
            <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 1.2rem;">
                <span style="font-family: var(--font-heading); font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Estimated Value:</span>
                <span id="drawerTotalAmount" style="font-family: var(--font-editorial); font-size: 1.7rem; font-weight: 700; color: var(--color-primary);">₹0</span>
            </div>
            <button id="sendConsolidatedInquiry" class="btn btn-gold" style="width: 100%;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2Z"/></svg>
                Inquire on WhatsApp Concierge
            </button>
        </div>
    </div>

    <!-- Quick View Modal -->
    <div class="modal-backdrop" id="quickViewBackdrop"></div>
    <div class="modal-container" id="quickViewModal">
        <button class="modal-close-btn" id="quickViewClose" aria-label="Close modal">✕</button>
        <div class="modal-content-grid">
            <div class="modal-media">
                <img id="modalImage" src="" alt="Curated Hamper">
            </div>
            <div class="modal-details">
                <span id="modalBadge" class="card-badge" style="position: static; display: inline-block; margin-bottom: 0.8rem; align-self: flex-start;"></span>
                <span id="modalCategory" style="font-size: 0.72rem; color: var(--color-gold-dark); text-transform: uppercase; font-weight: 600; letter-spacing: 0.15em;"></span>
                <h3 id="modalTitle" style="font-family: var(--font-editorial); font-size: 1.85rem; font-weight: 600; line-height: 1.2; margin: 0.4rem 0 0.8rem; color: var(--color-charcoal);"></h3>
                <div id="modalPrice" style="font-family: var(--font-editorial); font-size: 1.8rem; font-weight: 700; color: var(--color-primary); margin-bottom: 1.2rem;"></div>
                <p id="modalDesc" style="font-size: 0.88rem; color: var(--color-charcoal-light); line-height: 1.6; margin-bottom: 1.5rem;"></p>

                <div style="margin-bottom: 1.5rem;">
                    <h5 style="font-family: var(--font-heading); font-size: 0.82rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--color-charcoal); margin-bottom: 0.6rem;">Hamper Contents:</h5>
                    <ul id="modalIncludes" style="padding-left: 1.2rem; font-size: 0.82rem; color: var(--color-charcoal-muted); line-height: 1.6;"></ul>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; padding: 0.9rem; background: var(--color-cream); border-radius: var(--radius-sm); margin-bottom: 1.8rem; font-size: 0.78rem;">
                    <div><strong>Dimensions:</strong> <span id="modalDims"></span></div>
                    <div><strong>Artisan Lead Time:</strong> <span id="modalLead"></span></div>
                </div>

                <div style="display: flex; gap: 0.8rem; margin-top: auto;">
                    <a id="modalWhatsAppBtn" href="#" target="_blank" class="btn btn-gold" style="flex: 1.2;">
                        WhatsApp Inquiry
                    </a>
                    <button id="modalAddInquiryBtn" class="btn btn-outline" style="flex: 1;">
                        Add to Wishlist
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Concierge Button -->
    <a href="https://wa.me/919876543210?text=Hello%20Gulbani%20Concierge,%20I%20would%20like%20to%20consult%20regarding%20bespoke%20gifting%20hampers." class="floating-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2ZM12.05 3.67C16.61 3.67 20.32 7.37 20.32 11.93C20.32 16.48 16.61 20.19 12.05 20.19C10.63 20.19 9.24 19.82 8.02 19.11L7.29 18.68L4.31 19.46L5.1 16.56L4.64 15.82C3.88 14.61 3.48 13.29 3.48 11.93C3.48 7.37 7.19 3.67 12.05 3.67Z"/>
        </svg>
        <span>Gifting Concierge</span>
    </a>

    <!-- Scripts -->
    <script src="{{ $base_url }}/assets/js/main.js"></script>
</body>
</html>
