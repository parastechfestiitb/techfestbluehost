

 //basic illustration of TweenMax's repeat, repeatDelay, yoyo and onRepeat
var box01 = document.getElementById("motionBox01"),
    count = 0,
    tween;
tween = TweenMax.to(box01, 1, {rotationX:-360,rotationZ:-360,scaleX:0.2,scaleY:0.8, repeat:-1,opacity:1, yoyo:true, onRepeat:onRepeat, repeatDelay:2, ease:Linear.easeNone});
// tween = TweenMax.to(box01, 0.5, {scaleX:0.8,scaleY:0.8, repeat:-1,opacity:0, yoyo:true, onRepeat:onRepeat, repeatDelay:4, ease:Linear.easeNone});

var box02 = document.getElementById("motionBox02"),
    count02 = 0,
    tween02;
tween02 = TweenMax.to(box02, 1, {rotationZ:-360,y:200,x:300, scaleX:1.2,scaleY:1.2, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat02, repeatDelay:2, ease:Linear.easeNone});
// tween02 = TweenMax.to(box02, 1, {scaleX:1.2,scaleY:1.2, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat02, repeatDelay:2, ease:Linear.easeNone});

var box03 = document.getElementById("motionBox03"),
    count03 = 0,
    tween03;
tween03 = TweenMax.to(box03, 1, {rotationZ:-360,y:250,x:-600, scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat03, repeatDelay:2, ease:Linear.easeNone});
// tween03 = TweenMax.to(box03, 1, {scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat03, repeatDelay:2, ease:Linear.easeNone});

var box04 = document.getElementById("motionBox04"),
    count04 = 0,
    tween04;
tween04 = TweenMax.to(box04, 1, {rotationZ:-360,y:250,x:600, scaleX:1.6,scaleY:1.6, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat04, repeatDelay:2, ease:Linear.easeNone});
// tween04 = TweenMax.to(box04, 1, { scaleX:1.6,scaleY:1.6, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat04, repeatDelay:2, ease:Linear.easeNone});

var box05 = document.getElementById("motionBox05"),
    count05 = 0,
    tween05;
tween05 = TweenMax.to(box05, 1, {rotationZ:-360,y:50,x:-400, scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat05, repeatDelay:2, ease:Linear.easeNone});
// tween05 = TweenMax.to(box05, 1, {scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat05, repeatDelay:2, ease:Linear.easeNone});

var box06 = document.getElementById("motionBox06"),
    count06 = 0,
    tween06;
tween06 = TweenMax.to(box06, 1, {rotationZ:-360,y:300,x:40, scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat06, repeatDelay:2, ease:Linear.easeNone});
// tween06 = TweenMax.to(box06, 1, {scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat06, repeatDelay:2, ease:Linear.easeNone});

var box07 = document.getElementById("motionBox07"),
    count07 = 0,
    tween07;
tween07 = TweenMax.to(box07, 1, {rotationZ:-360,y:-300,x:550, scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat07, repeatDelay:2, ease:Linear.easeNone});
// tween07 = TweenMax.to(box07, 1, {scaleX:1.5,scaleY:1.5, repeat:0,opacity:1, yoyo:true, onRepeat:onRepeat07, repeatDelay:2, ease:Linear.easeNone});


function onRepeat() {

  if (count==0) {
    count=1;
    TweenLite.set(box01, {src:"img/theme/bio/13.png",opacity:1});  
  }             
  else if (count==1) {

  count=2;  
    TweenLite.set(box01, {src:"img/theme/bio/13.png",opacity:1});  
  }
    else if (count==2) {
     count=3;
    TweenLite.set(box01, {src:"img/theme/bio/13.png"});  
  }
    else if (count==3) {
        count=4;
  TweenLite.set(box01, {src:"img/theme/sus/2.png"});  
  }

    else if (count==4) {
        count=5;
  TweenLite.set(box01, {src:"img/theme/sus/2.png"});  
  }

    else if (count==5) {
        count=0;
  TweenLite.set(box01, {src:"img/theme/digi/2.png"});  
  }
}                          




function onRepeat02() {

  if (count02==0) {
    count02=1;
  }             
  else if (count02==1) {

  count02=2;  
    TweenLite.set(box02, {src:"img/theme/bio/3.png"});  
  }
    else if (count02==2) {
     count02=3;
    TweenLite.set(box02, {src:"img/theme/bio/3.png"});  
  }
    else if (count02==3) {
        count02=4;
  TweenLite.set(box02, {src:"img/theme/sus/3.png"});  
  }

    else if (count02==4) {
        count02=5;
  TweenLite.set(box02, {src:"img/theme/sus/3.png"});  
  }

    else if (count02==5) {
        count02=0;
  TweenLite.set(box02, {src:"img/theme/digi/3.png"});  
  }
}                          



function onRepeat03() {

  if (count03==0) {
    count03=1;
  }             
  else if (count03==1) {
  count03=2;  
    TweenLite.set(box03, {src:"img/theme/bio/7.png"});  
  }
    else if (count03==2) {
     count03=3;
    TweenLite.set(box03, {src:"img/theme/bio/7.png"});  
  }
    else if (count03==3) {
        count03=4;
  TweenLite.set(box03, {src:"img/theme/sus/7.png"});  
  }

    else if (count03==4) {
        count03=5;
  TweenLite.set(box03, {src:"img/theme/sus/7.png"});  
  }

    else if (count03==5) {
        count03=0;
  TweenLite.set(box03, {src:"img/theme/digi/7.png"});  
  }
}                          


function onRepeat04() {

  if (count04==0) {
    count04=1;
  }             
  else if (count04==1) {
  count04=2;  
    TweenLite.set(box04, {src:"img/theme/bio/8.png"});  
  }
    else if (count04==2) {
     count04=3;
    TweenLite.set(box04, {src:"img/theme/bio/8.png"});  
  }
    else if (count04==3) {
        count04=4;
  TweenLite.set(box04, {src:"img/theme/sus/8.png"});  
  }

    else if (count04==4) {
        count04=5;
  TweenLite.set(box04, {src:"img/theme/sus/8.png"});  
  }

    else if (count04==5) {
        count04=0;
  TweenLite.set(box04, {src:"img/theme/digi/8.png"});  
  }
}                          



function onRepeat05() {
  if (count05==0) {
    count05=1;
  }             
  else if (count05==1) {
  count05=2;  
    TweenLite.set(box05, {src:"img/theme/bio/9.png"});  
  }
    else if (count05==2) {
     count05=3;
    TweenLite.set(box05, {src:"img/theme/bio/9.png"});  
  }
    else if (count05==3) {
        count05=4;
  TweenLite.set(box05, {src:"img/theme/sus/9.png"});  
  }

    else if (count05==4) {
        count05=5;
  TweenLite.set(box05, {src:"img/theme/sus/9.png"});  
  }

    else if (count05==5) {
        count05=0;
  TweenLite.set(box05, {src:"img/theme/digi/9.png"});  
  }
}                          



function onRepeat06() {
  if (count06==0) {
    count06=1;
  }             
  else if (count06==1) {
  count06=2;  
    TweenLite.set(box06, {src:"img/theme/bio/1.png"});  
  }
    else if (count06==2) {
     count06=3;
    TweenLite.set(box06, {src:"img/theme/bio/1.png"});  
  }
    else if (count06==3) {
        count06=4;
  TweenLite.set(box06, {src:"img/theme/sus/1.png"});  
  }

    else if (count06==4) {
        count06=5;
  TweenLite.set(box06, {src:"img/theme/sus/1.png"});  
  }

    else if (count06==5) {
        count06=0;
  TweenLite.set(box06, {src:"img/theme/digi/1.png"});  
  }
}                          


function onRepeat07() {
  if (count07==0) {
    count07=1;
  }             
  else if (count07==1) {
  count07=2;  
    TweenLite.set(box07, {src:"img/theme/bio/5.png"});  
  }
    else if (count07==2) {
     count07=3;
    TweenLite.set(box07, {src:"img/theme/bio/5.png"});  
  }
    else if (count07==3) {
        count07=4;
  TweenLite.set(box07, {src:"img/theme/sus/5.png"});  
  }

    else if (count07==4) {
        count07=5;
  TweenLite.set(box07, {src:"img/theme/sus/5.png"});  
  }

    else if (count07==5) {
        count07=0;
  TweenLite.set(box07, {src:"img/theme/digi/5.png"});  
  }
}                          





