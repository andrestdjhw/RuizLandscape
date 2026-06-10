import React, { useState, useEffect, useRef } from "react"

const services = [
  { label: "Landscape Design & Installation", href: "/services/landscape-design-installation", key: "landscape-design", desc: "Custom outdoor spaces, designed & built to last." },
  { label: "Lawn Care & Maintenance", href: "/services/lawn-care-maintenance", key: "lawn-care", desc: "Reliable upkeep for a lush, healthy lawn." },
  { label: "Tree & Shrub Care", href: "/services/tree-shrub-care", key: "tree-shrub-care", desc: "Expert pruning, trimming & plant health." },
  { label: "Irrigation Systems", href: "/services/irrigation-systems", key: "irrigation", desc: "Smart, water-saving systems installed & repaired." },
  { label: "Synthetic Turf", href: "/services/synthetic-turf", key: "synthetic-turf", desc: "Always-green turf with zero mowing." },
  { label: "Large Trees Installation", href: "/services/large-tree-installation", key: "large-trees", desc: "Mature trees sourced & planted with care." },
  { label: "Low Voltage Lighting", href: "/services/low-voltage-lighting", key: "lighting", desc: "Showcase your yard with elegant night lighting." },
  { label: "Landscape Design (2D / 3D)", href: "/services/landscape-design-2d", key: "landscape-design-2d", desc: "Plans to visualize your project before we build." },
]

// SVG Icons
const PhoneIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
  </svg>
)

const EmailIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="20" height="16" x="2" y="4" rx="2"/>
    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
  </svg>
)

const LocationIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
    <circle cx="12" cy="10" r="3"/>
  </svg>
)

const FacebookIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
  </svg>
)

const TwitterIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
  </svg>
)

const InstagramIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
  </svg>
)

const ChevronDownIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="m6 9 6 6 6-6"/>
  </svg>
)

const MenuIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <line x1="4" x2="20" y1="12" y2="12"/>
    <line x1="4" x2="20" y1="6" y2="6"/>
    <line x1="4" x2="20" y1="18" y2="18"/>
  </svg>
)

const CloseIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
  </svg>
)

const LeafIcon = () => (
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"/>
  </svg>
)

// ── Per-service icons for the mega-menu ──
const serviceIconPaths = {
  "landscape-design": (
    <>
      <circle cx="12" cy="12" r="9" />
      <polygon points="14.8 9.2 13.2 13.2 9.2 14.8 10.8 10.8" />
    </>
  ),
  "lawn-care": (
    <>
      <path d="M7 20h10" />
      <path d="M12 20c4-1.5 1-5 2.5-8.5" />
      <path d="M10 11c.9.7 1.4 1.8 1.8 3-1.6.3-2.8.3-3.8-.2-1-.5-1.8-1.5-2.4-3.4 2.2-.4 3.5 0 4.4.6z" />
      <path d="M14 8a5.6 5.6 0 0 0-.9 3.2c1.5-.1 2.6-.5 3.4-1.1.8-.8 1.3-1.8 1.4-3.7-2.2.1-3.2.8-3.9 1.6z" />
    </>
  ),
  "tree-shrub-care": (
    <>
      <path d="M8 19a4 4 0 0 1-2.24-7.32A3.5 3.5 0 0 1 9 6.03V6a3 3 0 1 1 6 0v.04a3.5 3.5 0 0 1 3.24 5.65A4 4 0 0 1 16 19Z" />
      <path d="M12 19v3" />
    </>
  ),
  "irrigation": (
    <path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5S12.5 5 12 2.5C11.5 5 10 7.4 8 9.5 6 11.1 5 13 5 15a7 7 0 0 0 7 7z" />
  ),
  "synthetic-turf": (
    <>
      <rect x="3.5" y="3.5" width="7" height="7" />
      <rect x="13.5" y="3.5" width="7" height="7" />
      <rect x="3.5" y="13.5" width="7" height="7" />
      <rect x="13.5" y="13.5" width="7" height="7" />
    </>
  ),
  "large-trees": (
    <>
      <path d="M12 3 7 11h3l-4 6h12l-4-6h3z" />
      <path d="M12 17v4" />
    </>
  ),
  "lighting": (
    <>
      <path d="M9 18h6" />
      <path d="M10 21h4" />
      <path d="M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.4 1 2.5h6c0-1.1.4-1.9 1-2.5A6 6 0 0 0 12 3z" />
    </>
  ),
  "landscape-design-2d": (
    <>
      <path d="m12 3 9 5-9 5-9-5z" />
      <path d="m3 13 9 5 9-5" />
    </>
  ),
}

const ServiceIcon = ({ name }) => (
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round">
    {serviceIconPaths[name]}
  </svg>
)

function Navbar() {
  const [mobileOpen, setMobileOpen] = useState(false)
  const [servicesOpen, setServicesOpen] = useState(false)
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)
  const dropdownRef = useRef(null)

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 20)
    window.addEventListener("scroll", handleScroll)
    return () => window.removeEventListener("scroll", handleScroll)
  }, [])

  useEffect(() => {
    const handleClickOutside = (e) => {
      if (dropdownRef.current && !dropdownRef.current.contains(e.target)) {
        setServicesOpen(false)
      }
    }
    document.addEventListener("mousedown", handleClickOutside)
    return () => document.removeEventListener("mousedown", handleClickOutside)
  }, [])

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Barlow+Condensed:wght@600;700;800&display=swap');

        .rl-navbar * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }

        .rl-navbar {
          /* Paleta de marca */
          --rl-green:        #3d5a2a;
          --rl-green-mid:    #4a6e32;
          --rl-accent:       #996a6c;   /* café (Smoky Rose) — antes dorado */
          --rl-accent-hover: #ab7d7f;
          --rl-on-accent:    #ffffff;

          font-family: 'Barlow', sans-serif;
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          z-index: 1000;
          transition: top 0.2s ease, box-shadow 0.3s ease;
        }

        .rl-navbar.scrolled {
          box-shadow: 0 2px 16px rgba(0,0,0,0.10);
        }

        /* ── WORDPRESS ADMIN BAR OFFSET ──
           WP adds .admin-bar to <body> when logged in. The admin bar is
           fixed at the top (32px desktop / 46px mobile). Since this navbar
           is position:fixed it ignores WP's html margin-top, so we push it
           down manually only when the admin bar is present. */
        body.admin-bar .rl-navbar {
          top: 32px;
        }

        @media screen and (max-width: 782px) {
          body.admin-bar .rl-navbar {
            top: 46px;
          }
        }

        /* ── TOPBAR ── */
        .rl-topbar {
          background-color: #f7f5f0;
          border-bottom: 1px solid #e0dbd0;
          padding: 0 32px;
          height: 36px;
          display: flex;
          align-items: center;
          justify-content: space-between;
        }

        .rl-topbar-left,
        .rl-topbar-center,
        .rl-topbar-right {
          display: flex;
          align-items: center;
          gap: 20px;
        }

        .rl-topbar-left  { flex: 1; }
        .rl-topbar-center { flex: 0 0 auto; }
        .rl-topbar-right  { flex: 1; justify-content: flex-end; }

        .rl-topbar-link {
          display: flex;
          align-items: center;
          gap: 6px;
          color: #6b7060;
          text-decoration: none;
          font-size: 11.5px;
          font-weight: 500;
          letter-spacing: 0.02em;
          transition: color 0.15s;
          white-space: nowrap;
        }

        .rl-topbar-link:hover { color: var(--rl-green); }

        .rl-topbar-divider {
          width: 1px;
          height: 12px;
          background: #ccc8be;
        }

        .rl-location-badge {
          display: flex;
          align-items: center;
          gap: 5px;
          color: var(--rl-green-mid);
          font-size: 11px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
        }

        .rl-social-link {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 24px;
          height: 24px;
          color: #8a9080;
          text-decoration: none;
          transition: color 0.15s;
        }

        .rl-social-link:hover { color: var(--rl-green); }

        /* ── MAIN NAV ── */
        .rl-mainnav {
          background-color: #ffffff;
          border-bottom: 2px solid var(--rl-green);
          padding: 0 32px;
          height: 68px;
          display: grid;
          grid-template-columns: 1fr auto 1fr;
          align-items: center;
        }

        /* Logo */
        .rl-logo {
          display: flex;
          align-items: center;
          gap: 12px;
          text-decoration: none;
          flex-shrink: 0;
          justify-self: start;
        }

        .rl-logo-img {
          height: 60px;
          width: auto;
          max-width: 230px;
          display: block;
          object-fit: contain;
        }

        /* Nav links */
        .rl-nav-links {
          display: flex;
          align-items: center;
          gap: 0;
          list-style: none;
          justify-self: center;
        }

        /* Right side (Contact CTA on desktop, hamburger on mobile) */
        .rl-nav-right {
          display: flex;
          align-items: center;
          gap: 12px;
          justify-self: end;
        }

        .rl-nav-item { position: relative; }

        .rl-nav-link {
          display: flex;
          align-items: center;
          gap: 5px;
          padding: 8px 16px;
          color: #3a3a2e;
          text-decoration: none;
          font-size: 12.5px;
          font-weight: 700;
          letter-spacing: 0.08em;
          text-transform: uppercase;
          transition: color 0.15s;
          cursor: pointer;
          background: none;
          border: none;
          white-space: nowrap;
          position: relative;
        }

        .rl-nav-link::after {
          content: '';
          position: absolute;
          bottom: -2px;
          left: 16px;
          right: 16px;
          height: 2px;
          background: var(--rl-accent);
          transform: scaleX(0);
          transition: transform 0.2s ease;
        }

        .rl-nav-link:hover { color: var(--rl-accent); }
        .rl-nav-link:hover::after { transform: scaleX(1); }

        .rl-nav-link.cta {
          background: var(--rl-accent);
          color: #ffffff;
          padding: 9px 22px;
          font-size: 12px;
          letter-spacing: 0.1em;
          border: 2px solid var(--rl-accent);
          transition: background 0.15s, color 0.15s;
        }

        .rl-nav-link.cta::after { display: none; }

        .rl-nav-link.cta:hover {
          background: transparent;
          color: var(--rl-accent);
        }

        .rl-chevron {
          transition: transform 0.2s ease;
          display: flex;
          align-items: center;
          opacity: 0.6;
        }

        .rl-chevron.open { transform: rotate(180deg); }

        /* ── MEGA-MENU ── */
        .rl-mega {
          position: absolute;
          top: calc(100% + 12px);
          left: 50%;
          width: 640px;
          max-width: calc(100vw - 64px);
          background: #ffffff;
          border: 1px solid #d8d4c8;
          border-top: 3px solid var(--rl-green);
          box-shadow: 0 14px 40px rgba(0,0,0,0.13);
          opacity: 0;
          pointer-events: none;
          transform: translateX(-50%) translateY(-8px);
          transition: opacity 0.2s ease, transform 0.2s ease;
        }

        /* invisible bridge so hover doesn't drop in the gap */
        .rl-mega::before {
          content: '';
          position: absolute;
          top: -15px;
          left: 0;
          right: 0;
          height: 15px;
        }

        .rl-mega.open {
          opacity: 1;
          pointer-events: all;
          transform: translateX(-50%) translateY(0);
        }

        .rl-mega-inner { display: flex; }

        .rl-mega-services {
          flex: 1;
          padding: 14px 10px;
          display: grid;
          grid-template-columns: 1fr 1fr;
          gap: 0;
          align-content: start;
        }

        .rl-mega-head {
          grid-column: 1 / -1;
          display: flex;
          align-items: center;
          gap: 12px;
          padding: 4px 12px 12px;
        }

        .rl-mega-head span {
          font-family: 'Barlow Condensed', sans-serif;
          font-size: 13px;
          font-weight: 700;
          letter-spacing: 0.16em;
          text-transform: uppercase;
          color: #7a9060;
          white-space: nowrap;
        }

        .rl-mega-head .line { flex: 1; height: 1px; background: #e8e4da; }

        .rl-mega-item {
          display: flex;
          gap: 12px;
          padding: 10px 12px;
          text-decoration: none;
          transition: background 0.12s;
        }

        .rl-mega-item:hover { background: #f7f5f0; }

        .rl-mega-ico {
          width: 36px;
          height: 36px;
          flex-shrink: 0;
          border: 1px solid #e3ddd0;
          background: #fbfaf6;
          color: var(--rl-green-mid);
          display: flex;
          align-items: center;
          justify-content: center;
          transition: background 0.15s, color 0.15s, border-color 0.15s;
        }

        .rl-mega-item:hover .rl-mega-ico {
          background: var(--rl-green);
          color: #ffffff;
          border-color: var(--rl-green);
        }

        .rl-mega-txt { display: flex; flex-direction: column; gap: 2px; }

        .rl-mega-label {
          font-size: 13px;
          font-weight: 700;
          color: #2a3320;
          letter-spacing: 0.01em;
          line-height: 1.2;
          transition: color 0.12s;
        }

        .rl-mega-item:hover .rl-mega-label { color: var(--rl-green); }

        .rl-mega-desc { font-size: 11px; color: #8a8f7e; line-height: 1.35; }

        /* feature column */
        .rl-mega-feature {
          width: 210px;
          flex-shrink: 0;
          background: linear-gradient(155deg, #46622f, #2d4420);
          color: #ffffff;
          padding: 26px 24px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          position: relative;
          overflow: hidden;
        }

        .rl-mega-feature-leaf {
          position: absolute;
          right: -22px;
          bottom: -22px;
          color: #ffffff;
          opacity: 0.08;
          pointer-events: none;
        }

        .rl-mega-feature-leaf svg { width: 130px; height: 130px; }

        .rl-mega-feature h4 {
          font-family: 'Barlow Condensed', sans-serif;
          font-size: 23px;
          font-weight: 700;
          letter-spacing: 0.03em;
          text-transform: uppercase;
          line-height: 1.05;
          margin-bottom: 8px;
          position: relative;
        }

        .rl-mega-feature p {
          font-size: 12.5px;
          color: #d8e3cc;
          line-height: 1.5;
          margin-bottom: 18px;
          position: relative;
        }

        .rl-mega-feature .rl-mega-btn {
          background: var(--rl-accent);
          color: var(--rl-on-accent);
          padding: 11px 16px;
          font-weight: 700;
          font-size: 11.5px;
          letter-spacing: 0.08em;
          text-transform: uppercase;
          text-decoration: none;
          text-align: center;
          transition: background 0.15s;
          position: relative;
        }

        .rl-mega-feature .rl-mega-btn:hover { background: var(--rl-accent-hover); }

        .rl-mega-feature .rl-mega-phone {
          margin-top: 14px;
          display: flex;
          align-items: center;
          gap: 7px;
          font-size: 12.5px;
          font-weight: 600;
          color: #cdd9bf;
          text-decoration: none;
          position: relative;
          transition: color 0.15s;
        }

        .rl-mega-feature .rl-mega-phone:hover { color: #ffffff; }

        /* Mobile toggle */
        .rl-mobile-toggle {
          display: none;
          background: none;
          border: 1px solid #ccc8be;
          color: #3a3a2e;
          cursor: pointer;
          padding: 6px 8px;
          transition: border-color 0.15s;
        }

        .rl-mobile-toggle:hover { border-color: var(--rl-green); color: var(--rl-green); }

        /* ── MOBILE MENU ── */
        .rl-mobile-menu {
          display: none;
          background: #ffffff;
          border-top: 1px solid #e0dbd0;
          overflow: hidden;
          max-height: 0;
          transition: max-height 0.35s ease;
        }

        .rl-mobile-menu.open { max-height: 1000px; }

        .rl-mobile-menu-inner { padding: 8px 0 16px; }

        .rl-mobile-link {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 13px 28px;
          color: #3a3a2e;
          text-decoration: none;
          font-size: 13px;
          font-weight: 700;
          letter-spacing: 0.08em;
          text-transform: uppercase;
          border: none;
          background: none;
          width: 100%;
          text-align: left;
          cursor: pointer;
          border-bottom: 1px solid #f0ede6;
          transition: color 0.15s, background 0.15s;
        }

        .rl-mobile-link:hover { color: var(--rl-green); background: #f7f5f0; }

        .rl-mobile-services {
          overflow: hidden;
          max-height: 0;
          transition: max-height 0.3s ease;
          background: #f7f5f0;
          border-bottom: 1px solid #e0dbd0;
        }

        .rl-mobile-services.open { max-height: 700px; }

        .rl-mobile-service-item {
          display: flex;
          align-items: center;
          gap: 12px;
          padding: 11px 28px 11px 36px;
          color: #6b7060;
          text-decoration: none;
          font-size: 12.5px;
          font-weight: 600;
          border-bottom: 1px solid #ece9e0;
          transition: color 0.15s;
        }

        .rl-mobile-service-ico {
          width: 22px;
          height: 22px;
          flex-shrink: 0;
          color: var(--rl-green-mid);
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .rl-mobile-service-ico svg { width: 17px; height: 17px; }

        .rl-mobile-service-item:hover { color: var(--rl-green); }

        .rl-mobile-cta {
          margin: 14px 28px 4px;
          display: block;
          text-align: center;
          padding: 13px 20px;
          background: var(--rl-green);
          color: #ffffff;
          border: 2px solid var(--rl-green);
          font-size: 12px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          text-decoration: none;
          transition: background 0.15s, color 0.15s;
        }

        .rl-mobile-cta:hover { background: transparent; color: var(--rl-green); }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {
          .rl-nav-links { display: none; }
          .rl-contact-desktop { display: none; }
          .rl-mobile-toggle { display: flex; }
          .rl-mobile-menu { display: block; }
          .rl-topbar-link span { display: none; }
        }

        @media (max-width: 560px) {
          .rl-topbar { padding: 0 16px; }
          .rl-mainnav { padding: 0 16px; }
          .rl-topbar-center { display: none; }
          .rl-logo-img { height: 38px; }
        }
      `}</style>

      <nav className={`rl-navbar ${scrolled ? "scrolled" : ""}`} style={{ boxShadow: scrolled ? undefined : 'none' }}>

        {/* ── TOPBAR ── */}
        <div className="rl-topbar">
          {/* Left: phone + email */}
          <div className="rl-topbar-left">
            <a href="tel:9493051605" className="rl-topbar-link">
              <PhoneIcon />
              <span>949-305-1605</span>
            </a>
            <div className="rl-topbar-divider" />
            <a href="mailto:office@ruizlandscape.com" className="rl-topbar-link">
              <EmailIcon />
              <span>office@ruizlandscape.com</span>
            </a>
          </div>

          {/* Center: location */}
          <div className="rl-topbar-center">
            <div className="rl-location-badge">
              <LocationIcon />
              Irvine, CA &nbsp;·&nbsp; Serving LA, Orange &amp; Imperial Counties
            </div>
          </div>

          {/* Right: socials */}
          <div className="rl-topbar-right">
            <a href="https://facebook.com/ruiz.landscape.7" target="_blank" rel="noreferrer" className="rl-social-link" aria-label="Facebook">
              <FacebookIcon />
            </a>
            <a href="https://twitter.com/RuizLandscapeOC" target="_blank" rel="noreferrer" className="rl-social-link" aria-label="Twitter / X">
              <TwitterIcon />
            </a>
            <a href="https://instagram.com/ruizlandscapeservices" target="_blank" rel="noreferrer" className="rl-social-link" aria-label="Instagram">
              <InstagramIcon />
            </a>
          </div>
        </div>

        {/* ── MAIN NAV ── */}
        <div className="rl-mainnav">
          {/* Logo */}
          <a href="/" className="rl-logo" aria-label="Ruiz Landscape Service, Inc. — Home">
            <img
              className="rl-logo-img"
              src="/wp-content/uploads/2026/06/Ruiz_Landscape_HD_Transparent-scaled.png"
              alt="Ruiz Landscape Service, Inc."
            />
          </a>

          {/* Desktop links */}
          <ul className="rl-nav-links">
            <li className="rl-nav-item">
              <a href="/" className="rl-nav-link">Home</a>
            </li>
            <li className="rl-nav-item">
              <a href="/about" className="rl-nav-link">About</a>
            </li>

            {/* Services mega-menu */}
            <li
              className="rl-nav-item"
              ref={dropdownRef}
              onMouseEnter={() => setServicesOpen(true)}
              onMouseLeave={() => setServicesOpen(false)}
            >
              <button
                className="rl-nav-link"
                onClick={() => setServicesOpen(prev => !prev)}
                aria-expanded={servicesOpen}
              >
                Services
                <span className={`rl-chevron ${servicesOpen ? "open" : ""}`}>
                  <ChevronDownIcon />
                </span>
              </button>

              <div className={`rl-mega ${servicesOpen ? "open" : ""}`}>
                <div className="rl-mega-inner">
                  <div className="rl-mega-services">
                    <div className="rl-mega-head">
                      <span>Our Services</span>
                      <div className="line" />
                    </div>
                    {services.map((s) => (
                      <a
                        key={s.href}
                        href={s.href}
                        className="rl-mega-item"
                        onClick={() => setServicesOpen(false)}
                      >
                        <span className="rl-mega-ico"><ServiceIcon name={s.key} /></span>
                        <span className="rl-mega-txt">
                          <span className="rl-mega-label">{s.label}</span>
                          <span className="rl-mega-desc">{s.desc}</span>
                        </span>
                      </a>
                    ))}
                  </div>

                  <div className="rl-mega-feature">
                    <span className="rl-mega-feature-leaf"><LeafIcon /></span>
                    <h4>Free On-Site Estimate</h4>
                    <p>Tell us about your project and we'll give you a clear, no-pressure quote.</p>
                    <a href="/contact" className="rl-mega-btn" onClick={() => setServicesOpen(false)}>Contact Us</a>
                    <a href="tel:9493051605" className="rl-mega-phone">
                      <PhoneIcon /> 949-305-1605
                    </a>
                  </div>
                </div>
              </div>
            </li>

            <li className="rl-nav-item">
              <a href="/gallery" className="rl-nav-link">Gallery</a>
            </li>
          </ul>

          {/* Right side: Contact CTA (desktop) + hamburger (mobile) */}
          <div className="rl-nav-right">
            <a href="/contact" className="rl-nav-link cta rl-contact-desktop">Contact Us</a>

            <button
              className="rl-mobile-toggle"
              onClick={() => setMobileOpen(prev => !prev)}
              aria-label="Toggle menu"
            >
              {mobileOpen ? <CloseIcon /> : <MenuIcon />}
            </button>
          </div>
        </div>

        {/* ── MOBILE MENU ── */}
        <div className={`rl-mobile-menu ${mobileOpen ? "open" : ""}`}>
          <div className="rl-mobile-menu-inner">
            <a href="/" className="rl-mobile-link" onClick={() => setMobileOpen(false)}>Home</a>
            <a href="/about" className="rl-mobile-link" onClick={() => setMobileOpen(false)}>About</a>

            <button
              className="rl-mobile-link"
              onClick={() => setMobileServicesOpen(prev => !prev)}
            >
              Services
              <span className={`rl-chevron ${mobileServicesOpen ? "open" : ""}`}>
                <ChevronDownIcon />
              </span>
            </button>

            <div className={`rl-mobile-services ${mobileServicesOpen ? "open" : ""}`}>
              {services.map((s) => (
                <a
                  key={s.href}
                  href={s.href}
                  className="rl-mobile-service-item"
                  onClick={() => setMobileOpen(false)}
                >
                  <span className="rl-mobile-service-ico"><ServiceIcon name={s.key} /></span>
                  <span>{s.label}</span>
                </a>
              ))}
            </div>

            <a href="/gallery" className="rl-mobile-link" onClick={() => setMobileOpen(false)}>Gallery</a>
            <a href="/contact" className="rl-mobile-cta" onClick={() => setMobileOpen(false)}>Contact Us</a>
          </div>
        </div>
      </nav>
    </>
  )
}

export default Navbar