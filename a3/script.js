/* Insert your javascript here */
function Appear_dumbo() {
    var obj = document.getElementById('synopsisRMC_dumbo');
    obj.style.display = 'block';
    var synopsis = document.getElementById('li_dumbo');
    synopsis.style.display = 'block';
    var obj = document.getElementById('synopsisRMC_endgame');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_endgame');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_thehappyprince');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_thehappyprince');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_topendwedding');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_topendwedding');
    synopsis.style.display = 'none';
}

function Appear_endgame() {
    var obj = document.getElementById('synopsisRMC_dumbo');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_dumbo');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_endgame');
    obj.style.display = 'block';
    var synopsis = document.getElementById('li_endgame');
    synopsis.style.display = 'block';
    var obj = document.getElementById('synopsisRMC_thehappyprince');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_thehappyprince');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_topendwedding');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_topendwedding');
    synopsis.style.display = 'none';
}

function Appear_topendwedding() {
    var obj = document.getElementById('synopsisRMC_dumbo');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_dumbo');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_endgame');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_endgame');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_thehappyprince');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_thehappyprince');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_topendwedding');
    obj.style.display = 'block';
    var synopsis = document.getElementById('li_topendwedding');
    synopsis.style.display = 'block';
}

function Appear_thehappyprince() {
    var obj = document.getElementById('synopsisRMC_dumbo');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_dumbo');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_endgame');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_endgame');
    synopsis.style.display = 'none';
    var obj = document.getElementById('synopsisRMC_thehappyprince');
    obj.style.display = 'block';
    var synopsis = document.getElementById('li_thehappyprince');
    synopsis.style.display = 'block';
    var obj = document.getElementById('synopsisRMC_topendwedding');
    obj.style.display = 'none';
    var synopsis = document.getElementById('li_topendwedding');
    synopsis.style.display = 'none';
}

function Dumbo_inner(count) {
    var obj = document.getElementById('dumbo' + count);
    var obj2 = document.getElementById('day_time');
    var movie = document.getElementById('title');
    movie.innerHTML = "Dumbo";
    obj2.innerHTML = obj.innerHTML;
}

function Endgame_inner(count) {
    var obj = document.getElementById('endgame' + count);
    var obj2 = document.getElementById('day_time');
    var movie = document.getElementById('title');
    movie.innerHTML = "Avenger:Endgame";
    obj2.innerHTML = obj.innerHTML;
}
function Top_inner(count) {
    var obj = document.getElementById('top' + count);
    var obj2 = document.getElementById('day_time');
    var movie = document.getElementById('title');
    movie.innerHTML = "Top End Wedding";
    obj2.innerHTML = obj.innerHTML;
}
function Prince_inner(count) {
    var obj = document.getElementById('prince' + count);
    var obj2 = document.getElementById('day_time');
    var movie = document.getElementById('title');
    movie.innerHTML = "The Happy Prince";
    obj2.innerHTML = obj.innerHTML;
}


function MovieId(id) {
    var movieid = document.getElementById('hidden1');
    movieid.value = id;
}

function MovieId2(id) {
    document.getElementById("hidden2").selectedIndex = id;
}

function MovieId3(id) {
    document.getElementById("hidden3").selectedIndex = id;
}


function caculate_total_price() {
    switch (document.getElementById('hidden2').options[document.getElementById('hidden2').selectedIndex].text) {
        case 'MON':
        case 'TUE':
        case 'WED':
            var priceSTA = 14.00;
            var priceSTP = 12.50;
            var priceSTC = 11.00;
            var priceFCA = 24.00;
            var priceFCP = 22.50;
            var priceFCC = 21.00;
            break;
        case 'SAT':
        case 'SUN':
            var priceSTA = 19.80;
            var priceSTP = 17.50;
            var priceSTC = 15.30;
            var priceFCA = 30.00;
            var priceFCP = 27.00;
            var priceFCC = 24.00;
            break;
        case 'FRI':
        case 'THU':
            switch (document.getElementById('hidden3').value) {
                case 'T12':
                    var priceSTA = 14.00;
                    var priceSTP = 12.50;
                    var priceSTC = 11.00;
                    var priceFCA = 24.00;
                    var priceFCP = 22.50
                    var priceFCC = 21.00;
                    break;
                default:
                    var priceSTA = 19.80;
                    var priceSTP = 17.50;
                    var priceSTC = 15.30;
                    var priceFCA = 30.00;
                    var priceFCP = 27.00;
                    var priceFCC = 24.00;
                    break;
            }
    }
    var STDAdult = document.getElementById("adult_sta").value
    var STDConcess = document.getElementById("concession_sta").value
    var STDChildren = document.getElementById("child_sta").value
    var FCAdult = document.getElementById("adult_fc").value
    var FCConcess = document.getElementById("concession_fc").value
    var FCChildren = document.getElementById("child_fc").value
    var total = Number(STDAdult) * priceSTA + Number(STDConcess) * priceSTP + Number(STDChildren) * priceSTC + Number(FCAdult) * priceFCA + Number(FCConcess) * priceFCP + Number(FCChildren) * priceFCC
    document.getElementById("total").innerHTML = "$" + total.toFixed(2).toString()

}

