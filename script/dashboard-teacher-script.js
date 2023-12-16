document.addEventListener("DOMContentLoaded", function () {
    const dashboardLink = document.getElementById("Dashboard")
    const classroomLink = document.getElementById("Classroom")
    const scheduleLink = document.getElementById("Schedule")

    const dashboardContent = document.querySelector(".dashboard-content")
    const classroomContent = document.querySelector(".classroom-content")
    const scheduleContent = document.querySelector(".schedule-content")

    // DASHBOARD
    dashboardLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.removeAttribute("hidden")
        classroomContent.setAttribute("hidden", "")
        scheduleContent.setAttribute("hidden", "")
    })

    //CLASSROOM
    classroomLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.setAttribute("hidden", "")
        classroomContent.removeAttribute("hidden")
        scheduleContent.setAttribute("hidden", "")
    })

    // SCHEDULE
    scheduleLink.addEventListener("click", function (e) {
        e.preventDefault()

        dashboardContent.setAttribute("hidden", "")
        classroomContent.setAttribute("hidden", "")
        scheduleContent.removeAttribute("hidden")
    })
})