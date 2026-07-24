<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wunderbuild — The whole job, in one place.</title>
  <link rel="preconnect" href="https://api.fontshare.com">
  <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@800,700,500,400&f[]=satoshi@400,500,700&display=swap"
    rel="stylesheet">
  <style>
    :root {
      --charcoal: #1D1C1B;
      --white: #FFFFFF;
      --pearl: #F2F5F8;
      --lime: #B4FF50;
      --forest-green: #008137;
      --pigment-green: #00B450;
      --indigo: #B399FF;
      --coral: #FF8F85;
      --peach: #FDB99B;
      --ink-60: rgba(29, 28, 27, .6);
      --ink-40: rgba(29, 28, 27, .4);
      --ink-15: rgba(29, 28, 27, .12);
      --radius-lg: 24px;
      --radius-md: 16px;
      --radius-sm: 10px;
      --shadow-soft: 0 20px 60px -20px rgba(29, 28, 27, .18);
      --shadow-tiny: 0 2px 10px rgba(29, 28, 27, .06);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Satoshi', -apple-system, sans-serif;
      color: var(--charcoal);
      background: var(--white);
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    h4 {
      font-family: 'Cabinet Grotesk', sans-serif;
      font-weight: 700;
      letter-spacing: -0.02em;
      line-height: 1.05;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    img {
      max-width: 100%;
      display: block;
    }

    .wrap {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 32px;
    }

    @media (max-width:640px) {
      .wrap {
        padding: 0 20px;
      }
    }

    ::selection {
      background: var(--lime);
      color: var(--charcoal);
    }

    /* ---------- Buttons ---------- */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 14px 26px;
      border-radius: 100px;
      font-weight: 600;
      font-size: 15px;
      border: none;
      cursor: pointer;
      transition: transform .25s cubic-bezier(.2, .8, .2, 1), box-shadow .25s, background .25s;
      white-space: nowrap;
    }

    .btn-primary {
      background: var(--lime);
      color: var(--charcoal);
      box-shadow: 0 1px 0 rgba(0, 0, 0, .04);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 14px 30px -10px rgba(180, 255, 80, .55);
    }

    .btn-dark {
      background: var(--charcoal);
      color: var(--white);
    }

    .btn-dark:hover {
      transform: translateY(-2px);
      background: #000;
    }

    .btn-ghost {
      color: #fff;
      background: var(--charcoal);
      border: 1.5px solid var(--ink-15);
    }

    .btn-ghost:hover {
      border-color: var(--charcoal);
    }

    .btn-sm {
      padding: 10px 18px;
      font-size: 13.5px;
    }

    /* ---------- Background texture ---------- */
    .bg-field {
      position: relative;
      background:
        radial-gradient(700px 420px at 12% -8%, rgba(180, 255, 80, .14), transparent 60%),
        radial-gradient(900px 500px at 90% 8%, rgba(179, 153, 255, .12), transparent 60%),
        linear-gradient(180deg, var(--pearl) 0%, #FFFFFF 62%);
    }

    .bg-field::before {
      content: '';
      position: absolute;
      inset: 0;
      pointer-events: none;
      opacity: .5;
      background-image: radial-gradient(rgba(29, 28, 27, .08) 1px, transparent 1px);
      background-size: 22px 22px;
      -webkit-mask-image: linear-gradient(180deg, black, transparent 78%);
      mask-image: linear-gradient(180deg, black, transparent 78%);
    }

    .blueprint-lines {
      position: absolute;
      inset: 0;
      pointer-events: none;
      opacity: .05;
      z-index: 0;
      background-image:
        linear-gradient(var(--charcoal) 1px, transparent 1px),
        linear-gradient(90deg, var(--charcoal) 1px, transparent 1px);
      background-size: 120px 120px;
    }

    /* ---------- Nav ---------- */
    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      padding: 22px 0;
      transition: all .35s cubic-bezier(.2, .8, .2, 1);
    }

    header .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 32px;
      transition: all .35s cubic-bezier(.2, .8, .2, 1);
    }

    header.scrolled {
      padding: 12px 0;
    }

    header.scrolled .navbar {
      max-width: 1120px;
      background: rgba(255, 255, 255, .85);
      -webkit-backdrop-filter: blur(16px);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(29, 28, 27, .06);
      border-radius: 100px;
      padding: 10px 14px 10px 22px;
      box-shadow: 0 10px 40px -14px rgba(29, 28, 27, .15);
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 9px;
      font-family: 'Cabinet Grotesk', sans-serif;
      font-weight: 700;
      font-size: 19px;
      max-width: 210px;
    }

    .logo-mark {
      width: 50px;
      height: 50px;
      border-radius: 8px;
      background: var(--charcoal);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .logo-mark svg {
      width: 15px;
      height: 15px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    .nav-links a {
      font-size: 14.5px;
      font-weight: 500;
      color: var(--ink-60);
      position: relative;
      padding: 4px 0;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -2px;
      width: 0;
      height: 1.5px;
      background: var(--charcoal);
      transition: width .25s ease;
    }

    .nav-links a:hover {
      color: var(--charcoal);
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-actions {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nav-login {
      font-size: 14.5px;
      font-weight: 500;
      padding: 10px 14px;

    }

    .mobile-toggle {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 6px;
    }

    .mobile-toggle svg {
      width: 22px;
      height: 22px;
    }

    @media (max-width:960px) {

      .nav-links,
      .nav-login,
      .nav-actions .btn-primary {
        display: none;
      }

      .mobile-toggle {
        display: block;
      }
    }

    /* ---------- Hero ---------- */
    .hero {
      position: relative;
      padding: 172px 0 96px;
      overflow: hidden;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 56px;
      align-items: center;
      position: relative;
      z-index: 1;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      font-weight: 600;
      color: var(--ink-60);
      background: rgba(29, 28, 27, .05);
      border: 1px solid rgba(29, 28, 27, .08);
      padding: 7px 14px 7px 8px;
      border-radius: 100px;
      margin-bottom: 26px;
    }

    .eyebrow .dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--lime);
      box-shadow: 0 0 0 3px rgba(180, 255, 80, .35);
    }

    .hero h1 {
      font-size: clamp(40px, 5.2vw, 66px);
      max-width: 640px;
    }

    .hero p.lead {
      font-size: 18px;
      color: var(--ink-60);
      margin-top: 22px;
      max-width: 480px;
      line-height: 1.6;
    }

    .hero-cta {
      display: flex;
      gap: 14px;
      margin-top: 36px;
      flex-wrap: wrap;
    }

    .hero-note {
      margin-top: 22px;
      font-size: 13px;
      color: var(--ink-40);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    /* dashboard mock */
    .hero-visual {
      position: relative;
      height: 520px;
    }

    .dash-card {
      position: absolute;
      background: rgba(255, 255, 255, .9);
      border: 1px solid rgba(29, 28, 27, .06);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-soft);
      -webkit-backdrop-filter: blur(20px);
      backdrop-filter: blur(20px);
    }

    .dash-main {
      top: 20px;
      left: 20px;
      right: 0;
      bottom: 40px;
      padding: 22px;
      z-index: 2;
      animation: float1 7s ease-in-out infinite;
    }

    .dash-main .dash-topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 18px;
    }

    .dash-main .dash-title {
      font-family: 'Cabinet Grotesk', sans-serif;
      font-weight: 700;
      font-size: 15px;
    }

    .dash-dots {
      display: flex;
      gap: 5px;
    }

    .dash-dots span {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: rgba(29, 28, 27, .15);
    }

    .dash-tabs {
      display: flex;
      gap: 6px;
      margin-bottom: 16px;
    }

    .dash-tabs span {
      font-size: 11px;
      font-weight: 600;
      padding: 6px 11px;
      border-radius: 100px;
      color: var(--ink-40);
      background: rgba(29, 28, 27, .04);
    }

    .dash-tabs span.active {
      background: var(--charcoal);
      color: var(--white);
    }

    .dash-rows {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .dash-row {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 11px 13px;
      border-radius: 12px;
      background: var(--pearl);
      font-size: 11.5px;
      color: var(--ink-60);
    }

    .dash-row .bar {
      height: 5px;
      border-radius: 4px;
      background: linear-gradient(90deg, var(--lime), #8fe62a);
      flex: 1;
    }

    .dash-row .bar.b2 {
      background: var(--indigo);
      width: 60%;
    }

    .dash-row .bar.b3 {
      background: var(--coral);
      width: 40%;
    }

    .dash-chip {
      font-size: 10px;
      font-weight: 700;
      padding: 3px 8px;
      border-radius: 6px;
      background: var(--white);
      color: var(--charcoal);
      flex-shrink: 0;
    }

    .float-card {
      padding: 13px 16px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 12.5px;
      font-weight: 600;
      z-index: 3;
    }

    .float-card .ic {
      width: 26px;
      height: 26px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .fc-1 {
      top: -6px;
      right: 6px;
      animation: float2 6s ease-in-out infinite;
      animation-delay: .4s;
    }

    .fc-1 .ic {
      background: rgba(180, 255, 80, .35);
      color: #5c8a1a;
    }

    .fc-2 {
      bottom: 120px;
      left: -24px;
      animation: float1 8s ease-in-out infinite;
      animation-delay: 1s;
    }

    .fc-2 .ic {
      background: rgba(179, 153, 255, .3);
      color: #6b4fd6;
    }

    .fc-3 {
      bottom: 6px;
      right: -14px;
      animation: float2 7s ease-in-out infinite;
      animation-delay: .2s;
    }

    .fc-3 .ic {
      background: rgba(255, 143, 133, .3);
      color: #c94b3e;
    }

    @keyframes float1 {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }
    }

    @keyframes float2 {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(12px);
      }
    }

    @media (prefers-reduced-motion: reduce) {

      .dash-main,
      .fc-1,
      .fc-2,
      .fc-3 {
        animation: none;
      }
    }

    @media (max-width:960px) {
      .hero-grid {
        grid-template-columns: 1fr;
      }

      .hero-visual {
        height: 400px;
        margin-top: 20px;
      }

      .hero {
        padding-top: 140px;
      }
    }

    /* ---------- Trust banner ---------- */
    /* .trust {
      padding: 64px 0 20px;
      position: relative;
    }

    .trust-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    .trust-card {
      background: var(--white);
      border: 1px solid rgba(29, 28, 27, .07);
      border-radius: var(--radius-md);
      padding: 24px 20px;
      box-shadow: var(--shadow-tiny);
      transition: transform .25s, box-shadow .25s;
    }

    .trust-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-soft);
    }

    .trust-card .ic {
      width: 38px;
      height: 38px;
      border-radius: 10px;
      background: var(--pearl);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
    }

    .trust-card .ic svg {
      width: 19px;
      height: 19px;
      stroke: var(--charcoal);
    }

    .trust-card p {
      font-family: 'Cabinet Grotesk', sans-serif;
      font-weight: 700;
      font-size: 14.5px;
      letter-spacing: -.01em;
    }

    @media (max-width:900px) {
      .trust-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width:560px) {
      .trust-grid {
        grid-template-columns: 1fr;
      }
    } */
    /*----------------------------------
Background
-----------------------------------*/

    .trust {
      position: relative;
      overflow: hidden;
      padding: 100px 0;
      background: #fbfbfb;
    }

    .trust::before {

      content: "";

      position: absolute;
      inset: 0;

      background-image:
        linear-gradient(rgba(0, 0, 0, .05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 0, 0, .05) 1px, transparent 1px);

      background-size: 90px 90px;

      opacity: .35;
    }

    /*----------------------------------
Animated blobs
-----------------------------------*/

    .trust-bg {

      position: absolute;
      inset: 0;
      overflow: hidden;
    }

    .blob {

      position: absolute;

      border-radius: 50%;

      filter: blur(90px);

      animation: float 16s ease-in-out infinite;
    }

    .blob-1 {

      width: 420px;
      height: 420px;

      background: #C9FF77;

      top: -80px;
      left: -100px;

      opacity: .22;
    }

    .blob-2 {

      width: 500px;
      height: 500px;

      background: #D7CCFF;

      right: -120px;
      top: -100px;

      opacity: .18;

      animation-delay: 4s;
    }

    .blob-3 {

      width: 320px;
      height: 320px;

      background: #AEE6FF;

      left: 45%;
      bottom: -120px;

      opacity: .18;

      animation-delay: 8s;
    }

    @keyframes float {

      0% {

        transform: translate(0, 0) scale(1);
      }

      50% {

        transform: translate(40px, -30px) scale(1.1);
      }

      100% {

        transform: translate(0, 0) scale(1);
      }

    }

    /*----------------------------------
Grid
-----------------------------------*/

    .trust-grid {

      position: relative;

      z-index: 2;

      display: grid;

      grid-template-columns: repeat(4, 1fr);

      gap: 28px;
    }

  
    /*----------------------------------
Card
-----------------------------------*/

    .trust-card {

      padding: 34px;

      border-radius: 24px;

      background: rgba(255, 255, 255, .75);

      backdrop-filter: blur(18px);

      border: 1px solid rgba(29, 28, 27, .07);
      box-shadow:
        0 15px 40px rgba(0, 0, 0, .06);

      transition: .4s;
    }

    .trust-card:hover {

      transform:
        translateY(-12px) rotate(-1deg);

      box-shadow:
        0 30px 60px rgba(0, 0, 0, .12);
    }

    /*----------------------------------
Icon
-----------------------------------*/

    .ic {

      width: 62px;
      height: 62px;

      border-radius: 18px;

      display: flex;
      justify-content: center;
      align-items: center;

      background: var(--charcoal);

      margin-bottom: 24px;

      transition: .35s;
    }

    /* .trust-card:hover .ic {

      transform: rotate(-8deg) scale(1.08);

      background: var(--charcoal);
    } */

    .ic svg {

      width: 36px;
      height: 36px;

      stroke: #fff;

      transition: .35s;
    }

    .trust-card:hover svg {

      stroke: #fff;
    }

    /*----------------------------------
Text
-----------------------------------*/

    .trust-card h4 {

      font-size: 20px;

      font-weight: 600;

      line-height: 1.3;

      margin-bottom: 14px;

      color: #1d1c1b;
    }

    .trust-card p {

      font-size: 15px;

      color: #666;

      line-height: 1.7;
    }

    /*----------------------------------
Responsive
-----------------------------------*/

    @media(max-width:1100px) {

      .trust-grid {

        grid-template-columns: repeat(2, 1fr);

      }

    }

    @media(max-width:700px) {

      .trust {

        padding: 70px 0;

      }

      .trust-grid {

        grid-template-columns: 1fr;

      }

      .trust-card {

        padding: 28px;

      }

    }

    /* ---------- Section shared ---------- */
    section {
      position: relative;
    }

    .section-head {
      text-align: center;
      margin-bottom: 56px;
    }

    .section-head.center {
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }

    .badge {
      display: inline-block;
      font-size: 12.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .06em;
      padding: 6px 13px;
      border-radius: 100px;
      margin-bottom: 18px;
    }

    .badge-lime {
      background: var(--lime);
      color: var(--charcoal);
    }

    .badge-indigo {
      background: rgba(179, 153, 255, .28);
      color: #5a3fc0;
    }

    .badge-coral {
      background: rgba(255, 143, 133, .28);
      color: #c94b3e;
    }

    .section-head h2 {
      font-size: clamp(28px, 3.4vw, 42px);
    }

    .section-head p {
      color: var(--ink-60);
      font-size: 16.5px;
      margin-top: 16px;
      line-height: 1.65;
    }

    /* ---------- Process timeline ---------- */
    .process {
      padding: 100px 0;
      background: var(--charcoal);
      color: var(--white);
      overflow: hidden;
    }

    .process .section-head p {
      color: rgba(255, 255, 255, .6);
    }

    .process .section-head h2 {
      color: var(--white);
    }

    .process-path {
      position: relative;
      max-width: 860px;
      margin: 20px auto 0;
    }

    .process-path::before {
      content: '';
      position: absolute;
      left: 50%;
      top: 4px;
      bottom: 4px;
      width: 2px;
      background: rgba(255, 255, 255, .12);
      transform: translateX(-50%);
    }

    .path-fill {
      position: absolute;
      left: 50%;
      top: 4px;
      width: 2px;
      height: 11%;
      background: linear-gradient(180deg, var(--lime), rgba(180, 255, 80, .35));
      box-shadow: 0 0 12px rgba(180, 255, 80, .5);
      transform: translateX(-50%);
      transition: height .1s linear;
      z-index: 1;
    }

    .p-row {
      position: relative;
      z-index: 2;
      display: grid;
      grid-template-columns: 1fr 60px 1fr;
      column-gap: 20px;
      align-items: center;
    }

    .p-row:not(:last-child) {
      margin-bottom: 30px;
    }

    .p-node-col {
      grid-column: 2;
      display: flex;
      justify-content: center;
    }

    .p-node {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: var(--charcoal);
      border: 2px solid rgba(255, 255, 255, .16);
      color: var(--white);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      transition: all .3s cubic-bezier(.2, .8, .2, 1);
    }

    .p-card {
      max-width: 300px;
      background: linear-gradient(180deg, rgba(255, 255, 255, .05), rgba(255, 255, 255, .015));
      border: 1px solid rgba(255, 255, 255, .08);
      border-radius: var(--radius-md);
      padding: 20px 22px;
      cursor: pointer;
      transition: transform .3s cubic-bezier(.2, .8, .2, 1), border-color .3s ease, background .3s ease, box-shadow .3s ease;
    }

    .p-row.row-left .p-card {
      grid-column: 1;
      justify-self: end;
    }

    .p-row.row-right .p-card {
      grid-column: 3;
      justify-self: start;
    }

    .p-card:hover {
      transform: translateY(-3px);
      border-color: rgba(180, 255, 80, .35);
    }

    .p-row.active .p-node {
      background: var(--lime);
      border-color: var(--lime);
      color: var(--charcoal);
      transform: scale(1.1);
      box-shadow: 0 0 0 6px rgba(180, 255, 80, .16);
    }

    .p-row.active .p-card {
      border-color: var(--lime);
      background: linear-gradient(180deg, rgba(180, 255, 80, .16), rgba(180, 255, 80, .03));
      box-shadow: 0 16px 36px -18px rgba(180, 255, 80, .5);
    }

    .p-card h4 {
      font-size: 18px;
      margin-bottom: 6px;
      font-weight: 700;
    }

    .p-card p {
      font-size: 16px;
      color: rgba(255, 255, 255, .55);
      line-height: 1.55;
    }

    @media (max-width: 780px) {

      .process-path::before,
      .path-fill {
        left: 22px;
      }

      .p-row {
        grid-template-columns: 44px 1fr;
        column-gap: 16px;
      }

      .p-node-col {
        grid-column: 1;
      }

      .p-node {
        width: 40px;
        height: 40px;
        font-size: 13px;
      }

      .p-row.row-left .p-card,
      .p-row.row-right .p-card {
        grid-column: 2;
        justify-self: stretch;
        max-width: none;
      }
    }


    /* .process {
      padding: 100px 0;
      background: var(--charcoal);
      color: var(--white);
      overflow: hidden;
    }

    .process .section-head p {
      color: rgba(255, 255, 255, .6);
    }

    .process .section-head h2 {
      color: var(--white);
    }

    .timeline-scroll {
      display: flex;
      gap: 16px;
      overflow-x: auto;
      padding: 8px 4px 24px;
      scrollbar-width: thin;
    }

    .timeline-scroll::-webkit-scrollbar {
      height: 6px;
    }

    .timeline-scroll::-webkit-scrollbar-thumb {
      background: rgba(255, 255, 255, .15);
      border-radius: 10px;
    }

    .t-step {
      flex: 0 0 220px;
      background: rgba(255, 255, 255, .04);
      border: 1px solid rgba(255, 255, 255, .08);
      border-radius: var(--radius-md);
      padding: 22px;
      position: relative;
      transition: all .3s ease;
      cursor: default;
    }

    .t-step:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 38px;
      left: 100%;
      width: 16px;
      height: 1px;
      background: rgba(255, 255, 255, .15);
    }

    .t-step:hover {
      background: rgba(255, 255, 255, .07);
      transform: translateY(-4px);
      border-color: rgba(180, 255, 80, .4);
    }

    .t-step.active {
      background: rgba(180, 255, 80, .1);
      border-color: var(--lime);
    }

    .t-num {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .08);
      color: var(--white);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12.5px;
      font-weight: 700;
      margin-bottom: 16px;
    }

    .t-step.active .t-num {
      background: var(--lime);
      color: var(--charcoal);
    }

    .t-step h4 {
      font-size: 15px;
      margin-bottom: 8px;
      font-weight: 700;
    }

    .t-step p {
      font-size: 13px;
      color: rgba(255, 255, 255, .55);
      line-height: 1.55;
    } */

    /* ---------- Product showcase ---------- */
    .showcase {
      padding: 110px 0;
      background: var(--pearl);
      position: relative;
    }

    .tab-bar {
      display: flex;
      gap: 6px;
      flex-wrap: wrap;
      background: var(--white);
      border: 1px solid rgba(29, 28, 27, .07);
      border-radius: 100px;
      padding: 6px;
      margin-bottom: 44px;
      box-shadow: var(--shadow-tiny);
      width: fit-content;
      margin-left: auto;
      margin-right: auto;
    }

    .tab-btn {
      border: none;
      background: transparent;
      padding: 11px 18px;
      border-radius: 100px;
      font-size: 13.5px;
      font-weight: 600;
      color: var(--ink-60);
      cursor: pointer;
      transition: all .25s ease;
      white-space: nowrap;
    }

    .tab-btn.active {
      background: var(--charcoal);
      color: var(--white);
    }

    .tab-panels {
      position: relative;
    }

    .tab-panel {
      display: none;
      animation: fadeIn .45s ease;
    }

    .tab-panel.active {
      display: block;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .showcase-inner {
      /* display: grid;
      grid-template-columns: 0.85fr 1.15fr; */
      gap: 52px;
      align-items: center;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;

    }

    .showcase-text .cat {
      font-size: 12.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .06em;
      color: var(--ink-40);
      margin-bottom: 14px;
      margin-top: 14px;
      display: none;
    }

    .showcase-text h3 {
      font-size: clamp(24px, 2.6vw, 32px);
      margin-bottom: 14px;
    }

    .showcase-text p {
      color: var(--ink-60);
      font-size: 16px;
      line-height: 1.65;
      margin-bottom: 14px;
    }

    .browser-mock {
      background: var(--white);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-soft);
      overflow: hidden;
      border: 1px solid rgba(29, 28, 27, .06);
      position: relative;
    }

    .browser-chrome {
      display: flex;
      align-items: center;
      gap: 6px;
      padding: 12px 14px;
      background: var(--pearl);
      border-bottom: 1px solid rgba(29, 28, 27, .06);
    }

    .browser-chrome span {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: rgba(29, 28, 27, .15);
    }

    .browser-body {
      padding: 22px;
      min-height: 280px;
    }

    .kanban {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }

    .kanban .col {
      background: var(--pearl);
      border-radius: 10px;
      padding: 10px;
      min-height: 180px;
    }

    .kanban .col-label {
      font-size: 10.5px;
      font-weight: 700;
      color: var(--ink-40);
      text-transform: uppercase;
      letter-spacing: .03em;
      margin-bottom: 10px;
    }

    .kanban .item {
      background: var(--white);
      border-radius: 8px;
      padding: 10px;
      font-size: 11px;
      box-shadow: 0 2px 6px rgba(29, 28, 27, .06);
      margin-bottom: 8px;
    }

    .kanban .item .amt {
      font-weight: 700;
      color: var(--charcoal);
      margin-top: 4px;
    }

    .kanban .item .chip {
      display: inline-block;
      margin-top: 6px;
      font-size: 9px;
      font-weight: 700;
      padding: 2px 7px;
      border-radius: 5px;
      background: rgba(180, 255, 80, .35);
      color: #4a7311;
    }

    .budget-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 11.5px;
    }

    .budget-table th {
      text-align: left;
      padding: 8px 10px;
      color: var(--ink-40);
      font-weight: 600;
      border-bottom: 1px solid var(--ink-15);
      font-size: 10px;
      text-transform: uppercase;
      letter-spacing: .03em;
    }

    .budget-table td {
      padding: 11px 10px;
      border-bottom: 1px solid rgba(29, 28, 27, .05);
    }

    .stat-strip {
      display: flex;
      gap: 10px;
      margin-bottom: 16px;
    }

    .stat-pill {
      background: var(--pearl);
      border-radius: 10px;
      padding: 12px 14px;
      flex: 1;
    }

    .stat-pill .v {
      font-family: 'Cabinet Grotesk', sans-serif;
      font-weight: 700;
      font-size: 17px;
    }

    .stat-pill .l {
      font-size: 10.5px;
      color: var(--ink-40);
      margin-top: 2px;
    }

    .explore-link {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      font-weight: 600;
      font-size: 14.5px;
    }

    .explore-link svg {
      width: 15px;
      height: 15px;
      transition: transform .2s;
    }

    .explore-link:hover svg {
      transform: translateX(4px);
    }

    @media (max-width:900px) {
      .showcase-inner {
        grid-template-columns: 1fr;
      }

      .kanban {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* ---------- Feature sections ---------- */
    .feature {
      padding: 96px 0;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 64px;
      align-items: center;
    }

    .feature.reverse .feature-grid {
      direction: rtl;
    }

    .feature.reverse .feature-grid>* {
      direction: ltr;
    }

    .feature-text .cat {
      font-size: 12.5px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .06em;
      margin-bottom: 16px;
      display: inline-block;
      padding: 5px 12px;
      border-radius: 100px;
    }

    .feature-text h3 {
      font-size: clamp(26px, 2.8vw, 36px);
      margin-bottom: 18px;
    }

    .feature-text p {
      color: var(--ink-60);
      font-size: 16px;
      line-height: 1.65;
      margin-bottom: 22px;
    }

    .feature-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 28px;
    }

    .feature-list li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 14.5px;
      color: var(--charcoal);
    }

    .feature-list svg {
      width: 17px;
      height: 17px;
      flex-shrink: 0;
      margin-top: 2px;
      color: #4a7311;
    }

    .feature-visual {
      position: relative;
    }

    .feature-visual .glass-tag {
      position: absolute;
      background: rgba(255, 255, 255, .85);
      -webkit-backdrop-filter: blur(14px);
      backdrop-filter: blur(14px);
      border: 1px solid rgba(29, 28, 27, .06);
      border-radius: 12px;
      padding: 10px 14px;
      font-size: 11.5px;
      font-weight: 600;
      box-shadow: var(--shadow-soft);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .diary-card {
      background: var(--pearl);
      border-radius: var(--radius-lg);
      padding: 26px;
      position: relative;
    }

    .diary-photo-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 8px;
      margin-top: 14px;
    }

    .diary-photo-row div {
      aspect-ratio: 1;
      border-radius: 10px;
      background: linear-gradient(135deg, #d8dde3, #eef1f4);
    }

    .diary-entry {
      background: var(--white);
      border-radius: 12px;
      padding: 14px;
      margin-top: 14px;
      font-size: 12px;
      box-shadow: var(--shadow-tiny);
    }

    .diary-entry .top {
      display: flex;
      justify-content: space-between;
      color: var(--ink-40);
      font-size: 10.5px;
      margin-bottom: 6px;
    }

    @media (max-width:900px) {

      .feature-grid,
      .feature.reverse .feature-grid {
        grid-template-columns: 1fr;
        direction: ltr;
      }
    }

    /* ---------- Support ---------- */
    .support {
      padding: 100px 0;
      background: var(--charcoal);
      color: var(--white);
      position: relative;
      overflow: hidden;
    }

    .support::before {
      content: '';
      position: absolute;
      top: -100px;
      right: -100px;
      width: 400px;
      height: 400px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(180, 255, 80, .16), transparent 70%);
    }

    .support .section-head h2 {
      color: var(--white);
    }

    .support .section-head p {
      color: rgba(255, 255, 255, .6);
    }

    .support-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    .support-card {
      background: rgba(255, 255, 255, .05);
      border: 1px solid rgba(255, 255, 255, .08);
      border-radius: var(--radius-md);
      padding: 30px 26px;
      transition: all .3s ease;
    }

    .support-card:hover {
      background: rgba(255, 255, 255, .08);
      transform: translateY(-6px);
    }

    .support-card .ic {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      background: rgba(180, 255, 80, .16);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .support-card .ic svg {
      width: 20px;
      height: 20px;
      stroke: var(--lime);
    }

    .support-card h4 {
      font-size: 17px;
      margin-bottom: 10px;
    }

    .support-card p {
      font-size: 14px;
      color: rgba(255, 255, 255, .6);
      line-height: 1.6;
    }

    @media (max-width:860px) {
      .support-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ---------- Testimonials ---------- */
   .testimonials {
      padding: 110px 0;
      overflow: hidden;
    }

    .t-slider-wrap {
      position: relative;
      max-width: 820px;
      margin: 0 auto;
    }

    .t-track-viewport {
      overflow: hidden;
      border-radius: var(--radius-lg);
    }

    .t-track {
      display: flex;
      transition: transform .55s cubic-bezier(.2, .8, .2, 1);
    }

    .t-slide {
      flex: 0 0 100%;
      padding: 4px;
    }

    .t-card {
      background: var(--white);
      border: 1px solid rgba(29, 28, 27, .07);
      border-radius: var(--radius-lg);
          padding: 30px 36px;
      display: flex;
      flex-direction: column;
      gap: 22px;
      position: relative;
      overflow: hidden;
      justify-content: center;
      height: 100%;
    }

    .t-card>* {
      position: relative;
      z-index: 1;
    }

    .t-stars {
      display: flex;
      gap: 3px;
    }

    .t-stars svg {
      width: 16px;
      height: 16px;
      fill: var(--charcoal);
      stroke: none;
    }

    .t-quote {
      font-family: 'Cabinet Grotesk', sans-serif;
      font-weight: 500;
      font-size: clamp(19px, 2.2vw, 24px);
      line-height: 1.5;
      color: var(--charcoal);
      letter-spacing: -.01em;
    }

    .t-person {
      display: flex;
      align-items: center;
      gap: 14px;
      padding-top: 20px;
      border-top: 1px solid rgba(29, 28, 27, .07);
    }

    .t-avatar {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--indigo), var(--coral));
      flex-shrink: 0;
    }

    .t-person .name {
      font-weight: 700;
      font-size: 14.5px;
    }

    .t-person .meta {
      font-size: 12.5px;
      color: var(--ink-40);
      margin-top: 2px;
    }

    .t-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 12px;
      color: var(--ink-40);
      font-weight: 600;
      margin-left: auto;
      white-space: nowrap;
    }

    .t-controls {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 22px;
      margin-top: 36px;
    }

    .t-arrow {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: var(--white);
      border: 1px solid rgba(29, 28, 27, .1);
      box-shadow: var(--shadow-tiny);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all .25s ease;
      flex-shrink: 0;
    }

    .t-arrow:hover {
      background: var(--charcoal);
      border-color: var(--charcoal);
      transform: translateY(-2px);
    }

    .t-arrow:hover svg {
      stroke: var(--white);
    }

    .t-arrow svg {
      width: 17px;
      height: 17px;
      stroke: var(--charcoal);
      transition: stroke .25s ease;
    }

    .t-dots {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .t-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: rgba(29, 28, 27, .15);
      border: none;
      cursor: pointer;
      padding: 0;
      transition: all .3s ease;
    }

    .t-dot.active {
      width: 26px;
      border-radius: 100px;
      background: var(--lime);
    }

    .t-video{
    position:relative;
    width:100%;
    padding-bottom:56.25%;
    overflow:hidden;
    border-radius:18px;
    margin-bottom:24px;
    background:#000;
}

.t-video iframe,
.t-video video{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    border:0;
    object-fit:cover;
}

    @media (max-width:640px) {
      .t-card {
        padding: 32px 24px;
      }

      .t-card::before {
        font-size: 110px;
        top: -8px;
        right: 14px;
      }

      .t-person {
        flex-wrap: wrap;
      }

      .t-badge {
        margin-left: 0;
        flex-basis: 100%;
        padding-top: 6px;
      }

      .t-controls {
        gap: 16px;
      }
    }

    /* ---------- Final CTA ---------- */
    .final-cta {
      padding: 130px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .final-cta h2 {
      font-size: clamp(32px, 4.6vw, 54px);
      max-width: 720px;
      margin: 0 auto 20px;
    }

    .final-cta p {
      color: var(--ink-60);
      font-size: 17px;
      max-width: 480px;
      margin: 0 auto 36px;
    }

    .final-cta .actions {
      display: flex;
      gap: 14px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .final-glow {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 900px;
      height: 500px;
      background: radial-gradient(ellipse, rgba(180, 255, 80, .18), transparent 65%);
      pointer-events: none;
    }


    /* ---------- Footer ---------- */
    /* ---------- Footer ---------- */
    footer {
      position: relative;
      overflow: hidden;
      background: var(--charcoal);
      color: rgba(255, 255, 255, .75);
      padding: 84px 0 32px;
    }

    footer::before {
      content: '';
      position: absolute;
      top: -160px;
      left: -80px;
      width: 420px;
      height: 420px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(180, 255, 80, .1), transparent 70%);
      pointer-events: none;
    }

    footer::after {
      content: '';
      position: absolute;
      bottom: -180px;
      right: -100px;
      width: 380px;
      height: 380px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(179, 153, 255, .1), transparent 70%);
      pointer-events: none;
    }

    footer .wrap {
      position: relative;
      z-index: 1;
    }

    .footer-top-line {
      text-align: center;
      font-family: 'Cabinet Grotesk', sans-serif;
      font-weight: 700;
      font-size: clamp(18px, 2.2vw, 24px);
      color: var(--white);
      padding-bottom: 44px;
      margin-bottom: 44px;
      border-bottom: 1px solid rgba(255, 255, 255, .08);
    }

    .footer-brand .logo {
      font-size: 24px;
    }

  

    .footer-brand .logo-mark img {
      width: 40px;
    }

    .tagline {
      font-size: 12.5px !important;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .08em;
      color: var(--lime) !important;
      margin: 14px 0 0 !important;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.4fr 1fr 1fr 1fr 1.1fr;
      gap: 20px;
      padding-bottom: 52px;
    }

    footer h5 {
      font-family: 'Cabinet Grotesk', sans-serif;
      color: var(--white);
      font-size: 15px;
      margin-bottom: 18px;
    }

    .footer-brand p {
      font-size: 14px;
      line-height: 1.6;
      margin: 10px 0 22px;
      max-width: 300px;
      color: rgba(255, 255, 255, .55);
    }

    .foot-links {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 11px;
    }

    .foot-links a {
      font-size: 14px;
      color: rgba(255, 255, 255, .65);
      transition: color .2s;
    }

    .foot-links a:hover {
      color: var(--lime);
    }

    .newsletter-form {
      display: flex;
      gap: 8px;
      margin: 20px 0 8px;
      max-width: 320px;
    }

    .newsletter-form input {
      flex: 1;
      background: rgba(255, 255, 255, .07);
      border: 1px solid rgba(255, 255, 255, .12);
      border-radius: 10px;
      padding: 12px 14px;
      color: var(--white);
      font-size: 13.5px;
      font-family: 'Satoshi', sans-serif;
    }

    .newsletter-form input::placeholder {
      color: rgba(255, 255, 255, .4);
    }

    .newsletter-form button {
      background: var(--lime);
      color: var(--charcoal);
      border: none;
      border-radius: 10px;
      padding: 0 18px;
      font-weight: 700;
      font-size: 13.5px;
      cursor: pointer;
      flex-shrink: 0;
      transition: transform .2s ease;
    }

    .newsletter-form button:hover {
      transform: translateY(-1px);
    }

    .newsletter-note {
      display: block;
      font-size: 11.5px;
      color: rgba(255, 255, 255, .35);
      margin-bottom: 26px;
    }

    .store-badges {
      display: flex;
      gap: 7px;
      flex-wrap: wrap;
    }

    .store-badge {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      background: rgba(255, 255, 255, .06);
      border: 1px solid rgba(255, 255, 255, .14);
      border-radius: 10px;
      padding: 8px 14px 8px 12px;
      transition: all .25s ease;
    }

    .store-badge:hover {
      background: rgba(255, 255, 255, .12);
      border-color: rgba(255, 255, 255, .28);
      transform: translateY(-2px);
    }

    .store-badge svg {
      width: 17px;
      height: 17px;
      flex-shrink: 0;
      stroke: var(--white);
    }

    .store-badge .store-text {
      display: flex;
      flex-direction: column;
      line-height: 1.15;
    }

    .store-badge .store-text .small {
      font-size: 8.5px;
      color: rgba(255, 255, 255, .5);
      text-transform: uppercase;
      letter-spacing: .04em;
    }

    .store-badge .store-text .big {
      font-size: 12.5px;
      font-weight: 700;
      color: var(--white);
    }

    .foot-contact .contact-row {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      margin-bottom: 18px;
      font-size: 13.5px;
      color: rgba(255, 255, 255, .68);
      line-height: 1.5;
      transition: color .2s ease;
    }

    a.contact-row:hover {
      color: var(--lime);
    }

    .foot-contact .contact-ic {
      width: 30px;
      height: 30px;
      border-radius: 9px;
      background: rgba(180, 255, 80, .12);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .foot-contact .contact-ic svg {
      width: 14px;
      height: 14px;
      stroke: var(--lime);
    }

    .social {
      display: flex;
      gap: 10px;
    }

    .social a {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: transparent;
      border: 1.5px solid rgba(180, 255, 80, .5);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all .25s ease;
    }

    .social a:hover {
      background: var(--lime);
      border-color: var(--lime);
      transform: translateY(-2px);
    }

    .social svg {
      width: 14px;
      height: 14px;
      stroke: var(--white);
      transition: stroke .25s ease;
    }

    .social a:hover svg {
      stroke: var(--charcoal);
    }

    .foot-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 26px;
      border-top: 1px solid rgba(255, 255, 255, .08);
      font-size: 12.5px;
      color: rgba(255, 255, 255, .4);
      flex-wrap: wrap;
      gap: 12px;
    }

    .foot-bottom a {
      color: rgba(255, 255, 255, .4);
    }

    .foot-bottom a:hover {
      color: var(--lime);
    }

    @media (max-width:900px) {
      .footer-grid {
        grid-template-columns: 1fr 1fr;
        row-gap: 40px;
      }
    }

    @media (max-width:560px) {
      .footer-grid {
        grid-template-columns: 1fr;
      }

      .footer-top-line {
        text-align: left;
      }
    }
  </style>
</head>

<body>

  <header id="siteHeader">
    <nav class="navbar">
      <a href="#" class="logo">
        <img src="https://www.wunderbuild.com/wp-content/uploads/2023/01/desktop-logo.svg" alt="">
      </a>
      <div class="nav-links">
        <a href="#process">How it works</a>
        <a href="#showcase">Features</a>
        <a href="#">Pricing</a>
        <a href="#">Why Wunderbuild</a>
        <a href="#">Resources</a>
        <a href="#">Partners</a>
      </div>
      <div class="nav-actions">
        <a href="#" class="nav-login">Log in</a>
        <a href="#" class="btn btn-primary btn-sm">Start a free trial</a>
        <!-- <a href="#" class="btn btn-primary btn-sm">Book a free demo</a> -->
      </div>
      <button class="mobile-toggle" aria-label="Menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
          <line x1="3" y1="6" x2="21" y2="6" />
          <line x1="3" y1="12" x2="21" y2="12" />
          <line x1="3" y1="18" x2="21" y2="18" />
        </svg>
      </button>
    </nav>
  </header>