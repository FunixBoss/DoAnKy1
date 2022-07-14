
function ticketCount (btn, type) {
    var input = $('#' + type)
    var inputValue = parseInt(input.val())
    if(inputValue >= 0 && inputValue <100){
        inputValue = (btn.getAttribute("class") == 'increment') ? inputValue+=1 :   inputValue-=1;
        inputValue = (inputValue==-1) ? inputValue=0 : inputValue;
    }
    input.val(inputValue)
    return inputValue
}

input = $("input[type=number]")
input.change(()=>{
    if(input.val() == ''){
        input.val(0)
    }
})

// active choosing day
function chooseDay(){
    $('.ticket_date').click((e)=>{
        console.log(e.target)
    })
}

chooseDay()





