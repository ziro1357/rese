
  function displayNumber(){
    const input_n = document.getElementById('input-number');
    const disp_n = document.getElementById('disp-number');
    disp_n.textContent = input_n.value;
  }
  
  function displayDate(){
    const input_d = document.getElementById('input-date');
    const disp_d = document.getElementById('disp-date');
    disp_d.textContent = input_d.value;
  }

  function displayTime(){
    const input_t = document.getElementById('input-time');
    const disp_t = document.getElementById('disp-time');
    disp_t.textContent = input_t.value;
  }

  function initialize(){
    displayNumber();
    displayDate();
    displayTime();
  }

  window.onload = () => {
    initialize();

    const input_n = document.getElementById('input-number');
    input_n.addEventListener('input', e => {
      // 数値以外の入力を除外する。
      //const v = e.target.value.replace(/[^0-9]+/g, '');
      //e.target.value = v;
      // 人数を表示する。
        displayNumber();
    });
    
    const input_d = document.getElementById('input-date');
    input_d.addEventListener('input', e => {
        displayDate();
    });

    const input_t = document.getElementById('input-time');
    input_t.addEventListener('input', e => {
        displayTime();
    });

  }


