    var livebody =document.querySelector('.live-body');
    var livechild = document.querySelectorAll('#live-swtich li');

    var dougabody =document.querySelector('.douga-body');
    var dougachild = document.querySelectorAll('#douga-swtich li');







    swtich(dougabody,dougachild);
    swtich(livebody,livechild);
        


    function swtich(swtichbody,swtichchild){
        var number = 0;
        var left;
        for (var i = 0; i < swtichchild.length; i++) {
            swtichchild[i].index = i;
            swtichchild[i].onclick = function () {
                number = this.index;
                left = number*-260;
                swtichbody.style.left = left + 'px';
                swtichchild[number].className = 'swtich-on';
                for (var i = 0; i < swtichchild.length; i++) {
                    if (number != i) {
                        swtichchild[i].className = '';
                    }
                }
            }  
        }
    }
        

