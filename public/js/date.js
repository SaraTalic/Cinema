function getNextThursday() {
    var today = new Date();
    var daysUntilThursday = (4 - today.getDay() + 7) % 7; // Calculate days until next Thursday
    var nextThursday = new Date(today);
    nextThursday.setDate(today.getDate() + daysUntilThursday);
    return nextThursday;
}

window.onload = function() {
    var today = new Date();
    var nextThursday = getNextThursday();

    var dateInput = document.getElementById("dateInput");
    dateInput.min = today.toISOString().split("T")[0];
    dateInput.max = nextThursday.toISOString().split("T")[0];
};