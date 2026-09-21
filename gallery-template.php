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
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/LandscapeDesign1After.png', 'alt' => 'Landscape design and installation project' ),
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/LandscapeDesignRuiz1.jpg', 'alt' => 'Landscape design and installation project' ),
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/LandscapeDesignRuiz2.jpg', 'alt' => 'Landscape design and installation project' ),
  array( 'service' => 'landscape-design-installation', 'img' => '/wp-content/uploads/2026/06/HeroRuizLandscape.jpg', 'alt' => 'Landscape design and installation project' ),
  // ── Lawn Care & Maintenance (2) ──
  array( 'service' => 'lawn-care-maintenance', 'img' => '/wp-content/uploads/2026/06/LawnCareRuiz2.jpg', 'alt' => 'Lawn care and maintenance project' ),
  array( 'service' => 'lawn-care-maintenance', 'img' => '/wp-content/uploads/2026/06/LawnCareMaintenance-1.jpg', 'alt' => 'Lawn care and maintenance project' ),
  // ── Tree & Shrub Care (2) ──
  array( 'service' => 'tree-shrub-care', 'img' => '/wp-content/uploads/2026/06/TreeShrub2.png', 'alt' => 'Tree and shrub care project' ),
  array( 'service' => 'tree-shrub-care', 'img' => '/wp-content/uploads/2026/06/TreeShrubRuiz.jpg', 'alt' => 'Tree and shrub care project' ),
  // ── Irrigation Systems (2) ──
  array( 'service' => 'irrigation-systems', 'img' => '/wp-content/uploads/2026/06/IrrigationRuiz1.png', 'alt' => 'Irrigation system project' ),
  array( 'service' => 'irrigation-systems', 'img' => '/wp-content/uploads/2026/06/IrrigationRuiz2.png', 'alt' => 'Irrigation system project' ),
  // ── Synthetic Turf (2) ──
  array( 'service' => 'synthetic-turf', 'img' => '/wp-content/uploads/2026/06/ArtificialTurf1.png', 'alt' => 'Synthetic turf project' ),
  array( 'service' => 'synthetic-turf', 'img' => '/wp-content/uploads/2026/06/ArtificialTurf2.png', 'alt' => 'Synthetic turf project' ),
  // ── Large Tree Installation (2) ──
  array( 'service' => 'large-tree-installation', 'img' => '/wp-content/uploads/2026/06/LargeTreeInstallationRuiz2.jpg', 'alt' => 'Large tree installation project' ),
  array( 'service' => 'large-tree-installation', 'img' => '/wp-content/uploads/2026/06/LargeTreeInstallation.jpg', 'alt' => 'Large tree installation project' ),
  // ── Low Voltage Lighting (2) ──
  array( 'service' => 'low-voltage-lighting', 'img' => '/wp-content/uploads/2026/06/LowVoltageLighting-1.jpg', 'alt' => 'Low voltage lighting project' ),
  array( 'service' => 'low-voltage-lighting', 'img' => '/wp-content/uploads/2026/06/LowVoltage2.jpg', 'alt' => 'Low voltage lighting project' ),
);

/* ══════════════════════════════════════════════
   IMÁGENES "BEFORE" (comparador antes/después)
   Pega la URL de la foto "antes" del MISMO proyecto, usando el número
   de índice de la lista de arriba (empieza en 0).
   • Deja '' y ese proyecto NO muestra el comparador (solo el lightbox normal).
   • La foto del array de arriba ($gallery_items) es el "después".
══════════════════════════════════════════════ */
$gallery_before = array(
  0  => '/wp-content/uploads/2026/06/LandscapeDesign1Before.png', // Landscape Design — LandscapeDesign1
  1  => '', // Landscape Design — LandscapeDesignRuiz1
  2  => '', // Landscape Design — LandscapeDesignRuiz2
  3  => '', // Landscape Design — HeroRuizLandscape
  4  => '', // Lawn Care — LawnCareRuiz2
  5  => '', // Lawn Care — LawnCareMaintenance-1
  6  => '', // Tree & Shrub — TreeShrub2
  7  => '', // Tree & Shrub — TreeShrubRuiz
  8  => '', // Irrigation — IrrigationRuiz1
  9  => '', // Irrigation — IrrigationRuiz2
  10 => '', // Synthetic Turf — ArtificialTurf1
  11 => '', // Synthetic Turf — ArtificialTurf2
  12 => '', // Large Trees — LargeTreeInstallationRuiz2
  13 => '', // Large Trees — LargeTreeInstallation
  14 => '', // Lighting — LowVoltageLighting-1
  15 => '', // Lighting — LowVoltage2
);

/* ══════════════════════════════════════════════
   PROYECTOS DESTACADOS — 6 CARDS
   Cada proyecto: título, ubicación, lista de servicios realizados e
   imágenes (URL de Medios → "File URL"). Si 'images' queda vacío, la
   card muestra un marcador "Photos coming soon".
══════════════════════════════════════════════ */
$gallery_projects = array(
  array(
    'title'    => 'Project One',
    'location' => 'Irvine, CA',
    'services' => array( 'Landscape design', 'Planting & installation' ),
    'images'   => array(
      '/wp-content/uploads/2026/09/Job1Pic1Website.jpg',
      '/wp-content/uploads/2026/09/Job1Pic2Website.jpg',
      '/wp-content/uploads/2026/09/Job1Pic3Website-e1790014768685.jpg',
      '/wp-content/uploads/2026/09/Job1Pic4Website.jpg',
    ),
  ),
  array(
    'title'    => 'Project Two',
    'location' => 'Newport Beach, CA',
    'services' => array( 'Modern planting design', 'Tree installation', 'Mulched planter beds', 'Entry courtyard landscaping' ),
    'images'   => array(
      '/wp-content/uploads/2026/09/Job2Pic1Website.jpg',
      '/wp-content/uploads/2026/09/Job2Pic2Website.jpg',
      '/wp-content/uploads/2026/09/Job2Pic3Website.jpg',
      '/wp-content/uploads/2026/09/Job2Pic4Website.jpg',
      '/wp-content/uploads/2026/09/Job2Pic5Website.jpg',
      '/wp-content/uploads/2026/09/Job2Pic6Website.jpg',
    ),
  ),
  array(
    'title'    => 'Project Three',
    'location' => 'Anaheim, CA',
    'services' => array( 'New-construction landscaping', 'Large tree installation', 'Backyard planting beds', 'Landscape around pool & patio' ),
    'images'   => array(
      '/wp-content/uploads/2026/09/Job3Pic1Website.jpg',
      '/wp-content/uploads/2026/09/Job3Pic2Website.jpg',
      '/wp-content/uploads/2026/09/Job3Pic3Website.jpg',
      '/wp-content/uploads/2026/09/Job3Pic4Website.jpg',
      '/wp-content/uploads/2026/09/Job3Pic5Website.jpg',
      '/wp-content/uploads/2026/09/Job3Pic6Website.jpg',
      '/wp-content/uploads/2026/09/Job3Pic7Website.jpg',
      '/wp-content/uploads/2026/09/Job3Pic8Website.jpg',
    ),
  ),
  array(
    'title'    => 'Project Four',
    'location' => 'Los Angeles, CA',
    'services' => array( 'Synthetic turf & putting green', 'Low voltage path lighting', 'Planting beds along stone walkways', 'Poolside landscape design' ),
    'images'   => array(
      '/wp-content/uploads/2026/09/Job4Pic1Website.jpg',
      '/wp-content/uploads/2026/09/Job4Pic2Website.jpg',
      '/wp-content/uploads/2026/09/Job4Pic3Website.jpg',
      '/wp-content/uploads/2026/09/Job4Pic4Website.jpg',
      '/wp-content/uploads/2026/09/Job4Pic5Website.jpg',
      '/wp-content/uploads/2026/09/Job4Pic6Website.jpg',
      '/wp-content/uploads/2026/09/Job4Pic7Website.jpg',
      '/wp-content/uploads/2026/09/Job4Pic8Website.jpg',
    ),
  ),
  array(
    'title'    => 'Project Five',
    'location' => 'Costa Mesa, CA',
    'services' => array( 'Drought-tolerant planting design', 'Succulent & river rock beds', 'Synthetic turf side yards', 'Stepping-stone turf walkways' ),
    'images'   => array(
      '/wp-content/uploads/2026/09/Job5Pic1Website.jpg',
      '/wp-content/uploads/2026/09/Job5Pic2Website.jpg',
      '/wp-content/uploads/2026/09/Job5Pic3Website.jpg',
      '/wp-content/uploads/2026/09/Job5Pic4Website.jpg',
      '/wp-content/uploads/2026/09/Job5Pic5Website.jpg',
    ),
  ),
  array(
    'title'    => 'Project Six',
    'location' => 'Mission Viejo, CA',
    'services' => array( 'Full backyard renovation', 'Decomposed granite pathways', 'New sod lawn installation', 'Planting beds & low voltage lighting' ),
    'images'   => array(
      '/wp-content/uploads/2026/09/Job6Pic1Website.jpg',
      '/wp-content/uploads/2026/09/Job6Pic2Website.jpg',
      '/wp-content/uploads/2026/09/Job6Pic3Website.jpg',
      '/wp-content/uploads/2026/09/Job6Pic4Website.jpg',
      '/wp-content/uploads/2026/09/Job6Pic5Website.jpg',
    ),
  ),
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
      "email": "leads@RuizLandscape.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "15791 Rockfield Blvd Ste O",
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
  background-image: url('/wp-content/uploads/2026/07/Ruiz-Landscaping-1-scaled.png');
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
  grid-template-columns: repeat(2, 1fr);
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
  scale: 1.16;
  transition: transform 0.4s ease, scale 1.7s cubic-bezier(0.16, 0.84, 0.34, 1);
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

/* Badge de categoría (siempre visible, esquina superior) */
#rl-gallery .rlg-card-badge {
  position: absolute;
  top: 10px;
  left: 10px;
  z-index: 2;
  font-family: 'Montserrat', sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #fff;
  background: linear-gradient(135deg, var(--rl-green-dark), var(--rl-green));
  padding: 5px 10px;
  border-radius: 40px;
  pointer-events: none;
}

/* Contador de resultados */
#rl-gallery .rlg-count {
  font-size: 13px;
  color: var(--rl-green-mid);
  text-align: center;
  margin-bottom: 24px;
}
#rl-gallery .rlg-count strong { color: var(--rl-green-dark); font-weight: 700; }

/* La card ahora abre el lightbox: cursor de zoom */
#rl-gallery .rlg-card { cursor: zoom-in; }

/* Badge "Before & After" (esquina superior derecha) */
#rl-gallery .rlg-card-ba {
  position: absolute;
  top: 10px;
  right: 10px;
  z-index: 2;
  display: inline-flex;
  align-items: center;
  gap: 5px;
  font-family: 'Montserrat', sans-serif;
  font-size: 9.5px;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: #fff;
  background: rgba(20,32,10,0.62);
  -webkit-backdrop-filter: blur(4px);
  backdrop-filter: blur(4px);
  padding: 5px 9px;
  border-radius: 40px;
  pointer-events: none;
}
#rl-gallery .rlg-card-ba svg { width: 12px; height: 12px; }

/* ══ LIGHTBOX ══════════════════════════════════ */
#rl-gallery .rlg-lb {
  position: fixed;
  inset: 0;
  z-index: 1100;            /* por encima del navbar (1000) */
  display: none;
  align-items: center;
  justify-content: center;
  padding: 24px;
  background: rgba(20,32,10,0.93);
  -webkit-backdrop-filter: blur(6px);
  backdrop-filter: blur(6px);
}
#rl-gallery .rlg-lb.is-open { display: flex; }

#rl-gallery .rlg-lb-panel {
  position: relative;
  width: 100%;
  max-width: 980px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 30px 80px -20px rgba(0,0,0,0.6);
}

#rl-gallery .rlg-lb-imgwrap {
  position: relative;
  width: 100%;
  background: var(--rl-cream);
  line-height: 0;
}
#rl-gallery .rlg-lb-img {
  display: block;
  width: 100%;
  max-height: 70vh;
  object-fit: contain;
  background: #11180a;
}
#rl-gallery .rlg-lb-ph {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 360px;
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--rl-green-mid);
  background:
    repeating-linear-gradient(45deg, rgba(var(--rl-accent-rgb),0.05) 0 10px, transparent 10px 20px),
    var(--rl-cream);
}
#rl-gallery .rlg-lb-badge {
  position: absolute;
  top: 14px;
  left: 14px;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #fff;
  background: linear-gradient(135deg, var(--rl-green-dark), var(--rl-green));
  padding: 6px 12px;
  border-radius: 40px;
}

/* ── Pestañas Before / After (toggle segmentado; clic cambia la foto) ── */
#rl-gallery .rlg-lb-tabs {
  position: absolute;
  top: 14px;
  right: 14px;                 /* a la derecha → no choca con el badge de categoría */
  z-index: 3;
  display: none;               /* JS las pone en flex si el proyecto tiene "before" */
  align-items: center;
  gap: 4px;
  padding: 4px;
  background: rgba(20,32,10,0.55);
  -webkit-backdrop-filter: blur(6px);
  backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 40px;
}
#rl-gallery .rlg-lb-tab {
  font-family: 'Montserrat', sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.82);
  background: transparent;
  border: none;
  border-radius: 40px;
  padding: 10px 20px;
  cursor: pointer;
  transition: background 0.18s, color 0.18s;
}
#rl-gallery .rlg-lb-tab:hover { color: #fff; }
#rl-gallery .rlg-lb-tab.is-active {
  background: var(--rl-accent);
  color: var(--rl-on-accent);
  box-shadow: 0 2px 8px -2px rgba(0,0,0,0.4);
}

/* Barra inferior: caption + posición + enlace al servicio */
#rl-gallery .rlg-lb-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  flex-wrap: wrap;
  padding: 18px 22px;
}
#rl-gallery .rlg-lb-meta { display: flex; flex-direction: column; gap: 4px; min-width: 0; }
#rl-gallery .rlg-lb-cap {
  font-family: 'Montserrat', sans-serif;
  font-size: 15px;
  font-weight: 700;
  color: var(--rl-green-dark);
  line-height: 1.3;
}
#rl-gallery .rlg-lb-pos {
  font-size: 12px;
  color: var(--rl-green-mid);
  letter-spacing: 0.04em;
}
#rl-gallery .rlg-lb-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  flex-shrink: 0;
  font-family: 'Montserrat', sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--rl-on-accent);
  background: var(--rl-accent);
  border: 2px solid var(--rl-accent);
  border-radius: 4px;
  padding: 11px 20px;
  text-decoration: none;
  transition: background 0.18s, border-color 0.18s;
}
#rl-gallery .rlg-lb-link:hover { background: var(--rl-accent-hover); border-color: var(--rl-accent-hover); }
#rl-gallery .rlg-lb-link svg { width: 14px; height: 14px; }

/* Controles del lightbox */
#rl-gallery .rlg-lb-btn {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.18);
  background: rgba(255,255,255,0.12);
  color: #fff;
  cursor: pointer;
  z-index: 2;
  transition: background 0.18s, border-color 0.18s;
}
#rl-gallery .rlg-lb-btn:hover { background: rgba(var(--rl-accent-rgb),0.55); border-color: rgba(255,255,255,0.4); }
#rl-gallery .rlg-lb-btn svg { width: 18px; height: 18px; }
#rl-gallery .rlg-lb-close { top: 18px; right: 18px; }
#rl-gallery .rlg-lb-prev  { left: 18px;  top: 50%; transform: translateY(-50%); }
#rl-gallery .rlg-lb-next  { right: 18px; top: 50%; transform: translateY(-50%); }

@media (max-width: 620px) {
  #rl-gallery .rlg-lb { padding: 12px; }
  #rl-gallery .rlg-lb-prev { left: 8px; }
  #rl-gallery .rlg-lb-next { right: 8px; }
  #rl-gallery .rlg-lb-bar { padding: 16px; }
  #rl-gallery .rlg-lb-link { width: 100%; justify-content: center; }
}

/* ══ PROYECTOS DESTACADOS (cards con carrusel) ══ */
#rl-gallery .rlg-projects { background: var(--rl-cream); }
#rl-gallery .rlg-head { text-align: center; margin-bottom: 48px; }
#rl-gallery .rlg-head .rl-eyebrow { justify-content: center; }
#rl-gallery .rlg-head .rl-divider { margin: 20px auto 0; }
#rl-gallery .rlg-pj-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}
#rl-gallery .rlg-pj {
  display: flex;
  flex-direction: column;
  background: #ffffff;
  border: 1px solid #e7e3d8;
  border-top: 3px solid var(--rl-accent);
  overflow: hidden;
  position: relative;
}
#rl-gallery .rlg-pj-media {
  position: relative;
  aspect-ratio: 4 / 3;
  background: var(--rl-cream);
  overflow: hidden;
}
#rl-gallery .rlg-pj-slide {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0;
  scale: 1.12;
  transition: opacity 0.45s ease, scale 1.6s cubic-bezier(0.16, 0.84, 0.34, 1);
}
#rl-gallery .rlg-pj-slide.is-active { opacity: 1; }
#rl-gallery .rlg-pj-ph {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
  color: #a39d8c;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}
#rl-gallery .rlg-pj-ph svg { width: 34px; height: 34px; }
#rl-gallery .rlg-pj-count {
  position: absolute;
  top: 14px;
  left: 14px;
  background: rgba(20,32,10,0.72);
  color: #fff;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.08em;
  padding: 5px 11px;
  border-radius: 20px;
}
#rl-gallery .rlg-pj-nav {
  position: absolute;
  top: 50%;
  width: 38px;
  height: 38px;
  margin-top: -19px;
  border: none;
  border-radius: 50%;
  background: rgba(255,255,255,0.92);
  color: var(--rl-green-dark);
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.2s ease, background 0.2s ease, color 0.2s ease;
}
#rl-gallery .rlg-pj-nav svg { width: 16px; height: 16px; }
#rl-gallery .rlg-pj-prev { left: 12px; }
#rl-gallery .rlg-pj-next { right: 12px; }
#rl-gallery .rlg-pj-media:hover .rlg-pj-nav,
#rl-gallery .rlg-pj-nav:focus-visible { opacity: 1; }
#rl-gallery .rlg-pj-nav:hover { background: var(--rl-accent); color: #fff; }
#rl-gallery .rlg-pj-body { padding: 24px 26px 26px; display: flex; flex-direction: column; flex: 1; }
#rl-gallery .rlg-pj-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 22px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  color: var(--rl-green-dark);
  line-height: 1.15;
}
#rl-gallery .rlg-pj-loc {
  display: flex;
  align-items: center;
  gap: 6px;
  margin-top: 6px;
  font-size: 13.5px;
  color: var(--rl-green-mid);
  font-weight: 600;
}
#rl-gallery .rlg-pj-loc svg { width: 14px; height: 14px; flex-shrink: 0; }
#rl-gallery .rlg-pj-list {
  list-style: none;
  margin: 18px 0 20px;
  padding: 16px 0 0;
  border-top: 1px solid #ece8dd;
  display: flex;
  flex-direction: column;
  gap: 7px;
  flex: 1;
}
#rl-gallery .rlg-pj-list li {
  position: relative;
  padding-left: 16px;
  font-size: 14px;
  color: #4a4a3a;
  line-height: 1.4;
}
#rl-gallery .rlg-pj-list li::before {
  content: '';
  position: absolute;
  left: 0;
  top: 7px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--rl-accent);
}
#rl-gallery .rlg-pj-all {
  align-self: flex-start;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: none;
  border: none;
  border-bottom: 2px solid var(--rl-accent);
  padding: 0 0 2px;
  font-family: 'Montserrat', sans-serif;
  font-size: 12.5px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--rl-green);
  cursor: pointer;
  transition: color 0.15s ease;
}
#rl-gallery .rlg-pj-all svg { width: 12px; height: 12px; }
#rl-gallery .rlg-pj-all:hover { color: var(--rl-accent); }
#rl-gallery .rlg-pj-all[disabled] { opacity: 0.45; cursor: default; border-color: #ddd6c7; color: #8a8f7e; }

/* Visor "View all photos" */
#rl-gallery .rlg-pj-lb {
  position: fixed;
  inset: 0;
  z-index: 1100;
  background: rgba(12,18,8,0.92);
  display: none;
  align-items: center;
  justify-content: center;
  padding: 40px 72px;
}
#rl-gallery .rlg-pj-lb.is-open { display: flex; }
#rl-gallery .rlg-pj-lb-img { max-width: 100%; max-height: 82vh; display: block; }
#rl-gallery .rlg-pj-lb-cap {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 18px;
  text-align: center;
  color: rgba(255,255,255,0.8);
  font-size: 13px;
  letter-spacing: 0.05em;
}
#rl-gallery .rlg-pj-lb button {
  position: absolute;
  width: 46px;
  height: 46px;
  border: none;
  border-radius: 50%;
  background: rgba(255,255,255,0.12);
  color: #fff;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.2s ease;
}
#rl-gallery .rlg-pj-lb button:hover { background: var(--rl-accent); }
#rl-gallery .rlg-pj-lb button svg { width: 20px; height: 20px; }
#rl-gallery .rlg-pj-lb-close { top: 20px; right: 20px; }
#rl-gallery .rlg-pj-lb-prev { left: 16px; top: 50%; margin-top: -23px; }
#rl-gallery .rlg-pj-lb-next { right: 16px; top: 50%; margin-top: -23px; }

@media (max-width: 1080px) { #rl-gallery .rlg-pj-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 680px) {
  #rl-gallery .rlg-pj-grid { grid-template-columns: 1fr; }
  #rl-gallery .rlg-pj-nav { opacity: 1; }
  #rl-gallery .rlg-pj-lb { padding: 40px 12px; }
}

/* ══ PROFUNDIDAD + HOVER 3D (cards de la gallery) ══ */
#rl-gallery .rlg-card,
#rl-gallery .rlg-pj {
  --rx: 0deg; --ry: 0deg; --nx: 0; --ny: 0; --mx: 50%; --my: 50%;
  transform: perspective(1000px) rotateX(var(--rx)) rotateY(var(--ry));
  transition: transform 0.25s ease-out, box-shadow 0.35s ease, scale 0.35s ease,
              opacity 0.8s ease, translate 0.8s cubic-bezier(0.16, 0.84, 0.34, 1);
  will-change: transform;
}
#rl-gallery .rlg-card:hover,
#rl-gallery .rlg-pj:hover {
  scale: 1.03;
  z-index: 3;
  box-shadow:
    calc(var(--nx) * -26px) calc(var(--ny) * -26px + 30px) 48px -14px rgba(20,32,10,0.5),
    0 10px 18px -8px rgba(0,0,0,0.28);
}
#rl-gallery .rlg-card::after,
#rl-gallery .rlg-pj::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  pointer-events: none;
  opacity: 0;
  background: radial-gradient(circle at var(--mx) var(--my), rgba(255,255,255,0.3), transparent 55%);
  transition: opacity 0.3s ease;
}
#rl-gallery .rlg-card:hover::after,
#rl-gallery .rlg-pj:hover::after { opacity: 1; }
#rl-gallery .rlg-card.is-in img { scale: 1; }
#rl-gallery .rlg-pj.is-in .rlg-pj-slide.is-active { scale: 1; }
#rl-gallery.rl-reveal-on .rlg-card,
#rl-gallery.rl-reveal-on .rlg-pj { opacity: 0; translate: 0 32px; }
#rl-gallery.rl-reveal-on .rlg-card.is-in,
#rl-gallery.rl-reveal-on .rlg-pj.is-in { opacity: 1; translate: 0 0; }
@media (prefers-reduced-motion: reduce) {
  #rl-gallery .rlg-card, #rl-gallery .rlg-pj { transform: none; }
  #rl-gallery .rlg-card img, #rl-gallery .rlg-pj-slide { scale: 1; }
}

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
@media (max-width: 860px) {
  #rl-gallery .rl-faq-inner { grid-template-columns: 1fr; gap: 40px; }
  #rl-gallery .rl-faq-left { position: static; }
}
@media (max-width: 620px) {
  #rl-gallery .rlg-section { padding: 64px 0; }
  #rl-gallery .rlg-map-frame iframe { height: 320px; }
}

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
     SECTION 1.5 — PROYECTOS DESTACADOS (6 cards)
══════════════════════════════════════════════ -->
<section class="rlg-section rlg-projects" id="rlg-projects" aria-labelledby="rlg-projects-heading">
  <div class="rlg-container">

    <div class="rlg-head">
      <span class="rl-eyebrow rlg-reveal">Featured Projects</span>
      <h2 class="rl-h2 rlg-reveal" id="rlg-projects-heading">Recent work, project by project.</h2>
      <div class="rl-divider rlg-reveal"></div>
    </div>

    <div class="rlg-pj-grid">
      <?php foreach ( $gallery_projects as $pi => $pj ) :
        $imgs  = array_values( array_filter( $pj['images'] ) );
        $total = count( $imgs );
      ?>
        <article class="rlg-pj" data-total="<?php echo (int) $total; ?>">
          <div class="rlg-pj-media">
            <?php if ( $total ) : ?>
              <?php foreach ( $imgs as $ii => $src ) : ?>
                <img class="rlg-pj-slide<?php echo 0 === $ii ? ' is-active' : ''; ?>" src="<?php echo esc_url( $src ); ?>" alt="<?php echo esc_attr( $pj['title'] . ' — ' . $pj['location'] . ' (photo ' . ( $ii + 1 ) . ')' ); ?>" loading="lazy" />
              <?php endforeach; ?>
              <span class="rlg-pj-count"><span class="rlg-pj-cur">1</span> / <?php echo (int) $total; ?></span>
              <?php if ( $total > 1 ) : ?>
                <button class="rlg-pj-nav rlg-pj-prev" type="button" aria-label="Previous photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg></button>
                <button class="rlg-pj-nav rlg-pj-next" type="button" aria-label="Next photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></button>
              <?php endif; ?>
            <?php else : ?>
              <div class="rlg-pj-ph">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.1-3.1a2 2 0 0 0-2.8 0L6 21"/></svg>
                Photos coming soon
              </div>
            <?php endif; ?>
          </div>

          <div class="rlg-pj-body">
            <h3 class="rlg-pj-title"><?php echo esc_html( $pj['title'] ); ?></h3>
            <div class="rlg-pj-loc">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <?php echo esc_html( $pj['location'] ); ?>
            </div>
            <ul class="rlg-pj-list">
              <?php foreach ( $pj['services'] as $svc ) : ?>
                <li><?php echo esc_html( $svc ); ?></li>
              <?php endforeach; ?>
            </ul>
            <button class="rlg-pj-all" type="button" data-project="<?php echo (int) $pi; ?>"<?php echo $total ? '' : ' disabled'; ?>>
              <?php echo $total ? 'View all ' . (int) $total . ' photos' : 'Photos coming soon'; ?>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- Visor de fotos del proyecto -->
<div class="rlg-pj-lb" id="rlg-pj-lb" role="dialog" aria-modal="true" aria-label="Project photos" aria-hidden="true">
  <button class="rlg-pj-lb-close" type="button" aria-label="Close"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
  <button class="rlg-pj-lb-prev" type="button" aria-label="Previous photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg></button>
  <img class="rlg-pj-lb-img" id="rlg-pj-lb-img" src="" alt="" />
  <button class="rlg-pj-lb-next" type="button" aria-label="Next photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></button>
  <div class="rlg-pj-lb-cap" id="rlg-pj-lb-cap"></div>
</div>

<script>
(function () {
  var root = document.getElementById('rlg-projects');
  if (!root) return;
  var projects = <?php
    $pj_json = array();
    foreach ( $gallery_projects as $pj ) {
      $pj_json[] = array(
        'title'  => $pj['title'],
        'images' => array_values( array_filter( $pj['images'] ) ),
      );
    }
    echo wp_json_encode( $pj_json );
  ?>;

  // Carrusel dentro de cada card
  root.querySelectorAll('.rlg-pj').forEach(function (card) {
    var slides = card.querySelectorAll('.rlg-pj-slide');
    if (slides.length < 2) return;
    var cur = card.querySelector('.rlg-pj-cur');
    var i = 0;
    function show(n) {
      slides[i].classList.remove('is-active');
      i = (n + slides.length) % slides.length;
      slides[i].classList.add('is-active');
      if (cur) cur.textContent = i + 1;
    }
    card.querySelector('.rlg-pj-prev').addEventListener('click', function () { show(i - 1); });
    card.querySelector('.rlg-pj-next').addEventListener('click', function () { show(i + 1); });
  });

  // Visor "View all photos"
  var lb = document.getElementById('rlg-pj-lb');
  var lbImg = document.getElementById('rlg-pj-lb-img');
  var lbCap = document.getElementById('rlg-pj-lb-cap');
  var pIdx = 0, iIdx = 0;
  function render() {
    var p = projects[pIdx];
    lbImg.src = p.images[iIdx];
    lbImg.alt = p.title + ' — photo ' + (iIdx + 1);
    lbCap.textContent = p.title + '  ·  ' + (iIdx + 1) + ' / ' + p.images.length;
    var solo = p.images.length < 2;
    lb.querySelector('.rlg-pj-lb-prev').style.display = solo ? 'none' : '';
    lb.querySelector('.rlg-pj-lb-next').style.display = solo ? 'none' : '';
  }
  function open(p) {
    if (!projects[p] || !projects[p].images.length) return;
    pIdx = p; iIdx = 0; render();
    lb.classList.add('is-open');
    lb.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }
  function close() {
    lb.classList.remove('is-open');
    lb.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
  function go(step) {
    var n = projects[pIdx].images.length;
    iIdx = (iIdx + step + n) % n;
    render();
  }
  root.querySelectorAll('.rlg-pj-all').forEach(function (b) {
    b.addEventListener('click', function () { open(parseInt(b.getAttribute('data-project'), 10)); });
  });
  lb.querySelector('.rlg-pj-lb-close').addEventListener('click', close);
  lb.querySelector('.rlg-pj-lb-prev').addEventListener('click', function () { go(-1); });
  lb.querySelector('.rlg-pj-lb-next').addEventListener('click', function () { go(1); });
  lb.addEventListener('click', function (e) { if (e.target === lb) close(); });
  document.addEventListener('keydown', function (e) {
    if (!lb.classList.contains('is-open')) return;
    if (e.key === 'Escape') close();
    else if (e.key === 'ArrowLeft') go(-1);
    else if (e.key === 'ArrowRight') go(1);
  });
})();
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
  var root = document.getElementById('rl-gallery');
  if (!root) return;
  var cards = root.querySelectorAll('.rlg-card, .rlg-pj');

  // Entrada con profundidad: se reproduce cada vez que la card vuelve a verse
  function revealAll() { cards.forEach(function (c) { c.classList.add('is-in'); }); }
  if (!('IntersectionObserver' in window)) { revealAll(); }
  else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        var el = entry.target;
        if (entry.isIntersecting) {
          var idx = Array.prototype.indexOf.call(el.parentNode.children, el);
          el.style.transitionDelay = ((idx % 2) * 90) + 'ms';
          el.classList.add('is-in');
          setTimeout(function () { el.style.transitionDelay = ''; }, 1000);
        } else {
          el.style.transitionDelay = '';
          el.classList.remove('is-in');
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
    cards.forEach(function (c) { io.observe(c); });
  }

  // Hover 3D: inclinación según el cursor + sombra que se desplaza
  var fine = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
  var calm = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!fine || calm) return;
  cards.forEach(function (c) {
    c.addEventListener('mousemove', function (e) {
      var r = c.getBoundingClientRect();
      var nx = (e.clientX - r.left) / r.width - 0.5;
      var ny = (e.clientY - r.top) / r.height - 0.5;
      c.style.setProperty('--ry', (nx * 12).toFixed(2) + 'deg');
      c.style.setProperty('--rx', (-ny * 10).toFixed(2) + 'deg');
      c.style.setProperty('--nx', (nx * 2).toFixed(2));
      c.style.setProperty('--ny', (ny * 2).toFixed(2));
      c.style.setProperty('--mx', ((nx + 0.5) * 100).toFixed(1) + '%');
      c.style.setProperty('--my', ((ny + 0.5) * 100).toFixed(1) + '%');
    });
    c.addEventListener('mouseleave', function () {
      ['--rx', '--ry', '--nx', '--ny'].forEach(function (v) { c.style.setProperty(v, /n/.test(v) ? '0' : '0deg'); });
    });
  });
});
</script>


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

    <!-- Contador de resultados -->
    <p class="rlg-count rlg-reveal">Showing <strong id="rlg-count"><?php echo count( $gallery_items ); ?></strong> projects</p>

    <!-- Grid -->
    <div class="rlg-grid">
      <?php foreach ( $gallery_items as $idx => $item ) :
        $slug   = $item['service'];
        $label  = isset( $gallery_services[ $slug ] ) ? $gallery_services[ $slug ] : '';
        $has    = ! empty( $item['img'] );
        $before = isset( $gallery_before[ $idx ] ) ? $gallery_before[ $idx ] : '';
        $has_ba = ( $has && ! empty( $before ) );
      ?>
        <a href="<?php echo esc_url( '/services/' . $slug ); ?>"
           class="rlg-card<?php echo $has ? '' : ' is-empty'; ?>"
           data-service="<?php echo esc_attr( $slug ); ?>"
           data-img="<?php echo esc_url( $item['img'] ); ?>"
           data-before="<?php echo esc_url( $before ); ?>"
           data-alt="<?php echo esc_attr( $item['alt'] ); ?>"
           data-label="<?php echo esc_attr( $label ); ?>"
           data-href="<?php echo esc_url( '/services/' . $slug ); ?>"
           aria-label="<?php echo esc_attr( $label ); ?>">
          <span class="rlg-card-badge"><?php echo esc_html( $label ); ?></span>
          <?php if ( $has_ba ) : ?>
            <span class="rlg-card-ba" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.5 21L3 16.5 7.5 12M3 16.5h13.5M16.5 3L21 7.5 16.5 12M21 7.5H7.5"/></svg>
              Before &amp; After
            </span>
          <?php endif; ?>
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
        Our headquarters is in Irvine at 15791 Rockfield Blvd Ste O. We work on-site across Orange, Los
        Angeles, and Imperial counties — call ahead before visiting the office.
      </p>
    </div>

    <div class="rlg-map-frame rlg-reveal">
      <!-- Mapa con carga diferida (lazy) -->
      <iframe
        title="Ruiz Landscape Service — 15791 Rockfield Blvd Ste O, Irvine, CA 92618"
        src="https://www.google.com/maps?q=15791+Rockfield+Blvd+Ste+O,+Irvine,+CA+92618&output=embed"
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
     LIGHTBOX (popup de imagen)
══════════════════════════════════════════════ -->
<div id="rlg-lightbox" class="rlg-lb" role="dialog" aria-modal="true" aria-label="Project image" aria-hidden="true">
  <button class="rlg-lb-btn rlg-lb-close" type="button" aria-label="Close">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 18L18 6M6 6l12 12"/></svg>
  </button>
  <button class="rlg-lb-btn rlg-lb-prev" type="button" aria-label="Previous">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
  </button>
  <button class="rlg-lb-btn rlg-lb-next" type="button" aria-label="Next">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
  </button>

  <div class="rlg-lb-panel">
    <div class="rlg-lb-imgwrap">
      <span class="rlg-lb-badge" id="rlg-lb-badge"></span>

      <!-- Pestañas Before / After (solo si el proyecto tiene foto "before") -->
      <div class="rlg-lb-tabs" id="rlg-lb-tabs">
        <button class="rlg-lb-tab is-active" type="button" data-tab="after">After</button>
        <button class="rlg-lb-tab" type="button" data-tab="before">Before</button>
      </div>

      <img class="rlg-lb-img" id="rlg-lb-img" src="" alt="" />
    </div>
    <div class="rlg-lb-bar">
      <div class="rlg-lb-meta">
        <span class="rlg-lb-cap" id="rlg-lb-cap"></span>
        <span class="rlg-lb-pos" id="rlg-lb-pos"></span>
      </div>
      <a class="rlg-lb-link" id="rlg-lb-link" href="#">
        View service
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</div>


<!-- ══════════════════════════════════════════════
     FILTROS DE GALERÍA — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-gallery');
  if (!root) return;
  var filters = root.querySelectorAll('.rlg-filter');
  var cards = root.querySelectorAll('.rlg-card');
  var countEl = document.getElementById('rlg-count');

  filters.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var f = this.getAttribute('data-filter');

      filters.forEach(function (b) {
        var on = (b === btn);
        b.classList.toggle('is-active', on);
        b.setAttribute('aria-pressed', on ? 'true' : 'false');
      });

      var shown = 0;
      cards.forEach(function (card) {
        var show = (f === 'all') || (card.getAttribute('data-service') === f);
        card.classList.toggle('is-hidden', !show);
        if (show) shown++;
      });

      if (countEl) countEl.textContent = shown;
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
        var el = entry.target;
        if (entry.isIntersecting) {
          el.style.transitionDelay = el._d + 'ms';
          el.classList.add('rl-in');
          el.addEventListener('transitionend', function clear() {
            el.style.transitionDelay = '';
            el.removeEventListener('transitionend', clear);
          });
        } else {
          el.style.transitionDelay = '';
          el.classList.remove('rl-in');
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });

    targets.forEach(function (el) { obs.observe(el); });
  } catch (e) {
    revealAll();
  }
})();
</script>

<!-- ══════════════════════════════════════════════
     LIGHTBOX — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-gallery');
  if (!root) return;

  var lb     = document.getElementById('rlg-lightbox');
  var imgEl  = document.getElementById('rlg-lb-img');
  var badge  = document.getElementById('rlg-lb-badge');
  var cap    = document.getElementById('rlg-lb-cap');
  var pos    = document.getElementById('rlg-lb-pos');
  var link   = document.getElementById('rlg-lb-link');
  if (!lb) return;

  var prevBtn  = lb.querySelector('.rlg-lb-prev');
  var nextBtn  = lb.querySelector('.rlg-lb-next');
  var closeBtn = lb.querySelector('.rlg-lb-close');
  var imgWrap  = lb.querySelector('.rlg-lb-imgwrap');

  // Pestañas Before / After
  var tabsWrap = document.getElementById('rlg-lb-tabs');
  var tabs     = lb.querySelectorAll('.rlg-lb-tab');

  var current = -1;     // índice dentro de la lista visible actual
  var list = [];        // cards visibles en el momento de abrir
  var activeTab = 'after';

  // Solo las cards que no están ocultas por el filtro
  function visibleCards() {
    return Array.prototype.filter.call(
      root.querySelectorAll('.rlg-card'),
      function (c) { return !c.classList.contains('is-hidden'); }
    );
  }

  function render() {
    var card = list[current];
    if (!card) return;

    var img    = card.getAttribute('data-img');
    var before = card.getAttribute('data-before');
    var alt    = card.getAttribute('data-alt') || '';
    var label  = card.getAttribute('data-label') || '';
    var href   = card.getAttribute('data-href') || '#';

    badge.textContent = label;
    cap.textContent   = alt;
    pos.textContent   = 'Project ' + (current + 1) + ' of ' + list.length;
    link.setAttribute('href', href);

    // ¿Tiene foto "before"? → mostrar pestañas
    var hasBA = !!(img && before);
    tabsWrap.style.display = hasBA ? 'flex' : 'none';
    if (!hasBA) activeTab = 'after';

    // Marcar pestaña activa
    tabs.forEach(function (t) {
      t.classList.toggle('is-active', t.getAttribute('data-tab') === activeTab);
    });

    // Quitar cualquier placeholder previo
    var ph = imgWrap.querySelector('.rlg-lb-ph');
    if (ph) ph.parentNode.removeChild(ph);

    // Foto a mostrar según la pestaña
    var src = (activeTab === 'before' && before) ? before : img;

    if (src) {
      imgEl.style.display = '';
      imgEl.src = src;
      imgEl.alt = (activeTab === 'before') ? (alt + ' — before') : alt;
    } else {
      imgEl.style.display = 'none';
      var div = document.createElement('div');
      div.className = 'rlg-lb-ph';
      div.textContent = label;
      imgWrap.appendChild(div);
    }

    // Un solo elemento visible → ocultar prev/next
    var solo = list.length <= 1;
    prevBtn.style.display = solo ? 'none' : '';
    nextBtn.style.display = solo ? 'none' : '';
  }

  function open(card) {
    list = visibleCards();
    current = list.indexOf(card);
    if (current === -1) return;
    activeTab = 'after';
    render();
    lb.classList.add('is-open');
    lb.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function close() {
    lb.classList.remove('is-open');
    lb.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    current = -1;
    activeTab = 'after';
  }

  function go(step) {
    if (!list.length) return;
    current = (current + step + list.length) % list.length;
    activeTab = 'after';   // al cambiar de proyecto, volvemos a "After"
    render();
  }

  // Clic en pestañas
  tabs.forEach(function (t) {
    t.addEventListener('click', function (e) {
      e.stopPropagation();
      activeTab = t.getAttribute('data-tab');
      render();
    });
  });

  // Clic en una card → abrir lightbox (sin navegar).
  // Respetamos clic medio / Ctrl / Cmd para abrir el servicio en pestaña nueva.
  root.querySelectorAll('.rlg-card').forEach(function (card) {
    card.addEventListener('click', function (e) {
      if (e.metaKey || e.ctrlKey || e.shiftKey || e.button === 1) return;
      e.preventDefault();
      open(card);
    });
  });

  closeBtn.addEventListener('click', close);
  prevBtn.addEventListener('click', function (e) { e.stopPropagation(); go(-1); });
  nextBtn.addEventListener('click', function (e) { e.stopPropagation(); go(1); });

  // Clic fuera del panel → cerrar
  lb.addEventListener('click', function (e) { if (e.target === lb) close(); });

  // Teclado
  document.addEventListener('keydown', function (e) {
    if (!lb.classList.contains('is-open')) return;
    if (e.key === 'Escape') close();
    else if (e.key === 'ArrowLeft') go(-1);
    else if (e.key === 'ArrowRight') go(1);
  });

  // Swipe táctil
  var tx = null;
  lb.addEventListener('touchstart', function (e) { tx = e.touches[0].clientX; }, { passive: true });
  lb.addEventListener('touchend', function (e) {
    if (tx === null) return;
    var dx = e.changedTouches[0].clientX - tx;
    if (Math.abs(dx) > 50) go(dx < 0 ? 1 : -1);
    tx = null;
  });
})();
</script>

<?php get_footer(); ?>