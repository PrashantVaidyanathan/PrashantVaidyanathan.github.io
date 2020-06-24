---
# Documentation: https://sourcethemes.com/academic/docs/managing-content/

title: "Functional synthesis of genetic systems"
subtitle: ""
summary: ""
authors:
- admin
tags: []
categories: []
date: 2019-01-25T00:00:00Z
publishDate: 2019-01-25T00:00:00Z
featured: false
draft: false
publication_types: ["7"]
publication: Boston University

abstract: Synthetic genetic regulatory networks (or genetic circuits) can operate in complex biochemical environments to process and manipulate biological information to produce a desired behavior. The ability to engineer such genetic circuits has wide-ranging applications in various fields such as therapeutics, energy, agriculture, and environmental remediation. However, engineering multilevel genetic circuits quickly and reliably is a big challenge in the field of synthetic biology. This difficulty can partly be attributed to the growing complexity of biology. But some of the predominant challenges include the absence of formal specifications -- that describe precise desired behavior of these biological systems, as well as a lack of computational and mathematical frameworks -- that enable rapid in-silico design and synthesis of genetic circuits. This thesis introduces two major frameworks to reliably design genetic circuits. The first implementation focuses on a framework that enables synthetic biologists to encode Boolean logic functions into living cells. Using high-level hardware description language to specify the desired behavior of a genetic logic circuit, this framework describes how, given a library of genetic gates, logic synthesis can be applied to synthesize a multilevel genetic circuit, while accounting for biological constraints such as 'signal matching', 'crosstalk', and 'genetic context effects'. This framework has been implemented in a tool called Cello, which was applied to design 60 circuits for Escherichia coli, where the circuit function was specified using Verilog code and transformed to a DNA sequence. Across all these circuits, 92% of the output states functioned as predicted. The second implementation focuses on a framework to design complex genetic systems where the focus is on how the system behaves over time instead of its behavior at steady-state. Using Signal Temporal Logic (STL) -- a formalism used to specify properties of dense-time real-valued signals, biologists can specify very precise temporal behaviors of a genetic system. The framework describes how genetic circuits that are built from a well characterized library of DNA parts, can be scored by quantifying the 'degree of robustness' of in-silico simulations against an STL formula. Using formal verification, experimental data can be used to validate these in-silico designs. In this framework, the design space is also explored to predict external controls (such as approximate small molecule concentrations) that might be required to achieve a desired temporal behavior. This framework has been implemented in a tool called Phoenix.

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
