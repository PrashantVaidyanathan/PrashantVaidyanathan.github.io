---
title: Cello
summary: A tool for Genetic circuit design automation
tags:
- Genetic Engineering
- Synthetic Biology
date: "2016-04-27T00:00:00Z"

# Optional external URL for project (replaces project detail page).
external_link: ""

image:
  # caption: Photo by rawpixel on Unsplash
  focal_point: Smart

links:
- icon: edge
  icon_pack: fab
  name: Link
  url: http://cellocad.org/
- icon: github
  icon_pack: fab
  name: Github
  url: https://github.com/CIDARLAB/cello
- icon: book
  icon_pack: fas
  name: Publications
  url: /tags/gls
# - icon: book
#   icon_pack: fab
#   name: Science Publication
#   url: https://science.sciencemag.org/content/352/6281/aac7341
# - icon: book
#   icon_pack: fab
#   name: IEEE Publication
#   url: https://ieeexplore.ieee.org/abstract/document/7208798
url_code: ""
url_pdf: ""
url_slides: ""
url_video: ""

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ""
---

The Cello input is a high-level logic specification written in Verilog, a hardware description language. The code is parsed to generate a truth table, and logic synthesis produces a circuit diagram with the genetically available gate types to implement the truth table. The gates in the circuit are assigned using experimentally characterized genetic gates. In assignment, a predicted circuit score guides a breadth-first search, or a Monte Carlo simulated annealing search. The assignment with the highest score is chosen, and this assignment can be physically implemented in a combinatorial number of different genetic layouts. The Eugene language is used for rule-based constrained combinatorial design of one or more final DNA sequence(s) for the designed circuit.
