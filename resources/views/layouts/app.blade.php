<!-- resources/views/layouts/app.blade.php -->
@section('title', __('Login'))

@include('layouts.templates.head')

<body class="app">

  @include('includes.partials.read-only')
  @include('includes.partials.logged-in-as')
  @include('includes.partials.announcements')

  <div id="app">
    @include('frontend.includes.nav')
    @include('includes.partials.messages')

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
