<?php require_once "feature-header.php"; ?>

<body id="write-note-body">
    <section style="background: none;">
        <div class="container my-5">
            <h1 class="notes-head">Notes</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add a note</h5>
                    <div class="form-group">
                        <textarea class="form-control" id="addTxt" rows="10" style="font-size: 16px;"></textarea>
                    </div>
                    <button class="btn btn-primary" id="addBtn" style="padding: 1rem 2rem; font-size:16px">Add Note</button>
                </div>
            </div>
            <hr>
            <div style="display: flex; flex-direction:row; justify-content:space-between;">
                <h1 class="notes-head">Your Notes</h1>
                <form class="form-inline">
                    <input class="form-control" id="searchTxt" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
            <hr>
            <div id="notes" class="row container-fluid" style="display: flex; flex-direction:row; color:white; font-size:16px;"> </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

<script>
    function openNav() {
        document.getElementById("left-mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("left-mySidenav").style.width = "0";
    }
</script>

<script>
    showNotes();
    let addBtn = document.getElementById('addBtn');
    addBtn.addEventListener('click', function(e) {
        let addTxt = document.getElementById('addTxt');
        let notes = localStorage.getItem('notes');

        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }
        notesObj.push(addTxt.value);
        localStorage.setItem('notes', JSON.stringify(notesObj));
        addTxt.value = "";
        showNotes();
    })

    function showNotes() {
        let notes = localStorage.getItem('notes');

        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }

        let html = "";

        notesObj.forEach(function(element, index) {
            html += `
                <div class="noteCard my-2 mx-2 card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Note ${index + 1}</h5>
                            <p class="card-text"> ${element}</p>
                            <button id="${index}"onclick="deleteNote(this.id)" class="btn btn-primary">Delete Note</button>
                        </div>
                 </div>
                `;
        });

        let notesElm = document.getElementById('notes');
        if (notesObj.length != 0) {
            notesElm.innerHTML = html;
        } else {
            notesElm.innerHTML = `<p style="color: white;">Create a note!! <p>`;
        }

    }

    function deleteNote(index) {
        let notes = localStorage.getItem('notes');
        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }

        notesObj.splice(index, 1);
        localStorage.setItem('notes', JSON.stringify(notesObj));
        showNotes();
    }

    let search = document.getElementById('searchTxt');
    search.addEventListener("input", function() {

        let inputVal = search.value.toLowerCase();
        let noteCards = document.getElementsByClassName('noteCard');
        Array.from(noteCards).forEach(function(element) {
            let cardTxt = element.getElementsByTagName("p")[0].innerText;
            if (cardTxt.includes(inputVal)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        })
    })
</script>

</html>