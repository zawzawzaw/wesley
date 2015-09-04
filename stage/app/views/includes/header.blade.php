<div class="container">
  <div class="row">
    <div class="col-md-12">

      <a href="{{ URL::to('/') }}" class="logo middle"><h1>Specktrm</h1></a>
    
      @if(Auth::check())
        {{ Form::open(array('url'=>'search/result', 'class'=>'form-list')) }}
          <div class="search-input">            
            {{ Form::text('text_search', Input::get('text_search', null), array('class'=>'text-search input-box','id'=>'text_search','placeholder'=>'Packaging material')); }}
            {{ Form::button('', array('type'=>'submit','value'=>'text','name'=>'form_type','id'=>'form-submit','class'=>'btn btn-large')) }}
            
            <div class="search-filters">
              <div class="each-filters">  
                <?php $text_search_filter =  Input::get('text_search_filter', 'company_name'); ?>
                {{ Form::radio('text_search_filter', 'company_name', ($text_search_filter == 'company_name')) }}                          
                <label for="plan"><span></span><p>Company Name</p></label>
              </div>
              <div class="each-filters">
                {{ Form::radio('text_search_filter', 'product', ($text_search_filter == 'product')) }}
                <label for="plan"><span></span><p>Product</p></label>
              </div>
              <div class="each-filters">
                {{ Form::radio('text_search_filter', 'tags', ($text_search_filter == 'tags')) }}
                <label for="plan"><span></span><p>Tags</p></label>
              </div>            
            </div>
          </div>
        {{ Form::close() }}

        <nav class="logged-in-menu">
          <ul>
            <li class="search"><a href="{{ URL::to('mysearch') }}">My Search</a></li>
            <li class="list"><a href="{{ URL::to('list') }}">Listings</a></li>
            <li class="messages"><a href="{{ URL::to('message') }}">Messages</a></li>
            <li class="account"><a href="{{ URL::to('myaccount') }}">Account</a></li>
            <li class="country"><a href="{{ URL::to('myaccount') }}">Country</a></li>          
          </ul>
        </nav>
      @else
        <nav class="main-menu">
          <ul>
            <li><a href="{{ URL::to('tour') }}">Tour</a></li>
            <li><a href="{{ URL::to('pricing') }}">Pricing</a></li>
            <li><a href="{{ URL::to('advertise') }}">Advertise</a></li>
            <li><a href="{{ URL::to('contact') }}">Contact</a></li>
            <li><a href="{{ URL::to('faq') }}">FAQ</a></li>          
          </ul>
        </nav>

        <ul class="login-ctas pull-right">
          <li><a href="{{ route('login.index') }}">LOG IN</a></li>
          <li><a href="{{ route('sign-up.index') }}" class="active">SIGN UP</a></li>
        </ul>
      @endif

    </div>
  </div>
</div>