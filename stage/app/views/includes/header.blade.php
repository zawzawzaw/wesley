<div class="container">
  <div class="row">
    <div class="col-md-12">     
    
      @if(Auth::check())
      <div class="pull-left">

        <a href="{{ URL::to('/') }}" class="logo middle"><h1>Specktrm</h1></a>
        {{ Form::open(array('url'=>'search/result', 'class'=>'form-list')) }}
          <div class="search-input">            
            {{ Form::text('text_search', Input::get('text_search', null), array('class'=>'text-search input-box','id'=>'text_search','placeholder'=>'Sumitomo Corporation')); }}
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

      </div>

      <div class="pull-right">

        <nav class="logged-in-menu">
          <ul>
            <li><a class="search" href="{{ URL::to('mysearch') }}">My Search</a></li>
            <li><a class="list" href="{{ URL::to('list') }}">My Listing</a></li>
            <li><a class="messages" href="{{ URL::to('message') }}">Messages</a></li>
            <li class="parent-menu">
              <a class="account" href="{{ URL::to('myaccount') }}">Account</a>
              <ul class="sub-menu">
                {{-- <li><a href="#">Log out</a></li> --}}
                {{ Form::open(array('route' => array('login.destroy', Auth::user()->id), 'method' => 'delete')) }}
                  <li><a href="javascript:void(0);" class="logout-btn">Log out</a></li>                  
                {{ Form::close() }}
              </ul>
            </li>
            <li><a class="country {{ Auth::user()->country }}" href="{{ URL::to('myaccount') }}">Country</a></li>          
          </ul>
        </nav>

      </div>
      @else
      <div class="pull-left">
      <a href="{{ URL::to('/') }}" class="logo middle"><h1>Specktrm</h1></a>
      </div>

        <div class="pull-right">
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
        </div>
      @endif

    </div>
  </div>
</div>
<script>
  $(document).ready(function(){
    $('.logout-btn').on('click', function(e){
      e.preventDefault();
      $(this).parent().parent('form').submit();
    });

    $('input[name="text_search_filter"]').on('change', function(e){
      var search_in = $(this).val()
      if(search_in=='tags') {
        $('#text_search').attr('placeholder', 'Lubricants');
      }else if(search_in=='product') {
        $('#text_search').attr('placeholder', 'Steel Beams');
      }else {
        $('#text_search').attr('placeholder', 'Sumitomo Corporation');
      }

    });
  });
</script>