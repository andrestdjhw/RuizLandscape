import React from "react"
import ReactDOM from "react-dom/client"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"
import CallButton from "./scripts/CallButton"


if (document.querySelector("#render-navbar-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-navbar-here"))
  root.render(<Navbar />)
}


if (document.querySelector("#render-footer-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-footer-here"))
  root.render(<Footer />)
}


if (document.querySelector("#render-contact-form-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-contact-form-here"))
  root.render(<ContactForm />)
}

const callRoot = document.getElementById("render-call-button-here")
if (callRoot) ReactDOM.createRoot(callRoot).render(<CallButton />)


// ── Depth: continuous scroll parallax on hero background media ──
// Targets every "*-hero-bg" element (one per template, see the *-hero
// sections in each template's PHP). The zoom-out entrance itself is a
// pure-CSS animation (src/index.css); this only adds the subtle drift
// as the section scrolls, using the CSS `translate` property so it
// never fights the `scale` animation on the same `transform` stack.
function initHeroParallax() {
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return

  const targets = Array.prototype.slice.call(document.querySelectorAll('[class*="hero-bg"]'))
  if (!targets.length) return

  const AMPLITUDE_RATIO = 0.035 // stays safely under the 10% resting `scale` headroom
  let ticking = false

  function update() {
    ticking = false
    const vh = window.innerHeight
    targets.forEach(function (el) {
      const rect = el.parentElement.getBoundingClientRect()
      const mid = rect.top + rect.height / 2
      const progress = Math.max(-1, Math.min(1, (mid - vh / 2) / (vh / 2 + rect.height / 2)))
      const amplitude = rect.height * AMPLITUDE_RATIO
      el.style.translate = "0 " + (progress * amplitude).toFixed(1) + "px"
    })
  }

  function onScroll() {
    if (!ticking) {
      ticking = true
      window.requestAnimationFrame(update)
    }
  }

  update()
  window.addEventListener("scroll", onScroll, { passive: true })
  window.addEventListener("resize", onScroll)
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initHeroParallax)
} else {
  initHeroParallax()
}