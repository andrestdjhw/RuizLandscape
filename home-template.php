<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */

/* ══════════════════════════════════════════════
   IMÁGENES DE LA PÁGINA
   Pega aquí las URL de la Biblioteca de Medios de WordPress.
   (Medios → clic en la imagen → copia la "File URL" / "URL del archivo")

   • Deja un valor vacío ('') y ese elemento simplemente no muestra foto.
   • Funciona con URL absolutas (https://...) o relativas a la raíz (/wp-content/...).
   • Para el JSON-LD (logo y og-image) se recomienda URL absoluta.
══════════════════════════════════════════════ */
$rl_images = array(

  // ── Fondos de sección (CSS) ──
  'hero-bg'          => '/wp-content/uploads/2026/06/RuizLandscape-scaled.jpg', // Sección 1 — fondo del hero
  'cta-bg'           => '', // Sección 8 — fondo del CTA final

  // ── Sección 2 · Welcome ──
  'welcome-main'     => '/wp-content/uploads/2026/06/RuizCrew.png',
  'welcome-accent'   => '', // foto pequeña sobrepuesta (esquina)

  // ── Sección 3 · Tarjetas de servicios ──
  'landscape-design' => '/wp-content/uploads/2026/06/LandscapeDesignInstallation-scaled.jpg',
  'lawn-care'        => '/wp-content/uploads/2026/06/LawnCareMaintenance-scaled.jpg',
  'tree-shrub'       => '/wp-content/uploads/2026/06/TreeShrubCare-scaled.jpg',
  'irrigation'       => '/wp-content/uploads/2026/06/Irrigation-scaled.jpg',
  'synthetic-turf'   => '/wp-content/uploads/2026/06/SyntethicTurf-scaled.jpg',
  'large-trees'      => '/wp-content/uploads/2026/06/TreeInstallation-scaled.jpg',
  'lighting'         => '/wp-content/uploads/2026/06/OutdoorLightningSystem-scaled.jpg',

  // ── Sección 4 · Why Choose Us ──
  'why-photo'        => '', // retrato / foto del equipo

  // ── Marca / Schema (JSON-LD) ──
  'logo'             => 'https://www.ruizlandscape.com/wp-content/themes/ruizlandscape/assets/logo.png',
  'og-image'         => 'https://www.ruizlandscape.com/wp-content/themes/ruizlandscape/assets/og-image.jpg',
);

get_header(); ?>

<!-- ══════════════════════════════════════════════
     JSON-LD SCHEMA MARKUP
══════════════════════════════════════════════ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "https://www.ruizlandscape.com/#business",
      "name": "Ruiz Landscape Service, Inc.",
      "url": "https://www.ruizlandscape.com",
      "logo": "<?php echo esc_url( $rl_images['logo'] ); ?>",
      "image": "<?php echo esc_url( $rl_images['og-image'] ); ?>",
      "description": "Family-owned, eco-conscious landscaping company serving Orange, Los Angeles, and Imperial counties in Southern California.",
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
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 33.6846,
        "longitude": -117.8265
      },
      "areaServed": [
        { "@type": "County", "name": "Orange County" },
        { "@type": "County", "name": "Los Angeles County" },
        { "@type": "County", "name": "Imperial County" }
      ],
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "08:00",
          "closes": "17:00"
        }
      ],
      "sameAs": [
        "https://www.facebook.com/ruiz.landscape.7",
        "https://twitter.com/RuizLandscapeOC",
        "https://www.instagram.com/ruizlandscapeservices"
      ]
    },
    {
      "@type": "Organization",
      "@id": "https://www.ruizlandscape.com/#org",
      "name": "Ruiz Landscape Service, Inc.",
      "url": "https://www.ruizlandscape.com",
      "logo": "<?php echo esc_url( $rl_images['logo'] ); ?>",
      "sameAs": [
        "https://www.facebook.com/ruiz.landscape.7",
        "https://twitter.com/RuizLandscapeOC",
        "https://www.instagram.com/ruizlandscapeservices"
      ]
    },
    {
      "@type": "Service",
      "serviceType": "Landscape Design & Installation",
      "provider": { "@id": "https://www.ruizlandscape.com/#business" },
      "areaServed": "Orange County, CA",
      "url": "https://www.ruizlandscape.com/services/landscape-design-installation"
    },
    {
      "@type": "Service",
      "serviceType": "Lawn Care & Maintenance",
      "provider": { "@id": "https://www.ruizlandscape.com/#business" },
      "areaServed": "Orange County, CA",
      "url": "https://www.ruizlandscape.com/services/lawn-care-maintenance"
    },
    {
      "@type": "Service",
      "serviceType": "Tree & Shrub Care",
      "provider": { "@id": "https://www.ruizlandscape.com/#business" },
      "areaServed": "Orange County, CA",
      "url": "https://www.ruizlandscape.com/services/tree-shrub-care"
    },
    {
      "@type": "Service",
      "serviceType": "Irrigation Systems",
      "provider": { "@id": "https://www.ruizlandscape.com/#business" },
      "areaServed": "Orange County, CA",
      "url": "https://www.ruizlandscape.com/services/irrigation-systems"
    },
    {
      "@type": "Service",
      "serviceType": "Synthetic Turf Installation",
      "provider": { "@id": "https://www.ruizlandscape.com/#business" },
      "areaServed": "Orange County, CA",
      "url": "https://www.ruizlandscape.com/services/synthetic-turf"
    },
    {
      "@type": "Service",
      "serviceType": "Large Tree Installation",
      "provider": { "@id": "https://www.ruizlandscape.com/#business" },
      "areaServed": "Orange County, CA",
      "url": "https://www.ruizlandscape.com/services/large-tree-installation"
    },
    {
      "@type": "Service",
      "serviceType": "Low Voltage Landscape Lighting",
      "provider": { "@id": "https://www.ruizlandscape.com/#business" },
      "areaServed": "Orange County, CA",
      "url": "https://www.ruizlandscape.com/services/low-voltage-lighting"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What areas do you serve?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We're headquartered in Irvine and serve homeowners across Orange, Los Angeles, and Imperial counties in California."
          }
        },
        {
          "@type": "Question",
          "name": "What makes your landscaping eco-conscious?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sustainability is built into every design — water-wise and drought-tolerant planting, efficient irrigation, eco-friendly materials, organic lawn care, and synthetic turf as a water-saving option."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle both design and ongoing maintenance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We're a full-service company. The same team can design and install your landscape and then maintain it — lawn care, irrigation service, and tree and shrub care."
          }
        },
        {
          "@type": "Question",
          "name": "Are you licensed and insured?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Ruiz Landscape Service is fully licensed in California (CA ST Lic# 925207). Insurance and license documentation are available on request."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule a free consultation. We'll walk your space, learn how you want to use it, and put together a plan and estimate tailored to your project and budget."
          }
        },
        {
          "@type": "Question",
          "name": "Can you help reduce my water usage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely — it's one of our specialties. Through water-wise design, drought-tolerant plants, efficient irrigation, and synthetic turf, we help homeowners cut water use while keeping their landscape beautiful."
          }
        }
      ]
    }
  ]
}
</script>

<main id="rl-home">
<script>
/* Marca el contenedor ANTES de que se pinten las secciones, de modo que
   nazcan ocultas (sin parpadeo). Si el usuario prefiere movimiento
   reducido, no se activa y todo se muestra normal. */
(function () {
  try {
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduce) {
      document.getElementById('rl-home').classList.add('rl-reveal-on');
    }
  } catch (e) {}
})();
</script>
<style>
/* ══════════════════════════════════════════════
   HOME PAGE STYLES
══════════════════════════════════════════════ */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap');

/* ── Body offset for fixed navbar ── */
body { padding-top: 104px !important; }

/* ── Scoped reset: only direct children of #rl-home sections ── */
#rl-home {
  /* ══ PALETA (basada en el logo) ════════════════
     Cambia un valor aquí y se actualiza todo el home. */
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

/* ── Shared layout ── */
#rl-home .rl-section { padding: 88px 0; }
#rl-home .rl-section-sm { padding: 64px 0; }
#rl-home .rl-container {
  max-width: 1180px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 32px;
  padding-right: 32px;
  width: 100%;
}

#rl-home .rl-eyebrow {
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

#rl-home .rl-eyebrow::before {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--rl-accent);
}

#rl-home .rl-h2 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(23px, 2.8vw, 33px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.1;
  color: var(--rl-green-dark);
}

#rl-home .rl-body-text {
  font-size: 16px;
  line-height: 1.75;
  color: #4a4a3a;
  max-width: 640px;
}

#rl-home .rl-btn-primary {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: var(--rl-green);
  color: #fff;
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

#rl-home .rl-btn-primary:hover {
  background: transparent;
  color: var(--rl-green);
}

#rl-home .rl-btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: transparent;
  color: var(--rl-green);
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

#rl-home .rl-btn-secondary:hover {
  background: var(--rl-green);
  color: #fff;
}

#rl-home .rl-divider {
  width: 48px;
  height: 3px;
  background: var(--rl-accent);
  margin: 20px 0;
}

/* ══ SECTION 1 — HERO ══════════════════════════ */
#rl-home .rl-hero {
  position: relative;
  min-height: 92vh;
  display: flex;
  align-items: center;
  background-color: var(--rl-green-dark);
  overflow: hidden;
}

#rl-home .rl-hero-bg {
  position: absolute;
  inset: 0;
  background-image: url('<?php echo esc_url( $rl_images['hero-bg'] ); ?>');
  background-size: cover;
  background-position: center;
  opacity: 1;
}

/* Overlay diagonal: oscuro a la izquierda (para que el texto se lea),
   medio a la derecha (para que la foto se vea). Sube/baja estos valores
   para oscurecer u aclarar el overlay. */
#rl-home .rl-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    105deg,
    rgba(20,32,10,0.90) 0%,
    rgba(20,32,10,0.70) 40%,
    rgba(20,32,10,0.45) 70%,
    rgba(20,32,10,0.34) 100%
  );
}

#rl-home .rl-hero-content {
  position: relative;
  z-index: 2;
  max-width: 1560px;
  margin-left: auto;
  margin-right: auto;
  padding: 80px clamp(28px, 4.5vw, 64px);
  width: 100%;
}

#rl-home .rl-hero-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 28px;
}

#rl-home .rl-hero-tag {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--rl-accent);
  border: 1px solid rgba(var(--rl-accent-rgb),0.4);
  padding: 5px 12px;
}

#rl-home .rl-hero h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(31px, 4.8vw, 56px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.01em;
  line-height: 1.0;
  color: #ffffff;
  max-width: 720px;
  margin-bottom: 24px;
}

#rl-home .rl-hero h1 span {
  color: var(--rl-green-light);
}

#rl-home .rl-hero-sub {
  font-size: clamp(15px, 1.8vw, 17px);
  line-height: 1.75;
  color: rgba(255,255,255,0.72);
  max-width: 560px;
  margin-bottom: 24px;
}

#rl-home .rl-hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  margin-bottom: 48px;
}

#rl-home .rl-hero-ctas .rl-btn-primary {
  background: var(--rl-accent);
  border-color: var(--rl-accent);
  color: var(--rl-on-accent);
}

#rl-home .rl-hero-ctas .rl-btn-primary:hover {
  background: transparent;
  color: var(--rl-accent);
}

#rl-home .rl-hero-ctas .rl-btn-secondary {
  border-color: rgba(255,255,255,0.4);
  color: rgba(255,255,255,0.85);
}

#rl-home .rl-hero-ctas .rl-btn-secondary:hover {
  background: rgba(255,255,255,0.1);
  color: #fff;
  border-color: rgba(255,255,255,0.7);
}

#rl-home .rl-trust-strip {
  display: flex;
  flex-wrap: wrap;
  gap: 0;
  border-top: 1px solid rgba(255,255,255,0.12);
  padding-top: 28px;
}

#rl-home .rl-trust-item {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 11.5px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.5);
  padding-right: 28px;
  margin-right: 28px;
  border-right: 1px solid rgba(255,255,255,0.12);
}

#rl-home .rl-trust-item:last-child {
  border-right: none;
  margin-right: 0;
  padding-right: 0;
}

#rl-home .rl-trust-item svg { color: var(--rl-accent); flex-shrink: 0; }

/* ══ SECTION 2 — WELCOME ═══════════════════════ */
#rl-home .rl-welcome {
  background: #ffffff;
  border-top: 4px solid var(--rl-accent);
  padding: 0;            /* anula el padding vertical de .rl-section */
}

/* La franja Welcome rompe el contenedor para ir de borde a borde */
#rl-home .rl-welcome .rl-container {
  max-width: none;
  padding-left: 0;
  padding-right: 0;
}

#rl-home .rl-welcome-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  align-items: stretch;
}

#rl-home .rl-welcome-img {
  position: relative;
  height: 100%;
}

#rl-home .rl-welcome-img-main {
  width: 100%;
  height: 100%;
  min-height: 560px;
  object-fit: cover;
  display: block;
}

#rl-home .rl-welcome-img-accent {
  position: absolute;
  bottom: -24px;
  right: -24px;
  width: 200px;
  height: 200px;
  object-fit: cover;
  border: 5px solid #fff;
  box-shadow: 0 8px 32px rgba(0,0,0,0.15);
}

#rl-home .rl-welcome-badge {
  position: absolute;
  top: 24px;
  left: 0;
  background: var(--rl-green);
  color: #fff;
  padding: 14px 20px;
  font-family: 'Montserrat', sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  line-height: 1.3;
}

#rl-home .rl-welcome-text {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 20px;
  padding: 80px clamp(40px, 5vw, 88px);
}

#rl-home .rl-welcome-text .rl-body-text + .rl-body-text { margin-top: -8px; }

#rl-home .rl-text-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: var(--rl-green);
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  text-decoration: none;
  border-bottom: 2px solid var(--rl-accent);
  padding-bottom: 2px;
  transition: color 0.15s;
  width: fit-content;
  margin-top: 8px;
}

#rl-home .rl-text-link:hover { color: var(--rl-accent); }

/* ══ SECTION 3 — SERVICES ══════════════════════ */
#rl-home .rl-services {
  background: var(--rl-cream);
}

#rl-home .rl-services-head {
  text-align: center;
  margin-bottom: 56px;
}

#rl-home .rl-services-head .rl-eyebrow { justify-content: center; }
#rl-home .rl-services-head .rl-divider { margin: 20px auto; }
#rl-home .rl-services-head .rl-body-text { margin: 0 auto; text-align: center; }

#rl-home .rl-service-card {
  background: #ffffff;
  display: flex;
  flex-direction: column;
  position: relative;
  overflow: hidden;
  transition: transform 0.32s cubic-bezier(0.2, 0.7, 0.2, 1), box-shadow 0.32s ease, border-color 0.22s ease, opacity 0.65s ease;
}

#rl-home .rl-services .rl-service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 26px 38px -16px rgba(26, 36, 16, 0.45);
  border-color: var(--rl-green);
}

#rl-home .rl-service-card:hover .rl-service-title { color: var(--rl-green); }

/* Card photo */
#rl-home .rl-service-media {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 300px;
  background: #e9e5dc;
  overflow: hidden;
}

#rl-home .rl-service-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.45s ease;
}

/* Green wash that fades in over the photo on hover */
#rl-home .rl-service-media::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(26, 36, 16, 0.62) 0%, rgba(26, 36, 16, 0.12) 45%, rgba(26, 36, 16, 0) 75%);
  opacity: 0;
  transition: opacity 0.32s ease;
  z-index: 1;
}

#rl-home .rl-service-card:hover .rl-service-media::after { opacity: 1; }
#rl-home .rl-service-card:hover .rl-service-media img { transform: scale(1.08); }

/* Card content */
#rl-home .rl-service-body {
  display: flex;
  flex-direction: column;
  gap: 14px;
  padding: 0 32px 36px;
  flex: 1;
}

#rl-home .rl-service-icon {
  width: 48px;
  height: 48px;
  border: 2px solid #e0dbd0;
  background: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--rl-green);
  flex-shrink: 0;
  position: relative;
  z-index: 2;
  margin-top: -24px;
  transition: border-color 0.18s, background 0.18s, color 0.18s;
}

#rl-home .rl-service-card:hover .rl-service-icon {
  border-color: var(--rl-green);
  background: var(--rl-green);
  color: #ffffff;
}

#rl-home .rl-service-num {
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--rl-accent);
}

#rl-home .rl-service-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 18px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  color: var(--rl-green-dark);
  line-height: 1.2;
}

#rl-home .rl-service-desc {
  font-size: 14px;
  line-height: 1.65;
  color: #5a5a48;
  flex: 1;
}

#rl-home .rl-service-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--rl-green);
  text-decoration: none;
  margin-top: 4px;
  transition: gap 0.15s;
}

#rl-home .rl-service-link:hover { gap: 10px; }

/* ── Services carousel ── */
#rl-home .rl-carousel {
  --rl-gap: 24px;
  --rl-per-view: 3;
  position: relative;
}

#rl-home .rl-carousel-viewport {
  overflow: hidden;
  padding: 12px 0 36px;
}

#rl-home .rl-carousel-track {
  display: flex;
  gap: var(--rl-gap);
  transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1);
  will-change: transform;
}

/* each card occupies an equal fraction of the viewport based on --rl-per-view */
#rl-home .rl-services .rl-service-card {
  flex: 0 0 calc((100% - (var(--rl-per-view) - 1) * var(--rl-gap)) / var(--rl-per-view));
  box-sizing: border-box;
  border: 1px solid #e0dbd0;
}

#rl-home .rl-carousel-controls {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 22px;
  margin-top: 16px;
}

#rl-home .rl-carousel-btn {
  width: 48px;
  height: 48px;
  border: 2px solid var(--rl-green);
  background: #ffffff;
  color: var(--rl-green);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  flex-shrink: 0;
  transition: background 0.18s, color 0.18s, opacity 0.18s;
}

#rl-home .rl-carousel-btn:hover:not(:disabled) { background: var(--rl-green); color: #ffffff; }
#rl-home .rl-carousel-btn:disabled { opacity: 0.3; cursor: default; }

#rl-home .rl-carousel-dots {
  display: flex;
  align-items: center;
  gap: 8px;
}

#rl-home .rl-carousel-dot {
  width: 10px;
  height: 10px;
  padding: 0;
  border: 1.5px solid #b9b3a4;
  background: transparent;
  cursor: pointer;
  transition: background 0.18s, border-color 0.18s;
}

#rl-home .rl-carousel-dot:hover { border-color: var(--rl-green); }
#rl-home .rl-carousel-dot.active { background: var(--rl-accent); border-color: var(--rl-accent); }

/* ══ SECTION 4 — WHY CHOOSE US ═════════════════ */
#rl-home .rl-why {
  background: var(--rl-green-dark);
  color: #fff;
}

#rl-home .rl-why-inner {
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: 80px;
  align-items: start;
}

#rl-home .rl-why-left { position: sticky; top: 120px; }

#rl-home .rl-why-left .rl-eyebrow { color: var(--rl-accent); }
#rl-home .rl-why-left .rl-h2 { color: #ffffff; }
#rl-home .rl-why-left .rl-divider { background: var(--rl-green-mid); }
#rl-home .rl-why-left .rl-body-text { color: rgba(255,255,255,0.6); font-size: 15px; }

#rl-home .rl-why-img {
  width: 100%;
  height: 360px;
  object-fit: cover;
  margin-top: 32px;
  display: block;
}

#rl-home .rl-why-reasons { display: flex; flex-direction: column; }

#rl-home .rl-reason {
  padding: 32px 0;
  border-bottom: 1px solid rgba(255,255,255,0.08);
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: 24px;
  align-items: start;
}

#rl-home .rl-reason:first-child { padding-top: 0; }

#rl-home .rl-reason-num {
  font-family: 'Montserrat', sans-serif;
  font-size: 36px;
  font-weight: 800;
  color: rgba(255,255,255,0.08);
  line-height: 1;
  padding-top: 4px;
}

#rl-home .rl-reason-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 17px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  color: var(--rl-green-light);
  margin-bottom: 10px;
}

#rl-home .rl-reason-body {
  font-size: 14.5px;
  line-height: 1.7;
  color: rgba(255,255,255,0.6);
}

/* ══ SECTION 5 — AREAS WE SERVE ═══════════════ */
#rl-home .rl-areas { background: #ffffff; }

#rl-home .rl-areas-head { margin-bottom: 52px; }

#rl-home .rl-areas-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2px;
  background: #e0dbd0;
  margin-bottom: 48px;
}

#rl-home .rl-area-card {
  background: #fff;
  padding: 40px 32px;
  transition: background 0.18s, opacity 0.7s ease, transform 0.7s cubic-bezier(0.16, 0.84, 0.34, 1);
}

#rl-home .rl-area-card:hover { background: #f7f5f0; }

#rl-home .rl-area-badge {
  display: inline-block;
  background: var(--rl-green);
  color: #fff;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 4px 10px;
  margin-bottom: 20px;
}

#rl-home .rl-area-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 22px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  color: var(--rl-green-dark);
  margin-bottom: 14px;
  line-height: 1.2;
}

#rl-home .rl-area-body {
  font-size: 14px;
  line-height: 1.7;
  color: #5a5a48;
  margin-bottom: 20px;
}

#rl-home .rl-area-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--rl-green);
  text-decoration: none;
  border-bottom: 2px solid var(--rl-accent);
  padding-bottom: 2px;
  transition: color 0.15s;
}

#rl-home .rl-area-link:hover { color: var(--rl-accent); }

/* ══ SECTION 6 — HOW WE WORK ══════════════════ */
#rl-home .rl-process { background: var(--rl-cream); }

#rl-home .rl-process-head { text-align: center; margin-bottom: 64px; }
#rl-home .rl-process-head .rl-eyebrow { justify-content: center; }
#rl-home .rl-process-head .rl-divider { margin: 20px auto; }

#rl-home .rl-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2px;
  background: #ddd9ce;
}

#rl-home .rl-step {
  background: #fff;
  padding: 40px 28px;
  position: relative;
  overflow: hidden;
}

#rl-home .rl-step-bg-num {
  position: absolute;
  top: -10px;
  right: -4px;
  font-family: 'Montserrat', sans-serif;
  font-size: 100px;
  font-weight: 800;
  color: rgba(61,90,42,0.04);
  line-height: 1;
  pointer-events: none;
  user-select: none;
}

#rl-home .rl-step-num {
  font-family: 'Montserrat', sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--rl-accent);
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  gap: 8px;
}

#rl-home .rl-step-num::after {
  content: '';
  flex: 1;
  height: 1px;
  background: #e0dbd0;
}

#rl-home .rl-step-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 20px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  color: var(--rl-green-dark);
  margin-bottom: 14px;
}

#rl-home .rl-step-body {
  font-size: 14px;
  line-height: 1.7;
  color: #5a5a48;
}

/* ══ SECTION 7 — FAQ ══════════════════════════ */
#rl-home .rl-faq { background: #ffffff; }

#rl-home .rl-faq-inner {
  display: grid;
  grid-template-columns: 1fr 1.8fr;
  gap: 80px;
  align-items: start;
}

#rl-home .rl-faq-left { position: sticky; top: 120px; }
#rl-home .rl-faq-left .rl-body-text { font-size: 15px; }

#rl-home .rl-faq-list { display: flex; flex-direction: column; gap: 2px; }

#rl-home .rl-faq-item {
  border: 1px solid #e8e4da;
  background: #fff;
}

#rl-home .rl-faq-q {
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

#rl-home .rl-faq-q:hover { background: #f7f5f0; }

#rl-home .rl-faq-icon {
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

#rl-home .rl-faq-item.open .rl-faq-icon {
  background: var(--rl-green);
  color: #fff;
}

#rl-home .rl-faq-a {
  display: none;
  padding: 0 24px 20px;
  font-size: 14.5px;
  line-height: 1.75;
  color: #5a5a48;
  border-top: 1px solid #e8e4da;
}

#rl-home .rl-faq-item.open .rl-faq-a { display: block; padding-top: 18px; }

/* ══ SECTION 8 — FINAL CTA ════════════════════ */
#rl-home .rl-final-cta {
  background: var(--rl-green);
  position: relative;
  overflow: hidden;
}

#rl-home .rl-final-cta-bg {
  position: absolute;
  inset: 0;
  background-image: url('<?php echo esc_url( $rl_images['cta-bg'] ); ?>');
  background-size: cover;
  background-position: center;
  opacity: 0.12;
}

#rl-home .rl-final-cta-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 96px 32px;
  max-width: 720px;
  margin-left: auto;
  margin-right: auto;
}

#rl-home .rl-final-cta .rl-eyebrow { justify-content: center; color: var(--rl-green-light); }
#rl-home .rl-final-cta .rl-eyebrow::before { background: var(--rl-accent); }

#rl-home .rl-final-cta .rl-h2 {
  color: #ffffff;
  margin-bottom: 20px;
}

#rl-home .rl-final-cta .rl-body-text {
  color: rgba(255,255,255,0.72);
  margin: 0 auto 40px;
  text-align: center;
  max-width: 560px;
}

#rl-home .rl-final-cta-btns {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 14px;
}

#rl-home .rl-final-cta .rl-btn-primary {
  background: var(--rl-accent);
  border-color: var(--rl-accent);
  color: var(--rl-on-accent);
}

#rl-home .rl-final-cta .rl-btn-primary:hover {
  background: transparent;
  color: var(--rl-accent);
}

#rl-home .rl-final-cta .rl-btn-secondary {
  border-color: rgba(255,255,255,0.4);
  color: rgba(255,255,255,0.85);
}

#rl-home .rl-final-cta .rl-btn-secondary:hover {
  background: rgba(255,255,255,0.1);
  color: #fff;
  border-color: rgba(255,255,255,0.7);
}

/* ══ RESPONSIVE ═══════════════════════════════ */
@media (max-width: 1024px) {
  #rl-home .rl-services .rl-carousel { --rl-per-view: 2; }
  #rl-home .rl-steps { grid-template-columns: repeat(2, 1fr); }
  #rl-home .rl-why-inner { grid-template-columns: 1fr; gap: 48px; }
  #rl-home .rl-why-left { position: static; }
  #rl-home .rl-why-img { height: 260px; }
  #rl-home .rl-faq-inner { grid-template-columns: 1fr; gap: 40px; }
  #rl-home .rl-faq-left { position: static; }
}

@media (max-width: 768px) {
  #rl-home .rl-section { padding: 64px 0; }
  #rl-home .rl-welcome-inner { grid-template-columns: 1fr; gap: 0; }
  #rl-home .rl-welcome-img-main { min-height: 360px; }
  #rl-home .rl-welcome-text { padding: 48px 24px; }
  #rl-home .rl-welcome-img-accent { display: none; }
  #rl-home .rl-areas-grid { grid-template-columns: 1fr; }
  #rl-home .rl-trust-item { border-right: none; margin-right: 0; padding-right: 0; }
}

@media (max-width: 560px) {
  #rl-home .rl-container { padding: 0 20px; }
  #rl-home .rl-services .rl-carousel { --rl-per-view: 1; }
  #rl-home .rl-steps { grid-template-columns: 1fr; }
  #rl-home .rl-hero h1 { font-size: 36px; }
}

/* ══ SCROLL REVEAL ════════════════════════════
   Activo solo si JS añade .rl-reveal-on al contenedor
   y el usuario NO prefiere movimiento reducido.
══════════════════════════════════════════════ */
@media (prefers-reduced-motion: no-preference) {

  /* Subida + fundido (elementos sin transición propia) */
  #rl-home.rl-reveal-on .rl-welcome-text,
  #rl-home.rl-reveal-on .rl-services-head,
  #rl-home.rl-reveal-on .rl-why-img,
  #rl-home.rl-reveal-on .rl-reason,
  #rl-home.rl-reveal-on .rl-areas-head,
  #rl-home.rl-reveal-on .rl-process-head,
  #rl-home.rl-reveal-on .rl-step,
  #rl-home.rl-reveal-on .rl-faq-item,
  #rl-home.rl-reveal-on .rl-final-cta-inner {
    opacity: 0;
    transform: translateY(34px);
    transition: opacity 0.7s cubic-bezier(0.16, 0.84, 0.34, 1),
                transform 0.7s cubic-bezier(0.16, 0.84, 0.34, 1);
  }

  /* Tarjetas con transición propia: solo fijamos el estado inicial;
     la transición la aporta su propia regla (el hover sigue rápido). */
  #rl-home.rl-reveal-on .rl-service-card,
  #rl-home.rl-reveal-on .rl-area-card {
    opacity: 0;
    transform: translateY(34px);
  }

  /* Solo fundido (imagen full-bleed y columnas sticky: evitan
     huecos por el desplazamiento y no rompen el position:sticky) */
  #rl-home.rl-reveal-on .rl-welcome-img,
  #rl-home.rl-reveal-on .rl-why-left,
  #rl-home.rl-reveal-on .rl-faq-left {
    opacity: 0;
    transition: opacity 0.85s ease;
  }

  /* Estado revelado */
  #rl-home.rl-reveal-on .rl-in {
    opacity: 1;
    transform: none;
  }
}

/* ══ HERO SPLIT + CONTACT FORM ════════════════ */
#rl-home .rl-hero-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 48px;
  align-items: start;
  width: 100%;
}

#rl-home .rl-hero-copy h1 { max-width: none; }
#rl-home .rl-hero-copy .rl-hero-ctas { margin-bottom: 0; }

/* El formulario de contacto vive ahora en el componente React
   src/scripts/ContactForm.js (se monta en #render-contact-form-here).
   Sus estilos van dentro del propio componente. */

/* ══ TRUST BAR — MARQUEE ══════════════════════ */
#rl-home .rl-trustbar {
  background: var(--rl-green-dark);
  border-top: 1px solid rgba(255,255,255,0.08);
  border-bottom: 1px solid rgba(255,255,255,0.08);
  padding: 18px 0;
  overflow: hidden;
}

#rl-home .rl-marquee {
  overflow: hidden;
  -webkit-mask-image: linear-gradient(90deg, transparent, #000 7%, #000 93%, transparent);
  mask-image: linear-gradient(90deg, transparent, #000 7%, #000 93%, transparent);
}

#rl-home .rl-marquee-track {
  display: flex;
  width: max-content;
  animation: rl-marquee 40s linear infinite;
}

/* Pausa al pasar el cursor */
#rl-home .rl-marquee:hover .rl-marquee-track { animation-play-state: paused; }

#rl-home .rl-marquee-group { display: flex; }

#rl-home .rl-trust-chip {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  margin-right: 64px;     /* separación uniforme (incl. el último) → loop sin saltos */
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.62);
  white-space: nowrap;
}

#rl-home .rl-trust-chip svg { color: var(--rl-accent); flex-shrink: 0; }

@keyframes rl-marquee {
  from { transform: translateX(-50%); }  /* el contenido se mueve hacia la DERECHA */
  to   { transform: translateX(0); }
}
/* Para invertir el sentido (derecha → izquierda):
   from { transform: translateX(0); } to { transform: translateX(-50%); } */

@media (prefers-reduced-motion: reduce) {
  #rl-home .rl-marquee-track { animation: none; }
}

/* ── Hero responsive ── */
@media (max-width: 900px) {
  #rl-home .rl-hero { min-height: auto; }
  #rl-home .rl-hero-content { padding-top: 64px; padding-bottom: 64px; }
  #rl-home .rl-hero-grid { grid-template-columns: 1fr; gap: 36px; }
}

/* ══ HERO — ANIMACIÓN DE ENTRADA (al cargar) ══════
   Aparece escalonado el headline y, un poco después, el
   formulario. Solo si el usuario NO prefiere movimiento reducido.
══════════════════════════════════════════════════ */
@media (prefers-reduced-motion: no-preference) {
  #rl-home .rl-hero-tags,
  #rl-home .rl-hero-copy h1,
  #rl-home .rl-hero-copy .rl-hero-sub,
  #rl-home .rl-hero-ctas {
    opacity: 0;
    animation: rl-hero-rise 0.85s cubic-bezier(0.16, 0.84, 0.34, 1) both;
  }
  #rl-home .rl-hero-tags              { animation-delay: 0.10s; }
  #rl-home .rl-hero-copy h1           { animation-delay: 0.22s; }
  #rl-home .rl-hero-copy .rl-hero-sub { animation-delay: 0.34s; }
  #rl-home .rl-hero-ctas              { animation-delay: 0.46s; }
}

@keyframes rl-hero-rise {
  from { opacity: 0; transform: translateY(26px); }
  to   { opacity: 1; transform: translateY(0); }
}
</style>

<!-- ══════════════════════════════════════════════
     SECTION 1 — HERO
══════════════════════════════════════════════ -->
<section class="rl-hero" aria-label="Hero">
  <div class="rl-hero-bg" role="img" aria-label="Ruiz Landscape project photo"></div>
  <div class="rl-hero-overlay"></div>
  <div class="rl-hero-content">
    <div class="rl-hero-grid">

      <!-- ── Mitad izquierda: headline ── -->
      <div class="rl-hero-copy">
        <div class="rl-hero-tags">
          <span class="rl-hero-tag">Family-Owned</span>
          <span class="rl-hero-tag">Eco-Conscious</span>
          <span class="rl-hero-tag">Orange, LA &amp; Imperial Counties</span>
        </div>

        <h1>Eco-conscious landscaping<br><span>for a greener tomorrow.</span></h1>

        <p class="rl-hero-sub">
          Your outdoor space can be more than a yard — it can be a sanctuary. As a family-owned landscaping company serving Orange, Los Angeles, and Imperial counties, Ruiz Landscape designs, builds, and cares for beautiful, sustainable landscapes that work in harmony with California's climate.
        </p>

        <div class="rl-hero-ctas">
          <a href="/contact?utm_source=home&utm_medium=hero&utm_campaign=cta" class="rl-btn-primary">
            Schedule a free consultation
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#rl-services" class="rl-btn-secondary">Explore our work</a>
        </div>
      </div>

      <!-- ── Mitad derecha: formulario de contacto (componente React) ── -->
      <!-- Se monta aquí ContactForm desde src/index.js → #render-contact-form-here -->
      <div id="render-contact-form-here"></div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     TRUST BAR — MARQUEE (sección aparte)
══════════════════════════════════════════════ -->
<section class="rl-trustbar" aria-label="Trust highlights">
  <div class="rl-marquee">
    <div class="rl-marquee-track">

      <?php
      /* Un solo grupo de chips; se duplica abajo (aria-hidden) para que
         el desplazamiento sea infinito y sin saltos. */
      ?>
      <div class="rl-marquee-group">
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          Family-Owned &amp; Operated
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 7h6M9 11h6M9 15h4"/></svg>
          CA Lic# 925207
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"/></svg>
          Eco-Conscious Practices
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          Serving OC, LA &amp; Imperial Counties
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
          Better Business Bureau Accredited
        </span>
      </div>

      <div class="rl-marquee-group" aria-hidden="true">
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          Family-Owned &amp; Operated
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 7h6M9 11h6M9 15h4"/></svg>
          CA Lic# 925207
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"/></svg>
          Eco-Conscious Practices
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          Serving OC, LA &amp; Imperial Counties
        </span>
        <span class="rl-trust-chip">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
          Better Business Bureau Accredited
        </span>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 2 — WELCOME
══════════════════════════════════════════════ -->
<section class="rl-section rl-welcome" id="rl-welcome">
  <div class="rl-container">
    <div class="rl-welcome-inner">

      <div class="rl-welcome-img">
        <?php if ( ! empty( $rl_images['welcome-main'] ) ) : ?>
          <img
            src="<?php echo esc_url( $rl_images['welcome-main'] ); ?>"
            alt="Ruiz Landscape team at a completed landscape project in Orange County"
            class="rl-welcome-img-main"
            loading="eager"
            width="580" height="480"
          />
        <?php endif; ?>
        <?php if ( ! empty( $rl_images['welcome-accent'] ) ) : ?>
          <img
            src="<?php echo esc_url( $rl_images['welcome-accent'] ); ?>"
            alt="Detail of eco-conscious garden design by Ruiz Landscape"
            class="rl-welcome-img-accent"
            loading="lazy"
            width="200" height="200"
          />
        <?php endif; ?>
        <div class="rl-welcome-badge">
          Family-Owned<br>Since Day One
        </div>
      </div>

      <div class="rl-welcome-text">
        <span class="rl-eyebrow">Welcome to Ruiz Landscape</span>
        <h2 class="rl-h2">Family-owned landscaping, rooted in Southern California.</h2>
        <div class="rl-divider"></div>
        <p class="rl-body-text">
          At Ruiz Landscape, we believe every outdoor space has the potential to be a haven of tranquility and beauty. As a family-owned and operated company, we bring trust, integrity, and a genuine love of the craft to every project we take on — whether it's a complete backyard transformation or keeping an established garden thriving.
        </p>
        <p class="rl-body-text">
          We serve the communities of Orange, Los Angeles, and Imperial counties with a simple commitment: to create landscapes that captivate the eye, nurture the environment, and enrich the lives of the families who enjoy them.
        </p>
        <a href="/about" class="rl-text-link">
          Learn our story
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 3 — SERVICES (CAROUSEL)
══════════════════════════════════════════════ -->
<section class="rl-section rl-services" id="rl-services" aria-labelledby="services-heading">
  <div class="rl-container">

    <div class="rl-services-head">
      <span class="rl-eyebrow">What We Do</span>
      <h2 class="rl-h2" id="services-heading">Everything your landscape needs,<br>from one trusted team.</h2>
      <div class="rl-divider"></div>
      <p class="rl-body-text">
        Great landscapes aren't built once and forgotten — they're designed, installed, and cared for over time. Ruiz Landscape offers a full range of services so the same trusted team can take your property from first sketch to lasting care.
      </p>
    </div>

    <div class="rl-carousel">
      <div class="rl-carousel-viewport">
        <div class="rl-carousel-track">

          <!-- Card 1 — Landscape Design & Installation (compass) -->
          <article class="rl-service-card">
            <div class="rl-service-media">
              <?php if ( ! empty( $rl_images['landscape-design'] ) ) : ?>
                <img src="<?php echo esc_url( $rl_images['landscape-design'] ); ?>" alt="Landscape design and installation project by Ruiz Landscape" loading="lazy" width="600" height="400">
              <?php endif; ?>
            </div>
            <div class="rl-service-body">
              <div class="rl-service-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><polygon points="14.8 9.2 13.2 13.2 9.2 14.8 10.8 10.8"/></svg>
              </div>
              <span class="rl-service-num">01</span>
              <h3 class="rl-service-title">Landscape Design &amp; Installation</h3>
              <p class="rl-service-desc">From lush gardens to water-wise outdoor living spaces, our designers bring your outdoor vision to life with creativity, expertise, and sustainable materials.</p>
              <a href="/services/landscape-design-installation" class="rl-service-link">
                Learn more
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Card 2 — Lawn Care & Maintenance (sprout) -->
          <article class="rl-service-card">
            <div class="rl-service-media">
              <?php if ( ! empty( $rl_images['lawn-care'] ) ) : ?>
                <img src="<?php echo esc_url( $rl_images['lawn-care'] ); ?>" alt="Lawn care and maintenance by Ruiz Landscape" loading="lazy" width="600" height="400">
              <?php endif; ?>
            </div>
            <div class="rl-service-body">
              <div class="rl-service-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 20h10"/><path d="M12 20c4-1.5 1-5 2.5-8.5"/><path d="M10 11c.9.7 1.4 1.8 1.8 3-1.6.3-2.8.3-3.8-.2-1-.5-1.8-1.5-2.4-3.4 2.2-.4 3.5 0 4.4.6z"/><path d="M14 8a5.6 5.6 0 0 0-.9 3.2c1.5-.1 2.6-.5 3.4-1.1.8-.8 1.3-1.8 1.4-3.7-2.2.1-3.2.8-3.9 1.6z"/></svg>
              </div>
              <span class="rl-service-num">02</span>
              <h3 class="rl-service-title">Lawn Care &amp; Maintenance</h3>
              <p class="rl-service-desc">Keep your landscape looking its best with comprehensive care — mowing, fertilization, weed control, and seasonal upkeep that protects your investment.</p>
              <a href="/services/lawn-care-maintenance" class="rl-service-link">
                Learn more
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Card 3 — Tree & Shrub Care (tree) -->
          <article class="rl-service-card">
            <div class="rl-service-media">
              <?php if ( ! empty( $rl_images['tree-shrub'] ) ) : ?>
                <img src="<?php echo esc_url( $rl_images['tree-shrub'] ); ?>" alt="Tree and shrub care by Ruiz Landscape" loading="lazy" width="600" height="400">
              <?php endif; ?>
            </div>
            <div class="rl-service-body">
              <div class="rl-service-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M8 19a4 4 0 0 1-2.24-7.32A3.5 3.5 0 0 1 9 6.03V6a3 3 0 1 1 6 0v.04a3.5 3.5 0 0 1 3.24 5.65A4 4 0 0 1 16 19Z"/><path d="M12 19v3"/></svg>
              </div>
              <span class="rl-service-num">03</span>
              <h3 class="rl-service-title">Tree &amp; Shrub Care</h3>
              <p class="rl-service-desc">Professional pruning, trimming, disease management, and removal to keep every tree and shrub on your property healthy, safe, and thriving.</p>
              <a href="/services/tree-shrub-care" class="rl-service-link">
                Learn more
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Card 4 — Irrigation Systems (droplet) -->
          <article class="rl-service-card">
            <div class="rl-service-media">
              <?php if ( ! empty( $rl_images['irrigation'] ) ) : ?>
                <img src="<?php echo esc_url( $rl_images['irrigation'] ); ?>" alt="Irrigation system installation by Ruiz Landscape" loading="lazy" width="600" height="400">
              <?php endif; ?>
            </div>
            <div class="rl-service-body">
              <div class="rl-service-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5S12.5 5 12 2.5C11.5 5 10 7.4 8 9.5 6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg>
              </div>
              <span class="rl-service-num">04</span>
              <h3 class="rl-service-title">Irrigation Systems</h3>
              <p class="rl-service-desc">Water-wise irrigation designed to conserve water while keeping your landscape lush — efficient systems, professional installation, and maintenance.</p>
              <a href="/services/irrigation-systems" class="rl-service-link">
                Learn more
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Card 5 — Synthetic Turf (turf grid) -->
          <article class="rl-service-card">
            <div class="rl-service-media">
              <?php if ( ! empty( $rl_images['synthetic-turf'] ) ) : ?>
                <img src="<?php echo esc_url( $rl_images['synthetic-turf'] ); ?>" alt="Synthetic turf installation by Ruiz Landscape" loading="lazy" width="600" height="400">
              <?php endif; ?>
            </div>
            <div class="rl-service-body">
              <div class="rl-service-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3.5" y="3.5" width="7" height="7"/><rect x="13.5" y="3.5" width="7" height="7"/><rect x="3.5" y="13.5" width="7" height="7"/><rect x="13.5" y="13.5" width="7" height="7"/></svg>
              </div>
              <span class="rl-service-num">05</span>
              <h3 class="rl-service-title">Synthetic Turf</h3>
              <p class="rl-service-desc">A pristine, low-maintenance lawn that saves water year-round — ideal for pet-friendly yards, kids' play areas, and homeowners reducing their water use.</p>
              <a href="/services/synthetic-turf" class="rl-service-link">
                Learn more
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Card 6 — Large Tree Installation (pine) -->
          <article class="rl-service-card">
            <div class="rl-service-media">
              <?php if ( ! empty( $rl_images['large-trees'] ) ) : ?>
                <img src="<?php echo esc_url( $rl_images['large-trees'] ); ?>" alt="Large tree installation by Ruiz Landscape" loading="lazy" width="600" height="400">
              <?php endif; ?>
            </div>
            <div class="rl-service-body">
              <div class="rl-service-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3 7 11h3l-4 6h12l-4-6h3z"/><path d="M12 17v4"/></svg>
              </div>
              <span class="rl-service-num">06</span>
              <h3 class="rl-service-title">Large Tree Installation</h3>
              <p class="rl-service-desc">From towering shade trees to majestic specimens, we select and install mature trees with the precision and care that gives them the best chance to thrive.</p>
              <a href="/services/large-tree-installation" class="rl-service-link">
                Learn more
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

          <!-- Card 7 — Low Voltage Lighting (lightbulb) -->
          <article class="rl-service-card">
            <div class="rl-service-media">
              <?php if ( ! empty( $rl_images['lighting'] ) ) : ?>
                <img src="<?php echo esc_url( $rl_images['lighting'] ); ?>" alt="Low voltage landscape lighting by Ruiz Landscape" loading="lazy" width="600" height="400">
              <?php endif; ?>
            </div>
            <div class="rl-service-body">
              <div class="rl-service-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 21h4"/><path d="M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.4 1 2.5h6c0-1.1.4-1.9 1-2.5A6 6 0 0 0 12 3z"/></svg>
              </div>
              <span class="rl-service-num">07</span>
              <h3 class="rl-service-title">Low Voltage Lighting</h3>
              <p class="rl-service-desc">Energy-efficient landscape lighting that accentuates your home's best features, extends your evenings outdoors, and adds curb appeal and safety.</p>
              <a href="/services/low-voltage-lighting" class="rl-service-link">
                Learn more
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </article>

        </div>
      </div>

      <div class="rl-carousel-controls">
        <button class="rl-carousel-btn" data-dir="prev" aria-label="Previous services" type="button">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        </button>
        <div class="rl-carousel-dots" aria-label="Service slides"></div>
        <button class="rl-carousel-btn" data-dir="next" aria-label="Next services" type="button">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </button>
      </div>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 4 — WHY CHOOSE US
══════════════════════════════════════════════ -->
<section class="rl-section rl-why" id="rl-why" aria-labelledby="why-heading">
  <div class="rl-container">
    <div class="rl-why-inner">

      <div class="rl-why-left">
        <span class="rl-eyebrow">Why Ruiz</span>
        <h2 class="rl-h2" id="why-heading">Why homeowners choose Ruiz Landscape.</h2>
        <div class="rl-divider"></div>
        <p class="rl-body-text">
          There are a lot of landscaping companies in Southern California. Here's what makes working with Ruiz different — and why our clients stay with us for years.
        </p>
        <?php if ( ! empty( $rl_images['why-photo'] ) ) : ?>
          <img
            src="<?php echo esc_url( $rl_images['why-photo'] ); ?>"
            alt="Rafael Ruiz, President of Ruiz Landscape Service"
            class="rl-why-img"
            loading="lazy"
            width="480" height="360"
          />
        <?php endif; ?>
      </div>

      <div class="rl-why-reasons">
        <div class="rl-reason">
          <div class="rl-reason-num">01</div>
          <div>
            <div class="rl-reason-title">Family-Owned &amp; Accountable</div>
            <p class="rl-reason-body">We're a family-owned and operated business, which means the people who design your landscape are the same people accountable for it. We treat your home the way we'd treat our own — with trust, integrity, and personalized service from start to finish.</p>
          </div>
        </div>
        <div class="rl-reason">
          <div class="rl-reason-num">02</div>
          <div>
            <div class="rl-reason-title">Eco-Conscious by Design</div>
            <p class="rl-reason-body">Sustainability is at the core of how we work. Water-wise designs, drought-tolerant plantings, eco-friendly materials, and organic lawn care let us build landscapes that are beautiful today and gentler on California's environment for years to come.</p>
          </div>
        </div>
        <div class="rl-reason">
          <div class="rl-reason-num">03</div>
          <div>
            <div class="rl-reason-title">Expertise Across Every Service</div>
            <p class="rl-reason-body">With deep experience across design, installation, maintenance, trees, irrigation, turf, and lighting, our team can handle projects of any size or complexity — and keep them thriving long after installation.</p>
          </div>
        </div>
        <div class="rl-reason">
          <div class="rl-reason-num">04</div>
          <div>
            <div class="rl-reason-title">Attention to Detail</div>
            <p class="rl-reason-body">Excellence lives in the details. From meticulous craftsmanship to clear communication and thorough follow-up, we care about every aspect of the work — because that's what turns a good landscape into a stunning one.</p>
          </div>
        </div>
        <div class="rl-reason">
          <div class="rl-reason-num">05</div>
          <div>
            <div class="rl-reason-title">Licensed &amp; Trusted</div>
            <p class="rl-reason-body">Ruiz Landscape is fully licensed in California (CA ST Lic# 925207). You're working with a credentialed, established company that stands behind its work.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 5 — AREAS WE SERVE
══════════════════════════════════════════════ -->
<section class="rl-section rl-areas" id="rl-areas" aria-labelledby="areas-heading">
  <div class="rl-container">

    <div class="rl-areas-head">
      <span class="rl-eyebrow">Service Areas</span>
      <h2 class="rl-h2" id="areas-heading">Serving Orange, Los Angeles<br>&amp; Imperial counties.</h2>
      <div class="rl-divider"></div>
      <p class="rl-body-text">
        From our headquarters in Irvine, we bring eco-conscious landscaping to homeowners across three Southern California counties. Wherever your home is, the same family-owned team and the same standard of craftsmanship come with us.
      </p>
    </div>

    <div class="rl-areas-grid">

      <div class="rl-area-card">
        <span class="rl-area-badge">Headquarters</span>
        <h3 class="rl-area-title">Orange County</h3>
        <p class="rl-area-body">Our home base. Headquartered in Irvine, serving Newport Beach, Irvine, Anaheim, Huntington Beach, and the full OC.</p>
        <a href="/locations/orange-county" class="rl-area-link">
          Landscaping in Orange County
          <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <div class="rl-area-card">
        <span class="rl-area-badge" style="background:#5a7a3a;">Full Service</span>
        <h3 class="rl-area-title">Los Angeles County</h3>
        <p class="rl-area-body">Full-service landscaping across the LA metro — from coastal communities to inland valleys.</p>
        <a href="/locations/los-angeles-county" class="rl-area-link">
          Landscaping in Los Angeles County
          <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

      <div class="rl-area-card">
        <span class="rl-area-badge" style="background:#7a6030;">Desert Climate</span>
        <h3 class="rl-area-title">Imperial County</h3>
        <p class="rl-area-body">Desert-climate landscaping built for Imperial County's heat, with water-wise design front and center.</p>
        <a href="/locations/imperial-county" class="rl-area-link">
          Landscaping in Imperial County
          <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 6 — HOW WE WORK
══════════════════════════════════════════════ -->
<section class="rl-section rl-process" id="rl-process" aria-labelledby="process-heading">
  <div class="rl-container">

    <div class="rl-process-head">
      <span class="rl-eyebrow">Our Process</span>
      <h2 class="rl-h2" id="process-heading">From first sketch to lasting care<br>— how we work.</h2>
      <div class="rl-divider"></div>
      <p class="rl-body-text" style="margin:0 auto;">Four steps. One trusted team from beginning to end.</p>
    </div>

    <div class="rl-steps">
      <div class="rl-step">
        <div class="rl-step-bg-num" aria-hidden="true">01</div>
        <div class="rl-step-num">Step 01</div>
        <h3 class="rl-step-title">Consultation</h3>
        <p class="rl-step-body">We start with a free consultation — walking your space, understanding how you want to use it, and listening to your vision, your priorities, and your budget.</p>
      </div>
      <div class="rl-step">
        <div class="rl-step-bg-num" aria-hidden="true">02</div>
        <div class="rl-step-num">Step 02</div>
        <h3 class="rl-step-title">Design</h3>
        <p class="rl-step-body">Our designers translate your vision into a plan that balances beauty, function, and sustainability — with water-wise choices built in from the start.</p>
      </div>
      <div class="rl-step">
        <div class="rl-step-bg-num" aria-hidden="true">03</div>
        <div class="rl-step-num">Step 03</div>
        <h3 class="rl-step-title">Installation</h3>
        <p class="rl-step-body">Our crews bring the design to life with careful craftsmanship and clear communication, keeping your project on track and your home respected throughout.</p>
      </div>
      <div class="rl-step">
        <div class="rl-step-bg-num" aria-hidden="true">04</div>
        <div class="rl-step-num">Step 04</div>
        <h3 class="rl-step-title">Ongoing Care</h3>
        <p class="rl-step-body">A landscape is a living investment. We offer maintenance, lawn care, irrigation service, and tree care to keep your space thriving for years to come.</p>
      </div>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 7 — FAQ
══════════════════════════════════════════════ -->
<section class="rl-section rl-faq" id="rl-faq" aria-labelledby="faq-heading">
  <div class="rl-container">
    <div class="rl-faq-inner">

      <div class="rl-faq-left">
        <span class="rl-eyebrow">FAQ</span>
        <h2 class="rl-h2" id="faq-heading">Common questions about working with Ruiz Landscape.</h2>
        <div class="rl-divider"></div>
        <p class="rl-body-text">
          Can't find your answer here? <a href="/contact" style="color:var(--rl-green);font-weight:600;">Reach out directly</a> — we're happy to help.
        </p>
      </div>

      <div class="rl-faq-list">

        <div class="rl-faq-item open">
          <button class="rl-faq-q" aria-expanded="true">
            What areas do you serve?
            <span class="rl-faq-icon">−</span>
          </button>
          <div class="rl-faq-a">
            We're headquartered in Irvine and serve homeowners across <a href="/locations/orange-county" style="color:var(--rl-green);font-weight:600;">Orange</a>, <a href="/locations/los-angeles-county" style="color:var(--rl-green);font-weight:600;">Los Angeles</a>, and <a href="/locations/imperial-county" style="color:var(--rl-green);font-weight:600;">Imperial</a> counties in California. Reach out with your address and we'll confirm we cover your neighborhood.
          </div>
        </div>

        <div class="rl-faq-item">
          <button class="rl-faq-q" aria-expanded="false">
            What makes your landscaping "eco-conscious"?
            <span class="rl-faq-icon">+</span>
          </button>
          <div class="rl-faq-a">
            Sustainability is built into every design — <a href="/services/irrigation-systems" style="color:var(--rl-green);font-weight:600;">water-wise irrigation</a>, drought-tolerant plantings, eco-friendly materials, organic lawn care, and <a href="/services/synthetic-turf" style="color:var(--rl-green);font-weight:600;">synthetic turf</a> as a water-saving option. We design landscapes that work with California's climate, not against it.
          </div>
        </div>

        <div class="rl-faq-item">
          <button class="rl-faq-q" aria-expanded="false">
            Do you handle both design and ongoing maintenance?
            <span class="rl-faq-icon">+</span>
          </button>
          <div class="rl-faq-a">
            Yes. We're a full-service company. The same team can <a href="/services/landscape-design-installation" style="color:var(--rl-green);font-weight:600;">design and install your landscape</a> and then maintain it — <a href="/services/lawn-care-maintenance" style="color:var(--rl-green);font-weight:600;">lawn care</a>, irrigation service, and <a href="/services/tree-shrub-care" style="color:var(--rl-green);font-weight:600;">tree and shrub care</a> — so you have one trusted partner for the life of your landscape.
          </div>
        </div>

        <div class="rl-faq-item">
          <button class="rl-faq-q" aria-expanded="false">
            Are you licensed and insured?
            <span class="rl-faq-icon">+</span>
          </button>
          <div class="rl-faq-a">
            Yes. Ruiz Landscape Service is fully licensed in California (CA ST Lic# 925207). Insurance and license documentation are available on request. <a href="/about" style="color:var(--rl-green);font-weight:600;">Learn more about us.</a>
          </div>
        </div>

        <div class="rl-faq-item">
          <button class="rl-faq-q" aria-expanded="false">
            How do I get started?
            <span class="rl-faq-icon">+</span>
          </button>
          <div class="rl-faq-a">
            <a href="/contact" style="color:var(--rl-green);font-weight:600;">Schedule a free consultation.</a> We'll walk your space, learn how you want to use it, and put together a plan and estimate tailored to your project and budget.
          </div>
        </div>

        <div class="rl-faq-item">
          <button class="rl-faq-q" aria-expanded="false">
            Can you help reduce my water usage?
            <span class="rl-faq-icon">+</span>
          </button>
          <div class="rl-faq-a">
            Absolutely — it's one of our specialties. Through <a href="/services/landscape-design-installation" style="color:var(--rl-green);font-weight:600;">water-wise design</a>, drought-tolerant plants, <a href="/services/irrigation-systems" style="color:var(--rl-green);font-weight:600;">efficient irrigation</a>, and <a href="/services/synthetic-turf" style="color:var(--rl-green);font-weight:600;">synthetic turf</a>, we help homeowners cut water use while keeping their landscape beautiful.
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

</main>

<!-- ══════════════════════════════════════════════
     FAQ ACCORDION — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  document.querySelectorAll('.rl-faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.rl-faq-item');
      var isOpen = item.classList.contains('open');

      // Close all
      document.querySelectorAll('.rl-faq-item').forEach(function (el) {
        el.classList.remove('open');
        el.querySelector('.rl-faq-q').setAttribute('aria-expanded', 'false');
        el.querySelector('.rl-faq-icon').textContent = '+';
      });

      // Open clicked if it was closed
      if (!isOpen) {
        item.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
        item.querySelector('.rl-faq-icon').textContent = '−';
      }
    });
  });
})();
</script>

<!-- ══════════════════════════════════════════════
     SERVICES CAROUSEL — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.querySelector('#rl-services .rl-carousel');
  if (!root) return;

  var track    = root.querySelector('.rl-carousel-track');
  var cards    = Array.prototype.slice.call(track.children);
  var dotsWrap = root.querySelector('.rl-carousel-dots');
  var controls = root.querySelector('.rl-carousel-controls');
  var prevBtn  = root.querySelector('[data-dir="prev"]');
  var nextBtn  = root.querySelector('[data-dir="next"]');
  var index    = 0;

  if (!cards.length) return;

  // How many cards are visible — must match the CSS media queries above.
  function perView() {
    var w = window.innerWidth;
    if (w <= 560) return 1;
    if (w <= 1024) return 2;
    return 3;
  }

  function maxIndex() {
    return Math.max(0, cards.length - perView());
  }

  // Width of one card + the gap, measured from the live layout.
  function step() {
    if (cards.length > 1) {
      return cards[1].offsetLeft - cards[0].offsetLeft;
    }
    return cards[0].getBoundingClientRect().width;
  }

  function buildDots() {
    dotsWrap.innerHTML = '';
    var count = maxIndex() + 1;
    for (var i = 0; i < count; i++) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'rl-carousel-dot' + (i === index ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
      (function (i) {
        dot.addEventListener('click', function () { go(i); });
      })(i);
      dotsWrap.appendChild(dot);
    }
  }

  function update() {
    track.style.transform = 'translateX(' + (-index * step()) + 'px)';

    var dots = dotsWrap.querySelectorAll('.rl-carousel-dot');
    Array.prototype.forEach.call(dots, function (d, i) {
      d.classList.toggle('active', i === index);
    });

    prevBtn.disabled = index <= 0;
    nextBtn.disabled = index >= maxIndex();

    // Hide controls entirely when every card already fits.
    controls.style.display = (maxIndex() === 0) ? 'none' : 'flex';
  }

  function go(i) {
    index = Math.max(0, Math.min(i, maxIndex()));
    update();
  }

  prevBtn.addEventListener('click', function () { go(index - 1); });
  nextBtn.addEventListener('click', function () { go(index + 1); });

  // ── Touch / swipe support ──
  var startX = null;
  var viewport = root.querySelector('.rl-carousel-viewport');

  viewport.addEventListener('touchstart', function (e) {
    startX = e.touches[0].clientX;
  }, { passive: true });

  viewport.addEventListener('touchend', function (e) {
    if (startX === null) return;
    var dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) {
      go(index + (dx < 0 ? 1 : -1));
    }
    startX = null;
  });

  // ── Recalculate on resize ──
  var rafId;
  window.addEventListener('resize', function () {
    cancelAnimationFrame(rafId);
    rafId = requestAnimationFrame(function () {
      index = Math.min(index, maxIndex());
      buildDots();
      update();
    });
  });

  buildDots();
  update();
})();
</script>

<!-- ══════════════════════════════════════════════
     SCROLL REVEAL — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-home');
  if (!root || !root.classList.contains('rl-reveal-on')) return; // reduce-motion u off

  var SELECTOR = [
    '.rl-welcome-img', '.rl-welcome-text',
    '.rl-services-head', '.rl-service-card',
    '.rl-why-left', '.rl-why-img', '.rl-reason',
    '.rl-areas-head', '.rl-area-card',
    '.rl-process-head', '.rl-step',
    '.rl-faq-left', '.rl-faq-item',
    '.rl-final-cta-inner'
  ].join(',');

  var targets = Array.prototype.slice.call(root.querySelectorAll(SELECTOR));
  if (!targets.length) return;

  function revealAll() {
    targets.forEach(function (el) { el.classList.add('rl-in'); });
  }

  // Sin soporte de IntersectionObserver: mostrar todo de inmediato.
  if (!('IntersectionObserver' in window)) { revealAll(); return; }

  try {
    // Escalonado: el retraso de cada elemento según su posición dentro
    // del mismo grupo (hermanos que también son objetivos).
    targets.forEach(function (el) {
      var i = 0, sib = el.previousElementSibling;
      while (sib) {
        if (sib.matches && sib.matches(SELECTOR)) i++;
        sib = sib.previousElementSibling;
      }
      el._rlDelay = Math.min(i, 6) * 90; // ms, con tope para no alargar de más
    });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;

        el.style.transitionDelay = el._rlDelay + 'ms';
        el.classList.add('rl-in');

        // Limpiar el delay tras la animación para no retrasar el hover.
        el.addEventListener('transitionend', function clear() {
          el.style.transitionDelay = '';
          el.removeEventListener('transitionend', clear);
        });

        observer.unobserve(el);
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -8% 0px'
    });

    targets.forEach(function (el) { observer.observe(el); });
  } catch (e) {
    // Cualquier fallo: revelar todo para que nunca quede contenido oculto.
    revealAll();
  }
})();
</script>

<?php get_footer(); ?>