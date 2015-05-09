@extends('layout.master')
@section('title',             'TITLE')
@section('description',       'DESCRIPTION')

@section('gplus-title',       '')
@section('gplus-image',       '')
@section('gplus-description', '')

@section('og-type',           '')
@section('og-title',          '')
@section('og-image',          '')
@section('og-sitename',       '')
@section('og-description',    '')

@section('t-url',             '')
@section('t-title',           '')
@section('t-image',           '')
@section('t-description',     '')

@section('content')
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
