<?php require __DIR__ . '/layout/head.php'; ?>
<link rel='stylesheet prefetch' href='/css/slide.css?v=2.22.2'>

<body class="bg-stone-50 text-slate-800">
  <?php require __DIR__ . '/layout/header.php'; ?>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" 
data-pause="false"
data-keyboard="false"
>
  <div class="carousel-inner">
    <!---
    --->
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/slide1.jpg" alt="Second slide">   
    </div>   
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/slide2.jpg" alt="Second slide">   
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/slide3.jpg" alt="Second slide">   
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/slide4.jpg" alt="Second slide">   
    </div>
  </div>
  <div class="bottom">
			<div id="hero-main">		
        <div id="p-text">
        <span class="wow fadeInUp">The</span>
        <h2 class="wow fadeInUp"> Mentor-Matchup </h2>
        <h1 class="wow fadeInUp">Challenge 8.0</h1>
        <a href="#"><button class="p-btn hvr-bounce-to-right wow fadeInUp">SAVE THE DATE: DECEMBER 2026</button></a> 
        </div>
      </div> 
  </div>
  <p class="ss">SNH 8.0!</p>
</div>
  <main id="home">
    <section class="home-hero relative isolate flex min-h-[680px] items-center overflow-hidden pt-20">
      <div class="mx-auto grid w-full max-w-7xl items-center gap-12 px-6 py-16 lg:grid-cols-[1fr_.85fr] lg:px-8 lg:py-20">
        <div class="max-w-2xl">
          <p class="home-hero__eyebrow mb-5 text-sm font-bold uppercase tracking-[.18em] text-[#287d61]">
            <span class="home-hero__eyebrow-mark" aria-hidden="true"></span>
            Care that helps people move forward
          </p>
          <h1 class="home-hero__title font-display text-5xl leading-[1.05] text-[#123b2d] sm:text-6xl lg:text-7xl">Nurturing potential.<br><span class="text-[#287d61]">Promoting independence.</span></h1>
          <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600">We provide safe, supportive environments where young people and adults can build confidence, develop life skills, and work towards a future that feels their own.</p>
          <div class="mt-9 flex flex-wrap gap-4">
            <a href="/services" class="home-hero__primary-action rounded-full bg-[#287d61] px-7 py-4 font-semibold text-white transition hover:-translate-y-0.5 hover:bg-[#123b2d]">Explore our services <span aria-hidden="true">→</span></a>
            <a href="/contact" class="home-hero__secondary-action rounded-full border border-[#123b2d]/20 bg-white px-7 py-4 font-semibold text-[#123b2d] transition hover:border-[#287d61]">Get in touch</a>
          </div>
        </div>
        <div class="home-hero__art" role="img" aria-label="Six Nurturing Home Limited, supporting young people and adults">
          <div class="home-hero__orbit" aria-hidden="true"></div>
          <div class="home-hero__logo">
            <img src="/images/shnl-logo.jpeg" alt="" class="h-36 w-36 rounded-full object-cover sm:h-44 sm:w-44">
            <span>Six Nurturing Home</span>
          </div>
          <div class="home-hero__note home-hero__note--top">
            <span class="home-hero__note-icon" aria-hidden="true">01</span>
            <span><strong>Every person matters</strong><small>Support shaped around you</small></span>
          </div>
          <div class="home-hero__note home-hero__note--bottom">
            <span class="home-hero__note-icon home-hero__note-icon--gold" aria-hidden="true">02</span>
            <span><strong>Room to grow</strong><small>Confidence for what comes next</small></span>
          </div>
        </div>
      </div>
    </section>

    <section class="home-values border-y border-slate-200 bg-white" aria-label="What guides our support">
      <div class="mx-auto grid max-w-7xl gap-px bg-slate-200 sm:grid-cols-3">
        <a href="/about" class="home-value-link bg-white px-8 py-8"><strong class="font-display text-2xl text-[#123b2d]">Person-centred</strong><p class="mt-2 text-sm text-slate-600">Learn about our mission, vision and values.</p><span aria-hidden="true">Learn about us <span>→</span></span></a>
        <a href="/services" class="home-value-link bg-white px-8 py-8"><strong class="font-display text-2xl text-[#123b2d]">Safe & inclusive</strong><p class="mt-2 text-sm text-slate-600">Explore our accommodation and care services.</p><span aria-hidden="true">View our services <span>→</span></span></a>
        <a href="/our-approach" class="home-value-link bg-white px-8 py-8"><strong class="font-display text-2xl text-[#123b2d]">Outcome focused</strong><p class="mt-2 text-sm text-slate-600">Discover how we support people to thrive.</p><span aria-hidden="true">Our approach <span>→</span></span></a>
      </div>
    </section>

    <section class="bg-[#123b2d] py-20 text-white" aria-labelledby="commitment-heading">
      <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-2 lg:px-8">
        <div>
          <p class="text-sm font-bold uppercase tracking-[.18em] text-[#e4c56f]">Our commitment</p>
          <h2 id="commitment-heading" class="mt-4 font-display text-4xl sm:text-5xl">To provide exceptional care and support.</h2>
        </div>
        <p class="text-lg leading-8 text-white/75">We believe that every individual deserves the opportunity to live with dignity, independence, and purpose. Through compassionate, person-centred care and support, we help those we serve build resilience, develop essential life skills, and create brighter futures.</p>
      </div>
    </section>

    <section class="home-services py-20" aria-labelledby="services-heading">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
          <div>
            <p class="text-sm font-bold uppercase tracking-[.18em] text-[#287d61]">How we can help</p>
            <h2 id="services-heading" class="mt-3 font-display text-4xl text-[#123b2d] sm:text-5xl">Support for every stage.</h2>
          </div>
          <a href="/services" class="home-services__all-link font-semibold text-[#287d61]">See all services <span aria-hidden="true">→</span></a>
        </div>
        <div class="grid gap-8 md:grid-cols-3">
          <article class="home-service-card rounded-[2rem] bg-[#edf5ef] p-8 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[.18em] text-[#287d61]">Residential care</p>
            <h3 class="mt-4 font-display text-3xl text-[#123b2d]">Children and young people</h3>
            <p class="mt-4 leading-7 text-slate-600">Safe, stable, and nurturing accommodation for children and young people aged 10–18, with a focus on emotional wellbeing and personal development.</p>
            <a href="/services" class="home-service-card__link">Explore residential care <span aria-hidden="true">→</span></a>
          </article>
          <article class="home-service-card rounded-[2rem] bg-[#f4f0e4] p-8 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[.18em] text-[#b9852a]">Adult support</p>
            <h3 class="mt-4 font-display text-3xl text-[#123b2d]">Community-based care</h3>
            <p class="mt-4 leading-7 text-slate-600">Flexible, person-centred support for adults living independently or within supported living environments, helping them to build confidence and autonomy.</p>
            <a href="/services" class="home-service-card__link">Explore adult support <span aria-hidden="true">→</span></a>
          </article>
          <article class="home-service-card rounded-[2rem] bg-[#edf0f5] p-8 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[.18em] text-[#4d6ea8]">Why choose us</p>
            <h3 class="mt-4 font-display text-3xl text-[#123b2d]">Support that sticks</h3>
            <p class="mt-4 leading-7 text-slate-600">We work in partnership with families, professionals and the wider community to ensure tailored, compassionate support and positive outcomes.</p>
            <a href="/our-approach" class="home-service-card__link">Discover our approach <span aria-hidden="true">→</span></a>
          </article>
        </div>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/layout/footer.php'; ?>
