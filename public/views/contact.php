<?php require __DIR__ . '/layout/head.php'; ?>
<body class="bg-stone-50 text-slate-800">
  <?php require __DIR__ . '/layout/header.php'; ?>
  <main>
    <section class="pt-20">
      <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <p class="section-label">Contact us</p>
        <h1 class="mt-5 font-display text-5xl text-[#123b2d] sm:text-6xl">Let’s talk about support.</h1>
      </div>
    </section>
    <section class="bg-white py-20">
      <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[.75fr_1.25fr] lg:px-8">
        <div class="space-y-8">
          <p class="leading-8 text-slate-600">For referrals, placements, care enquiries, or general information, please contact our team. We are here to help you find the right support for young people and adults in need of compassionate, person-centred care.</p>
          <div class="grid gap-5">
            <div class="rounded-[1.5rem] bg-[#edf5ef] p-5">
              <small class="block text-xs uppercase tracking-widest text-slate-500">Office address</small>
              <strong class="mt-2 block text-[#123b2d]">Available on request / by appointment</strong>
            </div>
            <div class="rounded-[1.5rem] bg-[#edf5ef] p-5">
              <small class="block text-xs uppercase tracking-widest text-slate-500">Telephone</small>
              <strong class="mt-2 block text-[#123b2d]">Contact team by arrangement</strong>
            </div>
            <a href="mailto:admin@sixnurturinghaven.co.uk" class="flex items-center gap-4 rounded-[1.5rem] bg-[#edf5ef] p-5 text-[#123b2d]">
              <span class="grid h-11 w-11 place-items-center rounded-full bg-white">@</span>
              <span><small class="block text-xs uppercase tracking-widest text-slate-500">Email</small><strong>admin@sixnurturinghaven.co.uk</strong></span>
            </a>
            <div class="rounded-[1.5rem] bg-[#edf5ef] p-5">
              <small class="block text-xs uppercase tracking-widest text-slate-500">Emergency contact</small>
              <strong class="mt-2 block text-[#123b2d]">Urgent safeguarding or support concerns should be directed through the relevant local authority or safeguarding lead.</strong>
            </div>
          </div>
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
  <?php require __DIR__ . '/layout/footer.php'; ?>
