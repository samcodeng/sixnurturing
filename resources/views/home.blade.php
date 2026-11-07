@include('layout.head')
<body class="bg-stone-50 text-slate-800">
  <header class="fixed inset-x-0 top-0 z-50 border-b border-white/70 bg-white/95 backdrop-blur">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8">
      <a href="#home" class="flex items-center gap-3" aria-label="Six Nurturing Home Limited">
        <img src="{{ asset('images/shnl-logo.jpeg') }}" alt="" class="h-14 w-14 rounded-full object-cover">
        <span class="font-display text-lg leading-tight text-[#123b2d]">Six Nurturing<br><span class="text-sm">Home Limited</span></span>
      </a>
      <button id="menu-button" type="button" class="rounded-lg border border-[#123b2d]/20 p-2 text-[#123b2d] md:hidden" aria-expanded="false" aria-controls="main-navigation">
        <span class="sr-only">Toggle navigation</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
      <nav id="main-navigation" class="hidden items-center gap-7 text-sm font-semibold text-slate-700 md:flex">
        <a href="#about" class="hover:text-[#287d61]">About</a>
        <a href="#services" class="hover:text-[#287d61]">Services</a>
        <a href="#approach" class="hover:text-[#287d61]">Our approach</a>
        <a href="#careers" class="hover:text-[#287d61]">Careers</a>
        <a href="#contact" class="rounded-full bg-[#287d61] px-5 py-3 text-white transition hover:bg-[#123b2d]">Contact us</a>
      </nav>
    </div>
  </header>

  <main>
    <section id="home" class="relative isolate flex min-h-[680px] items-center overflow-hidden pt-20">
      <div class="hero-pattern absolute inset-0 -z-20"></div>
      <div class="absolute inset-y-0 right-0 -z-10 hidden w-[58%] bg-[linear-gradient(90deg,#f8faf7_0%,rgba(248,250,247,.12)_100%)] lg:block"></div>
      <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-[1fr_.8fr] lg:px-8">
        <div class="max-w-2xl">
          <p class="mb-5 text-sm font-bold uppercase tracking-[.22em] text-[#287d61]">Welcome to Six Nurturing Home Limited</p>
          <h1 class="font-display text-5xl leading-[1.05] text-[#123b2d] sm:text-6xl lg:text-7xl">Nurturing potential.<br><span class="text-[#287d61]">Promoting independence.</span></h1>
          <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600">Safe, supportive and empowering environments where young people and adults can thrive, build confidence and achieve their full potential.</p>
          <div class="mt-9 flex flex-wrap gap-4">
            <a href="#services" class="rounded-full bg-[#287d61] px-7 py-4 font-semibold text-white transition hover:-translate-y-0.5 hover:bg-[#123b2d]">Explore our services</a>
            <a href="#contact" class="rounded-full border border-[#123b2d]/20 bg-white px-7 py-4 font-semibold text-[#123b2d] transition hover:border-[#287d61]">Get in touch</a>
          </div>
        </div>
        <div class="relative hidden justify-center lg:flex">
          <div class="rounded-[3rem] border-[18px] border-white bg-[#dceadf] p-14 shadow-2xl shadow-[#123b2d]/15">
            <img src="{{ asset('images/shnl-logo.jpeg') }}" alt="Six Nurturing Haven Limited logo" class="h-72 w-72 rounded-full object-cover">
          </div>
        </div>
      </div>
    </section>

    <section class="border-y border-slate-200 bg-white">
      <div class="mx-auto grid max-w-7xl gap-px bg-slate-200 sm:grid-cols-3">
        <div class="bg-white px-8 py-7"><strong class="font-display text-2xl text-[#123b2d]">Person-centred</strong><p class="mt-2 text-sm text-slate-600">Support shaped around individual needs and goals.</p></div>
        <div class="bg-white px-8 py-7"><strong class="font-display text-2xl text-[#123b2d]">Safe & inclusive</strong><p class="mt-2 text-sm text-slate-600">Nurturing environments where everyone feels valued.</p></div>
        <div class="bg-white px-8 py-7"><strong class="font-display text-2xl text-[#123b2d]">Outcome focused</strong><p class="mt-2 text-sm text-slate-600">Helping people build confidence and independence.</p></div>
      </div>
    </section>

    <section id="about" class="scroll-mt-20 bg-white py-24">
      <div class="mx-auto grid max-w-7xl gap-14 px-6 lg:grid-cols-[.85fr_1.15fr] lg:px-8">
        <div><p class="section-label">About us</p><h2 class="mt-5 font-display text-4xl leading-tight text-[#123b2d] sm:text-5xl">Care built around the whole person.</h2><div class="mt-8 h-1 w-20 bg-[#287d61]"></div></div>
        <div class="grid gap-6 text-lg leading-8 text-slate-600">
          <p>We provide high-quality care, support and accommodation that empowers young people and adults to live safe, fulfilling and independent lives.</p>
          <p>Our dedicated and experienced team works closely with individuals, families, local authorities, healthcare professionals and partner agencies to ensure everyone receives the guidance and support needed for positive outcomes.</p>
        </div>
      </div>
      <div class="mx-auto mt-16 grid max-w-7xl gap-6 px-6 md:grid-cols-3 lg:px-8">
        <article class="rounded-3xl bg-[#edf5ef] p-8"><span class="text-sm font-bold text-[#287d61]">01</span><h3 class="mt-5 font-display text-3xl text-[#123b2d]">Our mission</h3><p class="mt-4 leading-7 text-slate-600">To create positive and lasting outcomes through compassionate care that promotes independence, wellbeing, personal growth and social inclusion.</p></article>
        <article class="rounded-3xl bg-[#f4f0e4] p-8"><span class="text-sm font-bold text-[#287d61]">02</span><h3 class="mt-5 font-display text-3xl text-[#123b2d]">Our vision</h3><p class="mt-4 leading-7 text-slate-600">A world where people with complex needs are surrounded by collaborative, holistic and expert care, kindness and opportunity.</p></article>
        <article class="rounded-3xl bg-[#edf0f5] p-8"><span class="text-sm font-bold text-[#287d61]">03</span><h3 class="mt-5 font-display text-3xl text-[#123b2d]">Our promise</h3><p class="mt-4 leading-7 text-slate-600">To see the person, not the problem, and focus on possibilities, not limitations, in every aspect of our service.</p></article>
      </div>
    </section>

    <section id="services" class="scroll-mt-20 bg-[#f4f7f3] py-24">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl"><p class="section-label">Our services</p><h2 class="mt-5 font-display text-4xl text-[#123b2d] sm:text-5xl">Support that opens doors to independence.</h2></div>
        <div class="mt-14 grid gap-7 lg:grid-cols-2">
          <article class="overflow-hidden rounded-[2rem] bg-white shadow-sm">
            <div class="bg-[#287d61] px-8 py-6 text-white"><p class="text-sm font-bold uppercase tracking-[.18em] text-white/70">Ages 16–18</p><h3 class="mt-2 font-display text-3xl">Semi-independent accommodation</h3></div>
            <div class="grid gap-6 p-8">
              <p class="text-lg leading-8 text-slate-600">A safe, nurturing and structured environment where young people can develop confidence, resilience and practical skills for adulthood.</p>
              <ul class="service-list"><li>Independent living and budgeting skills</li><li>Education, training and employment support</li><li>Emotional wellbeing and positive relationships</li><li>Community participation and social inclusion</li></ul>
              <div class="rounded-2xl bg-[#edf5ef] p-5 text-sm leading-6 text-slate-600"><strong class="text-[#123b2d]">Referral process:</strong> Referrals can be made by local authorities, social workers, placement teams and authorised professionals. We assess each referral collaboratively before placement.</div>
            </div>
          </article>
          <article class="overflow-hidden rounded-[2rem] bg-white shadow-sm">
            <div class="bg-[#d9a441] px-8 py-6 text-[#3d321c]"><p class="text-sm font-bold uppercase tracking-[.18em] text-[#3d321c]/70">Community & supported living</p><h3 class="mt-2 font-display text-3xl">Adult social care</h3></div>
            <div class="grid gap-6 p-8">
              <p class="text-lg leading-8 text-slate-600">Flexible, personalised care that promotes dignity, choice and wellbeing while maintaining independence and control over life.</p>
              <ul class="service-list"><li>Personal care and daily living assistance</li><li>Medication and household support</li><li>Supported living and life skills</li><li>Community participation and advocacy</li></ul>
              <div class="rounded-2xl bg-[#faf5e7] p-5 text-sm leading-6 text-slate-600">Support is available for adults with physical or learning disabilities, autism, mental health needs, age-related conditions and other care needs.</div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="approach" class="scroll-mt-20 bg-white py-24">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-[.9fr_1.1fr]">
          <div><p class="section-label">Our approach</p><h2 class="mt-5 font-display text-4xl text-[#123b2d] sm:text-5xl">Supporting people to thrive, not just survive.</h2><p class="mt-7 text-lg leading-8 text-slate-600">We place the individual at the centre of everything we do, tailoring support to their experiences, strengths, aspirations and goals.</p></div>
          <div class="grid gap-px overflow-hidden rounded-3xl border border-slate-200 bg-slate-200 sm:grid-cols-2">
            @foreach([['Person-centred care', 'Personalised plans that reflect what matters most and give people an active voice in their support.'], ['Safeguarding', 'Strong procedures, ongoing staff training and close partnership with agencies to protect and promote wellbeing.'], ['Trauma-informed practice', 'We recognise the impact of trauma and respond with patience, safety, trust, choice and collaboration.'], ['Equality & inclusion', 'We celebrate diversity and promote equal opportunities in environments free from discrimination.'], ['Outcome-focused support', 'Practical goals that lead to sustainable independence, confidence, wellbeing and stronger community connections.'], ['Partnership working', 'Joined-up support with families, professionals, education providers and local organisations.']] as $item)
              <article class="bg-white p-7"><h3 class="font-display text-xl text-[#123b2d]">{{ $item[0] }}</h3><p class="mt-3 text-sm leading-6 text-slate-600">{{ $item[1] }}</p></article>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#123b2d] py-20 text-white">
      <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-2 lg:px-8">
        <div><p class="text-sm font-bold uppercase tracking-[.18em] text-[#e4c56f]">Our values</p><h2 class="mt-4 font-display text-4xl sm:text-5xl">Compassion. Respect. Empowerment.</h2></div>
        <div class="grid gap-x-10 gap-y-6 sm:grid-cols-2">
          <p><strong>Compassion</strong><br><span class="text-white/70">Kindness, empathy and dignity in every interaction.</span></p>
          <p><strong>Integrity</strong><br><span class="text-white/70">Honesty, transparency, professionalism and accountability.</span></p>
          <p><strong>Respect</strong><br><span class="text-white/70">Equality, diversity and inclusion for every individual.</span></p>
          <p><strong>Reliability</strong><br><span class="text-white/70">Consistent, dependable support and trusted relationships.</span></p>
        </div>
      </div>
    </section>

    <section id="careers" class="scroll-mt-20 bg-[#f4f0e4] py-24">
      <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-[1fr_.8fr] lg:px-8">
        <div><p class="section-label">Join our team</p><h2 class="mt-5 font-display text-4xl text-[#123b2d] sm:text-5xl">Make a positive difference.</h2><p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">We are looking for caring, dedicated and motivated people who share our commitment to compassion, respect and empowerment.</p></div>
        <div class="rounded-[2rem] bg-white p-8 shadow-sm"><h3 class="font-display text-2xl text-[#123b2d]">How to apply</h3><p class="mt-4 leading-7 text-slate-600">Send your CV and covering letter to our team. We aim to respond within 24–48 hours.</p><a href="mailto:admin@sixnurturinghaven.co.uk?subject=Careers%20at%20Six%20Nurturing%20Home%20Limited" class="mt-6 inline-flex rounded-full bg-[#287d61] px-6 py-3 font-semibold text-white hover:bg-[#123b2d]">Email your application</a></div>
      </div>
    </section>

    <section id="contact" class="scroll-mt-20 bg-white py-24">
      <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[.75fr_1.25fr] lg:px-8">
        <div>
          <p class="section-label">Contact us</p><h2 class="mt-5 font-display text-4xl text-[#123b2d] sm:text-5xl">Let’s talk about support.</h2>
          <p class="mt-6 leading-8 text-slate-600">For referrals, placements, care enquiries or general information, please contact our team.</p>
          <a href="mailto:admin@sixnurturinghaven.co.uk" class="mt-9 flex items-center gap-4 text-[#123b2d]"><span class="grid h-11 w-11 place-items-center rounded-full bg-[#edf5ef]">@</span><span><small class="block text-xs uppercase tracking-widest text-slate-500">Email</small><strong>admin@sixnurturinghaven.co.uk</strong></span></a>
        </div>
        <form action="mailto:admin@sixnurturinghaven.co.uk" method="get" enctype="text/plain" class="grid gap-5 rounded-[2rem] bg-[#f4f7f3] p-7 sm:p-9">
          <div class="grid gap-5 sm:grid-cols-2">
            <label class="grid gap-2 text-sm font-semibold text-[#123b2d]">Your name<input name="name" required class="rounded-xl border border-slate-200 bg-white px-4 py-3 font-normal outline-none focus:border-[#287d61]"></label>
            <label class="grid gap-2 text-sm font-semibold text-[#123b2d]">Email address<input type="email" name="email" required class="rounded-xl border border-slate-200 bg-white px-4 py-3 font-normal outline-none focus:border-[#287d61]"></label>
          </div>
          <label class="grid gap-2 text-sm font-semibold text-[#123b2d]">How can we help?<select name="subject" class="rounded-xl border border-slate-200 bg-white px-4 py-3 font-normal outline-none focus:border-[#287d61]"><option>Young person referral</option><option>Adult social care</option><option>General enquiry</option><option>Careers</option></select></label>
          <label class="grid gap-2 text-sm font-semibold text-[#123b2d]">Message<textarea name="body" rows="5" required class="rounded-xl border border-slate-200 bg-white px-4 py-3 font-normal outline-none focus:border-[#287d61]"></textarea></label>
          <button type="submit" class="rounded-full bg-[#287d61] px-7 py-4 font-semibold text-white hover:bg-[#123b2d]">Send enquiry</button>
        </form>
      </div>
    </section>
  </main>
  @include('layout.footer')
