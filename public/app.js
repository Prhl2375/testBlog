var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

function createPost(event){
    const data = {
        title: event.target.parentElement.getElementsByClassName('create-post')[0].value,
        content: event.target.parentElement.getElementsByClassName('create-post')[1].value,
        category: event.target.parentElement.getElementsByClassName('create-post')[2].value
    }
    const jsonData = JSON.stringify(data);
    fetch("/createPost", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': csrfToken
            },
            body: jsonData
        }).then(function (response) {
            location.reload();
        })
}


function deletePost(id){
    const data = {
        id: id
    }
    const jsonData = JSON.stringify(data);
    fetch("/deletePost", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': csrfToken
        },
        body: jsonData
    }).then(function (response) {
        location.reload();
    })
}

function editPost(id){
    const data = {
        id: id,
        text: event.target.parentElement.getElementsByClassName('editPost')[0].value
    }
    const jsonData = JSON.stringify(data);
    fetch("/single/editPost", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': csrfToken
        },
        body: jsonData
    }).then(function (response) {
        location.reload();
    })
}
