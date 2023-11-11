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
            confirmButtonText: "Yes, make it!", cancelButtonText: "No, cancel!"
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

}