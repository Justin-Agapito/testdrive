@extends('layout')
@section('title', 'About')

@section('content')

{{-- HERO --}}
<section class="pt-36 pb-20 px-6">
    <div class="max-w-6xl mx-auto">
        <span class="text-amber-500 text-sm uppercase tracking-widest font-medium">Who we are</span>
        <h1 class="text-6xl font-bold text-stone-900 mt-3 mb-6 max-w-2xl leading-tight">
            A team driven by <span class="text-amber-500">craft</span> and curiosity.
        </h1>
        <p class="text-lg text-stone-500 max-w-xl leading-relaxed">
            We're a small but mighty studio that believes great design and clean code can change how people experience the web.
        </p>
    </div>
</section>

{{-- STORY --}}
<section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div class="relative">
            <div class="w-full h-[420px] bg-gradient-to-br from-stone-200 to-amber-100 rounded-3xl"></div>
            <div class="absolute -bottom-4 -right-4 bg-amber-500 text-white px-6 py-4 rounded-2xl">
                <p class="text-3xl font-bold">2019</p>
                <p class="text-sm opacity-80">Founded</p>
            </div>
        </div>
        <div>
            <h2 class="text-4xl font-bold text-stone-900 mb-6">Our Story</h2>
            <p class="text-stone-500 leading-relaxed mb-4">
                MyBrand started in 2019 with a simple belief — that small businesses deserve world-class digital experiences, not just the big players.
            </p>
            <p class="text-stone-500 leading-relaxed mb-4">
                What began as a freelance operation quickly grew into a full-service studio, working with clients across retail, hospitality, and tech.
            </p>
            <p class="text-stone-500 leading-relaxed">
                Today we're a passionate team of designers, developers, and strategists — all obsessed with the details that make the difference.
            </p>
        </div>
    </div>
</section>

{{-- VALUES --}}
<section class="py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <span class="text-amber-500 text-sm uppercase tracking-widest font-medium">What drives us</span>
            <h2 class="text-4xl font-bold text-stone-900 mt-2">Our Values</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            @foreach([
                ['num' => '01', 'title' => 'Quality First', 'desc' => 'We never cut corners. Every pixel and every line of code is crafted with care.'],
                ['num' => '02', 'title' => 'Transparency', 'desc' => 'No surprises. We keep clients in the loop every step of the way.'],
                ['num' => '03', 'title' => 'Innovation', 'desc' => 'We stay ahead of trends so your product feels fresh and future-proof.'],
                ['num' => '04', 'title' => 'Partnership', 'desc' => 'We don\'t just work for you — we work with you. Your success is our success.'],
            ] as $value)
            <div class="flex gap-6 p-8 bg-white border border-stone-200 rounded-2xl hover:shadow-lg transition-all duration-300">
                <span class="text-4xl font-bold text-stone-200 shrink-0">{{ $value['num'] }}</span>
                <div>
                    <h3 class="text-lg font-bold text-stone-900 mb-2">{{ $value['title'] }}</h3>
                    <p class="text-stone-500 leading-relaxed">{{ $value['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- TEAM --}}
<section class="py-24 px-6 bg-stone-900">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <span class="text-amber-500 text-sm uppercase tracking-widest font-medium">The people</span>
            <h2 class="text-4xl font-bold text-white mt-2">Meet the Team</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['name' => 'Alex Rivera', 'role' => 'Founder & Designer', 'color' => 'from-amber-200 to-amber-100'],
                ['name' => 'Sam Torres', 'role' => 'Lead Developer', 'color' => 'from-stone-300 to-stone-200'],
                ['name' => 'Jamie Lee', 'role' => 'Strategy & Growth', 'color' => 'from-amber-300 to-stone-200'],
            ] as $member)
            <div class="text-center group">
                <div class="w-full h-64 bg-gradient-to-b {{ $member['color'] }} rounded-2xl mb-4 group-hover:-translate-y-1 transition-transform duration-300"></div>
                <h3 class="text-white font-bold text-lg">{{ $member['name'] }}</h3>
                <p class="text-stone-400 text-sm">{{ $member['role'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
