let width= 10/2;
let cursor = {
    center: { left: width, top: width },
    second: { left: 3*width, top: 3*width },
    third: { left: 5* width, top: 5*width }
};

$("body")
    .on("mousemove", function(e) {
        $("#first").offset({
            left: e.pageX - cursor.center.left,
            top: e.pageY - cursor.center.top
        });
        $("#second").offset({
            left: e.pageX - cursor.second.left,
            top: e.pageY - cursor.second.top
        });
        $('#third').offset({
            left: e.pageX - cursor.third.left,
            top: e.pageY - cursor.third.top
        })
    })
    .on("mousedown", function() {
        $('#cursor').removeClass('active').addClass('active');
    })
    .on("mouseleave", function() {
        $('#cursor').removeClass('active');
    })
    .on("mouseup",function(){
        $('#cursor').removeClass('active');
    });
$('.pointer').hover(function(){
    $('#cursor').addClass('active');
}, function(){
    $('#cursor').removeClass('active');
});