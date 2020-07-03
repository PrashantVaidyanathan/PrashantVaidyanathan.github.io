---
title: Infared Tracking RC Car
summary: An RC car that autonomously followed a remote, Infrared (IR) emitting beacon
tags:
- Miscellaneous Projects
date: "2013-05-30T00:00:00Z"

# Optional external URL for project (replaces project detail page).
external_link: ""

image:
  # caption: Photo by rawpixel on Unsplash
  focal_point: Smart

links:
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

The project consisted of a system to make an RC car autonomously follow a remote, Infrared (IR) emitting beacon. The remote beacon was built using an MSP430 microcontroller to transmit a 38KHz pulse width modulated (PWM) IR signal via an IR LED. The microcontroller, IR LED, and battery power were then soldered into a PCB board. To track the IR signal emitting from the beacon a circuit of IR receivers that demodulated the 38KHz PWM signal, arranged in a particular geometry, was built on a PCB. Finally, a Gumstix board used the output of the receiver circuit to determine the car's position relative to the beacon and drive the car toward the beacon. The Gumstix decision algorithm was implemented in a Linux kernel module.