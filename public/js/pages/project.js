document.addEventListener("DOMContentLoaded", function () {
    let activeMenu = localStorage.getItem("activeProjectMenu");

    if (activeMenu) {
        document.querySelectorAll(".project-info-left-menu a").forEach(link => {
            link.classList.remove("active");
        });

        let selectedLink = document.querySelector(`.project-info-left-menu a[data-menu="${activeMenu}"]`);
        if (selectedLink) {
            selectedLink.classList.add("active");
        }
    }

    document.querySelectorAll(".project-info-left-menu a").forEach(link => {
        link.addEventListener("click", function (event) {
            let menuValue = this.getAttribute("data-menu");

            if (menuValue) {
                localStorage.setItem("activeProjectMenu", menuValue);
                document.querySelectorAll(".project-info-left-menu a").forEach(a => a.classList.remove("active"));
                this.classList.add("active");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const selectedProject = localStorage.getItem("selectedProject");
    const homeIssueLink = document.querySelector('a[data-menu="home_issue"]');

    if (selectedProject && homeIssueLink) {
        homeIssueLink.setAttribute("href", selectedProject);
    }
});
