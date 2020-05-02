/* Insert your javascript here */
function Appear(nameID) {
    var obj = document.getElementById('synopsisRMC' + nameID);
    obj.style.display = 'block';
    var synopsis = document.getElementById('li' + nameID);
    synopsis.style.display = 'block';

}
function Hide(nameID) {
    var obj = document.getElementById('synopsisRMC' + nameID);
    obj.style.display = 'none';
    var synopsis = document.getElementById('li' + nameID);
    synopsis.style.display = 'none';
    var obj2 = document.getElementById('booking_form');
    obj2.style.display = 'none';
    var book = document.getElementById('li_booking');
    book.style.display = 'none';
}

function Show_booking_form() {
    var obj = document.getElementById('booking_form');
    obj.style.display = 'block';
    var book = document.getElementById('li_booking');
    book.style.display = 'block';
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
    var movieid = document.getElementById('movie[id]');
    movieid.value = id;
}

function MovieId2(id) {
    document.getElementById("hidden2").selectedIndex = id;
}

function MovieId3(id) {
    document.getElementById("hidden3").selectedIndex = id;
}

var count = 0
function Sum_no_discount(sum_name) {
    var price_no_discount = {
        adult_sta: 19.80,
        concession_sta: 17.50,
        child_sta: 15.30,
        adult_fc: 30.00,
        concession_fc: 27.00,
        child_fc: 24.00
    }
    count++
    var obj = document.getElementById(sum_name);
    var t = 0;
    if (count == 1) {

        t = price_no_discount[sum_name] * Number(obj.options[obj.selectedIndex].value);
        console.log(t)
    }
    else if (count > 1) {
        t = 0;
        t = price_no_discount[sum_name] * Number(obj.options[obj.selectedIndex].value);
        console.log(t)
    }
    var tot = document.getElementById(sum_name + 'total');
    tot.value = (Math.round(t * 100) / 100).toFixed(2);
}

function Sum_discount(sum_name) {
    var price_discount = {
        adult_sta: 14.00,
        concession_sta: 12.50,
        child_sta: 11.00,
        adult_fc: 24.00,
        concession_fc: 22.50,
        child_fc: 21.00
    }
    count++
    var obj = document.getElementById(sum_name);
    var t = 0;
    if (count == 1) {

        t = price_discount[sum_name] * Number(obj.options[obj.selectedIndex].value);
        console.log(t)
    }
    else if (count > 1) {
        t = 0;
        t = price_discount[sum_name] * Number(obj.options[obj.selectedIndex].value);
        console.log(t)
    }
    var tot = document.getElementById(sum_name + 'total');
    tot.value = (Math.round(t * 100) / 100).toFixed(2);
}

function Payment(vari) {
    switch (document.getElementById('hidden2').options[document.getElementById('hidden2').selectedIndex].text) {
        case "MON":
        case 'WED':
            return Sum_discount(vari);

        case 'TUE':
        case 'THU':
        case "FRI":
            switch (document.getElementById('hidden3').value) {
                case 'T12':
                    return Sum_discount(vari);

                case 'T15':
                case 'T18':
                case "T21":
                    return Sum_no_discount(vari);


            }
        case 'SAT':
        case 'SUN':
            return Sum_no_discount(vari);
    }
}

function total_price() {

    var price = Number(document.getElementById("adult_statotal").value)
        + Number(document.getElementById("concession_statotal").value)
        + Number(document.getElementById("child_statotal").value)
        + Number(document.getElementById("adult_fctotal").value)
        + Number(document.getElementById("concession_fctotal").value)
        + Number(document.getElementById("child_fctotal").value)
    document.getElementById('total').innerHTML = "$" + (Math.round(price * 100) / 100).toFixed(2);
}
function time_min() {

    var currentdate = new Date();
    var month = (currentdate.getMonth() + 1);
    if (month < 10) {
        month = "0" + month.toString()
    }
    else {
        month = month.toString()
    }
    var year = (currentdate.getFullYear()).toString();
    document.getElementById("input_date").min = year + "-" + month
    console.log("hello")
}