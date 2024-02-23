function confirmReset() {
    if (confirm('Are you sure to reset this......')) {
        document.getElementById("inputOne").value = " ";
        document.getElementById("inputTwo").value = " ";
        document.getElementById("result").value = "0";
    }
}

function add()
{
    var num1 = Number(document.getElementById("inputOne").value);
    var num2 = Number(document.getElementById("inputTwo").value);
    var sum = num1 + num2;
    document.getElementById("result").value = sum;

}
function sub()
{
    var num1 = Number(document.getElementById("inputOne").value);
    var num2 = Number(document.getElementById("inputTwo").value);
    var sum = num1 - num2;
    document.getElementById("result").value = sum;
}

function mul()
{
    var num1 = Number(document.getElementById("inputOne").value);
    var num2 = Number(document.getElementById("inputTwo").value);
    var sum = num1 * num2;
    document.getElementById("result").value = sum;
}

function div()
{
    var num1 = Number(document.getElementById("inputOne").value);
    var num2 = Number(document.getElementById("inputTwo").value);
    var sum = num1 / num2;
    document.getElementById("result").value = sum;
}
