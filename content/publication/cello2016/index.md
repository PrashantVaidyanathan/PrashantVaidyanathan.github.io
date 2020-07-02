---
# Documentation: https://sourcethemes.com/academic/docs/managing-content/

title: "Genetic circuit design automation"
subtitle: ""
summary: ""
authors:
- Alec AK Nielsen
- Bryan S. Der
- Jonghyeon Shin
- Prashant Vaidyanathan
- Vanya Paralanov
- Elizabeth A. Strychalski
- David Ross
- Douglas Densmore
- Christopher A. Voigt
tags: 
 - GLS
categories: []
date: 2016-04-01T00:00:00Z
publishDate: 2016-04-01T00:00:00Z
featured: true
draft: false
publication_types: ["2"]
url_pdf: https://science.sciencemag.org/content/352/6281/aac7341
publication: Science

abstract: Computation can be performed in living cells by DNA-encoded circuits that process sensory information and control biological functions. Their construction is time-intensive, requiring manual part assembly and balancing of regulator expression. We describe a design environment, Cello, in which a user writes Verilog code that is automatically transformed into a DNA sequence. Algorithms build a circuit diagram, assign and connect gates, and simulate performance. Reliable circuit design requires the insulation of gates from genetic context, so that they function identically when used in different circuits. We used Cello to design 60 circuits for Escherichia coli (880,000 base pairs of DNA), for which each DNA sequence was built as predicted by the software with no additional tuning. Of these, 45 circuits performed correctly in every output state (up to 10 regulators and 55 parts), and across all circuits 92% of the output states functioned as predicted. Design automation simplifies the incorporation of genetic circuits into biotechnology projects that require decision-making, control, sensing, or spatial organization.

# Featured image
# To use, add an image named `featured.jpg/png` to your page's folder.
# Focal points: Smart, Center, TopLeft, Top, TopRight, Left, Right, BottomLeft, Bottom, BottomRight.
#image: 
#  caption: ""
#  focal_point: "Smart"
#  preview_only: false

# Projects (optional).
#   Associate this post with one or more of your projects.
#   Simply enter your project's folder or file name without extension.
#   E.g. `projects = ["internal-project"]` references `content/project/deep-learning/index.md`.
#   Otherwise, set `projects = []`.
projects: []
---
