// JavaScript to add some movement to elements
const form = document.querySelector('form');

form.addEventListener('mouseover', function () {
    form.style.transform = 'rotate(5deg)';
});

form.addEventListener('mouseout', function () {
    form.style.transform = 'rotate(0deg)';
});
//INSERT INTO `trip` (`S no.`, `Name`, `Registration Number`, `Gender`, `Phone no.`, `Year`, `Branch`, `Date`) VALUES ('1', 'Shlok Mathur', '20BCE11057', 
//'Male', '8290954379', '2020', 'Computer Science', current_timestamp());