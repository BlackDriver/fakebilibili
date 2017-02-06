        var a =document.querySelector('.pics-a');
        var b = document.querySelectorAll('.points-a li');
        var c = document.querySelectorAll('.title-a span')
        var timer;
        var number = 0;
        var left;
        var con = document.querySelector('.lunbo-a')


        for (var i = 0; i < b.length; i++) {
            b[i].index = i;
            c[i].index = i;
            b[i].onclick = function () {
                number = this.index;
                left = number*-440;
                a.style.left = left + 'px';
                b[number].className = 'lunbo-a-select';
                c[number].className = 'title-on';
                for (var i = 0; i < b.length; i++) {
                    if (number != i) {
                        b[i].className = '';
                        c[i].className = '';
                    }
                }
            }  
        }

        con.onmouseover = function () {
            clearInterval(timer)
        }

        con.onmouseleave = function() {
            timer = setInterval(run,5000)
        }

        timer = setInterval(run,5000)

        
        function run () {
            number ++;
            if (number > 4) {
                number = 0;
            }
            left = number*-440;
            a.style.left = left + 'px';
            b[number].className = 'lunbo-a-select';
            c[number].className = 'title-on'
            for (var i = 0; i < b.length; i++) {
                if (number != i) {
                    b[i].className = '';
                    c[i].className = '';
                }
            }
        }