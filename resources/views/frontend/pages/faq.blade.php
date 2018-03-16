@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')

<div class="container">
  <h2>Frequently Asked Questions (FAQ)</h2>
  <p></p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">How can I complain?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Group 6F aim to deliver the highest level of customer service, so if there’s a time where we’ve not met your needs, we would like to know about it and put it right. Please contact us so we can improve our service in the future.
If you would like to complain, please send us an email at: customerservices@group6f.co.uk.
As we sell tickets on behalf of the event organisers, we would need to communicate with them for more information before responding to a complaint. Our complaints process can take up to 14 days to resolve, however we aim to get them resolved as soon as possible. 
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">When will I receive my tickets?</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Purchased tickets are usually sent out within 7-14 days of purchase. Sometimes, tickets may be sent out later due to delays for many different reasons. 
If you haven’t received your days within 5 days of the event, please get in touch with our customer services team. This can be done by emailing to: customerservices@group6f.co.uk or calling: 0800 6666 666. 
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">What fees do I have to pay when purchasing a ticket on your website?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">When purchasing a ticket on the What’s On: Coventry events page, you will have to pay several different fees. This includes: administration fees and fulfilment fees (regardless of the number of tickets being purchased).
There may also be an extra facilities fee, but this is usually based on the event organisers. 
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">How can I pay for my tickets?</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">There are several ways to pay for your tickets. We currently accept: Visa, MasterCard, Visa Delta and Barclaycard American Express for online bookings. Unfortunately, we do not accept Maestro Online at the moment.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">What is a print at home ticket?</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">A print at home ticket allows you to print your purchased tickets at your own convenience before the event. This can be done in either black and white or in colour. All you have to do is bring along the printed ticket to the event and this saves you waiting for the tickets to be posted to you. 
You do not have to wait in box office queues with print at home tickets!
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Can I bring a push chair/buggy for my kid/s?</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Yes, you can bring a push chair for most events, generally all children events have facilities to store buggies. Some events do not permit children to attend, however this will be stated when purchasing the ticket.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Can I bring my own food/drink?</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">Most events do not allow food/drink to be brought from outside. This is due to safety purposes. There are plenty vendors and food stalls available on site. Some children events allow customers to bring their own food/drink.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Is there a schedule available for the event?</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">It is hard to schedule for an event, especially big ones. Sometimes, the event schedules are sent out to customers around 4-5 days before the event. 
Timings are subject to change at any time. 
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Is there a car park? How much is parking?</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">Most event locations have a car park; however, you should check this with the event organisers. Some events have free parking (usually children events).</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Can I change the name on a ticket?</a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">Unfortunately, we cannot change the name on a ticket. When arriving at an event, each person should have their own ticket with their name clearly printed on it. If not, you may be refused from attending the event.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">I am a wheelchair user? Are there facilities for me?</a>
        </h4>
      </div>
      <div id="collapse11" class="panel-collapse collapse">
        <div class="panel-body">There are usually facilities for wheelchair users in most venues. However, you must reserve a wheelchair space in advance of an event, as there could be double reservations. Please get in touch with the event organiser to reserve a wheelchair space. </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">Is there a cloakroom? Can I leave my coat/bag somewhere?</a>
        </h4>
      </div>
      <div id="collapse12" class="panel-collapse collapse">
        <div class="panel-body">Unfortunately, there isn’t a cloakroom for our events. You are permitted to take all belongings in with you.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">What time shall I arrive at the event?</a>
        </h4>
      </div>
      <div id="collapse13" class="panel-collapse collapse">
        <div class="panel-body">We recommend that customers arrive at the venue at least 25-30 minutes before the scheduled start time to avoid having to queue for long periods of time. Those arriving 15 minutes prior to the event are likely to get a good seat. However, this is not guaranteed at all venues. Doors usually open around 30 minutes before the advertised start time.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">Can I save a seat for a friend?</a>
        </h4>
      </div>
      <div id="collapse14" class="panel-collapse collapse">
        <div class="panel-body">Entry to most of our events are based on a first come first serve basis. Unless you have a seat reservation, you are not permitted to save seats for a friend.</div>
      </div>
    </div>
  </div> 
</div>
@endsection