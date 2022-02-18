const apiCrud = {
    index_js: function () {
        const contacts = async () => {
            const url = '/api/apirest';
            let response = await fetch(url);
            return await response.json();
        }

        contacts().then(data => {
            console.log(data);
            /*data.forEach(contact => {
                console.log(contact);
                document.getElementById('response').innerHTML +=
                    `<br>ID: ${contact.id}, Name: ${contact.name}, Surname: ${contact.surname}<br>`;
            });*/
        });
    },
    store_js: function () {
        if (location.pathname === `/contacts/create`){
            let storeButton = document.querySelector('.create');
            storeButton.addEventListener("click", function () {
                const formId = document.getElementById('createForm');
                const form = new FormData(formId);
                let formObject = {};

                form.forEach((value, key) => {
                    formObject[key] = value;
                });

                const createContact = async (formObject) => {
                    const url = `http://127.0.0.1:8000/api/apirest`;
                    const settings = {
                        method: 'POST',
                        body: JSON.stringify(formObject),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    };

                    let response = await fetch(url, settings);
                    console.log(response.json());
                    //return await response.json();
                }

                createContact(formObject).then(()=>{
                    console.log("hey");
                    window.location.replace('/contacts');
                }).catch(function(error) {
                    console.log('Request failed', error);
                });;
            });
        }


    },
    showContact:function (id){
        const contacts = async (id) => {
            const url =`/api/apirest/${id}`;
            let response = await fetch(url);
            console.log(response.json());
            return response.json();
        }

        contacts(id).then(data => {
            console.log("hey");
            console.log(data);
        });
    },
    show_js: function () {
        let showButtons = document.querySelectorAll('.show');

        showButtons.forEach(button => {
            button.addEventListener("click", function () {
                let id = button.getAttribute('name');
                location.href = `/contacts/${id}`;
                this.showContact(id);
            }.bind(this));
        });

        /*        let showButton = document.querySelector('#contact');
                //let id = document.querySelector('#id').value;

                let id = showButton.getAttribute('contact');


                const contacts = async () => {
                    const url = `/api/apirest/${id}`;
                    let response = await fetch(url);
                    return await response.json();
                }

                contacts().then(() => {
                    location.href = `/api/apirest/${id}`;
                });*/
    },
    update_js: function () {
        let editButton = document.querySelector('.update');
        //let id = document.querySelector('#id').value;

        let id = editButton.getAttribute('name');


        if (location.pathname === `/contacts/${id}/edit`){

            editButton.addEventListener("click",function (){
                //new object
                const formId = document.getElementById('editForm');
                const form = new FormData(formId);
                let formObject = {};

                form.forEach((value, key) => {
                    formObject[key] = value;
                });

                const editContact = async (formObject) => {
                    const url = `/api/apirest/${id}`
                    const requestOptions = {
                        method: 'PUT',
                        body: JSON.stringify(formObject),
                        headers: {
                            'Content-Type': 'application/json'
                        },
                    };
                    let response = await fetch(url, requestOptions);
                    //return await response.json();
                }

                editContact(formObject).then(() => {
                    window.location.replace('/contacts');
                });
            });
        }

    },
    delete_js: function () {
        let deleteButtons = document.querySelectorAll('.destroy');
        deleteButtons.forEach(button => {
            button.addEventListener("click", function () {
                let id = button.getAttribute('name');
                const deleteContact = async () => {
                    const url = `../../api/apirest/${id}`;
                    const settings = {
                        method: 'DELETE'
                    };
                    let response = await fetch(url, settings);
                }

                deleteContact().then(() => {
                    location.href = "/contacts";
                });
            });
        });
    },
    renderButtons: function () {
        this.delete_js();
        this.show_js();
        this.index_js();
        this.store_js();
        this.update_js()
    }
}

apiCrud.renderButtons();

/*function index_js() {
    const contacts = async () => {
        const url = '/api/apirest';
        let response = await fetch(url);
        return await response.json();
    }

    contacts().then(data => {
        document.getElementById('response').innerHTML = data;
    })
}*/
/*

function store_js() {
    const formId = document.getElementById('form');
    const form = new FormData(formId);
    let formObject = {};

    form.forEach((value, key) => {
        formObject[key] = value;
    });

    console.log(formObject);
    const createContact = async (formObject) => {
        const url = "/api/apirest";
        const settings = {
            method: 'POST',
            body: JSON.stringify(formObject),
            headers: {
                'Content-Type': 'application/json'
            }
        };

        let response = await fetch(url, settings);
        return await response.json();
    }

    createContact(formObject).then(() => {
        location.href = "/contacts";
    });
}
*/


//show????
/*
function show_js() {
    let showButton = document.querySelector('#contact');
    //let id = document.querySelector('#id').value;

    let id = showButton.getAttribute('contact');
    const contacts = async () => {
        const url = `/api/apirest/${id}`;
        let response = await fetch(url);
        return await response.json();
    }

    contacts().then(() => {
        location.href = `/api/apirest/${id}`;
    });
}
*/

/*function update_js() {
    let editButton = document.querySelector('#contact');
    //let id = document.querySelector('#id').value;

    let id = editButton.getAttribute('contact');
    //new object
    console.log(id);
    const formId = document.getElementById('editForm');
    const form = new FormData(formId);
    let formObject = {};

    form.forEach((value, key) => {
        formObject[key] = value;
    });

    const editContact = async (formObject) => {
        const url = `../../api/apirest/${id}`
        const requestOptions = {
            method: 'PUT',
            body: JSON.stringify(formObject),
            headers: {
                'Content-Type': 'application/json'
            },
        };
        let response = await fetch(url, requestOptions);
        return await response.json();
    }

    editContact(formObject).then(() => {
        location.href = "/contacts";
    });

}*/

/*let deleteButtons = document.querySelectorAll('.destroy');

deleteButtons.forEach(button => {
    button.addEventListener("click", function () {
        let id = button.getAttribute('name');
        const deleteContact = async () => {
            const url = `../../api/apirest/${id}`;
            const settings = {
                method: 'DELETE'
            };
            let response = await fetch(url, settings);
        }

        console.log(id);
        deleteContact().then(() => {
            location.href = "/contacts";
        });

    });
});*/


