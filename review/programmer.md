# FRONTEND ENGINEER REVIEW

## What I saw

Four desktop/mobile screenshots render cleanly: home (1440px) shows a red hero banner with the crest, a bleeding `BORN 2 LATE 4 CLASSIC — GUIDA LA STORIA` display headline, a "Prossimo evento" featured block with a taped BMW 328 photo, a 3-up "Eventi 2026" card grid, mission band, Swiss-federation credibility row, and a dark CTA + bordeaux footer. Mobile collapses to a single column with a black "MENU" toggle. Markup is genuinely well-built: every page has exactly one `<h1>`, real `<header>/<nav>/<main>/<section>/<article>/<footer>` landmarks, `figure/figcaption`, `lang="it"`, a working skip-link, descriptive (non-filename) `alt` text on every image, distinct per-page `<title>` + `meta description` + OG tags, `width`/`height` on images, preconnect + `display=swap` fonts, and a honeypot-protected form with labelled, typed, `autocomplete`-hinted inputs. The engineering floor here is high.

The failures are in the plumbing, not the semantics. Both forms POST to `https://formspree.io/f/REPLACE_ME` — a literal placeholder — with the dev `<!-- TODO: replace REPLACE_ME … -->` comment shipped into the exported HTML (diventa-socio.html:515-516, contatti.html:476-477). Every internal link is an extensionless root-absolute path (`/nextheritage/eventi`) while the files on disk are `eventi.html`, and `canonical`/`og:url` declare the same extensionless URLs (e.g. index.html:437) against a GitHub Pages target that does not rewrite them. The above-the-fold hero crest carries `loading="lazy"` (index.html:475).

## Findings

### Ship blockers (must fix before publish)

- **Membership/contact forms** — diventa-socio.html:516, contatti.html:477 — both `<form>` actions are `https://formspree.io/f/REPLACE_ME`; every submission hits a nonexistent Formspree endpoint and fails. The site's primary conversion ("Diventa socio") is dead on arrival. → Replace `REPLACE_ME` with the real Formspree form ID (or switch the action to `mailto:info@nextheritage.ch`) before publish.
- **Internal navigation links** — index.html:458-462, 618-622 (and identical nav/footer on every page) — links target extensionless paths (`/nextheritage/eventi`, `/nextheritage/missione`, `/nextheritage/contatti`, `/nextheritage/diventa-socio`, `/nextheritage/404`) but the shipped files are `eventi.html`, `missione.html`, etc.; GitHub Pages (the host per `og:url`/`canonical` = `robertobendi.github.io/nextheritage`) does not map `/eventi` → `eventi.html`, so nav and footer links 404. → Either append `.html` to every internal `href` (and to `canonical`/`og:url`), or restructure each page into `<name>/index.html` directories so the clean URLs resolve.

### Important (should fix this revision pass)

- **Leaked developer comments** — diventa-socio.html:515, contatti.html:476, contatti.html:470 — `<!-- TODO: replace REPLACE_ME … -->` and `<!-- [verify] no public phone/email captured … -->` are present in the exported production HTML (leakage, anyone viewing source sees unfinished-work notes). → Strip all `TODO`/`[verify]` build comments from `docs/*.html` on export.
- **Hero crest is lazy-loaded** — index.html:475 `class="hero-banner__crest" … loading="lazy"` — the largest above-the-fold image (and likely LCP element) is deferred, delaying first meaningful paint. → Remove `loading="lazy"` from the hero crest (keep `decoding="async"`), and consider `fetchpriority="high"`.
- **JSON-LD uses relative URLs** — index.html:23-24 — `"url": "/"` and `"logo": "/uploads/img-00.png"` are root-relative; structured-data consumers expect absolute URLs and `/uploads/...` is also the wrong path (assets live at `/nextheritage/uploads/`). → Use absolute URLs (`https://robertobendi.github.io/nextheritage/` and the full image URL).

### Nice to have (skip if budget tight)

- **`<select>` not required** — diventa-socio.html:523 — `name="ruolo"` has no `required`; a blank-intent submission is possible. → Add `required` (or rely on the pre-selected first option being acceptable).
- **~400 lines of identical inline CSS duplicated across all 6 pages** — every `docs/*.html` `<head>` carries the same stylesheet verbatim — bloats each document and makes edits error-prone. → If the PebbleStack inline-CSS convention allows, extract to a single cached `styles.css`; otherwise leave as-is.
- **Home `og:type` placement** — index.html:16 vs 437-442 — OG/twitter tags are split between two blocks in `<head>`; harmless but worth consolidating for maintainability. → Group all meta in one block.

## Summary for the synthesiser

Markup quality is excellent, but two plumbing failures make it unshippable: both forms POST to a `REPLACE_ME` placeholder, and every internal link points to an extensionless path that won't resolve to the `.html` files on GitHub Pages — fix the form action and the link/canonical extensions before publish.
