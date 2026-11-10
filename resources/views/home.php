<?php require __DIR__ . '/layout/head.php'; ?>
<body class="bg-stone-50 text-slate-800">
  <?php require __DIR__ . '/layout/header.php'; ?>
  <main>
    <section class="relative isolate flex min-h-[680px] items-center overflow-hidden pt-20">
      <div class="hero-pattern absolute inset-0 -z-20"></div>
      <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-[1fr_.8fr] lg:px-8">
        <div class="max-w-2xl">
          <p class="mb-5 text-sm font-bold uppercase tracking-[.22em] text-[#287d61]">Welcome to Six Nurturing Home Limited</p>
          <h1 class="font-display text-5xl leading-[1.05] text-[#123b2d] sm:text-6xl lg:text-7xl">Nurturing potential.<br><span class="text-[#287d61]">Promoting independence.</span></h1>
          <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600">At Six Nurturing Home Limited, we are dedicated to providing safe, supportive, and empowering environments where young people and adults can thrive, develop confidence, and achieve their full potential.</p>
          <div class="mt-9 flex flex-wrap gap-4">
            <a href="/services" class="rounded-full bg-[#287d61] px-7 py-4 font-semibold text-white transition hover:-translate-y-0.5 hover:bg-[#123b2d]">Explore our services</a>
              <a href="/contact" class="rounded-full border border-[#123b2d]/20 bg-white px-7 py-4 font-semibold text-[#123b2d] transition hover:border-[#287d61]">Get in touch</a>
          </div>
        </div>
        <div class="relative hidden justify-center lg:flex">
          <div class="rounded-[3rem] border-[18px] border-white bg-[#dceadf] p-14 shadow-2xl shadow-[#123b2d]/15">
            <img src="/images/shnl-logo.jpeg" alt="Six Nurturing Home Limited logo" class="h-72 w-72 rounded-full object-cover">
          </div>
        </div>
      </div>
    </section>

    <section class="border-y border-slate-200 bg-white">
      <div class="mx-auto grid max-w-7xl gap-px bg-slate-200 sm:grid-cols-3">
        <a href="/about" class="bg-white px-8 py-8"><strong class="font-display text-2xl text-[#123b2d]">Person-centred</strong><p class="mt-2 text-sm text-slate-600">Learn about our mission, vision and values.</p></a>
        <a href="/services" class="bg-white px-8 py-8"><strong class="font-display text-2xl text-[#123b2d]">Safe & inclusive</strong><p class="mt-2 text-sm text-slate-600">Explore our accommodation and care services.</p></a>
        <a href="/our-approach" class="bg-white px-8 py-8"><strong class="font-display text-2xl text-[#123b2d]">Outcome focused</strong><p class="mt-2 text-sm text-slate-600">Discover how we support people to thrive.</p></a>
      </div>
    </section>

    <section class="bg-[#123b2d] py-20 text-white">
      <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-2 lg:px-8">
        <div>
          <p class="text-sm font-bold uppercase tracking-[.18em] text-[#e4c56f]">Our commitment</p>
          <h2 class="mt-4 font-display text-4xl sm:text-5xl">To provide exceptional care and support.</h2>
        </div>
        <p class="text-lg leading-8 text-white/75">We believe that every individual deserves the opportunity to live with dignity, independence, and purpose. Through compassionate, person-centred care and support, we help those we serve build resilience, develop essential life skills, and create brighter futures.</p>
      </div>
    </section>

    <section class="py-20">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-8 md:grid-cols-3">
          <article class="rounded-[2rem] bg-[#edf5ef] p-8 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[.18em] text-[#287d61]">Residential care</p>
            <h3 class="mt-4 font-display text-3xl text-[#123b2d]">Children and young people</h3>
            <p class="mt-4 leading-7 text-slate-600">Safe, stable, and nurturing accommodation for children and young people aged 10–18, with a focus on emotional wellbeing and personal development.</p>
          </article>
          <article class="rounded-[2rem] bg-[#f4f0e4] p-8 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[.18em] text-[#b9852a]">Adult support</p>
            <h3 class="mt-4 font-display text-3xl text-[#123b2d]">Community-based care</h3>
            <p class="mt-4 leading-7 text-slate-600">Flexible, person-centred support for adults living independently or within supported living environments, helping them to build confidence and autonomy.</p>
          </article>
          <article class="rounded-[2rem] bg-[#edf0f5] p-8 shadow-sm">
            <p class="text-sm font-bold uppercase tracking-[.18em] text-[#4d6ea8]">Why choose us</p>
            <h3 class="mt-4 font-display text-3xl text-[#123b2d]">Support that sticks</h3>
            <p class="mt-4 leading-7 text-slate-600">We work in partnership with families, professionals and the wider community to ensure tailored, compassionate support and positive outcomes.</p>
          </article>
        </div>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/layout/footer.php'; ?>
