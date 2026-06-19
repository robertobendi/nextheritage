# REVIEW

## Visual evaluation

### What I saw

The build reads instantly as a 1960s Italian racing affiche: a saturated pomodoro-red start-banner spans the top with the crest centered like a finish-line emblem, the crema field below is genuinely warm (not white), and the Anton display caps carry real weight against Spectral body and tracked Archivo eyebrows. The eye lands first on the red banner, then on the big black/red "BORN 2 LATE 4 CLASSIC — GUIDA LA STORIA" headline. The decorative kit is actually on the page — checkered-flag corners, brass pinstripe rules, gold double-ring frames, taped photo, green route chips, Swiss-cross chips, Bordò footer. The chosen family clearly reads; colour and type discipline are the strongest dimensions.

But the dominant impression is *contained*, not *poster*. The signature gesture the brief committed to — the display heading bleeding ~64px off the RIGHT viewport edge — does not happen: the heading sits inside the 1180px centered container with open cream gutter to its right on every page (home, contatti, diventa-socio). It reads as a tidy left-aligned Anton block, which §5 explicitly calls the move that "kills the poster." Compounding it, every photograph is a depopulated stock car beauty shot — `bmw328-race.jpg` is reused twice within the first scroll (hero featured block + first mini-card) — so a membership-conversion page shows zero people, zero faces, zero proof a community exists to join.

### Visual pass/fail checks

- **No clipped or colliding content** — PASS. Scanned every body block across home/contatti/socio: the bleed headings sit clear of the adjacent media columns, no body line's first/last character is occluded, no two elements claim the same pixels.
- **Logo visible in header** — PASS. Real crest bitmap top-left of header on every page (home-desktop header strip).
- **First-glance family recognizable** — PASS. Red start-banner + Anton caps + crema field read as Italian motorsport poster within 1s (home-desktop hero).
- **Decorative system visible** — PASS. Well over two motifs: checkered corners, brass rules, gold double-frames, taped photo, green route chips, Swiss-cross chips (home + contatti footer).
- **Source imagery placed** — FAIL. The one real candid source photo (`source/screenshot.png`, the "DanKe Dani" group) is unused; every photo on home/contatti/socio is stock car imagery and the BMW shot repeats across two home slots (index.html:512,540).
- **Mobile holds** — PASS. Single-column stack, black "MENU" toggle, headline and featured block reflow cleanly (home-mobile).
- **Production polish** — PASS. Consistent section rhythm, display type genuinely reads as display, footer is a composed Bordò band with checkered corners and three credited columns (contatti-desktop last segment); 3-card grid is full, no orphan — though the twice-reused BMW photo dents the finish.
- **Interaction + a11y finish** — PASS. `:hover` and `:focus-visible` defined on links/buttons (index.html:187-239), a working skip-link (index.html:445), and a single `<main id="main">` (index.html:470).

## Council consolidation

- **Designer**: The decorative system, palette and type contrast all ship, but the one defined bold move — the heading bleeding off the right viewport edge — is invisible because `.bleed__h` (margin-right:-64px) is trapped inside the 1180px centered `.wrap`, so it stops ~66px short and reads as a tidy contained block.
- **UX**: A membership page that shows zero people and recycles one stock car photo gives a first-timer no reason to believe a community exists; the social-proof gap (place the real candid, stop reusing the BMW, kill the duplicate Gottardo card) is the highest-leverage change.
- **UI**: Layout integrity, affordances, touch targets and mobile nav are all clean; the only real interaction gap is that neither form visually marks which fields are required.
- **Colour**: One of the strongest dimensions — real Crema surface, all seven shades present, both secondary accents doing work — with two gold-on-saturated-ground contrast fails (footer headings ≈4.34:1, Eventi callout label ≈3.06:1).
- **Programmer**: Excellent markup, but two plumbing failures make it unshippable — both forms POST to `formspree.io/f/REPLACE_ME`, and every internal nav/footer link points to an extensionless path (`/nextheritage/eventi`) that won't resolve to the `.html` files on GitHub Pages.

## Prioritised findings

### Must fix (revision will close these)

- **Bleed heading (signature move)** — `.bleed__h{margin:0 -64px 0 0}` inside `.wrap{max-width:1180px;margin-inline:auto}` (index.html:112-115,96); at 1440px the heading stops ~66px short of the edge with cream gutter to its right on every page — the poster's defining gesture (§5/§6.1, "MUST bleed off the right edge") does not render — pull the bleed heading out of the 1180 container into a left-anchored full-viewport-width wrapper so it genuinely overshoots and crops past the right edge, and re-break the 4-line ragged home H1 (stranded em-dash) to a controlled set with the dash leading the red phrase.
- **Dead forms** — `diventa-socio.html` / `contatti.html` form `action="https://formspree.io/f/REPLACE_ME"` — every submission hits a nonexistent endpoint, so the primary conversion ("Diventa socio") is dead on arrival — replace `REPLACE_ME` with the real Formspree ID or switch to `mailto:info@nextheritage.ch`.
- **Broken internal links** — nav + footer hrefs target `/nextheritage/eventi`, `/missione`, `/contatti`, `/diventa-socio`, `/404` (index.html:458-462,618-622) while files on disk are `*.html`; GitHub Pages won't map them, so nav and footer 404 — append `.html` to every internal href and to `canonical`/`og:url`, or restructure to `<name>/index.html`.
- **No people / reused photo** — every home photo is stock and `bmw328-race.jpg` repeats in the hero featured block and the first mini-card (index.html:512,540); Gottardo also appears twice (featured block + first calendar card) — place the real candid `source/screenshot.png` on home, stop reusing the BMW across two slots, and drop Gottardo from the mini-grid so the featured block and calendar don't repeat.
- **Footer gold contrast** — `.site-footer h4` / footer `.text-link` Ottone `#d4a017` on Bordò `#7a1e22` ≈4.34:1 (index.html:259,632), under AA for 0.81rem caps ("ESPLORA", "FEDERAZIONE", the email link) — lighten to ~`#e8be3e` or set footer headings/link in Crema `#f4efe2` (≈9:1).
- **Eventi callout label contrast** — `.giovani-callout strong` Ottone on Pistacchio `#1f6412` ≈3.06:1 (index.html:339), a clear fail for a caps label — set the callout `strong` in Crema/white (≈6.4:1).
- **Leaked dev comments** — `<!-- TODO: replace REPLACE_ME … -->` and `<!-- [verify] no public phone/email … -->` shipped into the exported HTML (diventa-socio.html:515, contatti.html:470,476) — strip all TODO/[verify] build comments from `docs/*.html`.
- **Hero crest lazy-loaded** — the above-the-fold LCP crest carries `loading="lazy"` (index.html:475) — remove `loading="lazy"` (keep `decoding="async"`), consider `fetchpriority="high"`.

### Defer

- **Required-field marking** — both forms mark nothing as required vs optional (diventa-socio.html:516-531, contatti.html:477-483) — add a visible `*` and a "* campo obbligatorio" note.
- **Mission copy haze** — "trasformando la memoria in opportunità" (index.html:527) is the lyrical filler §1/§3 said to cut — rewrite naming the real activity (parents and kids driving the rallies together).
- **Contatti submit verb** — `<button>Invia</button>` (contatti.html:482) is the generic "Submit"-class — make it "Invia messaggio" to match the sibling form.
- **Inert language chip** — `IT EN FR DE` renders tappable but does nothing — gray it as "coming soon" or drop EN/FR/DE until wired.
- **Double-frame order** — `.frame` stacks brass outside the nero inner border; §6.4 specifies nero outer + ottone inner — swap if exact-spec matters (visually still a clean double frame).
- **JSON-LD relative URLs** — `"url":"/"`, `"logo":"/uploads/img-00.png"` (index.html:23-24) should be absolute and point at `/nextheritage/uploads/`.

## Fingerprint check

- **1. Bleed heading 64px off right + brass rule** — MISSING. Anton clamp, line-height 0.92 and the brass pinstripe are present, but the load-bearing gesture — bleeding past the right viewport edge — does not render; the heading is contained inside the 1180px `.wrap` with cream gutter to its right on every page.
- **2. Red start-banner with ~200px crest centered** — PRESENT. Saturated `#c1272d` banner spans the top with the real `img-00.png` crest centered at 210px (home-desktop).
- **3. UPPERCASE Bordò eyebrow above every H2/H3** — PRESENT. "PROSSIMO EVENTO", "LA NOSTRA MISSIONE", "CALENDARIO", "SCRIVICI" set in tracked Archivo Bordò caps.
- **4. Black-and-gold double border on cards/frames** — PARTIAL. The double-ring frame reads on the socio cards and photo frames, but the stack puts brass outermost rather than the spec's nero-outer/ottone-inner (index.html:137-138).
- **5. Checkered-flag corners on hero band + footer** — PRESENT. Visible in the header/banner strip and the Bordò footer corners (contatti-desktop).
- **6. Numbered Pistacchio route markers** — PRESENT. Green numbered discs in the home featured block and the three Eventi plates (eventi.png).
- **7. Swiss white-cross chip beside federation lines + footer** — PRESENT. Red cross chip on the contatti region line and footer credit.
- **8. Spectral body on Crema, never white** — PRESENT. Surface eyedrops to `#f4efe2`, body is Spectral (colour review confirmed).
- **9. Solid red pill CTA, hover = 1px brass underline, no shadow** — PRESENT. `.btn--primary` hover is an inset brass underline, no drop shadow (index.html:187).
- **10. Gallery/Gottardo photos double-framed + rotated ±1.5°** — PARTIAL. The Gottardo/accent photos carry the frame and slight tilt/tape, but the Missione gallery strip is not captured to confirm the ±1.5° paste-up row.

## Generic-AI tells

- **Centered hero on white over generic stock photo** — ABSENT. Left-aligned headline on crema; no hero photo, red banner instead.
- **Only Inter / Inter + Lora loaded as fonts** — ABSENT. Anton + Spectral + Archivo, exactly the §3 brief picks.
- **Palette is 3 neutrals + 1 muted accent** — ABSENT. Seven saturated brand shades, two secondary accents doing real work.
- **H1 / display capped near 3rem** — ABSENT. Display is `clamp(3.5rem,9vw,9rem)` and genuinely reads large.
- **Three identical cards as the home page's primary content** — ABSENT. The 3-card calendar grid is secondary; hero + featured block dominate.
- **All decoration is border-radius + soft shadow** — ABSENT. Checkered SVG corners, brass rules, double frames, tape, route chips.
- **Modular scale 1.25 with body-sized H1** — ABSENT. Ratio 1.5, huge Anton H1.
- **Logo missing or replaced by generic SVG** — ABSENT. Real high-res crest bitmap placed in header, hero, footer.
- **Real source imagery dropped (source/images/* unused)** — ABSENT (literal: `source/images/img-00.png` crest is used everywhere) — but note the real candid `source/screenshot.png` is dropped in favour of all-stock photos (see Must Fix).
- **Decorative kit unused — all ornament is CSS only** — ABSENT. Inline-SVG checkered corners, Swiss-cross chips and route markers, not CSS-only.

## Overall

What's mediocre comes first: the build commits to one signature move and then doesn't make it — the heading that was supposed to bleed off the right edge sits politely inside the container, so the page lands as a competent, contained poster instead of the affiche the brief promised. On top of that, a membership-conversion site shows zero people and reuses the same stock car photo twice in the first scroll, and the two things a visitor would actually click — both forms and every nav link — are broken (REPLACE_ME endpoint, extensionless paths that 404). The colour, type and decorative discipline are genuinely strong and I'd be proud of those, but I would not sign my name to a build whose forms fail, whose navigation 404s, and whose defining gesture is missing. All five role reviews landed on disk. This is `revise`.

## Verdict

verdict: revise
