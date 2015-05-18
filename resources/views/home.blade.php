@extends('layout.master')
@section('title',             'Personal Radio by AUPEO!&reg;')
@section('description',       'Personal Radio by AUPEO!&reg; provides you with music and other audio content (in the US only) which reflects your tastes and interests on your smartphone, connected devices and in select vehicles')

@section('gplus-title',       'Personal Radio by AUPEO!&reg;')
@section('gplus-image',       '/assets/images/logo.svg')
@section('gplus-description', 'Personal Radio by AUPEO!&reg; provides you with music and other audio content (in the US only) which reflects your tastes and interests on your smartphone, connected devices and in select vehicles')

@section('og-type',           'website')
@section('og-title',          'Personal Radio by AUPEO!&reg;')
@section('og-image',          '/assets/images/logo.svg')
@section('og-sitename',       'Personal Radio by AUPEO!&reg; Premium Trial')
@section('og-description',    'Personal Radio by AUPEO!&reg; provides you with music and other audio content (in the US only) which reflects your tastes and interests on your smartphone, connected devices and in select vehicles')

@section('t-url',             'http://aupeopremiumtrial.com')
@section('t-title',           'Personal Radio by AUPEO!&reg;')
@section('t-image',           '/assets/images/logo.svg')
@section('t-description',     'Personal Radio by AUPEO!&reg; provides you with music and other audio content (in the US only) which reflects your tastes and interests on your smartphone, connected devices and in select vehicles')

@section('content')
   @if (Session::has('downloadSuccess'))
      <h1 class="message--success"><br>{{Session::get('downloadSuccess')}}<br></h1>
   @endif
   <div class="container">
      <header class="masthead">
         @include("fragments.masthead")
      </header>
      <section class="downloads">
         @include("fragments.downloads")
      </section>
      <section class="benefits">
         @include("fragments.benefits")
      </section>
      <section class="signup">
         @include("fragments.signup")
      </section>
      <footer>
         @include("fragments.footer")
      </footer>
   </div>
@stop
