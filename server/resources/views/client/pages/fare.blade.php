@extends('client.master')
@section('title')
    <title>Keansburg Water Park | Fare</title>
@endsection

@section('main_content')
    @extends('client.components.breadcrumb')
    @section('breadcrumb')
        Fare
    @endsection

<!-- event single page start -->
<div class="wp_event_single_wrapper wp_top_padder100 wp_bottom_padder100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wp_bottom_padder50">
                <div class="widget_area">
                    <div class="widget widget_fare">
                        <div class="panel panel-info">
                            <div class="panel-heading">Actitvies</div>
                            <div class="panel-body">
                                <!-- Table -->
                                <table class="table table-striped widget_fare_activity">
                                    <thead>
                                        <td>Opening Hours</td>
                                        <td class="warning">Stop Selling Tickets: 16h30</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Monday - Saturday</td>
                                            <td>8:30 - 18:00</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday</td>
                                            <td>8:00 - 18:30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">Keansburg Water Park Ticket Price</div>
                            <div class="panel-body">
                                <!-- Table -->
                                <table class="table table-striped widget_fare_price">
                                    <thead>
                                        <td>Type</td>
                                        <td>Fare</td>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)
                                            <tr>
                                                <td>{{ ucfirst($ticket->ticket_name) }}
                                                    @if (!$ticket->ticket_description == '')
                                                        ({{ $ticket->ticket_description }})
                                                </td>
                                            @else
                                                {{ $ticket->ticket_description }}</td>
                                        @endif
                                        <td>${{ $ticket->ticket_price }}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td>Saturday, Sunday</td>
                                            <td>Increase 20%</td>
                                        </tr>
                                        <tr>
                                            <td> Consignment ticket (Send Items)</td>
                                            <td>$2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">Buy Ticket Online</div>
                            @if (!Auth::check())
                                <div class="panel-body">
                                    <div class="row check_auth_buy">
                                        <div class="col-12">
                                            You Have To Login To Buy Tickets Online
                                        </div>
                                        <div class="col-12 authen">
                                            <a href="/login">Login</a><br/>
                                            <a href="/register">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <div class="panel-body">
                                <table class="table">
                                    <div class="row days">
                                        Select A Day
                                    </div>
                                    <tbody>
                                        @php
                                            $date = date('y-m-d');
                                            $time = strtotime($date);
                                            $numberOfDaysForShow = 16;
                                        @endphp
                                        <div class="row days">
                                            @for ($j = 0; $j < $numberOfDaysForShow; $j++)
                                                <div 
                                                class="col-xs-6 col-md-3 p-3 ticket_date {{ (date('m-d-y') == date('m-d-y', $time)) ? 'today' : '' }}"
                                                >
                                                {{ date('l', $time) }}
                                                    <br />{{ date('d-m', $time) }}</div>
                                                @php
                                                    $time += 86400;
                                                @endphp
                                            @endfor
                                        </div>
                                    </tbody>
                                </table>
                                <!-- Table -->
                                <table class="table table-striped widget_fare_buy-ticket d-none">
                                    <thead>
                                        <tr>
                                            <td width="40%">Ticket Type</td>
                                            <td width="30%">Price</td>
                                            <td width="30%">Buy</td>
                                        </tr>
                                    </thead>
                                    <tbody id="ajax_price">
                                        
                                        
                                    </tbody>

                                </table>
                                <div class="see_cart">
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="overview">
                            <h3>You come to have fun at the Water Park.
                            </h3>
                            <p>Let's challenge 36 game devices to enjoy the wonderful sensations of each game. Not only
                                bring you fun, games are also seen as challenges. Overcoming all 36 challenges of the
                                game, you will be stronger when facing challenges in life.</p>
                            <p>If you go with children and the elderly can immerse themselves in the clear blue water of
                                the activity lake, solar massage pool, wave pool and children's pool. The fountain
                                square with powerful jets of water, the water jet massage area helps to stimulate
                                resistance as well as restore bone and joint function… Children and the elderly can
                                enjoy playing in this area.</p>
                            <p>And if you want to relax , can lie on the float, drop your soul into nature and watch the
                                green arches and caves, then experience the Lazy River - Wild River.</p>
                            <p>Only 1 ticket, having fun all day at Dam Sen Water Park is not only one of the familiar
                                entertainment centers of the city people but also a place to bring comfort and
                                entertainment for children. children after months of intense study. Children's holidays
                                will be more fun when they play with their parents with the family of Elephants, Hippos,
                                ... where childhood paradise shimmers with colors full of slides dedicated to babies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    // active choosing day
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    let dateValue = '';
    function chooseDay() {
        $('.ticket_date').click((e) => {
            $('.ticket_date').removeClass("active");
            $(e.target).addClass("active");

            dateValue = e.target.outerText.split("\n");
            var day=  dateValue[1]
            dateValue = JSON.stringify(dateValue);

            var url = "{{ route('getDataForAjax', ':days') }}";
            url = url.replace(':days', dateValue);

            setTimeout(() => {
                $('.d-none').removeClass('d-none');
                
            }, 300);
            $.ajax({
                type: "GET",
                url: url,
                dataType: "html",
                success: function(response) {
                    response = JSON.parse(response);
                    console.log(response.data)
                    html = "";
                    (response.data).forEach(data => {
                        var urlAddToCart =  "{{route('addToCart', '')}}" + "/" + data.ticket_id + "/" + day;

                        html += 
                        `
                            <tr>
                                <td>${capitalizeFirstLetter(data.ticket_name)} ${addBraceIfExistContent(data.ticket_description)} </td>
                                <td>$${data.ticket_price}</td>
                                <td>
                                    <a href="${urlAddToCart}"> Buy </a>
                                </td>
                            </tr>
                        `
                    });

                    cartContent = `
                        <a href="/cart" class="wp_button button_fare">Cart <span class="d-none"></span></a>
                    `

                    $('.see_cart').html(cartContent)

                    $('.button_fare span').html(0)
                    $('#ajax_price').empty().append(html);
                    // checkInputNumber()
                }
            });
            

            

        })
    }

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
    function addBraceIfExistContent(string){
        if(string){
            return ' (' + string + ')';
        } else {
            return '';
        }
    }
    // function checkInputNumber(){
    //     input = $("input[type=number]")
    //     input.change((e)=>{
    //         // check delete input
    //         (!e.target.value) ? e.target.value = 0 : '';
    //         // check max & min
    //         (e.target.value > 100) ? e.target.value = 100 : '';
    //         (e.target.value < 0) ? e.target.value = 0 : '';
    //     })
    // }
    // var CountAllTicket = 0;w
    chooseDay()
    // function totalAllTicket(){
    //     var totalAll = 0;
    //     var tickets_price_arr = $('.total')
    //     for(i=0; i < tickets_price_arr.length;i++){
    //         totalAll += parseInt(tickets_price_arr[i].innerHTML.replace('$', ''))
    //     }

    //     var totalAllOutput = $('#total_all')
    //     totalAllOutput.text('$' + totalAll)


    //     return totalAll

    // }
    // function ticketCount (btn, type, ticketPrice) {
    //     // 
    //     var input = $('#' + type)
    //     var inputValue = parseInt(input.val())
    //     if(inputValue >= 0 && inputValue <100){
    //         if(btn.getAttribute("class") == 'increment'){
    //             inputValue += 1;
    //             CountAllTicket+=1;
    //         } else{
    //             inputValue -=1;
    //             CountAllTicket -=1;
    //         }
    //         inputValue = (inputValue==-1) ? inputValue=0 : inputValue;
    //     }
    //     $('.button_fare span').html(CountAllTicket)
    //     input.val(inputValue)

    //     // Total One Ticket Value
    //     var total = $('#total_' + type);
    //     var totalValue = inputValue * ticketPrice;
    //     total.text('$' + totalValue)
    //     totalAllTicket()
    //     return inputValue;
    // }

</script>
@endsection
