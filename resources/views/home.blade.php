@extends('layout')
@section('title', 'Home')

@section('content')

{{-- HERO --}}
<section class="min-h-screen flex items-center justify-center px-6 pt-24">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
        <div>
            <span class="inline-block bg-amber-100 text-amber-700 text-xs font-medium tracking-widest uppercase px-4 py-1.5 rounded-full mb-6">Welcome to MyBrand</span>
            <h1 class="text-6xl md:text-7xl font-bold text-stone-900 leading-tight mb-6">
                We build things that <span class="text-amber-500">matter.</span>
            </h1>
            <p class="text-lg text-stone-500 leading-relaxed mb-10 max-w-md">
                A modern studio crafting digital experiences with purpose, precision, and a whole lot of passion.
            </p>
            <div class="flex gap-4">
                <a href="{{ route('about') }}" class="bg-stone-900 text-white px-8 py-3.5 rounded-full font-medium hover:bg-amber-500 transition-all duration-300">
                    Learn more
                </a>
                <a href="{{ route('contact') }}" class="border border-stone-300 text-stone-700 px-8 py-3.5 rounded-full font-medium hover:border-stone-900 transition-all duration-300">
                    Contact us
                </a>
            </div>
        </div>
        <div class="relative hidden md:block">
            <div class="w-full h-[500px] bg-gradient-to-br from-amber-100 via-stone-200 to-stone-300 rounded-3xl"></div>
            <div class="absolute -bottom-6 -left-6 w-48 h-48 bg-amber-400 rounded-2xl -z-10"></div>
            <div class="absolute -top-6 -right-6 w-32 h-32 bg-stone-900 rounded-2xl -z-10"></div>
        </div>
    </div>
</section>

{{-- STATS --}}
<section class="py-20 bg-stone-900 mt-20">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-10 text-center">
        <div>
            <p class="text-5xl font-bold text-amber-400 mb-2">5+</p>
            <p class="text-stone-400 text-sm uppercase tracking-widest">Years Experience</p>
        </div>
        <div>
            <p class="text-5xl font-bold text-amber-400 mb-2">120+</p>
            <p class="text-stone-400 text-sm uppercase tracking-widest">Projects Done</p>
        </div>
        <div>
            <p class="text-5xl font-bold text-amber-400 mb-2">98%</p>
            <p class="text-stone-400 text-sm uppercase tracking-widest">Happy Clients</p>
        </div>
        <div>
            <p class="text-5xl font-bold text-amber-400 mb-2">24/7</p>
            <p class="text-stone-400 text-sm uppercase tracking-widest">Support</p>
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <span class="text-amber-500 text-sm uppercase tracking-widest font-medium">What we do</span>
            <h2 class="text-4xl font-bold text-stone-900 mt-2">Our Services</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['icon' => '✦', 'title' => 'Web Design', 'desc' => 'Beautiful, responsive websites that leave a lasting impression on your visitors.'],
                ['icon' => '◈', 'title' => 'Development', 'desc' => 'Clean, scalable code built with modern technologies and best practices.'],
                ['icon' => '◎', 'title' => 'Strategy', 'desc' => 'Data-driven strategies to grow your brand and reach your target audience.'],
            ] as $service)
            <div class="bg-white border border-stone-200 rounded-2xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <span class="text-3xl text-amber-500 block mb-4">{{ $service['icon'] }}</span>
                <h3 class="text-xl font-bold text-stone-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-stone-500 leading-relaxed">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 px-6">
    <div class="max-w-4xl mx-auto bg-stone-900 rounded-3xl p-16 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-amber-500/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <h2 class="text-4xl font-bold text-white mb-4 relative">Ready to start a project?</h2>
        <p class="text-stone-400 mb-8 relative">Let's build something amazing together.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-amber-500 text-white px-10 py-4 rounded-full font-medium hover:bg-amber-400 transition-colors relative">
            Get in touch →
        </a>
    </div>
</section>

@endsection
