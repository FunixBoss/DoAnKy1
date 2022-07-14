function ticketCount (btn, type, ticketPrice) {
    // 
    var input = $('#' + type)
    var inputValue = parseInt(input.val())
    if(inputValue >= 0 && inputValue <100){
        inputValue = (btn.getAttribute("class") == 'increment') ? inputValue+=1 :   inputValue-=1;
        inputValue = (inputValue==-1) ? inputValue=0 : inputValue;
    }
    input.val(inputValue)

    // Total One Ticket Value
    var total = $('#total_' + type);
    var totalValue = inputValue * ticketPrice;


    total.text('$' + totalValue)


    totalAllTicket()
    return inputValue, totalValue;
}

input = $("input[type=number]")
input.change(()=>{
    if(input.val() == ''){
        input.val(0)
    }
})

function totalAllTicket(){
    var totalAll = 0;
    var tickets_price_arr = $('.total')
    for(i=0; i < tickets_price_arr.length;i++){
        totalAll += parseInt(tickets_price_arr[i].innerHTML.replace('$', ''))
    }

    var totalAllOutput = $('#total_all')
    totalAllOutput.text('$' + totalAll)


    return totalAll

}


// active choosing day
let dateValue = '';
function chooseDay(){
    $('.ticket_date').click((e)=>{
        $('.ticket_date').removeClass("active");
        dateValue = e.target.innerHTML;
        $(e.target).addClass("active");
        console.log(dateValue)

        $('.d-none').removeClass('d-none')
    })
}
chooseDay()








