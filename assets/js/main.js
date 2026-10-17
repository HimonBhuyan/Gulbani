/**
 * GULBANI - Luxury Gifting Concierge
 * Client-Side Interactive Engine & Hamper Builder
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileNav();
    initFilterTabs();
    initQuickView();
    initInquiryDrawer();
    initHamperBuilder();
    initConsultationForm();
});

// Toast Notification System
function showToast(message, icon = '✨') {
    let container = document.querySelector('.toast-container');
    if (!container) {
        container = document.createElement('div');
        container.className = 'toast-container';
        document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.innerHTML = `<span>${icon}</span> <span>${message}</span>`;
    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(10px)';
        toast.style.transition = 'all 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 3500);
}

// Sticky Header Transition
function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

// Mobile Menu Toggle Drawer
function initMobileNav() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const drawer = document.getElementById('mobileNavDrawer');
    const backdrop = document.getElementById('mobileNavBackdrop');
    const closeBtn = document.getElementById('mobileDrawerClose');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    if (!toggle || !drawer) return;

    const openDrawer = () => {
        drawer.classList.add('active');
        if (backdrop) backdrop.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    const closeDrawer = () => {
        drawer.classList.remove('active');
        if (backdrop) backdrop.classList.remove('active');
        document.body.style.overflow = '';
    };

    toggle.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (backdrop) backdrop.addEventListener('click', closeDrawer);
    mobileLinks.forEach(link => link.addEventListener('click', closeDrawer));
}


// Collections Filter Tabs
function initFilterTabs() {
    const tabs = document.querySelectorAll('.filter-tab');
    const cards = document.querySelectorAll('.hamper-card');

    if (!tabs.length || !cards.length) return;

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filterValue = tab.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                    card.style.animation = 'fadeIn 0.4s ease';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

// Quick View Modal
function initQuickView() {
    const modal = document.getElementById('quickViewModal');
    const backdrop = document.getElementById('quickViewBackdrop');
    const closeBtn = document.getElementById('quickViewClose');
    const triggers = document.querySelectorAll('.btn-quick-view');

    if (!modal || !triggers.length) return;

    const closeModal = () => {
        modal.classList.remove('active');
        if (backdrop) backdrop.classList.remove('active');
    };

    triggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const productData = JSON.parse(btn.getAttribute('data-product'));
            
            document.getElementById('modalImage').src = productData.image;
            document.getElementById('modalCategory').textContent = productData.category_label || 'Curated Hamper';
            document.getElementById('modalBadge').textContent = productData.badge || 'Signature';
            document.getElementById('modalTitle').textContent = productData.name;
            document.getElementById('modalPrice').textContent = productData.price;
            document.getElementById('modalDesc').textContent = productData.description;
            document.getElementById('modalLead').textContent = productData.lead_time || '3 - 5 Days';
            document.getElementById('modalDims').textContent = productData.dimensions || 'Bespoke Sizing';

            const includesList = document.getElementById('modalIncludes');
            includesList.innerHTML = '';
            if (productData.includes && productData.includes.length) {
                productData.includes.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    includesList.appendChild(li);
                });
            }

            const waBtn = document.getElementById('modalWhatsAppBtn');
            if (waBtn) {
                const text = encodeURIComponent(`Hello Gulbani Concierge, I am interested in inquiring about *${productData.name}* (${productData.price}). Could you please share customization details and availability?`);
                waBtn.href = `https://wa.me/919876543210?text=${text}`;
            }

            const addDrawerBtn = document.getElementById('modalAddInquiryBtn');
            if (addDrawerBtn) {
                addDrawerBtn.onclick = () => {
                    addToInquiry(productData);
                    closeModal();
                };
            }

            modal.classList.add('active');
            if (backdrop) backdrop.classList.add('active');
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);
}

// Inquiry Drawer Management
let inquiryItems = JSON.parse(localStorage.getItem('gulbani_inquiry') || '[]');

function updateInquiryBadges() {
    const badges = document.querySelectorAll('.cart-badge');
    badges.forEach(b => {
        b.textContent = inquiryItems.length;
        b.style.display = inquiryItems.length > 0 ? 'flex' : 'none';
    });
}

function addToInquiry(product) {
    inquiryItems.push(product);
    localStorage.setItem('gulbani_inquiry', JSON.stringify(inquiryItems));
    updateInquiryBadges();
    renderInquiryDrawer();
    showToast(`"${product.name}" added to your curated wishlist!`);
    openInquiryDrawer();
}

function openInquiryDrawer() {
    const drawer = document.getElementById('inquiryDrawer');
    const backdrop = document.getElementById('inquiryBackdrop');
    if (drawer) drawer.classList.add('active');
    if (backdrop) backdrop.classList.add('active');
}

function closeInquiryDrawer() {
    const drawer = document.getElementById('inquiryDrawer');
    const backdrop = document.getElementById('inquiryBackdrop');
    if (drawer) drawer.classList.remove('active');
    if (backdrop) backdrop.classList.remove('active');
}

function renderInquiryDrawer() {
    const container = document.getElementById('drawerItemsList');
    const totalEl = document.getElementById('drawerTotalAmount');
    if (!container) return;

    if (inquiryItems.length === 0) {
        container.innerHTML = `
            <div style="text-align: center; padding: 3rem 1rem; color: #78716C;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem; color: #C5A059;">✨</div>
                <h4 style="font-family: 'Cinzel', serif; font-size: 1.1rem; margin-bottom: 0.5rem; color: #1C1917;">Your Inquiry is Empty</h4>
                <p style="font-size: 0.85rem;">Explore our royal curations or build your bespoke hamper to request a private concierge quote.</p>
            </div>
        `;
        if (totalEl) totalEl.textContent = '₹0';
        return;
    }

    let total = 0;
    container.innerHTML = inquiryItems.map((item, index) => {
        const priceNum = item.price_num || 0;
        total += priceNum;
        return `
            <div style="display: flex; gap: 1rem; padding: 1rem 0; border-bottom: 1px solid #EAE1D2; align-items: center;">
                <img src="${item.image || 'assets/images/hero_banner.jpg'}" style="width: 65px; height: 65px; object-fit: cover; border-radius: 4px; border: 1px solid #EAE1D2;">
                <div style="flex-grow: 1;">
                    <div style="font-size: 0.7rem; color: #8E6E34; text-transform: uppercase; font-weight: 600;">${item.category_label || 'Bespoke'}</div>
                    <div style="font-family: 'Cormorant Garamond', serif; font-size: 1.05rem; font-weight: 600; color: #1C1917; line-height: 1.2;">${item.name}</div>
                    <div style="font-size: 0.9rem; font-weight: 700; color: #5A1521; margin-top: 2px;">${item.price}</div>
                </div>
                <button onclick="removeFromInquiry(${index})" style="background: none; border: none; color: #78716C; cursor: pointer; padding: 0.5rem; font-size: 1.1rem;">✕</button>
            </div>
        `;
    }).join('');

    if (totalEl) totalEl.textContent = '₹' + total.toLocaleString('en-IN');
}

window.removeFromInquiry = function(index) {
    inquiryItems.splice(index, 1);
    localStorage.setItem('gulbani_inquiry', JSON.stringify(inquiryItems));
    updateInquiryBadges();
    renderInquiryDrawer();
};

function initInquiryDrawer() {
    const drawer = document.getElementById('inquiryDrawer');
    const backdrop = document.getElementById('inquiryBackdrop');
    const closeBtn = document.getElementById('inquiryDrawerClose');
    const triggers = document.querySelectorAll('.btn-inquiry-trigger');
    const sendWhatsAppBtn = document.getElementById('sendConsolidatedInquiry');

    triggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            renderInquiryDrawer();
            openInquiryDrawer();
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeInquiryDrawer);
    if (backdrop) backdrop.addEventListener('click', closeInquiryDrawer);

    if (sendWhatsAppBtn) {
        sendWhatsAppBtn.addEventListener('click', () => {
            if (inquiryItems.length === 0) {
                showToast('Please add items to your wishlist first.');
                return;
            }

            let msg = `*GULBANI CONCIERGE INQUIRY*\nGreetings, I would like to request a bespoke quotation for the following items:\n\n`;
            inquiryItems.forEach((item, i) => {
                msg += `${i + 1}. *${item.name}* (${item.price})\n`;
            });
            msg += `\nPlease let me know about bulk pricing, personalization timelines, and delivery to my location.`;

            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(msg)}`, '_blank');
        });
    }

    updateInquiryBadges();
}

// Interactive Hamper Concierge Builder
function initHamperBuilder() {
    const builderRoot = document.getElementById('hamperBuilderSection');
    if (!builderRoot) return;

    // State
    const state = {
        step: 1,
        vessel: null,
        items: [],
        ribbon: null,
        personalizations: []
    };

    // Elements
    const stepTabs = builderRoot.querySelectorAll('.step-item');
    const stepContents = builderRoot.querySelectorAll('.step-content');
    const vesselOptions = builderRoot.querySelectorAll('.option-vessel');
    const itemOptions = builderRoot.querySelectorAll('.option-item');
    const ribbonOptions = builderRoot.querySelectorAll('.option-ribbon');
    const persOptions = builderRoot.querySelectorAll('.option-pers');
    
    const summaryList = document.getElementById('builderSummaryList');
    const totalEl = document.getElementById('builderGrandTotal');
    const nextBtn = document.getElementById('builderNextBtn');
    const prevBtn = document.getElementById('builderPrevBtn');
    const waOrderBtn = document.getElementById('builderWhatsAppOrder');

    function switchStep(targetStep) {
        state.step = targetStep;
        stepTabs.forEach(t => {
            const stepNum = parseInt(t.getAttribute('data-step'));
            t.classList.toggle('active', stepNum === state.step);
        });
        stepContents.forEach(c => {
            const stepNum = parseInt(c.getAttribute('data-step-content'));
            c.classList.toggle('active', stepNum === state.step);
        });

        if (prevBtn) prevBtn.style.display = state.step > 1 ? 'inline-flex' : 'none';
        if (nextBtn) {
            nextBtn.textContent = state.step === 3 ? 'Complete Custom Hamper ✨' : 'Proceed to Next Step →';
        }
    }

    stepTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const stepNum = parseInt(tab.getAttribute('data-step'));
            switchStep(stepNum);
        });
    });

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            if (state.step > 1) switchStep(state.step - 1);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            if (state.step === 1 && !state.vessel) {
                showToast('Please select a luxury presentation vessel to continue.');
                return;
            }
            if (state.step < 3) {
                switchStep(state.step + 1);
            } else {
                // Done - trigger whatsapp or add to inquiry
                triggerCustomOrder();
            }
        });
    }

    // Step 1: Vessel Selection
    vesselOptions.forEach(opt => {
        opt.addEventListener('click', () => {
            vesselOptions.forEach(o => o.classList.remove('selected'));
            opt.classList.add('selected');
            state.vessel = {
                id: opt.getAttribute('data-id'),
                name: opt.getAttribute('data-name'),
                price: parseInt(opt.getAttribute('data-price')),
                image: opt.getAttribute('data-image')
            };
            updateSummary();
            showToast(`Selected: ${state.vessel.name}`);
        });
    });

    // Step 2: Items Selection (Multi-select)
    itemOptions.forEach(opt => {
        opt.addEventListener('click', () => {
            const id = opt.getAttribute('data-id');
            const name = opt.getAttribute('data-name');
            const price = parseInt(opt.getAttribute('data-price'));

            const existingIdx = state.items.findIndex(i => i.id === id);
            if (existingIdx > -1) {
                state.items.splice(existingIdx, 1);
                opt.classList.remove('selected');
            } else {
                state.items.push({ id, name, price });
                opt.classList.add('selected');
            }
            updateSummary();
        });
    });

    // Step 3: Ribbon Selection (Single)
    ribbonOptions.forEach(opt => {
        opt.addEventListener('click', () => {
            ribbonOptions.forEach(o => o.classList.remove('selected'));
            opt.classList.add('selected');
            state.ribbon = {
                id: opt.getAttribute('data-id'),
                name: opt.getAttribute('data-name'),
                price: parseInt(opt.getAttribute('data-price'))
            };
            updateSummary();
        });
    });

    // Step 3: Personalization (Multi-select)
    persOptions.forEach(opt => {
        opt.addEventListener('click', () => {
            const id = opt.getAttribute('data-id');
            const name = opt.getAttribute('data-name');
            const price = parseInt(opt.getAttribute('data-price'));

            const existingIdx = state.personalizations.findIndex(p => p.id === id);
            if (existingIdx > -1) {
                state.personalizations.splice(existingIdx, 1);
                opt.classList.remove('selected');
            } else {
                state.personalizations.push({ id, name, price });
                opt.classList.add('selected');
            }
            updateSummary();
        });
    });

    function updateSummary() {
        if (!summaryList || !totalEl) return;

        let total = 0;
        let html = '';

        if (state.vessel) {
            total += state.vessel.price;
            html += `
                <div class="summary-line-item">
                    <div>
                        <span class="summary-line-category">1. Luxury Vessel</span>
                        <span class="summary-line-name">${state.vessel.name}</span>
                    </div>
                    <span class="summary-line-price">₹${state.vessel.price.toLocaleString('en-IN')}</span>
                </div>
            `;
        }

        if (state.items.length > 0) {
            state.items.forEach(item => {
                total += item.price;
                html += `
                    <div class="summary-line-item">
                        <div>
                            <span class="summary-line-category">2. Delicacy / Treasure</span>
                            <span class="summary-line-name">${item.name}</span>
                        </div>
                        <span class="summary-line-price">₹${item.price.toLocaleString('en-IN')}</span>
                    </div>
                `;
            });
        }

        if (state.ribbon) {
            total += state.ribbon.price;
            html += `
                <div class="summary-line-item">
                    <div>
                        <span class="summary-line-category">3. Silk Ribbon</span>
                        <span class="summary-line-name">${state.ribbon.name}</span>
                    </div>
                    <span class="summary-line-price">₹${state.ribbon.price.toLocaleString('en-IN')}</span>
                </div>
            `;
        }

        if (state.personalizations.length > 0) {
            state.personalizations.forEach(p => {
                total += p.price;
                html += `
                    <div class="summary-line-item">
                        <div>
                            <span class="summary-line-category">Personalization</span>
                            <span class="summary-line-name">${p.name}</span>
                        </div>
                        <span class="summary-line-price">₹${p.price.toLocaleString('en-IN')}</span>
                    </div>
                `;
            });
        }

        if (html === '') {
            html = `<p style="color: #78716C; font-size: 0.82rem; font-style: italic; text-align: center; padding: 2rem 0;">Select your vessel and curations to build your bespoke hamper...</p>`;
        }

        summaryList.innerHTML = html;
        totalEl.textContent = '₹' + total.toLocaleString('en-IN');
    }

    function triggerCustomOrder() {
        if (!state.vessel) {
            showToast('Please select a vessel first.');
            switchStep(1);
            return;
        }

        let total = state.vessel.price;
        state.items.forEach(i => total += i.price);
        if (state.ribbon) total += state.ribbon.price;
        state.personalizations.forEach(p => total += p.price);

        const customHamper = {
            id: 'custom-' + Date.now(),
            name: `Bespoke Curated Hamper (${state.vessel.name})`,
            price: '₹' + total.toLocaleString('en-IN'),
            price_num: total,
            image: state.vessel.image,
            category_label: 'Custom Hamper Concierge',
            badge: 'Custom Curated',
            description: `Vessel: ${state.vessel.name} | Items: ${state.items.map(i => i.name).join(', ') || 'None'} | Ribbon: ${state.ribbon ? state.ribbon.name : 'Standard'}`,
            lead_time: '4 - 7 Days',
            dimensions: 'Custom'
        };

        addToInquiry(customHamper);
        showToast('Your custom hamper has been added to your inquiry drawer!');
    }

    if (waOrderBtn) {
        waOrderBtn.addEventListener('click', () => {
            if (!state.vessel) {
                showToast('Please configure your bespoke hamper first.');
                return;
            }

            let total = state.vessel.price;
            let msg = `*GULBANI BESPOKE HAMPER INQUIRY*\n`;
            msg += `• *Vessel:* ${state.vessel.name} (₹${state.vessel.price})\n`;
            
            if (state.items.length) {
                msg += `• *Curated Contents:*\n`;
                state.items.forEach(item => {
                    total += item.price;
                    msg += `  - ${item.name} (₹${item.price})\n`;
                });
            }

            if (state.ribbon) {
                total += state.ribbon.price;
                msg += `• *Ribbon:* ${state.ribbon.name} (₹${state.ribbon.price})\n`;
            }

            if (state.personalizations.length) {
                msg += `• *Personalizations:*\n`;
                state.personalizations.forEach(p => {
                    total += p.price;
                    msg += `  - ${p.name} (₹${p.price})\n`;
                });
            }

            msg += `\n*Estimated Total:* ₹${total.toLocaleString('en-IN')}\n`;
            msg += `Please confirm packaging lead time and custom calligraphy options.`;

            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(msg)}`, '_blank');
        });
    }

    // Default selection of first vessel for smooth onboarding
    if (vesselOptions.length > 0) {
        vesselOptions[0].click();
    }
}

// Consultation Form Submission
function initConsultationForm() {
    const form = document.getElementById('consultationForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = form.querySelector('[name="client_name"]').value;
        const occasion = form.querySelector('[name="occasion"]').value;
        const phone = form.querySelector('[name="phone"]').value;
        const budget = form.querySelector('[name="budget"]').value;
        const notes = form.querySelector('[name="notes"]').value;

        showToast(`Thank you, ${name}! Your consultation request has been received.`);
        
        // Open prefilled WhatsApp
        const waText = encodeURIComponent(
            `*NEW BESPOKE CONSULTATION REQUEST*\n` +
            `• *Name:* ${name}\n` +
            `• *Occasion:* ${occasion}\n` +
            `• *Phone:* ${phone}\n` +
            `• *Budget Range:* ${budget}\n` +
            `• *Vision & Requirements:* ${notes}\n`
        );
        setTimeout(() => {
            window.open(`https://wa.me/919876543210?text=${waText}`, '_blank');
            form.reset();
        }, 1200);
    });
}
