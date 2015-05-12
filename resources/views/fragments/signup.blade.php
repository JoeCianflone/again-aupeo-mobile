<h1 class="signup__header">Access all premium features with this <span class="text__accent">FREE</span>, 30-day trial!</h1>
<h2 class="signup__subheader">Premium Features Include:</h2>
<ul class="signup__list">
   <li><span class="signup__list--item">No advertisements</span></li>
   <li><span class="signup__list--item">CarMode included</span></li>
   <li><span class="signup__list--item">Up to 50 skips per day</span></li>
   <li><span class="signup__list--item">Higher audio sound quality</span></li>
</ul>

{!! Form::open(['route' => 'signup-create', 'method' => 'post', 'class' => 'signup__form js-signup-form']) !!}
   <div class="signup__form--wrapper">
      <p>
         {!! Form::text('name', '',['class' => 'js-signup-name required', 'placeholder' => 'Your Name']) !!}
      </p>
      <p>
         {!! Form::text('email', '',['class' => 'js-signup-email required email', 'placeholder' => 'Your Email Address']) !!}
      </p>
      <p>
          <label class="input__checkbox">{!! Form::checkbox('newsletter_optin', 'optin', true, ['class' => 'js-signup-optin']) !!} Yes, sign me up for the enewsletter!</label>
      </p>
      <button type="submit" class="js-signup-button input__button">Start My Premium Trial</button>
   </div>
{!! Form::close() !!}
