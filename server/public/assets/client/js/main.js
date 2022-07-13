
function ticketCount (btn, type) {
    var input = $('#' + type)
    var inputValue = parseInt(input.val())
    if(inputValue >= 0 && inputValue <100){
        inputValue = (btn.getAttribute("class") == 'increment') ? inputValue+=1 :   inputValue-=1;
        inputValue = (inputValue==-1) ? inputValue=0 : inputValue;

    }
    console.log(inputValue)

    input.val(inputValue)
    return inputValue
}
