$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 2;
function hitung() { 
setTimeout(hitung,1000); $('#timer1').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 2;
function hitung() { 
setTimeout(hitung,1000); $('#timer2').html( + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);