<?php
/**
 * Template Name: Gallery
 * Template Post Type: page
 *
 * SEO (configúralo en tu plugin de SEO / Yoast / Rank Math):
 *   Title:       Project Gallery | Ruiz Landscape Service, Orange County CA
 *   Description: Browse landscaping projects by Ruiz Landscape — design & installation, lawn care,
 *                irrigation, synthetic turf, large trees & lighting across Southern California.
 */

/* ══════════════════════════════════════════════
   FILTROS POR SERVICIO (slug => etiqueta del botón)
   El slug debe coincidir con el de cada card abajo.
══════════════════════════════════════════════ */
$gallery_services = array(
  'landscape-design-installation' => 'Landscape Design',
  'lawn-care-maintenance'         => 'Lawn Care',
  'tree-shrub-care'               => 'Tree & Shrub',
  'irrigation-systems'            => 'Irrigation',
  'synthetic-turf'                => 'Synthetic Turf',
  'large-tree-installation'       => 'Large Trees',
  'low-voltage-lighting'          => 'Lighting',
);

/* ══════════════════════════════════════════════
   GALERÍA — 16 CARDS
   Pega la URL de la imagen (Medios → "File URL") en 'img'.
   Si 'img' queda '', la card muestra un marcador con el servicio.
   2 por servicio; el servicio estrella (design) lleva 4 para sumar 16.
══════════════════════════════════════════════ */
$gallery_items = array(
  // ── Landscape Design & Installation (4) ──
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/LandscapeDesignInstallation-1.jpg', 'alt' => 'Landscape design and installation project' ),
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/LandscapeDesignRuiz1.jpg', 'alt' => 'Landscape design and installation project' ),
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/LandscapeDesignRuiz2.jpg', 'alt' => 'Landscape design and installation project' ),
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/HeroRuizLandscape.jpg', 'alt' => 'Landscape design and installation project' ),
  // ── Lawn Care & Maintenance (2) ──
  array( 'service' => 'lawn-care-maintenance', 'img' => '/wp-content/uploads/2026/06/LawnCareRuiz2.jpg', 'alt' => 'Lawn care and maintenance project' ),
  array( 'service' => 'lawn-care-maintenance', 'img' => '/wp-content/uploads/2026/06/LawnCareMaintenance-1.jpg', 'alt' => 'Lawn care and maintenance project' ),
  // ── Tree & Shrub Care (2) ──
  array( 'service' => 'tree-shrub-care', 'img' => '/wp-content/uploads/2026/06/TreeShrub-scaled.jpg', 'alt' => 'Tree and shrub care project' ),
  array( 'service' => 'tree-shrub-care', 'img' => '/wp-content/uploads/2026/06/TreeShrubRuiz.jpg', 'alt' => 'Tree and shrub care project' ),
  // ── Irrigation Systems (2) ──
  array( 'service' => 'irrigation-systems', 'img' => '/wp-content/uploads/2026/06/IrrigationSystem-scaled.jpeg', 'alt' => 'Irrigation system project' ),
  array( 'service' => 'irrigation-systems', 'img' => '/wp-content/uploads/2026/06/IrrigationSystem-scaled.jpg', 'alt' => 'Irrigation system project' ),
  // ── Synthetic Turf (2) ──
  array( 'service' => 'synthetic-turf', 'img' => '/wp-content/uploads/2026/06/SyntheticTurfInstallation-scaled.webp', 'alt' => 'Synthetic turf project' ),
  array( 'service' => 'synthetic-turf', 'img' => '/wp-content/uploads/2026/06/SyntheticTurf2-scaled.jpg', 'alt' => 'Synthetic turf project' ),
  // ── Large Tree Installation (2) ──
  array( 'service' => 'large-tree-installation', 'img' => '/wp-content/uploads/2026/06/LargeTreeInstallationRuiz2.jpg', 'alt' => 'Large tree installation project' ),
  array( 'service' => 'large-tree-installation', 'img' => '/wp-content/uploads/2026/06/LargeTreeInstallation.jpg', 'alt' => 'Large tree installation project' ),
  // ── Low Voltage Lighting (2) ──
  array( 'service' => 'low-voltage-lighting', 'img' => '/wp-content/uploads/2026/06/LowVoltageLighting-1.jpg', 'alt' => 'Low voltage lighting project' ),
  array( 'service' => 'low-voltage-lighting', 'img' => '/wp-content/uploads/2026/06/LowVoltageLighting-scaled.jpg', 'alt' => 'Low voltage lighting project' ),
);

/* ── FAQ del home (mismas 6 preguntas) ── */
$gallery_faqs = array(
  array(
    'q' => 'What areas do you serve?',
    'a' => "We're headquartered in Irvine and serve homeowners across <a href='/locations/orange-county' style='color:var(--rl-green);font-weight:600;'>Orange</a>, <a href='/locations/los-angeles-county' style='color:var(--rl-green);font-weight:600;'>Los Angeles</a>, and <a href='/locations/imperial-county' style='color:var(--rl-green);font-weight:600;'>Imperial</a> counties in California. Reach out with your address and we'll confirm we cover your neighborhood.",
    'plain' => "We're headquartered in Irvine and serve homeowners across Orange, Los Angeles, and Imperial counties in California. Reach out with your address and we'll confirm we cover your neighborhood.",
  ),
  array(
    'q' => 'What makes your landscaping "eco-conscious"?',
    'a' => "Sustainability is built into every design — <a href='/services/irrigation-systems' style='color:var(--rl-green);font-weight:600;'>water-wise irrigation</a>, drought-tolerant plantings, eco-friendly materials, organic lawn care, and <a href='/services/synthetic-turf' style='color:var(--rl-green);font-weight:600;'>synthetic turf</a> as a water-saving option. We design landscapes that work with California's climate, not against it.",
    'plain' => "Sustainability is built into every design — water-wise irrigation, drought-tolerant plantings, eco-friendly materials, organic lawn care, and synthetic turf as a water-saving option. We design landscapes that work with California's climate, not against it.",
  ),
  array(
    'q' => 'Do you handle both design and ongoing maintenance?',
    'a' => "Yes. We're a full-service company. The same team can <a href='/services/landscape-design-installation' style='color:var(--rl-green);font-weight:600;'>design and install your landscape</a> and then maintain it — <a href='/services/lawn-care-maintenance' style='color:var(--rl-green);font-weight:600;'>lawn care</a>, irrigation service, and <a href='/services/tree-shrub-care' style='color:var(--rl-green);font-weight:600;'>tree and shrub care</a> — so you have one trusted partner for the life of your landscape.",
    'plain' => "Yes. We're a full-service company. The same team can design and install your landscape and then maintain it — lawn care, irrigation service, and tree and shrub care — so you have one trusted partner for the life of your landscape.",
  ),
  array(
    'q' => 'Are you licensed and insured?',
    'a' => "Yes. Ruiz Landscape Service is fully licensed in California (CA ST Lic# 925207). Insurance and license documentation are available on request. <a href='/about' style='color:var(--rl-green);font-weight:600;'>Learn more about us.</a>",
    'plain' => "Yes. Ruiz Landscape Service is fully licensed in California (CA ST Lic# 925207). Insurance and license documentation are available on request.",
  ),
  array(
    'q' => 'How do I get started?',
    'a' => "<a href='/contact' style='color:var(--rl-green);font-weight:600;'>Schedule a free consultation.</a> We'll walk your space, learn how you want to use it, and put together a plan and estimate tailored to your project and budget.",
    'plain' => "Schedule a free consultation. We'll walk your space, learn how you want to use it, and put together a plan and estimate tailored to your project and budget.",
  ),
  array(
    'q' => 'Can you help reduce my water usage?',
    'a' => "Absolutely — it's one of our specialties. Through <a href='/services/landscape-design-installation' style='color:var(--rl-green);font-weight:600;'>water-wise design</a>, drought-tolerant plants, <a href='/services/irrigation-systems' style='color:var(--rl-green);font-weight:600;'>efficient irrigation</a>, and <a href='/services/synthetic-turf' style='color:var(--rl-green);font-weight:600;'>synthetic turf</a>, we help homeowners cut water use while keeping their landscape beautiful.",
    'plain' => "Absolutely — it's one of our specialties. Through water-wise design, drought-tolerant plants, efficient irrigation, and synthetic turf, we help homeowners cut water use while keeping their landscape beautiful.",
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
      "@id": "https://www.ruizlandscape.com/gallery/#gallery",
      "url": "https://www.ruizlandscape.com/gallery",
      "name": "Project Gallery — Ruiz Landscape Service",
      "description": "Browse landscaping projects by Ruiz Landscape across Orange, LA & Imperial counties.",
      "about": { "@id": "https://www.ruizlandscape.com/#org" }
    },
    {
      "@type": "LocalBusiness",
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
      "geo": { "@type": "GeoCoordinates", "latitude": 33.6516, "longitude": -117.7460 },
      "areaServed": ["Orange County", "Los Angeles County", "Imperial County"]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        <?php
          $faq_nodes = array();
          foreach ( $gallery_faqs as $f ) {
            $faq_nodes[] = '{ "@type": "Question", "name": ' . wp_json_encode( $f['q'] )
              . ', "acceptedAnswer": { "@type": "Answer", "text": ' . wp_json_encode( $f['plain'] ) . ' } }';
          }
          echo implode( ",\n        ", $faq_nodes );
        ?>
      ]
    }
  ]
}
</script>

<main id="rl-gallery">
<script>
/* Activa el modo reveal antes de pintar las secciones (sin parpadeo). */
(function () {
  try {
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduce) document.getElementById('rl-gallery').classList.add('rl-reveal-on');
  } catch (e) {}
})();
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap');

/* ── Offset por el navbar fijo ── */
body { padding-top: 104px !important; }

/* ── Base scope ── */
#rl-gallery {
  /* ══ PALETA (basada en el logo) ════════════════ */
  --rl-green:        #3d5a2a;
  --rl-green-dark:   #1a2410;
  --rl-green-mid:    #4a6e32;
  --rl-green-light:  #8fb870;

  --rl-accent:       #996a6c;   /* CAFÉ (Smoky Rose) */
  --rl-accent-rgb:   153, 106, 108;
  --rl-accent-hover: #ab7d7f;
  --rl-on-accent:    #ffffff;

  --rl-cream:        #f4f1ea;

  font-family: 'Montserrat', sans-serif;
  color: #2a2a20;
  overflow-x: hidden;
}

/* ── Utilidades ── */
#rl-gallery .rlg-section { padding: 92px 0; }
#rl-gallery .rlg-container {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 32px;
  width: 100%;
}
#rl-gallery .rl-eyebrow {
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
#rl-gallery .rl-eyebrow::before { content: ''; width: 24px; height: 2px; background: var(--rl-accent); }
#rl-gallery .rl-h2 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(23px, 2.8vw, 34px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.08;
  color: var(--rl-green-dark);
}
#rl-gallery .rl-body-text { font-size: 16px; line-height: 1.75; color: #4a4a3a; }
#rl-gallery .rl-divider { width: 48px; height: 3px; background: var(--rl-accent); margin: 20px 0; }

/* ══ SECTION 1 — HERO ══════════════════════════ */
#rl-gallery .rlg-hero {
  position: relative;
  min-height: 46vh;
  display: flex;
  align-items: center;
  background-color: var(--rl-green-dark);
  overflow: hidden;
}
#rl-gallery .rlg-hero-bg {
  position: absolute;
  inset: 0;
  background-image: url('/wp-content/uploads/2026/06/RuizLandscape-scaled.jpg');
  background-size: cover;
  background-position: center;
}
#rl-gallery .rlg-hero-overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(20,32,10,0.55) 0%, rgba(20,32,10,0.78) 100%),
    radial-gradient(120% 90% at 50% 40%, rgba(20,32,10,0.30) 0%, rgba(20,32,10,0.82) 100%);
}
#rl-gallery .rlg-hero-content {
  position: relative;
  z-index: 2;
  max-width: 820px;
  margin: 0 auto;
  padding: 72px 32px;
  text-align: center;
}
#rl-gallery .rlg-hero-content .rl-eyebrow { color: var(--rl-accent); justify-content: center; }
#rl-gallery .rlg-hero h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(27px, 4vw, 44px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.01em;
  line-height: 1.05;
  color: #ffffff;
  margin-bottom: 18px;
}
#rl-gallery .rlg-hero h1 span { color: var(--rl-green-light); }
#rl-gallery .rlg-hero-sub {
  font-size: clamp(15px, 1.7vw, 17px);
  line-height: 1.7;
  color: rgba(255,255,255,0.78);
  max-width: 680px;
  margin: 0 auto;
}

/* ══ SECTION 2 — GALERÍA (filtros + grid) ══════ */
#rl-gallery .rlg-gallery { background: #ffffff; }

/* Barra de filtros */
#rl-gallery .rlg-filters {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
  margin-bottom: 44px;
}
#rl-gallery .rlg-filter {
  font-family: 'Montserrat', sans-serif;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: #4a4a3a;
  background: #ffffff;
  border: 1px solid #ddd6c7;
  border-radius: 40px;
  padding: 9px 18px;
  cursor: pointer;
  transition: all 0.18s ease;
}
#rl-gallery .rlg-filter:hover { border-color: var(--rl-accent); color: var(--rl-accent); }
#rl-gallery .rlg-filter.is-active {
  background: var(--rl-accent);
  border-color: var(--rl-accent);
  color: var(--rl-on-accent);
}

/* Grid */
#rl-gallery .rlg-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}
#rl-gallery .rlg-card {
  position: relative;
  display: block;
  border-radius: 6px;
  overflow: hidden;
  text-decoration: none;
  background: var(--rl-cream);
  border: 1px solid #e7e3d8;
  aspect-ratio: 4 / 3;
}
#rl-gallery .rlg-card.is-hidden { display: none; }
#rl-gallery .rlg-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
}
#rl-gallery .rlg-card:hover img { transform: scale(1.06); }

/* Marcador cuando no hay imagen */
#rl-gallery .rlg-ph {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  color: var(--rl-green);
  background:
    repeating-linear-gradient(45deg, rgba(var(--rl-accent-rgb),0.04) 0 10px, transparent 10px 20px),
    var(--rl-cream);
}
#rl-gallery .rlg-ph svg { width: 30px; height: 30px; opacity: 0.5; }
#rl-gallery .rlg-ph span {
  font-family: 'Montserrat', sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--rl-green-mid);
}

/* Etiqueta del servicio (overlay inferior) */
#rl-gallery .rlg-card-tag {
  position: absolute;
  left: 0; right: 0; bottom: 0;
  padding: 28px 16px 14px;
  font-family: 'Montserrat', sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: #fff;
  background: linear-gradient(0deg, rgba(20,32,10,0.78) 0%, rgba(20,32,10,0) 100%);
  opacity: 0;
  transform: translateY(8px);
  transition: opacity 0.22s ease, transform 0.22s ease;
  pointer-events: none;
}
#rl-gallery .rlg-card:hover .rlg-card-tag { opacity: 1; transform: translateY(0); }
/* En cards sin imagen no mostramos el overlay (ya se ve la etiqueta del marcador) */
#rl-gallery .rlg-card.is-empty:hover .rlg-card-tag { opacity: 0; }

/* ══ SECTION 3 — MAPA ══════════════════════════ */
#rl-gallery .rlg-map-sec { background: var(--rl-cream); }
#rl-gallery .rlg-map-text { max-width: 720px; margin: 0 auto 38px; text-align: center; }
#rl-gallery .rlg-map-frame {
  position: relative;
  width: 100%;
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid #e0dbd0;
  box-shadow: 0 16px 40px -22px rgba(26,36,16,0.4);
  line-height: 0;
}
#rl-gallery .rlg-map-frame iframe {
  width: 100%;
  height: 420px;
  border: 0;
  display: block;
  filter: saturate(0.9);
}

/* ══ SECTION 4 — FAQ (mismo estilo que el home) ══ */
#rl-gallery .rlg-faq { background: #ffffff; }
#rl-gallery .rl-faq-inner {
  display: grid;
  grid-template-columns: 1fr 1.8fr;
  gap: 80px;
  align-items: start;
}
#rl-gallery .rl-faq-left { position: sticky; top: 120px; }
#rl-gallery .rl-faq-left .rl-body-text { font-size: 15px; }
#rl-gallery .rl-faq-list { display: flex; flex-direction: column; gap: 2px; }
#rl-gallery .rl-faq-item { border: 1px solid #e8e4da; background: #fff; }
#rl-gallery .rl-faq-q {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 20px 24px;
  background: none;
  border: none;
  text-align: left;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
  font-size: 15px;
  font-weight: 600;
  color: var(--rl-green-dark);
  transition: background 0.15s;
}
#rl-gallery .rl-faq-q:hover { background: #f7f5f0; }
#rl-gallery .rl-faq-icon {
  width: 22px;
  height: 22px;
  border: 2px solid var(--rl-green);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--rl-green);
  font-size: 16px;
  font-weight: 400;
  line-height: 1;
  transition: background 0.15s, color 0.15s;
  user-select: none;
}
#rl-gallery .rl-faq-item.open .rl-faq-icon { background: var(--rl-green); color: #fff; }
#rl-gallery .rl-faq-a {
  display: none;
  padding: 0 24px 20px;
  font-size: 14.5px;
  line-height: 1.75;
  color: #5a5a48;
  border-top: 1px solid #e8e4da;
}
#rl-gallery .rl-faq-item.open .rl-faq-a { display: block; padding-top: 18px; }

/* ══ RESPONSIVE ════════════════════════════════ */
@media (max-width: 1080px) { #rl-gallery .rlg-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 860px) {
  #rl-gallery .rl-faq-inner { grid-template-columns: 1fr; gap: 40px; }
  #rl-gallery .rl-faq-left { position: static; }
}
@media (max-width: 720px) { #rl-gallery .rlg-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 620px) {
  #rl-gallery .rlg-section { padding: 64px 0; }
  #rl-gallery .rlg-map-frame iframe { height: 320px; }
}
@media (max-width: 440px) { #rl-gallery .rlg-grid { grid-template-columns: 1fr; } }

/* ══ SCROLL REVEAL ═════════════════════════════ */
@media (prefers-reduced-motion: no-preference) {
  #rl-gallery.rl-reveal-on .rlg-reveal {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.6s cubic-bezier(0.16, 0.84, 0.34, 1),
                transform 0.6s cubic-bezier(0.16, 0.84, 0.34, 1);
  }
  #rl-gallery.rl-reveal-on .rlg-reveal.rl-in { opacity: 1; transform: none; }
}
</style>


<!-- ══════════════════════════════════════════════
     SECTION 1 — HERO
══════════════════════════════════════════════ -->
<section class="rlg-hero">
  <div class="rlg-hero-bg"></div>
  <div class="rlg-hero-overlay"></div>
  <div class="rlg-hero-content">
    <span class="rl-eyebrow rlg-reveal">Gallery</span>
    <h1 class="rlg-reveal">Our work, <span>across Southern California.</span></h1>
    <p class="rlg-hero-sub rlg-reveal">
      Explore a selection of our landscaping projects. Use the filters to browse by service —
      from full designs and installations to lawn care, turf, trees, and lighting.
    </p>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 2 — GALERÍA (filtros + grid de 16)
══════════════════════════════════════════════ -->
<section class="rlg-section rlg-gallery">
  <div class="rlg-container">

    <!-- Filtros por servicio -->
    <div class="rlg-filters rlg-reveal" role="tablist" aria-label="Filtrar por servicio">
      <button class="rlg-filter is-active" data-filter="all" aria-pressed="true">All</button>
      <?php foreach ( $gallery_services as $slug => $label ) : ?>
        <button class="rlg-filter" data-filter="<?php echo esc_attr( $slug ); ?>" aria-pressed="false"><?php echo esc_html( $label ); ?></button>
      <?php endforeach; ?>
    </div>

    <!-- Grid -->
    <div class="rlg-grid">
      <?php foreach ( $gallery_items as $item ) :
        $slug  = $item['service'];
        $label = isset( $gallery_services[ $slug ] ) ? $gallery_services[ $slug ] : '';
        $has   = ! empty( $item['img'] );
      ?>
        <a href="<?php echo esc_url( '/services/' . $slug ); ?>"
           class="rlg-card<?php echo $has ? '' : ' is-empty'; ?>"
           data-service="<?php echo esc_attr( $slug ); ?>"
           aria-label="<?php echo esc_attr( $label ); ?>">
          <?php if ( $has ) : ?>
            <img src="<?php echo esc_url( $item['img'] ); ?>" alt="<?php echo esc_attr( $item['alt'] ); ?>" loading="lazy" />
          <?php else : ?>
            <span class="rlg-ph">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.1-3.1a2 2 0 0 0-2.8 0L6 21"/></svg>
              <span><?php echo esc_html( $label ); ?></span>
            </span>
          <?php endif; ?>
          <span class="rlg-card-tag"><?php echo esc_html( $label ); ?></span>
        </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 3 — MAPA
══════════════════════════════════════════════ -->
<section class="rlg-section rlg-map-sec">
  <div class="rlg-container">
    <div class="rlg-map-text">
      <span class="rl-eyebrow rlg-reveal" style="justify-content:center;">Find Us</span>
      <h2 class="rl-h2 rlg-reveal">Serving Orange County &amp; beyond.</h2>
      <div class="rl-divider rlg-reveal" style="margin:20px auto 26px;"></div>
      <p class="rl-body-text rlg-reveal">
        Our headquarters is in Irvine at 6 McLaren, Suite H. We work on-site across Orange, Los
        Angeles, and Imperial counties — call ahead before visiting the office.
      </p>
    </div>

    <div class="rlg-map-frame rlg-reveal">
      <!-- Mapa con carga diferida (lazy) -->
      <iframe
        title="Ruiz Landscape Service — 6 McLaren, Suite H, Irvine, CA 92618"
        src="https://www.google.com/maps?q=6+McLaren+Suite+H,+Irvine,+CA+92618&output=embed"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen></iframe>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 4 — FAQ (mismo del home)
══════════════════════════════════════════════ -->
<section class="rlg-section rlg-faq" aria-labelledby="gallery-faq-heading">
  <div class="rlg-container">
    <div class="rl-faq-inner">

      <div class="rl-faq-left">
        <span class="rl-eyebrow rlg-reveal">FAQ</span>
        <h2 class="rl-h2 rlg-reveal" id="gallery-faq-heading">Common questions about working with Ruiz Landscape.</h2>
        <div class="rl-divider rlg-reveal"></div>
        <p class="rl-body-text rlg-reveal">
          Can't find your answer here? <a href="/contact" style="color:var(--rl-green);font-weight:600;">Reach out directly</a> — we're happy to help.
        </p>
      </div>

      <div class="rl-faq-list rlg-reveal">
        <?php foreach ( $gallery_faqs as $i => $faq ) : ?>
          <div class="rl-faq-item<?php echo ( 0 === $i ) ? ' open' : ''; ?>">
            <button class="rl-faq-q" aria-expanded="<?php echo ( 0 === $i ) ? 'true' : 'false'; ?>">
              <?php echo esc_html( $faq['q'] ); ?>
              <span class="rl-faq-icon"><?php echo ( 0 === $i ) ? '&minus;' : '+'; ?></span>
            </button>
            <div class="rl-faq-a"><?php echo $faq['a']; // contiene enlaces (HTML de confianza) ?></div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     FILTROS DE GALERÍA — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-gallery');
  if (!root) return;
  var filters = root.querySelectorAll('.rlg-filter');
  var cards = root.querySelectorAll('.rlg-card');

  filters.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var f = this.getAttribute('data-filter');

      filters.forEach(function (b) {
        var on = (b === btn);
        b.classList.toggle('is-active', on);
        b.setAttribute('aria-pressed', on ? 'true' : 'false');
      });

      cards.forEach(function (card) {
        var show = (f === 'all') || (card.getAttribute('data-service') === f);
        card.classList.toggle('is-hidden', !show);
      });
    });
  });
})();
</script>


<!-- ══════════════════════════════════════════════
     FAQ ACCORDION — VANILLA JS (igual que el home)
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-gallery');
  if (!root) return;
  root.querySelectorAll('.rl-faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.rl-faq-item');
      var isOpen = item.classList.contains('open');
      root.querySelectorAll('.rl-faq-item').forEach(function (el) {
        el.classList.remove('open');
        el.querySelector('.rl-faq-q').setAttribute('aria-expanded', 'false');
        el.querySelector('.rl-faq-icon').textContent = '+';
      });
      if (!isOpen) {
        item.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
        item.querySelector('.rl-faq-icon').textContent = '\u2212';
      }
    });
  });
})();
</script>


<!-- ══════════════════════════════════════════════
     SCROLL REVEAL — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-gallery');
  if (!root || !root.classList.contains('rl-reveal-on')) return;

  var targets = Array.prototype.slice.call(root.querySelectorAll('.rlg-reveal'));
  if (!targets.length) return;

  function revealAll() { targets.forEach(function (el) { el.classList.add('rl-in'); }); }
  if (!('IntersectionObserver' in window)) { revealAll(); return; }

  try {
    targets.forEach(function (el) {
      var i = 0, sib = el.previousElementSibling;
      while (sib) {
        if (sib.matches && sib.matches('.rlg-reveal')) i++;
        sib = sib.previousElementSibling;
      }
      el._d = Math.min(i, 6) * 80;
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
    }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });

    targets.forEach(function (el) { obs.observe(el); });
  } catch (e) {
    revealAll();
  }
})();
</script>

<?php get_footer(); ?>