let dob = document.getElementById('dob');
let planContent = document.getElementById('plan');

document.addEventListener('click',function (){
  console.log("Body............Clicked.");
});
document.addEventListener('DOMContentLoaded', () => {
  const fData = queryUrl();

  // const mode =  queryMode();

  console.clear();
  fData.then(responce => {
    const allPlans = responce.plans;
    allPlans.forEach(data => {
        let option = document.createElement('option');
        option.value=data.CODE;
        option.appendChild( document.createTextNode(data.PLAN));
        document.getElementById('plan').appendChild(option);
        // console.log(option);
    });
  });
  // validFullForm();
});
async function queryUrl() {
  const proxyurl = "https://cors-anywhere.herokuapp.com/";
  const url = "http://202.164.213.67/android/calc_plan_read.php"; // site that doesn’t send Access-Control-*
  const query = await fetch(proxyurl + url); // https://cors-anywhere.herokuapp.com/https://example.com
  const data = await query.json();
  return data;
}
async function queryTerm(secId) {
  const proxyurl = "https://cors-anywhere.herokuapp.com/";
  const url = `http://202.164.213.67/android/team_of_policy.php?CODE=${secId}`; // site that doesn’t send Access-Control-*
  const query = await fetch(proxyurl + url); // https://cors-anywhere.herokuapp.com/https://example.com
  const data = await query.json();
  return data;
}
async function queryMode(secId) {
  const proxyurl = "https://cors-anywhere.herokuapp.com/";
  const url = `http://202.164.213.67/android/mode_of_payment.php?CODE=${secId}`; // site that doesn’t send Access-Control-*
  const query = await fetch(proxyurl + url); // https://cors-anywhere.herokuapp.com/https://example.com
  const data = await query.json();
  return data;
}

dob.addEventListener('change',() => {


        var mdate = dob.value.toString();
        var yearThen = parseInt(mdate.substring(0,4), 10);
        var monthThen = parseInt(mdate.substring(5,7), 10);
        var dayThen = parseInt(mdate.substring(8,10), 10);

        var today = new Date();
        var birthday = new Date(yearThen, monthThen-1, dayThen);

        var differenceInMilisecond = today.valueOf() - birthday.valueOf();

        var year_age = Math.floor(differenceInMilisecond / 31536000000);
        var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);

        if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
            alert("Happy B'day!!!");
        }

        var month_age = Math.floor(day_age/30);

        day_age = day_age % 30;

        if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
            // $("#exact_age").text("Invalid birthday - Please try again!");
            alert("Invalide date");
        }
        else {
            // $("#exact_age").html("You are<br/><span id=\"age\">" + year_age + " years " + month_age + " months " + day_age + " days</span> old");
            console.clear();
            if (year_age > 0) {
              if (year_age > 18) {
                console.log(year_age);
                document.getElementById('age').value= year_age;
              } else {
                alert("You age must be more than 18");
              }

            } else {
              alert("Invalid Date");
            }
        }


});
$('#plan').change(function () {
  if (document.querySelector('.nch')) {
    document.querySelector('.nch').remove();
  }
  var secId = $(this).val();
  if (secId == 8) {
    // document.getElementById('age').disabled = false;
    let newChildHtml= `
    <div class="form-group nch">
      <input type="text" class="form-control" id="childAge" aria-describedby="emailHelp" value="" placeholder="Enter Your Child Age">
    </div>
    `;
    let termDivSection = document.getElementById('termDivSection');
    termDivSection.innerHTML = newChildHtml;
  }

  let checkterm=document.querySelector('#term option').remove();
  let checkmod=document.querySelector('#mode option').remove();
  // console.log(checkterm+checkmod);

	const fTerms =queryTerm(secId);
  let allH='';
  fTerms.then(responce => {
    const allTerms = responce.terms_policy;
    allTerms.forEach(data => {
        allH+="<option value="+data.TERM+">"+data.TERM+"</option>";
    });
    document.getElementById('term').innerHTML=allH;
    console.log(allH);
  });


  const mode =queryMode(secId);
  let aaa='';
  mode.then(responce => {
    const allMOds = responce.mode_payment;
    allMOds.forEach(data => {
      aaa+="<option value="+data.INSTMODE+">"+data.payment+"</option>";
    });
    document.getElementById('mode').innerHTML=aaa;
    // console.log(aaa);
  });

});
// $('#term').change(function () {
//   var secId = $(this).val();
//
// });

document.getElementById('form').addEventListener('submit',(e) => {
  e.preventDefault();
  if (validFullForm()) {
  // let dob = $('#dob').val();
  let age = $('#age').val();
  let plan = $('#plan').val();
  let term = $('#term').val();
  let mode = $('#mode').val();
  let sum = $('#sum').val();
  let spinner = `
  <div class="spinner text-center spinner-border text-success" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  `;
  document.getElementById('bimaRes').innerHTML=spinner;
  fetchResultQuery(age,plan,term,mode,sum);
  }
});


async function fetchResultQuery(age,plan,term,mode,sum) {
    const proxyurl = "https://cors-anywhere.herokuapp.com/";
    let checkchildAgeDiv = document.getElementById('childAge');
    let url =  '';
    if (checkchildAgeDiv) {
      url= `http://202.164.213.67/android/premium_calcutator.php?V_TABLE_ID=${plan}&&V_TERM=${term}&&V_INSTMODE=${mode}&&V_AGE=${age}&&V_C_AGE=${checkchildAgeDiv.value}&&V_SUMASS=${sum}`;
    } else {
      url= `http://202.164.213.67/android/premium_calcutator.php?V_TABLE_ID=${plan}&&V_TERM=${term}&&V_INSTMODE=${mode}&&V_AGE=${age}&&V_C_AGE=0&&V_SUMASS=${sum}`;
    }
    const query = await fetch(proxyurl + url); // https://cors-anywhere.herokuapp.com/https://example.com
    const data = await query.json();
    let para = data.calc;
    console.log(para[0]);

    let checkDiv=document.querySelector('.bimaRes div');
    if (checkDiv) {
      checkDiv.remove();
    }
    let myHtml = `
      <div class="container">
        <h3 class="text-center">Amount</h3>
        <h1 classs"text-center">${para[0]}tk</h1>
      </div>
    `;



    setTimeout(() => {
      document.querySelector('.spinner').remove();
      document.getElementById('bimaRes').innerHTML=myHtml;
    },1100);

}


function validFullForm() {
  let age = $('#age').val();
  let plan = $('#plan').val();
  let term = $('#term').val();
  let mode = $('#mode').val();
  let sum = $('#sum').val();

  if (age === 0 || age === '' || plan === 0 || term ===0 || mode ===0 || sum <= 29999 || sum == '') {
    let myHtml = `
      <div class="alert alert-danger" role="alert">
        Please fill the form currectly and amount must be 30 Thousand or above !
      </div>
    `;
    document.getElementById('bimaRes').innerHTML=myHtml;
    setTimeout(()=> {
      document.querySelector('#bimaRes .alert').remove();
    },2500);
    return false;
  }
  else {


    if ($('#plan').val() == 8) {
      let childAge = $('#childAge').val();
      // console.log(childAge);
      // || childAge == 0 || childAge == '' || childAge > 19 || childAge == null
      if ($('#age').val() < 18  || childAge >18) {
        // console.log(childAge);
      // if ($('#age').val() < 18) {
        let myHtml = `
          <div class="alert alert-danger" role="alert">
            Your Age can not be less then 18 !<br>
            Child Age can not be more then 18 !
          </div>
        `;
        document.getElementById('bimaRes').innerHTML=myHtml;
        setTimeout(()=> {
          document.querySelector('#bimaRes .alert').remove();
        },2500);
        return false;
      } else {
        return true;
      }
    } else {
      return true;
    }


  }

}
