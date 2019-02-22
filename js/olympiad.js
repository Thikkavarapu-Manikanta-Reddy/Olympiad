$("#example").typer({
            strings: [
                "Education is all a matter of building bridges.",
                "Education is not preparation for life; education is life itself.",
                "An investment in knowledge pays the best interest.",
                "Education is the key to unlock the golden door of freedom.",
                "Develop a passion for learning. If you do, you will never cease to grow.",
                "Education is what survives when what has been learned has been forgotten.",
            ]
        });


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
$('#myBtn').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 2000);
    return false;
 });
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
$("#ques1").click(function() {
    $('html, body').animate({
        scrollTop: $("#1").offset().top
    }, 2000);
});
$("#ques2").click(function() {
    $('html, body').animate({
        scrollTop: $("#2").offset().top
    }, 2000);
});
$("#ques3").click(function() {
    $('html, body').animate({
        scrollTop: $("#3").offset().top
    }, 2000);
});
$("#ques4").click(function() {
    $('html, body').animate({
        scrollTop: $("#4").offset().top
    }, 2000);
});
$("#ques5").click(function() {
    $('html, body').animate({
        scrollTop: $("#5").offset().top
    }, 2000);
});
$("#ques6").click(function() {
    $('html, body').animate({
        scrollTop: $("#6").offset().top
    }, 2000);
});
$("#ques7").click(function() {
    $('html, body').animate({
        scrollTop: $("#7").offset().top
    }, 2000);
});
$("#ques8").click(function() {
    $('html, body').animate({
        scrollTop: $("#8").offset().top
    }, 2000);
});
$("#ques9").click(function() {
    $('html, body').animate({
        scrollTop: $("#9").offset().top
    }, 2000);
});
$("#ques10").click(function() {
    $('html, body').animate({
        scrollTop: $("#10").offset().top
    }, 2000);
});

$("#ans1,#ans2,#ans3,#ans4").click(function() {
    $('html, body').animate({
        scrollTop: $("#one").offset().top
    }, 2000);
});

$("#ans5,#ans6,#ans7,#ans8").click(function() {
    $('html, body').animate({
        scrollTop: $("#two").offset().top
    }, 2000);
});

$("#ans9,#ans10,#mark").click(function() {
    $('html, body').animate({
        scrollTop: $("#three").offset().top
    }, 2000);
});

