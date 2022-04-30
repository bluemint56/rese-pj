//ハンバーガーメニュー
const target = document.getElementById("nav__menu");
target.addEventListener('click', () => {
  target.classList.toggle('open');
  const nav = document.getElementById("hnav");
  nav.classList.toggle('in');
});

//Reservationメニュー
let input_date = document.getElementById('input_date');
input_date.addEventListener('change', function () {
  result_date.innerHTML = input_date.value;
});

let input_time = document.getElementById('input_time');
input_time.addEventListener('change', function () {
  result_time.innerHTML = input_time.value;
});

let input_number = document.getElementById('input_number');
input_number.addEventListener('change', function () {
  result_number.innerHTML = input_number.value;
});

//searchのsubmit処理
(function () {
  ("#input_area").change(function () {
    ("#search_form").submit();
  });
});

(function () {
  ("#input_genre").change(function () {
    ("#search_form").submit();
  });
});

(function () {
  ("#input_name").change(function () {
    ("#search_form").submit();
  });
});