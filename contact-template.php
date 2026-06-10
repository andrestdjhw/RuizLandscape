<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * SEO (configúralo en tu plugin de SEO / Yoast / Rank Math):
 *   Title:       Contact Ruiz Landscape | Free Consultation in Orange County, CA
 *   Description: Schedule a free landscaping consultation with Ruiz Landscape. Family-owned,
 *                eco-conscious, serving Orange, LA & Imperial counties. Call 949-305-1605.
 *   Keywords:    contact Ruiz Landscape, landscaping consultation Orange County,
 *                free landscaping estimate Irvine, landscaping company near me Orange County
 *
 * NOTA: El formulario es el componente React <ContactForm /> que se monta en
 *       el div #render-contact-form-here (igual que en el home). No se reescribe aquí.
 */

/* ══════════════════════════════════════════════
   IMÁGENES DE LA PÁGINA
   Pega las URL de la Biblioteca de Medios (Medios → "File URL").
   Deja '' y ese bloque simplemente no se muestra.
══════════════════════════════════════════════ */
$rlc_images = array(
  'hero-bg' => '/wp-content/uploads/2026/06/ContactUSRuizLandscape-scaled.jpg', // fondo del hero
  'team'    => '', // foto del equipo o proyecto estrella (columna derecha) — opcional
);

$rlc_has_photo = ! empty( $rlc_images['team'] );

/* ── Pasos de "What happens next" ── */
$rlc_steps = array(
  array( 'time' => 'Within minutes',         'text' => "An automated email confirms we've received your request." ),
  array( 'time' => 'Within 1 business day',  'text' => "A member of our team reaches out to learn more and schedule your free consultation." ),
  array( 'time' => 'At the consultation',    'text' => "We walk your space, discuss your vision and budget, and outline next steps." ),
  array( 'time' => 'After the consultation', 'text' => "We prepare a tailored plan and estimate for your project." ),
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
      "@type": "ContactPage",
      "@id": "https://www.ruizlandscape.com/contact/#contactpage",
      "url": "https://www.ruizlandscape.com/contact",
      "name": "Contact Ruiz Landscape",
      "description": "Schedule a free landscaping consultation with Ruiz Landscape. Family-owned, eco-conscious, serving Orange, LA & Imperial counties.",
      "about": { "@id": "https://www.ruizlandscape.com/#org" }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://www.ruizlandscape.com/#org",
      "name": "Ruiz Landscape Service, Inc.",
      "url": "https://www.ruizlandscape.com",
      "telephone": "+1-949-305-1605",
      "email": "office@RuizLandscape.com",
      "priceRange": "$$",
      "image": "https://www.ruizlandscape.com/wp-content/uploads/2026/06/Ruiz_Landscape_HD_Transparent-scaled.png",
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
        "latitude": 33.6516,
        "longitude": -117.7460
      },
      "areaServed": ["Orange County", "Los Angeles County", "Imperial County"],
      "sameAs": [
        "https://www.facebook.com/ruiz.landscape.7",
        "https://twitter.com/RuizLandscapeOC",
        "https://www.instagram.com/ruizlandscapeservices"
      ]
    }
  ]
}
</script>

<main id="rl-contact">
<script>
/* Activa el modo reveal antes de pintar las secciones (sin parpadeo). */
(function () {
  try {
    var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduce) document.getElementById('rl-contact').classList.add('rl-reveal-on');
  } catch (e) {}
})();
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap');

/* ── Offset por el navbar fijo ── */
body { padding-top: 104px !important; }

/* ── Base scope ── */
#rl-contact {
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

/* ── Utilidades compartidas (scopeadas a #rl-contact) ── */
#rl-contact .rlc-section { padding: 88px 0; }
#rl-contact .rlc-container {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 32px;
  width: 100%;
}

#rl-contact .rl-eyebrow {
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
#rl-contact .rl-eyebrow::before {
  content: '';
  width: 24px;
  height: 2px;
  background: var(--rl-accent);
}

#rl-contact .rl-h2 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(23px, 2.8vw, 34px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.02em;
  line-height: 1.08;
  color: var(--rl-green-dark);
}

#rl-contact .rl-body-text {
  font-size: 16px;
  line-height: 1.75;
  color: #4a4a3a;
}

#rl-contact .rl-divider {
  width: 48px;
  height: 3px;
  background: var(--rl-accent);
  margin: 20px 0;
}

#rl-contact .rlc-head { text-align: center; margin-bottom: 52px; }
#rl-contact .rlc-head .rl-eyebrow { justify-content: center; }
#rl-contact .rlc-head .rl-divider { margin: 20px auto 0; }

/* ══ SECTION 1 — HERO ══════════════════════════ */
#rl-contact .rlc-hero {
  position: relative;
  min-height: 50vh;
  display: flex;
  align-items: center;
  background-color: var(--rl-green-dark);
  overflow: hidden;
}
#rl-contact .rlc-hero-bg {
  position: absolute;
  inset: 0;
  background-image: url('<?php echo esc_url( $rlc_images['hero-bg'] ); ?>');
  background-size: cover;
  background-position: center;
}
#rl-contact .rlc-hero-overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(20,32,10,0.58) 0%, rgba(20,32,10,0.78) 100%),
    radial-gradient(120% 90% at 50% 40%, rgba(20,32,10,0.35) 0%, rgba(20,32,10,0.84) 100%);
}
#rl-contact .rlc-hero-content {
  position: relative;
  z-index: 2;
  max-width: 880px;
  margin: 0 auto;
  padding: 80px 32px;
  text-align: center;
}
#rl-contact .rlc-hero-content .rl-eyebrow { color: var(--rl-accent); justify-content: center; }
#rl-contact .rlc-hero h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: clamp(27px, 4vw, 44px);
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.01em;
  line-height: 1.05;
  color: #ffffff;
  margin-bottom: 20px;
}
#rl-contact .rlc-hero h1 span { color: var(--rl-green-light); }
#rl-contact .rlc-hero-sub {
  font-size: clamp(15px, 1.7vw, 17px);
  line-height: 1.7;
  color: rgba(255,255,255,0.78);
  max-width: 700px;
  margin: 0 auto;
}

/* ══ SECTION 2 — FORM + INFO (estampado de fondo) ══ */
#rl-contact .rlc-main {
  position: relative;
  /* Estampado tejido (igual que el footer) — fondo oscuro para que la tarjeta del form luzca */
  --s: 90px;
  --c1: #1b2912;
  --c2: #121b0b;
  --_g: var(--c2) 4% 14%, var(--c1) 14% 24%, var(--c2) 22% 34%,
    var(--c1) 34% 44%, var(--c2) 44% 56%, var(--c1) 56% 66%, var(--c2) 66% 76%,
    var(--c1) 76% 86%, var(--c2) 86% 96%;
  background-color: var(--rl-green-dark);
  background:
    radial-gradient(100% 100% at 100% 0, var(--c1) 4%, var(--_g), #0008 96%, #0000),
    radial-gradient(100% 100% at 0 100%, #0000, #0008 4%, var(--_g), var(--c1) 96%)
      var(--c1);
  background-size: var(--s) var(--s);
}
#rl-contact .rlc-layout {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: 48px;
  align-items: start;
}

/* Columna izquierda — formulario (montaje del componente) */
#rl-contact .rlc-form-col { min-width: 0; }

/* Columna derecha — contacto directo */
#rl-contact .rlc-info-col { color: #e8eede; }
#rl-contact .rlc-info-col h3 {
  font-family: 'Montserrat', sans-serif;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  color: #ffffff;
  margin-bottom: 10px;
}
#rl-contact .rlc-info-intro {
  font-size: 14.5px;
  line-height: 1.65;
  color: rgba(255,255,255,0.7);
  margin-bottom: 26px;
}
#rl-contact .rlc-info-list {
  list-style: none;
  margin: 0 0 26px;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: 18px;
}
#rl-contact .rlc-info-item { display: flex; align-items: flex-start; gap: 13px; }
#rl-contact .rlc-info-icon {
  flex-shrink: 0;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(var(--rl-accent-rgb), 0.18);
  border: 1px solid rgba(var(--rl-accent-rgb), 0.4);
  color: var(--rl-green-light);
}
#rl-contact .rlc-info-icon svg { width: 17px; height: 17px; }
#rl-contact .rlc-info-label {
  font-size: 10.5px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--rl-accent);
  margin-bottom: 2px;
}
#rl-contact .rlc-info-value { font-size: 15px; line-height: 1.4; }
#rl-contact .rlc-info-value a { color: #ffffff; text-decoration: none; transition: color 0.15s; }
#rl-contact .rlc-info-value a:hover { color: var(--rl-green-light); }
#rl-contact .rlc-info-note {
  font-size: 13px;
  font-style: italic;
  color: rgba(255,255,255,0.6);
}

/* Redes sociales */
#rl-contact .rlc-social-wrap { margin-bottom: 26px; }
#rl-contact .rlc-social-row { display: flex; gap: 10px; }
#rl-contact .rlc-social-btn {
  width: 40px;
  height: 40px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.15);
  color: #e8eede;
  text-decoration: none;
  transition: all 0.2s ease;
}
#rl-contact .rlc-social-btn:hover {
  background: var(--rl-accent);
  border-color: var(--rl-accent);
  color: #fff;
  transform: translateY(-2px);
}

/* Foto opcional */
#rl-contact .rlc-info-photo {
  width: 100%;
  border-radius: 6px;
  overflow: hidden;
  border: 1px solid rgba(255,255,255,0.12);
}
#rl-contact .rlc-info-photo img { width: 100%; height: auto; display: block; }

/* ══ SECTION 3 — WHAT HAPPENS NEXT (timeline) ══ */
#rl-contact .rlc-next { background: #ffffff; }
#rl-contact .rlc-timeline {
  max-width: 760px;
  margin: 0 auto;
  position: relative;
  padding-left: 8px;
}
#rl-contact .rlc-step {
  position: relative;
  padding: 0 0 30px 42px;
  border-left: 2px solid #e7e3d8;
}
#rl-contact .rlc-step:last-child { border-left-color: transparent; padding-bottom: 0; }
#rl-contact .rlc-step::before {
  content: '';
  position: absolute;
  left: -9px;
  top: 2px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: var(--rl-accent);
  border: 3px solid #ffffff;
  box-shadow: 0 0 0 1px rgba(var(--rl-accent-rgb), 0.4);
}
#rl-contact .rlc-step-time {
  font-family: 'Montserrat', sans-serif;
  font-size: 18px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  color: var(--rl-green);
  margin-bottom: 4px;
  line-height: 1.1;
}
#rl-contact .rlc-step-text {
  font-size: 15px;
  line-height: 1.6;
  color: #5a5a48;
}

/* ══ SECTION 4 — MAP & OFFICE ══════════════════ */
#rl-contact .rlc-map-sec { background: var(--rl-cream); }
#rl-contact .rlc-map-text { max-width: 760px; margin: 0 auto 40px; text-align: center; }
#rl-contact .rlc-map-frame {
  position: relative;
  width: 100%;
  border-radius: 8px;
  overflow: hidden;
  border: 1px solid #e0dbd0;
  box-shadow: 0 16px 40px -22px rgba(26,36,16,0.4);
  line-height: 0;
}
#rl-contact .rlc-map-frame iframe {
  width: 100%;
  height: 440px;
  border: 0;
  display: block;
  filter: saturate(0.9);
}

/* ══ RESPONSIVE ════════════════════════════════ */
@media (max-width: 900px) {
  #rl-contact .rlc-layout { grid-template-columns: 1fr; gap: 40px; }
  #rl-contact .rlc-info-col { order: 2; }
  #rl-contact .rlc-form-col { order: 1; }
}
@media (max-width: 620px) {
  #rl-contact .rlc-section { padding: 64px 0; }
  #rl-contact .rlc-map-frame iframe { height: 340px; }
}

/* ══ SCROLL REVEAL ═════════════════════════════ */
@media (prefers-reduced-motion: no-preference) {
  #rl-contact.rl-reveal-on .rlc-reveal {
    opacity: 0;
    transform: translateY(32px);
    transition: opacity 0.7s cubic-bezier(0.16, 0.84, 0.34, 1),
                transform 0.7s cubic-bezier(0.16, 0.84, 0.34, 1);
  }
  #rl-contact.rl-reveal-on .rlc-reveal.rl-in {
    opacity: 1;
    transform: none;
  }
}
</style>


<!-- ══════════════════════════════════════════════
     SECTION 1 — HERO
══════════════════════════════════════════════ -->
<section class="rlc-hero">
  <div class="rlc-hero-bg"></div>
  <div class="rlc-hero-overlay"></div>
  <div class="rlc-hero-content">
    <span class="rl-eyebrow rlc-reveal">Contact Us</span>
    <h1 class="rlc-reveal">Let's bring your <span>landscape to life.</span></h1>
    <p class="rlc-hero-sub rlc-reveal">
      Ready to transform your outdoor space into a beautiful oasis? Schedule a free consultation
      with one of our friendly experts. We'll listen to your vision, walk your space, and put
      together a plan you'll love — beautifully designed, built to last, and gentler on the planet.
    </p>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 2 — FORM (izq) + CONTACTO DIRECTO (der)
══════════════════════════════════════════════ -->
<section class="rlc-section rlc-main">
  <div class="rlc-container">
    <div class="rlc-layout">

      <!-- IZQUIERDA — Formulario (componente React) -->
      <div class="rlc-form-col rlc-reveal">
        <!-- El componente <ContactForm /> se monta aquí (ver src/index.js) -->
        <div id="render-contact-form-here"></div>
      </div>

      <!-- DERECHA — Contacto directo -->
      <div class="rlc-info-col rlc-reveal">
        <h3>Reach us directly.</h3>
        <p class="rlc-info-intro">Prefer to talk? We'd love to hear about your project.</p>

        <ul class="rlc-info-list">
          <li class="rlc-info-item">
            <span class="rlc-info-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </span>
            <div>
              <div class="rlc-info-label">Phone</div>
              <div class="rlc-info-value"><a href="tel:9493051605">949-305-1605</a></div>
            </div>
          </li>

          <li class="rlc-info-item">
            <span class="rlc-info-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </span>
            <div>
              <div class="rlc-info-label">Email</div>
              <div class="rlc-info-value"><a href="mailto:office@RuizLandscape.com">office@RuizLandscape.com</a></div>
            </div>
          </li>

          <li class="rlc-info-item">
            <span class="rlc-info-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </span>
            <div>
              <div class="rlc-info-label">Office</div>
              <div class="rlc-info-value">6 McLaren, Suite H<br>Irvine, CA 92618</div>
            </div>
          </li>

          <li class="rlc-info-item">
            <span class="rlc-info-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2"/><path d="M9 7h6M9 11h6M9 15h4"/></svg>
            </span>
            <div>
              <div class="rlc-info-label">License</div>
              <div class="rlc-info-value">CA ST Lic# 925207</div>
            </div>
          </li>
        </ul>

        <div class="rlc-social-wrap">
          <div class="rlc-info-label">Follow Us</div>
          <div class="rlc-social-row" style="margin-top:8px;">
            <a href="https://www.facebook.com/ruiz.landscape.7" target="_blank" rel="noreferrer" class="rlc-social-btn" aria-label="Facebook">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <a href="https://twitter.com/RuizLandscapeOC" target="_blank" rel="noreferrer" class="rlc-social-btn" aria-label="X / Twitter">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
            <a href="https://www.instagram.com/ruizlandscapeservices" target="_blank" rel="noreferrer" class="rlc-social-btn" aria-label="Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
            </a>
          </div>
        </div>

        <p class="rlc-info-note">By appointment — please call ahead before visiting the office.</p>

        <?php if ( $rlc_has_photo ) : ?>
          <div class="rlc-info-photo" style="margin-top:24px;">
            <img src="<?php echo esc_url( $rlc_images['team'] ); ?>" alt="The Ruiz Landscape team" loading="lazy" />
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 3 — WHAT HAPPENS NEXT
══════════════════════════════════════════════ -->
<section class="rlc-section rlc-next">
  <div class="rlc-container">
    <div class="rlc-head">
      <span class="rl-eyebrow rlc-reveal">The Process</span>
      <h2 class="rl-h2 rlc-reveal">What happens after you reach out.</h2>
      <div class="rl-divider rlc-reveal"></div>
    </div>

    <div class="rlc-timeline">
      <?php foreach ( $rlc_steps as $step ) : ?>
        <div class="rlc-step rlc-reveal">
          <div class="rlc-step-time"><?php echo esc_html( $step['time'] ); ?></div>
          <div class="rlc-step-text"><?php echo esc_html( $step['text'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     SECTION 4 — MAP & OFFICE
══════════════════════════════════════════════ -->
<section class="rlc-section rlc-map-sec">
  <div class="rlc-container">
    <div class="rlc-map-text">
      <span class="rl-eyebrow rlc-reveal" style="justify-content:center;">Visit Us</span>
      <h2 class="rl-h2 rlc-reveal">Visit our office.</h2>
      <div class="rl-divider rlc-reveal" style="margin:20px auto 26px;"></div>
      <p class="rl-body-text rlc-reveal">
        Our headquarters is in Irvine at 6 McLaren, Suite H. We work primarily on-site at client
        properties, so please call ahead to make sure someone's available to meet you.
      </p>
    </div>

    <div class="rlc-map-frame rlc-reveal">
      <!-- Mapa con carga diferida (lazy) para rendimiento -->
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
     SCROLL REVEAL — VANILLA JS
══════════════════════════════════════════════ -->
<script>
(function () {
  var root = document.getElementById('rl-contact');
  if (!root || !root.classList.contains('rl-reveal-on')) return;

  var targets = Array.prototype.slice.call(root.querySelectorAll('.rlc-reveal'));
  if (!targets.length) return;

  function revealAll() { targets.forEach(function (el) { el.classList.add('rl-in'); }); }
  if (!('IntersectionObserver' in window)) { revealAll(); return; }

  try {
    targets.forEach(function (el) {
      var i = 0, sib = el.previousElementSibling;
      while (sib) {
        if (sib.matches && sib.matches('.rlc-reveal')) i++;
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