@extends('layout')
@section('title', 'Contact')

@section('content')

{{-- HERO --}}
<section class="pt-36 pb-20 px-6">
    <div class="max-w-6xl mx-auto">
        <span class="text-amber-500 text-sm uppercase tracking-widest font-medium">Get in touch</span>
        <h1 class="text-6xl font-bold text-stone-900 mt-3 mb-6 max-w-xl leading-tight">
            Let's start a <span class="text-amber-500">conversation.</span>
        </h1>
        <p class="text-lg text-stone-500 max-w-md leading-relaxed">
            Have a project in mind? We'd love to hear about it. Drop us a message and we'll get back to you within 24 hours.
        </p>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section class="py-10 pb-24 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16">

        {{-- FORM --}}
        <div class="bg-white border border-stone-200 rounded-3xl p-10">
            <h2 class="text-2xl font-bold text-stone-900 mb-8">Send a message</h2>
            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div class="grid md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-medium text-stone-700 mb-2">First name</label>
                        <input type="text" name="first_name" placeholder="Juan"
                            class="w-full border border-stone-200 rounded-xl px-4 py-3 text-stone-800 placeholder-stone-400 focus:outline-none focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-stone-700 mb-2">Last name</label>
                        <input type="text" name="last_name" placeholder="Dela Cruz"
                            class="w-full border border-stone-200 rounded-xl px-4 py-3 text-stone-800 placeholder-stone-400 focus:outline-none focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-stone-700 mb-2">Email address</label>
                    <input type="email" name="email" placeholder="juan@example.com"
                        class="w-full border border-stone-200 rounded-xl px-4 py-3 text-stone-800 placeholder-stone-400 focus:outline-none focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all">
                </div>
                <div>
                    <label class="block text-sm font-medium text-stone-700 mb-2">Subject</label>
                    <input type="text" name="subject" placeholder="Project inquiry"
                        class="w-full border border-stone-200 rounded-xl px-4 py-3 text-stone-800 placeholder-stone-400 focus:outline-none focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all">
                </div>
                <div>
                    <label class="block text-sm font-medium text-stone-700 mb-2">Message</label>
                    <textarea name="message" rows="5" placeholder="Tell us about your project..."
                        class="w-full border border-stone-200 rounded-xl px-4 py-3 text-stone-800 placeholder-stone-400 focus:outline-none focus:border-amber-400 focus:ring-2 focus:ring-amber-100 transition-all resize-none"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-stone-900 text-white py-4 rounded-xl font-medium hover:bg-amber-500 transition-colors duration-300">
                    Send message →
                </button>
            </form>
        </div>

        {{-- CONTACT INFO --}}
        <div class="flex flex-col justify-between gap-8">
            <div>
                <h2 class="text-2xl font-bold text-stone-900 mb-8">Contact information</h2>
                <div class="space-y-6">
                    @foreach([
                        ['icon' => '📍', 'label' => 'Address', 'value' => 'Cebu City, Philippines'],
                        ['icon' => '📧', 'label' => 'Email', 'value' => 'hello@mybrand.com'],
                        ['icon' => '📞', 'label' => 'Phone', 'value' => '+63 912 345 6789'],
                        ['icon' => '🕐', 'label' => 'Hours', 'value' => 'Mon–Fri, 9am–6pm PHT'],
                    ] as $info)
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-amber-50 border border-amber-100 rounded-xl flex items-center justify-center text-xl shrink-0">
                            {{ $info['icon'] }}
                        </div>
                        <div>
                            <p class="text-xs font-medium text-stone-400 uppercase tracking-widest mb-1">{{ $info['label'] }}</p>
                            <p class="text-stone-800 font-medium">{{ $info['value'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- MAP PLACEHOLDER --}}
            <div class="bg-gradient-to-br from-stone-100 to-amber-50 rounded-3xl h-64 flex items-center justify-center border border-stone-200">
                <div class="text-center">
                    <p class="text-4xl mb-2">📍</p>
                    <p class="text-stone-500 text-sm">Cebu City, Philippines</p>
                </div>
            </div>

            {{-- SOCIAL --}}
            <div>
                <p class="text-sm font-medium text-stone-500 mb-4 uppercase tracking-widest">Follow us</p>
                <div class="flex gap-3">
                    @foreach(['Twitter', 'Instagram', 'LinkedIn', 'GitHub'] as $social)
                    <a href="#" class="px-4 py-2 bg-stone-100 text-stone-600 rounded-full text-sm font-medium hover:bg-stone-900 hover:text-white transition-all duration-300">
                        {{ $social }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
