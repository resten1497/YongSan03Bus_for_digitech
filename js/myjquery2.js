var fir_num = Math.floor(Math.random()*9)+1;
var sec_num = Math.floor(Math.random()*9)+1;
var sec_fir_num = Math.floor(Math.random()*9)+1;
var sec_sec_num = Math.floor(Math.random()*9)+1;
var sec_thr_num = Math.floor(Math.random()*9)+1;
var sec_for_num = Math.floor(Math.random()*9)+1;

var sachic_selecter = 0; // 1은 덧셈, 2는 뺼셈, 3은 곱셈 4는 나눗셈
var guiho = new Array(4);
guiho[0]="+";
guiho[1]="-";
guiho[2]="×";
guiho[3]="÷";



 $('#left').append(fir_num); 
     $('#right').append(sec_num); 
$('#left2').text(sec_fir_num+" "+guiho[sachic_selecter]+ " "+sec_sec_num);
$('#right2').text(sec_thr_num+" " +guiho[sachic_selecter]+ " "+sec_for_num);


$("#mod_nom").click(function(){
   $("#chose_warp").slideUp(1000); 
    $("#warp").fadeIn(2000);
});

$("#mod_hard").click(function(){
   $("#chose_warp").slideUp(1000); 
    $("#warp_num").fadeIn(2000);
});


function change_plus(){
    sachic_selecter = 0;
   return remam_change();
}
function change_minus(){
    sachic_selecter = 1;
 return remam_change();
    
}
function change_gop(){
    sachic_selecter = 2;
    return remam_change();
}
function change_nanugi(){
    sachic_selecter = 3;
 return remam_change();
}






function remam(){
     $("#left").empty();
     $("#right").empty();
      fir_num = Math.floor(Math.random()*9)+1;
    sec_num = Math.floor(Math.random()*9)+1;
     $('#left').append(fir_num); 
     $('#right').append(sec_num); 
}

function remam_change(){
     $("#left2").empty();
     $("#right2").empty();
      sec_fir_num = Math.floor(Math.random()*9)+1;
      sec_sec_num = Math.floor(Math.random()*9)+1;
      sec_thr_num = Math.floor(Math.random()*9)+1;
      sec_for_num = Math.floor(Math.random()*9)+1;
     $('#left2').text(sec_fir_num+" "+guiho[sachic_selecter]+ " "+sec_sec_num);
    $('#right2').text(sec_thr_num+" " +guiho[sachic_selecter]+ " "+sec_for_num);
}


function currect(){
    $("#select").empty();
        $("#select").append("정답입니다!");
            return remam();
}

function not_currect(){
    $("#select").empty();
        $("#select").append("오답입니다!");
            return remam();
}



function currect2(){
    $("#select2").empty();
        $("#select2").append("정답입니다!");
            return remam_change();
}

function not_currect2(){
    $("#select2").empty();
        $("#select2").append("오답입니다!");
            return remam_change();
}



function right_big(){
    if(fir_num<sec_num){
    return currect();  
    }
    else{
         return not_currect();
    }
    
}

function same(){
   if(fir_num==sec_num){
        return currect();
      
    }
    else{
         return not_currect();
    }
    
    
}

function left_big(){
 if(fir_num>sec_num){
        return currect();
      
    }
    else{
        return not_currect();
    }
    
    
}










function right_big2(){
if(sachic_selecter==0){
    if(sec_fir_num+sec_sec_num<sec_thr_num+sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    if(sachic_selecter==1){
    if(sec_fir_num-sec_sec_num<sec_thr_num-sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    if(sachic_selecter==3){
    if(sec_fir_num*sec_sec_num<sec_thr_num*sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    if(sachic_selecter==3){
        
    if(sec_fir_num/sec_sec_num<sec_thr_num/sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    
}

function same2(){
   if(sachic_selecter==0){
    if(sec_fir_num+sec_sec_num==sec_thr_num+sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    if(sachic_selecter==1){
    if(sec_fir_num-sec_sec_num==sec_thr_num-sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    if(sachic_selecter==2){
    if(sec_fir_num*sec_sec_num==sec_thr_num*sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    if(sachic_selecter==3){
    if(sec_fir_num/sec_sec_num==sec_thr_num/sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2();
    }
    
}
    
    
}

function left_big2(){
    
if(sachic_selecter==0){
    if(sec_fir_num+sec_sec_num>sec_thr_num+sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2;
    }
    
}
    if(sachic_selecter==1){
    if(sec_fir_num-sec_sec_num>sec_thr_num-sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2;
    }
    
}
    if(sachic_selecter==2){
    if(sec_fir_num*sec_sec_num>sec_thr_num*sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2;
    }
    
}
    if(sachic_selecter==3){
    if(sec_fir_num/sec_sec_num>sec_thr_num/sec_for_num){
        return currect2();
        
    }
    else{
        return not_currect2;
    }
    
}
    
}
    
    
    
    





