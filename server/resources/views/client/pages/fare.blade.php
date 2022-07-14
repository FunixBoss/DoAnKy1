@extends('client.master')
@section('title')
    <title>Keansburg Waterpark | Fare</title>
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
                                            <tr>
                                                <td>Kid  (Height less than 1m4)</td>
                                                <td>$10</td>
                                            </tr>
                                            <tr>
                                                <td>Student</td>
                                                <td>$15</td>
                                            </tr>
                                            <tr>
                                                <td>Adult</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Saturday, Sunday</td>
                                                <td>Increase 20%</td>
                                            </tr>
                                            <tr>
                                                <td> Consignment ticket	(Send Items)</td>
                                                <td>$2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">Buy Ticket Online</div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>
                                            <tr >
                                                <td colspan="12">Select A Day</td>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @php
                                                $date = date('y-m-d');
                                                $time = strtotime($date);
                                            @endphp
                                            
                                            
                                            @for ($i = 0; $i < 4; $i++)
                                                <tr class="row">
                                                    @for ($j = 0; $j < 4; $j++ )
                                                        <td class="col-3 ticket_date">{{date('D d-m', $time)}}</td>
                                                        @php
                                                            $time += 86400
                                                            
                                                        @endphp
                                                    @endfor
                                                </tr>
                                                    
                                            @endfor
                                            
                                                
                                            
                                        </tbody>
                                    
                                    </table>
                                    <!-- Table -->
                                    <table class="table table-striped widget_fare_buy-ticket">
                                        <thead>
                                            <tr >
                                                <td width="40%">Ticket Type</td>
                                                <td width="20%" class="number">Number</td>
                                                <td width="20%">Price</td>
                                                <td width="20%">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kid (Height less than 1m4)</td>
                                                <td class="ticket_number">
                                                    <span class="decrement" onclick="ticketCount(this, 'kid')"> - </span>
                                                    <input type="number" name="kid_ticket" id="kid" class="ticket_amount" value="0" min="0" max="100">
                                                    <span class="increment" onclick="ticketCount(this, 'kid')"> + </span>
                                                </td>
                                                <td>$10</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>Student</td>
                                                <td class="ticket_number">
                                                    <span class="decrement" onclick="ticketCount(this, 'student')"> - </span>
                                                    <input type="number" name="student_ticket" id="student" class="ticket_amount" value="0" min="0" max="100">
                                                    <span class="increment" onclick="ticketCount(this, 'student')"> + </span>
                                                </td>
                                                <td>$15</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>Adult</td>
                                                <td class="ticket_number">
                                                    <span class="decrement" onclick="ticketCount(this, 'adult')"> - </span>
                                                    <input type="number" name="adult_ticket" id="adult" class="ticket_amount" value="0" min="0" max="100">
                                                    <span class="increment" onclick="ticketCount(this, 'adult')"> + </span>
                                                </td>
                                                <td>$20</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">Total</td>
                                                <td>0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="wp_button button_fare">Buy Ticket Online</button>
                                </div>

                            </div>

                            <div class="overview">
                                <h3>You come to have fun at the Water Park.
                                </h3>
                                <p>Let's challenge 36 game devices to enjoy the wonderful sensations of each game. Not only bring you fun, games are also seen as challenges. Overcoming all 36 challenges of the game, you will be stronger when facing challenges in life.</p>
                                <p>If you go with children and the elderly can immerse themselves in the clear blue water of the activity lake, solar massage pool, wave pool and children's pool. The fountain square with powerful jets of water, the water jet massage area helps to stimulate resistance as well as restore bone and joint function… Children and the elderly can enjoy playing in this area.</p>
                                <p>And if you want to relax , can lie on the float, drop your soul into nature and watch the green arches and caves, then experience the Lazy River - Wild River.</p>
                                <p>Only 1 ticket, having fun all day at Dam Sen Water Park is not only one of the familiar entertainment centers of the city people but also a place to bring comfort and entertainment for children. children after months of intense study. Children's holidays will be more fun when they play with their parents with the family of Elephants, Hippos, ... where childhood paradise shimmers with colors full of slides dedicated to babies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    

@endsection
