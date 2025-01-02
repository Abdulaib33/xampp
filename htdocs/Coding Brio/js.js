// to select all buttons
const buttons = document.querySelectorAll('button')

// to select class display
const display = document.querySelector(".display")

// add eventListener to each button
buttons.forEach(function(button) {
    button.addEventListener("click", calculate)
})


//calculate function
function calculate(event) {
    const clickButtonValue = event.target.value

    if (clickButtonValue === "=") {
        if (display.value != "") {
            display.value = eval(display.value)
        }
    } else if (clickButtonValue === "c") {
        display.value = ""
    } else {
        display.value += clickButtonValue
    }
}