<?php
   // Template Name: mypath
   get_header(); ?>
   <!--banner-->
   <div class="container">
   <div class="row">

<div class="see-more pull-left"><button id="myBtn">GET STARTED</button></div>

</div>
   </div>
   
   <div id="myModal" class="modal my_path_popup">

  <!-- Modal content -->
  <div class="modal-content mypath-popup">
    <span class="close">&times;</span>
<div class="block-13">
    <div class="list-wrapper">
        <ul class="list row">
            <li>
                <form class="mypath-form" id="nextpath">
	  <table>
        <tr><td><h3 class="path-qusetion">Do you have any prior knowledge of analytics fgerwtwrtre?</h3></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		
		</table>
		</form>
            </li>
            <li>
                <form class="mypath-form" id="nextpath">
	  <table>
        <tr><td><h3 class="path-qusetion">Do you have any prior knowledge of gerwtwrtre?</h3></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		
		</table>
		</form>
            </li>
            <li>
                <form class="mypath-form" id="nextpath">
	  <table>
        <tr><td><h3 class="path-qusetion">Do you have any prior knowledge of analytics ?</h3></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		<tr><td> <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" checked><label>Learning new and advanced analytics techniques?</label></td></tr>
		
		</table>
		</form>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
    <div class="show-more prev">prev</div>
	<div class="show-more next">next</div>
</div>
</div>
  </div>

</div>
<script>
   // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
   </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
var width = $('.block-13 .list li').width();

function carouselNext() {

    $('.block-13 .list').filter(':not(:animated)').animate({
        right: '+=' + width
    }, 1200, function () {

        var first = $('.block-13 .list li:first-child');
        first.remove();
        $(this).append(first);

        $(this).css({
            right: '-=' + width
        });
    });
}


$('.block-13 .show-more.prev').click(function () {
    var last = $('.block-13 .list li:last-child');
    last.remove();
    $('.block-13 .list').filter(':not(:animated)').prepend(last);
    
    $('.block-13 .list').filter(':not(:animated)').css({
        right: '+=' + width
    });
    
    $('.block-13 .list').filter(':not(:animated)').animate({
        right: '-=' + width
    });

});

$('.block-13 .show-more.next').click(function () {
    carouselNext();
});
</script>
<style>

</style>
   
 <?php get_footer(); ?>
  