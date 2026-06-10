import React from "react"

// ── Data ──────────────────────────────────────────────
const services = [
  { label: "Landscape Design & Installation", href: "/services/landscape-design" },
  { label: "Lawn Care & Maintenance",         href: "/services/lawn-care" },
  { label: "Tree & Shrub Care",               href: "/services/tree-shrub-care" },
  { label: "Irrigation Systems",              href: "/services/irrigation" },
  { label: "Synthetic Turf",                  href: "/services/synthetic-turf" },
  { label: "Large Trees Installation",        href: "/services/large-trees" },
  { label: "Low Voltage Lighting",            href: "/services/lighting" },
  { label: "Landscape Design",                href: "/services/landscape-design-2d" },
]

const quickLinks = [
  { label: "Home",       href: "/" },
  { label: "About Us",   href: "/about" },
  { label: "Services",   href: "/services" },
  { label: "Gallery",    href: "/gallery" },
  { label: "Contact Us", href: "/contact" },
]

const counties = ["Los Angeles County", "Orange County", "Imperial County"]

// ── SVG Icons ─────────────────────────────────────────
const PhoneIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
  </svg>
)

const EmailIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="20" height="16" x="2" y="4" rx="2"/>
    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
  </svg>
)

const LocationIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
    <circle cx="12" cy="10" r="3"/>
  </svg>
)

const GlobeIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <circle cx="12" cy="12" r="10"/>
    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
    <path d="M2 12h20"/>
  </svg>
)

const LicenseIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="16" height="20" x="4" y="2" rx="2"/>
    <path d="M9 7h6M9 11h6M9 15h4"/>
  </svg>
)

const FacebookIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
  </svg>
)

const TwitterIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
  </svg>
)

const InstagramIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
  </svg>
)

const ArrowRight = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="M5 12h14M12 5l7 7-7 7"/>
  </svg>
)

const LeafIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="currentColor">
    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"/>
  </svg>
)

// ── Component ─────────────────────────────────────────
function Footer() {
  const year = new Date().getFullYear()

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600&display=swap');

        .rl-footer * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .rl-footer {
          /* Paleta de marca */
          --rl-green:        #3d5a2a;
          --rl-green-mid:    #4a6e32;
          --rl-accent:       #996a6c;   /* café (Smoky Rose) */
          --rl-accent-rgb:   153, 106, 108;
          --rl-accent-hover: #ab7d7f;
          --rl-on-accent:    #ffffff;

          /* Neutros del cuerpo claro (como el navbar) */
          --rl-surface:      #f7f5f0;
          --rl-ink:          #3a3a2e;
          --rl-ink-soft:     #6b7060;
          --rl-line:         #e0dbd0;

          font-family: 'Montserrat', sans-serif;
          background: var(--rl-surface);
          color: var(--rl-ink);
        }

        /* ══ CTA BAND — estampado tejido (oscuro) ══ */
        .rl-footer-cta {
          /* Estampado tejido (Uiverse · marcelodolza, adaptado a la paleta) */
          --s: 90px;
          --c1: #1b2912;
          --c2: #121b0b;
          --_g: var(--c2) 4% 14%, var(--c1) 14% 24%, var(--c2) 22% 34%,
            var(--c1) 34% 44%, var(--c2) 44% 56%, var(--c1) 56% 66%, var(--c2) 66% 76%,
            var(--c1) 76% 86%, var(--c2) 86% 96%;
          background-color: #111a0b;
          background:
            radial-gradient(100% 100% at 100% 0, var(--c1) 4%, var(--_g), #0008 96%, #0000),
            radial-gradient(100% 100% at 0 100%, #0000, #0008 4%, var(--_g), var(--c1) 96%)
              var(--c1);
          background-size: var(--s) var(--s);

          border-top: 3px solid var(--rl-accent);
          padding: 56px 24px;
          text-align: center;
        }

        .rl-footer-cta-eyebrow {
          display: inline-flex;
          align-items: center;
          gap: 6px;
          font-size: 11px;
          font-weight: 700;
          letter-spacing: 0.16em;
          text-transform: uppercase;
          color: var(--rl-accent);
          margin-bottom: 12px;
        }

        .rl-footer-cta h2 {
          font-family: 'Montserrat', sans-serif;
          font-size: clamp(22px, 3.2vw, 31px);
          font-weight: 800;
          color: #fff;
          letter-spacing: 0.02em;
          text-transform: uppercase;
          margin-bottom: 10px;
          line-height: 1.1;
        }

        .rl-footer-cta p {
          font-size: 15px;
          color: rgba(255,255,255,0.72);
          max-width: 480px;
          margin: 0 auto 28px;
          line-height: 1.6;
        }

        .rl-footer-cta-btn {
          display: inline-flex;
          align-items: center;
          gap: 8px;
          background: var(--rl-accent);
          color: var(--rl-on-accent);
          font-family: 'Montserrat', sans-serif;
          font-size: 14px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          padding: 14px 30px;
          border-radius: 4px;
          text-decoration: none;
          transition: background 0.2s, transform 0.15s;
        }

        .rl-footer-cta-btn:hover {
          background: var(--rl-accent-hover);
          transform: translateY(-2px);
        }

        /* ══ MAIN BODY — claro (como el navbar) ══ */
        .rl-footer-body {
          padding: 60px 24px 40px;
          max-width: 1200px;
          margin: 0 auto;
          display: grid;
          grid-template-columns: 2fr 1fr 1.4fr 1.5fr;
          gap: 48px;
        }

        .rl-footer-col-title {
          font-family: 'Montserrat', sans-serif;
          font-size: 13px;
          font-weight: 700;
          letter-spacing: 0.14em;
          text-transform: uppercase;
          color: var(--rl-accent);
          margin-bottom: 20px;
          display: flex;
          align-items: center;
          gap: 7px;
        }

        .rl-footer-col-title::after {
          content: '';
          flex: 1;
          height: 1px;
          background: var(--rl-line);
        }

        /* ── COL 1: Brand ── */
        .rl-footer-brand {
          display: flex;
          flex-direction: column;
        }

        .rl-footer-logo {
          display: inline-flex;
          align-items: center;
          text-decoration: none;
          margin-bottom: 18px;
        }

        .rl-footer-logo-img {
          height: 58px;
          width: auto;
          max-width: 260px;
          display: block;
          object-fit: contain;
        }

        .rl-footer-tagline {
          font-size: 13.5px;
          color: var(--rl-ink-soft);
          line-height: 1.65;
          margin-bottom: 22px;
          font-style: italic;
          border-left: 2px solid var(--rl-accent);
          padding-left: 12px;
        }

        .rl-footer-socials {
          display: flex;
          gap: 10px;
        }

        .rl-footer-social-btn {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 36px;
          height: 36px;
          border-radius: 6px;
          background: #ffffff;
          border: 1px solid var(--rl-line);
          color: var(--rl-ink-soft);
          text-decoration: none;
          transition: all 0.2s ease;
        }

        .rl-footer-social-btn:hover {
          background: var(--rl-accent);
          border-color: var(--rl-accent);
          color: var(--rl-on-accent);
          transform: translateY(-2px);
        }

        /* ── COL 2: Quick Links ── */
        .rl-footer-links {
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 4px;
        }

        .rl-footer-links a {
          display: flex;
          align-items: center;
          gap: 8px;
          color: #4a4a3a;
          text-decoration: none;
          font-size: 13.5px;
          font-weight: 500;
          padding: 5px 0;
          transition: all 0.15s ease;
        }

        .rl-footer-links a .arrow {
          color: var(--rl-accent);
          opacity: 0;
          transform: translateX(-4px);
          transition: all 0.15s ease;
          flex-shrink: 0;
        }

        .rl-footer-links a:hover {
          color: var(--rl-green);
          padding-left: 4px;
        }

        .rl-footer-links a:hover .arrow {
          opacity: 1;
          transform: translateX(0);
        }

        /* ── COL 3: Services ── */
        .rl-footer-services {
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 2px;
        }

        .rl-footer-services a {
          display: flex;
          align-items: flex-start;
          gap: 7px;
          color: #4a4a3a;
          text-decoration: none;
          font-size: 13px;
          font-weight: 400;
          padding: 5px 0;
          line-height: 1.4;
          transition: color 0.15s;
        }

        .rl-footer-services a::before {
          content: '';
          width: 4px;
          height: 4px;
          border-radius: 50%;
          background: var(--rl-accent);
          margin-top: 6px;
          flex-shrink: 0;
          opacity: 0.7;
          transition: opacity 0.15s;
        }

        .rl-footer-services a:hover {
          color: var(--rl-green);
        }

        .rl-footer-services a:hover::before {
          opacity: 1;
        }

        /* ── COL 4: Contact ── */
        .rl-footer-contact-list {
          list-style: none;
          display: flex;
          flex-direction: column;
          gap: 14px;
          margin-bottom: 24px;
        }

        .rl-footer-contact-item {
          display: flex;
          align-items: flex-start;
          gap: 10px;
        }

        .rl-footer-contact-icon {
          color: var(--rl-accent);
          margin-top: 2px;
          flex-shrink: 0;
        }

        .rl-footer-contact-item a,
        .rl-footer-contact-item span {
          color: #4a4a3a;
          text-decoration: none;
          font-size: 13.5px;
          line-height: 1.5;
          transition: color 0.15s;
        }

        .rl-footer-contact-item a:hover {
          color: var(--rl-green);
        }

        .rl-footer-counties {
          background: #ffffff;
          border: 1px solid var(--rl-line);
          border-radius: 6px;
          padding: 12px 14px;
        }

        .rl-footer-counties-title {
          font-size: 10px;
          font-weight: 700;
          letter-spacing: 0.12em;
          text-transform: uppercase;
          color: var(--rl-accent);
          margin-bottom: 8px;
        }

        .rl-footer-counties-list {
          display: flex;
          flex-wrap: wrap;
          gap: 6px;
        }

        .rl-footer-county-tag {
          background: rgba(var(--rl-accent-rgb),0.1);
          border: 1px solid rgba(var(--rl-accent-rgb),0.28);
          color: #5a5a48;
          font-size: 11px;
          font-weight: 500;
          padding: 3px 9px;
          border-radius: 20px;
          white-space: nowrap;
        }

        /* ── BOTTOM BAR ── */
        .rl-footer-bottom {
          border-top: 1px solid var(--rl-line);
          padding: 18px 24px;
        }

        .rl-footer-bottom-inner {
          max-width: 1200px;
          margin: 0 auto;
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 16px;
          flex-wrap: wrap;
        }

        .rl-footer-copyright {
          font-size: 12px;
          color: var(--rl-ink-soft);
        }

        .rl-footer-copyright strong {
          color: #4a4a3a;
          font-weight: 600;
        }

        .rl-footer-lic {
          display: flex;
          align-items: center;
          gap: 6px;
          font-size: 12px;
          color: var(--rl-ink-soft);
        }

        .rl-footer-lic svg {
          color: var(--rl-accent);
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 960px) {
          .rl-footer-body {
            grid-template-columns: 1fr 1fr;
            gap: 36px;
          }

          .rl-footer-brand {
            grid-column: 1 / -1;
          }
        }

        @media (max-width: 560px) {
          .rl-footer-body {
            grid-template-columns: 1fr;
            gap: 28px;
            padding: 40px 20px 28px;
          }

          .rl-footer-brand {
            grid-column: auto;
          }

          .rl-footer-bottom-inner {
            flex-direction: column;
            text-align: center;
            gap: 8px;
          }

          .rl-footer-cta {
            padding: 44px 20px;
          }
        }
      `}</style>

      <footer className="rl-footer">

        {/* ── CTA Band (estampado) ── */}
        <div className="rl-footer-cta">
          <div className="rl-footer-cta-eyebrow">
            <LeafIcon /> Free Consultation
          </div>
          <h2>Ready to Transform Your Outdoor Space?</h2>
          <p>
            Schedule a consultation with our team and let us bring your landscaping vision to life — one landscape at a time.
          </p>
          <a href="/contact" className="rl-footer-cta-btn">
            Get a Free Quote <ArrowRight />
          </a>
        </div>

        {/* ── Main Grid (claro) ── */}
        <div className="rl-footer-body">

          {/* Col 1 — Brand */}
          <div className="rl-footer-brand">
            <a href="/" className="rl-footer-logo" aria-label="Ruiz Landscape Service, Inc. — Home">
              <img
                className="rl-footer-logo-img"
                src="/wp-content/uploads/2026/06/Ruiz_Landscape_HD_Transparent-scaled.png"
                alt="Ruiz Landscape Service, Inc."
              />
            </a>

            <p className="rl-footer-tagline">
              Eco-Conscious Landscaping for a Greener Tomorrow
            </p>

            <div className="rl-footer-socials">
              <a href="https://facebook.com/ruiz.landscape.7" target="_blank" rel="noreferrer"
                className="rl-footer-social-btn" aria-label="Facebook">
                <FacebookIcon />
              </a>
              <a href="https://twitter.com/RuizLandscapeOC" target="_blank" rel="noreferrer"
                className="rl-footer-social-btn" aria-label="Twitter / X">
                <TwitterIcon />
              </a>
              <a href="https://instagram.com/ruizlandscapeservices" target="_blank" rel="noreferrer"
                className="rl-footer-social-btn" aria-label="Instagram">
                <InstagramIcon />
              </a>
            </div>
          </div>

          {/* Col 2 — Quick Links */}
          <div>
            <div className="rl-footer-col-title">Navigation</div>
            <ul className="rl-footer-links">
              {quickLinks.map((link) => (
                <li key={link.href}>
                  <a href={link.href}>
                    <span className="arrow"><ArrowRight /></span>
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Col 3 — Services */}
          <div>
            <div className="rl-footer-col-title">Services</div>
            <ul className="rl-footer-services">
              {services.map((s) => (
                <li key={s.href}>
                  <a href={s.href}>{s.label}</a>
                </li>
              ))}
            </ul>
          </div>

          {/* Col 4 — Contact */}
          <div>
            <div className="rl-footer-col-title">Contact Us</div>
            <ul className="rl-footer-contact-list">
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><LocationIcon /></span>
                <span>6 McLaren, Suite H<br />Irvine, CA 92618</span>
              </li>
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><PhoneIcon /></span>
                <a href="tel:9493051605">949-305-1605</a>
              </li>
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><EmailIcon /></span>
                <a href="mailto:office@RuizLandscape.com">office@RuizLandscape.com</a>
              </li>
              <li className="rl-footer-contact-item">
                <span className="rl-footer-contact-icon"><GlobeIcon /></span>
                <a href="https://www.RuizLandscape.com" target="_blank" rel="noreferrer">
                  www.RuizLandscape.com
                </a>
              </li>
            </ul>

            <div className="rl-footer-counties">
              <div className="rl-footer-counties-title">Service Areas</div>
              <div className="rl-footer-counties-list">
                {counties.map((c) => (
                  <span key={c} className="rl-footer-county-tag">{c}</span>
                ))}
              </div>
            </div>
          </div>

        </div>

        {/* ── Bottom Bar ── */}
        <div className="rl-footer-bottom">
          <div className="rl-footer-bottom-inner">
            <p className="rl-footer-copyright">
              &copy; {year} <strong>Ruiz Landscape Service, Inc.</strong> — All rights reserved.
            </p>
            <div className="rl-footer-lic">
              <LicenseIcon />
              CA State License #925207
            </div>
          </div>
        </div>

      </footer>
    </>
  )
}

export default Footer