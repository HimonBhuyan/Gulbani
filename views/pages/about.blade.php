@extends('layouts.app')

@section('title', 'Our Atelier & Heritage Craft | GULBANI Creative Co.')

@section('content')

<!-- Header Banner -->
<section style="background: linear-gradient(135deg, var(--color-primary-dark), #120A0B); color: var(--color-cream); padding: 5rem 0 3.5rem; text-align: center; border-bottom: 2px solid var(--color-gold);">
    <div class="container">
        <span class="section-pretitle" style="color: var(--color-gold-light);">The Gulbani Philosophy</span>
        <h1 style="font-family: var(--font-editorial); font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 400; margin-bottom: 1rem; color: #FFFFFF;">
            Made to Be <em>Remembered</em>
        </h1>
        <p style="max-width: 680px; margin: 0 auto; font-size: 1.05rem; color: rgba(250, 247, 242, 0.85); line-height: 1.7;">
            Bridging India's imperial artistic lineages with contemporary quiet luxury. The story behind our New Delhi atelier and bespoke gifting concierge.
        </p>
    </div>
</section>

<!-- Atelier Philosophy & Images -->
<section class="section section-bg-cream">
    <div class="container">
        <div class="atelier-grid">
            <div>
                <span class="section-pretitle" style="justify-content: flex-start;">Our Genesis</span>
                <h2 class="section-title" style="text-align: left;">Reviving the Art of <em>Imperial Gifting</em></h2>
                <p style="font-size: 1.05rem; color: var(--color-charcoal-light); line-height: 1.8; margin-bottom: 1.4rem;">
                    In an era of fleeting, mass-manufactured boxes, <strong>GULBANI</strong> was established in New Delhi as an antidote to the ordinary. Inspired by the lavish court gifting traditions of Mughal and Rajput royalty — where every gesture was accompanied by silver, brass, saffron, and fine calligraphy — we craft hampers that endure as heirlooms.
                </p>
                <p style="font-size: 0.95rem; color: var(--color-charcoal-muted); line-height: 1.8; margin-bottom: 1.8rem;">
                    Every single vessel in our collection is intended to occupy a place of honor in the recipient's home: whether as an antique brass jewelry chest, a silver elephant tea tray on a marble credenza, or an arched floral cloche gracing an anniversary dinner.
                </p>

                <div style="display: flex; gap: 2rem; margin-top: 2rem; border-top: 1px solid var(--color-sand); padding-top: 1.5rem;">
                    <div>
                        <div style="font-family: var(--font-editorial); font-size: 2.2rem; font-weight: 600; color: var(--color-primary);">100%</div>
                        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal-muted);">Indian Artisanal Craft</div>
                    </div>
                    <div>
                        <div style="font-family: var(--font-editorial); font-size: 2.2rem; font-weight: 600; color: var(--color-gold);">15+</div>
                        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal-muted);">Master Artisan Guilds</div>
                    </div>
                    <div>
                        <div style="font-family: var(--font-editorial); font-size: 2.2rem; font-weight: 600; color: var(--color-primary);">Delhi</div>
                        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal-muted);">Design & Styling Atelier</div>
                    </div>
                </div>
            </div>

            <div class="atelier-image-cluster">
                <img src="{{ $base_url }}/assets/images/silver_wood_platter.jpg" class="atelier-img-main" alt="Artisanal Silver and Teak Platter">
                <img src="{{ $base_url }}/assets/images/ceramic_pot.jpg" class="atelier-img-floating" alt="Hand-painted Mughal Urn">
            </div>
        </div>
    </div>
</section>

<!-- Three Pillars of Gulbani -->
<section class="section section-bg-sand">
    <div class="container">
        <div class="section-header">
            <span class="section-pretitle">The Gulbani Standard</span>
            <h2 class="section-title">Three Cornerstones of <em>Excellence</em></h2>
        </div>

        <div class="features-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div style="background: #FFFFFF; padding: 2.5rem; border-radius: var(--radius-md); border: 1px solid var(--color-sand); box-shadow: var(--shadow-sm);">
                <div style="font-family: var(--font-editorial); font-size: 2.4rem; color: var(--color-gold); font-weight: 600; margin-bottom: 0.8rem;">I</div>
                <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); margin-bottom: 0.8rem;">Artisanal Lineage</h3>
                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.7;">
                    We partner with third-generation metal beaters in Moradabad, silversmiths in Old Delhi, and miniature court painters in Rajasthan. Each vessel reflects hundreds of hours of patient hand hammering, chiseling, and polishing.
                </p>
            </div>

            <div style="background: #FFFFFF; padding: 2.5rem; border-radius: var(--radius-md); border: 1px solid var(--color-sand); box-shadow: var(--shadow-sm);">
                <div style="font-family: var(--font-editorial); font-size: 2.4rem; color: var(--color-gold); font-weight: 600; margin-bottom: 0.8rem;">II</div>
                <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); margin-bottom: 0.8rem;">Connoisseur Indulgences</h3>
                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.7;">
                    We source exclusively from heritage micro-batches: Persian Mamra almonds, saffron-infused gold-leaf mithai crafted in pure A2 ghee, single-origin Kashmiri Mongra saffron, and botanical essential oils.
                </p>
            </div>

            <div style="background: #FFFFFF; padding: 2.5rem; border-radius: var(--radius-md); border: 1px solid var(--color-sand); box-shadow: var(--shadow-sm);">
                <div style="font-family: var(--font-editorial); font-size: 2.4rem; color: var(--color-gold); font-weight: 600; margin-bottom: 0.8rem;">III</div>
                <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); margin-bottom: 0.8rem;">The Couture Finish</h3>
                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.7;">
                    Packaging is our signature hallmark. Heavy champagne metallic craft bags, hand-wax seals pressed with custom couple monograms, and silk grosgrain ribbons tied to architectural perfection.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Bespoke Consultation CTA -->
<section class="section section-bg-wine" style="text-align: center;">
    <div class="container container-narrow">
        <span class="section-pretitle" style="color: var(--color-gold-light);">Bespoke Gifting Concierge</span>
        <h2 class="section-title" style="color: #FFFFFF; margin-bottom: 1.2rem;">Planning a Grand <em>Celebration?</em></h2>
        <p style="color: rgba(250, 247, 242, 0.85); font-size: 1.05rem; line-height: 1.8; margin-bottom: 2.5rem;">
            From royal destination weddings to corporate milestone celebrations, we tailor heirloom hampers and courier unboxing prototypes directly to your doorstep.
        </p>
        <div style="display: flex; justify-content: center; gap: 1.2rem; flex-wrap: wrap;">
            <a href="{{ $base_url }}/?page=contact" class="btn btn-gold btn-lg">Request a Proposal</a>
            <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn btn-outline-white btn-lg">WhatsApp Concierge</a>
        </div>
    </div>
</section>

@endsection
