<?php require __DIR__ . '/layout/head.php'; ?>
<body class="bg-stone-50 text-slate-800">
  <?php require __DIR__ . '/layout/header.php'; ?>
  <main>
    <section class="pt-20">
      <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <p class="section-label">Our approach</p>
        <h1 class="mt-5 max-w-4xl font-display text-5xl text-[#123b2d] sm:text-6xl">Supporting people to thrive, not just survive.</h1>
      </div>
    </section>
    <section class="bg-white py-20">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-px overflow-hidden rounded-3xl border border-slate-200 bg-slate-200 sm:grid-cols-2 lg:grid-cols-3">
          <?php foreach ([
              ['Person-centred care', 'We take the time to understand what matters most to each individual and develop personalised support plans that promote independence, wellbeing, and confidence.'],
              ['Safeguarding', 'Strong procedures, ongoing staff training, and robust risk management keep people safe, protected, and respected.'],
              ['Trauma-informed practice', 'We recognise adversity and respond with patience, safety, trust, choice, and collaboration.'],
              ['Equality & inclusion', 'We celebrate diversity and promote equal opportunities in environments free from discrimination, prejudice, and exclusion.'],
              ['Outcome-focused support', 'Practical goals help people develop independence, confidence, resilience, and stronger community connections.'],
              ['Partnership working', 'Families, professionals, local authorities, and partner agencies work together to provide coordinated, holistic care.'],
          ] as $item): ?>
            <article class="bg-white p-8"><h2 class="font-display text-2xl text-[#123b2d]"><?= htmlspecialchars($item[0], ENT_QUOTES, 'UTF-8') ?></h2><p class="mt-4 leading-7 text-slate-600"><?= htmlspecialchars($item[1], ENT_QUOTES, 'UTF-8') ?></p></article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="py-20">
      <div class="mx-auto max-w-5xl px-6 lg:px-8">
        <div class="rounded-[2rem] bg-[#edf5ef] p-10 shadow-sm">
          <p class="section-label">Our promise</p>
          <h2 class="mt-4 font-display text-4xl text-[#123b2d]">We see the person, not the problem.</h2>
          <p class="mt-6 text-lg leading-8 text-slate-600">At Six Nurturing Home Limited, we are committed to delivering compassionate, high-quality, and person-centred services that empower people to reach their full potential. Through safe and nurturing environments, strong partnerships, and a genuine commitment to individual wellbeing, we support young people and adults to build confidence, overcome challenges, achieve their goals, and live independent, fulfilling lives.</p>
        </div>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/layout/footer.php'; ?>
