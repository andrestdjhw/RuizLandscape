/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/ContactForm.js"
/*!************************************!*\
  !*** ./src/scripts/ContactForm.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ── Datos (edítalos aquí) ─────────────────────────────

const services = ["Landscape Design & Installation", "Lawn Care & Maintenance", "Tree & Shrub Care", "Irrigation Systems", "Synthetic Turf", "Large Tree Installation", "Low Voltage Lighting", "Something else"];
const ArrowRight = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M5 12h14M12 5l7 7-7 7"
  })
});

// ── Componente ────────────────────────────────────────
function ContactForm({
  heading = "Get your free consultation",
  subheading = "Tell us about your project — we'll get back to you within one business day.",
  privacyHref = "/privacy-policy",
  termsHref = "/terms-and-conditions"
}) {
  /* ───────────────────────────────────────────────────────────────
     ENVÍO DEL FORMULARIO
     Tal cual, hace un POST normal a la misma URL (action=""). Tienes
     dos caminos para que envíe de verdad:
      1) Plugin (Contact Form 7, WPForms…): renderiza el shortcode del
        plugin en el template y deja este componente solo para páginas
        donde quieras el formulario propio. O reemplaza el <form> de
        abajo por el markup/embed del plugin.
      2) Manejarlo en React sin recargar — descomenta handleSubmit,
        ponlo en <form onSubmit={handleSubmit}> y apúntalo a tu
        endpoint (REST API o admin-ajax):
      // const [status, setStatus] = React.useState("idle")
     // async function handleSubmit(e) {
     //   e.preventDefault()
     //   setStatus("sending")
     //   const data = Object.fromEntries(new FormData(e.currentTarget).entries())
     //   const res = await fetch("/wp-json/ruiz/v1/contact", {
     //     method: "POST",
     //     headers: { "Content-Type": "application/json" },
     //     body: JSON.stringify(data),
     //   })
     //   setStatus(res.ok ? "done" : "error")
     // }
  ─────────────────────────────────────────────────────────────── */

  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600&family=Barlow+Condensed:wght@700;800&display=swap');

        .rl-cform * { box-sizing: border-box; margin: 0; padding: 0; }

        .rl-cform {
          /* Paleta de marca */
          --rl-accent:       #996a6c;   /* café (Smoky Rose) */
          --rl-accent-rgb:   153, 106, 108;
          --rl-accent-hover: #ab7d7f;
          --rl-on-accent:    #ffffff;
          --rl-green-dark:   #1a2410;

          font-family: 'Barlow', sans-serif;
          width: 100%;
          color: #ffffff;
          background: rgba(16, 26, 8, 0.74);
          border: 1px solid rgba(var(--rl-accent-rgb), 0.35);
          -webkit-backdrop-filter: blur(4px);
          backdrop-filter: blur(4px);
          padding: 30px;
          display: flex;
          flex-direction: column;
          gap: 13px;
        }

        .rl-cform-title {
          font-family: 'Barlow Condensed', sans-serif;
          font-size: 25px;
          font-weight: 800;
          text-transform: uppercase;
          letter-spacing: 0.02em;
          line-height: 1.1;
          color: #ffffff;
        }

        .rl-cform-sub {
          font-size: 13px;
          line-height: 1.5;
          color: rgba(255,255,255,0.6);
          margin: -6px 0 4px;
        }

        .rl-cform-row {
          display: grid;
          grid-template-columns: 1fr 1fr;
          gap: 12px;
        }

        .rl-cform input:not([type="checkbox"]),
        .rl-cform select,
        .rl-cform textarea {
          width: 100%;
          background: rgba(255,255,255,0.06);
          border: 1px solid rgba(255,255,255,0.18);
          color: #ffffff;
          font-family: 'Barlow', sans-serif;
          font-size: 14px;
          padding: 12px 13px;
          border-radius: 0;
          outline: none;
          transition: border-color 0.15s, background 0.15s;
        }

        .rl-cform textarea { resize: vertical; min-height: 132px; }

        .rl-cform input::placeholder,
        .rl-cform textarea::placeholder { color: rgba(255,255,255,0.42); }

        .rl-cform input:not([type="checkbox"]):focus,
        .rl-cform select:focus,
        .rl-cform textarea:focus {
          border-color: var(--rl-accent);
          background: rgba(255,255,255,0.1);
        }

        .rl-cform select {
          -webkit-appearance: none;
          appearance: none;
          cursor: pointer;
          background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='%23996a6c' stroke-width='2.5'><path d='m6 9 6 6 6-6'/></svg>");
          background-repeat: no-repeat;
          background-position: right 13px center;
          padding-right: 38px;
        }
        .rl-cform select option { color: var(--rl-green-dark); }

        .rl-cform-check {
          display: flex;
          align-items: flex-start;
          gap: 10px;
          margin-top: 2px;
          font-size: 12.5px;
          line-height: 1.5;
          color: rgba(255,255,255,0.62);
          cursor: pointer;
        }
        .rl-cform-check input[type="checkbox"] {
          width: 16px;
          height: 16px;
          margin: 1px 0 0;
          flex-shrink: 0;
          accent-color: var(--rl-accent);
          cursor: pointer;
        }
        .rl-cform-check a { color: var(--rl-accent); text-decoration: underline; }

        .rl-cform-btn {
          margin-top: 4px;
          width: 100%;
          justify-content: center;
          border: none;
          cursor: pointer;
          background: var(--rl-accent);
          color: var(--rl-on-accent);
          font-family: 'Barlow', sans-serif;
          font-size: 12.5px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          padding: 15px 28px;
          display: inline-flex;
          align-items: center;
          gap: 10px;
          transition: background 0.18s;
        }
        .rl-cform-btn:hover { background: var(--rl-accent-hover); }

        /* Entrada al montar + flotación bouncy en loop (solo si no hay movimiento reducido) */
        @media (prefers-reduced-motion: no-preference) {
          .rl-cform {
            opacity: 0;
            animation:
              rl-cform-in 0.9s cubic-bezier(0.16, 0.84, 0.34, 1) 0.1s both,
              rl-cform-float 5.5s ease-in-out 1.1s infinite;
          }
          /* Se detiene mientras el usuario interactúa, para no estorbar al escribir */
          .rl-cform:hover,
          .rl-cform:focus-within {
            animation-play-state: paused;
          }
        }
        @keyframes rl-cform-in {
          from { opacity: 0; transform: translateY(30px) scale(0.98); }
          to   { opacity: 1; transform: none; }
        }
        @keyframes rl-cform-float {
          0%   { transform: translateY(0); }
          30%  { transform: translateY(-12px); }
          45%  { transform: translateY(-6px); }
          60%  { transform: translateY(-12px); }
          100% { transform: translateY(0); }
        }

        @media (max-width: 480px) {
          .rl-cform { padding: 22px; }
          .rl-cform-row { grid-template-columns: 1fr; }
        }
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
      className: "rl-cform",
      name: "ruiz_hero_contact",
      method: "post",
      action: "",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "rl-cform-title",
        children: heading
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        className: "rl-cform-sub",
        children: subheading
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "rl-cform-row",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "text",
          name: "rl_name",
          placeholder: "Full name",
          "aria-label": "Full name",
          required: true
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "tel",
          name: "rl_phone",
          placeholder: "Phone",
          "aria-label": "Phone"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
        type: "email",
        name: "rl_email",
        placeholder: "Email address",
        "aria-label": "Email address",
        required: true
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("select", {
        name: "rl_service",
        "aria-label": "Service of interest",
        required: true,
        defaultValue: "",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
          value: "",
          disabled: true,
          children: "Service of interest\u2026"
        }), services.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
          children: s
        }, s))]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
        name: "rl_message",
        placeholder: "Tell us a bit about your project (optional)",
        "aria-label": "Project details"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
        className: "rl-cform-check",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "checkbox",
          name: "rl_consent",
          required: true
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
          children: ["I agree to the ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: privacyHref,
            children: "Privacy Policy"
          }), " and", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: termsHref,
            children: "Terms & Conditions"
          }), "."]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
        type: "submit",
        className: "rl-cform-btn",
        children: ["Request my consultation", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ArrowRight, {})]
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// ── Data ──────────────────────────────────────────────

const services = [{
  label: "Landscape Design & Installation",
  href: "/services/landscape-design"
}, {
  label: "Lawn Care & Maintenance",
  href: "/services/lawn-care"
}, {
  label: "Tree & Shrub Care",
  href: "/services/tree-shrub-care"
}, {
  label: "Irrigation Systems",
  href: "/services/irrigation"
}, {
  label: "Synthetic Turf",
  href: "/services/synthetic-turf"
}, {
  label: "Large Trees Installation",
  href: "/services/large-trees"
}, {
  label: "Low Voltage Lighting",
  href: "/services/lighting"
}, {
  label: "Landscape Design",
  href: "/services/landscape-design-2d"
}];
const quickLinks = [{
  label: "Home",
  href: "/"
}, {
  label: "About Us",
  href: "/about"
}, {
  label: "Services",
  href: "/services"
}, {
  label: "Gallery",
  href: "/gallery"
}, {
  label: "Contact Us",
  href: "/contact"
}];
const counties = ["Los Angeles County", "Orange County", "Imperial County"];

// ── SVG Icons ─────────────────────────────────────────
const PhoneIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"
  })
});
const EmailIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    width: "20",
    height: "16",
    x: "2",
    y: "4",
    rx: "2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
  })]
});
const LocationIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "10",
    r: "3"
  })]
});
const GlobeIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "12",
    r: "10"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M2 12h20"
  })]
});
const LicenseIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    width: "16",
    height: "20",
    x: "4",
    y: "2",
    rx: "2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M9 7h6M9 11h6M9 15h4"
  })]
});
const FacebookIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "18",
  height: "18",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
  })
});
const TwitterIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "17",
  height: "17",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
  })
});
const InstagramIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "17",
  height: "17",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    width: "20",
    height: "20",
    x: "2",
    y: "2",
    rx: "5",
    ry: "5"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "17.5",
    x2: "17.51",
    y1: "6.5",
    y2: "6.5"
  })]
});
const ArrowRight = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "12",
  height: "12",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M5 12h14M12 5l7 7-7 7"
  })
});
const LeafIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "13",
  height: "13",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"
  })
});

// ── Component ─────────────────────────────────────────
function Footer() {
  const year = new Date().getFullYear();
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
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
          border-radius: 0;            /* esquinas rectas — igual que el resto del proyecto */
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
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
      className: "rl-footer",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "rl-footer-cta",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "rl-footer-cta-eyebrow",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(LeafIcon, {}), " Free Consultation"]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h2", {
          children: "Ready to Transform Your Outdoor Space?"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          children: "Schedule a consultation with our team and let us bring your landscaping vision to life \u2014 one landscape at a time."
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
          href: "/contact",
          className: "rl-footer-cta-btn",
          children: ["Contact Us ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ArrowRight, {})]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "rl-footer-body",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "rl-footer-brand",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            className: "rl-footer-logo",
            "aria-label": "Ruiz Landscape Service, Inc. \u2014 Home",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              className: "rl-footer-logo-img",
              src: "/wp-content/uploads/2026/06/Ruiz_Landscape_HD_Transparent-scaled.png",
              alt: "Ruiz Landscape Service, Inc."
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
            className: "rl-footer-tagline",
            children: "Eco-Conscious Landscaping for a Greener Tomorrow"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "rl-footer-socials",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "https://www.facebook.com/ruizlandscapeserviceinc?mibextid=wwXIfr",
              target: "_blank",
              rel: "noreferrer",
              className: "rl-footer-social-btn",
              "aria-label": "Facebook",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FacebookIcon, {})
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "https://x.com/ruizlandscapeoc?s=11",
              target: "_blank",
              rel: "noreferrer",
              className: "rl-footer-social-btn",
              "aria-label": "Twitter / X",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(TwitterIcon, {})
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "https://www.instagram.com/ruizlandscapeserviceinc/",
              target: "_blank",
              rel: "noreferrer",
              className: "rl-footer-social-btn",
              "aria-label": "Instagram",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(InstagramIcon, {})
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "rl-footer-col-title",
            children: "Navigation"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "rl-footer-links",
            children: quickLinks.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: link.href,
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "arrow",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ArrowRight, {})
                }), link.label]
              })
            }, link.href))
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "rl-footer-col-title",
            children: "Services"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "rl-footer-services",
            children: services.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: s.href,
                children: s.label
              })
            }, s.href))
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "rl-footer-col-title",
            children: "Contact Us"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("ul", {
            className: "rl-footer-contact-list",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
              className: "rl-footer-contact-item",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "rl-footer-contact-icon",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(LocationIcon, {})
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
                children: ["6 McLaren, Suite H", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("br", {}), "Irvine, CA 92618"]
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
              className: "rl-footer-contact-item",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "rl-footer-contact-icon",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {})
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "tel:9493051605",
                children: "949-305-1605"
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
              className: "rl-footer-contact-item",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "rl-footer-contact-icon",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(EmailIcon, {})
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "mailto:office@RuizLandscape.com",
                children: "office@ruizlandscape.com"
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
              className: "rl-footer-contact-item",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "rl-footer-contact-icon",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(GlobeIcon, {})
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: "https://www.RuizLandscape.com",
                target: "_blank",
                rel: "noreferrer",
                children: "www.ruizlandscape.com"
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "rl-footer-counties",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "rl-footer-counties-title",
              children: "Service Areas"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "rl-footer-counties-list",
              children: counties.map(c => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "rl-footer-county-tag",
                children: c
              }, c))
            })]
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "rl-footer-bottom",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "rl-footer-bottom-inner",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            className: "rl-footer-copyright",
            children: ["\xA9 ", year, " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
              children: "Ruiz Landscape Service, Inc."
            }), " \u2014 All rights reserved."]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "rl-footer-lic",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(LicenseIcon, {}), "CA State License #925207"]
          })]
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Footer);

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const services = [{
  label: "Landscape Design & Installation",
  href: "/services/landscape-design-installation",
  key: "landscape-design",
  desc: "Custom outdoor spaces, designed & built to last."
}, {
  label: "Lawn Care & Maintenance",
  href: "/services/lawn-care-maintenance",
  key: "lawn-care",
  desc: "Reliable upkeep for a lush, healthy lawn."
}, {
  label: "Tree & Shrub Care",
  href: "/services/tree-shrub-care",
  key: "tree-shrub-care",
  desc: "Expert pruning, trimming & plant health."
}, {
  label: "Irrigation Systems",
  href: "/services/irrigation-systems",
  key: "irrigation",
  desc: "Smart, water-saving systems installed & repaired."
}, {
  label: "Synthetic Turf",
  href: "/services/synthetic-turf",
  key: "synthetic-turf",
  desc: "Always-green turf with zero mowing."
}, {
  label: "Large Trees Installation",
  href: "/services/large-tree-installation",
  key: "large-trees",
  desc: "Mature trees sourced & planted with care."
}, {
  label: "Low Voltage Lighting",
  href: "/services/low-voltage-lighting",
  key: "lighting",
  desc: "Showcase your yard with elegant night lighting."
}];

// SVG Icons
const PhoneIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.57 3.41 2 2 0 0 1 3.54 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.64a16 16 0 0 0 6.29 6.29l.52-.52a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"
  })
});
const EmailIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    width: "20",
    height: "16",
    x: "2",
    y: "4",
    rx: "2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
  })]
});
const LocationIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "10",
    r: "3"
  })]
});
const FacebookIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
  })
});
const TwitterIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
  })
});
const InstagramIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    width: "20",
    height: "20",
    x: "2",
    y: "2",
    rx: "5",
    ry: "5"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "17.5",
    x2: "17.51",
    y1: "6.5",
    y2: "6.5"
  })]
});
const ChevronDownIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m6 9 6 6 6-6"
  })
});
const MenuIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "24",
  height: "24",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "4",
    x2: "20",
    y1: "12",
    y2: "12"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "4",
    x2: "20",
    y1: "6",
    y2: "6"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "4",
    x2: "20",
    y1: "18",
    y2: "18"
  })]
});
const CloseIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "24",
  height: "24",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 6 6 18"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m6 6 12 12"
  })]
});
const LeafIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2C14 8 17 8 17 8z"
  })
});

// ── Per-service icons for the mega-menu ──
const serviceIconPaths = {
  "landscape-design": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "12",
      cy: "12",
      r: "9"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polygon", {
      points: "14.8 9.2 13.2 13.2 9.2 14.8 10.8 10.8"
    })]
  }),
  "lawn-care": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M7 20h10"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 20c4-1.5 1-5 2.5-8.5"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M10 11c.9.7 1.4 1.8 1.8 3-1.6.3-2.8.3-3.8-.2-1-.5-1.8-1.5-2.4-3.4 2.2-.4 3.5 0 4.4.6z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M14 8a5.6 5.6 0 0 0-.9 3.2c1.5-.1 2.6-.5 3.4-1.1.8-.8 1.3-1.8 1.4-3.7-2.2.1-3.2.8-3.9 1.6z"
    })]
  }),
  "tree-shrub-care": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M8 19a4 4 0 0 1-2.24-7.32A3.5 3.5 0 0 1 9 6.03V6a3 3 0 1 1 6 0v.04a3.5 3.5 0 0 1 3.24 5.65A4 4 0 0 1 16 19Z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 19v3"
    })]
  }),
  "irrigation": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5S12.5 5 12 2.5C11.5 5 10 7.4 8 9.5 6 11.1 5 13 5 15a7 7 0 0 0 7 7z"
  }),
  "synthetic-turf": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      x: "3.5",
      y: "3.5",
      width: "7",
      height: "7"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      x: "13.5",
      y: "3.5",
      width: "7",
      height: "7"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      x: "3.5",
      y: "13.5",
      width: "7",
      height: "7"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
      x: "13.5",
      y: "13.5",
      width: "7",
      height: "7"
    })]
  }),
  "large-trees": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 3 7 11h3l-4 6h12l-4-6h3z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 17v4"
    })]
  }),
  "lighting": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M9 18h6"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M10 21h4"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 3a6 6 0 0 0-4 10.5c.6.6 1 1.4 1 2.5h6c0-1.1.4-1.9 1-2.5A6 6 0 0 0 12 3z"
    })]
  }),
  "landscape-design-2d": /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "m12 3 9 5-9 5-9-5z"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "m3 13 9 5 9-5"
    })]
  })
};
const ServiceIcon = ({
  name
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  xmlns: "http://www.w3.org/2000/svg",
  width: "18",
  height: "18",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.7",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: serviceIconPaths[name]
});
function Navbar() {
  const [mobileOpen, setMobileOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [servicesOpen, setServicesOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [mobileServicesOpen, setMobileServicesOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const dropdownRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const handleScroll = () => setScrolled(window.scrollY > 20);
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const handleClickOutside = e => {
      if (dropdownRef.current && !dropdownRef.current.contains(e.target)) {
        setServicesOpen(false);
      }
    };
    document.addEventListener("mousedown", handleClickOutside);
    return () => document.removeEventListener("mousedown", handleClickOutside);
  }, []);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
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
          text-decoration: none;
          cursor: pointer;
          transition: color 0.15s;
        }

        .rl-location-badge:hover { color: var(--rl-green); }

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
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
      className: `rl-navbar ${scrolled ? "scrolled" : ""}`,
      style: {
        boxShadow: scrolled ? undefined : 'none'
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "rl-topbar",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "rl-topbar-left",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "tel:9493051605",
            className: "rl-topbar-link",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              children: "949-305-1605"
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "rl-topbar-divider"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "mailto:office@ruizlandscape.com",
            className: "rl-topbar-link",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(EmailIcon, {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              children: "office@ruizlandscape.com"
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "rl-topbar-center",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: "https://www.google.com/maps/search/?api=1&query=Ruiz%20Landscape%20Service%2C%206%20McLaren%2C%20Suite%20H%2C%20Irvine%2C%20CA%2092618",
            target: "_blank",
            rel: "noreferrer",
            className: "rl-location-badge",
            "aria-label": "Ver nuestra ubicaci\xF3n en Google Maps",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(LocationIcon, {}), "Irvine, CA \xA0\xB7\xA0 Serving LA, Orange & Imperial Counties"]
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "rl-topbar-right",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://www.facebook.com/ruizlandscapeserviceinc?mibextid=wwXIfr",
            target: "_blank",
            rel: "noreferrer",
            className: "rl-social-link",
            "aria-label": "Facebook",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FacebookIcon, {})
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://x.com/ruizlandscapeoc?s=11",
            target: "_blank",
            rel: "noreferrer",
            className: "rl-social-link",
            "aria-label": "Twitter / X",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(TwitterIcon, {})
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "https://www.instagram.com/ruizlandscapeserviceinc/",
            target: "_blank",
            rel: "noreferrer",
            className: "rl-social-link",
            "aria-label": "Instagram",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(InstagramIcon, {})
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "rl-mainnav",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "/",
          className: "rl-logo",
          "aria-label": "Ruiz Landscape Service, Inc. \u2014 Home",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
            className: "rl-logo-img",
            src: "/wp-content/uploads/2026/06/Ruiz_Landscape_HD_Transparent-scaled.png",
            alt: "Ruiz Landscape Service, Inc."
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("ul", {
          className: "rl-nav-links",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
            className: "rl-nav-item",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/",
              className: "rl-nav-link",
              children: "Home"
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
            className: "rl-nav-item",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/about",
              className: "rl-nav-link",
              children: "About"
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
            className: "rl-nav-item",
            ref: dropdownRef,
            onMouseEnter: () => setServicesOpen(true),
            onMouseLeave: () => setServicesOpen(false),
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
              className: "rl-nav-link",
              onClick: () => setServicesOpen(prev => !prev),
              "aria-expanded": servicesOpen,
              children: ["Services", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: `rl-chevron ${servicesOpen ? "open" : ""}`,
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ChevronDownIcon, {})
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: `rl-mega ${servicesOpen ? "open" : ""}`,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "rl-mega-inner",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                  className: "rl-mega-services",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                    className: "rl-mega-head",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                      children: "Our Services"
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                      className: "line"
                    })]
                  }), services.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                    href: s.href,
                    className: "rl-mega-item",
                    onClick: () => setServicesOpen(false),
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                      className: "rl-mega-ico",
                      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ServiceIcon, {
                        name: s.key
                      })
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
                      className: "rl-mega-txt",
                      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                        className: "rl-mega-label",
                        children: s.label
                      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                        className: "rl-mega-desc",
                        children: s.desc
                      })]
                    })]
                  }, s.href))]
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                  className: "rl-mega-feature",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    className: "rl-mega-feature-leaf",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(LeafIcon, {})
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h4", {
                    children: "Free On-Site Estimate"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                    children: "Tell us about your project and we'll give you a clear, no-pressure quote."
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: "/contact",
                    className: "rl-mega-btn",
                    onClick: () => setServicesOpen(false),
                    children: "Contact Us"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                    href: "tel:9493051605",
                    className: "rl-mega-phone",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {}), " 949-305-1605"]
                  })]
                })]
              })
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
            className: "rl-nav-item",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/gallery",
              className: "rl-nav-link",
              children: "Gallery"
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
            className: "rl-nav-item",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/locations",
              className: "rl-nav-link",
              children: "Locations"
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "rl-nav-right",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact",
            className: "rl-nav-link cta rl-contact-desktop",
            children: "Contact Us"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            className: "rl-mobile-toggle",
            onClick: () => setMobileOpen(prev => !prev),
            "aria-label": "Toggle menu",
            children: mobileOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {}) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MenuIcon, {})
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: `rl-mobile-menu ${mobileOpen ? "open" : ""}`,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "rl-mobile-menu-inner",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            className: "rl-mobile-link",
            onClick: () => setMobileOpen(false),
            children: "Home"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/about",
            className: "rl-mobile-link",
            onClick: () => setMobileOpen(false),
            children: "About"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
            className: "rl-mobile-link",
            onClick: () => setMobileServicesOpen(prev => !prev),
            children: ["Services", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: `rl-chevron ${mobileServicesOpen ? "open" : ""}`,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ChevronDownIcon, {})
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: `rl-mobile-services ${mobileServicesOpen ? "open" : ""}`,
            children: services.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: s.href,
              className: "rl-mobile-service-item",
              onClick: () => setMobileOpen(false),
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                className: "rl-mobile-service-ico",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ServiceIcon, {
                  name: s.key
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                children: s.label
              })]
            }, s.href))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/gallery",
            className: "rl-mobile-link",
            onClick: () => setMobileOpen(false),
            children: "Gallery"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact",
            className: "rl-mobile-cta",
            onClick: () => setMobileOpen(false),
            children: "Contact Us"
          })]
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom/client"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "react-dom/client");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom_client__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var _scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/ContactForm */ "./src/scripts/ContactForm.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__);






if (document.querySelector("#render-navbar-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#render-navbar-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}
if (document.querySelector("#render-footer-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#render-footer-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}
if (document.querySelector("#render-contact-form-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#render-contact-form-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {}));
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map