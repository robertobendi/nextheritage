# COLOUR REVIEW

## What I saw

Four screenshots opened (home desktop + mobile, diventa-socio desktop, contatti desktop); no taller-page segments were captured, so home-desktop is the full page in one frame. The rendered surface is unmistakably warm: a cream field (eyedrops to the brief's Crema `#f4efe2`, **not** `#ffffff`) carries every section, with a slightly deeper cream band (`#eae6d6`) behind the mission pull-quote and the federation strip to add depth. The hero is a saturated tomato-red banner (`#c1272d`) spanning the top edge with the crest centred on it; the giant Anton headline below is near-black (`#1a1410`) with "GUIDA / LA STORIA" flipped to the same red. Thin brass-gold hairlines (`#d4a017`) rule under the headline and between every section, and the "21 GIUGNO" date stamp is red. In the featured block the four route markers render as small green discs (Pistacchio `#1f6412`) — the second accent is present and doing real work. The footer is a deep oxblood band (Bordò `#7a1e22`) with **gold** section headings and a gold email link. Inner pages add the decorative duotones: diventa-socio's hero-side steering-wheel photo is rendered red-duotone, contatti's lake photo green-duotone — both pull the accents into the imagery as the brief planned.

This is a faithful, fully-saturated rendering of the §3 palette — all seven named shades are visibly on the page, surface is the real cream, and red/gold/green/oxblood all appear. The only colour defects are two contrast pairs, both involving gold-as-text on a saturated ground.

## Findings

### Ship blockers (must fix before publish)

None. Surface fidelity (the single most common drift) passes cleanly — body sits on Crema `#f4efe2`, never pure white; both secondary accents (Pistacchio, Bordò) are present and visible; primary CTA colour is consistent and distinct from the ghost secondary. Nothing under the colour lens by itself makes this unfit to ship.

### Important (should fix this revision pass)

- **Footer section headings + email link** — `docs/index.html:259,632` (`.site-footer h4`, footer `.text-link`), visible in screenshot-contatti-desktop.png and screenshot-diventa-socio-desktop.png footers — Ottone `#d4a017` text on the Bordò `#7a1e22` band measures ≈**4.34 : 1**, under the 4.5 : 1 AA floor for these 0.8125rem caps ("ESPLORA", "FEDERAZIONE", `info@nextheritage.ch`). → Lighten the footer heading/link gold to ~`#e8be3e` (or set them in Crema `#f4efe2`, ≈9 : 1, and reserve gold for the larger ribbon).
- **"Progetto Giovani" callout label** — `docs/index.html:339` (`.giovani-callout strong`), Eventi page (not screenshotted — CSS evidence) — Ottone `#d4a017` label on the Pistacchio `#1f6412` callout is ≈**3.06 : 1**, a clear fail for a 0.8125rem caps label. → Set the callout's `strong` label in Crema/white (`#f4efe2`, ≈6.4 : 1) instead of gold.

### Nice to have (skip if budget tight)

- **Hero banner tagline** — `docs/index.html:292` (`.hero-banner__tag`), screenshot-home-desktop.png red banner — Crema `#f4efe2` on Pomodoro `#c1272d` is ≈5.1 : 1, passing but the weakest body-size pair on the page; if the banner red is ever darkened toward Bordò it will drop below AA. Hold the banner at `#c1272d` or use pure white for this label to bank headroom.
- **Inactive language chips** — `docs/index.html:245` (`.lang span`), header — EN/FR/DE set in `--ink-soft` at `opacity:.7` over Crema drift close to the muted-text floor; acceptable as deliberately-dimmed inactive state, but bump to full `--ink-soft` if you want them legible.
- **Eyebrow vs. link colour collision** — eyebrows (Bordò `#7a1e22`, e.g. `docs/index.html:496`) and text links share the same oxblood; both read fine on cream, but an oxblood non-link eyebrow sitting near an oxblood link can muddy "what's clickable." Consider keeping links oxblood and shifting eyebrows to a tracked Nero, or vice-versa.

## Summary for the synthesiser

Colour is one of the strongest dimensions of this build — surface is the real Crema (no white drift), all seven §3 shades render and both secondary accents do visual work — so the only colour fixes needed are two gold-on-saturated-ground contrast pairs (footer headings ≈4.34 : 1, Eventi callout label ≈3.06 : 1), neither a ship blocker.
