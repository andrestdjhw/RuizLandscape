<?php
/**
 * Template Name: Services
 * Template Post Type: page
 *
 * SEO (configúralo en tu plugin de SEO / Yoast / Rank Math):
 *   Title:       Landscaping Services in Orange County, CA | Ruiz Landscape Service
 *   Description: Full-service eco-conscious landscaping: design & installation, lawn care, tree
 *                care, irrigation, synthetic turf, large trees & lighting. Serving Southern California.
 *   Keywords:    landscaping services Orange County, landscape design and installation Irvine,
 *                lawn care service Orange County, eco-friendly landscaping services California
 */

/* ══════════════════════════════════════════════
   IMÁGENES DE LA PÁGINA
   Pega las URL de la Biblioteca de Medios (Medios → "File URL").
   Deja '' y ese bloque simplemente no muestra foto.
══════════════════════════════════════════════ */
$rls_images = array(
  'hero-bg' => '/wp-content/uploads/2026/06/RuizLandscape-scaled.jpg', // fondo del hero
);

/* ══════════════════════════════════════════════
   LOS 7 SERVICIOS
   El ícono es un SVG de línea (hereda el color con currentColor).
══════════════════════════════════════════════ */
$rls_services = array(
  array(
    'title' => 'Landscape Design &amp; Installation',
    'desc'  => 'Lush gardens, water-wise outdoor living spaces, and sustainable designs brought to life with creativity and expertise.',
    'href'  => '/services/landscape-design-installation',
    'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>',
  ),
  array(
    'title' => 'Lawn Care &amp; Maintenance',
    'desc'  => 'Mowing, fertilization, weed control, and seasonal upkeep that protect your investment year-round.',
    'href'  => '/services/lawn-care-maintenance',
    'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20V9"/><path d="M12 13c0-3 1.5-5 4-6-.5 3-2 5-4 6z"/><path d="M12 14c0-3-1.5-5-4-6 .5 3 2 5 4 6z"/><path d="M4 20h16"/></svg>',
  ),
  array(
    'title' => 'Tree &amp; Shrub Care',
    'desc'  => 'Pruning, trimming, disease management, and removal to keep your plants healthy and thriving.',
    'href'  => '/services/tree-shrub-care',
    'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-6"/><path d="M9 9a3 3 0 1 1 6 0 3 3 0 0 1 2.5 4.7A3 3 0 0 1 15 18H9a3 3 0 0 1-1.5-4.3A3 3 0 0 1 9 9z"/></svg>',
  ),
  array(
    'title' => 'Irrigation Systems',
    'desc'  => 'Water-wise irrigation that conserves water while keeping your landscape lush and healthy.',
    'href'  => '/services/irrigation-systems',
    'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5S12.5 4 12 2c-.5 2-2 4-4 7.5S5 13 5 15a7 7 0 0 0 7 7z"/></svg>',
  ),
  array(
    'title' => 'Synthetic Turf',
    'desc'  => 'A pristine, low-maintenance, water-saving lawn — perfect for pets, kids, and water-conscious homeowners.',
    'href'  => '/services/synthetic-turf',
    'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3 9 5-9 5-9-5 9-5z"/><path d="m3 13 9 5 9-5"/></svg>',
  ),
  array(
    'title' => 'Large Tree Installation',
    'desc'  => 'Mature shade trees and specimens selected and installed with precision and care.',
    'href'  => '/services/large-tree-installation',
    'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22v-9"/><path d="M7 13 12 5l5 8z"/><path d="M5 17 12 9l7 8z"/></svg>',
  ),
  array(
    'title' => 'Low Voltage Lighting',
    'desc'  => 'Energy-efficient lighting that accentuates your home, extends your evenings, and adds curb appeal.',
    'href'  => '/services/low-voltage-lighting',
    'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4"/><path d="M15.1 14c.2-1 .6-1.7 1.4-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.8.8 1.2 1.5 1.4 2.5z"/></svg>',
  ),
);

get_header(); ?>

<!-- ══════════════════════════════════════════════
     JSON-LD SCHEMA
══════════════════════════════════════════════ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://www.ruizlandscape.com/services/#collectionpage",
      "url": "https://www.ruizlandscape.com/services",
      "name": "Landscaping Services in Orange County, CA",
      "description": "Full-service eco-conscious landscaping: design & installation, lawn care, tree care, irrigation, synthetic turf, large trees & lighting. Serving Southern California.",
      "about": { "@id": "https://www.ruizlandscape.com/#org" }
    },
    {
      "@type": "Organization",
      "@id": "https://www.ruizlandscape.com/#org",
      "name": "Ruiz Landscape Service, Inc.",
      "url": "https://www.ruizlandscape.com",
      "telephone": "+1-949-305-1605",
      "email": "office@RuizLandscape.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "6 McLaren, Suite H",
        "addressLocality": "Irvine",
        "addressRegion": "CA",
        "postalCode": "92618",
        "addressCountry": "US"
      },
      "areaServed": ["Orange County", "Los Angeles County", "Imperial County"]
    },
    {
      "@type": "ItemList",
      "@id": "https://www.ruizlandscape.com/services/#servicelist",
      "name": "Landscaping Services",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Landscape Design & Installation", "url": "https://www.ruizlandscape.com/services/landscape-design-installation" },
        { "@type": "ListItem", "position": 2, "name": "Lawn Care & Maintenance", "url": "https://www.ruizlandscape.com/services/lawn-care-maintenance" },
        { "@type": "ListItem", "position": 3, "name": "Tree & Shrub Care", "url": "https://www.ruizlandscape.com/services/tree-shrub-care" },
        { "@type": "ListItem", "position": 4, "name": "Irrigation Systems", "url": "https://www.ruizlandscape.com/services/irrigation-systems" },
        { "@type": "ListItem", "position": 5, "name": "Synthetic Turf", "url": "https://www.ruizlandscape.com/services/synthetic-turf" },
        { "@type": "ListItem", "position": 6, "name": "Large Tree Installation", "url": "https://www.ruizlandscape.com/services/large-tree-installation" },
        { "@type": "ListItem", "position": 7, "name": "Low Voltage Lighting", "url": "https://www.ruizlandscape.com/services/low-voltage-lighting" }
      ]
    }
  ]
}
</script>

<main id="rl-services">
<script>
/* Activa el modo reveal antes de pintar las secciones (sin parpadeo).
   Si el usuario prefiere movimiento reducido, no se activa. */
(function () {
  try {
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduce) document.getElementById('rl-services').classList.add('rl-reveal-on');
  } catch (e) {}
})();
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap');

/* ── Offset por el navbar fijo ── */
body { padding-top: 104px !important; }

/* ── Base scope ── */
#rl-services {
  /* ══ PALETA (basada en el logo) ════════════════
     Cambia un valor aquí y se actualiza toda la página. */
  --rl-green:        #3d5a2a;   /* verde principal · alterno del logo (Turf Green): #237756 */
  --rl-green-dark:   #1a2410;   /* verde casi negro — fondos oscuros y texto display */
  --rl-green-mid:    #4a6e32;   /* verde medio — eyebrows y divisor sobre oscuro */
  --rl-green-light:  #8fb870;   /* verde claro — acentos sobre fondos oscuros */

  --rl-accent:       #996a6c;   /* CAFÉ (Smoky Rose) — reemplaza al dorado */
  --rl-accent-rgb:   153, 106, 108;
  --rl-accent-hover: #ab7d7f;   /* café un poco más claro para hovers */
  --rl-on-accent:    #ffffff;   /* texto sobre el café (botones sólidos) */

  --rl-cream:        #f4f1ea;   /* fondo crema de secciones claras */

  font-family: 'Montserrat', sans-serif;
  color: #2a2a20;
  overflow-x: hidden;
}

/* ── Utilidades compartidas (scopeadas a #rl-services) ── */
#rl-services .rls-section { padding: 96px 0; }
#rl-services .rls-container {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 32px;
  width: 100%;
}

#rl-services .rl-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--rl-green-mid);
  margin-bottom: 16px;
}
#rl-services .rl-eyebrow::before {
  content: '';
  width: 24px;
  height: 2px;
  background: var(--rl-accent);
}

#rl-services .rl-h2 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(23px, 2.8vw, 34px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.08;
  color: var(--rl-green-dark);
}

#rl-services .rl-body-text {
  font-size: 16px;
  line-height: 1.75;
  color: #4a4a3a;
}

#rl-services .rl-divider {
  width: 48px;
  height: 3px;
  background: var(--rl-accent);
  margin: 20px 0;
}

#rl-services .rl-btn-primary,
#rl-services .rl-btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: 'Montserrat', sans-serif;
  font-size: 12.5px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 15px 28px;
  text-decoration: none;
  border: 2px solid var(--rl-green);
  transition: background 0.18s, color 0.18s;
}
#rl-services .rl-btn-primary { background: var(--rl-green); color: #fff; }
#rl-services .rl-btn-primary:hover { background: transparent; color: var(--rl-green); }
#rl-services .rl-btn-secondary { background: transparent; color: var(--rl-green); }
#rl-services .rl-btn-secondary:hover { background: var(--rl-green); color: #fff; }

/* Cabeceras centradas */
#rl-services .rls-head { text-align: center; margin-bottom: 56px; }
#rl-services .rls-head .rl-eyebrow { justify-content: center; }
#rl-services .rls-head .rl-divider { margin: 20px auto 0; }

/* ══ SECTION 1 — HERO ══════════════════════════ */
#rl-services .rls-hero {
  position: relative;
  min-height: 58vh;
  display: flex;
  align-items: center;
  background-color: var(--rl-green-dark);
  overflow: hidden;
}
#rl-services .rls-hero-bg {
  position: absolute;
  inset: 0;
  background-image: url('<?php echo esc_url( $rls_images['hero-bg'] ); ?>');
  background-size: cover;
  background-position: center;
}
#rl-services .rls-hero-overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(20,32,10,0.58) 0%, rgba(20,32,10,0.78) 100%),
    radial-gradient(120% 90% at 50% 40%, rgba(20,32,10,0.35) 0%, rgba(20,32,10,0.84) 100%);
}
#rl-services .rls-hero-content {
  position: relative;
  z-index: 2;
  max-width: 880px;
  margin: 0 auto;
  padding: 88px 32px;
  text-align: center;
}
#rl-services .rls-hero-content .rl-eyebrow { color: var(--rl-accent); justify-content: center; }
#rl-services .rls-hero h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(27px, 4vw, 46px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.01em;
  line-height: 1.05;
  color: #ffffff;
  margin-bottom: 22px;
}
#rl-services .rls-hero h1 span { color: var(--rl-green-light); }
#rl-services .rls-hero-sub {
  font-size: clamp(15px, 1.7vw, 17.5px);
  line-height: 1.7;
  color: rgba(255,255,255,0.78);
  max-width: 720px;
  margin: 0 auto;
}

/* ══ SECTION 2 — SERVICE CARDS ═════════════════ */
#rl-services .rls-cards { background: #ffffff; }
#rl-services .rls-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
#rl-services .rls-card {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  background: #ffffff;
  border: 1px solid #e7e3d8;
  border-top: 3px solid var(--rl-accent);
  border-radius: 4px;
  padding: 34px 30px 30px;
  text-decoration: none;
  transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
}
#rl-services .rls-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 18px 40px -18px rgba(26,36,16,0.35);
  border-color: #ddd6c7;
}
#rl-services .rls-card-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: var(--rl-cream);
  color: var(--rl-green);
  margin-bottom: 20px;
  transition: background 0.22s ease, color 0.22s ease;
}
#rl-services .rls-card-icon svg { width: 26px; height: 26px; }
#rl-services .rls-card:hover .rls-card-icon {
  background: var(--rl-green);
  color: #fff;
}
#rl-services .rls-card h3 {
  font-family: 'Montserrat', sans-serif;
  font-size: 22px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.15;
  color: var(--rl-green-dark);
  margin-bottom: 12px;
}
#rl-services .rls-card p {
  font-size: 14.5px;
  line-height: 1.65;
  color: #5a5a48;
  margin-bottom: 22px;
  flex-grow: 1;
}
#rl-services .rls-card-more {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--rl-accent);
}
#rl-services .rls-card-more svg {
  width: 15px; height: 15px;
  transition: transform 0.2s ease;
}
#rl-services .rls-card:hover .rls-card-more { color: var(--rl-accent-hover); }
#rl-services .rls-card:hover .rls-card-more svg { transform: translateX(4px); }

/* ══ SECTION 3 — HOW SERVICES WORK TOGETHER ════ */
#rl-services .rls-together { background: var(--rl-cream); }
#rl-services .rls-together-inner {
  max-width: 820px;
  margin: 0 auto;
  text-align: center;
}
#rl-services .rls-together .rl-eyebrow { justify-content: center; }
#rl-services .rls-together .rl-h2 { margin-bottom: 8px; }
#rl-services .rls-together .rl-divider { margin: 22px auto 26px; }
#rl-services .rls-together .rl-body-text { font-size: 16.5px; }

/* ══ SECTION 4 — FINAL CTA ═════════════════════ */
#rl-services .rls-cta {
  background: var(--rl-green);
  position: relative;
  overflow: hidden;
}
#rl-services .rls-cta-bg {
  position: absolute;
  inset: 0;
  background-image: radial-gradient(circle at 20% 50%, rgba(var(--rl-accent-rgb),0.08) 0%, transparent 55%),
                    radial-gradient(circle at 82% 50%, rgba(var(--rl-accent-rgb),0.08) 0%, transparent 55%);
  pointer-events: none;
}
#rl-services .rls-cta-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 92px 32px;
  max-width: 720px;
  margin: 0 auto;
}
#rl-services .rls-cta .rl-eyebrow { justify-content: center; color: var(--rl-green-light); }
#rl-services .rls-cta .rl-eyebrow::before { background: var(--rl-accent); }
#rl-services .rls-cta .rl-h2 { color: #ffffff; margin-bottom: 18px; }
#rl-services .rls-cta .rl-body-text { color: rgba(255,255,255,0.78); max-width: 560px; margin: 0 auto 36px; }
#rl-services .rls-cta-btns { display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; }
#rl-services .rls-cta .rl-btn-primary { background: var(--rl-accent); border-color: var(--rl-accent); color: var(--rl-on-accent); }
#rl-services .rls-cta .rl-btn-primary:hover { background: var(--rl-accent-hover); border-color: var(--rl-accent-hover); color: var(--rl-on-accent); }
#rl-services .rls-cta .rl-btn-secondary { border-color: rgba(255,255,255,0.4); color: rgba(255,255,255,0.85); }
#rl-services .rls-cta .rl-btn-secondary:hover { background: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.7); }

/* ══ RESPONSIVE ════════════════════════════════ */
@media (max-width: 980px) {
  #rl-services .rls-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 620px) {
  #rl-services .rls-section { padding: 68px 0; }
  #rl-services .rls-grid { grid-template-columns: 1fr; }
  #rl-services .rls-cta-inner { padding: 72px 24px; }
}

/* ══ SCROLL REVEAL ═════════════════════════════
   Activo solo con .rl-reveal-on (lo pone el JS) y sin movimiento reducido.
══════════════════════════════════════════════ */
@media (prefers-reduced-motion: no-preference) {
  #rl-services.rl-reveal-on .rls-reveal {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity 0.7s cubic-bezier(0.16, 0.84, 0.34, 1),
                transform 0.7s cubic-bezier(0.16, 0.84, 0.34, 1);
  }
  #rl-services.rl-reveal-on .rls-reveal.rl-in {
    opacity: 1;
    transform: none;
  }
}
</style>


<!-- ══════════════════════════════════════════════
     SECTION 1 — HERO
══════════════════════════════════════════════ -->
<section class="rls-hero">
  <div class="rls-hero-bg"></div>
  <div class="rls-hero-overlay"></div>
  <div class="rls-hero-content">
    <span class="rl-eyebrow rls-reveal">Our Services</span>
    <h1 class="rls-reveal">Everything your landscape needs,<br><span>from one trusted team.</span></h1>
    <p class="rls-hero-sub rls-reveal">
      Great outdoor spaces are designed, built, and cared for over time. Ruiz Landscape offers
      seven services so the same family-owned team can take your property from the first design
      sketch to lasting, sustainable care.
    </p>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 2 — SERVICE CARDS (7)
══════════════════════════════════════════════ -->
<section class="rls-section rls-cards">
  <div class="rls-container">
    <div class="rls-head">
      <span class="rl-eyebrow rls-reveal">What We Do</span>
      <h2 class="rl-h2 rls-reveal">Seven services, one accountable partner.</h2>
      <div class="rl-divider rls-reveal"></div>
    </div>

    <div class="rls-grid">
      <?php foreach ( $rls_services as $svc ) : ?>
        <a href="<?php echo esc_url( $svc['href'] ); ?>" class="rls-card rls-reveal">
          <span class="rls-card-icon"><?php echo $svc['icon']; ?></span>
          <h3><?php echo $svc['title']; ?></h3>
          <p><?php echo esc_html( $svc['desc'] ); ?></p>
          <span class="rls-card-more">
            Learn more
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 3 — HOW SERVICES WORK TOGETHER
══════════════════════════════════════════════ -->
<section class="rls-section rls-together">
  <div class="rls-container">
    <div class="rls-together-inner">
      <span class="rl-eyebrow rls-reveal">One Team, One Relationship</span>
      <h2 class="rl-h2 rls-reveal">Most homes need more than one. We deliver them as one relationship.</h2>
      <div class="rl-divider rls-reveal"></div>
      <p class="rl-body-text rls-reveal">
        A landscape rarely needs just one service. A new design needs irrigation and lighting;
        an installed garden needs ongoing care; a water-wise renovation might combine
        drought-tolerant planting, efficient irrigation, and synthetic turf. Bringing the whole
        property under one trusted, family-owned team removes coordination headaches and gives
        you one accountable partner for the life of your landscape.
      </p>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 4 — FINAL CTA
══════════════════════════════════════════════ -->
<section class="rls-cta">
  <div class="rls-cta-bg"></div>
  <div class="rls-cta-inner rls-reveal">
    <span class="rl-eyebrow">Let's Talk</span>
    <h2 class="rl-h2">Not sure where to start? Let's talk.</h2>
    <p class="rl-body-text">
      Whether you need a full design or a single service, we'll build a plan around your property
      and your goals. Schedule a free consultation to get started.
    </p>
    <div class="rls-cta-btns">
      <a href="/contact" class="rl-btn-primary">
        Schedule a Free Consultation
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="tel:9493051605" class="rl-btn-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Call: 949-305-1605
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SCROLL REVEAL — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-services');
  if (!root || !root.classList.contains('rl-reveal-on')) return;

  var targets = Array.prototype.slice.call(root.querySelectorAll('.rls-reveal'));
  if (!targets.length) return;

  function revealAll() { targets.forEach(function (el) { el.classList.add('rl-in'); }); }
  if (!('IntersectionObserver' in window)) { revealAll(); return; }

  try {
    // Escalonado según la posición entre hermanos que también se animan
    targets.forEach(function (el) {
      var i = 0, sib = el.previousElementSibling;
      while (sib) {
        if (sib.matches && sib.matches('.rls-reveal')) i++;
        sib = sib.previousElementSibling;
      }
      el._d = Math.min(i, 6) * 90;
    });

    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        el.style.transitionDelay = el._d + 'ms';
        el.classList.add('rl-in');
        el.addEventListener('transitionend', function clear() {
          el.style.transitionDelay = '';
          el.removeEventListener('transitionend', clear);
        });
        obs.unobserve(el);
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

    targets.forEach(function (el) { obs.observe(el); });
  } catch (e) {
    revealAll();
  }
})();
</script>

<?php get_footer(); ?>