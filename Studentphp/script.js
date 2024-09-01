document.getElementById("studentForm").addEventListener("submit", function(event) {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    var maths = document.getElementById("maths").value;
    var physics = document.getElementById("physics").value;
    var chemistry = document.getElementById("chemistry").value;
    
    if (name.trim() === "" || email.trim() === "" || age.trim() === "" || maths.trim() === "" || physics.trim() === "" || chemistry.trim() === "") {
        alert("Please fill in all fields");
        event.preventDefault();
    }
});