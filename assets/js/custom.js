$(document).ready(function(){
   /* var modalBtns = [document.querySelectorAll(".cheese-icon")];

    modalBtns.forEach(function(btn){
        btn.onclick = function() {
            var modal = btn.getAttribute('data-modal');
            document.getElementById(modal).style.display = "block";
        }
    });

    var closeBtns = [document.querySelectorAll(".close")];
    closeBtns.forEach(function(btn){
        btn.onclick = function() {
            var modal = btn.closest('.modal');
            modal.style.display = "none";
        }
    });

    window.onclick = function(event) {
        if (event.target.className === "modal") {
            event.target.style.display = "none";
        }
    }
    */




    $(".cheese-icon").on("click", function(e) {
        var modal = $(e.currentTarget).data("modal");
        $(modal).show();
    });

    $(".modal").on("click", function(e) {
        var className = e.target.className;
        if(className === "modal" || className === "close"){
            $(this).closest(".modal").hide();
        }
    });



    $('.markerbox').on('click', '.cheese-icon', function(e){

    });

});