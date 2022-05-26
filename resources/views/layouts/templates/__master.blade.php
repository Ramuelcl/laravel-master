<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ appName() }} | @yield('title')</title>
  <meta name="description" content="@yield('meta_description', appName())">
  <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
  @yield('meta')

  @stack('before-styles')
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
  <livewire:styles />
  @stack('after-styles')
</head>

<body>
  @include('includes.partials.read-only')
  @include('includes.partials.logged-in-as')
  @include('includes.partials.announcements')

  <div id="app">

    {{-- // seccion --}}
    @section('navigation')
      {{-- @hasSection('navigation')
            <div class="pull-right">
                @yield('navigation')
            </div>

            <div class="clearfix"></div>
        @endif --}}
      @include('frontend.includes.nav')
    @endsection
    @sectionMissing('navigation')
      <div class="pull-right">
        {{-- @include('default-navigation') --}}
        @include('frontend.includes.nav')
      </div>
    @endif
    {{-- // fin seccion --}}

    // incluir cuando ...
    {{-- @include('includes.partials.messages') --}}
    @includeWhen(true, 'includes.partials.messages', ['status' => 'complete'])
    {{-- // fin incluir cuando ... --}}
    {{-- // --}}
    {{-- // incluir al menos ... --}}
    @php
      // true si está autenticado y es usuario 'admin'
      $boolean = Auth::check('admin');
      // true si está autenticado
      $boolean = Auth::check();
    @endphp
    @includeUnless($boolean, 'includes.partials.messages', ['status' => 'complete'])
    {{-- // fin incluir al menos ... --}}

    {{-- // --}}
    {{-- // usuario autenticado o visita --}}
    @auth
      {{-- o @auth('admin') --}}
      {{-- // The user is authenticated... --}}
    @endauth

    @guest
      {{-- // The user is not authenticated... --}}
    @endguest
    {{-- // usuario autenticado o visita --}}

    <main>
      @yield('content')
    </main>
  </div>
  <!--app-->

  @stack('before-scripts')
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script src="{{ mix('js/frontend.js') }}"></script>
  <livewire:scripts />
  @stack('after-scripts')
</body>

</html>
