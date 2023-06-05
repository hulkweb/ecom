@component('mail::message')
Hello Sir, <br>
<h1 style="text-align: center;padding:10px">Order Updated to {{$order->status}}</h1>
<p>Track your Order</p>
@component('mail::button', ['url' => "$website_url/order/view/$order->order_id"])
Track
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
