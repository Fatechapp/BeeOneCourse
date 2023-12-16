document.addEventListener("DOMContentLoaded", function () {
    const dashboardLink = document.getElementById("Dashboard")
    const classroomLink = document.getElementById("Classroom")
    const financeLink = document.getElementById("Finance")
    const logBookLink = document.getElementById("Logbook")

    const dashboardContent = document.querySelector(".dashboard-content")
    const classroomContent = document.querySelector(".classroom-content")
    const financeContent = document.querySelector(".finance-content")
    const logbookContent = document.querySelector(".log-book-content")

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

    // SCHEDULE
    const scheduleLink = document.getElementById("Schedule")
    const scheduleContent = document.querySelector(".schedule-content")

    scheduleLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.setAttribute("hidden", "")
        classroomContent.setAttribute("hidden", "")
        scheduleContent.removeAttribute("hidden")
    })
})