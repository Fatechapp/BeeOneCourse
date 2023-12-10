document.addEventListener("DOMContentLoaded", function () {
    var dashboardLink = document.getElementById("Dashboard")
    var classroomLink = document.getElementById("Classroom")
    var financeLink = document.getElementById("Finance")
    var logBookLink = document.getElementById("Logbook")

    var dashboardContent = document.querySelector(".dashboard-content")
    var classroomContent = document.querySelector(".classroom-content")
    var financeContent = document.querySelector(".finance-content")
    var logbookContent = document.querySelector(".log-book-content")

    // DASHBOARD
    dashboardLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.removeAttribute("hidden")
        classroomContent.setAttribute("hidden", "")
        financeContent.setAttribute("hidden", "")
        logbookContent.setAttribute("hidden", "")
    })

    //CLASSROOM
    classroomLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.setAttribute("hidden", "")
        classroomContent.removeAttribute("hidden")
        financeContent.setAttribute("hidden", "")
        logbookContent.setAttribute("hidden", "")
    })

    //FINANCE
    financeLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.setAttribute("hidden", "")
        classroomContent.setAttribute("hidden", "")
        financeContent.removeAttribute("hidden")
        logbookContent.setAttribute("hidden", "")
    })

    //LOGBOOK
    logBookLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.setAttribute("hidden", "")
        classroomContent.setAttribute("hidden", "")
        financeContent.setAttribute("hidden", "")
        logbookContent.removeAttribute("hidden")
    })
})