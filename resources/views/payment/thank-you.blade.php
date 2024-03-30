@include('header')
<header class="site-header" id="header">
    <p class="main-content__body" data-lead-id="main-content-body">
      Your order with ID {{$order_id}}  has been successfully placed. You will receive an order confirmation shortly.
  </p>
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
        <i class="fa fa-check main-content__checkmark" aria-hidden="true"></i>
		<p class="main-content__body" data-lead-id="main-content-body">We'll get started on your order right away. You should be receiving an order confirmation email shortly. If you have any question call us at <a href="tel: 00000000000">00000000000.</a> </p>
	</div>

@include('footer')