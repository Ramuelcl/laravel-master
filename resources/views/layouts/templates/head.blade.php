<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.sistema', '-Sistema-') }}</title>

  <meta name="description" content="{{ config('app.meta_description', ':(') }}">
  <meta name="author" content="{{ config('app.autor', 'Ramuel\'s') . ' - 0' }}">
  @yield('meta')

  @stack('before-styles')
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
  <link href="{{ mix('css/backend.css') }}" rel="stylesheet">
  <livewire:styles />
  @stack('after-styles')
</head>
