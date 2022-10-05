// profile tooltip
const profile = document.getElementById('profile');
const tooltip = document.getElementById('tooltip');

profile.addEventListener('click', (e) => {
    if (tooltip.style.display == 'block') {
        tooltip.style.display = 'none'
    } else {
        tooltip.style.display = 'block'
    }
})
// dropdown menu
const dropdown = document.getElementById('dropdown');
const menu = document.getElementById('menu');

document.addEventListener("DOMContentLoaded", function () {
    dropdown.addEventListener('click', (e) => {
        if (menu.style.display == 'block') {
            menu.style.opacity = '0'
            menu.style.transform = 'scale(0)'
            setTimeout(() => {
                menu.style.display = 'none'
            }, 700);
        } else {
            menu.style.display = 'block'
            setTimeout(() => {
                menu.style.opacity = '1'
                menu.style.transform = 'scale(1)'
            }, 0);
        }
    })
});

// select completed or uncompleted question
function selectQuestionType(value){
    let com = document.querySelector('.completed');
    let uncom = document.querySelector('.uncompleted');

    if(value == 'uncompleted'){
        com.setAttribute('style', 'display: none'); 
        uncom.setAttribute('style', 'display: block');
    }else{
        uncom.setAttribute('style', 'display: none'); 
        com.setAttribute('style', 'display: block'); 
    }
}

// graph for quiz progress

var Chart1 = document.getElementById('barChart1').getContext("2d");

var chart1 = new Chart(Chart1, {
    type: 'doughnut',
    data: {
        labels: ['Standard', 'Competitive', 'Games'],
        datasets: [{
            label: "Quiz",
            data: [
                122,
                233,
                655
            ],
            backgroundColor: [
                '#b050fc',
                '#b040c1',
                '#b050d1'
            ]
        }]
    },
    options: {

    }
});

// graph for quizzes progress

var Chart2 = document.getElementById('barChart2').getContext("2d");

var chart2 = new Chart(Chart2, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{
            label: false,
            data: [
                1001,
                4100,
                3345,
                5094,
                993,
                1234,
                1231,
                2989,
                4999,
                554,
                1244,
                5442
            ],
            backgroundColor: [
                'purple',
                'purple',
                'purple',
                'purple',
                'purple'
            ]
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        }
    }
})




