<?php
    include "database.php";
$db = new Database("gigfa_29739839","survey","sql300.gigfa.com","gigfa_29739839_survey");
    $db->connect();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظرسنجی دانشجویی</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/loading.css"/>
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <link rel="stylesheet" href="assets/css/js-persian-cal.css">
    <script src="assets/js/js-persian-cal.min.js"></script>
</head>
<body>
<div class="loading d-none" style="

width: 100%;
height: 100%;
position: fixed;
background-color:gray;
min-height: 100%;
top:0;
bottom:0;
right:0;
left:0;
opacity:0.8;
z-index: 1000;
">
    <div class="lds-heart"><div></div></div>

  </div>
<video autoplay muted loop id="background-video" style="position:fixed;bottom:0;right:0;min-height:100%;min-width:100%;opacity:0.3">
  <source src="background.mp4" type="video/mp4">
</video>
<header class="animate__animated animate__backInDown" style="margin:30px 0px;">
  <h1>نظرسنجی دانشجویی</h1>
</header>

<article class="animate__animated animate__backInLeft animate__delay-1s col-md-8" id="first_step">

  <form>
    <div class="form-group">
      <label for="firstName">نام شما:</label>
      <input type="text" class="form-control" name="firstName" placeholder="نام خود را وارد نمایید:" id="firstName">
      <p id="firstNameError" class="errorText" style="color:red"></p>
    </div>
    <div class="form-group">
      <label for="lastName">نام خانوادگی شما:</label>
      <input type="text" class="form-control" name="lastName" placeholder="نام خانوادگی خود را وارد نمایید:" id="lastName">
      <p id="lastNameError" class="errorText" style="color:red"></p>

    </div>
 <div class="form-group">
      <label for="grade">مقطع تحصیلی:</label>
      <select class="form-select form-select-sm" id="grade" name="grade" aria-label=".form-select-sm example">
        <option selected value="0">کاردانی</option>
        <option selected value="1">کارشناسی</option>
        <option value="2">کارشناسی ارشد</option>
        <option value="3">دکترا</option>
</select>
</div>
<div class="form-group">
                                <label for="entered_at">سال ورود به دانشگاه:</label>
                                <!-- <input type="phone" maxlength="11" class="form-control" name="entered_at" id="entered_at"/> -->
                                <input min="1370" max="1400" maxlength="4" type="number" id="pcal1" class="pdate form-control" placeholder="سال ورود به دانشگاه">
                                <input type="hidden" name="extra" id="extra">
                                <p id="enteredAtError" class="errorText" style="color:red"></p>

                              </div>
                              <div class="form-group">
                                                      <label>آیا شغل فعلی شما با مدرک تحصیلی شما مرتبط است</label>
                                                    <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="isRelated" id="isRelated" value="1">
                                                  <label class="form-check-label" for="isRelated">
                                                    بله
                                                  </label>
                                                    </div>
                                                    <div class="form-check">

                                                      <input class="form-check-input" type="radio" name="isRelated" id="isNotRelated" value="0" checked>
                                                    <label class="form-check-label" for="isNotRelated">
                                                      خیر
                                                    </label>
                                                    </div>

                                                </div>
    <div class="form-group">
      <label for="job">شغل فعلی شما:</label>
      <textarea type="text" class="form-control" name="job" id="job"></textarea>
      <p id="jobError" class="errorText" style="color:red"></p>

    </div>
    

     <div class="form-group">
          <label for="opinion">نظر شما درمورد رشته کامپیوتر چیست:</label>
          <textarea type="text" class="form-control" name="opinion" id="opinion"></textarea>
          <p id="opinionError" class="errorText" style="color:red"></p>
          </div>
            <div class="form-group">
                <label for="future">نظر شما درمورد آینده این رشته چیست:</label>
                <textarea type="text" class="form-control" name="future" id="future"></textarea>
                <p id="futureError" class="errorText" style="color:red"></p>

              </div>
               <div class="form-group">
                    <label for="proposal">پیشنهاد شما به دانشجویان ترم یک چیست:</label>
                    <textarea type="text" class="form-control" name="proposal" id="proposal"></textarea>
                    <p id="proposalError" class="errorText" style="color:red"></p>

                  </div>

                    <div class="form-group">
                        <label for="universities">اگر ادامه تحصیل داده اید در چه مقطعی و کجا:</label>
                        <textarea type="text" class="form-control" name="universities" id="universities"></textarea>
                        <p id="universitiesError" class="errorText" style="color:red"></p>

                      </div>
                      <div class="form-group">
                            <label for="mobile">شماره موبایل:</label>
                            <input type="number" pattern="\d*" maxlength="11" class="form-control" name="mobile" id="mobile"/>
                            <p id="mobileError" class="errorText" style="color:red"></p>

                          </div>

  </form>
  <button  class="form-control btn btn-warning" id="handle_first_step" name="submit">بعدی</button>
</article>





<h6 style="text-align:center;margin:50px 0px;">#Mr.MG</h6>

     <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
    <script>

      $(document).ready(function(){
        var errors = []
        $('#handle_first_step').on('click',function(){
          var firstName = $('#firstName').val();
          console.log(firstName)

        if (firstName == '' || firstName == null){
          $('#firstNameError')[0].innerHTML = "نام خود را وارد نمایید."
          errors.push('firstName')
          console.log($(firstNameError))
          // $(firstNameError).css.color('color','red')
        }else{
          $('#firstNameError')[0].innerHTML = ""
          errors =errors.filter(item=>{
            return item !== "firstName"
          })

        }
        var lastName = $('#lastName').val();
          console.log(firstName)

        if (lastName == '' || lastName == null){
          $('#lastNameError')[0].innerHTML = "نام خانوادگی خود را وارد نمایید."          
          errors.push('lastName')

          // $(firstNameError).css.color('color','red')
        }else{
          $('#lastNameError')[0].innerHTML = ""
          errors =errors.filter(item=>{
            return item !== "lastName"
          })
        }
        var job = $('#job').val();

if (job == '' || job == null){
  $('#jobError')[0].innerHTML = " شغل فعلی خود را وارد نمایید ."
  // $(firstNameError).css.color('color','red')
  errors.push('job')

}else{
  $('#jobError')[0].innerHTML = ""
  errors =errors.filter(item=>{
    return item !== "job"
  })

}
var grade = $('#grade').val()
var opinion = $('#opinion').val();
        if (opinion == '' || opinion == null){
          $('#opinionError')[0].innerHTML = "نظر خود را وارد نمایید."
          errors.push('opinion')

          // $(firstNameError).css.color('color','red')
        }else{
          $('#opinionError')[0].innerHTML = ""

          errors =errors.filter(item=>{
            return item !== "opinion"
          })
         }
         var future = $('#future').val();

         if (future == '' || future == null){
           $('#futureError')[0].innerHTML = " نظر شما درمورد آینده این رشته را وارد نمایید ."
           errors.push('future')

           // $(firstNameError).css.color('color','red')
         }else{
           $('#futureError')[0].innerHTML = ""
           errors =errors.filter(item=>{
             return item !== "future"
           })
           }
           var proposal = $('#proposal').val();

           if (proposal == '' || proposal == null){
             $('#proposalError')[0].innerHTML = "پیشنهادات خود را برای دانشجویان ترم یک را وارد نمایید."
             errors.push('proposal')

             // $(firstNameError).css.color('color','red')
           }else{
                     $('#proposalError')[0].innerHTML = ""
                     errors =errors.filter(item=>{
                       return item !== "proposal"
                     })

                   }
                    var universities = $('#universities').val();

//                    if (universities == '' || universities == null){
//                      $('#universitiesError')[0].innerHTML = "دانشگاه هایی که در آن تحصیل کرده اید را وارد نمایید."
//                      errors.push('universities')
//                      // $(firstNameError).css.color('color','red')
//                    }else{
//                      $('#universitiesError')[0].innerHTML = ""
//                                errors =errors.filter(item=>{
//                        return item !== "universities"
//                      })
//                      }
                       var mobile = $('#mobile').val();

                     if (mobile == '' || mobile == null){
                       $('#mobileError')[0].innerHTML = "شماره موبایل خود را وارد نمایید"
                       errors.push('mobile')

                       // $(firstNameError).css.color('color','red')
                     }else{
                        if(mobile.length!=11){
                       $('#mobileError')[0].innerHTML = "شماره موبایل باید یازده رقمی باشد"
                        }else{
                         $('#mobileError')[0].innerHTML = ""
                                               errors =errors.filter(item=>{
                                                 return item !== "mobile"
                                               })
                        }

                       }
                       var enteredAt = $('#pcal1').val();

                       if (enteredAt == '' || enteredAt == null){
                         $('#enteredAtError')[0].innerHTML = "سال ورود به دانشگاه را وارد نمایید."
                         errors.push('enteredAt')

                         // $(firstNameError).css.color('color','red')
                       }else{
                       if(enteredAt.length!=4){
                         $('#enteredAtError')[0].innerHTML = "سال ورود به دانشگاه باید چهار رقمی باشد"
                       }else{
                         $('#enteredAtError')[0].innerHTML = ""
                         errors =errors.filter(item=>{
                           return item !== "enteredAt"


                         })
                       }
                        }
                        let isRelated = $('input[name="isRelated"]:checked').val();

                        console.log(isRelated)
  if(errors.length===0){
     $('.loading').removeClass("d-none");
          // console.log(firstName,lastName,proposal,job,grade,mobile,opinion,universities,enteredAt,future,isRelated)
          console.log("clicked")
          console.log(enteredAt,firstName,lastName,proposal,job,grade,mobile,opinion,universities,future,isRelated)
          console.log(firstName,lastName,proposal,job,grade,mobile,opinion,universities,enteredAt,future,isRelated.value)
                       $.post("store.php", {firstName: firstName, lastName: lastName,proposal:proposal,job:job,grade:grade,mobile:mobile,opinion:opinion,universities:universities,entered_at:enteredAt,future:future,isRelated:isRelated}, function(result){
                          if(result === "success"){
                            $('.loading').addClass("d-none");

              Swal.fire(
                'نظر شما ثبت گردید',
                'سپاس از همکاری شما',
                'success'
              )
//                                     window.location.replace("thanks.php");

            }else{
              $('.loading').addClass("d-none");

              Swal.fire({
                icon: 'error',
                title: 'خطا',
                text: 'متاسفانه خطایی رخ داده است.',
              })
            }
          });

                  }
// //           setTimeout(function (){
// //               $('.loading').addClass("d-none");
// //               console.log("done!");
// //             },5000)      
// // }
      
})

      })
    </script>
</body>
</html>