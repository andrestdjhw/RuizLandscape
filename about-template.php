<?php
/**
 * Template Name: About
 * Template Post Type: page
 *
 * SEO (configúralo en tu plugin de SEO / Yoast / Rank Math):
 *   Title:       About Ruiz Landscape | Family-Owned Eco-Friendly Landscaping in Orange County
 *   Description: Family-owned, eco-conscious landscaping led by Rafael Ruiz. Serving Orange,
 *                Los Angeles & Imperial counties with sustainable design and trusted craftsmanship.
 */

/* ══════════════════════════════════════════════
   IMÁGENES DE LA PÁGINA
   Pega las URL de la Biblioteca de Medios (Medios → "File URL").
   Deja '' y ese bloque simplemente no muestra foto.
══════════════════════════════════════════════ */
$rla_images = array(
  'hero-bg'       => '/wp-content/uploads/2026/07/Ruiz-Landscaping-2-scaled.png', // fondo del hero
  'story-img'     => '/wp-content/uploads/2026/07/Ruiz-Landscaping-9-scaled.png', // Sección 2 — foto junto a "Our Story"
  'president-img' => '/wp-content/uploads/2026/07/Ruiz-Landscaping-6-scaled.png', // Sección 3 — foto de Rafael Ruiz (brochure, on-site)
);

/* ── Imágenes de la galería masonry (Sección 4.5). Agrega o quita URLs libremente. ── */
$rla_gallery = array(
  '/wp-content/uploads/2026/07/Ruiz-Landscaping-7-scaled.png',
  '/wp-content/uploads/2026/07/Ruiz-Landscaping-3-scaled.png',
  '/wp-content/uploads/2026/07/Ruiz-Landscaping-9-scaled.png',
  '/wp-content/uploads/2026/07/Ruiz-Landscaping-4-scaled.png',
  '/wp-content/uploads/2026/07/Ruiz-Landscaping-2-scaled.png',
  '/wp-content/uploads/2026/07/Ruiz-Landscaping-8-scaled.png',
  '/wp-content/uploads/2026/07/Ruiz-Landscaping-11-scaled.png',
);
$rla_gallery = array_values( array_filter( $rla_gallery ) );

$rla_has_story = ! empty( $rla_images['story-img'] );

get_header(); ?>

<!-- ══════════════════════════════════════════════
     JSON-LD SCHEMA
══════════════════════════════════════════════ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "@id": "https://www.ruizlandscape.com/about/#aboutpage",
      "url": "https://www.ruizlandscape.com/about",
      "name": "About Ruiz Landscape",
      "description": "Family-owned, eco-conscious landscaping led by Rafael Ruiz. Serving Orange, Los Angeles & Imperial counties with sustainable design and trusted craftsmanship.",
      "about": { "@id": "https://www.ruizlandscape.com/#business" }
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
      "founder": { "@id": "https://www.ruizlandscape.com/#rafael" },
      "sameAs": [
        "https://www.facebook.com/ruiz.landscape.7",
        "https://twitter.com/RuizLandscapeOC",
        "https://www.instagram.com/ruizlandscapeservices"
      ]
    },
    {
      "@type": "Person",
      "@id": "https://www.ruizlandscape.com/#rafael",
      "name": "Rafael Ruiz",
      "jobTitle": "President",
      "worksFor": { "@id": "https://www.ruizlandscape.com/#org" }
    }
  ]
}
</script>

<main id="rl-about">
<script>
/* Activa el modo reveal antes de pintar las secciones (sin parpadeo).
   Si el usuario prefiere movimiento reducido, no se activa. */
(function () {
  try {
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduce) document.getElementById('rl-about').classList.add('rl-reveal-on');
  } catch (e) {}
})();
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap');

/* ── Offset por el navbar fijo ── */
body { padding-top: 104px !important; }

/* ── Base scope ── */
#rl-about {
  /* ══ PALETA (basada en el logo) ════════════════
     Cambia un valor aquí y se actualiza todo el about. */
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

/* ── Utilidades compartidas (scopeadas a #rl-about) ── */
#rl-about .rla-section { padding: 96px 0; }
#rl-about .rla-container {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 32px;
  width: 100%;
}

#rl-about .rl-eyebrow {
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
#rl-about .rl-eyebrow::before {
  content: '';
  width: 24px;
  height: 2px;
  background: var(--rl-accent);
}

#rl-about .rl-h2 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(23px, 2.8vw, 34px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.08;
  color: var(--rl-green-dark);
}

#rl-about .rl-body-text {
  font-size: 16px;
  line-height: 1.75;
  color: #4a4a3a;
}

#rl-about .rl-divider {
  width: 48px;
  height: 3px;
  background: var(--rl-accent);
  margin: 20px 0;
}

#rl-about .rl-btn-primary,
#rl-about .rl-btn-secondary {
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
#rl-about .rl-btn-primary { background: var(--rl-green); color: #fff; }
#rl-about .rl-btn-primary:hover { background: transparent; color: var(--rl-green); }
#rl-about .rl-btn-secondary { background: transparent; color: var(--rl-green); }
#rl-about .rl-btn-secondary:hover { background: var(--rl-green); color: #fff; }

/* Cabeceras centradas */
#rl-about .rla-head { text-align: center; margin-bottom: 56px; }
#rl-about .rla-head .rl-eyebrow { justify-content: center; }
#rl-about .rla-head .rl-divider { margin: 20px auto 0; }

/* ══ SECTION 1 — HERO ══════════════════════════ */
#rl-about .rla-hero {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  background-color: var(--rl-green-dark);
  overflow: hidden;
}
#rl-about .rla-hero-bg {
  position: absolute;
  inset: 0;
  background-image: url('<?php echo esc_url( $rla_images['hero-bg'] ); ?>');
  background-size: cover;
  background-position: center;
}
#rl-about .rla-hero-overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(20,32,10,0.55) 0%, rgba(20,32,10,0.75) 100%),
    radial-gradient(120% 90% at 50% 40%, rgba(20,32,10,0.35) 0%, rgba(20,32,10,0.82) 100%);
}
#rl-about .rla-hero-content {
  position: relative;
  z-index: 2;
  max-width: 920px;
  margin: 0 auto;
  padding: 96px 32px;
  text-align: center;
}
#rl-about .rla-hero-content .rl-eyebrow { color: var(--rl-accent); justify-content: center; }
#rl-about .rla-hero h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(28px, 4.3vw, 48px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.01em;
  line-height: 1.04;
  color: #ffffff;
  margin-bottom: 22px;
}
#rl-about .rla-hero h1 span { color: var(--rl-green-light); }
#rl-about .rla-hero-sub {
  font-size: clamp(15px, 1.7vw, 17.5px);
  line-height: 1.7;
  color: rgba(255,255,255,0.74);
  max-width: 680px;
  margin: 0 auto 36px;
}

/* Trust strip */
#rl-about .rla-trust {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 14px 0;
}
#rl-about .rla-trust span {
  display: inline-flex;
  align-items: center;
  font-size: 11.5px;
  font-weight: 600;
  letter-spacing: 0.09em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.6);
  padding: 0 22px;
  border-right: 1px solid rgba(255,255,255,0.18);
}
#rl-about .rla-trust span:last-child { border-right: none; }

/* ══ SECTION 2 — OUR STORY ═════════════════════ */
#rl-about .rla-story { background: #ffffff; border-top: 4px solid var(--rl-accent); }
#rl-about .rla-story-inner {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  gap: 64px;
  align-items: center;
}
#rl-about .rla-story-inner.is-solo {
  grid-template-columns: 1fr;
  max-width: 760px;
}
#rl-about .rla-story-text { display: flex; flex-direction: column; }
#rl-about .rla-story-text .rl-body-text + .rl-body-text { margin-top: 18px; }
#rl-about .rla-story-img img {
  width: 100%;
  height: 100%;
  min-height: 420px;
  object-fit: cover;
  display: block;
}

/* ══ SECTION 3 — PRESIDENT ═════════════════════ */
#rl-about .rla-president { background: var(--rl-cream); }
#rl-about .rla-president-inner {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 56px;
  align-items: center;
}
#rl-about .rla-president-inner.is-solo { grid-template-columns: 1fr; max-width: 760px; }
#rl-about .rla-president-photo img {
  width: 100%;
  height: 100%;
  min-height: 420px;
  object-fit: cover;
  display: block;
  border-bottom: 4px solid var(--rl-accent);
}
#rl-about .rla-president-quote { position: relative; }
#rl-about .rla-president-quote .rl-eyebrow { color: var(--rl-green-mid); }
#rl-about .rla-president-quote blockquote {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(19px, 2.2vw, 25px);
  font-style: italic;
  font-weight: 500;
  line-height: 1.55;
  color: var(--rl-green-dark);
  margin: 8px 0 24px;
  padding-left: 22px;
  border-left: 3px solid var(--rl-accent);
}
#rl-about .rla-president-by {
  font-family: 'Montserrat', sans-serif;
  font-size: 17px;
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  color: var(--rl-green);
}
#rl-about .rla-president-by span { color: #8a8f7e; font-weight: 600; }

/* ══ SECTION 4 — VISION & MISSION ══════════════ */
#rl-about .rla-vm {
  /* Estampado tejido (Uiverse · marcelodolza, adaptado a la paleta) — igual que el footer */
  --s: 90px;
  --c1: #1b2912;
  --c2: #121b0b;
  --_g: var(--c2) 4% 14%, var(--c1) 14% 24%, var(--c2) 22% 34%,
    var(--c1) 34% 44%, var(--c2) 44% 56%, var(--c1) 56% 66%, var(--c2) 66% 76%,
    var(--c1) 76% 86%, var(--c2) 86% 96%;
  background-color: var(--rl-green-dark); /* respaldo */
  background:
    radial-gradient(100% 100% at 100% 0, var(--c1) 4%, var(--_g), #0008 96%, #0000),
    radial-gradient(100% 100% at 0 100%, #0000, #0008 4%, var(--_g), var(--c1) 96%)
      var(--c1);
  background-size: var(--s) var(--s);
}
#rl-about .rla-vm .rl-eyebrow { color: var(--rl-accent); }
#rl-about .rla-vm .rl-h2 { color: #ffffff; }
#rl-about .rla-vm .rl-divider { background: var(--rl-green-mid); }
#rl-about .rla-vm-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 28px;
}
#rl-about .rla-vm-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.1);
  border-top: 3px solid var(--rl-accent);
  padding: 40px 36px;
}
#rl-about .rla-vm-icon {
  width: 52px;
  height: 52px;
  border: 2px solid rgba(var(--rl-accent-rgb),0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--rl-accent);
  margin-bottom: 22px;
}
#rl-about .rla-vm-card h3 {
  font-family: 'Montserrat', sans-serif;
  font-size: 24px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  color: var(--rl-green-light);
  margin-bottom: 14px;
}
#rl-about .rla-vm-card p {
  font-size: 14.5px;
  line-height: 1.75;
  color: rgba(255,255,255,0.65);
}

/* ══ SECTION 4.5 — TEAM / MASONRY GALLERY ══════ */
#rl-about .rla-gallery { background: var(--rl-cream); }
#rl-about .rla-masonry {
  column-count: 3;
  column-gap: 16px;
}
#rl-about .rla-mason-item {
  break-inside: avoid;
  margin: 0 0 16px;
  position: relative;
  overflow: hidden;
  border: 1px solid #e0dbd0;
  border-top: 3px solid var(--rl-accent);
}
#rl-about .rla-mason-item img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.6s cubic-bezier(0.16, 0.84, 0.34, 1);
}
#rl-about .rla-mason-item::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(20,32,10,0) 45%, rgba(20,32,10,0.42) 100%);
  opacity: 0;
  transition: opacity 0.4s ease;
  pointer-events: none;
}
#rl-about .rla-mason-item:hover img { transform: scale(1.06); }
#rl-about .rla-mason-item:hover::after { opacity: 1; }

@media (max-width: 900px) { #rl-about .rla-masonry { column-count: 2; } }
@media (max-width: 520px) { #rl-about .rla-masonry { column-count: 1; } }

/* ══ SECTION 5 — WHAT DEFINES US ═══════════════ */
#rl-about .rla-defines { background: #ffffff; }
#rl-about .rla-defines-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 2px;
  background: #e0dbd0;
}
#rl-about .rla-define {
  background: #ffffff;
  padding: 40px 36px;
  display: flex;
  flex-direction: column;
}
#rl-about .rla-define-icon {
  width: 52px;
  height: 52px;
  border: 2px solid #e0dbd0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--rl-green);
  margin-bottom: 22px;
  transition: background 0.18s, color 0.18s, border-color 0.18s;
}
#rl-about .rla-define:hover .rla-define-icon {
  background: var(--rl-green);
  border-color: var(--rl-green);
  color: #ffffff;
}
#rl-about .rla-define h3 {
  font-family: 'Montserrat', sans-serif;
  font-size: 21px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  color: var(--rl-green-dark);
  margin-bottom: 12px;
}
#rl-about .rla-define p {
  font-size: 14.5px;
  line-height: 1.7;
  color: #5a5a48;
}

/* ══ SECTION 6 — FINAL CTA ═════════════════════ */
#rl-about .rla-cta {
  background: var(--rl-green);
  position: relative;
  overflow: hidden;
}
#rl-about .rla-cta-bg {
  position: absolute;
  inset: 0;
  background-image: radial-gradient(circle at 20% 50%, rgba(var(--rl-accent-rgb),0.08) 0%, transparent 55%),
                    radial-gradient(circle at 82% 50%, rgba(var(--rl-accent-rgb),0.08) 0%, transparent 55%);
  pointer-events: none;
}
#rl-about .rla-cta-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 92px 32px;
  max-width: 720px;
  margin: 0 auto;
}
#rl-about .rla-cta .rl-eyebrow { justify-content: center; color: var(--rl-green-light); }
#rl-about .rla-cta .rl-eyebrow::before { background: var(--rl-accent); }
#rl-about .rla-cta .rl-h2 { color: #ffffff; margin-bottom: 18px; }
#rl-about .rla-cta .rl-body-text { color: rgba(255,255,255,0.74); max-width: 560px; margin: 0 auto 36px; }
#rl-about .rla-cta-btns { display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; }
#rl-about .rla-cta .rl-btn-primary { background: var(--rl-accent); border-color: var(--rl-accent); color: var(--rl-on-accent); }
#rl-about .rla-cta .rl-btn-primary:hover { background: var(--rl-accent-hover); border-color: var(--rl-accent-hover); color: var(--rl-on-accent); }
#rl-about .rla-cta .rl-btn-secondary { border-color: rgba(255,255,255,0.4); color: rgba(255,255,255,0.85); }
#rl-about .rla-cta .rl-btn-secondary:hover { background: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.7); }

/* ══ RESPONSIVE ════════════════════════════════ */
@media (max-width: 900px) {
  #rl-about .rla-section { padding: 64px 0; }
  #rl-about .rla-story-inner,
  #rl-about .rla-president-inner { grid-template-columns: 1fr; gap: 40px; }
  #rl-about .rla-vm-grid { grid-template-columns: 1fr; }
  #rl-about .rla-defines-grid { grid-template-columns: 1fr; }
}
@media (max-width: 560px) {
  #rl-about .rla-container { padding: 0 20px; }
  #rl-about .rla-trust span { border-right: none; padding: 0 10px; }
}

/* ══ SCROLL REVEAL ═════════════════════════════
   Activo solo con .rl-reveal-on (lo pone el JS) y sin movimiento reducido.
══════════════════════════════════════════════ */
@media (prefers-reduced-motion: no-preference) {
  #rl-about.rl-reveal-on .rla-reveal {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity 0.7s cubic-bezier(0.16, 0.84, 0.34, 1),
                transform 0.7s cubic-bezier(0.16, 0.84, 0.34, 1);
  }
  #rl-about.rl-reveal-on .rla-reveal.rl-in {
    opacity: 1;
    transform: none;
  }
}
</style>


<!-- ══════════════════════════════════════════════
     SECTION 1 — HERO
══════════════════════════════════════════════ -->
<section class="rla-hero" aria-label="About hero">
  <div class="rla-hero-bg" role="img" aria-label="Ruiz Landscape project"></div>
  <div class="rla-hero-overlay"></div>
  <div class="rla-hero-content">
    <span class="rl-eyebrow rla-reveal">About Ruiz Landscape</span>
    <h1 class="rla-reveal">A family's passion for the land,<br><span>brought to your home.</span></h1>
    <p class="rla-hero-sub rla-reveal">
      Ruiz Landscape Service is a family-owned, eco-conscious landscaping company headquartered in Irvine, California. We design, build, and care for outdoor spaces across Orange, Los Angeles, and Imperial counties — with the trust, integrity, and personal attention that only a family business can bring.
    </p>
    <div class="rla-trust rla-reveal">
      <span>Family-Owned &amp; Operated</span>
      <span>CA Lic# 925207</span>
      <span>Eco-Conscious Practices</span>
      <span>Serving Three Southern California Counties</span>
      <span>LiveRoof Certified</span>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 2 — OUR STORY
══════════════════════════════════════════════ -->
<section class="rla-section rla-story" aria-labelledby="story-heading">
  <div class="rla-container">
    <div class="rla-story-inner<?php echo $rla_has_story ? '' : ' is-solo'; ?>">

      <div class="rla-story-text">
        <span class="rl-eyebrow rla-reveal">Our Story</span>
        <h2 class="rl-h2 rla-reveal" id="story-heading">Where family values meet eco-friendly innovation.</h2>
        <div class="rl-divider rla-reveal"></div>
        <p class="rl-body-text rla-reveal">
          Welcome to Ruiz Landscape, where family values meet eco-friendly landscaping innovation. We are a passionate team dedicated to crafting outdoor spaces that harmonize with nature and enrich the lives of the families who live in them.
        </p>
        <p class="rl-body-text rla-reveal">
          As a family-owned business, we pride ourselves on integrity, personalized service, and a deep commitment to sustainability. With a blend of creativity, expertise, and eco-conscious practices, we transform ordinary landscapes into breathtaking sanctuaries that captivate the eye and nurture the environment — from lush gardens to water-wise designs that preserve California's natural beauty.
        </p>
        <p class="rl-body-text rla-reveal">
          We believe that every outdoor space has the potential to be a haven of tranquility and sustainability. Let us bring our family's passion for eco-friendly landscaping to your home, creating a greener, more beautiful world — one landscape at a time.
        </p>
      </div>

      <?php if ( $rla_has_story ) : ?>
        <div class="rla-story-img rla-reveal">
          <img src="<?php echo esc_url( $rla_images['story-img'] ); ?>" alt="Ruiz Landscape eco-conscious garden project" loading="lazy" width="540" height="420">
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 3 — PRESIDENT'S STATEMENT
══════════════════════════════════════════════ -->
<section class="rla-section rla-president" aria-labelledby="president-heading">
  <div class="rla-container">
    <div class="rla-president-inner<?php echo ! empty( $rla_images['president-img'] ) ? '' : ' is-solo'; ?>">

      <?php if ( ! empty( $rla_images['president-img'] ) ) : ?>
        <div class="rla-president-photo rla-reveal">
          <img src="<?php echo esc_url( $rla_images['president-img'] ); ?>" alt="Rafael Ruiz, President of Ruiz Landscape Service" loading="lazy" width="440" height="520">
        </div>
      <?php endif; ?>

      <div class="rla-president-quote rla-reveal">
        <span class="rl-eyebrow">A word from our president</span>
        <h2 class="rl-h2" id="president-heading" style="font-size:clamp(24px,3vw,34px);margin-bottom:6px;">A word from our president.</h2>
        <blockquote>
          "As a family-owned and operated business, Ruiz Landscape understands the importance of trust, integrity, and reliability. Founded on the principles of quality craftsmanship and exceptional service, we've built a reputation for excellence that extends from our family to yours."
        </blockquote>
        <div class="rla-president-by">Rafael Ruiz, <span>President</span></div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 4 — VISION & MISSION
══════════════════════════════════════════════ -->
<section class="rla-section rla-vm" aria-labelledby="vm-heading">
  <div class="rla-container">

    <div class="rla-head">
      <span class="rl-eyebrow rla-reveal">Vision &amp; Mission</span>
      <h2 class="rl-h2 rla-reveal" id="vm-heading">Our vision and mission.</h2>
      <div class="rl-divider rla-reveal"></div>
    </div>

    <div class="rla-vm-grid">
      <div class="rla-vm-card rla-reveal">
        <div class="rla-vm-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
        </div>
        <h3>Our Vision</h3>
        <p>We envision a world where nature and humanity thrive in harmony. Through innovation, integrity, and a deep respect for nature, we strive to create landscapes that inspire beauty and nurture the planet for generations to come — cultivating a greener, more sustainable future, one landscape at a time.</p>
      </div>
      <div class="rla-vm-card rla-reveal">
        <div class="rla-vm-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4.5"/><circle cx="12" cy="12" r="0.8" fill="currentColor"/></svg>
        </div>
        <h3>Our Mission</h3>
        <p>Our mission is to redefine landscaping by prioritizing environmental sustainability, conservation, and beauty in equal measure. By incorporating innovative techniques, renewable resources, and eco-friendly practices, we create vibrant outdoor spaces that enhance the lives of our clients while protecting the natural world — delivering exceptional service and value at every step.</p>
      </div>
    </div>

  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 4.5 — TEAM / MASONRY GALLERY
══════════════════════════════════════════════ -->
<?php if ( ! empty( $rla_gallery ) ) : ?>
<section class="rla-section rla-gallery" aria-labelledby="gallery-heading">
  <div class="rla-container">

    <div class="rla-head">
      <span class="rl-eyebrow rla-reveal">The People Behind the Work</span>
      <h2 class="rl-h2 rla-reveal" id="gallery-heading">Our team, out in the field.</h2>
      <div class="rl-divider rla-reveal"></div>
    </div>

    <div class="rla-masonry" role="list" aria-label="Ruiz Landscape team on the job">
      <?php foreach ( $rla_gallery as $img ) : ?>
        <figure class="rla-mason-item rla-reveal" role="listitem">
          <img src="<?php echo esc_url( $img ); ?>" alt="Ruiz Landscape team member on a job site" loading="lazy">
        </figure>
      <?php endforeach; ?>
    </div>

  </div>
</section>
<?php endif; ?>


<!-- ══════════════════════════════════════════════
     SECTION 5 — WHAT DEFINES US
══════════════════════════════════════════════ -->
<section class="rla-section rla-defines" aria-labelledby="defines-heading">
  <div class="rla-container">

    <div class="rla-head">
      <span class="rl-eyebrow rla-reveal">What Defines Us</span>
      <h2 class="rl-h2 rla-reveal" id="defines-heading">Four principles behind every project.</h2>
      <div class="rl-divider rla-reveal"></div>
    </div>

    <div class="rla-defines-grid">

      <div class="rla-define rla-reveal">
        <div class="rla-define-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>Family-owned and operated</h3>
        <p>When you choose Ruiz Landscape, you're partnering with a team that treats you like family and prioritizes your satisfaction — with trust, integrity, and personalized service on every job.</p>
      </div>

      <div class="rla-define rla-reveal">
        <div class="rla-define-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="5"/><path d="M8.5 12.5 7 22l5-3 5 3-1.5-9.5"/></svg>
        </div>
        <h3>Expertise and experience</h3>
        <p>Our team has the knowledge, skill, and creativity to tackle projects of any size or complexity, and we stay current on the latest sustainable techniques to deliver solutions that exceed expectations.</p>
      </div>

      <div class="rla-define rla-reveal">
        <div class="rla-define-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m8.5 12 2.5 2.5 4.5-5"/></svg>
        </div>
        <h3>Attention to detail</h3>
        <p>Excellence lives in the details. From meticulous craftsmanship to thorough communication and follow-up, we care about every aspect of the work to ensure the highest-quality result.</p>
      </div>

      <div class="rla-define rla-reveal">
        <div class="rla-define-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"/></svg>
        </div>
        <h3>Sustainable practices</h3>
        <p>Environmental responsibility is at the core of our business. Water-wise designs, eco-friendly materials, and organic lawn care let us minimize our footprint and promote a healthier planet.</p>
      </div>

    </div>
  </div>
</section>

</main>

<!-- ══════════════════════════════════════════════
     SCROLL REVEAL — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-about');
  if (!root || !root.classList.contains('rl-reveal-on')) return;

  var targets = Array.prototype.slice.call(root.querySelectorAll('.rla-reveal'));
  if (!targets.length) return;

  function revealAll() { targets.forEach(function (el) { el.classList.add('rl-in'); }); }
  if (!('IntersectionObserver' in window)) { revealAll(); return; }

  try {
    // Escalonado según la posición entre hermanos que también se animan
    targets.forEach(function (el) {
      var i = 0, sib = el.previousElementSibling;
      while (sib) {
        if (sib.matches && sib.matches('.rla-reveal')) i++;
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