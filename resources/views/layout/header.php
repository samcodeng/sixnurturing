<header class="fixed inset-x-0 top-0 z-50 border-b border-white/70 bg-white/95 backdrop-blur">
  <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-8">
    <a href="/" class="flex items-center gap-3" aria-label="Six Nurturing Home Limited">
      <img src="/images/shnl-logo.jpeg" alt="" class="h-14 w-14 rounded-full object-cover">
      <span class="font-display text-lg leading-tight text-[#123b2d]">Six Nurturing<br><span class="text-sm">Home Limited</span></span>
    </a>
    <button id="menu-button" type="button" class="rounded-lg border border-[#123b2d]/20 p-2 text-[#123b2d] md:hidden" aria-expanded="false" aria-controls="main-navigation">
      <span class="sr-only">Toggle navigation</span>
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <nav id="main-navigation" class="hidden items-center gap-7 text-sm font-semibold text-slate-700 md:flex">
      <a href="/about" class="hover:text-[#287d61] <?= $currentPage === 'about' ? 'text-[#287d61]' : '' ?>">About</a>
      <a href="/services" class="hover:text-[#287d61] <?= $currentPage === 'services' ? 'text-[#287d61]' : '' ?>">Services</a>
      <a href="/our-approach" class="hover:text-[#287d61] <?= $currentPage === 'approach' ? 'text-[#287d61]' : '' ?>">Our approach</a>
      <a href="/careers" class="hover:text-[#287d61] <?= $currentPage === 'careers' ? 'text-[#287d61]' : '' ?>">Careers</a>
      <a href="/contact" class="rounded-full bg-[#287d61] px-5 py-3 text-white transition hover:bg-[#123b2d]">Contact us</a>
    </nav>
  </div>
</header>
