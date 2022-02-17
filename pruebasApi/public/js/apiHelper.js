function index_js(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        document.getElementById('response').innerHTML = xhttp.responseText;
    }

    console.log("index");
    //la siguiente línea llama al controlador
    xhttp.open('GET','/api/apirest',true);
    /*xhttp.setRequestHeader('Content-type', 'application/vnd.api+json');
    xhttp.setRequestHeader('Accept', 'application/vnd.api+json');*/
    xhttp.send();
}

function store_js(){
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

    createContact(formObject).then(()=>{
        location.href="/api/apirest";
    });
}


//show????
function show_js() {
    let id = document.getElementById('id').value;

    const movies = async () => {
        const url = `/api/apirest/${id}`;
        let response = await fetch(url);
        return await response.json();
    }

    movies().then(()=>{
        location.href=`/api/apirest/${id}`;
    });
}

function update_js(){
    const id = document.getElementById('id').value;
    const formId = document.getElementById('form');
    const form = new FormData(formId);
    let formObject = {};

    form.forEach((value, key) => {
        formObject[key] = value;
    });

    const editContact = async (formObject) => {
        const url = `api/apirest/${id}`;

        const requestOptions = {
            method: 'PUT',
            body: JSON.stringify(formObject),
            headers: {
                'Content-Type': 'application/json'
            },
        };

        let response = await fetch(url, requestOptions);
    }
    console.log(formObject);
    editContact(formObject).then(()=>{
        location.href='/api/apirest';
    });

}

function destroy_js(){
    let id = document.getElementById('id').value;
    const deleteMovie = async () => {
        const url = `/api/apirest/${id}`;
        const settings = {
            method: 'DELETE'
        };
        let response = await fetch(url, settings);
    }
    deleteMovie().then(()=>{
        location.href="/api/apirest";
    });
}
