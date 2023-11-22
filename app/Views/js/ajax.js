
const forms_ajax = document.querySelectorAll(".FormAjax");

forms_ajax.forEach(forms => {

    forms.addEventListener("submit", function (e) {

        e.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, make it!",
            cancelButtonText: "No, cancel!"
        }).then((result) => {
            if (result.isConfirmed) {

                let data = new FormData(this);
                let method = this.getAttribute("method");
                let action = this.getAttribute("action");

                let headers = new Headers();

                let config = {
                    method: method,
                    headers: headers,
                    mode: 'cors',
                    cache: 'no-cache',
                    body: data
                };
                fetch(action, config)
                    .then(answer => answer.json())
                    .then(answer => {
                        return alert_ajax(answer);
                    });



            }
        });
    });
});

function alert_ajax(alert) {
    if (alert.type == "simple") {
        Swal.fire({
            icon: alert.icon,
            title: alert.title,
            text: alert.text,
            confirmButtonText: "Accept"
        });
    } else if (alert.type == "reload") {
        Swal.fire({
            icon: alert.icon,
            title: alert.title,
            text: alert.text,
            confirmButtonText: "Accept"
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
        });
    } else if (alert.type == "clean") {
        Swal.fire({
            icon: alert.icon,
            title: alert.title,
            text: alert.text,
            confirmButtonText: "Accept"
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector(".FormAjax").reset();
            }
        });
    } else if (alert.type == "redirect") {
        window.location.href = alert.url;

    }
}
/*btn for close session*/
let btn_exit = document.getElementById("btn_exit");
btn_exit.addEventListener("click", function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Do you want to log out of the system?",
        text: "The session will be closed and you will exit the system",
        icon: "question ",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, exit!",
        cancelButtonText: "No, cancel!"
    }).then((result) => {
        if (result.isConfirmed) {
            let url = this.getAttribute("href");
            window.location.href = url;
        }
    });
});